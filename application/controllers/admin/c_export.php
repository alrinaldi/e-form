<?php
Class C_export extends CI_Controller{

    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if(($this->session->userdata('level')!='Section Head' ||$this->session->userdata('level')!='Department Head') && $this->session->userdata('dept')!='INFORMATION TECHNOLOGY'){
            redirect('login');
        }

        $this->load->model('admin/m_export');

    }
  function master_item(){
    //$year = $this->input->post('tahun');
    //$month = $this->input->post('bulan');
    $id_master_form = $this->uri->segment('4');
    include APPPATH.'third_party/PHPExcel.php';
    // Panggil class PHPExcel nya
    $excel = new PHPExcel();
    // Settingan awal fil excel
    $excel->getProperties()->setCreator('My Notes Code')
                 ->setLastModifiedBy('My Notes Code')
                 ->setTitle("Data Asset Opname Accounting")
                 ->setSubject("Asset")
                 ->setDescription("Data Laporan Asset Opname")
                 ->setKeywords("Asset Opname");
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
    $style_col = array(
      'font' => array('bold' => true), // Set font nya jadi bold
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
    $style_row = array(
      'alignment' => array(
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
  
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "DisplayProductNumber"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B1', "EcoResProductTranslation_LanguageId"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('C1', "ItemId"); // Set kolom B3 dengan tulisan "NIS"
    $excel->setActiveSheetIndex(0)->setCellValue('D1', "EcoResProductTranslation_Name"); // Set kolom C3 dengan tulisan "NAMA"
    $excel->setActiveSheetIndex(0)->setCellValue('E1', "NameAlias"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
    $excel->setActiveSheetIndex(0)->setCellValue('F1', "ProductSubType"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
    $excel->setActiveSheetIndex(0)->setCellValue('G1', "ProductType"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('H1', "EcoResProductDimensionGroup_Name"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
    $excel->setActiveSheetIndex(0)->setCellValue('I1', "EcoResStorageDimensionGroup_Name"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('J1', "EcoResTrackingDimensionGroup_Name"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
    $excel->setActiveSheetIndex(0)->setCellValue('K1', "ModelGroupId"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('L1', "InventTableModulePurch_UnitId"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('M1', "InventTableModulePurch_TaxItemGroupId"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('N1', "InventTableModuleSales_UnitId"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('O1', "InventTableModuleSales_TaxItemGroupId"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('P1', "InventTableModuleInvent_UnitId"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('Q1', "ItemGroupId"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('R1', "DIC"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('S1', "ItemType"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('T1', "Variant ConfigurationTechnology"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('U1', "search Name "); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('V1', "Productiontype"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('W1', "Asset"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('X1', "OldNumber"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('Y1', "ItemRepair"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('Z1', "ItemSpoilage(Pcs)"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('AA1', "ItemSpoilage(kg)"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('AB1', "DefaultDimension"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('AC1', "Group ID"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('AD1', "Fixed Asset Group"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('AE1', "Product Categories"); // Set kolom E3 dengan tulisan "ALAMAT"


    



    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('F1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('G1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('H1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('I1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('J1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('K1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('L1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('M1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('N1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('O1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('P1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('Q1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('R1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('S1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('T1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('U1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('V1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('W1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('X1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('Y1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('Z1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AA1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AB1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AC1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AD1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('AE1')->applyFromArray($style_col);


    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    //$siswa = $this->SiswaModel->view();
    $report = $this->db->query("SELECT * FROM master_item where id_master_form = '$id_master_form'");


    $jumlah = 0;
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 4
    foreach($report->result() as $data){ // Lakukan looping pada variabel siswa
        $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $data->item_id);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, 'en-us');
      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->item_id);
      $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->item_name);
      $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->item_name);
      $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->product_subtype);
      $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->product_type);
      if($data->product_subtype=='Product Master'){
        $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, 'Size');

      }else{
        $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, '');

      }
      $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, 'SW');
      $excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, 'None');
      $excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data->item_model_group);
      $excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data->purchase_unit);
      $excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, 'All');
      $excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $data->sales_unit);
      $excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, 'All');
      $excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $data->inventory_unit);
      $excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, $data->item_group);
      $excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, '');
      $excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, '');
      $excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, '');
      $excel->setActiveSheetIndex(0)->setCellValue('U'.$numrow, $data->item_name);
      $excel->setActiveSheetIndex(0)->setCellValue('V'.$numrow, 'None');
      if($data->fixed_asset_group!=''){
      $excel->setActiveSheetIndex(0)->setCellValue('W'.$numrow, $data->fixed_asset_group);
      }else{
      $excel->setActiveSheetIndex(0)->setCellValue('W'.$numrow, '');
      }
      $excel->setActiveSheetIndex(0)->setCellValue('X'.$numrow, '');
      $excel->setActiveSheetIndex(0)->setCellValue('Y'.$numrow, '');
      $excel->setActiveSheetIndex(0)->setCellValue('Z'.$numrow, '');
      $excel->setActiveSheetIndex(0)->setCellValue('AA'.$numrow, '');
      $excel->setActiveSheetIndex(0)->setCellValue('AB'.$numrow, $data->product.'|'.$data->project.'|'.$data->type.'|'.$data->wct);
      $excel->setActiveSheetIndex(0)->setCellValue('AC'.$numrow, '');
      $excel->setActiveSheetIndex(0)->setCellValue('AD'.$numrow, $data->fixed_asset_group);
      $excel->setActiveSheetIndex(0)->setCellValue('AE'.$numrow, $data->product_category);




      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('U'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('V'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('W'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('X'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('Y'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('Z'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('AA'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('AB'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('AC'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('AD'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('AE'.$numrow)->applyFromArray($style_row);

      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
    }
    /*
    $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, "Alokasi Budget HR"); // Set kolom A1 dengan tulisan "DATA SISWA"
    $excel->getActiveSheet()->mergeCells('G'.($numrow+2).':'.'G'.($numrow+4)); // Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->mergeCells('H'.($numrow+2).':'.'H'.($numrow+4)); // Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->getStyle('G'.$numrow)->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('G'.$numrow)->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('G'.$numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    */
    
    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(15); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(15); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(30); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('F')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('I')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('J')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('K')->setWidth(5); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('L')->setWidth(30); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('M')->setWidth(30); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('N')->setWidth(30); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('O')->setWidth(30); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('P')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('Q')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('R')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('S')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('T')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('U')->setWidth(5); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('V')->setWidth(30); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('W')->setWidth(30); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('X')->setWidth(30); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('Y')->setWidth(30); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('Z')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('AA')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('AB')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('AC')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('AD')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('AE')->setWidth(30);

    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("Data Asset Opname");
    
    $excel->createSheet();

    $excel->setActiveSheetIndex(0);

    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename='.$id_master_form.".xlsx"); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
  }

  function master_size(){
    //$year = $this->input->post('tahun');
    //$month = $this->input->post('bulan');
    $id_master_form = $this->uri->segment('4');
    include APPPATH.'third_party/PHPExcel.php';
    // Panggil class PHPExcel nya
    $excel = new PHPExcel();
    // Settingan awal fil excel
    $excel->getProperties()->setCreator('My Notes Code')
                 ->setLastModifiedBy('My Notes Code')
                 ->setTitle("Data Asset Opname Accounting")
                 ->setSubject("Asset")
                 ->setDescription("Data Laporan Asset Opname")
                 ->setKeywords("Asset Opname");
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
    $style_col = array(
      'font' => array('bold' => true), // Set font nya jadi bold
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
    $style_row = array(
      'alignment' => array(
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
  
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "DisplayProductNumber"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B1', "Size"); // Set kolom A3 dengan tulisan "NO"


    



    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);



    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    //$siswa = $this->SiswaModel->view();
    $jumlah = 0;
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 4
  
    $sizer = $this->db->query("SELECT a.size_name as sz,b.item_id as item FROM size_item a join master_item b on a.id_master_item = b.item_id where b.id_master_form = '$id_master_form'");
    foreach($sizer->result() as $data){ // Lakukan looping pada variabel siswa
        $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $data->item);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->sz);

      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);


      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
    } 


    /*
    $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, "Alokasi Budget HR"); // Set kolom A1 dengan tulisan "DATA SISWA"
    $excel->getActiveSheet()->mergeCells('G'.($numrow+2).':'.'G'.($numrow+4)); // Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->mergeCells('H'.($numrow+2).':'.'H'.($numrow+4)); // Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->getStyle('G'.$numrow)->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('G'.$numrow)->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('G'.$numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    */
    
    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(15); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(30); // Set width kolom B


    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("Data Size");
    
    $excel->createSheet();

    $excel->setActiveSheetIndex(0);

    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename='.$id_master_form.".xlsx"); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
  }

  function size_export(){
        //$year = $this->input->post('tahun');
    //$month = $this->input->post('bulan');
    $id_master_form = $this->uri->segment('4');
    include APPPATH.'third_party/PHPExcel.php';
    // Panggil class PHPExcel nya
    $excel = new PHPExcel();
    // Settingan awal fil excel
    $excel->getProperties()->setCreator('My Notes Code')
                 ->setLastModifiedBy('My Notes Code')
                 ->setTitle("Data Asset Opname Accounting")
                 ->setSubject("Asset")
                 ->setDescription("Data Laporan Asset Opname")
                 ->setKeywords("Asset Opname");
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
    $style_col = array(
      'font' => array('bold' => true), // Set font nya jadi bold
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
    $style_row = array(
      'alignment' => array(
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
  
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "DisplayProductNumber"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B1', "Size"); // Set kolom A3 dengan tulisan "NO"


    



    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);



    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    //$siswa = $this->SiswaModel->view();
    $jumlah = 0;
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 4
    
    $sizer = $this->db->query("SELECT a.size as sz,b.* FROM size_list a join master_size b on a.id_master = b.id
     where b.id_master_form = '$id_master_form'");
    foreach($sizer->result() as $data){ // Lakukan looping pada variabel siswa
        $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $data->itemid);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->sz);

      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);


      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
    } 
  

    /*
    $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, "Alokasi Budget HR"); // Set kolom A1 dengan tulisan "DATA SISWA"
    $excel->getActiveSheet()->mergeCells('G'.($numrow+2).':'.'G'.($numrow+4)); // Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->mergeCells('H'.($numrow+2).':'.'H'.($numrow+4)); // Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->getStyle('G'.$numrow)->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('G'.$numrow)->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('G'.$numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    */
    
    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(15); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(30); // Set width kolom B


    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("Data Size");
    
    $excel->createSheet();

    $excel->setActiveSheetIndex(0);

    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename='.$id_master_form.".xlsx"); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
  }

  function master_vend(){
    //$year = $this->input->post('tahun');
    //$month = $this->input->post('bulan');
    $id_vend = $this->uri->segment('4');
    include APPPATH.'third_party/PHPExcel.php';
    // Panggil class PHPExcel nya
    $excel = new PHPExcel();
    // Settingan awal fil excel
    $excel->getProperties()->setCreator('My Notes Code')
                 ->setLastModifiedBy('My Notes Code')
                 ->setTitle("Data Asset Opname Accounting")
                 ->setSubject("Asset")
                 ->setDescription("Data Laporan Asset Opname")
                 ->setKeywords("Asset Opname");
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
    $style_col = array(
      'font' => array('bold' => true), // Set font nya jadi bold
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
    $style_row = array(
      'alignment' => array(
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    ;;;;;;;;;;;;;;;;;;;;;;;
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "Name"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B1', "AccountNum"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('C1', "Currency"); // Set kolom B3 dengan tulisan "NIS"
    $excel->setActiveSheetIndex(0)->setCellValue('D1', "VendGroup"); // Set kolom C3 dengan tulisan "NAMA"
    $excel->setActiveSheetIndex(0)->setCellValue('E1', "NameAlias"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
    $excel->setActiveSheetIndex(0)->setCellValue('F1', "AddressName"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
    $excel->setActiveSheetIndex(0)->setCellValue('G1', "Street"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('H1', "CountryRegionId"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
    $excel->setActiveSheetIndex(0)->setCellValue('I1', "PaymTermId"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('J1', "PaymMode"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
    $excel->setActiveSheetIndex(0)->setCellValue('K1', "AddressPhoneName"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('L1', "Phone"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('M1', "AddressTelexName"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('N1', "TeleFax"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('O1', "AddressEmailName"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('P1', "Email"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('Q1', "VATNum"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('R1', "SegmentId"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('S1', "TaxGroup"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('T1', "ItemBuyerGroupId"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('U1', "LanguageId "); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('V1', "OLDVendAccount"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('W1', "InvoiceAccount"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('X1', "BankAccount"); // Set kolom E3 dengan tulisan "ALAMAT"


    



    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('F1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('G1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('H1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('I1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('J1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('K1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('L1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('M1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('N1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('O1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('P1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('Q1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('R1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('S1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('T1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('U1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('V1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('W1')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('X1')->applyFromArray($style_col);


    // Panggil function view yang ada di SiswaModel untuk menampilkan semua data siswanya
    //$siswa = $this->SiswaModel->view();
    $jumlah = 0;
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 2; // Set baris pertama untuk isi tabel adalah baris ke 4

    $sizer = $this->db->query("SELECT a.*,b.* FROM vendor a join vendor_acc b on a.id_vendor = b.id_master_vendor where a.id_vendor = '$id_vend'");
    foreach($sizer->result() as $data){ // Lakukan looping pada variabel siswa
        $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $data->nama);
      $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, '');
      $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->curency);
      $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->group_vendor);
      $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->nama);
      $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $data->nama);
      $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->address);
      $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->country);
      $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, '');
      $excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, '');
      $excel->setActiveSheetIndex(0)->setCellValue('K'.$numrow, $data->nama);
      $excel->setActiveSheetIndex(0)->setCellValue('L'.$numrow, $data->phone);
      $excel->setActiveSheetIndex(0)->setCellValue('M'.$numrow, $data->fax);
      $excel->setActiveSheetIndex(0)->setCellValue('N'.$numrow, $data->nama);
      $excel->setActiveSheetIndex(0)->setCellValue('O'.$numrow, $data->email);
      $excel->setActiveSheetIndex(0)->setCellValue('P'.$numrow, $data->npwp);
      $excel->setActiveSheetIndex(0)->setCellValue('Q'.$numrow, '');
      $excel->setActiveSheetIndex(0)->setCellValue('R'.$numrow, '');
      $excel->setActiveSheetIndex(0)->setCellValue('S'.$numrow, '');
      $excel->setActiveSheetIndex(0)->setCellValue('T'.$numrow, '');
      $excel->setActiveSheetIndex(0)->setCellValue('U'.$numrow, $data->item_name);
      $excel->setActiveSheetIndex(0)->setCellValue('V'.$numrow, 'None');
      $excel->setActiveSheetIndex(0)->setCellValue('W'.$numrow, $data->fixed_asset_group);
      $excel->setActiveSheetIndex(0)->setCellValue('X'.$numrow, '');
    



      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('U'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('V'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('W'.$numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('X'.$numrow)->applyFromArray($style_row);

      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
    }
    /*
    $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, "Alokasi Budget HR"); // Set kolom A1 dengan tulisan "DATA SISWA"
    $excel->getActiveSheet()->mergeCells('G'.($numrow+2).':'.'G'.($numrow+4)); // Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->mergeCells('H'.($numrow+2).':'.'H'.($numrow+4)); // Set Merge Cell pada kolom A1 sampai E1
    $excel->getActiveSheet()->getStyle('G'.$numrow)->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('G'.$numrow)->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('G'.$numrow)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    */
    
    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(15); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(15); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(30); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('F')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('I')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('J')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('K')->setWidth(5); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('L')->setWidth(30); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('M')->setWidth(30); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('N')->setWidth(30); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('O')->setWidth(30); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('P')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('Q')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('R')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('S')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('T')->setWidth(30);
    $excel->getActiveSheet()->getColumnDimension('U')->setWidth(5); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('V')->setWidth(30); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('W')->setWidth(30); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('X')->setWidth(30); // Set width kolom D


    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("Data Asset Opname");
    
    $excel->createSheet();

    $excel->setActiveSheetIndex(0);

    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename='.$id_master_form.".xlsx"); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
  }
}