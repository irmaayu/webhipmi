<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="card card-mini">
		<div class="card-header">
    		<div class="card-title"><b>Daftar Anggota HIPMI PT UPI</b></div>
    		<ul class="card-action">
				<li>
	            	<a href="<?php echo base_url('admin/tambahanggota'); ?>">
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
	            		<th>Alamat</th>
	            		<th>No. HP</th>
	            		<th>Jurusan</th>
	            		<th>NIM</th>
	            		<th>Angkatan</th>
	            		<th>Nama Usaha</th>
	            		<th>Jenis Usaha</th>
	            		<th>Lama Usaha</th>
	            		<th>Media Sosial Usaha</th>
	            		<th>Aksi</th>
	            	</tr>
	        	</thead>
	        	<tbody>
		            <?php
		            	if ($list_anggota != NULL) {
		            		
		            		$c = $no; 
		            		foreach ($list_anggota as $value) {
		            ?>
		            			<tr>
		            				<td><?php echo $c; ?></td>
					            	<td><?php echo $value->nama_lengkap; ?></td>
					              	<td><?php echo $value->alamat_skr; ?></td>
					              	<td><?php echo $value->no_hp; ?></td>
					              	<td><?php echo $value->jurusan; ?></td>
					              	<td><?php echo $value->nim; ?></td>
					              	<td><?php echo $value->angkatan; ?></td>
					              	<td><?php echo $value->nama_usaha; ?></td>
					              	<td><?php echo $value->jenis_usaha; ?></td>
					              	<td><?php echo $value->lama_usaha; ?></td>
					              	<td><?php echo $value->medsos; ?></td>
					              	<td class="col-md-3">
					              		<a href="<?php echo base_url('admin/editanggota/'.$value->id); ?>" title="Edit">
					              			<button type="button" class="btn btn-primary btn-sm">
	            								<div class="info">
								            		<i class="icon fa fa-edit" aria-hidden="true"></i>
								              		<!-- <span class="title">Edit</span> -->
								            	</div>
								        	</button>
					              		</a>
					            		<a href="<?php echo base_url('admin/lihatanggota/'.$value->id); ?>" title="Lihat">
					              			<button type="button" class="btn btn-success btn-sm">
	            								<div class="info">
								            		<i class="icon fa fa-eye" aria-hidden="true"></i>
								            	</div>
								        	</button>
					              		</a>
					              		<a href="<?php echo base_url('admin/hapusanggota/'.$value->id ); ?>" onClick="return confirm('Apakah Anda Benar-Benar akan menghapus berita ini? ')" title="Hapus">
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