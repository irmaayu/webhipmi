<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="card card-mini">
		<div class="card-header">
    		<div class="card-title"><b>Ganti Password</b></div>
    		
    	</div>
	<?php
    			if ($this->session->has_userdata('status')) {
    		?>
    			<p class="text-center text-success text-bg">
    			<?php echo $this->session->flashdata('status'); ?>
    			</p>
    		<?php
    			}
    		?>
    	<div class="card-body no-padding table-responsive">
			<form action="<?php echo base_url('adpasar/prosesgantipass'); ?>" method="POST" accept-charset="utf-8">
				<table class="table card-table">
		        	<tbody>
		        		<tr>
		        			<td>Password Lama</td>
		        			<td>
		        				<input type="password" class="form-control" name="pass_hipmi" value="<?php echo $admin_pasar->pass_hipmi;?>" placeholder="">
		        			</td>
		        		</tr>
		        		<tr>
		        			<td>Password Baru</td>
		        			<td>
		        				<input type="password" class="form-control" name="pass_hipmi" value="" placeholder="Password Baru">
		        			</td>
		        		</tr>
		        		<tr>
		        			<td>
		        				<button type="submit" class="btn btn-success btn-sm">Simpan</button>
		        			</td>
		        		</tr>
		        	</tbody>
		        </table>
			</form>
    	</div>
    </div>
</div>