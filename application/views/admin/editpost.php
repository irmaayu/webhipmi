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
	        <form action="<?php echo base_url('admin/proseseditpost/'.$post->id_berita); ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
	        	<table class="table card-table">
		        	<tbody>
		        		<tr>
		        			<td>
		        				<input type="text" class="form-control" name="judul_berita" value="<?php echo $post->judul_berita;?>" placeholder="Judul Post" required /> </td>
		        			
		        		</tr>
		        		<tr>
		        			<td>
		        				<textarea name="isi_singkat_berita" rows="3" cols="50" placeholder="Isian Berita Singkat"><?php echo $post->isi_singkat_berita;?>
		        				</textarea> 
		        			</td>
		        		</tr>
		        		<tr>
		        			<td>
		        				<textarea name="isi_lengkap_berita" rows="10" cols="100" placeholder="Isian Berita Lengkap"><?php echo $post->isi_lengkap_berita;?> </textarea> 
		        			</td>
		        		</tr>
		        		<tr>
		        			<td>
		        				<select name="kategori_berita" class="form-control" required >
		        					<option value="">--Kategori Post--</option>
		        					<?php
		        						if ($list_kategori != NULL) {
		        							foreach ($list_kategori as $value) {
		        								$str = "<option value='" .$value->id_kategori_post ."'>" .$value->nama_kategori_post;
		        								echo $str;
		        							}
		        						}
		        					?>
		        				</select>
		        			</td>
		        		</tr>
		        		<tr>
		        			<td>
		        				Foto Produk Sebelumnya:
		        			   	<img class="img-responsive" src="<?php echo base_url(); ?>assets/images/post/<?php echo $post->foto_berita; ?>" alt="">
								<input type="hidden" name="foto_berita" value="<?php echo $post->foto_berita;?>" placeholder="">
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