<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Hotels Controller
 *
 * @property \App\Model\Table\HotelsTable $Hotels
 */
class HotelsController extends AppController
{

    public function isAuthorized($user) {

        // allows adminstrators (1) to all actions (*)
        $this->Authorizer->action(['*'], function($auth) {
            $auth->allowRole([1]);
        });

        // Moderators (2) are ALSO able to add posts
        $this->Authorizer->action(['dashboard'], function($auth) {
            $auth->allowRole([5]);
        });

        return $this->Authorizer->authorize();
    }

    /**
     * Dasboard method
     *
     * @return void
     */
    public function dashboard()
    {
        $this->loadModel('CoursesEmployees');

        //Total Certificates
        $query = $this->CoursesEmployees->find('all')
            ->where(['CoursesEmployees.completed' => true,
                'Employees.hotel_id' => $this->Auth->user('hotel.id')
            ])->contain(['Employees']);
        $number = $query->count();
        $this->set('totalCerts', $number);

        //Total open courses
        $query = $this->CoursesEmployees->find('all')
            ->where(['CoursesEmployees.completed' => false,
                'Employees.hotel_id' => $this->Auth->user('hotel.id')
            ])->contain(['Employees']);
        $number = $query->count();
        $this->set('totalOpen', $number);

        //5 Most recent in progress courses
        $options = [
            'conditions' => ['Employees.hotel_id' => $this->Auth->user('hotel.id'), 'CoursesEmployees.completed' => false],
            'limit' => 5,
            'contain' => ['Employees', 'Courses']
        ];
        $this->set('recentCourses', $this->CoursesEmployees->find('all', $options));

        //5 Most recent courses completed
        $options = [
            'conditions' => ['Employees.hotel_id' => $this->Auth->user('hotel.id'), 'CoursesEmployees.completed' => true],
            'limit' => 5,
            'contain' => ['Employees', 'Courses']
        ];
        $this->set('recentCerts', $this->CoursesEmployees->find('all', $options));

        //6 Most recent employees
        $options = [
            'conditions' => ['Employees.hotel_id' => $this->Auth->user('hotel.id')],
            'limit' => 5,
            'contain' => ['Courses']
        ];
        $this->set('recentEmployees', $this->CoursesEmployees->Employees->find('all', $options));

        // may not need
        $this->set('hotels', $this->paginate($this->Hotels));
        $this->set('_serialize', ['hotels']);
    }

}
