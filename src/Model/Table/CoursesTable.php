<?php
namespace App\Model\Table;

use App\Model\Entity\Course;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Courses Model
 */
class CoursesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('courses');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->hasMany('CourseFiles', [
            'foreignKey' => 'course_id'
        ]);
        $this->hasMany('CourseModules', [
            'foreignKey' => 'course_id'
        ]);
        $this->belongsToMany('Employees', [
            'foreignKey' => 'course_id',
            'targetForeignKey' => 'employee_id',
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
            ->add('course_lenght', 'valid', ['rule' => 'time'])
            ->requirePresence('course_lenght', 'create')
            ->notEmpty('course_lenght');

        return $validator;
    }
}
