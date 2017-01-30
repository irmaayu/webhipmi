<div class="app-messaging-container">
    <div class="app-messaging" id="collapseMessaging">
      <div class="chat-group">
        <div class="heading">Conversation</div>
        <ul class="group full-height">
    <li class="section">unread</li>
         <?php  
         foreach ($chatting as $value) {

         
         if($value->pengirim_komentar==1){

          }else{ ?>
          
         
           <?php if($value->status_komentar == 0) {?>
            
         
         


          <li class="message">
            <a  href="<?php echo base_url('admin/detailchat/'.$value->pengirim_komentar); ?>"  aria-expanded="false" aria-controls="collapseMessaging">
                  <span class="badge badge-warning pull-right"></span>
              <div class="message">
                <img class="profile" src="https://placehold.it/100x100">
                <div class="content">
                  <div class="title"><?php echo $value->nama_pembeli;?></div>
                  <div class="description"><?php echo $value->isi_komentar;?></div>
                </div>
              </div>
            </a>
          </li>
         <?php  
         } else {?> 
         
          <li class="section">readed</li>
          <li class="message">
           <a  href="<?php echo base_url('admin/detailchat/'.$value->pengirim_komentar); ?>"  aria-expanded="false" aria-controls="collapseMessaging">
                  <span class="badge badge-warning pull-right"></span>
              <div class="message">
                <img class="profile" src="https://placehold.it/100x100">
                <div class="content">
                  <div class="title"><?php echo $value->nama_pembeli;?></div>
                  <div class="description"><?php echo $value->isi_komentar;?></div>
                </div>
              </div>
            </a>
          </li>
          <?php } } } ?>
      </div>
          <div class="messaging">
        <div class="heading">
          <div class="title">
            <a class="btn-back" data-toggle="collapse" href="#collapseMessaging" aria-expanded="false" aria-controls="collapseMessaging">
            </a>
          </div>
          <div class="action"></div>
        </div>
        <ul class="chat">
          <li class="line">
            <div class="title">HALAMAN OBROLAN</div>
          </li>
        </ul>
       
          <!--   <div class="footer">
          <div class="message-box">
             <input type="text" placeholder="type something..." class="form-control">
             <button class="btn btn-default"><i class="fa fa-paper-plane" aria-hidden="true"></i><span>Send</span></button>
          </div>
        </div>-->
     
      </div>
    </div>
  </div>