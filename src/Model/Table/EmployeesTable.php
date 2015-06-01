<?php
namespace App\Model\Table;

use App\Model\Entity\Employee;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employees Model
 */
class EmployeesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('employees');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasOne('Users', [
            'foreignKey' => 'id'
        ]);
        $this->belongsTo('Hotels', [
            'foreignKey' => 'hotel_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Courses', [
            'foreignKey' => 'employee_id',
            'targetForeignKey' => 'course_id',
            'joinTable' => 'courses_employees'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email')
            ->requirePresence('surname', 'create')
            ->notEmpty('surname')
            ->requirePresence('employee_num', 'create')
            ->notEmpty('employee_num');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['hotel_id'], 'Hotels'));
        return $rules;
    }
}
