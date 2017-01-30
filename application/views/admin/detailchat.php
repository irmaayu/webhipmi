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
              <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            
                  <?php  echo $post->nama_pembeli; ?> <!-- <span class="badge badge-success badge-icon"><i class="fa fa-circle" aria-hidden="true"></i><span>Online</span></span> -->
          </div>
          <div class="action"></div>
       
        </div>
        <ul class="chat">
       
             <?php 
                     foreach ($obrolan as $value) {
                     if($value->pengirim_komentar==$id_chat){ 
                      if($value->tanggal_komentar==$value->tanggal_komentar) {?>
                        <li class="line">
                          <div class="title"><?php echo $value->tanggal_komentar;?></div>
                        </li>
                     <?php }  ?>   
          <li>
            <div class="message"><?php  echo $value->isi_komentar; ?></div>
            <div class="info">
              <div class="datetime"><?php echo $value->jam_komentar; ?></div>
             
            </div>
          </li>
              <?php } else { ?>
          <li class="right">
            <div class="message"><?php echo $value->isi_komentar; ?></div>
            <div class="info">
              <div class="datetime"><?php echo $value->jam_komentar; ?></div>
               <div class="status"><i class="fa fa-check" aria-hidden="true"></i> Read</div>
            </div>
          </li>
          <?php }} ?>
        </ul>
        <div class="footer">
          <form action="<?php echo base_url('admin/proseschat/'.$id_chat); ?>" method="POST" accept-charset="utf-8" >
           <div class="message-box">
            
             <input type="text" name="isi_komentar" placeholder="type something..." class="form-control" required>
             <button class="btn btn-default"><i class="fa fa-paper-plane" aria-hidden="true"></i><span>Send</span></button>
          </div>
          </form>
          
        </div>
         </div>
    </div>
  </div>
    