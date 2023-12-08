<?php

require __dir__ . '/sub-config.php';

include "header.php";

?>

<div class="panel-header bg-primary-gradient">

	<?php section::title( "My Account" ); ?>
	
    <?php section::price_widget(); ?>
	
</div>

<div class="page-inner">

	<div class="row row-card-no-pd mt--2">
	
		<?php 
			
			section::$cardType = 1;
		
			// ---- INVEST CARD ---
			
			section::card(array(
				"title" => "Investment Profit",
				"color" => "success",
				"value" => shares::total_profit( $__user['email'] ) . ' USD',
				"icon" => "fa fa-money"
			));
			
			
			section::card(array(
				"title" => "Total Balance",
				"color" => "primary",
				"value" => round($__user['walletbalance'], 2) . ' USD',
				"icon" => "fa fa-btc"
			));
			
			
			section::card(array(
				"title" => "Referral Bonus",
				"color" => "orange",
				"value" => $__user['refbonus'] . ' USD',
				"icon" => "fa fa-gift"
			));
			
		?>
			
	</div>
	
</div>


<!-- TradingView Widget BEGIN -->
<div style="height:560px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:540px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=chart&theme=dark&coin_id=1209&pref_coin_id=1505" width="100%" height="536px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div></div>
<!-- TradingView Widget END -->


<?php include 'footer.php'; ?>

