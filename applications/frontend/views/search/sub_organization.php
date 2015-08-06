<?php if($this->input->post('org_id') != '4') { ?>
<select class="form-control" id="sub_organization" name="sub_organization" style="width:400px;">
  <option selected="selected" value="">Select Organization</option>
  <?php foreach($sub_org as $sor) { ?>
  <option value="<?php echo $sor->id;?>"><?php echo $sor->group_name;?></option>
  <?php } ?>
</select>
	<input type="hidden" name="non_ls" id="non_ls" class="form-control" value="default" />
<?php } elseif($this->input->post('org_id') == '4') { ?>
	
	<input type="text" name="non_ls" id="non_ls" class="form-control" />
    
    
   
<?php } ?>

<?php if($this->input->post('org_id') == '3') { ?>
	<input type="text" name="faculty_email" id="faculty_email" class="form-control" style="width:150px;" placeholder="Faculty Email" />
<?php } ?>

<input type="hidden" name="form_type" id="form_type" value="<?php echo $form['form'];?>" />