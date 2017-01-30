<body>
	
			
<div id="wrapper">	
<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">PPDB ONLINE</a> 
            </div>
  <?php if($this->session->has_userdata('id')) {?>
  <div style="color: white; padding: 0px 50px 0px 50px; float: right; font-size: 16px;"> 
	<h3 align="right"> Selamat datang <?php echo $this->session->userdata("nama");?>
	<a href="logout" class="btn btn-danger square-btn-adjust">LOGOUT</a></h3><?php }else {?>
  <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"> 

    <a href="<?php echo site_url('c_ppdb/index');?>" class="btn btn-danger square-btn-adjust">HOME</a> 
    <a href="<?php echo site_url('c_ppdb/registrasi');?>" class="btn btn-danger square-btn-adjust">REGISTRASI</a>
    <a href="<?php echo site_url('c_ppdb/login');?>" class="btn btn-danger square-btn-adjust">LOGIN</a><?php } ?>
	</div>
</nav> 