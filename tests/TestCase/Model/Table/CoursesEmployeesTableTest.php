<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoursesEmployeesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoursesEmployeesTable Test Case
 */
class CoursesEmployeesTableTest extends TestCase
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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CoursesEmployees') ? [] : ['className' => 'App\Model\Table\CoursesEmployeesTable'];
        $this->CoursesEmployees = TableRegistry::get('CoursesEmployees', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CoursesEmployees);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
