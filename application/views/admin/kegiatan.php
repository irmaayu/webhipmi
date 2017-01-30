<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="card card-mini">
		<div class="card-header">
    		<div class="card-title"><b>Daftar Kegiatan HIPMI PT UPI</b></div>
    		<ul class="card-action">
				<li>
	            	<a href="<?php echo base_url('admin/tambahkegiatan'); ?>">
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
	            		<th>Judul</th>
	            		<th>Foto</th>
	            		<th>Deskripsi singkat</th>
	            		<th>Aksi</th>
	            	</tr>
	        	</thead>
	        	<tbody>
		            <?php
		            	if ($list_kegiatan != NULL) {
		            		$c = $no;
		            		foreach ($list_kegiatan as $value) {
		            ?>
		            			<tr>
		            				<td><?php echo $c; ?></td>
					            	<td><?php echo $value->judul_kegiatan; ?></td>
					              	<td class="col-md-3"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/kegiatan/<?php echo $value->foto_kegiatan; ?>" alt=""></td>
					              	<td><?php echo $value->isi_singkat_kegiatan; ?></td>
					              	<td class="col-md-3">
					              		<a href="<?php echo base_url('admin/editkegiatan/'.$value->id_kegiatan); ?>" title="Edit">
					              			<button type="button" class="btn btn-primary btn-sm">
	            								<div class="info">
								            		<i class="icon fa fa-edit" aria-hidden="true"></i>
								              		<!-- <span class="title">Edit</span> -->
								            	</div>
								        	</button>
					              		</a>
					              		<a href="<?php echo base_url('admin/lihatkegiatan/'.$value->id_kegiatan); ?>" title="Lihat">
					              			<button type="button" class="btn btn-success btn-sm">
	            								<div class="info">
								            		<i class="icon fa fa-eye" aria-hidden="true"></i>
								            	</div>
								        	</button>
					              		</a>
					              		<a href="<?php echo base_url('admin/hapuskegiatan/'.$value->id_kegiatan ); ?>" onClick="return confirm('Apakah Anda Benar-Benar akan menghapus kegiatan ini? ')" title="Hapus">
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