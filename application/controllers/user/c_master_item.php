<?php
Class C_master_item extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        if($this->session->userdata('nrp')==''){
            redirect('login');
        }else if($this->session->userdata('level')=='Sys Admin'){
            redirect('login');
        }
        $this->load->model('user/m_master_item');
    }

    public function item(){
        $nrp = array('nrp' => $this->session->userdata('nrp',TRUE));
        $data = $this->m_master_item->view($nrp);
        $x['unit'] = $this->m_master_item->unit();
        $x['project'] = $this->m_master_item->code_project();
        $this->load->view('user/v_master_item',$x);
    }

    public function tampil_item(){
        $nrp = array('nrp' => $this->session->userdata('nrp',TRUE),
                    'status' =>'Created');
        $data = $this->m_master_item->view($nrp);
        echo json_encode($data);
    }

    public function save(){
        $data = $this->m_master_item->save_item();
        echo json_encode($data);
    }
    

    public function tampil_size(){
        $data = $this->m_master_item->get_size();
        echo json_encode($data);
    }

    public function save_size(){
        $data = $this->m_master_item->add_size();
        echo json_encode($data);
    }

    public function submit_item(){
        $data = $this->m_master_item->add_master_form();
        echo json_encode($data);
    }

    public function get_item(){
        $data = $this->m_master_item->get_edit();
        echo json_encode($data);
    }

    public function del_size(){
        $data  = $this->m_master_item->del_size();
        echo json_encode($data);
    }

    public function get_item_e(){
        $data = $this->m_master_item->get_item_e();
        foreach($data->result_array() as $i):
        $dt = array(
            'item_id'  => $i['item_id'],
            'item_name' => $i['item_name'],
            'product_type'   => $i['product_type'],
            'product_subtype'  => $i['product_subtype'],
            'item_model_group'  => $i['item_model_group'],
            'inventory_unit'  => $i['inventory_unit'],
            'purchase_unit'  => $i['purchase_unit'],
            'sales_unit'  => $i['sales_unit'],
            'product'  => $i['product'],
            'project'  => $i['project'],
            'type'  => $i['type'],
            'wct'  => $i['wct'],
            'category'=> $i['category']
        );
        endforeach;

        echo json_encode($dt);    }


        public function update_item(){
            $data = $this->m_master_item->update_item();
            echo json_encode($data);
        }
        public function update_itema(){
            $data = $this->m_master_item->update_itema();
            echo json_encode($data);
        }

        public function delete_item(){
            $data = $this->m_master_item->delete_item();
            echo json_encode($data);
        }


}