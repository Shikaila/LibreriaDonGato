<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Editorial Controller
 *
 * @property \App\Model\Table\EditorialTable $Editorial
 * @method \App\Model\Entity\Editorial[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EditorialController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $editorial = $this->paginate($this->Editorial);

        $this->set(compact('editorial'));
    }

    /**
     * View method
     *
     * @param string|null $id Editorial id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $editorial = $this->Editorial->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('editorial'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $editorial = $this->Editorial->newEmptyEntity();
        if ($this->request->is('post')) {
            $editorial = $this->Editorial->patchEntity($editorial, $this->request->getData());
            if ($this->Editorial->save($editorial)) {
                $this->Flash->success(__('The editorial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The editorial could not be saved. Please, try again.'));
        }
        $this->set(compact('editorial'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Editorial id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $editorial = $this->Editorial->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $editorial = $this->Editorial->patchEntity($editorial, $this->request->getData());
            if ($this->Editorial->save($editorial)) {
                $this->Flash->success(__('The editorial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The editorial could not be saved. Please, try again.'));
        }
        $this->set(compact('editorial'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Editorial id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $editorial = $this->Editorial->get($id);
        if ($this->Editorial->delete($editorial)) {
            $this->Flash->success(__('The editorial has been deleted.'));
        } else {
            $this->Flash->error(__('The editorial could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
