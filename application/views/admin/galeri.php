<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="card card-mini">
		<div class="card-header">

    		<ul class="card-action">
				<li>
	            	<a href="<?php echo base_url('admin/tambahgaleri'); ?>">
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
	            		<th>Foto </th>
	            		<th>Keterangan</th>
	            		<th>Aksi</th>
	            	</tr>
	        	</thead>
	        	<tbody>
		            <?php
		            	if ($list_galeri != NULL) {
		            		$no++;
		            		$c = $no;
		            		foreach ($list_galeri as $value) {
		            ?>
		            			  	<td><?php echo $c;?></td>
					              	<td class="col-md-2"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/galeri/<?php echo $value->foto_galeri; ?>" alt=""></td>
					              	<td><?php echo $value->keterangan_galeri; ?></td>
					              	<td>
					              		<a href="<?php echo base_url('admin/editgaleri/'.$value->id_galeri); ?>" title="Edit">
					              			<button type="button" class="btn btn-primary btn-sm">
	            								<div class="info">
								            		<i class="icon fa fa-edit" aria-hidden="true"></i>
								              		<!-- <span class="title">Edit</span> -->
								            	</div>
								        	</button>
					              		</a>
					              		<a href="<?php echo base_url('admin/lihatgaleri/'.$value->id_galeri); ?>" title="Lihat">
					              			<button type="button" class="btn btn-success btn-sm">
	            								<div class="info">
								            		<i class="icon fa fa-eye" aria-hidden="true"></i>
								            	</div>
								        	</button>
					              		</a>
					              		<a href="<?php echo base_url('admin/hapusgaleri/'.$value->id_galeri); ?>" onClick="return confirm('Apakah Anda Benar-Benar akan menghapus galeri ini? ')" title="Hapus">
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