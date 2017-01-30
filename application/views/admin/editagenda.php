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
	        <form action="<?php echo base_url('admin/proseseditagenda/'.$agenda->id_agenda); ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
	        	<table class="table card-table">
		        	<tbody>
		        		<tr>
		        			<td>
		        				<input type="text" class="form-control" name="tanggal_agenda" value="<?php echo $agenda->tanggal_agenda;?>" placeholder="yyyy-mm-dd" required /> </td>
		        		</tr>
		        		<tr>
		        			<td>
		        				<input type="text" class="form-control" name="judul_agenda" value="<?php echo $agenda->judul_agenda;?>" placeholder="Judul Agenda" required /> </td>
		        		</tr>
		        		<tr>
		        			<td>
		        				<textarea name="isi_agenda" rows="3" cols="50" placeholder="Isi agenda "><?php echo $agenda->isi_agenda;?>
		        				</textarea> 
		        			</td>
		        		</tr>
		        			<tr>
		        			<td>
		        				Foto Agenda Sebelumnya:
		        			   	<img class="img-responsive" src="<?php echo base_url(); ?>assets/images/agenda/<?php echo $agenda->foto_agenda; ?>" alt="">
								<input type="hidden" name="foto_agenda" value="<?php echo $agenda->foto_agenda;?>" placeholder="">
		        			</td>
					    </tr>
					    <tr>
					    		
					        <td>
					        Foto Agenda :
					         	<input type="file" name="foto" >
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