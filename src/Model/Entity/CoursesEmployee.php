<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CoursesEmployee Entity.
 */
class CoursesEmployee extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'employee_id' => true,
        'course_id' => true,
        'course_module_id' => true,
        'progress' => true,
        'completed' => true,
        'employee' => true,
        'course' => true,
        'course_module' => true,
    ];
}
