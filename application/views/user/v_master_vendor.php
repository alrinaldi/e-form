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
                                    <?php if ($this->session->flashdata('success')== TRUE):?>
									<div class="alert alert-success alert-dismissible fade show" role="alert">
  									<p><?php echo $this->session->flashdata('success')?></p>
  										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    										<span aria-hidden="true">&times;</span>
  										</button>
									</div>
								<?php endif?>
								<?php if ($this->session->flashdata('failed')== TRUE):?>
									<div class="alert alert-success alert-dismissible fade show" role="alert">
  									<p><?php echo $this->session->flashdata('failed')?></p>
  										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    										<span aria-hidden="true">&times;</span>
  										</button>
                                    </div>
                                    <?php endif?>
          <div class="row">
            <div class="col-xl-12 grid-margin-lg-0 grid-margin stretch-card">
              <div class="card">
                  <div class="card-header">
                    <h4 class="font-weight-bold ">Form Master Vendor</h4>
                  </div>
                <div class="card-body">
                    <h4 class="card-title"></h4>
                    <button type="button" class="btn btn-info font-weight-bold" data-toggle="modal" data-target="#staticBackdrop">+ Create New</button>

        <p class="pt-3"></p>
                             <table id="table_item" class="table table-bordered table-hover">
                             <thead style="background-color:orange !important;color:black" class="text-center font-weight-bold">
                  <tr>
                  <th>Select<input type="checkbox" class="form-control check_all"/></th>
                    <th>Id Master Vendor</th>
                    <th>Requestor</th>
                    <th>Segment</th>
					<th>Nama </th>
					<th>Address (SK Domisili/SUP)</th>
					<th>Phone (Fixed Line)</th>
					<th>Fax</th>
                    <th>E-mail</th>
                    <th>Country / Region</th>
                    <th>Contact Information</th>
                    <th>Currency</th>
                    <th>Lampiran</th>
                    <th>Action</th>

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
        <h5 class="modal-title" id="staticBackdropLabel">Master Vendor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h2> <span id="target13" style="display: none"></span></h2>
    <form action="<?php echo base_url('user/c_master_vendor/submit')?>" method="post" enctype="multipart/form-data" id=form1>
      <div class="form-group">
        <label id="target1">NRP:</label>
        <?php $nrpu = $this->session->userdata('nrp'); ?>

        <input type="text" name="nrp" id="nrp" class="form-control" value="<?php echo $nrpu?>" readonly>
      </div>

      <div class="form-group">
        <label id="ldigit2">Nama Lengkap:</label>
        <input class="form-control" type="text" name="digit2" id="digit2" readonly>
      </div>

      <div class="form-group">
        <label id="target3">Email:</label>
        <input type="text" name="digit3" class="form-control" id="digit3" readonly>
      </div>

        <div class="form-group">
        <label id="lext">Ext:</label>
        <input type="text" name="ext" id="ext" class="form-control" readonly>
      </div>

      <div class="form-group">
        <label id="ldept">Departemen:</label>
        <input type="text" name="dept" id="dept" class="form-control" readonly>
      </div>

      <div class="form-group">
        <label id="lloc">Lokasi:</label>
        <input type="text" name="loc" class="form-control" id="loc" readonly>
      </div>
    
      <div class="form-group">
          <label id="lkep">Keperluan</label>
          <select name="kep" id="kep" class="form-control" required>
              <option value=""></option>
              <option value="Penambahan Master">Add Master Vendor</option>
              <option value="Upload Master">Upload Master</option>
              <option value="Hold Requisition">Hold Requisition</option>
              <option value="Hold All">Hold All</option>
          </select>

      </div>
        <button type="button" id="target5" onclick="hilang()" class="btn btn-primary float-right" >Next</button>

        <div class="form-row">
            <div class="col">
        <label id="lsegmentv" style="display: none">Segment:</label>
        <input type="text" class="form-control" id="segmentv"  name="segmentv" style="display: none" required>
        </div>

          <div class="col">
          <label id="lnamev" style="display: none">Vendor Name:</label>
            <input type="text" name="nama" id="nama" class="form-control" style="display: none" required>
          </div>
          </div>
            <p class="pt-2"></p>
          <div class="form-row">
              <div class="col">
                  <label id="laddress" style="display: none;">Address (SK Domisili/SUP)</label>
                  <input type="text" name="address" id="address" class="form-control" style="display:none" required>
              </div>
              <div class="col">
                  <label id="lmailv" style="display: none;">E-mail</label>
                  <input type="text" name="mailv" id="mailv" style="display: none;" class="form-control" required>
              </div>
          </div>

          <p class="pt-2"></p>
    <div class="form-row">
     <div class="col">
     <label id="lphonev" style="display: none">Phone (Fixed Line):</label>
        <input type="text" name="phonev" id="phonev" style="display: none;" class ="form-control" required>
      </div>
      <div class="col">
          <label id="lfaxv" style="display:none">Fax:</label>
            <input type="text" name="faxv" class="form-control" id="faxv" style="display: none;" required>
      </div>
    </div>

    <p class="pt-2"></p>
    <div class="form-row">

            <div class="col">
            <label id="lregnv" style="display: none">Country/Region:</label>
                <input type="text" name="regnv" class="form-control" id="regnv" style="display: none;" required>
            </div>

            <div class="col">
            <label id="lcurrv" style="display: none">Currency:</label>
        <select name="currv" id="currv" class="form-control" style="display:none" required>
        <option value=""></option>
            <?php
            foreach($crr->result_array() as $kr):
            
            ?>

            <option value="<?php echo $kr['CURRENCYCODE']?>"><?php echo $kr['CURRENCYCODE']?></option>
            <?php
            endforeach;
            ?>
    </select>
            </div>
            
    </div>

    <p class="pt-2"></p>
            <div class="form-row">
            <div class="col">
            <label id="lcontv" style="display: none">Contact Information:</label>
            <input type="text" name="contv" class="form-control" id="contv" style="display: none;" required>
            </div>


            <div class="col">
                 <label  id="lfile" style="display: none;">Attachment</label>
             <input type="file" class="form-control-file" id="filev" name="filev" accept="pdf" style="display: none;">
         </div>

    
        </div>


        <p class="pt-3"></p>
      <div class="form-row mt-2">
          <div class="col">
          <button type="button" id="back" class="btn btn-danger" style="display: none" onclick="back1()">Back</button>
          </div>
      </div>
      </div>
      <div class="modal-footer">
      
        <button type="submit" class="btn btn-primary" id="btn_save" style="display: none;">Create</button>
        </form>

      </div>
    </div>
  </div>
