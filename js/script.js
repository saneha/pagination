$(document).ready(function () {
	/*STEP 1*/
	$('#asset_table').hide();
	$('#asset_unit').hide();

	$('#bios_update_table').hide();
	$('#bios_update_unit').hide();
	$('#ifbios').hide();

	$('#imaging_table').hide();
	$('#imaging_unit').hide();
	$('#ifimaging').hide();

	$('#refurbishment_desktop_table').hide();
	$('#refurbishment_desktop_unit').hide();
	$('#ifrefurbishment').hide();
	
	$('#cmdb_update_table').hide();
	$('#cmdb_update_unit').hide();
	
	$('#hardware_upgrade_table').hide();
	$('#hardware_upgrade_unit').hide();
	
	$('#addition_installation_table').hide();
	$('#addition_installation_unit').hide();

	
	

	$('select[name="asset_tagging"]').on('change', function(){
		var asset_tagging = $(this).val();
		if($(this).val() != ''){
			$('#asset_unit').show();

			if(asset_tagging == 'Physical Only')
			{
				var price ='2';

			} else if (asset_tagging == 'BIOS asset Tagging') {
				var price ='3';
			}

			$('input[name="unit_price_step1"]').val(price);
			$('input[name="unique_price_step1"]').val(0);
			$('input[name="unique_price"]').val(0);

		} else {

			$('input[name="unit_price_step1"]').val(0);
			$('input[name="unique_price_step1"]').val(0);

			$('#asset_unit').hide();
		}

		var unique_val2 = $('input[name="unique_price_step2"]').val();
		var unique_val3 = $('input[name="unique_price_step3"]').val();
		var unique_val4 = $('input[name="unique_price_step4"]').val();

		unique_val = (unique_val2*1)+(unique_val3*1)+(unique_val4+0);
		$('input[name="unique_price"]').val(unique_val);
		$('input[name="asset_tagging_unit"]').val(0);
	});

  $('select[name="asset_tagging"]').click(function(){
    $("#asset_table").slideToggle();
  });

	$('select[name="bios_update"]').on('change', function(){
		if($(this).val() == 'yes'){
			$('#ifbios').show();
			$('#bios_update_unit').show();
		} else {
			$('#ifbios').hide();
			$('#bios_update_unit').hide();
		}
	});

  $('select[name="bios_update"]').click(function(){
    $("#bios_update_table").slideToggle();
  });

	$('select[name="imaging"]').on('change', function(){
		if($(this).val() != ''){
			$('#ifimaging').show();
			$('#imaging_unit').show();
		} else {
			$('#ifimaging').hide();
			$('#imaging_unit').hide();
		}
	});

  $('select[name="imaging"]').click(function(){
    $("#imaging_table").slideToggle();
  });

  
  
  
	$('select[name="refurbishment_desktop"]').on('change', function(){
		if($(this).val() == 'Yes'){
			$('#ifrefurbishment').show();
			$('#refurbishment_desktop_unit').show();
		} else {
			$('#ifrefurbishment').hide();
			$('#refurbishment_desktop_unit').hide();
		}
	});

	$('select[name="refurbishment_desktop"]').click(function(){
    $("#refurbishment_desktop_table").slideToggle();
  });
	
	
	$('select[name="cmdb_update"]').on('change', function(){
		if($(this).val() == 'yes'){
		
			$('#cmdb_update_unit').show();
		} else {
			
			$('#cmdb_update_unit').hide();
		}
	});

  $('select[name="cmdb_update"]').click(function(){
    $("#cmdb_update_table").slideToggle();
  });
   
   
   $('select[name="hardware_upgrade"]').on('change', function(){
		if($(this).val() == 'yes'){
			
			$('#hardware_upgrade_unit').show();
		} else {
		
			$('#hardware_upgrade_unit').hide();
		}
	});

  $('select[name="hardware_upgrade"]').click(function(){
    $("#hardware_upgrade_table").slideToggle();
  });
  
  
  $('select[name="addition_installation"]').on('change', function(){
		if($(this).val() == 'yes'){
			
			$('#addition_installation_unit').show();
		} else {
		
			$('#addition_installation_unit').hide();
		}
	});

	
  $('select[name="addition_installation"]').click(function(){
    $("#addition_installation_table").slideToggle();
  });
  
  
  $('input[name="asset_tagging_unit"]').bind('input', function() {
    var unit = $(this).val();
    var price = 0
    var unique_val = 0;
	
    if(unit >= 1 && unit <= 10){
    	price= 3.13;
    } else if(unit > 10 && unit <= 200){
    	price= 2.97
    } else if(unit > 200 && unit <= 1000){
    	price= 2.89
    } else if(unit > 1000){
    	price= 2.81
    }

	unique_val = unit*price;
	
		$('input[name="unit_price_step1"]').val(price);
		$('input[name="unique_price_step1"]').val(unique_val);

		var unique_price_step2 = $('input[name="unique_price_step2"]').val();
		var unique_price_step3 = $('input[name="unique_price_step3"]').val();
		var unique_price_step4 = $('input[name="unique_price_step4"]').val();
		unique_val = (unique_price_step2*1)+(unique_price_step3*1)+(unique_price_step4*1)+(unique_val*1);

    $('input[name="unique_price"]').val(unique_val);
	});

	
	
	
	
	/*STEP 2*/
	
	
	$('#handling_unit').hide();
	$('#handling_charge_table').hide();
	
	$('#warehouse_storage_unit').hide();
	$('#warehouse_storage_table').hide();
	
	$('#test_tags_unit').hide();
	$('#test_tags_table').hide();
	
	

	$('select[name="handling_charge"]').on('change', function(){
		if($(this).val() !== ''){
			$('#handling_unit').show();

		} else {
			$('#handling_unit').hide();
		}

		$('input[name="unit_price_step2"]').val(0);
		$('input[name="unique_price_step2"]').val(0);

		var unique_price_step1 = $('input[name="unique_price_step1"]').val();
		var unique_price_step3 = $('input[name="unique_price_step3"]').val();
		var unique_price_step4 = $('input[name="unique_price_step4"]').val();
		var unique_val = (unique_price_step1*1)+(unique_price_step3*1)+(unique_price_step4*1);

    $('input[name="unique_price"]').val(unique_val);
    $('input[name="handling_unit"]').val(0);
	});

  $('select[name="handling_charge"]').click(function(){
    $("#handling_charge_table").slideToggle();
  });

  
  $('select[name="warehouse_storage"]').on('change', function(){
		if($(this).val() !== ''){
			
			$('#warehouse_storage_unit').show();
		} else {
		
			$('#warehouse_storage_unit').hide();
		}
	});

	
  $('select[name="warehouse_storage"]').click(function(){
    $("#warehouse_storage_table").slideToggle();
  });
  
  
  
  $('select[name="test_tags"]').on('change', function(){
		if($(this).val() == 'yes'){
			
			$('#test_tags_unit').show();
		} else {
		
			$('#test_tags_unit').hide();
		}
	});

	
  $('select[name="test_tags"]').click(function(){
    $("#test_tags_table").slideToggle();
  });
  
  
  $('input[name="handling_unit"]').bind('input', function() {
    var unit = $(this).val();
    var price = 0;
    var unique_val = 0;

    if(unit >= 1 && unit <= 10){
    	price = 2;
    } else if(unit > 10 && unit <= 200){
    	price = 3;
    } else if(unit > 200 && unit <= 1000){
    	price = 4;
    } else if(unit > 1000){
    	price = 5;
    }

    unique_val = unit*price;

		$('input[name="unit_price_step2"]').val(price);
		$('input[name="unique_price_step2"]').val(unique_val);

		var unique_price_step3 = $('input[name="unique_price_step3"]').val();
		var unique_price_step4 = $('input[name="unique_price_step4"]').val();
		var unique_price_step1 = $('input[name="unique_price_step1"]').val();

		unique_val = (unique_price_step1*1)+(unique_price_step3*1)+(unique_price_step4*1)+(unique_val*1);

	  $('input[name="unique_price"]').val(unique_val);
	});

	
	
	
	
	/*STEP 3*/
	
	$('#disposal_unit').hide();
	$('#disposal_table').hide();
	
	$('#hard_disk_unit').hide();
	$('#hard_disk_table').hide();
	
	$('#disk_destruction_unit').hide();
	$('#disk_destruction_table').hide();
	
	$('#environmental_device_unit').hide();
	$('#environmental_device_table').hide();
	
	$('#ethernet_switch_unit').hide();
	$('#ethernet_switch_table').hide();
	
	
	
	

	$('select[name="secuue_hard_disk_wipe"]').on('change', function(){
		if($(this).val() !== ''){
			$('#disposal_unit').show();
		} else {
			$('#disposal_unit').hide();
		}

		var unique_price_step2 = $('input[name="unique_price_step2"]').val();
		var unique_price_step4 = $('input[name="unique_price_step4"]').val();
		var unique_price_step1 = $('input[name="unique_price_step1"]').val();

		var unique_val = (unique_price_step1*1)+(unique_price_step2*1)+(unique_price_step4*1);

    $('input[name="unique_price"]').val(unique_val);
    $('input[name="disposal_unit"]').val(0);
	});
	
	
	$('select[name="secuue_hard_disk_wipe"]').click(function(){
    $("#disposal_table").slideToggle();
  });
  
   $('select[name="basic_hard_disk_erasure"]').on('change', function(){
		if($(this).val() == 'yes'){
			
			$('#hard_disk_unit').show();
		} else {
		
			$('#hard_disk_unit').hide();
		}
	});

	
  $('select[name="basic_hard_disk_erasure"]').click(function(){
    $("#hard_disk_table").slideToggle();
  });
   
  
  $('select[name="physical_disk_destruction"]').on('change', function(){
		if($(this).val() !== ''){
			
			$('#disk_destruction_unit').show();
		} else {
		
			$('#disk_destruction_unit').hide();
		}
	});

	
  $('select[name="physical_disk_destruction"]').click(function(){
    $("#disk_destruction_table").slideToggle();
  });

  
  $('select[name="environmental_device"]').on('change', function(){
		if($(this).val() !== ''){
			
			$('#environmental_device_unit').show();
		} else {
		
			$('#environmental_device_unit').hide();
		}
	});

	
  $('select[name="environmental_device"]').click(function(){
    $("#environmental_device_table").slideToggle();
  });
  
  
  $('select[name="ethernet_switch"]').on('change', function(){
		if($(this).val() == 'yes'){
			
			$('#ethernet_switch_unit').show();
		} else {
		
			$('#ethernet_switch_unit').hide();
		}
	});

	
  $('select[name="ethernet_switch"]').click(function(){
    $("#ethernet_switch_table").slideToggle();
  });
  
  
  $('input[name="disposal_unit"]').bind('input', function() {
    var unit = $(this).val();
    var price = 0;
    var unique_val = 0;

    if(unit >= 1 && unit <= 10){
    	price = 2;
    } else if(unit > 10 && unit <= 200){
    	price = 3;
    } else if(unit > 200 && unit <= 1000){
    	price = 4;
    } else if(unit > 1000){
    	price = 5;
    }

    unique_val = unit*price;

		$('input[name="unit_price_step3"]').val(price);
		$('input[name="unique_price_step3"]').val(unique_val);

		var unique_price_step2 = $('input[name="unique_price_step2"]').val();
		var unique_price_step4 = $('input[name="unique_price_step4"]').val();
		var unique_price_step1 = $('input[name="unique_price_step1"]').val();
		unique_val = (unique_price_step1*1)+(unique_price_step2*1)+(unique_price_step4*1)+(unique_val*1);

    $('input[name="unique_price"]').val(unique_val);
	});

	
	
	
	
	
	
	/*STEP 4*/
	$('#deployment_unit').hide();
	$('#deployment_table').hide();
	
	
	$('#asset_confirmation_unit').hide();
	$('#asset_confirmation_table').hide();
	
	$('#data_migration_unit').hide();
	$('#data_migration_table').hide();
	
	$('#desk_courier_unit').hide();
	$('#desk_courier_table').hide();
	
	$('#onsite_installation_unit').hide();
	$('#onsite_installation_table').hide();
	
	$('#monitor_installation_unit').hide();
	$('#monitor_installation_table').hide();
	
	$('#desk_additional_software_unit').hide();
	$('#desk_additional_software_table').hide();

	$('select[name="onsite_development_services"]').on('change', function(){
		if($(this).val() !== ''){

			$('#unit_price_step4').val(0);
			$('#unique_price_step4').val(0);
			$('#deployment_unit').show();

		} else {
			$('#unit_price_step4').val(0);
			$('#unique_price_step4').val(0);

			$('#deployment_unit').hide();
		}

		var unique_val1 = $('input[name="unique_price_step1"]').val();
		var unique_val3 = $('input[name="unique_price_step3"]').val();
		var unique_val2 = $('input[name="unique_price_step2"]').val();

		unique_val = (unique_val1*1)+(unique_val3*1)+(unique_val2*1);
		$('input[name="unique_price"]').val(unique_val);
		$('input[name="deployment_unit"]').val(0);
	});

  $('select[name="onsite_development_services"]').click(function(){
    $("#deployment_table").slideToggle();
  });

  
  $('select[name="confirmations_deployment"]').on('change', function(){
		if($(this).val() == 'yes'){
			
			$('#asset_confirmation_unit').show();
		} else {
		
			$('#asset_confirmation_unit').hide();
		}
	});

	
  $('select[name="confirmations_deployment"]').click(function(){
    $("#asset_confirmation_table").slideToggle();
  });
  
  
  $('select[name="data_migration"]').on('change', function(){
		if($(this).val() !== ''){
			
			$('#data_migration_unit').show();
		} else {
		
			$('#data_migration_unit').hide();
		}
	});

	
  $('select[name="data_migration"]').click(function(){
    $("#data_migration_table").slideToggle();
  });
  
  
  
  $('select[name="delivery_to_desk_courier"]').on('change', function(){
		if($(this).val() == 'yes'){
			
			$('#desk_courier_unit').show();
		} else {
		
			$('#desk_courier_unit').hide();
		}
	});

	
  $('select[name="delivery_to_desk_courier"]').click(function(){
    $("#desk_courier_table").slideToggle();
  });
  
  
  $('select[name="disco_ip_onsite_installation"]').on('change', function(){
		if($(this).val() == 'yes'){
			
			$('#onsite_installation_unit').show();
		} else {
		
			$('#onsite_installation_unit').hide();
		}
	});

	
  $('select[name="disco_ip_onsite_installation"]').click(function(){
    $("#onsite_installation_table").slideToggle();
  });
  
  
  
  $('select[name="mounted_monitor_installation"]').on('change', function(){
		if($(this).val() !== ''){
			
			$('#monitor_installation_unit').show();
		} else {
		
			$('#monitor_installation_unit').hide();
		}
	});

	
  $('select[name="mounted_monitor_installation"]').click(function(){
    $("#monitor_installation_table").slideToggle();
  });
  
  
  $('select[name="desk_additional_software"]').on('change', function(){
		if($(this).val() == 'yes'){
			
			$('#desk_additional_software_unit').show();
		} else {
		
			$('#desk_additional_software_unit').hide();
		}
	});

	
  $('select[name="desk_additional_software"]').click(function(){
    $("#desk_additional_software_table").slideToggle();
  });
  
  
  $('input[name="deployment_unit"]').bind('input', function() {
    var unit = $(this).val();
    var price = 0;
    var unique_val = 0;

    if(unit >= 1 && unit <= 10){
    	price = 2;
    } else if(unit > 10 && unit <= 200){
    	price = 3;
    } else if(unit > 200 && unit <= 1000){
    	price = 4;
    } else if(unit > 1000){
    	price = 5;
    }

    unique_val = unit*price;

		$('input[name="unit_price_step4"]').val(price);
		$('input[name="unique_price_step4"]').val(unique_val);

		var unique_price_step1 = $('input[name="unique_price_step1"]').val();
		var unique_price_step2 = $('input[name="unique_price_step2"]').val();
		var unique_price_step3 = $('input[name="unique_price_step3"]').val();
		unique_val = (unique_price_step1*1)+(unique_price_step2*1)+(unique_price_step3*1)+(unique_val*1);

    $('input[name="unique_price"]').val(unique_val);
	});

	$('.next1').on('click', function(){
		$('#asset_tagging').text($('select[name="asset_tagging"]').val());
		$('#asset_tagging_price').text($('input[name="unit_price_step1"]').val());
		$('#asset_tagging_unit').val($('input[name="asset_tagging_unit"]').val());
		$('#asset_tagging_unitPrice').text($('input[name="unique_price_step1"]').val());

		$('#bios_update').text($('select[name="bios_update"]').val());
		$('#asset_device_description').text($('textarea[name="asset_device_description"]').val());
		$('#asset_timmingForConfig').text($('select[name="asset_timmingForConfig"]').val());
		$('#assset_uer_specific').text($('select[name="assset_uer_specific"]').val());
		$('#imaging').text($('select[name="imaging"]').val());
		$('#imaging').text($('select[name="tagging_onsite"]').val());
		$('#tag_creation_printing').text($('select[name="tag_creation_printing"]').val());
		$('#tailored_individual_user').text($('select[name="tailored_individual_user"]').val());
		$('#refurbishment_desktop').text($('select[name="refurbishment_desktop"]').val());
		$('#locations').text($('select[name="locations"]').val());
		$('#metro_locations').text($('select[name="metro_locations"]').val());
		$('#regional_locations').text($('select[name="regional_locations"]').val());
		$('#remote_locations').text($('select[name="remote_locations"]').val());
		$('#post_technical_support').text($('select[name="post_technical_support"]').val());
		$('#hardware_device_description').text($('textarea[name="hardware_device_description"]').val());
		$('#hardware_timmingForConfig').text($('select[name="hardware_timmingForConfig"]').val());
		$('#user_specific_asset').text($('select[name="user_specific_asset"]').val());
		$('#pilot_site').text($('select[name="pilot_site"]').val());
		$('#configuration').text($('select[name="configuration"]').val());
		$('#network_configuralation').text($('select[name="network_configuralation"]').val());
		$('#data_transfer').text($('select[name="data_transfer"]').val());
		$('#timming_installation').text($('select[name="timming_installation"]').val());
		$('#setup_type').text($('select[name="setup_type"]').val());
		$('#timeframe_installation').text($('textarea[name="timeframe_installation"]').val());
		$('#adhoc_development').text($('select[name="adhoc_development"]').val());
		$('#estimated_down_type').text($('input[name="estimated_down_type"]').val());
		$('#spares_provided').text($('select[name="spares_provided"]').val());
		$('#individual_staff').text($('select[name="individual_staff"]').val());
		$('#cmdb_update').text($('select[name="cmdb_update"]').val());
		$('#hardware_upgrade').text($('select[name="hardware_upgrade"]').val());
		$('#addition_installation').text($('select[name="addition_installation"]').val());

	});

	$('.next2').on('click', function(){

		$('#handling_charge').text($('select[name="handling_charge"]').val());
		$('#handlingcharge_price').text($('input[name="unit_price_step2"]').val());
		$('#handling_unitPrice').text($('input[name="unique_price_step2"]').val());
		$('#handling_unit').val($('input[name="handling_unit"]').val());
		$('#handling_unit2').text($('input[name="handling_unit"]').val());
		$('#warehouse_storage').text($('select[name="warehouse_storage"]').val());
		$('#warehouse_storage_unit').val($('input[name="warehouse_storage_unit"]').val());
		$('#test_tags').text($('select[name="test_tags"]').val());
		$('#test_tags_unit').text($('select[name="test_tags_unit"]').val());
	});

	$('.next3').on('click', function(){

		$('#secuue_hard_disk_wipe').text($('select[name="secuue_hard_disk_wipe"]').val());

		$('#disposal_price').text($('input[name="unit_price_step3"]').val());
		$('#disposal_unitPrice').text($('input[name="unique_price_step3"]').val());
		$('#disposal_unit').val($('input[name="disposal_unit"]').val());

		$('#physical_disk_destruction').text($('select[name="physical_disk_destruction"]').val());
		$('#environmental_device').text($('select[name="environmental_device"]').val());
		$('#ethernet_switch').text($('select[name="ethernet_switch"]').val());
	});

	$('.next4').on('click', function(){

		$('#onsite_development_services').text($('select[name="onsite_development_services"]').val());

		$('#deployment_price').text($('input[name="unit_price_step4"]').val());
		$('#deployment_unitPrice').text($('input[name="unique_price_step4"]').val());
		$('#deployment_unit').val($('input[name="deployment_unit"]').val());

		$('#confirmations_deployment').text($('select[name="confirmations_deployment"]').val());
		$('#data_migration').text($('select[name="data_migration"]').val());
		$('#delivery_to_desk_courier').text($('select[name="delivery_to_desk_courier"]').val());
		$('#disco_ip_onsite_installation').text($('select[name="disco_ip_onsite_installation"]').val());
		$('#mounted_monitor_installation').text($('select[name="mounted_monitor_installation"]').val());
		$('#desk_additional_software').text($('select[name="desk_additional_software"]').val());
	});

  $('#asset_tagging_unit').change(function() {
    var unit = $(this).val();
    var price = $('input[name="unit_price_step1"]').val();
    var unique_val = 0;
    if(unit >= 1 && unit <= 10){
    	unique_val = unit*price;
    } else if(unit > 10 && unit <= 200){
    	unique_val = unit*price;
    } else if(unit > 200 && unit <= 1000){
    	unique_val = unit*price;
    } else if(unit > 1000){
    	unique_val = unit*price;
    }

		$('input[name="unit_price_step1"]').val(price);
		$('input[name="unique_price_step1"]').val(unique_val);
	  $('#asset_tagging_unitPrice').text(unique_val);

		var unique_price_step2 = $('input[name="unique_price_step2"]').val();
		var unique_price_step3 = $('input[name="unique_price_step3"]').val();
		var unique_price_step4 = $('input[name="unique_price_step4"]').val();
		unique_val = (unique_price_step2*1)+(unique_price_step3*1)+(unique_price_step4*1)+(unique_val*1);

    $('input[name="unique_price"]').val(unique_val);
	});

  $('#handling_units').change(function() {
    var unit = $(this).val();
    var price = 0;
    var unique_val = 0;

    if(unit >= 1 && unit <= 10){
    	price = 2;
    } else if(unit > 10 && unit <= 200){
    	price = 3;
    } else if(unit > 200 && unit <= 1000){
    	price = 4;
    } else if(unit > 1000){
    	price = 5;
    }

    unique_val = unit*price;

		$('input[name="unit_price_step2"]').val(price);
		$('input[name="unique_price_step2"]').val(unique_val);
	  $('#handling_unitPrice').text(unique_val);

		var unique_price_step3 = $('input[name="unique_price_step3"]').val();
		var unique_price_step4 = $('input[name="unique_price_step4"]').val();
		var unique_price_step1 = $('input[name="unique_price_step1"]').val();

		unique_val = (unique_price_step1*1)+(unique_price_step3*1)+(unique_price_step4*1)+(unique_val*1);

    $('input[name="unique_price"]').val(unique_val);
	});

  $('#disposal_units').change(function() {
    var unit = $(this).val();
    var price = 0;
    var unique_val = 0;

    if(unit >= 1 && unit <= 10){
    	price = 2;
    } else if(unit > 10 && unit <= 200){
    	price = 3;
    } else if(unit > 200 && unit <= 1000){
    	price = 4;
    } else if(unit > 1000){
    	price = 5;
    }

    unique_val = unit*price;

		$('input[name="unit_price_step3"]').val(price);
		$('input[name="unique_price_step3"]').val(unique_val);
	  $('#disposal_unitPrice').text(unique_val);

		var unique_price_step2 = $('input[name="unique_price_step2"]').val();
		var unique_price_step4 = $('input[name="unique_price_step4"]').val();
		var unique_price_step1 = $('input[name="unique_price_step1"]').val();
		unique_val = (unique_price_step1*1)+(unique_price_step2*1)+(unique_price_step4*1)+(unique_val*1);

	  $('input[name="unique_price"]').val(unique_val);
	});

  $('#deployment_units').change(function() {
    var unit = $(this).val();
    var price = 0;
    var unique_val = 0;

    if(unit >= 1 && unit <= 10){
    	price = 2;
    } else if(unit > 10 && unit <= 200){
    	price = 3;
    } else if(unit > 200 && unit <= 1000){
    	price = 4;
    } else if(unit > 1000){
    	price = 5;
    }

    unique_val = unit*price;

		$('input[name="unit_price_step4"]').val(price);
		$('input[name="unique_price_step4"]').val(unique_val);
	  $('#deployment_unitPrice').text(unique_val)

		var unique_price_step1 = $('input[name="unique_price_step1"]').val();
		var unique_price_step2 = $('input[name="unique_price_step2"]').val();
		var unique_price_step3 = $('input[name="unique_price_step3"]').val();
		unique_val = (unique_price_step1*1)+(unique_price_step2*1)+(unique_price_step3*1)+(unique_val*1);

    $('input[name="unique_price"]').val(unique_val);
	});
});