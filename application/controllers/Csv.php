<?php
class Csv extends CI_Controller
{
    //public $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('csv_model');
    }
    function index()
    {
        $this->db->select('*');
        $this->db->from('vendor_details');
        //$this->db->where('updation_state = 1');
        $data['vendor_updated_data_aprv'] = $this->db->get()->result_array();
        //print_r($data['vendor_updated_data_aprv']);die();
        $data['status'] = 'upload';
       // $this->load->view('admin_header_view',$data);
        $this->load->view('vendorlist_view2',$data);
    }
    
     function uploadData()
    {
        $this->csv_model->uploadData();
        redirect('csv');
        $this->load->view('vendorlist_view2');
    }
   
}
?>