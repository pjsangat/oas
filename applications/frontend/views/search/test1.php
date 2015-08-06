<html>
<head>
<script type = "text/javascript" src = "//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
<script type = "text/javascript" src = "//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.js"></script>
<title>Upload Form</title>
</head>
<body>
    <!-- AJAX Response will be outputted on this DIV container -->
    <div class = "upload-image-messages"></div>

    <div class = "col-md-6">
    <?php echo $error;?>
        <!-- Generate the form using form helper function: form_open_multipart(); -->
        <?php echo form_open_multipart('search/do_upload', array('class' => 'upload-image-form'));?>
           <input type="file" name="userfile" id="userfile"  /><br />
           <input type="file" name="uploadedfile" id="uploadedfile"  /><br />
            <input type="submit" name = "submit" value="Upload" class = "btn btn-primary" />
        </form>

        <script>                    
        jQuery(document).ready(function($) {

            var options = {
                beforeSend: function(){
                    // Replace this with your loading gif image
                    $(".upload-image-messages").html('<p><img src = "<?php echo base_url() ?>images/loading.gif" class = "loader" /></p>');
                },
                complete: function(response){
                    // Output AJAX response to the div container
                    $(".upload-image-messages").html(response.responseText);
                    $('html, body').animate({scrollTop: $(".upload-image-messages").offset().top-100}, 150);
                    
                }
            };  
            // Submit the form
            $(".upload-image-form").ajaxForm(options);  

            return false;
            
        });
        </script>
    </div>
</body>
</html>