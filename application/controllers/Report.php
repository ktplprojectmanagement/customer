<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

	function __Construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('common_model');
	}

	public function index()
	{
		
	$this->db->select('*');
$this->db->from('vendor_details_update');
$this->db->where('updation_state = 1');
$data['vendor_updated_data_aprv'] = $this->db->get()->result_array();

		$data['status'] = 'Report';
		//print_r($data['vendor_updated_data_aprv']);die();
		$this->load->view('admin_header_view',$data);
		$this->load->view('vendorlist_view1',$data);
		//$this->load->view('footer_view');
	}
	
	public function customer_report()
	{
		
	$this->db->select('*');
$this->db->from('customer_details_update');
$this->db->where('updation_state = 1');
$data['vendor_updated_data_aprv'] = $this->db->get()->result_array();

		$data['status'] = 'Report1';
		//print_r($data['vendor_updated_data_aprv']);die();
		$this->load->view('admin_header_view',$data);
		$this->load->view('vendorlist_view3',$data);
		//$this->load->view('footer_view');
	}

	
}