</div>


<div class="modal fade " id="form-edit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered  modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Master Vendor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h2> <span id="target13" style="display: none"></span></h2>
    <form action="" method="post" enctype="multipart/form-data" id=form1>
            <input type="hidden" name="edit_vend1" id="edit_vend1">
        <div class="form-row">
            <div class="col">
        <label id="lsegmentv" >Segment:</label>
        <input type="text" class="form-control" id="segmentv1"  name="segmentv1"  required>
        </div>

          <div class="col">
          <label id="lnamev" >Vendor Name:</label>
            <input type="text" name="nama1" id="nama1" class="form-control"  required>
          </div>
          </div>
            <p class="pt-2"></p>
          <div class="form-row">
              <div class="col">
                  <label id="laddress" >Address (SK Domisili/SUP)</label>
                  <input type="text" name="address1" id="address1" class="form-control"  required>
              </div>
              <div class="col">
                  <label id="lmailv" >E-mail</label>
                  <input type="text" name="mailv1" id="mailv1"  class="form-control" required>
              </div>
          </div>

          <p class="pt-2"></p>
    <div class="form-row">
     <div class="col">
     <label id="lphonev" >Phone (Fixed Line):</label>
        <input type="text" name="phonev1" id="phonev1"  class ="form-control" required>
      </div>
      <div class="col">
          <label id="lfaxv" >Fax:</label>
            <input type="text" name="faxv1" class="form-control" id="faxv1"  required>
      </div>
    </div>

    <p class="pt-2"></p>
    <div class="form-row">

            <div class="col">
            <label id="lregnv" >Country/Region:</label>
                <input type="text" name="regnv1" class="form-control" id="regnv1"  required>
            </div>

            <div class="col">
            <label id="lcurrv">Currency:</label>
        <select name="currv1" id="currv1" class="form-control"  required>
        <option value=""></option>
            <?php
            foreach($crr->result_array() as $kr):
            
            ?>

            <option value="<?php echo $kr['CURRENCYCODE']?>"><?php echo $kr['CURRENCYCODE']?></option>
            <?php
            endforeach;
            ?>
    </select>
            </div>
            
    </div>

    <p class="pt-2"></p>
            <div class="form-row">
            <div class="col">
            <label id="lcontv" >Contact Information:</label>
            <input type="text" name="contv1" class="form-control" id="contv1"  required>
            </div>


            <div class="col">
                 <label  id="lfile" >Attachment</label>
             <input type="file" class="form-control-file" id="filev1" name="filev1" accept="pdf" >
         </div>

    
        </div>


        <p class="pt-3"></p>
      <div class="form-row mt-2">
          <div class="col">
          </div>
      </div>
      </div>
      <div class="modal-footer">
      
        <button type="submit" class="btn btn-primary" id="btn_save1" >Update</button>
        </form>

      </div>
    </div>
  </div>
</div>


