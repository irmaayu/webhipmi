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
	        <form action="<?php echo base_url('admin/proseseditslider/'.$post->id_slider); ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
	        	<table class="table card-table">
		        	<tbody>
		        		<tr>
		        			<td>
		        				<input type="text" class="form-control" name="title_slider" value="<?php echo $post->title_slider;?>" placeholder="Judul Post" /> </td>
		        			
		        		</tr>
		        		<tr>
		        			<td>
		        				Foto Slider Sebelumnya:
		        			   	<img class="img-responsive" src="<?php echo base_url(); ?>assets/images/slider/<?php echo $post->foto_slider; ?>" alt="">
								<input type="hidden" name="foto_slider" value="<?php echo $post->foto_slider;?>" placeholder="">
		        			</td>
					    </tr>
					    <tr>
					    		
					        <td>
					        Foto Slider :
					         	<input type="file" name="foto" value="" placeholder="">
		        			</td>
		        			<td>*) Jika Foto Slider Kosong Maka Mengikuti Foto Sebelumnya
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