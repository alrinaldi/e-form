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
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href=<?php echo base_url("assets/css/style.css")?>>
  <!-- endinject -->
  <link rel="shortcut icon" href=<?php echo base_url("assets/images/favicon.png")?> />
  <link rel="stylesheet" href="<?php echo base_url('template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')?>">
  
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
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search Projects.." aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-lg-flex d-none">
                <button type="button" class="btn btn-info font-weight-bold">+ Create New</button>
            </li>
          <li class="nav-item dropdown d-flex">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="icon-air-play mx-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="<?php echo base_url("assets/images/faces/rsz_logo_b_ymi_-_2017.png")?>" alt="image" >
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
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
      <?php $this->load->view('user/v_nav')?>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper" style="background-color: #d3dce4 !important;">
          <div class="row">
           <div class="col-md-12">
           <div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">My Request</h5>
    <table id="table12" class="table table-bordered ">
    <thead style="background-color:orange !important;color:black" class="text-center font-weight-bold">
                  <tr>
                  <th>Id Master Form</th>
                    <th>Detail</th>
                    <th>Approval</th>
	

                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                      $vndu = $this->session->userdata('nrp');
                      $vnd = $this->db->query("SELECT * FROM approval_master_item where requestor = '$vndu' ");
                        foreach($vnd->result_array() as $v):
                      ?>
                  <tr>
                  
                    <td><?php echo $v['id_master_form']?></td>
                    
                    <td>          
                        <a class="btn btn-primary" data-toggle="modal" data-target="#ModalEdit<?php echo $v['id_master_form'];?>"><span class="fa fa-edit"></span></a>
                        </td>
                        <td>          
                        <a class="btn btn-primary" data-toggle="modal" data-target="#ModalDtl<?php echo $v['id_master_form'];?>"><span class="fa fa-edit"></span></a>
                        </td>



                  </tr>
                  <?php endforeach; ?>

                  </tbody>
  
                </table>
             
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


  <?php
 foreach($vnd->result_array() as $v1):
    $id_master1 = $v1['id_master_form'];
  ?>

  <div id="ModalDtl<?php echo $id_master1;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-dialog-centered modal-xl ">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h5 class="modal-title">Approval</h5>
				</div>
				<div class="modal-body">
					<form>
         
                    <p class="pt-4"></p>
                   <table id="table12" class="table table-bordered table-hover">
                       <thead>
                        <tr>
                            <th>Section Head</th>
                            <th>Departement Head</th>
                            <th>Division Head</th>
                            <th>Accounting Asset</th>
                            <th>Accounting Inventory</th>
                            <th>Accounting GL</th>
                            <th>Accounting Department Head</th>
                            <th>FPA</th>
                            <th>IT BP</th>
                            <th>IT Department Head</th>
                        </tr>
                        </thead>
                        <tbody id="">
                            <?php 
                            $apvv = $this->db->query("SELECT * FROM approval_master_item where id_master_form = '$id_master1' and status <> Complete");
                            foreach($apvv->result_array() as $vi):
                            ?>
                            <tr>
                       <td><?php echo $vi['sec']?></td>
                       <td><?php echo $vi['dept']?></td>
                       <td><?php echo $vi['divs']?></td>
                       <td><?php echo $vi['acc_sec_asset']?></td>
                       <td><?php echo $vi['acc_sec_invnt']?></td>
                       <td><?php echo $vi['acc_sec_expense']?></td>
                       <td><?php echo $vi['fpa']?></td>
                       <td><?php echo $vi['acc_dept']?></td>
                       <td><?php echo $vi['it_bp']?></td>
                       <td><?php echo $vi['it_dept']?></td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                        </tbody>
                   </table>
                    <p class="pt-3"></p>
              
                    </div>
					</form>
				<div class="modal-footer">
                <div class="form-row">
          
                </div>
                </div>
                </div>

			</div>
        </div>
                            <?php 
                          endforeach;
                          ?>   



  <?php
 foreach($vnd->result_array() as $v):
    $id_master = $v['id_master_form'];
  ?>

  <div id="ModalEdit<?php echo $id_master;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-xl modal-dialog-centered" style="max-width: 100%;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h5 class="modal-title">Master Item</h5>
				</div>
				<div class="modal-body">
					<form>
         
                    <p class="pt-4"></p>
                   <table id="table12" class="table table-bordered table-hover">
                       <thead>
                        <tr>
                        <th>Id Number</th>
                            <th>Item Name</th>
                            <th>Product Type</th>
                            <th>Product Subtype</th>
                            <th>Category</th>
                            <th>Model Group</th>
                            <th>Inventory Unit</th>
                            <th>Purhchase Unit</th>
                            <th>Sales Unit</th>
                            <th>Product</th>
                            <th>Project</th>
                            <th>Type</th>
                            <th>Wct</th>
                            <th>Item Group</th>
                            <th>Fixed Asset</th>
                            <th>Product Category</th>
                        </tr>
                        </thead>
                        <tbody id="">
                            <?php $itmd = $this->db->query("SELECT * FROM master_item where id_master_form = '$id_master'");
                            foreach($itmd->result_array() as $im):
                            ?>
                            <tr>
                           <td><?php echo $im['item_id']?></td>
                           <td><?php echo $im['item_name']?></td>
                           <td><?php echo $im['product_type']?></td>
                           <td><?php echo $im['product_subtype']?></td>
                           <td><?php echo $im['category']?></td>
                           <td><?php echo $im['item_model_group']?></td>
                           <td><?php echo $im['inventory_unit']?></td>
                           <td><?php echo $im['purchase_unit']?></td>
                           <td><?php echo $im['sales_unit']?></td>
                           <td><?php echo $im['product']?></td>
                           <td><?php echo $im['project']?></td>
                           <td><?php echo $im['type']?></td>
                           <td><?php echo $im['wct']?></td>
                           <td><?php echo $im['item_group']?></td>
                           <td><?php echo $im['fixed_asset_group']?></td>
                           <td><?php echo $im['product_category']?></td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                        </tbody>
                   </table>
                    <p class="pt-3"></p>
                  
                    </div>
					</form>
				<div class="modal-footer">
                <div class="form-row">
          
                </div>
                </div>
                </div>

			</div>
        </div>
                            <?php endforeach;?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
  <script src="<?php echo base_url('template/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

<!-- Data Tables-->
<script src="<?php echo base_url('template/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?php echo base_url('template/plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?php echo base_url('template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
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

  <script>
      
		$(document).ready(function () {
$("#table12").DataTable({
"responsive": true,
"autoWidth": true,
});

$('#apv').DataTable({
    "responsive":true,
    "autowWidth":true,
});

      
});



  </script>


</body>


</html>

