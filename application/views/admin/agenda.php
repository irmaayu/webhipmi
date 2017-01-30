<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="card card-mini">
		<div class="card-header">
    		<div class="card-title"><b>Daftar agenda</b></div>
    		<ul class="card-action">
				<li>
	            	<a href="<?php echo base_url('admin/tambahagenda'); ?>">
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
	            		<th>Tanggal</th>
	            		<th>Foto</th>
	            		<th>Judul</th>
	            		<th>Isi</th>
	            		<th>Aksi</th>
	            	</tr>
	        	</thead>
	        	<tbody>
		            <?php
		            	if ($list_agenda != NULL) {
		            		$c = $no;
		            		foreach ($list_agenda as $value) {
		            ?>
		            			<tr>
		            				<td><?php echo $c; ?></td>
					            	<td><?php echo $value->tanggal_agenda; ?></td>
					            	<td><?php echo $value->judul_agenda; ?></td>
					              		<td class="col-md-3"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/post/<?php echo $value->foto_agenda; ?>" alt=""></td>
					              <td><?php echo $value->isi_agenda; ?></td>
					              	<td class="col-md-3">
					              		<a href="<?php echo base_url('admin/editagenda/'.$value->id_agenda); ?>" title="Edit">
					              			<button type="button" class="btn btn-primary btn-sm">
	            								<div class="info">
								            		<i class="icon fa fa-edit" aria-hidden="true"></i>
								              		<!-- <span class="title">Edit</span> -->
								            	</div>
								        	</button>
					              		</a>
					              		<a href="<?php echo base_url('admin/lihatagenda/'.$value->id_agenda); ?>" title="Lihat">
					              			<button type="button" class="btn btn-success btn-sm">
	            								<div class="info">
								            		<i class="icon fa fa-eye" aria-hidden="true"></i>
								            	</div>
								        	</button>
					              		</a>
					              		<a href="<?php echo base_url('admin/hapusagenda/'.$value->id_agenda ); ?>" onClick="return confirm('Apakah Anda Benar-Benar akan menghapus agenda ini? ')" title="Hapus">
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