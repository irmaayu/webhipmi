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
	        <form action="<?php echo base_url('admin/proseseditadmin/'.$admin_pasar->id); ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
	        	<table class="table card-table">
		        	<tbody>
		        		<tr>
		        			<td>
		        				<input type="text" class="form-control" name="nama_adminhipmi" value="<?php echo $admin_pasar->nama_adminhipmi;?>" placeholder="Nama Admin Pasar" required /> </td>
		        			
		        		</tr>
		        		<tr>
		        			<td>
		        				<input type="text" class="form-control" name="username_hipmi" value="<?php echo $admin_pasar->username_hipmi;?>" placeholder="Username Admin Pasar" required />
		        			</td>
		        		</tr>
		        		<tr>
		        			<td>
		        				<input type="password" class="form-control" name="pass_hipmi" value="<?php echo $admin_pasar->pass_hipmi;?>" placeholder="Password Admin Pasar" required /> 
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