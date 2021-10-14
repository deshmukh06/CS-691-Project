<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // for all controllers in our application, make index and view
        // actions public, skipping the authentication check.

        $controllerName = $this->request->getParam('controller');
        $actionName = $this->request->getParam('action');

        if (in_array($controllerName, ['Login']) && in_array($actionName, ['index'])) {
            $this->Authentication->addUnauthenticatedActions(['index']);
        } else if (in_array($controllerName, ['Home', 'Users','ManageAccount']) && in_array($actionName, ['index', 'login', 'register','viewdetails','editaddress'])) {
            $this->Authentication->addUnauthenticatedActions(['index', 'login', 'register','viewdetails','editaddress']);
        } else {

        }
    }

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function constructClasses() {

    if(Configure::read('debug') >= 1):
    $this->components[] = 'DebugKit.Toolbar';
    endif;

    parent::constructClasses();
}
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');

        // Add this line to check authentication result and lock your site
        $this->loadComponent('Authentication.Authentication', []);
        $this->loadComponent('CommonFunctions');
        $this->loadComponent('Email');
    }
}
