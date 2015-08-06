<style type="text/css">
    .form-control{
        border: 1px solid #a8a8a8;
        padding: 3px 10px;
        height: 36px;
    }
    
    .table-hover>tbody>tr:hover{
        background-color: #C39B2C !important;
    }
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src=""></script>

<script type="text/javascript">
    $(document).ready(function() {
        var dateToday = new Date();
        $.getScript('//code.jquery.com/ui/1.11.4/jquery-ui.js', function() {

            $("#datepicker").datepicker({
                showButtonPanel: true,
                minDate: dateToday,
            });


        });
    });


    function search_b(oForm)
    {
        building_id = $("#building").val();
        facility_id = $("#facility").val();
        equipment_id = $("#equipment").val();
        dated = $("#datepicker").val();
        if (building_id == '0')
        {
            alert('Please select a building');
            return false;
        }

        if (dated == "")
        {
            alert('Date is required');
            return false;
        }

        $.post('<?php echo base_url(); ?>search/search_result',
                {
                    building_id: building_id,
                    facility_id: facility_id,
                    equipment_id: equipment_id,
                    dated: dated
                },
        function(data) {
            $('#search_result_view').html(data);
        });
        return false;
    }
</script>
<div class="col-md-4" id="search_form">
    <div class="title-img">
        <div class="title"><img src="<?php echo base_url('assets/images/frontend/book1.png'); ?>" alt=""/></div>
        <div class="title-desc">
            <p>Welcome!</p>
            <p>How may we help you?</p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="latest-news-grid">
        <p>&nbsp;</p>
        <h3><strong>I need a....</strong>	          </h3>
        <table width="100%" border="0" class="table">
            <tr>
                <td>Building</td>
                <td>
                    <select id="building" name="building" class="form-control">
                        <option selected value="0"> Select Building</option>
                        <option value="all">All Building</option>
                        <?php foreach ($data['buildings'] as $building) { ?>
                            <option value="<?php echo $building['id']; ?>"><?php echo $building['name']; ?></option>
                        <?php } ?>
                    </select>
                </td>
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
                <td>
                    <a href="javascript:;" class="btn btn-primary1" onclick="search_b(this.form);
                            return false;"><span>Submit</span><img src="<?php echo base_url('assets/images/frontend/more_arrow.png'); ?>" alt=""></a>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>
        <p>&nbsp;</p>
        <p align="right"></p>
        <p>&nbsp;</p>
        <div class="clear"> </div>
    </div>
</div>

<div class="col-md-8">
    <p>&nbsp;</p>
    <h3>Search Results:</h3>
    <p>&nbsp;</p>
    <div id="search_result_view"></div>
    <h3>&nbsp;</h3>
    <p class="desc2">&nbsp;</p>
</div>