<?php
namespace App\Model\Table;

use CakeManager\Model\Table\UsersTable as BaseUsersTable;
use Cake\Validation\Validator;

/**
 * Users Model
 */
class UsersTable extends BaseUsersTable
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->hasOne('Employees', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasOne('Hotels', [
            'foreignKey' => 'user_id'
        ]);
    }
}
