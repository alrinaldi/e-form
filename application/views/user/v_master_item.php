<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Regal Admin</title>
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
  <style>
         .bottom-left { 
            bottom: 0; 
            left: 0; 
        } 
          

          
        .bottom-right { 
            bottom: 0; 
            right: 0; 
        }
        .whitetext{
          color:black;
        } 
  </style>
  

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
      <?php $this->load->view('user/v_nav')?>
      </nav>
      <!-- partial -->
      <div class="main-panel">
      
        <div class="content-wrapper" style="background-color: #d3dce4 !important;">
        <div id="notify">

</div>
          <div class="row">
            <div class="col-xl-12 grid-margin-lg-0 grid-margin stretch-card">
              <div class="card">
                  <div class="card-header">
                   <h4 class="font-weight-bold" > Form Master Item </h4>
                  </div>
                <div class="card-body">
                    <h1 class="card-title"></h1>
                    <button type="button" class="btn btn-info font-weight-bold" data-toggle="modal" data-target="#staticBackdrop">+ Create New</button>
        
        <p class="pt-3"></p>
                             <table id="table_item" class="table table-bordered table-hover">
                  <thead style="background-color:orange !important;color:black" class="text-center font-weight-bold">
                  <tr>
                  <th>Select<input type="checkbox" class="form-control check_all" style="width:20px"/></th>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Product Type</th>
                    <th>Product Subtype</th>
					<th>Category </th>
					<th>Item Model Group</th>
					<th>Inventory Unit</th>
					<th>Purchase Unit</th>
                    <th>Sales Unit</th>
                    <th>Product</th>
                    <th>Type</th>
                    <th>Wct</th>
                    <th>Size</th>
                    <th>Pilihan</th>

                  </tr>
                  </thead>
                  <tbody id="tampil_data">
                  <tr>
		
				  </tr>
                  </tbody >
  
                </table>
                <p class="pt-3"></p>
                <div class="float-right">
                <button class="btn btn-primary" id="submit_item">Submit Item</button>
                </div>   
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
  <div class="modal fade " id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered  modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><span id="txm" >Item Number</span><span id="txd" style="display: none;">Item Detail</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h4> <span id="target13" style="display: none"> </span> <span id="dtl" style="display: none;"></span></h4>
    <form  id=form1 >
      <div class="form-group">
        <label id="target1" class="font-weight-bold">Digit ke-1:</label>
        <select class="form-control border border-secondary" name="digit1" id="target2" onchange="tampilkan()" required>
            <option value=""></option>
            <option value="A">RAW MATERIAL</option>
            <option value="B">SEMI FINISH GOOD</option>
            <option value="C">FINISH GOOD</option>
            <option value="D">SPARE PART</option>
            <option value="E">SPARE STORE</option>
            <option value="F">EMPLOYEE BENEFIT</option>
            <option value="G">STATIONERY</option>
            <option value="J">JASA</option>
            <option value="L">LICENSE</option>
            <option value="M">Maklon Product</option>
            <option value="P">Project</option>
            <option value="Q">Equipment</option>
            <option value="R">REAPIR SFG</option>
            <option value="S">SCRAP</option>
            <option value="T">ASSET</option>
        </select>
      </div>
      <div class="form-group">
        <label id="ldigit2" class="font-weight-bold">Digit ke-2:</label>
        <select class="form-control border border-secondary" name="digit2" id="digit2" required>
            <option value=""></option>
            <option value="A">MF2W</option>
            <option value="B">MF2W</option>
            <option value="C">DB</option>
            <option value="D">ALL</option>
        </select>
      </div>
      <div class="form-group">
        <label id="target3" class="font-weight-bold">Digit ke-3:</label>
        <select class="form-control border border-secondary" name="digit3" id="digit3" required >
    
        </select>
      </div>
        <button type="button" id="target5" onclick="hilang()" class="btn btn-primary float-right" >Next</button>

        <div class="form-row">
            <div class="col">
            <?php echo form_error('itemname'); ?>
        <label id="target6" style="display: none">Item Name:</label>
        <input type="text" class="form-control" id="itemname"  name="itemname" style="display: none" required >
        </div>

          <div class="col">
          <label id="target8" style="display: none">Product Type</label>
        <select name="ptype" id="ptype" class="form-control" style="display: none" required>
            <option value=""></option>
            <option value="Item">Item</option>
            <option value="Service">Service</option>
        </select>
          </div>
          </div>
            <p class="pt-2"></p>
          <div class="form-row">
     <div class="col">
     <label id="target10" style="display: none">Product Subtype:</label>
        <select class="form-control" id="subtype" name="subtype" style="display: none" required  >
        <option value=""></option>
          <option value="Product" >Product</option>
          <option value="Product Master">Product Master</option>
        </select>
      </div>
      <div class="col">
          <label id="categoryl" style="display:none">Category:</label>
          <select name="category" id="category" style="display:none" class="form-control" required >
        <option value=""></option>
        <option value="Asset"> Asset</option>
        <option value="Non Asset">Non Asset</option>
    </select>
      </div>
    </div>
    <p class="pt-2"></p>
    <div class="form-row">
        <div class="col">
        <label id="itemmodell" style="display: none">Item Model Group:</label>
        <select class="form-control" id="itemmodel" name="itemmodel" style="display: none" required >
        <option value=""></option>
          <option value="MOV_AVG" >MOV_AVG</option>
          <option value="SVC">SVC</option>
        </select>
      </div>
            <div class="col">
            <label id="inventunitl" style="display: none">Inventory Unit:</label>
        <select class="form-control" id="inventunit" name="inventunit" style="display: none" required >
        <option value=""></option>
        <?php
        foreach($unit->result_array() as $i):
            
        ?>
        <option value=<?php echo $i['SYMBOL']?>><?php echo $i['SYMBOL']?></option>
        <?php
        endforeach;
        ?>
        </select>
            </div>
    </div>
    <p class="pt-2"></p>
            <div class="form-row">
            <div class="col">
            <label id="purchunitl" style="display: none">Purchase Unit:</label>
        <select class="form-control" id="purchunit" name="purchunit" style="display: none" required >
        <option value=""></option>
        <?php
        foreach($unit->result_array() as $i):
            
        ?>
        <option value=<?php echo $i['SYMBOL']?>><?php echo $i['SYMBOL']?></option>
        <?php
        endforeach;
        ?>
        </select> 
            </div>
            <div class="col">
            <label id="salesunitl" style="display: none">Sales Unit:</label>
        <select class="form-control" id="salesunit" name="salesunit" style="display: none" required >
        <option value=""></option>
        <?php
        foreach($unit->result_array() as $i):
            
        ?>
        <option value=<?php echo $i['SYMBOL']?>><?php echo $i['SYMBOL']?></option>
        <?php
        endforeach;
        ?>
        </select>
            </div>
        </div>
        <p class="pt-2"></p>
        <div class="form-row">
            <div class="col">
            <label id="productl" style="display: none">Product:</label>
        <select class="form-control" id="product" name="product" style="display: none" required >
        <option value="-"></option>
          <option value="ALL" >ALL</option>
          <option value="DB">DB</option>
          <option value="MF2W">MF2W</option>
          <option value="MF4W">MF4W</option>
        </select>
            </div>
      
            <div class="col">
            <label id="typel" style="display: none">Type:</label>
        <select class="form-control" id="type" name="type" style="display: none" required >
        <option value="-"></option>
          <option value="ALL" >ALL</option>
          <option value="DB">DB</option>
          <option value="MF2W">MF2W</option>
          <option value="MF4W">MF4W</option>
        </select>
            </div>
            <div class="col">
            <label id="wctl" style="display: none">Wct:</label>
        <select class="form-control" id="wct" name="wct" style="display: none" required >
        <option value="-"></option>
      <?php
      $wct = $this->db->get('sstruktur_ymi');
      foreach($wct->result_array() as $i):

      ?>
      <option value=<?php echo $i['costcenter']?>><?php echo $i['costcenter']?></option>
      <?php
      endforeach;
      ?>
        </select>
            </div>
        </div>
        <div class="form-row" id="sizebox" style="display: none;">
        <h4> Size Item</h4>
        <br>
        
      <div class="col-6" id="sizecol">
      <a href='#' class="btn btn-primary" onclick="tambah_form(); return false;" >Add</a>
                    <p class="pt-3"></p>
                    <p class="pt-3"></p>
                    <table id="table_item12" class="table table-bordered table-hover" style="height:50%">
                  <thead>
                  <tr>                    
                    <th>Size</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody id="sizecont">
                      <tr id='tbl1'>
                        <td><input type="text" name="size[]" class="form-control" id="sizein" required></td>
                        <td><button class="btn btn-danger btnhpz" data-id="tbl1" id="tbl1"><i class="fa fa-trash"></i></button></td>
                      </tr>
                  </tbody >
  
                </table>
               

      </div>
        </div>
        <p class="pt-3"></p>
      <div class="form-row mt-2">
          <div class="col">
          </div>
      </div>
      </div>
      <div class="modal-footer">
      <button type="button" id="target14" class="btn btn-danger pull-left " style="display: none" onclick="back1()">Back</button>
      <button type="button" id="nexts" class="btn btn-primary pull-right " style="display: none" onclick="nextsz()">Next</button>
      <button type="button" id="backh" class="btn btn-danger pull-right " style="display: none" onclick="hilang()">Back</button>

        <button type="submit" class="btn btn-success" id="btn_save" style="display:none">Create</button>
        </form>

      </div>
    </div>
  </div>
