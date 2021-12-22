<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Autor Controller
 *
 * @property \App\Model\Table\AutorTable $Autor
 * @method \App\Model\Entity\Autor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AutorController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $autor = $this->paginate($this->Autor);

        $this->set(compact('autor'));
    }

    /**
     * View method
     *
     * @param string|null $id Autor id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $autor = $this->Autor->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('autor'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $autor = $this->Autor->newEmptyEntity();
        if ($this->request->is('post')) {
            $autor = $this->Autor->patchEntity($autor, $this->request->getData());
            if ($this->Autor->save($autor)) {
                $this->Flash->success(__('The autor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The autor could not be saved. Please, try again.'));
        }
        $this->set(compact('autor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Autor id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $autor = $this->Autor->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $autor = $this->Autor->patchEntity($autor, $this->request->getData());
            if ($this->Autor->save($autor)) {
                $this->Flash->success(__('The autor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The autor could not be saved. Please, try again.'));
        }
        $this->set(compact('autor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Autor id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $autor = $this->Autor->get($id);
        if ($this->Autor->delete($autor)) {
            $this->Flash->success(__('The autor has been deleted.'));
        } else {
            $this->Flash->error(__('The autor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
