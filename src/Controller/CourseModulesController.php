<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CourseModules Controller
 *
 * @property \App\Model\Table\CourseModulesTable $CourseModules
 */
class CourseModulesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Courses']
        ];
        $this->set('courseModules', $this->paginate($this->CourseModules));
        $this->set('_serialize', ['courseModules']);
    }

    /**
     * View method
     *
     * @param string|null $id Course Module id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $courseModule = $this->CourseModules->get($id, [
            'contain' => ['Courses', 'CoursesEmployees']
        ]);
        $this->set('courseModule', $courseModule);
        $this->set('_serialize', ['courseModule']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $courseModule = $this->CourseModules->newEntity();
        if ($this->request->is('post')) {
            $courseModule = $this->CourseModules->patchEntity($courseModule, $this->request->data);
            if ($this->CourseModules->save($courseModule)) {
                $this->Flash->success('The course module has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The course module could not be saved. Please, try again.');
            }
        }
        $courses = $this->CourseModules->Courses->find('list', ['limit' => 200]);
        $this->set(compact('courseModule', 'courses'));
        $this->set('_serialize', ['courseModule']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Course Module id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $courseModule = $this->CourseModules->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $courseModule = $this->CourseModules->patchEntity($courseModule, $this->request->data);
            if ($this->CourseModules->save($courseModule)) {
                $this->Flash->success('The course module has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The course module could not be saved. Please, try again.');
            }
        }
        $courses = $this->CourseModules->Courses->find('list', ['limit' => 200]);
        $this->set(compact('courseModule', 'courses'));
        $this->set('_serialize', ['courseModule']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Course Module id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $courseModule = $this->CourseModules->get($id);
        if ($this->CourseModules->delete($courseModule)) {
            $this->Flash->success('The course module has been deleted.');
        } else {
            $this->Flash->error('The course module could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
