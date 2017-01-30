<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="card card-mini">
		<div class="card-header">
    		<div class="card-title"><b>Daftar Kepengurusan</b></div>
    		<ul class="card-action">
				<li>
	            	<a href="<?php echo base_url('admin/tambahpengurus'); ?>">
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
	            		<th>Nama </th>
	            		<th>Jabatan</th>
	            		<th>Usaha</th>
				<th>Kontak</th>
	            		<th>Foto</th>
	            		<th>Aksi</th>
	            	</tr>
	        	</thead>
	        	<tbody>
		            <?php
		            	if ($list_pengurus != NULL) {
		            		$c = $no;
		            		foreach ($list_pengurus as $value) {
		            ?>
		            			<tr>
		            				<td><?php echo $c; ?></td>
					            	<td><?php echo $value->nama; ?></td>
					              	<td><?php if($value->jabatan==1){
					              			echo "Presdir";}
					              			else if($value->jabatan==2){
					              			echo "Sekretaris Umum";}
					              			else if($value->jabatan==3){
					              			echo "Sekretaris 2";}
					              			else if($value->jabatan==4){
					              			echo "Bendahara Umum";}
					              			else if($value->jabatan==5){
					              			echo "Bendahara 2";}
					              			else if($value->jabatan==6){
					              			echo "Direktur Public Relation";}
					              			else if($value->jabatan==7){
					              			echo "Staff Public Relation";}
					              			else if($value->jabatan==8){
					              			echo "Direktur Bussiness Development";}
					              			else if($value->jabatan==9){
					              			echo "Staff Bussiness Development";}
					              			else if($value->jabatan==10){
					              			echo "Direktur Human Resource Development";}
					              			else if($value->jabatan==11){
					              			echo "Staff Human Resource Development ";}
									else if($value->jabatan==12){
					              			echo "M. Eksternal ";}
									else if($value->jabatan==13){
					              			echo "M. Internal ";}
									else if($value->jabatan==14){
					              			echo "M. Lifestyle ";}
									else if($value->jabatan==15){
					              			echo "M. Jasa ";}
									else if($value->jabatan==16){
					              			echo "M. SD ";}
									else if($value->jabatan==17){
					              			echo "M. Kader ";}
									else {
									echo "M. Kuliner ";}
					              		
					              			?></td>
					              	<td><?php echo $value->usaha; ?></td>
							<td><?php echo $value->kontak; ?></td>
					              	<td class="col-md-2"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/pengurus/<?php echo $value->foto; ?>" alt=""></td>
					              	
					              	<td>
					              		<a href="<?php echo base_url('admin/editpengurus/'.$value->id_pengurus); ?>" title="Edit">
					              			<button type="button" class="btn btn-primary btn-sm">
	            								<div class="info">
								            		<i class="icon fa fa-edit" aria-hidden="true"></i>
								              		<!-- <span class="title">Edit</span> -->
								            	</div>
								        	</button>
					              		</a>
					              		<a href="<?php echo base_url('admin/lihatpengurus/'.$value->id_pengurus); ?>" title="Lihat">
					              			<button type="button" class="btn btn-success btn-sm">
	            								<div class="info">
								            		<i class="icon fa fa-eye" aria-hidden="true"></i>
								            	</div>
								        	</button>
					              		</a>
					              		<a href="<?php echo base_url("admin/hapuspengurus/".$value->id_pengurus); ?>" onClick="return confirm('Apakah Anda Benar-Benar akan menghapus Produk ini? ')" title="Hapus">
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