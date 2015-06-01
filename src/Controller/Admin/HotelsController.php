<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Hotels Controller
 *
 * @property \App\Model\Table\HotelsTable $Hotels
 */
class HotelsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('hotels', $this->paginate($this->Hotels));
        $this->set('_serialize', ['hotels']);
    }

    /**
     * View method
     *
     * @param string|null $id Hotel id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hotel = $this->Hotels->get($id, [
            'contain' => ['Employees']
        ]);
        $this->set('hotel', $hotel);
        $this->set('_serialize', ['hotel']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hotel = $this->Hotels->newEntity();
        if ($this->request->is('post')) {
            $hotel = $this->Hotels->patchEntity($hotel, $this->request->data);
            if ($this->Hotels->save($hotel)) {
                $this->Flash->success('The hotel has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The hotel could not be saved. Please, try again.');
            }
        }
        $this->set(compact('hotel'));
        $this->set('_serialize', ['hotel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hotel id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hotel = $this->Hotels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hotel = $this->Hotels->patchEntity($hotel, $this->request->data);
            if ($this->Hotels->save($hotel)) {
                $this->Flash->success('The hotel has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The hotel could not be saved. Please, try again.');
            }
        }
        $this->set(compact('hotel'));
        $this->set('_serialize', ['hotel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hotel id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hotel = $this->Hotels->get($id);
        if ($this->Hotels->delete($hotel)) {
            $this->Flash->success('The hotel has been deleted.');
        } else {
            $this->Flash->error('The hotel could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
