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
class ManageDetailsController extends AppController
{

    public function viewDetails() {
    	$this->render('/ManageDetails/view_details', 'view_details');
    


    }

    public function edit(){
    	$this->render('/ManageDetails/edit', 'edit');
       


    }

    public function delete(){
            $users_table = TableRegistry::get('users');
            $users = $users_table->get($id);
            $users_table->delete($users);
            echo "User deleted successfully.";
            $this->setAction('index');
    		$this->Authentication->logout();
            $this->session = $this->request->getSession();
            $this->session->delete('SESS_USER');
            $this->session->delete('SESS_USER_PERMISSIONS');
            return $this->redirect(['controller' => 'Home', 'action' => 'index']);
            
     }
     



    public function changepass(){
     	$this->render('/ManageDetails/changepass', 'changepass');
          

     }
     

     public function editpass(){
        $this->render('/ManageDetails/editpass', 'editpass');
          


    }

     public function editaddress(){
     	$this->render('/ManageDetails/editaddress', 'editaddress');
     }

     public function payment(){
     	$this->render('/ManageDetails/payment', 'payment');
     }


     public function viewBookingHistory(){
     	$this->render('/ManageDetails/view_booking_history', 'view_booking_history');
     }

     public function upbookings(){
        $this->render('/ManageDetails/upbookings', 'upbookings');
     }

      public function upbookingsup(){
        $this->render('/ManageDetails/upbookingsup', 'upbookingsup');
     }


     public function editadd(){
     	$this->render('/ManageDetails/editadd', 'editadd');
     }

     public function updatedViewDetails(){
        $this->render('/ManageDetails/updated_view_details', 'updated_view_details');
     }

     public function updatepay(){
        $this->render('/ManageDetails/update_pay', 'update_pay');
     }

     public function updatedPay(){
        $this->render('/ManageDetails/updated_pay', 'updated_pay');
     }

}