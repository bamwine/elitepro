<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model 
{
	private $user_id;
	private $today;

	public function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('user_id');
		$this->today = date('Y-m-d h:i:s');
	}
	// --------------------------------------------------------------------

	public function get_prodctdetails($id,$values)
	{
		$res=	$this->db->get_where('products',array('phd_id'=>$id))->row();

		return $res->$values;
	}
	
	
	public function process_changepwd()
	{
		
		$username = $this->input->post('uname');
		$useremail = $this->input->post('email');
		$userpaswd = $this->input->post('paswd');		
			
		$data = array(				
				'user_paswd' => $userpaswd,				
				);
				
		//$this->db->where('user_name',$username);		
		$this->db->where('user_email' , $useremail,'user_name',$username);
		
		$res = $this->db->update('users' , $data);
		
		return $res ? 1 : 0;
	}
	
	
	
	public function dash_getusercount()	{
	
	$daterange=date('y-m-d');
	$res = $this->db->query('SELECT count(*) as ttanum FROM clients where clt_created like "%'.$daterange.'%"  ');
	return $res->row()->ttanum > 0 ? $res->row()->ttanum : 0;		
	}
	
	public function dash_getdepositcount() {
	
	$daterange=date('y-m-d');
	$res = $this->db->query('SELECT sum(tr_amount) as ttanum FROM transct where tr_status = "success" and tr_type = "deposit" and tr_update like "%'.$daterange.'%"  ');
	return $res->row()->ttanum > 0 ? $res->row()->ttanum : 0;		
	}
	
	public function dash_getwithdcount() {
	
	$daterange=date('y-m-d');
	$res = $this->db->query('SELECT sum(tr_amount) as ttanum FROM transct where tr_status = "success" and tr_type = "withdraw" and tr_update like "%'.$daterange.'%"  ');
	return $res->row()->ttanum > 0 ? $res->row()->ttanum : 0;		
	}
	
	public function dash_getpendingcount() {
	
	$daterange=date('y-m-d');
	$res = $this->db->query('SELECT sum(tr_amount) as ttanum FROM transct where tr_status = "pending"  and tr_update like "%'.$daterange.'%"  ');
	return $res->row()->ttanum > 0 ? $res->row()->ttanum : 0;		
	}
	
	public function dash_getincomecount() {
	
	$daterange=date('y-m-d');
	$res = $this->db->query('SELECT sum(tr_amount) as ttanum FROM transct where tr_status = "success" and tr_type = "withdraw" and tr_update like "%'.$daterange.'%"  ')->row()->ttanum;
	$transapercetile = $this->db->get_where('settings' , array('type' =>'withdraw_perce'))->row()->description;
	$percentage=(($transapercetile/100)*$res);
		
	
	return $percentage;		
	}
	
	public function dash_commissiocount() {
	
	$daterange=date('y-m-d');
	$res = $this->db->query('SELECT sum(inc_amount) as ttanum FROM income where  inc_date like "%'.$daterange.'%"  ')->row()->ttanum;
	
		
	
	return $res;		
	}
	
	
	
	public function get_user()	{
		
		
		$res = $this->db->query("SELECT * FROM users");

		return $res->result_array() > 0 ? $res->result_array() : 0;
	}
	
	public function get_comp_addres()	{
		
		
		$res = $this->db->query("SELECT * FROM settings_comp_address");

		return $res->result_array() > 0 ? $res->result_array() : 0;
	}
	
	public function set_comp_addres()
	{
 
			$data = array(
				'stt_com_name' => $this->input->post('address'),	
				
				);					
			
		$res = $this->db->insert("settings_comp_address", $data);

		return $res ? 1 : 0;
	}
	
	
	
	public function settings1()
	{
 	 
         $data['description'] = $this->input->post('withlimit');
         $this->db->where('type' , 'withdraw_amount');
		 $this->db->update('settings' , $data);	

		 $data['description'] = $this->input->post('withminamnt');
         $this->db->where('type' , 'withdraw_minamount');
		 $this->db->update('settings' , $data);	
		 	 
         $data['description'] = $this->input->post('withtime');
         $this->db->where('type' , 'withdraw_times');
		 $this->db->update('settings' , $data);
		 
		 $data['description'] = $this->input->post('withperce');
         $this->db->where('type' , 'withdraw_perce');
		 $this->db->update('settings' , $data);
		 
		 $data['description'] = $this->input->post('customercare');
         $this->db->where('type' , 'customerservice');
		 $this->db->update('settings' , $data);
		 
		 $data['description'] = $this->input->post('procomission');
         $this->db->where('type' , 'product_commission');
		 $this->db->update('settings' , $data);
		 
		 $data['description'] = $this->input->post('depolimit');
         $this->db->where('type' , 'deposit_amount');
		 $this->db->update('settings' , $data);
		 
		 $data['description'] = $this->input->post('tradelimit');
         $this->db->where('type' , 'trade_limits');
		 $this->db->update('settings' , $data);
	}
	
	
	public function save_client()
	{
 
			$data = array(
				'clt_id' => $this->input->post('userid'),	
				'clt_name' => $this->input->post('name'),	
				'clt_email' => $this->input->post('email'),	
				'clt_passwd' => $this->input->post('Passwd'),
				'clt_tat' => $this->input->post('Passwd'),
				'clt_created'=> date('Y-m-d h:i:s'),
				'clt_parent' => $this->input->post('refa'),				
				'clt_ref'=> h_generate_clt_code(),
				
				);					
			
		$res = $this->db->insert("clients", $data);

		return $res ? 1 : 0;
	}
	
	public function get_user_lv(){
		
		
		$res = $this->db->query("SELECT * FROM user_levels");

		return $res->result_array() > 0 ? $res->result_array() : 0;
	}
	
	
	public function set_user_lv(){
		
		
		$data = array(
				'lv_name' => $this->input->post('useleve'),	
				
				);					
			
		$res = $this->db->insert("user_levels", $data);

		return $res ? 1 : 0;
	}
	
	public function get_client(){
		
		$this->db->order_by('phd_id', 'DESC');
		$res = $this->db->query("SELECT * FROM clients");

		return $res->result_array() > 0 ? $res->result_array() : 0;
	}
	
	public function select_client($clientid){
		
		$this->db->order_by('phd_id', 'DESC');
		$res = $this->db->query('SELECT * FROM clients where clt_id = "'.$clientid.'" ');

		return $res->result_array() > 0 ? $res->result_array() : 0;
	}
	
	
	public function save_user()
	{
 
			$data = array(
				'user_id' => $this->input->post('userid'),	
				'user_name' => $this->input->post('name'),	
				'user_email' => $this->input->post('email'),	
				'user_paswd' => sha1(md5($this->input->post('Passwd'))),	
				'user_level' => $this->input->post('level'),
				'user_created'=> date('y-m-d'),
				
				);					
			
		$res = $this->db->insert("users", $data);

		return $res ? 1 : 0;
	}
	
	
	public function del_user($user_id)
	{
 		
		$this->db->where('user_id', $user_id);
		$res = $this->db->delete("users");

		return $res ? 1 : 0;
	}
	
	public function del_client()
	{
 		$clint_id = $this->input->post('trid');
		$this->db->where('clt_id', $clint_id);
		$res = $this->db->delete("clients");

		return $res ? 1 : 0;
	}
	
	public function lock_unlock()
	{
 		
		$status = $this->input->post('trid');
		$userid = $this->input->post('userid');
		
		$transctdata = array(
			'clt_status'=> $this->input->post('trid')
			);
		$this->db->where('clt_id', $userid);
		$res = $this->db->update("clients",$transctdata);

		return $res ? 1 : 0;
	}
	
	
	public function edit_client()
	{
 
			$data = array(
				
				'clt_level' => $this->input->post('clt_level'),	
				'clt_tasks' => $this->input->post('clt_tasks'),	
				'clt_comsion_level' => $this->input->post('clt_comsion'),	
				'clt_bal' => $this->input->post('clt_bal'),
				'clt_level_money' => $this->input->post('clt_level_money'),
				
				);					
			
		
		$this->db->where('clt_id ', $this->input->post('userid'));
		$res = $this->db->update("clients", $data);

		return $res ? 1 : 0;
	}
	
		public function reset_clienttask()
	{
			
		$datec = date('Y-m-d'); 
		$res = $this->db->query('UPDATE tasks SET count_id = "'.$this->input->post('count').'" WHERE clt_id = "'.$this->input->post('userid').'" and created = "'.$datec.'" ');
		
		return $res ? 1 : 0;
	}
	
		public function get_clienttaskdetails($clientid)
	{
	$datec = date('Y-m-d'); 
	$this->db->order_by('id', 'DESC');
	$this->db->limit('1');
	$res=	$this->db->get_where('tasks',array('clt_id'=>$clientid,'created'=>$datec));

		return $res->result_array() > 0 ? $res->result_array() : 0;
	}
	
	public function client_addmoney()
	{
		$res="";
		$cltbalance = $this->db->get_where('clients',array('clt_id'=>$this->input->post('userid')))->row()->clt_bal;
		
 		if (isset($_POST['add'])) {
        
		$transctdata = array(
					
			'clt_bal' => ((int)$this->input->post('moneyrem')+(int)$cltbalance),				
			'clt_updated'=> date('Y-m-d h:i:s')
			);
		$this->db->where('clt_id', $this->input->post('userid'));
		$res = $this->db->update("clients", $transctdata);
		// also insert into the transct tables
		$data = array(
				'tr_clt_id' => $this->input->post('userid'),	
				'tr_id' => h_generate_transct_id(),	
				'tr_rechage' => $this->get_clientdetails($this->input->post('userid'),'clt_btc_wallet'),	
				'tr_amount' => $this->input->post('moneyrem'),
				'tr_status'=> 'success',
				'tr_update' =>date('Y-m-d h:i:s'),				
				'tr_date'=> date('Y-m-d h:i:s'),
				'tr_type'=>"deposit",
				'tr_approved_by'=>$this->session->userdata('adminusername'),
				'tr_com_address' =>$this->get_clientdetails($this->input->post('userid'),'clt_btc_add'),
				);					
			
		$res2 = $this->db->insert("transct", $data); 
		
		}
		
		if (isset($_POST['remove'])) {
        $transctdata = array(
					
			'clt_bal' => ($cltbalance-$this->input->post('moneyrem')),				
			'clt_updated'=> date('Y-m-d h:i:s')
			);
		$this->db->where('clt_id', $this->input->post('userid'));
		$res = $this->db->update("clients", $transctdata);
		
		// also insert into the transct tables
		$data = array(
				'tr_clt_id' => $this->input->post('userid'),	
				'tr_id' => h_generate_transct_id(),	
				'tr_rechage' => $this->get_clientdetails($this->input->post('userid'),'clt_btc_wallet'),	
				'tr_amount' => $this->input->post('moneyrem'),
				'tr_status'=> 'success',
				'tr_update' =>date('Y-m-d h:i:s'),				
				'tr_date'=> date('Y-m-d h:i:s'),
				'tr_type'=>"withdraw",
				'tr_approved_by'=>$this->session->userdata('adminusername'),
				'tr_com_address' =>$this->get_clientdetails($this->input->post('userid'),'clt_btc_add'),
				);					
			
		$res2 = $this->db->insert("transct", $data); 
		
		
		}
		
		

		return $res ? 1 : 0;
	}
	
	
	
	public function edit_user()
	{
 
			$data = array(
				
				'user_name' => $this->input->post('name'),	
				'user_email' => $this->input->post('email'),	
				'user_paswd' => sha1(md5($this->input->post('Passwd'))),	
				'user_level' => $this->input->post('level'),
				'user_created'=> date('Y-m-d h:i:s'),
				
				);					
			
		
		$this->db->where('user_id', $this->input->post('userid'));
		$res = $this->db->update("users", $data);

		return $res ? 1 : 0;
	}
	
	
	
	
	
	public function process_login($user_name,$password)
	{
		$res = $this->db->query('SELECT * FROM users where (user_email = "'.$user_name.'") and user_paswd = "'.$password.'"');

		return $res->num_rows() > 0 ? $res->row() : 0;
	}
	
	
	public function get_cltdeposit()
	{
		$this->db->order_by('phd_id', 'DESC');
		$res=	$this->db->get_where('transct',array('tr_type'=>"deposit"));

		return $res->result_array() > 0 ? $res->result_array() : 0;
	}
	
	public function get_cltwithdraw()
	{
		$this->db->order_by('phd_id', 'DESC');
		$res=	$this->db->get_where('transct',array('tr_type'=>"withdraw"));

		return $res->result_array() > 0 ? $res->result_array() : 0;
	}
	
	public function get_cltfailed()
	{
		$this->db->order_by('phd_id', 'DESC');
		$res=	$this->db->get_where('transct',array('tr_status'=>"failed"));

		return $res->result_array() > 0 ? $res->result_array() : 0;
	}
	
	public function get_badge($status)
	{
		
		switch($status){
			case "pending":
			return "badge-warning";
			break;
			
			case "success":
			return "badge-success";
			break;
			
			case "failed":
			return "badge-danger";
			break;
			
			case "inprogress":
			return "badge-info";
			break;
			
			default:
			return "badge-warning";
		}
	
	
	}
	
	public function get_trades()
	{
		$this->db->order_by('phd_id', 'DESC');		
		$res = $this->db->query("SELECT * FROM income");

		return $res->result_array() > 0 ? $res->result_array() : 0;
	}
	
	public function transctionfailed()
	{
		
		$userid = $this->input->post('userid');
		$remoamout = $this->input->post('amount');		
		$cltbalance = $this->db->get_where('clients',array('clt_id'=>$userid))->row()->clt_bal;
		
		$data = array(
				'tr_status' => 'failed',
				'tr_lock' => 1,
				'tr_approved_by' => $this->session->userdata('adminusername'),				
				'tr_update'=> date('Y-m-d h:i:s')
				);					
			
		
		$this->db->where('tr_id', $this->input->post('trid'));
		$res = $this->db->update("transct", $data);
		
		$clientdata = array(
				'clt_bal' => ($cltbalance+$remoamout),	
				'clt_approved_by' => $this->session->userdata('adminusername'),				
				'clt_updated'=> date('Y-m-d h:i:s')
				);
		$this->db->where('clt_id', $userid);
		$res = $this->db->update("clients", $clientdata);
		
		return $res ? 1 : 0;
	}
	
	public function transctioninprogress()
	{
		$data = array(
				'tr_status' => 'inprogress',	
				'tr_approved_by' => $this->session->userdata('adminusername'),				
				'tr_update'=> date('Y-m-d h:i:s')
				);					
			
		
		$this->db->where('tr_id', $this->input->post('trid'));
		$res = $this->db->update("transct", $data);
		return $res ? 1 : 0;
	}
	
	
	public function getpercetile($amounttake)
	{
		$transapercetile = $this->db->get_where('settings' , array('type' =>'withdraw_perce'))->row()->description;
		
		$percentage=(($transapercetile/100)*$amounttake);
		$actual= $amounttake-$percentage;
		return $actual;
	}
	
	
	public function transctionsuccess()
	{
		
		$userid = $this->input->post('userid');
		$remoamout = $this->input->post('amount');
		$task = $this->input->post('task');
		$cltbalance = $this->db->get_where('clients',array('clt_id'=>$userid))->row()->clt_bal;
		$transapercetile = $this->db->get_where('settings' , array('type' =>'withdraw_perce'))->row()->description;
		$percentage=(($transapercetile/100)*$remoamout);
		$amountoremove = ($remoamout-$percentage);
		
		// for with drawing money
		//if($task=="withdraw" && ($cltbalance>$amountoremove)){
		if($task=="withdraw"){
		$transctdata = array(
				'tr_status' => 'success',
				'tr_lock' => 1,
				'tr_approved_by' => $this->session->userdata('adminusername'),				
				'tr_update'=> date('Y-m-d h:i:s')
				);
				
		$this->db->where('tr_id', $this->input->post('trid'));
		$res = $this->db->update("transct", $transctdata);

		/*
		$clientdata = array(
				'clt_bal' => ($cltbalance-$remoamout),	
				'clt_approved_by' => $this->session->userdata('adminusername'),				
				'clt_updated'=> date('Y-m-d h:i:s')
				);
		$this->db->where('clt_id', $userid);
		$res = $this->db->update("clients", $clientdata); */
			
		} else  if($task!="deposit"){
		$transctdata = array(
			'tr_status' => 'failed',
			'tr_lock' => 1,
			'tr_approved_by' => $this->session->userdata('adminusername'),				
			'tr_update'=> date('Y-m-d h:i:s')
			);
		$this->db->where('tr_id', $this->input->post('trid'));
		$res = $this->db->update("transct", $transctdata);
		
		$clientdata = array(
				'clt_bal' => ($cltbalance+$remoamout),	
				'clt_approved_by' => $this->session->userdata('adminusername'),				
				'clt_updated'=> date('Y-m-d h:i:s')
				);
		$this->db->where('clt_id', $userid);
		$res = $this->db->update("clients", $clientdata);
			
		}
		
		
		
		// for deposting money
		
		if($task=="deposit"){
		
		$transctdata = array(
				'tr_status' => 'success',
				'tr_lock' => 1,
				'tr_approved_by' => $this->session->userdata('adminusername'),				
				'tr_update'=> date('Y-m-d h:i:s')
				);
				
		$this->db->where('tr_id', $this->input->post('trid'));
		$res = $this->db->update("transct", $transctdata);

		$clientdata = array(
				'clt_bal' => ($cltbalance+$remoamout),	
				'clt_approved_by' => $this->session->userdata('adminusername'),				
				'clt_updated'=> date('Y-m-d h:i:s')
				);
		$this->db->where('clt_id', $userid);
		$res = $this->db->update("clients", $clientdata);
			
		} else  if($task!="withdraw"){
		$transctdata = array(
			'tr_status' => 'failed',
			'tr_lock' => 1,			
			'tr_approved_by' => $this->session->userdata('adminusername'),				
			'tr_update'=> date('Y-m-d h:i:s')
			);
		$this->db->where('tr_id', $this->input->post('trid'));
		$res = $this->db->update("transct", $transctdata);
			
		}
		
		
		return $res ? 1 : 0;
	}
	
	public function get_clientprod()
	{
		$this->db->order_by('phd_id', 'DESC');
		$res=	$this->db->get('products');

		return $res->result_array() > 0 ? $res->result_array() : 0;
	}
	
	public function get_clientdetails($cltid,$values)
	{
		$res=	$this->db->get_where('clients',array('clt_id'=>$cltid))->row();

		return $res->$values;
	}
	
	public function saveproduct()
	
	{
		$path = 'phd/upload/products/' .generateRandomString(). '.jpg';
		move_uploaded_file($_FILES['pic']['tmp_name'],$path );
		$data = array(
				
				'pro_dec' => $this->input->post('desc'),
				'pro_price' => $this->input->post('propric'),
				'pro_comsion' => $this->input->post('procomssion'),				
				'pro_name' => $this->input->post('proname'),	
				'pro_pic' => $path,
				'pro_date' =>date('Y-m-d h:i:s')
				
				
				);					
			
		$res = $this->db->insert("products", $data);

		return $res ? 1 : 0;
	}
	
	public function deleproduct()
	{
		//$filename = base_url().$this->db->get_where('products' , array('phd_id' =>$this->input->post('trid')))->row()->pro_pic;
		//unlink($filename);
		$this->db->where('phd_id',$this->input->post('trid'));
		$res = $this->db->delete("products");
		return $res ? 1 : 0;
	}
	
	function get_mysubonates($clientid)
    {
       $count=0;
	   
		$res = $this->db->query('WITH RECURSIVE descendants AS
(
SELECT clt_ref,0 as level 
FROM clients
WHERE clt_ref= "'.$clientid.'" 
UNION ALL
SELECT t.clt_ref,d.level+1
FROM descendants d, clients t
WHERE t.clt_parent=d.clt_ref
)
SELECT  *, count(*) as num   FROM descendants  GROUP BY level ');

$sections =$res->result_array();

        foreach ($sections as $row) {
            
			$count+=$row['num'];
        }
		
		return $count-1;
    }
	
	
	
}
