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

<?php

require __dir__ . '/sub-config.php';
require __dir__ . '/control/for-reset.php';


?>

<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="referrer" content="origin" />
  <meta name="referer" content="origin" />
  <meta property="og:title" content="Secure Client Area || ForexRover Markets" />
  <meta property="og:site_name" content="forexrover.com" />
  <meta property="og:url" content="https://forexrover.com/" />
  <meta property="og:description" content="ForexRover Markets is an award-winning United States Broker." />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://forexrover.com/wp-content/uploads/2021/12/Homepage-Banner.jpg" />
  <meta property="fb:app_id" content="332858721648289" />
  <link rel="alternate" hreflang="undefined" href="https://forexrover.com?lang=undefined" />
  <link rel="alternate" hreflang="x-default" href="https://forexrover.com/lang=en" />
<link rel="icon" type="image/png" sizes="32x32" href="https://forexrover.com/wp-content/uploads/2023/12/favicon-32x32.png">

  <title>Recover Password - ForexRover Markets</title>
  <meta name="next-head-count" content="14" />
  <link rel="preload" href="_next/static/css/cfb784637a456fb2.css" as="style" />
  <link rel="stylesheet" href="_next/static/css/cfb784637a456fb2.css" data-n-g="" />
  <link rel="preload" href="_next/static/css/d75f2929181a8af9.css" as="style" />
  <link rel="stylesheet" href="_next/static/css/d75f2929181a8af9.css" data-n-p="" />
  <script async="" src="//rum-static.pingdom.net/pa-645b59f83f48c7001200008c.js"></script>
    <link rel="preload" href="_next/static/css/cfb784637a456fb2.css" as="style" />
    <link rel="stylesheet" href="_next/static/css/cfb784637a456fb2.css" data-n-g="" />
    <link rel="preload" href="_next/static/css/d75f2929181a8af9.css" as="style" />
    <link rel="stylesheet" href="_next/static/css/d75f2929181a8af9.css" data-n-p="" /><noscript
        data-n-css=""></noscript>
    <script defer="" nomodule="" src="_next/static/chunks/polyfills-c67a75d1b6f99dc8.js"></script>
    <script src="_next/static/chunks/webpack-0b52635059eb3823.js" defer=""></script>
    <script src="_next/static/chunks/framework-79bce4a3a540b080.js" defer=""></script>
    <script src="_next/static/chunks/main-94691ccffb98f8df.js" defer=""></script>
    <script src="_next/static/chunks/pages/_app-a30ba05ceb4e9425.js" defer=""></script>
    <script src="_next/static/chunks/e82996df-21941a447cd88264.js" defer=""></script>
    <script src="_next/static/chunks/6763fea0-02baa21ce8c3b801.js" defer=""></script>
    <script src="_next/static/chunks/1557-0651dffc5fa880f9.js" defer=""></script>
    <script src="_next/static/chunks/2763-9bdd70a529aa8f5e.js" defer=""></script>
    <script src="_next/static/chunks/443-784633cc7291cfe0.js" defer=""></script>
    <script src="_next/static/chunks/5675-16b2e6cb0c6a63f9.js" defer=""></script>
    <script src="_next/static/chunks/227-33affe56d221368a.js" defer=""></script>
    <script src="_next/static/chunks/5613-636b9762a235bd44.js" defer=""></script>
    <script src="_next/static/chunks/pages/index-60b24981c3e76010.js" defer=""></script>
    <script src="_next/static/tNrQdIk_M6r-x_00Kt5xG/_buildManifest.js" defer=""></script>
    <script src="_next/static/tNrQdIk_M6r-x_00Kt5xG/_ssgManifest.js" defer=""></script>

  </head>

<body>
  <div id="__next" data-reactroot="">
    <main lang="en" id="auth-node" class="auth_auth__KeHIJ">
      <section class="Login_login__A2f_t">
        <div role="grid" class="Login_loginDialog__5owr_ rs-grid-container-fluid">
          <div role="row" class="rs-row" style="width: 100%; margin: 0">
            <div role="gridcell"
              class="Login_side__THg_0 Login_leftSide__kiRT2 rs-col rs-col-lg-12 rs-col-md-12 rs-col-sm-24 rs-col-xs-24">
              <div role="row" class="Login_header__t7VoS rs-row">
                <div role="gridcell" class="rs-col">
                  <div role="row" class="Login_optionsLang__68uH0 rs-row"></div>
                  <div role="row" class="rs-row">
                    <div class="Login_logo__EtWiT"></div>
                  </div>
                  <div role="row" class="rs-row">
                    <h1>Password Recovery</h1>
                  </div>
                </div>
              </div>
              <div class="Login_loginContent__xv80h">
                <div>

                  <div role="row" class="Login_loginForm__IH8z4 rs-row">
				  <?php echo sysfunc::html_notice( $msg ?? null, false ); ?>
				  <form  action="confirmres.php?id=<?php echo $id;?>&email=<?php echo $email;?>" method="POST">

				  <div role="row" class="rs-row">
					  <div class="inputWrap Input_inputWrap__SOE5Z" data-testid="InputField-wrapper">
						  <div class="Input_inputWrapInner__XaBQN">
							  <div class="Input_input__6F3Eu Input_password__OgEG1">
								  <input id="inp" type="text" name="password"
								  style="cursor: text" />
								</div>
							</div>
							<label class="Input_inputLabel__TWAkI Input_up__dbccE">Enter New Password</label>
							<div class="Input_errors__6Diyc"></div>
                        </div>
					</div>
					
					<input id="inp" type="hidden" name="email" value="<?php echo $email;?>" >                                
				  <input id="inp" type="hidden" name="id" value="<?php echo $id;?>" >
                      <div role="row" class="rs-row"></div>

                    
                      <div role="row" class="Login_loginFormSubmit__WvncX"><button type="submit" name="submit"
                          class="Button_button__mNI1O button--success Button_success__YQxCI">Reset Password</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
			
            
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>

</html>