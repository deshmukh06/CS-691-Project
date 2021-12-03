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
class CustomersupportportalController extends AppController
{
	public function supportlogin()
		{
			$this->render('/Customersupportportal/supportlogin', 'supportlogin'); 
		}

		public function supportdashboard()
		{
			$this->render('/Customersupportportal/supportdashboard', 'supportdashboard'); 
		}

		public function customeracc()
		{
			$this->render('/Customersupportportal/customeracc', 'customeracc'); 
		}

		public function communicate()
		{
			$this->render('/Customersupportportal/communicate', 'communicate'); 
		}
		public function sendmessage()
		{
			$this->render('/Customersupportportal/sendmessage', 'sendmessage'); 
		}
		public function messages()
		{
			$this->render('/Customersupportportal/messages', 'messages'); 
			
			
		}
}