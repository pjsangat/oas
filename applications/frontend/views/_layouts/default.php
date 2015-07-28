<?php $this->load->view('_partial/head'); ?>

<!--<div class="container">-->

    <?php $this->load->view('_partial/header'); ?>

    <section class="content">

        <div class="wrap">

            <div class="content-header">
                <h1>{title}</h1>
            </div>
            
            <div class="content-bottom">
                {body}
            </div>
        </div>
    </section>

<!--</div>-->

<?php $this->load->view('_partial/foot'); ?>