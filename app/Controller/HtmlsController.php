<?php
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class HtmlsController extends Controller {
    public function beforeFilter() {
        parent::beforeFilter();
         $this->layout = 'admin';
  }
    public function index()
    {
        $this->layout = 'html';
    }

}