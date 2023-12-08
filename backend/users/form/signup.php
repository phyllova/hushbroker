<?php
require __dir__ . '/sub-config.php';
require __dir__ . '/control/for-signin.php';

### start HTML 

require __dir__ . '/form-header.php';

?>

<!DOCTYPE html>
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
  <link rel="preload" href="_next/static/css/dab67e39f892d873.css" as="style" />
  <link rel="stylesheet" href="_next/static/css/dab67e39f892d873.css" data-n-p="" />
  <link rel="icon" type="image/png" sizes="32x32" href="https://forexrover.com/wp-content/uploads/2023/12/favicon-32x32.png">

</head>

<body>
  <div id="__next" data-reactroot="">
    <main lang="en" id="auth-node" class="auth_auth__KeHIJ">
      <section class="Register_register__oSoSm">
        <div role="grid" class="Register_register-dialog__aKAmZ rs-grid-container">
          <div role="row" class="rs-row">
            <div role="gridcell"
              class="Register_side__hIP52 Register_leftSide__3mJNt rs-col rs-col-lg-8 rs-col-md-8 rs-hidden-sm rs-hidden-xs">
              <div class="Register_logo__pBmAN"></div>
              <div>
                <div></div>
                <div class="Register_step__LTWWx">
                  <div class="Register_stepNumber__0UmM5">1</div>
                  <p lang="en" class="Register_stepTitle__sp2Y0">
                    Complete application
                  </p>
                  <p lang="en" class="Register_stepDescription__EkxJH">
                    Fill out your details on our fast and secure application
                    form.
                  </p>
                </div>
                <div class="Register_step__LTWWx">
                  <div class="Register_stepNumber__0UmM5">2</div>
                  <p lang="en" class="Register_stepTitle__sp2Y0">
                    Confirm email
                  </p>
                  <p lang="en" class="Register_stepDescription__EkxJH">
                    Check the verification link within the email we’ll send
                    you.
                  </p>
                </div>
                <div class="Register_step__LTWWx">
                  <div class="Register_stepNumber__0UmM5">3</div>
                  <p lang="en" class="Register_stepTitle__sp2Y0">
                    Wait for approval
                  </p>
                  <p lang="en" class="Register_stepDescription__EkxJH">
                    Your application will be reviewed and approved by our
                    team.
                  </p>
                </div>
                <div class="Register_step__LTWWx">
                  <div class="Register_stepNumber__0UmM5">4</div>
                  <p lang="en" class="Register_stepTitle__sp2Y0">
                    Fund your account
                  </p>
                  <p lang="en" class="Register_stepDescription__EkxJH">
                    Fund your account with our range of zero fee funding
                    methods.
                  </p>
                </div>
                <div class="Register_step__LTWWx">
                  <div class="Register_stepNumber__0UmM5">
                    <span icon="check" color="white" class="icon Icon_icon__rc5dL"><span class="Icon_mask__Sea54" style="
                            -webkit-mask-image: url(&#x27;https://d1pe6tj7si7a9n.cloudfront.net/sca-images/icons/check.svg&#x27;);
                            mask-image: url(&#x27;https://d1pe6tj7si7a9n.cloudfront.net/sca-images/icons/check.svg&#x27;);
                            background-color: white;
                          "></span></span>
                  </div>
                  <p lang="en" class="Register_stepTitle__sp2Y0">
                    Start trading
                  </p>
                  <p lang="en" class="Register_stepDescription__EkxJH">
                    Once approved, you can choose any of our investment
                    packages.
                  </p>
                </div>
              </div>
            </div>
            <div role="gridcell"
              class="Register_side__hIP52 Register_rightSide__qnYa7 rs-col rs-col-lg-16 rs-col-md-16 rs-col-sm-24 rs-col-xs-24">
              <div role="row" class="rs-row" style="background-color: #000; padding: 0">
                <div role="gridcell" style="padding: 0"
                  class="rs-col rs-hidden-lg rs-hidden-md rs-col-sm-24 rs-col-xs-24">
                  <div class="Register_logo__pBmAN"></div>
                </div>
              </div>
              <div class="Register_header__YJD6d">
                <h2 lang="en" class="Register_title__ZpKLr">
                  Account Registration
                </h2>
                <h3 lang="en" class="Register_subTitle__JSuE7">
                  <br />You are just 4 simple steps away from placing your
                  first trade.
                </h3>
              </div>

              <div class="Register_registerContent__PbtFh ">
                <?php sysfunc::html_notice( $temp->msg ); ?>
                <form  action="<?php echo sysfunc::sanitize_input($_SERVER["PHP_SELF"]);?>" method="POST">
                  <div hidden class="inputWrap Input_inputWrap__SOE5Z" style="margin-left: 0; padding-right: 0"
                    data-testid="InputField-wrapper">
                    <div class="Input_inputWrapInner__XaBQN">
                      <div class="Input_input__6F3Eu">
                        <input type="hidden" name="bonus" value="<?php echo $rb;?>">
                      </div>
                    </div>
                    <label class="Input_inputLabel__TWAkI Input_up__dbccE"> Bonus</label>
                    <div class="Input_errors__6Diyc"></div>
                  </div>
                  <div class="Register_secondPart__N4E5w">
                    <div class="inputWrap Input_inputWrap__SOE5Z" data-testid="InputField-wrapper">
                      <div class="Input_inputWrapInner__XaBQN">
                        <div class="Input_input__6F3Eu">
                          <input name="email" value="<?php echo $email; ?>" style="cursor: text" />
                        </div>
                      </div>
                      <label class="Input_inputLabel__TWAkI Input_up__dbccE">Email Address</label>
                      <div class="Input_errors__6Diyc">
                      </div>
                    </div>
                    <div class="inputWrap Input_inputWrap__SOE5Z" data-testid="InputField-wrapper">
                      <div class="Input_inputWrapInner__XaBQN">
                        <div class="Input_input__6F3Eu">
                          <input name="username" value="<?php echo $username; ?>" style="cursor: text" />
                        </div>
                      </div>
                      <label class="Input_inputLabel__TWAkI Input_up__dbccE">Username</label>
                      <div class="Input_errors__6Diyc">
                      </div>
                    </div>
                    <div class="Input_input__6F3Eu WorldwidePhoneInput_worldwidePhone__yViPz">
                      <div class="inputWrap Input_inputWrap__SOE5Z WorldwidePhoneInput_number__ho2fx      "
                        data-testid="InputField-wrapper">
                        <div class="Input_inputWrapInner__XaBQN">
                          <div class="Input_input__6F3Eu">
                            <input autocomplete="tel" name="phone" value="<?php echo $phone; ?>" style="cursor:text">
                          </div>
                        </div><label class="Input_inputLabel__TWAkI Input_up__dbccE">Mobile
                          Phone</label>
                        <div class="Input_errors__6Diyc">
                        </div>
                      </div>
                    </div>
                    <div class="CountrySelector_countrySelector__B120O">
                      <div class="inputWrap Input_inputWrap__SOE5Z CountrySelector_dropdown__s_Saz      ">
                        <div class="Input_inputWrapInner__XaBQN">
                          <div
                            class="Dropdown_dropdown__SYcr4 Input_dropdown__UaAfM Dropdown_showTitle__EAgj9 rs-dropdown rs-dropdown-placement-bottom-start rs-dropdown-selected-within">
                            <div class="CountrySelector_item__vm917" style="display: flex;">

                              <select class="Dropdown_toggleButton__Fy_yy  rs-dropdown-toggle rs-btn rs-btn-default">
                                <option selected disabled>Select Country</option>
                                <?php foreach( sysfunc::countries() as $key => $country ): ?>
                                <option value="<?php echo $key; ?>">
                                  <?php echo $country; ?>
                                </option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                            <span class="rs-ripple-pond"><span class="rs-ripple"></span></span>
                          </div>
                        </div><label class="Input_inputLabel__TWAkI ">Residence Country</label>
                        <div class="Input_errors__6Diyc"></div>
                      </div>
                    </div>
                    <div class="inputWrap Input_inputWrap__SOE5Z register__password" data-testid="InputField-wrapper">
                      <div class="Input_inputWrapInner__XaBQN">
                        <div class="Input_input__6F3Eu Input_password__OgEG1"><input type="text" name="password"
                            keys="[object Object]" value="<?php echo $password; ?>" style="cursor:text"><span
                            color="#c80600" icon="eye" class="icon Icon_icon__rc5dL Input_toggleMask__eL5cc"><span
                              class="Icon_mask__Sea54 "
                              style="-webkit-mask-image: url(&quot;https://d1pe6tj7si7a9n.cloudfront.net/sca-images/icons/eye.svg&quot;); background-color: rgb(200, 6, 0);"></span></span></button>
                        </div>
                      </div><label class="Input_inputLabel__TWAkI Input_up__dbccE">Password</label>
                      <div class="Input_errors__6Diyc"></div>
                    </div>

                    <input class="form-control" id="inp" type="hidden" name="referred" readonly
                      value="<?php echo $refcode; ?>">

                    <div class="Input_checkbox__VyP_M">
                      <div style="margin-left:-10px" class="rs-checkbox">
                        <div class="rs-checkbox-checker"><label><span><input id="inp" class="rs-checkbox-wrapper"
                                type="checkbox" name="terms" class='form-check-input'><span class="rs-checkbox-inner"
                                aria-hidden="true" role="presentation"></span></span>
                            <p>I confirm that I am over 18 and I agree to the<!-- -->
                              <button class="Button_button__mNI1O Button_text__HE4Yz Button_link__cE9Ou"><a
                                  href="https://forexrover.com/en/legal/">ForexRover
                                  Markets policies</a></button>
                            </p>
                          </label></div>
                      </div>
                    </div>
                    <div class="Register_backLink__0L3KX">
                        <button class="Button_button__mNI1O Button_success__YQxCI"
                        style="margin-right: 0px; margin-left: 0px;" type="submit" name="submit">Register</button>
                      <p>Already a client?<button class="Button_button__mNI1O Button_text__HE4Yz"
                          style="text-decoration: underline; padding: 0px; margin-left: 3px;"><a href="index.php">Log in
                            here</a></button></p>
                    </div>
                  </div>
                </form>
              </div>
              <div class="Register_registerFooter__tM0f0">
                <div class="Register_disclaimer__ZGT6m">
                  <div class="Register_divider__Evl2u"></div>
                  <p class="Register_content__l2A8d">
                    This site is protected by the
                    <a style="color: #408bff !important" href="https://policies.google.com/privacy">Google Privacy
                      Policy</a><!-- -->
                    <!-- -->
                    <!-- -->and
                    <a style="color: #408bff !important" href="https://policies.google.com/terms">Terms of Services</a>
                    <!-- -->
                    <!-- -->
                    <!-- -->apply.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
</body>

</html>