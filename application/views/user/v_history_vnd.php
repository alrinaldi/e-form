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
          <div class="row">
           <div class="col-md-12">
           <div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">My Request</h5>
    <table id="table12" class="table table-bordered table-hover">
    <thead style="background-color:orange !important;color:black" class="text-center font-weight-bold">
                  <tr>
                  <th>Id Master Vendor</th>
                    <th>Detail</th>
                    <th>Lampiran</th>
					<th>Approval Status </th>
		

                  </tr>
                  </thead>
                  <tbody class="text-center">
                  <?php 
                      $vndu = $this->session->userdata('nrp');
                      if($this->session->userdata('level')=='Operator'){
                      $vnd = $this->db->query("SELECT * FROM vendor where nrp = '$vndu' ");
                        foreach($vnd->result_array() as $v):
                       ?>
                  <tr>
                  
                    <td><?php echo $v['id_vendor']?></td>
                    <td><a class="btn btn-primary" data-toggle="modal" data-target="#ModalDtl<?php echo $v['id_vendor'];?>"><span class="fa fa-edit"></span></a>
                  </td>
                    <td>
                    <a class="btn btn-primary" data-toggle="modal" data-target="#ModalLamp<?php echo $v['id_vendor'];?>"><span class="fa fa-file" ></span></a>

                    </td>
                    <td>          
                        <a class="btn btn-primary" data-toggle="modal" data-target="#ModalEdit<?php echo $v['id_vendor'];?>"><span class="fa fa-edit "></span></a>
                        </td>



                  </tr>
                  <?php endforeach;
                  }else{ ?>
                      <?php 
                      $cekvnd =$this->db->query("SELECT * FROM `approval_master_vendor` where approval = '$vndu' GROUP by id_master_vendor
                      ");
                      $vnd = $this->db->query("SELECT a.*,b.* FROM vendor a join approval_master_vendor b on a.id_vendor = b.id_master_vendor 
                      where b.approval = '$vndu' GROUP BY b.id_master_vendor ");
                        foreach($vnd->result_array() as $v):
                       ?>
                  <tr>
                  
                    <td><?php echo $v['id_vendor']?></td>
                    <td><a class="btn btn-primary" data-toggle="modal" data-target="#ModalDtl<?php echo $v['id_vendor'];?>"><span class="fa fa-edit"></span></a>
                  </td>
                    <td>
                    <a class="btn btn-primary" data-toggle="modal" data-target="#ModalLamp<?php echo $v['id_vendor'];?>"><span class="fa fa-file" ></span></a>

                    </td>
                    <td>          
                        <a class="btn btn-primary" data-toggle="modal" data-target="#ModalEdit<?php echo $v['id_vendor'];?>"><span class="fa fa-edit "></span></a>
                        </td>



                  </tr>
                  <?php endforeach;
                  }?>
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
 foreach($vnd->result_array() as $v):
    $id_vend = $v['id_vendor'];
  ?>

  <div id="ModalEdit<?php echo $id_vend;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog  modal-dialog-centered  modal-xl " style="max-width:100%">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h5 class="modal-title">Master Vendor</h5>
				</div>
				<div class="modal-body">
					<form>
						<input type="hidden" class="hidden" name="edit_item" id="edit_item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-4">
                        <div class="card">
                <div class="card-header">
                     Workflow Activity
                        </div>
                        <div class="card-body">
                    <?php $aprz = $this->db->query("SELECT * FROM approval_master_vendor where id_master_vendor = '$id_vend'   
                    order by tanggal");
                    foreach($aprz->result_array() as $r):
                        if($r['status']=='Approval 1'){
                            $sts = 'Purchasing  Section Head';
                            $aps = 'Approved';
                        }else if($r['status']=='Approval 2'){
                            $sts = 'Purchasing Department Head';
                            $aps = 'Approved';
                        }else if($r['status']=='Approval 3'){
                            $sts = 'Purhasing Division Head';
                            $aps = 'Approved';
                        }else if($r['status']=='Approval 4'){
                            $sts = 'Accounting Asset & Tax';
                            $aps = 'Approved';
                        }else if($r['status']=='Approval 5'){
                            $sts = 'Accounting GL';
                            $aps = 'Approved';
                        }else if($r['status']=='Approval 6'){
                            $sts = 'Accounting Department Head';
                            $aps = 'Approved';
                        }else if($r['status']=='Approval 7'){
                            $sts = 'General Affair Section Head';
                            $aps = 'Approved';
                        }else if($r['status']=='Approval 8'){
                            $sts = 'General Affair Divison Head';
                            $aps = 'Approved';
                        }else if($r['status']=='Approval 9'){
                            $sts = 'IT Business Process';
                            $aps = 'Approved';
                        }else if($r['status']=='Approval 10'){
                            $sts = 'IT Departent Head';
                            $aps = 'Approved';
                        }

                        if($r['status']=='Reject 1'){
                            $sts = 'Section Head';
                            $aps = 'Reject';
                        }else if($r['status']=='Reject 2'){
                            $sts = 'Department Head';
                            $aps = 'Reject';
                        }else if($r['status']=='Reject 3'){
                            $sts = 'Division Head';
                            $aps = 'Reject';
                        }else if($r['status']=='Reject 4'){
                            $sts = 'IT Process Business ';
                            $aps = 'Reject';
                        }else if($r['status']=='Reject 5'){
                            $sts = 'IT Department Head';
                            $aps = 'Reject';
                        }
                        
                        
                    ?>
                    <div class="dtls" id='<?php echo $r['id_approval']?>'>
                    <p><?php echo $sts;?></p>
                    <p><?php echo $aps.' By '.$r['approval'].' :'.$r['tanggal'];?></p>
                    </div>
                    <hr>    
                    <?php
                endforeach;
                    ?>
                   </div>
                        </div>
                        </div>  
                        <div class="col-md-2">
                        <div class="card">
                <div class="card-header">
                     Note
                        </div>
                    <div class="card-body">
                    <div id="<?php echo $id_vend.'d'?>" class="dtlnote">

                    </div>
                   </div>
                </div>
                        </div>
                    </div>
                

                   <div class="col-md-6">
                     <div class="form-row">
                       <div class="col">
                    <p class="pt-3"></p>
           
                    </div>
                    </div>
                    </div>
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

                            <?php
 foreach($vnd->result_array() as $v):
    $id_vend = $v['id_vendor'];
  ?>

  <div id="ModalDtl<?php echo $id_vend;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog  modal-dialog-centered  modal-xl" style="max-width: 100%;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h5 class="modal-title">Master Vendor</h5>
				</div>
				<div class="modal-body">
					
        <table id="table12" class="table table-bordered table-hover">
    <thead style="background-color:orange !important;color:black" class="text-center font-weight-bold">
                  <tr>
                  <th>Id Master Vendor</th>
                    <th>Segment</th>
					<th>Nama </th>
					<th>Address (SK Domisili/SUP)</th>
					<th>Phone (Fixed Line)</th>
					<th>Fax</th>
                    <th>E-mail</th>
                    <th>Name or Description</th>
                    <th>Country / Region</th>
                    <th>Contact Information</th>
                    <th>Currency</th>

                  </tr>
                  </thead>
                  <tbody>
                 
                  <tr>
                  
                    <td><?php echo $v['id_vendor']?></td>
                    <td><?php echo $v['segment']?></td>
                    <td><?php echo $v['nama']?></td>
                    <td><?php echo $v['address']?></td>
                    <td><?php echo $v['phone']?></td>
                    <td><?php echo $v['fax']?></td>
                    <td><?php echo $v['email']?></td>
                    <td><?php echo $v['description']?></td>
                    <td><?php echo $v['country']?></td>
                    <td><?php echo $v['contact_information']?></td>
                    <td><?php echo $v['curency']?></td>
                  </tr>

                  </tbody>
  
                </table>
        </div>
					
				<div class="modal-footer">
                <div class="form-row">
          
                </div>
                </div>
                </div>

			</div>
        </div>
                            <?php endforeach;?>


                            <?php
 foreach($vnd->result_array() as $v):
    $id_vend = $v['id_vendor'];
  ?>

  <div id="ModalLamp<?php echo $id_vend;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h5 class="modal-title">Master Vendor</h5>
				</div>
				<div class="modal-body">
        <embed src="<?php echo base_url('upload/'.$v['lampiran'])?>" style="width: 100%;height:600px;border: none;">
        </div>
					
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
$('#table123').DataTable({
    "responsive":true,
    "autowWidth":true,
});
      
});

$('.dtls').on('click',function(e){

var idapr = $(this).attr('id');
console.log(idapr);
$.ajax({
  type:'POST',
  url:'<?php echo site_url('user/c_history/dtl_aprv_vnd')?>',
  dataType:'JSON',
  data:{idapr:idapr},
  success:function(data){
    
      console.log(data.note);  
    var html = '';
      html = '<p>'+data.note+'</p>';
      $('.dtlnote').html(html);      
  }  
})
})



  </script>


</body>


</html>

