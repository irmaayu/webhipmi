<div class="container">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="card card-mini">
		<div class="card-header">
    		<div class="card-title"><h2 align="center">Database Anggota HIPMI PT UPI</h2></div>
    		
    	</div>
    	<div class="card-body no-padding table-responsive">
	       <form action="<?php echo base_url('info_hipmi/database'); ?>" method="post" accept-charset="utf-8">
							
	          <select name='order'>
		  <option value=>-Urutkan Dari Angkatan-</option>";
		  <option value="ASC">Terlama</option>
		   <option value="DESC">Terbaru</option>
		</select>&nbsp;
		<div align="right">
										<br>
										<button type="submit" name="Filter" class="btn btn-default">Filter</button>
									</div>
		</div>
    
    	<table class="table card-table" border="0">
	        	<thead>
	            	<tr>
	            		<th>No</th>
	            		<th>Nama Lengkap</th>
	            		<th>Angkatan HIPMI PT UPI</th>
	            		<th>Nama Usaha</th>
	            		<th>Bidang Usaha</th>
	            		<th>Media Sosial Usaha</th>
	            		
	            	</tr>
	        	</thead>
	        	<tbody>
		            <?php
		            	if ($list_anggota != NULL) {
		            		$no;
		            		$c = $no; 
		            		foreach ($list_anggota as $value) {
		            ?>
		            			<tr>
		            				<td><?php echo $c; ?></td>
					            	<td><?php echo $value->nama_lengkap; ?></td>
					              	<td><?php echo $value->angkatan; ?></td>
					              	<td><?php echo $value->nama_usaha; ?></td>
					              	<td><?php echo $value->jenis_usaha; ?></td>
					              	<td><?php echo $value->medsos; ?></td>
					              	
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
		<?php if($angka==1){?>
	        
		<?php 
			}else{?>
		<div class="container" align="center">
	        	<?php echo $pagination; ?>
	        </div>
		<?php }?>
      	</div>
    </div>
</div>
</div>