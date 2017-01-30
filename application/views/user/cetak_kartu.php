<!DOCTYPE html>
<html>
<?php include'header.php' ?>
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
                        <a  href="index"><i class="fa fa-dashboard fa-3x"></i>Home</a>
                    </li>
                      <li>
                        <a  href="identitas"><i class="fa fa-desktop fa-3x"></i>Identitas</a>
                    </li>
                    <li>
                        <a  href="rapor"><i class="fa fa-qrcode fa-3x"></i>Rapor</a>
                    </li>
                    <li  >
                        <a  href="un"><i class="fa fa-bar-chart-o fa-3x"></i>Ujian Nasional</a>
                    </li>
                    <li  >
                        <a  href="#"><i class="fa fa-bar-chart-o fa-3x"></i>Ranking Nilai</a>
                    </li>
                    <li>
                        <a href="cetak"><i class="fa fa-table fa-3x"></i> Cetak Formulir<span class="fa arrow"></span></a>
                    </li>  
   
                </ul>
               
            </div>
            
        </nav>  
      
  
    

  
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<body>
   
    <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                                          <div class="col-lg-12 col-xs-6">
          <!-- small box -->
                          <div class="small-box bg-red">
                           <div class="inner">
                                <h3 align="center">INPUTKAN NILAI UN</h3>
                           </div>
                          </div>
                      </div>
                       <h3>Data Peserta</h3>
                    <br>
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

                   <tr>
                      <td><b>Nama</b><div align="center"></div></td>
                      <td>:</td>
                      <td ><?php echo $this->session->userdata('nama'); ?><div align="center"></div></td>
                   </tr>
                   <tr>
                      <td><b>NISN</b><div align="center"></div></td>
                      <td>:</td>
                      <td><?php echo $this->session->userdata('nisn'); ?><div align="center"></div></td>
                  </tr>
                  <tr>
                      <td ><b>Email</b><div align="center"></div></td>
                      <td>:</td>
                      <td ><?php echo $this->session->userdata('email'); ?><div align="center"></div></td>
                  </tr>    
                  <tr>
                    <td><b>Jenis Kelamin</b><div align="center"></div></td>
                    <td>:</td>
                    <td><?php echo $this->session->userdata('jenis_kelamin'); ?><div align="center"></div></td>
                  </tr>
                  <tr>
                    <td><b>Tempat Lahir</b><div align="center"></div></td>
                    <td>:</td>
                    <td ><?php echo $this->session->userdata('tempat_lahir'); ?><div align="center"></div></td>
                  </tr>
                  <tr>
                    <td><b>Tanggal Lahir</b><div align="center"></div></td>
                    <td>:</td>
                    <td ><?php echo $this->session->userdata('tgl_lahir'); ?><div align="center"></div></td>
                  </tr> 
                  <tr>
                    <td><b>Asal Sekolah</b><div align="center"></div></td>
                    <td>:</td>
                    <td ><?php echo $this->session->userdata('asal_sekolah'); ?><div align="center"></div></td>
                    
                  </tr>
                </table>
                  <br/>
                  <h3>Nilai Rapor</h3>
                  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                   <tr align="center" bgcolor="#FFA600" height="40">
                      <td width="5%"><b>No</b><div align="center"></div></td>
                      <td width="20%"><b>Semester</b><div align="center"></div></td>
                      <td width="50%"><b>Mata Pelajaran</b><div align="center"></div></td>
                      <td width="25"><b>Nilai</b><div align="center"></div></td>
                     

                   </tr>
                    <?php 
                    $no = 1;
                    foreach($user as $u){ 
                    ?>
                    <tr align="center" height="40">
                        <td width="5%"><?php echo $no++ ?></td>
                        <td width="20%"><?php echo $u->semester ?></td>
                        <td width="50%"><?php echo $u->mapel ?></td>
                        <td width="25%"><?php echo $u->nilai ?></td>
                        
                    </tr>
                    <?php } ?>
                  </table>
                    <br>
                    <h3>Nilai UN</h3>
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                   <tr align="center" bgcolor="#FFA600" height="40">
                      <td width="5%"><b>No</b><div align="center"></div></td>
                      <td width="50%"><b>Mata Pelajaran</b><div align="center"></div></td>
                      <td width="25"><b>Nilai</b><div align="center"></div></td>
                     

                   </tr>
                    <?php 
                    $no = 1;
                    foreach($user1 as $u){ 
                    ?>
                    <tr align="center" height="40">
                        <td width="5%"><?php echo $no++ ?></td>
                        <td width="50%"><?php echo $u->mapel_un ?></td>
                        <td width="25%"><?php echo $u->nilai_un ?></td>
                        
                    </tr>
                    <?php } ?>
                    </table>  
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr /> 
            </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
</div>
</div>
     <!-- /. WRAPPER  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
        
    </body>
</html>
