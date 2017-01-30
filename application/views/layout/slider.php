<?php if($title=='Info Hipmi'){?> 
<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-12">
								<?php if ($list_slider7 != NULL) {
											foreach ($list_slider7 as $value) {
											?>
												<img src="<?php echo base_url(); ?>assets/images/slider/<?php echo $value->foto_slider; ?>" class="girl img-responsive" alt="" />
											<?php
													}
												}
											?>
							</div>
							</div>
							<div class="item">
								<div class="col-sm-12">
								<?php if ($list_slider8 != NULL) {
											foreach ($list_slider8 as $value) {
											?>
												<img src="<?php echo base_url(); ?>assets/images/slider/<?php echo $value->foto_slider; ?>" class="girl img-responsive" alt="" />
											<?php
													}
												}
											?>
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-12">
								<?php if ($list_slider9 != NULL) {
											foreach ($list_slider9 as $value) {
											?>
												<img src="<?php echo base_url(); ?>assets/images/slider/<?php echo $value->foto_slider; ?>" class="girl img-responsive" alt="" />
											<?php
													}
												}
											?>
								</div>
							</div>
						</div>
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
<?php } elseif($title=='Beranda'){?> 
<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<?php if ($list_slider1 != NULL) {
											foreach ($list_slider1 as $value) {
											?>
									
									<div class="col-sm-6">
									<h1><span>HIPMI</span>-PT UPI</h1>
									<h2>Himpunan Pengusaha Muda</h2>
									<a href="<?php echo base_url('Info_hipmi/index');?>" ><button type="button" class="btn btn-default get">Baca Sekarang Juga</button></a>
									</div>
								
											<div class="col-sm-6">
												<img src="<?php echo base_url(); ?>assets/images/slider/<?php echo $value->foto_slider; ?>" class="girl img-responsive" alt="" />
											</div>
							
											<?php
													}
												}
											?>
							</div>
							<div class="item">
								<?php if ($list_slider2 != NULL) {
											foreach ($list_slider2 as $value) {
											?>
									
									<div class="col-sm-6">
									<h1><span>PASAR</span>-UPI</h1>
									<h2>Jual Produkmu Sekarang!</h2>
									<a href="<?php echo base_url('pasar_upi/index');?>" ><button type="button" class="btn btn-default get">Baca Sekarang Juga</button></a>
									</div>
								
											<div class="col-sm-6">
												<img src="<?php echo base_url(); ?>assets/images/slider/<?php echo $value->foto_slider; ?>" class="girl img-responsive" alt="" />
											</div>
							
											<?php
													}
												}
											?>
							</div>
							<div class="item">
								<?php if ($list_slider3 != NULL) {
											foreach ($list_slider3 as $value) {
											?>
									
									<div class="col-sm-6">
									<h1><span>BIM4</span>FEST</h1>
									<h2>Bisnis Mahasiswa Festifal</h2>
									<a href="<?php echo base_url('info_hipmi/program/2');?>" ><button type="button" class="btn btn-default get">Baca Sekarang Juga</button></a>
									</div>
								
											<div class="col-sm-6">
												<img src="<?php echo base_url(); ?>assets/images/slider/<?php echo $value->foto_slider; ?>" class="girl img-responsive" alt="" />
											</div>
							
											<?php
													}
												}
											?>
							</div>
						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
<?php } else {?>	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<?php if ($list_slider4 != NULL) {
											foreach ($list_slider4 as $value) {
											?>
									
									<div class="col-sm-6">
									<h1><span>HIPMI</span>-PT UPI</h1>
									<h2>Himpunan Pengusaha Muda</h2>
									<a href="<?php echo base_url('Info_hipmi/index');?>" ><button type="button" class="btn btn-default get">Detail</button></a>
									</div>
								
											<div class="col-sm-6">
												<img src="<?php echo base_url(); ?>assets/images/slider/<?php echo $value->foto_slider; ?>" class="girl img-responsive" alt="" />
											</div>
							
											<?php
													}
												}
											?>
							</div>
							<div class="item">
								<?php if ($list_slider5 != NULL) {
											foreach ($list_slider5 as $value) {
											?>
									
									<div class="col-sm-6">
									<h1><span>HIPMI</span>-PT UPI</h1>
									<h2>Himpunan Pengusaha Muda</h2>
									<a href="<?php echo base_url('Info_hipmi/index');?>" ><button type="button" class="btn btn-default get">Detail</button></a>
									</div>
								
											<div class="col-sm-6">
												<img src="<?php echo base_url(); ?>assets/images/slider/<?php echo $value->foto_slider; ?>" class="girl img-responsive" alt="" />
											</div>
							
											<?php
													}
												}
											?>
							</div>
							
							<div class="item">
								<?php if ($list_slider6 != NULL) {
											foreach ($list_slider6 as $value) {
											?>
									
									<div class="col-sm-6">
									<h1><span>HIPMI</span>-PT UPI</h1>
									<h2>Himpunan Pengusaha Muda</h2>
									<a href="<?php echo base_url('Info_hipmi/index');?>" ><button type="button" class="btn btn-default get">Detail</button></a>
									</div>
								
											<div class="col-sm-6">
												<img src="<?php echo base_url(); ?>assets/images/slider/<?php echo $value->foto_slider; ?>" class="girl img-responsive" alt="" />
											</div>
							
											<?php
													}
												}
											?>
							</div>
						</div>
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
<?php }?>	