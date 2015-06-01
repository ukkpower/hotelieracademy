<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HotelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HotelsTable Test Case
 */
class HotelsTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'Hotels' => 'app.hotels',
        'Employees' => 'app.employees',
        'Courses' => 'app.courses',
        'CourseFiles' => 'app.course_files',
        'CourseModules' => 'app.course_modules',
        'CoursesEmployees' => 'app.courses_employees'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Hotels') ? [] : ['className' => 'App\Model\Table\HotelsTable'];
        $this->Hotels = TableRegistry::get('Hotels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Hotels);

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
}
