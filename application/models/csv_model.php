<?php
class csv_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function uploadData()
    {
        $count=0;
        if (isset($_FILES['userfile']['tmp_name'])) 
        {             
            error_reporting(E_ALL ^ E_NOTICE);
            require_once 'excel_reader2.php';
            $data =new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name']);
            //$data->setOutputEncoding('UTF-8');
//print_r("dfdsfd");die(); 
            for($i=0;$i<2;$i++) // Loop to get all sheets in a file.
            {  
            if(count($data->sheets[$i]['cells'])>0) // checking sheet not empty
            {               
               
                for($j=2;$j<=$data->sheets['0']['numRows'];$j++) // loop used to get each row of the sheet
                { 
                    if($data->sheets[$i]['cells'][$j][5] != '')
                    {                       
                     
                $insert_csv = array();
                        $insert_csv['Purchaser_Name'] = $data->sheets[$i]['cells'][$j][1];//remove if you want to have primary key,
                        $insert_csv['Purchaser_Email_ID'] = $data->sheets[$i]['cells'][$j][2];
                        $insert_csv['Sub_Purchaser_Name'] = $data->sheets[$i]['cells'][$j][3];
                        $insert_csv['Sub_Purchaser_Email_ID'] = $data->sheets[$i]['cells'][$j][4];//remove if you want to have primary key,
                        $insert_csv['Vendor_id'] = $data->sheets[$i]['cells'][$j][5];
                        $insert_csv['Company_Code'] = $data->sheets[$i]['cells'][$j][6];
                        $insert_csv['Purch_Organization'] = $data->sheets[$i]['cells'][$j][7];//remove if you want to have primary key,
                        $insert_csv['Purchase_Organisation_Description'] = $data->sheets[$i]['cells'][$j][8];
                        $insert_csv['Account_group'] = $data->sheets[$i]['cells'][$j][9];
                        $insert_csv['Title'] = $data->sheets[$i]['cells'][$j][10];//remove if you want to have primary key,
                        $insert_csv['Name'] = $data->sheets[$i]['cells'][$j][11];
                        $insert_csv['Name2'] = $data->sheets[$i]['cells'][$j][12];
                        $insert_csv['vendor_type'] = $data->sheets[$i]['cells'][$j][13];
                        $insert_csv['vendor_desc'] = $data->sheets[$i]['cells'][$j][14];
                        $insert_csv['GST_number'] = $data->sheets[$i]['cells'][$j][15];//remove if you want to have primary key,
                        $insert_csv['legal_name_on_gst'] = $data->sheets[$i]['cells'][$j][16];
                        $insert_csv['gst_address'] = $data->sheets[$i]['cells'][$j][17];
                        $insert_csv['State_Code_gst'] = $data->sheets[$i]['cells'][$j][18];//remove if you want to have primary key,
                        $insert_csv['state_name_on_gst'] = $data->sheets[$i]['cells'][$j][19];
                        $insert_csv['email_on_gst'] = $data->sheets[$i]['cells'][$j][20];
                        $insert_csv['mobile_num_on_gst'] = $data->sheets[$i]['cells'][$j][21];
                        $insert_csv['service_provider_on_gst'] = $data->sheets[$i]['cells'][$j][22];               
                        $insert_csv['TAX_number'] = $data->sheets[$i]['cells'][$j][23];
                        $insert_csv['vendor_classification'] = $data->sheets[$i]['cells'][$j][24];//remove if you want to have primary key,
                        $insert_csv['nature_of_invoice'] = $data->sheets[$i]['cells'][$j][25];
                        $insert_csv['Composition_Scheme_Applicability'] = $data->sheets[$i]['cells'][$j][26];
                        $insert_csv['Service_Accounting_code_Applicablility'] = $data->sheets[$i]['cells'][$j][27];
                        $insert_csv['Revrse_TAX_applicablility'] = $data->sheets[$i]['cells'][$j][28];//remove if you want to have primary key,
                        $insert_csv['House_Number'] = $data->sheets[$i]['cells'][$j][29];
                        $insert_csv['Street'] = $data->sheets[$i]['cells'][$j][30];
                        $insert_csv['Street2'] = $data->sheets[$i]['cells'][$j][31];//remove if you want to have primary key,
                        $insert_csv['Street3'] = $data->sheets[$i]['cells'][$j][32];
                        $insert_csv['Street4'] = $data->sheets[$i]['cells'][$j][33];
                        $insert_csv['Street5'] = $data->sheets[$i]['cells'][$j][34];
                        $insert_csv['Country_Key'] = $data->sheets[$i]['cells'][$j][35];
                        $insert_csv['State_Code'] = $data->sheets[$i]['cells'][$j][36];//remove if you want to have primary key,
                        $insert_csv['State_Name'] = $data->sheets[$i]['cells'][$j][37];
                        $insert_csv['City'] = $data->sheets[$i]['cells'][$j][38];
                        $insert_csv['District'] = $data->sheets[$i]['cells'][$j][39];//remove if you want to have primary key,
                        $insert_csv['Postal_Code'] = $data->sheets[$i]['cells'][$j][40];
                        $insert_csv['Telephone1'] = $data->sheets[$i]['cells'][$j][41];
                        $insert_csv['Fax_Number'] = $data->sheets[$i]['cells'][$j][42];
                        $insert_csv['Telephone2'] = $data->sheets[$i]['cells'][$j][43];
                        $insert_csv['EMail_id'] = $data->sheets[$i]['cells'][$j][44];//remove if you want to have primary key,
                        $insert_csv['VAT_number'] = $data->sheets[$i]['cells'][$j][45];
                        $insert_csv['Industry'] = $data->sheets[$i]['cells'][$j][46];
                        $insert_csv['Reconciliation_acct'] = $data->sheets[$i]['cells'][$j][47];
                        $insert_csv['Planning_group'] = $data->sheets[$i]['cells'][$j][48];
                        $insert_csv['Payment_methods'] = $data->sheets[$i]['cells'][$j][49];//remove if you want to have primary key,
                        $insert_csv['Check_double_invoice'] = $data->sheets[$i]['cells'][$j][50];
                        $insert_csv['Previous_acc'] = $data->sheets[$i]['cells'][$j][51];
                        $insert_csv['Terms_of_Payment'] = $data->sheets[$i]['cells'][$j][52];//remove if you want to have primary key,
                        $insert_csv['Currency'] = $data->sheets[$i]['cells'][$j][53];
                        $insert_csv['GR-Based_Inv_Verif'] = $data->sheets[$i]['cells'][$j][54];
                        $insert_csv['Service-Based_Invoice_Verification'] = $data->sheets[$i]['cells'][$j][55];//remove if you want to have primary key,
                        $insert_csv['Incoterms'] = $data->sheets[$i]['cells'][$j][56];
                        $insert_csv['Incoterms2'] = $data->sheets[$i]['cells'][$j][57];
                        $insert_csv['scheme_grp'] = $data->sheets[$i]['cells'][$j][58];
                        $insert_csv['ECC_no'] = $data->sheets[$i]['cells'][$j][59];
                        $insert_csv['Excise_Registration'] = $data->sheets[$i]['cells'][$j][60];//remove if you want to have primary key,
                        $insert_csv['Excise_Range'] = $data->sheets[$i]['cells'][$j][61];
                        $insert_csv['Excise_Division'] = $data->sheets[$i]['cells'][$j][62];
                        $insert_csv['Excise_Commissionerate'] = $data->sheets[$i]['cells'][$j][63];//remove if you want to have primary key,
                        $insert_csv['cst'] = $data->sheets[$i]['cells'][$j][64];
                        $insert_csv['lst'] = $data->sheets[$i]['cells'][$j][65];
                        $insert_csv['Service_Tax_Reg_No'] = $data->sheets[$i]['cells'][$j][66];
                        $insert_csv['pan'] = $data->sheets[$i]['cells'][$j][67];//remove if you want to have primary key,
                        $insert_csv['Exc_Tax_Ind_Vendor'] = $data->sheets[$i]['cells'][$j][68];
                        $insert_csv['SSI_status'] = $data->sheets[$i]['cells'][$j][69];
                        $insert_csv['CENVAT'] = $data->sheets[$i]['cells'][$j][70];//remove if you want to have primary key,
                         $data1 = array(
                        'Purchaser_Name' => $insert_csv['Purchaser_Name'],
                        'Purchaser_Email_ID' => $insert_csv['Purchaser_Email_ID'],
                        'Sub_Purchaser_Name' => $insert_csv['Sub_Purchaser_Name'],
                        'Sub_Purchaser_Email_ID' => $insert_csv['Sub_Purchaser_Email_ID'],
                        'Vendor_id' => $insert_csv['Vendor_id'],
                        'Company_Code' => $insert_csv['Company_Code'],
                       // 'Purch._Organization' => $insert_csv['Purch_Organization'],
                        'Purchase_Organisation_Description' => $insert_csv['Purchase_Organisation_Description'],
                        'Account_group' => $insert_csv['Account_group'],
                        'Title' => $insert_csv['Title'],
                        'Name' => $insert_csv['Name'],
                        'Name2' => $insert_csv['Name2'],
                        'vendor_type' => $insert_csv['vendor_type'],
                        'vendor_desc' => $insert_csv['vendor_desc'],
                        'GST_number' => $insert_csv['GST_number'],
                        'legal_name_on_gst' => $insert_csv['legal_name_on_gst'],
                        'gst_address' => $insert_csv['gst_address'],
                        'State_Code_gst' => $insert_csv['State_Code_gst'],
                        'state_name_on_gst' => $insert_csv['state_name_on_gst'],
                        'email_on_gst' => $insert_csv['email_on_gst'],
                        'mobile_num_on_gst' => $insert_csv['mobile_num_on_gst'],
                        'service_provider_on_gst' => $insert_csv['service_provider_on_gst'],
                        'GST_number' => $insert_csv['GST_number'],
                        'legal_name_on_gst' => $insert_csv['legal_name_on_gst'],
                        'TAX_number' => $insert_csv['TAX_number'],
                        'vendor_classification' => $insert_csv['vendor_classification'],
                        'nature_of_invoice' => $insert_csv['nature_of_invoice'],
                        'Composition_Scheme_Applicability' => $insert_csv['Composition_Scheme_Applicability'],
                        'Service_Accounting_code_Applicablility' => $insert_csv['Service_Accounting_code_Applicablility'],
                        'Revrse_TAX_applicablility' => $insert_csv['Revrse_TAX_applicablility'],
                        'House_Number' => $insert_csv['House_Number'],
                        'Street' => $insert_csv['Street'],
                        'Street2' => $insert_csv['Street2'],
                        'Street3' => $insert_csv['Street3'],
                        'Street4' => $insert_csv['Street4'],
                        'Street5' => $insert_csv['Street5'],
                        'Country_Key' => $insert_csv['Country_Key'],
                        'State_Code' => $insert_csv['State_Code'],
                        'State_Name' => $insert_csv['State_Name'],
                        'City' => $insert_csv['City'],
                        'District' => $insert_csv['District'],
                        'Postal_Code' => $insert_csv['Postal_Code'],
                        'Telephone1' => $insert_csv['Telephone1'],
                        'Fax_Number' => $insert_csv['Fax_Number'],
                        'Telephone2' => $insert_csv['Telephone2'],
                        'EMail_id' => $insert_csv['EMail_id'],
                        'VAT_number' => $insert_csv['VAT_number'],
                        'Industry' => $insert_csv['Industry'],
                        'Reconciliation_acct' => $insert_csv['Reconciliation_acct'],
                        'Planning_group' => $insert_csv['Planning_group'],
                        'Payment_methods' => $insert_csv['Payment_methods'],
                        'Check_double_invoice' => $insert_csv['Check_double_invoice'],
                        'Previous_acc' => $insert_csv['Previous_acc'],
                        'Terms_of_Payment' => $insert_csv['Terms_of_Payment'],
                        'Currency' => $insert_csv['Currency'],
                        'GR-Based_Inv_Verif' => $insert_csv['GR-Based_Inv_Verif'],
                        'Service-Based_Invoice_Verification' => $insert_csv['Service-Based_Invoice_Verification'],
                        'Incoterms' => $insert_csv['Incoterms'],
                        'Incoterms2' => $insert_csv['Incoterms2'],
                        'scheme_grp' => $insert_csv['scheme_grp'],
                        'ECC_no' => $insert_csv['ECC_no'],
                        'Excise_Registration' => $insert_csv['Excise_Registration'],
                        'Excise_Range' => $insert_csv['Excise_Range'],
                        'Excise_Division' => $insert_csv['Excise_Division'] ,
                        'Excise_Commissionerate' => $insert_csv['Excise_Commissionerate'],
                        'cst' => $insert_csv['cst'],
                        'lst' => $insert_csv['lst'],
                        'Service_Tax_Reg_No' => $insert_csv['Service_Tax_Reg_No'],
                        'pan' => $insert_csv['pan'],
                        'Exc_Tax_Ind_Vendor' => $insert_csv['Exc_Tax_Ind_Vendor'],
                        'SSI_status' => $insert_csv['SSI_status'],
                        'CENVAT' => $insert_csv['CENVAT'],
                  );
//print_r($data1);die();
                 $this->db->insert('vendor_details', $data1);   
                 $val = array(
                    'username' => $insert_csv['EMail_id'],
                    'password' => '123456',
                    'changes_date' => date("Y-m-d H:i:s"),
                    'vendor_id' => $insert_csv['Vendor_id'],
                    'flag' => 0,
                    'check_val' => 0,
                    'chk_set' => 0,
                 );
                 $this->db->insert('vendor_login', $val);
                 }     
                }
            }
        }
        redirect('/index.php/Csv');
         //die();  
        // fclose($fp) or die("can't close file");
        // $data['success']="success";
        // return $data;
        }        
    }
}