</div>




<div id="Modaledit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h5 class="modal-title">Manage Size</h5>
				</div>
				<div class="modal-body">
					<form>
            <input type="hidden" class="hidden" name="edit_item" id="edit_item">
            <a href='#' class="btn btn-primary" onclick="tambah_form1(); return false;" >Add</a>

					<div class="form-row mx-auto">
                
                        <div class="col-6 mx-auto" id="">
                        <table id="table_item1" class="table table-bordered table-hover" style="height:50%">
                  <thead>
                  <tr>                    
                    <th>Size</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody id="data_size">
      
                  </tbody >
  
                </table>
                        </div>
                    </div>
					</form>
				</div>
				<div class="modal-footer">
					<button id="btn_size" type="button" class="btn btn-sm btn-primary">Add Size</button>
				</div>
			</div>
		</div>
  </div>
  <div class="modal fade " id="formEdit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="formEdit" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered  modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formEdit"><span id="txm" style="display: none;"></span><span id="txd" >Edit Item Detail</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h4> <span id="target131" style="display: none"> </span> <span id="dtl1" style="display: none;"></span></h4>
    <form action="" id=form11>
      <input type="hidden" id="item_id_e" name="item_id_e">
      <div class="form-group">

        <div class="form-row">
            <div class="col">
            
        <label id="target61" >Item Name:</label>
        <input type="text" class="form-control" id="itemname1"  name="itemname1"  required>
        </div>

          <div class="col">
          <label id="target81">Product Type</label>
        <select name="ptype1" id="ptype1" class="form-control" required>
            <option value=""></option>
            <option value="Item">Item</option>
            <option value="Service">Service</option>
        </select>
          </div>
          </div>
            <p class="pt-2"></p>
          <div class="form-row">
     <div class="col">
     <label id="target101" >Product Subtype:</label>
        <select class="form-control" id="subtype1" name="subtype1"   required>
        <option value=""></option>
          <option value="Product" >Product</option>
          <option value="Product Master">Product Master</option>
        </select>
      </div>
      <div class="col">
          <label id="categoryl1" >Category:</label>
          <select name="category1" id="category1"  class="form-control" required>
        <option value=""></option>
        <option value="Asset"> Asset</option>
        <option value="Non Asset">Non Asset</option>
    </select>
      </div>
    </div>
    <p class="pt-2"></p>
    <div class="form-row">
        <div class="col">
        <label id="itemmodell1" >Item Model Group:</label>
        <select class="form-control" id="itemmodel1" name="itemmodel1"  required>
        <option value=""></option>
          <option value="MOV_AVG" >MOV_AVG</option>
          <option value="SVC">SVC</option>
        </select>
      </div>
            <div class="col">
            <label id="inventunitl1" >Inventory Unit:</label>
        <select class="form-control" id="inventunit1" name="inventunit1"  required>
        <option value=""></option>
        <?php
        foreach($unit->result_array() as $i):
            
        ?>
        <option value=<?php echo $i['SYMBOL']?>><?php echo $i['SYMBOL']?></option>
        <?php
        endforeach;
        ?>
        </select>
            </div>
    </div>
    <p class="pt-2"></p>
            <div class="form-row">
            <div class="col">
            <label id="purchunitl1" >Purchase Unit:</label>
        <select class="form-control" id="purchunit1" name="purchunit1"  required>
        <option value=""></option>
        <?php
        foreach($unit->result_array() as $i):
            
        ?>
        <option value=<?php echo $i['SYMBOL']?>><?php echo $i['SYMBOL']?></option>
        <?php
        endforeach;
        ?>
        </select> 
            </div>
            <div class="col">
            <label id="salesunitl1" >Sales Unit:</label>
        <select class="form-control" id="salesunit1" name="salesunit1"  required>
        <option value=""></option>
        <?php
        foreach($unit->result_array() as $i):
            
        ?>
        <option value=<?php echo $i['SYMBOL']?>><?php echo $i['SYMBOL']?></option>
        <?php
        endforeach;
        ?>
        </select>
            </div>
        </div>
        <p class="pt-2"></p>
        <div class="form-row">
            <div class="col">
            <label id="productl1" >Product:</label>
        <select class="form-control" id="product1" name="product1"  required>
        <option value="-"></option>
          <option value="ALL" >ALL</option>
          <option value="DB">DB</option>
          <option value="MF2W">MF2W</option>
          <option value="MF4W">MF4W</option>
        </select>
            </div>
      
            <div class="col">
            <label id="typel1" >Type:</label>
        <select class="form-control" id="type1" name="type1"  required>
        <option value="-"></option>
          <option value="ALL" >ALL</option>
          <option value="DB">DB</option>
          <option value="MF2W">MF2W</option>
          <option value="MF4W">MF4W</option>
        </select>
            </div>
            <div class="col">
            <label id="wctl1" >Wct:</label>
        <select class="form-control" id="wct1" name="wct1"  required>
        <option value="-"></option>
      <?php
      $wct = $this->db->get('sstruktur_ymi');
      foreach($wct->result_array() as $i):

      ?>
      <option value=<?php echo $i['costcenter']?>><?php echo $i['costcenter']?></option>
      <?php
      endforeach;
      ?>
        </select>
            </div>
        </div>

        <p class="pt-3"></p>
      <div class="form-row mt-2">
          <div class="col">
          </div>
      </div>
      </div>
    </form>
      <div class="modal-footer">
      
        <button type="button" class="btn btn-success" id="btn_save1" >Update</button>
      </div>
    </div>
  </div>
