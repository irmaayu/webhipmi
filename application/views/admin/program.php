<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="card card-mini">
		<div class="card-header">
    		<div class="card-title"><b>Daftar Program Unggulan</b></div>
    	</div>
    	<div class="card-body no-padding table-responsive">
	        <table class="table card-table">
	        	<thead>
	            	<tr>
	            		<th>No</th>
	            		<th>Foto</th>
	            		<th>Judul</th>
	            		<th>Isi</th>
	            		<th>Aksi</th>
	            	</tr>
	        	</thead>
	        	<tbody>
		            <?php
		            	if ($list_program != NULL) {
		            		$c = $no;
		            		foreach ($list_program as $value) {
		            ?>
		            			<tr>
		            				<td><?php echo $c; ?></td>
					              		<td class="col-md-3"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/post/<?php echo $value->foto_infohipmi; ?>" alt=""></td>
					              	<td><?php echo $value->judul_infohipmi; ?></td>
					            	<td><?php echo $value->isi_singkat_infohipmi; ?></td>
					              	<td class="col-md-3">
					              		<a href="<?php echo base_url('admin/editprogram/'.$value->id_infohipmi); ?>" title="Edit">
					              			<button type="button" class="btn btn-primary btn-sm">
	            								<div class="info">
								            		<i class="icon fa fa-edit" aria-hidden="true"></i>
								              		<!-- <span class="title">Edit</span> -->
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
	        	
	        <!-- </div>
	        <div class="container" align="center">
	        	<?php// echo $pagination; ?>
	        </div> -->
      	</div>
    </div>
</div>