<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Employees Controller
 *
 * @property \App\Model\Table\EmployeesTable $Employees
 */
class EmployeesController extends AppController
{
    public function isAuthorized($user) {

        // allows adminstrators (1) to all actions (*)
        $this->Authorizer->action(['*'], function($auth) {
            $auth->allowRole([1]);
        });

        // allow hotels
        $this->Authorizer->action(['index', 'add', 'view', 'edit'], function($auth) {
            $auth->allowRole([5]);
        });

        // allow employees
        $this->Authorizer->action(['dashboard'], function($auth) {
            $auth->allowRole([6]);
        });

        return $this->Authorizer->authorize();
    }
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Hotels']
        ];
        $this->set('employees', $this->paginate($this->Employees));
        $this->set('_serialize', ['employees']);
    }

    /**
     * View method
     *
     * @param string|null $id Employee id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => ['Users', 'Hotels', 'Courses']
        ]);
        $this->set('employee', $employee);
        $this->set('_serialize', ['employee']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $employee = $this->Employees->newEntity();
        if ($this->request->is('post')) {
            $employee = $this->Employees->patchEntity($employee, $this->request->data);
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('The employee has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The employee could not be saved. Please, try again.'));
            }
        }
        $users = $this->Employees->Users->find('list', ['limit' => 200]);
        $hotels = $this->Employees->Hotels->find('list', ['limit' => 200]);
        $courses = $this->Employees->Courses->find('list', ['limit' => 200]);
        $this->set(compact('employee', 'users', 'hotels', 'courses'));
        $this->set('_serialize', ['employee']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Employee id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $employee = $this->Employees->get($id, [
            'contain' => ['Courses']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $employee = $this->Employees->patchEntity($employee, $this->request->data);
            if ($this->Employees->save($employee)) {
                $this->Flash->success(__('The employee has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The employee could not be saved. Please, try again.'));
            }
        }
        $users = $this->Employees->Users->find('list', ['limit' => 200]);
        $hotels = $this->Employees->Hotels->find('list', ['limit' => 200]);
        $courses = $this->Employees->Courses->find('list', ['limit' => 200]);
        $this->set(compact('employee', 'users', 'hotels', 'courses'));
        $this->set('_serialize', ['employee']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Employee id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $employee = $this->Employees->get($id);
        if ($this->Employees->delete($employee)) {
            $this->Flash->success(__('The employee has been deleted.'));
        } else {
            $this->Flash->error(__('The employee could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
