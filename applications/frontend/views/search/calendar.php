
<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/styles/fullcalendar.css' />
<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/styles/fullcalendar.print.css' media='print' />
<script src="<?php echo base_url(); ?>assets/js/moment.min.js"></script>
<script language="javascript">

    $(document).ready(function() {



        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        $.getScript('<?php echo base_url('assets/js/fullcalendar.js'); ?>', function() {
            $('#calendar').fullCalendar({
                defaultDate: moment('<?php echo $this->uri->segment(4); ?>'),
                editable: false,
                defaultView: 'agendaWeek',
                minTime: "07:00:00",
                maxTime: "22:00:00",
                eventLimit: true,
                slotDuration: "00:30:01",
                height: 770,
                displayEventEnd: true,
                /*events: [
                 {
                 title: 'Meeting',
                 start: '2015-06-21',
                 end: '2015-06-28'
                 },
                 {
                 title: 'Meeting',
                 start: '2015-05-24',
                 end: '2015-05-26'
                 }
                 ],*/
                events: {url: "<?php echo base_url(); ?>search/json", data: function() {
                        return {roomid: "<?php echo $this->uri->segment(3); ?>"};
                    }, type: "POST"},
                eventColor: '#378006'
            });
        });

    });

    function add_room_forms(id)
    {
        var csrf_name = $('input[name=csrf_name]').val();
        $.post('<?php echo base_url(); ?>search/add_forms',
                {
                    id: id,
                    csrf_name: csrf_name
                },
        function(data) {
            $('.modal-title').html('Form');
            $('.modal-body').html(data);
            $('#model_contents').modal('show');
        });
        return false;
    }

    function get_news(id)
    {
        var csrf_name = $('input[name=csrf_name]').val();
        $.post('<?php echo base_url(); ?>search/get_news',
                {
                    id: id,
                    csrf_name: csrf_name
                },
        function(data) {
            $('.modal-title').html('News');
            $('.modal-body').html(data);
            $('#model_contents').modal('show');
        });
        return false;
    }
</script>
<style type="text/css">
    .row {
        padding-bottom:10px;
    }
    .error {
        border: 1px solid #f00;
        background-color: #ffc;
    }
    .news {
        color:#fa8d03;
        font-size:20px;
    }
    #news_hearder {
        color:#d67b07;
    }
    #news_body {
        padding-bottom:10px
    }
    .modal-body {
        position: relative;
        padding: 20px;
        min-width: 800px; /* SET THE WIDTH OF THE MODAL */
    }

    .modal-content {
        position: relative;
        background-color: #fff;
        border: 1px solid #999;
        border: 1px solid rgba(0,0,0,0.2);
        border-radius: 6px;
        outline: 0;
        -webkit-box-shadow: 0 3px 9px rgba(0,0,0,0.5);
        box-shadow: 0 3px 9px rgba(0,0,0,0.5);
        background-clip: padding-box;
        width: 900px; /* SET THE WIDTH OF THE MODAL */
        margin: 50px 0 0 -150px; /* CHANGE MARGINS TO ACCOMMODATE THE NEW WIDTH */
    }
</style>

<div class="col-md-9" id="main_calendar">
    <div class="title-img">
        <div class="title"><img src="<?php echo base_url(); ?>assets/images/frontend/book1.png" alt=""/></div>
        <div class="title-desc">
            <p>Venue and Equipment Availability </p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div id='calendar'></div>
        </div>
        <div class="col-md-2">
            <p style="font-weight:bold;">Room:</p>
            <p style="font-weight:bold; color:#FF9933"><?php echo $room_info['room_name']; ?></p>
            <div>
                <?php foreach ($dequipments as $de) { ?>
                    <p><?php echo $de->name; ?></p>
                <?php } ?>
            </div>
            <br />
            <p style="font-weight:bold; color:#3366CC">Equipment:</p>
            <?php
            foreach ($equipments as $eq) {
                ?>
                <p><?php echo $eq->name; ?></p>
                <?php
            }
            ?>
            <br />
            <?php
            $attributes = array('id' => 'add_room_form', 'name' => 'add_room_form', 'method' => 'post');
            echo form_open('#', $attributes);
            ?>
            <p>
                <button class="btn brn-primary" type="submit" onclick="add_room_forms('<?php echo $this->uri->segment(3); ?>');
                        return false;">Add Room</button>
            </p>
            <?php echo form_close(); ?> </div>
    </div>



</div>
<div class="col-md-3" id="news_div">
    <div class="page-header">
        <h1 class="news">Latest News:</h1>
    </div>
    <?php // foreach ($news as $nw) { ?>
<!--        <p id="news_hearder"><a href="#" onclick="get_news('<?php echo $nw->id; ?>');
              return false;"><?php echo $nw->title; ?></a></p>
        <p id="news_body"><?php echo substr($nw->news_body, 0, 100); ?> ....</p>-->
    <?php // } ?>
</div>


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