  <div class="container">
    <div class="brands_products"> <!--  sbrands_products-->
              <h2>Obrolan</h2>
              <div class="brands-name" style="border: 1px solid rgb(204, 204, 204); padding: 5px; overflow: auto; width: 100%; height: 500px;background-color: rgb(255, 255, 255);">
                <ul class="nav nav-pills nav-stacked">
                <?php 
                     foreach ($obrolan as $value) {
                     if($value->pengirim_komentar==$id_chat){ ?>
                        <li style="float:right; background-color:orange; width:90%; padding:10px; margin-bottom:2px;"><h4><span class="pull-right"><!-- (50) --></span><?php echo $value->isi_komentar; ?></h4>
                        <div style="text-align:left"><?php echo $value->tanggal_komentar; ?> |  <?php echo $value->jam_komentar?></div>
                        </li>
                        <br/>
                      <?php 
                        } else {
                       ?>
                    
                        <li style="float:left; background-color:#dddddd; width:90%; padding:10px;text-align:left;margin-bottom:2px; ">
                          <h4><span class="pull-right"><!-- (50) --></span><?php echo $value->isi_komentar; ?></h4>
                        <div style="text-align:right"><?php echo $value->tanggal_komentar; ?> | <?php echo $value->jam_komentar?></div>
                        </li>
                        <br/>
                        
                <?php } ?>
                       
                <?php }?>
                </ul>
               
              </div>
            </div><!--/brands_products-->
            <br>
             <form action="<?php echo base_url('user/proseschat'); ?>"method="POST" accept-charset="utf-8" >
              <table class="table">  
               <tr>
                    <td>
                    <input type="hidden" class="form-control" name="id_penjual" value= <?php echo $penjual->id;?> ></td>
                    <input type="hidden" class="form-control" name="id_produk" value= <?php echo $penjual->id_produk;?> ></td>
                    <input type="text" class="form-control" name="isi_komentar" placeholder="isi komentar" ></td>
                  </tr>
                  <tr>  
                    <td align="right"><button class="btn btn-primary">KIRIM</button></td>
                  </tr>
                  </table>
                 
                </form>
  </div>

