
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<body>			
	
    <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    
   <div class="col-lg-12 col-xs-6">
          <!-- small box -->
                    <?php foreach ($data as $u) {
                        if($u->status==0){?>
                        <div class="alert alert-warning">
                            <center><strong>Anda belum terdaftar</strong></center> 
                        </div>
                        <?php }
                    }?>
                  <?php foreach ($data as $user) {
                    
                    if($user->status==2){?>
                        <div class="alert alert-success">
                            <center><strong>Selamat Anda Keterima di jurusan <?php echo $user->nama_jurusan;?> yang Anda pilih.</strong></center> 
                        </div>
                        
                   <?php } else 
                   if($user->status==3){?>
                        <div class="alert alert-danger">
                            <CENTER><strong>Anda dinyatakan tidak lolos</strong></CENTER> 
                        </div>
                    <?php }  
                  }
                    ?>
                    <br>
                    <!-- <a href="ganti_pass.php" title="">Ganti Password</a> -->
                       
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
     