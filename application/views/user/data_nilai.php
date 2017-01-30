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
                        <a  href="data_nilai"><i class="fa fa-qrcode fa-3x"></i>Rapor</a>
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
                    <div class="col-md-8" align="center">
                       <center><font size="8" color="black"><b>INPUT NILAI</b></font></center>
            
                         <?php echo form_open('c_ppdb/proses_nilairapor'); ?>
                          <?php
                          for ($i=1; $i<7 ; $i++) {?>
                           <div class="panel panel-default">
                              <div class="panel-heading"><font size="4" color="blue"><b><?php echo "Semester ".$i;?></b></font></center></div>
                              <table class="table">
                                <tr>
                                    <td><center></td>
                                    <td>Bahasa Indonesia</td>
                                    <td><input type="number" min="0" max="100" name="b_indonesia" size="40"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Bahasa Inggris</td>
                                    <td><input type="number" min="0" max="100" name="b_inggris" size="40"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Matematika</td>
                                    <td><input type="number" min="0" max="100" name="matematika" size="40"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Fisika</td>
                                    <td><input type="number" min="0" max="100" name="fisika" size="40"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Biologi</td>
                                    <td><input type="number" min="0" max="100" name="biologi" size="40"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Kimia</td>
                                    <td><input type="number" min="0" max="100" name="kimia" size="40"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Sejarah</td>
                                    <td><input type="number" min="0" max="100" name="sejarah" size="40"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Geografi</td>
                                    <td><input type="number" min="0" max="100" name="geografi" size="40"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Ekonomi</td>
                                    <td><input type="number" min="0" max="100" name="ekonomi" size="40"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Olahraga</td>
                                    <td><input type="number" min="0" max="100" name="olahraga" size="40"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Pendidikan Agama</td>
                                    <td><input type="number" min="0" max="100" name="pai" size="40"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Pendidikan Kewarganegaraan</td>
                                    <td><input type="number" min="0" max="100" name="pkn" size="40"></td>
                                </tr>
                              </table>
                            </div>
                          
                          
                          
                          
                          <?php
                          }?>
                          <table>
                          <tr>
                              <td height="60">&nbsp;</td>
                              <td>&nbsp;</td>
                              <td><input type="submit" name="save" value="Save">&nbsp;&nbsp;&nbsp;
                              </td>
                          </tr>
                          </table>
                      </form>
                    <br>
                    
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
    <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
        
    </body>
</html>
