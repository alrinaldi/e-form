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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />


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
              <div id="tree-view">

</div>
                <div class="card-body">
                    <h4 class="card-title">List Item</h4>

        <p class="pt-3"></p>
                             <table id="table_item" class="table table-bordered table-hover">
                             <thead style="background-color:orange !important;color:black" class="text-center font-weight-bold">
                  <tr>
                    <th style="width: 20%;">Master Form Number</th>
                    <th sty>Requestor</th>
                    <th>Nama</th>
                    <th>Request Date</th>
                    <th>Time</th>
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
          <input type="hidden" class="id_master_form" id="id_master_form" name="id_master_form1">
    
  
      
        <p class="pt-3"></p>
                             <table id="table_detail" class="table table-bordered table-hover">
                             <thead style="background-color:orange !important;color:black" class="text-center font-weight-bold">
                  <tr>
                    <th>Item ID</th>
                    <th>Item Name</th>
                    <th>Product Category</th>
                    <th>Product Type</th>
                    <th>Product Subtype</th>
					<th>Category </th>
					<th>Item Model Group</th>
					<th>Inventory Unit</th>
					<th>Purchase Unit</th>
                    <th>Sales Unit</th>
                    <th>Product</th>
                    <th>Project</th>
                    <th>Type</th>
                    <th>Wct</th>
                    <th>Size</th>
                  </tr>
                  </thead>
                  <tbody id="tampil_detail">
         
                </tbody >

  
                </table>
                <button class="btn btn-primary float-right" id="submit_itemit">Approve</button>
                <button class="btn btn-danger float-right mr-3" id="reject_btn">Reject</button>


      </div>
    </form>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="treem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="valprod" id="valprod" class="valprod">
  <div id="treeview">

  </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save-category">Save</button>
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
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>

  <!-- End custom js for this page-->
  <script>
    		$(document).ready(function () {

        $('#treem').on('show.bs.modal',function(ev){
var button =  $(ev.relatedTarget);
var itemid = button.data("id");
var item_id = itemid.substring(0,9);
var idprd = item_id+'pd';
  console.log(itemid);
          $('#treeview').on('changed.jstree', function (e, data) {
    var i, j, r = [];
    // var state = false;
    for(i = 0, j = data.selected.length; i < j; i++) {
        r.push(data.instance.get_node(data.selected[i]).text);
    }
   // console.log($("#treeview").jstree("get_selected").text());
   var nameprc = r.join(', ');
   console.log(nameprc);
   //$('#resultText').html(nameprc);
   $('#valprod').val(nameprc);
   $('#'+idprd).html(nameprc);

$('#txttuser').val(r.join(','));
}).jstree({
            'plugins': ["wholerow","checkbox"],
            'core' : {
                "multiple" : true,
                'data' : {
                    "url" : "<?php echo site_url('admin/c_item_it/treev')?>",
                    "dataType" : "json" // needed only if you do not supply JSON headers
                }
            },
            'checkbox': {
                three_state: false,
                cascade: 'up'
            },
            'plugins': ["checkbox"]
        }
)

$('#save-category').on('click',function(){
 var prodc = $('#valprod').val();
$.ajax({
  type:'POST',
  url:'<?php echo site_url('admin/c_item_it/add_prodc')?>',
  dataType:'JSON',
  data:{prodc:prodc,item_id:item_id},
  success:function(data1){
                      $('#'+item_id).val(prodc);
                        $('[name="valprod"]').val("");
                        $('#treem').modal('hide');
  }
});


})
});
});

  </script>

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

        $('#reject_btn').click(function(){
       
       if(confirm("You Will Approve this Form?")){
   var id_master_form = [];
   $(':checkbox:checked').each(function(i){
    var id_master_form =  $('#id_master_form').val();
  
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
           url:'<?php echo site_url('user/c_reject/reject_itema')?>',
           method:'POST',
           data:{id_master_form:id_master_form,command:command},
           success:function(){
               for(var i=0; i<id_master_form.length; i++){
                   $('tr#'+id_master_form[i]+'').fadeOut('slow');
               }
              // location.reload();
              $('#staticBackdrop').modal('hide');

              tampil_approval();

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
            if(confirm("Apa anda yakin ingin Submit data ini")){
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
					url:'<?php echo site_url('admin/c_item_it/it_assign')?>',
					async: false,
					dataType: 'json',
					success: function (data) {
						var html = '';
                        var no = 1;
						for (i = 0; i < data.length; i++) {
                            html += '<tr id="' + data[i].id_master_form + '">' +
                                
								'<td>' + data[i].id_master_form + '</td>' +
								'<td>' + data[i].requestor + '</td>' +
                '<td>' + data[i].nama + '</td>' +
								'<td>' + data[i].created_date + '</td>' +
								'<td>' + data[i].jam + '</td>' +

                                 '<td>'+
                                 '<button class=" btn btn-primary" data-toggle="modal" data-target = "#staticBackdrop" data-id="'+data[i].id_master_form+'"><span class="fa fa-edit"></button>'+
                                
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
                    url : '<?php echo site_url('admin/c_item_it/detail_itemit')?>',
                    async:false,
                    dataType:'json',
                    data:{id_master_form:id_master_form},
                    success:function(data){
                        var tablesize='';
                        for(i = 0; i < data.length; i++ ){
                          var idmid = data[i].item_id;
                            tablesize += '<tr id="'+data[i].id+'">'+
                            '<td>' + data[i].item_id + '</td>' +
								'<td>' + data[i].item_name + '</td>' +
                '<td>' + '<p id="'+data[i].item_id+'pd">'+data[i].product_category+'</p>'+
                '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#treem" data-id="'+data[i].item_id+'p">'+
                '<span class="fa fa-edit"></span></button>'+
                '</td>'+
								'<td>' + data[i].product_type + '</td>' +
								'<td>' + data[i].product_subtype + '</td>' +
                                '<td>' + data[i].category + '</td>' +
                                '<td>' + data[i].item_model_group + '</td>' +
								'<td>' + data[i].inventory_unit + '</td>' +
								'<td>' + data[i].purchase_unit + '</td>' +
								'<td>' + data[i].sales_unit + '</td>' +
								'<td>' + data[i].product + '</td>' +
								'<td>' + data[i].project + '</td>' +
								'<td>' + data[i].type + '</td>' +
                                '<td>' + data[i].wct + '</td>' +
                                 '<td id="'+data[i].item_id+'s">'+
                                '</td>' +
                                '</tr>'
                          $.ajax({
                            type:"POST",
                            url:'<?php echo site_url('admin/c_item_it/get_sized')?>',
                            dataType:'JSON',
                            data:{idmid:idmid},
                            success:function(rsp){
                              for(s=0; s < rsp.length; s++ ){
                                $('#'+rsp[s].id_master_item+'s').append('<p>'+rsp[s].size_name+'</p>'); 
                              }
                              
                            }
                          });
                        }
                        $('#tampil_detail').html(tablesize)
                    }
                })
		
            });

            $('#submit_itemit').on('click',function(){
             var id_master_form1 =  $('#id_master_form').val();
              $.ajax({
                type:'POST',
                url:'<?php echo site_url('admin/c_item_it/submit_item')?>',
                data:{id_master_form1:id_master_form1},
                success:function(){
                  tampil_approval();
                }
              })
            })
          
            

		})

    

    </script>
 <script>

$(document).ready(function(){

      $.ajax({

url: "<?php echo site_url('admin/c_item_it/treev')?>",

type:"POST",

dataType: "json",      

success: function(data) 

{

$('#treeview li').treeview({data: data});

}  

});

    })



</script>

</body>

</html>

