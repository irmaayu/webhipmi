
<body>
  <div class="app app-default">

<aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
    <a class="sidebar-brand" href="<?php echo base_url('admin/soon'); ?>"><span class="highlight">
      Welcome,
      <?php echo $this->session->userdata('admin_name'); ?>
    </span></a>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
      <li class="<?php if(isset($menu_dashboard)) echo $menu_dashboard; ?>">
        <a href="<?php echo base_url('admin'); ?>">
          <div class="icon">
            <i class="fa fa-tasks" aria-hidden="true"></i>
          </div>
          <div class="title">Dashboard</div>
        </a>
      </li>
      <li class="dropdown <?php if(isset($menu_pasar)) echo $menu_pasar; ?>">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
          </div>
          <div class="title">Pasar Upi</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <!-- <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Admin</li> -->
            <li> <a href="<?php echo base_url('admin/transaksi'); ?>">Transaksi</a></li>
            <li><a href="<?php echo base_url('admin/produk'); ?>">Produk</a></li>
            <li><a href="<?php echo base_url('admin/adminpasar'); ?>">Admin Pasar Upi</a></li>
            <ul>
        </div>
      </li>
      <li class="<?php if(isset($menu_post)) echo $menu_post; ?>">
        <a href="<?php echo base_url('admin/post'); ?>">
          <div class="icon">
            <i class="fa fa-newspaper-o" aria-hidden="true"></i>
          </div>
          <div class="title">Seputar Kegiatan</div>
        </a>
      </li> 
      <li class="<?php if(isset($menu_kegiatan)) echo $menu_kegiatan; ?>">
        <a href="<?php echo base_url('admin/kegiatan'); ?>">
          <div class="icon">
            <i class="fa fa-group" aria-hidden="true"></i>
          </div>
          <div class="title">Kegiatan HIPMI PT UPI</div>
        </a>
      </li>
	    <li class="dropdown <?php if(isset($menu_slider)) echo $menu_slider; ?>">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-object-group" aria-hidden="true"></i>
          </div>
          <div class="title">Slider</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <!-- <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Admin</li> -->
            <li> <a href="<?php echo base_url('admin/slider/1'); ?>">Beranda</a></li>
            <li><a href="<?php echo base_url('admin/slider/2'); ?>">Pasar Upi</a></li>
            <li><a href="<?php echo base_url('admin/slider/3'); ?>">Info Hipmi</a></li>
          </ul>
        </div>
      </li>
      <li class="dropdown <?php if(isset($menu_infohipmi)) echo $menu_infohipmi; ?>">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-info" aria-hidden="true"></i>
          </div>
          <div class="title">Info HIPMI</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <!-- <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Admin</li> -->
            <li> <a href="<?php echo base_url('admin/agenda'); ?>">Agenda</a></li>
            <li><a href="<?php echo base_url('admin/tentang'); ?>">Tentang Hipmi PT UPI</a></li>
            <li><a href="<?php echo base_url('admin/kepengurusan'); ?>">Kepengurusan</a></li>
            <li><a href="<?php echo base_url('admin/database'); ?>">Database Anggota</a></li>
            <li><a href="<?php echo base_url('admin/program'); ?>">Program Unggulan</a></li>
            <li><a href="<?php echo base_url('admin/gallery'); ?>">Gallery Photo</a></li>
          </ul>
        </div>
      </li>
      <li class="dropdown <?php if(isset($menu_other)) echo $menu_other; ?>">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-file-o" aria-hidden="true"></i>
          </div>
          <div class="title">Lainnya</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <!-- <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Admin</li> -->
            <li><a href="<?php echo base_url('admin/kategori'); ?>">Kategori</a></li>
            <li><a href="<?php echo base_url('admin/soon'); ?>">Profile</a></li>
            <li><a href="<?php echo base_url('admin/soon'); ?>">Search</a></li>
            <li class="line"></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
  <div class="sidebar-footer">
    <ul class="menu">
      <li>
        <a href="<?php echo base_url('admin/soon'); ?>" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-cogs" aria-hidden="true"></i>
        </a>
      </li>
    </ul>
  </div>
</aside>

<script type="text/ng-template" id="sidebar-dropdown.tpl.html">
  <div class="dropdown-background">
    <div class="bg"></div>
  </div>
  <div class="dropdown-container">
    {{list}}
  </div>
</script>