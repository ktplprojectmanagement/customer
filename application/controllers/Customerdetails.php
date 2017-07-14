<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customerdetails extends CI_Controller {

	function __Construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->library('database');
		$this->load->model('common_model');
	}

	public function index()
	{
		$data['state_details'] = $this->common_model->get_all_data('state_code_list');
		$data['country_details'] = $this->common_model->get_all_data('country_list');
		$data['industry_list'] = $this->common_model->get_all_data('industry_list');
		$data['Reconciliation_Account'] = $this->common_model->get_all_data('Reconciliation_Account');
		$data['planning_group'] = $this->common_model->get_all_data('planning_group');
		$data['payment_code'] = $this->common_model->get_all_data('payment_code');
		$data['region_list'] = $this->common_model->get_all_data('region_list');

$data['state_details'] = $this->common_model->get_all_data('state_code_list');
		$data['country_details'] = $this->common_model->get_all_data('country_list');
		$data['industry_list'] = $this->common_model->get_all_data('industry_list');
		$data['Reconciliation_Account'] = $this->common_model->get_all_data('Reconciliation_Account');
		$data['planning_group'] = $this->common_model->get_all_data('planning_group');
		$data['payment_code'] = $this->common_model->get_all_data('payment_code');
		$vendor_id = '';
if(isset($_POST['vendor_id']))
{
$this->session->set_userdata('vendor_data',$_POST['vendor_id']);
}
		$this->session->set_userdata('username',$vendor_id);
		//print_r($this->session->userdata('vendor_data'));die();
		$query = 'where Vendor_id = ?';
		$data['edit_user_details'] = $this->common_model->fetch_data('customer_details',$query,$this->session->userdata('vendor_data'));
		$query = 'where Vendor_id = ?';
		$data['edit_user_details1'] = $this->common_model->fetch_data('customer_details_update',$query,$this->session->userdata('vendor_data'));

		$data['status_flag'] = 1;

		$data['status_flag'] = 1;
		//print_r($data['state_details']);die();
		$this->load->view('header_view');
		$this->load->view('customer_detail_view',$data);
		//$this->load->view('footer_view');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */