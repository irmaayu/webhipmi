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
	        <form action="<?php echo base_url('admin/proseseditkegiatan/'.$post->id_kegiatan); ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
	        	<table class="table card-table">
		        	<tbody>
		        		<tr>
		        			<td>
		        				<input type="text" class="form-control" name="judul_kegiatan" value="<?php echo $post->judul_kegiatan;?>" placeholder="Judul Post" required /> </td>
		        			
		        		</tr>
		        		<tr>
		        			<td>
		        			 Isian Singkat
		        				<textarea name="isi_singkat_kegiatan" rows="3" cols="50" placeholder="Isian kegiatan Singkat"><?php echo $post->isi_singkat_kegiatan;?>
		        				</textarea> 
		        			</td>
		        		</tr>
		        		<tr>
		        			<td>
		        			  Isian Lengkap :
		        				<textarea name="isi_lengkap_kegiatan" rows="10" cols="100" placeholder="Isian kegiatan Lengkap"><?php echo $post->isi_lengkap_kegiatan;?> </textarea> 
		        			</td>
		        		</tr>
		        		
		        		<tr>
		        			<td>
		        				Foto Produk Sebelumnya:
		        			   	<img class="img-responsive" src="<?php echo base_url(); ?>assets/images/kegiatan/<?php echo $post->foto_kegiatan; ?>" alt="">
								<input type="hidden" name="foto_kegiatan" value="<?php echo $post->foto_kegiatan;?>" placeholder="">
		        			</td>
					    </tr>
					    <tr>
					    		
					        <td>
					        Foto Produk :
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