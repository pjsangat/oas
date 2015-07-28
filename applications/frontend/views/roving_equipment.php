<style type="text/css">
    .roving_search_details{
        width: 100%;
    }
    .roving_search_details .title{
        color: #FC6F22;
    }
    .roving_search_details .value{
        color: #cc0001;
    }
    .roving_search_details .roving_title{
        width: 60%;
        float: left;
    }
    .roving_search_details .roving_value{
        width: 39%;
        text-align: center;
        float: left;
    }
    #roving_search_details .roving_result_row:nth-child(odd){
        background-color: #dbc59e;
    }
</style>
<div class="main-top">
    <div class="main">
        <div class="banner"></div>
        <div class="section-top">
            <form method="post" id="roving_search_form">
                <div class="col_1_of_3 span_1_of_3">
                    <div class="title-img1">
                        <div class="title"><img src="<?php echo base_url('assets/images/frontend/book1.png'); ?>" alt=""/></div>
                        <div class="title-desc">
                            <p>Furniture&amp;Appliances</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <p class="desc">

                        <?php if (count($data['furnitures'])) { ?>
                            <?php foreach ($data['furnitures'] as $furniture) { ?>
                                <label>
                                    <input type="checkbox" name="furnitures[]" value="<?php echo $furniture['id']; ?>" id="furniture_<?php echo $furniture['id']; ?>">
                                    <?php echo $furniture['name']; ?>
                                </label>
                            <?php } ?>
                        <?php } ?>

                    </p>
                    <p class="desc-middle">&nbsp;</p>
                </div>
                <div class="col_1_of_3 span_1_of_3">
                    <div class="title-img"><span class="title"><img src="<?php echo base_url('assets/images/frontend/book1.png'); ?>" alt=""/></span>
                        <div class="title-desc">
                            <p>AV Equipment</p>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <?php if (count($data['equipments'])) { ?>
                        <?php foreach ($data['equipments'] as $equipment) { ?>
                            <label>
                                <strong>
                                    <span class="desc">
                                        <input type="checkbox" name="equipments[]" value="<?php echo $equipment['id']; ?>" id="equipment_<?php echo $equipment['id']; ?>">
                                        <?php echo $equipment['name']; ?>
                                    </span>
                                </strong>
                            </label>
                        <?php } ?>
                    <?php } ?>
                    <p>&nbsp;</p>
                    <p align="right">
                        <a href="javascript:;" id="search_roving" class="btn btn-primary1">
                            <span>Submit</span>
                            <img src="<?php echo base_url('assets/images/frontend/more_arrow.png'); ?>" alt="">
                        </a>
                    </p>
                    <p align="right">&nbsp;</p>
                </div>
            </form>
            <div id="search_result" class="col_1_of_3 span_1_of_3" style="display: none;">
                <div class="title-img1">
                    <div class="title"><img src="<?php echo base_url('assets/images/frontend/cup.png'); ?>" alt="" width="50" height="50"/></div>
                    <div class="title-desc">
                        <p>Search Result:</p></div>
                    <div class="clear"></div>
                </div>

                <div id="roving_search" class="roving_search_details">

                    <div class="roving_title title">
                        <strong>Equipment</strong>
                    </div>
                    <div class="roving_value title" align="center">
                        <strong>Available number of Equipments</strong>
                    </div>
                    <div class="clear"></div>
                    <div id="roving_search_details">

                    </div>

                </div>


                <p>&nbsp;</p>
                <p align="right">
                    <a id="reserve_roving" href="javascript:;" class="btn btn-primary1" style="display:none;">
                        <span>Reserve Now</span>
                        <img src="<?php echo base_url(); ?>assets/images/frontend/more_arrow.png" alt="">
                    </a>
                </p>
            </div>
            <p>&nbsp;</p>

            <div class="clear"></div> 
        </div>
    </div>
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
