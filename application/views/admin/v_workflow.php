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
      <?php $this->load->view('admin/v_nav')?>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
   
          <div class="row">
            <div class="col-xl-12 grid-margin-lg-0 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Add Flow</button>
                  <p class="pt-3"></p>
                    <h4 class="card-title">List Item</h4>

                             <table id="table_item" class="table table-bordered table-hover">
                             <thead style="background-color:orange !important;color:black" class="text-center font-weight-bold">
                  <tr>
                  <th><input type="checkbox" class="form-control check_all" style="width: 20px;"/></th>
                    <th>Approval Name</th>
                    <th>Level</th>
                    <th>Step</th>
                    <th>Action</th>

                  </tr>
                  </thead>
                  <tbody id="tampil_data">
                  <tr>
		
				  </tr>
                  </tbody >
  
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
  <div class="modal fade " id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered  modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Flow</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h2>Flow <span id="target13" style="display: none"></span></h2>
    <form action="" id=form1>
      <div class="form-group">
        <label id="target1">Approval:</label>
        <select class="form-control" name="approval" id="approval" required>
            <option value=""></option>
            <option value="Section Head">Section Head</option>
            <option value="Department Head">Department Head</option>
            <option value="Division Head">Division Head</option>
            <option value="Bord Of Director">Bord Of Director</option>
            <?php
            $seksi = $this->db->query("SELECT * FROM sstruktur_ymi");
            foreach($seksi->result_array() as $k):
            ?>
            <option value="<?php echo $k['costcenter'];?>"><?php echo $k['costcenter'].'-'.$k['seksi'];?></option>
            <?php
            endforeach;
            ?>
        </select>
      </div>
      <div class="form-group">
        <label id="target1">Level:</label>
        <select class="form-control" name="level" id="level" required>
            <option value=""></option>
            <option value="Section Head">Section Head</option>
            <option value="Department Head">Department Head</option>
            <option value="Division Head">Division Head</option>
            <option value="Bord Of Director">Bord Of Director</option>
        </select>
      </div>
      <div class="form-group">
        <label id="ldigit2">Step:</label>
      <select class="form-control"  name="step" id="step" required>
            <option value=""></option>
            <?php for($i=1; $i<11; $i++){?>
            <option value="<?php echo 'Approval'.' '.$i?>"><?php echo 'Approval'.' '.$i?></option>
            <?php
            }
            ?>
    </select>
      </div>
      
      <div id="result"></div>
      </div>
    </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btn_save" disabled>Create</button>
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
                $.ajax({
                    url:'<?php echo site_url('admin/c_master_item/submit_item')?>',
                    method:'POST',
                    data:{id_number:id_number},
                    success:function(){
                        for(var i=0; i<id_number.length; i++){
                            $('tr#'+id_number[i]+'').fadeOut('slow');
                        }
                        tampil_item();
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
					url:'<?php echo site_url('admin/c_workflow/tampil_workflow_item')?>',
					async: false,
					dataType: 'json',
					success: function (data) {
						var html = '';
                        var no = 1;
                        var sub = 'Product Master';
						for (i = 0; i < data.length; i++) {
                            html += '<tr id="' + data[i].id + '">' +
                                '<td>'+
                                '<input type="checkbox" name="id_app[]" class="form-control chk_boxes1" value="'+data[i].id+'" style="width:20px"/>'+
                                '</td>'+
                                '<td>' + data[i].flow_name + '</td>' +
                                '<td>' + data[i].level + '</td>' +
								'<td>' + data[i].step + '</td>' +
								'<td>' +
								'<button class="btn btn-xs btn-primary" style="padding-left: 10px;padding-right: 10px;" data-toggle="modal" data-target="#form-edit" id="btn-edit" data-id="' + data[i].id_tamu + '"> <i class="fa fa-pencil"></i></button> ' +
								'<button class="btn btn-xs btn-danger" style="padding-left: 10px;padding-right: 10px;" data-toggle="modal" data-target="#form-hapus" data-id="' + data[i].id_tamu + '"> <i class="fa fa-trash"></i> </button>' +
								'</td>' +
                                '</tr>'
                            
							no++;
						}
						$('#tampil_data').html(html);
					}

				});
            }


            $('#step').click(function(){
                var step = $('#step').val();
                if(step==0){
                    $('#result').text('');
                }else{
                    $.ajax({
                        url:'<?php echo site_url('admin/c_workflow/cek_step')?>',
                        type:'POST',
                        data: 'step='+step,
                        success:function(data){
                            if(data>0){
                                $('#result').text('Step tidak tersedia');
                                document.getElementById("btn_save").disabled = true;
                            }else{
                                $('#result').text('Step Tersedia');
                                document.getElementById("btn_save").disabled = false;
                            }

                        }
                    })
                }
            })




            $('#btn_save').on('click',function(){
                var approval = $('approval').val();
                var step = $('step').val();
                var level = $('level').val();
       

                $.ajax({
                    type : "POST",
                    url : "<?php echo site_url('admin/c_workflow/save_flow')?>",
                    dataType: "JSON",
                   // data : {digit1:digit1,digit2:digit2,digit3:digit3,itemname:itemname,ptype:ptype,subtype:subtype,category:category,itemmodel:itemmodel,inventunit:inventunit,purchunit:purchunit,salesunit:salesunit,product:product,project:project,type:type,wct:wct},
                   data: $("#staticBackdrop form").serialize(), // Ambil semua data yang ada didalam tag form 
                   success : function(data){
                        $('[name="approval"]').val("");
                        $('[name="step"]').val("");
                        $('[id="result"]').val("");
                        $('[name="level"]').val("");
                       
                    $('#staticBackdrop').modal('hide');
                    tampil_item();
                    }
                })
            });

                
            	$('#Modaledit').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget);
				var id_master_item = button.data('id');
                $('#edit_item').val(id_master_item);
                
                $.ajax({
                    type: "POST",
                    url : '<?php echo site_url('admin/c_workflow/tampil_size')?>',
                    async:false,
                    dataType:'json',
                    data:{id_master_item:id_master_item},
                    success:function(data){
                        var tablesize='';
                        for(i = 0; i < data.length; i++ ){
                            tablesize += '<tr id="'+data[i].id+'">'+
                            '<td>' + data[i].size_name + '</td>' +
                            '</tr>'
                        }
                        $('#data_size').html(tablesize)
                    }
                })
		
            });
            

		})

    </script>
    <script>
           $(document).ready(function(){


           });
    </script>
</body>

</html>

