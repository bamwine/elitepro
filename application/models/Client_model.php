<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Client_model extends CI_Model 
{
	private $user_id;
	private $today;

	public function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('cltid');
		$this->today = date('Y-m-d h:i:s');
	}
	// --------------------------------------------------------------------

	public function save_register()
	{
 
			$data = array(				
				'clt_name' => $this->input->post('unname'),	
				'clt_phone' => $this->input->post('phone'),	
				'clt_passwd' => sha1(md5($this->input->post('passwd'))),
				'clt_btc_paswd' => $this->input->post('transactionpwd'),
				'clt_created'=> date('y-m-d'),
				'clt_gender' => $this->input->post('gender'),				
				'clt_ref'=> h_generate_clt_code(),
				'clt_id'=> h_generate_clt_id(),			
				'clt_parent' => $this->input->post('invite_code'),
				
				);					
			
		$res = $this->db->insert("clients", $data);

		return $res ? 1 : 0;
	}
	
	
	public function process_login($user_name,$password)
	{
		$res = $this->db->query('SELECT * FROM clients where clt_name = "'.$user_name.'" or clt_phone = "'.$user_name.'"  and clt_passwd = "'.sha1(md5($password)).'" and clt_status="open" ');

		return $res->num_rows() > 0 ? $res->row() : 0;
	}
	
	public function check_accout()
	{
		$username = $this->input->post('uname');
		$password = $this->input->post('password');
		$res = $this->db->query('SELECT * FROM clients where clt_name = "'.$username.'" or clt_phone = "'.$username.'"  and clt_passwd = "'.sha1(md5($password)).'" and clt_status="open" ');

		return !empty($res->row()->clt_status)=="open" ? 1 : 0;
	}
	
	
	public function process_changepwd()
	{
		
		$currentpass = sha1(md5($this->input->post('currentpass')));
		$newpass = $this->input->post('newpass');
		$phone = $this->session->userdata('phone');
				
			
		$data = array(				
				'clt_passwd' => sha1(md5($newpass)),				
				);
				
		//$this->db->where('user_name',$username);		
		$this->db->where('clt_phone' ,$phone,'clt_passwd',$currentpass);
		
		$res = $this->db->update('clients' , $data);
		
		return $res ? 1 : 0;
	}
	
	public function process_transpwd()
	{
		
		$currentpass = $this->input->post('currentpass');
		$newpass = $this->input->post('newpass');
		$phone = $this->session->userdata('phone');
				
			
		$data = array(				
				'clt_btc_paswd' => $newpass,				
				);
				
			
		$this->db->where('clt_phone' ,$phone,'clt_btc_paswd',$currentpass);
		
		$res = $this->db->update('clients' , $data);
		
		return $res ? 1 : 0;
	}
	
	
	public function get_clientbal()
	{
		$res=	$this->db->get_where('clients',array('clt_id'=>$this->session->userdata('cltid')))->row();

		return $res->clt_bal;
	}
	
	public function get_clientdetails($values)
	{
		$res=	$this->db->get_where('clients',array('clt_id'=>$this->session->userdata('cltid')))->row();

		return $res->$values;
	}
	
	public function get_clientdetails2($passd)
	{
		$res = $this->db->query('SELECT * FROM clients where clt_id = "'.$this->session->userdata('cltid').'" and clt_btc_paswd = "'.$passd.'"');
      
		//$res=	$this->db->get_where('clients',array('clt_id'=>$this->session->userdata('cltid'),'clt_phone'=>$this->session->userdata('phone'),'clt_btc_paswd'=>$passd))->row();

		if ($res->num_rows() > 0){
        return true;
    }
    else{
        return false;
    }
	
		
	}
	
	public function get_clientpaymentwith()
	{
		
		$walletname =$this->input->post('wallet');
		$walletaddress =$this->input->post('trcwallet');
		$data = array(				
				'clt_btc_wallet' => $walletname,
				'clt_btc_add' => $walletaddress,
				);
				
		$this->db->where('clt_id',$this->session->userdata('cltid'),'clt_phone',$this->session->userdata('phone'));
		$res = $this->db->update('clients' , $data);
		return $res ? 1 : 0;
	}
	
	
	public function get_clientdeposit()
	{
		$this->db->order_by('phd_id', 'DESC');
		$res=	$this->db->get_where('transct',array('tr_clt_id'=>$this->session->userdata('cltid'),'tr_type'=>"deposit"));

		return $res->result_array() > 0 ? $res->result_array() : 0;
	}
	
	public function get_clientwithdraw($data)
	{
		$res="";
		if($data==""){
		$this->db->order_by('phd_id', 'DESC');
		$res=	$this->db->get_where('transct',array('tr_clt_id'=>$this->session->userdata('cltid'),'tr_type'=>"withdraw",'tr_status'=>"success"));
	   }
	   
	   if($data=="pending"){
		$this->db->order_by('phd_id', 'DESC');
		$res=	$this->db->get_where('transct',array('tr_clt_id'=>$this->session->userdata('cltid'),'tr_type'=>"withdraw",'tr_status'=>"pending"));
	   }
	   
	   if($data=="failed"){
		$this->db->order_by('phd_id', 'DESC');
		$res=	$this->db->get_where('transct',array('tr_clt_id'=>$this->session->userdata('cltid'),'tr_type'=>"withdraw",'tr_status'=>"failed"));
	   }
		return $res->result_array() > 0 ? $res->result_array() : 0;
	}
	
	
	public function get_clienttransct()
	{
		$this->db->order_by('phd_id', 'DESC');
		$res=	$this->db->get_where('transct',array('tr_clt_id'=>$this->session->userdata('cltid')));

		return $res->result_array() > 0 ? $res->result_array() : 0;
	}
	
	public function deposit()
	{
 
			$data = array(
				'tr_clt_id' => $this->session->userdata('cltid'),	
				'tr_id' => h_generate_transct_id(),	
				'tr_rechage' => $this->input->post('depo_type'),	
				'tr_amount' => $this->input->post('depo_amt'),
				'tr_status'=> 'pending',
				'tr_update' =>date('Y-m-d h:i:s'),				
				'tr_date'=> date('Y-m-d h:i:s'),
				'tr_type'=>"deposit",
				'tr_com_address' =>$this->input->post('compaddres'),
				);					
			
		$res = $this->db->insert("transct", $data);

		return $res ? 1 : 0;
	}
	
		public function withdraw()
	{
			
			$cltbalance = $this->get_clientbal();
			$data = array(
				'tr_clt_id' => $this->session->userdata('cltid'),	
				'tr_id' => h_generate_transct_id(),	
				'tr_amount' => ((int)$this->input->post('with_amt')),
				'tr_status'=> 'pending',
				'tr_update' =>date('Y-m-d h:i:s'),				
				'tr_date'=> date('Y-m-d h:i:s'),
				'tr_type'=>"withdraw",
				'tr_paswd' =>$this->get_clientdetails('clt_btc_paswd')??'not set',
				'tr_clt_address' =>$this->get_clientdetails('clt_btc_add')??'not set',
				'tr_rechage' =>$this->get_clientdetails('clt_btc_wallet')??'not set',
				);					
			
		$res = $this->db->insert("transct", $data);
		
		$clientdata = array(
				'clt_bal' => ($cltbalance-(int)$this->input->post('with_amt')),			
				'clt_updated'=> date('Y-m-d h:i:s')
				);
		$this->db->where('clt_id', $this->session->userdata('cltid'));
		$res = $this->db->update("clients", $clientdata);
		

		return $res ? 1 : 0;
	}
	
	public function check_if_withdrwa()
	{
		$clntid = $this->session->userdata('cltid');
		$tradelimit = (int)$this->db->get_where('settings' , array('type' =>'withdraw_times'))->row()->description;
		$dates = date('Y-m-d');
		
		$res = $this->db->query('SELECT * FROM transct where tr_clt_id = "'.$clntid.'" and tr_type = "withdraw" and tr_date like "%'.$dates.'%"');

		return $res->num_rows() >= $tradelimit ? 0 : 1;
	}
	
	public function check_if_withdrwamin()
	{
		
		$tradelimit = (int)$this->db->get_where('settings' , array('type' =>'withdraw_minamount'))->row()->description;		
		$res = $this->input->post('with_amt');

		return $res<= $tradelimit ? 0 : 1;
	}
	
	
	
	
	public function proaccount()
	{
 	 
         $data['clt_btc_add'] = $this->input->post('btcadd');
		 $data['clt_btc_paswd'] = $this->input->post('btcpassw');
         $this->db->where('clt_id' , $this->session->userdata('cltid'));
		 $res = $this->db->update('clients' , $data);		 
		 	 
       return $res ? 1 : 0;  
	}
	
	public function prosecurity()
	{
 	 
         $data['clt_email'] = $this->input->post('btcemail');
		 $data['clt_passwd'] = sha1(md5($this->input->post('passwd')));
		 $data['clt_tat'] = $this->input->post('passwd');
		 
         $this->db->where('clt_id' , $this->session->userdata('cltid'));
		 $res = $this->db->update('clients' , $data);		 
		 	 
       return $res ? 1 : 0;  
	}
	
	public function getlevelone()
	{
 	
	$res = $this->db->query('SELECT count(*) as onelv FROM clients where (clt_parent = "'.$this->get_clientdetails('clt_ref').'") ');
	return $res->row()->onelv > 0 ? $res->row()->onelv : 0;		 
        
	}
	
	public function getleveltwo()
	{
 	
	$res = $this->db->query('SELECT count(*) as onelv FROM clients where (clt_parent = "'.$this->get_clientdetails('clt_ref').'") ');
	return $res->row()->onelv > 0 ? $res->row()->onelv : 0;		 
        
	}
	
	public function getcompdetails()
	{
 	
	$res = $this->db->query('SELECT * FROM settings_comp_address');
	return  $res->result_array() > 0 ? $res->result_array() : 0;	 
        
	}
	
	public function get_todayweekincome($daterange,$thisweekrange)
	{
	$res ="";	
	
	if($thisweekrange==""){
	$res = $this->db->query('SELECT sum(inc_amount) as ttamoun FROM income where (inc_person = "'.$this->session->userdata('cltid').'")   and  YEARWEEK(inc_date) = YEARWEEK(NOW()) ');
		
	}
	
	if($daterange!=""){
	$res = $this->db->query('SELECT sum(inc_amount) as ttamoun FROM income where (inc_person = "'.$this->session->userdata('cltid').'")  and inc_date like "%'.$daterange.'%"  ');
		
	}
	//$res = $this->db->query('SELECT sum(inc_amount) as ttamoun FROM income where (inc_person = "'.$this->session->userdata('cltid').'")  and inc_date like "%'.$daterange.'%"  ');
	
	return $res->row()->ttamoun > 0 ? $res->row()->ttamoun : 0;	
	}
	
	
	public function get_todayweekwithdraw($daterange,$thisweekrange)
	{
	$res ="";	
	
	if($thisweekrange==""){
	$res = $this->db->query('SELECT sum(tr_amount) as ttamoun FROM transct where (tr_clt_id = "'.$this->session->userdata('cltid').'") and tr_type = "withdraw"  and  YEARWEEK(tr_update) = YEARWEEK(NOW()) ');
		
	}
	
	if($daterange!=""){
	$res = $this->db->query('SELECT sum(tr_amount) as ttamoun FROM transct where (tr_clt_id = "'.$this->session->userdata('cltid').'") and tr_type = "withdraw" and tr_update like "%'.$daterange.'%"  ');
		
	}
	//$res = $this->db->query('SELECT sum(tr_amount) as ttamoun FROM transct where (tr_clt_id = "'.$this->session->userdata('cltid').'") and tr_type = "withdraw" and tr_update like "%'.$daterange.'%"  ');
	
	return $res->row()->ttamoun > 0 ? $res->row()->ttamoun : 0;	
	}
	
	public function get_todayweekdeposit($daterange,$thisweekrange)
	{
		
	$res ="";	
	
	if($thisweekrange==""){
	$res = $this->db->query('SELECT sum(tr_amount) as ttamoun FROM transct where (tr_clt_id = "'.$this->session->userdata('cltid').'") and tr_type = "deposit"  and  YEARWEEK(tr_update) = YEARWEEK(NOW()) ');
		
	}
	if($daterange!=""){
	$res = $this->db->query('SELECT sum(tr_amount) as ttamoun FROM transct where (tr_clt_id = "'.$this->session->userdata('cltid').'") and tr_type = "deposit" and tr_update like "%'.$daterange.'%"  ');
	}
	return $res->row()->ttamoun > 0 ? $res->row()->ttamoun : 0;
	}
	
	public function get_todayweektrasct($daterange,$thisweekrange)
	{
		
	$res ="";	
	
	if($thisweekrange==""){
	$res = $this->db->query('SELECT sum(tr_amount) as ttamoun FROM transct where (tr_clt_id = "'.$this->session->userdata('cltid').'") and tr_status = "success"  and  YEARWEEK(tr_update) = YEARWEEK(NOW()) ');
		
	}
	if($daterange!=""){
	$res = $this->db->query('SELECT sum(tr_amount) as ttamoun FROM transct where (tr_clt_id = "'.$this->session->userdata('cltid').'") and tr_status = "success" and tr_update like "%'.$daterange.'%"  ');
	}
	return $res->row()->ttamoun > 0 ? $res->row()->ttamoun : 0;
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
	
	public function get_colortext($status)
	{
		
		switch($status){
			case "pending":
			return "#f3d334";
			break;
			
			case "success":
			return "green";
			break;
			
			case "failed":
			return "red";
			break;
			
			case "inprogress":
			return "blue";
			break;
			
			default:
			return "#f3d334";
		}
	
	
	}
	



public function get_clientprod()
	{
		$clntid = $this->session->userdata('cltid');
		$dates = date('Y-m-d h:i:s'); 
		$this->db->order_by('phd_id', 'DESC');
		
		$res = $this->db->query('SELECT *
FROM products
WHERE phd_id NOT IN
  (SELECT inc_item  
  FROM income WHERE inc_person="'.$clntid.'" and YEARWEEK(inc_date) = YEARWEEK(NOW()))');

		return $res->result_array() > 0 ? $res->result_array() : 0;
	}
	
	
	
	public function getcommisson($amounttake)
	{
		$transapercetile = $this->db->get_where('settings' , array('type' =>'product_commission'))->row()->description;
		
		$actual=($transapercetile*$amounttake);		
		return $actual;
	}
	
	
	public function check_if_bought()
	{
		$clntid = $this->session->userdata('cltid');
		$tradelimit = (int)$this->db->get_where('settings' , array('type' =>'trade_limits'))->row()->description;
		$dates = date('Y-m-d');
		
		$res = $this->db->query('SELECT * FROM income where inc_person = "'.$clntid.'" and inc_date like "%'.$dates.'%"');

		return $res->num_rows() >= $tradelimit ? 0 : 1;
	}
	
	
public function buy_product()
	{   
	
	$res="";
	
	if(isset($_POST['allmoney'])){ 
	
		
		$productprice = $this->input->post('proprice');
		$propid = $this->input->post('propid');
		$clntbal =$this->get_clientbal();		
		$commission = $this->getcommisson($productprice);
		$which_value= ($clntbal/$productprice);
		// here account balance is $exactcomissionbalance
        //$exactcomissionbalance = ($commission*$which_value);
		
		$balance = ($commission*$which_value);
		// $exactcomissionbalance = $balance+$productprice+$clntbal;
		$exactcomissionbalance = $balance+$clntbal;
		$clntid = $this->session->userdata('cltid');		
			
		$dates = date('Y-m-d h:i:s'); 
		
		$res = $this->db->query('UPDATE clients SET clt_bal = "'.$exactcomissionbalance.'" WHERE clt_id = "'.$clntid.'" ');
		$res2 = $this->db->query('INSERT INTO income (inc_person, inc_item, inc_date, inc_amount,used_money) VALUES ("'.$clntid.'", "'.$propid.'", "'.$dates.'", "'.$commission.'", "'.$clntbal.'"); ');
	} else{
		
		$productprice = $this->input->post('proprice');
		$propid = $this->input->post('propid');
		$clntbal =$this->get_clientbal();
		$commission = $this->getcommisson($productprice);		
		$clntid = $this->session->userdata('cltid');
		
		// removes $productprice
		//$actualamount = ($clntbal+$commission-$productprice);
		
		// add comiision and  $productprice 
		// $actualamount = ($clntbal+$commission+$productprice);
		$actualamount = ($clntbal+$commission);
		$dates = date('Y-m-d h:i:s'); 
		
		$res = $this->db->query('UPDATE clients SET clt_bal = "'.$actualamount.'" WHERE clt_id = "'.$clntid.'" ');
		$res2 = $this->db->query('INSERT INTO income (inc_person, inc_item, inc_date, inc_amount,used_money) VALUES ("'.$clntid.'", "'.$propid.'", "'.$dates.'", "'.$commission.'" ,"'.$productprice.'"); ');
		
	}

		return $res  ? 1 : 0;
	}
		
	
	
function display_children($level) {
	
	$ans=0;
	
$res = $this->db->query('WITH RECURSIVE descendants AS
(
SELECT clt_ref,0 as level 
FROM clients
WHERE clt_ref= "'.$this->get_clientdetails("clt_ref").'" 
UNION ALL
SELECT t.clt_ref,d.level+1
FROM descendants d, clients t
WHERE t.clt_parent=d.clt_ref
)
SELECT  *, count(*) as num   FROM descendants where level = "'.$level.'" GROUP BY level ');
	
	// $res->row()->num
	return !empty($res->row()->num) ? $res->row()->num:0;
} 


function get_mysubonates()
    {
       $count=0;
	   
		$res = $this->db->query('WITH RECURSIVE descendants AS
(
SELECT clt_ref,0 as level 
FROM clients
WHERE clt_ref= "'.$this->get_clientdetails("clt_ref").'" 
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
	
	public function get_prodctdetails($id,$values)
	{
		$res=	$this->db->get_where('products',array('phd_id'=>$id))->row();

		return $res->$values;
	}
	
	public function get_trades()
	{
		$clntid = $this->session->userdata('cltid');		
		$res = $this->db->query('SELECT * FROM income WHERE inc_person = "'.$clntid.'"  ORDER BY phd_id DESC ');

		return $res->result_array() > 0 ? $res->result_array() : 0;
	}
	
	
	public function vip_level()
	{
		
		$clntbal =$this->get_clientbal();
		$level="";
		
		if ($clntbal <= 500) {               
             $level="VIP1";   
          }
		
		else if ($clntbal >= 500 && $clntbal <= 1000) {
			  
			$level="VIP2";  
		  }
		else if ($clntbal >= 1000 && $clntbal <= 1500) {
			
			$level="VIP3";			
		}  
		
		else if ($clntbal >= 1500 && $clntbal <= 2000) {
			$level="VIP4";
		
		} else if ($clntbal >= 2000) {
			
			$level="VIP5";
			
		}
		return $level;
	}
	
	
		public function prodvip_level($clntbal)
	{
		
		
		$level="";
		
		if ($clntbal <= 500) {               
             $level="VIP1";   
          }
		
		else if ($clntbal >= 500 && $clntbal <= 1000) {
			  
			$level="VIP2";  
		  }
		else if ($clntbal >= 1000 && $clntbal <= 1500) {
			
			$level="VIP3";			
		}  
		
		else if ($clntbal >= 1500 && $clntbal <= 2000) {
			$level="VIP4";
		
		} else if ($clntbal >= 2000) {
			
			$level="VIP5";
			
		}
		return $level;
	}
	
	public function get_ramdom_products()// load data on javascript popup
	{
			
		//$res = $this->db->query('SELECT * FROM products ORDER BY RAND() LIMIT 1');
		$res = $this->db->query('SELECT * FROM products WHERE pro_price BETWEEN '.$this->get_clientdetails("clt_level_money").' ORDER BY RAND() LIMIT 1');

		return $res->num_rows() > 0 ? $res->row() : 0;
	}
	
	public function get_clientrecords()
	{
		$this->db->order_by('id', 'DESC');
		$res=	$this->db->get_where('records',array('clt_id'=>$this->session->userdata('cltid')));

		return $res->result_array() > 0 ? $res->result_array() : 0;
	}
	
	
	
	public function task_manger()
	{
		
		//  insert into records;
		$trdatec =date('Y-m-d h:i:s');
		$prod_id = $this->input->post('prod_id');
		$tr_id =  h_generate_transct_id();
		$status = "success";		
		// end  insert into records;
		$res="";
		$commssion = $this->input->post('commssion');
		$datec = date('Y-m-d'); 
		$clt_id =$this->session->userdata('cltid');
		
		$usertask = $this->get_clientdetails('clt_tasks'); 
		$hold = $this->db->query('SELECT * FROM tasks where clt_id = "'.$clt_id.'" and created = "'.$datec.'"');
      
	  if ($hold->row()->count_id < $usertask) // makes sure client tasks dont exceced limit
		{
		if ($hold->num_rows() >0) // makes sure  if client has tasks for today
		{
			// $updateQuery = 'UPDATE tasks SET count_id = count_id + 1 WHERE clt_id = "'.$clt_id.'" and created = "'.$datec.'"';
          $res = $this->db->query('UPDATE tasks SET count_id = count_id + 1 WHERE clt_id = "'.$clt_id.'" and created = "'.$datec.'" ');
		  $res2 = $this->db->query('UPDATE clients SET clt_comsion = clt_comsion + "'.$commssion.'" ,clt_bal = clt_bal + "'.$commssion.'" WHERE clt_id = "'.$clt_id.'"  ');
		  $res3 = $this->db->query('INSERT INTO records (pro_id,clt_id,date_transct,transct_id,status) VALUES ("'.$prod_id.'", "'.$clt_id.'", "'.$trdatec.'","'.$tr_id.'","'.$status.'") ');
		  
			
		} else {
			//$insertQuery = "INSERT INTO tasks (count_id, clt_id,created) VALUES (1,'$clt_id', '$datec')";
           $res = $this->db->query('INSERT INTO tasks (count_id, clt_id,created) VALUES ("1", "'.$clt_id.'", "'.$datec.'") ');
		   $res2 = $this->db->query('UPDATE clients SET clt_comsion = clt_comsion + "'.$commssion.'" ,clt_bal = clt_bal + "'.$commssion.'" WHERE clt_id = "'.$clt_id.'"  ');
		  $res3 = $this->db->query('INSERT INTO records (pro_id,clt_id,date_transct,transct_id,status) VALUES ("'.$prod_id.'", "'.$clt_id.'", "'.$trdatec.'","'.$tr_id.'","'.$status.'") ');
		  
		}
		return true;
	}  else {
		
		return false;
	}
		
		
	}
	
	
	public function checkaddress()
	{
		
		$res = $this->db->query('SELECT * FROM clients WHERE clt_id = "'.$this->session->userdata('cltid').'" and clt_btc_add != "" and clt_btc_wallet != "" and clt_btc_paswd != "" ');
      

		return $res->num_rows() > 0 ? true:false ;
	}
	
	
	
}
