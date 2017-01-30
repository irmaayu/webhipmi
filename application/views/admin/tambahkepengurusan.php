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
	        <form action="<?php echo base_url('admin/prosespengurus'); ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
	        	<table class="table card-table">
		        	<tbody>
		        		<tr>
		        			<td>
		        				<input type="text" class="form-control" name="nama" value="" placeholder="Nama Pengurus" required />
		        			</td>
		        			<td>
		        				<select name="jabatan" class="form-control" required >
		        					<option value="">--Jabatan--</option>
		        					<?php
		        						if ($list_jabatan != NULL) {
		        							foreach ($list_jabatan as $value) {
		        								$str = "<option value='" .$value->id_jabatan ."'>" .$value->jabatan;
		        								echo $str;
		        							}
		        						}
		        					?>
		        				</select>
		        			</td>
		        			<td>
		        				<input type="text" class="form-control" name="usaha" value="" placeholder="Usaha Anda" required />
		        			</td>
		        		</tr>
		        		<tr>
						<td>
		        				<input type="text" class="form-control" name="kontak" value="" placeholder="Kontak Anda" required />
		        			</td>

					</tr>
		        		<tr>
		        			<td class="text-right">
		        				Foto Pengurus :
		        			</td>
		        			<td>
		        				<input type="file" name="foto" value="" placeholder="">
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