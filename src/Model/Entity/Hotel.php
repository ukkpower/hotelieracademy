<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hotel Entity.
 */
class Hotel extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'name' => true,
        'logo' => true,
        'employees' => true,
    ];
}