</div>


  <div id="dltSize" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h5 class="modal-title">Remove Size</h5>
				</div>
				<div class="modal-body">
					<form>
            <input type="hidden" class="hidden" name="edit_item" id="edit_item">
					<div class="form-row mx-auto">
                
  
					</form>
				</div>
				<div class="modal-footer">
          <button id="revsize" type="button" class="btn btn-sm btn-primary">Yes</button>
          <button id="" data-dismiss="modal" type="button" class="btn btn-sm btn-danger">No</button>

				</div>
			</div>
		</div>
  </div>
  

  






  <!-- base:js -->
 <!-- 
-->
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
  <!-- End custom js for this page-->
  <script>


$(document).ready(function () {
  $('#subtype').change(function(){    // KETIKA ISI DARI FIEL 'Nrp' BERUBAH MAKA ......
  var subt = $('#subtype').val();

  var divbox = '';
              if(subt=='Product'){
                
                $('#sizecol').remove();
               $('#btn_save').show();
               $('#nexts').hide();
              }else if(subt=='Product Master'){
                divbox ='<div class="col-6" id="sizecol">'+
                '<a href="#" class="btn btn-primary" onclick="tambah_form(); return false;" >Add</a>'+
                '<p class="pt-3"></p>'+
                '<p class="pt-3"></p>'+
                '<table id="table_item12" class="table table-bordered table-hover" style="height:50%">'+
                  '<thead>'+
                  '<tr>'+                    
                    '<th>Size</th>'+
                    '<th>Delete</th>'+
                  '</tr>'+
                  '</thead>'+
                  '<tbody id="sizecont">'+
                      '<tr id="tbl1">'+
                        '<td><input type="text" name="size[]" class="form-control" id="sizein" required></td>'+
                       '<td><button class="btn btn-danger btnhpz" data-id="tbl1" id="tbl1"><i class="fa fa-trash"></i></button></td>'+
                      '</tr>'+
                  '</tbody >'+
               ' </table>';
                $('#sizebox').html(divbox);
                $('#btn_save').hide();
               $('#nexts').show();
              }else{
                $('#sizecol').remove();
               $('#btn_save').hide();
               $('#nexts').hide();
              }
})
});
 
        </script>


<script>
            $('#subtype1').change(function(){    // KETIKA ISI DARI FIEL 'Nrp' BERUBAH MAKA ......
  var subt = $('#subtype1').val();  // AMBIL isi dari fiel Nrp masukkan variabel 'npmfromfield'
              if(subt=='Product'){
               $('#btn_save1').show();
               $('#nexts1').hide();
              }else{
                $('#btn_save1').hide();
               $('#nexts1').show();
              }
})
        </script>

