<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Auth\DefaultPasswordHasher;
use Cake\Datasource\ConnectionManager;
use Cake\Event\EventInterface;

/**
 * Login Controller
 *
 * @method \App\Model\Entity\Login[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LoginController extends AppController
{
    public function startup(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // for all controllers in our application, make index and view
        // actions public, skipping the authentication check.
        $this->Authentication->addUnauthenticatedActions(['index']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->set("title_for_layout", env('APP_NAME')." - Login");
        $this->render('/Login/index', 'login');

        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();

        if ($result->isValid()) {
            $this->loadComponent('CommonFunctions');

            $userDetails = $result->getData();

            if ($userDetails->acc_verified == 1) {
                // redirect to /dashboard after login success
                $this->session = $this->request->getSession();
                $this->session->write('SESS_USER', $userDetails);

                $permissions = $this->CommonFunctions->getRolePermissions($userDetails->role_id);
                $this->session->write('SESS_USER_PERMISSIONS', $permissions);

                $this->redirect(['controller' => 'Dashboard', 'action' => 'index']);
            } else {
                $this->Authentication->logout();
                $this->Flash->error(__('Please verify your account to Login.'));
                return $this->redirect(['controller' => 'Login', 'action' => 'index']);
            }
        }

        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid username or password'));
        }
    }

    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $this->Authentication->logout();
            $this->session = $this->request->getSession();
            $this->session->delete('SESS_USER');
            $this->session->delete('SESS_USER_PERMISSIONS');
            return $this->redirect(['controller' => 'Login', 'action' => 'index']);
        }
    }
}
