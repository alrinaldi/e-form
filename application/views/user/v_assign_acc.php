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
<div id="notifyrj">

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
                    <th>Workflow Status</th>
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
                            <th>Item Group</th>
                            <th>Fixed Asset Group</th>
                            <th>Product Type</th>
                            <th>Product Subtype</th>
                            <th>Category</th>
                            <th>Model Group</th>
                            <th>Inventory Unit</th>
                            <th>Purhchase Unit</th>
                            <th>Sales Unit</th>
                            <th>Product</th>
                            <th>Type</th>
                            <th>Wct</th>
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
          <?php 
          if($this->session->userdata('level')=='Section Head'){
          ?>
        <button type="submit" class="btn btn-primary float-left" id="submit_btnn" disabled >Approve</button>
        <button type="submit" class="btn btn-danger float-left" id="reject_btn"  >Reject</button>

        <?php
          }else{

        ?>
                <button type="submit" class="btn btn-primary float-left" id="submit_btnn"  >Approve</button>
                <button type="submit" class="btn btn-danger float-left" id="reject_btn"  >Reject</button>

           <?php
          }
           ?> 
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
<?php if($this->session->userdata('level')=='Section Head'){?>
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

        $('#submit_item').click(function(){
            if(confirm("Apa anda yakin ingin Submit data ini")){
            var id_master_form = [];
            $(':checkbox:checked').each(function(i){
                id_master_form[i] = $(this).val();
            });
            if(id_master_form.length === 0){
                alert("Pilih minimal satu data");
            }else{
                $.ajax({
                    url:'<?php echo site_url('user/c_acc_item/approve_item')?>',
                    method:'POST',
                    data:{id_master_form:id_master_form},
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
					url:'<?php echo site_url('user/c_acc_item/acc_assign')?>',
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
                '<td>' + data[i].workflow_status + '</td>' +
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
        var lvlhide = $('#lvlhid').val();

        $.ajax({
                  type:'POST',
                  url:'<?php echo site_url('user/c_acc_item/approve_btn')?>',
                  dataType:'JSON',
                  data:{id_master_form:id_master_form},
                  success:function(rs){
                    var jsonjj = rs,
                        objjj = JSON.parse(JSON.stringify(jsonjj));
                       // console.log(objjj.countg);
                       if(objjj.countf == null){
                         console.log('masuk');
                       }
                        if(objjj.countg > 0 && objjj.countf>0){
                        $('#submit_btnn').attr("disabled",true);
                      }else{
                        $('#submit_btnn').attr("disabled",false);
                      }
                  }
                });

                $('#idmf').val(id_master_form);
              // $( ".prjjjn" ).autocomplete( "option", "appendTo", ".eventForm" );
        
                    $.ajax({
                    type: "POST",
                    url : '<?php echo site_url('user/c_acc_item/modal_item')?>',
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
                
                '<td> <div class="form-group">'+
                    '<input type="text" class="igroup" id="'+data[i].item_id+'" value="'+data[i].item_group+'"  placeholder="Item Group" style="width:100%;">'+
                 ' </div> '+                               
                  '</td>' +
                                '<td  class="casset" id="'+data[i].item_id+'J">'+
                                  //data[i].category+
                                '</td>'+
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
                                '<td id="'+data[i].item_id+'S">'
                                '</tr>'
                        
                        $.ajax({
                          type:'POST',
                          url:'<?php echo site_url('user/c_acc_item/get_sizes')?>',
                          dataType:'JSON',
                          data:{idmid:idmid},
                          success:function(rsps){
                            for(s=0; s< rsps.length; s++){
                              console.log(rsps[s].size_name);
                              $('#'+rsps[s].id_master_item+'S').append('<p>'+rsps[s].size_name+'</p>');
                            }
                            
                          }
                         
                        })
                        }
                     
                        //$(".casset").html(as);
                        $('#id_dtl').html(tablesize)
                        for(s = 0; s<data.length; s++){
                          if(data[s].category!='Asset'){  
                        $("#"+data[s].item_id+'J' ).html('-');
                                 // var as = '<p>A</p>';
                          }else{
                           $("#"+data[s].item_id+'J').html('<div class="form-group"><input type="text" class="fixasst" id="'+data[s].item_id+'A" value="'+data[s].fixed_asset_group+'"  placeholder="Fix Asset" style="width:100%;">');
                           console.log('asas');
                        //  var as = '<p>n</p>'
                          }
                        }
                    }
                })
                $( ".fixasst" ).autocomplete({
              source: "<?php echo site_url('user/c_acc_item/get_fix/?');?>"
            });

            $( ".igroup" ).autocomplete({
              source: "<?php echo site_url('user/c_acc_item/get_igroup/?');?>"
            });
      
            $(".igroup").focus(function(){
          var id1 = $(this).attr("id");
       //   console.log(id);
//          console.log(val);

          $("#"+id1).keypress(function(e){
            var val1 = $(this).val();

            if(e.which ==13){
         //     console.log(id);
           //   console.log(val);
              $.ajax({
                type:"POST",
                url:'<?php echo site_url('user/c_acc_item/addgroup')?>',
                dataType:"JSON",
                data:{id1:id1,val1:val1,id_master_form:id_master_form},
                success:function(datam){
                  //location.reload();
                  $.ajax({
                    type:"POST",
                    url:'<?php echo site_url('user/c_acc_item/approve_btn')?>',
                    dataType:"JSON",
                    data:{id_master_form:id_master_form},
                    success:function(responser){
                      var jsonj = responser,
                        objj = JSON.parse(JSON.stringify(jsonj));
                        console.log(objj.countg);
                        if(objj.countg > 0 && objj.countf>0){
                        $('#submit_btnn').attr("disabled",true);
                      }else{
                        $('#submit_btnn').attr("disabled",false);
                      }
                    }
                  })
                }

              })
            }
          })

        });
        
        $(".fixasst").focus(function(){
          var ids = $(this).attr("id");
          var id = ids.substring(0, 9);

          console.log(id);
//          console.log(val);

          $("#"+ids).keypress(function(e){
            var val = $(this).val();

            if(e.which ==13){
         //     console.log(id);
           //   console.log(val);
              $.ajax({
                type:"POST",
                url:'<?php echo site_url('user/c_acc_item/addfixa')?>',
                dataType:"JSON",
                data:{id:id,val:val,id_master_form:id_master_form},
                success:function(dataf){
                  //location.reload();
                  $.ajax({
                    type:"POST",
                    url:'<?php echo site_url('user/c_acc_item/approve_btn')?>',
                    dataType:"JSON",
                    data:{id_master_form:id_master_form},
                    success:function(response){
                      console.log(response.length);
                      var json = response,
                        obj = JSON.parse(JSON.stringify(json));
                      if(obj.countg > 0 && obj.countf>0){
                        $('#submit_btnn').attr("disabled",true);
                      }else{
                        $('#submit_btnn').attr("disabled",false);
                      }
                    }
                  })
                }

              })
            }
          })

        });
		
            });
            $('#submit_btnn').on('click',function(){
              var id_master_form1 = $('#idmf').val();
              $('#submit_btnn').attr("disabled",true);
              $.ajax({
                type:'POST',
                url:'<?php echo site_url('user/c_acc_item/submit_item')?>',
                dataType:'JSON',
                data:{id_master_form1:id_master_form1},
                success:function(data){
             //   location.reload();   
             tampil_approval();
  
                $('div#notify').fadeIn('slow');
                        $('#notify').html('<div class="alert alert-success alert-dismissible fade show" role="alert">'+
                        '<strong></strong> Your Approval Succesful'+
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                      '<span aria-hidden="true">&times;</span></button></div>');         
                }, error: function(data){
            //console.log(data.responseText);
               //  location.reload();    
               tampil_approval();
          
                 $('div#notify').fadeIn('slow');
                        $('#notify').html('<div class="alert alert-success alert-dismissible fade show" role="alert">'+
                        '<strong></strong> Your Approval Succesful'+
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                      '<span aria-hidden="true">&times;</span></button></div>');

        }

              })
            })
            $('#reject_btn').on('click',function(){
              
              var id_master_form = $('#idmf').val();
               console.log(id_master_form);
               var command = prompt("Please enter your Comment", "");
             if (command == null) {
               // document.getElementById("rjc").innerHTML =
               // "Hello " + person + "! How are you today?";
               return
                }
              $('#reject_btn').attr("disabled",true);
              $.ajax({
                type:'POST',
                url:'<?php echo site_url('user/c_reject/reject_itema')?>',
                dataType:'JSON',
                data:{id_master_form:id_master_form,command:command},
                success:function(data){
             //   location.reload(); 
                $('div#notifyrj').fadeIn('slow');
                        $('#notifyrj').html('<div class="alert alert-danger alert-dismissible fade show" role="alert">'+
                        '<strong></strong> Your Reject Succesful'+
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                      '<span aria-hidden="true">&times;</span></button></div>');             
                }, error: function(data){
            //console.log(data.responseText);
               //  location.reload();       
                 $('div#notifyrj').fadeIn('slow');
                        $('#notifyrj').html('<div class="alert alert-danger alert-dismissible fade show" role="alert">'+
                        '<strong></strong> Your Reject Succesful'+
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                      '<span aria-hidden="true">&times;</span></button></div>');       

        }

              })
            })

		})

    </script>
    <?php }else{
    ?>
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

        $('#submit_item').click(function(){
            if(confirm("Apa anda yakin ingin Submit data ini")){
            var id_master_form = [];
            $(':checkbox:checked').each(function(i){
                id_master_form[i] = $(this).val();
            });
            if(id_master_form.length === 0){
                alert("Pilih minimal satu data");
            }else{
                $.ajax({
                    url:'<?php echo site_url('user/c_acc_item/approve_item')?>',
                    method:'POST',
                    data:{id_master_form:id_master_form},
                    success:function(){
                        for(var i=0; i<id_master_form.length; i++){
                            $('tr#'+id_master_form[i]+'').fadeOut('slow');
                        }
                        $('div#notify').fadeIn('slow');
                        $('#notify').html('<div class="alert alert-success alert-dismissible fade show" role="alert">'+
                        '<strong>Holy guacamole!</strong> Your Approval Succesful'+
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                      '<span aria-hidden="true">&times;</span></button></div>');
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
					url:'<?php echo site_url('user/c_acc_item/acc_assign')?>',
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
        var lvlhide = $('#lvlhid').val();
                $('#idmf').val(id_master_form);
              // $( ".prjjjn" ).autocomplete( "option", "appendTo", ".eventForm" );
        
                    $.ajax({
                    type: "POST",
                    url : '<?php echo site_url('user/c_acc_item/modal_item')?>',
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
                
                '<td> <div class="form-group">'+
                    data[i].item_group+
                 ' </div> '+                               
                  '</td>' +
                                '<td  >'+
                                  data[i].fixed_asset_group+
                                '</td>'+
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
                                '<td id="'+data[i].item_id+'S">'
                                '</tr>'
                        
                        $.ajax({
                          type:'POST',
                          url:'<?php echo site_url('user/c_acc_item/get_sizes')?>',
                          dataType:'JSON',
                          data:{idmid:idmid},
                          success:function(rsps){
                            for(s=0; s< rsps.length; s++){
                              console.log(rsps[s].size_name);
                              $('#'+rsps[s].id_master_item+'S').append('<p>'+rsps[s].size_name+'</p>');
                            }
                            
                          }
                         
                        })
                        }
                     
                        //$(".casset").html(as);
                        $('#id_dtl').html(tablesize);
                        
                    }
        
        });
		
            });
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
    <?php
    }
    ?>
 

</body>

</html>

