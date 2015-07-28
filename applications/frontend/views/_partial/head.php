<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo lang('website_name'); ?> - {title}</title>

        <link href="<?php echo base_url('assets/dist/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/dist/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/dist/waitMe.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/styles/frontend.css'); ?>" rel="stylesheet">


        <?php
        if (isset($css)) {
            if (is_array($css)) {
                foreach ($css as $css_file) {
                    ?>
                    <link href="<?php echo $css_file; ?>" rel="stylesheet">
                    <?php
                }
            } else {
                ?>
                <link href="<?php echo $css; ?>" rel="stylesheet">
                <?php
            }
        }
        ?>

        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/dist/bootstrap.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/validate.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/dist/waitMe.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/dist/jquery.bootstrap-growl.js'); ?>"></script>

        <?php
        if (isset($js)) {
            if (is_array($js)) {
                foreach ($js as $js_file) {
                    ?>
                    <script type="text/javascript" src="<?php echo $js_file; ?>"></script>
                    <?php
                }
            } else {
                ?>
                <script type="text/javascript" src="<?php echo $js; ?>"></script>
                <?php
            }
        }
        ?>
        <script type="text/javascript">
            var base_url = '<?php echo base_url(); ?>';
            $(document).ready(function() {
            });


            function waiteme(containerid) {
                $(containerid).waitMe({
                    effect: 'ios',
                    text: 'Loading...',
                    bg: 'rgba(255,255,255,0.7)',
                    color: '#000',
                    sizeW: '',
                    sizeH: ''
                });
            }
        </script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
