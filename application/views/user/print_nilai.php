<!DOCTYPE html>
<html>
<head>
  <title>PPDB ONLINE</title>
 <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
  
      
<div id="wrapper">  
<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">PPDB ONLINE</a> 
            </div>
  <div style="color: white;
padding: 0px 50px 0px 50px;
float: right;
font-size: 16px;"> 
      <h3 align="right">Selamat datang <?php echo $this->session->userdata('nama');?>
      <a href="index.php/c_ppdb/logout" class="btn btn-danger square-btn-adjust">LOGOUT</a></h3>
      </div>
        </nav> 
       
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                    <img src="<?php echo base_url();?>assets/img/find_user.png" class="user-image img-responsive"/>
          </li>
                    <li>
                        <a  href="identitas"><i class="fa fa-desktop fa-3x"></i>Identitas</a>
                    </li>
                    <li>
                        <a  href="data_nilai
                        "><i class="fa fa-qrcode fa-3x"></i>Rapor</a>
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
                    </li>  
   
                </ul>
               
            </div>
            
        </nav>  
      

   
    <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                       <h3>Data Nilai Peserta</h3>
                    <br>
                    
                  <br/>
                  <h3>Nilai Rapor</h3>
                  <?php
                      foreach ($smt as $key => $value) {
                    ?>
                      <div class="panel panel-default">
                      <!-- Default panel contents -->
                      <div class="panel-heading"><?php echo "Semester " .$key; ?></div>
                      <!-- <p><?php echo "Semester " .$key; ?></p> -->
                      <table class="table">
                        <tr>
                          <td>Nama Mata Pelajaran</td>
                          <td>Nilai</td>
                        </tr>
                    <?php
                        foreach ($value as $key2 => $value2) {
                    ?>
                          <tr>
                            <td><?php echo $value2->mapel; ?></td>
                            <td><?php echo $value2->nilai; ?></td>
                          </tr>
                    <?php
                        }
                    ?>
                        </table>
                      </div>
                    <?php
                      }
                    ?>  
                    <p>Jumlah Nilai Rapor = <?php echo $smt2->total_nilai;?></p>
                    <p>Jumlah Nilai Rata-rata Rapor = <?php echo $smt3->rata_rapor;?></p>     
                      <br><br><br>
                      <br>
                      
                     <h3>Nilai UN</h3>
                      <div class="panel panel-default">
                      <!-- Default panel contents -->
                      <div class="panel-heading"><center><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

                       <tr height="40">
                          <td width="5%"><b>No</b><div align="center"></div></td>
                          <td width="50%"><b>Mata Pelajaran</b><div align="center"></div></td>
                          <td width="25"><b>Nilai</b><div align="center"></div></td>
                       </tr></table></center></div>
                      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

                       <!-- <tr align="center"height="40">
                          <td width="5%"><b>No</b><div align="center"></div></td>
                          <td width="50%"><b>Mata Pelajaran</b><div align="center"></div></td>
                          <td width="25"><b>Nilai</b><div align="center"></div></td>
                       </tr> -->
                        <?php 
                        $no = 1;
                        foreach($user1 as $u){ 
                        ?>
                        <tr height="40">
                            <td align="center" width="5%"><?php echo $no++ ?></td>
                            <td width="25%"><?php echo $u->mapel_un ?></td>
                            <td width="25%"><?php echo $u->nilai_un ?></td>
                            
                        </tr>
                        <?php } ?>
                        <tr height="40">
                         <td></td>
                         <td>Jumlah UAN</td>
                         <td><?php echo $user2->jumlah_un?></td> 
                       </tr>
                       <tr height="40">
                         <td></td>
                         <td>Rata-rata UAN</td>
                         <td><?php echo $user3->rata_un?></td> 
                       </tr>
                      </table>  
                      <center><?php echo anchor('c_ppdb/print_nilai' ."/" .$user3->id_register,'<button type="button" class="btn btn-success btn-xs">Download</button> ');?></center>
                           
                    </div>
                  </div><!-- /. ROW  -->
                </div><!-- /. PAGE INNER  -->
              </div><!-- /. PAGE WRAPPER  -->
</div>
</div>
     <!-- /. WRAPPER  -->
    <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
       
    </body>
</html>
