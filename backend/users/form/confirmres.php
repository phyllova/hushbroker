<?php
session_start();
include "../../config/db.php";
include "../../config/config.php";
$msg = "";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$id = $_GET['id'];
$email = $_GET['email'];


if (isset($_POST['submit'])) {
 
  	
	$password = $link->real_escape_string($_POST['password']);
	
		$email= $link->real_escape_string($_POST['email']);
		
		$id= $link->real_escape_string($_POST['id']);

	
	if($password == "" ){
		$msg = "Password fields cannot be empty!";
		
	}else {
	    
					$sql = "UPDATE users  SET password = '$password'  WHERE id= '$id' ";

          if($result = mysqli_query($link, $sql)){
        
 $msg = "Password Reset Successful!.";
}
               
             else{
                $msg = "error!.";
            }
        }
         
				 
		
	}




?>

<html lang="en"><head>
	<meta property="og:image" content="/assets/9537ac48/logo.jpg">
	<meta property="og:image:secure_url" content="/assets/9537ac48/logo.jpg">
	<meta property="og:image:type" content="image/jpeg">
	<meta itemprop="image" content="/assets/9537ac48/logo.jpg">
	<link rel="apple-touch-icon" href="/assets/9537ac48/logo.jpg">
	<link rel="apple-touch-icon" href="/assets/9537ac48/logo.jpg" sizes="72x72">
	<link rel="apple-touch-icon" href="/assets/9537ac48/logo.jpg" sizes="114x114">
	<link rel="apple-touch-icon" href="/assets/9537ac48/logo.jpg" sizes="144x144">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reset password</title>
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
 
<body><div class="auth-page ">
	<!-- <div class="snowContainer"><div id="snow"></div></div> -->
	<div id="IE-hide" class="hidden-block" style="display:none">
		<div style="max-width: 800px; margin: auto; text-align: center; padding-top: 50px">
			<table cellpadding="15" align="center">
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
						<p><img src="https://www.google.com/chrome/static/images/chrome-logo.svg" alt="Chrome browser" title="Chrome browser" style="max-height:50px"></p>
						<p><a href="https://www.google.com/intl/en/chrome/" style="color:#ffffff">download Chrome browser</a></p>
					</td>
					<td>
						<p><img src="https://www.mozilla.org/media/protocol/img/logos/firefox/logo-word-hor.svg" alt="Firefox browser" title="Firefox browser" style="max-height:50px; max-width:151px"></p>
						<p><a href="https://www.mozilla.org/en-US/firefox/new/" style="color:#ffffff">download Firefox browser</a>
						</p>
					</td>
					<td>
						<p><img src="https://cdn-production-opera-website.operacdn.com/staticfiles/assets/images/hf-images/logo-header-opera.png" alt="Opera browser" title="Opera browser" style="max-height:50px"></p>
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
	<div class="logo-box_header">
	<div class="logo-box_header_title">Reset password</div>
	</div>
