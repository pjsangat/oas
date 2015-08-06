
<script language="javascript">
	function testing(oform)
	{
		alert(oform.id);
		return false;
	}
</script>
<table class="table table-striped table-bordered table-hover">
        <tbody>
          <tr class="bg-success">
            <td rowspan="2"><div align="center"><strong>Room Number</strong></div></td>
            <td colspan="2"><div align="center"><strong>Inclusive Dates/Inclusive Time</strong></div></td>
            <td rowspan="2"><div align="center"><strong>Total Number of Persons</strong></div></td>
            </tr>
          <tr class="bg-success">
            <td><div align="center">IN</div></td>
            <td><div align="center">OUT</div></td>
          </tr>
          <?php
	   		foreach($noaircon as $nonai) {
			$room_query = $this->db->query("select * from trentspace where room_type_id = '2' and gender_id = '".$nonai->id."' and Facility_ID = '".$this->uri->segment(3)."'");
			$get_room = $room_query->result();	
		?>
    	 <form method="post" id="nonaircon_<?php echo $nonai->id;?>" name="nonaircon_<?php echo $nonai->id;?>">
          <tr>
            <td class="">
              <?php echo $nonai->gender_name;?><br />
              <select class="form-control" name="room_id" id="room_id">
           
                <?php
						foreach($get_room as $room) {
					?>
                <option value="<?php echo $room->rentspace_ID;?>"><?php echo $room->Name;?></option>
                <?php } ?>
              </select>
              </td>
            <td ><div class="input-group date form_datetime_in col-md-9" data-date="" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1" style=" width:250px;" id="startdate_na_<?php echo $nonai->id;?>">
              <input class="form-control"  type="text" value="" name="date_time_in" id="date_time_in" readonly>
              <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span> <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span> </div></td>
            <td ><div class="input-group date form_datetime_out col-md-9" data-date="" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1" style=" width:250px;" id="enddate_na_<?php echo $nonai->id;?>">
              <input class="form-control"  type="text" value="" name="date_time_out" id="date_time_out" readonly>
              <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span> <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span> </div></td>
            <td ><div align="center">
            <?php
				//foreach($get_room as $room) {
			?>
            	<!--<div id="getcount_<?php echo $room->rentspace_ID;?>"></div>-->
            <?php
				//}
			?>
            <select id="number_of_person" name="number_of_person" class="form-control" onchange="nonaircon(this.form);return false;">
            	<option selected="selected">Select</option>
                <?php for ($x = 0; $x <= 20; $x++) { ?>
                	<option value="<?php echo $x;?>"><?php echo $x;?></option>
                <?php } ?>
            </select>
             
              </div></td>
            <input value="0" name="both11" type="hidden">
            </tr>
          </form>
          <?php
		}
	?>
        </tbody>
      </table>

 <?php foreach($testing as $bd) { ?>
<form method="post" action="#" id="test_form_<?php echo $bd->id;?>" name="test_form_<?php echo $bd->id;?>">
<input type="submit" value="Submit" onClick="testing(this.form);return false;">
</form>
<?php } ?>
