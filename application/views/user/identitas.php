			
	
    <!-- /. NAV SIDE  -->
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
                                        <button type="button" class="btn bg-teal btn-sm" data-widget="remove"></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                            }?>
                        <div class="col-lg-12 col-xs-6">
                        <!-- small box -->
                          <div class="small-box bg-red">
                           <div class="inner">
                                <h3 align="center">LENGKAPI IDENTITAS</h3>
                           </div>
                          </div>
                        </div>
                        </div>
                    
<br><br>
                    <div class="postcontent postcontent-0 clearfix">
                        <form  action="<?php echo base_url('index.php/c_ppdb/tambah_identitas') ?>" method="POST" enctype="multipart/form-data">
                            <div class="content-layout">
                                <div class="content-layout-row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div >
                                        <h4 >Data Siswa</h4>
                                        </div>
                                        <table width="100%"  cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td class="layout-item-table-1">
                                                        <div style="width: 150px">Nama Lengkap</div>
                                                    </td>
                                                    <td class="layout-item-table-1">
                                                        <input class="" type="text" maxlength="128" style="width: 90%; max-width: 300px;" value="<?php echo $this->session->userdata('nama'); ?>" name="nama" readonly="readonly"></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">
                                                        <div style="width: 150px">NISN</div>
                                                    </td>
                                                    <td class="layout-item-table-1">
                                                        <input class="" type="text" maxlength="128" style="width: 90%; max-width: 300px;" value="<?php echo $this->session->userdata('nisn'); ?>" name="nisn" readonly="readonly"></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Jenis Kelamin</td>
                                                    <td class="layout-item-table-1">
                                                        <input type="radio"  value="L" <?php if($user->jenis_kelamin=="L") echo 'checked';?> name="jenis_kelamin" >Laki-Laki</input>
                                                        <input type="radio" value="P" <?php if($user->jenis_kelamin=="P") echo 'checked';?> name="jenis_kelamin">Perempuan</input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Tempat Lahir</td>
                                                    <td class="layout-item-table-1">
                                                        <input class="" type="text" maxlength="64" style="width: 90%; max-width: 300px;" value="<?php echo $this->session->userdata('tempat_lahir'); ?>" name="tempat_lahir" required></input>
                                                        
                                                        <br></br>
                                                    
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Tanggal Lahir</td>
                                                    <td class="layout-item-table-1">
                                                        <input id="calendar" class="" type="text" maxlength="10" style="width: 90%; max-width: 80px;" value="<?php echo $this->session->userdata('tgl_lahir'); ?>" name="tgl_lahir" placeholder="YYYY-mm-dd" required></input>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Asal Sekolah</td>
                                                    <td class="layout-item-table-1">
                                                        <input class="" type="text" maxlength="128" style="width: 90%; max-width: 300px;" value="<?php echo $this->session->userdata('asal_sekolah'); ?>" name="asal_sekolah" required></input>
                                                    </td>   
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Alamat Sekolah</td>
                                                    <td class="layout-item-table-1">
                                                        <textarea class="" maxlength="255" style="width: 90%; max-width: 300px; height: 45px;" rows="10" cols="40" name="alamat_sekolah" required><?php echo $this->session->userdata('alamat_sekolah'); ?></textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Agama</td>
                                                    <td class="layout-item-table-1">
                                                        <select style="width: 90%; max-width: 300px;" name="agama" class="select2 form-control" class="form-control">
                                                            <option>--Agama--</option>
                                                            <?php foreach ($agama as $value) {?>
                                                            <option <?php if ($user->agama==$value->agama_nama) echo 'selected' ;?> value="<?php echo $value->agama_nama;?>"><?php echo $value->agama_nama;?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Suku Bangsa</td>
                                                    <td class="layout-item-table-1">
                                                        <input class="" type="text" maxlength="64" style="width: 90%; max-width: 300px;" value="<?php echo $this->session->userdata('suku'); ?>" name="suku" required></input>
                                                        <br></br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Anak Ke-</td>
                                                    <td class="layout-item-table-1">
                                                        <input class="" type="text" maxlength="2" style="width: 90%; max-width: 80px;" value="<?php echo $this->session->userdata('anak_ke'); ?>" name="anak_ke" required></input>
                                                        <br></br>
                                                   </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Jumlah Saudara</td>
                                                    <td class="layout-item-table-1">
                                                        <input class="" type="text" maxlength="2" style="width: 90%; max-width: 80px;" value="<?php echo $this->session->userdata('jml_sdr'); ?>" name="jml_sdr" required></input>
                                                        <br></br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Alamat Rumah</td>
                                                    <td class="layout-item-table-1">
                                                        <textarea class="" maxlength="255" style="width: 90%; max-width: 300px; height: 45px;" rows="10" cols="40" name="alamat" required><?php echo $this->session->userdata('alamat'); ?></textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Provinsi</td>
                                                    <td class="layout-item-table-1">
                                                        <select style="width: 90%; max-width: 300px;" name="prov" class="select2 form-control" class="form-control">
                                                            <option>--Provinsi--</option>
                                                            <?php foreach ($prov as $value) {?>
                                                            <option <?php if ($user->prov==$value->prov_nama) echo 'selected' ;?> value="<?php echo $value->prov_nama;?>"><?php echo $value->prov_nama;?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Kabupaten</td>
                                                    <td class="layout-item-table-1">
                                                        <input class="" type="text" maxlength="64" style="width: 90%; max-width: 300px;" value="<?php echo $this->session->userdata('kabupaten'); ?>" name="kabupaten" required></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Kecamatan</td>
                                                    <td class="layout-item-table-1">
                                                        <input class="" type="text" maxlength="64" style="width: 90%; max-width: 300px;" value="<?php echo $this->session->userdata('kecamatan'); ?>" name="kecamatan" required></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Kode Pos</td>
                                                    <td class="layout-item-table-1">
                                                        <input class="" type="text" maxlength="16" style="width: 90%; max-width: 80px;" value="<?php echo $this->session->userdata('kode_pos'); ?>" name="kode_pos" required></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Nomor HP</td>
                                                    <td class="layout-item-table-1">
                                                        <input class="" type="text" maxlength="16" style="width: 90%; max-width: 150px;" value="<?php echo $this->session->userdata('no_hp'); ?>" name="no_hp" required></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Nomor Telp. Rumah</td>
                                                    <td class="layout-item-table-1">
                                                        <input class="" type="text" maxlength="16" style="width: 90%; max-width: 150px;" value="<?php echo $this->session->userdata('no_tlp'); ?>" name="no_tlp" required></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">E-Mail</td>
                                                    <td class="layout-item-table-1">
                                                        <input class="" type="text" maxlength="128" style="width: 90%; max-width: 150px;" value="<?php echo $this->session->userdata('email'); ?>" name="email" readonly="readonly"></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Golongan Darah</td>
                                                    <td class="layout-item-table-1">
                                                        <input type="radio" value="A" <?php if($user->goldar=="A") echo 'checked';?> name="goldar">A</input>
                                                        <input type="radio" value="B" <?php if($user->goldar=="B") echo 'checked';?> name="goldar">B</input>
                                                        <input type="radio" value="O" <?php if($user->goldar=="O") echo 'checked';?> name="goldar">O</input>
                                                        <input type="radio" value="AB" <?php if($user->goldar=="AB") echo 'checked';?> name="goldar">AB</input>
                                                        <input type="radio" <?php if($user->goldar=="tidak tahu") echo 'checked';?> value="tidak tahu" name="goldar">Tidak Tahu</input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Tinggi Badan</td>
                                                    <td class="layout-item-table-1">
                                                        <input class="" type="text" maxlength="16" style="width: 90%; max-width: 80px;" value="<?php echo $this->session->userdata('tinggi_badan'); ?>" name="tinggi_badan" required>cm</input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Berat Badan</td>
                                                    <td class="layout-item-table-1">
                                                        <input class="" type="text" maxlength="16" style="width: 90%; max-width: 80px;" value="<?php echo $this->session->userdata('berat_badan'); ?>" name="berat_badan" required>Kg</input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Riwayat Penyakit</td>
                                                    <td class="layout-item-table-1">
                                                        <textarea class="" maxlength="255" style="width: 90%; max-width: 300px; height: 45px;" rows="10" cols="40" name="penyakit"><?php echo $this->session->userdata('penyakit'); ?></textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Keterangan Lain</td>
                                                    <td class="layout-item-table-1">
                                                        <textarea class="" maxlength="255" style="width: 90%; max-width: 300px; height: 45px;" rows="10" cols="40" name="keterangan"><?php echo $this->session->userdata('keterangan'); ?></textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    
                                        <div>
                                        <h4  >Pilihan Jurusan</h4>
                                        </div>
                                        <table><tbody>
                                                <tr>
                                                    <td class="layout-item-table-1">
                                                        <select style="width: 100%; max-width: 300px;" name="nama_jurusan" class="select2 form-control" class="form-control"  required>
                                                            <option>--Jurusan--</option>
                                                            <?php foreach ($jurusan as $value) {?>
                                                            <option <?php if ($user->nama_jurusan==$value->nama_jrs) echo 'selected' ;?> value="<?php echo $value->nama_jrs;?>"><?php echo $value->nama_jrs;?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr></tr>
                                            </tbody>

                                        </table>
                                        <h4>Orang Tua / Wali</h4>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="layout-item-table-1">
                                                        <div style="width: 150px">Nama Ayah</div>
                                                    </td>
                                                    <td class="layout-item-table-1">
                                                        <input class="" type="text" maxlength="128" style="width: 90%; max-width: 300px;" value="<?php if(isset($user1->ot_nama_ayah)) echo $user1->ot_nama_ayah; ?>" name="ot_nama_ayah" required></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Pendidikan Ayah</td>
                                                    <td class="layout-item-table-1">
                                                         <select style="width: 90%; max-width: 300px;" name="ot_pend_ayah" class="select2 form-control" class="form-control" required>
                                                            <option>--Pendidikan Ayah--</option>
                                                            <?php foreach ($pendidikan as $value) {?>
                                                            <option <?php if(isset($user1->ot_pend_ayah)){if ($user1->ot_pend_ayah==$value->pend_nama) echo 'selected' ;}?> value="<?php echo $value->pend_nama;?>"><?php echo $value->pend_nama;?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Pekerjaan Ayah

                                                    </td>
                                                    <td class="layout-item-table-1">
                                                        <select style="width: 90%; max-width: 300px;" name="ot_pek_ayah" class="select2 form-control" class="form-control" required>
                                                            <option>--Pekerjaan Ayah--</option>
                                                            <?php foreach ($pekerjaan as $value) {?>
                                                            <option <?php if(isset($user1->ot_pek_ayah)){if ($user1->ot_pek_ayah==$value->pek_nama) echo 'selected' ;}?> value="<?php echo $value->pek_nama;?>"><?php echo $value->pek_nama;?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Penghasilan Ayah</td>
                                                    <td class="layout-item-table-1">
                                                        <input class="" type="text" maxlength="16" style="width: 90%; max-width: 150px;" value="<?php if(isset($user1->ot_gaji_ayah)) echo $user1->ot_gaji_ayah; ?>" name="ot_gaji_ayah" required>Rupiah</input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Nomor HP Ayah</td>
                                                    <td class="layout-item-table-1">
                                                        <input class="" type="text" maxlength="16" style="width: 90%; max-width: 150px;" value="<?php if(isset($user1->ot_hp_ayah)) echo $user1->ot_hp_ayah; ?>" name="ot_hp_ayah" required></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Nama Ibu</td>
                                                    <td class="layout-item-table-1">
                                                        <input class="" type="text" maxlength="128" style="width: 90%; max-width: 300px;" value="<?php if(isset($user1->ot_nama_ibu)) echo $user1->ot_nama_ibu; ?>" name="ot_nama_ibu" required></input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Pendidikan Ibu</td>
                                                    <td class="layout-item-table-1">
                                                        <select style="width: 90%; max-width: 300px;" name="ot_pend_ibu" class="select2 form-control" class="form-control" required>
                                                            <option>--Pendidikan Ibu--</option>
                                                            <?php foreach ($pendidikan as $value) {?>
                                                            <option <?php if(isset($user1->ot_pend_ibu)){if ($user1->ot_pend_ibu==$value->pend_nama) echo 'selected' ;}?> value="<?php echo $value->pend_nama;?>"><?php echo $value->pend_nama;?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Pekerjaan Ibu</td>
                                                    <td class="layout-item-table-1">
                                                        <select style="width: 90%; max-width: 300px;" name="ot_pek_ibu" class="select2 form-control" class="form-control" required>
                                                            <option>--Pekerjaan Ibu--</option>
                                                            <?php foreach ($pekerjaan as $value) {?>
                                                            <option <?php if(isset($user1->ot_pek_ibu)){if ($user1->ot_pek_ibu==$value->pek_nama) echo 'selected' ;}?> value="<?php echo $value->pek_nama;?>"><?php echo $value->pek_nama;?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Penghasilan Ibu </td>
                                                    <td class="layout-item-table-1">
                                                        <input class="" type="text" maxlength="16" style="width: 90%; max-width: 150px;" value="<?php if(isset($user1->ot_gaji_ibu)) echo $user1->ot_gaji_ibu; ?>" name="ot_gaji_ibu" required>Rupiah</input>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Nomor HP Ibu</td>
                                                    <td class="layout-item-table-1">
                                                        <input class="" type="text" maxlength="16" style="width: 90%; max-width: 150px;" value="<?php if(isset($user1->ot_hp_ibu)) echo $user1->ot_hp_ibu; ?>" name="ot_hp_ibu" required></input>
                                                        <br></br>
                                                        <font style="font-style: italic; color: #C1C1C1"></font>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="layout-item-table-1">Alamat Orang Tua</td>
                                                    <td class="layout-item-table-1">
                                                        <textarea class="" maxlength="255" style="width: 90%; max-width: 300px; height: 65px;" rows="10" cols="40" name="ot_alamat_ortu" required><?php if(isset($user1->ot_alamat_ortu)) echo $user1->ot_alamat_ortu; ?></textarea>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                        <h4>Masukkan Foto Anda</h4>
                                        <table><tbody>
                                                <tr>
                                                    <td>
                                                        <?php if($this->session->has_userdata('foto')){?>
                                                        <img src="<?php echo base_url('assets/') ."/".$user->foto;?>" class="user-image img-responsive"/>
                                                        <?php }else{?>
                                                        <img src="<?php echo base_url();?>assets/img/find_user.png" class="user-image img-responsive"><?php } ?>
                                                    </td> 
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="file" name="foto" value="<?php echo $this->session->userdata('foto'); ?>" placeholder="">
                                                    </td>
                                                </tr>
                                                <tr></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div><br><br>
                            <center>
                            <div class="content-layout">

                                <div class="content-layout-row">
                                    <div class="layout-cell layout-item-0" style="width: 50%"></div>
                                    <div class="layout-cell layout-item-0" style="width: 50%">
                                        <tr>
                                            <td></td>
                                            <td>
                                                <input type="hidden" name="id" value="<?php echo $this->session->userdata('id');?>">
                                                <button type="submit">Finish</button>  
                                            </td>
                                        </tr>
                                        </div>
                                    </div>
                                </div>
                            </center>
                            </form>
                        </div>
                         

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
    