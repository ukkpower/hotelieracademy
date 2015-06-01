<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CoursesEmployees Controller
 *
 * @property \App\Model\Table\CoursesEmployeesTable $CoursesEmployees
 */
class CoursesEmployeesController extends AppController
{
    public function isAuthorized($user) {

        // allows adminstrators (1) to all actions (*)
        $this->Authorizer->action(['*'], function($auth) {
            $auth->allowRole([1]);
        });

        // allow hotels
        $this->Authorizer->action(['certificate', 'downloadCertificate'], function($auth) {
            $auth->allowRole([5]);
        });

        // allow employees
        $this->Authorizer->action(['index', 'myCertificate'], function($auth) {
            $auth->allowRole([6]);
        });

        return $this->Authorizer->authorize();
    }

    /**
     * Certificate method used by hotel
     *
     * @return void
     */
    public function certificate() {
        $this->paginate = [
            'conditions' => ['CoursesEmployees.completed' => true, 'Employees.hotel_id' => $this->Auth->user('hotel.id')],
            'contain' => ['Employees', 'Courses']
        ];
        $this->set('coursesEmployees', $this->paginate($this->CoursesEmployees));
    }

    /**
     * myCertificate method used by employee
     *
     * @return void
     */
    public function myCertificate() {
        $this->paginate = [
            'conditions' => ['CoursesEmployees.completed' => true, 'Employees.user_id' => $this->Auth->user('id')],
            'contain' => 'Employees'
        ];
        $this->set('coursesEmployees', $this->paginate($this->CoursesEmployees));
    }

    /**
     * Index method used by employee
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees', 'Courses', 'CourseModules']
        ];
        $this->set('coursesEmployees', $this->paginate($this->CoursesEmployees));
        $this->set('_serialize', ['coursesEmployees']);
    }

    /**
     * View method
     *
     * @param string|null $id Courses Employee id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coursesEmployee = $this->CoursesEmployees->get($id, [
            'contain' => ['Employees', 'Courses', 'CourseModules']
        ]);
        $this->set('coursesEmployee', $coursesEmployee);
        $this->set('_serialize', ['coursesEmployee']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coursesEmployee = $this->CoursesEmployees->newEntity();
        if ($this->request->is('post')) {
            $coursesEmployee = $this->CoursesEmployees->patchEntity($coursesEmployee, $this->request->data);
            if ($this->CoursesEmployees->save($coursesEmployee)) {
                $this->Flash->success('The courses employee has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The courses employee could not be saved. Please, try again.');
            }
        }
        $employees = $this->CoursesEmployees->Employees->find('list', ['limit' => 200]);
        $courses = $this->CoursesEmployees->Courses->find('list', ['limit' => 200]);
        $courseModules = $this->CoursesEmployees->CourseModules->find('list', ['limit' => 200]);
        $this->set(compact('coursesEmployee', 'employees', 'courses', 'courseModules'));
        $this->set('_serialize', ['coursesEmployee']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Courses Employee id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coursesEmployee = $this->CoursesEmployees->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coursesEmployee = $this->CoursesEmployees->patchEntity($coursesEmployee, $this->request->data);
            if ($this->CoursesEmployees->save($coursesEmployee)) {
                $this->Flash->success('The courses employee has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The courses employee could not be saved. Please, try again.');
            }
        }
        $employees = $this->CoursesEmployees->Employees->find('list', ['limit' => 200]);
        $courses = $this->CoursesEmployees->Courses->find('list', ['limit' => 200]);
        $courseModules = $this->CoursesEmployees->CourseModules->find('list', ['limit' => 200]);
        $this->set(compact('coursesEmployee', 'employees', 'courses', 'courseModules'));
        $this->set('_serialize', ['coursesEmployee']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Courses Employee id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coursesEmployee = $this->CoursesEmployees->get($id);
        if ($this->CoursesEmployees->delete($coursesEmployee)) {
            $this->Flash->success('The courses employee has been deleted.');
        } else {
            $this->Flash->error('The courses employee could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Download Certificate PDF method
     *
     * @param string|null $id Courses Employee id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function downloadCertificate($id=null) {

        $coursesEmployee = $this->CoursesEmployees->get($id, [
            'contain' => ['Employees', 'Courses'],
            'fields' => ['Employees.name', 'Courses.name']
        ]);

        $employeeName = $coursesEmployee->Employees->name;
        $courseName = $coursesEmployee->Courses->name;
        $fdf = '%FDF-1.2
1 0 obj<</FDF<< /Fields[
<</T(employee_name)/V('.$employeeName.')>>
<</T(course_name)/V('.$courseName.')>>
] >> >>
endobj
trailer
<</Root 1 0 R>>
%%EOF';

        file_put_contents(WWW_ROOT . 'files/certificate/data.fdf', $fdf);
        passthru("/opt/pdflabs/pdftk/bin/pdftk /Users/keithpower/Documents/Website\ Projects/hotelieracademy/v2/local/webroot/files/certificate/template.pdf fill_form /Users/keithpower/Documents/Website\ Projects/hotelieracademy/v2/local/webroot/files/certificate/data.fdf output /Users/keithpower/Documents/Website\ Projects/hotelieracademy/v2/local/webroot/files/certificate/certificate.pdf flatten");

        $filePath = WWW_ROOT . 'files/certificate/certificate.pdf';
        $this->response->file(
            $filePath,
            array('download' => true)
        );

        return $this->response;

    }
}
