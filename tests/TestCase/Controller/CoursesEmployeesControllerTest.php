<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CoursesEmployeesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\CoursesEmployeesController Test Case
 */
class CoursesEmployeesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'CoursesEmployees' => 'app.courses_employees',
        'Employees' => 'app.employees',
        'Courses' => 'app.courses',
        'CourseFiles' => 'app.course_files',
        'CourseModules' => 'app.course_modules'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
