 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<body>
   
    <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                        if ($this->session->has_userdata('status')) {?>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="box box-solid bg-teal-gradient">
                                <div class="box-header">
                                    <i class="fa fa-check-circle-o"></i>
                                    <h5 class="box-title"><?php echo $this->session->flashdata('status');?></h5>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn bg-teal btn-sm" data-widget="remove"></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                            }
                        ?>
         <div class="col-lg-12 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3 align="center">LOGIN</h3>
            </div>
          </div>
        </div>
       </div>
      </div>
                 <!-- /. ROW  -->
                 <hr /> 
                       <!-- Main row -->
                       
      <div class="row" >
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom" >
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-left">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">Calon Santri</a></li>
              <li><a href="#sales-chart" data-toggle="tab">Admin</a></li>
             </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">

              <table align="center">
                                <?php echo validation_errors(); ?>
                                     <div class="">
                
                    <div class="col-md-4 col-md-offset-4">
                        <div class="login-panel panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title" align="center">
                                Gunakan NISN dan EMAIL untuk login pertama kali , Silakan Login
                                </h3>
                            </div>
                            <div class="panel-body">
                                <form method="post" name="loginform" action="<?php echo base_url('index.php/c_ppdb/validasi_login')?>" role="form">
                                    <fieldset>
                                        <div class="form-group">
                                            <input class="form-control" type="text" id="user_id" autofocus="" required="" name="user_id" placeholder="Username"></input>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="password" id="pass" value="" required="" name="pass" placeholder="Password"></input>
                                        </div>
                                         <?php if ($this->session->has_userdata('status')){
                                            echo $this->session->flashdata('status');
                                            }?>
                                        <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Login"></input>
                                        <a class="btn btn-success btn-lg btn-block" href="./">Kembali ke Beranda</a>
                                    </fieldset>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                             
                           
            </table> </div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"> 
                 <table align="center">
                                <?php echo validation_errors(); ?>
                                     <div class="">
                
                    <div class="col-md-4 col-md-offset-4">
                        <div class="login-panel panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title" align="center">
                                Silakan Login
                                </h3>
                            </div>
                            <div class="panel-body">
                                <form method="post" name="loginform" action="<?php echo base_url('index.php/c_admin/validasi_login')?>" role="form">
                                    <fieldset>
                                        <div class="form-group">
                                            <input class="form-control" type="text" id="user_id" autofocus="" required="" name="username" placeholder="Username"></input>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="password" id="pass" value="" required="" name="pass" placeholder="Password"></input>
                                        </div>
                                         <?php if ($this->session->has_userdata('status')){
                                            echo $this->session->flashdata('status');
                                            }?>
                                        <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Login"></input>
                                        <a class="btn btn-success btn-lg btn-block" href="./">Kembali ke Beranda</a>
                                    </fieldset>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                             
                           
            </table> </div>
              </div>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->
            </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
</div>
    
