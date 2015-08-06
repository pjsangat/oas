
<script language="javascript">
$(function(){
	var dateToday = new Date(); 
	$("#datepicker").datepicker({
        showButtonPanel: true,
        minDate: dateToday,
    });
	
	$('#building').on('change', function() {
		waiteme('#search_form');
		var csrf_name = $('input[name=csrf_name]').val()
		var b_id = this.value;
  		$.post('<?php echo base_url();?>search/get_facility',
		{
			b_id:b_id,
			csrf_name:csrf_name			
		},
		function(data){
			$('#search_form').waitMe('hide');
			$('#facility').html(data);
		});
		
		$.post('<?php echo base_url();?>search/get_equipments',
		{
			b_id:b_id,
			csrf_name:csrf_name		
		},
		function(data){
			$('#equipment').html(data);
		});	
		return false;
	});
});

 function search_b(oForm)
 {
	var csrf_name = $('input[name=csrf_name]').val()
	building_id = oForm.elements["building"].value;
	facility_id = oForm.elements["facility"].value;
	equipment_id = oForm.elements["equipment"].value;
	dated = oForm.elements["date"].value;
	if(building_id == '0')
	{
		alert('Please select a building');
		return false;	
	}
	
	if(dated == "")
	{
		alert('Date is required');
		return false;	
	}
	
	waiteme('#search_result_view');
	$.post('<?php echo base_url();?>search/search_result',
		{
			building_id:building_id,
			facility_id:facility_id,
			equipment_id:equipment_id,
			csrf_name:csrf_name,
			dated:dated
		},
		function(data){
			$('#search_result_view').waitMe('hide');
			$('#search_result_view').html(data);
		});
	return false; 
 }
</script>
 <div class="row">
 	<div class="col-xs-12 col-md-4">
    		<?php 
					$attributes = array('class' => 'email', 'id' => 'search', 'name' => 'search', 'method' => 'post');
					echo form_open('#', $attributes);
			?>
            <table width="100%" border="0" class="table">
              <tr>
                <td>Building</td>
                <td><select id="building" name="building" class="form-control">
                    <option selected value="0"> Select Building</option>
                    <option value="all">All Building</option>
                    <?php foreach($building as $bl) { ?>
                    <option value="<?php echo $bl->id; ?>"><?php echo $bl->name; ?></option>
                    <?php } ?>
                  </select></td>
              </tr>
              <tr>
                <td> Type of Facility </td>
                <td><div id="facility">
                    <select class="form-control" name="facility" id="facility">
                      <option>Select Facility</option>
                    </select>
                  </div></td>
              </tr>
              <tr>
                <td>Equipment</td>
                <td><div id="equipment">
                    <select class="form-control" name="equipment" id="equipment">
                      <option>Select Equipment</option>
                    </select>
                  </div></td>
              </tr>
               <tr>
                <td>Date</td>
                <td><div id="equipment">
                    <input type="text" id="datepicker" class="form-control" name="date">
                  </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><button style="background:#FC6F22; color:white" class="btn brn-primary" onclick="search_b(this.form);return false;"><span>Search</span></button></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
    		<?php echo form_close(); ?>
    </div>
    
    <div class="col-xs-6 col-md-8">
    		<h3>Search Results:</h3>
          	<p>&nbsp;</p>
          	<div id="search_result_view"></div>
    </div>
 </div>