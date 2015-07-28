<style type="text/css">
    .form-control{
        border: 1px solid #a8a8a8;
        padding: 3px 10px;
        height: 36px;
    }
</style>
<div class="col_1_of_3 span_1_of_3">
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
                <td>&nbsp;</td>
                <td>
                    <a href="#" class="btn btn-primary1"><span>Submit</span><img src="<?php echo base_url('assets/images/frontend/more_arrow.png'); ?>" alt=""></a>
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
    <div class="latest-news-grid">
        <div class="latest-news-pic"></div>
        <div class="clear"> </div>
    </div>
</div>