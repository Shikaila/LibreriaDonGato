<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Comentario Controller
 *
 * @property \App\Model\Table\ComentarioTable $Comentario
 * @method \App\Model\Entity\Comentario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ComentarioController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $comentario = $this->paginate($this->Comentario);

        $this->set(compact('comentario'));
    }

    /**
     * View method
     *
     * @param string|null $id Comentario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comentario = $this->Comentario->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('comentario'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $comentario = $this->Comentario->newEmptyEntity();
        if ($this->request->is('post')) {
            $comentario = $this->Comentario->patchEntity($comentario, $this->request->getData());
            if ($this->Comentario->save($comentario)) {
                $this->Flash->success(__('The comentario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comentario could not be saved. Please, try again.'));
        }
        $this->set(compact('comentario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Comentario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comentario = $this->Comentario->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comentario = $this->Comentario->patchEntity($comentario, $this->request->getData());
            if ($this->Comentario->save($comentario)) {
                $this->Flash->success(__('The comentario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comentario could not be saved. Please, try again.'));
        }
        $this->set(compact('comentario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Comentario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comentario = $this->Comentario->get($id);
        if ($this->Comentario->delete($comentario)) {
            $this->Flash->success(__('The comentario has been deleted.'));
        } else {
            $this->Flash->error(__('The comentario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