</div>
<div class="body">
    <?php if($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" ."</br></br>";  ?> 
   <p>Please choose your new password:</p>
    <form  action="confirmres.php?id=<?php echo $id;?>&email=<?php echo $email;?>" method="POST"> 
        <div class="form-group field-resetpasswordform-password required has-error">
<label class="control-label sr-only" for="resetpasswordform-password">Password</label>
<input type="text" id="resetpasswordform-password" class="form-control" name="password" autofocus="" placeholder="Password" aria-required="true" aria-invalid="true">

<p class="help-block help-block-error"></p>

<input id="inp" type="hidden" name="email" value="<?php echo $email; ?>">
<input id="inp" type="hidden" name="id" value="<?php echo $id;?>" >

</div>
        <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Save</button>    </form></div>							</div>
						</div>
					</div>
				</div>
			</div>
							<div class="auth-page__steps">
					<div class="dropdown dropdown_auth">
						<a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
							<img src="/assets/db9042ed/en.png">
						</a>
						<ul class="dropdown-menu dropdown-menu-right account animated flipInY">
															<a href="/en/reset-password?token=dkwVtMcRDsansATIaoPk4vTkuKSVZVXZ_1699271992"><li><img src="/assets/db9042ed/en.png">English</li> </a>													</ul>
					</div>
					<div class="mainLogoBox">
						<a href="http://tradewithzerah.com/" class="wr-log">
							<img class="mainLogo" src="/assets/9537ac48/logo-regist.svg" alt="logo">
							<img src="/assets/9537ac48/logo-icon.svg" alt="logo: ZerahFX icon" class="logo logo--mob">
						</a>
					</div>
											<h3 class="auth-title auth-title__login">
							Join us <span class="accent">Today!</span>
							<div class="socials">
								<a href="https://instagram.com/zerah_fx?igshid=OGQ5ZDc2ODk2ZA==" target="_blank" class="socials__link">
									<svg class="icon" width="48" height="49" viewBox="0 0 48 49" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M0 24.7285C0 11.4737 10.7452 0.728516 24 0.728516C37.2548 0.728516 48 11.4737 48 24.7285C48 37.9833 37.2548 48.7285 24 48.7285C10.7452 48.7285 0 37.9833 0 24.7285ZM26.5016 38.84V25.7827H30.1059L30.5836 21.2831H26.5016L26.5077 19.031C26.5077 17.8574 26.6192 17.2286 28.3048 17.2286H30.5581V12.7285H26.9532C22.6231 12.7285 21.0991 14.9113 21.0991 18.5821V21.2836H18.4V25.7832H21.0991V38.84H26.5016Z"></path>
									</svg>
								</a>
								<a href="https://instagram.com/zerah_fx?igshid=OGQ5ZDc2ODk2ZA==" target="_blank" class="socials__link">
									<svg class="icon" width="48" height="49" viewBox="0 0 48 49" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M0 24.7285C0 11.4737 10.7452 0.728516 24 0.728516C37.2548 0.728516 48 11.4737 48 24.7285C48 37.9833 37.2548 48.7285 24 48.7285C10.7452 48.7285 0 37.9833 0 24.7285ZM26.0301 35.7744L26.0264 35.7763C27.3194 37.9928 29.0465 39.8843 32.3066 39.8843C37.6947 39.8843 38.2913 34.921 38.1805 33.726H36.2521C36.1523 34.6237 35.5539 35.7652 34.0762 35.7652C32.7204 35.7652 31.7451 34.8232 30.8031 33.4064C33.7308 31.1381 35.7441 27.6305 35.7441 23.3137C35.7441 15.5522 29.3531 10.3285 22.6481 10.3285C16.0538 10.3285 9.6 15.5928 9.6 23.3137C9.6 30.9645 16.0557 36.2251 22.6499 36.2251C23.7914 36.2251 24.944 36.0644 26.0301 35.7744Z"></path>
										<path fill-rule="evenodd" clip-rule="evenodd" d="M24.8018 33.3731C23.7785 31.3597 22.5779 29.3223 20.2339 29.3223C19.7869 29.3223 19.338 29.3962 18.928 29.5809L18.1337 27.9924C19.1016 27.1575 20.6698 26.4962 22.685 26.4962C25.8196 26.4962 27.4284 28.0109 28.7066 29.9356C29.4639 28.2916 29.8223 26.0677 29.8223 23.3136C29.8223 16.435 27.6722 12.9033 22.648 12.9033C17.6978 12.9033 15.5551 16.435 15.5551 23.3136C15.5551 30.1554 17.6978 33.6501 22.648 33.6501C23.4349 33.6501 24.1479 33.5652 24.8018 33.3731Z"></path>
									</svg>
								</a>
								<a href="https://instagram.com/zerah_fx?igshid=OGQ5ZDc2ODk2ZA==" target="_blank" class="socials__link">
									<svg class="icon" width="48" height="49" viewBox="0 0 48 49" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M0 24.7285C0 11.4737 10.7452 0.728516 24 0.728516C37.2548 0.728516 48 11.4737 48 24.7285C48 37.9833 37.2548 48.7285 24 48.7285C10.7452 48.7285 0 37.9833 0 24.7285ZM16.9605 20.6063H11.5216V36.9481H16.9605V20.6063ZM17.3188 15.5512C17.2835 13.9489 16.1377 12.7285 14.277 12.7285C12.4164 12.7285 11.2 13.9489 11.2 15.5512C11.2 17.1203 12.3805 18.3758 14.2064 18.3758H14.2412C16.1377 18.3758 17.3188 17.1203 17.3188 15.5512ZM36.5754 27.5782C36.5754 22.5588 33.8922 20.2226 30.3131 20.2226C27.4254 20.2226 26.1325 21.8087 25.4107 22.9214V20.6068H19.9711C20.0428 22.1402 19.9711 36.9485 19.9711 36.9485H25.4107V27.8219C25.4107 27.3335 25.446 26.8463 25.5898 26.4967C25.9829 25.5209 26.8779 24.5107 28.3805 24.5107C30.3494 24.5107 31.1365 26.0092 31.1365 28.2052V36.9481H36.5752L36.5754 27.5782Z"></path>
									</svg>
								</a>
								<a href="https://instagram.com/zerah_fx?igshid=OGQ5ZDc2ODk2ZA==" target="_blank" class="socials__link">
									<svg class="icon" width="48" height="49" viewBox="0 0 48 49" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M0 24.7285C0 11.4737 10.7452 0.728516 24 0.728516C37.2548 0.728516 48 11.4737 48 24.7285C48 37.9833 37.2548 48.7285 24 48.7285C10.7452 48.7285 0 37.9833 0 24.7285ZM24.0012 11.9285C20.5249 11.9285 20.0886 11.9437 18.7233 12.0058C17.3606 12.0682 16.4305 12.284 15.6166 12.6005C14.7747 12.9274 14.0606 13.3648 13.3491 14.0765C12.6371 14.788 12.1997 15.5021 11.8717 16.3437C11.5544 17.1579 11.3384 18.0883 11.2771 19.4504C11.216 20.8158 11.2 21.2523 11.2 24.7286C11.2 28.2049 11.2155 28.6399 11.2773 30.0052C11.34 31.3679 11.5557 32.298 11.872 33.1119C12.1992 33.9538 12.6365 34.6679 13.3483 35.3794C14.0595 36.0914 14.7736 36.5298 15.615 36.8568C16.4294 37.1733 17.3598 37.389 18.7222 37.4514C20.0876 37.5136 20.5236 37.5288 23.9996 37.5288C27.4762 37.5288 27.9111 37.5136 29.2765 37.4514C30.6391 37.389 31.5703 37.1733 32.3848 36.8568C33.2264 36.5298 33.9394 36.0914 34.6506 35.3794C35.3626 34.6679 35.8 33.9538 36.128 33.1122C36.4427 32.298 36.6587 31.3676 36.7227 30.0055C36.784 28.6401 36.8 28.2049 36.8 24.7286C36.8 21.2523 36.784 20.8161 36.7227 19.4507C36.6587 18.088 36.4427 17.1579 36.128 16.344C35.8 15.5021 35.3626 14.788 34.6506 14.0765C33.9386 13.3645 33.2266 12.9272 32.384 12.6005C31.5679 12.284 30.6373 12.0682 29.2746 12.0058C27.9092 11.9437 27.4746 11.9285 23.9972 11.9285H24.0012Z"></path>
										<path fill-rule="evenodd" clip-rule="evenodd" d="M22.8529 14.2356C23.1937 14.2351 23.574 14.2356 24.0012 14.2356C27.4188 14.2356 27.8239 14.2479 29.1735 14.3092C30.4215 14.3663 31.0989 14.5748 31.5501 14.75C32.1474 14.982 32.5733 15.2593 33.021 15.7073C33.469 16.1553 33.7464 16.582 33.9789 17.1794C34.1541 17.63 34.3629 18.3074 34.4197 19.5554C34.481 20.9047 34.4944 21.3101 34.4944 24.7261C34.4944 28.1421 34.481 28.5475 34.4197 29.8968C34.3626 31.1448 34.1541 31.8222 33.9789 32.2728C33.7469 32.8702 33.469 33.2955 33.021 33.7433C32.573 34.1913 32.1477 34.4686 31.5501 34.7006C31.0994 34.8766 30.4215 35.0846 29.1735 35.1417C27.8242 35.203 27.4188 35.2163 24.0012 35.2163C20.5833 35.2163 20.1782 35.203 18.8289 35.1417C17.5809 35.0841 16.9035 34.8755 16.4521 34.7003C15.8547 34.4683 15.428 34.191 14.98 33.743C14.532 33.295 14.2547 32.8694 14.0222 32.2718C13.847 31.8211 13.6382 31.1438 13.5814 29.8958C13.52 28.5464 13.5078 28.1411 13.5078 24.7229C13.5078 21.3047 13.52 20.9015 13.5814 19.5522C13.6384 18.3042 13.847 17.6268 14.0222 17.1756C14.2542 16.5783 14.532 16.1516 14.98 15.7036C15.428 15.2556 15.8547 14.9783 16.4521 14.7457C16.9033 14.5697 17.5809 14.3617 18.8289 14.3044C20.0097 14.2511 20.4673 14.2351 22.8529 14.2324V14.2356ZM30.8338 16.3609C29.9858 16.3609 29.2978 17.0482 29.2978 17.8964C29.2978 18.7444 29.9858 19.4324 30.8338 19.4324C31.6818 19.4324 32.3698 18.7444 32.3698 17.8964C32.3698 17.0484 31.6818 16.3609 30.8338 16.3609ZM24.0012 18.1556C20.371 18.1556 17.4278 21.0989 17.4278 24.729C17.4278 28.3592 20.371 31.3011 24.0012 31.3011C27.6314 31.3011 30.5735 28.3592 30.5735 24.729C30.5735 21.0989 27.6314 18.1556 24.0012 18.1556Z"></path>
										<path fill-rule="evenodd" clip-rule="evenodd" d="M24.0011 20.4619C26.3574 20.4619 28.2678 22.3721 28.2678 24.7286C28.2678 27.0849 26.3574 28.9953 24.0011 28.9953C21.6445 28.9953 19.7344 27.0849 19.7344 24.7286C19.7344 22.3721 21.6445 20.4619 24.0011 20.4619Z"></path>
									</svg>
								</a>
							</div>
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


</body></html>