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
    	if($this->request->is('post')){
        $firstname = $this->request->data('first_name');
        $lastname= $this->request->data('last_name');
        $email= $this->request->data('email');
        $address= $this->request->data('address');}


    }

    public function delete(){
    		$this->Authentication->logout();
            $this->session = $this->request->getSession();
            $this->session->delete('SESS_USER');
            $this->session->delete('SESS_USER_PERMISSIONS');
            return $this->redirect(['controller' => 'Home', 'action' => 'index']);
     }
     public function changepass(){
     	$this->render('/ManageDetails/changepass', 'changepass');
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