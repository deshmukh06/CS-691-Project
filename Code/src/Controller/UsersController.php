<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\ORM\TableRegistry;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    public function register($roleId) {
        $this->set(compact('roleId'));
        $this->render('/Users/register', 'login');

        if ($this->request->is('post')) {
            $receivedData = $this->request->getData();

            if ($receivedData['role_id'] === md5((string) CUSTOMER_ROLE_ID)) {
                $receivedData['role_id'] = CUSTOMER_ROLE_ID;
            } else if ($receivedData['role_id'] === md5((string) MUSICIAN_ROLE_ID)) {
                $receivedData['role_id'] = MUSICIAN_ROLE_ID;
            } else {

            }

            $users = $this->Users->newEmptyEntity();
            $users = $this->Users->patchEntity($users, $receivedData);

            if ($this->Users->save($users)) {
                $this->Flash->success(__('You have been successfully registered!'));

                return $this->redirect(['action' => 'login', $roleId]);
            } else {
                $error = $users->getError('email');
                $error_msg =  'Something went wrong. Please, try again.';

                if (isset($error) && (isset($error['_isUnique']) && !empty($error['_isUnique']))) {
                    $error_msg = $receivedData['email'] . " is already registered with UnitedTune!";
                }

                $this->Flash->error(__($error_msg));
                return $this->redirect(['controller' => 'users', 'action' => 'register', $roleId]);
            }
        }
    }

    public function login($roleId) {

        $roleId = (isset($roleId) && !empty($roleId)) ? $roleId : md5((string) CUSTOMER_ROLE_ID);

        $this->set(compact('roleId'));
        $this->render('/Users/login', 'login');


        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();

        if ($result->isValid()) {
            $userDetails = $result->getData();

            if ($userDetails->status == 1) {
                // redirect to /dashboard after login success
                $this->session = $this->request->getSession();
                $this->session->write('SESS_USER', $userDetails);

                $this->redirect(['controller' => 'Home', 'action' => 'index']);
            } else {
                $this->Authentication->logout();
                $this->Flash->error(__('Your account is not active! Please contact customer care for support!'));
                return $this->redirect(['controller' => 'users', 'action' => 'login']);
            }
        }

        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid email or password'));
        }
    }

    public function account($userId) {
        $this->render('/Users/account', 'login');

        if (!empty($userId)) {
            $loginUser = $this->Users->get($userId);
            //echo '<pre>';print_r($loginUser);exit;
        } else {
            $this->Flash->error(__('User details not found! Please try again!'));
            $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }
    }

    public function logout() {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $userDetails = $result->getData();
            $roleId = (isset($userDetails['role_id']) && !empty($userDetails['role_id'])) ? md5((string) $userDetails['role_id']) : md5((string) CUSTOMER_ROLE_ID);

            $this->Authentication->logout();
            $this->session = $this->request->getSession();
            $this->session->delete('SESS_USER');
            $this->session->delete('SESS_USER_PERMISSIONS');
            return $this->redirect(['controller' => 'Users', 'action' => 'login', $roleId]);
        }
    }  
    
   
}