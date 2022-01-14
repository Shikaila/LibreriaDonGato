<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Entity\Libro;
use Phinx\Db\Action\Action;
use Cake\Datasource\ConnectionManager;
use DateTime;
use Cake\I18n\FrozenTime;

/**
 * Usuario Controller
 *
 * @property \App\Model\Table\UsuarioTable $Usuario
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsuarioController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $usuario = $this->paginate($this->Usuario);

        $this->set(compact('usuario'));
    }

    public function carrito()
    {
    }

    public function confirmadoPedido()
    {
        if ($this->request->is('post')) {
            $valor = $this->request->getData();
            $connection = ConnectionManager::get('default');
            $direccion = "";
            if ($valor['direccion'] === "") {
                $direccion = $connection->execute('SELECT direccion FROM usuario
                where idusuario = :id', ['id' => $this->request->getSession()->read("idusuario")])->fetchAll('assoc');
                $direccion = $direccion[0]["direccion"];
            } else {
                $direccion = $valor['direccion'];
            }

            if ($direccion === "") {
                $this->Flash->error('Error dirección envío');
                return $this->redirect("/home");
            }

            $time = FrozenTime::now();
            $fecha = $time->year . '-' . $time->month . '-' . $time->day;

            $result = $connection->execute('INSERT INTO pedido(id_usuario,fecha,direccion_envio,total) 
                                        VALUES (:idu,:fecha,:dir,:total)', [
                'idu' => $this->request->getSession()->read("idusuario"),
                'fecha' => $fecha,
                'dir' => $direccion,
                'total' => $this->request->getSession()->read("carrito")['total']
            ]);


            $idpedido = $connection->execute('SELECT idpedido FROM pedido
                                    where id_usuario = :id ORDER BY idpedido DESC LIMIT 1', ['id' => $this->request->getSession()->read("idusuario")])->fetchAll('assoc');

            $idpedido = $idpedido[0]['idpedido'];

            $carrito = $this->request->getSession()->read("carrito");
            foreach ($carrito as $numero => $informacion) {
                if ($numero != 'total') {
                    $connection->execute('INSERT INTO libro_pedido(id_libro, id_pedido, cantidad) 
                                        VALUES (:idl,:idp, :cant)', [
                        'idl' => $informacion['libro']['idlibro'],
                        'idp' => $idpedido,
                        'cant' => $informacion['cantidad']
                    ]);
                }
            }

            $carrito = [];
            $carrito = $this->request->getSession()->write("carrito", $carrito);
            $this->Flash->success('Compra Realizada');
            return $this->redirect("/home");
        }
    }

    public function iniciarSesion()
    {

        if ($this->request->is('post')) {
            $valor = $this->request->getData();
            if (isset($valor['correo']) && isset($valor['pass'])) {
                $this->Flash->error('Usuario o contraseña invalidos.');
            } else {
                $usuario = $this->Usuario->find('all', [
                    'conditions' => [
                        $valor
                    ],
                ])->toArray();
                if (empty($usuario)) {
                    $this->Flash->error('Usuario o contraseña invalidos.');
                } else {
                    //Se deja guardado la variable id que se utiliza en appController y el nombre
                    //Para poder poner en el menu el nombre del user.
                    //rol para saber si es admin
                    $this->request->getSession()->write("roles", $usuario[0]["roles"]);
                    $this->request->getSession()->write("idusuario", $usuario[0]["idusuario"]);
                    $this->request->getSession()->write("nombre", $usuario[0]["nombre"]);
                    $this->Flash->success('Se inicio sesion correctamente');
                    return $this->redirect("/home");
                }
            }
        }
    }

    public function eliminarCarrito()
    {
        $id = $this->request->getQuery("id");
        $carrito = $this->request->getSession()->read("carrito");
        unset($carrito[$id]);
        $this->request->getSession()->write("carrito", $carrito);
        return $this->redirect('/usuario/carrito');
    }

    public function misPedidos()
    {

        $connection = ConnectionManager::get('default');
        $pedidos = $connection->execute('SELECT * FROM pedido 
        INNER JOIN libro_pedido ON id_pedido = idpedido 
        INNER JOIN libro ON id_libro = idlibro
        inner join autor on libro.id_autor = autor.idautor
        where id_usuario = :id ORDER BY idpedido DESC', ['id' => $this->request->getSession()->read("idusuario")])->fetchAll('assoc');
        $this->set(compact('pedidos'));
    }


    public function comprar()
    {
        if ($this->request->is('post')) {
            $total = 0;
            $datos = $this->request->getData();
            $carrito = $this->request->getSession()->read("carrito");
            foreach ($carrito as $numero => $informacion) {

                if ($numero != 'total') {

                    $total += $informacion['libro']['precio'] * $datos[$numero];
                    $carrito[$numero]['cantidad'] = $datos[$numero];
                }
            }
            $carrito['total'] = $total;
            $this->request->getSession()->write("carrito", $carrito);
        }
        $idusuario = $this->request->getSession()->read("idusuario");
        $usuario = $this->Usuario->find('all', [
            'conditions' => [
                'idusuario' => $idusuario
            ],
        ])->toArray();
        $this->set(compact('usuario'));
    }

    public function add()
    {
        $usuario = $this->Usuario->newEmptyEntity();
        if ($this->request->is('post')) {
            $usuario = $this->Usuario->patchEntity($usuario, $this->request->getData());
            try {
                if ($this->Usuario->save($usuario)) {
                    $this->Flash->success(__('El usuario se ha guardado.'));
                    if ($this->request->getSession()->read("roles") === 1) {
                        return $this->redirect(['action' => 'index']);
                    } else {
                        return $this->redirect("/home");
                    }
                }
                $this->Flash->error(('El usuario no se pudo guardar, por favor vuelvalo a intentar.'));
            } catch (\Exception $e) {
                $this->Flash->error(('El usuario no se pudo guardar, por favor vuelvalo a intentar.'));
            }
        }
        $this->set(compact('usuario'));
    }

    public function anhadirCarro()
    {
        $id = $this->request->getQuery("id");
        $connection = ConnectionManager::get('default');
        $libro = $connection->execute('SELECT * FROM libro inner join autor on (libro.id_autor = autor.idautor)  
                                        where idlibro = :id', ['id' => $id])->fetchAll('assoc');

        $carrito = $this->request->getSession()->read("carrito");

        if ($carrito == []) {
            $carrito['total'] = 0;
        }

        if (array_key_exists($id, $carrito)) {
            $carrito[$id]['cantidad'] += 1;
        } else {
            $carrito[$id] = ['libro' => $libro[0], 'cantidad' => 1];
        }
        $this->request->getSession()->write("carrito", $carrito);
        $this->Flash->success(__('Añadido al carrito.'));
        $url = "/libro/ver?id=" . $id;
        return $this->redirect($url);
    }


    //----------------------Cerrar sesion----------------------
    public function cerrarSesion()
    {
        $this->request->getSession()->write("idusuario", "");
        $this->request->getSession()->write("roles", "");
        $this->request->getSession()->write("nombre", "");
        $this->request->getSession()->write("carrito", []);
        $this->redirect("/home");
    }


    /**
     * Edit method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuario = $this->Usuario->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuario->patchEntity($usuario, $this->request->getData());
            if ($this->request->getSession()->read("idusuario") === $usuario['idusuario']) {
                $this->request->getSession()->write("nombre", $usuario['nombre']);
            }
            if ($this->Usuario->save($usuario)) {
                $this->Flash->success(__('El usuario se ha guardado correctamente.'));
                return $this->redirect('/home');
            }

            $this->Flash->error(__('No se ha podido guardar el usuario, intentelo de nuevo.'));
        }
        $this->set(compact('usuario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuario->get($id);
        if ($this->Usuario->delete($usuario)) {
            $this->Flash->success(__('The usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
