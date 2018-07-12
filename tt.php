O<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css" />

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}


option{
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}




/* Mark input boxes that gets an error on validation: */
input.valid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}


.h1-content, .line, .p-discription {
		color: #fff;
	}
	#map {
        height: 400px;
        width: 100%;
       }
	
.modal { 
display: none; /* Hidden by default */ 
position: fixed; /* Stay in place */ 
z-index: 1; /* Sit on top */ 
left: 0; 
top: 0; 
width: 100%; /* Full width */ 
height: 100%; /* Full height */ 
overflow: auto; /* Enable scroll if needed */ 
background-color: rgb(0,0,0); /* Fallback color */ 
background-color: rgba(0,0,0,0.4); /* Black w/ opacity */ 

} 

  

/* Modal Content/Box */ 
.modal-content { 
background-color: #fefefe; 
margin: 15% auto; /* 15% from the top and centered */ 
padding: 20px; 
border: 1px solid #888; 
width: 80%; /* Could be more or less, depending on screen size */ 

} 

  

/* The Close Button */ 
.close { 
color: #aaa; 
float: right; 
font-size: 28px; 
font-weight: bold; 

} 

  

.close:hover, 

.close:focus { 

    color: black; 

    text-decoration: none; 

    cursor: pointer; 

} 



</style>
</head>
<body>

<div class="container text-center">
	<form action="contact-mail-file.php" method="post" id="regForm" name="form" class="regForm">
 <!--<form id="regForm" action="/action_page.php">  -->
  <h1>  Form</h1><br>
  <!-- One "tab" for each step in the form: -->

  <H3> TOTAL PRICE : <strong id="price"></strong> $<span id="unique_price" style="display: none;"></span></H3>
  
  <div class="tab"><h2><b><u>Commissioning:</u></h2></b><br>
  
       
         <label for="element_1"><b><h3>Asset Tagging</h3></b></label>
		 
		   <select id="test1" name="form_select1">
                     <option value="Select" >Select</option>
                     <option value="1" >Physical Only</option>
                     <option value ="2">BIOS asset Tagging</option>
                     </select>
<center id="unit" style="display: none;">Unit: <input type="number" id="unit1" name="unit"  size="2" style="width: 10%;">	</center>

                     <br><br>
					 <div> </div><br>
					 
				
		
			
			
			
			
		   <label for="element_2"><b><h3>BIOS Updates/Customization</h3></b></label>
		   <select id="test2" name="form_select2">
                     <option value="0">Select</option>
                     <option value="1">Yes</option>
                     <option value ="2">No</option>
                     </select><br><br>
					 
			   <div id="hidden_div2" style="display: none;">
			   <form>
			   
			   
			    <label for="biosUpdate"><b><h3>Hardware Detail</h3></b><br>
			    <b>Description of Devices:</b> 
                <input type="text" id="hd" name="device description">
			   
			   
			   
			   
			    <label for=" timingForConfuguration"><b>Timings Per Device for Configuration</b></label><br>
			         <select id="tt" name="timing">
					 <option value="0">None</option>
					 <option value="1">Less than 15 minutes</option>
                     <option value="2">Less than 30 minutes</option>
                     <option value="3">More than 30 minutes</option> 
					 </select><br>
					 
				

                <label for="assetUserSpecific"><b>Asset is User Specific</b></label><br>
			         <select id="aus" name="user">
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br>					 
				
					 
			   </form>
			   </div><br>
  
  
  
  
  
  
  
  
            <label for="element_3"><b><h3>Imaging</h3></b></label>
                     <select id="test3" name="form_select3">
                     <option value="0">None</option>
                     <option value="1">Single file from DVD or CDROM</option>
                     <option value="2">Manual Configuration</option>
					 <option value="3">Bit locker drive encryption</option>
					 
  </select><br>
