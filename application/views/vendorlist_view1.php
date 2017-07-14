		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
<div class="main">
			<!-- NAVBAR -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-btn">
						<button type="button" class="btn-toggle-fullwidth"></button>
					</div>
					
					<div id="navbar-menu" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
                                <a href="<?php echo base_url(); ?>index.php/Adminlogin" class="dropdown-toggle" data-toggle="dropdown"><span>Logout</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <!-- <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                                    <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
                                    <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li> -->
                                    <li><a href="http://kritvainvestments.com/vendor/index.php/Adminlogin"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                                </ul>
                            </li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- END NAVBAR -->
			<!-- MAIN CONTENT -->
			<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
			<script type="text/javascript">
				$(function(){
					$('#select-all').click(function(event) {
				        var $that = $(this);
				        $(':checkbox').each(function() {
				            this.checked = $that.is(':checked');
				        });
				    });
				});
			</script>
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<!-- RECENT PURCHASES -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Vendor List</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding">
									<table class="table table-striped cell-border" id="exapletable">
										<thead style="background-color: rgba(0, 160, 174, 0.4);">
											<tr style="display:none">
												<th>Purchaser Name</th>
												<th>
													<select class="select_purchaser">
														<option>--Select--</option>
														<?php
															if (isset($purchaser_details) && count($purchaser_details)>0) {
																for ($i=0; $i < count($purchaser_details); $i++) { 
														?>
														<option value="<?php echo $purchaser_details[$i]['Purchaser_Email_ID']; ?>"><?php echo $purchaser_details[$i]['Purchaser_Name']; ?></option>
														<?php
															}
														}
														?>
													</select>
												</th>
												<th></th>
												<th></th>
												
											</tr>
											<tr>
												<th>Purchaser Name</th>
<th>Purchaser Email ID</th>
<th>Sub Purchaser Name</th>
<th>Sub Purchaser Email ID</th>
												<th>Vendor Code</th>
												<th>Company Code</th>
												<th>Purch. Organization</th>
												<th>Purchase Organisation Desc.</th>
<th>Account group</th>
<th>Title</th>
<th>Name</th>
												<th>Name 2</th>
												<th>Type(Nature) of Vendor</th>
												<th>Type(Nature) Of Vendor Desc.(Refer Annexure 1)</th>
												<th>GST Registration Number OR Unique ID Number</th>
<th>Legal Name of Business as mentioned in PAN and GST Registration No.</th>
<th>House number as on GST Site</th>
<th>Street as on GST Site</th>
<th>Street2 as on GST Site</th>
<th>Street3 as on GST Site</th>
<th>Street4 as on GST Site</th>
<th>Street5 as on GST Site</th>
<th>Country name as on GST Site</th>
<th>Country code as on GST Site</th>
<th>city as on GST Site</th>
<th>District as mentioned in GST Site</th>
<th>Postal code as mentioned in GST Site</th>
												<th>State code as mentioned in GST Site</th>
<th>State name as mentioned in GST Site</th>
												<th>Registered email address at GST Site</th>
												<th>Registered mobile no. at GST Site</th>
												<th>Service Provider from India or Out Side India</th>
<th>Tax Classification for Vendor</th>
<th>Vendor Classification for GST</th>
<th>Nature Of Invoice to be issued by Vendor(Tax Invoice or Bill Of Supply)</th>
												<th>Composition Scheme Applicable or not?</th>
												<th>Service Accounting code Applicable</th>
												<th>Revrse TAX applicable or not?</th>
								<th>House Number (Example: Shop Number, Flat No. Building No. etc.)</th>
												<th>Street (Building Name, House Name etc.)</th>
												<th>Street 2 (Business Complex, Business District, Area etc.)</th>
												<th>Street 3 (Ladmark, Location etc.)</th>
<th>Street 4</th>
<th>Street 5</th>
<th>Country Key</th>
												<th>State Code</th>
												<th>State Name</th>
												<th>City</th>
												<th>District</th>
