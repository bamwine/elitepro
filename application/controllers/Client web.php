<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		 $this->load->database();
	}
	
	public function index()
	{	

		if (!empty($this->session->userdata('cltid')))
            redirect(base_url() . 'Client/dash', 'refresh');
		
		$page_data['page_name'] = 'login';
		$this->load->view('client/login',$page_data);
	}
	
	
	public function deposits($param="")
	{
	
	if ($this->session->userdata('cltid') == '')
        redirect(base_url() . 'Client', 'refresh');
	
	$page_data['clientdepos'] = $this->Client_model->get_clientdeposit();
	
	
	if($param=="read"){
	$page_data['page_name'] = 'depositsave';		
	$this->load->view('client/index',$page_data);
		
	}
	
	if($param=="save"){
	
	if(($this->input->post('depo_amt')> $this->db->get_where('settings' , array('type' =>'deposit_amount'))->row()->description)){
	
	$saved = $this->Client_model->deposit();
	if ($saved) 
		{
			$this->session->set_flashdata('success', 'Deposit successfull');
			redirect(base_url() . 'Client/deposits', 'refresh');
		}
		else
		{
			$this->session->set_flashdata('failed','Transaction Failed');
			redirect(base_url() . 'Client/deposits', 'refresh');
		}
		
	$page_data['page_name'] = 'deposit';
	$this->load->view('client/index',$page_data);
		
	} else
		{
			$this->session->set_flashdata('failed','Amount is bewlow Deposit Limit');
			// $this->session->set_flashdata('failed','Transaction ');
			redirect(base_url() . 'Client/deposits', 'refresh');
		}
	
	}
	if($param==""){
	$page_data['page_name'] = 'deposit';		
	$this->load->view('client/index',$page_data);
		
	}
	
	}
	
	
	
	public function Withdraw($param="")
	{
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
	
	$page_data['clientdepos'] = $this->Client_model->get_clientwithdraw();
	
	
	if($param=="read"){
	$page_data['page_name'] = 'withdrawsave';		
	$this->load->view('client/index',$page_data);
		
	}
	
	if($param=="save"){
		
	if($this->Client_model->check_if_withdrwamin()){
	if($this->Client_model->check_if_withdrwa()){	
		if (($this->Client_model->get_clientbal()>$this->input->post('with_amt'))&& ($this->input->post('with_amt')< $this->db->get_where('settings' , array('type' =>'withdraw_amount'))->row()->description)) 
		{
		
		$saved = $this->Client_model->withdraw();
	if ($saved) 
		{
		    $this->session->set_flashdata('success', 'Withdraw successfull');
			redirect(base_url() . 'Client/Withdraw', 'refresh');
		}
		else
		{
			$this->session->set_flashdata('failed','Transaction Not Completed');
			redirect(base_url() . 'Client/Withdraw', 'refresh');
		}	
		
		}
		else
		{
			$this->session->set_flashdata('failed','Low Balance or Over Limit ');
			// $this->session->set_flashdata('failed','Transaction ');
			redirect(base_url() . 'Client/Withdraw', 'refresh');
		}
		
	} else{
		$this->session->set_flashdata('failed','Over withdraw times ');		
		redirect(base_url() . 'Client/Withdraw', 'refresh');
		
	} // check withdrwa times
	
	} else{
		$this->session->set_flashdata('failed','below mini Amount');		
		//redirect(base_url() . 'Client/Withdraw', 'refresh');
		
	} // check withdrwa times
		
	$page_data['page_name'] = 'withdraw';		
	$this->load->view('client/index',$page_data);
		
	}
	
	if($param==""){
	$page_data['page_name'] = 'withdraw';		
	$this->load->view('client/index',$page_data);
		
	}
	
	}
	
	
	public function dash()
	{	
	
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
		
	$page_data['page_name'] = 'dash';
	$this->load->view('client/index',$page_data);
	}
	
	public function tranct()
	{	
	
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
		
	$page_data['clientdepos'] = $this->Client_model->get_clienttransct();	
	$page_data['page_name'] = 'transction';
	$this->load->view('client/index',$page_data);
	
	}
	
	public function auth($param="")
	{	
	
	$page_data['page_name'] = 'register';
	$page_data['refcode'] = $param;
	$this->load->view('client/register',$page_data);
	
	}
	
	
	
		public function register($param="")
	{	
	
		
		$this->form_validation->set_rules('email','Email Address','trim|required|valid_email|is_unique[clients.clt_email]');		
		$this->form_validation->set_message('matches','{field} Don\'t Match');

		if ($this->form_validation->run() == false) 
		{
			$this->index();
			return;
		}
		
		
		$save = $this->Client_model->save_register();
		

		if ($save) 
		{
			$email_msg		=	"Welcome to TESCO ";
			$email_msg	    .=	"Your Password is : ".$this->input->post('passwd')."";
			$to             = $this->input->post('email');
			$subject        ="Account Registration";
			
			$this->Email_model->sendemail($to,$subject,$email_msg);
			$this->session->set_flashdata('success', 'Registration successfull');
			$this->session->set_flashdata('success', 'Confirmation Has been Sent To Your Email');
			redirect(base_url() . 'Client/dash', 'refresh');
		}
		else
		{
			$this->session->set_flashdata('failed','Registration  Failed');
			redirect(base_url() . 'Client/auth', 'refresh');
		}
		
		
		
	}
	
	
	
		public function processLogin()
	{
		$username = $this->input->post('email');
		$password = $this->input->post('passwd');

		if ($this->Client_model->check_accout()){
			
		$login = $this->Client_model->process_login($username,$password);

		if ($login) 
		{
			$this->session->set_userdata('cltid',$login->clt_id);
			$this->session->set_userdata('username',$login->clt_name);

			$this->session->set_flashdata('success', 'Wellcome User ');
			redirect(base_url() . 'Client/dash', 'refresh');
			
		}
		else
		{
			$this->session->set_flashdata('failed','Wrong Username/email or Password');
			redirect(base_url() . 'Client/dash', 'refresh');
			
		}
		} else
		{
			$this->session->set_flashdata('failed','Account Suspended ');
			redirect(base_url() . 'Client/dash', 'refresh');
			
		}
	}
	
	
	
	public function profile($param="")
	{
	
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
	
	$page_data['clientdepos'] = $this->Client_model->get_clientdeposit();
	
	if($param==""){
	$page_data['page_name'] = 'profile';		
	$this->load->view('client/index',$page_data);
		
	}
	
	if($param=="account"){
	$save = $this->Client_model->proaccount();
	if ($save) 
		{
			$this->session->set_flashdata('success', 'Saved successfull');
			redirect(base_url() . 'Client/profile', 'refresh');
		}
		else
		{
			$this->session->set_flashdata('failed','Update  Failed');
			redirect(base_url() . 'Client/profile', 'refresh');
		}
		
	}
	
	if($param=="prosecurity"){
	$save = $this->Client_model->prosecurity();
	if ($save) 
		{
			$this->session->set_flashdata('success', 'Saved successfull');
			redirect(base_url() . 'Client/profile', 'refresh');
		}
		else
		{
			$this->session->set_flashdata('failed','Update  Failed');
			redirect(base_url() . 'Client/profile', 'refresh');
		}
		
	}
	
	}
	
	public function market($param="")
	{
	
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
		
	$page_data['clientprod'] = $this->Client_model->get_clientprod();
	$page_data['clientbought'] = $this->Client_model->get_trades();
	$page_data['page_name'] = 'market';
	$this->load->view('client/index',$page_data);
	
		if($param=="buypro"){
		if($this->Client_model->check_if_bought()){	
	
	if ($this->input->post('proprice')>=$this->Client_model->get_clientbal()) 
		{
			
			$this->session->set_flashdata('failed', 'Your Account Balance too Low');
			redirect(base_url() . 'Client/market', 'refresh');
			//redirect('Client/market');
		}
		
		
		else
		{ 
			$saved  = $this->Client_model->buy_product();
			
			
			if ($saved) 
		{
			$this->session->set_flashdata('success', 'successfull Bought');
			redirect(base_url() . 'Client/market', 'refresh');
		}
		else
		{
			$this->session->set_flashdata('failed','Transaction   Failed');
			redirect(base_url() . 'Client/market', 'refresh');
		}
		
			
			
		}
		
		
		} else {
			$this->session->set_flashdata('failed', 'Over the trading times');
			redirect(base_url() . 'Client/market', 'refresh'); }// trade limt
		} // end buy product
	
	}
	
	public function logout()
	{
			session_destroy();
			$this->session->set_flashdata('success',"Logged out Successfull");
			redirect(base_url() . 'Client/', 'refresh');
			
	}

	
	
}