<div id="hidden_div3" style="display: none;">
<form>

					<label for="hardwareDetails"><b><h4><u>Hardware Details</u></h4></b></label><br>
				
			       <b>Description of Devices:</b> 
				   <input type="text" id="dd" name="device description"><br>
			       
			   
			   
			   
			    <label for=" timingForConfuguration"><b>Timings Per Device for Configuration</b></label><br>
			         <select id="tc" name="deviceconfig">
					 <option value="0">None</option>
					 <option value="1">Less than 15 minutes</option>
                     <option value="2">Less than 30 minutes</option>
                     <option value="3">More than 30 minutes</option> 
					 </select><br>
					 
				<label for="assetUserSpecific"><b>Asset is User Specific</b></label><br>
			         <select id="us" name="userspecific">
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br><br>
					 
					 
					 
			<label for="imaging"><b><h3>Imaging</h3></b></label><br>
			
			<label for="isImaging"><b>Is Imaging and/or asset tagging required to be OnSite?</b></label><br>
			         <select id="iat" name="imagingonsite">
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br><br>
					 
					 
					 <label for="assetPrint"><b>Asset Tag creation and printing required?</b></label><br>
			         <select id="atc" name="tagcreation">
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br><br>
					 
					 
					 <label for="softwareInstallation"><b>Software Installation required after imaging?</b></label><br>
			         <select id="sfi" name="softwareinstall">
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br><br>
					 
					 
					 <label for="individualUsers"><b>Are images tailored for individual Users?</b></label><br>
			         <select id="it" name="imagetailored">
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br><br>
		      
        </form></div><br>
  
  
         <label for="element_4"><b><h3>Refurbishment of Desktop/Laptop</h3></b></label>
		   <select id="test4" name="form_select4">
                     <option value="0">Select</option>
                     <option value="1">Yes</option>
                     <option value ="2">No</option>
                     </select><br><br>
					 
			<div id="hidden_div4" style="display: none;">
			  <form>
			  
					<label for="siteDetails"><b><h3>Site Details</h3></b></label><br>
					
					<label for="siteDetails"><b>Single Location,Multiple Location/Floors</b></label><br>
					        
							<select>
					 <option value="0">Single Location/Floor</option>
					 <option value="1">Single Location/ Multiple Floors</option>
                     <option value="2">Multiple Locations</option>
                   
					        </select><br>
					 
					<label for="siteDetails"><b>Includes Metro Locations</b></label><br>
					        
							<select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                            </select><br>
					 
					 <label for="siteDetails"><b>Includes Regional Locations</b></label><br>
					        
							<select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                            </select><br>
					 
					 <label for="siteDetails"><b>Includes Remote/ Regional Locations</b></label><br>
					        
							<select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                            </select><br>
                   
					 
					 
					 <label for="siteDetails"><b>Post Technical Support</b></label><br>
					        
							<select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                            </select><br><br>
                   
					 
					 
					 
					<label for="hardwareDetails"><b><h3>Hardware Details</h3></b></label><br>
				
			       <b>Description of Devices:</b> <input type="text" name="device description">
			       <br>
			   
			   
			   
			    <label for=" timingForConfuguration"><b>Timings Per Device for Configuration</b></label><br>
			         <select>
					 <option value="0">None</option>
					 <option value="1">Less than 15 minutes</option>
                     <option value="2">Less than 30 minutes</option>
                     <option value="3">More than 30 minutes</option> 
					 </select><br>
					 
				<label for="assetUserSpecific"><b>Asset is User Specific</b></label><br>
			         <select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br><br>




 <label for="onsiteRequirement"><b><h3>OnSite Requirements</h3></b></label><br>
	            <label for="pilotTestsite"><b>Pilot/ Test Site</b></label><br>
			         <select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br>	
					 
				
				<label for="peripheral"><b>Peripheral Installation/Configuration</b></label><br>
			         <select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br>	
					 
				<label for="configuration"><b>Network Configuration</b></label><br>
			         <select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br>
					 
				<label for="dataTransfer"><b>Data Transfer</b></label><br>
			         <select>
					 <option value="none">None</option>
					 <option value="Yes(Upto 15 GB)">Yes(Upto 15 GB)</option>
					  <option value="Yes(Per 1 Gig over 15 GB)">Yes(Per 1 Gig over 15 GB)</option>
                     </select><br>	
					 
				<label for="install"><b>What time of the day can install take place</b></label><br>
			         <select>
					 <option value="0">None</option>
					 <option value="1">During Business Hours</option>
					  <option value="2">After Business Hours</option>
                     </select><br>
					 
				<label for="replacement"><b>Replacement/ New Set Up</b></label><br>
			         <select>
					 <option value="Replacement SetUp">Replacement SetUp</option>
					 <option value="New SetUp">New SetUp</option>
                     </select><br>
					 
					 
					 
				<b>TimeFrame of Installation:</b> <input type="text" name="device description"><br>
				
				
					 
				<label for="adHoc"><b>Adhoc Deployment</b></label><br>
			         <select>
					 <option value="Yes">Yes</option>
					 <option value="No">No</option>
                     </select><br>
					 
				
				<b>Estimated Customer Down time Per Unit:</b> 
				<input type="text" name="device description"><br>
				
				
				<label for="spares"><b>Will any spares be provided?</b></label><br>
			         <select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br>
					 
				<label for="informService"><b>Can individual staff to inform of Service?</b></label><br>
			         <select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br> 
					</form>
					</div><br>
					 
  
  
         
		 
		 
		 <label for="element_5"><b><h3>CMDB Update</h3></b></label>
                     <select id="test5" name="form_select">
                     <option value="0">Select</option>
                     <option value="1">Yes</option>
                     <option value ="2">No</option>
                     </select><br><br>
					 <div></div>
  
  
         
		  <label for="element_6"><b><h3>Hardware Upgrades</h3></b></label>
                     <select id="test6" name="form_select">
                     <option value="0">Select</option>
                     <option value="1">Yes</option>
                     <option value ="2">No</option>
                     </select><br><br>
					 <div></div>
					 
					 
		  
		  
		   <label for="element_7"><b><h3>Additional Software Installation</h3></b></label>
                     <select id="test7" name="form_select">
                     <option value="0">Select</option>
                     <option value="1">Yes</option>
                     <option value ="2">No</option>
                     </select><br><br>
					 <div></div>
  
  
  
  
  
