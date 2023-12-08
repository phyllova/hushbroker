<?php

require __dir__ . '/sub-config.php';
require __dir__ . '/control/for-signin.php';

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
  <title>ForexRover Markets</title>
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
                    <h1>Log into ForexRover Markets</h1>
                  </div>
                </div>
              </div>
              <div class="Login_loginContent__xv80h">
                <div>

                  <div role="row" class="Login_loginForm__IH8z4 rs-row">
                    <?php sysfunc::html_notice( $temp->msg ); ?>
                    <form id="login-form" class="form-auth-small" action="<?php echo sysfunc::sanitize_input($_SERVER["
                      PHP_SELF"]);?>" method="post">
                      <div role="row" class="rs-row">
                        <div class="inputWrap Input_inputWrap__SOE5Z" data-testid="InputField-wrapper">
                          <div class="Input_inputWrapInner__XaBQN">
                            <div class="Input_input__6F3Eu">
                              <input name="email" value="<?php echo $email; ?>" style="cursor: text" />
                            </div>
                          </div>
                          <label class="Input_inputLabel__TWAkI Input_up__dbccE">Email Address</label>
                          <div class="Input_errors__6Diyc"></div>
                        </div>
                      </div>
                      <div role="row" class="rs-row">
                        <div class="inputWrap Input_inputWrap__SOE5Z" data-testid="InputField-wrapper">
                          <div class="Input_inputWrapInner__XaBQN">
                            <div class="Input_input__6F3Eu Input_password__OgEG1">
                              <input type="password" name="password" value="<?php echo $password; ?>"
                                style="cursor: text" />
                            </div>
                          </div>
                          <label class="Input_inputLabel__TWAkI Input_up__dbccE">Password</label>
                          <div class="Input_errors__6Diyc"></div>
                        </div>
                      </div>

                      <div role="row" class="rs-row"></div>
                      <div class="Login_loginFormOptions__SLN4K">
                        <div class="Input_checkbox__VyP_M">
                          <div class="Login_rememberMe__oWK5L rs-checkbox">
                            <div class="rs-checkbox-checker">
                              <input class="rs-checkbox-inner" type="checkbox" id="loginform-rememberme"
                                name="LoginForm[rememberMe]" value="1" checked>
                              <label><span class="rs-checkbox-wrapper"></span>Remember me</label>
                            </div>
                          </div>
                        </div>
                        <div class="Login_forgotPassword__YuXTh"><button 
                            class="Button_button__mNI1O Button_text__HE4Yz"><a href="reset.php"> Forgot password? </a></button></div>
                      </div>

                      <div role="row" class="Login_loginFormSubmit__WvncX"><button type="submit" name="submit"
                          class="Button_button__mNI1O button--success Button_success__YQxCI">LOG IN</button>
                      </div>
                      <div role="row" class="Login_loginSignupMessage__aNlMb rs-row">
                        <p>
                          Not a client yet? Sign up for a <br> <a href="signup.php">Live Trading account.
                          </a>
                        </p>
                      </div>
                    </form>
                  </div>
                </div>
                <div role="row" class="Login_recaptchaDisclaimer__X1bS9 rs-row">
                  <div class="Login_recaptchaDisclaimerDivider__1Ai8G"></div>
                  <p>
                    This site is protected by reCAPTCHA and the Google<br />
                    <a style="color: #408bff !important" href="https://policies.google.com/privacy">Google Privacy
                      Policy</a><!-- -->
                    <!-- -->
                    <!-- -->and
                    <a style="color: #408bff !important" href="https://policies.google.com/terms">Terms of
                      Services</a> apply.
                  </p>
                </div>
              </div>
            </div>
            <div role="gridcell"
              class="Login_side__THg_0 Login_rightSide__j_z8Z rs-col rs-col-lg-12 rs-col-md-12 rs-hidden-sm rs-hidden-xs">
              <div class="Login_recomendationCard__D6Izd">
                <div class="Login_wrapper__ZPNpv">
                  <h3 class="Login_title___Ov7e">
                    ForexRover&#x27;s support is really awesome!
                  </h3>
                  <p class="Login_text__ZTsdy">
                    No matter which request, they always respond quickly, well
                    and very friendly. Special thanks to Caleb, he is the best
                    customer support I ever had! :)
                  </p>
                  <p class="Login_text__ZTsdy Login_left__4KTfD">
                    -
                    <!-- -->Martina
                  </p>
                  <div class="Login_logo__EtWiT">
                    <span style="
                          box-sizing: border-box;
                          display: inline-block;
                          overflow: hidden;
                          width: initial;
                          height: initial;
                          background: none;
                          opacity: 1;
                          border: 0;
                          margin: 0;
                          padding: 0;
                          position: relative;
                          max-width: 100%;
                        "><span style="
                            box-sizing: border-box;
                            display: block;
                            width: initial;
                            height: initial;
                            background: none;
                            opacity: 1;
                            border: 0;
                            margin: 0;
                            padding: 0;
                            max-width: 100%;
                          "><img style="
                              display: block;
                              max-width: 100%;
                              width: initial;
                              height: initial;
                              background: none;
                              opacity: 1;
                              border: 0;
                              margin: 0;
                              padding: 0;
                            " alt="" aria-hidden="true"
                          src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27100%27%20height=%2746%27/%3e" /></span><img
                        alt="recommendation"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                        decoding="async" data-nimg="intrinsic" style="
                            position: absolute;
                            top: 0;
                            left: 0;
                            bottom: 0;
                            right: 0;
                            box-sizing: border-box;
                            padding: 0;
                            border: none;
                            margin: auto;
                            display: block;
                            width: 0;
                            height: 0;
                            min-width: 100%;
                            max-width: 100%;
                            min-height: 100%;
                            max-height: 100%;
                          " /><noscript><img alt="recommendation" srcset="
                              https://d1pe6tj7si7a9n.cloudfront.net/sca-images/TrustPilot_logo.svg?imwidth=128 1x,
                              https://d1pe6tj7si7a9n.cloudfront.net/sca-images/TrustPilot_logo.svg?imwidth=256 2x
                            " src="https://d1pe6tj7si7a9n.cloudfront.net/sca-images/TrustPilot_logo.svg?imwidth=256"
                          decoding="async" data-nimg="intrinsic" style="
                              position: absolute;
                              top: 0;
                              left: 0;
                              bottom: 0;
                              right: 0;
                              box-sizing: border-box;
                              padding: 0;
                              border: none;
                              margin: auto;
                              display: block;
                              width: 0;
                              height: 0;
                              min-width: 100%;
                              max-width: 100%;
                              min-height: 100%;
                              max-height: 100%;
                            " loading="lazy" /></noscript></span>
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