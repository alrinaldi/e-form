<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>IT-SERVICE</title>
  <!-- base:css -->
  <link rel="stylesheet" href=<?php echo base_url("assets/vendors/mdi/css/materialdesignicons.min.css")?>>
  <link rel="stylesheet" href=<?php echo base_url("assets/vendors/feather/feather.css")?>>
  <link rel="stylesheet" href=<?php echo base_url("assets/vendors/base/vendor.bundle.base.css")?>>
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href=<?php echo base_url("assets/vendors/flag-icon-css/css/flag-icon.min.css")?>/>
  <link rel="stylesheet" href=<?php echo base_url("assets/vendors/font-awesome/css/font-awesome.min.css")?>>
  <link rel="stylesheet" href=<?php echo base_url("assets/vendors/jquery-bar-rating/fontawesome-stars-o.css")?>>
  <link rel="stylesheet" href=<?php echo base_url("vendors/jquery-bar-rating/fontawesome-stars.css")?>>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href=<?php echo base_url("assets/css/style.css")?>>
  <!-- endinject -->
  <link rel="shortcut icon" href=<?php echo base_url("assets/images/favicon.png")?> />
  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/cylinder.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

  <?php
  
  
  $crs = $this->db->query("SELECT count(a.item_id) as jmlh,MONTHNAME(b.created_date) as bulan from master_item a join approval_master_item b
  on a.id_master_form = b.id_master_form  group by MONTHNAME(b.created_date) order by MONTH(b.created_date) ");

  foreach($crs->result() as $ct):
    $jmlh[] = (int)$ct->jmlh;
    $kategori[]   = $ct->bulan;
   // $kategorip   = $ct['kategori']." "."$percentsp"."%";

    //$hslct[] = "['$kategori',$nomerasset]";
    //$hasil[] = "["."'".$kategori."'".",".$jmlh."]";
   // $hasilp[] = "["."'".$kategorip."'".",".$percentsp."]";
  endforeach;
  $chrsize = $this->db->query("SELECT count(b.size) as jmlh,MONTHNAME(a.created_date) as bulan from master_size a join
  size_list b on a.id = b.id_master  group by MONTHNAME(a.created_date) order by MONTH(a.created_date)
 ");
 foreach($chrsize->result() as $cs):
 $jmlhs[] = (int)$cs->jmlh;
 $blns[] = $cs->bulan;
 endforeach;
  
  ?>
  
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" style="background-color:#829fc7 !important">
        <a class="navbar-brand brand-logo" href="index.html"><img src="<?php echo base_url("img/Logo.png")?>" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src=<?php echo base_url("assets/images/faces/rsz_logo_b_ymi_-_2017.png")?> alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end" style="background-color: #829fc7 !important;">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
           
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-lg-flex d-none">
            <p style="color: whitesmoke;"><?php echo $this->session->userdata('nama')?>/<?php echo $this->session->userdata('nrp')?></p>

            </li>
    
          <li class="nav-item dropdown d-flex mr-4 ">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
              <a class="dropdown-item preview-item">               
                  <i class="icon-head"></i> Profile
              </a>
              <a class="dropdown-item preview-item">
                  <i class="icon-inbox"></i> Logout
              </a>
            </div>
          </li>
          <li class="nav-item dropdown mr-4 d-lg-flex d-none">
            <a class="nav-link count-indicatord-flex align-item s-center justify-content-center" href="#">
              <i class="icon-grid"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>  
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" style="background-color:  #001737  !important 
" id="sidebar">
        <div class="user-profile">
          
          <div class="user-name">
           <h5>
           E-Registration
           </h5>   
          </div>
          <div class="user-designation">
              
          </div>
        </div>
      <?php $this->load->view('admin/v_nav')?>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
        <div class="col-md-6" >
           <div class="card">
  <div class="card-header">
<h4>Master Item</h4>
</div>
  <div class="card-body">
<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
         Master Item Data Submission 
    </p>
</figure>
  </div>
</div>
           </div>
           <div class="col-md-6" >
           <div class="card">
  <div class="card-header">
<h4> Master Size</h4>
</div>
  <div class="card-body">
<figure class="highcharts-figure">
    <div id="chart-size"></div>
    <p class="highcharts-description">
         Master Size Data Submission 
    </p>
</figure>
  </div>
</div>
           </div>
          </div>
   
        
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="https://www.bootstrapdash.com/" target="_blank" class="text-muted">bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="icon-heart"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src=<?php echo base_url("assets/vendors/base/vendor.bundle.base.js")?>></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src=<?php echo base_url("assets/js/off-canvas.js")?>></script>
  <script src=<?php echo base_url("assets/js/hoverable-collapse.js")?>></script>
  <script src=<?php echo base_url("assets/js/template.js")?>></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src=<?php echo base_url("assets/vendors/chart.js/Chart.min.js")?>></script>
  <script src=<?php echo base_url("assets/vendors/jquery-bar-rating/jquery.barrating.min.js")?>></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src=<?php echo base_url("assets/js/dashboard.js")?>></script>
  <!-- End custom js for this page-->

  <script>
    Highcharts.chart('container', {
    chart: {
      backgroundColor: {
       linearGradient: [0, 0, 500, 500],
       stops: [
         [0, 'rgb(75, 80, 64)'],
         [1, 'rgb(146, 150, 150)']
       ]
     },
        type: 'cylinder',
        color: 'white',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            depth: 50,
            viewDistance: 25
        }
    },
    title: {
        text: 'Chart Registration Master Item',
        style:{"font-weight":"bold","color":"white","font-size":"14px"}
    },
    xAxis: {
      labels: {
        style: {
            color: 'white'
        }
    },   
    categories: <?php echo json_encode($kategori)?>
  },
  yAxis:{
    labels: {
        style: {
            color: 'white'
        }
    },
  },
    plotOptions: {
   
        series: {
            depth: 25,
            colorByPoint: true
        }
    },
    colors: ['#F5DA2A', '#20A7FA', '#FC8608', '#FC1008', '#41FC08', '#08FCE0', '#0830FC', '#00020D', '#684099','#FC00CA','#00F8FC','#A4FC00'],
        series: [{
        data:<?php echo json_encode($jmlh)?>,
        name: 'Item',
        showInLegend: false
    }]
});

  </script>

<script>
    Highcharts.chart('chart-size', {
    chart: {
      backgroundColor: {
       linearGradient: [0, 0, 500, 500],
       stops: [
         [0, 'rgb(75, 80, 64)'],
         [1, 'rgb(146, 150, 150)']
       ]
     },
        type: 'cylinder',
        color: 'white',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            depth: 50,
            viewDistance: 25
        }
    },
    title: {
        text: 'Chart Registration Master Size',
        style:{"font-weight":"bold","color":"white","font-size":"14px"}
    },
    xAxis: {
      labels: {
        style: {
            color: 'white'
        }
    },   
    categories: <?php echo json_encode($blns)?>
  },

  yAxis:{
    labels: {
        style: {
            color: 'white'
        }
    },
  },

    plotOptions: {
        series: {
            depth: 25,
            colorByPoint: true
        }
    },
    colors: ['#F5DA2A', '#20A7FA', '#FC8608', '#FC1008', '#41FC08', '#08FCE0', '#0830FC', '#00020D', '#684099','#FC00CA','#00F8FC','#A4FC00'],
    series: [{
        data:<?php echo json_encode($jmlhs)?>,
        name: 'Size',
        showInLegend: false
    }]
});

  </script>
</body>

</html>

