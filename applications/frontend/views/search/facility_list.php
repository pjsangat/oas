<select class="form-control" id="facility" name="facility">
	<option selected="selected" value="all">All Facility</option>
	<?php foreach($facility as $fc) { ?>
		<option value="<?php echo $fc->facility_id;?>"><?php echo $fc->facility_name;?></option>
   <?php } ?>
</select>