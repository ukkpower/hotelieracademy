<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use Cake\Network\Email\Email;

class RequestForm extends Form
{

    protected function _buildSchema(Schema $schema)
    {
        return $schema->addField('name', 'string')
        ->addField('email', ['type' => 'string'])
        ->addFeild('company', ['type' => 'string'])
        ->addField('phone', ['type' => 'text']);
    }

    protected function _buildValidator(Validator $validator)
    {
        return $validator->add('name', 'length', [
        'rule' => ['minLength', 5],
        'message' => 'A name is required'
        ])->add('email', 'format', [
        'rule' => 'email',
        'message' => 'A valid email address is required',
        ])->add('phone', 'length', [
        'rule' => ['minLength', 5],
        'message' => 'A phone number is required']);
    }

    protected function _execute(array $data)
    {
        // Send an email.
        $email = new Email('default');
        $email->emailFormat('html');
        $email->template('requestDemo')->viewVars( array('userName' => $data['name'],
            'userCompany' => $data['company'],
            'userEmail' => $data['email'],
            'userPhone' => $data['phone']));

        $email->from('info@hotelieracademy.com');
        $email->to($data['email']);
        $email->bcc('keith@ingemit.com');
        $email->subject('Hotelier Academy Demo Request Submission');
        if ($email->send()) {
            return true;
        }
        else {
            return false;
        }
    }
}