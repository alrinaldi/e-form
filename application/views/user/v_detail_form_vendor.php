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
                <div class="col-md-12">
            <div class="card">
  <div class="card-header bg-primary text-white">
    Item List
  </div>
  <div class="card-body">
      <?php

      ?>
          
<?php

?>
<p class="pt-3"></p>


<?php
foreach($data->result_array() as $k):
$id_vendor = $k['id_vendor'];
$segment = $k['segment'];
$nama = $k['nama'];
$address = $k['address'];
$phone = $k['phone'];
$fax = $k['fax'];
$email = $k['email'];
$description = $k['description'];
$country = $k['country'];
$contact = $k['contact_information'];
$currency = $k['curency'];
$nrp = $k['nrp'];
$lampiran = $k['lampiran'];
endforeach;

?>

  <div class="form-row">
    <label for="" class="col-sm-2 col-form-label">Id Master Vendor</label>
    <div class="col">
      <input type="text"  name="id_master" class="form-control-plaintext" id="" value="<?php echo $id_vendor?>" readonly>
    </div>
    <label for="inputPassword" class="col-sm-2 col-form-label">Requestor</label>
    <div class="col">
      <input type="text" name="requestor" class="form-control" id="inputPassword" value="<?php echo $nrp?>" readonly>
    </div>
  </div>

  <div class="form-row row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Requestor</label>
    <div class="col">
      <input type="text" name="requestor" class="form-control" id="inputPassword" value="<?php echo $nrp?>" readonly>
    </div>
    <label for="inputPassword" class="col-sm-2 col-form-label">Segment</label>
    <div class="col">
      <input type="text" name="segment" class="form-control" id="inputPassword" value="<?php echo $segment?>" readonly>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
    <div class="col">
      <input type="text" name="nama"class="form-control" id="inputPassword" value="<?php echo $nama?>" readonly>
    </div>
    <label for="inputPassword" class="col-sm-2 col-form-label">Address (SK Domisili/SUP)</label>
    <div class="col">
      <input type="text" name="address" class="form-control" id="inputPassword" value="<?php echo $address?>" readonly>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Phone (Fixed Line)</label>
    <div class="col">
      <input type="text" name="phone" class="form-control" id="inputPassword" value="<?php echo $phone?>" readonly>
    </div>
    <label for="inputPassword" class="col-sm-2 col-form-label">Fax</label>
    <div class="col">
      <input type="text" name="fax" class="form-control" id="inputPassword" value="<?php echo $fax?>" readonly>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">E-mail</label>
    <div class="col">
      <input type="text" name ="mail" class="form-control" id="inputPassword" value="<?php echo $email?>" readonly>
    </div>
 
    <label for="inputPassword" class="col-sm-2 col-form-label">Name or Description</label>
    <div class="col">
      <input type="text" name="desc" class="form-control" id="inputPassword" value="<?php echo $description?>" readonly>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Country/Region</label>
    <div class="col">
      <input type="text" name="region" class="form-control" id="inputPassword" value="<?php echo $country?>" readonly>
    </div>
  
    <label for="inputPassword" class="col-sm-2 col-form-label">Contact Information</label>
    <div class="col">
      <input type="text" name="contact" class="form-control" id="inputPassword" value="<?php echo $contact?>" readonly>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Currency</label>
    <div class="col">
      <input type="text" name="currency" class="form-control" id="inputPassword" value="<?php echo $currency?>" readonly>
    </div>
  
    <label for="inputPassword" class="col-sm-2 col-form-label">Lampiran</label>
    <div class="col">
    <a href="<?php echo base_url('user/c_assign_vendor/lampiran/'.$id_vendor)?>" class="btn btn-primary" target="_blank">Lihat Lampiran</a>
</div>
  </div>

  </div>
