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
	        <form action="<?php echo base_url('admin/proseseditprogram/'.$program->id_infohipmi); ?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8" >
	        	<table class="table card-table">
		        	<tbody>
		        		<tr>
		        			<td>
		        				<input type="text" class="form-control" name="judul_infohipmi" value="<?php echo $program->judul_infohipmi;?>" placeholder="Judul Agenda" required/> </td>
		        		</tr>
		        		<tr>
		        			<td>
		        				Isian Singkat :
		        				<textarea name="isi_singkat_infohipmi" rows="3" cols="50" placeholder="Isi Singkat  "><?php echo $program->isi_singkat_infohipmi;?>
		        				</textarea> 
		        			</td>
		        		</tr>
		        		<tr>
		        			<td>
		        				Isian Lengkap :
		        				<textarea name="isi_lengkap_infohipmi" rows="3" cols="50" placeholder="Isi agenda "><?php echo $program->isi_lengkap_infohipmi;?>
		        				</textarea> 
		        			</td>
		        		</tr>
		        			<tr>
		        			<td>
		        				Foto Agenda Sebelumnya:
		        			   	<img class="img-responsive" src="<?php echo base_url(); ?>assets/images/infohipmi/<?php echo $program->foto_infohipmi; ?>" alt="">
								<input type="hidden" name="foto_infohipmi" value="<?php echo $program->foto_infohipmi;?>" placeholder="">
		        			</td>
					    </tr>
					    <tr>
					    		
					        <td>
					        Foto Agenda :
					              	<input type="file" name="foto" value="" placeholder="">
		        			</td>
		        			<td>*) Jika Foto Produk Kosong Maka Mengikuti Foto Sebelumnya
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