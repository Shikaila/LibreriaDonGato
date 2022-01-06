<?php
declare(strict_types=1);

namespace App\Controller;

use Phinx\Db\Action\Action;

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

    /**
     * View method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuario = $this->Usuario->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('usuario'));
    }

    public function iniciarSesion(){
        
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

    //----------------------Cerrar sesion----------------------
    public function cerrarSesion(){
        $this->request->getSession()->write("idusuario","");
        $this->request->getSession()->write("roles", "");
        $this->request->getSession()->write("nombre", "");
        $this->redirect("/home");
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuario = $this->Usuario->newEmptyEntity();
        if ($this->request->is('post')) {
            $usuario = $this->Usuario->patchEntity($usuario, $this->request->getData());
            try{
            if ($this->Usuario->save($usuario)) {
                $this->Flash->success(__('El usuario se ha guardado.'));
                if($this->request->getSession()->read("roles") === 1){
                    return $this->redirect(['action' => 'index']);
                }else{
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
            if ($this->Usuario->save($usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuario could not be saved. Please, try again.'));

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
