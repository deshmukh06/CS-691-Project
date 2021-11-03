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
class AdminController extends AppController
{
	public function adminlogin(){
    	
	$this->render('/Admin/adminlogin', 'adminlogin');
	}

	public function dashboard(){
		$this->render('/Admin/dashboard', 'dashboard');
	}

	public function cussum(){
		$this->render('/Admin/cussum', 'cussum');
	}

	public function mussum(){
		$this->render('/Admin/mussum', 'mussum');
	}

}