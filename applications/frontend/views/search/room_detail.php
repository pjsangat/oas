<style type="text/css">
	.room_name { font-weight:bold; }
	p.detail { padding-top:10px; font-weight:bold }
</style>
<?php //print_r($details);?>

<p class="room_name"><?php echo $details['room_name']; ?></p>
<p class="detail">Details:</p>
<p>Type:<?php echo $details['facility_name']; ?></p>
<p>Capacity:<?php echo $details['capacity']; ?></p>
<p><?php echo $details['type_name']; ?></p>
<?php foreach($default_materials as $df) { ?>
		<p><?php echo $df->equipment_name;?></p>
<?php } ?> 

<br />
<p class="room_name">Equipments</p>

<?php
	if(empty($equipments)) {
		echo 'No Equipment';	
	} else {
	foreach($equipments as $eq) { 
?>
		<p><?php echo  $eq->equipment_name;?></p>
<?php }  } ?>

<br />
<?php if(!empty($details['layout'])) { ?>
<img src="<?php echo base_url();?>assets/floor_plan/<?php echo $details['layout'];?>" />
<?php } else { ?>
	No layout set
<?php } ?>