<!-- <div class="app-messaging-container">
    <div class="app-messaging" id="collapseMessaging">
      <div class="chat-group">
        <div class="heading">Converstion</div>
        <ul class="group full-height">
          <li class="section">unread</li>
          <li class="message">
            <a data-toggle="collapse" href="#collapseMessaging" aria-expanded="false" aria-controls="collapseMessaging">
              <span class="badge badge-warning pull-right">10</span>
              <div class="message">
                <img class="profile" src="https://placehold.it/100x100">
                <div class="content">
                  <div class="title">"Kofirmasi Pembayaran.."</div>
                  <div class="description">Dadang</div>
                </div>
              </div>
            </a>
          </li>
          <li class="message">
            <a data-toggle="collapse" href="#collapseMessaging" aria-expanded="false" aria-controls="collapseMessaging">
              <span class="badge badge-warning pull-right">10</span>
              <div class="message">
                <img class="profile" src="https://placehold.it/100x100">
                <div class="content">
                  <div class="title">"Kofirmasi Pembayaran.."</div>
                  <div class="description">Dadang</div>
                </div>
              </div>
            </a>
          </li>
          <li class="section">readed</li>
          <li class="message">
            <a data-toggle="collapse" href="#collapseMessaging" aria-expanded="false" aria-controls="collapseMessaging">
              <div class="message">
                <img class="profile" src="https://placehold.it/100x100">
                <div class="content">
                  <div class="title">"Kofirmasi Pembayaran.."</div>
                  <div class="description">Dadang</div>
                </div>
              </div>
            </a>
          </li>
          <li class="message">
            <a data-toggle="collapse" href="#collapseMessaging" aria-expanded="false" aria-controls="collapseMessaging">
              <div class="message">
                <img class="profile" src="https://placehold.it/100x100">
                <div class="content">
                  <div class="title">"Kofirmasi Pembayaran.."</div>
                  <div class="description">Dadang</div>
                </div>
              </div>
            </a>
          </li>
          <li class="message">
            <a data-toggle="collapse" href="#collapseMessaging" aria-expanded="false" aria-controls="collapseMessaging">
              <div class="message">
                <img class="profile" src="https://placehold.it/100x100">
                <div class="content">
                  <div class="title">"Kofirmasi Pembayaran.."</div>
                  <div class="description">Dadang</div>
                </div>
              </div>
            </a>
          </li>
          <li class="message">
            <a data-toggle="collapse" href="#collapseMessaging" aria-expanded="false" aria-controls="collapseMessaging">
              <div class="message">
                <img class="profile" src="https://placehold.it/100x100">
                <div class="content">
                  <div class="title">"Kofirmasi Pembayaran.."</div>
                  <div class="description">Dadang</div>
                </div>
              </div>
            </a>
          </li>
          <li class="message">
            <a data-toggle="collapse" href="#collapseMessaging" aria-expanded="false" aria-controls="collapseMessaging">
              <div class="message">
                <img class="profile" src="https://placehold.it/100x100">
                <div class="content">
                  <div class="title">"Kofirmasi Pembayaran.."</div>
                  <div class="description">Dadang</div>
                </div>
              </div>
            </a>
          </li>
          <li class="message">
            <a data-toggle="collapse" href="#collapseMessaging" aria-expanded="false" aria-controls="collapseMessaging">
              <div class="message">
                <img class="profile" src="https://placehold.it/100x100">
                <div class="content">
                  <div class="title">"Kofirmasi Pembayaran.."</div>
                  <div class="description">Dadang</div>
                </div>
              </div>
            </a>
          </li>
          <li class="message">
            <a data-toggle="collapse" href="#collapseMessaging" aria-expanded="false" aria-controls="collapseMessaging">
              <div class="message">
                <img class="profile" src="https://placehold.it/100x100">
                <div class="content">
                  <div class="title">"Kofirmasi Pembayaran.."</div>
                  <div class="description">Dadang</div>
                </div>
              </div>
            </a>
          </li>
          <li class="message">
            <a data-toggle="collapse" href="#collapseMessaging" aria-expanded="false" aria-controls="collapseMessaging">
              <div class="message">
                <img class="profile" src="https://placehold.it/100x100">
                <div class="content">
                  <div class="title">"Kofirmasi Pembayaran.."</div>
                  <div class="description">Dadang</div>
                </div>
              </div>
            </a>
          </li>
          <li class="message">
            <a data-toggle="collapse" href="#collapseMessaging" aria-expanded="false" aria-controls="collapseMessaging">
              <div class="message">
                <img class="profile" src="https://placehold.it/100x100">
                <div class="content">
                  <div class="title">"Kofirmasi Pembayaran.."</div>
                  <div class="description">Dadang</div>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
      <div class="messaging">
        <div class="heading">
          <div class="title">
            <a class="btn-back" data-toggle="collapse" href="#collapseMessaging" aria-expanded="false" aria-controls="collapseMessaging">
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            Dadang Semprani <span class="badge badge-success badge-icon"><i class="fa fa-circle" aria-hidden="true"></i><span>Online</span></span>
          </div>
          <div class="action"></div>
        </div>
        <ul class="chat">
          <li class="line">
            <div class="title">24 Jun 2016</div>
          </li>
          <li>
            <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</div>
            <div class="info">
              <div class="datetime">11.45pm</div>
              <div class="status"><i class="fa fa-check" aria-hidden="true"></i> Read</div>
            </div>
          </li>
          <li>
            <div class="message">Lorem ipsum dolor sit amet, consectetur eiusmod tempor incididunt</div>
            <div class="info">
              <div class="datetime">11.45pm</div>
              <div class="status"><i class="fa fa-check" aria-hidden="true"></i> Read</div>
            </div>
          </li>
          <li class="right">
            <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</div>
            <div class="info">
              <div class="datetime">11.46pm</div>
            </div>
          </li>
          <li>
            <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</div>
            <div class="info">
              <div class="datetime">11.45pm</div>
              <div class="status"><i class="fa fa-check" aria-hidden="true"></i> Read</div>
            </div>
          </li>
          <li>
            <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</div>
            <div class="info">
              <div class="datetime">11.45pm</div>
              <div class="status"><i class="fa fa-check" aria-hidden="true"></i> Read</div>
            </div>
          </li>
          <li>
            <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</div>
            <div class="info">
              <div class="datetime">11.45pm</div>
              <div class="status"><i class="fa fa-check" aria-hidden="true"></i> Read</div>
            </div>
          </li>
          <li>
            <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</div>
            <div class="info">
              <div class="datetime">11.45pm</div>
              <div class="status"><i class="fa fa-check" aria-hidden="true"></i> Read</div>
            </div>
          </li>
          <li class="line">
            <div class="title">25 Jun 2016</div>
          </li>
          <li class="right">
            <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</div>
            <div class="info">
              <div class="datetime">11.46pm</div>
            </div>
          </li>
          <li>
            <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</div>
            <div class="info">
              <div class="datetime">11.45pm</div>
              <div class="status"><i class="fa fa-check" aria-hidden="true"></i> Read</div>
            </div>
          </li>
          <li>
            <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</div>
            <div class="info">
              <div class="datetime">11.45pm</div>
              <div class="status"><i class="fa fa-check" aria-hidden="true"></i> Read</div>
            </div>
          </li>
          <li class="right">
            <div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</div>
            <div class="info">
              <div class="datetime">11.46pm</div>
            </div>
          </li>
        </ul>
        <div class="footer">
          <div class="message-box">
            <textarea placeholder="type something..." class="form-control"></textarea>
            <button class="btn btn-default"><i class="fa fa-paper-plane" aria-hidden="true"></i><span>Send</span></button>
          </div>
        </div>
      </div>
    </div>
  </div> -->