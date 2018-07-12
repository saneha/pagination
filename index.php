<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Step form for remarkit</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="plugin/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="icon" href="data:;base64,iVBORw0KGgo=">
	</head>
	<body>
		<div class="container">
		  <div class="row">
		  	<h1 class="text-center">Form</h1>
		    	<div class="text-center">TOTAL PRICE : $<span id="unique_price"></span></div>
			<section>
	        <div class="wizard">
            <div class="wizard-inner">
              <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active">
                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                      <span class="round-tab">
                        <i class="fa fa-folder" aria-hidden="true"></i>
                      </span>
                    </a>
                  </li>
                  <li role="presentation" class="disabled">
                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                      <span class="round-tab">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                      </span>
                    </a>
                  </li>
                  <li role="presentation" class="disabled">
                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                      <span class="round-tab">
                        <i class="fa fa-money" aria-hidden="true"></i>
                      </span>
                    </a>
                  </li>
                  <li role="presentation" class="disabled">
                    <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4">
                      <span class="round-tab">
                        <i class="fa fa-folder" aria-hidden="true"></i>
                      </span>
                    </a>
                  </li>
                  <li role="presentation" class="disabled">
                    <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                      <span class="round-tab">
                        <i class="fa fa-fa" aria-hidden="true"></i>
                      </span>
                    </a>
                  </li>
                </ul>
            </div>
            <form role="form" name="form_steps" action="action_submit.php" method="post">
			 <input type="hidden" name="unique_price" value="" />
              <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" id="step1">
                  <div class="step1">
				        <input type="hidden" name="unit_price_step1" value="" />
	                	<input type="hidden" name="unique_price_step1" value="" />
	                  <h5><strong>Commissioning</strong></h5>
					  <hr>
	                  <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Asset Tagging </label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="asset_tagging">
															<option value="" >Select asset tagging</option>
															<option value="Physical Only" title="Opening packaging,Printing asset labels as specified by customer,Adhering label to device,Recording model asset & serial details,Place back into existing packaging,Report back to customer,Service performed at Remarkit warehouse" >Physical Only</option>
															<option value="BIOS asset Tagging" title="Opening packaging,Printing asset labels as specified by cusomer,Recording model asset & serial details,Place back into existing packaging,Report back to customer.">BIOS asset Tagging</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                </div>
										<div class="row" id="asset_table">
										  <table id="one" width="40%" class=" table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Measurement</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="success">
											    <td>Asset tagging</td>
										        <td>per unit</td>
										        <td>$3.13</td>
										        <td>$2.97</td>
												<td>$2.89</td>
												<td>$2.81</td>
										      </tr>
										      <tr class="danger">
											    <td>BIOS asset tagging</td>
										        <td>per unit</td>
										        <td>$3.75</td>
										        <td>$3.56</td>
												<td>$3.47</td>
												<td>$3.38</td>
										      </tr>
										   
										    </tbody>
										  </table> 
										</div>

                    <div class="row" id="asset_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="asset_tagging_unit" size="2" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
                    <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">BIOS Updates/ Customization </label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="bios_update">
															<option value="" >Select </option>
															<option value="yes" title="Open packaging, Load system to bios, Update, run and re-configure to customer's requirements. Record device details. Place back into existing packaging. Report to customer." >Yes</option>
															<option value ="no">No</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                </div>
										<div class="row" id="bios_update_table">
										  <table id="one" width="40%" class="table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Measurement</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="success">
											    <td>BIOS Update Customization</td>
										        <td>per unit</td>
										        <td>$5.63</td>
										        <td>$5.34</td>
												<td>$5.20</td>
												<td>$5.06</td>
										      </tr>
										
											 
										   
										    </tbody>
										  </table> 
										</div>
                    <div class="row" id="bios_update_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="asset_tagging_unit" size="2" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
		                <div id="ifbios">
		                	<h5 class="text-center"><u>Hardware Detail</u></h5>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group">
			                      <label class="col-sm-3"> Description of Devices: </label>
			                      <div class="col-sm-9">
			                        <textarea class="form-control" name="asset_device_description"></textarea>
			                      </div>
			                    </div>
			                  </div>
			                </div>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group" id="asset_unit">
			                      <label class="col-sm-3">Timings Per Device for Configuration </label>
			                      <div class="col-sm-9">
			                        <select class="form-control" name="asset_timmingForConfig">
																<option value="" >Select</option>
																<option value="Less than 15 minutes">Less than 15 minutes</option>
																<option value="Less than 30 minutes">Less than 30 minutes</option>
																<option value="More than 30 minutes">More than 30 minutes</option> 
															</select>
			                      </div>
			                    </div>
			                  </div>
			                </div>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group">
			                      <label class="col-sm-3">Asset is User Specific </label>
			                      <div class="col-sm-9">
			                        <select class="form-control" name="assset_uer_specific">
																<option value="" >Select</option>
																<option value="yes" >Yes</option>
																<option value ="no">No</option>
			                        </select>
			                      </div>
			                    </div>
			                  </div>
			                </div>
		                </div>
                    <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Imaging</label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="imaging">
															<option value="" >Select imaging</option>
															<option value="Single file from DVD or CDROM" title="Open packaging,Image device with approved imageRecord device details, Place back into existing packaging,  Report back to customer">Single file from DVD or CDROM</option>
															<option value="Manual Configuration" title="Opening packaging, Apply base image using customer supplied image then configure the device with pre determined  parameters set by customer and agreed by Remarkit, Record device details. place back into existing packaging. Report back to customer">Manual Configuration</option>
															<option value="Bit locker drive encryption" title="Unpack device, Encrypt single hard drive, Update customer records, Rebox device, Update customer report ">Bit locker drive encryption</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                </div>
										<div class="row" id="imaging_table">
										  <table id="one" width="40%" class="table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Measurement</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="success">
											    <td>Imaging (Single file from DVD or CDROM)</td>
										        <td>per unit</td>
										        <td>$9.38</td>
										        <td>$8.91</td>
												<td>$8.67</td>
												<td>$8.44</td>
										      </tr>
										      <tr class="danger">
											    <td>Imaging (Manual Configuration)</td>
										        <td>per unit</td>
										        <td>$14.38</td>
										        <td>$13.66</td>
												<td>$13.30</td>
												<td>$12.94</td>
										      </tr>
											  <tr class="warning">
											    <td>Bit Locker Encryption</td>
										        <td>per hard drive</td>
										        <td>POA</td>
										        <td>POA</td>
												<td>POA</td>
												<td>POA</td>
										      </tr>
										   
										    </tbody>
										  </table> 
										</div>
                    <div class="row" id="imaging_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="asset_tagging_unit" size="2" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
		                <div id="ifimaging">
		                	<h5 class="text-center"><u>Imaging</u></h5>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group">
			                      <label class="col-sm-3"> Is Imaging and/or asset tagging required to be OnSite? </label>
			                      <div class="col-sm-9">
			                        <select class="form-control" name="tagging_onsite">
																<option value="" >Select </option>
																<option value="yes">Yes</option>
																<option value ="no">No</option>
															</select>
			                      </div>
			                    </div>
			                  </div>
			                </div>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group" id="asset_unit">
			                      <label class="col-sm-3">Asset Tag creation and printing required? </label>
			                      <div class="col-sm-9">
			                        <select class="form-control" name="tag_creation_printing">
																<option value="" >Select </option>
																<option value="yes">Yes</option>
																<option value ="no">No</option>
															</select>
			                      </div>
			                    </div>
			                  </div>
			                </div>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group">
			                      <label class="col-sm-3">Software Installation required after imaging? </label>
			                      <div class="col-sm-9">
			                        <select class="form-control" name="SWinstall_after_imaging">
																<option value="" >Select</option>
																<option value="yes">Yes</option>
																<option value ="no">No</option>
			                        </select>
			                      </div>
			                    </div>
			                  </div>
			                </div>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group">
			                      <label class="col-sm-3">Are images tailored for individual Users? </label>
			                      <div class="col-sm-9">
			                        <select class="form-control" name="tailored_individual_user">
																<option value="" >Select </option>
																<option value="yes">Yes</option>
																<option value ="no">No</option>
			                        </select>
			                      </div>
			                    </div>
			                  </div>
			                </div>
		                </div>
                    <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Refurbishment of Desktop/Laptop</label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="refurbishment_desktop">
															<option value="" >Select</option>
															<option value="Yes" title="Gear received into Warehouse, Basic test of device for major faults, Sanitize base unit, screen and keyboard, Reporting of device details to customer">Yes</option>
															<option value="No">No</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                </div>
										<div class="row" id="refurbishment_desktop_table">
										  <table id="one" width="40%" class="table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Measurement</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="danger">
											    <td>Refurbishment of Desktop/Laptop</td>
										        <td>per unit price</td>
										        <td>$10.63</td>
										        <td>$10.09</td>
												<td>$9.83</td>
												<td>$9.56</td>
										      </tr>
										      
										   
										    </tbody>
										  </table> 
										</div>
                    <div class="row" id="refurbishment_desktop_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="refurbishment_desktop_unit" size="2" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
		                <div id="ifrefurbishment">
		                	<h5 class="text-center"><u>Site Details</u></h5>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group">
			                      <label class="col-sm-3"> Single Location,Multiple Location/Floors </label>
			                      <div class="col-sm-9">
		                        <select class="form-control" name="locations">
															<option value="">Select</option>
															<option value="Single Location/Floor">Single Location/Floor</option>
															<option value="Single Location/ Multiple Floors">Single Location/ Multiple Floors</option>
															<option value="Multiple Locations">Multiple Locations</option>
		                        </select>
			                      </div>
			                    </div>
			                  </div>
			                </div>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group" id="asset_unit">
			                      <label class="col-sm-3">Includes Metro Locations </label>
			                      <div class="col-sm-9">
			                        <select class="form-control" name="metro_locations">
																<option value="" >Select </option>
																<option value="yes" >Yes</option>
																<option value ="no">No</option>
															</select>
			                      </div>
			                    </div>
			                  </div>
			                </div>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group">
			                      <label class="col-sm-3">Includes Regional Locations </label>
			                      <div class="col-sm-9">
			                        <select class="form-control" name="regional_locations">
																<option value="" >Select </option>
																<option value="yes" >Yes</option>
																<option value ="no">No</option>
			                        </select>
			                      </div>
			                    </div>
			                  </div>
			                </div>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group">
			                      <label class="col-sm-3"> Includes Remote/ Regional Locations </label>
			                      <div class="col-sm-9">
			                        <select class="form-control" name="remote_locations">
																<option value="" >Select </option>
																<option value="yes">Yes</option>
																<option value ="no">No</option>
															</select>
			                      </div>
			                    </div>
			                  </div>
			                </div>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group" id="asset_unit">
			                      <label class="col-sm-3">Post Technical Support </label>
			                      <div class="col-sm-9">
			                        <select class="form-control" name="post_technical_support">
																<option value="" >Select </option>
																<option value="yes">Yes</option>
																<option value ="no">No</option>
															</select>
			                      </div>
			                    </div>
			                  </div>
			                </div>
		                	<h5 class="text-center"><u>Hardware Detail</u></h5>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group">
			                      <label class="col-sm-3"> Description of Devices: </label>
			                      <div class="col-sm-9">
			                        <textarea class="form-control" name="hardware_device_description"></textarea>
			                      </div>
			                    </div>
			                  </div>
			                </div>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group" id="asset_unit">
			                      <label class="col-sm-3">Timings Per Device for Configuration </label>
			                      <div class="col-sm-9">
			                        <select class="form-control" name="hardware_timmingForConfig">
																<option value="" >Select</option>
																<option value="Less than 15 minutes">Less than 15 minutes</option>
																<option value="Less than 30 minutes">Less than 30 minutes</option>
																<option value="More than 30 minutes">More than 30 minutes</option> 
															</select>
			                      </div>
			                    </div>
			                  </div>
			                </div>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group">
			                      <label class="col-sm-3">Asset is User Specific </label>
			                      <div class="col-sm-9">
			                        <select class="form-control" name="user_specific_asset">
																<option value="" >Select </option>
																<option value="yes" >Yes</option>
																<option value ="no">No</option>
			                        </select>
			                      </div>
			                    </div>
			                  </div>
			                </div>
		                	<h5 class="text-center"><u>OnSite Requirements</u></h5>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group" id="onsite_requirements">
			                      <label class="col-sm-3">Pilot/ Test Site</label>
			                      <div class="col-sm-9">
			                        <select class="form-control" name="pilot_site">
																<option value="" >Select </option>
																<option value="Yes">Yes</option>
																<option value="No">No</option>
															</select>
			                      </div>
			                    </div>
			                  </div>
			                </div>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group" id="asset_unit">
			                      <label class="col-sm-3">Peripheral Installation/Configuration</label>
			                      <div class="col-sm-9">
			                        <select class="form-control" name="configuration">
																<option value="" >Select </option>
																<option value="Yes">Yes</option>
																<option value="No">No</option>
															</select>
			                      </div>
			                    </div>
			                  </div>
			                </div>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group" id="asset_unit">
			                      <label class="col-sm-3">Network Configuration</label>
			                      <div class="col-sm-9">
			                        <select class="form-control" name="network_configuralation">
																<option value="" >Select </option>
																<option value="Yes">Yes</option>
																<option value="No">No</option>
															</select>
			                      </div>
			                    </div>
			                  </div>
			                </div>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group" id="asset_unit">
			                      <label class="col-sm-3">Data Transfer</label>
			                      <div class="col-sm-9">
			                        <select class="form-control" name="data_transfer">
																<option value="" >Select </option>
																<option value="none">None</option>
																<option value="Yes(Upto 15 GB)">Yes(Upto 15 GB)</option>
																<option value="Yes(Per 1 Gig over 15 GB)">Yes(Per 1 Gig over 15 GB)</option>
															</select>
			                      </div>
			                    </div>
			                  </div>
			                </div>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group" id="asset_unit">
			                      <label class="col-sm-3">What time of the day can install take place</label>
			                      <div class="col-sm-9">
			                        <select class="form-control" name="timming_installation">
																<option value="" >Select </option>
																<option value="During Business Hours">During Business Hours</option>
																<option value="After Business Hours">After Business Hours</option>
															</select>
			                      </div>
			                    </div>
			                  </div>
			                </div>

	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group" id="asset_unit">
			                      <label class="col-sm-3">Replacement/ New Set Up</label>
			                      <div class="col-sm-9">
			                        <select class="form-control" name="setup_type">
																<option value="" >Select </option>
																<option value="Replacement SetUp">Replacement SetUp</option>
																<option value="New SetUp">New SetUp</option>
															</select>
			                      </div>
			                    </div>
			                  </div>
			                </div>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group">
			                      <label class="col-sm-3"> TimeFrame of Installation: </label>
			                      <div class="col-sm-9">
			                        <textarea class="form-control" name="timeframe_installation"></textarea>
			                      </div>
			                    </div>
			                  </div>
			                </div>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group" id="asset_unit">
			                      <label class="col-sm-3">Adhoc Deployment </label>
			                      <div class="col-sm-9">
			                        <select class="form-control" name="adhoc_development">
																<option value="" >Select</option>
																<option value="yes" >Yes</option>
																<option value ="no">No</option>
															</select>
			                      </div>
			                    </div>
			                  </div>
			                </div>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group">
			                      <label class="col-sm-3">Estimated Customer Down time Per Unit: </label>
			                      <div class="col-sm-9">
			                        <input type="text" class="form-control" name="estimated_down_type" />
			                      </div>
			                    </div>
			                  </div>
			                </div>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group" id="asset_unit">
			                      <label class="col-sm-3">Will any spares be provided? </label>
			                      <div class="col-sm-9">
			                        <select class="form-control" name="spares_provided">
																<option value="" >Select</option>
																<option value="yes" >Yes</option>
																<option value ="no">No</option>
															</select>
			                      </div>
			                    </div>
			                  </div>
			                </div>
	                    <div class="row">
			                  <div class="col-md-8 col-md-offset-2">
			                    <div class="form-group">
			                      <label class="col-sm-3">Can individual staff to inform of Service? </label>
			                      <div class="col-sm-9">
			                        <select class="form-control" name="individual_staff">
																<option value="" >Select</option>
																<option value="yes" >Yes</option>
																<option value ="no">No</option>
			                        </select>
			                      </div>
			                    </div>
			                  </div>
			                </div>
		                </div>
                    <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">CMDB Update</label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="cmdb_update">
															<option value="" >Select</option>
															<option value="yes"  title="This would be provided as a standard to all aspects of our process, this will be provided in spread sheet form with details that would be required by the customer" >Yes</option>
															<option value ="no">No</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                </div>
						<div class="row" id="cmdb_update_table">
										  <table id="one" width="40%" class="table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Measurement</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="danger">
											    <td>CMDB Update</td>
										        <td>per unit price</td>
										        <td>Free</td>
										        <td>Free</td>
												<td>Free</td>
												<td>Free</td>
										      </tr>
										    </tbody>
										  </table> 
										</div>
										
						<div class="row" id="cmdb_update_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="cmdb_update_unit" size="2" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
						
                    <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Hardware Upgrades </label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="hardware_upgrade">
															<option value="" >Select</option>
															<option value="yes" title="Log in with administrator privileges, Shutdown and Prep device, Install hardware, test, record details, Report back to customer, Limited to Memory, Hard disk, Wireless adapters, PCIe, PCI, PCIx cards" >Yes</option>
															<option value ="no">No</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                </div>
						<div class="row" id="hardware_upgrade_table">
										  <table id="one" width="40%" class="table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Measurement</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="success">
											    <td>Hardware Upgrades</td>
										        <td>per additional unit of hardware</td>
										        <td>$11.88</td>
										        <td>$11.28</td>
												<td>$10.98</td>
												<td>$10.69</td>
										      </tr>
										    </tbody>
										  </table> 
										</div>
										
										<div class="row" id="hardware_upgrade_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="hardware_upgrade_unit" size="2" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
                    <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Additional Software Installation </label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="addition_installation">
															<option value="" >Select</option>
															<option value="yes" title="At the time of imaging, Log in with Local administrator privileges, Install software and test record details, Report back to customer" >Yes</option>
															<option value ="no">No</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                </div>
						<div class="row" id="addition_installation_table">
										  <table id="one" width="40%" class="table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Measurement</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="warning">
											    <td>Additional Software Installation</td>
										        <td>per Application per device</td>
										        <td>$8.13</td>
										        <td>$7.72</td>
												<td>$7.52</td>
												<td>$7.31</td>
										      </tr>
										    </tbody>
										  </table> 
										</div>
										
										<div class="row" id="addition_installation_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="addition_installation_unit" size="2" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
						
                    <ul class="list-inline pull-right">
                    	<li><button type="button" class="btn btn-default next-step">Skip</button></li>
                      <li><button type="button" class="btn btn-primary next-step next1">Save and continue</button></li>
                    </ul>
                  </div>
                </div>
              	<div class="tab-pane" role="tabpanel" id="step2">
                  <div class="step2">
	                	<input type="hidden" name="unit_price_step2" value="" />
	                	<input type="hidden" name="unique_price_step2" value="" />
					         	<h3 class="text-center"><strong>Warehouse</h3></strong>
	                  <hr>
                    <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Handling Charge</label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="handling_charge">
															<option value="">Select</option>
															<option value="receiving devices" title="Track load prior to warehouse receiving, Receive load from freighter/courier, Check for damage, record details, Check all items have been received as per customers request, Record all items coming into warehouse, Place items into secure location in warehouse">Handling Charge (Receiving Devices)</option>
															<option value="dispatching devices" title="Check items match customers request, Wrap Devices in black wrap for security, Record all items going out of the warehouse, Dispatch load to freighter/courier, Record and track outgoing load, Report to customer">Handling Charge(Dispatching Dispatching)</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                </div>
										<div class="row" id="handling_charge_table">
										  <table id="one" width="40%" class="table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Measurement</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="success">
											    <td>Handling Charge(Receiving Devices)</td>
										        <td>per unit</td>
										        <td>$2.50</td>
										        <td>$2.50</td>
												<td>$2.50</td>
												<td>$2.50</td>
										      </tr>
										      <tr class="danger">
											    <td>Handling Charge(Dispatching Devices)</td>
										        <td>per unit</td>
										        <td>$4.50</td>
										        <td>$2.50</td>
												<td>$2.50</td>
												<td>$2.50</td>
										      </tr>
										   
										    </tbody>
										  </table> 
										</div>
                    <div class="row" id="handling_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="handling_unit" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
                    <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Warehouse storage </label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="warehouse_storage">
															<option value="">Select</option>
															<option value="per unit" title="Free for 30 days from date of receive, then charge per item per day">Per Unit</option>
															<option value ="per pallet" title="Free for 30 days from date of receive, then charge per pallet per month">Per Pallet</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                </div>
						       
							       <div class="row" id="warehouse_storage_table">
										  <table id="one" width="40%" class="table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Measurement</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="warning">
											    <td>Warehouse Storage(Per Unit)</td>
										        <td>per unit</td>
										        <td>$0.50</td>
										        <td>$0.50</td>
												<td>$0.50</td>
												<td>$0.50</td>
										      </tr>
										      <tr class="danger">
											    <td>Warehouse Storage(Per Pallet)</td>
										        <td>per 1sq pallet</td>
										        <td>$20.63</td>
										        <td>$19.59</td>
												<td>$19.08</td>
												<td>$18.56</td>
										      </tr>
										   
										    </tbody>
										  </table> 
										</div>
                    <div class="row" id="warehouse_storage_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="warehouse_storage_unit" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
                    <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Test and Tag</label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="test_tags">
															<option value="">Select</option>
															<option value="yes" title="Test performed to compliance standards - AS/NZS 3760, Tag will be attached to its plug end for clear identification, Tags will contain: the asset ID, test date, retest date, name of the technician responsible for the test, and the test result, Failed results will be recorded against the asset serial number and the unique ID barcode, A data copy of the test results report will be sent by email">Yes</option>
															<option value ="no">No</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                </div>
                  </div> 
				  
				             <div class="row" id="test_tags_table">
										  <table id="one" width="40%" class="table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Measurement</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="success">
											    <td>Test and Tag</td>
										        <td>per test and tag</td>
										        <td>$3.50</td>
										        <td>$3.50</td>
												<td>$3.50</td>
												<td>$3.50</td>
										      </tr>
										     
										   
										    </tbody>
										  </table> 
										</div>
                    <div class="row" id="test_tags_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="test_tags_unit" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
                  <ul class="list-inline pull-right">
                    <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                    <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                    <li><button type="button" class="btn btn-primary next-step next2">Save and continue</button></li>
                  </ul>
              	</div>
              	<div class="tab-pane" role="tabpanel" id="step3">
                  <div class="step3">
	                	<input type="hidden" name="unit_price_step3" value="" />
	                	<input type="hidden" name="unique_price_step3" value="" />
					         	<h3 class="text-center">Disposal</h3>
	                  <hr>
                    <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Secure Hard Disk Wipe</label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="secuue_hard_disk_wipe">
															<option value="">Select</option>
															<option value="warehouse" title="Cataloging all device details, Check system for damage and missing components, Secure wipe equivalent too or exceeds HMG InfoSec standards/ or DOD Standard with certificate of erasure, Remove all labels and asset tags relating to customer, Report to customer, Service performed at Remarkit facilities" >Secure Hard disk erasure to HMG or DOD standard (Warehouse)</option>
															<option value="premise" title="Cataloging all device details, Check system for damage and missing components, Secure wipe equivalent too or exceeds HMG InfoSec standards/ or DOD Standard with certificate of erasure, Remove all labels and asset tags relating to customer, Report to customer. Service performed on customer premise">Secure Hard disk erasure to HMG or DOD standard (On premise)</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                </div>
										<div class="row" id="disposal_table">
										  <table id="one" width="40%" class="table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Measurement</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="success">
											    <td>Secure Hard disk erasure to HMG or DOD standard (Warehouse</td>
										        <td>per unit</td>
										        <td>$15.94</td>
										        <td>$15.14</td>
												<td>$14.74</td>
												<td>$14.34</td>
										      </tr>
										      <tr class="danger">
											    <td>Secure Hard disk erasure to HMG or DOD standard (On premise)</td>
										        <td>per unit</td>
										        <td>$30.00</td>
										        <td>$28.50</td>
												<td>$27.75</td>
												<td>$27.00</td>
										      </tr>
										   
										    </tbody>
										  </table> 
										</div>
                    <div class="row" id="disposal_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="disposal_unit" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
                    <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Basic Hard Disk Erasure </label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="basic_hard_disk_erasure">
															<option value="">Select</option>
															<option value="yes" title="Cataloguing all device details, check system for damage and missing components 3 pass wipe using DBAN or IBM Scrub, No certificate, Report to customer. Service performed at Remarkit facilities">Yes</option>
															<option value ="no">NO</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                </div>
						    
							    <div class="row" id="hard_disk_table">
										  <table id="one" width="40%" class="table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Measurement</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="success">
											    <td>Basic Hard disk Erasure</td>
										        <td>per unit</td>
										        <td>$10.63</td>
										        <td>$10.09</td>
												<td>$9.83</td>
												<td>$9.56</td>
										      </tr>
										     
										   
										    </tbody>
										  </table> 
										</div>
                    <div class="row" id="hard_disk_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="hard_disk_unit" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
						
                    <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Physical Disk Destruction</label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="physical_disk_destruction">
															<option value="">Select</option>
															<option value="warehouse" title="Warehouse shredding of specified hard disks,Serial number recorded at time of cataloging, Reported back to the customer as destroyed">Warehouse</option>
															<option value ="premises" title="Onsite shredding of specified hard disks (8mm-12mm), Serial number recorded at time of cataloging, Reported back to the customer as destroyed">Premise</option>
															<option value ="3mm" title="Warehouse shredding of specified hard disks to 3mm, Serial number recorded at time of cataloging, Reported back to the customer as destroyed. Upto GCSB standard">3mm shred size (warehouse)</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                </div>
						        <div class="row" id="disk_destruction_table">
										  <table id="one" width="40%" class="table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Measurement</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="success">
											    <td>Physical Disk Destruction (warehouse)</td>
										        <td>per unit</td>
										        <td>$10.63</td>
										        <td>$10.09</td>
												<td>$9.83</td>
												<td>$9.56</td>
										      </tr>
											  <tr class="danger">
											    <td>Physical Disk Destruction (premise)</td>
										        <td>per unit</td>
										        <td>$10.63</td>
										        <td>$10.09</td>
												<td>$9.83</td>
												<td>$9.56</td>
										      </tr>
											  <tr class="warning">
											    <td>Physical Disk Destruction 3mm shred size(warehouse)</td>
										        <td>per unit</td>
										        <td>$10.63</td>
										        <td>$10.09</td>
												<td>$9.83</td>
												<td>$9.56</td>
										      </tr>
										     
										   
										    </tbody>
										  </table> 
										</div>
                    <div class="row" id="disk_destruction_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="disk_destruction_unit" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
                    <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Environmental Disposal/Recycling</label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="environmental_device">
															<option value="">Select</option>
															<option value="general" title="Receive load from freighter/courier, Processed as electronic-Scrap, Track load prior to warehouse receiving, Receive load from freighter/courierISO 14001 Certified and audited eco disposal process">General </option>
															<option value ="crt" title="Receive load from freighter/courier, Processed as electronic-Scrap, Track load prior to warehouse receiving, Receive load from freighter/courierISO 14001 Certified and audited eco disposal process">CRT Monitor</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                </div>
						
						       <div class="row" id="environmental_device_table">
										  <table id="one" width="40%" class="table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Measurement</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="success">
											    <td>General</td>
										        <td>per unit price</td>
										        <td>$2.50</td>
										        <td>$2.50</td>
												<td>$2.50</td>
												<td>$2.50</td>
										      </tr>
											  <tr class="danger">
											    <td>CRT Monitor</td>
										        <td>per unit price</td>
										        <td>$30.00</td>
										        <td>$30.00</td>
												<td>$30.00</td>
												<td>$30.00</td>
										      </tr>
										     
										   
										    </tbody>
										  </table> 
										</div>
                    <div class="row" id="environmental_device_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="environmental_device_unit" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
                    <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Ethernet Switch Configuration Wiping</label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="ethernet_switch">
															<option value="">Select</option>
															<option value="yes" title="Cataloging individual  item including serial and asset details. Checking for damage, testing for faults, Device is connected to a PC accessing EPROM (Erasable Programmable Read Only Memory) component of switch and erasing configuration, Device is rebooted to confirm settings have been reset to factory defaults, Visual capture of running configuration of switch confirming it has been wiped">Yes</option>
															<option value ="no">No</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                </div>
                  </div>
				  
				                <div class="row" id="ethernet_switch_table">
										  <table id="one" width="40%" class="table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Measurement</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="success">
											    <td></td>
										        <td>per test and tag</td>
										        <td>$3.50</td>
										        <td>$3.50</td>
												<td>$3.50</td>
												<td>$3.50</td>
										      </tr>
										     
										   
										    </tbody>
										  </table> 
										</div>
                    <div class="row" id="ethernet_switch_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="ethernet_switch_unit" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
						
						
                  <ul class="list-inline pull-right">
                      <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                      <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                      <li><button type="button" class="btn btn-primary btn-info-full next-step next3">Save and continue</button></li>
                  </ul>
              	</div>
              	<div class="tab-pane" role="tabpanel" id="step4">
                  <div class="step4">
	                	<input type="hidden" name="unit_price_step4" value="" />
	                	<input type="hidden" name="unique_price_step4" value="" />
					         	<h3 class="text-center">Deployment</h3>
	                  <hr>
                    <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">OnSite Desktop Deployment Services</label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="onsite_development_services">
															<option value="" >Select</option>
															<option value="metro" title="Nationwide service scheduled in a logical order, Anywhere, Anytime, Anyplace within NZ shores, Remove old equipment from desk, Place replacement base unit on desk, Connect keyboard, mouse and power, Connect Ethernet cable to RJ45 wall socket, Switch on new machine, power on test, Boot to login prompt, Run initial build sequence, including (but not limited to):-Attachment to domain-Completion of build/task sequence, Remove all boxes and packaging from site, Freight and handling to customer location, Freight and handling to RemarkIT disposal depot, Job completion customer sign off, Tracking and reporting to customer of asset transfers Project portal to keep all stakeholders up to date.Limited to 20 minutes" >Metro</option>
															<option value ="non metro" title="Nationwide service scheduled in a logical order,Anywhere, Anytime, Anyplace within NZ shores, Remove old equipment from desk,Place replacement base unit on desk, Connect keyboard, mouse and power, Connect Ethernet cable to RJ45 wall socket, Switch on new machine, power on test, Boot to login prompt, Run initial build sequence, including (but not limited to):-Attachment to domain,-Completion of build/task sequence, Remove all boxes and packaging from site, Freight and handling to customer location,Freight and handling to RemarkIT disposal depot,Job completion customer sign off, Tracking and reporting to customer of asset transfers Project portal to keep all stakeholders up to date.Limited to 20 minutes">Non Metro</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                </div>
										<div class="row" id="deployment_table">
										  <table id="one" width="40%" class="table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Per Unit Price</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="success">
											    <td>Metro</td>
										        <td>per unit</td>
										        <td>$117.60</td>
										        <td>$66.00</td>
												<td>$54.00</td>
												<td>$POA</td>
										      </tr>
										      <tr class="danger">
											    <td>Non Metro</td>
										        <td>per unit</td>
										        <td>$151.20</td>
										        <td>$76.80</td>
												<td>$56.40</td>
												<td>$POA</td>
										      </tr>
										   
										    </tbody>
										  </table> 
										</div>
                    <div class="row" id="deployment_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="deployment_unit" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
                    <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Asset Confirmation prior to Deployment </label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="confirmations_deployment">
															<option value="" >Select</option>
															<option value="yes" title="Onsite delivery co-ordination contacting site Contacts and staff, Confirmation of assets to be replaced, Reporting back to customer of any changes" >Yes</option>
															<option value ="no">No</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                </div>
						
						               <div class="row" id="asset_confirmation_table">
										  <table id="one" width="40%" class="table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Per Unit Price</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="warning">
											    <td>Asset Confirmation prior to Deployment</td>
										        <td>per unit</td>
										        <td>$18.13</td>
										        <td>$17.22</td>
												<td>$16.77</td>
												<td>$16.31</td>
										      </tr>
										      
										   
										    </tbody>
										  </table> 
										</div>
                    <div class="row" id="asset_confirmation_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="asset_confirmation_unit" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
                    <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Data Migration </label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="data_migration">
															<option value="">Select </option>
															<option value="Yes(Up to 15 GB)" title="Up to 15GB of data transferred from the old asset to the new asset, This is a domain user backup and restore tool">Yes(Upto 15 GB)</option>
															<option value="Yes(Per 1 Gig over 15 GB)" title="This is a price per 1 gig rate over the 15 gig standard rate, data transferred from the old asset to the new asset, This is a domain user backup and restore tool">Yes(Per 1 Gig over 15 GB)</option>
		                        </select>
		                      </div> 
		                    </div>
		                  </div>
		                </div>
						
						          <div class="row" id="data_migration_table">
										  <table id="one" width="40%" class="table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Per Unit Price</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="success">
											    <td>Data Migration (<=15GB)</td>
										        <td> price per unit</td>
										        <td>$18.75</td>
										        <td>$17.81</td>
												<td>$17.34</td>
												<td>$16.88</td>
										      </tr>
										      <tr class="danger">
											    <td>Data Migration (>15GB)</td>
										        <td> price per GB</td>
										        <td>$3.13</td>
										        <td>$2.97</td>
												<td>$2.89</td>
												<td>$2.81</td>
										      </tr>
										   
										    </tbody>
										  </table> 
										</div>
                    <div class="row" id="data_migration_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="data_migration_unit" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
                    <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Delivery to Desk Courier(Excludes installations) </label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="delivery_to_desk_courier">
															<option value="" >Select</option>
															<option value="yes" title="Onsite delivery to designated desk location, Signed delivery confirmation, Tracking and reporting to customer of asset transfers " >Yes</option>
															<option value ="no">No</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                </div>
						
						          <div class="row" id="desk_courier_table">
										  <table id="one" width="40%" class="table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Per Unit Price</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="warning">
											    <td>Delivery to desk courier(Excludes installation)</td>
										        <td>per unit</td>
										        <td>POA</td>
										        <td>POA</td>
												<td>POA</td>
												<td>POA</td>
										      </tr>
										     
										   
										    </tbody>
										  </table> 
										</div>
                    <div class="row" id="desk_courier_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="desk_courier_unit" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
                    <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">CISCO IP OnSite Installation </label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="disco_ip_onsite_installation">
															<option value="" >Select</option>
															<option value="yes" title="Unpack new phone, remove packagingTerminate phone to user computer.Connect UTP cable to wall socket, confirm power on, Confirm network connectivity, Confirm IP configuration, Collect and remove old phone and packaging from site and return to Remarkit disposal depot" >Yes</option>
															<option value ="no">No</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                </div>
						        <div class="row" id="onsite_installation_table">
										  <table id="one" width="40%" class="table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Per Unit Price</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="success">
											    <td>Cisco IP phone Onsite installation</td>
										        <td>per unit</td>
										        <td>$22.50</td>
										        <td>$21.50</td>
												<td>$20.75</td>
												<td>$18.75</td>
										      </tr>
										     
										   
										    </tbody>
										  </table> 
										</div>
                    <div class="row" id="onsite_installation_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="onsite_installation_unit" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
                    <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Mounted Monitor Installation </label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="mounted_monitor_installation">
															<option value="" >Select</option>
															<option value="stand alone" title="Monitor installed as standalone unit, Remove and Unbox packaging, Remove OEM stand, Mount VESA bracket to rear of monitor, Remove existing desk monitor, Mount new monitor to VESA bracket, Use provided cable management to route/connect cables to device and monitor, Remove all boxes and packaging from site, Freight and handling to customer location, Freight and handling to RemarkIT disposal depot, Job completion customer sign off, Tracking and reporting to customer of asset transfers " >Stand Alone</option>
															<option value ="With base unit" title="Monitor installed with a base unit, Remove and Unbox packaging, Remove OEM stand, Mount VESA bracket to rear of monitor, Remove existing desk monitor, Mount new monitor to VESA bracket, Use provided cable management to route/connect cables to device and monitor, Remove all boxes and packaging from site, Freight and handling to customer location, Freight and handling to RemarkIT disposal depot, Job completion customer sign off,Tracking and reporting to customer of asset transfers ">With Base Unit</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                </div>
						
						            <div class="row" id="monitor_installation_table">
										  <table id="one" width="40%" class="table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Per Unit Price</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="danger">
											    <td>Mounted monitor Installation (stand alone)</td>
										        <td>per unit</td>
										        <td>$32.00</td>
										        <td>$31.00</td>
												<td>$30.00</td>
												<td>$29.00</td>
										      </tr>
										      <tr class="warning">
											    <td>Mounted monitor Installation (with base unit)</td>
										        <td>per unit</td>
										        <td>$17.00</td>
										        <td>$16.00</td>
												<td>$15.50</td>
												<td>$15.00</td>
										      </tr>
										   
										    </tbody>
										  </table> 
										</div>
                    <div class="row" id="monitor_installation_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="monitor_installation_unit" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
                    <div class="row">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">At Desk (Additional Software Installation) </label>
		                      <div class="col-sm-9">
		                        <select class="form-control" name="desk_additional_software">
															<option value="" >Select</option>
															<option value="yes" title="At the time of imaging, Log in with Local administrator privileges, Install software and test record details, Report back to customer" >Yes</option>
															<option value ="no">No</option>
		                        </select>
		                      </div>
		                    </div>
		                  </div>
		                </div>
                  </div>
				  
				             <div class="row" id="desk_additional_software_table">
										  <table id="one" width="40%" class="table table-bordered">
										    <thead>
										      <tr>
											    <th>Service Name</th>
										        <th>Per Unit Price</th>
										        <th>1-10 units</th>
										        <th>10-199+ units</th>
												<th>200+ units</th>
												<th>1000+ units</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr class="success">
											    <td>At Desk(Additional Software Installation)</td>
										        <td>per unit</td>
										        <td>$1.29</td>
										        <td>$1.89</td>
												<td>$1.89</td>
												<td>$1.89</td>
										      </tr>
										     
										   
										    </tbody>
										  </table> 
										</div>
                    <div class="row" id="desk_additional_software_unit">
		                  <div class="col-md-8 col-md-offset-2">
		                    <div class="form-group">
		                      <label class="col-sm-3">Unit </label>
		                      <div class="col-sm-9">
		                        <input type="number" class="form-control" name="desk_additional_software_unit" value="" />
		                      </div>
		                    </div>
		                  </div>
		                </div>
                  <ul class="list-inline pull-right">
                      <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                      <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                      <li><button type="button" class="btn btn-primary btn-info-full next-step next4">Save and continue</button></li>
                  </ul>
              	</div>
                <div class="tab-pane" role="tabpanel" id="complete">
                  <div class="complete">
					         	<h3 class="text-center">Preview Summary</h3>
								<h4><strong><b>Commissioning</b></strong></h4>
	                  <div class="row">
										  <table class="table">
										    <thead>
										      <tr>
										        <th>Service Name</th>
										        <th>Description</th>
										        <th>Price(Per Unit)</th>
										        <th>Number of Unit</th>
										        <th>Total Price</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr>
										        <td>Asset Tagging</td>
										        <td><div id="asset_tagging"></div></td>
										        <td><div id="asset_tagging_price"></div></td>
										        <td><input type="number" id="asset_tagging_unit" value="" /></td>
										        <td><div id="asset_tagging_unitPrice"></div></td>
										      </tr>
											  <tr>
										        <td>BIOS Update Customization</td>
										        <td><div id="bios_update"></div></td>
										        <td><div id="bios_update_price"></div></td>
										        <td><input type="number" id="bios_update_unit" value="" /></td>
										        <td><div id="bios_update_unitPrice"></div></td>
										      </tr>
										      <tr>
										        <td>Handling Charge</td>
										        <td><div id="handling_charge"></div></td>
										        <td><div id="handlingcharge_price"></div></td>
										        <td><input type="number" id="handling_units" value="" /></td>
										        <td><div id="handling_unitPrice"></div></td>
										      </tr>
											  <tr>
										        <td>Warehouse Storage</td>
										        <td><div id="warehouse_storage"></div></td>
										        <td><div id="warehouse_storage_price"></div></td>
										        <td><input type="number" id="warehouse_storage_unit" value="" /></td>
										        <td><div id="warehouse_storage_unitPrice"></div></td>
										      </tr>
										      <tr>
										        <td>Secure Hard Disk Wipe</td>
										        <td><div id="secuue_hard_disk_wipe"></div></td>
										        <td><div id="disposal_price"></div></td>
										        <td><input type="number" id="disposal_units" value="" /></td>
										        <td><div id="disposal_unitPrice"></div></td>
										      </tr>
										      <tr>
										        <td>OnSite Desktop Deployment Services</td>
										        <td><div id="onsite_development_services"></div></td>
										        <td><div id="deployment_price"></div></td>
										        <td><input type="number" id="deployment_units" value="" /></td>
										        <td><div id="deployment_unitPrice"></div></td>
										      </tr>
										    </tbody>
										  </table>
										 </div>

	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">BIOS Updates/ Customization </label>
		                      <div class="col-sm-8" id="bios_update"></div>
		                    </div>
		                  </div>
		                </div>
		                <h5 class="text-center"><u>Hardware Detail</u></h5>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Description of Devices </label>
		                      <div class="col-sm-8" id="asset_device_description"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Timings Per Device for Configuration</label>
		                      <div class="col-sm-8" id="asset_timmingForConfig"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Asset is User Specific </label>
		                      <div class="col-sm-8" id="assset_uer_specific"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Imaging</label>
		                      <div class="col-sm-8" id="imaging"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Is Imaging and/or asset tagging required to be OnSite? </label>
		                      <div class="col-sm-8" id="tagging_onsite"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Asset Tag creation and printing required?</label>
		                      <div class="col-sm-8" id="tag_creation_printing"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Software Installation required after imaging?</label>
		                      <div class="col-sm-8" id="tailored_individual_user"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Refurbishment of Desktop/Laptop</label>
		                      <div class="col-sm-8" id="refurbishment_desktop"></div>
		                    </div>
		                  </div>
		                </div>
		                <h5 class="text-center"><u>Site Details</u></h5>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Single Location,Multiple Location/Floors </label>
		                      <div class="col-sm-8" id="locations"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Includes Metro Locations</label>
		                      <div class="col-sm-8" id="metro_locations"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Includes Regional Locations </label>
		                      <div class="col-sm-8" id="regional_locations"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Includes Remote/ Regional Locations </label>
		                      <div class="col-sm-8" id="remote_locations"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Post Technical Support</label>
		                      <div class="col-sm-8" id="post_technical_support"></div>
		                    </div>
		                  </div>
		                </div>
										<h5 class="text-center"><u>Hardware Detail</u></h5>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Description of Devices </label>
		                      <div class="col-sm-8" id="hardware_device_description"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Timings Per Device for Configuration </label>
		                      <div class="col-sm-8" id="hardware_timmingForConfig"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Asset is User Specific </label>
		                      <div class="col-sm-8" id="user_specific_asset"></div>
		                    </div>
		                  </div>
		                </div>
		                <h5 class="text-center"><u>OnSite Requirements</u></h5>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Pilot/ Test Site</label>
		                      <div class="col-sm-8" id="pilot_site"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Peripheral Installation/Configuration</label>
		                      <div class="col-sm-8" id="configuration"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Network Configuration</label>
		                      <div class="col-sm-8" id="network_configuralation"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Data Transfer</label>
		                      <div class="col-sm-8" id="data_transfer"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">What time of the day can install take place</label>
		                      <div class="col-sm-8" id="timming_installation"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Replacement/ New Set Up</label>
		                      <div class="col-sm-8" id="setup_type"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">TimeFrame of Installation</label>
		                      <div class="col-sm-8" id="timeframe_installation"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Adhoc Deployment</label>
		                      <div class="col-sm-8" id="adhoc_development"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Estimated Customer Down time Per Unit</label>
		                      <div class="col-sm-8" id="estimated_down_type"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Will any spares be provided?</label>
		                      <div class="col-sm-8" id="spares_provided"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Can individual staff to inform of Service?</label>
		                      <div class="col-sm-8" id="individual_staff"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">CMDB Update</label>
		                      <div class="col-sm-8" id="cmdb_update"></div>
		                    </div>
		                  </div>
		                </div>
						<div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Unit</label>
		                      <div class="col-sm-8" id="cmdb_update_unit2"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Hardware Upgrades</label>
		                      <div class="col-sm-8" id="hardware_upgrade"></div>
		                    </div>
		                  </div>
		                </div>
						<div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Unit</label>
		                      <div class="col-sm-8" id="hardware_upgrade_unit2"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Additional Software Installation</label>
		                      <div class="col-sm-8" id="addition_installation"></div>
		                    </div>
		                  </div>
		                </div>
						<div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Unit</label>
		                      <div class="col-sm-8" id="addition_installation_unit2"></div>
		                    </div>
		                  </div>
		                </div>
		                <h4><strong><b>Warehouse</b></strong></h4>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Handling Charge</label>
		                      <div class="col-sm-8" id="handling_charge"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Unit</label>
		                      <div class="col-sm-8" id="handling_unit2"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Warehouse storage</label>
		                      <div class="col-sm-8" id="warehouse_storage"></div>
		                    </div>
		                  </div>
		                </div>
					 <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Unit</label>
		                      <div class="col-sm-8" id="warehouse_storage_unit2"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Test and tag</label>
		                      <div class="col-sm-8" id="test_tags"></div>
		                    </div>
		                  </div>
		                </div>
					  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Unit</label>
		                      <div class="col-sm-8" id="test_tags_unit2"></div>
		                    </div>
		                  </div>
		                </div>
		                <h4><strong><b>Decommissioning</b></strong></h4>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Secure Hard Disk Wipe</label>
		                      <div class="col-sm-8" id="secuue_hard_disk_wipe"></div>
		                    </div>
		                  </div>
		                </div>
					  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Unit</label>
		                      <div class="col-sm-8" id="disposal_unit2"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Basic Hard Disk Erasure</label>
		                      <div class="col-sm-8" id="basic_hard_disk_erasure"></div>
		                    </div>
		                  </div>
		                </div>
					 
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Physical Disk Destruction</label>
		                      <div class="col-sm-8" id="physical_disk_destruction"></div>
		                    </div>
		                  </div>
		                </div>
						
					
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Environmental Device Disposal/Recycling</label>
		                      <div class="col-sm-8" id="environmental_device"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Ethernet Switch Configuration Wiping</label>
		                      <div class="col-sm-8" id="ethernet_switch"></div>
		                    </div>
		                  </div>
		                </div>
		                <h4><strong><b>Deployment</b></strong></h4>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">OnSite Desktop Deployment Services</label>
		                      <div class="col-sm-8" id="onsite_development_services"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Asset Confirmation prior to Deployment</label>
		                      <div class="col-sm-8" id="confirmations_deployment"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Data Migration</label>
		                      <div class="col-sm-8" id="data_migration"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Delivery to Desk Courier(Excludes installations)</label>
		                      <div class="col-sm-8" id="delivery_to_desk_courier"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">CISCO IP OnSite Installation</label>
		                      <div class="col-sm-8" id="disco_ip_onsite_installation"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">Mounted Monitor Installation</label>
		                      <div class="col-sm-8" id="mounted_monitor_installation"></div>
		                    </div>
		                  </div>
		                </div>
	                  <div class="row">
		                  <div class="col-md-10 col-md-offset-1">
		                    <div class="form-group">
		                      <label class="col-sm-4">At Desk (Additional Software Installation)</label>
		                      <div class="col-sm-8" id="desk_additional_software"></div>
		                    </div>
		                  </div>
		                </div>

									</div>
                  <ul class="list-inline pull-right">
                      <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                      <li><button type="submit" class="btn btn-primary btn-info-full next-step ">Save</button></li>
                  </ul>
                </div>
                <div class="clearfix"></div>
              </div>
            </form>
	        </div>
		    </section>
		  </div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/step_form.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>