<script>

  

function tambah_form(){


  var target1=document.getElementById("sizecont");
    var id_rand1;
    id_rand1 = Math.random().toString(36).substring(10);  
    var rand_inp1 = Math.random().toString(36).substring(11);   
    var tabel_row1=document.createElement("tr");
    var tabel_col1=document.createElement("td");
    var tabel_col12=document.createElement("td");

    var tambah1=document.createElement("input");
    var btnn1 = document.createElement("button");
    var icnn1 = document.createElement("i");
    var targetp1 = document.getElementById("sizecont")
    var pt1 = document.createElement("p");
    
    target1.appendChild(tabel_row1);
    
    tabel_row1.appendChild(tabel_col1);
    tabel_row1.appendChild(tabel_col12);

    tabel_row1.setAttribute('id',id_rand1)
    tabel_col1.appendChild(tambah1);
    tabel_col12.appendChild(btnn1);
    btnn1.appendChild(icnn1);
    
    tambah1.setAttribute('type','text');
    tambah1.setAttribute('name','size[]');
    tambah1.setAttribute('class','size_a form-control');
    tambah1.setAttribute('style','width:100%');
    tambah1.setAttribute('required','');
    tambah1.setAttribute('id',rand_inp1);
    btnn1.setAttribute('type','button');
    btnn1.setAttribute('class','btn btn-xs btn-danger btnhps ');
    btnn1.setAttribute('id',id_rand1);
    btnn1.setAttribute('data-id',id_rand1);
    btnn1.setAttribute('onclick','confirhpz(this)');  
    /*
    btnn.setAttribute('data-target','#form-dtls');
    btnn.setAttribute('data-toggle','modal');
    */
    icnn1.setAttribute('class','fa fa-trash')

  /*
    var target=document.getElementById("sizecont");
    
    var tabel_row=document.createElement("tr");
    var tabel_col=document.createElement("td");
  
    var tambah=document.createElement("input");
    var targetp = document.getElementById("sizecont")
    var pt = document.createElement("p");
    
    /*
    target.appendChild(tabel_row);
    tabel_row.appendChild(tabel_col);
 
    target.appendChild(tambah);

    
    tambah.setAttribute('type','text');
    tambah.setAttribute('name','inputan[]');
    tambah.setAttribute('class','form-control');
    targetp.appendChild(pt);
    pt.setAttribute('class','pt-3');
    */
}
function kurangi_form(){
    var target=document.getElementById("sizecont");
    var akhir=target.lastChild;
    target.removeChild(akhir);
}
  </script>
 
 <script>
   function tambah_form1(){
      var target=document.getElementById("data_size");
    var id_rand;
    id_rand = Math.random().toString(36).substring(10);  
    var rand_inp = Math.random().toString(36).substring(11);   
    var tabel_row=document.createElement("tr");
    var tabel_col=document.createElement("td");
    var tabel_col1=document.createElement("td");

    var tambah=document.createElement("input");
    var btnn = document.createElement("button");
    var icnn = document.createElement("i");
    var targetp = document.getElementById("data_size")
    var pt = document.createElement("p");
    
    target.appendChild(tabel_row);
    
    tabel_row.appendChild(tabel_col);
    tabel_row.appendChild(tabel_col1);

    tabel_row.setAttribute('id',id_rand)
    tabel_col.appendChild(tambah);
    tabel_col1.appendChild(btnn);
    btnn.appendChild(icnn);
    
    tambah.setAttribute('type','text');
    tambah.setAttribute('name','size[]');
    tambah.setAttribute('class','size_a form-control');
    tambah.setAttribute('style','width:100%');
    tambah.setAttribute('id',rand_inp);
    tambah.setAttribute('required','');
    btnn.setAttribute('type','button');
    btnn.setAttribute('class','btn btn-xs btn-danger btnhps');
    btnn.setAttribute('id',id_rand);
    btnn.setAttribute('data-id',id_rand);
    btnn.setAttribute('onclick','confirhp(this)');  
    /*
    btnn.setAttribute('data-target','#form-dtls');
    btnn.setAttribute('data-toggle','modal');
    */
    icnn.setAttribute('class','fa fa-trash')


}
function confirhp(identifier){
  var val = $(identifier).data('id');
  if(confirm("Data will be deleted?")){
    var myobj = document.getElementById(val);
myobj.remove();   
  }else{

  }
             
}

function confirhpz(identifier){
  var val = $(identifier).data('id');
  if(confirm("Data will be deleted?")){
    var myobj = document.getElementById(val);
myobj.remove();   
  }else{

  }
             
}
function kurangi_form1(){
    var target=document.getElementById("data_size");
    var akhir=target.lastChild;
    target.removeChild(akhir);
}
 </script>


  <script>
