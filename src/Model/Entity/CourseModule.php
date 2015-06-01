<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CourseModule Entity.
 */
class CourseModule extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'course_id' => true,
        'name' => true,
        'type' => true,
        'video_url' => true,
        'video_lenght' => true,
        'course' => true,
        'courses_employees' => true,
    ];
}
