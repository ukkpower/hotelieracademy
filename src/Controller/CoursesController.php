<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Courses Controller
 *
 * @property \App\Model\Table\CoursesTable $Courses
 */
class CoursesController extends AppController
{
    public function isAuthorized($user) {

        // allows adminstrators (1) to all actions (*)
        $this->Authorizer->action(['*'], function($auth) {
            $auth->allowRole([1]);
        });

        // allows hotels
        $this->Authorizer->action(['index', 'view'], function($auth) {
            $auth->allowRole([5]);
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
        $query = $this->Courses->find('all')->contain(['CourseModules']);
        $this->set('courses', $query);
        $this->set('_serialize', ['courses']);
    }

    /**
     * View method
     *
     * @param string|null $id Course id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $course = $this->Courses->get($id, [
            'contain' => ['Employees', 'CourseFiles', 'CourseModules']
        ]);
        $this->set('course', $course);
        $this->set('_serialize', ['course']);
    }

}
