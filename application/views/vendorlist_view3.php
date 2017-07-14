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
									<h3 class="panel-title">Customer List</h3>
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
												<th>Marketing Person Name</th>
<th>Marketing Person Email ID</th>
<th>Sub Marketing Person Name</th>
<th>Sub Marketing Person Email ID</th>
												<th>Customer Code</th>
												<th>Account group</th>
												<th>Company Code</th>
												<th>Sales Organization</th>
												<th>Distribution Channel</th>
												<th>Division</th>
												

<th>Title</th>
<th>Name</th>
												<th>Name 2</th>
												<th>Street</th>
<th>Street2</th>
<th>Street3</th>
<th>Street4</th>
<th>Street5</th>
												<th>Transportation zone</th>
												<th>Language Key</th>
												<th>Country Key</th>
												<th>Region</th>
												<th>House Number</th>
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
<th>Previous account no.</th>
<th>Sales Terms Of Payment</th>
<th>FI - Terms Of Payment</th>
<th>Sales district</th>
<th>Sales Group</th>
<th>Sales Office</th>
<th>Customer group</th>
<th>Customer group 1</th>
<th>ABC classification</th>
<th>Currency</th>
<th>Clerk's internet address</th>
												<th>Order probability</th>
<th>Price group</th>
												<th>Cust.pric.procedure</th>
												<th>Price List</th>
												<th>Statistics group</th>
<th>Delivering Plant</th>
<th>Part.dlv./item</th>
<th>Shipping Conditions</th>
												<th>Order Combination</th>
												<th>Incoterms</th>
												<th>Incoterms (Part 2)</th>
								<th>Cust.Acct.Assg.Group</th>
												<th>Max.Part.Deliveries</th>
												<th>Planning group</th>
												<th>ECC No.</th>
<th>Excise Registration No.</th>
<th>Excise Range</th>
<th>Excise Division</th>
												<th>Excise Commissionerate</th>
												<th>CST number</th>
												<th>LST number</th>
												<th>Permanent account number</th>
<th>Exc.Tax Ind. Custom.</th>
											</tr>
										</thead>
	<tbody>
											<?php
											if (isset($vendor_updated_data_aprv) && count($vendor_updated_data_aprv)>0) {
												for ($i=0; $i < count($vendor_updated_data_aprv); $i++) { 
$this->db->select('*');
$this->db->from('customer_details');
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
if(isset($vendor_updated_data_aprv[$i]['Sales_Organization']) && $vendor_updated_data_aprv[$i]['Sales_Organization'] != '')
{
    echo $vendor_updated_data_aprv[$i]['Sales_Organization'];
}
else
{
    echo $main_data['0']['Sales_Organization'];	
}
 ?>
 </td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['Distribution_Channel']) && $vendor_updated_data_aprv[$i]['Distribution_Channel'] != '')
{
    echo $vendor_updated_data_aprv[$i]['Distribution_Channel'];
}
else
{
    echo $main_data['0']['Distribution_Channel'];
}
 ?>
 </td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['Division']) && $vendor_updated_data_aprv[$i]['Division'] != '')
{
    echo $vendor_updated_data_aprv[$i]['Division'];
}
else
{
    echo $main_data['0']['Division'];
}
 ?>
 </td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['Title']) && $vendor_updated_data_aprv[$i]['Title'] == '')
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
?>
</td>
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
if($vendor_updated_data_aprv[$i]['transportation_zone'] == '')
{
echo $main_data['0']['transportation_zone'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['transportation_zone'];
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
if($vendor_updated_data_aprv[$i]['language_key'] == '')
{
echo $main_data['0']['language_key'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['language_key'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['region'] == '')
{
echo $main_data['0']['region'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['region'];
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
if($vendor_updated_data_aprv[$i]['Previous_acc'] == '')
{
echo $main_data['0']['Previous_acc'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['Previous_acc'];
}
?>
</td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['Sales_Terms_Of_Payment']) && $vendor_updated_data_aprv[$i]['Sales_Terms_Of_Payment'] != '')
{
    echo $vendor_updated_data_aprv[$i]['Sales_Terms_Of_Payment'];
}
else
{
echo $main_data['0']['Sales_Terms_Of_Payment'];	
}
?>
</td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['FI_Terms_Of_Payment']) && $vendor_updated_data_aprv[$i]['FI_Terms_Of_Payment'] != '')
{
    echo $vendor_updated_data_aprv[$i]['FI_Terms_Of_Payment'];
}
else
{
    echo $main_data['0']['FI_Terms_Of_Payment'];
}
?>
</td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['Sales_district']) && $vendor_updated_data_aprv[$i]['Sales_district'] != '')
{
    echo $vendor_updated_data_aprv[$i]['Sales_district'];
}
else
{
    echo $main_data['0']['Sales_district'];
}
?>
</td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['Sales_Group']) && $vendor_updated_data_aprv[$i]['Sales_Group'] != '')
{
    echo $vendor_updated_data_aprv[$i]['Sales_Group'];
}
else
{
    echo $main_data['0']['Sales_Group'];
}
?>
</td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['Sales_Office']) && $vendor_updated_data_aprv[$i]['Sales_Office'] != '')
{
    echo $vendor_updated_data_aprv[$i]['Sales_Office'];
}
else
{
    echo $main_data['0']['Sales_Office'];
}
?>
</td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['Customergroup']) && $vendor_updated_data_aprv[$i]['Customergroup'] != '')
{
    echo $vendor_updated_data_aprv[$i]['Customergroup'];
}
else
{
    echo $main_data['0']['Customergroup'];
}
?>
</td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['Customer_group1']) && $vendor_updated_data_aprv[$i]['Customer_group1'] != '')
{
    echo $vendor_updated_data_aprv[$i]['Customer_group1'];
}
else
{
    echo $main_data['0']['Customer_group1'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['ABC_classification'] == '')
{
echo $main_data['0']['ABC_classification'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['ABC_classification'];
}
?>
</td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['Currency']) && $vendor_updated_data_aprv[$i]['Currency'] != '')
{
    echo $vendor_updated_data_aprv[$i]['Currency'];
}
else
{
    echo $main_data['0']['Currency'];	
}
?></td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['clrk_internet_addr']) && $vendor_updated_data_aprv[$i]['clrk_internet_addr'] != '')
{
    echo $vendor_updated_data_aprv[$i]['clrk_internet_addr'];
}
else
{
    echo $main_data['0']['clrk_internet_addr'];	
}
?>
</td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['order_prob']) && $vendor_updated_data_aprv[$i]['order_prob'] != '')
{
    echo $vendor_updated_data_aprv[$i]['order_prob'];
}
else
{
    echo $main_data['0']['order_prob'];	
}
?>
</td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['price_grp']) && $vendor_updated_data_aprv[$i]['price_grp'] != '')
{
    echo $vendor_updated_data_aprv[$i]['price_grp'];
}
else
{
    echo $main_data['0']['price_grp'];
}
?>
</td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['cust_price']) && $vendor_updated_data_aprv[$i]['cust_price'] != '')
{
    echo $vendor_updated_data_aprv[$i]['cust_price'];
}
else
{
echo $main_data['0']['cust_price'];	
}
?>
</td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['price_list']) && $vendor_updated_data_aprv[$i]['price_list'] != '')
{
    echo $vendor_updated_data_aprv[$i]['price_list'];
}
else
{
    echo $main_data['0']['price_list'];	
}
?>
</td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['statistic_grp']) && $vendor_updated_data_aprv[$i]['statistic_grp'] != '')
{
    echo $vendor_updated_data_aprv[$i]['statistic_grp'];
}
else
{
    echo $main_data['0']['statistic_grp'];	
}
?>
</td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['del_plant']) && $vendor_updated_data_aprv[$i]['del_plant'] != '')
{
    echo $vendor_updated_data_aprv[$i]['del_plant'];
}
else
{
    echo $main_data['0']['del_plant'];
}
?>
</td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['part_div']) && $vendor_updated_data_aprv[$i]['part_div'] != '')
{
    echo $vendor_updated_data_aprv[$i]['part_div'];
}
else
{
    echo $main_data['0']['part_div'];
}
?>
</td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['Shipping_Conditions']) && $vendor_updated_data_aprv[$i]['Shipping_Conditions'] != '')
{
    echo $vendor_updated_data_aprv[$i]['Shipping_Conditions'];
}
else
{
    echo $main_data['0']['Shipping_Conditions'];
}
?>
</td>

