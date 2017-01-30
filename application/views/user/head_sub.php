
			 
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
    				<li class="text-center">
                        <img src="<?php echo base_url();?>assets/img/tutwuri.gif" class="user-image img-responsive"/>
    				</li>
                    <?php if($this->session->has_userdata('id')) {?>
				    <li>
                        <a  href="identitas"><i class="fa fa-desktop fa-3x"></i>Identitas</a>
                    </li>
                    <li>
                        <a  href="rapor"><i class="fa fa-qrcode fa-3x"></i>Rapor</a>
                    </li>
						   <li  >
                        <a  href="un"><i class="fa fa-bar-chart-o fa-3x"></i>Ujian Nasional</a>
                    </li>
					<li>
                        <a href="#"><i class="fa fa-table fa-3x"></i> Cetak Formulir<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="cetak">Print Data</a>
                            </li>
                            <li>
                                <a href="cetaknilai">Print Nilai</a>
                            </li>
                            
                        </ul>
                      </li>  <?php }else{?>
                      <li>
                        <div align="center" class="">
                            <div class="col-md-12">
                                <div class="login-panel panel panel-default">
                                    <div class="panel-heading">
                                        Cek Status
                                    </div>
                                    <div class="panel-body">
                                        
                                        <?php echo form_open('c_ppdb/pengumuman');?>
                                            <fieldset>
                                                 <div class="form-group">
                                                    <input class="form-control" type="text" id="nisn" autofocus="" required="" name="nisn" placeholder="NISN"></input>
                                                </div>
                                                <!-- 
                                                 <?php if ($this->session->has_userdata('status')){
                                                    echo $this->session->flashdata('status');
                                                    }?> -->
                                                <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Cek"></input>
                                            </fieldset>
                                        </form> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li><?php }?>
   
                </ul>
               
            </div>
            
        </nav>  
