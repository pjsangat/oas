<div class="main-top">
    <div class="main">
        <div class="banner"></div>
        <div class="section-top">
            <div class="col_1_of_3 span_1_of_3">
                <div class="title-img1">
                    <div class="title"><img src="<?php echo base_url('assets/images/frontend/book1.png'); ?>" alt=""/></div>
                    <div class="title-desc">
                        <p>Furniture&amp;Appliances</p>
                    </div>
                    <div class="clear"></div>
                </div>
                <p class="desc">
                
                    <?php if( count($data['furnitures'])){ ?>
                        <?php foreach($data['furnitures'] as $furniture){ ?>
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
                
                <?php if( count($data['equipments'])){ ?>
                    <?php foreach($data['equipments'] as $equipment){ ?>
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
                <p align="right"><a href="#" class="btn btn-primary1"><span>Submit</span><img src="<?php echo base_url('assets/images/frontend/more_arrow.png'); ?>" alt=""></a></p>
                <p align="right">&nbsp;</p>
            </div>
            <div class="col_1_of_3 span_1_of_3">
                <div class="title-img1">
                    <div class="title"><img src="<?php echo base_url('assets/images/frontend/cup.png'); ?>" alt="" width="50" height="50"/></div>
                    <div class="title-desc">
                        <p>Search Result:</p></div>
                    <div class="clear"></div>
                </div>
<!--                <table width="100%" align="right" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr class="desc-middle">
                            <th width="22%" height="41"><strong>Equipment</strong></th>
                            <th width="24%"><div align="center"><strong>Available number of Equipments</strong></div></th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr class="banner-box">
                            <td class="center"><span class="desc">Long Black Table</span></td>
                            <td class="center"><div align="center"><span class="desc">12</span></div></td>
                        </tr>
                        <tr class="even gradeC">
                            <td class="center"><span class="desc">LCD Projector</span></td>
                            <td class="center"><div align="center"><span class="desc">16</span></div></td>
                        </tr>
                        <tr class="banner-box">
                            <td class="center"><span class="desc">Sound System</span></td>
                            <td class="center"><div align="center"><span class="desc">1</span></div></td>
                        </tr>
                        <tr class="odd gradeA">
                            <td class="center"><span class="desc">Karaoke</span></td>
                            <td class="center"><div align="center"><span class="desc">1</span></div></td>
                        </tr>
                        <tr class="banner-box">
                            <td class="center"><span class="desc">Graduation Stands</span></td>
                            <td class="center"><div align="center"><span class="desc">2</span></div></td>
                        </tr>
                        <tr class="odd gradeA">
                            <td class="center"><span class="desc">Monoblock Tables</span></td>
                            <td class="center"><div align="center"><span class="desc">14</span></div></td>
                        </tr>
                    </tbody>
                </table>-->
                <p>&nbsp;</p>
                <!--<p align="right"><a href="#" class="btn btn-primary1"><span>Reserve Now</span><img src="web/images/more_arrow.png" alt=""></a></p>-->
            </div>
            <p>&nbsp;</p>

            <div class="clear"></div> 
        </div>
    </div>
</div>