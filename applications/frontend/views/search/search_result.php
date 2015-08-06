<script language="javascript">

	function details(room_id)
	{
		var csrf_name = $('input[name=csrf_name]').val();
		$.post('<?php echo base_url();?>search/get_details',
		{
			room_id:room_id,
			csrf_name:csrf_name		
		},
		function(data){
			$('#search_result_view').waitMe('hide');
			$('.modal-title').html('Room Details');
			$('.modal-body').html(data);
			$('#model_contents').modal('show');
		});	
		return false;	
	}
</script>
<table width="100%" border="1" align="right" class="table table-striped table-bordered table-hover">
  <thead>
    <tr class="desc2">
      <th width="21%" height="41"><h4><strong>Type</strong></h4></th>
      <th width="11%"><h4><strong>Room</strong></h4></th>
      <th width="41%"><h4><strong>Details and Equipment</strong></h4></th>
      <th width="11%"><h4><strong>Calendar</strong></h4></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($room as $rm) { ?>
    <tr>
      <td height="53"><?php echo $rm->name;?></td>
      <td class="center"><div align="center"><?php echo $rm->room_name; ?></div></td>
      <td class="center"><a href="#" onclick="details('<?php echo $rm->class_room_id; ?>');return; false;">See details and existing list of equipment</a></td>
      <td class="center"><div align="center"><a href="<?php echo base_url();?>search/rooms/<?php echo $rm->class_room_id.'/'.$dates;?>">View</a></div></td>
    </tr>
    <?php } ?>
  </tbody>
</table>


<div id="model_contents" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body"></div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>