<script>

document.getElementById('test2').addEventListener('change', function () {
    var style = this.value == 1 ? 'block' : 'none';
    document.getElementById('hidden_div2').style.display = style;
});




document.getElementById('test3').addEventListener('change', function () {
    var style = this.value == 0  ? 'none' : 'block';
    document.getElementById('hidden_div3').style.display = style;
	
});




document.getElementById('test4').addEventListener('change', function () {
    var style = this.value == 1 ? 'block' : 'none';
    document.getElementById('hidden_div4').style.display = style;
});





</script>
 </div>
 
 
 
  
  <div class="tab"><h2><b>Warehouse:</h2></b>
   
	<label for="element_9"><b><h3>Handling Charge</h3></b></label>
                     <select id="test9" name="form_select">
                     <option value="0">Select</option>
                     <option value="1">Receiving Devices</option>
                     <option value ="2">Dispatching Devices</option>
                     </select><br><br>
					 <div></div>
					 
					 
					 
	<label for="element_10"><b><h3>Warehouse Storage</h3></b></label>
                     <select id="test10" name="form_select">
                     <option value="0">Select</option>
                     <option value="1">Per Unit</option>
                     <option value ="2">Per Pallet</option>
                     </select><br><br>
					 <div></div>	




    <label for="element_11"><b><h3>Test and Tag</h3></b></label>
                     <select id="test11" name="form_select">
                     <option value="0">Select</option>
                     <option value="1">Yes</option>
                     <option value ="2">No</option>
                     </select><br><br>
					 <div></div>					 
  </div>
  
  
  
  
  
  <div class="tab"><h2><b>Decommissioning or Disposals:</h2></b>
    <p>
	      <label for="element_12"><b><h3>Secure Hard Disk Wipe</h3></b></label>
                     <select id="test12" name="form_select">
                     <option value="0">Select</option>
                     <option value="1">Erasure to HMG or DOD Standard (On Warehouse)</option>
                     <option value ="2">Erasure to HMG or DOD Standard (On Premise)</option>
                     </select><br><br>
					 <div></div>
	</p>
    <p><label for="element_13"><b><h3>Basic Hard Disk Erasure</h3></b></label>
                     <select id="test13" name="form_select">
                     <option value="0">Select</option>
                     <option value="1">Yes</option>
                     <option value ="2">No</option>
                     </select><br><br>
					 <div></div></p>
    <p>
	<label for="element_14"><b><h3>Physical Disk Destruction</h3></b></label>
                     <select id="test14" name="form_select">
                     <option value="0">Select</option>
                     <option value="1">On Warehouse</option>
                     <option value ="2">On Premise</option>
					 <option value ="3">3mm Shred Size (Warehouse)</option>
                     </select><br><br>
					 <div></div></p>
	
	<p>
	<label for="element_15"><b><h3>Environmental Device Disposal/Recycling</h3></b></label>
                     <select id="test15" name="form_select">
                     <option value="0">Select</option>
                     <option value="1">Yes</option>
                     <option value ="2">No</option>
					
                     </select><br><br>
					 <div></div></p>
					 
	<p>
	<label for="element_16"><b><h3>Environmental CRT Monitor Disposal/Recycling</h3></b></label>
                     <select id="test16" name="form_select">
                     <option value="0">Select</option>
                     <option value="1">Yes</option>
                     <option value ="2">No</option>
					
                     </select><br><br>
					 <div></div></p>
					 
	
	<p>
	<label for="element_17"><b><h3>Ethernet Switch Configuration Wiping</h3></b></label>
                     <select id="test17" name="form_select">
                     <option value="0">Select</option>
                     <option value="1">Yes</option>
                     <option value ="2">No</option>
					
                     </select><br><br>
					 <div></div></p>
					 
					 
  </div>
  <div class="tab"><h2></b>Deployment:</h2></b>
  
  
      <label for="element_18"><b><h3>OnSite Desktop Deployment Services</h3></b></label>
                     <select id="test18" name="form_select">
                     <option value="0">Select</option>
                     <option value="1">Metro</option>
                     <option value ="2">Non-Metro</option>
					
                     </select><br><br>
					 <div></div>
					 
					 
					 
	  <label for="element_19"><b><h3>Asset Confirmation prior to Deployment</h3></b></label>
                     <select id="test19" name="form_select">
                     <option value="0">Select</option>
                     <option value="1">Yes</option>
                     <option value ="2">No</option>
					
                     </select><br>
					 <div id="hidden_div19" style="display: none;">
			  <form>
			  
					<label for="siteDetails"><b><h3>Site Details</h3></b></label><br>
					
					<label for="siteDetails"><b>Single Location,Multiple Location/Floors</b></label><br>
					        
							<select>
					 <option value="0">Single Location/Floor</option>
					 <option value="1">Single Location/ Multiple Floors</option>
                     <option value="2">Multiple Locations</option>
                   
					        </select><br>
					 
					<label for="siteDetails"><b>Includes Metro Locations</b></label><br>
					        
							<select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                            </select><br>
					 
					 <label for="siteDetails"><b>Includes Regional Locations</b></label><br>
					        
							<select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                            </select><br>
					 
					 <label for="siteDetails"><b>Includes Remote/ Regional Locations</b></label><br>
					        
							<select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                            </select><br>
                   
					 
					 
					 <label for="siteDetails"><b>Post Technical Support</b></label><br>
					        
							<select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                            </select><br><br>
                   
					 
					 
					 
					<label for="hardwareDetails"><b><h3>Hardware Details</h3></b></label><br>
				
			       <b>Description of Devices:</b> 
				   <input type="text" name="device description">
			       <br>
			   
			   
			   
			    <label for=" timingForConfuguration"><b>Timings Per Device for Configuration</b></label><br>
			         <select>
					 <option value="0">None</option>
					 <option value="1">Less than 15 minutes</option>
                     <option value="2">Less than 30 minutes</option>
                     <option value="3">More than 30 minutes</option> 
					 </select><br>
					 
				<label for="assetUserSpecific"><b>Asset is User Specific</b></label><br>
			         <select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br><br>




 <label for="onsiteRequirement"><b><h3>OnSite Requirements</h3></b></label><br>
	            <label for="pilotTestsite"><b>Pilot/ Test Site</b></label><br>
			         <select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br>	
					 
				
				<label for="peripheral"><b>Peripheral Installation/Configuration</b></label><br>
			         <select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br>	
					 
				<label for="configuration"><b>Network Configuration</b></label><br>
			         <select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br>
					 
				<label for="dataTransfer"><b>Data Transfer</b></label><br>
			         <select>
					 <option value="0">None</option>
					 <option value="1">Yes(Upto 15 GB)</option>
					  <option value="2">Yes(Per 1 Gig over 15 GB)</option>
                     </select><br>	
					 
				<label for="install"><b>What time of the day can install take place</b></label><br>
			         <select>
					 <option value="0">None</option>
					 <option value="1">During Business Hours</option>
					  <option value="2">After Business Hours</option>
                     </select><br>
					 
				<label for="replacement"><b>Replacement/ New Set Up</b></label><br>
			         <select>
					 <option value="0">Replacement SetUp</option>
					 <option value="1">New SetUp</option>
                     </select><br>
					 
					 
					 
				<b>TimeFrame of Installation:</b> <input type="text" name="device description"><br>
				
				
					 
				<label for="adHoc"><b>Adhoc Deployment</b></label><br>
			         <select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br>
					 
				
				<b>Estimated Customer Down time Per Unit:</b> 
				<input type="text" name="device description"><br>
				
				
				<label for="spares"><b>Will any spares be provided?</b></label><br>
			         <select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br>
					 
				<label for="informService"><b>Can individual staff to inform of Service?</b></label><br>
			         <select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br> 
					</form>
					</div>
					 
				

