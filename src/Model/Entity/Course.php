<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity.
 */
class Course extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'course_lenght' => true,
        'course_files' => true,
        'course_modules' => true,
        'employees' => true,
    ];
}
