<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +62 821 169 169 99</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> hipmi@upi.edu</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/hipmi.ptupi?fref=ts"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/hipmiptupi"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.instagram.com/hipmiptupi/"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-LINE">LINE</i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/produk/hipmilogo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									IND
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">IND</a></li>
									<li><a href="#">ENG</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php
									if ($this->session->has_userdata('log_user')) {
								?>
									<li class="<?php if(isset($menu_wishlist)) echo "active"; ?>"><a href="<?php echo base_url('produk/wishlist'); ?>"><i class="fa fa-star"></i> Wishlist</a></li>
								<?php
									}
								?>
								<!-- <li><a href="#"><i class="fa fa-crosshairs"></i> Checkout</a></li> -->
								<li class="<?php if(isset($menu_cart)) echo "active"; ?>"><a href="<?php echo base_url('user/cart'); ?>"><i class="fa fa-shopping-cart"></i> Keranjang Belanja</a></li>
								<?php
									if (!$this->session->has_userdata('log_user')) {
								?>
									<li <?php if(isset($menu_login)) echo "active"; ?>><a href="<?php echo base_url('user/login'); ?>"><i class="fa fa-plus-square-o"></i> Daftar</a></li>
									<li><a href="<?php echo base_url('user/login'); ?>" class="<?php if(isset($menu_login)) echo $menu_login; ?>"><i class="fa fa-lock"></i> Login</a></li>
								<?php
									}else {
								?>
										<li><a href="<?php echo base_url('user/transaksi'); ?>"><i class="fa fa-exchange"></i> Transaksi</a></li>
										<li><a href="<?php echo base_url('user'); ?>" ><i class="fa fa-user"></i> <?php echo $this->session->userdata('nama_user'); ?></a></li>
										<li><a href="<?php echo base_url('user/logout'); ?>"><i class="fa fa-sign-out"></i> Logout	</a></li>
								<?php
									}
								?>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo base_url(); ?>" class="<?php if(isset($menu_beranda)) echo "active"; ?>">Beranda</a></li>
								<li><a href="<?php echo base_url(); ?>Pasar_upi/index" class="<?php if(isset($menu_pasar_upi)) echo "active"; ?>">Pasar UPI</a></li> 
								<li class="dropdown"><a href="<?php echo base_url();?>Info_hipmi/index"  class="<?php if(isset($menu_info_hipmi)) echo "active"; ?>">Info HIPMI PT UPI<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                       						
										<li><a href="<?php echo base_url();?>Info_hipmi/kegiatan">Kegiatan HIPMI PT UPI</a></li>  
										<li><a href="<?php echo base_url();?>Info_hipmi/kepengurusan">Kepengurusan</a></li> 
										<li><a href="<?php echo base_url();?>Info_hipmi/database">Database Anggota</a></li> 
                                    </ul>
                                </li> 
	
				<li class="<?php if(isset($menu_about)) echo "active"; ?>"><a href="contact-us.html">Hubungi Kami</a></li>							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<form action="<?php echo base_url('produk/cari/'); ?>" method="get" accept-charset="utf-8">
							<div class="search_box pull-right">
								<input type="text" name="s" value="<?php if(isset($_GET['s'])) echo $_GET['s']; ?>" placeholder="Pencarian"/>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
