
    
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<body>
   
    <!-- /. NAV SIDE  -->
        <!-- <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row"> -->
                
                     <!--    <div class="col-lg-12 col-xs-6"> --> 
          <!-- small box -->
                         <!--  <div class="small-box bg-red">
                           <div class="inner">
                                <h3 align="center">REGISTRASI</h3>
                           </div>
                          </div>
                        </div>  
                      -->  
                         <?php echo form_open('c_ppdb/proses_tambah'); ?>

              <!-- Morris chart - Sales -->
    <!--           <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">

              <table align="center">
                                <?php echo validation_errors(); ?>
                                     <div class="">
                
                    <div class="col-md-4 col-md-offset-4">
                        <div class="login-panel panel panel-default">
                            <div class="panel-heading">
                                
                            </div>
                            <div class="panel-body">
                                <form method="post" name="loginform" action="<?php echo base_url('index.php/c_ppdb/validasi_login')?>" role="form">
                                    <fieldset>
                                         <div class="form-group">
                                            <input class="form-control" type="text" id="nisn" autofocus="" required="" name="nisn" placeholder="NISN"></input>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" id="nama" autofocus="" required="" name="nama" placeholder="NAMA"></input>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="email" id="email" value="" required="" name="email" placeholder="E-MAIL"></input>
                                        </div>
                                         <?php if ($this->session->has_userdata('status')){
                                            echo $this->session->flashdata('status');
                                            }?>
                                        <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Save"></input>
                                        <input class="btn btn-success btn-lg btn-block" type="reset" name="cancel" value="Reset"></input>
                                    </fieldset>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                             
                           
            </table> </div>

                        </form>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                <!--  <hr />  -->
           <!--  </div> -->
             <!-- /. PAGE INNER  -->
        <!-- </div> -->
         <!-- /. PAGE WRAPPER  --> 

<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                  <?php 
                        if ($this->session->has_userdata('status')) {?>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="box box-solid bg-teal-gradient">
                                <div class="box-header">
                                    <i class="fa fa-check-circle-o"></i>
                                    <h5 class="box-title"><?php echo $this->session->flashdata('status');?></h5>
                                    <div class="box-tools pull-right">
                                        <!-- <button type="button" class="btn bg-teal btn-sm" data-widget="remove"></button> -->
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                            }?>
                    <div class="col-md-12">
                        <h1 align="center">REGISTRASI</h1>
                         <?php echo form_open('c_ppdb/proses_tambah'); ?>
                        <table align="center">
                            <tr>
                                <td>NISN</td>
                                <td>:</td>
                                <td><input type="text" name="nisn" placeholder="NISN" required/></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><input type="text" name="nama" placeholder="Nama" required/></td>
                            </tr>
                            <tr>
                                <td>E-mail</td>
                                <td>:</td>
                                <td><input type="email" name="email" placeholder="E-mail" required/></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="save" value="Save"/>&nbsp;</td>
                                <a href="<?php echo site_url('c_ppdb/index');?>"><i></i>Kembali ke beranda</a>
                            </tr>
                            <tr>
                              
                            </tr>
                        </table>
                        </form>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr /> 
            </div>
             <!-- /. PAGE INNER  -->
        </div>
n         
</div>
     
