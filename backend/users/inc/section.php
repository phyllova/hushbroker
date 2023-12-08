<?php 

class section {
	
	public static $cardType = 0;
	
	public static function Title( $title ) { 
		global $settings;
		$__user = (new user())->info();
?>

	          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper mb-3">
            <div class="row align-items-center">
              <div class="col-md-7">
                <div class="titlemb-30">
                  <h3 class='mb-1'><?php echo $title; ?></h3>
					<div class='row'>
						<div class='col-md-7 '>
							<h5 class="text-gray op-7 mb-2">
								<marquee style="" width="100%" >Thanks for investing in <?php  echo $settings['name']; ?> have a nice day!</marquee>
							</h5>
						</div>
					</div>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-5">
				<div class='input-group'>
					<input type="text" id="myInput" class='form-control bg-light' value="<?php echo user::get($__user, 'reflink'); ?>" readonly="true"/>
					<button class="btn btn-secondary" onclick="myFunction()">
						<i class='fa fa-paste'></i> Copy
					</button>
				</div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->
		
	<?php }
	
	public static function price_widget() {
	?>
		<div class="tradingview-widget-container mb-4">
			<div class="tradingview-widget-container__widget"></div>
			<!-- TradingView Widget BEGIN -->
<div style="height:62px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div></div>
<!-- TradingView Widget END -->
		</div>
	<?php
	}
	
	public static function translator() { ?>
	
		<div id="google_translate_element" style="margin-left:1%"></div>
		
		<script type="text/javascript">
			function googleTranslateElementInit() {
				new google.translate.TranslateElement({
					pageLanguage: 'en', 
					layout: google.translate.TranslateElement.InlineLayout.SIMPLE, 
					autoDisplay: false
				}, 'google_translate_element');
			};
		</script>
		
		<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		
	<?php }
	
	public static function card( $info ) { 
		if( !in_array($info['color'], ['primary', 'secondary', 'danger', 'success', 'warning', 'info', 'dark', 'light', 'white']) ) {
			$color = "color: {$info['color']}";
			$bg_color = "background-color: {$info['color']}";
		} else $color = $bg_color = null;
	?>
		
		<div class="col-sm-6 col-md-4 mb-3" >
	
			<?php if( empty(self::$cardType) ): ?>
		
				<div class="card card-stats card-round">
					<div class="card-body p-4">
						<div class="d-flex align-items-center">
							<div class="fs-28 me-3 text-<?php echo $info['color']; ?>" style='<?php echo $color; ?>'>
								<i class="<?php echo $info['icon']; ?>"></i>
							</div>
							<div class="d-flex align-items-center" >
								<div class="numbers">
									<h4 class="card-title mb-0" >
										<?php echo $info['value']; ?> 
									</h4>
								</div>
							</div>
						</div>
					</div>
					<div class='card-footer py-3 bg-<?php echo $info['color']; ?>' style='<?php echo $bg_color; ?>'>
						<h5 class='text-white text-capitalize'><?php echo $info['title']; ?></h5>
					</div>
				</div>
			
			<?php else: ?>
		
				<div class="icon-card mb-30">
					<div class="icon <?php echo $info['color']; ?>">
						<i class="<?php echo $info['icon']; ?>"></i>
					</div>
					<div class="content">
						<h6 class="mb-10"><?php echo $info['title']; ?></h6>
						<h3 class="text-bold mb-10"><?php echo $info['value']; ?></h3>
						<p class="text-sm text-success d-none">
							<i class="lni lni-arrow-up"></i> +2.00%
							<span class="text-gray">(30 days)</span>
						</p>
					</div>
				</div>
			
			<?php endif; ?>
			  
		</div>
			
	<?php }
	
}