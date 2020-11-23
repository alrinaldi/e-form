<?php
 $levelu = $this->session->userdata('level');
$deptu = $this->session->userdata('dept');
 $divu = $this->session->userdata('divisi');
?>
<ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('user/c_dashboard')?>">
              <i class="fa fa-tachometer menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>




          <?php
             $lvc = $this->session->userdata('level');
             $dpc = $this->session->userdata('dept'); 
             $cekaksesc = $this->db->query("SELECT * FROM akses where level = '$lvc' and  dept = '$dpc' and akses_form = 2 and akses_group = 2");
             $cekaesmic = $this->db->query("SELECT * FROM akses where level = '$lvc' and dept = '$dpc' and akses_form = 3 and akses_group = 2 ");
             $ceksizeh = $this->db->query("SELECT * FROM akses where level = '$lvc' and dept = '$dpc' and akses_form = 12 and akses_group = 2 ");
             $cekgroupc = $this->db->query("SELECT * FROM akses where level = '$lvc' and dept = '$dpc' and akses_group = 2");
          if($cekgroupc->num_rows()>0) {?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="icon-file menu-icon"></i> 
            <span class="menu-title">Form Master Data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                  <?php
                  if($cekaksesc->num_rows()>0){
                  ?>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url("user/c_master_item/item")?>">Master Item</a></li>
                <?php
                  }
                  if($ceksizeh->num_rows()>0){
                  ?>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/c_master_size' )?>">Master Size</a></li>
                  <?php
              }
              ?>
                <?php 
                if($cekaesmic->num_rows()>0){
                ?>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/c_master_vendor/master_vendor' )?>">Master Vendor</a></li>
                <?php
            }
            ?>
            
              </ul>
            </div>
          </li>
          <?php
          }
          ?>

<?php
            // $lvc = $this->session->userdata('level');
           //  $dpc = $this->session->userdata('dept'); 
           //  $cekaksesc = $this->db->query("SELECT * FROM akses where level = '$lvc' and  dept = '$dpc' and akses_form = 2 and akses_group = 2");
           //  $cekaesmic = $this->db->query("SELECT * FROM akses where level = '$lvc' and dept = '$dpc' and akses_form = 3 and akses_group = 2 ");
          //   $ceksizeh = $this->db->query("SELECT * FROM akses where level = '$lvc' and dept = '$dpc' and akses_form = 12 and akses_group = 2 ");
            // $cekgroupc = $this->db->query("SELECT * FROM akses where level = '$lvc' and dept = '$dpc' and akses_group = 2");
            $cekrjci = $this->db->query("SELECT * FROM akses where level = '$levelu' and dept = '$deptu' and akses_form = '14' and akses_group = '7'");
            $cekgr = $this->db->query("SELECT * FROM akses where level = '$levelu' and dept = '$deptu' and akses_group = '7'");
            if($cekgr->num_rows()>0) {?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basicr" aria-expanded="false" aria-controls="ui-basicr">
            <i class="icon-file menu-icon"></i> 
            <span class="menu-title">Reject Form</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basicr">
              <ul class="nav flex-column sub-menu">
                  <?php
                  if($cekaksesc->num_rows()>0){
                  ?>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url("user/c_reject_form/view_m_item")?>">Master Item</a></li>
                <?php
                  }
                 ?>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url("user/c_reject_form/size_reject")?>">Master Size</a></li>

              </ul>
            </div>
          </li>
          <?php
          }
          ?>

<?php $cekreqv = $this->db->query("SELECT * from akses where level = '$levelu' and dept = '$deptu' and akses_group = 3 and akses_form = 4");
$cekreqs = $this->db->query("SELECT * from akses where level = '$levelu' and dept = '$deptu' and akses_group = 3 and akses_form = 13");
$ccekreqs = $cekreqs->num_rows();
 if($this->session->userdata('level')=='Section Head'){?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#request" aria-expanded="false" aria-controls="request">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">My Approval Request</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="request">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url("user/c_approval_sec/approval_item")?>">Master Item</a></li>
                <?php
                if($cekreqv->num_rows()>0){ 
                ?>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/c_request_vendor/req_vendor')?>">Master Vendor</a></li>
                <?php
                }
                ?>
                <?php
                if($ccekreqs>0){
                ?>
               <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/c_req_size/view')?>">Master Size</a></li>
                  <?php
                }
                  ?>
              </ul>
            </div>
          </li>
          <?php
          }
          ?>

<?php $cekreqvd = $this->db->query("SELECT * from akses where level = '$levelu' and dept = '$deptu' and akses_group = 3 and akses_form = 4");
$cekreqsd = $this->db->query("SELECT * from akses where level = '$levelu' and dept = '$deptu' and akses_group = 3 and akses_form = 13");
 if($this->session->userdata('level')=='Department Head' ){?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#request" aria-expanded="false" aria-controls="request">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">My Approval Request</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="request">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url("user/c_approval_dept/approval_item")?>">Master Item</a></li>
                <?php
                if($cekreqvd->num_rows()>0){
                ?>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/c_request_vendor/req_vendor')?>">Master Vendor</a></li>
                <?php
                }
                ?>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/c_req_size/view')?>">Master Size</a></li>

                <?php 
                
                ?>             
                 </ul>
            </div>
          </li>
          <?php
          }
          ?>

