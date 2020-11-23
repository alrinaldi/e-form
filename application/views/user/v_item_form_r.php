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
        
        <div class="content-wrapper">
        <div id="notify">

</div>
          <?php $lvlhide = $this->session->userdata('level')?>
        <input type="hidden" name="lvlhid" id="lvlhid" name="lvlhid" value=<?php echo $lvlhide?>>
          <div class="row">
            <div class="col-xl-12 grid-margin-lg-0 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List Item</h4>

        <p class="pt-3"></p>
                             <table id="table_item" class="table table-bordered table-hover">
                             <thead style="background-color:orange !important;color:black" class="text-center font-weight-bold">
                  <tr>
                  <th style="width:10px"><input type="checkbox" class="form-control check_all" style="width:20px"/></th>
                    <th>Master Form Number</th>
                    <th>Requestor</th>
                    <th><h6>Name</h6></th>
                    <th><h6>Request Date</h6></th>
                    <th><h6>Time</h6></th>
                    <th>Detail</th>
                  </tr>
                  </thead>
                  <tbody id="tampil_data">
            
                  </tbody>
  
                </table>
                    <button class="btn btn-primary float-right" id="submit-item">Submit</button>
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


  <div id="ModalDtl" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-dialog-centered modal-xl" style="max-width: 100%;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h5 class="modal-title">Master Item</h5>
				</div>
				<div class="modal-body">
        <input type="hidden" name="idmf" id="idmf" name="idmf"> 
                    <p class="pt-4"></p>
                   <table id="tble_detail" class="table table-bordered table-hover">
                   <thead style="background-color:orange !important;color:black" class="text-center font-weight-bold">
                        <tr>
                        <th>Id Number</th>
                        <th>Item Name</th>
                        <th>Update</th>
                        <th>Size</th>                
                        </tr>
                        </thead>
                        <tbody id="id_dtl">
                
                            <tr>
                 
                        </tr>
                     
                        </tbody>
                   </table>
                    <p class="pt-3"></p>
                  
                    </div>
				<div class="modal-footer">
                <div class="form-row">
          
                </div>
                </div>
                </div>

			</div>
        </div>

        <div id="ModalUpd" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-dialog-centered modal-xl" style="max-width: 100%;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h5 class="modal-title">Master Item</h5>
				</div>
				<div class="modal-body">
                <form id="update-form">
                        <input type="hidden" class="itemid" id="itemid" name="itemid">

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

             </form>
                    </div>
				<div class="modal-footer">
                    <button class="btn btn-primary float-right" id="upd-submit">Update</button>
                <div class="form-row">
          
                </div>
                </div>
                </div>

			</div>
        </div>

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
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style>
.ui-autocomplete-input {
  border: none; 
  font-size: 14px;
  width: 300px;
  height: 24px;
  margin-bottom: 5px;
  padding-top: 2px;
  border: 1px solid #DDD !important;
  padding-top: 0px !important;
  z-index: 1511;
  position: relative;
}
.ui-menu .ui-menu-item a {
  font-size: 12px;
}
.ui-autocomplete {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1051 !important;
  float: left;
  display: none;
  min-width: 160px;
  _width: 160px;
  padding: 4px 0;
  margin: 2px 0 0 0;
  list-style: none;
  background-color: #ffffff;
  border-color: #ccc;
  border-color: rgba(0, 0, 0, 0.2);
  border-style: solid;
  border-width: 1px;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
  *border-right-width: 2px;
  *border-bottom-width: 2px;
}
.ui-menu-item > a.ui-corner-all {
    display: block;
    padding: 3px 15px;
    clear: both;
    font-weight: normal;
    line-height: 18px;
    color: #555555;
    white-space: nowrap;
    text-decoration: none;
}
.ui-state-hover, .ui-state-active {
      color: #ffffff;
      text-decoration: none;
      background-color: #0088cc;
      border-radius: 0px;
      -webkit-border-radius: 0px;
      -moz-border-radius: 0px;
      background-image: none;
}
</style>
  <script>
		var id = 0;

		$(document).ready(function () {

			tampil_approval()
        
     $("#table_item").DataTable({
      "responsive": true,
      "autoWidth": false,
    });

    $("#table_detail").DataTable({
      "responsive": true,
      "autoWidth": false,
    });

    $("#table_dtl").DataTable({
      "responsive": true,
      "autoWidth": false,
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

        $('#submit-item').click(function(){
            if(confirm("Apa anda yakin ingin Submit data ini")){
            var id_master_form = [];
            var reject = 'true';
            $(':checkbox:checked').each(function(i){
                id_master_form[i] = $(this).val();
            });
            if(id_master_form.length === 0){
                alert("Pilih minimal satu data");
            }else{
                $.ajax({
                    url:'<?php echo site_url('user/c_master_item/submit_item')?>',
                    method:'POST',
                    data:{id_master_form:id_master_form,reject:reject},
                    success:function(){
                        for(var i=0; i<id_master_form.length; i++){
                            $('tr#'+id_master_form[i]+'').fadeOut('slow');
                        }
                        tampil_approval();
                    }
                });
            }    
            } else{
                return false;
            }
        });

        function tampil_approval() {
				$.ajax({
					type: 'ajax',
					url:'<?php echo site_url('user/c_reject_form/get_master_item')?>',
					async: false,
					dataType: 'json',
					success: function (data) {
						var html = '';
                        var no = 1;
						for (i = 0; i < data.length; i++) {
                            html += '<tr id="' + data[i].id_master_form + '">' +
                                '<td>'+
                                '<input type="checkbox" name="id_master_form[]" class="form-control chk_boxes1" value="'+data[i].id_master_form+'"  style="width:20px"/>'+
                                '</td>'+
								'<td>' + data[i].id_master_form + '</td>' +
								'<td>' + data[i].requestor + '</td>' +
                '<td>' + data[i].nama + '</td>'+
                '<td>' + data[i].date + '</td>'+
                '<td>' + data[i].jam + '</td>'+
                                 '<td>'+
                                '<button class="btn btn-primary" data-toggle="modal" data-target="#ModalDtl" data-id="'+data[i].id_master_form+'" ><span class="fa fa-edit"></span></button>'+
                                '</td>' +
                                '</tr>'
                                
						}
						$('#tampil_data').html(html);
					}

				});
            }

            $('#btn_size').on('click',function(){
                $.ajax({
                    type:"POST",
                    url : "<?php echo site_url('user/c_approval_sec/save_size')?>",
                    dataType:"JSON",
                    data: $("#Modaledit form").serialize(),
                    success : function(data){
                        $('[name="size"]').val("");
                        $('#Modaledit').modal('hide');
                    }
                })
            });

 
            $('#ModalDtl').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget);
				var id_master_form = button.data('id');
      
                $('#idmf').val(id_master_form);
              // $( ".prjjjn" ).autocomplete( "option", "appendTo", ".eventForm" );
        
                    $.ajax({
                    type: "POST",
                    url : '<?php echo site_url('user/c_reject_form/get_detail_item')?>',
                    async:false,
                    dataType:'json',
                    data:{id_master_form:id_master_form},
                    success:function(data){
                        var tablesize='';
                        for(i = 0; i < data.length; i++ ){
                          var idmid = data[i].item_id;
                            tablesize += '<tr id="'+data[i].id+'">'+
                '<td>'+ data[i].item_id+ '</td>'+
								'<td>' + data[i].item_name + '</td>' +
                                '<td><button class="btn btn-primary" data-toggle="modal" data-target="#ModalUpd" data-id="'+data[i].item_id+'">'+
                                '<span class="fa fa-pencil"></span></button></td>'+ 
                                '<td><button class="btn btn-primary" data-toggle="modal" data-target="#ModalSize" data-id="'+data[i].item_id+'">'+
                                '<span class="fa fa-pencil"></span></button></td>'+ 
                                  '</tr>'
                        
          
                        }
                     
                        //$(".casset").html(as);
                        $('#id_dtl').html(tablesize)
                     
                    }
                })

		
            });

            $('#ModalUpd').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget);
				var id = button.data('id');
      
                $('#itemid').val(id);
              // $( ".prjjjn" ).autocomplete( "option", "appendTo", ".eventForm" );
        
                    $.ajax({
                    type: "POST",
                    url : '<?php echo site_url('user/c_reject_form/get_item_upd')?>',
          
                    data:{id:id},
                    success:function(data){
                  
                        var json = data,
        obj = JSON.parse(json);
        $('#itemname1').val(obj.nama);  // Isikan hasil dari ajak ke field 'nama' 
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
      
                        //$(".casset").html(as);
                        //$('#content-item').html(upd)
                     
                    }
                })

		
            });

            $('#upd-submit').on('click',function(){
                $.ajax({
                    type:'POST',
                    url : "<?php echo site_url('user/c_master_item/update_itema')?>",
                    dataType: "JSON",
                   // data : {digit1:digit1,digit2:digit2,digit3:digit3,itemname:itemname,ptype:ptype,subtype:subtype,category:category,itemmodel:itemmodel,inventunit:inventunit,purchunit:purchunit,salesunit:salesunit,product:product,project:project,type:type,wct:wct},
                   data: $("#update-form").serialize(), // Ambil semua data yang ada didalam tag form 
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
            })

            $('#submit_btnn').on('click',function(){
              var id_master_form1 = $('#idmf').val();
              $('#submit_btnn').attr("disabled",true);
              $.ajax({
                type:'POST',
                url:'<?php echo site_url('user/c_acc_item/submit_item')?>',
                dataType:'JSON',
                data:{id_master_form1:id_master_form1},
                success:function(data){
                location.reload();              
                }, error: function(data){
            //console.log(data.responseText);
                 location.reload();              

        }

              })
            })

		})

    </script>
   
 

</body>

</html>

