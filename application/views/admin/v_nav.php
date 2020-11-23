<ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('admin/c_dashboard')?>">
              <i class="fa fa-tachometer menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#wflw" aria-expanded="false" aria-controls="wflw">
              <i class="fa fa-level-down menu-icon"></i>
                    <span class="menu-title">Workflow</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="wflw">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/c_workflow/master_item')?>"> Workflow Item </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/c_workflow/master_vendor')?>"> Workflow Vendor </a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth2" aria-expanded="false" aria-controls="auth2">
              <i class="fa fa-pencil menu-icon"></i>
              <span class="menu-title">Assign To Me</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/c_item_it/item_it')?>"> Master Item </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/c_apv_vend/apv_vend')?>">Master vendor </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/c_req_size/view')?>">Master Size </a></li>

         
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth13" aria-expanded="false" aria-controls="auth13">
              <i class="fa fa-check-square-o menu-icon"></i>
              <span class="menu-title">Approval Complete</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth13">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/c_complete/item_iti')?>">Master Item </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/c_complete/vend_comp')?>">Master Vendor </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/c_complete/size_comp')?>">Master Size </a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth4" aria-expanded="false" aria-controls="auth4">
              <i class="fa fa-users menu-icon"></i>
              <span class="menu-title">Manage User & Akses</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/c_user')?>"> User </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('admin/c_akses')?>"> Hak Akses </a></li>
              </ul>
            </div>
          </li>



          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#pgss" aria-expanded="false" aria-controls="pgss">
              <i class="fa fa-spinner menu-icon"></i>
              <span class="menu-tittle">Progress</span>
              <i class="menu-arrow"> </i>
            </a>
            <div class="collapse" id="pgss">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"><a class="nav-link" href="<?php echo base_url('admin/c_progress/p_item')?>"> Item</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo base_url('admin/c_progress/p_vend')?>">Vendor Progress</a></li>  
            </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#uplds" aria-expanded="false" aria-controls="uplds">
            <i class="fa fa-upload menu-icon"></i>
              <span class="menu-tittle">Uploaded</span>
              <i class="menu-arrow"> </i>
            </a>
            <div class="collapse" id="uplds">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"><a class="nav-link" href="<?php echo base_url('admin/c_uploaded/view_item')?>">Master Item</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo base_url('admin/c_uploaded/view_size')?>">Master Size</a></li>  
              <li class="nav-item"><a class="nav-link" href="<?php echo base_url('admin/c_uploaded/view_vend')?>">Master Vendor</a></li>  

            </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('admin/c_dashboard/logout')?>" onclick="return confirm('Log out E-Form ?')">
              <i class="icon-book menu-icon"></i>
              <span class="menu-title">Log Out</span>
            </a>
          </li>
        </ul>