<?php

declare(strict_types=1);

namespace App\Controller;
use Cake\Datasource\ConnectionManager;

/**
 * Libro Controller
 *
 * @property \App\Model\Table\LibroTable $Libro
 * @method \App\Model\Entity\Libro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LibroController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $libro = $this->paginate($this->Libro);

        $this->set(compact('libro'));
    }


    public function subirComentario(){
        $id_libro = $this->request->getQuery("idlibro");
        $id_usuario =$this->request->getQuery("idusuario");
        
        if ($this->request->is('post')) {

            $valor = $this->request->getData();
            if ($valor['comentario'] !== "" && isset($valor['valoracion'])) {
                $connection = ConnectionManager::get('default');
                $connection->execute('INSERT INTO comentario(id_usuario,id_libro,texto_comentario,valoracion) 
                                        VALUES (:idu,:idl,:com,:val)', ['idu' => $id_usuario,'idl' => $id_libro,'com' => $valor['comentario'],
                                        'val' => $valor['valoracion']]);
                $this->Flash->success('Comentario Añadido');
                
            }else{
                $this->Flash->error('Mal realizado el comentario');
            }
            
            $url = "/libro/ver?id=".$id_libro;
            return $this->redirect($url);

        }
        

    }

    public function ver(){
        $id = $this->request->getQuery("id");
        $connection = ConnectionManager::get('default');
        //selecciona todos los parámetros del libro con :id y se lo pasamos con $id
        $libro = $connection->execute('SELECT * FROM libro inner join autor on (libro.id_autor = autor.idautor)  where idlibro = :id', ['id' => $id])->fetchAll('assoc');
        $libro = $libro[0];
        $categoria = $connection->execute('SELECT * FROM categoria_libro inner join categoria on (idcategoria = id_categoria) where id_libro = :id', ['id' => $id])->fetchAll('assoc');
        $comentarios = $connection->execute('SELECT * FROM comentario inner join usuario on (id_usuario = idusuario) where :id = id_libro', ['id' => $id])->fetchAll('assoc');
        
        $this->set(compact('libro', 'categoria', 'comentarios'));

    }
    
    public function busqueda()
    {
        $busquedas = $this->request->getQuery("busqueda");
        $busquedas = '%' . strtoupper($busquedas) . '%';
        $connection = ConnectionManager::get('default');
        $busqueda = $connection->execute('SELECT * FROM libro inner join autor on (libro.id_autor = autor.idautor) 
                                         where (UPPER(titulo_libro) LIKE :busquedas or UPPER(nombre) LIKE :busquedas);', ['busquedas' => $busquedas])->fetchAll('assoc');
        
        $this->set(compact("busqueda"));
    }
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $libro = $this->Libro->newEmptyEntity();
        if ($this->request->is('post')) {
            $libro = $this->Libro->patchEntity($libro, $this->request->getData());
            if ($this->Libro->save($libro)) {
                $this->Flash->success(__('The libro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The libro could not be saved. Please, try again.'));
        }
        $categoria = $this->Libro->Categoria->find('list', ['limit' => 200])->all();
        $pedido = $this->Libro->Pedido->find('list', ['limit' => 200])->all();
        $this->set(compact('libro', 'categoria', 'pedido'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Libro id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $libro = $this->Libro->get($id);
        if ($this->Libro->delete($libro)) {
            $this->Flash->success(__('The libro has been deleted.'));
        } else {
            $this->Flash->error(__('The libro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