<label for="element_20"><b><h3>Data Migration</h3></b></label>
                     <select id="test20" name="form_select">
                     <option value="0">None</option>
                     <option value="1">(<=15GB)</option>
                     <option value ="2">(>=15GB)</option>
					
                     </select><br>	

 <div id="hidden_div20" style="display: none;">
			  <form>
			  
					<label for="siteDetails"><b><h3>Site Details</h3></b></label><br>
					
					<label for="siteDetails"><b>Single Location,Multiple Location/Floors</b></label><br>
					        
							<select>
					 <option value="0">Single Location/Floor</option>
					 <option value="1">Single Location/ Multiple Floors</option>
                     <option value="2">Multiple Locations</option>
                   
					        </select><br>
					 
					<label for="siteDetails"><b>Includes Metro Locations</b></label><br>
					        
							<select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                            </select><br>
					 
					 <label for="siteDetails"><b>Includes Regional Locations</b></label><br>
					        
							<select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                            </select><br>
					 
					 <label for="siteDetails"><b>Includes Remote/ Regional Locations</b></label><br>
					        
							<select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                            </select><br>
                   
					 
					 
					 <label for="siteDetails"><b>Post Technical Support</b></label><br>
					        
							<select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                            </select><br><br>
                   
					 
					 
					 
					<label for="hardwareDetails"><b><h3>Hardware Details</h3></b></label><br>
				
			       <b>Description of Devices:</b> 
				   <input type="text" name="device description">
			       <br>
			   
			   
			   
			    <label for=" timingForConfuguration"><b>Timings Per Device for Configuration</b></label><br>
			         <select>
					 <option value="0">None</option>
					 <option value="1">Less than 15 minutes</option>
                     <option value="2">Less than 30 minutes</option>
                     <option value="3">More than 30 minutes</option> 
					 </select><br>
					 
				<label for="assetUserSpecific"><b>Asset is User Specific</b></label><br>
			         <select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br><br>




 <label for="onsiteRequirement"><b><h3>OnSite Requirements</h3></b></label><br>
	            <label for="pilotTestsite"><b>Pilot/ Test Site</b></label><br>
			         <select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br>	
					 
				
				<label for="peripheral"><b>Peripheral Installation/Configuration</b></label><br>
			         <select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br>	
					 
				<label for="configuration"><b>Network Configuration</b></label><br>
			         <select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br>
					 
				<label for="dataTransfer"><b>Data Transfer</b></label><br>
			         <select>
					 <option value="0">None</option>
					 <option value="1">Yes(Upto 15 GB)</option>
					  <option value="2">Yes(Per 1 Gig over 15 GB)</option>
                     </select><br>	
					 
				<label for="install"><b>What time of the day can install take place</b></label><br>
			         <select>
					 <option value="0">None</option>
					 <option value="1">During Business Hours</option>
					  <option value="2">After Business Hours</option>
                     </select><br>
					 
				<label for="replacement"><b>Replacement/ New Set Up</b></label><br>
			         <select>
					 <option value="0">Replacement SetUp</option>
					 <option value="1">New SetUp</option>
                     </select><br>
					 
					 
					 
				<b>TimeFrame of Installation:</b> <input type="text" name="device description"><br>
				
				
					 
				<label for="adHoc"><b>Adhoc Deployment</b></label><br>
			         <select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br>
					 
				
				<b>Estimated Customer Down time Per Unit:</b> 
				<input type="text" name="device description"><br>
				
				
				<label for="spares"><b>Will any spares be provided?</b></label><br>
			         <select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br>
					 
				<label for="informService"><b>Can individual staff to inform of Service?</b></label><br>
			         <select>
					 <option value="0">Yes</option>
					 <option value="1">No</option>
                     </select><br> 
					</form>
					</div>	