function tampilkan(){
  var nomenklatur=document.getElementById("form1").target2.value;
  if (nomenklatur=="A")
    {
        document.getElementById("digit3").innerHTML="<option value='01'>COIL</option><option value='02'>SHEET</option>"+
        "<option value='03'>PIPE</option><option value='04'>PURCHASE PART</option><option value='05'>PROCESS PART</option>"+
        "<option value='06'>PAINTING</option><option value='07'>WIRE</option><option value='08'>CHEMICHAL</option>";
    }
  else if (nomenklatur=="B")
    {
        document.getElementById("digit3").innerHTML="<option value='01'>WELDING</option><option value='02'>BLASTING</option>"+
        "<option value='03'>BLENDING</option><option value='04'>PAINTING</option><option value='05'>FINAL ASSY</option><option value='06'>SEAMER</option>"+
        "<option value='07'>CANNING</option><option value='08'>TOUCH-UP-COVER</option><option value='09'>SUB LINE</option>"+
        "<option value='10'>LASER</option><option value='11'>ROVING</option><option value='12'>PRESSING</option><option value='13'>HFPQ</option>"+
        "<option value='14'>MACHINING</option><option value='15'>ELECTROPOLISHING</option><option value='16'>GRINDING</option><option value='17'>FINISHING</option>";
    }
    else if (nomenklatur=="C"){
        document.getElementById("digit3").innerHTML="<option value='01'>CUB</option><option value='02'>SCOOTER</option><option value='03'>SPORT</option>"+
        "<option value='04'>CROSS OVER</option><option value='05'>HOT</option><option value='06'>COLD</option>";

    }
    else if(nomenklatur=="D"){
        document.getElementById("digit3").innerHTML="<option value='01'>DJT</option><option value='02'>SP MECHANINC</option>"+
        "<option value='03'>SP ELECTRIC</option><option value='04'>MACHINE</option>";

    }
    else if(nomenklatur=="E"){
        document.getElementById("digit3").innerHTML="<option value='01'>FUEL&LUBRICANTS</option><option value='02'>SUPPLIES</option>"+
        "<option value='03'>TOOL</option><option value='04'>PAINTING NON PRODUCT</option><option value='05'>CHEMICHAL NON PRODUCT</option>";

    }
    else if(nomenklatur=="F"){
        document.getElementById("digit3").innerHTML="<option value='01'>FOOD</option><option value='02'>DRINK</option><option value='03'>PIPE</option>UNIFORM";

    }
    else if(nomenklatur=="G"){
        document.getElementById("digit3").innerHTML="<option value='01'>ATK</option><option value='02'>PRINTING</option>";
    }
    else if(nomenklatur=="J"){
        document.getElementById("digit3").innerHTML="<option value='01'>ACCOUNTING & TAX</option><option value='02'>ENGINEERING</option>"+
        "<option value='03'>FINANCE</option><option value='04'>GENERAL AFFAIRS</option><option value='05'>HRD</option><option value='06'>INFORMMATION TECHNOLODY</option>"+
        "<option value='07'>MARKETING</option><option value='08'>PPIC</option><option value='09'>PRODUCTION MF2W</option><option value='10'>PRODUCTION DB</option>"+
        "<option value='11'>PRODUCTION MF4W</option><option value='12'>PURCHASING</option><option value='13'>PLANT SERVICE</option><option value='14'>QUALITY CONTROL</option>"+
        "<option value='16'>QUALITY SYSTEM & FACILITIES</option>";
    }
    else if(nomenklatur=="L"){
        document.getElementById("digit3").innerHTML="<option value='01'>ANNUAL LICENSE</option><option value='02'>ONE TIME</option>";
    }
    else if(nomenklatur=="M"){
        document.getElementById("digit3").innerHTML="<option value='01'>PROCESS PART</option><option value='02'>SHEARING</option><option value='03'>SLITTING</option>";

    }
    else if(nomenklatur=="P"){
        document.getElementById("digit3").innerHTML="<option value='01'>FINISH GOOD</option><option value='02'>SEMI FINSH GOOD</option><option value='03'>PURCHASE PART</option>"+
        "<option value='04'>PROCESS PART</option><option value='05'>MAKLON</option><option value='06'>MATERIAL</option>";
    }
    else if(nomenklatur=="Q"){
        document.getElementById("digit3").innerHTML="<option value='01'>OFFICE EQUIPMENT</option><option value='02'>SPAREPART</option><option value='03'>TOOLS</option>"+
        "<option value='04'>CHEMICAL</option><option value='05'>CSR & DONASI</option>";
    }
    else if(nomenklatur=="R"){
        document.getElementById("digit3").innerHTML="<option value='01'>WELDING</option><option value='02'>BLASTNG</option><option value='03'>BENDING</option><option value='04'>PAINTING</option>"+
        "<option value='05'>FINAL ASSY</option><option value='06'>SEAMER</option><option value='07'>CANNING</option><option value='08'>TOUCH-UP COVER</option><option value='09'>SUBLINE</option>"+
        "<option value='10'>LASER</option><option value='11'>ROVING</option><option value='12'>PRESSING</option><option value='13'>HFPQ</option><option value='14'>MACHINING</option><option value='15'>ELECTROPOLISHING</option>"+
        "<option value='16'>GRINDING</option><option value='17'>FINISHING</option>";
    }
    else if(nomenklatur=="S"){
        document.getElementById("digit3").innerHTML="<option value='01'>PRODUCT</option><option value='02'>NON PRODUCT</option><option value='03'>PROJECT PRODUCT</option>"+
        "<option value='04'>PROJECT NON PRODUCT</option>";
    }
    else if(nomenklatur=="T"){
        document.getElementById("digit3").innerHTML="<option value='01'>LAND</option><option value='02'>BUILDING</option><option value='03'>STRUCTURE</option><option value='04'>MACHINE</option>"+
        "<option value='05'>DJT</option><option value='06'>OFFICE EQUIPMENT</option><option value='07'>VEHICLE</option><option value='08'>INTANGIBLE</option>";
    }
}
</script>


  <script>
     function hilang(){

     $('#target1').hide();
      $('#target2').hide();
      $('#digit2').hide();
      $('#ldigit2').hide();
      $('#target3').hide();
      $('#digit3').hide();
      $('#target5').hide();
      $('#txm').hide();
      $('#sizebox').hide();
      $('#txd').show();
      $('#categoryl').show();
      $('#category').show();
      $('#itemmodell').show();
      $('#itemmodel').show();
      $('#inventunitl').show();
      $('#inventunit').show();
      $('#purchunitl').show();
      $('#purchunit').show();
      $('#salesunitl').show();
      $('#salesunit').show();
      $('#productl').show();
      $('#product').show();
      $('#projectl').show();
      $('#project').show();
      $('#typel').show();
      $('#type').show();
      $('#wctl').show();
      $('#wct').show();
      $('#target6').show();
      $('#itemname').show();
      $('#target8').show();
      $('#ptype').show();
      $('#target10').show();
      $('#subtype').show();
      $('#target12').show();
      $('#target13').show();
      var vald = document.getElementById("subtype").value;
      if(vald==''){
        $('#nexts').hide();
      }else{
        $('#nexts').show();
      }
      

      $('#dtl').hide();
      $('#target14').show();
      $('#backh').hide();
      $('#btn_save').hide();  
      $('#txm').hide();

    }
  </script>
  
  <script>
     function back1(){
        $('#dtl').show();
      $('#target1').show();
      $('#target2').show();
      $('#digit2').show();
      $('#ldigit2').show();
      $('#target3').show();
      $('#digit3').show();
      $('#target5').show();
      $('#txm').show();
      $('#sizebox').hide();
      $('#txd').hide();
      $('#target6').hide();
      $('#btn_save').hide();
      $('#itemname').hide();
      $('#target8').hide();
      $('#ptype').hide();
      $('#categoryl').hide();
      $('#category').hide();
      $('#itemmodell').hide();
      $('#itemmodel').hide();
      $('#inventunitl').hide();
      $('#inventunit').hide();
      $('#purchunitl').hide();
      $('#purchunit').hide();
      $('#salesunitl').hide();
      $('#salesunit').hide();
      $('#productl').hide();
      $('#product').hide();
      $('#projectl').hide();
      $('#project').hide();
      $('#typel').hide();
      $('#type').hide();
      $('#wctl').hide();
      $('#wct').hide();
      $('#target10').hide();
      $('#subtype').hide();
      $('#target12').hide();
      $('#target13').hide();
      $('#target14').hide();
      $('#backh').hide();
      $('#nexts').hide();

    }
  </script>

