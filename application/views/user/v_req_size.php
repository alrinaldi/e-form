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
            <div class="input-group">
              <div class="input-group-prepend">
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-lg-flex d-none">
                
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
        <div id="notify">

</div>
<div id="notifyrj">

</div>
         
          <div class="row">
            <div class="col-xl-12 grid-margin-lg-0 grid-margin stretch-card">
              <div class="card">
                  <div class="card-header">
                   <h4 class="font-weight-bold" > Form Master Item </h4>
                  </div>
                <div class="card-body">
                    <h1 class="card-title"></h1>

        
        <p class="pt-3"></p>
                             <table id="table_item" class="table table-bordered table-hover">
                  <thead style="background-color:orange !important;color:black" class="text-center font-weight-bold">
                  <tr>
                  <th style="width:5%">Select<input type="checkbox" class="form-control check_all" style="width:20px"/></th>
                <th>Requestor</th>
                <th>ID Master Form</th>
                <th>Date</th>
                <th>Time</th>
                <th>Detail</th>
                  </tr>
                  </thead>
                  <tbody id="tampil_data" class="text-center">
                  <tr>
		
				  </tr>
                  </tbody >
  
                </table>
                <p class="pt-3"></p>
                <div class="float-right">
                <button class="btn btn-primary" id="submit_item">Approve Size</button>
                <button class="btn btn-danger" id="reject_btn">Reject</button>

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
  <div class="modal fade " id="ModalDtl" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered  modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><span id="txm" style="display: none;"></span><span id="txd" style="display: none;"> Detail</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h4>Detail</h4>
        <table id="table_pm" class="table table-bordered table-hover mx-auto">
        <thead style="background-color:orange !important;color:black" class="text-center font-weight-bold">
            <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Size</th>
            </tr>
            </thead>
            <tbody id="data_size">
            
            </tbody>
        </table>
      <div class="modal-footer">
    

        <button type="button" class="btn btn-success" id="btn_save" style="display:none">Create</button>
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
            $('#subtype').change(function(){    // KETIKA ISI DARI FIEL 'Nrp' BERUBAH MAKA ......
  var subt = $('#subtype').val();  // AMBIL isi dari fiel Nrp masukkan variabel 'npmfromfield'
              if(subt=='Product'){
               $('#btn_save').show();
               $('#nexts').hide();
              }else{
                $('#btn_save').hide();
               $('#nexts').show();
              }
})
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
		var id = 0;

		$(document).ready(function () {

			tampil_item()
        
     $("#table_item").DataTable({
      "responsive": true,
      "autoWidth": true,
    });

    $('#table_sz').DataTable();



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
            var type = 'Master Size';
            $(':checkbox:checked').each(function(i){
                id_number[i] = $(this).val();
            });
            console.log(id_number.length);
            if(id_number.length === 0){
                alert("Pilih minimal satu data");
            }else{
                $.ajax({
                    url:'<?php echo site_url('user/c_req_size/item_u')?>',
                    method:"POST",
                    data:{id_number:id_number,type:type},
                    success:function(){

                    }
                    });

                $.ajax({
                    
                    url:'<?php echo site_url('user/c_workflow/approve')?>',
                    method:'POST',
                    data:{id_number:id_number,type:type},
                    success:function(){
                        for(var i=0; i<id_number.length; i++){
                            $('tr#'+id_number[i]+'').fadeOut('slow');
                        }
                        $('div#notify').fadeIn('slow');
                        $('#notify').html('<div class="alert alert-success alert-dismissible fade show" role="alert">'+
                        '<strong></strong> Your Approval Succesful'+
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

        $('#reject_btn').click(function(){
       
       if(confirm("You Will Approve this Form?")){
   var id_number = [];
   $(':checkbox:checked').each(function(i){
       id_number[i] = $(this).val();
  
   });
   console.log(id_number.length);
   if(id_number.length === 0){
       alert("Pilih minimal satu data");
   }else{
       var command = prompt("Please enter your Comment", "");
    if (command != null) {
      // document.getElementById("rjc").innerHTML =
      // "Hello " + person + "! How are you today?";
       }
       $.ajax({
           url:'<?php echo site_url('user/c_reject/reject_size')?>',
           method:'POST',
           data:{id_number:id_number,command:command},
           success:function(){
               for(var i=0; i<id_number.length; i++){
                   $('tr#'+id_number[i]+'').fadeOut('slow');
               }
              // location.reload();
              $('div#notifyrj').fadeIn('slow');
               $('#notifyrj').html('<div class="alert alert-danger alert-dismissible fade show" role="alert">'+
               '<strong></strong> Your Reject Succesful'+
               '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
             '<span aria-hidden="true">&times;</span></button></div>');
             tampil_item();
           },error:function(){
               //location.reload();
           }
       });
   }    
   } else{
       return false;
   }

})

        function size_input(){
          var sizet = document.getElementById('form1').subtype.value;
          if(sizet = 'Product'){

          }else{

          }
        }

      

			function tampil_item() {
				$.ajax({
					type: 'ajax',
					url:'<?php echo site_url('user/c_req_size/get_form')?>',
					async: false,
					dataType: 'json',
					success: function (data) {
						var html = '';
                        var no = 1;
                        var sub = 'Product Master';
						for (i = 0; i < data.length; i++) {
                            html += '<tr id="' + data[i].id + '">' +
                                '<td>'+
                                '<input type="checkbox" name="id_number[]" class="form-control chk_boxes1" value="'+data[i].id+'" style="width:20px"/>'+
                                '</td>'+
								'<td>' + data[i].nama + '</td>' +
								'<td>' + data[i].id + '</td>' +
                                '<td>' + data[i].created_date + '</td>' +
                                '<td>' + data[i].jam + '</td>' +
                                 '<td>'+
                                '<a class="btn btn-primary" data-toggle="modal" data-target="#ModalDtl" id="btn-edit" data-id="'+data[i].id+'"><span class="fa fa-edit"></span></a>'+
                                '</td>' +
                                '</tr>'
                                
                            
							no++;
						}

						$('#tampil_data').html(html);
					}

				});
            }

/*
            $('#staticBackdrop').on('show.bs.modal',function(event){
              $.ajax({
                  type:"ajax",
                  async:false,
                  url:"<?php echo site_url('user/c_master_size/get_item_size')?>",
                  dataType:"JSON",
                    success:function(data){
                        var table_product = '';
                        for(i=0; i < data.length; i++ ){
                            table_product += '<tr id="'+data[i].item+'">'+
                            '<td>'+data[i].item+'</td>'+
                            '<td>'+data[i].na+'</td>'+
                            '<td>'+
                            '<a class = "btn btn-primary" id="'+data[i].item+'">Pilih</a>'
                            '</td>'
                            '</tr>' 
                        }
                        $('#sizep').html(table_product);
                    }
              })
            })
*/
 

            $('#subtype').change(function(){
              var subt = $('#subtype').val();  // AMBIL isi dari fiel Nrp masukkan variabel 'npmfromfield'
                if(subt =='Produt'){

                }else{

                }
            })

          

            $('#btn_size').on('click',function(){
                $.ajax({
                    type:"POST",
                    url : "<?php echo site_url('user/c_master_size/save_size')?>",
                    dataType:"JSON",
                    data: $("#ModalSize form").serialize(),
                    success : function(data){
                        $('[name="size"]').val("");
                        $('#ModalSize').modal('hide');
                    }
                })
            });

            $('#btn_save').on('click',function(){
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

                
      
/*
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
    */


               $('#ModalDtl').on('show.bs.modal',function(event){
                var button = $(event.relatedTarget);
                var id = button.data('id');
                //var name = button.data('name');
                console.log(id);
               $.ajax({
                   type: "POST",
                   url :"<?php echo site_url('user/c_req_size/get_detail')?>",
                   dataType:"JSON",
                   data:{id:id},
                   success:function(data){
                    var size = '';
                    for(i = 0; i < data.length; i++){
                        //var szn = data[i].size.substr(15);
                       // var sznr =  szn.replace(':','');
                       var id_i = data[i].id;
                       var itm = data[i].itemid;
                       
                        size += '<tr id="'+data[i].itemid+'r1">'+
                        '<td>' + data[i].itemid + '</td>' +
                            '<td>'+ data[i].nama +'</td>' +
                            '<td id="'+data[i].id+'">'+ 
                             '</td>'+
                         '</tr>'

                         $.ajax({
                                     type:"POST",
                                     url: '<?php echo site_url('user/c_req_size/get_size_d')?>',
                                     dataType:'json',
                                     async:'false',
                                     data:{id_i:id_i},
                                     success:function(data1){
                                        //JSON.stringify(data1);

                                         for(s = 0; s < data1.length; s++ ){
                                            //JSON.stringify(data1[s].size_name) + '</br>'
                                            
                                            $("#"+data1[s].id_master).append("<p>"+data1[s].size +"</p>");

                                         

                                            console.log(data1[s].size);
                                         }
                                     }, error: function(response){
                                 console.log(response.responseText);
                                          }
                                 })
                    }
                    

                    $('#data_size').html(size)
                    $("#table_pm").DataTable()

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

    /*
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
*/

/*
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

*/


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

