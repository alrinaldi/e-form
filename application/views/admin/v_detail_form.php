<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>IT-SERVICE</title>


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


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>





 

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
            <div class="card">
  <div class="card-header">
    Item List
  </div>
  <div class="card-body">
    <div id="resultText">

    </div>
 
    
      <form action="<?php echo base_url('admin/c_item_it/submit_item')?>" method="POST">
      <input type="hidden" name="id_master_form1" id="id_master_form1" value="<?php echo $id?>">
        <button type="submit" class="btn btn-primary" id="submit_apprl">Approve</button>           
        </form>

<p class="pt-3"></p>
    <table id="table_detail" class="table table-bordered table-hover">
    <thead style="background-color:orange !important;color:black" class="text-center font-weight-bold">
                  <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
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
                    <th>Item Group</th>
                    <th>Size</th>
                    <th>Fixes Asset Group</th>
                    <th>Product Category</th>
                    <th>Pilih Product Category</th>
                  </tr>
                  </thead>
                  <tbody>
                <?php
                foreach($data->result_array() as $i):
                ?>
                <tr>
                    <td><?php echo $i['item_id']?></td>
                    <td><?php echo $i['item_name']?></td>
                    <td><?php echo $i['product_type']?></td>
                    <td><?php echo $i['product_subtype']?></td>
                    <td><?php echo $i['category']?></td>
                    <td><?php echo $i['item_model_group']?></td>
                    <td><?php echo $i['inventory_unit']?></td>
                    <td><?php echo $i['purchase_unit']?></td>
                    <td><?php echo $i['sales_unit']?></td>
                    <td><?php echo $i['product']?></td>
                    <td><?php echo $i['project']?></td>
                    <td><?php echo $i['type']?></td>
                    <td><?php echo $i['wct']?></td>
                    <td>
                        <?php echo $i['item_group']?>
                    </td>
                    <td>
                    <a class="btn" data-toggle="modal" data-target="#ModalSize<?php echo $i['item_id'];?>"><span class="fa fa-eye"></span></a>
                    </td>
                    
                    <td>
                        <?php
                        if($i['category']=='Asset'){
                        ?>
                     <a class="btn" data-toggle="modal" data-target="#ModalAsset<?php echo $i['item_id'];?>"><span class="fa fa-pencil"></span></a>
                     <?php
                        }else{
                     ?>
                        -
                        <?php
                        }
                        ?>
                    </td>
                    <td id="<?php echo $i['item_id'].'p'?>">
                  <button class="btn btn-primary" data-target="#treem" data-toggle="modal" data-id="<?php echo $i['item_id'].'p'?>">Choose</button></td>
           <td>
                  </td>
                </tr>
                <?php
                endforeach;
                ?>
                </tbody >

  
                </table>
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
  
  <?php
										foreach($data->result_array() as $i):
											$item_id = $i['item_id'];
                                            $pcy = $i['product_category'];
                                            $id_master_form = $i['id_master_form'];
	?>  
  <div class="modal fade ModalGroup " id="ModalGroup<?php echo $item_id?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered  ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Detail Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('admin/c_item_it/edit_group')?>" method="post">
      <div class="modal-body">
      <h2>Item <span id="target13" style="display: none"></span></h2>
          <input type="hidden" name="item_id" id="item_id" value="<?php echo $item_id?>">
          <input type="hidden" name="id_master_form" id="id_master_form" value="<?php echo $id_master_form?>">
<select name="p_category" id="p_category" class="form-control">
<option value="<?php echo $pcy?>"><?php echo $pcy?></option>

<?php
foreach($group->result_array() as $g):
?>
<option value="<?php echo $g['NAME']?>"><?php echo $g['NAME']?></option>
<?php
endforeach;
?>
</select>         
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="btn_save">Create</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
endforeach;
?>


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

  <!-- container-scroller -->

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

  <!-- End custom js for this page-->
</body>
<script>

    /*  $.ajax({
url: "<?php echo site_url('admin/c_item_it/treev')?>",
method:'POST',
dataType: "json",      

success: function(data) 

{
  console.log('masuk1');
$('#treeview').treeview({data: data}
  );
},error:function(response){
  $('#treeview').treeview({
 
      data: response  
    
  }

  );
  console.log(response);
}  
  
});
*/
$(document).ready(function(){

//setting to hidden field
//fill data to tree  with AJAX call

$('#treem').on('show.bs.modal',function(ev){
var button =  $(ev.relatedTarget);
var itemid = button.data("id");
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
   $('#resultText').html(nameprc);
   $('#valprod').val(nameprc);

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
  data:{prodc:prodc},
  success:function(data1){
    
  }
})


})
})


});

</script>
<script>
    
		$(document).ready(function () {


$("#table_detail").DataTable({
"responsive": true,
"autoWidth": true,
});


/*
$('#btn_save').on('click',function(){
                $.ajax({
                    type:"POST",
                    url : "<?php echo site_url('user/c_acc_item/edit_item')?>",
                    dataType:"JSON",
                    data: $(".ModalGroup form").serialize(),
                    success : function(data){
                        $('[name="item_group"]').val("");
                        $('[name="item_id"]').val("");
                        $('[name="id_master_form"]').val("");
                        $('.ModalGroup<?php echo $item_id?>').modal('hide');
                    }
                })
            });
*/

            $('#submit_appr').on('click',function(){
                    var id_master_form = $('#id_master_form1').val();

                    $.ajax({
                        type:"POST",
                        url : "<?php echo site_url('user/c_acc_item/submit_item')?>",
                        dataType:"JSON",
                        data: {id_master_form:id_master_form},
                        success :function(data){

                        }
                    })
            })





});

</script>



</html>