<div id="Modaledit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h5 class="modal-title">Lampiran</h5>
				</div>
				<div class="modal-body">
					<form>
						<input type="hidden" class="hidden" name="edit_item" id="edit_item">
					<div  id="data_file">
                  
                    </div>
					</form>
				</div>
				<div class="modal-footer">
					<button id="btn_size" type="button" class="btn btn-sm btn-primary">Close</button>
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

function tambah_form(){
    var target=document.getElementById("formku");
    var tabel_row=document.createElement("tr");
    var tabel_col=document.createElement("td");
    var tambah=document.createElement("input");
    target.appendChild(tabel_row);
    tabel_row.appendChild(tabel_col);
    tabel_col.appendChild(tambah);
    tambah.setAttribute('type','text');
    tambah.setAttribute('name','inputan[]');
}
function kurangi_form(){
    var target=document.getElementById("formku");
    var akhir=target.lastChild;
    target.removeChild(akhir);
}
  </script>
  
  <script>
     function hilang(){
      $('#target1').hide();
      $('#nrp').hide();
      $('#digit2').hide();
      $('#ldigit2').hide();
      $('#target3').hide();
      $('#digit3').hide();
      $('#lext').hide();
      $('#ext').hide();
      $('#lloc').hide();
      $('#loc').hide();
      $('#lkep').hide();
      $('#kep').hide();
      $('#target5').hide();
      $('#ldept').hide();
      $('#dept').hide();
      $('#btn_save').show();
      $('#lsegmentv').show();
      $('#segmentv').show();
      $('#lnamev').show();
      $('#nama').show();
      $('#laddress').show();
      $('#address').show();
      $('#lphonev').show();
      $('#phonev').show();
      $('#lfaxv').show();
      $('#faxv').show();
      $('#lmailv').show();
      $('#mailv').show();
      $('#ldescv').show();
      $('#descv').show();
      $('#lregnv').show();
      $('#regnv').show();
      $('#lcontv').show();
      $('#contv').show();
      $('#lcurrv').show();
      $('#currv').show();
      $('#lfile').show();
      $('#filev').show();
      $('#back').show();
    }
  </script>
  
  <script>
     function back1(){
        $('#target1').show();
      $('#nrp').show();
      $('#digit2').show();
      $('#ldigit2').show();
      $('#target3').show();
      $('#digit3').show();
      $('#lext').show();
      $('#ext').show();
      $('#lloc').show();
      $('#loc').show();
      $('#lkep').show();
      $('#kep').show();
      $('#target5').show();
      $('#ldept').show();
      $('#dept').show();
      $('#btn_save').hide();
      $('#lsegmentv').hide();
      $('#segmentv').hide();
      $('#lnamev').hide();
      $('#nama').hide();
      $('#laddress').hide();
      $('#address').hide();
      $('#lphonev').hide();
      $('#phonev').hide();
      $('#lfaxv').hide();
      $('#faxv').hide();
      $('#lmailv').hide();
      $('#mailv').hide();
      $('#ldescv').hide();
      $('#descv').hide();
      $('#lregnv').hide();
      $('#regnv').hide();
      $('#lcontv').hide();
      $('#contv').hide();
      $('#lcurrv').hide();
      $('#currv').hide();
      $('#lfile').hide();
      $('#filev').hide();
      $('#back').hide();
    }
  </script>
  <script>
		var id = 0;

		$(document).ready(function () {

			tampil_item()
        
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
              $('#submit_item').attr("disabled",true);

                $.ajax({
                    url:'<?php echo site_url('user/c_master_vendor/submit_vend')?>',
                    method:'POST',
                    data:{id_number:id_number},
                    success:function(){
                      $('#submit_item').attr("disabled",false);
                        for(var i=0; i<id_number.length; i++){
                            $('tr#'+id_number[i]+'').fadeOut('slow');
                        }
                        location.reload();
                    }
                });
            }    
            } else{
                return false;
            }
        });



			function tampil_item() {
				$.ajax({
					type: 'ajax',
					url:'<?php echo site_url('user/c_master_vendor/tampil_item')?>',
					async: false,
					dataType: 'json',
					success: function (data) {
						var html = '';
                        var no = 1;
                        var sub = 'Product Master';
						for (i = 0; i < data.length; i++) {
                            html += '<tr id="' + data[i].id_vendor + '">' +
                                '<td>'+
                                '<input type="checkbox" name="id_number[]" class="form-control chk_boxes1" value="'+data[i].id_vendor+'" style="width:20px"/>'+
                                '</td>'+
                                '<td>' + data[i].id_vendor + '</td>' +
								'<td>' + data[i].nrp + '</td>' +
								'<td>' + data[i].segment + '</td>' +
								'<td>' + data[i].nama + '</td>' +
								'<td>' + data[i].address + '</td>' +
                                '<td>' + data[i].phone + '</td>' +
                                '<td>' + data[i].fax + '</td>' +
								'<td>' + data[i].email + '</td>' +
								'<td>' + data[i].country + '</td>' +
								'<td>' + data[i].contact_information + '</td>' +
								'<td>' + data[i].curency + '</td>' +
								 '<td>'+
                                '<a class="btn btn-primary" data-toggle="modal" data-target="#Modaledit" id="btn-edit" data-id="'+data[i].id_vendor+'"><span class="fa fa-edit"></span></a>'+
                                '</td>' +
								'<td>' +
								'<button class="btn btn-xs btn-primary" style="padding-left: 10px;padding-right: 10px;" data-toggle="modal" data-target="#form-edit" id="btn-edit" data-id="' + data[i].id_vendor + '"> <i class="fa fa-pencil"></i></button> ' +
								'<button class="btn btn-xs btn-danger" style="padding-left: 10px;padding-right: 10px;" data-toggle="modal" data-target="#form-hapus" data-id="' + data[i].id_vendor + '"> <i class="fa fa-trash"></i> </button>' +
								'</td>' +
                                '</tr>'
                            
							no++;
						}
						$('#tampil_data').html(html);
					}

				});
            }



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


            $('#btn_save1').on('click',function(){
        
                $.ajax({
                    type : "POST",
                    url : "<?php echo site_url('user/c_master_vendor/update_vend')?>",
                    dataType: "JSON",
                   // data : {digit1:digit1,digit2:digit2,digit3:digit3,itemname:itemname,ptype:ptype,subtype:subtype,category:category,itemmodel:itemmodel,inventunit:inventunit,purchunit:purchunit,salesunit:salesunit,product:product,project:project,type:type,wct:wct},
                   data: $("#form-edit form").serialize(), // Ambil semua data yang ada didalam tag form 
                   success : function(data){
                        $('[name="nama1"]').val("");
                        $('[name="address1"]').val("");
                        $('[name="mailv1"]').val("");
                        $('[name="phonev1"]').val("");
                        $('[name="faxv1"]').val("");
                        $('[name="regnv1"]').val("");
            
                        location.reload()
                    tampil_item();
                    }
                })
            });
                
            	$('#Modaledit').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget);
				var id_vendor = button.data('id');
                $('#edit_item').val(id_vendor);
                
                $.ajax({
                    type: "POST",
                    url : '<?php echo site_url('user/c_master_vendor/tampil_file')?>',
                    async:false,
                    dataType:'json',
                    data:{id_vendor:id_vendor},
                    success:function(data){
                        var pdfview='';
                        for(i = 0; i < data.length; i++ ){
                            pdfview += '<embed src="http://192.168.20.95/e-form/upload/'+data[i].lampiran+'" style="width: 100%;height:600px;border: none;">'
                        }
                        $('#data_file').html(pdfview)
                    }
                })
		
            });

            $('#form-edit').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget);
				var id_vendor = button.data('id');
              $('#edit_vend1').val(id_vendor);
                console.log(id_vendor);
                $.ajax({
                    type: "POST",
                    url : '<?php echo site_url('user/c_master_vendor/get_vend_e')?>',
                    data:{id_vendor:id_vendor},
                    success:function(data){
                      var json = data,
        obj = JSON.parse(json);
        $('#segmentv1').val(obj.segment);  // Isikan hasil dari ajak ke field 'nama' 
        $('#nama1').val(obj.nama);
        $('#address1').val(obj.address);
        $('#mailv1').val(obj.email);
        $('#phonev1').val(obj.phone);
        $('#faxv1').val(obj.fax);
        $('#regnv1').val(obj.country);
        $('#currv1').val(obj.curency);
        $('#contv1').val(obj.contact);
        $('#filev1').val(obj.lampiran);

                    }
                })
		
            });
            
            $('#staticBackdrop').on('show.bs.modal',function(){    // KETIKA ISI DARI FIEL 'Nrp' BERUBAH MAKA ......
  var nrpfield = $('#nrp').val();  // AMBIL isi dari fiel Nrp masukkan variabel 'npmfromfield'
  $.ajax({        // Memulai ajax
    method: "POST",      
    url: "<?php echo site_url('user/c_master_vendor/pegawai')?>",    // file PHP yang akan merespon ajax
    data: { nrp: nrpfield},   // data POST yang akan dikirim
  
    success:function( data ) { 
  // KETIKA PROSES Ajax Request Selesai
        var json = data,
        obj = JSON.parse(json);
        $('#digit2').val(obj.nama);  // Isikan hasil dari ajak ke field 'nama' 
        $('#digit3').val(obj.email);
        $('#dept').val(obj.dept);
        $('#ext').val(obj.ext);
        $('#loc').val(obj.lokasi);
    }
 })
})


		})

    </script>
    <script>
           $(document).ready(function(){


           });
    </script>
</body>

</html>