<label for="element_21"><b><h3>Delivery to Desk Courier(Excludes installations)</h3></b></label>
                     <select id="test19" name="form_select">
                     <option value="0">Select</option>
                     <option value="1">Yes</option>
                     <option value ="2">No</option>
					
                     </select><br>	



<label for="element_22"><b><h3>CISCO IP OnSite Installation</h3></b></label>
                     <select id="test20" name="form_select">
                     <option value="0">Select</option>
                     <option value="1">Yes</option>
                     <option value ="2">No</option>
					
                     </select><br>		



<label for="element_23"><b><h3>Mounted Monitor Installation</h3></b></label>
                     <select id="test20" name="form_select">
                     <option value="0">Select</option>
                     <option value="1">Stand Alone</option>
                     <option value ="2">With Base Unit</option>
					
                     </select><br>	




<label for="element_24"><b><h3>At Desk (Additional Software Installation)</h3></b></label>
                     <select id="test20" name="form_select">
                     <option value="0">Select</option>
                     <option value="1">Yes</option>
                     <option value ="2">No</option>
					
                     </select><br>					 
					 					 
					 					 
					 
    
  </div>
  
  <script>
  
  
  
document.getElementById('test19').addEventListener('change', function () {
    var style = this.value == 1 ? 'block' : 'none';
    document.getElementById('hidden_div19').style.display = style;
});

