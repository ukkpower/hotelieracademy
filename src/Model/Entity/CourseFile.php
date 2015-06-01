<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CourseFile Entity.
 */
class CourseFile extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'type' => true,
        'course_id' => true,
        'course' => true,
    ];
}
