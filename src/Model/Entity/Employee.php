<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity.
 */
class Employee extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'hotel_id' => true,
        'name' => true,
        'email' => true,
        'surname' => true,
        'employee_num' => true,
        'hotel' => true,
        'courses' => true,
    ];
}
