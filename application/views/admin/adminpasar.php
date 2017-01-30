<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="card card-mini">
		<div class="card-header">
    		<div class="card-title"><b>Daftar Anggota HIPMI PT UPI</b></div>
    		<ul class="card-action">
				<li>
	            	<a href="<?php echo base_url('admin/tambahadmin'); ?>">
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
	            		<th>Nama Lengkap</th>
	            		<th>Username Admin</th>
	            		<th>Password Admin</th>
	            		<th>Aksi</th>
	            	</tr>
	        	</thead>
	        	<tbody>
		            <?php
		            	if ($list_admin != NULL) {
		            		
		            		$c = $no; 
		            		foreach ($list_admin as $value) {
		            ?>
		            			<tr>
		            				<td><?php echo $c; ?></td>
					            	<td><?php echo $value->nama_adminhipmi; ?></td>
					              	<td><?php echo $value->username_hipmi; ?></td>
					              	<td><?php echo $value->pass_hipmi; ?></td>
					              		
					              	<td class="col-md-3">
					              			<a href="<?php echo base_url('admin/editadmin/'.$value->id); ?>" title="Edit">
										<button type="button" class="btn btn-primary btn-sm">
	            								<div class="info">
								            		<i class="icon fa fa-edit" aria-hidden="true"></i>
								              		<!-- <span class="title">Edit</span> -->
								            	</div>
								        	</button>
									</a>
					            		<a href="<?php echo base_url('admin/lihatadmin/'.$value->id); ?>" title="Lihat">
					              		<button type="button" class="btn btn-success btn-sm">
	            								<div class="info">
								            		<i class="icon fa fa-eye" aria-hidden="true"></i>
								            	</div>
								        	</button></a>
					              			
					              		<a href="<?php echo base_url('admin/hapusadmin/'.$value->id ); ?>" onClick="return confirm('Apakah Anda Benar-Benar akan menghapus berita ini? ')" title="Hapus">
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