<th>Postal Code</th>
<th>Telephone 1</th>
<th>Fax Number</th>
												<th>Telephone 2</th>
												<th>E-Mail Address</th>
												<th>VAT Registration No.</th>
<th>Industry</th>
<th>Reconciliation acct</th>
<th>Planning group</th>
												<th>Payment methods</th>
												<th>Check double invoice</th>
												<th>Previous account no.</th>
												<th>Terms of Payment</th>
<th>Currency</th>
<th>GR-Based Inv. Verif.</th>
<th>Service-Based Invoice Verification</th>
												<th>Incoterms</th>
												<th>Incoterms (Part 2)</th>
												<th>ECC No.</th>
												<th>Excise Registration No.</th>
												<th>Excise Range</th>
												<th>Excise Division</th>
												<th>Excise Commissionerate</th>
<th>CST number</th>
<th>LST number</th>
<th>Service Tax Reg No</th>
												<th>Permanent account number</th>
												<th>Exc.Tax Ind. Vendor</th>
												<th>SSI status</th>
<th>CENVAT Scheme Availing/Non availing</th>
											</tr>
										</thead>
	<tbody>
											<?php
											if (isset($vendor_updated_data_aprv) && count($vendor_updated_data_aprv)>0) {
												for ($i=0; $i < count($vendor_updated_data_aprv); $i++) { 
$this->db->select('*');
$this->db->from('vendor_details');
$this->db->where('Vendor_id = '.$vendor_updated_data_aprv[$i]['Vendor_id']);
$main_data = $this->db->get()->result_array();
//print_r($main_data);die();
													?>
														<tr>
															
															<td><?php echo $main_data['0']['Purchaser_Name']; ?></td>
<td><?php echo $main_data['0']['Purchaser_Email_ID']; ?></td>
<td><?php echo $main_data['0']['Sub_Purchaser_Name']; ?></td>
<td><?php echo $main_data['0']['Sub_Purchaser_Email_ID']; ?></td>
<td><?php echo $vendor_updated_data_aprv[$i]['Vendor_id']; ?></td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Company_Code'] == '')
{
echo $main_data['0']['Company_Code'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Company_Code'];	
}
 ?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Purch._Organization'] == '')
{
echo $main_data['0']['Purch._Organization'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Purch._Organization'];
}
 ?>
 </td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Purchase_Organisation_Description'] == '')
{
echo $main_data['0']['Purchase_Organisation_Description'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Purchase_Organisation_Description'];
}
 ?>
 </td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Account_group'] == '')
{
echo $main_data['0']['Account_group'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Account_group'];
}
 ?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Title'] == '')
{
echo $main_data['0']['Title'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Title'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Name'] == '')
{
echo $main_data['0']['Name'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Name'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Name2'] == '')
{
echo $main_data['0']['Name2'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Name2'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['vendor_type'] == '')
{
echo $main_data['0']['vendor_type'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['vendor_type'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['vendor_desc'] == '')
{
echo $main_data['0']['vendor_desc'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['vendor_desc'];
}
?>
</td>
<td><?php echo $vendor_updated_data_aprv[$i]['GST_number']; ?></td>
<td><?php echo $vendor_updated_data_aprv[$i]['legal_name_on_gst']; ?></td>
<td><?php echo $vendor_updated_data_aprv[$i]['gst_house_number']; ?></td>
<td><?php echo $vendor_updated_data_aprv[$i]['gst_street_2']; ?></td>
<td><?php echo $vendor_updated_data_aprv[$i]['gst_street_3']; ?></td>
<td><?php echo $vendor_updated_data_aprv[$i]['gst_street_4']; ?></td>
<td><?php echo $vendor_updated_data_aprv[$i]['gst_street_5']; ?></td>
<td><?php echo $vendor_updated_data_aprv[$i]['gst_street_6']; ?></td>
<td><?php echo $vendor_updated_data_aprv[$i]['gst_country']; ?></td>
<td><?php echo $vendor_updated_data_aprv[$i]['gst_country_code']; ?></td>
<td><?php echo $vendor_updated_data_aprv[$i]['gst_city']; ?></td>
<td><?php echo $vendor_updated_data_aprv[$i]['gst_district']; ?></td>
<td><?php echo $vendor_updated_data_aprv[$i]['gst_postal']; ?></td>
<td><?php echo $vendor_updated_data_aprv[$i]['State_Code_gst']; ?></td>
<td><?php echo $vendor_updated_data_aprv[$i]['state_name_on_gst']; ?></td>
<td><?php echo $vendor_updated_data_aprv[$i]['email_on_gst']; ?></td>
<td><?php echo $vendor_updated_data_aprv[$i]['mobile_num_on_gst']; ?></td>
<td><?php echo $vendor_updated_data_aprv[$i]['service_provider_on_gst']; ?></td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['TAX_number'] == '')
{
echo $main_data['0']['TAX_number'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['TAX_number'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['vendor_classification'] == '')
{
echo $main_data['0']['vendor_classification'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['vendor_classification'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['nature_of_invoice'] == '')
{
echo $main_data['0']['nature_of_invoice'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['nature_of_invoice'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Composition_Scheme_Applicability'] == '')
{
echo $main_data['0']['Composition_Scheme_Applicability'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Composition_Scheme_Applicability'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Service_Accounting_code_Applicablility'] == '')
{
echo $main_data['0']['Service_Accounting_code_Applicablility'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Service_Accounting_code_Applicablility'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Revrse_TAX_applicablility'] == '')
{
echo $main_data['0']['Revrse_TAX_applicablility'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Revrse_TAX_applicablility'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['House_Number'] == '')
{
echo $main_data['0']['House_Number'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['House_Number'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Street'] == '')
{
echo $main_data['0']['Street'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Street'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Street2'] == '')
{
echo $main_data['0']['Street2'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Street2'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Street3'] == '')
{
echo $main_data['0']['Street3'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Street3'];
}
?></td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Street4'] == '')
{
echo $main_data['0']['Street4'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Street4'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Street5'] == '')
{
echo $main_data['0']['Street5'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Street5'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Country_Key'] == '')
{
echo $main_data['0']['Country_Key'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Country_Key'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['State_Code'] == '')
{
echo $main_data['0']['State_Code'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['State_Code'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['State_Name'] == '')
{
echo $main_data['0']['State_Name'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['State_Name'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['City'] == '')
{
echo $main_data['0']['City'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['City'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['District'] == '')
{
echo $main_data['0']['District'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['District'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Postal_Code'] == '')
{
echo $main_data['0']['Postal_Code'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Postal_Code'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Telephone1'] == '')
{
echo $main_data['0']['Telephone1'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Telephone1'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Fax_Number'] == '')
{
echo $main_data['0']['Fax_Number'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Fax_Number'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Telephone2'] == '')
{
echo $main_data['0']['Telephone2'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Telephone2'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['EMail_id'] == '')
{
echo $main_data['0']['EMail_id'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['EMail_id'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['VAT_number'] == '')
{
echo $main_data['0']['VAT_number'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['VAT_number'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Industry'] == '')
{
echo $main_data['0']['Industry'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Industry'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Reconciliation_acct'] == '')
{
echo $main_data['0']['Reconciliation_acct'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Reconciliation_acct'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Planning_group'] == '')
{
echo $main_data['0']['Planning_group'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Planning_group'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Payment_methods'] == '')
{
echo $main_data['0']['Payment_methods'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Payment_methods'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Check_double_invoice'] == '')
{
echo $main_data['0']['Check_double_invoice'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Check_double_invoice'];
}
?>
</td>
<td><?php echo $main_data['0']['Previous_acc']; ?></td>
<td><?php echo $main_data['0']['Terms_of_Payment']; ?></td>
<td><?php echo $main_data['0']['Currency']; ?></td>
<td><?php echo $main_data['0']['GR-Based_Inv_Verif']; ?></td>
<td><?php echo $main_data['0']['Service-Based_Invoice_Verification']; ?></td>
<td><?php echo $main_data['0']['Incoterms']; ?></td>
<td><?php echo $main_data['0']['Incoterms2']; ?></td>
<td><?php echo $main_data['0']['ECC_no']; ?></td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Excise_Registration'] == '')
{
echo $main_data['0']['Excise_Registration'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Excise_Registration'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Excise_Range'] == '')
{
echo $main_data['0']['Excise_Range'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Excise_Range'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Excise_Division'] == '')
{
echo $main_data['0']['Excise_Division'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Excise_Division'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Excise_Commissionerate'] == '')
{
echo $main_data['0']['Excise_Commissionerate'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Excise_Commissionerate'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['cst'] == '')
{
echo $main_data['0']['cst'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['cst'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['lst'] == '')
{
echo $main_data['0']['lst'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['lst'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Service_Tax_Reg_No'] == '')
{
echo $main_data['0']['Service_Tax_Reg_No'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Service_Tax_Reg_No'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['pan'] == '')
{
echo $main_data['0']['pan'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['pan'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Exc_Tax_Ind_Vendor'] == '')
{
echo $main_data['0']['Exc_Tax_Ind_Vendor'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Exc_Tax_Ind_Vendor'];
}
?></td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['SSI_status'] == '')
{
echo $main_data['0']['SSI_status'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['SSI_status'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['CENVAT'] == '')
{
echo $main_data['0']['CENVAT'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['CENVAT'];
}
?>
</td>
																	
														</tr>
													<?php
												}
											}
										?>
										</tbody>
									</table>
									
								</div>
							</div>
							
			</div>
				
				</div></div></div></div></div>
			<script type="text/javascript">
				$(function(){
					$("body").on('change','.select_purchaser',function(){
						var data = {
							'purch_id' : $(this).val()
						};
						//alert($(this).val());
						 var base_url = window.location.origin;
				            $.ajax({
					              type : 'post',
					              data : data,
					              url : base_url+'/vendor/index.php/Vendorlist/get_vendor',
					              success : function(data)
					              {
					                  //alert(data);
					                  $("#purch_based_vendor").html(data);
					              }
				            });
					});
					$("#send_mail").click(function(){
						 var vendor_value = '';
				          $("input:checked").map(function () { 
				            if (vendor_value == '') 
				            {
				              vendor_value = $(this).val();
				            }
				            else
				            {
				              vendor_value = vendor_value+'!'+$(this).val();
				            }
				            //alert($(this).val());
				            //type_vendor = 1;
				          });
				          //alert(vendor_value);
				          var data = {
				          	'vendor_value' : vendor_value
				          };
				          var base_url = window.location.origin;
				            $.ajax({
				              type : 'post',
				              data : data,
				              url : base_url+'/vendor/index.php/Vendorlist/send_mails',
				              success : function(data)
				              {
				                  alert(data);
				              }
				            });
					});
				});
			</script>
	
<script type='text/javascript' src='https://code.jquery.com/jquery-1.12.4.js'></script>
<script type='text/javascript' src='https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js'></script>
<script type='text/javascript' src='https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js'></script>
<script type='text/javascript' src='https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js'></script>
<script type='text/javascript' src='https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>
<script type='text/javascript' src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/pdfmake.min.js'></script>
<script type='text/javascript' src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.24/build/vfs_fonts.js'></script>
<script type='text/javascript' src='https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js'></script>
<script type='text/javascript' src='https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js'></script>
<script>
$(document).ready(function() {
    $('#exapletable').DataTable({
"scrollX": true,
        dom: 'Bfrtip',
         buttons: [
            {
                extend: 'excelHtml5',
                title: 'Vendor List'
            }
        ]
    });
} );
</script>