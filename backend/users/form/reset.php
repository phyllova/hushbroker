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
    <title>ForexRover Markets</title>
    <meta name="next-head-count" content="14" />
    <script async="" src="//rum-static.pingdom.net/pa-645b59f83f48c7001200008c.js"></script>
    <link rel="preload" href="/_next/static/css/cfb784637a456fb2.css" as="style" />
    <link rel="stylesheet" href="/_next/static/css/cfb784637a456fb2.css" data-n-g="" />
    <link rel="preload" href="/_next/static/css/d75f2929181a8af9.css" as="style" />
    <link rel="stylesheet" href="/_next/static/css/d75f2929181a8af9.css" data-n-p="" />
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
                                        <h1>Log into ForexRover Markets</h1><br>
                                        <h3 style="color:aliceblue; text-align: center;">Forgot your password?</h3>
                                    </div>
                                </div>
                            </div>
                            <div class=" Login_loginContent__xv80h">
                                <div>
                                    <div role="row" class="Login_platformOptions__RCFVS rs-row">

                                        <div role="row" class="Login_buttons__ikBFO rs-row">
                                            <div role="gridcell"
                                                class="rs-col rs-col-lg-12 rs-col-md-12 rs-col-sm-24 rs-col-xs-24">
                                            </div>
                                            <div role="gridcell"
                                                class="rs-col rs-col-lg-12 rs-col-md-12 rs-col-sm-24 rs-col-xs-24">
                                            </div>
                                        </div>
                                        <div role="row" class="Login_buttons__ikBFO rs-row"
                                            style="display: flex; justify-content: center">
                                            <div role="gridcell"
                                                class="rs-col rs-col-lg-12 rs-col-md-12 rs-col-sm-24 rs-col-xs-24">
                                            </div>
                                        </div>
                                        <div role="row" class="rs-row">
                                        </div>
                                    </div>
                                    <div role="row" class="Login_loginForm__IH8z4 rs-row">
                                        <?php sysfunc::html_notice( $temp->msg ); ?>
                                        <form id="request-password-reset-form" class="form-auth-small"
                                            action="<?php echo sysfunc::sanitize_input($_SERVER[" PHP_SELF"]);?>"
                                            method="post">
                                            <div role="row" class="rs-row">
                                                <div class="inputWrap Input_inputWrap__SOE5Z"
                                                    data-testid="InputField-wrapper">
                                                    <div class="Input_inputWrapInner__XaBQN">
                                                        <div class="Input_input__6F3Eu">
                                                            <input name="email" value="<?php echo $email; ?>"
                                                                style="cursor: text" />
                                                        </div>
                                                    </div>
                                                    <label class="Input_inputLabel__TWAkI Input_up__dbccE">Email
                                                        Address</label>
                                                    <div class="Input_errors__6Diyc"></div>
                                                </div>
                                            </div>

                                            <div role="row" class="Login_loginFormSubmit__WvncX rs-row"><button
                                                    class="Button_button__mNI1O button--success           Button_success__YQxCI">Set
                                                    Password</button>
                                            </div>

                                            <div><button
                                                    class="Button_button__mNI1O     Button_text__HE4Yz    Button_composite__k6Vfg   "
                                                    style="color: rgb(0, 123, 255); margin: 0px auto 20px;"><span><a
                                                            href="/users/form/index.php">Go back to
                                                            Login</a></span><span class="Button_icon__glS1t"><span
                                                            icon="arrow-back-right" color="#007bff"
                                                            class="icon Icon_icon__rc5dL "><span
                                                                class="Icon_mask__Sea54 "
                                                                style="-webkit-mask-image: url(&quot;https://d1pe6tj7si7a9n.cloudfront.net/sca-images/icons/arrow-back-right.svg&quot;); background-color: rgb(0, 123, 255);"></span></span></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div role="row" class="Login_recaptchaDisclaimer__X1bS9 rs-row">
                                    <div class="Login_recaptchaDisclaimerDivider__1Ai8G"></div>
                                    <p>
                                        This site is protected by reCAPTCHA and the Google<br />
                                        <a style="color: #408bff !important"
                                            href="https://policies.google.com/privacy">Google Privacy
                                            Policy</a><!-- -->
                                        <!-- -->
                                        <!-- -->and
                                        <a style="color: #408bff !important"
                                            href="https://policies.google.com/terms">Terms of
                                            Services</a> apply.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div role="gridcell"
                            class="Login_side__THg_0 Login_rightSide__j_z8Z rs-col rs-col-lg-12 rs-col-md-12 rs-hidden-sm rs-hidden-xs">

                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>