<?php  
 $cekreqvdv = $this->db->query("SELECT * from akses where level = '$levelu' and dept = '$divu' and akses_group = 3 and akses_form = 4"); 
 $cekreqsv = $this->db->query("SELECT * from akses where level = '$levelu' and dept = '$deptu' and akses_group = 3 and akses_form = 13");
  $cekreqvdv->num_rows();
if($this->session->userdata('level')=='Division Head'){?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#request" aria-expanded="false" aria-controls="request">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">My Approval Request</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="request">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url("user/c_approval_div/approval_item")?>">Master Item</a></li>
                <?php
                if($cekreqvdv->num_rows()>0){
                ?>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/c_request_vendor/req_vendor')?>">Master Vendor</a></li>
                <?php
                }
                ?>      
                 <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/c_req_size/view')?>">Master Size</a></li>
                  <?php
                   ?>
                  </ul>
            </div>
          </li>
          
          <?php
          }
          ?>

          <?php
          $lv = $this->session->userdata('level');
          $dp = $this->session->userdata('dept'); 
          $cekakses = $this->db->query("SELECT * FROM akses where  dept = '$dp' and level = '$lv' and akses_form = 6 and akses_group = 4  ");
          $cekaksesa = $this->db->query("SELECT * FROM akses where  dept = '$dp' and level = '$lv' and akses_form = 7 and akses_group = 4  ");

          $cekaesmii = $this->db->query("SELECT * FROM akses where  dept = '$dp' and akses_form = 10 and akses_group = 4 ");
          $cekgroup = $this->db->query("SELECT * FROM akses where  dept = '$dp' and level = '$levelu' and akses_group = 4");
          if($cekgroup->num_rows()>0){?>
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#request1" aria-expanded="false" aria-controls="request1">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Assign to me</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="request1">
              <ul class="nav flex-column sub-menu">
               <?php
               if($cekaesmii->num_rows()>0){
               ?>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url("user/c_acc_item/assign_item")?>">Master Item</a></li>
                <?php
               }
                  if($cekakses->num_rows()>0){
                  ?>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/c_assign_vendor/assign_vendor')?>">Master Vendor</a></li>
                <?php
                 }
                ?>

                <?php
                  if($cekaksesa->num_rows()>0){
                  ?>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/c_assign_vendor/appr_vendor')?>">Master Vendor</a></li>
                <?php
                 }
                ?>
                
              </ul>
            </div>
          </li>
          <?php
          }
          ?>


<?php
          $lvg = $this->session->userdata('level');
          $dpg = $this->session->userdata('dept'); 
          $lglrev = $this->db->query("SELECT * FROM akses where  dept = '$deptu' and level = '$levelu' and akses_form = 8 and akses_group = 5  ");
          $lglapr = $this->db->query("SELECT * FROM akses where  dept = '$deptu' and level = '$levelu' and akses_form = 9 and akses_group = 5  ");
          $cekgrouplgl = $this->db->query("SELECT * FROM akses where dept  = '$deptu' and level = '$levelu' and akses_group = 5");
          if($cekgrouplgl->num_rows()>0){?>
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#request1" aria-expanded="false" aria-controls="request1">
              <i class="icon-disc menu-icon"></i>
              <span class="menu-title">Vendor Legal</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="request1">
              <ul class="nav flex-column sub-menu">
        
                <?php
                  if($lglapr->num_rows()>0){
                  ?>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/c_vendor_legal/legalaprv')?>">Master Vendor</a></li>
                <?php
                 }
                ?>

                <?php
                  if($lglrev->num_rows()>0){
                  ?>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/c_vendor_legal/legalrev')?>">Master Vendor</a></li>
                <?php
                 }
                ?>
                
              </ul>
            </div>
          </li>
          <?php
          }
          ?>

<?php 
                $cekbudg = $this->db->query("SELECT * FROM akses where  dept = '$deptu' and level = '$levelu' and akses_form = 11 and akses_group = 6  ");
                $cekgbudg =  $this->db->query("SELECT * FROM akses where dept = '$deptu' and level = '$levelu' and akses_group = 6");
                echo $cekgbudg->num_rows;
 if($cekgbudg->num_rows() > 0){
 ?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth121" aria-expanded="false" aria-controls="auth121">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Assign to Me</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth121">
              <ul class="nav flex-column sub-menu">
                <?php if($cekbudg->num_rows() > 0){?>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/c_item_budget/item_b')?>">  Master Item </a></li>
                <?php }?>
              </ul>
            </div>
          </li>
<?php
 }
?>


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth12" aria-expanded="false" aria-controls="auth12">
              <i class="fa fa-tasks menu-icon"></i>
              <span class="menu-title">Tracking Request</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth12">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/c_history/aprv_vend');?>">  Master Vendor </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/c_history/aprv_itm')?>">  Master Item </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/c_history/aprv_size')?>">  Master Size </a></li>

              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="docs/documentation.html">
              <i class="icon-book menu-icon"></i>
              <span class="menu-title">Record</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('user/c_dashboard/logout')?>" onclick="return confirm('Log out E-Form ?')">
              
              <span class="menu-title">Log out</span>
            </a>
          </li>
        </ul>