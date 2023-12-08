<?php

require __dir__ . '/sub-config.php';
require __dir__ . '/control/for-admin-signin.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta property="og:image" content="/assets/9537ac48/logo.jpg">
	<meta property="og:image:secure_url" content="/assets/9537ac48/logo.jpg">
	<meta property="og:image:type" content="image/jpeg">
	<meta itemprop="image" content="/assets/9537ac48/logo.jpg">
	<link rel="apple-touch-icon" href="/assets/9537ac48/logo.jpg"/>
	<link rel="apple-touch-icon" href="/assets/9537ac48/logo.jpg" sizes="72x72"/>
	<link rel="apple-touch-icon" href="/assets/9537ac48/logo.jpg" sizes="114x114"/>
	<link rel="apple-touch-icon" href="/assets/9537ac48/logo.jpg" sizes="144x144">
    <link rel="icon" type="image/png" href="https://tradewithzerah.com/templates/custom/images/favicon_zerahfx.jpg"/>
    <link rel="icon" type="image/png" href="https://tradewithzerah.com/templates/custom/images/favicon_zerahfx.jpg"/>	
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin | ZerahFX Forex Broker</title>
	<meta name="description" content="ZerahFX is the best online broker which provides low spreads and no commissions for the online traders. ZerahFX provides Skrill deposits and low spreads. ">
<meta name="keywords" content="best online broker, no commissions for traders, skrill deposits">
<link href="/assets/a1cf238d/css/main.css" rel="stylesheet">
<link href="/assets/3fb5b007/css/auth.css" rel="stylesheet">
<link href="/assets/a523bd58/toastr.min.css" rel="stylesheet">
<link href="/assets/7548472b/css/poppins.css" rel="stylesheet">
<link href="/assets/e31d6fb/css/preloader.css" rel="stylesheet">
<link href="/assets/a228f137/css/bootstrap.min.css" rel="stylesheet">
<link href="/assets/a228f137/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="/assets/22758442/css/font-awesome.min.css" rel="stylesheet">
<link href="/assets/225ef734/css/simple-line-icons.css" rel="stylesheet">
<link href="/assets/f351dc04/metis-menu.css" rel="stylesheet">
<link href="/assets/a9d552d7/css/tools.css" rel="stylesheet">
<link href="/assets/a9d552d7/css/variable.css" rel="stylesheet">
<link href="/assets/a9d552d7/css/navbar.css" rel="stylesheet">
<link href="/assets/a9d552d7/css/left-sidebar.css" rel="stylesheet">
<link href="/assets/a9d552d7/css/style.css" rel="stylesheet">
<link href="/assets/a9d552d7/css/media.css" rel="stylesheet">	</head>

<div class="auth-page ">
	<!-- <div class="snowContainer"><div id="snow"></div></div> -->
	<div id="IE-hide" class="hidden-block" style="display:none">
		<div style="max-width: 800px; margin: auto; text-align: center; padding-top: 50px">
			<table align="center" cellpadding="15">
				<thead>
				<tr>
					<th colspan="3"><h1 style="color:#ffffff; text-align: center">Your web browser is out of date.</h1></th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td colspan="3">
						<h3 style="color:#ffffff; text-align: center; padding-bottom: 50px">Update your browser for more security,
							speed and the best experience on this site.</h3>
					</td>
				</tr>
				<tr>
					<td>
						<p><img src="https://www.google.com/chrome/static/images/chrome-logo.svg" alt="Chrome browser"
						        title="Chrome browser" style="max-height:50px"></p>
						<p><a href="https://www.google.com/intl/en/chrome/" style="color:#ffffff">download Chrome browser</a></p>
					</td>
					<td>
						<p><img src="https://www.mozilla.org/media/protocol/img/logos/firefox/logo-word-hor.svg"
						        alt="Firefox browser" title="Firefox browser" style="max-height:50px; max-width:151px"></p>
						<p><a href="https://www.mozilla.org/en-US/firefox/new/" style="color:#ffffff">download Firefox browser</a>
						</p>
					</td>
					<td>
						<p><img
									src="https://cdn-production-opera-website.operacdn.com/staticfiles/assets/images/hf-images/logo-header-opera.png"
									alt="Opera browser" title="Opera browser" style="max-height:50px"></p>
						<p><a href="https://www.opera.com/download" style="color:#ffffff">download Opera browser</a></p>
					</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
	
	<div class="d-flex auth-page_outer">
				
		<div class="auth-page_main">
			<div class="auth-page__form">
				
				<div style="display:none;">
					<div id="system-message-container"></div>
				</div>
				
				<div class="d-flex flex-column h-100">
					<div id="login_box" class="login-wrapper">
						<div class="auth-wrap">
							<div class="userdata">
																								  
