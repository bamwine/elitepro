<script src="<?php echo base_url();?>phd/tailwind/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url();?>phd/tailwind/toastr.js"></script>

<script type="text/javascript">
	var baseurl = '<?php echo base_url(); ?>';
</script>


<script type="text/javascript">
var toastr =new Toastr({
 position:'bottomCenter',
  theme:'android'
});

function myFunction() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
<?php if($this->session->flashdata('success')){ ?>
toastr.show('<?php echo $this->session->flashdata('success'); ?>');
//myFunction();
<?php }else if($this->session->flashdata('failed')){  ?>
    toastr.show("<?php echo $this->session->flashdata('failed'); ?>");
<?php }else if($this->session->flashdata('warning')){  ?>
    toastr.show("<?php echo $this->session->flashdata('warning'); ?>");
<?php }else if($this->session->flashdata('info')){  ?>
    toastr.show("<?php echo $this->session->flashdata('info'); ?>");
<?php } ?>
</script>


<script type="text/javascript">
   
        var r_text = new Array ();
r_text[0] = "London UK";
r_text[1] = "New York USA";
r_text[2] = "Beijing China";
r_text[3] = "Mumbai India";
r_text[4] = "Manchester UK";
r_text[5] = "Los Angeles USA";
r_text[6] = "Shanghai China";
r_text[7] = "Delhi India";
r_text[8] = "Birmingham UK";
r_text[9] = "Chicago USA";
r_text[10] = "Guangzhou China";
r_text[11] = "Bangalore India";
r_text[12] = "Glasgow UK";
r_text[13] = "Houston USA";
r_text[14] = "Shenzhen China";
r_text[15] = "Hyderabad India";
r_text[16] = "Miami USA";
r_text[17] = "Liverpool UK";
r_text[18] = "Chongqing China";
r_text[19] = "Chennai India";
r_text[20] = "Edinburgh UK";
r_text[21] = "San Francisco USA";
r_text[22] = "Hangzhou China";
r_text[23] = "Kolkata India";
r_text[24] = "Bristol UK";
r_text[25] = "Washington, D.C. USA";
r_text[26] = "Tianjin China";
r_text[27] = "Pune India";
r_text[28] = "Leeds UK";
r_text[29] = "Boston USA";
r_text[30] = "Chengdu China";
r_text[31] = "Ahmedabad India";
r_text[32] = "Newcastle UK";
r_text[33] = "Seattle USA";
r_text[34] = "Nanjing China";
r_text[35] = "Jaipur India";
r_text[36] = "Sheffield UK";
r_text[37] = "Atlanta USA";
r_text[38] = "Xi'an China";
r_text[39] = "Lucknow India";


    var r_map = new Array ();
r_map[0] = "<?php echo base_url();?>phd/tailwind/user.png";
r_map[1] = "<?php echo base_url();?>phd/tailwind/user.png";
r_map[2] = "<?php echo base_url();?>phd/tailwind/user.png";
r_map[4] = "<?php echo base_url();?>phd/tailwind/user.png";
r_map[5] = "<?php echo base_url();?>phd/tailwind/user.png";
r_map[6] = "<?php echo base_url();?>phd/tailwind/user.png";

 
var r_product = new Array ();
r_product[0] =  "Created account and deposited 300 USD"	
r_product[1] =	"Has withdrawn 300 USD of commission" 
r_product[2] =	"Purchased Application 230 of 500 USD"  
r_product[3] =	"Has Upgraded to VIP3"  
r_product[4] =	"Purchased Application 130 of 100 USD"  
r_product[5] =	"Has deposited 150 USD on account"  
r_product[6] =	"Created account and deposited 400 USD" 
r_product[7] =	"Has made over 1000 USD of commission" 
r_product[8] =	"Has deposited 100 USD on account"  
r_product[9] =	"Has withdrawn 500 USD"  
r_product[10] =	"Has Upgraded to VIP2"  
     setInterval(function(){ $(".custom-social-proof").stop().slideToggle('slow'); }, 3000);
      $(".custom-close").click(function() {
        $(".custom-social-proof").stop().slideToggle('slow');
      });
        setInterval(function(){    
        	var myNumber = Math.floor(7*Math.random());
        	$("#map1").attr("src",r_map[myNumber]);
			//$('#country').text(r_text[myNumber]);
 			$('#country').text(r_text[Math.floor(39*Math.random())]);

          	$('#product').text(r_product[Math.floor(10*Math.random())]);
 			var timeVal = Math.floor(7*Math.random());
 	
 			$('#time').text(timeVal);
 		
 		 
     //console.log(timeVal); 
 }, 6000);

</script>