</div>
            </div>
            </div>

            <div class="row">
            <div class="col-md-12">
            <div class="card">
  <div class="card-header">

  </div>
  <?php
   if($this->session->userdata('level')=='Section Head'){?>
  <div class="card-body">
      <form action="<?php echo base_url('user/c_assign_vendor/update_vend')?>" method="post">
      <?php
      if($data1->num_rows()>0){
foreach($data1->result_array() as $a):
    $ekuitas = $a['ekuitas'];
    $npwp = $a['npwp'];
    $tgl = $a['tanggal'];
    $masa = $a['masa_berlaku'];
    $nama = $a['nama_bank'];
    $rek = $a['no_rekening'];
    $group = $a['group_vendor'];

endforeach;
}else{
    $ekuitas = '';
    $npwp = '';
    $tgl = '';
    $nama = '';
    $masa = '';
    $rek = '';
    $group = '';

}

if($data2->num_rows()>0){
    foreach($data2->result_array() as $l):
    $pembayaran = $l['pembayaran'];
    $neraca = $l['neraca'];
    $spt = $l['spt'];
    $bukti_spt = $l['bukti_spt'];
    $pph = $l['pph'];
    $bukti_pph = $l['bukti_pph'];    
    endforeach;
}else{
    $pembayaran = '';
    $neraca = '';
    $spt = '';
    $bukti_spt = '';
    $pph = '';
    $bukti_pph = '';
}



?>
      <input type="hidden" name="id_vendor" id="" value="<?php echo $id_vendor?>">
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Kekayaan berih/Ekuitas</label>
    <div class="col-md-10">
    <input type="text" class="form-control" name="ekuitas" id="" value="<?php echo $ekuitas?>" >
</div>
  </div>

  <div class="form-row">

  <label for="inputPassword" class="col-sm-1 col-form-label">No NPWP</label>
    <div class="col">
      <input type="number" class="form-control" placeholder="89983348823" name="npwp" value="<?php echo $npwp?>" >
    </div>

    <label for="inputPassword" class="col-sm-1 col-form-label">Tanggal</label>
    <div class="col">
      <input type="date" class="form-control" placeholder="01/01/2020" name="tgl" value="<?php echo $tgl?>" >
    </div>
    <label for="inputPassword" class="col-sm-1 col-form-label">Masa Berlaku</label>
    <div class="col">
      <input type="date" class="form-control" placeholder="01/01/2020" name="masa" value="<?php echo $masa?>" >
    </div>
  </div>


  <div class="form-row">

  <label for="inputPassword" class="col-sm-1 col-form-label">Nama Bank</label>
    <div class="col">
      <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $nama?>" >
    </div>

    <label for="inputPassword" class="col-sm-1 col-form-label">No Rekening</label>
    <div class="col">
      <input type="number" class="form-control" placeholder="89983348823" name="rek" value="<?php echo $rek?>" >
    </div> 

  </div>
<hr>
<div class="form-row">
<legend class="col-form-label col-sm-1">Group</legend>

<div class="form-check  col">
    <?php 
    if($group=='Chemichal'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="<?php echo $group?>" checked  >
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Chemichal" >
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio1">Chemical</label>
</div>
<div class="form-check  col">
<?php 
    if($group=='Fuel&Oil'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="<?php echo $group?>" checked >
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Fuel&Oil"  >
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio2">Fuel&Oil</label>
</div>

<div class="form-check  col">
<?php 
    if($group=='Supplies'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="<?php echo $group?>" checked >
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Supplies" >
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio3">Supplies</label>
</div>

<div class="form-check  col">
<?php 
    if($group=='DiesJig'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="<?php echo $group?>" checked  >
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="DiesJig" >
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio4">DiesJig</label>
</div>

<div class="form-check  col">
<?php 
    if($group=='Import'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="<?php echo $group?>" checked  >
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="Import" >
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio5">Import</label>
</div>
</div>


<div class="form-row">
<legend class="col-form-label col-sm-1">    </legend>

<div class="form-check  col">
<?php 
    if($group=='Tools'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="<?php echo $group?>" checked  >
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Tools" >
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio1">Tools</label>
</div>
<div class="form-check  col">
<?php 
    if($group=='Employee'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="<?php echo $group?>" checked >
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Employee"  >
  <?php
    }
  ?>
 
  <label class="form-check-label" for="inlineRadio2">Employee</label>
</div>

<div class="form-check  col">
<?php 
    if($group=='Inert Part'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="<?php echo $group?>" checked  >
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Inert Part"  >
  <?php
    }
  ?>

  <label class="form-check-label" for="inlineRadio3">Insert Part</label>
</div>

<div class="form-check  col">
<?php 
    if($group=='Training Provider'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="<?php echo $group?>" checked  >
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Training Provider"  >
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio3">Training Provider</label>
</div>

<div class="form-check  col">
<?php 
    if($group=='F, OE & Food Drink'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="<?php echo $group?>" checked  >
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="F, OE & Food Drink"  >
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio3">F, OE & Food Drink</label>
</div>
</div>

<div class="form-row">
<legend class="col-form-label col-sm-1">    </legend>

<div class="form-check  col">
<?php 
    if($group=='Kontraktor'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="<?php echo $group?>" checked  >
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Kontraktor"  >
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio1">Konraktor</label>
</div>
<div class="form-check  col">
<?php 
    if($group=='Uniform'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="<?php echo $group?>" checked  >
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Uniform"  >
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio2">Uniform</label>
</div>

<div class="form-check  col">
<?php 
    if($group=='Forwarder'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="<?php echo $group?>" checked  >
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Forwarder"  >
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio3">Forwarder</label>
</div>

<div class="form-check  col">
<?php 
    if($group=='Other'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="<?php echo $group?>" checked >
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Other" >
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio3">Other</label>
</div>

</div>

<?php
    
    ?>
<hr>

<fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 ">Lampiran</legend>
      <div class="col-sm-10">
        <div class="form-check">
            <?php 
            if($pembayaran==1){
            ?>
           <input class="form-check-input" type="checkbox" name="pembayaran" id="gridRadios1" value="1" checked >
<?php
            }else{

            
?>
          <input class="form-check-input" type="checkbox" name="pembayaran" id="gridRadios1" value="1" >
          <?php
            }
          ?>
          <label class="form-check-label" for="gridRadios1">
            Bukti Pembayaran Pajak Tahun Terakhir
          </label>
        </div>
        <div class="form-check">
        <?php 
            if($neraca==1){
            ?>
           <input class="form-check-input" type="checkbox" name="neraca" id="gridRadios2" value="1" checked >
<?php
            }else{

            
?>
          <input class="form-check-input" type="checkbox" name="neraca" id="gridRadios2" value="1" >
          <?php
            }
          ?>
          <label class="form-check-label" for="gridRadios2">
            Neraca Perusahaan
          </label>
        </div>
        <div class="form-check disabled">
        <?php 
            if($spt==1){
            ?>
           <input class="form-check-input" type="checkbox" name="spt" id="gridRadios3" value="1" checked >
<?php
            }else{

            
?>
          <input class="form-check-input" type="checkbox" name="spt" id="gridRadios3" value="1" >
          <?php
            }
          ?>
          <label class="form-check-label" for="gridRadios3">
            SPT PPN
          </label>
        </div>
        <div class="form-check disabled">
        <?php 
            if($bukti_spt==1){
            ?>
           <input class="form-check-input" type="checkbox" name="lapor" id="gridRadios4" value="1" checked >
<?php
            }else{

            
?>
          <input class="form-check-input" type="checkbox" name="lapor" id="gridRadios4" value="1" >
          <?php
            }
          ?>
          <label class="form-check-label" for="gridRadios4">
            Bukti Lapor SPT PPN
          </label>
        </div>
        <div class="form-check disabled">
        <?php 
            if($pph==1){
            ?>
           <input class="form-check-input" type="checkbox" name="pph" id="gridRadios5" value="1" checked >
<?php
            }else{

            
?>
          <input class="form-check-input" type="checkbox" name="pph" id="gridRadios5" value="1" >
          <?php
            }
          ?>
          <label class="form-check-label" for="gridRadios5">
            Pph Badan
          </label>
        </div>
        <div class="form-check disabled">
        <?php 
            if($bukti_pph==1){
            ?>
           <input class="form-check-input" type="checkbox" name="laporpph" id="gridRadios6" value="1" checked >
<?php
            }else{

            
?>
          <input class="form-check-input" type="checkbox" name="laporpph" id="gridRadios6" value="1" >
          <?php
            }
          ?>
          <label class="form-check-label" for="gridRadios6">
            Bukti Lapor SPT Pph Badan
          </label>
        </div>
      </div>
    </div>
  </fieldset>
<button type="submit" class="btn btn-primary">Update Vendor</button>
  </form>
  <div class="btn-group-vertical pull-right">
      <?php
      $nrp = $this->session->userdata('nrp');
      $cek = $this->db->query("SELECT * FROM approval_master_vendor where id_master_vendor = '$id_vendor' and approval = '$nrp'");
      if($cek->num_rows()>0){
          ?>
    <button class="btn btn-primary" disabled>Verify</button>
    <?php
      }else{
    ?>
  <a href="<?php echo base_url('user/c_assign_vendor/assign_aprv/'.$id_vendor)?>" class="btn btn-primary" onclick="return confirm('Data Vendor is valid ?')">Verify</a>
  <?php
      }
  ?>
  </div>
  </div>
  <?php
   }else{
  ?>

<div class="card-body">
      <?php
      if($data1->num_rows()>0){
foreach($data1->result_array() as $a):
    $ekuitas = $a['ekuitas'];
    $npwp = $a['npwp'];
    $tgl = $a['tanggal'];
    $masa = $a['masa_berlaku'];
    $nama = $a['nama_bank'];
    $rek = $a['no_rekening'];
    $group = $a['group_vendor'];

endforeach;
}else{
    $ekuitas = '';
    $npwp = '';
    $tgl = '';
    $nama = '';
    $masa = '';
    $rek = '';
    $group = '';

}

if($data2->num_rows()>0){
    foreach($data2->result_array() as $l):
    $pembayaran = $l['pembayaran'];
    $neraca = $l['neraca'];
    $spt = $l['spt'];
    $bukti_spt = $l['bukti_spt'];
    $pph = $l['pph'];
    $bukti_pph = $l['bukti_pph'];    
    endforeach;
}else{
    $pembayaran = '';
    $neraca = '';
    $spt = '';
    $bukti_spt = '';
    $pph = '';
    $bukti_pph = '';
}



?>
      <input type="hidden" name="id_vendor" id="" value="<?php echo $id_vendor?>">
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Kekayaan berih/Ekuitas</label>
    <div class="col-md-10">
    <input type="text" class="form-control" name="ekuitas" id="" value="<?php echo $ekuitas?>" readonly>
</div>
  </div>

  <div class="form-row">

  <label for="inputPassword" class="col-sm-1 col-form-label">No NPWP</label>
    <div class="col">
      <input type="number" class="form-control" placeholder="89983348823" name="npwp" value="<?php echo $npwp?>" readonly>
    </div>

    <label for="inputPassword" class="col-sm-1 col-form-label">Tanggal</label>
    <div class="col">
      <input type="date" class="form-control" placeholder="01/01/2020" name="tgl" value="<?php echo $tgl?>" readonly>
    </div>
    <label for="inputPassword" class="col-sm-1 col-form-label">Masa Berlaku</label>
    <div class="col">
      <input type="date" class="form-control" placeholder="01/01/2020" name="masa" value="<?php echo $masa?>" readonly>
    </div>
  </div>


  <div class="form-row">

  <label for="inputPassword" class="col-sm-1 col-form-label">Nama Bank</label>
    <div class="col">
      <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $nama?>" readonly>
    </div>

    <label for="inputPassword" class="col-sm-1 col-form-label">No Rekening</label>
    <div class="col">
      <input type="number" class="form-control" placeholder="89983348823" name="rek" value="<?php echo $rek?>" readonly>
    </div> 

  </div>
<hr>
<div class="form-row">
<legend class="col-form-label col-sm-1">Group</legend>

<div class="form-check  col">
    <?php 
    if($group=='Chemichal'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="<?php echo $group?>" checked disabled>
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Chemichal" disabled >
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio1">Chemical</label>
</div>
<div class="form-check  col">
<?php 
    if($group=='Fuel&Oil'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="<?php echo $group?>" checked disabled>
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Fuel&Oil" disabled >
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio2">Fuel&Oil</label>
</div>

<div class="form-check  col">
<?php 
    if($group=='Supplies'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="<?php echo $group?>" checked disabled>
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Supplies" disabled>
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio3">Supplies</label>
</div>

<div class="form-check  col">
<?php 
    if($group=='DiesJig'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="<?php echo $group?>" checked disabled>
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="DiesJig" disabled>
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio4">DiesJig</label>
</div>

<div class="form-check  col">
<?php 
    if($group=='Import'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="<?php echo $group?>" checked disabled>
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="Import" disabled>
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio5">Import</label>
</div>
</div>


<div class="form-row">
<legend class="col-form-label col-sm-1">    </legend>

<div class="form-check  col">
<?php 
    if($group=='Tools'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="<?php echo $group?>" checked disabled>
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Tools" disabled>
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio1">Tools</label>
</div>
<div class="form-check  col">
<?php 
    if($group=='Employee'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="<?php echo $group?>" checked disabled>
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Employee" disabled>
  <?php
    }
  ?>
 
  <label class="form-check-label" for="inlineRadio2">Employee</label>
</div>

<div class="form-check  col">
<?php 
    if($group=='Inert Part'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="<?php echo $group?>" checked disabled>
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Inert Part" disabled>
  <?php
    }
  ?>

  <label class="form-check-label" for="inlineRadio3">Insert Part</label>
</div>

<div class="form-check  col">
<?php 
    if($group=='Training Provider'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="<?php echo $group?>" checked disabled>
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Training Provider" disabled>
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio3">Training Provider</label>
</div>

<div class="form-check  col">
<?php 
    if($group=='F, OE & Food Drink'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="<?php echo $group?>" checked disabled>
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="F, OE & Food Drink" disabled>
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio3">F, OE & Food Drink</label>
</div>
</div>

<div class="form-row">
<legend class="col-form-label col-sm-1">    </legend>

<div class="form-check  col">
<?php 
    if($group=='Kontraktor'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="<?php echo $group?>" checked disabled>
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Kontraktor" disabled >
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio1">Konraktor</label>
</div>
<div class="form-check  col">
<?php 
    if($group=='Uniform'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="<?php echo $group?>" checked disabled>
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Uniform" disabled>
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio2">Uniform</label>
</div>

<div class="form-check  col">
<?php 
    if($group=='Forwarder'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="<?php echo $group?>" checked disabled>
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Forwarder" disabled>
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio3">Forwarder</label>
</div>

<div class="form-check  col">
<?php 
    if($group=='Other'){
    ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="<?php echo $group?>" checked disabled>
  <?php
    }else{
  ?>
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Other" disabled>
  <?php
    }
  ?>
  <label class="form-check-label" for="inlineRadio3">Other</label>
</div>

</div>

<?php
    
    ?>
<hr>

<fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 ">Lampiran</legend>
      <div class="col-sm-10">
        <div class="form-check">
            <?php 
            if($pembayaran==1){
            ?>
           <input class="form-check-input" type="checkbox" name="pembayaran" id="gridRadios1" value="1" checked disabled>
<?php
            }else{

            
?>
          <input class="form-check-input" type="checkbox" name="pembayaran" id="gridRadios1" value="1" disabled>
          <?php
            }
          ?>
          <label class="form-check-label" for="gridRadios1">
            Bukti Pembayaran Pajak Tahun Terakhir
          </label>
        </div>
        <div class="form-check">
        <?php 
            if($neraca==1){
            ?>
           <input class="form-check-input" type="checkbox" name="neraca" id="gridRadios2" value="1" checked disabled>
<?php
            }else{

            
?>
          <input class="form-check-input" type="checkbox" name="neraca" id="gridRadios2" value="1" disabled>
          <?php
            }
          ?>
          <label class="form-check-label" for="gridRadios2">
            Neraca Perusahaan
          </label>
        </div>
        <div class="form-check disabled">
        <?php 
            if($spt==1){
            ?>
           <input class="form-check-input" type="checkbox" name="spt" id="gridRadios3" value="1" checked disabled>
<?php
            }else{

            
?>
          <input class="form-check-input" type="checkbox" name="spt" id="gridRadios3" value="1" disabled>
          <?php
            }
          ?>
          <label class="form-check-label" for="gridRadios3">
            SPT PPN
          </label>
        </div>
        <div class="form-check disabled">
        <?php 
            if($bukti_spt==1){
            ?>
           <input class="form-check-input" type="checkbox" name="lapor" id="gridRadios4" value="1" checked disabled>
<?php
            }else{

            
?>
          <input class="form-check-input" type="checkbox" name="lapor" id="gridRadios4" value="1" disabled >
          <?php
            }
          ?>
          <label class="form-check-label" for="gridRadios4">
            Bukti Lapor SPT PPN
          </label>
        </div>
        <div class="form-check disabled">
        <?php 
            if($pph==1){
            ?>
           <input class="form-check-input" type="checkbox" name="pph" id="gridRadios5" value="1" checked disabled>
<?php
            }else{

            
?>
          <input class="form-check-input" type="checkbox" name="pph" id="gridRadios5" value="1" disabled >
          <?php
            }
          ?>
          <label class="form-check-label" for="gridRadios5">
            Pph Badan
          </label>
        </div>
        <div class="form-check disabled">
        <?php 
            if($bukti_pph==1){
            ?>
           <input class="form-check-input" type="checkbox" name="laporpph" id="gridRadios6" value="1" checked disabled>
<?php
            }else{

            
?>
          <input class="form-check-input" type="checkbox" name="laporpph" id="gridRadios6" value="1" disabled >
          <?php
            }
          ?>
          <label class="form-check-label" for="gridRadios6">
            Bukti Lapor SPT Pph Badan
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="btn-group-vertical pull-right">
      <?php
      $nrp = $this->session->userdata('nrp');
      $cek = $this->db->query("SELECT * FROM approval_master_vendor where id_master_vendor = '$id_vendor' and approval = '$nrp'");
      if($cek->num_rows()>0){
          ?>
    <button class="btn btn-primary" disabled>Verify</button>
    <?php
      }else{
    ?>
  <a href="<?php echo base_url('user/c_assign_vendor/aprv_vend/'.$id)?>" class="btn btn-primary" onclick="return confirm('Data Vendor is Valid ?')">Verify</a>
  <?php
      }
  ?>
  </div>
  </div>
<?php
   }
?>
</div>
            </div>

 

            </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <p class="pt-5"></p>
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