<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['Order_Combination']) && $vendor_updated_data_aprv[$i]['Order_Combination'] != '')
{
    echo $vendor_updated_data_aprv[$i]['Order_Combination'];
}
else
{
    echo $main_data['0']['Order_Combination'];
}
?>
</td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['Incoterms']) && $vendor_updated_data_aprv[$i]['Incoterms'] != '')
{
    echo $vendor_updated_data_aprv[$i]['Incoterms'];
}
else
{
echo $main_data['0']['Incoterms'];
}
?>
</td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['Incoterms2']) && $vendor_updated_data_aprv[$i]['Incoterms2'] != '')
{
    echo $vendor_updated_data_aprv[$i]['Incoterms2'];
}
else
{
echo $main_data['0']['Incoterms2'];
}
?>
</td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['cust_acct']) && $vendor_updated_data_aprv[$i]['cust_acct'] != '')
{
    echo $vendor_updated_data_aprv[$i]['cust_acct'];
}
else
{
    echo $main_data['0']['cust_acct'];
}
?>
</td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['max_part']) && $vendor_updated_data_aprv[$i]['max_part'] != '')
{
    echo $vendor_updated_data_aprv[$i]['max_part'];
}
else
{
    echo $main_data['0']['max_part'];
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
if($vendor_updated_data_aprv[$i]['ECC_no'] == '')
{
echo $main_data['0']['ECC_no'];	
}
else
{
echo $vendor_updated_data_aprv[$i]['ECC_no'];
}
?>
</td>
<td>
<?php 
if($vendor_updated_data_aprv[$i]['Excise_Registration'] == '')
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
if(isset($vendor_updated_data_aprv[$i]['pan']) && $vendor_updated_data_aprv[$i]['pan'] != '')
{
    echo $vendor_updated_data_aprv[$i]['pan'];
}
else
{
    echo $main_data['0']['pan'];
}
?>
</td>
<td>
<?php 
if(isset($vendor_updated_data_aprv[$i]['Exc.Tax']) && $vendor_updated_data_aprv[$i]['Exc.Tax'] != '')
{
    echo $vendor_updated_data_aprv[$i]['Exc.Tax'];
}
else
{
    echo $main_data['0']['Exc.Tax'];
}
?></td>

																	
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
                title: 'Customer List'
            }
        ]
    });
} );
</script>