document.getElementById('test20').addEventListener('change', function () {
    var style = this.value == 1 ? 'block' : 'none';
    document.getElementById('hidden_div20').style.display = style;
});
  </script>
  
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

</div>
</div>

<button class="remarkit-btn">Open Modal</button> 

  

<!-- The Modal --> 

<div class="remarkit-src modal"> 

  

  <!-- Modal content --> 

  <div class="modal-content animated bounceInDown"> 

     

    

        <span class="close">&times;</span> 

        <p>Some text in the Modal..</p> 

     

  </div> 

  

</div> 


<form action="contact-mail-file.php" id="remarket" method="post">
<input type="text" />
<input type="submit" />
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {

	//alert (n);
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}


$(document).ready(function(){ 
        $(function(){ 
			$('#remarket').submit(function(e){ 
				 e.preventDefault();
    			
               
                var form = $(this); 
                var post_url = form.attr('action');
                var post_data = form.serialize(); 
               
                $.ajax({ 
					beforeSend: function (request) {
							
							$(".remarkit-src").show(); 
							
							if($('#clk').data('clicked')) {
								$(".remarkit-src").hide();  
								alert('Do you want to send an email');
								return true;
							}
							else {return false;}
					},
                    type: 'POST', 
                    url: post_url,  
                    data: post_data, 
                    success: function(msg) { 
                        $(form).fadeOut(800, function(){ 
                            form.html(msg).fadeIn().delay(2000); 
                            alert('Email has sent Successfully');
  
                        }); 
                    } 
                }); 
            }); 
        }); 


});
	


      
		 
	</script>

<script>
$(document).ready(function(){
		$('#clk').click(function(){
			  $(this).data('clicked', true);
			$('#regForm').submit();
		});
	 
	$(".close, #cancel, #cncl").on("click", function(){ 

        $(".preview").hide(); 

    }); 
	
	$(".popupform input, .popupform textarea").prop('readonly', true); 


     

    $(".preview").on("click", function(){ 

        $(this).hide(); 

    }); 

     

    $(".modal-content").on("click", function(){ 

        event.stopPropagation(); 

    }); 
});






