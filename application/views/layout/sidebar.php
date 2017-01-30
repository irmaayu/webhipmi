<?php if($title=='Beranda' || $title=='Berita' || $title=='Kegiatan HIPMI PT UPI' || $title=='Galeri' || $title=='Database Anggota HIPMI PT UPI' || $title=='Kepengurusan HIPMI PT UPI'){?> 
<?php  } elseif($title=='Info Hipmi'){ ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Agenda</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div id="sportswear" class="panel-collapse in">
									<div class="panel-body">
										<ul>
											<?php
												if ($list_agenda != NULL) {
													foreach ($list_agenda as $value) {
											?>
														<a href="<?php echo base_url('info_hipmi/agenda/' .$value->id_agenda); ?>"><li><?php echo $value->tanggal_agenda; ?> 
														<h4><?php echo $value->judul_agenda; ?> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" align="right"></h4></span></a></li>
														<hr/>
											<?php
													}
												}
											?>
										</ul>

									</div>
								</div>
							</div>
											
						</div><!--/category-products-->
						</div></div>
					<div class="col-sm-9 padding-right">
<?php }
else{ ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Kategori</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-caret-square-o-down"></i></span>
											<a href="<?php echo base_url('produk/kategori/wanita'); ?>" title="">Wanita</a>
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse in">
									<div class="panel-body">
										<ul>
											<?php
												if ($wanita != NULL) {
													foreach ($wanita as $value) {
											?>
														<li><a href="<?php echo base_url('produk/kategori/') ."/".$value->id_sub; ?>"><?php echo $value->nama_sub; ?> </a></li>
											<?php
													}
												}
											?>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-caret-square-o-down"></i></span>
											<a href="<?php echo base_url('produk/kategori/pria'); ?>" title="">Pria</a>
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse in">
									<div class="panel-body">
										<ul>
											<?php
												if ($pria != NULL) {
													foreach ($pria as $value) {
											?>
														<li><a href="<?php echo base_url('produk/kategori/') ."/".$value->id_sub; ?>"><?php echo $value->nama_sub; ?> </a></li>
											<?php
													}
												}
											?>
										</ul>
									</div>
								</div>
							</div>	
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-caret-square-o-down"></i></span>
											<a href="<?php echo base_url('produk/kategori/umum'); ?>" title="">Umum</a>
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse in">
									<div class="panel-body">
										<ul>
											<?php
												if ($umum != NULL) {
													foreach ($umum as $value) {
											?>
														<li><a href="<?php echo base_url('produk/kategori/') ."/".$value->id_sub; ?>"><?php echo $value->nama_sub; ?> </a></li>
											<?php
													}
												}
											?>
										</ul>
									</div>
								</div>
							</div>						
						</div><!--/category-products-->

						<div class="brands_products"> <!--  sbrands_products-->
							<h2>Brand</h2>
							<div class="brands-name" style="border: 1px solid rgb(204, 204, 204); padding: 5px; overflow: auto; width: 100%; height: 100px;background-color: rgb(255, 255, 255);">
								<ul class="nav nav-pills nav-stacked">
									<?php
										if ($brand != NULL) {
											foreach ($brand as $value) {
									?>
												<li><a href="<?php echo base_url('produk/brand/') .$value; ?>"> <span class="pull-right"><!-- (50) --></span><?php echo $value; ?></a></li>
									<?php
											}
										}
									?>
								</ul>
							</div>
						</div><!--/brands_products-->
						<br>
						<div class="brands_products"><!--brands_products-->
							<h2>Filter / Urutkan</h2>
							<div class="brands-name">
								<form action="<?php echo base_url('pasar_upi/index'); ?>" method="get" accept-charset="utf-8">
									<select name="order" required >
										<option value="">-- Filter --</option>
										<option value="ASC">Harga Termurah</option>
										<option value="DESC">Harga Termahal</option>
									</select>
									<div align="center">
										<br>
										<button type="submit" class="btn btn-default">Filter</button>
									</div>
								</form>
							</div>
						</div><!--/brands_products-->
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<?php }?>