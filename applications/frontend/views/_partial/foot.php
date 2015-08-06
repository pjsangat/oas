        
	<div class="footer">
            <div class="wrap">
		<div class="container">
			<p class="text-muted"><?php echo lang('website_copyright'); ?></p>
		</div>
            </div>
	</div>

	<script src="<?php echo base_url('assets/dist/app.min.js'); ?>"></script>
        <script type="text/javascript">
            

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
  </body>
  
</html>