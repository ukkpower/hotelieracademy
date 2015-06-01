<?php
namespace App\Model\Table;

use App\Model\Entity\CoursesEmployee;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CoursesEmployees Model
 */
class CoursesEmployeesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('courses_employees');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Employees', [
            'foreignKey' => 'employee_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Courses', [
            'foreignKey' => 'course_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CourseModules', [
            'foreignKey' => 'course_module_id',
            'joinType' => 'INNER'
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
            ->add('progress', 'valid', ['rule' => 'numeric'])
            ->requirePresence('progress', 'create')
            ->notEmpty('progress')
            ->add('completed', 'valid', ['rule' => 'boolean'])
            ->requirePresence('completed', 'create')
            ->notEmpty('completed');

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
        $rules->add($rules->existsIn(['employee_id'], 'Employees'));
        $rules->add($rules->existsIn(['course_id'], 'Courses'));
        $rules->add($rules->existsIn(['course_module_id'], 'CourseModules'));
        return $rules;
    }
}