/*
$(document).ready(function(){ 
        $(function(){ 
        $('#regForm').submit(function(e){ 
			var kk = $('#name').val();
                e.preventDefault();
                var form = $(this); 
                var post_url = form.attr('action');
                var post_data = form.serialize(); 
               
                $.ajax({ 
					beforeSend: function (request) {
       					alert(kk);
						$('#abc').text(kk);
//						Before form submit show popup or alert here
					},
                    type: 'POST', 
                    url: post_url,  
                    data: post_data, 
                    success: function(msg) { 
                        $(form).fadeOut(800, function(){ 
                            form.html(msg).fadeIn().delay(2000); 
                            $('#loader3').show();
  
                        }); 
                    } 
                }); 
            }); 
        }); 
     }); 


//$(document).ready(function() {  

    //$("#regForm").submit(function(e) {  
	
 // variable for show values
    // function showValues() {
   // var str = $( "form" ).serialize();
   // $( "#results" ).text( str );
 // }
 // $( "input[type='checkbox'], input[type='radio']" ).on( "click", showValues );
 // $( "select" ).on( "change", showValues );
 // showValues();


   /*     var url = "action.php"; // the script where you handle the form input.   

        $.ajax({  

            type: "POST",  

            url: url,  

            data: new FormData( this ), 

            processData: false, 

            contentType: false, 

            // serializes the form's elements.   

            success: function(data) {  

                alert(data);  

                $('.thanks').fadeIn(); // show response from the php script.   

            }, 

error: function(data) { 

            $('.contactf').find(":submit").prop("disabled", false); 

              alert("There was an error. Try again please!"); 

              $('#gif').css('display', 'none'); 

              $('.errors').fadeIn(); 

}  

        });  

   

        e.preventDefault(); // avoid to execute the actual submit of the form.   

    });  

}); 

$(document).ready(function(){ 
        $(function(){ 
        $('#regForm').submit(function(e){ 
			var kk = $('#po').val();
			var ln = $('#lname').val();
			var eml = $('#email').val();
			var msg = $('#msg').val();
                e.preventDefault();
                var form = $(this); 
                var post_url = form.attr('action');
                var post_data = form.serialize(); 
               
                $.ajax({ 
					beforeSend: function (request) {
						$('#name1').val(kk);
						$('#lname1').val(ln);
						$('#email1').val(eml);
						$('#msg1').val(msg);
       					$(".recruitecontent").show();
						return false;
					},
                    type: 'POST', 
                    url: post_url,  
                    data: post_data, 
                    success: function(msg) { 
                        $(form).fadeOut(800, function(){ 
                            form.html(msg).fadeIn().delay(2000); 
                            $('#loader3').show();
  
                        }); 
                    } 
                }); 
            }); 
        }); 


}); 
	

$(document).ready(function(){ 
        $(function(){ 
        $('.secondform').submit(function(e){ 
			
                e.preventDefault();
                var form = $(this); 
                var post_url = form.attr('action');
                var post_data = form.serialize(); 
               
                $.ajax({ 
					type: 'POST', 
                    url: post_url,  
                    data: post_data, 
                    success: function(msg) { 
                        window.location.href = "http://klifftechnologies.in";
                    } 
                }); 
            }); 
        }); 


}); */

$(document).ready(function(){ 

   

    $(".close").on("click", function(){ 

        $(".remarkit-src").hide(); 

    }); 

     

    $(".remarkit-src").on("click", function(){ 

        $(this).hide(); 

    }); 

     

    $(".modal-content").on("click", function(){ 

        event.stopPropagation(); 

    }); 



}); 
</script>




<!--added by anwerb-->
<script type="">

$(document).ready(function(){ 

$('#test1').on('change', function() {
	$('#unit1').val('');
	 $('#price').text('0');

	if(this.value == 1)
    	{
    	var price ='2';
    	$('#unit').show();

    	}
    	else if (this.value == 2)
    	{
    	var price ='3';
    	$('#unit').show();
    	}
    	else
    	{
    	var price ='0';
    	$('#unit').hide();
    	}
 
        $('#unique_price').val(price);

})

    $('#unit1').bind('input', function() { 
    var unit=$(this).val();
    var unique_val=$('#unique_price').val();
    $('#price').text(unit * unique_val)
	});

}); 
</script>

</body>

</html>
