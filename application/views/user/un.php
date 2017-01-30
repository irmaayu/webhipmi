
	
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
                      <div class="row">
                        <?php echo form_open('c_ppdb/proses_un'); ?>
                        <div class="col-md-6 col-md-offset-3" class="center">
                        <div class="login-panel panel panel-default">
                          <div class="panel-body">
                          <table class="table">     
                         
                          <tr>
                              <td height="40">&nbsp;</td>
                              <td>Bahasa Indonesia</td>
                              <td><input name="b_indonesia" type="number" min="0" max="100"></td>
                          </tr>
                          <tr>
                              <td height="40">&nbsp;</td>
                              <td>Bahasa Inggris</td>
                              <td><input name="b_inggris" type="number" min="0" max="100"></td>
                          </tr>
                          <tr>
                              <td height="40">&nbsp;</td>
                              <td>Bahasa Matematika</td>
                              <td><input name="matematika" type="number" min="0" max="100"></td>
                          </tr>
                          <tr>
                              <td height="40">&nbsp;</td>
                              <td>IPA</td>
                              <td><input name="ipa" type="number" min="0" max="100"></td>
                          </tr> 
                          
                          
                          <tr>
                              <td height="60">&nbsp;</td>
                              <td>&nbsp;</td>
                              <td><input type="submit" name="save" value="Save">&nbsp;&nbsp;&nbsp;
                              <input type="reset" name="reset" value="Cancel"></td>
                          </tr>
                          </table>
                          </div>  
                          <div class="panel-heading">
                                <font size="2"><i>*masukkan semua nilai UN dengan benar</i></font>&nbsp;&nbsp;
                            </div></div></div>
                      </form>
                      </div>
                    <br>
<br><br><br>
                    <div class="row" class="center">
                      <div class="col-md-7">
                       <div class="panel panel-default"> 
                       
                            <!-- Default panel contents -->
                            <div class="panel-heading"><center><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr height="40">
                                  <td width="7%"><b>No</b><div align="center"></div></td>
                                  <td width="60%"><b>Mata Pelajaran</b><div align="center"></div></td>
                                  <td width="25"><b>Nilai</b><div align="center"></div></td>
                              </tr></table></center>
                            </div>
                            <center><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <?php 
                    $no = 1;
                    foreach($user1 as $u){ 
                    ?>
                    <tr  height="40">
                        <td align="center" width="7%"><?php echo $no++ ?></td>
                        <td width="60%">&nbsp;&nbsp;Bahasa Indonesia</td>
                        <td width="30%"><?php echo $u->b_indonesia ?></td>
                    </tr>
                    <tr  height="40">
                        <td align="center" width="7%"><?php echo $no++ ?></td>
                        <td width="60%">&nbsp;&nbsp;Bahasa Inggris</td>
                        <td width="30%"><?php echo $u->b_inggris ?></td>
                    </tr>
                    <tr  height="40">
                        <td align="center" width="7%"><?php echo $no++ ?></td>
                        <td width="60%">&nbsp;&nbsp;Matematika</td>
                        <td width="30%"><?php echo $u->matematika ?></td>
                    </tr>
                    <tr  height="40">
                        <td align="center" width="7%"><?php echo $no++ ?></td>
                        <td width="60%">&nbsp;&nbsp;IPA</td>
                        <td width="30%"><?php echo $u->ipa ?></td>
                    </tr>
                    <?php } 
                     ?>
                   </table></center>
                   <table class="table">
                     <tr height="40">
                       <td width="7%"></td>
                       <td width="60%">Jumlah UN</td>
                       <td><?php echo $user2->total?></td> 
                     </tr>
                     <tr height="40">
                       <td width="7%"></td>
                       <td width="60%" >Rata-rata UN</td>
                       <td><?php echo $user3?></td> 
                     </tr>
                    </table> 

                    </div>
                  </div>
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
     