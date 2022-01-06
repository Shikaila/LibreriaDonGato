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

    /**
     * View method
     *
     * @param string|null $id Libro id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $libro = $this->Libro->get($id, [
            'contain' => ['Categoria', 'Pedido'],
        ]);

        $this->set(compact('libro'));
    }

    public function ver(){
        $id = $this->request->getQuery("id");
        dd($id);
    }
    
    public function busqueda()
    {
        $busquedas = $this->request->getQuery("busqueda");
        $busquedas = '%' . strtoupper($busquedas) . '%';
        $connection = ConnectionManager::get('default');
        $results = $connection->execute('SELECT * FROM libreria.libro inner join autor on (libro.id_autor = autor.idautor) 
                                         where (UPPER(titulo_libro) LIKE :tit or UPPER(nombre) LIKE :tit);', ['tit' => $busquedas])->fetchAll('assoc');
        
        $this->request->getSession()->write("busqueda", $results);
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
     * Edit method
     *
     * @param string|null $id Libro id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $libro = $this->Libro->get($id, [
            'contain' => ['Categoria', 'Pedido'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
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
