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
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


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
        <div class="content-wrapper">
            <div class="row">
            <div class="card">
  <div class="card-header">
    Item List
  </div>
  <div class="card-body">
      <?php
      
      $ccekitem = $cekitem->num_rows();
      if($ccekitem > 0 && $this->session->userdata('level')=='Section Head'){
      ?>
        <button type="submit" class="btn btn-primary" id="submit_apprl" disabled>Submit</button>           
      <?php
      }else if($cekpitem->num_rows() != $cekitemn->num_rows()){    
      ?>
        <button type="submit" class="btn btn-primary" id="submit_apprl" disabled>Approve</button>
      <?php }else{
          ?>           
      <form action="<?php echo base_url('user/c_item_budget/aprv_item')?>" method="POST">
      <input type="hidden" name="id_master_form1" id="id_master_form1" value="<?php echo $id?>">
        <button type="submit" class="btn btn-primary" id="submit_apprl">Approve</button>           
        </form>
<?php
}
?>
<p class="pt-3"></p>
    <table id="table_detail" class="table table-bordered table-hover">
    <thead style="background-color:orange !important;color:black" class="text-center font-weight-bold" >
                  <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th style="width:40%">Projet</th>
                    <th>Product Type</th>
                    <th>Product Subtype</th>
					<th style="width:10px">Category </th>
					<th>Item Model Group</th>
          <th style="width:10px">Inventory Unit</th>
          <th style="width:30%">Size</th>

                    <th>Item Group</th>
                    <th>Type</th>
                    <th>Wct</th>
                    <th>Fixes Asset Group</th>
                  </tr>
                  </thead>
                  <tbody>
                <?php
                foreach($data->result_array() as $i):
                ?>
                <tr class="itm" id="itmi">

                    <td><?php echo $i['item_id']?></td>
                    <td><?php echo $i['item_name']?></td>
                    <td>
                    <div class="form-group">
                    <input type="text" class="form-control prjjjn" id="<?php echo $i['item_id']?>" value="<?php echo $i['project']?>"  placeholder="Project" style="width:100%;">
                  </div>
                </td>
                    <td><?php echo $i['product_type']?></td>
                    <td><?php echo $i['product_subtype']?></td>
                    <td><?php echo $i['category']?></td>
                    <td><?php echo $i['item_model_group']?></td>
                    <td><?php echo $i['inventory_unit']?></td>
                    <td>
                    <?php
                      $idi = $i['item_id'];
                      $szs = $this->db->query("SELECT * FROM size_item where id_master_item = '$idi'");
                      foreach($szs->result_array() as $sz ):
                        echo $sz['size_name'];
                        echo '</br>';
                      endforeach;
                      ?>
                  </td>
                    <td><?php echo $i['item_group']?></td>
                    <td><?php echo $i['type']?></td>
                    <td><?php echo $i['wct']?></td>      
                   
                    <td>
                    <?php echo $i['fixed_asset_group']?>

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
                                            $cproj = $i['project'];
                                            $id_master_form = $i['id_master_form'];
	?>  
  <div class="modal fade ModalPrj " id="ModalPrj<?php echo $item_id?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered  ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Detail Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('user/c_item_budget/edit_budget')?>" method="post">
      <div class="modal-body">
      <h2>Budget <span id="target13" style="display: none"></span></h2>
          <input type="hidden" name="item_id" id="item_id" value="<?php echo $item_id?>">
          <input type="hidden" name="id_master_form" id="id_master_form" value="<?php echo $id_master_form?>">
<select name="prjj" id="prjj" class="form-control">
<option value="<?php echo $cproj?>"><?php echo $cproj?></option>
<?php
foreach($group->result_array() as $g):
?>
<option value="<?php echo $g['VALUE']?>"><?php echo $g['VALUE']?></option>
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
  
  <!-- container-scroller -->
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

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  <script type="text/javascript">
  
        $(document).ready(function(){
            $( ".prjjjn" ).autocomplete({
              source: "<?php echo site_url('user/c_item_budget/get_budget/?');?>"
            });
        });

        $(".prjjjn").focus(function(){
          var id = $(this).attr("id");
          console.log(id);
//          console.log(val);

          $("#"+id).keypress(function(e){
            var val = $(this).val();

            if(e.which ==13){
              console.log(id);
              console.log(val);
              $.ajax({
                type:"POST",
                url:'<?php echo site_url('user/c_item_budget/addprj')?>',
                dataType:"JSON",
                data:{id:id,val:val},
                success:function(data){
                  location.reload();
                }
              })
            }
          })

        });


        

    </script>
  <!-- End custom js for this page-->

  <!-- End custom js for this page-->
</body>

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
                        url : "<?php echo site_url('user/c_item_budget/submit_item')?>",
                        dataType:"JSON",
                        data: {id_master_form:id_master_form},
                        success :function(data){

                        }
                    })
            })

    
/*
            $('#prjjj').keyup(function(){
              var inp = $(this).val();
              $.ajax({
                type:"POST",
                url:'<?php echo site_url('user/c_item_budget/get_budget')?>',
                dataType:"JSON",
                data:{inp:inp},
                success:function(data){
                  var ni = data.value;
                  console.log(ni);
                  for(s=0; s<data.length; s++){
                  var nm = data1[s].value;
                  }
                  $('#prjjj').autocomplete({
                    source:ni
                  })
                }
              })
            })
            */

});

</script>



</script>
</html>

