<html>
                       <h3>Data Peserta</h3>
                    <br>
                    <h4>Data Siswa</h4><br>
                      <table class="table">
                          <tbody>
                              <tr>
                                  <td>Nama Lengkap</td>
                                  <td>:</td>
                                  <td><?php echo $user->nama; ?></td>
                              </tr>
                              <tr>
                                  <td>NISN</td>
                                  <td>:</td>
                                  <td><?php echo $user->nisn; ?></td>
                              </tr>
                              <tr>
                                  <td>Jenis Kelamin</td>
                                  <td>:</td>
                                  <td><?php echo $user->jenis_kelamin;?></td>
                              </tr>
                              <tr>
                                  <td>Tempat Lahir</td>
                                  <td>:</td>
                                  <td><?php echo $user->tempat_lahir;?></td>
                              </tr>
                              <tr>
                                  <td>Tanggal Lahir</td>
                                  <td>:</td>
                                  <td><?php echo $user->tgl_lahir;?></td>
                              </tr>
                              <tr>
                                  <td>Asal Sekolah</td>
                                  <td>:</td>
                                  <td><?php echo $user->asal_sekolah;?></td>   
                              </tr>
                              <tr>
                                  <td>Alamat Sekolah</td>
                                  <td>:</td>
                                  <td><?php echo $user->alamat_sekolah;?></td>
                              </tr>
                              <tr>
                                  <td>Agama</td>
                                  <td>:</td>
                                  <td><?php echo $user->agama;?></td>
                              </tr>
                              <tr>
                                  <td>Suku Bangsa</td>
                                  <td>:</td>
                                  <td><?php echo $user->suku;?></td>
                              </tr>
                              <tr>
                                  <td>Anak Ke-</td>
                                  <td>:</td>
                                  <td><?php echo $user->anak_ke;?></td>
                              </tr>
                              <tr>
                                  <td>Jumlah Saudara</td>
                                  <td>:</td>
                                  <td><?php echo $user->jml_sdr;?></td>
                              </tr>
                              <tr>
                                  <td>Alamat Rumah</td>
                                  <td>:</td>
                                  <td><?php echo $user->alamat;?></td>
                              </tr>
                              <tr>
                                  <td>Provinsi</td>
                                  <td>:</td>
                                  <td><?php echo $user->prov;?></td>
                              </tr>
                              <tr>
                                  <td>Kabupaten</td>
                                  <td>:</td>
                                  <td><?php echo $user->kabupaten;?></td>
                              </tr>
                              <tr>
                                  <td>Kecamatan</td>
                                  <td>:</td>
                                  <td><?php echo $user->kecamatan;?></td>
                              </tr>
                              <tr>
                                  <td>Kode Pos</td>
                                  <td>:</td>
                                  <td><?php echo $user->kode_pos;?></td>
                              </tr>
                              <tr>
                                  <td>Nomor HP</td>
                                  <td>:</td>
                                  <td><?php echo $user->no_hp;?></td>
                              </tr>
                              <tr>
                                  <td>Nomor Telp. Rumah</td>
                                  <td>:</td>
                                  <td><?php echo $user->no_tlp;?></td>
                              </tr>
                              <tr>
                                  <td>E-Mail</td>
                                  <td>:</td>
                                  <td><?php echo $user->email;?></td>
                              </tr>
                              <tr>
                                  <td>Golongan Darah</td>
                                  <td>:</td>
                                  <td><?php echo $user->goldar;?></td>
                              </tr>
                              <tr>
                                  <td>Tinggi Badan</td>
                                  <td>:</td>
                                  <td><?php echo $user->tinggi_badan;?></td>
                              </tr>
                              <tr>
                                  <td>Berat Badan</td>
                                  <td>:</td>
                                  <td><?php echo $user->berat_badan;?></td>
                              </tr>
                              <tr>
                                  <td>Riwayat Penyakit</td>
                                  <td>:</td>
                                  <td><?php echo $user->penyakit;?></td>
                              </tr>
                              <tr>
                                  <td>Keterangan Lain</td>
                                  <td>:</td>
                                  <td><?php echo $user->keterangan;?></td>
                              </tr>
                          </tbody>
                      </table>
                  <br/>
                  <h4>Pilihan Jurusan</h4><br><br>
                  <table><tbody>
                          <tr>
                              <td><?php echo $user->nama_jurusan;?></td>
                          </tr>
                          <tr></tr>
                      </tbody>

                  </table>
                  <h4>Orang Tua / Wali</h4><br><br>
                  <table class="table">
                      <tbody>
                          <tr>
                              <td>Nama Ayah</td>
                              <td><?php  echo $user1->ot_nama_ayah; ?></td>
                          </tr>
                          <tr>
                              <td>Pendidikan Ayah</td>
                              <td><?php  echo $user1->ot_pend_ayah; ?></td>
                          </tr>
                          <tr>
                              <td>Pekerjaan Ayah</td>
                              <td><?php  echo $user1->ot_pek_ayah; ?></td>
                          </tr>
                          <tr>
                              <td>Penghasilan Ayah</td>
                              <td><?php  echo $user1->ot_gaji_ayah; ?></td>
                          </tr>
                          <tr>
                              <td>Nomor HP Ayah</td>
                              <td><?php  echo $user1->ot_hp_ayah; ?></td>
                          </tr>
                          <tr>
                              <td>Nama Ibu</td>
                              <td><?php  echo $user1->ot_nama_ibu; ?></td>
                          </tr>
                          <tr>
                              <td>Pendidikan Ibu</td>
                              <td><?php  echo $user1->ot_pend_ibu; ?></td>
                          </tr>
                          <tr>
                              <td>Pekerjaan Ibu</td>
                              <td><?php echo $user1->ot_pek_ibu; ?></td>
                          </tr>
                          <tr>
                              <td>Penghasilan Ibu </td>
                              <td><?php echo $user1->ot_gaji_ibu; ?></td>
                          </tr>
                          <tr>
                              <td>Nomor HP Ibu</td>
                              <td><?php echo $user1->ot_hp_ibu; ?></td>
                          </tr>
                          <tr>
                              <td>Alamat Orang Tua</td>
                              <td><?php echo $user1->ot_alamat_ortu; ?></td>
                          </tr>
                          
                      </tbody>
                  </table>
                 


                    </html>
