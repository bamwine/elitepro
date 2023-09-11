<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		 $this->load->database();
	}
	
	public function index()
	{	
		$this->load->view('admin/login');
	}
	
	public function dash()
	{	
	
	if ($this->session->userdata('login_type') != 'admin')
            redirect(base_url() . 'Admin/index', 'refresh');
	
		$page_data['usercount'] = $this->Admin_model->dash_getusercount();
		$page_data['depositcount'] = $this->Admin_model->dash_getusercount();
		$page_data['withdcount'] = $this->Admin_model->dash_getwithdcount();
		$page_data['pendingcount'] = $this->Admin_model->dash_getpendingcount();
		$page_data['incomecount'] = $this->Admin_model->dash_getincomecount();
		$page_data['commissiocount'] = $this->Admin_model->dash_commissiocount();
		
	    $page_data['page_name'] = 'dash';
		$this->load->view('admin/index',$page_data);
	}
	
	
	public function mange_user($param1="",$param2="")
	{	
	
	 if ($this->session->userdata('login_type') != 'admin')
            redirect(base_url() . 'Admin/index', 'refresh');
	
		$page_data['page_name'] = 'mange_user';
		$page_data['get_user'] = $this->Admin_model->get_user();
		$this->load->view('admin/index',$page_data);
		
		if($param1=='save'){
			
			$register = $this->Admin_model->save_user();
			if ($register) 
			{
			$this->session->set_flashdata('success', 'successfull Made');
			redirect(base_url() . 'Admin/mange_user', 'refresh');
				
			}
		
		}
		
		if($param1=='delete'){
			
			$del_user = $this->Admin_model->del_user($param2);
			if ($del_user) 
			{
			$this->session->set_flashdata('success', 'successfull Made');
			redirect(base_url() . 'Admin/mange_user', 'refresh');
				
			}
		
		}
		
		
		if($param1=='edit'){
			
			$update_user = $this->Admin_model->edit_user();
			if ($update_user) 
			{
			$this->session->set_flashdata('success', 'successfull Made');
			redirect(base_url() . 'Admin/mange_user', 'refresh');
				
			}
		
		}
		
		if($param1=='viewedit'){
			
			$page_data['page_name'] = 'edit_users';
			$page_data['get_client'] = $this->Admin_model->select_user($param2);	
			$this->load->view('admin/index',$page_data);
		
		}
		
		
	}

	
	
	public function mange_clients($param1="",$param2="")
	
	{	
	
	 if ($this->session->userdata('login_type') != 'admin')
            redirect(base_url() . 'Admin/index', 'refresh');
	
		
		
		if($param1==''){
			
		$page_data['page_name'] = 'mange_clients';
		$page_data['get_client'] = $this->Admin_model->get_client();
		$this->load->view('admin/index',$page_data);	
		
		}
		
		if($param1=='save'){
			
			$register = $this->Admin_model->save_client();
			if ($register) 
			{
			$this->session->set_flashdata('success', 'successfull Made');
			redirect(base_url() . 'Admin/mange_clients', 'refresh');
				
			}
		
		}
		
		if($param1=='delete'){
			
			$del_user = $this->Admin_model->del_client();
			if ($del_user) 
			{
			
			$this->session->set_flashdata('success', 'successfull Made');
			redirect(base_url() . 'Admin/mange_clients', 'refresh');
				
			}
		
		}
		
		if($param1=='lock'){
			
			$del_user = $this->Admin_model->lock_unlock();
			if ($del_user) 
			{
			
			$this->session->set_flashdata('success', 'successfull Made');
			redirect(base_url() . 'Admin/mange_clients', 'refresh');
				
			}
		
		}
		
		
		if($param1=='edit'){
			
			$update_user = $this->Admin_model->edit_client();
			if ($update_user) 
			{
				
			$this->session->set_flashdata('success', 'successfull Made');
			redirect(base_url() . 'Admin/mange_clients', 'refresh');
				
			}
		
		}
		
		
		if($param1=='editpwd'){
			
			$update_user = $this->Admin_model->edit_clientpwd();
			if ($update_user) 
			{
				
			$this->session->set_flashdata('success', 'successfull Made');
			redirect(base_url() . 'Admin/mange_clients', 'refresh');
				
			}
		
		}
		
		
		
		if($param1=='viewedit'){
			
			$page_data['page_name'] = 'edit_clients';
			$page_data['get_client'] = $this->Admin_model->select_client($param2);	
			$this->load->view('admin/index',$page_data);
		
		}
		
		if($param1=='vieweditpwd'){
			
			$page_data['page_name'] = 'edit_clientspwd';
			$page_data['get_client'] = $this->Admin_model->select_client($param2);	
			$this->load->view('admin/index',$page_data);
		
		}
		
			if($param1=='editask'){
			
			$update_user = $this->Admin_model->reset_clienttask();
			if ($update_user) 
			{
				
			$this->session->set_flashdata('success', 'successfull Made');
			redirect(base_url() . 'Admin/mange_clients', 'refresh');
				
			}
		
		}
		
		if($param1=='viewetask'){
			
			$page_data['page_name'] = 'reset_clientask';
			$page_data['userid'] = $param2;
			$page_data['get_client'] = $this->Admin_model->get_clienttaskdetails($param2);	
			$this->load->view('admin/index',$page_data);
		
		}
		
		if($param1=='viewerecords'){
			
			$page_data['page_name'] = 'edit_trades';
			$page_data['get_client'] = $this->Admin_model->get_clientrecords($param2);	
			$this->load->view('admin/index',$page_data);
		
		}
		
		
		if($param1=='addmoney'){
			
			$del_user = $this->Admin_model->client_addmoney();
			if ($del_user) 
			{
			$this->session->set_flashdata('success', 'successfull Made');
			redirect(base_url() . 'Admin/mange_clients', 'refresh');
				
			}
		
		}
		
		
		
		
	}
	
	
	
		public function processLogin()
	{
		$username = $this->input->post('email');
		$password = $this->input->post('paswd');

		$login = $this->Admin_model->process_login($username,$password);

		if ($login) 
		{
			$this->session->set_userdata('userid',$login->user_id);
			$this->session->set_userdata('adminusername',$login->user_name);			
			$this->session->set_userdata('rights',$login->user_level);
			$this->session->set_userdata('login_type','admin');
			
			$this->session->set_flashdata('success', 'Wellcome Back');
			redirect(base_url() . 'Admin/dash', 'refresh');
			
		}
		else
		{
			$this->session->set_flashdata('failed','Wrong Username/email or Password');
			redirect(base_url() . 'Admin/index', 'refresh');
		}
	}
	
	
		public function Changepwd()
	{
		

		$login = $this->Admin_model->process_changepwd();

		if ($login) 
		{
			
			$this->session->set_flashdata('success', 'Password Changed Successfull');
			redirect(base_url() . 'Admin/index', 'refresh');
			
		}
		else
		{
			$this->session->set_flashdata('failed','Wrong Username/email or Account Not Availabel');
			redirect(base_url() . 'Admin/index', 'refresh');
		}
	}
	
	
	public function logout()
	{
				
			session_destroy();
			$this->session->set_flashdata('success',"Logged out Successfull");
			$this->index();
			return;
	}
	
	
	public function manage_trade($param1="")
	{
		if ($this->session->userdata('login_type') != 'admin')
		redirect(base_url() . 'Admin/index', 'refresh');
		$page_data['getadesnow'] = $this->Admin_model->get_trades();

	if($param1==""){
		
		$page_data['page_name'] = 'trading';
		$this->load->view('admin/index',$page_data);
		
	}


	}
	
	
	public function manage_settings($param1="")
	{
		if ($this->session->userdata('login_type') != 'admin')
            redirect(base_url() . 'Admin/index', 'refresh');
		
		$page_data['comp_addres'] = $this->Admin_model->get_comp_addres();
		$page_data['user_lv'] = $this->Admin_model->get_user_lv();
		
		$page_data['page_name'] = 'mange_settings';
		$this->load->view('admin/index',$page_data);
		
		
		if($param1=="saveaddress"){
			
		$del_user = $this->Admin_model->set_comp_addres();
			if ($del_user) 
			{
			$this->session->set_flashdata('success', 'successfull Changed');
			redirect(base_url() . 'Admin/manage_settings', 'refresh');	
				
			}
		
		}
		
		if($param1=="saveuserlv"){
			
		$del_user = $this->Admin_model->set_user_lv();
			if ($del_user) 
			{
				
			$this->session->set_flashdata('success', 'successfull Made');
			redirect(base_url() . 'Admin/manage_settings', 'refresh');	
				
			}
		
		}
		
		 if ($param1 == 'settings1') {
			 
			 $del_user = $this->Admin_model->settings1();
			 
			 $this->session->set_flashdata('success', 'successfull Made');
			 redirect(base_url() . 'Admin/manage_settings', 'refresh');
		 }
			
	}
	
	
	
	public function manage_withdraw($param1="")
	{
		if ($this->session->userdata('login_type') != 'admin')
		redirect(base_url() . 'Admin/index', 'refresh');
		$page_data['clientwith'] = $this->Admin_model->get_cltwithdraw();

	if($param1==""){
		
		$page_data['page_name'] = 'fwithdraw';
		$this->load->view('admin/index',$page_data);
		
	}


	}
	
	public function manage_deposits($param1="")
	{
		if ($this->session->userdata('login_type') != 'admin')
	redirect(base_url() . 'Admin/index', 'refresh');
	$page_data['clientdepo'] = $this->Admin_model->get_cltdeposit();

	if($param1==""){
		
		$page_data['page_name'] = 'fdeposit';
		$this->load->view('admin/index',$page_data);
		
	}

	}
	
	
	public function manage_failed($param1="")
	{
	if ($this->session->userdata('login_type') != 'admin')
	redirect(base_url() . 'Admin/index', 'refresh');
	
	$page_data['clientfailed'] = $this->Admin_model->get_cltfailed();
	
	if($param1==""){
		
		$page_data['page_name'] = 'fcanceled';
		$this->load->view('admin/index',$page_data);
		
	}

	}
	
	
	public function manage_status($param1="")
	{
		if ($this->session->userdata('login_type') != 'admin')
	redirect(base_url() . 'Admin/index', 'refresh');
	
	
	
	if($param1=="failed"){
		$page_data['clientfailed'] = $this->Admin_model->transctionfailed();
		redirect(base_url() . 'Admin/manage_withdraw', 'refresh');
	}
	
	if($param1=="inprogress"){
		$page_data['clientfailed'] = $this->Admin_model->transctioninprogress();
		redirect(base_url() . 'Admin/manage_withdraw', 'refresh');
	}
	
	if($param1=="success"){
		$page_data['clientfailed'] = $this->Admin_model->transctionsuccess();
		redirect(base_url() . 'Admin/manage_withdraw', 'refresh');
	}

	}
	
	
	public function market($param1="")
	{
	
	if ($this->session->userdata('login_type') != 'admin')
         redirect(base_url() . 'Admin', 'refresh');
		
	$page_data['clientprod'] = $this->Admin_model->get_clientprod();
	$page_data['page_name'] = 'products';
	$this->load->view('admin/index',$page_data);
	
	if($param1=="save"){
		$delep = $this->Admin_model->saveproduct();
		if($delep){
			
			$this->session->set_flashdata('success', 'Product Added Successfull');
			redirect(base_url() . 'Admin/market', 'refresh');
		} else {
			$this->session->set_flashdata('failed', 'Product Not Added');
			redirect(base_url() . 'Admin/market', 'refresh');
			
		}
		
	}
	
	
	if($param1=="delete"){
		$delep = $this->Admin_model->deleproduct();
		if($delep){
			
			$this->session->set_flashdata('success', 'Product Removed Successfull');
			redirect(base_url() . 'Admin/market', 'refresh');
		} else {
			$this->session->set_flashdata('failed', 'Product Removed ');
			redirect(base_url() . 'Admin/market', 'refresh');
			
		}
		
	}
	
	}
	
	
}
