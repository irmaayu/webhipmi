<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="card card-mini">
		
    	<div class="card-body no-padding table-responsive">
    		<?php
    			if ($this->session->has_userdata('status')) {
    		?>
    				<div class="card-header">
						<p class="text-success"><?php echo $this->session->flashdata('status'); ?></p>
					</div>
    		<?php
    			}
    		?>
	        <form action="<?php echo base_url('admin/prosesanggota'); ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
	        	<table class="table card-table">
		        	<tbody>
		        		<tr>
		        			<td>
		        				<input type="text" class="form-control" name="nama_lengkap" value="" placeholder="Nama Anggota" required /> </td>
		        			
		        		</tr>
		        		<tr>
		        			<td>
		        				<input type="text" class="form-control" name="alamat_skr" value="" placeholder="Alamat Lengkap" required /> </td>
		        			
		        		</tr>
		        		<tr>
		        			<td>
		        				<input type="text" class="form-control" name="no_hp" value="" placeholder="No. HP" required /> </td>
		        			
		        		</tr>
		        		<tr>
		        			<td>
		        				<input type="text" class="form-control" name="jurusan" value="" placeholder="Jurusan" required /> </td>
		        			
		        		</tr>
		        		<tr>
		        			<td>
		        				<input type="text" class="form-control" name="nim" value="" placeholder="NIM" required /> </td>
		        			
		        		</tr>
		        		<tr>
		        			<td>
		        				<input type="text" class="form-control" name="angkatan" value="" placeholder="Angkatan" required />
		        			</td>
		        		</tr>
		        		<tr>
		        			<td>
		        				<input type="text" class="form-control" name="nama_usaha" value="" placeholder="Nama Usaha" required /> 
		        			</td>
		        		</tr>
		        		<tr>
		        			<td>
		        				<input type="text" class="form-control" name="jenis_usaha" value="" placeholder="Jenis Usaha" required />
		        			</td>
		        		</tr>
		        		<tr>
		        			<td>
		        				<input type="text" class="form-control" name="lama_usaha" value="" placeholder="Lama Usaha" required />
		        			</td>
		        		</tr>
		        		<tr>
		        			<td>
		        				<input type="text" class="form-control" name="medsos" value="" placeholder="Media Sosial Usaha" required />
		        			</td>
		        		</tr>
		        		<tr>
		        			<td>
		        				<button type="submit" class="btn btn-default">Simpan</button>
		        			</td>
		        		</tr>
		        	</tbody>
		        </table>
	        </form>
		</div>
	</div>
</div>