
					<div class="fitur_produk"><!--features_items-->
						<h2 class="title text-center">
							<?php
								if (isset($header_kategori)) {
									echo $header_kategori;
								}else echo "Hipmi Lebih Jauh";
							?>
						</h2>
						<!-- Tentang HIPMI -->
								<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url(); ?>assets/images/infohipmi/<?php echo $tentang->foto_infohipmi; ?>" alt="" />
																	<h2 align="right" ><a href="<?php echo base_url('info_hipmi/program/' .$tentang->id_infohipmi); ?>"><i><?php echo $tentang->judul_infohipmi;?></i>  </a><span class="glyphicon glyphicon-chevron-right" aria-hidden="true" align="right"></span> </h2>
													
													<div class="col-md-12">
																<p align="justify"><?php echo $tentang->isi_singkat_infohipmi;?> </p>
													</div>
													<div class="clearfix">
														<br><br> <br>
													</div>
												</div>
											</div>
										</div>
									</div>
							<!-- HIPMINET -->
								<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url(); ?>assets/images/produk/product3.jpg" alt="" />
													<h2 align="right" ><a href="<?php echo base_url('info_hipmi/kepengurusan/'); ?>" ><i>Kepengurusan</i> </a> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" align="right"></span> </h2>
													
													<div class="col-md-12">
																<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla finibus nunc in tempor ornare. Aenean sodales elit turpis, quis sodales ipsum lobortis et. enean sodales elit turpis, quis sodales ipsum lobortis et. </p>
													</div>
													<div class="clearfix">
														<br><br> <br>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--  HIPMI WILAYAH -->
								<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url(); ?>assets/images/produk/product3.jpg" alt="" />
													<h2 align="right" ><a href="<?php echo base_url('info_hipmi/database/'); ?>" ><i>Database Anggota</i> </a> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" align="right"></span> </h2>
													
													<div class="col-md-12">
																<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla finibus nunc in tempor ornare. Aenean sodales elit turpis, quis sodales ipsum lobortis et. </p>
													</div>
													<div class="clearfix">
														<br><br> <br>
													</div>
												</div>
											</div>
										</div>
									</div>
					</div><!--features_items-->
						<div class="clearfix">
						
					</div>
					</div><!-- menutup sidebar -->

					<div class="col-sm-12 padding-right"><!--features_items-->
						<h2 class="title text-center">
							<?php
								if (isset($header_kategori)) {
									echo $header_kategori;
								}else echo "Program Unggulan";
							?>
						</h2>
						<!-- PROGRAM UNGGULAN -->
								<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url(); ?>assets/images/infohipmi/<?php echo $program1->foto_infohipmi;?>" alt="" />
												</div>
												<a href="<?php echo base_url('info_hipmi/program/' .$program1->id_infohipmi); ?>">
													<div class="product-overlay">
													<div class="overlay-content">
													<h2><?php echo $program1->judul_infohipmi;?></h2>
														
													</div>
												</div>
												</a>
											</div>
											
										</div>
									</div>
									
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url(); ?>assets/images/infohipmi/<?php echo $program2->foto_infohipmi;?>" alt="" />
													
												</div>
												<a href="<?php echo base_url('info_hipmi/program/' .$program2->id_infohipmi); ?>">
												<div class="product-overlay">
													<div class="overlay-content">
													<h2><?php echo $program2->judul_infohipmi;?></h2>
														
													</div>
												</div>
												</a>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url(); ?>assets/images/infohipmi/<?php echo $program3->foto_infohipmi;?>" alt="" />
													
												</div>
												<a href="<?php echo base_url('info_hipmi/program/' .$program3->id_infohipmi); ?>">
																<div class="product-overlay">
													<div class="overlay-content">
													<h2><?php echo $program3->judul_infohipmi;?></h2>
														
													</div>
												</div>
												</a>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url(); ?>assets/images/infohipmi/<?php echo $program4->foto_infohipmi;?>" alt="" />
												
												</div>
												<a href="<?php echo base_url('info_hipmi/program/' .$program4->id_infohipmi); ?>">
												<div class="product-overlay">
													<div class="overlay-content">
													<h2><?php echo $program4->judul_infohipmi;?></h2>
														
													</div>
												</a>
												</div>
											</div>
										</div>
									</div>
									
					<div class="clearfix">
						
					</div>

					<div class="col-sm-12 padding-right"><!--features_items-->
						<h2>
							<?php
								if (isset($header_kategori)) {
									echo $header_kategori;
								}else echo "Gallery Photo";
							?>
							<a href="<?php echo base_url('info_hipmi/galeri/'); ?>" title="Lihat">
					              		<button class="btn btn-warning">view all</button></a>
						</h2>

						<?php
							if ($list_galeri != NULL) {
								$i = 1;
								foreach ($list_galeri as $value) {
						?>
								<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url(); ?>assets/images/galeri/<?php echo $value->foto_galeri;?>" alt="" />
												</div>
											
											</div>
											
										</div>
									</div>
									
									<?php }
								}
								?>
									
					<div class="clearfix">
						
					</div>
					</div>
					<div align="center">
						<?php //echo $pagination; ?>
					</div>
