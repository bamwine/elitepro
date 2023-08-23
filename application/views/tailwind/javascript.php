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
    toastr.error("<?php echo $this->session->flashdata('failed'); ?>");
<?php }else if($this->session->flashdata('warning')){  ?>
    toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
<?php }else if($this->session->flashdata('info')){  ?>
    toastr.info("<?php echo $this->session->flashdata('info'); ?>");
<?php } ?>
</script>