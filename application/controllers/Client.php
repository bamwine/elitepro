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
            redirect(base_url() . 'Client/home', 'refresh');
		
		$page_data['page_name'] = 'login';
		$this->load->view('tailwind/login',$page_data);
	}
	
	public function home()
	{	
	
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
		
	$page_data['clientprod'] = $this->Client_model->get_clientprod();
	$page_data['clientbought'] = $this->Client_model->get_trades();
	$page_data['clientdepos'] = $this->Client_model->get_clientdeposit();
	$page_data['clientwith'] = $this->Client_model->get_clientwithdraw();
	
	$page_data['page_name'] = 'home';
	$this->load->view('tailwind/home',$page_data);
	}
	
	
	public function deposite($param="")
	{
	
	$page_data['clientdepos'] = $this->Client_model->get_clientdeposit();
	$page_data['page_name'] = 'deposite';
	$this->load->view('tailwind/deposite',$page_data);	
	
	
	
	
	if($param=="save"){
	
	if(($this->input->post('depo_amt')> $this->db->get_where('settings' , array('type' =>'deposit_amount'))->row()->description)){
	
	$saved = $this->Client_model->deposit();
	if ($saved) 
		{
			$this->session->set_flashdata('success', 'Deposit successfull');
			redirect(base_url() . 'Client/home', 'refresh');
			
		}
		else
		{
			$this->session->set_flashdata('failed','Transaction Failed');
			redirect(base_url() . 'Client/home', 'refresh');
			
		}
		
	$page_data['page_name'] = 'deposit';
	$this->load->view('tailwind/deposite',$page_data);
		
	} else
		{
			$this->session->set_flashdata('failed','Amount is bewlow Deposit Limit');
			redirect(base_url() . 'Client/home', 'refresh');
			
		}
	
	}
	
	
	}
	
	
	
	public function Withdraw($param="")
	{
	
	
	$page_data['clientdepos'] = $this->Client_model->get_clientwithdraw();	
	$page_data['page_name'] = 'withdraw';		
	$this->load->view('tailwind/withdraw',$page_data);
	
	
	
	if($param=="save"){
		
	if($this->Client_model->check_if_withdrwamin()){
	if($this->Client_model->check_if_withdrwa()){	
		if (($this->Client_model->get_clientbal()>$this->input->post('with_amt'))&& ($this->input->post('with_amt')< $this->db->get_where('settings' , array('type' =>'withdraw_amount'))->row()->description)) 
		{
		
		$saved = $this->Client_model->withdraw();
	if ($saved) 
		{
		    $this->session->set_flashdata('success', 'Withdraw successfull');
			redirect(base_url() . 'Client/home', 'refresh');
			//redirect(base_url() . 'Client/Withdraw', 'refresh');
		}
		else
		{
			$this->session->set_flashdata('failed','Transaction Not Completed');
			redirect(base_url() . 'Client/home', 'refresh');
			//redirect(base_url() . 'Client/Withdraw', 'refresh');
		}	
		
		}
		else
		{
			$this->session->set_flashdata('failed','Low Balance or Over Limit ');
			
			redirect(base_url() . 'Client/home', 'refresh');
			
		}
		
	} else{
		$this->session->set_flashdata('failed','Over withdraw times ');
		redirect(base_url() . 'Client/home', 'refresh');
		
		
	} // check withdrwa times
	
	} else{
		$this->session->set_flashdata('failed','below mini Amount');		
		
		
	} // check withdrwa times
		
	$page_data['page_name'] = 'withdraw';		
	$this->load->view('tailwind/withdraw',$page_data);
		
	}
	

	
	
	}
	
	

	
	public function tranct()
	{	
	
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
		
	$page_data['clientdepos'] = $this->Client_model->get_clienttransct();	
	$page_data['page_name'] = 'transction';
	$this->load->view('tailwind/index',$page_data);
	
	}
	
	public function auth($param="")
	{	
	
	$page_data['page_name'] = 'register';
	$page_data['refcode'] = $param;
	$this->load->view('tailwind/register',$page_data);
	
	}
	
	
	
		public function register($param="")
	{	
	
				
		$save = $this->Client_model->save_register();

		if ($save) 
		{
			
			//$this->Email_model->sendemail($to,$subject,$email_msg);
			//$this->session->set_flashdata('success', 'Registration successfull');
			//$this->session->set_flashdata('success', 'Confirmation Has been Sent To Your Email');
			redirect(base_url() . 'Client/index', 'refresh');
		}
		else
		{
			$this->session->set_flashdata('failed','Registration  Failed');
			redirect(base_url() . 'Client/auth', 'refresh');
		}
		
		
		
	}
	
	
	
		public function processLogin()
	{
		$username = $this->input->post('uname');
		$password = $this->input->post('password');

		if ($this->Client_model->check_accout()){
			
		$login = $this->Client_model->process_login($username,$password);

		if ($login) 
		{
			$this->session->set_userdata('cltid',$login->clt_id);
			$this->session->set_userdata('username',$login->clt_name);
			$this->session->set_userdata('balance',$login->clt_bal);
			$this->session->set_userdata('incode',$login->clt_ref);
			$this->session->set_userdata('phone',$login->clt_phone);
			$this->session->set_flashdata('success', 'Login Success ');
			redirect(base_url() . 'Client/home', 'refresh');
			
		}
		else
		{
			$this->session->set_flashdata('failed','Wrong Username/email or Password');
			redirect(base_url() . 'Client/home', 'refresh');
			
			
		}
		} else
		{
			$this->session->set_flashdata('failed','Account Suspended ');
			redirect(base_url() . 'Client/home', 'refresh');
			
			
		}
	}
	
	
	
	public function profile($param="")
	{
	
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
	
	$page_data['clientdepos'] = $this->Client_model->get_clientdeposit();
	
	if($param==""){
	$page_data['page_name'] = 'profile';
	redirect(base_url() . 'Client/home', 'refresh');
		
	}
	
	if($param=="account"){
	$save = $this->Client_model->proaccount();
	if ($save) 
		{
			$this->session->set_flashdata('success', 'Saved successfull');
			redirect(base_url() . 'Client/home', 'refresh');
			
		}
		else
		{
			$this->session->set_flashdata('failed','Update  Failed');
			redirect(base_url() . 'Client/home', 'refresh');
			
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
			redirect(base_url() . 'Client/home', 'refresh');
			//redirect(base_url() . 'Client/profile', 'refresh');
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
	$this->load->view('tailwind/index',$page_data);
	
		if($param=="buypro"){
		if($this->Client_model->check_if_bought()){	
	
	if ($this->input->post('proprice')>=$this->Client_model->get_clientbal()) 
		{
			
			$this->session->set_flashdata('failed', 'Your Account Balance too Low');
			redirect(base_url() . 'Client/home', 'refresh');
			//redirect(base_url() . 'Client/market', 'refresh');
			//redirect('Client/market');
		}
		
		
		else
		{ 
			$saved  = $this->Client_model->buy_product();
			
			
			if ($saved) 
		{
			$this->session->set_flashdata('success', 'Transaction  Success');
			redirect(base_url() . 'Client/home', 'refresh');
			//redirect(base_url() . 'Client/market', 'refresh');
		}
		else
		{
			$this->session->set_flashdata('failed','Transaction   Failed');
			redirect(base_url() . 'Client/home', 'refresh');
			//redirect(base_url() . 'Client/market', 'refresh');
		}
		
			
			
		}
		
		
		} else {
			$this->session->set_flashdata('failed', 'Over the trading times');
			redirect(base_url() . 'Client/home', 'refresh');
			//redirect(base_url() . 'Client/market', 'refresh'); 
			
			}// trade limt
		} // end buy product
	
	}
	
	public function logout()
	{
			session_destroy();
			$this->session->set_flashdata('success',"Logout Success");
			redirect(base_url() . 'Client/', 'refresh');
			
	}
	
	
	public function my()
	{	
	
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
	
	$page_data['page_name'] = 'my';
	$this->load->view('tailwind/my',$page_data);
	}
	
	public function about()
	{	
	
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
	
	$page_data['page_name'] = 'about';
	$this->load->view('tailwind/about',$page_data);
	}
	
	public function vips()
	{	
	
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
	
	$page_data['page_name'] = 'vips';
	$this->load->view('tailwind/vips',$page_data);
	}
	
	public function faq()
	{	
	
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
	
	$page_data['page_name'] = 'faq';
	$this->load->view('tailwind/faq',$page_data);
	}
	
	public function cert()
	{	
	
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
	
	$page_data['page_name'] = 'cert';
	$this->load->view('tailwind/cert',$page_data);
	}
	
	public function tc()
	{	
	
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
	
	$page_data['page_name'] = 't&c';
	$this->load->view('tailwind/t&c',$page_data);
	}
	
	public function events()
	{	
	
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
	
	$page_data['page_name'] = 'events';
	$this->load->view('tailwind/events',$page_data);
	}
	
	
	public function terms()
	{	
	
	
	$page_data['page_name'] = 'terms';
	$this->load->view('tailwind/terms',$page_data);
	}


	public function start()
	{	
	
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
	
	$page_data['page_name'] = 'start';
	$this->load->view('tailwind/start',$page_data);
	}
	
	
	public function records()
	{	
	
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
	
	$page_data['page_name'] = 'records';
	$this->load->view('tailwind/records',$page_data);
	}
	
	public function updatePassword()
	{	
	
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
		
		$login = $this->Client_model->process_changepwd();

		if ($login) 
		{
			
			$this->session->set_flashdata('success', 'Update Success');
			
			
		}
		else
		{
			$this->session->set_flashdata('failed','Update Failed');
			
		}
		
	
	$page_data['page_name'] = 'updatePassword';
	$this->load->view('tailwind/updatePassword',$page_data);
	}
	
	public function updateTransaction()
	{	
	
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
		
		$login = $this->Client_model->process_transpwd();

		if ($login) 
		{
			
			$this->session->set_flashdata('success', 'Update Success');
			
			
		}
		else
		{
			$this->session->set_flashdata('failed','Update Failed');
			
		}
	
	$page_data['page_name'] = 'updateTransactionPassword';
	$this->load->view('tailwind/updateTransactionPassword',$page_data);
	}
	
	public function notice()
	{	
	
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
	
	$page_data['page_name'] = 'notice';
	$this->load->view('tailwind/notice',$page_data);
	}
	
	public function profileItem()
	{	
	
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
	
	$page_data['page_name'] = 'profileItem';
	$this->load->view('tailwind/profileItem',$page_data);
	}
	
	public function profile2()
	{	
	
	if ($this->session->userdata('cltid') == '')
            redirect(base_url() . 'Client', 'refresh');
	
	$page_data['page_name'] = 'profile';
	$this->load->view('tailwind/profile',$page_data);
	}
	
}
