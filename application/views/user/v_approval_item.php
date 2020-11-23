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
    </nav>    <!-- partial -->
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
          <div class="row">
            <div class="col-xl-12 grid-margin-lg-0 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <h1 class="card-title"><h3> List Item </h3></h1>
        <?php $deptfnc=$this->session->userdata('dept')?>
        <input type="hidden" id="<?php $deptfnc?>" >

        <p class="pt-3"></p>
                             <table id="table_item" class="table table-bordered table-hover">
                             <thead style="background-color:orange !important;color:black" class="text-center font-weight-bold">
                  <tr>
                  <th style="width:10px"><input type="checkbox" class="form-control check_all" style="width:20px"/></th>
                    <th style="width:20%;"> <h6>Master Form Number</h6></th>
                    <th><h6>Workflow Status</h6></th>
                    <th> <h6>Requestor</h6></th>
                    <th><h6>Name</h6></th>
                    <th><h6>Request Date</h6></th>
                    <th><h6>Time</h6></th>
                    <th><h6>Detail</h6></th>
                  </tr>
                  </thead>
                  <tbody id="tampil_data" class="text-center">
            
                  </tbody>
  
                </table>
                <p class="pt-3"></p>
                <?php
                $fn = $this->session->userdata('level');
        $cekappr = $this->db->query("SELECT * FROM workflow_item where level = '$fn'");
        $cappr = $cekappr->num_rows();
        if($cappr>0){
        ?>
        <button class="btn btn-primary float-right " id="submit_item">Approve</button>
        <button class="btn btn-danger float-right mr-5" id="reject_item">Reject</button>
 
        <?php
        }else{
       ?>
        <button class="btn btn-primary float-right" id="submit_item" disabled>Approve</button>
        <?php
        }
        ?>
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
  <div class="modal-dialog modal-dialog modal-dialog-centered  " style="max-width: 100%;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Detail Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h2>Item <span id="target13" style="display: none"></span></h2>
      <form action="">
          <input type="hidden" class="id_master_form" id="id_master_form">
      
        <p class="pt-3"></p>
                             <table id="table_detail" class="table table-bordered table-hover">
                             <thead style="background-color:orange !important;color:black" class="text-center font-weight-bold">
                  <tr>
                    <th style="width:23%">Item</br>
                         Name</th>
                    <th style="width:20px">Product </br>
                         Type</th>
                    <th style="width:20px">Product  </br> 
                        Subtype</th>
					<th style="width:20px">Category </th>
					<th style="width:20px">Item Model  </br>
                         Group</th>
					<th style="width:20px">Inventory  </br>
                          Unit</th>
                          <?php if($this->session->userdata('dept')!='FINANCE ACCOUNTING & IT DIVISION'){?>
					<th style="width:20px">Purchase  </br>
                         Unit</th>
                    <th style="width:20px">Sales  </br>
                         Unit</th>
                          <?php
                        }else{?>
    					<th style="width:20px">Project  </br>
                         </th>
                    <th style="width:20px">Item Group  </br>
                        </th>
                        <?php }
                        ?>
                    <th style="width:20px">Product</th>
                    <th style="width:20px">Type</th>
                    <th style="width:20px">Wct</th>
                    <th>Size</th>
                  </tr>
                  </thead>
                  <tbody id="tampil_detail">
         
                </tbody >

  
                </table>
      </div>
    </form>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<p id="rjc"></p>

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

 
  <?php if($this->session->userdata('level')=='Section Head') {?>
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

        $('#reject_item').click(function(){
       
                if(confirm("You Will Approve this Form?")){
            var id_master_form = [];
            $(':checkbox:checked').each(function(i){
                id_master_form[i] = $(this).val();
           
            });
            console.log(id_master_form.length);
            if(id_master_form.length === 0){
                alert("Pilih minimal satu data");
            }else{
                var command = prompt("Please enter your Comment", "");
             if (command != null) {
               // document.getElementById("rjc").innerHTML =
               // "Hello " + person + "! How are you today?";
                }
                $.ajax({
                    url:'<?php echo site_url('user/c_reject/reject_item')?>',
                    method:'POST',
                    data:{id_master_form:id_master_form,command:command},
                    success:function(){
                        for(var i=0; i<id_master_form.length; i++){
                            $('tr#'+id_master_form[i]+'').fadeOut('slow');
                        }
                       // location.reload();
                       $('div#notifyrj').fadeIn('slow');
                        $('#notifyrj').html('<div class="alert alert-danger alert-dismissible fade show" role="alert">'+
                        '<strong></strong> Your Reject Succesful'+
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                      '<span aria-hidden="true">&times;</span></button></div>');
                    },error:function(){
                        //location.reload();
                    }
                });
            }    
            } else{
                return false;
            }

        })

        $('#submit_item').click(function(){
            if(confirm("You Will Approve this Form?")){
            var id_master_form = [];
            $(':checkbox:checked').each(function(i){
                id_master_form[i] = $(this).val();
            });
            console.log(id_master_form.length);
            if(id_master_form.length === 0){
                alert("Pilih minimal satu data");
            }else{
                $.ajax({
                    url:'<?php echo site_url('user/c_approval_sec/approve_item')?>',
                    method:'POST',
                    data:{id_master_form:id_master_form},
                    success:function(){
                        for(var i=0; i<id_master_form.length; i++){
                            $('tr#'+id_master_form[i]+'').fadeOut('slow');
                        }
                       // location.reload();
                       $('div#notify').fadeIn('slow');
                        $('#notify').html('<div class="alert alert-success alert-dismissible fade show" role="alert">'+
                        '<strong></strong> Your Approval Succesful'+
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                      '<span aria-hidden="true">&times;</span></button></div>');
                    },error:function(){
                        //location.reload();
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
					url:'<?php echo site_url('user/c_approval_sec/approval_req')?>',
					async: false,
					dataType: 'json',
					success: function (data) {
						var html = '';
                        var no = 1;
						for (i = 0; i < data.length; i++) {
                            html += '<tr id="' + data[i].id_master_form + '">' +
                                '<td>'+
                                '<input type="checkbox" name="id_master_form[]" class="form-control chk_boxes1" value="'+data[i].id_master_form+'" style="width:20px;"/>'+
                                '</td>'+
								'<td>' + data[i].id_master_form + '</td>' +
                                '<td>' + data[i].workflow_status + '</td>' +
								'<td>' + data[i].requestor + '</td>' +  
                '<td>' + data[i].nama + '</td>' +   
                 '<td>' + data[i].created_date + '</div>' +
                 '<td>' + data[i].jam + '</div>' +

                                 '<td>'+
                                '<a class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" id="btn-edit" data-id="'+data[i].id_master_form+'"><span class="fa fa-edit"></span></a>'+
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

 
            	$('#staticBackdrop').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget);
				var id_master_form = button.data('id');
                $('#id_master_form').val(id_master_form);
                
                $.ajax({
                    type: "POST",
                    url : '<?php echo site_url('user/c_approval_sec/detail_item')?>',
                    async:false,
                    dataType:'json',
                    data:{id_master_form:id_master_form},
                    success:function(data){
                        var tablesize='';
                        for(i = 0; i < data.length; i++ ){
                            var id_i = data[i].item_id;
                            console.log(id_i);
                            tablesize += '<tr id="'+data[i].id+'">'+
								'<td>' + data[i].item_name + '</td>' +
								'<td class="text-center">' + data[i].product_type + '</td>' +
								'<td class="text-center">' + data[i].product_subtype + '</td>' +
                                '<td class="text-center">' + data[i].category + '</td>' +
                                '<td class="text-center">' + data[i].item_model_group + '</td>' +
								'<td class="text-center">' + data[i].inventory_unit + '</td>' +
								'<td class="text-center">' + data[i].purchase_unit + '</td>' +
								'<td class="text-center">' + data[i].sales_unit + '</td>' +
								'<td class="text-center">' + data[i].product + '</td>' +
								'<td class="text-center">' + data[i].type + '</td>' +
                                '<td class="text-center">' + data[i].wct + '</td>' +
                                '<td id="'+data[i].item_id+'">'+
                               '</td>' +
                                '</tr>'
                                $.ajax({
                                     type:"POST",
                                     url: '<?php echo site_url('user/c_approval_sec/get_size_d')?>',
                                     dataType:'json',
                                     data:{id_i:id_i},
                                     success:function(data1){
                                        //JSON.stringify(data1);

                                         for(s = 0; s < data1.length; s++ ){
                                             var nm = data1[s].size_name;
                                            //JSON.stringify(data1[s].size_name) + '</br>'
                                           $("#"+id_i).append("<p>"+nm+"</p>");
                                           
                                            console.log(data1[s].size_name);
                                         }
                                     }, error: function(response){
            console.log(response.responseText);
        }
                                 })
                        }
                        $('#tampil_detail').html(tablesize)
                    }
                })
		
            });
            

		})

    </script>
    <?php
  }
    ?>

    <?php if($this->session->userdata('level')=='Department Head') {?>
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

$('#reject_item').click(function(){
       
       if(confirm("You Will Approve this Form?")){
   var id_master_form = [];
   $(':checkbox:checked').each(function(i){
       id_master_form[i] = $(this).val();
  
   });
   console.log(id_master_form.length);
   if(id_master_form.length === 0){
       alert("Pilih minimal satu data");
   }else{
       var command = prompt("Please enter your Comment", "");
    if (command != null) {
      // document.getElementById("rjc").innerHTML =
      // "Hello " + person + "! How are you today?";
       }
       $.ajax({
           url:'<?php echo site_url('user/c_reject/reject_item')?>',
           method:'POST',
           data:{id_master_form:id_master_form,command:command},
           success:function(){
               for(var i=0; i<id_master_form.length; i++){
                   $('tr#'+id_master_form[i]+'').fadeOut('slow');
               }
              // location.reload();
              $('div#notifyrj').fadeIn('slow');
               $('#notifyrj').html('<div class="alert alert-danger alert-dismissible fade show" role="alert">'+
               '<strong></strong> Your Reject Succesful'+
               '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
             '<span aria-hidden="true">&times;</span></button></div>');
           },error:function(){
               //location.reload();
           }
       });
   }    
   } else{
       return false;
   }

})

$('#submit_item').click(function(){
    if(confirm("You will Approve this Form?")){
    var id_master_form = [];
    $(':checkbox:checked').each(function(i){
        id_master_form[i] = $(this).val();
    });
    console.log(id_master_form.length);
    if(id_master_form.length === 0){
        alert("Pilih minimal satu data");
    }else{
        $.ajax({
            url:'<?php echo site_url('user/c_approval_dept/approve_item')?>',
            method:'POST',
            data:{id_master_form:id_master_form},
            success:function(){
                for(var i=0; i<id_master_form.length; i++){
                    $('tr#'+id_master_form[i]+'').fadeOut('slow');
                }
                $('div#notify').fadeIn('slow');
                        $('#notify').html('<div class="alert alert-success alert-dismissible fade show" role="alert">'+
                        '<strong></strong> Your Approval Succesful'+
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
            url:'<?php echo site_url('user/c_approval_dept/approval_req')?>',
            async: false,
            dataType: 'json',
            success: function (data) {
                var html = '';
                var no = 1;
                for (i = 0; i < data.length; i++) {
                    html += '<tr id="' + data[i].id_master_form + '">' +
                        '<td>'+
                        '<input type="checkbox" name="id_master_form[]" class="form-control chk_boxes1" value="'+data[i].id_master_form+'" style="width:20px"/>'+
                        '</td>'+
                        '<td>' + data[i].id_master_form + '</td>' +
                        '<td>' + data[i].workflow_status + '</td>' +
                        '<td>' + data[i].requestor + '</td>' +
                        '<td>' + data[i].nama + '</td>' +
                        '<td>' + data[i].created_date + '</div>' +
                        '<td>' + data[i].jam + '</div>' +
                         '<td>'+
                        '<a class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" id="btn-edit" data-id="'+data[i].id_master_form+'"><span class="fa fa-edit"></span></a>'+
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
            url : "<?php echo site_url('user/c_approval_dept/save_size')?>",
            dataType:"JSON",
            data: $("#Modaledit form").serialize(),
            success : function(data){
                $('[name="size"]').val("");
                $('#Modaledit').modal('hide');
            }
        })
    });


        $('#staticBackdrop').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id_master_form = button.data('id');
    
        $('#id_master_form').val(id_master_form);
        
        $.ajax({
            type: "POST",
            url : '<?php echo site_url('user/c_approval_dept/detail_item')?>',
            async:false,
            dataType:'json',
            data:{id_master_form:id_master_form},
            success:function(data){
                var tablesize='';
                for(i = 0; i < data.length; i++ ){
                    var id_i = data[i].item_id;
                    tablesize += '<tr id="'+data[i].id+'">'+
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
                         '<td id="'+data[i].item_id+'">'+
                        '</td>' +
                        '</tr>'
                        $.ajax({
                                     type:"POST",
                                     url: '<?php echo site_url('user/c_approval_dept/get_size_d')?>',
                                     dataType:'json',
                                     data:{id_i:id_i},
                                     success:function(data1){
                                        //JSON.stringify(data1);

                                         for(s = 0; s < data1.length; s++ ){
                                             var nm = data1[s].size_name;
                                            //JSON.stringify(data1[s].size_name) + '</br>'
                                           $("#"+id_i).append("<p>"+nm+"</p>");
                                           
                                            console.log(data1[s].size_name);
                                         }
                                     }, error: function(response){
            console.log(response.responseText);
        }
                                 })

                }
                $('#tampil_detail').html(tablesize)
            }
        })

    });
    

})
    </script>
    <?php   
}
    ?>
<?php if($this->session->userdata('level')=='Division Head') {?>
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

$('#reject_item').click(function(){
       
       if(confirm("You Will Approve this Form?")){
   var id_master_form = [];
   $(':checkbox:checked').each(function(i){
       id_master_form[i] = $(this).val();
  
   });
   console.log(id_master_form.length);
   if(id_master_form.length === 0){
       alert("Pilih minimal satu data");
   }else{
       var command = prompt("Please enter your Comment", "");
    if (command != null) {
      // document.getElementById("rjc").innerHTML =
      // "Hello " + person + "! How are you today?";
       }
       $.ajax({
           url:'<?php echo site_url('user/c_reject/reject_item')?>',
           method:'POST',
           data:{id_master_form:id_master_form,command:command},
           success:function(){
               for(var i=0; i<id_master_form.length; i++){
                   $('tr#'+id_master_form[i]+'').fadeOut('slow');
               }
              // location.reload();
              $('div#notifyrj').fadeIn('slow');
               $('#notifyrj').html('<div class="alert alert-danger alert-dismissible fade show" role="alert">'+
               '<strong></strong> Your Reject Succesful'+
               '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
             '<span aria-hidden="true">&times;</span></button></div>');
           },error:function(){
               //location.reload();
           }
       });
   }    
   } else{
       return false;
   }

})

$('#submit_item').click(function(){
    if(confirm("You will approve this Form?")){
    var id_master_form = [];
    $(':checkbox:checked').each(function(i){
        id_master_form[i] = $(this).val();
    });
    console.log(id_master_form.length);
    if(id_master_form.length === 0){
        alert("Pilih minimal satu data");
    }else{
        $.ajax({
            url:'<?php echo site_url('user/c_approval_div/approve_item')?>',
            method:'POST',
            data:{id_master_form:id_master_form},
            success:function(){
                for(var i=0; i<id_master_form.length; i++){
                    $('tr#'+id_master_form[i]+'').fadeOut('slow');
                }
                $('div#notify').fadeIn('slow');
                        $('#notify').html('<div class="alert alert-success alert-dismissible fade show" role="alert">'+
                        '<strong></strong> Your Approval Succesful'+
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
            url:'<?php echo site_url('user/c_approval_div/approval_req')?>',
            async: false,
            dataType: 'json',
            success: function (data) {
                var html = '';
                var no = 1;
                for (i = 0; i < data.length; i++) {
                    html += '<tr id="' + data[i].id_master_form + '">' +
                        '<td>'+
                        '<input type="checkbox" name="id_master_form[]" class="form-control chk_boxes1" value="'+data[i].id_master_form+'" style="width:20px;"/>'+
                        '</td>'+
                        '<td>' + data[i].id_master_form + '</td>' +
                        '<td>' + data[i].workflow_status + '</td>' +
                        '<td>' + data[i].requestor + '</td>' +
                        '<td>' + data[i].nama + '</td>' +
                        '<td>' + data[i].created_date + '</td>' +
                        '<td>' + data[i].jam + '</td>' +

                         '<td>'+
                        '<a class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" id="btn-edit" data-id="'+data[i].id_master_form+'"><span class="fa fa-edit"></span></a>'+
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
            url : "<?php echo site_url('user/c_approval_div/save_size')?>",
            dataType:"JSON",
            data: $("#Modaledit form").serialize(),
            success : function(data){
                $('[name="size"]').val("");
                $('#Modaledit').modal('hide');
            }
        })
    });


        $('#staticBackdrop').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id_master_form = button.data('id');
        $('#id_master_form').val(id_master_form);
        
        $.ajax({
            type: "POST",
            url : '<?php echo site_url('user/c_approval_div/detail_item')?>',
            async:false,
            dataType:'json',
            data:{id_master_form:id_master_form},
            success:function(data){
                var tablesize='';
                for(i = 0; i < data.length; i++ ){
                    var id_i = data[i].item_id
                    tablesize += '<tr id="'+data[i].id+'">'+
                        '<td>' + data[i].item_name + '</td>' +
                        '<td>' + data[i].product_type + '</td>' +
                        '<td>' + data[i].product_subtype + '</td>' +
                        '<td>' + data[i].category + '</td>' +
                        '<td>' + data[i].item_model_group + '</td>' +
                        '<td>' + data[i].inventory_unit + '</td>' +
                        '<td>' + data[i].project + '</td>' +
                        '<td>' + data[i].item_group + '</td>' +
                        '<td>' + data[i].product + '</td>' +
                        '<td>' + data[i].type + '</td>' +
                        '<td>' + data[i].wct + '</td>' +
                         '<td id="'+data[i].item_id+'">'+
                        '</td>' +
                        '</tr>'
                        $.ajax({
                                     type:"POST",
                                     url: '<?php echo site_url('user/c_approval_div/get_size_d')?>',
                                     dataType:'json',
                                     data:{id_i:id_i},
                                     success:function(data1){
                                        //JSON.stringify(data1);

                                         for(s = 0; s < data1.length; s++ ){
                                             var nm = data1[s].size_name;
                                            //JSON.stringify(data1[s].size_name) + '</br>'
                                           $("#"+id_i).append("<p>"+nm+"</p>");
                                           
                                            console.log(data1[s].size_name);
                                         }
                                     }, error: function(response){
            console.log(response.responseText);
        }
                                 })
                }
                $('#tampil_detail').html(tablesize)
            }
        })

    });
    

})
    </script>
    <?php
}
?></body>

</html>

