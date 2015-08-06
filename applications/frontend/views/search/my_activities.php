
<select class="form-control" id="my_activities" name="my_activities">
  <option selected="selected" value="">Select Existing Activity</option>
  <?php foreach($activity as $ac) { ?>
  <option value="<?php echo $this->encryption->encode($ac->id);?>">
  <?php echo $ac->activity_name;?>
  </option>
  <?php } ?>
</select>
