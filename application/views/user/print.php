  
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<body>
   
    <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                        <div class="col-lg-12 col-xs-6">
          <!-- small box -->
                          <div class="small-box bg-red">
                           <div class="inner">
                                <h3 align="center">DATA PESERTA</h3>
                           </div>
                          </div>
                      </div>
                      <div class="col-md-6">
               
                    <h3>Data Siswa</h3>
                      <table class="table">
                          <tbody>
                              <tr>
                                  <td>Nama Lengkap</td>
                                  <td><?php echo $user1->nama; ?></td>
                              </tr>
                              <tr>
                                  <td>NISN</td>
                                  <td><?php echo $user1->nisn; ?></td>
                              </tr>
                              <tr>
                                  <td>Jenis Kelamin</td>
                                  <td><?php echo $user1->jenis_kelamin;?></td>
                              </tr>
                              <tr>
                                  <td>Tempat Lahir</td>
                                  <td><?php echo $user1->tempat_lahir;?></td>
                              </tr>
                              <tr>
                                  <td>Tanggal Lahir</td>
                                  <td><?php echo $user1->tgl_lahir;?></td>
                              </tr>
                              <tr>
                                  <td>Asal Sekolah</td>
                                  <td><?php echo $user1->asal_sekolah;?></td>   
                              </tr>
                              <tr>
                                  <td>Alamat Sekolah</td>
                                  <td><?php echo $user1->alamat_sekolah;?></td>
                              </tr>
                              <tr>
                                  <td>Agama</td>
                                  <td><?php echo $user1->agama;?></td>
                              </tr>
                              <tr>
                                  <td>Suku Bangsa</td>
                                  <td><?php echo $user1->suku;?></td>
                              </tr>
                              <tr>
                                  <td>Anak Ke-</td>
                                  <td><?php echo $user1->anak_ke;?></td>
                              </tr>
                              <tr>
                                  <td>Jumlah Saudara</td>
                                  <td><?php echo $user1->jml_sdr;?></td>
                              </tr>
                              <tr>
                                  <td>Alamat Rumah</td>
                                  <td><?php echo $user1->alamat;?></td>
                              </tr>
                              <tr>
                                  <td>Provinsi</td>
                                  <td><?php echo $user1->prov;?></td>
                              </tr>
                              <tr>
                                  <td>Kabupaten</td>
                                  <td><?php echo $user1->kabupaten;?></td>
                              </tr>
                              <tr>
                                  <td>Kecamatan</td>
                                  <td><?php echo $user1->kecamatan;?></td>
                              </tr>
                              <tr>
                                  <td>Kode Pos</td>
                                  <td><?php echo $user1->kode_pos;?></td>
                              </tr>
                              <tr>
                                  <td>Nomor HP</td>
                                  <td><?php echo $user1->no_hp;?></td>
                              </tr>
                              <tr>
                                  <td>Nomor Telp. Rumah</td>
                                  <td><?php echo $user1->no_tlp;?></td>
                              </tr>
                              <tr>
                                  <td>E-Mail</td>
                                  <td><?php echo $user1->email;?></td>
                              </tr>
                              <tr>
                                  <td>Golongan Darah</td>
                                  <td><?php echo $user1->goldar;?></td>
                              </tr>
                              <tr>
                                  <td>Tinggi Badan</td>
                                  <td><?php echo $user1->tinggi_badan;?></td>
                              </tr>
                              <tr>
                                  <td>Berat Badan</td>
                                  <td><?php echo $user1->berat_badan;?></td>
                              </tr>
                              <tr>
                                  <td>Riwayat Penyakit</td>
                                  <td><?php echo $user1->penyakit;?></td>
                              </tr>
                              <tr>
                                  <td>Keterangan Lain</td>
                                  <td><?php echo $user1->keterangan;?></td>
                              </tr>
                          </tbody>
                      </table>
                  
                  <h3>Pilihan Jurusan</h3>
                  <table><tbody>
                          <tr>
                              <td><?php echo $user->nama_jurusan;?></td>
                          </tr>
                          <tr></tr>
                      </tbody>

                  </table>
                </div>
                
                <div class="col-md-6">
                  <h4>Orang Tua / Wali</h4>
                  <table class="table">
                      <tbody>
                          <tr>
                              <td>Nama Ayah</td>
                              <td><?php if(isset($user2->ot_nama_ayah)) echo $user2->ot_nama_ayah; ?></td>
                          </tr>
                          <tr>
                              <td>Pendidikan Ayah</td>
                              <td><?php if(isset($user2->ot_pend_ayah)) echo $user2->ot_pend_ayah; ?></td>
                          </tr>
                          <tr>
                              <td>Pekerjaan Ayah</td>
                              <td><?php if(isset($user2->ot_pek_ayah)) echo $user2->ot_pek_ayah; ?></td>
                          </tr>
                          <tr>
                              <td>Penghasilan Ayah</td>
                              <td><?php if(isset($user2->ot_gaji_ayah)) echo $user2->ot_gaji_ayah; ?></td>
                          </tr>
                          <tr>
                              <td>Nomor HP Ayah</td>
                              <td><?php if(isset($user2->ot_hp_ayah)) echo $user2->ot_hp_ayah; ?></td>
                          </tr>
                          <tr>
                              <td>Nama Ibu</td>
                              <td><?php if(isset($user2->ot_nama_ibu)) echo $user2->ot_nama_ibu; ?></td>
                          </tr>
                          <tr>
                              <td>Pendidikan Ibu</td>
                              <td><?php if(isset($user2->ot_pend_ibu)) echo $user2->ot_pend_ibu; ?></td>
                          </tr>
                          <tr>
                              <td>Pekerjaan Ibu</td>
                              <td><?php if(isset($user2->ot_pek_ibu)) echo $user2->ot_pek_ibu; ?></td>
                          </tr>
                          <tr>
                              <td>Penghasilan Ibu </td>
                              <td><?php if(isset($user2->ot_gaji_ibu)) echo $user2->ot_gaji_ibu; ?></td>
                          </tr>
                          <tr>
                              <td>Nomor HP Ibu</td>
                              <td><?php if(isset($user2->ot_hp_ibu)) echo $user2->ot_hp_ibu; ?></td>
                          </tr>
                          <tr>
                              <td>Alamat Orang Tua</td>
                              <td><?php if(isset($user21->ot_alamat_ortu)) echo $user21->ot_alamat_ortu; ?></td>
                          </tr>
                          
                      </tbody>
                  </table>
                  <div class="col-md-6">
                  <?php if($this->session->has_userdata('foto')){?>
                  <img src="<?php echo base_url('assets/') ."/".$user1->foto;?>" class="user-image img-responsive"/><?php } else {?><img src="<?php echo base_url();?>assets/img/tutwuri.gif" class="user-image img-responsive"/> <?php }?>
                </div><br><br><br>
                 
<br><br><br>
                    <center><?php echo anchor('c_ppdb/print_dokumen' ."/" .$user->id,'<button type="button" class="btn btn-success btn-xs">Download</button> ');?></center>
                           
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
   2