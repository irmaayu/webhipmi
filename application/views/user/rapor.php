 
   
    <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                  <div class="col-md-12">
               <!-- small box -->
                    <div class="small-box bg-red">
                     <div class="inner">
                          <h3 align="center">INPUTKAN NILAI RAPOR</h3>
                     </div>
                    </div>
                  </div>
                </div>  
                                           
                      <div class="row">       
                      <center><?php echo form_open('c_ppdb/proses_rapor'); ?> 
                      <div class="col-md-6 col-md-offset-3" class="center">
                        <div class="login-panel panel panel-default">
                          <div class="panel-body">
                          <table class="table">
                          
                              <td></td>
                              <td>Semester</td>
                              <td>
                                <select name="semester">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                </select>
                              </td>
                          </tr>
                          <tr>
                              <td></td>
                              <td>Bahasa Indonesia</td>
                              <td>:</td>
                              <td><input name="b_indonesia" type="number" min="0" max="100"></td>
                          </tr>
                          <tr>
                              <td></td>
                              <td>Bahasa Inggris</td>
                              <td>:</td>
                              <td><input name="b_inggris" type="number" min="0" max="100"></td>
                          </tr>
                          <tr>
                              <td></td>
                              <td>Matematika</td>
                              <td>:</td>
                              <td><input name="matematika" type="number" min="0" max="100"></td>
                          </tr>
                          <tr>
                              <td></td>
                              <td>IPA</td>
                              <td>:</td>
                              <td><input name="ipa" type="number" min="0" max="100"></td>
                          </tr>
                          <tr>
                              <td></td>
                              <td>IPS</td>
                              <td>:</td>
                              <td><input name="ips" type="number" min="0" max="100"></td>
                          </tr>
                          <tr>
                              <td></td>
                              <td>Olahraga</td>
                              <td>:</td>
                              <td><input name="olahraga" type="number" min="0" max="100"></td>
                          </tr>
                          <tr>
                              <td></td>
                              <td>Pendidikan Agama Islam</td>
                              <td>:</td>
                              <td><input name="pai" type="number" min="0" max="100"></td>
                          </tr>
                          <tr>
                              <td></td>
                              <td>Pendidikan Kewarganegaraan</td>
                              <td>:</td>
                              <td><input name="pkn" type="number" min="0" max="100"></td>
                          </tr>
                          <br><br>
                          <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td><input type="submit" name="save" value="Save">&nbsp;&nbsp;&nbsp;
                              
                          </tr>
                          </table>
                          <div class="panel-heading">
                                <font size="2"><i>*masukkan semua nilai rapor dengan benar</i></font>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                      </form><div>&nbsp;</div></center>
                    </div>

                    
                    <?php
                      foreach ($smt as $key => $value) {
                    ?>
                      
                      <div class="col-lg-6">
                      <div class="panel panel-default">
                      <!-- Default panel contents -->
                      <div class="panel-heading"><?php echo "Semester " .$key; ?></div>
                      <table class="table">
                          <td>Nama Mata Pelajaran</td>
                          <td>Nilai</td>
                        </tr>
                        <?php foreach ($value as $key2 => $value2) {?>
                        <tr align="center" height="40">
                            <td>Bahasa Indonesia</td>
                            <td><?php echo $value2->b_indonesia; ?></td>
                        </tr>
                        <tr align="center" height="40">
                            <td>Bahasa Inggris</td>
                            <td><?php echo $value2->b_inggris; ?></td>
                        </tr>
                        <tr align="center" height="40">
                            <td>Matematika</td>
                            <td><?php echo $value2->matematika; ?></td>
                        </tr>
                        <tr align="center" height="40">
                            <td>IPA</td>
                            <td><?php echo $value2->ipa; ?></td>
                        </tr>
                        <tr align="center" height="40">
                            <td>IPS</td>
                            <td><?php echo $value2->ips; ?></td>
                        </tr>
                        <tr align="center" height="40">
                            <td>Olahraga</td>
                            <td><?php echo $value2->olahraga; ?></td>
                        </tr>
                        <tr align="center" height="40">
                            <td>Pendidikan Agama Islam</td>
                            <td><?php echo $value2->pai; ?></td>
                        </tr>
                        <tr align="center" height="40">
                            <td>Pendidikan Kewarganegaraan</td>
                            <td><?php echo $value2->pkn; ?></td>
                        </tr>
                        <?php }?>
                      </table>
                    </div>
                  </div>
                    <?php
                      }
                    ?>       
                    <p>Jumlah Nilai Rapor = <?php echo $user2->total;?></p>
                    <p>Jumlah Nilai Rata-rata Rapor = <?php echo $user3->rata_rapor;?></p>
                  </div><!-- /. ROW  -->
                </div><!-- /. PAGE INNER  -->
              </div><!-- /. PAGE WRAPPER  -->
</div>
</div>
     <!-- /. WRAPPER  -->
    