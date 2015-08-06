<?php
	//echo '<pre>'; print_r($equipment); echo '</pre>';
?> 
<select class="form-control" id="equipment" name="equipment">
	<option selected="selected" value="all">All Equipment</option>
	<?php foreach($equipment as $eq) { ?>
		<option value="<?php echo $eq->equipment_id;?>"><?php echo $eq->equipment_name;?></option>
   <?php } ?>
</select>