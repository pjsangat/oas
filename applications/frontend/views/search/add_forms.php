<script language="javascript">
	$(document).ready(function() {
		get_activity();
		
		$('#organization').on('change', function() {
			waiteme('#sub_org');
			var csrf_name = $('input[name=csrf_name]').val()
			var org_id = this.value;
			
			$.post('<?php echo base_url();?>search/get_organization_group',
			{
				org_id:org_id,
				csrf_name:csrf_name			
			},
			function(data){
				$('#sub_org').waitMe('hide');
				$('#sub_org').html(data);
			});
			
			return false;
		});
		
		 $("#title_form").validate({
                rules: {
					organization:{required:true},
					sub_organization:{required:true},
					first_name:"required",
					non_ls:"required",
					last_name:"required",
					middle_name:"required",
					number:"required",
					activity_name:"required",
					faculty_email:{
						required:true,
						email:true
					}
                },
				errorPlacement: function () {
            		return false;
        		},
                submitHandler: function(form) {
                  // form.submit();
				  waiteme('#add_activity');
                  add_reservation();
				   //register();
                }
        });
		
		$("#activity_room_form").validate({
                rules: {
					my_activities:{required:true}
                },
				errorPlacement: function () {
            		return false;
        		},
                submitHandler: function(form) {
				  waiteme('#activity_room_form');
                  add_my_activities();
				   //register();
                }
        });
		
	});
	
	function add_my_activities()
	{
		var csrf_name = $('input[name=csrf_name]').val();
		var my_activities = $('#my_activities').val();
		var venues = $('#venues').val();
		var room_id = $('#room_id').val();
		$.post('<?php echo base_url();?>search/add_room_activity',
		{
			csrf_name:csrf_name,
			my_activities:my_activities,
			room_id:room_id
		},
		function(data){
			if(data == '1')
			{
				window.location.href = "<?php echo base_url();?>activity/view_activity/"+my_activities;
				notifications('Room Added on Existing Activity','success');	
			} else {
				notifications('Error Adding on Existing Activity','danger');
			}
			$('#activity_room_form').waitMe('hide');
			
		});
		return false;		
	}
	
	function add_reservation()
	{
		var csrf_name = $('input[name=csrf_name]').val();
		var first_name	= $('#first_name').val();
		var last_name	= $('#last_name').val();
		var middle_name	= $('#middle_name').val();
		var number	= $('#number').val();
		var activity_name	= $('#activity_name').val();
		var organization = $('#organization').val();
		var sub_organization = $('#sub_organization').val();
		var room_id = $('#room_id').val();
		var form_type = $('#form_type').val();
		var non_ls	= $('#non_ls').val();
		var faculty_email = $('#faculty_email').val();
		
		$.post('<?php echo base_url();?>search/add_reservation',
		{
			csrf_name:csrf_name,
			first_name:first_name,
			last_name:last_name,
			middle_name:middle_name,
			number:number,
			activity_name:activity_name,
			organization:organization,
			sub_organization:sub_organization,
			room_id:room_id,
			form_type:form_type	,
			non_ls:non_ls,
			faculty_email:faculty_email
		},
		function(data){
			var result = data.split('+');
			if(result[0] == '1')
			{
				notifications('Room Added','success');	
				window.location.href = "<?php echo base_url();?>activity/view_activity/"+result[1];
			} else {
				notifications('Error Adding','danger');
			}
			$('#add_activity').waitMe('hide');
			//alert(data);
			get_activity();
		});	
	}
	
	function get_activity()
	{
		$.post('<?php echo base_url();?>search/my_activity',
		function(data){
			$('#activity_listed').html(data);
		});
		return false;	
	}
</script>

<div class="row">
  <div class="title-img1">
    <div class="title"><img src="<?php echo base_url('assets/images/frontend/book1.png');?>" alt=""/></div>
    <div class="title-desc">
      <p>Requesting Group / Individual Information</p>
    </div>
    <div class="clear"></div>
  </div>
</div>

<?php if(!empty($myactivity)) { ?>
<div class="row" style="padding-bottom:20px; padding-left:11px;">
  <?php 
					$attributes = array('id' => 'activity_room_form', 'name' => 'activity_room_form', 'method' => 'post');
					echo form_open('#', $attributes);
			?>
  <div class="col-md-4">
    <p style="padding-bottom:5px;"> Existing Activity</p>
    <input type="hidden" value="<?php echo $this->input->post('id');?>" name="room_id" id="room_id" />
    <div id="activity_listed">
      <select class="form-control" id="my_activities" name="my_activities">
        <option selected="selected" value="">Select Existing Activity</option>
      </select>
    </div><br />
    <!--<div>
    	<select id="venues" name="venues" class="form-control">
        	<option selected="selected" value="">Select Venue</option>
            <?php foreach($venues as $vn) { ?>
            	<option value="<?php echo $vn->id;?>"><?php echo $vn->venue_name; ?></option>
            <?php } ?>
        </select>
    </div>-->
    <br />
    <button style="background:#FC6F22; color:white" class="btn brn-primary" type="submit">Add Room To Activity</button>
  </div>
  <?php echo form_close(); ?> 
  </div>
<?php } ?>
  
<div class="row" style="padding-left:25px;" id="add_activity">
  <?php 
					$attributes = array('id' => 'title_form', 'name' => 'title_form', 'method' => 'post');
					echo form_open('#', $attributes);
			?>
   <input type="hidden" value="<?php echo $this->input->post('id');?>" name="room_id" id="room_id" />
    <div class="form-group">
      
        <div class="form-inline">
          <div class="form-group">
            <select class="form-control" id="organization" name="organization">
              <option selected="selected" value="">Requestor Group</option>
              <?php foreach($organization as $or) { ?>
              <option value="<?php echo $or->id;?>"><?php echo $or->organization_name;?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <div id="sub_org">
              <select class="form-control" name="sub_organization" id="sub_organization" style="width:400px;">
                <option value="">Select Organization</option>
              </select>
            </div>
          </div>
        </div>
     
    </div>
 
  <div class="row">
    <div class="form-group">
      <label for="birthday" class="col-xs-2 control-label" style="padding-top:8px;">Title Of Activity</label>
      <div class="col-xs-10">
        <div class="form-inline">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Title" name="activity_name" id="activity_name"/>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="form-group">
      <label for="birthday" class="col-xs-2 control-label" style="padding-top:8px;">Point Person</label>
      <div class="col-xs-10">
        <div class="form-inline">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Last Name" id="last_name" name="last_name"/>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="First Name" id="first_name" name="first_name"/>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Middle Name" id="middle_name" name="middle_name"/>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="form-group">
      <label for="birthday" class="col-xs-2 control-label" style="padding-top:8px;">Contact Details</label>
      <div class="col-xs-10">
        <div class="form-inline">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Number" id="number" name="number"/>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="form-group">
      <button style="background:#FC6F22; color:white" class="btn brn-primary" type="submit">Add New Activity</button>
    </div>
  </div>
  <?php echo form_close(); ?> </div>
