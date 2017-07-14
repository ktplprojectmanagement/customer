		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
<div class="main">
		
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
									
									<form action="<?php echo site_url();?>index.php/Csv/uploadData" method="post" enctype="multipart/form-data" name="form1" id="form1" style="float: right;"> 
    <table>
        <tr>
            <td> Choose your file: </td>
            <td>
                <input type="file" class="form-control" name="userfile" id="userfile"  align="center" style="padding-top: 0px;border: medium none;" />
            </td>
            <td>
                <div class="col-lg-offset-3 col-lg-9">
                    <button type="submit" name="submit" class="btn btn-info">Import</button>
                </div>
            </td>
        </tr>
    </table> 
</form>
									<a href="<?php echo site_url();?>index.php/Admindashboard"><button type="button">Back</button></a>
									<!--<h3 class="panel-title">Vendor List</h3>-->
								</div>
								<div class="panel-body no-padding" style="margin-top: 86px;">
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

$main_data = $vendor_updated_data_aprv[$i];
//print_r($main_data);die();
													?>
														<tr>
															
															<td><?php echo $main_data['Purchaser_Name']; ?></td>
<td><?php echo $main_data['Purchaser_Email_ID']; ?></td>
<td><?php echo $main_data['Sub_Purchaser_Name']; ?></td>
<td><?php echo $main_data['Sub_Purchaser_Email_ID']; ?></td>
<td><?php echo $main_data['Vendor_id']; ?></td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Company_Code'] == '')
{
echo $main_data['Company_Code'];	
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
echo $main_data['Purch._Organization'];	
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
echo $main_data['Purchase_Organisation_Description'];	
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
echo $main_data['Account_group'];	
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
echo $main_data['Title'];	
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
echo $main_data['Name'];	
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
echo $main_data['Name2'];	
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
echo $main_data['vendor_type'];	
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
echo $main_data['vendor_desc'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['vendor_desc'];
}
?>
</td>
<td><?php echo $vendor_updated_data_aprv[$i]['GST_number']; ?></td>
<td><?php echo $vendor_updated_data_aprv[$i]['legal_name_on_gst']; ?></td>

<td>
<?php 
if($vendor_updated_data_aprv[$i]['TAX_number'] == '')
{
echo $main_data['TAX_number'];	
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
echo $main_data['vendor_classification'];	
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
echo $main_data['nature_of_invoice'];	
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
echo $main_data['Composition_Scheme_Applicability'];	
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
echo $main_data['Service_Accounting_code_Applicablility'];	
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
echo $main_data['Revrse_TAX_applicablility'];	
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
echo $main_data['House_Number'];	
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
echo $main_data['Street'];	
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
echo $main_data['Street2'];	
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
echo $main_data['Street3'];	
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
echo $main_data['Street4'];	
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
echo $main_data['Street5'];	
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
echo $main_data['Country_Key'];	
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
echo $main_data['State_Code'];	
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
echo $main_data['State_Name'];	
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
echo $main_data['City'];	
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
echo $main_data['District'];	
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
echo $main_data['Postal_Code'];	
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
echo $main_data['Telephone1'];	
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
echo $main_data['Fax_Number'];	
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
echo $main_data['Telephone2'];	
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
echo $main_data['EMail_id'];	
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
echo $main_data['VAT_number'];	
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
echo $main_data['Industry'];	
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
echo $main_data['Reconciliation_acct'];	
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
echo $main_data['Planning_group'];	
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
echo $main_data['Payment_methods'];	
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
echo $main_data['Check_double_invoice'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Check_double_invoice'];
}
?>
</td>
<td><?php echo $main_data['Previous_acc']; ?></td>
<td><?php echo $main_data['Terms_of_Payment']; ?></td>
<td><?php echo $main_data['Currency']; ?></td>
<td><?php echo $main_data['GR-Based_Inv_Verif']; ?></td>
<td><?php echo $main_data['Service-Based_Invoice_Verification']; ?></td>
<td><?php echo $main_data['Incoterms']; ?></td>
<td><?php echo $main_data['Incoterms2']; ?></td>
<td><?php echo $main_data['ECC_no']; ?></td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Excise_Registration'] == '')
{
echo $main_data['Excise_Registration'];	
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
echo $main_data['Excise_Range'];	
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
echo $main_data['Excise_Division'];	
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
echo $main_data['Excise_Commissionerate'];	
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
echo $main_data['cst'];	
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
echo $main_data['lst'];	
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
echo $main_data['Service_Tax_Reg_No'];	
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
echo $main_data['pan'];	
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
echo $main_data['Exc_Tax_Ind_Vendor'];	
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
echo $main_data['SSI_status'];	
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
echo $main_data['CENVAT'];	
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
             'excel'
        ]
    });
} );
</script>