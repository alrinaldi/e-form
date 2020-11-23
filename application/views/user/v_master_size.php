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
   
          <div class="row">
            <div class="col-xl-12 grid-margin-lg-0 grid-margin stretch-card">
              <div class="card">
                  <div class="card-header">
                   <h4 class="font-weight-bold" > Form Master Item </h4>
                  </div>
                <div class="card-body">
                    <h1 class="card-title"></h1>

                    <button type="button" class="btn btn-info font-weight-bold" data-toggle="modal" data-target="#staticBackdrop">+ Add New Size</button>
        
        <p class="pt-3"></p>
                             <table id="table_item" class="table table-bordered table-hover">
                  <thead style="background-color:orange !important;color:black" class="text-center font-weight-bold">
                  <tr>
                  <th style="width:5%">Select<input type="checkbox" class="form-control check_all" style="width:20px"/></th>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Size</th>
                    <th>Pilihan</th>
                  </tr>
                  </thead>
                  <tbody id="tampil_data" class="text-center">
                  <tr>
		
				  </tr>
                  </tbody >
  
                </table>
                <p class="pt-3"></p>
                <div class="float-right">
                <button class="btn btn-primary" id="submit_item">Submit Size</button>
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
  <div id="ModalDtl" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" id = "cls">×</button>
					<h5 class="modal-title">Add Size</h5>
				</div>
				<div class="modal-body">
					<form>
                        <input type="hidden" name="namase" id="namase" >
                        <input type="hidden" name="idime" id="idime">
            <a href='#' class="btn btn-primary" onclick="tambah_form(); return false;" >Add</a>

					<div class="form-row mx-auto">
                
                        <div class="col-6 mx-auto" id="">
                        <table id="table_sz" class="table table-bordered table-hover" style="height:50%">
                  <thead>
                  <tr>                    
                    <th>Size</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody id="data_sizee">
      
                  </tbody >
  
                </table>
                        </div>
                    </div>
					</form>
				</div>
				<div class="modal-footer">
					<button id="btn-updt" type="button" class="btn btn-sm btn-primary">Add Size</button>
				</div>
			</div>
		</div>
  </div>



  <div class="modal fade " id="staticBackdrop"  data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered  modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><span id="txm" style="display: none;">Item Number</span><span id="txd" style="display: none;">Item Detail</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h4>Size</h4>
        <table id="table_pm" class="table table-bordered table-hover mx-auto">
        <thead style="background-color:orange !important;color:black" class="text-center font-weight-bold">
            <tr>
                <th>Item Number</th>
                <th>Product Name</th>
                <th>Pilih</th>
            </tr>
            </thead>
            <tbody id="">
                <?php
                foreach($data->result_array() as $i):
                 ?>
                 <tr id="<?php echo $i['item'].'R';?>">
                <td><?php echo $i['item']?></td>
                <td><?php echo $i['na']?></td>
                <td><a class="btn btn-primary btn-plh"  data-toggle="modal" data-target="#ModalSize" data-id="<?php echo $i['item']?>" data-name="<?php echo $i['na']?>">Pilih</a></td>
                </tr>
                 <?php   
                endforeach;
                ?>
            </tbody>
        </table>
      <div class="modal-footer">
    

        <button type="button" class="btn btn-success" id="btn_save" style="display:none">Create</button>
      </div>
    </div>
  </div>
</div>




