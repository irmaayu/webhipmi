<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="card card-mini">
		<div class="card-header">
    		<div class="card-title"><b>Daftar Produk</b></div>
    		<ul class="card-action">
				<li>
	            	<a href="<?php echo base_url('adpasar/tambahproduk'); ?>">
	            		<i class="icon fa fa-plus"></i>
	            	</a>
	        	</li>
	        </ul>
    	</div>
    	<div class="card-body no-padding table-responsive">
	        <table class="table card-table">
	        	<thead>
	            	<tr>
	            		<th>No</th>
	            		<th>Nama Produk</th>
	            		<th>Foto</th>
	            		<th>Stok</th>
	            		<th>Harga</th>
	            		<th>Aksi</th>
	            	</tr>
	        	</thead>
	        	<tbody>
		            <?php
		            	if ($list_produk != NULL) {
		            		$c = $no;
		            		foreach ($list_produk as $value) {
		            ?>
		            			<tr>
		            				<td><?php echo $c; ?></td>
					            	<td><?php echo $value->nama_produk; ?></td>
					              	<td class="col-md-2"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/produk/<?php echo $value->foto_produk; ?>" alt=""></td>
					              	<td><?php echo $value->stock_produk; ?></td>
					              	<td><?php echo "Rp." .number_format($value->harga_produk, 2, ',', '.'); ?></td>
					              	<td>
					              		<a href="<?php echo base_url('adpasar/editproduk/') ."/".$value->id_produk; ?>" title="Edit">
					              			<button type="button" class="btn btn-primary btn-sm">
	            								<div class="info">
								            		<i class="icon fa fa-edit" aria-hidden="true"></i>
								              		<!-- <span class="title">Edit</span> -->
								            	</div>
								        	</button>
					              		</a>
					              		<a href="<?php echo base_url('adpasar/lihatproduk/') ."/".$value->id_produk; ?>" title="Lihat">
					              			<button type="button" class="btn btn-success btn-sm">
	            								<div class="info">
								            		<i class="icon fa fa-eye" aria-hidden="true"></i>
								            	</div>
								        	</button>
					              		</a>
					              		<a href="<?php echo base_url('adpasar/hapusproduk/') ."/".$value->id_produk; ?>" title="Hapus">
					              			<button type="button" class="btn btn-danger btn-sm">
	            								<div class="info">
								            		<i class="icon fa fa-trash" aria-hidden="true"></i>
								            	</div>
								        	</button>
					              		</a>
					              	</td>	
					            </tr>
		            <?php
		            			$c++;
		            		}
		            	}
		            ?>
	        	</tbody>
	        </table>
	        <div class="clearfix">
	        	
	        </div>
	        <div class="container" align="center">
	        	<?php echo $pagination; ?>
	        </div>
      	</div>
    </div>
</div>