<script>
     function nextsz(){
        $('#dtl').hide();
      $('#target1').hide();
      $('#target2').hide();
      $('#digit2').hide();
      $('#ldigit2').hide();
      $('#target3').hide();
      $('#digit3').hide();
      $('#target5').hide();
      $('#txm').hide();
      $('#nexts').hide();
      $('#backh').show();
      $('#sizebox').show();
      $('#txd').hide();
      $('#target6').hide();
      $('#btn_save').show();      
      $('#itemname').hide();
      $('#target8').hide();
      $('#ptype').hide();
      $('#categoryl').hide();
      $('#category').hide();
      $('#itemmodell').hide();
      $('#itemmodel').hide();
      $('#inventunitl').hide();
      $('#inventunit').hide();
      $('#purchunitl').hide();
      $('#purchunit').hide();
      $('#salesunitl').hide();
      $('#salesunit').hide();
      $('#productl').hide();
      $('#product').hide();
      $('#projectl').hide();
      $('#project').hide();
      $('#typel').hide();
      $('#type').hide();
      $('#wctl').hide();
      $('#wct').hide();
      $('#target10').hide();
      $('#subtype').hide();
      $('#target12').hide();
      $('#target13').hide();
      $('#target14').hide();
      
    }
  </script>
  </script>

  <script>
		var id = 0;

		$(document).ready(function () {

			tampil_item()
      $('#form1').on('submit',function(e){
              e.preventDefault()
                var digit1 = $('digit1').val();
                var digit2 = $('digit2').val();
                var digit3 = $('digit3').val();
                var itemname = $('itemname').val();
                var ptype = $('ptype').val();
                var subtype = $('subtype').val();
                var category = $('category').val();
                var itemmodel = $('itemmodel').val();
                var inventunit = $('inventunit').val();
                var purchunit = $('purchunit').val();
                var salesunit = $('salesunit').val();
                var product = $('product').val();
                var project = $('project').val();
                var type = $('type').val();
                var wct = $('wct').val();
              $('#btn_save').attr('disabled',true);
                $.ajax({
                    type : "POST",
                    url : "<?php echo site_url('user/c_master_item/save')?>",
                    dataType: "JSON",
                   // data : {digit1:digit1,digit2:digit2,digit3:digit3,itemname:itemname,ptype:ptype,subtype:subtype,category:category,itemmodel:itemmodel,inventunit:inventunit,purchunit:purchunit,salesunit:salesunit,product:product,project:project,type:type,wct:wct},
                   data: $("#staticBackdrop form").serialize(), // Ambil semua data yang ada didalam tag form 
                   success : function(data){
                        $('[name="digit1"]').val("");
                        $('[name="digit2"]').val("");
                        $('[name="digit3"]').val("");
                        $('[name="itemname"]').val("");
                        $('[name="ptype"]').val("");
                        $('[name="subtype"]').val("");
                        $('[name="category"]').val("");
                        $('[name="itemmodel"]').val("");
                        $('[name="inventunit"]').val("");
                        $('[name="purchunit"]').val("");
                        $('[name="salesunit"]').val("");
                        $('[name="product"]').val("");
                        $('[name="project"]').val("");
                        $('[name="type"]').val("");
                        $('[name="wct"]').val("");
                   location.reload()
                    tampil_item();
                    },error:function(){
                      location.reload()
                    tampil_item();
                      
                    }
                })
            });
     $("#table_item").DataTable({
      "responsive": true,
      "autoWidth": true,
    });


    $('.chk_boxes1').click(function(){
        if($(this).is(':checked')){
            $(this).closest('tr').addClass('removeRow');
        } else {
            $(this).closest('tr').removeClass('removeRow');
        }
    });

/*
    $('#form-dtls').on('show.bs.modal', function (event) {
				var buttonr = $(event.relatedTarget);
				var idrmv = buttonr.data('id');

        $('#Modaledit').modal('hide');

          $('#btn_hpsz').click(function(){
            $('#'+idrmv).remove();
            $("#form-dtls").modal("hide");
          })
          $('#Modaledit').modal('show');

            });
*/
    $('.check_all').click(function() {
            $('.chk_boxes1').prop('checked', this.checked);
            if($(this).is(':checked')){
                $('.check').addClass('removeRow');
            } else {
                $('.check').removeClass('removeRow');
            }
        });

        $('#submit_item').click(function(){
            if(confirm("Apa anda yakin ingin Submit data ini")){
            var id_number = [];
            $(':checkbox:checked').each(function(i){
                id_number[i] = $(this).val();
            });
            console.log(id_number.length);
            if(id_number.length === 0){
                alert("Pilih minimal satu data");
            }else{
                $.ajax({
                    url:'<?php echo site_url('user/c_master_item/submit_item')?>',
                    method:'POST',
                    data:{id_number:id_number},
                    success:function(){
                        for(var i=0; i<id_number.length; i++){
                            $('tr#'+id_number[i]+'').fadeOut('slow');
                        }
                        $('div#notify').fadeIn('slow');
                        $('#notify').html('<div class="alert alert-success alert-dismissible fade show" role="alert">'+
                        '<strong>Holy guacamole!</strong> Data has been submited to approval.'+
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                      '<span aria-hidden="true">&times;</span></button></div>');

                        tampil_item();
                    }
                });
            }    
            } else{
                return false;
            }
        });

        function size_input(){
          var sizet = document.getElementById('form1').subtype.value;
          if(sizet = 'Product'){

          }else{

          }
        }

      

			function tampil_item() {
				$.ajax({
					type: 'ajax',
					url:'<?php echo site_url('user/c_master_item/tampil_item')?>',
					async: false,
					dataType: 'json',
					success: function (data) {
						var html = '';
                        var no = 1;
                        var sub = 'Product Master';
						for (i = 0; i < data.length; i++) {
                            if(data[i].product_subtype ==sub){
                            html += '<tr id="' + data[i].item_id + '">' +
                                '<td>'+
                                '<input type="checkbox" name="id_number[]" class="form-control chk_boxes1" value="'+data[i].item_id+'" style="width:20px"/>'+
                                '</td>'+
								'<td>' + data[i].item_id + '</td>' +
								'<td>' + data[i].item_name + '</td>' +
								'<td>' + data[i].product_type + '</td>' +
								'<td>' + data[i].product_subtype + '</td>' +
                                '<td>' + data[i].category + '</td>' +
                                '<td>' + data[i].item_model_group + '</td>' +
								'<td>' + data[i].inventory_unit + '</td>' +
								'<td>' + data[i].purchase_unit + '</td>' +
								'<td>' + data[i].sales_unit + '</td>' +
								'<td>' + data[i].product + '</td>' +
								'<td>' + data[i].type + '</td>' +
                                '<td>' + data[i].wct + '</td>' +
                                 '<td>'+
                                '<a class="btn btn-primary" data-toggle="modal" data-target="#Modaledit" id="btn-edit" data-id="'+data[i].item_id+'"><span class="fa fa-edit"></span></a>'+
                                '</td>' +
								'<td>' +
								'<button class="btn btn-xs btn-primary" style="padding-left: 10px;padding-right: 10px;" data-toggle="modal" data-target="#formEdit" id="btn-edit1" data-id="' + data[i].item_id + '"> <i class="fa fa-pencil"></i></button> ' +
								'<a class="btn btn-xs btn-danger del_item" style="padding-left: 10px;padding-right: 10px;"  id="' + data[i].item_id + '"> <i class="fa fa-trash"></i> </a>' +
								'</td>' +
                                '</tr>'
                                
                            }else{
                                html += '<tr id="' + data[i].item_id + '">' +
                                '<td>'+
                                '<input type="checkbox" name="id_number[]" class="form-control chk_boxes1" value="'+data[i].item_id+'" style="width:20px"/>'+
                                '</td>'+
								'<td>' + data[i].item_id + '</td>' +
								'<td>' + data[i].item_name + '</td>' +
								'<td>' + data[i].product_type + '</td>' +
								'<td>' + data[i].product_subtype + '</td>' +
                                '<td>' + data[i].category + '</td>' +
                                '<td>' + data[i].item_model_group + '</td>' +
								'<td>' + data[i].inventory_unit + '</td>' +
								'<td>' + data[i].purchase_unit + '</td>' +
								'<td>' + data[i].sales_unit + '</td>' +
								'<td>' + data[i].product + '</td>' +
								'<td>' + data[i].type + '</td>' +
                                '<td>' + data[i].wct + '</td>' +
                                 '<td>'+
                                '</td>' +
								'<td>' +
								'<button class="btn btn-xs btn-primary" style="padding-left: 10px;padding-right: 10px;" data-toggle="modal" data-target="#formEdit" id="btn-edit" data-id="' + data[i].item_id + '"> <i class="fa fa-pencil"></i></button> ' +
								'<a class="btn btn-xs btn-danger del_item" style="padding-left: 10px;padding-right: 10px;"  id="' + data[i].item_id + '"> <i class="fa fa-trash"></i> </a>' +
								'</td>' +
                                '</tr>'
                            }
							no++;
						}

						$('#tampil_data').html(html);
					}

				});
            }

 


            $('#subtype').change(function(){
              var subt = $('#subtype').val();  // AMBIL isi dari fiel Nrp masukkan variabel 'npmfromfield'
                if(subt =='Produt'){

                }else{

                }
            })

            $('#btn_size').on('click',function(){
                $.ajax({
                    type:"POST",
                    url : "<?php echo site_url('user/c_master_item/save_size')?>",
                    dataType:"JSON",
                    data: $("#Modaledit form").serialize(),
                    success : function(data){
                        $('[name="size"]').val("");
                        $('#Modaledit').modal('hide');
                    }
                })
            });

 

            $('#formEdit').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget);
				var id_master_item = button.data('id');
        console.log(id_master_item);
               // $('#edit_item').val(id_master_item);
                
                $.ajax({
                    type: "POST",
                    url : '<?php echo site_url('user/c_master_item/get_item_e')?>',
                    data:{id_master_item:id_master_item},
                 
               success:function( data ) { 
  // KETIKA PROSES Ajax Request Selesai
        var json = data,
        obj = JSON.parse(json);
        $('#item_id_e').val(obj.item_id);
        $('#itemname1').val(obj.item_name);  // Isikan hasil dari ajak ke field 'nama' 
        $('#ptype1').val(obj.product_type);
        $('#subtype1').val(obj.product_subtype);
        $('#category1').val(obj.category);
        $('#itemmodel1').val(obj.item_model_group);
        $('#inventunit1').val(obj.inventory_unit);
        $('#purchunit1').val(obj.purchase_unit);
        $('#salesunit1').val(obj.sales_unit);
        $('#product1').val(obj.product);
        $('#type1').val(obj.type);
        $('#wct1').val(obj.wct);

               }
                })
		
            });

            $('#btn_save1').on('click',function(){
                var itemname = $('#itemname1').val();
                var ptype = $('#ptype1').val();
                var subtype = $('#subtype1').val();
                var category = $('#category1').val();
                var itemmodel = $('#itemmodel1').val();
                var inventunit = $('#inventunit1').val();
                var purchunit = $('#purchunit1').val();
                var salesunit = $('#salesunit1').val();
                var product = $('#product1').val();
                var project = $('#project1').val();
                var type = $('#type1').val();
                var wct = $('#wct1').val();
              console.log(itemname);
                $.ajax({
                    type : "POST",
                    url : "<?php echo site_url('user/c_master_item/update_item')?>",
                    dataType: "JSON",
                   // data : {digit1:digit1,digit2:digit2,digit3:digit3,itemname:itemname,ptype:ptype,subtype:subtype,category:category,itemmodel:itemmodel,inventunit:inventunit,purchunit:purchunit,salesunit:salesunit,product:product,project:project,type:type,wct:wct},
                   data: $("#form11").serialize(), // Ambil semua data yang ada didalam tag form 
                   success : function(data){
                        $('[name="itemname1"]').val("");
                        $('[name="ptype1"]').val("");
                        $('[name="subtype1"]').val("");
                        $('[name="category1"]').val("");
                        $('[name="itemmodel1"]').val("");
                        $('[name="inventunit1"]').val("");
                        $('[name="purchunit1"]').val("");
                        $('[name="salesunit1"]').val("");
                        $('[name="product1"]').val("");
                        $('[name="project1"]').val("");
                        $('[name="type1"]').val("");
                        $('[name="wct1"]').val("");
                    location.reload()
                    tampil_item();
                    }
                })
            });

                
      

            $('#Modaledit').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget);
				var id_master_item = button.data('id');
        console.log('msk');
                $('#edit_item').val(id_master_item);
                
                $.ajax({
                    type: "POST",
                    url : '<?php echo site_url('user/c_master_item/tampil_size')?>',
                    async:false,
                    dataType:'json',
                    data:{id_master_item:id_master_item},
                    success:function(data){
                        var tablesize='';
                        for(i = 0; i < data.length; i++ ){
                            tablesize += '<tr id="'+data[i].id_size+'">'+
                            
                               '<td>' + data[i].size_name + '</td>' +
                               '<td>'+
                               '<a class="btn btn-xs btn-danger del_dbs" style="padding-left: 10px;padding-right: 10px;" id="'+data[i].id_size+'"> <i class="fa fa-trash"></i> </a>' +
                                '</td>'+
                            '</tr>'
                        }
                        $('#data_size').html(tablesize)
                    }
                })
		
            });
