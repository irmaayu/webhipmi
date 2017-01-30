         <center>
         <div style="width:400px;height:260px;border: solid 1px #333; padding: 15px; -moz-border-radius: 15px; -khtml-border-radius: 15px; -webkit-border-radius: 15px; border-radius: 15px; margin: 0; text-align: justify; line-height: 23px; color: black;">
          <center>
          <table border='0' width='40%'>
            <tr>
              <table >
                <tr>
                  <td align="left" >
                    <img src="<?php echo base_url(); ?>/assets/img/logo2.png" width="45px" style="margin-top:5px;margin-bottom:5px;margin-left:10px;margin-right:10px;">
                  </td>
                  <td  align="center">
                    <table>
                      <tr>
                        <h4>KARTU PESERTA</h4>
                      </tr>
                      <tr>
                        <h5>PPDB ONLINE - SMKN 1 GARUT</h5>
                      </tr>

                    </table>
                  </td>
                  <td align="right" >
                    <img src="<?php echo base_url(); ?>/assets/img/logo3.png" width="45px" style="margin-top:5px;margin-bottom:5px;margin-left:10px;margin-right:10px;">
                  </td>
                </tr>   
                <tr><td colspan='3'><hr></td></tr>
              </table>  
            </tr>
            <tr>
              <table>
            <?php
              echo "<tr><td>Nomor Pendaftaran  </td><td> &nbsp&nbsp=&nbsp&nbsp </td><td>".$siswa->no_Regist."&nbsp;&nbsp;</td></tr>";
              echo "<tr><td>NISN  </td><td> &nbsp&nbsp=&nbsp&nbsp </td><td>".$siswa->NISN."&nbsp;&nbsp;</td></tr>";
              echo "<tr><td>Nama Pendaftar </td><td> &nbsp&nbsp=&nbsp&nbsp </td><td>".$siswa->nama_user."</td></tr>";
              echo "<tr><td>Tempat/Tanggal Lahir </td><td> &nbsp&nbsp=&nbsp&nbsp </td><td>".$bsiswa->tempat_lahir."/".$bsiswa->tgl_lahir."</td></tr>";
              echo "<tr><td>Sekolah Asal  </td><td> &nbsp&nbsp=&nbsp&nbsp </td><td>".$bsiswa->asalsekolah."</td></tr>";
            ?>
            </table>
            </tr>
          </table>
          </div>
          <h6 style="color:red">*gunting tepat pada border setelah kartu di print</h6>
          <br>

          <a href="index.php" align="right">
              <button onClick="window.print()">Print</button>
            </a>
          
          <!-- <button onClick="<?php echo $base_url;?>index.php/c_user/print_dokumen">Print</button> !-->
            
          </center>
          

      <script src=".<?php echo base_url();?>/assetsjs/jquery.min.js"></script>
            <script src="<?php echo base_url();?>/assets/js/metisMenu.min.js"></script>
            
            <script src="<?php echo base_url();?>/assets/js/sb-admin-2.js"></script>


