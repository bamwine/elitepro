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
r_product[0] = "purchased item 1";
r_product[1] = "purchased item 2";
r_product[2] = "purchased item 3 Hosting";
r_product[3] = "purchased Licence ";
r_product[4] = "renewed Hosting";
r_product[5] = "renewed AWS/VPS";
r_product[6] = "renewed Wordpress Hosting";
r_product[7] = "renewed Licence ";
     setInterval(function(){ $(".custom-social-proof").stop().slideToggle('slow'); }, 3000);
      $(".custom-close").click(function() {
        $(".custom-social-proof").stop().slideToggle('slow');
      });
        setInterval(function(){    
        	var myNumber = Math.floor(7*Math.random());
        	$("#map1").attr("src",r_map[myNumber]);
 			$('#country').text(r_text[myNumber]);

          	$('#product').text(r_product[Math.floor(7*Math.random())]);
 			var timeVal = Math.floor(7*Math.random());
 	
 			$('#time').text(timeVal);
 		
 		 
     //console.log(timeVal); 
 }, 6000);