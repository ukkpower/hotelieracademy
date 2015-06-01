<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CourseFiles Controller
 *
 * @property \App\Model\Table\CourseFilesTable $CourseFiles
 */
class CourseFilesController extends AppController
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
        $this->set('courseFiles', $this->paginate($this->CourseFiles));
        $this->set('_serialize', ['courseFiles']);
    }

    /**
     * View method
     *
     * @param string|null $id Course File id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $courseFile = $this->CourseFiles->get($id, [
            'contain' => ['Courses']
        ]);
        $this->set('courseFile', $courseFile);
        $this->set('_serialize', ['courseFile']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $courseFile = $this->CourseFiles->newEntity();
        if ($this->request->is('post')) {
            $courseFile = $this->CourseFiles->patchEntity($courseFile, $this->request->data);
            if ($this->CourseFiles->save($courseFile)) {
                $this->Flash->success('The course file has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The course file could not be saved. Please, try again.');
            }
        }
        $courses = $this->CourseFiles->Courses->find('list', ['limit' => 200]);
        $this->set(compact('courseFile', 'courses'));
        $this->set('_serialize', ['courseFile']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Course File id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $courseFile = $this->CourseFiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $courseFile = $this->CourseFiles->patchEntity($courseFile, $this->request->data);
            if ($this->CourseFiles->save($courseFile)) {
                $this->Flash->success('The course file has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The course file could not be saved. Please, try again.');
            }
        }
        $courses = $this->CourseFiles->Courses->find('list', ['limit' => 200]);
        $this->set(compact('courseFile', 'courses'));
        $this->set('_serialize', ['courseFile']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Course File id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $courseFile = $this->CourseFiles->get($id);
        if ($this->CourseFiles->delete($courseFile)) {
            $this->Flash->success('The course file has been deleted.');
        } else {
            $this->Flash->error('The course file could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