/*
            $('#dtlSize').on('show.bs.modal',function(event){
              console.log('coba');  
              var button = $(event.relatedTarget);
              var item_n = button.data("id");
              if(confirm("Data will be deleted?")){
    $.ajax({
      type:"POST",
      url:'<?php echo site_url('user/c_master_item/del_size') ?>',
      async:false,
      dataType:'json',
      data:{item_n:item_n},
      success:function(data){
        var myobj = document.getElementById(item_n);
        myobj.remove();   
      }
    })   
  }else{

  }
            });
            */

    
            $(document).on('click', '.del_dbs', function(){
    var id = $(this).attr('id');
    if(confirm('Data will be deleted?')){
    $.ajax({
        type: 'POST',
        url: "<?php echo site_url('user/c_master_item/del_size') ?>",
        data: {id:id},
        success: function() {
          var myobj = document.getElementById(id);
        myobj.remove();   
        }, error: function(response){
            console.log(response.responseText);
        }
    });
    }
    else{

    }
});


$(document).on('click', '.del_item', function(){
    var id = $(this).attr('id');
    console.log(id);
    if(confirm('Data will be deleted?')){
    $.ajax({
        type: 'POST',
        url: "<?php echo site_url('user/c_master_item/delete_item') ?>",
        data: {id:id},
        success: function() {
          var myobj = document.getElementById(id);
        myobj.remove(); 
        location.reload()
  
        }, error: function(response){
            console.log(response.responseText);
        }
    });
    }
    else{

    }
});




            $('.btnhps').click(function(){
              console.log('msk1x');
    var val = $(this).attr("id");
    $('#'+val).remove();
  })


            

		})

    </script>
<script>/*
        function dlts(ez){
              var item_n = $(ez).data('id');
  if(confirm("Data will be deleted?")){
    $.ajax({
      type:"POST",
      url:'<?php echo site_url('user/c_master_item/del_size') ?>',
      async:false,
      dataType:'json',
      data:{item_n:item_n},
      success:function(data){
        var myobj = document.getElementById(item_n);
        myobj.remove();   
      }
    })   
  }else{

  }
       

            }
            */
</script>
</body>

</html>

