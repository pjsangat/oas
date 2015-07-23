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
        <table width="100%" border="1">
            <tr>
                <th width="45%" height="41" scope="col"><div align="left">
                <h4>Type of Facility:</h4>
            </div></th>
            <th width="55%" scope="col"><div align="right">
                <h4>
                    <select name="selectError3" id="selectError4" data-rel="chosen">
                        <option>Any type of Facility</option>
                        <?php if (count($data['facilities'])) { ?>
                            <?php foreach ($data['facilities'] as $facility) { ?>
                                <option value="<?php echo $facility['id']; ?>"><?php echo $facility['name']; ?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </h4>
            </div></th>
            </tr>
            <tr>
                <td height="39"><div align="left">
                        <h4>
                            <input type="checkbox" name="checkbox" id="checkbox">
                            Airconditioned</h4>
                    </div>
                    <h4>&nbsp;	                  </h4>	                
                    <h4>
                        <label class="radio-inline">
                        </label>
                    </h4>	                
                    <h4>
                        <label class="radio-inline">
                        </label>
                    </h4>	                <label class="radio-inline">
                        <div align="left"></div>
                    </label>	              </td>
                <td><div align="right">
                        <h4>
                            <input type="checkbox" name="checkbox2" id="checkbox2">
                            Non-Airconditioned </h4>
                    </div>	                </td>
            </tr>
            <tr>
                <td><div align="left">
                        <h4>Building: </h4>
                    </div></td>
                <td><div align="right"></div></td>
            </tr>
            <tr>
                <td height="37" colspan="2"><div align="right">
                        <h4>
                            <select name="selectError4" id="selectError5" data-rel="chosen">
                                <option selected>Any Building</option>
                                <?php if( count($data['buildings'])){ ?>
                                <?php foreach($data['buildings'] as $building){ ?>
                                <option value="<?php echo $building['id']; ?>"><?php echo $building['name']; ?></option>
                                <?php } ?>
                                <?php } ?>
                            </select>
                        </h4>
                    </div></td>
            </tr>
            <tr>
                <td height="33"><div align="left">
                        <h4>Nature of Activity:</h4>
                    </div></td>
                <td><div align="right">
                        <h4><strong>
                                <input placeholder="Nature of activity" name="LName3" value="">
                            </strong></h4>
                    </div></td>
            </tr>
            <tr>
                <td height="38"><div align="left">
                        <h4>Equipment: </h4>
                    </div></td>
                <td><div align="right">
                        <h4>
                            <select name="selectError5" id="selectError6" data-rel="chosen">
                                <?php if( count($data['equipments'])){ ?>
                                <?php foreach($data['equipments'] as $equipment){ ?>
                                <option value="<?php echo $equipment['id']; ?>"><?php echo $equipment['name']; ?></option>
                                <?php } ?>
                                <?php } ?>
                            </select>
                        </h4>
                    </div></td>
            </tr>
            <tr>
                <td height="37" colspan="2"><div align="left">
                        <h4>Expected number of participants: 
                            <input name="textfield" type="text" id="textfield" size="5">
                        </h4>
                    </div></td>
            </tr>
            <tr>
                <td><div align="left">
                        <h4>Date and Time:</h4>
                    </div></td>
                <td><div align="right">
                        <input placeholder="Email Address" name="LName6" type="date" value="">
                    </div></td>
            </tr>
        </table>
        <p>&nbsp;</p>
        <p align="right"><a href="#" class="btn btn-primary1"><span>Submit</span><img src="<?php echo base_url('assets/images/frontend/more_arrow.png'); ?>" alt=""></a></p>
        <p>&nbsp;</p>
        <div class="clear"> </div>
    </div>
    <div class="latest-news-grid">
        <div class="latest-news-pic"></div>
        <div class="clear"> </div>
    </div>
</div>