<div class="header">
	<div class="logo-box_header" > 
		<div class="logo-box_header_title">Admin</div>
		<div class="logo-box_header_description">Access Only</div>
	</div>
</div>
<div class="body" >
	<?php echo sysfunc::html_notice( $msg ?? null, false ); ?>
	<form id="login-form" class="form-auth-small" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
	<div class="form-group field-loginform-username required">
<label class="control-label sr-only" for="loginform-username">Email</label>
<input type="text" id="loginform-username" value="<?php echo $email; ?>" class="form-control" name="email" autofocus placeholder="Email" autocomplete="new-username" aria-required="true">

<p class="help-block help-block-error"></p>
</div>	
	<div class="form-group field-loginform-password required">
<label class="control-label sr-only" for="loginform-password">Password</label>
<input type="password" id="loginform-password" class="form-control" name="password" placeholder="Password" autocomplete="new-password" aria-required="true">

<p class="help-block help-block-error"></p>
</div>

<button type="submit" class="btn btn-primary btn-primary-main" name="login-button">Login</button>
	
	</form></div>
							</div>
						</div>
					</div>
				</div>
			</div>
							<div class="auth-page__steps">

					<div class="mainLogoBox">
						<a href="http://tradewithzerah.com/" class="wr-log">
							<img class="mainLogo" src="/assets/9537ac48/logo-regist.svg" alt="logo">
							<img src="/assets/9537ac48/logo-icon.svg" alt="logo: ZerahFX icon" class="logo logo--mob">
						</a>
					</div>
											<h3 class="auth-title auth-title__login">
							Admin <span class="accent">Dashboard</span>
						</h3>
									</div>
					</div>
			</div>
</div>

<script src="/assets/1410f0f3/jquery.js"></script>
<script src="/assets/5759b355/yii.js"></script>
<script src="/assets/5759b355/yii.validation.js"></script>
<script src="/assets/5759b355/yii.activeForm.js"></script>
<script src="/assets/3fb5b007/js/auth.js"></script>
<script src="/assets/a523bd58/toastr.js"></script>
<script src="/assets/e31d6fb/js/preloader.js"></script>
<script src="/assets/a228f137/js/popper.min.js"></script>
<script src="/assets/a228f137/js/bootstrap.min.js"></script>
<script src="/assets/f351dc04/metis-menu.js"></script>
<script src="/assets/a9d552d7/js/theme.js"></script>
<script>jQuery(function ($) {
jQuery('#login-form').yiiActiveForm([{"id":"loginform-username","name":"username","container":".field-loginform-username","input":"#loginform-username","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Email cannot be blank."});}},{"id":"loginform-password","name":"password","container":".field-loginform-password","input":"#loginform-password","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Password cannot be blank."});}},{"id":"loginform-rememberme","name":"rememberMe","container":".field-loginform-rememberme","input":"#loginform-rememberme","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.boolean(value, messages, {"trueValue":"1","falseValue":"0","message":"Stay signed in must be either \"1\" or \"0\".","skipOnEmpty":1});}}], []);
toastr.options = {
            "positionClass": "toast-top-center",
            "timeOut": "7000",
            "newestOnTop": false,
        }

});</script>
<script>
	function msieversion() {
		var IEhide = document.getElementById("IE-hide");
		var mainBox = document.getElementById("mainBox");
		var ua = window.navigator.userAgent;
		var msie = ua.indexOf("MSIE ");
		
		if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))  // If Internet Explorer, return version number
		{
			//alert(parseInt(ua.substring(msie + 5, ua.indexOf(".", msie))));
			IEhide.setAttribute("style", "display:block");
			mainBox.setAttribute("style", "display:none");
		} else  // If another browser, return 0
		{
			//console.log('otherbrowser');
		}
		
		return false;
	}
	
	msieversion();
</script>
</body>
</html>
