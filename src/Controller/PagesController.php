<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use App\Form\RequestForm;
use App\Form\ContactForm;
use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display()
    {
        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
    }

    public function home() {
        $this->set('title', 'Hotel & Hospitality Online Training - Hotelier Academy');
        $this->set('description_for_layout','Hotel training solution to manage and consistently deliver staff training needs through cost effective online video courses.');
        $this->layout = 'website';
    }

    public function trainingCourses() {
        $this->set('title', 'Hotel & Hospitality Online Training - Hotelier Academy');
        $this->set('description_for_layout','Delivering low cost, fast consistent training through an easy to use on demand video training platform. Hotelier Academy provides high quality training that will immediately impact your hotel and deliver poweriful results.');
        $this->layout = 'website';
    }

    public function features() {
        $this->set('title', 'Learning Managment Software Features - Hotelier Academy');
        $this->set('description_for_layout','The Hotelier Academy management system is a fully comprehensive system that enables hotel’s to effectively manage training activity within their organisation. This simple but poweriful management system will deliver effective training programmes with ease. With the flexibility that Hotelier Academy offers, training can be done anytime, anywhere through the online platform.');
        $this->layout = 'website';
    }

    public function contact() {
        $contact = new ContactForm();
        $this->set('contact', $contact);
        $this->set('title', 'Learning Managment Software Features - Hotelier Academy');
        $this->set('description_for_layout','Were are here to help, drop us a line to find out more. We are located in Waterford, Ireland.');
        $this->layout = 'website';
    }

    public function requestDemo(){

        $this->request->allowMethod('ajax');

        $form = new RequestForm();
        if ($this->request->is('post')) {
            if ($form->execute($this->request->data)) {
                $data = array(
                    'status' => 'successful'
                );
            } else {
                $this->response->statusCode(500);
            }
            $this->set(compact('data')); // Pass $data to the view
            $this->set('_serialize', 'data');
        }

    }

    public function contactForm(){

        $this->request->allowMethod('ajax');

        $form = new ContactForm();
        if ($this->request->is('post')) {
            if ($form->execute($this->request->data)) {
                $data = array(
                    'status' => 'successful'
                );
            } else {
                $this->response->statusCode(500);
            }
            $this->set(compact('data')); // Pass $data to the view
            $this->set('_serialize', 'data');
        }

    }
}