<div id="ModalSize" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
                <button type="button" class="close" id = "cls">×</button>
					<h5 class="modal-title">Add Size</h5>
				</div>
				<div class="modal-body">
					<form acion="#" id="fsize">
                        <input type="hidden" name="namas" id="namas" required>
                        <input type="hidden" name="idim" id="idim">
            <a href='#' class="btn btn-primary" onclick="tambah_form1(); return false;" >Add</a>

					<div class="form-row mx-auto">
                
                        <div class="col-6 mx-auto" id="">
                        <table id="table_sz" class="table table-bordered table-hover" style="height:50%">
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
				</div>
				<div class="modal-footer">
                    <button id="btn_size" type="submit" class="btn btn-sm btn-primary">Create Size</button>
                    <button id="btn-hd" type="button" class="btn btn-secondary" >Close</button>
                    </form>

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


  var target1=document.getElementById("data_sizee");
    var id_rand1;
    id_rand1 = Math.random().toString(36).substring(10);  
    var rand_inp1 = Math.random().toString(36).substring(11);   
    var tabel_row1=document.createElement("tr");
    var tabel_col1=document.createElement("td");
    var tabel_col12=document.createElement("td");

    var tambah1=document.createElement("input");
    var btnn1 = document.createElement("button");
    var icnn1 = document.createElement("i");
    var targetp1 = document.getElementById("data_sizee")
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
    var target=document.getElementById("data_sizee");
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
    tambah.setAttribute('required','');
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

    $('#table_pm').DataTable();
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
            console.log(id_number);
            if(id_number.length === 0){
                alert("Pilih minimal satu data");
            }else{
                $.ajax({
                    url:'<?php echo site_url('user/c_master_size/submit')?>',
                    method:'POST',
                    data:{id_number:id_number,type:type},
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

        function size_input(){
          var sizet = document.getElementById('form1').subtype.value;
          if(sizet = 'Product'){

          }else{

          }
        }

      

			function tampil_item() {
				$.ajax({
					type: 'ajax',
					url:'<?php echo site_url('user/c_master_size/tampil_size')?>',
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
								'<td>' + data[i].itemid + '</td>' +
								'<td>' + data[i].nama + '</td>' +
                                 '<td>'+
                                '<a class="btn btn-primary" data-toggle="modal" data-target="#ModalDtl" id="btn-edit" data-id="'+data[i].id+'"><span class="fa fa-edit"></span></a>'+
                                '</td>' +
								'<td>' +
								'<a class="btn btn-xs btn-danger del_item" style="padding-left: 10px;padding-right: 10px;"  id="' + data[i].id + '"> <i class="fa fa-trash"></i> </a>' +
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
 

            $('.del_item').on('click',function(e){
              var idim = $(this).attr('id');
              console.log(idim);
              if(confirm('Data will be Delete?')){
                $.ajax({
                  type:'POST',
                  url:'<?php echo site_url('user/c_master_size/delm_size')?>',
                  dataType:'JSON',
                  data:{idim:idim},
                  success:function(data){
                    tampil_item();
                    location.reload();
                  }
                });
              }else{
                return false;
              }
              
            })

            $('#subtype').change(function(){
              var subt = $('#subtype').val();  // AMBIL isi dari fiel Nrp masukkan variabel 'npmfromfield'
                if(subt =='Produt'){

                }else{

                }
            })

          $('#btn-hd').on('click',function(){
            $('#ModalSize').modal('hide');
          });
          $('#cls').on('click',function(){
            $('#ModalSize').modal('hide');
          });

            $('#fsize').on('submit',function(e){
             // var sizez = $('.size_a').val();
              //console.log(sizez);
              e.preventDefault();
                $.ajax({
                    type:"POST",
                    url : "<?php echo site_url('user/c_master_size/save_size')?>",
                    dataType:"JSON",
                    data: $("#ModalSize form").serialize(),
                    success : function(data){
                      console.log(data);
                      if(data=='sukses'){
                        $('[name="size"]').val("");
                        $('#ModalSize').modal('hide');
                        tampil_item();
                      }else{
                        alert("Size sudah ada");
                      $('[name="size"]').val("");
                     
                      }
                        
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


               $('#ModalSize').on('show.bs.modal',function(event){
                var button = $(event.relatedTarget);
                var id = button.data('id');
                var name = button.data('name');
                console.log(id);
               $.ajax({
                   type: "POST",
                   url :"<?php echo site_url('user/c_master_size/get_size')?>",
                   dataType:"JSON",
                   data:{id:id},
                   success:function(data){
                    var size = '';
                    for(i = 0; i < data.length; i++){
                        //var szn = data[i].size.substr(15);
                       // var sznr =  szn.replace(':','');
                        size += '<tr id="'+data[i].itemid+'r1">'+
                            '<td>' + data[i].size + '</td>' +
                            '<td>'+
                            '-' +
                             '</td>'+
                         '</tr>'
                    }
                    $('#data_size').html(size)
                    $('#namas').val(name);
                    $('#idim').val(id);
                   }

               })
               
               }); 

               $('#ModalDtl').on('show.bs.modal',function(event){
                var button = $(event.relatedTarget);
                var id = button.data('id');
              //  var name = button.data('name');
                console.log(id);
               $.ajax({
                   type: "POST",
                   url :"<?php echo site_url('user/c_master_size/get_size_e')?>",
                   dataType:"JSON",
                   data:{id:id},
                   success:function(data){
                    var size = '';
                    for(i = 0; i < data.length; i++){
                      //  var szn = data[i].size.substr(15);
                       // var sznr =  szn.replace(':','');
                        size += '<tr id="'+data[i].id+'">'+
                            '<td>' + data[i].size + '</td>' +
                            '<td>'+
                           '<a class="btn btn-xs btn-danger del_item" style="padding-left: 10px;padding-right: 10px;"  id="' + data[i].id + '"> <i class="fa fa-trash"></i> </a>' +
                        '</td>'+
                         '</tr>'
                    }
                    $('#data_sizee').html(size)
                   // $('#namase').val(name);
                    $('#idime').val(id);

                   }

               })
               
               }); 




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

                  
            $('#btn-updt').on('click',function(){
                  $.ajax({
                      type:"POST",
                      url:"<?php echo site_url('user/c_master_size/addsz')?>",
                      dataType:"JSON",
                      data:$('#ModalDtl form').serialize(),
                        success : function(data){
                            $('#ModalDtl').modal('hide');

                        }
                  })
               })

            

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

