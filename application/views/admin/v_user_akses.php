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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-perm">
New Akses</button> 
<p class="pt-3"></p>                
   <h4 class="card-title">List Item</h4>

                             <table id="table_item" class="table table-bordered table-hover">
                             <thead style="background-color:orange !important;color:black" class="text-center font-weight-bold">
                  <tr>
                    <th>User</th>
                    <th>Level</th>
                    <th>Akses</th>
                    

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
  <div class="modal fade " id="form-dtl" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered  modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Akses Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Add Akses</h4>
        <form action="" id="submit_aksses">
          <div class="form-row" id="inp_akses">

          </div>
          <div class="form-row">
            <div class="col">
              <label for="">Akses Form</label>
              <select name="sel_akses" id="sel_akses" class="form-control">
            <option value=""></option>
            <?php 
            foreach($per_form->result_array() as $p):
            ?>
              <option value="<?php echo $p['id_akses_form']?>"><?php echo$p['nama_akses_form']?></option>
              <?php
              endforeach;
              ?>              
              </select>
            </div>
            <div class="col">
              <label for="">Akses Group</label>
              <input type="text" class="form-control" name="a_group" id="a_group" readonly>
            </div>

          </div>
          <br>
              <button class="btn btn-primary" id="add_akses" type="submit"> Add Akses</button>


        </form>
        <hr>
    <table id="table_akses" class="table table-bordered table-hover">
      <thead>
        <tr>
        <th>Form Akses</th>
        <th>Form Group</th>
        <th>Action</th>
        </tr>
      </thead>
      <tbody id="data_akses">

      </tbody>
    </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade " id="add-perm" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered  modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Akses Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Add Akses</h4>
        <form action="<?php echo base_url('admin/c_akses/new_perm')?>" id="" method="POST">
         <div class="form-row">
           <div class="col">
             <label for=""> Department</label>
             <select name="p_dept" id="p_dept" class="form-control" required>
               <option value=""></option>
               <?php
               $qdept = $this->db->query("SELECT DISTINCT(dept) as dept FROM sstruktur_ymi ");
               foreach($qdept->result_array() as $qd):
               ?>
               <option value="<?php echo $qd['dept']?>"><?php echo $qd['dept']?></option>
               <?php
               endforeach;
               ?>
             </select>
             </div>
           <div class="col">
             <label for="">Level</label>
            <select name="p_lvl" id="p_lvl" class="form-control" required>
              <option value=""></option>
              <option value="Operator">Operator</option>
              <option value="Section Head">Section Head</option>
              <option value="Department Head">Department Head</option>
              <option value="Division Head">Division Head</option>
              <option value="Sys Admin">Sys Admin</option>
            </select>
            </div>
         </div>
          <div class="form-row">
            <div class="col">
              <label for="">Akses Form</label>
              <select name="p_form" id="p_form" class="form-control">
            <option value=""></option>
            <?php 
            foreach($per_form->result_array() as $p):
            ?>
              <option value="<?php echo $p['id_akses_form']?>"><?php echo$p['nama_akses_form']?></option>
              <?php
              endforeach;
              ?>              
              </select>
            </div>
            <div class="col">
              <label for="">Akses Group</label>
              <input type="text" class="form-control" name="p_group" id="p_group" readonly>
            </div>

          </div>
          <br>
              <button class="btn btn-primary"  type="submit"> Add Akses</button>


        </form>
        <hr>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

    $("#table_akses").DataTable({
      "resposive":true,
      "autoWidth":true,
    })


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
					url:'<?php echo site_url('admin/c_akses/tampil_akses')?>',
					async: false,
					dataType: 'json',
					success: function (data) {
						var html = '';
                        var no = 1;
                        var sub = 'Product Master';
						                for (i = 0; i < data.length; i++) {
                            html += '<tr id="' + data[i].id + '">' +
                    
                                '<td>' + data[i].dept + '</td>' +
                                '<td>' + data[i].level + '</td>' +
                								'<td>' +
							  '<button class="btn btn-xs btn-primary" style="padding-left: 10px;padding-right: 10px;" data-toggle="modal" data-target="#form-dtl" id="btn-edit" data-id="' + data[i].id + '" data-dept="'+data[i].dept+'" data-level = "'+data[i].level+'"> <i class="fa fa-eye"></i></button> ' +
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
                   data: $("#submit_akses form").serialize(), // Ambil semua data yang ada didalam tag form 
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

            $('#add_akses').on('click',function(){
                var dept = $('a_dept').val();
                var level = $('a_level').val();
                var akses_form = $('sel_akses').val();
                var akses_group = $('a_group').val()
       

                $.ajax({
                    type : "POST",
                    url : "<?php echo site_url('admin/c_akses/save_akses')?>",
                    dataType: "JSON",
                   // data : {digit1:digit1,digit2:digit2,digit3:digit3,itemname:itemname,ptype:ptype,subtype:subtype,category:category,itemmodel:itemmodel,inventunit:inventunit,purchunit:purchunit,salesunit:salesunit,product:product,project:project,type:type,wct:wct},
                   data: $("#form-dtl form").serialize(), // Ambil semua data yang ada didalam tag form 
                   success : function(data){
                        $('[name="a_dept"]').val("");
                        $('[name="a_level"]').val("");
                        $('[name="sel_akses"]').val("");
                        $('[name="a_group"]').val("");
                       
                //    $('#form-dtl').modal('hide');
                  //  tampil_item();
                    }
                })
            });


            

                
            	$('#form-dtl').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget);
				//var id_akses = button.data('id');
        var dept = button.data('dept');
        var level = button.data('level');
               // $('#edit_item').val(id_akses);
                $.ajax({
                    type: "POST",
                    url : '<?php echo site_url('admin/c_akses/akses_form')?>',
                    async:false,
                    dataType:'json',
                    data:{dept:dept,level:level},
                    success:function(data){
                        var tableakses='';
                        var input_akses='';
                        for(i = 0; i < data.length; i++ ){
                            tableakses += '<tr id="'+data[i].id_akses+'">'+
                            '<td>' + data[i].nama_akses_form + '</td>' +
                            '<td>' + data[i].nama_akses_group + '</td>' +
                            '<td>'+ 
                            '<button class="btn btn-xs btn-primary" style="padding-left: 10px;padding-right: 10px;" data-toggle="modal" data-target="#form-akses" id="btn-edit" data-id="' + data[i].id_akses + '"> <i class="fa fa-eye"></i></button> '
                             +
                            '</td>'+
                            '</tr>'
                        }

                       input_akses = '<div class="col">'+
                        '<label>'+'Department'+'</label>'+
                        '<input type="text" class="form-control" value="'+data[0].dept+'" name="a_dept" id="a_dept" readonly>'+
                        '</div>'+
                        '<div class="col">'+
                        '<label>'+'Level'+'</label>'+
                        '<input = type="text" class="form-control" value="'+data[0].level+'" name="a_level" id="a_level" readonly>'+
                        '</div>'
                        $('#inp_akses').html(input_akses)
                        $('#data_akses').html(tableakses)
                    }
                })
		
            });
            
            $('#sel_akses').change(function(){    // KETIKA ISI DARI FIEL 'Nrp' BERUBAH MAKA ......
  var sel_akses = $('#sel_akses').val();  // AMBIL isi dari fiel Nrp masukkan variabel 'npmfromfield'
  $.ajax({        // Memulai ajax
    method: "POST",      
    url: "<?php echo site_url('admin/c_akses/sel_group')?>",    // file PHP yang akan merespon ajax
    data: { sel_akses: sel_akses},   // data POST yang akan dikirim
  
    success:function( data ) { 
  // KETIKA PROSES Ajax Request Selesai
        var json = data,
        obj = JSON.parse(json);
        $('#a_group').val(obj.nama_akses_group);  // Isikan hasil dari ajak ke field 'nama' 

    }
 })
})

            
$('#p_form').change(function(){    // KETIKA ISI DARI FIEL 'Nrp' BERUBAH MAKA ......
  var sel_akses = $('#p_form').val();  // AMBIL isi dari fiel Nrp masukkan variabel 'npmfromfield'
  $.ajax({        // Memulai ajax
    method: "POST",      
    url: "<?php echo site_url('admin/c_akses/sel_group')?>",    // file PHP yang akan merespon ajax
    data: { sel_akses: sel_akses},   // data POST yang akan dikirim
  
    success:function( data ) { 
  // KETIKA PROSES Ajax Request Selesai
        var json = data,
        obj = JSON.parse(json);
        $('#p_group').val(obj.nama_akses_group);  // Isikan hasil dari ajak ke field 'nama' 

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

