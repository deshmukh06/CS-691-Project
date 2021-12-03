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

	public function managetickets(){
		$this->render('/Admin/managetickets', 'managetickets');
	}

	public function managecustomers(){
		$this->render('/Admin/managecustomers', 'managecustomers');
	}

	public function deletecustomers(){
		$this->render('/Admin/deletecustomers', 'deletecustomers');
	}

	public function generatePromocode(){
		$this->render('/Admin/generate_promocode', 'generate_promocode');
	}
	public function newpromocode(){
		$this->render('/Admin/newpromocode', 'newpromocode');
	}
	public function activepromocode(){
		$this->render('/Admin/activepromocode', 'activepromocode');
	}
	public function manualbookings(){
		$this->render('/Admin/manualbookings', 'manualbookings');
	}
	public function onlinebookings(){
		$this->render('/Admin/onlinebookings', 'onlinebookings');
	}
	public function declinebookings(){
		$this->render('/Admin/declinebookings', 'declinebookings');
	}
	public function updeclinebookings(){
		$this->render('/Admin/updeclinebookings', 'updeclinebookings');
	}
	public function uponlinebookings(){
		$this->render('/Admin/uponlinebookings', 'uponlinebookings');
	}
	public function upmanualbookings(){
		$this->render('/Admin/upmanualbookings', 'upmanualbookings');
	}
	public function managegenre(){
		$this->render('/Admin/managegenre', 'managegenre');

	}
	public function newgenre(){
		$this->render('/Admin/newgenre', 'newgenre');
	}
	public function activegenre(){
		$this->render('/Admin/activegenre', 'activegenre');
	}
	public function errormanualbooking(){
		$this->render('/Admin/errormanualbooking', 'errormanualbooking');
	}
	public function emanualbooking(){
		$this->render('/Admin/emanualbooking', 'emanualbooking');
	}
}