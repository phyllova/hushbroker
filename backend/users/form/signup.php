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
                <form action="<?php echo sysfunc::sanitize_input($_SERVER[" PHP_SELF"]);?>" method="POST" name="form1"
                  id="form1">
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
                          <input name="email" tabindex="2" value="<?php echo $email; ?>" style="cursor: text" />
                        </div>
                      </div>
                      <label class="Input_inputLabel__TWAkI Input_up__dbccE">Email Address</label>
                      <div class="Input_errors__6Diyc">
                      </div>
                    </div>
                    <div class="inputWrap Input_inputWrap__SOE5Z" data-testid="InputField-wrapper">
                      <div class="Input_inputWrapInner__XaBQN">
                        <div class="Input_input__6F3Eu">
                          <input name="last_name" tabindex="2" value="<?php echo $username; ?>" style="cursor: text" />
                        </div>
                      </div>
                      <label class="Input_inputLabel__TWAkI Input_up__dbccE">Username</label>
                      <div class="Input_errors__6Diyc">
                      </div>
                    </div>
                    <div class="Input_input__6F3Eu WorldwidePhoneInput_worldwidePhone__yViPz">
                      <div
                        class="Dropdown_dropdown__SYcr4 Dropdown_showTitle__EAgj9 WorldwidePhoneInput_areaCode__YdXPx rs-dropdown rs-dropdown-placement-bottom-start rs-dropdown-selected-within">
                        <button id="menubutton-1" role="button" aria-haspopup="menu" aria-controls="menu-2"
                          name="codeCountry" tabindex="2" type="button"
                          class="WorldwidePhoneInput_areaDropdownToggleButton__l_ZAq  rs-dropdown-toggle rs-btn rs-btn-default"><svg
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 513 342" class="flag" code="US">
                            <path fill="#FFF" d="M0 0h513v342H0z"></path>
                            <path
                              d="M0 0h513v26.3H0zm0 52.6h513v26.3H0zm0 52.6h513v26.3H0zm0 52.6h513v26.3H0zm0 52.7h513v26.3H0zm0 52.6h513v26.3H0zm0 52.6h513V342H0z"
                              fill="#D80027"></path>
                            <path fill="#2E52B2" d="M0 0h256.5v184.1H0z"></path>
                            <path
                              d="m47.8 138.9-4-12.8-4.4 12.8H26.2l10.7 7.7-4 12.8 10.9-7.9 10.6 7.9-4.1-12.8 10.9-7.7zm56.3 0-4.1-12.8-4.2 12.8H82.6l10.7 7.7-4 12.8 10.7-7.9 10.8 7.9-4-12.8 10.7-7.7zm56.5 0-4.3-12.8-4 12.8h-13.5l11 7.7-4.2 12.8 10.7-7.9 11 7.9-4.2-12.8 10.7-7.7zm56.2 0-4-12.8-4.2 12.8h-13.3l10.8 7.7-4 12.8 10.7-7.9 10.8 7.9-4.3-12.8 11-7.7zM100 75.3l-4.2 12.8H82.6L93.3 96l-4 12.6 10.7-7.8 10.8 7.8-4-12.6 10.7-7.9h-13.4zm-56.2 0-4.4 12.8H26.2L36.9 96l-4 12.6 10.9-7.8 10.6 7.8L50.3 96l10.9-7.9H47.8zm112.5 0-4 12.8h-13.5l11 7.9-4.2 12.6 10.7-7.8 11 7.8-4.2-12.6 10.7-7.9h-13.2zm56.5 0-4.2 12.8h-13.3l10.8 7.9-4 12.6 10.7-7.8 10.8 7.8-4.3-12.6 11-7.9h-13.5zm-169-50.6-4.4 12.6H26.2l10.7 7.9-4 12.7L43.8 50l10.6 7.9-4.1-12.7 10.9-7.9H47.8zm56.2 0-4.2 12.6H82.6l10.7 7.9-4 12.7L100 50l10.8 7.9-4-12.7 10.7-7.9h-13.4zm56.3 0-4 12.6h-13.5l11 7.9-4.2 12.7 10.7-7.9 11 7.9-4.2-12.7 10.7-7.9h-13.2zm56.5 0-4.2 12.6h-13.3l10.8 7.9-4 12.7 10.7-7.9 10.8 7.9-4.3-12.7 11-7.9h-13.5z"
                              fill="#FFF"></path>
                          </svg><svg width="1em" height="1em" viewBox="0 0 21 32" fill="currentColor" aria-hidden="true"
                            focusable="false" class="rs-dropdown-toggle-caret rs-icon" aria-label="angle down"
                            data-category="legacy">
                            <path
                              d="M19.196 13.143a.612.612 0 01-.179.411l-8.321 8.321c-.107.107-.268.179-.411.179s-.304-.071-.411-.179l-8.321-8.321c-.107-.107-.179-.268-.179-.411s.071-.304.179-.411l.893-.893a.582.582 0 01.411-.179c.143 0 .304.071.411.179l7.018 7.018 7.018-7.018c.107-.107.268-.179.411-.179s.304.071.411.179l.893.893a.617.617 0 01.179.411z">
                            </path>
                          </svg><span class="rs-ripple-pond"><span class="rs-ripple"
                              style="width: 1002.5px; height: 1002.5px; left: -444.251px; top: -3.25143px;"></span></span></button>
                        <ul
                          class="Dropdown_dropdown__SYcr4 Dropdown_showTitle__EAgj9 WorldwidePhoneInput_areaCode__YdXPx rs-dropdown-menu"
                          id="menu-2" role="menu" aria-labelledby="menubutton-1" tabindex="0" hidden="">
                          <div class="Dropdown_dropdownSearch__SHJG0"><input placeholder="Search..." name="filter"
                              value=""></div>
                          <li class="rs-dropdown-item" id="menuitem-4" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="AF">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="AF">
                                <path fill="#DB3E00" d="M0 0h513v342H0z"></path>
                                <path fill="#479900" d="M331 0h182v342H331z"></path>
                                <path d="M0 0h181.8v342H0z"></path>
                                <path fill="#FFF"
                                  d="M256 126.7c-19.4 0-35.2 15.8-35.2 35.2v52.8h70.4v-52.8c0-19.5-15.8-35.2-35.2-35.2z">
                                </path>
                                <path fill="#FFF"
                                  d="M256 84.3c-47.7 0-86.4 38.7-86.4 86.4S208.3 257 256 257s86.4-38.7 86.4-86.4-38.7-86.3-86.4-86.3zm0 157.7c-39.4 0-71.4-32-71.4-71.4 0-39.4 32-71.4 71.4-71.4 39.4 0 71.4 32 71.4 71.4 0 39.5-32 71.4-71.4 71.4z">
                                </path>
                              </svg>
                              <p>Afghanistan<br>+(93)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-6" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="AL">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 90 60" class="flag" code="AL">
                                <path fill="#ED2024" d="M0 0h90v60H0z"></path>
                                <path fill="#212121"
                                  d="M32.5 12.2v16l7.1 2.5-5 4.9 2.4 3 5.3-5.5 1.2 2.3-3 4.9 3.6 5.6-1.8 2.6 2.8 3.6 2.7-3.7-1.5-2.6 3-5.8-2.7-4.6 1.2-2.3 5.2 5.5 2.5-2.9-5.2-5.1 7.2-2.6V12.2l-5.2 1.9-.1 3.8-3.3.3v-2.6l1.7-2.3 5.6-2.2-2.3-.4 1.4-1.2.9.4-.8-1.4L54 9l-1-1.1L47.5 9l1.4 1.1-3.8 4.9-3.8-4.8 1.3-1.1-5-1.2L36.2 9l-1.5-.4-.8 1.4.9-.6 1.6 1.1-2.3.5 5.5 2 1.6 2.3v2.9l-3.3-.3v-3.6z">
                                </path>
                                <path
                                  d="M26.2 25h6.4v2.5h-6.4zm0-4.1h6.4v2.7h-6.4zm0-4.2h6.4v2.6h-6.4zm0-4h6.4v2.5h-6.4zM57.4 25h6.4v2.5h-6.4zm0-4.1h6.4v2.7h-6.4zm0-4.2h6.4v2.6h-6.4zm0-4h6.4v2.5h-6.4zM53.4 36.1h6.4V38h-6.4zm-23.2 0h6.4V38h-6.4z"
                                  fill="#212121"></path>
                              </svg>
                              <p>Albania<br>+(355)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-8" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="DZ">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="DZ">
                                <path fill="#41662E" d="M0 0h513v342H0z"></path>
                                <path fill="#FFF" d="M256.5 0H513v342H256.5z"></path>
                                <g fill="#D80027">
                                  <path
                                    d="m341.5 105.3-29.4 40.4-47.5-15.4 29.4 40.4-29.4 40.4 47.5-15.4 29.4 40.4v-50l47.5-15.5-47.5-15.4z">
                                  </path>
                                  <path
                                    d="M309.9 276.7c-58.5 0-106-47.5-106-106s47.5-106 106-106c18.3 0 35.4 4.6 50.4 12.7-23.5-23-55.7-37.2-91.2-37.2-72 0-130.4 58.4-130.4 130.4S197.1 301 269.1 301c35.5 0 67.7-14.2 91.2-37.2-14.9 8.2-32.1 12.9-50.4 12.9z">
                                  </path>
                                </g>
                              </svg>
                              <p>Algeria<br>+(213)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-10" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="AS">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="AS">
                                <path fill="#10338c" d="M0 0h513v342H0z"></path>
                                <path fill="#D80027" d="M513 33 95.3 171 513 310.76V342L0 171 513 0z"></path>
                                <path fill="#FFF" d="M513 287.18v24.58L81.72 171 513 30v24.16"></path>
                                <path fill="#A2001D"
                                  d="m476.98 140.21-21.89 10.68-3.18-15.32 31.19-29.77s-9.42-40.65-13.75-44.98l-112.32 55.82-6.84 36.76-31.9 28.59-.4 34.2 34.29-22.76 67.23-2.66-1.51 38.11h22.23l11.9-44.64 31.55-24.61-6.6-19.42z">
                                </path>
                                <path fill="#EFC100" stroke="#231F20" stroke-miterlimit="10"
                                  d="m317.89 238.41-22.24-11.11 22.24-11.11h144.46v22.22z"></path>
                              </svg>
                              <p>American Samoa<br>+(1-684)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-12" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="AD">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="AD">
                                <path fill="#FFDA44" d="M0 0h513v342H0z"></path>
                                <path fill="#0052B4" d="M0 0h171v342H0z"></path>
                                <path fill="#D80027" d="M342 0h171v342H342zM198.9 113.6H256v64.8h-57.1z"></path>
                                <path d="M267.6 113.6v64.7m16.6-64.7v64.7m16.6-64.7v64.7" stroke="#D80027"
                                  stroke-width="7"></path>
                                <path d="M247.4 178.4v64.7m-13.3-64.7v64.7m-13.3-64.6v53.9m-13.7-53.9v47.1"
                                  stroke="#D80027" stroke-width="5"></path>
                                <path fill="#FFDA44" d="m199.9 146 27.6-32.4 28.5 32.3-28.1 32.4z"></path>
                                <path fill="#BC8B00"
                                  d="M182.2 95.9v92.2c0 34.3 27.3 54.2 48.6 64.5-.8 1.4 25.1 8.3 25.1 8.3s25.9-6.9 25.1-8.3c21.4-10.3 48.6-30.1 48.6-64.5V95.9H182.2zm129.9 92.2c0 16.9-10 29.4-32.8 43.9-8.6 5.5-17.5 9-23.3 11-5.8-2-14.7-5.5-23.3-11-22.8-14.5-32.8-28-32.8-43.9v-74.5h112.2v74.5z">
                                </path>
                                <path fill="#D80027" d="M264.4 188.9h29.5v8.6h-29.5zm0 17.6h29.5v8.6h-29.5z"></path>
                              </svg>
                              <p>Andorra<br>+(376)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-14" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="AO">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="AO">
                                <path d="M0 171h513v171H0z"></path>
                                <path fill="#D80027" d="M0 0h513v171H0z"></path>
                                <g fill="#FFDA44">
                                  <path
                                    d="m332.7 135.6 17.5-8.6-7.4-19-18.7 6.2zm-45.6-56 5.5-18.8-19.1-7.2-8 18zm29.4 23.2 12.2-15.3-14.9-13.9-14.2 13.6zm19.4 68.9 19.5-.8v-21.3l-22.9.2zm-12.6 38.1 18.8 5.5 7.3-19-18-8zm-29 32.4 14.9 12.7 14.4-14.4-13.1-14.7zm-47-147.7 9.8 19.9 21.9 3.3-15.9 15.5 3.6 21.9-19.6-10.4-19.7 10.2 3.8-21.9-15.8-15.5 22-3.1z">
                                  </path>
                                  <path
                                    d="m250.8 61.3-2.7 18.3c43.1 3.2 77 39.2 77 83.1 0 46-37.3 82.9-83.4 83.4-29.2.3-51.3-14.8-67-33.7l-13.9 12.3c15 19 40.8 39.9 80.9 39.9 56.3 0 101.9-45.6 101.9-101.9.1-53.2-40.7-96.9-92.8-101.4z">
                                  </path>
                                  <path fill="#000"
                                    d="m291.9 223.4-11.8 14s51.9 38.9 53.6 40.4c1.7 1.5 5.2 2 9.1-2.7 3.7-4.5 2.8-8.1.9-9.7-2-1.5-51.8-42-51.8-42z">
                                  </path>
                                  <path
                                    d="M206.1 157.2c-7.7 10.3-7.5 23.1 2.8 30.9 0 0 135.2 101.5 136.9 103 1.7 1.5 5.2 2 9.1-2.7 3.7-4.5 2.8-8.1.9-9.7-1.9-1.5-149.7-121.5-149.7-121.5zm47.7 99.1 7.3 18.2 19.5-6-4.8-19.1zm-40.4-3.7-2 19.5 20.1 3.6 4.5-19.1zm-35.7-21.2L167.4 248l16.4 12.1 12.5-15.2z">
                                  </path>
                                </g>
                              </svg>
                              <p>Angola<br>+(244)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-16" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="AI">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="AI">
                                <path fill="#00318b" d="M0 0h513v342H0z"></path>
                                <path fill="#FFF"
                                  d="M454.8 265.38c7.94-10.93 13.24-24.27 13.24-40.42V104.89a59.754 59.754 0 0 1-36.02 12.01c-19.64 0-37.07-9.43-48.03-24.01-10.95 14.58-28.39 24.01-48.03 24.01-13.52 0-25.99-4.47-36.02-12v120.06c0 16.16 5.3 29.5 13.24 40.42H454.8z">
                                </path>
                                <path fill="#8DCCFF"
                                  d="M310.23 260.98C332.65 296.96 384 309 384 309s51.35-12.04 73.77-48.02H310.23z">
                                </path>
                                <path fill="#D87B00"
                                  d="M396.66 172.21c.32 1.42 8.72 10.17 17.56 20.15 1.39 1.57-8.74 12.63-6.91 12.59 4.75-.12 19.27-17.26 19.34 6.65.05 15.94-30 27.51-30 27.51h17.47l.65 14.96s4.97-13.34 7.59-16.57c8.1-9.97 20.18-30.07 34.59-27.1 14.41 2.97-13.66-13.92-13.66-13.92s-5.2-15.19-16.63-16.97c-10.06-1.57-14.29-2.51-26.64-7.3-1.68-.65-3.88-2.32-3.36 0z">
                                </path>
                                <path fill="#D87B00"
                                  d="M359.69 198.69c1.07-.99 4.46-12.63 8.69-25.28.67-1.99 15.31 1.27 14.35-.3-2.47-4.06-24.58-8.08-3.9-20.08 13.79-8 38.82 12.27 38.82 12.27l-8.72-15.14 12.64-8.03s-14.05 2.35-18.14 1.69c-12.68-2.04-36.13-2.48-40.75-16.45-4.62-13.97-5.25 18.79-5.25 18.79s-10.56 12.08-6.4 22.88c3.66 9.5 4.96 13.64 6.97 26.73.29 1.79-.06 4.53 1.69 2.92z">
                                </path>
                                <path fill="#D87B00"
                                  d="M395.67 219.87c-1.39-.43-13.16 2.49-26.22 5.18-2.06.42-6.59-13.88-7.47-12.26-2.27 4.17 5.36 25.31-15.41 13.45-13.84-7.91-8.89-39.73-8.89-39.73l-8.71 15.14-13.29-6.9s9.09 10.96 10.57 14.84c4.6 11.99 16 32.49 6.24 43.49-9.76 11.01 18.88-4.9 18.88-4.9s15.76 3.07 23-5.96c6.38-7.94 9.3-11.14 19.61-19.45 1.43-1.12 3.97-2.19 1.69-2.9z">
                                </path>
                                <path fill="#FFF"
                                  d="M256.5 0h-23.1L160 48.9V0H96v48.9L22.6 0H0v22.7l46.1 30.7H0v64h46.1L0 148.1V171h22.6L96 121.8V171h64v-49.2l73.4 49.2h23.1v-22.9l-46.6-30.7h46.6v-64h-46.6l46.6-30.7z">
                                </path>
                                <path fill="#D80027" d="M144 0h-32v69.4H0v32h112V171h32v-69.6h112.5v-32H144z"></path>
                                <path fill="#D80027"
                                  d="M0 171v-11.3l62.5-42.3h22.6L7.3 171zM7.3.1l77.8 53.2H62.5L0 11.1V.1zm249.2 0v11l-63 42.3h-22.6L248.7.1zM248.7 171l-77.8-53.6h22.6l63 42.3V171z">
                                </path>
                              </svg>
                              <p>Anguilla<br>+(1-264)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-18" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="AQ">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 744 496" class="flag" code="AQ">
                                <path fill="#3A7DCE" d="M0 0h744v496H0V0z"></path>
                                <path fill="#fff"
                                  d="m120 125 90 63 54-14 23-81 61-36 92 14 105 55 6 90 34 12v92l-65 115-78 24-72-17 18-30-8-32-10 9-162-25-49-85 20-46-49-62z">
                                </path>
                              </svg>
                              <p>Antarctica<br>+(672)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-20" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="AG">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="AG">
                                <path d="M0 0h513v342H0z"></path>
                                <path fill="#0072c6"
                                  d="M88.8 136.5c-2.2 12.9-3.4 26.2-3.4 39.8 0 13.6 1.2 27 3.4 39.8L256 228.3l167.2-12.1c2.2-12.9 3.4-26.2 3.4-39.8s-1.2-27-3.4-39.8">
                                </path>
                                <path fill="#FFF"
                                  d="M423.2 219H88.8c15.8 69.8 84.7 122.3 167.2 122.3S407.4 288.8 423.2 219z"></path>
                                <path fill="#FFDA44"
                                  d="M365.9 136.5H146.1l44.9-21.1-23.9-43.5 48.8 9.4L222 32l34 36.2L290 32l6.1 49.3 48.8-9.4-23.9 43.5z">
                                </path>
                                <g fill="#ce1126">
                                  <path d="M256.5 342 0 0v342z"></path>
                                  <path d="M513 342V0L256 342z"></path>
                                </g>
                              </svg>
                              <p>Antigua and Barbuda<br>+(1-268)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-22" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="AR">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="AR">
                                <path fill="#FFF" d="M0 0h512v342H0z"></path>
                                <path fill="#338AF3" d="M0 0h512v114H0zm0 228h512v114H0z"></path>
                                <circle fill="#FFDA44" stroke="#d6ab00" stroke-width="5" cx="256.5" cy="171" r="40">
                                </circle>
                              </svg>
                              <p>Argentina<br>+(54)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-24" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="AM">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="AM">
                                <path fill="#0052B4" d="M0 0h513v342H0z"></path>
                                <path fill="#D80027" d="M0 0h513v114H0z"></path>
                                <path fill="#FF9811" d="M0 228h513v114H0z"></path>
                              </svg>
                              <p>Armenia<br>+(374)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-26" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="AW">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 363 242" class="flag" code="AW">
                                <path fill="#338AF3" d="M0 0h363v242H0z"></path>
                                <path fill="#FFF"
                                  d="M57 96.9 14.7 78.2 57 59.6l18.6-42.2 18.6 42.2 42.3 18.6-42.3 18.7-18.6 42.2z">
                                </path>
                                <path fill="#f30028"
                                  d="m75.6 40.6 11.5 26.1 26.1 11.5-26.1 11.5-11.5 26.1-11.5-26.1L38 78.2l26.1-11.5z">
                                </path>
                                <path d="M0 152.2h363v15.7H0zm0 31.4h363v15.7H0z" fill="#FFDA44"></path>
                              </svg>
                              <p>Aruba<br>+(297)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-28" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="AU">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="AU">
                                <path fill="#10338c" d="M0 0h513v342H0z"></path>
                                <g fill="#FFF">
                                  <path
                                    d="M222.2 170.7c.3-.3.5-.6.8-.9-.2.3-.5.6-.8.9zM188 212.6l11 22.9 24.7-5.7-11 22.8 19.9 15.8-24.8 5.6.1 25.4-19.9-15.9-19.8 15.9.1-25.4-24.8-5.6 19.9-15.8-11.1-22.8 24.8 5.7zm197.9 28.5 5.2 10.9 11.8-2.7-5.3 10.9 9.5 7.5-11.8 2.6v12.2l-9.4-7.6-9.5 7.6.1-12.2-11.8-2.6 9.5-7.5-5.3-10.9 11.8 2.7zm-48.6-116 5.2 10.9 11.8-2.7-5.3 10.9 9.5 7.5-11.8 2.7v12.1l-9.4-7.6-9.5 7.6.1-12.1-11.9-2.7 9.5-7.5-5.3-10.9L332 136zm48.6-66.2 5.2 10.9 11.8-2.7-5.3 10.9 9.5 7.5-11.8 2.7v12.1l-9.4-7.6-9.5 7.6.1-12.1-11.8-2.7 9.5-7.5-5.3-10.9 11.8 2.7zm42.5 49.7 5.2 10.9 11.8-2.7-5.3 10.9 9.5 7.5-11.8 2.6V150l-9.4-7.6-9.5 7.6v-12.2l-11.8-2.6 9.5-7.5-5.3-10.9 11.8 2.7zM398 166.5l4.1 12.7h13.3l-10.8 7.8 4.2 12.7-10.8-7.9-10.8 7.9 4.1-12.7-10.7-7.8h13.3z">
                                  </path>
                                  <path
                                    d="M254.8 0v30.6l-45.1 25.1h45.1V115h-59.1l59.1 32.8v22.9h-26.7l-73.5-40.9v40.9H99v-48.6l-87.4 48.6H-1.2v-30.6L44 115H-1.2V55.7h59.1L-1.2 22.8V0h26.7L99 40.8V0h55.6v48.6L242.1 0z">
                                  </path>
                                </g>
                                <path fill="#D80027" d="M142.8 0h-32v69.3h-112v32h112v69.4h32v-69.4h112v-32h-112z">
                                </path>
                                <path fill="#0052B4" d="m154.6 115 100.2 55.7v-15.8L183 115z"></path>
                                <path fill="#FFF" d="m154.6 115 100.2 55.7v-15.8L183 115z"></path>
                                <path d="m154.6 115 100.2 55.7v-15.8L183 115zm-83.9 0-71.9 39.9v15.8L99 115z"
                                  fill="#D80027"></path>
                                <path fill="#0052B4" d="M99 55.7-1.2 0v15.7l71.9 40z"></path>
                                <path fill="#FFF" d="M99 55.7-1.2 0v15.7l71.9 40z"></path>
                                <path d="M99 55.7-1.2 0v15.7l71.9 40zm84 0 71.8-40V0L154.6 55.7z" fill="#D80027"></path>
                              </svg>
                              <p>Australia<br>+(61)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-30" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="AT">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="AT">
                                <path fill="#FFF" d="M0 114h513v114H0z"></path>
                                <path fill="#D80027" d="M0 0h513v114H0zm0 228h513v114H0z"></path>
                              </svg>
                              <p>Austria<br>+(43)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-32" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="AZ">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="AZ">
                                <path fill="#ef3340" d="M0 0h513v342H0z"></path>
                                <path fill="#00b5e2" d="M0 0h513v114H0z"></path>
                                <path fill="#509e2f" d="M0 228h513v114H0z"></path>
                                <g fill="#FFF">
                                  <path
                                    d="M265.6 212.6c-23 0-41.6-18.6-41.6-41.6s18.6-41.6 41.6-41.6c7.2 0 13.9 1.8 19.8 5-9.2-9-21.9-14.6-35.8-14.6-28.3 0-51.2 22.9-51.2 51.2s22.9 51.2 51.2 51.2c13.9 0 26.6-5.6 35.8-14.6-5.9 3.2-12.6 5-19.8 5z">
                                  </path>
                                  <path
                                    d="m297.6 142.2 5.5 15.5 14.9-7.1-7.1 14.9 15.5 5.5-15.5 5.5 7.1 14.9-14.9-7.1-5.5 15.5-5.5-15.5-14.9 7.1 7.1-14.9-15.5-5.5 15.5-5.5-7.1-14.9 14.9 7.1z">
                                  </path>
                                </g>
                              </svg>
                              <p>Azerbaijan<br>+(994)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-34" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="BS">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="BS">
                                <path fill="#ffc72c" d="M0 0h513v342H0z"></path>
                                <path d="M0 0h513v114H0zm0 228h513v114H0z" fill="#00778b"></path>
                                <path d="M256 171 0 342V0z"></path>
                              </svg>
                              <p>Bahamas<br>+(1-242)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-36" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="BH">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="BH">
                                <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                <path fill="#FFF"
                                  d="m222.8 34.3-85.2 34.2 85.2 34.1-85.2 34.1 85.2 34.1-85.2 34.1 85.2 34.1-85.2 34.1 85.2 34.1-85.2 34.8H0V0h137.6z">
                                </path>
                              </svg>
                              <p>Bahrain<br>+(973)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-38" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="BD">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 513 342" class="flag" code="BD">
                                <path fill="#2d6e41" d="M0 85.331h513v342H0z"></path>
                                <circle fill="#F40B32" cx="218.902" cy="256.5" r="115"></circle>
                              </svg>
                              <p>Bangladesh<br>+(880)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-40" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="BB">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="BB">
                                <path fill="#ffc726" d="M0 0h513v342H0z"></path>
                                <path d="M0 0h171v342H0zm342 0h171v342H342z" fill="#00267f"></path>
                                <path
                                  d="m325.74 101.02-31.97 12.4c-.68 1.35-5.79 7.54-8.18 53.06h-17.05v-60.42L256 78.68l-12.54 27v60.8H226.4c-2.39-45.53-7.8-52.48-8.47-53.84l-31.68-11.63c.15.31 15.4 31.34 15.4 78.01v12.54h41.81v71.07h25.08v-71.07h41.81v-12.54c0-24.13 4.17-44.02 7.68-56.46 3.82-13.57 7.7-21.49 7.74-21.57l-.03.03z">
                                </path>
                              </svg>
                              <p>Barbados<br>+(1-246)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-42" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="BY">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="BY">
                                <path fill="#007C30" d="M0 0h513v342H0z"></path>
                                <path fill="#CE1720" d="M0 230h513V0H0"></path>
                                <path fill="#FFF" d="M100 230V0H0v342h513-413z"></path>
                                <path
                                  d="M28 159.6 8.6 128.2 28 97.4l19.3 30.8zm44.6 0-19.3-31.4 19.3-30.8L92 128.2zM28 241.2 8.6 209.8 28 179l19.3 30.8zm44.6 0-19.3-31.4L72.6 179 92 209.8z"
                                  fill="#CE1720"></path>
                                <path
                                  d="m28 73.8-16.1-26L28 22.2l16 25.6zm44.6 0-16-26 16-25.6 16.1 25.6zM28 318l-16.1-26.1L28 266.3l16 25.6zm44.6 0-16-26.1 16-25.6 16.1 25.6z"
                                  fill="none" stroke="#CE1720" stroke-width="7"></path>
                              </svg>
                              <p>Belarus<br>+(375)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-44" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="BE">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="BE">
                                <path fill="#fdda25" d="M0 0h513v342H0z"></path>
                                <path d="M0 0h171v342H0z"></path>
                                <path fill="#ef3340" d="M342 0h171v342H342z"></path>
                              </svg>
                              <p>Belgium<br>+(32)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-46" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="BZ">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="BZ">
                                <path fill="#003e87" d="M0 0h513v342H0z"></path>
                                <circle fill="#FFF" cx="260.9" cy="170.9" r="118.9"></circle>
                                <circle fill="none" stroke="#6DA544" stroke-width="18" stroke-miterlimit="10" cx="261.9"
                                  cy="173.1" r="94.5"></circle>
                                <g stroke="#000">
                                  <path fill="#003e87"
                                    d="m261.9 151.5-50.6 23.4v20c0 11.8 6.1 22.8 16.2 28.9L262 239l34.5-15.2c10-6.2 16.2-17.1 16.2-28.9v-20l-50.8-23.4z">
                                  </path>
                                  <path fill="#FFDA44" d="M211.3 128.1h101.3v46.7H211.3z"></path>
                                </g>
                                <path d="M0 0h513v35H0zm0 306h513v35H0z" fill="#ce1127"></path>
                              </svg>
                              <p>Belize<br>+(501)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-48" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="BJ">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 513 342" class="flag" code="BJ">
                                <path fill="#008751" d="M0 85.333h513v342H0z"></path>
                                <path fill="#fcd116" d="M196.666 85.333H513v171H196.666z"></path>
                                <path fill="#e8112d" d="M196.666 256H513v171H196.666z"></path>
                              </svg>
                              <p>Benin<br>+(229)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-50" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="BM">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="BM">
                                <path fill="#c8102e" d="M0 0h513v342H0z"></path>
                                <path fill="#012169" d="M0 .1h256.5v171H0z"></path>
                                <path fill="#FFF"
                                  d="M256 0h-22.6L160 48.9V0H96v48.9L22.6 0H0v22.7l46.1 30.7H0v64h46.1L0 148.1v22.6h22.6L96 121.8v48.9h64v-48.9l73.4 48.9H256v-22.6l-46.1-30.7H256v-64h-46.1L256 22.7z">
                                </path>
                                <path fill="#c8102e" d="M144 0h-32v69.4H0v32h112v69.3h32v-69.3h112v-32H144z"></path>
                                <path fill="#c8102e"
                                  d="M0 170.7v-11l62.5-42.3h22.6L7.3 170.7zM7.3.1l77.8 53.2H62.5L0 11.1V.1zM256 .1v11l-62.5 42.3h-22.6L248.7.1zm-7.3 170.6-77.8-53.3h22.6l62.5 42.3v11z">
                                </path>
                                <g transform="translate(13 5)">
                                  <path fill="#fff"
                                    d="M303.9 94.94v99.69c0 59.81 79.75 99.69 79.75 99.69s79.75-39.88 79.75-99.69V94.94H303.9z">
                                  </path>
                                  <path fill="#2F8F22"
                                    d="M436.37 254.44H330.93c23.13 25.08 52.72 39.88 52.72 39.88s29.59-14.8 52.72-39.88z">
                                  </path>
                                  <circle fill="#65B5D2" cx="383.65" cy="214.56" r="39.88"></circle>
                                  <circle fill="#c8102e" cx="343.77" cy="194.63" r="19.94"></circle>
                                  <circle fill="#c8102e" cx="423.52" cy="194.63" r="19.94"></circle>
                                  <circle fill="#c8102e" cx="383.65" cy="154.75" r="19.94"></circle>
                                </g>
                              </svg>
                              <p>Bermuda<br>+(1-441)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-52" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="BT">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="BT">
                                <path fill="#FF7415" d="M0 0h513v342H0z"></path>
                                <path fill="#FFDA44" d="M513 0H0v342"></path>
                                <path fill="none" stroke="#FFF" stroke-width="42" stroke-miterlimit="10"
                                  d="M128.7 255.5s35 54 67.3 32.4c56.9-37.9-68.9-108.6-2.9-152.6 58.3-38.8 76.6 103.5 137.6 62.8 59-39.3-64.7-111.4-9.2-148.4 33.4-22.2 67.1 32.6 67.1 32.6">
                                </path>
                              </svg>
                              <p>Bhutan<br>+(975)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-54" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="BO">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="BO">
                                <path fill="#d52b1e" d="M0 0h513v114H0z"></path>
                                <path fill="#f9e300" d="M0 114h513v114H0z"></path>
                                <path fill="#007934" d="M0 228h513v114H0z"></path>
                              </svg>
                              <p>Bolivia<br>+(591)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-56" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="BA">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="BA">
                                <path fill="#10338C" d="M0 0h513.1v342H0z"></path>
                                <path fill="#F6C500" d="M99.9 0h342v342"></path>
                                <g fill="#FFF">
                                  <path d="M19.9 21.1 40.3 6.2 60.9 21 54 0H26.7z"></path>
                                  <path
                                    d="M92.3 25.5 84.4 1.3l-7.8 24.2H51.3l20.5 14.8-7.8 24 20.4-14.8L105 64.3l-7.9-24 20.5-14.9z">
                                  </path>
                                  <path
                                    d="m136.3 69.2-7.8-24-7.8 24H95.5l20.4 14.9-7.8 24 20.4-14.8 20.6 14.8-7.8-24 20.4-14.9z">
                                  </path>
                                  <path
                                    d="m179.4 112.3-7.8-24.1-7.8 24.1h-25.3l20.5 14.9-7.8 24 20.4-14.8 20.6 14.8-7.9-24 20.5-15z">
                                  </path>
                                  <path
                                    d="m222.5 155.3-7.8-24-7.8 24h-25.4l20.6 15-7.8 24 20.4-14.9 20.4 14.9-7.8-24 20.6-15z">
                                  </path>
                                  <path
                                    d="m265.6 198.4-7.8-24-7.8 24h-25.4l20.6 14.9-7.8 24.1 20.4-14.9 20.4 14.9-7.8-24.2 20.5-14.8z">
                                  </path>
                                  <path
                                    d="m308.7 241.5-7.9-24-7.8 24h-25.3l20.5 14.8-7.9 24.2 20.6-14.9 20.4 14.8-7.8-24.1 20.5-14.8z">
                                  </path>
                                  <path
                                    d="m351.7 284.6-7.8-24.2-7.8 24.2h-25.3l20.4 14.8-7.8 24.1 20.5-14.9 20.5 14.9-7.8-24.1 20.4-14.8z">
                                  </path>
                                  <path d="m387 303.5-7.9 24.1-25.3.1 19.8 14.3h26.6l19.9-14.4h-25.3z"></path>
                                </g>
                              </svg>
                              <p>Bosnia and Herzegovina<br>+(387)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-58" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="BW">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="BW">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path d="M0 238h513v104H0zM0 0h513v104H0z" fill="#6da9d2"></path>
                                <path d="M0 125.5h513v89.656H0z"></path>
                              </svg>
                              <p>Botswana<br>+(267)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-60" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="BR">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="BR">
                                <path fill="#009b3a" d="M0 0h513v342H0z"></path>
                                <path fill="#fedf00" d="m256.5 19.3 204.9 151.4L256.5 322 50.6 170.7z"></path>
                                <circle fill="#FFF" cx="256.5" cy="171" r="80.4"></circle>
                                <path fill="#002776"
                                  d="M215.9 165.7c-13.9 0-27.4 2.1-40.1 6 .6 43.9 36.3 79.3 80.3 79.3 27.2 0 51.3-13.6 65.8-34.3-24.9-31-63.2-51-106-51zm119 20.3c.9-5 1.5-10.1 1.5-15.4 0-44.4-36-80.4-80.4-80.4-33.1 0-61.5 20.1-73.9 48.6 10.9-2.2 22.1-3.4 33.6-3.4 46.8.1 89 19.5 119.2 50.6z">
                                </path>
                              </svg>
                              <p>Brazil<br>+(55)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-62" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="IO">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="IO">
                                <path fill="#FFF" d="M0-.3h513V342H0V-.3z"></path>
                                <path fill="#0052B4"
                                  d="M462.9 198.1c-4 0-14-5-21-9-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-16 9-20 9s-14-5-20-9c-11-6-22-12-32.1-12-9 0-20 6-31.1 12-7 4-16 9-20 9s-13-5-20-9c-11-6-22-12-31.1-12-10 0-21 6-32.1 12-6 4-16 9-20 9s-13-5-20-9c-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-17 9-21 9s-13-5-20-9c-10-6-20-12-30.1-12v22l19 10c11 6 21 12 31.1 12s21-6 32.1-12c6-4 16-10 20-10s13 6 20 10c11 6 21 12 31.1 12s20-6 31.1-12c7-4 17-10 21-10s13 6 20 10c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-10 20-10s14 6 21 10c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-10 20-10s14 6 20 10c11 6 22 12 32.1 12s20-6 31.1-12l19-10v-22c-10 0-20 6-30.1 12-7 4-16 9-20 9zM0 31.7l19 10c11 6 21 12 31.1 12s21-6 32.1-12c6-4 16-10 20-10s13 6 20 10c11 6 21 12 31.1 12s20-6 31.1-12c7-4 17-10 21-10s13 6 20 10c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-10 20-10s14 6 21 10c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-10 20-10s14 6 20 10c11 6 22 12 32.1 12s20-6 31.1-12l19-10v-22c-10 1-20 6-30.1 12-7 4-16 9-20 9s-14-5-21-9c-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-16 9-20 9s-14-5-20-9c-11-6-22-12-32.1-12s-20 6-31.1 12c-7 4-16 9-20 9s-13-5-20-9c-11-6-22-12-31.1-12s-21 6-32.1 12c-6 4-16 9-20 9s-13-5-20-9c-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-17 9-21 9s-13-5-20-9c-10-6-20-11-30.1-12v22zm462.9 55.2c-4 0-14-5-21-9-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-16 9-20 9s-14-5-20-9c-11-6-22-12-32.1-12-9 0-20 6-31.1 12-7 4-16 9-20 9s-13-5-20-9c-11-6-22-12-31.1-12-10 0-21 6-32.1 12-6 4-16 9-20 9s-13-5-20-9c-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-17 9-21 9s-13-5-20-9c-10-6-20-12-30.1-12v22l19 9c11 6 21 12 31.1 12s21-6 32.1-12c6-4 16-9 20-9s13 5 20 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 17-9 21-9s13 5 20 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-9 20-9s14 5 21 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-9 20-9s14 5 20 9c11 6 22 12 32.1 12s20-6 31.1-12l19-9v-22c-10 0-20 6-30.1 12-7 3.9-16 9-20 9zm50.1 34c-10 1-20 6-30.1 12-7 4-16 10-20 10s-14-6-21-10c-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-16 10-20 10s-14-6-20-10c-11-6-22-12-32.1-12s-20 6-31.1 12c-7 4-16 10-20 10s-13-6-20-10c-11-6-22-12-31.1-12s-21 6-32.1 12c-6 4-16 10-20 10s-13-6-20-10c-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-17 10-21 10s-13-6-20-10c-10-6-20-11-30.1-12v23c4 1 13 5 19 9 11 6 21 12 31.1 12s21-6 32.1-12c6-4 16-9 20-9s13 5 20 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 17-9 21-9s13 5 20 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-9 20-9s14 5 21 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-9 20-9s14 5 20 9c11 6 22 12 32.1 12s20-6 31.1-12c6-4 15-8 19-9v-23zm-50.1 133.3c-4 0-14-5-21-9-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-16 9-20 9s-14-5-20-9c-11-6-22-12-32.1-12-9 0-20 6-31.1 12-7 4-16 9-20 9s-13-5-20-9c-11-6-22-12-31.1-12-10 0-21 6-32.1 12-6 4-16 9-20 9s-13-5-20-9c-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-17 9-21 9s-13-5-20-9c-10-6-20-12-30.1-12v22l19 9c11 6 21 12 31.1 12s21-6 32.1-12c6-4 16-9 20-9s13 5 20 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 17-9 21-9s13 5 20 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-9 20-9s14 5 21 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-9 20-9s14 5 20 9c11 6 22 12 32.1 12s20-6 31.1-12l19-9v-22c-10 0-20 6-30.1 12-7 4-16 9-20 9zm50.1 34c-10 1-20 6-30.1 12-7 4-16 10-20 10s-14-6-21-10c-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-16 10-20 10s-14-6-20-10c-11-6-22-12-32.1-12s-20 6-31.1 12c-7 4-16 10-20 10s-13-6-20-10c-11-6-22-12-31.1-12s-21 6-32.1 12c-6 4-16 10-20 10s-13-6-20-10c-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-17 10-21 10s-13-6-20-10c-10-6-20-11-30.1-12v23c4 0 13 5 19 9 11 6 21 12 31.1 12s21-6 32.1-12c6-4 16-9 20-9s13 5 20 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 17-9 21-9s13 5 20 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-9 20-9s14 5 21 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-9 20-9s14 5 20 9c11 6 22 12 32.1 12s20-6 31.1-12c6-4 15-9 19-9v-23z">
                                </path>
                                <path fill="#FFF" d="M0-.3h256v171H0V-.3z"></path>
                                <path d="M389.8 119.9H408v78.8h-18.3l.1-78.8zm0 117.8H408v75.1h-18.3l.1-75.1z"
                                  fill="#A2001D"></path>
                                <g fill="#D80027">
                                  <path d="M144-.3h-32v70H0v32h112v69h32v-69h112v-32H144v-70z"></path>
                                  <path d="M0-.3v15l57 39h23L0-.3zm256 0v15l-57 39h-23l80-54z"></path>
                                  <path
                                    d="M0-.3v15l57 39h23L0-.3zm256 0v15l-57 39h-23l80-54zM0 170.7v-15l57-38h23l-80 53zm256 0v-15l-57-38h-23l80 53z">
                                  </path>
                                </g>
                                <g fill="#2E52B2">
                                  <path
                                    d="M0 22.7v31h46l-46-31zm96-23v49L23-.3h73zm160 23v31h-46l46-31zm-96-23v49l73-49h-73z">
                                  </path>
                                  <path
                                    d="M0 22.7v31h46l-46-31zm96-23v49L23-.3h73zm160 23v31h-46l46-31zm-96-23v49l73-49h-73zM0 147.7v-30h46l-46 30zm96 23v-49l-73 49h73zm160-23v-30h-46l46 30zm-96 23v-49l73 49h-73z">
                                  </path>
                                </g>
                                <path fill="#5DA51E" stroke="#45602C" stroke-width="4" stroke-miterlimit="10"
                                  d="M462.8 91.5h-29.1l25.7-25.7c4.5-4.4 4.5-11.4 0-15.8l-3.4-3.4c-4.4-4.4-11.4-4.4-15.8 0l-25.9 25.9V37.4c0-6.2-5.1-11.3-11.3-11.3h-4.7c-6.2 0-11.3 5.1-11.3 11.3v31.7l-23.5-23.8c-4.7-4.7-12.2-4.7-16.9 0l-3.6 3.6c-4.7 4.7-4.7 12.4 0 17.2l25 25.4h-30.6c-6 0-10.9 4.9-10.9 10.9v4.6c0 6 4.9 10.9 10.9 10.9H369l-20.7 20.7c-4.4 4.4-4.4 11.4 0 15.8l3.4 3.4c4.4 4.4 11.4 4.4 15.8 0l19.6-19.6V167c0 6.1 5.1 11.1 11.3 11.3h4.7c6.2 0 11.3-5.1 11.3-11.3v-28.3l22.2 22.6c4.7 4.7 12.4 4.7 17.1 0l3.6-3.6c4.7-4.7 4.7-12.4 0-17.2L435.2 118h27.6c5.9 0 10.7-4.9 10.9-10.9v-4.6c0-6.1-4.9-11-10.9-11z">
                                </path>
                                <path fill="#E2DD24" stroke="#525625" stroke-width="4" stroke-miterlimit="10"
                                  d="M439.2 249.1h-79.8s-.9-13.4-6-21.8c-6.2-10.4-13.9-28.1-1.4-36.7 15.9-10.9 33.7.8 48.2.8 11.8.1 26.9-14 45-.8 12.2 8.9 3.9 28.2-1.3 36.7-7 11.5-4.7 21.8-4.7 21.8z">
                                </path>
                              </svg>
                              <p>British Indian Ocean Territory<br>+(246)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-64" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="VG">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="VG">
                                <path fill="#0052B4" d="M0 85.334h512v341.337H0z"></path>
                                <path fill="#FFF"
                                  d="M256 85.334V202.66h-46.069L256 233.38v22.617h-22.628L160 207.078v48.919H96v-48.919l-73.372 48.919H0V233.38l46.069-30.72H0v-64h46.069L0 107.951V85.334h22.628L96 134.241V85.334h64v48.907l73.372-48.907z">
                                </path>
                                <g fill="#D80027">
                                  <path d="M144 85.33h-32v69.333H0v32h112v69.334h32v-69.334h112v-32H144z"></path>
                                  <path d="M0 85.329v15.083l57.377 38.251H80zm256 0v15.083l-57.377 38.251H176z"></path>
                                </g>
                                <path fill="#2E52B2" d="M256 107.951v30.712h-46.069z"></path>
                                <path d="M0 85.329v15.083l57.377 38.251H80zm256 0v15.083l-57.377 38.251H176z"
                                  fill="#D80027"></path>
                                <path fill="#2E52B2" d="M256 107.951v30.712h-46.069z"></path>
                                <path d="M0 255.997v-15.082l57.377-38.252H80zm256 0v-15.082l-57.377-38.252H176z"
                                  fill="#D80027"></path>
                                <path fill="#FFDA44"
                                  d="m384 259.706-46.129 46.129c8.645 16.675 26.051 28.074 46.129 28.074s37.484-11.4 46.129-28.074L384 259.706z">
                                </path>
                                <path fill="#6DA544"
                                  d="M332.058 178.084v81.624c.001 39.759 51.942 51.941 51.942 51.941s51.941-12.182 51.942-51.942v-81.623H332.058z">
                                </path>
                                <path fill="#FFF" d="M372.87 215.181h22.261v59.359H372.87z"></path>
                                <circle fill="#A2001D" cx="384" cy="215.181" r="11.13"></circle>
                                <path
                                  d="M346.902 192.92h14.84v14.84h-14.84zm0 33.392h14.84v14.84h-14.84zm0 33.391h14.84v14.84h-14.84zm59.359-66.783h14.84v14.84h-14.84zm0 33.392h14.84v14.84h-14.84zm0 33.391h14.84v14.84h-14.84z"
                                  fill="#FFDA44"></path>
                              </svg>
                              <p>British Virgin Islands<br>+(1-284)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-66" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="BN">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="BN">
                                <path fill="#FFDA44" d="M0 0h513v342H0z"></path>
                                <path d="m0 193.74 513 127.19V214.26L0 97.08z"></path>
                                <path fill="#FFF" d="M513 234.26v-86.67L0 20.41v86.67"></path>
                                <g fill="#D80027" stroke="#231F20" stroke-width="3" stroke-miterlimit="10">
                                  <path
                                    d="M306.4 134.01a50.28 50.28 0 0 1 6.07 24.02c0 21.55-13.51 39.94-32.52 47.19v-59.51c5.7-1.19 10-6.37 10-12.59 6.9 0 12.5-5.75 12.5-12.85h-.42c6.9 0 12.91-5.75 12.91-12.85h-34.99V76.58l-14.99-27.71-15 27.71v30.84h-34.99c0 7.1 6.01 12.85 12.91 12.85h-.42c0 7.1 5.6 12.85 12.5 12.85 0 6.22 4.29 11.4 9.99 12.59v61.37c-22.09-5.39-38.48-25.3-38.48-49.05 0-8.7 2.2-16.88 6.07-24.02-10.96 11.21-17.72 26.53-17.72 43.44 0 34.32 27.82 62.15 62.15 62.15s62.15-27.83 62.15-62.15c0-16.91-6.77-32.24-17.72-43.44z">
                                  </path>
                                  <path
                                    d="M198.46 226.81s20.69 27.71 66.5 27.71 66.5-27.71 66.5-27.71l13.47 28.37s-21.03 27.71-79.97 27.71-79.97-27.71-79.97-27.71l13.47-28.37zm-69.22-93.63h20.88l24.93 27.26v73.45h-26.28v-68.37zm270.76 0h-20.88l-24.93 27.26v73.45h26.27v-68.37z">
                                  </path>
                                </g>
                              </svg>
                              <p>Brunei<br>+(673)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-68" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="BG">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="BG">
                                <path fill="#00966e" d="M0 0h513v342H0z"></path>
                                <path fill="#FFF" d="M0 0h513v114H0z"></path>
                                <path fill="#d62612" d="M0 228h513v114H0z"></path>
                              </svg>
                              <p>Bulgaria<br>+(359)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-70" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="BF">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="BF">
                                <path fill="#3d944f" d="M0 0h513v342H0z"></path>
                                <path fill="#ef2b2d" d="M0 0h513v171H0z"></path>
                                <path fill="#FFDA44"
                                  d="m256 102.6 16.9 52h54.7l-44.2 32.2 16.8 52-44.2-32.1-44.2 32.1 16.8-52-44.2-32.2h54.7z">
                                </path>
                              </svg>
                              <p>Burkina Faso<br>+(226)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-72" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="BI">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="BI">
                                <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                <path d="M215.9 170.7 0 314.6V26.8zM513 26.8v287.8L297.1 170.7z" fill="#47a644"></path>
                                <path fill="#0052B4"
                                  d="M513 26.8 296.1 170.7 513 314.6V342h-41.1L256 197.4 40.1 342H0v-27.4l215.9-143.9L0 26.8V0h40.1L256 143.9 471.9 0H513z">
                                </path>
                                <path fill="#FFF"
                                  d="M513 26.8 297.1 170.7 513 314.6V342h-40L256 197.4 39 342H0v-27.4l215.9-143.9L0 26.8V0h40.1L256 143.9 471.9 0H513z">
                                </path>
                                <circle fill="#FFF" cx="251.6" cy="170.7" r="100.2"></circle>
                                <path
                                  d="m251.4 103.6 7.4 12.9h14.8l-7.4 12.8 7.4 12.8h-14.8l-7.4 12.9-7.4-12.9h-14.8l7.4-12.8-7.4-12.8H244zm38.8 66.7 7.4 12.9h14.8L305 196l7.4 12.8h-14.8l-7.4 12.9-7.4-12.9h-14.9l7.4-12.8-7.4-12.8h14.9zm-77.2 0 7.4 12.9h14.9l-7.4 12.8 7.4 12.8h-14.9l-7.4 12.9-7.4-12.9h-14.8l7.4-12.8-7.4-12.8h14.8z"
                                  fill="#D80027" stroke="#47a644" stroke-width="3"></path>
                              </svg>
                              <p>Burundi<br>+(257)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-74" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="KH">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="KH">
                                <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                <path d="M0 0h513v114H0zm0 228h513v114H0z" fill="#0052B4"></path>
                                <path fill="#FFF"
                                  d="M303.5 196.6v-17.8h-11.9v-23.7l-11.9-11.9-11.8 11.9v-23.8L256 119.5l-11.9 11.8v23.8l-11.8-11.9-11.9 11.9v23.7h-11.9v17.8h-11.9v17.8h118.8v-17.8z">
                                </path>
                              </svg>
                              <p>Cambodia<br>+(855)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-76" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="CM">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="CM">
                                <path fill="#ce1126" d="M0 0h513v342H0z"></path>
                                <path fill="#007a5e" d="M0 0h171v342H0z"></path>
                                <path
                                  d="M342 0h171v342H342zm-86 102.2 17.2 53H329L283.9 188l17.2 53-45.1-32.7-45.1 32.7 17.2-53-45.1-32.8h55.8z"
                                  fill="#fcd116"></path>
                              </svg>
                              <p>Cameroon<br>+(237)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-78" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="CA">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="CA">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path
                                  d="M0 0h142v342H0zm371 0h142v342H371zm-64.5 206 50.4-25.2-25.2-12.6V143l-50.4 25.2 25.2-50.4h-25.2L256.1 80l-25.2 37.8h-25.2l25.2 50.4-50.4-25.2v25.2l-25.2 12.6 50.4 25.2-12.6 25.2h50.4V269h25.2v-37.8h50.4z"
                                  fill="red"></path>
                              </svg>
                              <p>Canada<br>+(1)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-80" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="CV">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="CV">
                                <path fill="#003893" d="M0 0h513v342H0z"></path>
                                <path fill="#cf2027" d="M0 182.2h513v41.4H0z"></path>
                                <path fill="#FFF" d="M0 140.8h513v41.4H0zm0 82.8h513V265H0z"></path>
                                <path
                                  d="m150.4 70 6.9 21.1h22.2l-18 13.1 6.9 21.1-18-13.1-17.9 13.1 6.8-21.1-17.9-13.1h22.2zm0 209.7 6.9 21.1h22.2l-18 13 6.9 21.2-18-13.1-17.9 13.1 6.8-21.2-17.9-13h22.2zm-97.6-70.9 6.9 21.1h22.2l-18 13 6.9 21.2-18-13.1-17.9 13.1 6.8-21.2-17.9-13H46zM90.1 91l6.9 21.1h22.2l-18 13 6.9 21.2-18-13.1-17.9 13.1 6.8-21.2-18-13h22.3zm-66.3 71H46l6.8-21.1 6.9 21.1h22.2l-18 13.1 6.9 21.1-18-13-17.9 13 6.8-21.1zm48.4 148.9 6.8-21.1-18-13h22.3l6.8-21.2 6.9 21.2h22.2l-18 13 6.9 21.1-18-13zM248 208.8l-6.9 21.1h-22.2l18 13-6.9 21.2 18-13.1 18 13.1-6.9-21.2 18-13h-22.2zM210.7 91l-6.8 21.1h-22.2l17.9 13-6.8 21.2 17.9-13.1 18 13.1-6.9-21.2 18-13h-22.2zm66.4 71h-22.2l-6.9-21.1-6.9 21.1h-22.2l18 13.1-6.9 21.1 18-13 18 13-6.9-21.1zm-48.4 148.9-6.9-21.1 18-13h-22.2l-6.9-21.2-6.8 21.2h-22.2l17.9 13-6.8 21.1 17.9-13z"
                                  fill="#f7d116" stroke="#000"></path>
                              </svg>
                              <p>Cape Verde<br>+(238)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-82" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="KY">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="KY">
                                <path fill="#0052B4" d="M0 0h513v342H0z"></path>
                                <circle fill="#6DA544" cx="384" cy="96.5" r="29.7"></circle>
                                <path fill="#D80027" d="M332.1 89H436v44.5H332.1z"></path>
                                <path fill="#496E2D" d="M435.9 170.7z"></path>
                                <path fill="#FFDA44"
                                  d="M332.1 200.3V230h15.6c9.4 9.2 22.2 14.8 36.3 14.8 14.1 0 27-5.7 36.3-14.8h15.6v-29.7H332.1z">
                                </path>
                                <path fill="#338AF3"
                                  d="M332.1 126.1v44.5c0 39.8 51.9 51.9 51.9 51.9s51.9-12.2 51.9-51.9v-44.5H332.1z">
                                </path>
                                <path
                                  d="M384 149.9c-13 0-13 11.9-26 11.9s-13-11.9-26-11.9v20.8c13 0 13 11.9 26 11.9s13-11.9 26-11.9 13 11.9 26 11.9 13-11.9 26-11.9v-20.8c-13 0-13 11.9-26 11.9s-13-11.9-26-11.9zm0-41.6c-13 0-13 11.9-26 11.9s-13-11.9-26-11.9v20.8c13 0 13 11.9 26 11.9s13-11.9 26-11.9 13 11.9 26 11.9 13-11.9 26-11.9v-20.8c-13 0-13 11.9-26 11.9s-13-11.9-26-11.9z"
                                  fill="#F3F3F3"></path>
                                <path fill="#FFF"
                                  d="M256 0v22.6l-46.1 30.7H256v64h-46.1L256 148v22.7h-22.6l-73.4-49v49H96v-49l-73.4 49H0V148l46.1-30.7H0v-64h46.1L0 22.6V0h22.6L96 48.9V0h64v48.9L233.4 0z">
                                </path>
                                <g fill="#D80027">
                                  <path d="M144 0h-32v69.3H0v32h112v69.4h32v-69.4h112v-32H144z"></path>
                                  <path d="M0 0v15.1l57.4 38.2H80zm256 0v15.1l-57.4 38.2H176z"></path>
                                  <path
                                    d="M0 0v15.1l57.4 38.2H80zm256 0v15.1l-57.4 38.2H176zM0 170.7v-15.1l57.4-38.3H80zm256 0v-15.1l-57.4-38.3H176z">
                                  </path>
                                </g>
                              </svg>
                              <p>Cayman Islands<br>+(1-345)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-84" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="CF">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="CF">
                                <path fill="#d21034" d="M0 0h513v342H0z"></path>
                                <path d="M0 171h211.5v85.3H0zm300.5 0H512v85.3H300.5z" fill="#3a9927"></path>
                                <path fill="#003082" d="M0 0v85.3h211.5V0h89v85.3H513V0z"></path>
                                <path d="M300.5 85.3H512v85.3H300.5zM0 85.3h211.5v85.3H0z" fill="#FFF"></path>
                                <path
                                  d="M300.5 342h-89v-86H0v86h513v-86H300.5zM105.7 8.6l8.6 26.2h27.5L119.5 51l8.6 26.2L105.7 61 83.4 77.2 91.9 51 69.6 34.8h27.6z"
                                  fill="#ffce00"></path>
                              </svg>
                              <p>Central African Republic<br>+(236)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-86" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="TD">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="TD">
                                <path fill="#FFDA44" d="M0 85.331h512v341.337H0z"></path>
                                <path fill="#0052B4" d="M0 85.331h170.663v341.337H0z"></path>
                                <path fill="#D80027" d="M341.337 85.331H512v341.337H341.337z"></path>
                              </svg>
                              <p>Chad<br>+(235)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-88" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="CL">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="CL">
                                <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                <path fill="#FFF" d="M196 0h317v171H196z"></path>
                                <path fill="#0037A1" d="M0 0h196v171H0z"></path>
                                <path fill="#FFF"
                                  d="M98 24.5 113.1 71H162l-39.6 28.7 15.2 46.5L98 117.5l-39.6 28.7 15.2-46.5L34 71h48.9z">
                                </path>
                              </svg>
                              <p>Chile<br>+(56)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-90" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="CN">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="CN">
                                <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                <path
                                  d="m226.8 239.2-9.7-15.6-17.9 4.4 11.9-14.1-9.7-15.6 17.1 6.9 11.8-14.1-1.3 18.4 17.1 6.9-17.9 4.4zM290.6 82l-10.1 15.4 11.6 14.3-17.7-4.8-10.1 15.5-1-18.4-17.7-4.8 17.2-6.6-1-18.4 11.6 14.3zm-54.4-56.6-2 18.3 16.8 7.6-18 3.8-2 18.3-9.2-16-17.9 3.8 12.3-13.7-9.2-15.9 16.8 7.5zm56.6 136.4-14.9 10.9 5.8 17.5-14.9-10.8-14.9 11 5.6-17.6-14.9-10.7 18.4-.1 5.6-17.6 5.8 17.5zM115 46.3l17.3 53.5h56.2l-45.4 32.9 17.3 53.5-45.4-33-45.5 33 17.4-53.5-45.5-32.9h56.3z"
                                  fill="#FFDA44"></path>
                              </svg>
                              <p>China<br>+(86)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-92" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="CX">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="CX">
                                <path fill="#0021ad" d="M0 0h513v342H0z"></path>
                                <path fill="#1c8a42" d="M0 0h513v342"></path>
                                <path
                                  d="m77.6 272 5.7 11.9 12.8-3-5.7 11.9 10.3 8.1-12.8 2.9V317l-10.3-8.3-10.2 8.3v-13.2l-12.8-2.9 10.3-8.1-5.8-11.9 12.9 3zm-37.1-98.9 5.7 11.9 12.8-3-5.7 11.8 10.3 8.2-12.9 2.9.1 13.2-10.3-8.3-10.3 8.3.1-13.2-12.9-2.9 10.4-8.2L22 182l12.8 3zm37.1-80.9 5.7 11.8 12.8-2.9-5.7 11.8 10.3 8.2-12.8 2.9v13.1l-10.3-8.2-10.2 8.2V124l-12.8-2.9 10.3-8.2-5.8-11.8L72 104zm46.1 62.9 5.7 11.9 12.8-3-5.7 11.9 10.3 8.1-12.8 2.9v13.2l-10.3-8.2-10.2 8.2v-13.2l-12.8-2.9 10.3-8.1-5.7-11.9 12.8 3zm-32.9 54 4.4 13.7h14.5L98 231.3l4.5 13.7-11.7-8.4-11.7 8.4 4.5-13.7-11.7-8.5h14.4z"
                                  fill="#FFF"></path>
                                <circle fill="#ffc639" cx="267.1" cy="170.7" r="74.5"></circle>
                                <path fill="#1c8a42"
                                  d="M267.1 220.3h24.8s10.8-19 0-37.2l24.8-24.8-12.4-24.8h-12.4s-6.2 18.6-31 18.6-31-18.6-31-18.6h-12.4l12.4 24.8-12.4 24.8 12.4 12.4s12.4-24.8 37.2-12.4c0 0 10.5 15.5 0 37.2z">
                                </path>
                                <path fill="#ffc639"
                                  d="M464.4 92.2c.6-2.9-.2-17.6-.2-20.7 0-21.3-13.9-39.4-33.2-45.7 5.9 12 9.2 25.4 9.2 39.7 0 4.8-.4 9.5-1.1 14.1-2.9-4.7-6.6-8.9-11.2-12.6-17.1-13.6-40.6-14-57.9-2.5 13.4 2.9 26.3 8.9 37.7 18 9 7.1 16.2 16.8 21.7 26.1 0 0-17.8 10.9-31 15.1s-42.3 7.9-42.3 7.9c72 12 132-36 132-36-6.5-13.4-15.8-4-23.7-3.4z">
                                </path>
                              </svg>
                              <p>Christmas Island<br>+(61)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-94" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="CC">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="CC">
                                <path fill="green" d="M0 0h513v342H0z"></path>
                                <path
                                  d="m422.7 252.4 6.2 12.8 13.8-3.2-6.2 12.8 11.2 8.8-13.9 3.2V301l-11.1-8.9-11.1 8.9v-14.2l-13.8-3.2 11.1-8.8-6.2-12.8 13.9 3.2zm-46.6-136.3 6.2 12.9 13.8-3.2-6.2 12.8 11.2 8.8-13.9 3.1v14.3l-11.1-8.9-11.1 8.9.1-14.3-13.9-3.1 11.1-8.8-6.2-12.8L370 129zm37-77.8 6.2 12.8 13.8-3.2-6.2 12.8 11.2 8.9-13.9 3.1v14.2L413.1 78 402 86.9l.1-14.2-13.9-3.1 11.1-8.9-6.2-12.8 13.9 3.2zm51.8 58.4 6.2 12.8 13.9-3.2-6.3 12.8 11.2 8.9-13.9 3.1.1 14.2-11.2-8.9-11.1 8.9.1-14.2L440 128l11.2-8.9-6.3-12.8 13.9 3.2zm-28 68.1 4.9 14.8h15.6l-12.6 9.2 4.8 14.9-12.7-9.2-12.6 9.2 4.8-14.9-12.6-9.2h15.6zM306.8 254.7c-49.2 0-89.1-39.9-89.1-89.1s39.9-89.1 89.1-89.1c15.3 0 29.8 3.9 42.4 10.7C329.4 67.9 302.3 56 272.5 56c-60.5 0-109.6 49.1-109.6 109.6S212 275.3 272.5 275.3c29.8 0 56.9-11.9 76.6-31.3-12.6 6.8-27 10.7-42.3 10.7zM140.4 59.5C129.7 41 109.7 28.6 86.8 28.6S44 41 33.3 59.5h107.1zm.2.4-53.8 53.8-53.7-53.8C28 68.9 25 79.3 25 90.5c0 34.2 27.7 61.9 61.9 61.9s61.9-27.7 61.9-61.9c-.1-11.2-3.1-21.6-8.2-30.6z"
                                  fill="#FFDA44"></path>
                                <path fill="#A2001D"
                                  d="M71.4 98.2v52.2c4.9 1.3 10.1 1.9 15.5 1.9s10.5-.7 15.5-1.9V98.2h-31z"></path>
                              </svg>
                              <p>Cocos Islands<br>+(61)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-96" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="CO">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="CO">
                                <path fill="#FFDA44" d="M0 0h513v342H0z"></path>
                                <path fill="#D80027" d="M0 256.5h513V342H0z"></path>
                                <path fill="#0052B4" d="M0 171h513v85.5H0z"></path>
                              </svg>
                              <p>Colombia<br>+(57)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-98" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="KM">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="KM">
                                <path fill="#0052B4" d="M0 0h513v342H0z"></path>
                                <path fill="#FFDA44" d="M0 0h513v85.5H0z"></path>
                                <path fill="#FFF" d="M0 85.5h513V171H0z"></path>
                                <path fill="#D80027" d="M0 171h513v85.5H0z"></path>
                                <path fill="#6DA544" d="M256.5 171 0 342V0z"></path>
                                <g fill="#FFF">
                                  <path
                                    d="M68.6 170.7c0-24.9 17.5-45.6 40.8-50.7-3.6-.8-7.3-1.2-11.1-1.2-28.7 0-51.9 23.3-51.9 51.9s23.3 51.9 51.9 51.9c3.8 0 7.5-.4 11.1-1.2-23.3-5.1-40.8-25.9-40.8-50.7z">
                                  </path>
                                  <path
                                    d="m108.9 126.1 2.7 8.5h9l-7.3 5.3 2.8 8.5-7.2-5.2-7.3 5.2 2.8-8.5-7.2-5.3h8.9zm0 22.3 2.7 8.5h9l-7.3 5.3 2.8 8.5-7.2-5.3-7.3 5.3 2.8-8.5-7.2-5.3h8.9z">
                                  </path>
                                  <path
                                    d="m108.9 170.7 2.7 8.5h9l-7.3 5.2 2.8 8.5-7.2-5.2-7.3 5.2 2.8-8.5-7.2-5.2h8.9zm0 22.2 2.7 8.5h9l-7.3 5.3 2.8 8.5-7.2-5.3-7.3 5.3 2.8-8.5-7.2-5.3h8.9z">
                                  </path>
                                </g>
                              </svg>
                              <p>Comoros<br>+(269)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-100" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="CK">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 513 342" class="flag" code="CK">
                                <path fill="#01237a" d="M0 85.332h513v342H0z"></path>
                                <path
                                  d="m384 156.705 5.283 16.254h17.089l-13.826 10.045 5.281 16.254L384 189.211l-13.825 10.047 5.28-16.254-13.825-10.045h17.089zm-70.209 29.081 15.228 7.758 12.084-12.083-2.673 16.879 15.227 7.759-16.879 2.673-2.674 16.88-7.76-15.227-16.878 2.673 12.086-12.084zm-29.081 70.209 16.254-5.281.001-17.089 10.044 13.825 16.254-5.282-10.046 13.827 10.046 13.826-16.254-5.28-10.044 13.825v-17.09zm29.081 70.209 7.759-15.229-12.084-12.084 16.881 2.674 7.757-15.227 2.674 16.879 16.879 2.672-15.227 7.759 2.673 16.882-12.084-12.087zM384 355.284l-5.281-16.253h-17.091l13.827-10.045-5.28-16.254L384 322.776l13.827-10.044-5.281 16.254 13.826 10.045h-17.089zm70.209-29.08-15.229-7.758-12.083 12.084 2.673-16.882-15.227-7.756 16.879-2.675 2.675-16.879 7.756 15.227 16.881-2.674-12.086 12.085zm29.081-70.209-16.254 5.281v17.09l-10.045-13.826-16.254 5.281 10.046-13.826-10.046-13.827 16.254 5.282 10.045-13.825v17.089zm-29.081-70.207-7.757 15.226 12.082 12.084-16.881-2.673-7.756 15.227-2.675-16.88-16.879-2.675 15.227-7.757-2.673-16.878 12.084 12.082zM0 186.665v16h46.069L0 233.377v7.539l57.377-38.252H80L0 255.998h112v-69.334H0zm96 69.331H22.628L96 207.083v48.913zm80-117.331 80-53.334H144v69.334h112v-16h-46.069L256 107.951v-7.539l-57.377 38.251H176v.002zm-16-53.332h73.372L160 134.246V85.333zm-16 170.665h112l-80-53.334h22.623L256 240.917v-7.539l-46.069-30.713H256v-16H144v69.333zm16-48.915 73.372 48.913H160v-48.913zM112 85.331H0l80 53.334H57.377L0 100.413v7.539l46.069 30.712H0v16h112V85.331zm-16 48.915L22.628 85.333H96v48.913z"
                                  fill="#FFF"></path>
                                <g fill="#D80027">
                                  <path d="M144 85.331h-32v69.334H0v32h112v69.333h32v-69.333h112v-32H144z"></path>
                                  <path
                                    d="M80 138.665 0 85.331v15.082l57.377 38.252zm96 0h22.623L256 100.413V85.331zm-118.623 64L0 240.917v15.081l80-53.333zm118.623 0 80 53.333v-15.081l-57.377-38.252z">
                                  </path>
                                </g>
                              </svg>
                              <p>Cook Islands<br>+(682)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-102" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="CR">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="CR">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#D80027" d="M0 114h513v114H0z"></path>
                                <path fill="#0052B4" d="M0 285h513v57H0zM0 0h513v57H0z"></path>
                              </svg>
                              <p>Costa Rica<br>+(506)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-104" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="HR">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="HR">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#D80027" d="M0 0h513v114H0z"></path>
                                <path fill="#0052B4" d="M0 228h513v114H0z"></path>
                                <path
                                  d="M309.3 113.2v-44l17.5-14.4 17.7 14.4v44zm-105.6 0v-44l-17.3-14.4-17.9 14.4v44zm35.2 0v-44l17.6-14.4 17.6 14.4v44z"
                                  fill="#338AF3"></path>
                                <path
                                  d="M309.3 113.2h-35.2v-44l17.5-14.4 17.7 14.4zm-70.4 0h-35.2v-44l17.5-14.4 17.7 14.4z"
                                  fill="#0052B4"></path>
                                <path stroke="#D80027" fill="#FFF"
                                  d="M168.5 113.2v101.9c0 24.3 14.4 46.2 35.4 59.4 21.3 13.4 42.1 14.7 52.6 14.7s31.4-1.7 52.6-14.8c21-13 35.4-35.1 35.4-59.3V113.2h-176z">
                                </path>
                                <path
                                  d="M168.5 113.2h35.2v35.2h-35.2zm70.4 0h35.2v35.2h-35.2zm70.4 0h35.2v35.2h-35.2zm-105.6 35.2h35.2v35.2h-35.2zm70.4 0h35.2v35.2h-35.2zm-105.6 35.2h35.2v35.2h-35.2zm35.2 35.2h35.2V254h-35.2zm35.2-35.2h35.2v35.2h-35.2zm70.4 0h35.2v35.2h-35.2zm-35.2 35.2h35.2V254h-35.2zm35.2 55.5c8.6-5.4 16.2-12.3 22-20.3h-22v20.3zM181.7 254c5.8 8 13.3 14.9 22 20.4V254h-22zm57.2 0v33.7c7.2 1.2 13.3 1.5 17.6 1.5 4.3 0 10.4-.3 17.6-1.6V254h-35.2z"
                                  fill="#D80027"></path>
                              </svg>
                              <p>Croatia<br>+(385)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-106" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="CU">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="CU">
                                <path fill="#FF9811" d="M0-40.8v422.9-211.4z"></path>
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path d="M0 0h513v68.3H0zm0 136.5h513v68.3H0zm0 136.6h513v68.3H0z" fill="#0052B4">
                                </path>
                                <path fill="#D80027" d="M256 170.7 0 342V0z"></path>
                                <path fill="#FFF"
                                  d="m86.5 111.4 12.7 39.2h41.3l-33.4 24.2 12.8 39.3-33.4-24.2-33.4 24.2 12.8-39.3-33.4-24.2h41.2z">
                                </path>
                              </svg>
                              <p>Cuba<br>+(53)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-108" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="CW">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="CW">
                                <path fill="#002b7f" d="M0 0h513v342H0z"></path>
                                <path fill="#f9e814" d="M0 233.5h513v51H0z"></path>
                                <path
                                  d="m168.7 86.5 12.9 39.8h41.8l-33.8 24.5 12.9 39.7-33.8-24.5-33.8 24.5 12.9-39.7-33.8-24.5h41.8zm-83.3-54 7.8 23.9h25L97.9 71.1l7.8 23.8-20.3-14.7-20.3 14.7 7.8-23.8-20.3-14.7h25.1z"
                                  fill="#FFF"></path>
                              </svg>
                              <p>Curacao<br>+(599)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-110" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="CY">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="CY">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#DB7D00"
                                  d="M141.7 154.7s.2 67.1 74.7 65.3l4.5 13.9h8.9s-7.4-41.1 60.1-41.5c0 0 0-27.6 27.6-27.6H359s-66-51.8 58.9-118l1.8-13.1s-129.9 71-198.9 57.2c0 0 10.7 42.5-10.8 42.5-10.8 0-9.7-8.1-32.3-8.1-18.7 0-17.3 19.7-26.3 19.5-8.9-.2-18.8-12.3-19.6-10.2-.7 2.1 9.9 20.1 9.9 20.1z">
                                </path>
                                <g fill="#006651">
                                  <path
                                    d="M237.2 308.1c6.9-5 13-6.6 22.4-8.3s19.4-4.4 24.6-5.8-17.7 6.6-23.5 8.3c-5.8 1.6-23.5 5.8-23.5 5.8zm37.9-14.7c-1.9-11.9 2.8-24.3 13.5-29.3 2.5 8.6-5.2 23.2-13.5 29.3zm18.2-6.2c-5.8-9.8 4-22.6 11.1-28.8 3.3 6-2.5 23.7-11.1 28.8zm16.9-7.6c-6.2-8.4 1.1-23.2 8.8-29 3.1 8.2.1 23.2-8.8 29zm16.9-10.6c-5.6-8-1.7-20.4 6.3-28.4 5.8 6.6.9 21-6.3 28.4zm13.5-10.7c-4.7-7.5 1.1-25.4 8.6-30.4 3.3 6.6.8 25.4-8.6 30.4zm10.8-2.8c-1.4-10.8 17.4-22.7 25.2-22.4-.9 8.9-8.9 18.6-25.2 22.4zm-10.5 12.2c8.8-9.1 26-9.1 32.1-7.2-1.7 5.3-21.9 16.9-32.1 7.2z">
                                  </path>
                                  <path
                                    d="M328.7 276.8c12.4-3.3 20.5-6.1 27.9 1.7-5.2 6.6-25.4 4.7-27.9-1.7zm-17.7 8c11.9-6.4 26.3 3 28.5 8.6-13.3 5.5-28.7-7.2-28.5-8.6zm-16.3 9.2c10.8-4.1 23.2 1.4 28.2 7.5-5.8 2.7-21 5.7-28.2-7.5zm-14.9 4.7c12.4-1.4 24.4 8 27 13.4-15.9 1.5-22-3.2-27-13.4zm-4 9.4c-6.9-5-13-6.6-22.4-8.3-9.4-1.7-19.4-4.4-24.6-5.8-5.3-1.4 17.7 6.6 23.5 8.3 5.8 1.6 23.5 5.8 23.5 5.8zm-37.9-14.7c1.9-11.9-2.8-24.3-13.5-29.3-2.5 8.6 5.2 23.2 13.5 29.3zm-18.2-6.2c5.8-9.8-4-22.6-11.1-28.8-3.3 6 2.5 23.7 11.1 28.8zm-16.9-7.6c6.2-8.4-1.1-23.2-8.8-29-3.1 8.2-.1 23.2 8.8 29zM185.9 269c5.6-8 1.7-20.4-6.3-28.4-5.8 6.6-.9 21 6.3 28.4zm-13.5-10.7c4.7-7.5-1.1-25.4-8.6-30.4-3.3 6.6-.8 25.4 8.6 30.4zm-10.8-2.8c1.4-10.8-17.4-22.7-25.2-22.4.9 8.9 8.9 18.6 25.2 22.4zm10.5 12.2c-8.8-9.1-26-9.1-32.1-7.2 1.7 5.3 21.9 16.9 32.1 7.2z">
                                  </path>
                                  <path
                                    d="M184.3 276.8c-12.4-3.3-20.5-6.1-27.9 1.7 5.2 6.6 25.4 4.7 27.9-1.7zm17.7 8c-11.9-6.4-26.3 3-28.5 8.6 13.3 5.5 28.7-7.2 28.5-8.6zm16.3 9.2c-10.8-4.1-23.2 1.4-28.2 7.5 5.8 2.7 21 5.7 28.2-7.5zm14.9 4.7c-12.4-1.4-24.4 8-27 13.4 15.9 1.5 22-3.2 27-13.4z">
                                  </path>
                                </g>
                              </svg>
                              <p>Cyprus<br>+(357)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-112" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="CZ">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="CZ">
                                <path fill="#11457e" d="M0 0h513v342H0z"></path>
                                <path fill="#d7141a" d="M513 171v171H0l215-171z"></path>
                                <path fill="#FFF" d="M513 0v171H215.185L0 0z"></path>
                              </svg>
                              <p>Czech Republic<br>+(420)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-114" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="CD">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="CD">
                                <path fill="#338AF3" d="M0 0h513v342H0z"></path>
                                <path fill="#FFDA44" d="M513 66.9V0H411.7L0 274.4V342h100.3z"></path>
                                <path fill="#D80027" d="M513 0v40.1L60.2 342H0v-40.8L451.8 0z"></path>
                                <path fill="#FFDA44"
                                  d="m93.6 31.2 16.3 50.4H163l-42.9 31.2 16.4 50.5-42.9-31.2-43 31.2L67 112.8 24.1 81.6h53.1z">
                                </path>
                              </svg>
                              <p>Democratic Republic of the Congo<br>+(243)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-116" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="DK">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="DK">
                                <path fill="#c60c30" d="M0 0h513v342H0z"></path>
                                <path fill="#FFF" d="M190 0h-60v140H0v60h130v142h60V200h323v-60H190z"></path>
                              </svg>
                              <p>Denmark<br>+(45)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-118" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="DJ">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="DJ">
                                <path fill="#12ad2b" d="M0 0h513v342H0z"></path>
                                <path fill="#6ab2e7" d="M513 0v166.7L0 170.8V0z"></path>
                                <path fill="#FFF" d="M256 170.7 0 342V0z"></path>
                                <path fill="#d7141a"
                                  d="m89.8 92.5 17 52.4H162l-44.6 32.5 17 52.4-44.6-32.4-44.6 32.4 17-52.4-44.6-32.5h55.2z">
                                </path>
                              </svg>
                              <p>Djibouti<br>+(253)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-120" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="DM">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="DM">
                                <path fill="#496E2D" d="M0 0h513v342H0z"></path>
                                <path d="M0 110.7v120h513v-120z"></path>
                                <path fill="#FFDA44" d="M0 110.7h513v40H0z"></path>
                                <path fill="#FFF" d="M0 190.7h513v40H0z"></path>
                                <path d="M196 0h120v342H196z"></path>
                                <path fill="#FFDA44" d="M196 0h40v342h-40z"></path>
                                <path fill="#FFF" d="M274.7 0h40v342h-40z"></path>
                                <circle fill="#D80027" cx="256" cy="170.7" r="123.1"></circle>
                                <path
                                  d="m256 58.6 4.6 14.2h15l-12.1 8.9 4.6 14.2-12.1-8.8-12.1 8.8 4.6-14.2-12.1-8.9h15zM190.1 80l12.2 8.8 12.1-8.8-4.6 14.3 12.1 8.8h-15l-4.6 14.2-4.7-14.2h-15l12.1-8.8zm-40.7 56h15l4.6-14.2 4.7 14.2h15l-12.2 8.8 4.7 14.3-12.2-8.8-12.1 8.8 4.6-14.3zm0 69.3 12.1-8.8-4.6-14.3L169 191l12.2-8.8-4.7 14.3 12.2 8.8h-15l-4.7 14.3-4.6-14.3zm40.7 56.1 4.6-14.3-12.1-8.8h15l4.7-14.3 4.6 14.3h15l-12.1 8.8 4.6 14.3-12.1-8.9zm65.9 21.4-4.6-14.3h-15l12.1-8.8-4.6-14.3 12.1 8.8 12.1-8.8-4.6 14.3 12.1 8.8h-15zm65.9-21.4-12.2-8.9-12.1 8.9 4.6-14.3-12.1-8.8h15l4.6-14.3 4.7 14.3h15l-12.1 8.8zm40.7-56.1h-15l-4.6 14.3-4.7-14.3h-15l12.2-8.8-4.7-14.3L343 191l12.1-8.8-4.6 14.3zm0-69.3-12.1 8.8 4.6 14.3-12.1-8.8-12.2 8.8 4.7-14.3-12.2-8.8h15l4.7-14.2 4.6 14.2zm-40.7-56-4.6 14.3 12.1 8.8h-15l-4.7 14.2-4.6-14.2h-15l12.1-8.8-4.6-14.3 12.1 8.8zM279.3 168.7c-11-21.1-14.5-25.1-14.5-25.1s.4-9.7.4-15.6c0-8.8-7.4-15.8-16.5-15.8-8.6 0-15.7 2.9-16.5 11-4.2.9-8.6 4.1-8.6 10.7 0 4.8 1 7.3 5.2 9.3 2.1-4.6 4.3-4.8 9.3-6.4.8.6 1.7 3 2.6 3.4l.3 1s-13.3 6.6-13.3 30.9c0 29.5 22 45.4 22 45.4l-1.8.3-1.9 7.1h22v-7.2l11 17.5c.3-.3 10.2-47.6.3-66.5z"
                                  fill="#496E2D"></path>
                              </svg>
                              <p>Dominica<br>+(1-767)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-122" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="DO">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="DO">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#D80027" d="M0 215.2h211.5v126.1H0z"></path>
                                <path fill="#0052B4" d="M0 0h211.5v126.2H0z"></path>
                                <path fill="#D80027" d="M300.5 0H512v126.2H300.5z"></path>
                                <path fill="#0052B4" d="M300.5 215.2H512v126.1H300.5z"></path>
                                <g stroke="#FFF" stroke-width="5" stroke-miterlimit="10">
                                  <path fill="#0052B4" d="M256 130h-49.9v49.4s19.5 6 49.9 6V130z"></path>
                                  <path fill="#D80027"
                                    d="M206.1 179.4v6c0 27.5 22.3 49.9 49.9 49.9v-49.9c-30.4 0-49.9-6-49.9-6z"></path>
                                  <path fill="#0052B4"
                                    d="M256 235.3c27.5 0 49.9-22.3 49.9-49.9v-6s-19.5 6-49.9 6v49.9z"></path>
                                  <path fill="#D80027" d="M256 130v55.4c30.4 0 49.9-6 49.9-6V130H256z"></path>
                                </g>
                              </svg>
                              <p>Dominican Republic<br>+(1)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-124" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="TL">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="TL">
                                <path fill="#D80027" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#FFDA44" d="M256 256 0 90.691v44.242L155.826 256 0 377.067v44.242z"></path>
                                <path d="M0 90.691v330.618L189.217 256z"></path>
                                <path fill="#FFF"
                                  d="m44.184 213.36 24.912 23.577 30.121-16.41-14.723 30.98 24.911 23.575-34.012-4.43L60.67 301.63l-6.296-33.716-34.012-4.43 30.119-16.408z">
                                </path>
                              </svg>
                              <p>East Timor<br>+(670)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-126" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="EC">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="EC">
                                <path fill="#FFDA44" d="M0 0h513v342H0z"></path>
                                <path fill="#0052B4" d="M0 170.7h513V256H0z"></path>
                                <path fill="#D80027" d="M0 256h513v85.3H0z"></path>
                                <circle fill="#FFDA44" cx="256" cy="171" r="60"></circle>
                                <path fill="#4C1F00"
                                  d="M369.2 79.9s-27.2-13.8-33.9-16c-6.7-2.2-49.1-13.2-49.1-7 0 10.3-13.5 12-15.5 12s-2-5.3-14.8-5.3-13.7 4.8-15.8 4.8c-2.2 0-14.5-1-14.5-11.5 0-5.2-42.9 4-49.1 7-6.1 3.1-33.9 16-33.9 16s45.8 2.7 53.9 6.2 43.8 16.5 43.8 16.5l-2.8 13.3h37.8l-3.8-13.3s35.1-12.7 43.8-16.5 53.9-6.2 53.9-6.2z">
                                </path>
                                <path fill="#57BA17"
                                  d="M217.7 171.7c0 21.1 17.2 38.3 38.3 38.3 21.1 0 38.3-17.2 38.3-38.3v-11.5h-76.5v11.5z">
                                </path>
                                <path fill="#338AF3"
                                  d="M256 110.5c-21.1 0-38.3 17.2-38.3 38.3v11.5h76.5v-11.5c.1-21.1-17.1-38.3-38.2-38.3z">
                                </path>
                              </svg>
                              <p>Ecuador<br>+(593)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-128" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="EG">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="EG">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#D80027" d="M0 0h513v114H0z"></path>
                                <path d="M0 228h513v114H0z"></path>
                                <path fill="#C09300"
                                  d="M220.3 204.4s0-58.4 4.5-64.7c3.1-4.3 16.8 5.2 22.7 4.5 0 0 4.2-7.5 4.5-12 .3-4.6-1.1-7.6-4.9-6.2 0 0-1.2-2.1.5-3.3 1.6-1.2 5.6.1 5.6.1s-.5-1 1.6-.9c2.9.2 7.2 1.4 7.4 5.6.2 3.1.3 7.7.4 8.7.7 6.8 2.7 8.7 2.7 8.7s18.4-9.2 22-5.2c3.3 3.8 4.5 64.7 4.5 64.7l-18.1-16.8 12.1 29.5s-14.4 2.4-28.9 2.4c-14.5 0-31.1-4.2-31.1-4.2l13.8-28.2-19.3 17.3z">
                                </path>
                              </svg>
                              <p>Egypt<br>+(20)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-130" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="SV">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="SV">
                                <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                <path d="M0 85.337h512v113.775H0zm0 227.551h512v113.775H0z" fill="#0052B4"></path>
                                <path fill="#FFDA44" d="M228.582 261.936 256 214.447l27.418 47.489z"></path>
                                <path fill="#6DA544" d="M291.616 277.616 256 295.425l-35.616-17.809v-23.744h71.232z">
                                </path>
                                <path fill="#FFDA44"
                                  d="m289.579 216.485-12.592 12.592c5.37 5.372 8.693 12.791 8.693 20.988 0 16.392-13.289 29.68-29.68 29.68-16.392 0-29.68-13.289-29.68-29.68 0-8.195 3.322-15.616 8.693-20.988l-12.592-12.592c-8.594 8.594-13.91 20.466-13.91 33.579 0 26.228 21.261 47.489 47.489 47.489s47.489-21.261 47.489-47.489c0-13.114-5.316-24.987-13.91-33.579z">
                                </path>
                              </svg>
                              <p>El Salvador<br>+(503)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-132" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="GQ">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="GQ">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#6DA544" d="M0 0h513v113.8H0z"></path>
                                <path fill="#D80027" d="M0 227.6h513V342H0z"></path>
                                <path fill="#0070C8" d="M126 171 0 342V0z"></path>
                                <path fill="none" stroke="#000" stroke-miterlimit="10"
                                  d="M233.8 139.4v40.4c0 35.6 35.6 35.6 35.6 35.6s35.6 0 35.6-35.6v-40.4h-71.2z"></path>
                                <path fill="#786145" d="M264.5 179.8h9.8l4 25.8h-17.8z"></path>
                                <path fill="#6DA544"
                                  d="M287.2 162c0-9.8-8-14.8-17.8-14.8s-17.8 5-17.8 14.8c-4.9 0-8.9 4-8.9 8.9s4 8.9 8.9 8.9h35.6c4.9 0 8.9-4 8.9-8.9s-4-8.9-8.9-8.9z">
                                </path>
                                <path
                                  d="m230.7 120 1.9 3.3h3.8l-1.9 3.3 1.9 3.2h-3.8l-1.9 3.3-1.9-3.3H225l1.9-3.2-1.9-3.3h3.8zm15.3 0 1.9 3.3h3.7l-1.9 3.3 1.9 3.2h-3.7l-1.9 3.3-1.9-3.3h-3.8l1.9-3.2-1.9-3.3h3.8zm15.3 0 1.9 3.3h3.7l-1.9 3.3 1.9 3.2h-3.7l-1.9 3.3-1.9-3.3h-3.8l1.9-3.2-1.9-3.3h3.8zm15.8 0 1.9 3.3h3.8l-1.9 3.3 1.9 3.2H279l-1.9 3.3-1.9-3.3h-3.7l1.8-3.2-1.8-3.3h3.7zm16 0 1.9 3.3h3.8l-1.9 3.3 1.9 3.2H295l-1.9 3.3-1.9-3.3h-3.7l1.8-3.2-1.8-3.3h3.7zm15 0 1.9 3.3h3.7l-1.9 3.3 1.9 3.2H310l-1.9 3.3-1.9-3.3h-3.8l1.9-3.2-1.9-3.3h3.8z"
                                  fill="#FFDA00" stroke="#000" stroke-miterlimit="10"></path>
                              </svg>
                              <p>Equatorial Guinea<br>+(240)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-134" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="ER">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="ER">
                                <path fill="#338AF3" d="M0 0h513v342H0z"></path>
                                <path fill="#56AF35" d="M0 0h513v171H0z"></path>
                                <path fill="#D80027" d="m0 342 513-171L0 0v342z"></path>
                                <g fill="#ffc945">
                                  <path
                                    d="M134.7 231.5c33.6 0 60.8-27.2 60.8-60.8s-27.2-60.8-60.8-60.8-60.8 27.2-60.8 60.8 27.2 60.8 60.8 60.8zm0 24.3c-47 0-85.2-38.1-85.2-85.2s38.1-85.2 85.2-85.2 85.2 38.1 85.2 85.2-38.2 85.2-85.2 85.2z">
                                  </path>
                                  <circle cx="119.5" cy="148.3" r="17.5"></circle>
                                  <circle cx="148.9" cy="158.5" r="17.5"></circle>
                                  <circle cx="134.7" cy="135.2" r="17.5"></circle>
                                  <circle cx="119.5" cy="172.7" r="17.5"></circle>
                                  <circle cx="149.9" cy="182.8" r="17.5"></circle>
                                  <circle cx="122.5" cy="198" r="17.5"></circle>
                                  <circle cx="145.9" cy="205.2" r="17.5"></circle>
                                </g>
                              </svg>
                              <p>Eritrea<br>+(291)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-136" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="EE">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="EE">
                                <path fill="#111" d="M0 0h513v342H0z"></path>
                                <path fill="#368FD8" d="M0 0h513v114H0z"></path>
                                <path fill="#FFF" d="M0 228h513v114H0z"></path>
                              </svg>
                              <p>Estonia<br>+(372)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-138" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="ET">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 22.5 15" class="flag" code="ET">
                                <path fill="#20AA46" d="M0 0h22.5v5H0V0z"></path>
                                <path fill="#E92F3B" d="M0 10h22.5v5H0v-5z"></path>
                                <path fill="#FADF50" d="M0 5h22.5v5H0V5z"></path>
                                <circle fill="#205CCA" cx="11.3" cy="7.5" r="5.2"></circle>
                                <g stroke="#FFDB3D" fill="none">
                                  <path
                                    d="m11.3 8.8-2.1 1.5.8-2.4-2-1.5h2.5l.8-2.3.8 2.3h2.6l-2.1 1.5.8 2.4-2.1-1.5zm-1-2.4h1.9M9.9 7.8l1.3 1m.8-2.6.7 1.8M10 7.9l.6-1.8M11 9l1.6-1.1"
                                    stroke-width="0.5"></path>
                                  <path d="m8.7 3.9 1.1 1.6m4-1.7-1 1.6m-1.5 4.7V12M8.9 8.3 7.1 9m8.4 0-1.8-.7"
                                    stroke-width="0.25"></path>
                                </g>
                              </svg>
                              <p>Ethiopia<br>+(251)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-140" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="FK">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="FK">
                                <path fill="#0052B4" d="M0 0h513v342H0z"></path>
                                <path fill="#FFF"
                                  d="M256 0v30.6l-45.2 25.1H256V115h-59.1l59.1 32.8v22.9h-26.7l-73.5-40.9v40.9h-55.6v-48.6l-87.5 48.6H0v-30.6L45.2 115H0V55.7h59.1L0 22.8V0h26.7l73.5 40.8V0h55.6v48.6L243.3 0z">
                                </path>
                                <path fill="#D80027" d="M144 0h-32v69.3H0v32h112v69.4h32v-69.4h112v-32H144z"></path>
                                <path fill="#0052B4" d="M155.8 115 256 170.7v-15.8L184.2 115z"></path>
                                <path fill="#FFF" d="M155.8 115 256 170.7v-15.8L184.2 115z"></path>
                                <path d="M155.8 115 256 170.7v-15.8L184.2 115zm-84 0L0 154.9v15.8L100.2 115z"
                                  fill="#D80027"></path>
                                <path fill="#0052B4" d="M100.2 55.6 0 0v15.7l71.8 39.9z"></path>
                                <path fill="#FFF" d="M100.2 55.6 0 0v15.7l71.8 39.9z"></path>
                                <path d="M100.2 55.6 0 0v15.7l71.8 39.9zm84 0L256 15.7V0L155.8 55.6z" fill="#D80027">
                                </path>
                                <path fill="#1F8BDE"
                                  d="M312.2 194.2v-90c0-8.5 6.5-15.3 15-15.3h120.5c8.3 0 15 6.8 15 15.3v90c0 75.2-75.2 105.3-75.2 105.3s-75.3-30.1-75.3-105.3z">
                                </path>
                                <path fill="#FFF"
                                  d="M312.2 194.2v-90c0-8.5 6.5-15.3 15-15.3h120.5c8.3 0 15 6.8 15 15.3v90c0 75.2-75.2 105.3-75.2 105.3s-75.3-30.1-75.3-105.3zm79.6 86.3c7.9-4.5 15.9-10 23.2-16.7 20.5-18.5 32.6-41.4 32.6-69.7v-90c0-.3-120.4-.3-120.4-.3v90.3c0 28.3 12.1 51.2 32.6 69.7 8.3 7.5 17.6 13.9 27.6 19 1.4-.6 2.8-1.4 4.4-2.3z">
                                </path>
                                <path fill="#187536"
                                  d="M347.1 193.4c-2.6-7.9 1.7-14.3 10.1-14.3h60.5c8.2 0 12.8 6.3 10.1 14.3l-5.5 16.5c-2.6 7.9-8.9 9.2-15.8 4 0 0 2.6-4.8-19.1-4.8-21.7 0-19.1 4.8-19.1 4.8-6.1 5.7-13.1 4-15.8-4 .1.1-5.4-16.5-5.4-16.5z">
                                </path>
                                <path fill="#FFF"
                                  d="M357.4 179.1c8.1 1.6 17.8-15 30.1-15 13.1 0 21.8 17.1 30.1 15 7.4-1.8 15-22.2 15-30.1 0-16.6-20.2-30.1-45.1-30.1-24.9 0-45.1 13.5-45.1 30.1-.1 8.5 6.6 28.5 15 30.1zm-1.4 91.6c6.2.4 12.5-1.8 17.2-6.5l9-9c2.9-2.9 7.5-2.9 10.4 0l9 9c4.7 4.7 11 6.9 17.1 6.5 5.3-.3 32.5-33.5 25.7-32.6-4.6.6-9.1 2.8-12.7 6.3l-.1.1-9 9c-2.9 2.9-7.5 2.9-10.4 0l-9-9c-8.7-8.8-22.9-8.8-31.7-.1l-.1.1-9 9c-2.9 2.9-7.5 2.9-10.4 0l-9-9c-3.5-3.5-7.8-5.6-12.3-6.3-6.7-1.1 20.1 32.2 25.3 32.5zM322.1 210c2.9-2.9 7.5-2.9 10.4 0l9 9c8.8 8.7 22.9 8.7 31.7 0l9-9c2.9-2.9 7.5-2.9 10.4 0l9 9c8.8 8.7 22.9 8.7 31.7 0l9-9c2.9-2.9 7.5-2.9 10.4 0 0 0 5.5-14.8 2.5-15.9-7.9-2.9-17.2-1.2-23.5 5.2l-.1.1-9 9c-2.9 2.9-7.5 2.9-10.4 0l-9-9c-8.7-8.8-22.9-8.8-31.7-.1l-.1.1-9 9c-2.9 2.9-7.5 2.9-10.4 0l-9-9c-6.2-6.2-15.1-8-22.8-5.5-3.1 1.1 1.9 16.1 1.9 16.1z">
                                </path>
                              </svg>
                              <p>Falkland Islands<br>+(500)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-142" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="FO">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="FO">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#0F61A5"
                                  d="M513 214.5H206.2V342h-87.8V214.5H0v-87.7h118.4V0h87.8v126.8H513V192z"></path>
                                <path fill="#E50E3D" d="M513 149.3V192H183.7v150H141V192H0v-42.7h141V0h42.7v149.3z">
                                </path>
                              </svg>
                              <p>Faroe Islands<br>+(298)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-144" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="FJ">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="FJ">
                                <path fill="#2E52B2" d="M0 0h513v342H0z"></path>
                                <path fill="#FFF"
                                  d="M256 0v22.6l-46.1 30.7H256v64h-46.1L256 148v22.7h-22.6l-73.4-49v49H96v-49l-73.4 49H0V148l46.1-30.7H0v-64h46.1L0 22.6V0h22.6L96 48.9V0h64v48.9L233.4 0z">
                                </path>
                                <g fill="#D80027">
                                  <path d="M144 0h-32v69.3H0v32h112v69.4h32v-69.4h112v-32H144z"></path>
                                  <path d="M0 0v15.1l57.4 38.2H80zm256 0v15.1l-57.4 38.2H176z"></path>
                                  <path
                                    d="M0 0v15.1l57.4 38.2H80zm256 0v15.1l-57.4 38.2H176zM0 170.7v-15.1l57.4-38.3H80zm256 0v-15.1l-57.4-38.3H176z">
                                  </path>
                                </g>
                                <path fill="#F3F3F3"
                                  d="M307.1 127.1v92c0 61.6 80.5 80.5 80.5 80.5s80.4-19 80.4-80.6v-92l-80.5-23-80.4 23.1z">
                                </path>
                                <path fill="#D80027"
                                  d="M468 132.8V98.3H307.1v34.5h69v69h-69v23h69V296c6.9 2.5 11.5 3.5 11.5 3.5s4.6-1.1 11.5-3.5v-71.2h69v-23h-69v-69H468z">
                                </path>
                              </svg>
                              <p>Fiji<br>+(679)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-146" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="FI">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="FI">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#2E52B2" d="M513 129.3V212H203.7v130H121V212H0v-82.7h121V0h82.7v129.3z">
                                </path>
                              </svg>
                              <p>Finland<br>+(358)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-148" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="FR">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="FR">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#0052B4" d="M0 0h171v342H0z"></path>
                                <path fill="#D80027" d="M342 0h171v342H342z"></path>
                              </svg>
                              <p>France<br>+(33)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-150" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="PF">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="PF">
                                <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                <path d="M0 85.337h512v113.775H0zm0 227.551h512v113.775H0z" fill="#D80027"></path>
                                <path fill="#FFDA44"
                                  d="M293.991 256c0 20.982-17.01 33.243-37.992 33.243S218.008 276.982 218.008 256s17.01-37.992 37.992-37.992 37.991 17.01 37.991 37.992z">
                                </path>
                                <path fill="#0052B4"
                                  d="M293.991 256c0 20.982-17.01 37.992-37.992 37.992s-37.992-17.01-37.992-37.992">
                                </path>
                                <path
                                  d="M232.259 246.506h9.498v19h-9.498zm37.988 0h9.498v19h-9.498zm-19-14.247h9.498v33.243h-9.498z"
                                  fill="#D80027"></path>
                              </svg>
                              <p>French Polynesia<br>+(689)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-152" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="GA">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="GA">
                                <path fill="#FFDA44" d="M0 0h513v342H0z"></path>
                                <path fill="#6DA544" d="M0 0h513v114H0z"></path>
                                <path fill="#0052B4" d="M0 228h513v114H0z"></path>
                              </svg>
                              <p>Gabon<br>+(241)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-154" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="GM">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="GM">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#cf0d19" d="M0 0h513v100H0z"></path>
                                <path fill="#0052B4" d="M0 121h513v100H0z"></path>
                                <path fill="#1a7e25" d="M0 242h513v100H0z"></path>
                              </svg>
                              <p>Gambia<br>+(220)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-156" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="GE">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 22.5 15" class="flag" code="GE">
                                <path fill="#FFF" d="M.8 0h21v15H.8V0z"></path>
                                <path fill="#eb000e" d="M9.8 6H0v3h9.8v6h3V9h9.8V6h-9.8V0h-3v6z"></path>
                                <path fill="#eb000e"
                                  d="m17.3 2.7-.2-1.2h1l-.2 1.2 1.2-.2v1l-1.2-.2.2 1.2h-1l.2-1.2-1.2.2v-1l1.2.2zm-12.7 0-.2-1.2h1l-.2 1.2 1.2-.2v1l-1.2-.2.2 1.2h-1l.2-1.2-1.2.2v-1l1.2.2zm0 9-.2-1.2h1l-.2 1.2 1.2-.2v1l-1.2-.2.2 1.2h-1l.2-1.2-1.2.2v-1l1.2.2zm12.7 0-.2-1.2h1l-.2 1.2 1.2-.2v1l-1.2-.2.2 1.2h-1l.2-1.2-1.2.2v-1l1.2.2z">
                                </path>
                              </svg>
                              <p>Georgia<br>+(995)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-158" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="DE">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="DE">
                                <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                <path d="M0 0h513v114H0z"></path>
                                <path fill="#FFDA44" d="M0 228h513v114H0z"></path>
                              </svg>
                              <p>Germany<br>+(49)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-160" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="GH">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="GH">
                                <path fill="#FFDA44" d="M0 0h513v342H0z"></path>
                                <path fill="#D80027" d="M0 0h513v114H0z"></path>
                                <path fill="#496E2D" d="M0 228h513v114H0z"></path>
                                <path
                                  d="m255.9 113.8 14.1 43.4 40.4 3.2-37 26.9 19.5 40.3-37-26.9-37 26.9 14.1-43.5-36.9-26.9h45.7z">
                                </path>
                              </svg>
                              <p>Ghana<br>+(233)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-162" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="GI">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="GI">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#D80027" d="M0 230h513v112H0z"></path>
                                <path fill="#D80027" stroke="#000" stroke-miterlimit="10"
                                  d="M363.1 131.8V99.1H374V77.3h-21.9v10.9h-21.8V77.3h-21.8v21.8h10.9v32.7h-21.8V55.5h10.9V33.7h-21.8v10.9h-10.9V33.7H254v10.9h-10.9V33.7h-21.8v21.8h10.9v76.3h-21.8V99.1h10.9V77.3h-21.8v10.9h-21.8V77.3h-21.8v21.8h10.9v32.7H145V219h239.9v-87.2z">
                                </path>
                                <path fill="#FFDA44" stroke="#000" stroke-miterlimit="10"
                                  d="m264.9 235.5-24.2 18.2 19.1 14.3v31.3h-23.2v9h23v7.9h-23v9.3H270V268l19.1-14.3-24.2-18.2zm0 25.3-10.1-7.1 10.1-7.1 10.1 7.1-10.1 7.1z">
                                </path>
                                <path
                                  d="M239.6 209.7v-27.9s.1-22.3 25-22.3c24.8 0 25.7 22 25.7 22v28.2h-50.7zm-69.1 0v-24.3s.1-18.7 19.6-18.7 20.2 18.4 20.2 18.4v24.5h-39.8z">
                                </path>
                                <path
                                  d="M169.1 209.7v-24.3s.1-18.7 19.6-18.7 20.2 18.4 20.2 18.4v24.5h-39.8zm151.8 0v-24.3s.1-18.7 19.6-18.7 20.2 18.4 20.2 18.4v24.5h-39.8zm8.4-77.7v-15.7s.1-12.1 11.3-12.1c11.3 0 11.7 11.9 11.7 11.9V132h-23zm-78.8 0v-23.7s.1-18.3 14.3-18.3c14.2 0 14.7 18 14.7 18v24h-29zm-73 0v-15.7s.1-12.1 11.3-12.1 11.7 11.9 11.7 11.9V132h-23z">
                                </path>
                              </svg>
                              <p>Gibraltar<br>+(350)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-164" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="GR">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="GR">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <g fill="#0d5eaf">
                                  <path d="M0 0h513v38H0zm0 76h513v38H0zm0 76h513v38H0zm0 76h513v38H0zm0 76h513v38H0z">
                                  </path>
                                  <path d="M0 0h190v190H0z"></path>
                                </g>
                                <g fill="#FFF">
                                  <path d="M0 76h190v38H0z"></path>
                                  <path d="M76 0h38v190H76z"></path>
                                </g>
                              </svg>
                              <p>Greece<br>+(30)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-166" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="GL">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="GL">
                                <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                <path fill="#FFF" d="M513 0v171H0V0z"></path>
                                <circle fill="#FFF" cx="185.8" cy="171.2" r="117.8"></circle>
                                <path fill="#D80027"
                                  d="M68 171c0-65.1 52.8-117.8 117.8-117.8 65.1 0 117.8 52.8 117.8 117.8"></path>
                              </svg>
                              <p>Greenland<br>+(299)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-168" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="GD">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="GD">
                                <path fill="#c60a0a" d="M0 0h513v342H0z"></path>
                                <path fill="#3E8446" d="m256.5 170.7-212 126.1V44.5z"></path>
                                <path d="m256.5 170.7 211 126.1h-423zm211-126.2-211 126.2-212-126.2z" fill="#FFDA44">
                                </path>
                                <path fill="#3E8446" d="M467.5 44.5v252.3l-211-126.1z"></path>
                                <path
                                  d="m256.5 10.4 2.8 10.2H270l-8.6 6.3 3.3 10.2-8.2-6.3-9.2 6.3 3.3-10.2-8.6-6.3h10.7zm-86.4 0 3.3 10.2h10.7l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zm171.8 0 3.3 10.2H356l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zm-85.4 293.8 2.8 10.2H270l-8.6 6.3 3.3 10.2-8.2-6.3-9.2 6.3 3.3-10.2-8.6-6.3h10.7zm-86.4 0 3.3 10.2h10.7l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zm171.8 0 3.3 10.2H356l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7z"
                                  fill="#FFDA44"></path>
                                <circle fill="#c60a0a" cx="244.5" cy="170.7" r="76.2"></circle>
                                <path fill="#FFDA44"
                                  d="m244.5 110.1 13.6 41.8h44l-35.6 25.8 13.6 41.8-35.6-25.8-35.5 25.8 13.6-41.8-35.6-25.8h44zm-136.8 57.7c4.4 6.9 2.3 16.1-4.6 20.5s-16.1 2.3-20.5-4.6c-7.9-12.5-3.3-33-3.3-33s20.4 4.6 28.4 17.1z">
                                </path>
                                <circle fill="#A2001D" cx="99.1" cy="182.1" r="7.4"></circle>
                              </svg>
                              <p>Grenada<br>+(1-473)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-170" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="GU">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="GU">
                                <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                <path fill="#0052B4" d="M11.1 11.1h489.7v319.1H11.1z"></path>
                                <path fill="#7DBEF1"
                                  d="M256 285.3s76.4-51.3 76.4-114.6S256 56 256 56s-76.4 51.3-76.4 114.6S256 285.3 256 285.3z">
                                </path>
                                <path fill="#1C8AE6" d="M179.8 180.7h152.6l-29.3 64.9h-95.2z"></path>
                                <path fill="#FFF042"
                                  d="M192.3 205.9s40.5 38.2 51 38.2c12.4 0 12.6-18.4 25.5-25.5 20.2-11.1 51-12.7 51-12.7L297 248.7l-41 36.6-46.8-39.7-16.9-39.7z">
                                </path>
                                <path fill="#259C7B"
                                  d="m256 157.5-22.5 15.6 7.9-26.2-21.8-16.5 27.4-.5 9-25.9 9 25.9 27.4.5-21.8 16.6 7.9 26.2-22.5-15.7z">
                                </path>
                                <path fill="#8E5715"
                                  d="M249.7 144.6c-.9 9.2-1.5 18.4-1.7 27.6-.3 11.9.3 20.7 2 26 2.2 6.6 7.2 12.9 14.2 18.9 5.3 4.6 10.6 8.1 14.2 10.1 3.1 1.7 7 .6 8.7-2.4 1.7-3.1.6-7-2.4-8.7-4.3-2.5-8.4-5.4-12.2-8.7-5.4-4.6-9.1-9.2-10.4-13.3-1.1-3.4-1.6-11.3-1.4-21.7.2-8.9.8-17.8 1.7-26.6.4-3.5-2.2-6.6-5.7-7-3.6-.3-6.7 2.3-7 5.8z">
                                </path>
                                <path fill="#FFF" d="m217.8 170.7 25.5 38.2h-25.5v-38.2z"></path>
                                <path fill="none" stroke="#D80027" stroke-width="12" stroke-miterlimit="10"
                                  d="M256 285.3s76.4-51.3 76.4-114.6S256 56 256 56s-76.4 51.3-76.4 114.6S256 285.3 256 285.3z">
                                </path>
                              </svg>
                              <p>Guam<br>+(1-671)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-172" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="GT">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="GT">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path d="M0 0h171v342H0zm342 0h171v342H342z" fill="#338AF3"></path>
                                <circle fill="#DCC26D" cx="256" cy="155.8" r="25.5"></circle>
                                <path fill="#628A40"
                                  d="M194.2 155.9c0 22.1 11.8 42.5 30.8 53.5 5.9 3.4 13.5 1.4 16.9-4.5 3.4-5.9 1.4-13.5-4.5-16.9-11.5-6.6-18.5-18.9-18.5-32.1 0-6.8-5.5-12.4-12.4-12.4s-12.3 5.5-12.3 12.4zm95.1 52.1c17.8-11.4 28.6-31 28.5-52.1 0-6.8-5.5-12.4-12.4-12.4-6.8 0-12.4 5.5-12.4 12.4 0 12.7-6.5 24.5-17.1 31.3-5.8 3.6-7.7 11.2-4.1 17 3.6 5.8 11.2 7.7 17 4.1.2-.1.3-.2.5-.3z">
                                </path>
                              </svg>
                              <p>Guatemala<br>+(502)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-174" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="GG">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="GG">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#D80027" d="M308 0H204v118.7H0v104h204V342h104V222.7h205v-104H308z"></path>
                                <path fill="#FFDA44"
                                  d="m368.6 188 26 17.3V136l-26 17.3h-95.3V58.1l17.3-26h-69.2l17.3 26v95.2h-95.3l-26-17.3v69.3l26-17.3h95.3v95.2l-17.3 26h69.2l-17.3-26V188z">
                                </path>
                              </svg>
                              <p>Guernsey<br>+(44-1481)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-176" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="GN">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="GN">
                                <path fill="#FFDA44" d="M0 0h512v342H0z"></path>
                                <path fill="#6DA544" d="M342 0h171v342H342z"></path>
                                <path fill="#D80027" d="M0 0h171v342H0z"></path>
                              </svg>
                              <p>Guinea<br>+(224)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-178" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="GW">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="GW">
                                <path fill="#6DA544" d="M0 0h512v342H0z"></path>
                                <path fill="#FFDA44" d="M0 0h512v171H0z"></path>
                                <path fill="#D80027" d="M0 0h182v342H0z"></path>
                                <path
                                  d="m98.3 109.8 15.1 46.5h48.9L122.8 185l15.1 46.5-39.6-28.7-39.5 28.7L73.9 185l-39.6-28.7h48.9z">
                                </path>
                              </svg>
                              <p>Guinea-Bissau<br>+(245)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-180" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="GY">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 900 600" class="flag" code="GY">
                                <path fill="#009E49" d="M0 0h900v600H0V0z"></path>
                                <path fill="#FFF" d="m0 0 947 300L0 600V0z"></path>
                                <path fill="#FFD00D" d="M0 26.1 870 300 0 573.9V26.1z"></path>
                                <path fill="#2D2D2D" d="m0 0 450 300L0 600V0z"></path>
                                <path fill="#D3132F" d="m0 35 397.5 265L0 565V35z"></path>
                              </svg>
                              <p>Guyana<br>+(592)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-182" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="HT">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="HT">
                                <path fill="#A2001D" d="M0 0h513v172H0z"></path>
                                <path fill="#0052B4" d="M0 172h513v172H0z"></path>
                                <path fill="#FFF" d="m381.4 251.5-110.7-13.8-110.8 13.8V85.4h221.5z"></path>
                                <circle fill="#0052B4" cx="270.7" cy="182.3" r="55.4"></circle>
                                <circle fill="#A2001D" cx="270.7" cy="182.3" r="27.7"></circle>
                                <path fill="#6DA544" d="M229.1 113.1h83.1l-41.5 41.5z"></path>
                                <path fill="#FFDA44" d="M256.8 140.8h27.7v83h-27.7z"></path>
                                <path fill="#6DA544" d="M314.9 215.5h-88.5l-66.5 36h221.5z"></path>
                              </svg>
                              <p>Haiti<br>+(509)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-184" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="HN">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="HN">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path
                                  d="M0 0h513v114H0zm0 228h513v114H0zm203.5-110.1 6.7 16.6 17.6 1-14 10.9 4.7 17.7-15-9.9-15 9.9 4.7-17.7-14-10.9 17.6-1zm105 0 6.7 16.6 17.6 1-14 10.9 4.7 17.7-15-9.9-15 9.9 4.7-17.7-14-10.9 17.6-1zM256 147.6l6.7 16.6 17.6 1-14 10.9 4.7 17.7-15-9.9-15 9.9 4.7-17.7-14-10.9 17.6-1zm-52.5 29.7 6.7 16.6 17.6 1-14 10.9 4.7 17.6-15-9.9-15 9.9 4.7-17.6-14-10.9 17.6-1zm105 0 6.7 16.6 17.6 1-14 10.9 4.7 17.6-15-9.9-15 9.9 4.7-17.6-14-10.9 17.6-1z"
                                  fill="#338AF3"></path>
                              </svg>
                              <p>Honduras<br>+(504)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-186" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="HK">
                            <div class="WorldwidePhoneInput_item__54St7"><svg viewBox="0 0.5 21 14"
                                xmlns="http://www.w3.org/2000/svg" class="flag" code="HK">
                                <g fill="none" fill-rule="evenodd">
                                  <path fill="#FFF" d="M0 0h21v15H0z"></path>
                                  <path fill="#ee1c25" d="M0 0h21v15H0z"></path>
                                  <path
                                    d="M12 7.19c-.798-.5-1 .409-1 0 0-.828.895-1.5 2-1.5s2 .672 2 1.5c-.949 0-1.044.5-1.5.5-.56 0-.702 0-1.5-.5zM13.25 7a.25.25 0 1 0 0-.5.25.25 0 0 0 0 .5zm-1.81 1.962c.228-.913-.698-.824-.31-.95.788-.257 1.703.387 2.045 1.438.341 1.05-.021 2.11-.809 2.366-.293-.903-.798-.838-.939-1.272-.173-.533-.217-.668.012-1.582zm.566 1.13a.25.25 0 1 0 .476-.154.25.25 0 0 0-.476.154zM9.58 8.977c.94-.065.57-.919.81-.588.486.67.157 1.74-.737 2.389-.894.65-2.013.632-2.5-.038.768-.558.55-1.018.92-1.286.453-.33.568-.413 1.507-.477zm-.899.888a.25.25 0 1 0 .294.405.25.25 0 0 0-.294-.405zm.312-2.652c.351.874 1.049.258.809.588-.487.67-1.606.687-2.5.038-.894-.65-1.223-1.719-.736-2.39.767.559 1.138.21 1.507.478.453.33.568.413.92 1.286zm-1.124-.58a.25.25 0 1 0-.293.404.25.25 0 0 0 .293-.404zm2.619-.524c-.722.605.08 1.078-.309.951-.788-.256-1.15-1.315-.809-2.365.342-1.05 1.257-1.695 2.045-1.439-.293.903.153 1.147.012 1.581-.173.533-.217.668-.939 1.272zm.205-1.247a.25.25 0 1 0-.475-.155.25.25 0 0 0 .475.155z"
                                    fill="#FFF"></path>
                                </g>
                              </svg>
                              <p>Hong Kong<br>+(852)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-188" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="HU">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="HU">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#D80027" d="M0 0h513v114H0z"></path>
                                <path fill="#6DA544" d="M0 228h513v114H0z"></path>
                              </svg>
                              <p>Hungary<br>+(36)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-190" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="IS">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="IS">
                                <path fill="#0052B4" d="M0 0h513v342H0z"></path>
                                <path fill="#FFF"
                                  d="M513 210.6H202.2v130.7h-79.8V210.6H0v-79.8h122.4V0h79.8v130.8H513v18.5l-1 42.7z">
                                </path>
                                <path fill="#D80027" d="M513 149.3V192H183.7v149.3H141V192H0v-42.7h141V0h42.7v149.3z">
                                </path>
                              </svg>
                              <p>Iceland<br>+(354)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-192" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="IN">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="IN">
                                <path fill="#181A93" d="M17.3 0h478.4v342H17.3V0z"></path>
                                <path fill="#FFA44A" d="M0 0h513v114H0V0z"></path>
                                <path fill="#1A9F0B" d="M0 228h513v114H0V228z"></path>
                                <path fill="#FFF" d="M0 114h513v114H0V114z"></path>
                                <circle fill="#FFF" cx="256.5" cy="171" r="34.2"></circle>
                                <path fill="#181A93"
                                  d="M256.5 216.6c-25.1 0-45.6-20.5-45.6-45.6s20.5-45.6 45.6-45.6 45.6 20.5 45.6 45.6-20.5 45.6-45.6 45.6zm0-11.4c18.2 0 34.2-16 34.2-34.2s-15.9-34.2-34.2-34.2-34.2 16-34.2 34.2 16 34.2 34.2 34.2z">
                                </path>
                                <circle fill="#181A93" cx="256.5" cy="171" r="22.8"></circle>
                              </svg>
                              <p>India<br>+(91)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-194" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="ID">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="ID">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#E00" d="M0 0h513v171H0z"></path>
                              </svg>
                              <p>Indonesia<br>+(62)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-196" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="IR">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="IR">
                                <path fill="#FFF" d="M0 0h512v342H0z"></path>
                                <path fill="#6DA544" d="M0 0h513v114H0z"></path>
                                <path
                                  d="M0 227.9h513v114H0zm278.8-93.1c.1 2 8.7 26.2 4.4 39.4-6.6 20.3-15.8 21.8-19.8 24.5V134l-6.9-4.2-6.9 4.2v64.7c-4-2.7-12.4-2.4-19.8-24.5-4.3-12.7 5.7-37.3 5.8-39.2 0 0-9.5 8.1-15.8 24-5.9 14.8 1.9 49.6 29.5 54.8 2.3.4 4.7 5.6 7.2 5.6 2.1 0 4.1-5.2 6-5.5 28.4-4.6 35-41.7 29.9-55.6-5.4-14.6-13.6-23.5-13.6-23.5z"
                                  fill="#D80027"></path>
                                <path
                                  d="M44.6 98.9h22.3v24.4H44.6zM0 98.9h22.3v24.4H0zm89.2 0h22.3v24.4H89.2zm44.6 0h22.3v24.4h-22.3zm44.6 0h22.3v24.4h-22.3zm44.6 0h22.3v24.4H223zm44.7 0H290v24.4h-22.3zm44.6 0h22.3v24.4h-22.3zm44.6 0h22.3v24.4h-22.3zm44.6 0h22.3v24.4h-22.3zm44.6 0h22.3v24.4h-22.3zm44.6 0H513v24.4h-22.3zm-446.1 118h22.3v25.5H44.6zm-44.6 0h22.3v25.5H0zm89.2 0h22.3v25.5H89.2zm44.6 0h22.3v25.5h-22.3zm44.6 0h22.3v25.5h-22.3zm44.6 0h22.3v25.5H223zm44.7 0H290v25.5h-22.3zm44.6 0h22.3v25.5h-22.3zm44.6 0h22.3v25.5h-22.3zm44.6 0h22.3v25.5h-22.3zm44.6 0h22.3v25.5h-22.3zm44.6 0H513v25.5h-22.3z"
                                  fill="#FFF" opacity="0.5"></path>
                              </svg>
                              <p>Iran<br>+(98)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-198" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="IQ">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="IQ">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#CE1126" d="M0 0h513v114H0z"></path>
                                <path d="M0 228h513v114H0z"></path>
                                <path
                                  d="M219.2 160.7h-29.3c1.5-5.7 6.6-9.9 12.8-9.9v-19.9c-18.3 0-33.1 14.9-33.1 33.1v16.5h49.6c1.8 0 3.3 1.5 3.3 3.3v6.6h-66.2v19.9h86.1v-26.5c0-12.7-10.4-23.1-23.2-23.1zm49.6 29.8v-59.6H249v79.5h33.1v-19.9zm66.2 0v-59.6h-19.8v59.6h-6.6v-19.8h-19.9v39.7h59.6v-19.9z"
                                  fill="#547C31"></path>
                              </svg>
                              <p>Iraq<br>+(964)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-200" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="IE">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="IE">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#6DA544" d="M0 0h171v342H0z"></path>
                                <path fill="#FF9811" d="M342 0h171v342H342z"></path>
                              </svg>
                              <p>Ireland<br>+(353)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-202" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="IM">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="IM">
                                <path fill="#E52D42" d="M0 0h513v342H0z"></path>
                                <path fill="#FFF"
                                  d="M393.3 68.2h-45.8l-33.8 80.2-34.4-22.9s-24.7-59.1-34.4-68.2c-9.7-9.7-18.7-.6-48.9 7.8-29.6 8.4-30.8 18.7-42.2 18.7-4.8 0-19.9-17.5-27.7-22.3-12.1-7.8-16.9-4.2-13.9 7.2 1.2 4.8 10.9 10.9 16.9 19.9 7.8 11.5 12.7 25.9 12.7 25.9s10.9-10.3 16.9-12.1c9-2.4 19.3 1.8 31.4 0 15.1-2.4 31.4-10.9 31.4-10.9l4.2 43.4s-54.3 50.7-49.5 70.6 56.1 44.6 68.2 62.7c12.1 17.5-7.2 24.1-7.2 32.6s-1.8 19.9 7.2 16.3c9-3.6 10.3-18.1 18.7-31.4 6-9 10.3-13.9 11.5-17.5 1.8-9-23.5-32-37.4-48.9-6.6-7.8-19.9-18.7-19.9-18.7l39.2-29.6s67.6 27.7 82.6 18.7c15.1-9 19.3-98.3 19.3-98.3l47-11.5-12.1-11.7z">
                                </path>
                                <path fill="#F8DD4E"
                                  d="M279.3 262.4c-6 0-11.5-4.8-11.5-11.5s4.8-11.5 11.5-11.5c6 0 11.5 4.8 11.5 11.5s-5.5 11.5-11.5 11.5zm45.8-182.8c-6 0-11.5-4.8-11.5-11.5s4.8-11.5 11.5-11.5c6 0 11.5 4.8 11.5 11.5s-5.5 11.5-11.5 11.5zm0 91.1c-6 0-11.5-4.8-11.5-11.5 0-6 4.8-11.5 11.5-11.5 6 0 11.5 4.8 11.5 11.5-.6 6.7-5.5 11.5-11.5 11.5zm-136.9 45.8c-6 0-11.5-4.8-11.5-11.5 0-6 4.8-11.5 11.5-11.5 6.6 0 11.5 4.8 11.5 11.5s-5.5 11.5-11.5 11.5zm45.2-136.9c-6 0-11.5-4.8-11.5-11.5s4.8-11.5 11.5-11.5c6 0 11.5 4.8 11.5 11.5s-4.8 11.5-11.5 11.5zm22.9 91.1c-6 0-11.5-10.3-11.5-22.9s4.8-22.9 11.5-22.9c6 0 11.5 10.3 11.5 22.9s-4.8 22.9-11.5 22.9zm-114-45.2c-6 0-11.5-4.8-11.5-11.5 0-6.6 4.8-11.5 11.5-11.5 6.6 0 11.5 4.8 11.5 11.5 0 6.6-4.8 11.5-11.5 11.5z">
                                </path>
                              </svg>
                              <p>Isle of Man<br>+(44-1624)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-204" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="IL">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="IL">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path
                                  d="M340.6 122.4h-56.1l-28-48.6-28 48.6h-56.1l28 48.6-28 48.6h56.1l28 48.6 28-48.6h56.1l-28-48.6 28-48.6zM293.2 171 276 204.2h-38.9L219.8 171l17.2-33.2h38.9l17.3 33.2zm-36.7-71.8 11.9 23.3h-23.9l12-23.3zm-58.3 38.6h23.9l-10.8 21-13.1-21zm0 66.4 13-22.1 11.9 22.1h-24.9zm58.3 37.5-11.9-22.1h23.9l-12 22.1zm59.4-37.5h-25l11.9-22.1 13.1 22.1zm-26.1-66.4h26.1l-13 22.1-13.1-22.1zM0 21.3h512V64H0zm0 256h512V320H0z"
                                  fill="#2E52B2"></path>
                              </svg>
                              <p>Israel<br>+(972)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-206" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="IT">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="IT">
                                <path fill="#FFF" d="M342 0H0v341.3h512V0z"></path>
                                <path fill="#6DA544" d="M0 0h171v342H0z"></path>
                                <path fill="#D80027" d="M342 0h171v342H342z"></path>
                              </svg>
                              <p>Italy<br>+(39)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-208" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="CI">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="CI">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#009e60" d="M342 0h171v342H342z"></path>
                                <path fill="#f77f00" d="M0 0h171v342H0z"></path>
                              </svg>
                              <p>Ivory Coast<br>+(225)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-210" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="JM">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="JM">
                                <path fill="#6DA544" d="M0 0h513v342H0z"></path>
                                <path d="M215.9 171 0 314.6V26.8zM513 26.8v287.8L296.1 171z"></path>
                                <path fill="#0052B4"
                                  d="M513 26.8 296.1 171 513 314.6V342h-41.1L256 197.4 40.1 342H0v-27.4L215.9 171 0 26.8V0h40.1L256 143.9 471.9 0H513z">
                                </path>
                                <path fill="#FFDA44"
                                  d="M513 26.8 296.1 171 513 314.6V342h-41.1L256 197.4 40.1 342H0v-27.4L215.9 171 0 26.8V0h40.1L256 143.9 471.9 0H513z">
                                </path>
                              </svg>
                              <p>Jamaica<br>+(1-876)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-212" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="JP">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="JP">
                                <path fill="#FFF" d="M0 0h512v342H0z"></path>
                                <circle fill="#D80027" cx="256.5" cy="171" r="96"></circle>
                              </svg>
                              <p>Japan<br>+(81)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-214" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="JE">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="JE">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#D80027"
                                  d="M301.8 171 513 30.2V0h-45.3L256.5 140.8 45.3 0H0v30.2L211.2 171 0 311.8V342h45.3l211.2-140.8L467.7 342H513v-30.2z">
                                </path>
                                <path fill="#FFDA44"
                                  d="m233.7 44.6 22.3 5.6 22.3-5.6 4-20.9-14.9 6.5L256 14.8l-11.4 15.4-14.9-6.5z">
                                </path>
                                <path fill="#D80027"
                                  d="M233.7 44.6s-4 12.9-4 29.9c0 27.9 26.3 41.3 26.3 41.3s26.3-15.5 26.3-41.3c0-15.4-4-29.9-4-29.9s-8.1-5-22.3-5-22.3 5-22.3 5z">
                                </path>
                              </svg>
                              <p>Jersey<br>+(44-1534)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-216" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="JO">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="JO">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path d="M0 0h513v114H0z"></path>
                                <path fill="#6DA544" d="M0 228h513v114H0z"></path>
                                <path fill="#D80027" d="M256.5 170.7 0 341.3V0z"></path>
                                <path fill="#FFF"
                                  d="m77.9 139.5 7.9 16.4 17.8-4.1-8 16.5 14.3 11.3-17.8 4 .1 18.3-14.3-11.5-14.2 11.5v-18.3l-17.8-4 14.3-11.3-7.9-16.5 17.7 4.1z">
                                </path>
                              </svg>
                              <p>Jordan<br>+(962)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-218" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="KZ">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="KZ">
                                <path fill="#36B6CC" d="M0 0h513v342H0V0z"></path>
                                <circle fill="#FFD400" cx="256.5" cy="170.9" r="68.4"></circle>
                                <path fill="#FFD400"
                                  d="m256.5 251.5-27.9 41.7-7.1-49.7-43.2 25.5 15.2-47.8-50 4.2 34.4-36.5-46.9-18 46.8-18-34.4-36.5 50 4.2-15.2-47.8 43.2 25.4 7.1-49.7 27.9 41.7 27.9-41.7 7.1 49.7 43.2-25.4-15.2 47.8 50-4.2-34.3 36.6 46.8 17.9-46.8 18 34.4 36.5-50-4.2 15.2 47.8-43.2-25.4-7.1 49.7c0-.1-27.9-41.8-27.9-41.8zm0-.8c44.1 0 79.9-35.8 79.9-79.9S300.6 91 256.5 91s-79.9 35.8-79.9 79.9 35.8 79.8 79.9 79.8zM22.8 28.3c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6V28.3zm0 45.7c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6V74zm0 45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0 45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0 45.7c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0 45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0 45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm22.8-22.8c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0-45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7V245c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0-45.7c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6V188zm0-45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0-45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6V96.8zm0-45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6V51.2z">
                                </path>
                              </svg>
                              <p>Kazakhstan<br>+(7)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-220" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="KE">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="KE">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path d="M0 0h512v90.579H0z"></path>
                                <path fill="#496E2D" d="M0 251h513v91H0z"></path>
                                <path fill="#A2001D" d="M0 114h513v114H0z"></path>
                                <g fill="#FFF">
                                  <path
                                    d="m323.3 54.5-25.6-11.8L256 137l-41.7-94.3-25.6 11.8 51.8 116.2-51.8 116.2 25.6 11.8 41.7-94.4 41.7 94.4 25.6-11.8-51.8-116.2z">
                                  </path>
                                  <path
                                    d="M273.4 65.6c-9.9-10.8-17.4-17-17.4-17s-7.5 6.2-17.4 17v210.1c9.9 10.8 17.4 17 17.4 17s7.5-6.2 17.4-17V65.6z">
                                  </path>
                                </g>
                                <path
                                  d="M209 105.9v129.5c10.5 18.5 23.3 33.7 32.9 43.8V62.1c-9.6 10.1-22.4 25.3-32.9 43.8zm94 0c-10.5-18.5-23.3-33.7-32.9-43.8v217.2c9.6-10.1 22.4-25.3 32.9-43.8V105.9z"
                                  fill="#A2001D"></path>
                                <path
                                  d="M303 105.9v129.5c10.6-18.8 18.8-41 18.8-64.8s-8.2-45.9-18.8-64.7zm-94 0v129.5c-10.6-18.8-18.8-41-18.8-64.8s8.2-45.9 18.8-64.7z">
                                </path>
                              </svg>
                              <p>Kenya<br>+(254)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-222" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="KI">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 450 300" class="flag" code="KI">
                                <path fill="#CE1126" d="M0 0h450v300H0V0z"></path>
                                <g fill="#FCD116">
                                  <circle cx="227.6" cy="161.2" r="56.2"></circle>
                                  <path
                                    d="m254.1 73.4-23.7 26 28.6 6.5zm-51.5.2-4.8 33.1 28.5-8zm94.3 26.7-34.7 8.5 20.1 23.7zm-138.3-1.8 15.5 32.7 20.2-22.7zm159 45.3-34.4-9.9 5.6 29.5zm-182-2.6 31.9 19.8 5.2-27.7z">
                                  </path>
                                </g>
                                <path fill="#003F87" d="M0 175h450v125H0V175z"></path>
                                <path fill="#FFF"
                                  d="M0 267c15 0 30 13 45 13s30-13 45-13 30 13 45 13 30-13 45-13 30 13 45 13 30-13 45-13 30 13 45 13 30-13 45-13 30 13 45 13 30-13 45-13v-21c-15 0-30 13-45 13s-30-13-45-13-30 13-45 13-30-13-45-13-30 13-45 13-30-13-45-13-30 13-45 13-30-13-45-13-30 13-45 13-30-13-45-13v21zm0-43c15 0 30 13 45 13s30-13 45-13 30 13 45 13 30-13 45-13 30 13 45 13 30-13 45-13 30 13 45 13 30-13 45-13 30 13 45 13 30-13 45-13v-21c-15 0-30 13-45 13s-30-13-45-13-30 13-45 13-30-13-45-13-30 13-45 13-30-13-45-13-30 13-45 13-30-13-45-13-30 13-45 13-30-13-45-13v21zm0-43c15 0 30 13 45 13s30-13 45-13 30 13 45 13 30-13 45-13 30 13 45 13 30-13 45-13 30 13 45 13 30-13 45-13 30 13 45 13 30-13 45-13v-21c-15 0-30 13-45 13s-30-13-45-13-30 13-45 13-30-13-45-13-30 13-45 13-30-13-45-13-30 13-45 13-30-13-45-13-30 13-45 13-30-13-45-13v21z">
                                </path>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#FCD116"
                                  d="m183.2 48.3-1.1-5.3 22.4-3.7s-30.1-7.1-40-10.7c-14.3-5.1-16.3-12.1-16.3-12.1s44.7 11 64.8 11c4.3 0 12.8 10.7 12.8 10.7s14.8-14.9 21.9-15.4c32.1-2.3 66.6-6.4 66.6-6.4s-10 6.7-16 8.5c-16.2 4.9-50.6 11.7-50.6 11.7l-4.8 7.5H277l-14.4 4.3 7.4 6.9s-7.8-4.1-18.1-2.1c-7.1 1.3-15.4 6-22.9 8-18.7 4.8-29.9-12.8-29.9-12.8l-15.9-.1z">
                                </path>
                              </svg>
                              <p>Kiribati<br>+(686)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-224" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="XK">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 341.33" class="flag" code="XK">
                                <path fill="#0052B4" d="M0 0h512v341.34H0z"></path>
                                <path
                                  d="m220.72 42.63 7.95 16.11 17.77 2.58-12.86 12.54 3.04 17.7-15.9-8.36-15.9 8.36 3.03-17.7-12.86-12.54 17.78-2.58zm70.56-.06 7.95 16.1 17.78 2.59-12.86 12.53 3.03 17.71-15.9-8.36-15.9 8.36 3.04-17.71-12.86-12.53 17.77-2.59zm62.08 11.36 7.95 16.11 17.77 2.58-12.86 12.54 3.04 17.7-15.9-8.35-15.9 8.35 3.04-17.7-12.87-12.54 17.78-2.58zm63.01 18.3 7.95 16.11 17.77 2.59-12.86 12.53 3.04 17.71-15.9-8.36-15.9 8.36 3.03-17.71-12.86-12.53 17.78-2.59zm-257.73-18.3 7.95 16.11 17.78 2.58-12.87 12.54 3.04 17.7-15.9-8.35-15.9 8.35 3.04-17.7-12.86-12.54 17.77-2.58zm-63.01 18.3 7.95 16.11 17.78 2.59-12.86 12.53 3.03 17.71-15.9-8.36-15.9 8.36 3.04-17.71-12.86-12.53 17.77-2.59z"
                                  fill="#FFF"></path>
                                <path fill="#FFDA44"
                                  d="m217.53 259.33-27.22-13.61-27.22-54.43h27.22l27.22-27.22 13.61-27.22 27.22-13.61 13.61 13.61 27.22 13.61v13.61l13.61 13.61 40.83 27.22L340 245.73l-40.83 40.83-13.61-27.22-40.83 27.22v27.22l-13.61-13.61-13.59-40.84z">
                                </path>
                              </svg>
                              <p>Kosovo<br>+(383)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-226" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="KW">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="KW">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#6DA544" d="M0 0h513v114H0z"></path>
                                <path fill="#D80027" d="M0 228h513v114H0z"></path>
                                <path d="M167 227.6 0 341.3V0l167 113.8z"></path>
                              </svg>
                              <p>Kuwait<br>+(965)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-228" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="KG">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 342" class="flag" code="KG">
                                <g fill="#D80027">
                                  <path d="M0 0h513v342H0z"></path>
                                  <circle cx="256" cy="170.7" r="170.7"></circle>
                                </g>
                                <path fill="#FFDA44"
                                  d="M382.4 170.7 330.8 195l27.5 50-56.1-10.7-7.1 56.6-39.1-41.7-39.1 41.7-7.1-56.6-56.1 10.7 27.5-50-51.6-24.3 51.6-24.3-27.5-50.1 56.1 10.8 7.1-56.7L256 92.1l39.1-41.7 7.1 56.7 56.1-10.8-27.5 50.1z">
                                </path>
                                <circle fill="#D80027" cx="257.4" cy="170.7" r="71.6"></circle>
                                <path
                                  d="M214.2 170.7c-2.1 0-4.1.1-6.2.3.1 12 4.4 22.9 11.6 31.5 3.8-10.3 9.5-19.6 16.7-27.7-6.9-2.7-14.3-4.1-22.1-4.1zm26.6 46.5c5.2 1.9 10.8 2.9 16.6 2.9 5.8 0 11.4-1 16.6-2.9-2.8-11.1-8.7-21-16.6-28.8-7.9 7.8-13.8 17.7-16.6 28.8zm59.4-71.2c-8.5-14.8-24.5-24.7-42.8-24.7-18.3 0-34.2 9.9-42.8 24.7 15.6.1 30.2 4.3 42.8 11.6 12.6-7.3 27.2-11.6 42.8-11.6zm-21.7 28.8c7.2 8 12.9 17.4 16.7 27.7 7.2-8.5 11.5-19.5 11.6-31.5-2-.2-4.1-.3-6.2-.3-7.7 0-15.2 1.4-22.1 4.1z"
                                  fill="#FFDA44"></path>
                              </svg>
                              <p>Kyrgyzstan<br>+(996)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-230" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="LA">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="LA">
                                <path fill="#0052B4" d="M0 0h513v342H0z"></path>
                                <path d="M0 .1h513v90.7H0zm0 251.2h513V342H0z" fill="#D80027"></path>
                                <circle fill="#FFF" cx="256.5" cy="171" r="65.9"></circle>
                              </svg>
                              <p>Laos<br>+(856)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-232" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="LV">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="LV">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path class="prefix__st1" d="M0 0h513v127.6H0zm0 214.4h513V342H0z" fill="#A2001D">
                                </path>
                              </svg>
                              <p>Latvia<br>+(371)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-234" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="LB">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="LB">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path d="M0 .2h513v90.7H0zm.5 251.1H513V342H.5z" fill="#D80027"></path>
                                <path fill="#6DA544" d="M290.3 193.5 256 130.7l-34.3 62.8h25.7v17.2h17.2v-17.2z"></path>
                                <path fill="#14AF5A"
                                  d="M241.3 213.1c4.4-4.4 4.4-11.6-.1-16l4.7 4.7c-5.2-4.7-12.2-6.6-19.1-5.3l-23.5 5.9c-6.1 1.5-6.8-.4-1.8-4.2l27.1-20.3c5.1-3.8 4.2-6.9-2.3-6.9h-11c-6.4 0-7-2.3-1.5-5.1l25.3-12.7c5.6-2.8 5.1-5.1-1.5-5.1h-11c-6.4 0-7.4-3.1-2.3-6.9l27.1-20.3c5.6-3.8 12.9-3.8 18.5 0l27.1 20.3c5.1 3.8 4.2 6.9-2.3 6.9h-11c-6.4 0-7 2.3-1.5 5.1l25.3 12.7c5.6 2.8 5.1 5.1-1.5 5.1h-11c-6.4 0-7.4 3.1-2.3 6.9l27.1 20.3c5.1 3.8 4.4 5.7-1.8 4.2l-23.5-5.9c-6.8-1.3-13.9.6-19.1 5.3l4.7-4.7c-4.4 4.4-4.5 11.5-.1 16l6.8 6.8c4.4 4.4 3.1 8-3.3 8h-45.8c-6.2 0-7.7-3.6-3.3-8 .1.1 6.9-6.8 6.9-6.8z">
                                </path>
                              </svg>
                              <p>Lebanon<br>+(961)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-236" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="LS">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="LS">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#0052B4" d="M0 0h513v114H0z"></path>
                                <path fill="#6DA544" d="M0 227.6h513v114H0z"></path>
                                <path
                                  d="m245.2 171 7.7-23.1c2-5.9 5.1-6 7.1 0l7.7 23.1 19.4 29.1c1.7 2.6 1.3 6.3-1.2 8 0 0-6.9 8-29.5 8s-29.5-8-29.5-8c-2.4-2-2.9-5.4-1.2-8l19.5-29.1z">
                                </path>
                                <path
                                  d="M256.5 171c-12.5 0-22.6-10.1-22.6-22.6 0-12.5 10.1-22.6 22.6-22.6s22.6 10.1 22.6 22.6c0 12.5-10.2 22.6-22.6 22.6zm0 0c6.2 0 11.3-16.3 11.3-22.6 0-6.2-5.1-11.3-11.3-11.3-6.2 0-11.3 5.1-11.3 11.3 0 6.3 5 22.6 11.3 22.6z">
                                </path>
                              </svg>
                              <p>Lesotho<br>+(266)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-238" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="LR">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="LR">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path
                                  d="M0 0h513v31.1H0zm0 62.2h513v31.1H0zm0 62.3h513v31.1H0zm0 62.3h513v31.1H0zm0 62.5h513v31.1H0zm0 61.6h513V342H0z"
                                  fill="#bf0a30"></path>
                                <path fill="#002868" d="M0 0h155.6v155.6H0z"></path>
                                <path fill="#FFF"
                                  d="m77.8 30.2 10.7 32.9h34.6l-28 20.4 10.7 32.9-28-20.3-28 20.3 10.7-32.9-28-20.4h34.6z">
                                </path>
                              </svg>
                              <p>Liberia<br>+(231)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-240" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="LY">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="LY">
                                <path d="M0 0h513v342H0z"></path>
                                <path fill="#D80027" d="M0 0h513v114H0z"></path>
                                <path fill="#496E2D" d="M0 228h513v114H0z"></path>
                                <g fill="#FFF">
                                  <path
                                    d="m281.4 150.7 9 12.3 14.5-4.7-9 12.4 9 12.3-14.5-4.7-9 12.3v-15.2l-14.5-4.7 14.5-4.7z">
                                  </path>
                                  <path
                                    d="M257 201.5c-17 0-30.9-13.8-30.9-30.9s13.8-30.9 30.9-30.9c5.3 0 10.3 1.3 14.7 3.7-6.9-6.7-16.2-10.8-26.6-10.8-21 0-38 17-38 38s17 38 38 38c10.3 0 19.7-4.1 26.6-10.8-4.4 2.4-9.4 3.7-14.7 3.7z">
                                  </path>
                                </g>
                              </svg>
                              <p>Libya<br>+(218)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-242" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="LI">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="LI">
                                <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                <path fill="#0052B4" d="M0 0h513v171H0z"></path>
                                <path fill="#FFDA44"
                                  d="M149.3 98.1c0-14-11.3-25.3-25.3-25.3-6.5 0-12.4 2.4-16.9 6.4V64.4h8.4V47.5h-8.4v-8.4H90.3v8.4h-8.4v16.9h8.4v14.9c-4.5-4-10.4-6.4-16.9-6.4-14 0-25.3 11.3-25.3 25.3 0 7.5 3.3 14.2 8.4 18.8v14.9h84.3V117c5.3-4.7 8.5-11.5 8.5-18.9z">
                                </path>
                              </svg>
                              <p>Liechtenstein<br>+(423)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-244" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="LT">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="LT">
                                <path fill="#6DA544" d="M0 0h513v342H0z"></path>
                                <path fill="#FFDA44" d="M0 0h513v114H0z"></path>
                                <path fill="#D80027" d="M0 228h513v114H0z"></path>
                              </svg>
                              <p>Lithuania<br>+(370)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-246" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="LU">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="LU">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#D80027" d="M0 0h513v114H0z"></path>
                                <path fill="#338AF3" d="M0 228h513v114H0z"></path>
                              </svg>
                              <p>Luxembourg<br>+(352)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-248" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="MO">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="MO">
                                <path fill="#00745a" d="M0 85.331h512v341.337H0z"></path>
                                <path fill="#FFF"
                                  d="M285.682 248.878c-4.19 0-8.166.836-11.861 2.164 2.023-4.509 3.379-9.527 3.379-14.885 0-21.201-21.201-37.101-21.201-37.101s-21.201 15.901-21.201 37.101c0 5.357 1.356 10.375 3.379 14.885-3.693-1.328-7.671-2.164-11.861-2.164-21.201 0-37.101 21.201-37.101 21.201s15.901 21.201 37.101 21.201c12.429 0 23.031-7.286 29.682-13.315 6.65 6.03 17.251 13.315 29.682 13.315 21.201 0 37.101-21.201 37.101-21.201s-15.899-21.201-37.099-21.201z">
                                </path>
                                <path
                                  d="m256 152.111 4.38 13.476h14.171l-11.464 8.332 4.376 13.476-11.463-8.33-11.463 8.33 4.376-13.476-11.464-8.332h14.171zm-53.888 23.572 8.425 7.585 9.818-5.667-4.61 10.355 8.423 7.588-11.274-1.185-4.611 10.355-2.358-11.088-11.275-1.185 9.818-5.669zm-39.45 39.449 11.09 2.358 5.668-9.818 1.186 11.274 11.089 2.358-10.357 4.61 1.186 11.274-7.587-8.423-10.357 4.61 5.669-9.818zm147.227-39.449-8.425 7.585-9.818-5.667 4.611 10.355-8.425 7.588 11.275-1.185 4.61 10.355 2.359-11.088 11.275-1.185-9.818-5.669zm39.449 39.449-11.089 2.358-5.669-9.818-1.186 11.274-11.088 2.358 10.357 4.61-1.185 11.274 7.586-8.423 10.357 4.61-5.669-9.818z"
                                  fill="#FFDA44"></path>
                                <path
                                  d="M256 350.642c16.84 0 32.363-5.619 44.816-15.073h-89.63c12.451 9.454 27.974 15.073 44.814 15.073zm-68.023-44.522a74.138 74.138 0 0 0 8.85 15.073h118.345a74.13 74.13 0 0 0 8.85-15.073H187.977z"
                                  fill="#FFF"></path>
                              </svg>
                              <p>Macau<br>+(853)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-250" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="MK">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="MK">
                                <path fill="#FFDA44" d="M0 85.333h512V426.67H0z"></path>
                                <g fill="#D80027">
                                  <path
                                    d="M383.875 426.662 256 252.286l26.827 174.376zM133.565 85.33 256 252.286 230.314 85.33zm95.606 341.332L256 252.286 128.124 426.662zM0 85.33V212.9l256 39.386L28.333 85.33zm0 341.332h18.212L256 252.286 0 291.67zm256-174.376L512 212.9V85.33h-28.331zM281.686 85.33 256 252.286 378.434 85.33zM512 426.662V291.671l-256-39.385 237.787 174.376z">
                                  </path>
                                  <circle cx="256" cy="252.29" r="59.359"></circle>
                                </g>
                                <circle fill="#FFDA44" cx="256" cy="252.29" r="44.522"></circle>
                              </svg>
                              <p>Macedonia<br>+(389)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-252" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="MG">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="MG">
                                <path fill="#6DA544" d="M512 426.666V85.329H0v341.337h512z"></path>
                                <path fill="#D80027" d="M512 85.331H0v170.666h512V85.331z"></path>
                                <path fill="#FFF" d="M0 85.334h181.793v341.337H0z"></path>
                              </svg>
                              <p>Madagascar<br>+(261)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-254" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="MW">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 342" class="flag" code="MW">
                                <path fill="#272727" d="M0 0h512v114H0z"></path>
                                <path fill="#e40112" d="M0 114h512v114H0z"></path>
                                <path fill="#07893f" d="M0 228h512v114H0z"></path>
                                <circle fill="#e40112" cx="256" cy="125" r="95"></circle>
                              </svg>
                              <p>Malawi<br>+(265)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-256" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="MY">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="MY">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path
                                  d="M0 0h513v24.4H0zm0 48.9h513v24.4H0zm0 48.8h513v24.4H0zm0 48.9h513V171H0zm0 48.8h513v24.4H0zm0 48.9h513v24.4H0zm0 48.8h513v24.4H0z"
                                  fill="#c00"></path>
                                <path fill="#006" d="M0 0h256.5v195.4H0z"></path>
                                <path
                                  d="M153.3 42.1C122.6 30.7 88.5 46.3 77.1 77s4.2 64.8 34.9 76.2c13.3 5 28 5 41.4 0-30.7 24.5-75.4 19.6-100-11.1s-19.6-75.4 11.1-100c26-20.7 62.9-20.7 88.8 0zm26.7 75-20.6 23.3 5.4-30.6-31-1.6 27.3-14.9L143 68l28.6 12 8.4-29.9 8.4 29.9L217 68l-18 25.4 27.3 14.9-31 1.6 5.4 30.6-20.7-23.4z"
                                  fill="#fc0"></path>
                              </svg>
                              <p>Malaysia<br>+(60)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-258" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="MV">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="MV">
                                <path fill="#d01920" d="M0 85.331h512v341.333H0z"></path>
                                <path fill="#017c3b" d="M144.696 174.375h222.609v163.25H144.696z"></path>
                                <path fill="#FFF"
                                  d="M283.484 304.226c-26.637 0-48.232-21.594-48.232-48.232s21.594-48.232 48.232-48.232c8.306 0 16.12 2.1 22.943 5.797-10.703-10.467-25.341-16.927-41.494-16.927-32.784 0-59.362 26.577-59.362 59.362s26.578 59.362 59.362 59.362c16.154 0 30.791-6.461 41.494-16.927-6.822 3.698-14.636 5.797-22.943 5.797z">
                                </path>
                              </svg>
                              <p>Maldives<br>+(960)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-260" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="ML">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="ML">
                                <path fill="#FFDA44" d="M0 85.331h512v341.337H0z"></path>
                                <path fill="#6DA544" d="M0 85.331h170.663v341.337H0z"></path>
                                <path fill="#D80027" d="M341.337 85.331H512v341.337H341.337z"></path>
                              </svg>
                              <p>Mali<br>+(223)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-262" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="MT">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="MT">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#C31B28" d="M256 0h256.5v342H256z"></path>
                                <path fill="#ACABB1" stroke="#C31B28" stroke-width="2"
                                  d="M101.2 68.2V33H66v35.2H30.8v35.2H66v35.2h35.2v-35.2h35.2V68.2z"></path>
                              </svg>
                              <p>Malta<br>+(356)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-264" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="MH">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="MH">
                                <path fill="#1E509C" d="M0 0h513v342H0z"></path>
                                <path fill="#FFF" d="M513 176.1V81.3L0 342l513-165.9z"></path>
                                <path fill="#F18D36" d="M513 0v81.3L0 342 513 0z"></path>
                                <path fill="#FFF"
                                  d="m126.7 99.3-7.8-54.1-7.7 54.1-20.8-23.7 10.7 31.6-31.5-10.7 23.6 20.8-54.1 7.7 54.1 7.7-23.6 20.8 31.5-10.7-10.7 31.6 20.8-23.7 7.7 54.1 7.8-54.1 20.7 23.7-10.6-31.6 31.5 10.7-23.6-20.8 54-7.7-54-7.7 23.6-20.8-31.5 10.7 10.6-31.6z">
                                </path>
                              </svg>
                              <p>Marshall Islands<br>+(692)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-266" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="MR">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 100 513 342" class="flag" code="MR">
                                <path fill="#006233" d="M0 100h513v342H0z"></path>
                                <path fill="#cd2a3e" d="M0 100h513v46H0zm0 296h513v46H0z"></path>
                                <path fill="#ffc400"
                                  d="M256 298.851c-45.956 0-84.348-32.298-93.767-75.429A96.288 96.288 0 0 0 160 243.994c0 53.02 42.979 96 96 96s96-42.98 96-96c0-7.066-.785-13.942-2.233-20.572-9.419 43.131-47.811 75.429-93.767 75.429z">
                                </path>
                                <path fill="#ffc400"
                                  d="m255.999 171.994 8.935 27.502h28.918l-23.394 16.996 8.936 27.503-23.395-16.998-23.394 16.998 8.937-27.503-23.394-16.996h28.915z">
                                </path>
                              </svg>
                              <p>Mauritania<br>+(222)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-268" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="MU">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="MU">
                                <path fill="#f7ce00" d="M0 85.331h512v341.326H0z"></path>
                                <path fill="#e32737" d="M0 85.331h512v85.337H0z"></path>
                                <path fill="#191f6a" d="M0 170.657h512v85.337H0z"></path>
                                <path fill="#00a04e" d="M0 341.331h512v85.337H0z"></path>
                              </svg>
                              <p>Mauritius<br>+(230)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-270" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="YT">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 90 60" class="flag" code="YT">
                                <path fill="#FFF" d="M0 0h90v60H0z"></path>
                                <path stroke="#7f7f7f" stroke-width="0.25" fill="#ABABAB"
                                  d="M75.6 39.6c-1.1.7 0 1.8-.6 1.9-.6.1-1.5-1.4-.2-2.5 1.6-1.5 5.8 0 5.9 4.3 0 2.2-.9 6.8-7.2 6.8-7.6 0-11.4-5.7-11.4-11.4 0-4.8 3.7-13.5 6.5-14.6 3.1-1.2 6.7-3.5 6.8-5 0-.5-1.4-.1-3.3.9-3.1 1.7-6.6 2.5-6.6 1.4s2.9-3.1 4-4.6c1.2-1.6.9-5.5 3-5.5 7.6 0 9.9 7.7 7 11.7-1.9 2.6 4.3 1 4.3 1s0 5.3-3.2 7.3c-3 1.8-4.8 3.9-4.8 3.9s.2-4.6-.5-3.9c-.6.7-11.1 4.5-10.3 12 .3 3 4.5 5.4 8.5 5.2s5.7-2.4 5.8-4.9c.1-3.9-3-4.4-3.7-4zm-64.9 4c.1 2.5 1.8 4.7 5.8 4.9s8.2-2.2 8.5-5.2c.8-7.5-9.7-11.3-10.3-12-.7-.7-.5 3.9-.5 3.9s-1.8-2.1-4.8-3.9c-3.2-2-3.2-7.3-3.2-7.3s6.2 1.6 4.3-1c-2.9-4-.6-11.7 7-11.7 2.1 0 1.8 3.9 3 5.5 1.1 1.5 4 3.5 4 4.6s-3.5.3-6.6-1.4c-1.9-1-3.3-1.4-3.3-.9.1 1.5 3.7 3.8 6.8 5 2.8 1.1 6.5 9.8 6.5 14.6 0 5.7-3.8 11.4-11.4 11.4-6.3 0-7.2-4.6-7.2-6.8.1-4.3 4.3-5.8 5.9-4.3 1.2 1.1.4 2.7-.2 2.5-.6-.1.6-1.2-.6-1.9-.6-.4-3.7.1-3.7 4z">
                                </path>
                                <path fill="#DE393A"
                                  d="M31 28.8v14c0 1.9 2.1 1.6 2.1 1.6h9.3c1.2 0 2.6 2.3 2.6 2.3s1.4-2.3 2.5-2.3h9.6s2 .2 2-1.8V28.7H31z">
                                </path>
                                <path fill="#3951A3" d="M31 13.1h28v15.7H31z"></path>
                                <path fill="#FFF"
                                  d="M50.1 16.5c-.4 2.4-2.5 4.2-5.1 4.2-2.5 0-4.6-1.8-5.1-4.2-.5.9-.8 1.9-.8 3 0 3.3 2.6 5.9 5.9 5.9 3.3 0 5.9-2.6 5.9-5.9 0-1.1-.3-2.1-.8-3z">
                                </path>
                                <circle fill="#FEE05F" cx="39.1" cy="36.5" r="3"></circle>
                                <circle fill="#FEE05F" cx="50.9" cy="36.5" r="3"></circle>
                              </svg>
                              <p>Mayotte<br>+(262)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-272" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="MX">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="MX">
                                <path fill="#dc2339" d="M342 0H0v341.3h513V0z"></path>
                                <path fill="#11865d" d="M0 0h171v342H0z"></path>
                                <path fill="#FFF" d="M171 0h171v342H171z"></path>
                                <path fill="#8C9157"
                                  d="M195.8 171.2c0 21.6 11.5 41.7 30.3 52.5 5.8 3.4 13.2 1.4 16.6-4.4 3.4-5.8 1.4-13.2-4.4-16.6-11.3-6.5-18.2-18.5-18.2-31.5 0-6.7-5.4-12.1-12.1-12.1-6.7 0-12.2 5.4-12.2 12.1zm93.4 51.1c17.5-11.1 28-30.4 28-51.1 0-6.7-5.4-12.1-12.1-12.1s-12.1 5.4-12.1 12.1c0 12.4-6.3 24-16.8 30.7-5.7 3.5-7.5 10.9-4.1 16.7s10.9 7.5 16.7 4.1c0-.2.2-.3.4-.4z">
                                </path>
                                <ellipse fill="#C59262" cx="256.5" cy="159.1" rx="24.3" ry="36.4"></ellipse>
                              </svg>
                              <p>México<br>+(52)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-274" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="FM">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="FM">
                                <path fill="#338AF3" d="M0 0h513v342H0z"></path>
                                <path
                                  d="m256 37.9 10.1 31.2H299l-26.6 19.3 10.2 31.2-26.6-19.3-26.6 19.3 10.2-31.2L213 69.1h32.9zM123.2 170.7l31.2-10.2v-32.8l19.3 26.6 31.2-10.2-19.3 26.6 19.3 26.5-31.2-10.1-19.3 26.5v-32.8zM256 303.5l-10.1-31.2H213l26.6-19.3-10.2-31.3L256 241l26.6-19.3-10.2 31.3 26.6 19.3h-32.9zm132.8-132.8-31.2 10.1v32.8l-19.3-26.5-31.2 10.1 19.3-26.5-19.3-26.6 31.2 10.2 19.3-26.6v32.8z"
                                  fill="#FFF"></path>
                              </svg>
                              <p>Micronesia<br>+(691)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-276" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="MD">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="MD">
                                <path fill="#FFDA44" d="M0 0h513v342H0z"></path>
                                <path fill="#D80027" d="M342 0h171v342H342z"></path>
                                <path fill="#0052B4" d="M0 0h171v342H0z"></path>
                                <path fill="#AF7F59"
                                  d="M206.2 129.1h33.2L256 79.3l16.6 49.8h33.2v99.6L256 262l-49.8-33.2v-99.7zm33.2 33.3v49.8h33.2v-49.8h-33.2z">
                                </path>
                              </svg>
                              <p>Moldova<br>+(373)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-278" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="MC">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="MC">
                                <path fill="#FFF" d="M0 85.333h512v341.333H0z"></path>
                                <path fill="#c70000" d="M0 85.333h512V256H0z"></path>
                              </svg>
                              <p>Monaco<br>+(377)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-280" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="MN">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="MN">
                                <path fill="#095FAD" d="M0 0h513v342H0z"></path>
                                <path d="M342 0h171v342H342zM0 0h171v342H0z" fill="#BE1229"></path>
                                <g fill="#FFDA44">
                                  <path d="M108.3 166.3h14.8v74.2h-14.8zm-59.4 0h14.8v74.2H48.9z"></path>
                                  <circle cx="86" cy="203.4" r="14.8"></circle>
                                  <path d="M71.2 225.7h29.7v14.8H71.2zm0-59.4h29.7v14.8H71.2z"></path>
                                  <circle cx="86" cy="144" r="14.8"></circle>
                                  <path d="M76.3 123.9h19.5L86 108.3z"></path>
                                </g>
                              </svg>
                              <p>Mongolia<br>+(976)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-282" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="ME">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="ME">
                                <path fill="#E6BE53" d="M0 0h513v342H0z"></path>
                                <path fill="#E01D24" d="M20 20h473v302H20z"></path>
                                <path fill="#E6BE53"
                                  d="M248.5 112.9c4.4 4.4 11.6 4.4 16 0l-4.7 4.7 22.7-22.7c4.9-4.5 12.1-5.6 18.2-2.8l2.1 1c5.7 2.9 6.7 8.7 2.3 13.1l4.7-4.7-22.8 22.8c-4.5 4.9-5.6 12.1-2.8 18.2l1 2.1c2.9 5.7 5.1 15.4 5.1 21.6v-11.3c0 6.2 4.4 9.1 10.2 6.2l2.1-1c5.7-2.9 6.7-8.7 2.3-13.1l4.7 4.7c-4.4-4.4-4.4-11.6 0-16l-4.7 4.7c5.2-5.5 9.6-11.6 13.1-18.2l1-2.1c2.9-5.7 6.3-15.1 7.9-21.2l5.8-23.3c1.5-6 5.9-6.8 9.6-1.8l20.2 26.9c3.8 5.1 6.9 14 6.9 20.6v22.4c0 6.3-2.2 15.8-5.1 21.7l-1 2.1c-3.5 6.6-7.9 12.7-13.1 18.2l-6.8 6.8c-5.4 5.2-11.5 9.6-18.2 13.1l-2.1 1c-5.7 2.9-15.5 5.1-21.6 5.1-6.2 0-6.9 2.2-1.1 5.1l2.1 1c5.7 2.9 13.8 8.7 18.2 13.1l-4.7-4.7c4.4 4.4 11.6 4.4 16 0l-4.7 4.7c4.4-4.4 11.6-4.4 16 0L339 226c4.6 4.9 5.7 12.1 2.9 18.2l-1 2.1c-2.9 5.7-10.4 10.2-16.4 10.2-7.5-.3-14.8-2-21.6-5.1l-2.1-1c-6.5-3.6-11.8-8.9-15.4-15.4l-1-2.1c-2.9-5.7-8.7-6.7-13.1-2.3l4.7-4.7c-4.4 4.7-5.2 11.8-1.8 17.3l10.3 15.4c3.4 5.1 2 12.1-3.1 15.5L266 284.4c-5.7 3.4-12.8 3.4-18.6 0L232 274.1c-5.1-3.4-6.5-10.3-3.1-15.5l10.3-15.4c3.4-5.5 2.6-12.6-1.8-17.3l4.7 4.7c-4.4-4.4-10.2-3.6-13.1 2.3l-1 2.1c-2.9 5.7-9.5 12.4-15.4 15.4l-2.1 1c-5.7 2.9-15.5 5.1-21.6 5.1-6.9-.3-13.1-4.2-16.4-10.2l-1-2.1c-2.8-6.1-1.6-13.3 2.9-18.2l-4.7 4.7c4.4-4.4 11.6-4.4 16 0L181 226c4.4 4.4 11.6 4.4 16 0l-4.7 4.7c5.5-5.2 11.6-9.6 18.2-13.1l2.1-1c5.7-2.9 5-5.1-1.1-5.1-7.5-.3-14.8-2-21.6-5.1l-2.1-1c-6.6-3.5-12.7-7.9-18.2-13.1l-6.8-6.8c-5.2-5.4-9.6-11.5-13.1-18.2l-1-2.1c-3.1-6.8-4.9-14.2-5.1-21.7V121c0-6.3 3.1-15.6 6.9-20.6l20.2-26.9c3.8-5.1 8.1-4.3 9.6 1.8l5.8 23.3c2 7.3 4.6 14.4 7.9 21.2l1 2.1c2.9 5.7 8.7 13.8 13.1 18.2l-4.7-4.7c4.4 4.4 4.4 11.6 0 16l4.7-4.7c-4.4 4.4-3.6 10.2 2.3 13.1l2.1 1c5.7 2.9 10.2 0 10.2-6.2v11.3c0-6.2 2.2-15.7 5.1-21.6l1-2.1c2.8-6.1 1.7-13.2-2.8-18.2l-22.7-22.7 4.7 4.7c-4.4-4.4-3.6-10.2 2.3-13.1l2.1-1c6.1-2.8 13.2-1.7 18.2 2.8l22.7 22.7-4.8-4.5zm-18-40.7c-4.4-4.4-3.2-9.5 2.8-11.5l12.4-4.2c6-2 15.5-2 21.5 0l12.4 4.2c6 2 7.2 7.1 2.8 11.5l-6.8 6.8c-5.3 4.7-12.1 7.5-19.2 7.9-6.2 0-14.8-3.5-19.2-7.9.1 0-6.7-6.8-6.7-6.8z">
                                </path>
                                <path fill="#215F90"
                                  d="M233.9 200.2c0 6.2 1.7 6.4 4.2.5 0 0 7.1-23.2 18.4-23.2 11.3 0 18.6 23.6 18.6 23.6 2.2 5.7 4 5.3 4-1.1v-11.2c0-18.7-10.1-33.9-22.6-33.9-12.5 0-22.6 15.2-22.6 33.9v11.4z">
                                </path>
                              </svg>
                              <p>Montenegro<br>+(382)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-284" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="MS">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="MS">
                                <path fill="#1B4991" d="M0 0h513v342H0z"></path>
                                <path fill="#00A2B8" stroke="#FFF" stroke-width="3"
                                  d="M318.2 106.7v106.5c0 51.9 67.8 67.8 67.8 67.8s67.8-15.9 67.8-67.8V106.7H318.2z">
                                </path>
                                <path fill="#A35023"
                                  d="M319.7 212.7c0 50.8 66.3 66.3 66.3 66.3s66.3-15.6 66.3-66.3H319.7z"></path>
                                <path d="M415.1 155.1h-19.4v-19.4h-19.4v19.4H357v19.4h19.3v58.1h19.4v-58.1h19.4z">
                                </path>
                                <path fill="#FFF"
                                  d="M256 0v30.6l-45.2 25.1H256V115h-59.1l59.1 32.8v22.9h-26.7l-73.5-40.9v40.9h-55.6v-48.6l-87.5 48.6H0v-30.6L45.2 115H0V55.7h59.1L0 22.8V0h26.7l73.5 40.8V0h55.6v48.6L243.3 0z">
                                </path>
                                <path fill="#D80027" d="M144 0h-32v69.3H0v32h112v69.4h32v-69.4h112v-32H144z"></path>
                                <path fill="#0052B4" d="M155.8 115 256 170.7v-15.8L184.2 115z"></path>
                                <path fill="#FFF" d="M155.8 115 256 170.7v-15.8L184.2 115z"></path>
                                <path fill="#D80027"
                                  d="M155.8 115 256 170.7v-15.8L184.2 115zm-84 0L0 154.9v15.8L100.2 115z"></path>
                                <path fill="#0052B4" d="M100.2 55.6 0 0v15.7l71.8 39.9z"></path>
                                <path fill="#FFF" d="M100.2 55.6 0 0v15.7l71.8 39.9z"></path>
                                <path fill="#D80027" d="M100.2 55.6 0 0v15.7l71.8 39.9zm84 0L256 15.7V0L155.8 55.6z">
                                </path>
                              </svg>
                              <p>Montserrat<br>+(1-664)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-286" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="MA">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="MA">
                                <path fill="#D80027" d="M0 .3V342h513V.3z"></path>
                                <path fill="#20661B"
                                  d="M359.8 148.9h-73.3l-22.7-69.7-22.7 69.7h-73.3l59.3 43.1-22.7 69.7 59.3-43.1 59.3 43.1-22.5-69.7 59.3-43.1zm-116.1 37.7 7.7-23.6h24.8l7.7 23.6-20.1 14.6-20.1-14.6zm27.9-37.7H256l7.8-24 7.8 24zm24.3 29-4.8-14.9h25.3l-20.5 14.9zM236.6 163l-4.8 14.9-20.5-14.9h25.3zm-5.3 61.8 7.8-24 12.6 9.2-20.4 14.8zm44.5-14.9 12.6-9.2 7.8 24-20.4-14.8z">
                                </path>
                              </svg>
                              <p>Morocco<br>+(212)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-288" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="MZ">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 513 342" class="flag" code="MZ">
                                <path fill="#FFF" d="M0 85.333h513v342H0z"></path>
                                <path fill="#f4d900" d="M0 323.333h513v104H0z"></path>
                                <path fill="#006d66" d="M0 85.333h513v104H0z"></path>
                                <path d="M0 204.333h513v104H0z"></path>
                                <path fill="#cb0f31" d="M256 256.006 0 426.668V85.331z"></path>
                                <path fill="#f4d900"
                                  d="m83.477 195.132 15.107 46.498h48.894l-39.554 28.739 15.107 46.499-39.554-28.738-39.555 28.738 15.11-46.499-39.554-28.739H68.37z">
                                </path>
                              </svg>
                              <p>Mozambique<br>+(258)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-290" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="MM">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="MM">
                                <path fill="#6DA544" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#FFDA44" d="M0 85.337h512v113.775H0z"></path>
                                <path fill="#D80027" d="M0 312.888h512v113.775H0z"></path>
                                <path fill="#FFF"
                                  d="M384 227.261h-97.783L256 134.265l-30.217 92.997H128l79.108 57.475-30.217 92.998L256 320.925l79.108 56.81-30.217-92.998L384 227.261z">
                                </path>
                              </svg>
                              <p>Myanmar<br>+(95)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-292" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="NA">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="NA">
                                <path fill="#496E2D" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#0052B4" d="M0 426.663V85.337h512"></path>
                                <path fill="#FFF" d="M512 152.222V85.337H411.67L0 359.778v66.885h100.33z"></path>
                                <path fill="#A2001D" d="M512 85.337v40.125L60.193 426.663H0v-40.125L451.807 85.337z">
                                </path>
                                <path fill="#FFDA44"
                                  d="m187.737 189.212-22.741 10.696 12.11 22.024-24.693-4.724-3.129 24.945-17.199-18.347-17.2 18.347-3.129-24.945-24.693 4.723 12.109-22.023-22.739-10.696 22.74-10.697-12.11-22.022 24.693 4.722 3.13-24.944 17.199 18.347 17.2-18.347 3.128 24.944 24.693-4.722-12.108 22.024z">
                                </path>
                              </svg>
                              <p>Namibia<br>+(264)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-294" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="NR">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="NR">
                                <path fill="#0052B4" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#FFDA44" d="M0 239.994h512v32H0z"></path>
                                <path fill="#FFF"
                                  d="m174.802 341.329-19.124 8.996 10.184 18.521-20.767-3.973-2.631 20.978L128 370.422l-14.465 15.429-2.63-20.978-20.767 3.973 10.183-18.521-19.123-8.996 19.124-8.995-10.184-18.52 20.766 3.971 2.632-20.978L128 312.236l14.465-15.429 2.63 20.978 20.767-3.971-10.183 18.521z">
                                </path>
                              </svg>
                              <p>Nauru<br>+(674)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-296" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="NP">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="NP">
                                <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#0052B4" d="M0 426.663V85.337l280.419 174.75H87.61l183.576 166.576z"></path>
                                <path fill="#D80027" d="M244.769 249.888 10.199 103.71v312.754h234.57L61.193 249.888z">
                                </path>
                                <g fill="#FFF">
                                  <path
                                    d="m98.003 324.433-14.589-6.863 7.77-14.13-15.844 3.03-2.008-16.005-11.035 11.772-11.036-11.772-2.008 16.005-15.843-3.031 7.77 14.131-14.591 6.863 14.591 6.862-7.77 14.13 15.844-3.029 2.007 16.004 11.036-11.772L73.332 358.4l2.008-16.004 15.843 3.03-7.769-14.13zm-9.735-132.771-10.612-4.991 5.651-10.278-11.523 2.205-1.461-11.641-8.026 8.561-8.026-8.561-1.46 11.641-11.525-2.205 5.652 10.278-10.613 4.991 25.972 5.194z">
                                  </path>
                                  <path
                                    d="M93.462 191.662c0 17.212-13.953 31.165-31.165 31.165s-31.165-13.953-31.165-31.165">
                                  </path>
                                </g>
                              </svg>
                              <p>Nepal<br>+(977)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-298" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="NL">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.5 513 342" class="flag" code="NL">
                                <path fill="#FFF" d="M0 85.5h513v342H0z"></path>
                                <path fill="#cd1f2a" d="M0 85.5h513v114H0z"></path>
                                <path fill="#1d4185" d="M0 312h513v114H0z"></path>
                              </svg>
                              <p>Netherlands<br>+(31)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-300" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="AN">
                            <div class="WorldwidePhoneInput_item__54St7">
                              <div></div>
                              <p>Netherlands Antilles<br>+(599)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-302" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="NC">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 426.7" class="flag" code="NC">
                                <path fill="#009543" d="M0 293h640v133.7H0V293z"></path>
                                <path fill="#ED4135" d="M0 132h640v161.3H0V132z"></path>
                                <path fill="#0035AD" d="M0 0h640v133.3H0V0z"></path>
                                <circle fill="#FAE600" stroke="#000" stroke-width="5.3" cx="240" cy="213.3" r="157.3">
                                </circle>
                                <path
                                  d="m307.9 354.5-31.8 12-36.1 4.2-37.8-2.4-35.9-15.5s28.6-29.3 40.7-33.5c8.6-3 22.4-3.7 22.4-3.7V122l-.3-66H246l-.5 67.5v191.7s15.3 1.2 22.1 4.1c11.3 4.9 40.3 35.2 40.3 35.2z">
                                </path>
                                <path d="m212.727 102.375 42.955-21.418 5.577 11.187-42.955 21.417z"></path>
                                <ellipse cx="237.8" cy="280.5" rx="16.8" ry="26.5"></ellipse>
                                <circle cx="237.4" cy="143.4" r="20.9"></circle>
                                <ellipse cx="238.4" cy="211.1" rx="19.9" ry="12.1"></ellipse>
                                <path d="M213.8 177h47v10h-47zm0 57h47v10h-47z"></path>
                              </svg>
                              <p>New Caledonia<br>+(687)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-304" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="NZ">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="NZ">
                                <path fill="#0052B4" d="M0 85.334h512v341.337H0z"></path>
                                <path
                                  d="m425.301 233.745 3.388 10.428h10.963l-8.87 6.444 3.388 10.427-8.869-6.444-8.871 6.444 3.388-10.427-8.87-6.444h10.963zm-39.194 75.072 5.083 15.642h16.445l-13.305 9.667 5.082 15.64-13.305-9.667-13.305 9.667 5.083-15.64-13.305-9.667h16.445zm1.481-122.846 4.236 13.036h13.704l-11.088 8.054 4.235 13.034-11.087-8.056-11.088 8.056 4.235-13.034-11.087-8.054h13.704zm-37.712 47.32 5.082 15.641h16.446l-13.306 9.666 5.084 15.641-13.306-9.666-13.305 9.666 5.082-15.641-13.305-9.666h16.445z"
                                  fill="#D80027"></path>
                                <path fill="#FFF"
                                  d="M256.003 85.329v30.564l-45.178 25.088h45.178v59.359H196.89l59.113 32.846v22.806h-26.69l-73.484-40.826v40.826h-55.652v-48.573l-87.429 48.573H.003v-30.553l45.168-25.099H.003v-59.359h59.103L.003 108.147V85.329h26.68l73.494 40.838V85.329h55.652v48.573l87.43-48.573z">
                                </path>
                                <path fill="#D80027" d="M144 85.33h-32v69.334H0v32h112v69.334h32v-69.334h112v-32H144z">
                                </path>
                                <path fill="#0052B4" d="M155.826 200.344 256 255.998v-15.739l-71.847-39.915z"></path>
                                <path fill="#FFF" d="M155.826 200.344 256 255.998v-15.739l-71.847-39.915z"></path>
                                <path
                                  d="M155.826 200.344 256 255.998v-15.739l-71.847-39.915zm-83.98 0L0 240.259v15.739l100.174-55.654z"
                                  fill="#D80027"></path>
                                <path fill="#0052B4" d="M100.174 140.983 0 85.33v15.738l71.847 39.915z"></path>
                                <path fill="#FFF" d="M100.174 140.983 0 85.33v15.738l71.847 39.915z"></path>
                                <path
                                  d="M100.174 140.983 0 85.33v15.738l71.847 39.915zm83.98 0L256 101.068V85.33l-100.174 55.653z"
                                  fill="#D80027"></path>
                              </svg>
                              <p>New Zealand<br>+(64)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-306" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="NI">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="NI">
                                <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                <path d="M0 85.337h512v113.775H0zm0 227.551h512v113.775H0z" fill="#338AF3"></path>
                                <path fill="#FFDA44"
                                  d="M256 214.447c-22.949 0-41.553 18.603-41.553 41.553S233.05 297.553 256 297.553c22.949 0 41.553-18.603 41.553-41.553S278.949 214.447 256 214.447zm0 65.298c-13.114 0-23.745-10.631-23.745-23.745s10.631-23.745 23.745-23.745 23.745 10.631 23.745 23.745-10.631 23.745-23.745 23.745z">
                                </path>
                                <path fill="#0052B4" d="M276.563 261.936 256 256l-20.563 5.936-6.855 11.873h54.836z">
                                </path>
                                <path fill="#338AF3" d="m256 226.32-13.709 23.744L256 256l13.709-5.936z"></path>
                                <path fill="#6DA544" d="M235.437 261.936h41.126l-6.854-11.872h-27.418z"></path>
                              </svg>
                              <p>Nicaragua<br>+(505)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-308" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="NE">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="NE">
                                <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#e05206" d="M0 85.337h512v113.775H0z"></path>
                                <path fill="#0db02b" d="M0 312.888h512v113.775H0z"></path>
                                <circle fill="#e05206" cx="256" cy="256" r="32"></circle>
                              </svg>
                              <p>Niger<br>+(227)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-310" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="NG">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.5 513 342" class="flag" code="NG">
                                <path fill="#FFF" d="M0 85.5h513v342H0z"></path>
                                <path d="M0 85.5h171v342H0zm342 0h171v342H342z" fill="#007b23"></path>
                              </svg>
                              <p>Nigeria<br>+(234)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-312" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="NU">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="NU">
                                <path fill="#FFDA44" d="M0 85.334h512v341.337H0z"></path>
                                <path fill="#FFF" d="M0 85.334h256v170.663H0z"></path>
                                <g fill="#D80027">
                                  <path d="M144 85.33h-32v69.333H0v32h112v69.334h32v-69.334h112v-32H144z"></path>
                                  <path d="M0 85.329v15.083l57.377 38.251H80z"></path>
                                </g>
                                <path d="M0 107.951v30.712h46.069zm96-22.62v48.913L22.628 85.331z" fill="#2E52B2">
                                </path>
                                <path fill="#D80027" d="M256 85.329v15.083l-57.377 38.251H176z"></path>
                                <path d="M256 107.951v30.712h-46.069zm-96-22.62v48.913l73.372-48.913z" fill="#2E52B2">
                                </path>
                                <path fill="#D80027" d="M0 85.329v15.083l57.377 38.251H80z"></path>
                                <path d="M0 107.951v30.712h46.069zm96-22.62v48.913L22.628 85.331z" fill="#2E52B2">
                                </path>
                                <path fill="#D80027" d="M256 85.329v15.083l-57.377 38.251H176z"></path>
                                <path d="M256 107.951v30.712h-46.069zm-96-22.62v48.913l73.372-48.913z" fill="#2E52B2">
                                </path>
                                <path fill="#D80027" d="M0 255.997v-15.082l57.377-38.252H80z"></path>
                                <path d="M0 233.376v-30.713h46.069zm96 22.618v-48.912l-73.372 48.912z" fill="#2E52B2">
                                </path>
                                <path fill="#D80027" d="M256 255.997v-15.082l-57.377-38.252H176z"></path>
                                <g fill="#2E52B2">
                                  <path d="M256 233.376v-30.713h-46.069zm-96 22.618v-48.912l73.372 48.912z"></path>
                                  <circle cx="128" cy="170.66" r="22.627"></circle>
                                </g>
                                <path
                                  d="m128 154.663 3.97 12.222h12.854l-10.398 7.556 3.971 12.222L128 179.109l-10.398 7.554 3.972-12.222-10.398-7.556h12.853zm0 65.14 2.364 7.278h7.653l-6.19 4.498 2.364 7.278-6.191-4.498-6.191 4.498 2.364-7.278-6.19-4.498h7.652zm0-117.334 2.364 7.278h7.653l-6.19 4.498 2.364 7.278-6.191-4.498-6.191 4.498 2.364-7.278-6.19-4.498h7.652zm69.931 58.667 2.365 7.277h7.653l-6.192 4.499 2.365 7.279-6.191-4.498-6.191 4.498 2.365-7.279-6.191-4.499h7.652zm-139.862 0 2.364 7.277h7.653l-6.191 4.499 2.364 7.279-6.19-4.498-6.191 4.498 2.365-7.279-6.192-4.499h7.653z"
                                  fill="#FFDA44"></path>
                              </svg>
                              <p>Niue<br>+(683)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-314" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="KP">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="KP">
                                <path fill="#91DC5A" d="M0 0h513v342H0z"></path>
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path d="M0 0h513v57.188H0zm0 284.1h513v57.177H0z" fill="#0052B4"></path>
                                <path fill="#D80027" d="M0 79.9h513v181.582H0z"></path>
                                <circle fill="#FFF" cx="190.33" cy="171" r="65.668"></circle>
                                <path fill="#D80027"
                                  d="m190.3 105 14.8 45.3h47.7l-38.6 28.1 14.8 45.5-38.7-28.2-38.6 28.1 14.8-45.4-38.6-28.1h47.7z">
                                </path>
                              </svg>
                              <p>North Korea<br>+(850)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-316" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="MP">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 750 500" class="flag" code="MP">
                                <path fill="#0071BC" d="M0 0h750v500H0V0z"></path>
                                <g fill="#FFF" stroke="#000" stroke-width="1.9">
                                  <circle cx="375" cy="245" r="225" fill="#fff"></circle>
                                  <circle cx="375" cy="245" r="165" fill="#0071BC"></circle>
                                </g>
                                <g stroke="#000">
                                  <path fill="#8C8A8C" stroke-width="1.9"
                                    d="M444.7 450c.7 11-7.8 20-18.8 20H323.6c-11 0-19.5-9-19-20l16.7-325c.6-11 10-20 21-20h61.4c11 0 20.5 9 21.2 20l19.8 325z">
                                  </path>
                                  <path fill="#FFF" stroke-width="2" stroke-linejoin="round"
                                    d="m373 114 30 93h97l-78 56 29 92-78-56-78 57 30-93-79-57h97l30-92z"></path>
                                </g>
                              </svg>
                              <p>Northern Mariana Islands<br>+(1-670)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-318" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="NO">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="NO">
                                <path fill="#D80027" d="M0 85.334h512v341.337H0z"></path>
                                <path fill="#FFF"
                                  d="M512 295.883H202.195v130.783h-79.76V295.883H0v-79.772h122.435V85.329h79.76v130.782H512v61.218z">
                                </path>
                                <path fill="#2E52B2"
                                  d="M512 234.666v42.663H183.652v149.337h-42.674V277.329H0v-42.663h140.978V85.329h42.674v149.337z">
                                </path>
                              </svg>
                              <p>Norway<br>+(47)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-320" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="OM">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="OM">
                                <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                <path fill="#FFF" d="M138 0h377v114H138z"></path>
                                <path fill="#4A7C3A" d="M138 230h377v114H138z"></path>
                                <g fill="none" stroke="#FFF" stroke-width="10" stroke-miterlimit="2">
                                  <path d="M40.3 35.2s37.1 48 50.8 54.5c13.7 6.5 17.1 5.7 17.1 5.7"></path>
                                  <path
                                    d="M100 35.2S62.9 80.6 53.3 87.6c-9.6 7-18.7 7.8-18.7 7.8m17.1-30.1h37.9M70.7 35.2v30.1">
                                  </path>
                                </g>
                              </svg>
                              <p>Oman<br>+(968)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-322" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="PK">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="PK">
                                <g fill="#FFF">
                                  <path
                                    d="m393.508 170.516 17.512 18.875 23.363-10.821-12.541 22.487 17.513 18.876-25.263-4.978-12.539 22.488-3.073-25.564-25.263-4.978 23.363-10.82z">
                                  </path>
                                  <path d="M0 85.343h512v341.326H0z"></path>
                                </g>
                                <path fill="#01411c" d="M128 85.331h384v341.337H128z"></path>
                                <path
                                  d="M361.909 298.793c-31.037 22.426-74.378 15.446-96.804-15.592-22.427-31.038-15.446-74.379 15.593-96.804 9.677-6.992 20.55-11.125 31.613-12.563-21.283-3.183-43.777 1.613-62.598 15.211-38.2 27.602-46.792 80.944-19.191 119.145 27.601 38.199 80.944 46.792 119.145 19.189 18.82-13.598 30.436-33.448 34.096-54.655-4.839 10.05-12.176 19.076-21.854 26.069zm-1.329-125.904 17.484 18.842 23.322-10.802-12.519 22.447 17.483 18.844-25.219-4.968-12.519 22.45-3.067-25.521-25.22-4.969 23.323-10.802z"
                                  fill="#FFF"></path>
                              </svg>
                              <p>Pakistan<br>+(92)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-324" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="PW">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="PW">
                                <path fill="#338AF3" d="M0 85.331h512v341.337H0z"></path>
                                <circle fill="#FFDA44" cx="218.902" cy="255.994" r="74.207"></circle>
                              </svg>
                              <p>Palau<br>+(680)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-326" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="PS">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="PS">
                                <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                <path d="M0 85.337h512v113.775H0z"></path>
                                <path fill="#268024" d="M0 312.888h512v113.775H0z"></path>
                                <path fill="#e4312b" d="M256 256.006 0 426.668V85.331z"></path>
                              </svg>
                              <p>Palestine<br>+(970)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-328" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="PA">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="PA">
                                <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#0052B4" d="M256 256v170.663H0V256h256z"></path>
                                <path fill="#D80027" d="M512 85.337V256H256V85.337h256z"></path>
                                <path fill="#0052B4"
                                  d="m128 123.034 11.824 36.389h38.263l-30.955 22.491 11.823 36.389L128 195.813l-30.955 22.49 11.823-36.389-30.955-22.491h38.263z">
                                </path>
                                <path fill="#D80027"
                                  d="m384 293.697 11.824 36.389h38.263l-30.955 22.491 11.823 36.389L384 366.476l-30.955 22.49 11.823-36.389-30.955-22.491h38.263z">
                                </path>
                              </svg>
                              <p>Panama<br>+(507)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-330" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="PG">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="PG">
                                <path d="M0 85.333h512V426.67H0z"></path>
                                <path fill="#A2001D" d="M0 85.33h512v341.332"></path>
                                <path
                                  d="m204.631 326.488 2.762 8.504h8.941l-7.233 5.255 2.763 8.502-7.233-5.254-7.233 5.254 2.762-8.502-7.233-5.255h8.94zm-22.834-81.622 4.605 14.172h14.901l-12.056 8.757 4.605 14.172-12.055-8.759-12.055 8.759 4.606-14.172-12.056-8.757h14.901zm0 103.883 4.604 14.173h14.902l-12.057 8.757 4.606 14.173-12.055-8.759-12.055 8.759 4.604-14.173-12.054-8.757h14.899zm43.566-66.782 4.606 14.172h14.901l-12.056 8.758 4.605 14.172-12.056-8.759-12.054 8.759 4.606-14.172-12.056-8.758h14.901zm-87.133 0 4.606 14.172h14.899l-12.054 8.758 4.603 14.172-12.054-8.759-12.055 8.759 4.605-14.172-12.055-8.758h14.9z"
                                  fill="#FFF"></path>
                                <path fill="#FFDA44"
                                  d="M376.526 204.163c-7.628-7.628-17.538-12.133-28.189-12.908l31.88-24.795c-12.698-12.698-29.714-18.431-46.319-17.218a44.31 44.31 0 0 0-11.396-19.511l-12.593 25.186a18.47 18.47 0 0 0-3.148-4.197c-7.245-7.245-18.991-7.244-26.234 0s-7.245 18.99 0 26.234a18.536 18.536 0 0 0 4.197 3.148l-25.186 12.593a44.303 44.303 0 0 0 19.519 11.399c-1.217 16.606 4.511 33.619 17.209 46.317L324.12 214.6a11.053 11.053 0 0 1 7.807-3.202c2.973 0 5.768 1.158 7.87 3.26a11.055 11.055 0 0 1 3.26 7.87c0 2.974-1.158 5.768-3.26 7.87l10.494 10.494c4.905-4.905 7.607-11.428 7.607-18.364 0-5.675-1.81-11.071-5.153-15.534a29.492 29.492 0 0 1 13.288 7.662c11.573 11.572 11.573 30.403 0 41.975l10.494 10.494c8.409-8.409 13.039-19.59 13.039-31.481-.001-11.892-4.632-23.072-13.04-31.481z">
                                </path>
                              </svg>
                              <p>Papua New Guinea<br>+(675)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-332" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="PY">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="PY">
                                <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#D80027" d="M0 85.337h512v113.775H0z"></path>
                                <path fill="#0052B4" d="M0 312.888h512v113.775H0z"></path>
                                <path fill="#6DA544"
                                  d="m289.579 216.738-12.592 12.592c5.37 5.372 8.693 12.792 8.693 20.988 0 16.392-13.289 29.68-29.68 29.68-16.392 0-29.68-13.289-29.68-29.68 0-8.195 3.322-15.616 8.693-20.988l-12.592-12.592c-8.594 8.594-13.91 20.466-13.91 33.579 0 26.228 21.261 47.489 47.489 47.489s47.489-21.261 47.489-47.489c0-13.112-5.316-24.985-13.91-33.579z">
                                </path>
                                <path fill="#FFDA44"
                                  d="m256 232.51 4.421 13.605h14.304l-11.573 8.408 4.421 13.604L256 259.719l-11.573 8.408 4.421-13.604-11.573-8.408h14.304z">
                                </path>
                              </svg>
                              <p>Paraguay<br>+(595)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-334" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="PE">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="PE">
                                <path fill="#FFF" d="M0 85.331h512v341.326H0z"></path>
                                <path d="M0 85.331h170.663v341.337H0zm341.337 0H512v341.337H341.337z" fill="#D80027">
                                </path>
                              </svg>
                              <p>Peru<br>+(51)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-336" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="PH">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="PH">
                                <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#0052B4" d="M512 85.337V256H256L0 85.337z"></path>
                                <path fill="#D80027" d="M512 256v170.663H0L256 256z"></path>
                                <path
                                  d="m161.908 256-27.288-12.835 14.532-26.428-29.632 5.668-3.755-29.933-20.64 22.015-20.639-22.015-3.755 29.933-29.631-5.669 14.531 26.428L28.343 256l27.288 12.835L41.1 295.263l29.633-5.668 3.753 29.933 20.639-22.015 20.64 22.015 3.755-29.933 29.631 5.669-14.532-26.427zM21.789 117.607l9.081 12.696 14.879-4.714-9.268 12.56 9.081 12.694-14.809-4.932-9.268 12.559.117-15.608-14.809-4.934 14.88-4.712zm0 235.923 9.081 12.696 14.879-4.714-9.268 12.56 9.081 12.695-14.809-4.933-9.268 12.558.117-15.607-14.809-4.934 14.88-4.712zm188.606-117.961-9.081 12.695-14.879-4.713 9.268 12.559-9.081 12.696 14.809-4.933 9.268 12.558-.117-15.607 14.809-4.934-14.88-4.713z"
                                  fill="#FFDA44"></path>
                              </svg>
                              <p>Philippines<br>+(63)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-338" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="PN">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="PN">
                                <path fill="#0052B4" d="M0 85.333h512V426.67H0z"></path>
                                <path fill="#ACABB1"
                                  d="M400.696 219.822 384 225.387l-16.696-5.565-5.565-13.913 5.565-13.913h33.392l-5.566 13.913z">
                                </path>
                                <path fill="#338AF3"
                                  d="M345.043 219.822v61.217c0 29.821 38.957 38.957 38.957 38.957s38.957-9.137 38.957-38.957v-61.217h-77.914z">
                                </path>
                                <path fill="#6DA544"
                                  d="M348.555 295.541C358.131 313.927 384 319.996 384 319.996s25.869-6.069 35.445-24.455L384 236.518l-35.445 59.023z">
                                </path>
                                <path fill="#FFDA44"
                                  d="M422.957 280.421 384 219.822l-38.957 60.599v.618c0 5.518 1.337 10.328 3.512 14.503L384 240.405l35.445 55.137c2.175-4.175 3.512-8.983 3.512-14.503v-.618z">
                                </path>
                                <path fill="#FFF"
                                  d="M256 85.333v30.553l-45.167 25.099H256v59.359h-59.103L256 233.179v22.817h-26.68l-73.494-40.826v40.826h-55.652v-48.573l-87.43 48.573H0v-30.554l45.167-25.098H0v-59.359h59.103L0 108.139V85.333h26.68l73.494 40.825V85.333h55.652v48.572l87.43-48.572z">
                                </path>
                                <path fill="#D80027" d="M144 85.33h-32v69.332H0v32h112v69.334h32v-69.334h112v-32H144z">
                                </path>
                                <path fill="#0052B4" d="M155.826 200.344 256 255.996v-15.737l-71.847-39.915z"></path>
                                <path fill="#FFF" d="M155.826 200.344 256 255.996v-15.737l-71.847-39.915z"></path>
                                <path
                                  d="M155.826 200.344 256 255.996v-15.737l-71.847-39.915zm-83.98 0L0 240.259v15.737l100.174-55.652z"
                                  fill="#D80027"></path>
                                <path fill="#0052B4" d="M100.174 140.982 0 85.33v15.737l71.847 39.915z"></path>
                                <path fill="#FFF" d="M100.174 140.982 0 85.33v15.737l71.847 39.915z"></path>
                                <path
                                  d="M100.174 140.982 0 85.33v15.737l71.847 39.915zm83.98 0L256 101.067V85.33l-100.174 55.652z"
                                  fill="#D80027"></path>
                              </svg>
                              <p>Pitcairn<br>+(64)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-340" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="PL">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="PL">
                                <g fill="#FFF">
                                  <path d="M0 85.337h512v341.326H0z"></path>
                                  <path d="M0 85.337h512V256H0z"></path>
                                </g>
                                <path fill="#D80027" d="M0 256h512v170.663H0z"></path>
                              </svg>
                              <p>Poland<br>+(48)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-342" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="PT">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="PT">
                                <path fill="#D80027" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#6DA544" d="M196.641 85.337v341.326H0V85.337z"></path>
                                <circle fill="#FFDA44" cx="196.641" cy="256" r="64"></circle>
                                <path fill="#D80027"
                                  d="M160.638 224v40.001c0 19.882 16.118 36 36 36s36-16.118 36-36V224h-72z"></path>
                                <path fill="#FFF"
                                  d="M196.638 276c-6.617 0-12-5.383-12-12v-16h24.001v16c-.001 6.616-5.385 12-12.001 12z">
                                </path>
                              </svg>
                              <p>Portugal<br>+(351)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-344" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="PR">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="PR">
                                <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                <path d="M0 85.337h512V153.6H0zm0 136.526h512v68.263H0zM0 358.4h512v68.263H0z"
                                  fill="#D80027"></path>
                                <path fill="#0052B4" d="M256 256.006 0 426.668V85.331z"></path>
                                <path fill="#FFF"
                                  d="m83.477 195.132 15.107 46.498h48.894l-39.554 28.739 15.107 46.499-39.554-28.738-39.555 28.738 15.11-46.499-39.554-28.739H68.37z">
                                </path>
                              </svg>
                              <p>Puerto Rico<br>+(1)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-346" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="QA">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="QA">
                                <path fill="#751A46" d="M0 0h512v342H0z"></path>
                                <path fill="#FFF"
                                  d="M0 0v342h150.3l37.7-19.6-37.7-18.9 37.7-19-37.7-18.9 37.7-19-37.7-19 37.7-18.9-37.7-19 37.7-19-37.7-18.9 37.7-19-37.7-18.9 37.7-19-37.7-19L188 57l-37.7-19L188 19.1 150.3 0z">
                                </path>
                              </svg>
                              <p>Qatar<br>+(974)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-348" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="CG">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 513 342" class="flag" code="CG">
                                <path fill="#da1a35" d="M0 85.331h513v342H0z"></path>
                                <path fill="#009543" d="M443.726 85.331 102.4 426.657H0V85.331z"></path>
                                <path fill="#fbde4a" d="M500.124 85.331 158.798 426.657H11.876L353.202 85.331z"></path>
                              </svg>
                              <p>Republic of the Congo<br>+(242)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-350" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="RE">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 26.666 640 426.666" class="flag" code="RE">
                                <g fill-rule="evenodd" stroke-width="1pt">
                                  <path fill="#fff" d="M0 0h640v480H0z"></path>
                                  <path fill="#00267f" d="M0 0h213.3v480H0z"></path>
                                  <path fill="#f31830" d="M426.7 0H640v480H426.7z"></path>
                                </g>
                              </svg>
                              <p>Reunion<br>+(262)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-352" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="RO">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="RO">
                                <path fill="#FFDA44" d="M0 85.331h512v341.326H0z"></path>
                                <path fill="#0052B4" d="M0 85.331h170.663v341.337H0z"></path>
                                <path fill="#D80027" d="M341.337 85.331H512v341.337H341.337z"></path>
                              </svg>
                              <p>Romania<br>+(40)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-354" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="RU">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="RU">
                                <path fill="#FFF" d="M0 85.33v341.332h512V85.33z"></path>
                                <path fill="#0052B4" d="M0 85.333h512V426.67H0z"></path>
                                <path fill="#FFF" d="M0 85.333h512v113.775H0z"></path>
                                <path fill="#D80027" d="M0 312.884h512v113.775H0z"></path>
                              </svg>
                              <p>Russia<br>+(7)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-356" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="RW">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="RW">
                                <path fill="#338AF3" d="M0 85.331h512v341.337H0z"></path>
                                <path fill="#FFDA44" d="M0 255.994h512v81.619H0z"></path>
                                <path fill="#496E2D" d="M0 337.614h512v89.043H0z"></path>
                                <path fill="#FFDA44"
                                  d="m278.261 185.209 20.844 9.804-11.099 20.186 22.632-4.33 2.868 22.865 15.765-16.816 15.766 16.816 2.867-22.865 22.633 4.33-11.099-20.186 20.843-9.804-20.844-9.805 11.1-20.185-22.633 4.329-2.868-22.864-15.765 16.816-15.766-16.816-2.867 22.864-22.634-4.329 11.1 20.187z">
                                </path>
                              </svg>
                              <p>Rwanda<br>+(250)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-358" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="BL">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="BL">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#E6BC00"
                                  d="M157.31 199.76s-9.04 43.93-19.31 40.39c-10.62-3.54-17.53-18.76-17.53-18.76l-14.52 21.24s38.18 8.48 41.01 5.47c1.22-1.14 8.21-15.1 10.34-26.05v-22.29zm-56.13 60.57s-2.48 20.18-1.06 22.66c1.24 2.3 39.48 11.33 39.48 11.33s-24.96 16.46-29.74 20.54L91.8 284.94l-.71-24.61h10.09zm11.33-165.69s39.65 41.6 40.36 45.5c.71 3.72-4.25 3.19-4.25 3.19s-44.79-37.53-49.92-41.07c-5.31-3.55 13.81-7.62 13.81-7.62z">
                                </path>
                                <path fill="#ADADAD"
                                  d="M99.41 104.73s16.99-.71 16.64-11.51c-.35-10.62-11.15-14.87-19.12-12.39-7.97 2.3-23.01 13.45-13.63 35.05 9.38 21.42 23.37 29.39 26.2 47.8 0 0-5.46 9.86-19.12.35-16.9-11.77-6.2-38.24-10.44-44.96-4.25-7.08-40.95-38.92-40.95-38.92s-30.24 39.37-18 74.92c16.95 49.21 51.74 31.98 64.61 36.76 0 0-42.13 61.96-49.57 67.09 0 0 24.08 8.32 47.8-18.76 0 0 5.84 9.74 7.08 20.18h10.27c4.78-26.2 51.51-64.26 49.92-82.32-1.77-21.25-49.21-49.39-51.69-73.29z">
                                </path>
                                <path fill="#E6BC00"
                                  d="M359.17 201.27s8.96 42.43 19.23 38.89c10.62-3.54 17.53-18.76 17.53-18.76l14.52 21.24s-37 8.48-39.83 5.47c-1.21-1.14-9.32-13.79-11.52-24.66l.07-22.18zm56.05 59.06s2.48 20.18 1.06 22.66c-1.24 2.3-39.48 11.33-39.48 11.33s24.96 16.46 29.74 20.54l18.06-29.92.71-24.61h-10.09zM403.89 94.64s-39.65 41.6-40.36 45.5c-.71 3.72 4.25 3.19 4.25 3.19s44.79-37.53 49.92-41.07c5.14-3.55-13.81-7.62-13.81-7.62z">
                                </path>
                                <path fill="#125ECC"
                                  d="M157.31 87.06H359.1v145.46c0 16.06-9.69 21.39-21.91 31.85l-45.92 39.41c-18.25 15.62-47.91 15.57-66.07 0l-46.01-39.43c-12.08-10.35-21.88-15.71-21.88-31.82V87.06z">
                                </path>
                                <path fill="#FFE600"
                                  d="M200.55 147.71c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41zm57.65-3c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41zm57.65 3c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41zM214.96 274.43c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41c.01 7.96-6.45 14.41-14.41 14.41zm43.24 14.42c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41c0 7.95-6.45 14.41-14.41 14.41zm43.24-14.42c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41z">
                                </path>
                                <path fill="#D60537" d="M157.31 175.36H359.1v57.65H157.31v-57.65z"></path>
                                <path fill="#EACE00"
                                  d="M142.9 43.82s57.65-14.41 115.31-14.41 115.31 14.41 115.31 14.41l-14.41 57.65s-50.45-14.41-100.89-14.41-100.89 14.41-100.89 14.41L142.9 43.82z">
                                </path>
                                <path fill="#7A6920"
                                  d="M258.2 72.65c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41zm57.65 5c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41zm-115.3 0c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41z">
                                </path>
                                <path fill="#ADADAD"
                                  d="M365.08 178.02c-1.59 18.06 45.14 56.12 49.92 82.32h10.27c1.24-10.44 7.08-20.18 7.08-20.18 23.72 27.09 47.8 18.76 47.8 18.76-7.44-5.13-49.57-67.09-49.57-67.09 12.88-4.78 47.67 12.45 64.61-36.76 12.24-35.55-18-74.92-18-74.92s-36.7 31.84-40.95 38.92c-4.25 6.73 6.46 33.2-10.44 44.96-13.66 9.51-19.12-.35-19.12-.35 2.83-18.41 16.82-26.38 26.2-47.8 9.38-21.6-5.66-32.75-13.63-35.05-7.97-2.48-18.76 1.77-19.12 12.39-.35 10.8 16.64 11.51 16.64 11.51-2.48 23.9-49.92 52.04-51.69 73.29z">
                                </path>
                                <circle fill="#FFF" cx="258.2" cy="204.19" r="16.93"></circle>
                              </svg>
                              <p>Saint Barthelemy<br>+(590)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-360" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="SH">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 341.3" class="flag" code="SH">
                                <path fill="#0052B4" d="M0 0h512v341.3H0z"></path>
                                <path fill="#FFF"
                                  d="M256 0v117.4h-46.1l46.1 30.7v22.6h-22.6L160 121.8v48.9H96v-48.9l-73.4 48.9H0v-22.6l46.1-30.7H0v-64h46.1L0 22.7V0h22.6L96 48.9V0h64v48.9L233.4 0z">
                                </path>
                                <g fill="#D80027">
                                  <path d="M144 0h-32v69.4H0v32h112v69.3h32v-69.3h112v-32H144z"></path>
                                  <path d="M0 0v15.1l57.4 38.3H80zm256 0v15.1l-57.4 38.3H176z"></path>
                                </g>
                                <path fill="#2E52B2" d="M256 22.7v30.7h-46.1z"></path>
                                <path d="M0 0v15.1l57.4 38.3H80zm256 0v15.1l-57.4 38.3H176z" fill="#D80027"></path>
                                <path fill="#2E52B2" d="M256 22.7v30.7h-46.1z"></path>
                                <path d="M0 170.7v-15.1l57.4-38.2H80zm256 0v-15.1l-57.4-38.2H176z" fill="#D80027">
                                </path>
                                <path fill="#29DBFF"
                                  d="M449 139.7c-.1 44.4-7.2 92.1-65 114.9-57.8-22.8-64.9-70.5-65-114.9h130z"></path>
                                <path fill="#ffda44"
                                  d="M449 139.7c0-16.7-.9-32.9-.5-47.1C426.9 83 398.4 81 383.9 81s-42.9 2-64.6 11.6c.4 14.2-.5 30.4-.5 47.1H449z">
                                </path>
                                <path fill="#BF521B"
                                  d="m369.5 204.5.3 10.3-12.8.2 4.9 13.2h-17.3c-18-20.2-23.4-42.4-24.9-68.1l9.1-9.7 8.3 14.3 10.8-12.8 7 7.8.8 15.7 13.8 29.1z">
                                </path>
                                <path fill="#474747"
                                  d="m436.6 192.5-8.6 18.3h-47l-29.2-19.5 25.7 10.5h25.1l3.7-6.5 7.2.2 2-3z"></path>
                              </svg>
                              <p>Saint Helena<br>+(290)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-362" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="KN">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="KN">
                                <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                <path fill="#6DA544" d="M512 0H0v342"></path>
                                <path fill="#FFDA44" d="M307.7 0 0 194.5V342h206.9L513 148.5V0z"></path>
                                <path d="M513 0H385.2L0 249.4V341l126.2 1L513 91.6z"></path>
                                <path
                                  d="m141.1 187 31.2 24 32.3-22.2-13.1 37 31.1 23.9-39.2-1.1-13.2 37-11.1-37.6-39.2-1.1 32.3-22.2zM310.6 70.8l31.2 23.9 32.3-22.2-13.1 37 31.1 23.9-39.2-1.1-13.2 37-11.1-37.6-39.2-1.1 32.4-22.2z"
                                  fill="#FFF"></path>
                              </svg>
                              <p>Saint Kitts and Nevis<br>+(1-869)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-364" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="LC">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="LC">
                                <path fill="#55B2FF" d="M0 0h513v342H0z"></path>
                                <path fill="#F3F3F3" d="M148.5 298.1h216l-108-254.2z"></path>
                                <path fill="#333" d="m186 272.7 70.5-160.3L327 272.7z"></path>
                                <path fill="#FFDA44" d="M148.5 298.1h216l-108-101.7z"></path>
                              </svg>
                              <p>Saint Lucia<br>+(1-758)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-366" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="MF">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 108 72" class="flag" code="MF">
                                <path d="M0 0h108v72H0z" fill="#003787"></path>
                                <path d="M0 0h108L60 48v24H48V48z" fill="#fff"></path>
                                <circle cx="54" cy="30" r="8" fill="#f9d90f"></circle>
                                <path d="M44 30h20L54 48z" fill="#fff"></path>
                                <path d="M54 48 38 33h32z" fill="#cf142b"></path>
                              </svg>
                              <p>Saint Martin<br>+(590)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-368" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="PM">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 26.666 640 426.666" class="flag" code="PM">
                                <g fill-rule="evenodd" stroke-width="1pt">
                                  <path fill="#fff" d="M0 0h640v480H0z"></path>
                                  <path fill="#00267f" d="M0 0h213.3v480H0z"></path>
                                  <path fill="#f31830" d="M426.7 0H640v480H426.7z"></path>
                                </g>
                              </svg>
                              <p>Saint Pierre and Miquelon<br>+(508)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-370" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="VC">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="VC">
                                <path fill="#FFDA44" d="M0 85.331h512v341.337H0z"></path>
                                <path fill="#338AF3" d="M0 85.331h170.663v341.337H0z"></path>
                                <path
                                  d="M341.337 85.331H512v341.337H341.337zM214.261 283.82l-33.393-50.086 33.392-50.087 33.392 50.087zm83.478 0-33.391-50.086 33.391-50.087 33.393 50.087zM256 350.603l-33.391-50.087L256 250.429l33.391 50.087z"
                                  fill="#6DA544"></path>
                              </svg>
                              <p>Saint Vincent and the Grenadines<br>+(1-784)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-372" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="WS">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="WS">
                                <path fill="#D80027" d="M0 85.331h512v341.337H0z"></path>
                                <path fill="#0052B4" d="M0 85.331h256v170.663H0z"></path>
                                <path
                                  d="m165.483 181.79 2.764 8.504h8.939l-7.232 5.254 2.763 8.503-7.234-5.255-7.233 5.255 2.763-8.503-7.233-5.254h8.94zm-44.904-66.783 4.606 14.173h14.9l-12.055 8.757 4.605 14.171-12.056-8.758-12.054 8.758 4.605-14.171-12.056-8.757h14.901zm44.522 14.841 4.606 14.172h14.9l-12.055 8.757 4.604 14.173-12.055-8.76-12.054 8.76 4.604-14.173-12.055-8.757h14.9zm-35.192 59.363 4.606 14.172h14.9l-12.055 8.758 4.604 14.171-12.055-8.759-12.054 8.759 4.604-14.171-12.055-8.758h14.9zm-39.01-37.103 4.605 14.173h14.9l-12.055 8.757 4.604 14.173-12.054-8.76-12.055 8.76 4.604-14.173-12.055-8.757h14.9z"
                                  fill="#FFF"></path>
                              </svg>
                              <p>Samoa<br>+(685)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-374" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="SM">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="SM">
                                <path fill="#338AF3" d="M0 85.34h512v341.326H0z"></path>
                                <path fill="#FFF" d="M512 85.334v166.69L0 256.175V85.334z"></path>
                                <path fill="#6DA544"
                                  d="M323.744 203.099 256 270.843l-67.744-67.744a81.156 81.156 0 0 0-13.879 45.483v22.261c0 35.744 23.097 66.193 55.148 77.213-4.277 8.385-3.556 18.848 2.712 26.671l24.258-19.439 24.258 19.439c6.342-7.915 7.011-18.534 2.564-26.968 31.614-11.261 54.308-41.485 54.308-76.916v-22.261a81.174 81.174 0 0 0-13.881-45.483z">
                                </path>
                                <path fill="#FFDA44"
                                  d="M256 330.206c-32.732 0-59.362-26.63-59.362-59.362v-22.261c0-32.733 26.63-59.363 59.362-59.363s59.362 26.63 59.362 59.362v22.261c0 32.733-26.63 59.363-59.362 59.363z">
                                </path>
                                <path fill="#338AF3"
                                  d="M293.101 270.843v-22.261c0-20.458-16.643-37.101-37.101-37.101s-37.101 16.643-37.101 37.101v22.261L256 278.264l37.101-7.421z">
                                </path>
                                <path fill="#6DA544"
                                  d="M218.899 270.843c0 20.458 16.643 37.101 37.101 37.101s37.101-16.643 37.101-37.101h-74.202z">
                                </path>
                                <path fill="#FFDA44"
                                  d="M300.522 189.22c0-12.295-9.966-22.261-22.261-22.261a22.173 22.173 0 0 0-14.84 5.672v-13.093h7.421v-14.84h-7.421v-7.421h-14.84v7.421h-7.421v14.84h7.421v13.093a22.177 22.177 0 0 0-14.841-5.672c-12.295 0-22.261 9.966-22.261 22.261 0 6.591 2.867 12.512 7.421 16.589v13.093h74.203v-13.093c4.552-4.077 7.419-9.997 7.419-16.589z">
                                </path>
                              </svg>
                              <p>San Marino<br>+(378)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-376" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="ST">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="ST">
                                <path fill="#FFDA44" d="M0 85.337h512v341.326H0z"></path>
                                <path d="M0 85.337h512v113.775H0zm0 227.551h512v113.775H0z" fill="#6DA544"></path>
                                <path fill="#D80027" d="M256 256.006 0 426.668V85.331z"></path>
                                <path
                                  d="m302.049 226.318 7.368 22.674h23.842l-19.288 14.016 7.366 22.674-19.288-14.015-19.287 14.015 7.366-22.674-19.288-14.016h23.842zm74.203 0 7.367 22.674h23.842l-19.288 14.016 7.367 22.674-19.288-14.015-19.288 14.015 7.367-22.674-19.288-14.016h23.842z">
                                </path>
                              </svg>
                              <p>Sao Tome and Principe<br>+(239)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-378" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="SA">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="SA">
                                <path fill="#055e1c" d="M0 85.333h512v341.333H0z"></path>
                                <g fill="#FFF">
                                  <path
                                    d="M183.548 289.386c0 12.295 9.731 22.261 21.736 22.261h65.208c0 10.244 8.11 18.551 18.114 18.551h21.736c10.004 0 18.114-8.306 18.114-18.551v-22.261H183.548zm146.716-107.595v51.942c0 8.183-6.5 14.84-14.491 14.84v22.261c19.976 0 36.226-16.643 36.226-37.101v-51.942h-21.735zm-155.773 51.943c0 8.183-6.5 14.84-14.491 14.84v22.261c19.976 0 36.226-16.643 36.226-37.101v-51.942H174.49v51.942z">
                                  </path>
                                  <path
                                    d="M297.661 181.788h21.736v51.942h-21.736zm-32.604 29.685c0 2.046-1.625 3.71-3.623 3.71-1.998 0-3.623-1.664-3.623-3.71v-29.682h-21.736v29.682c0 2.046-1.625 3.71-3.623 3.71s-3.623-1.664-3.623-3.71v-29.682h-21.736v29.682c0 14.32 11.376 25.971 25.358 25.971 5.385 0 10.38-1.733 14.491-4.677 4.11 2.944 9.106 4.677 14.491 4.677 1.084 0 2.15-.078 3.2-.215-1.54 6.499-7.255 11.345-14.068 11.345v22.261c19.976 0 36.226-16.643 36.226-37.101v-51.943h-21.736l.002 29.682z">
                                  </path>
                                  <path d="M207.093 248.57h32.601v22.261h-32.601z"></path>
                                </g>
                              </svg>
                              <p>Saudi Arabia<br>+(966)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-380" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="SN">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="SN">
                                <path fill="#FFDA44" d="M0 85.331h512v341.326H0z"></path>
                                <path fill="#D80027" d="M330.207 85.331H512v341.337H330.207z"></path>
                                <path
                                  d="M0 85.331h181.793v341.337H0zm255.999 111.301 14.733 45.347h47.685l-38.576 28.029 14.734 45.348-38.576-28.026-38.577 28.026 14.737-45.348-38.576-28.029h47.681z"
                                  fill="#496E2D"></path>
                              </svg>
                              <p>Senegal<br>+(221)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-382" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="RS">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="RS">
                                <path fill="#0052B4" d="M0 85.331h512v341.337H0z"></path>
                                <path fill="#D80027" d="M0 85.331h512v113.775H0z"></path>
                                <path fill="#FFF" d="M0 312.882h512v113.775H0z"></path>
                                <path fill="#D80027"
                                  d="M129.468 181.793v85.136c0 48.429 63.267 63.267 63.267 63.267S256 315.356 256 266.929v-85.136H129.468z">
                                </path>
                                <path
                                  d="M155.634 196.634h74.201v-29.681l-14.841 7.42-22.261-22.26-22.259 22.26-14.84-7.42zm85.526 82.148-48.231-48.231-48.231 48.231 15.741 15.74 32.49-32.49 32.49 32.49z"
                                  fill="#FFDA44"></path>
                                <path fill="#FFF"
                                  d="M241.16 233.734h-22.504a14.74 14.74 0 0 0 2.001-7.418c0-8.196-6.645-14.84-14.84-14.84-5.663 0-10.581 3.172-13.083 7.836-2.502-4.663-7.421-7.836-13.083-7.836-8.195 0-14.84 6.644-14.84 14.84 0 2.706.736 5.235 2.001 7.418h-22.114c0 8.196 7.139 14.84 15.334 14.84h-.494c0 8.196 6.644 14.84 14.84 14.84 0 7.257 5.211 13.286 12.094 14.576l-11.694 26.401a48.075 48.075 0 0 0 18.149 3.544 48.079 48.079 0 0 0 18.149-3.544l-11.694-26.401c6.883-1.29 12.094-7.319 12.094-14.576 8.196 0 14.84-6.644 14.84-14.84h-.494c8.199 0 15.338-6.644 15.338-14.84z">
                                </path>
                              </svg>
                              <p>Serbia<br>+(381)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-384" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="SC">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="SC">
                                <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#FFDA44" d="M235.454 85.337 0 426.663 427.345 85.337z"></path>
                                <path fill="#6DA544" d="M512 329.393 0 426.663h512z"></path>
                                <path fill="#D80027" d="M512 85.337h-84.655L0 426.663l512-204.512z"></path>
                                <path fill="#0052B4" d="M0 85.337v341.326L235.454 85.337z"></path>
                              </svg>
                              <p>Seychelles<br>+(248)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-386" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="SL">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="SL">
                                <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#6DA544" d="M0 85.337h512v113.775H0z"></path>
                                <path fill="#338AF3" d="M0 312.888h512v113.775H0z"></path>
                              </svg>
                              <p>Sierra Leone<br>+(232)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-388" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="SG">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="SG">
                                <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#D80027" d="M0 85.337h512V256H0z"></path>
                                <g fill="#FFF">
                                  <path
                                    d="M83.478 170.666c0-24.865 17.476-45.637 40.812-50.734a52.059 52.059 0 0 0-11.13-1.208c-28.688 0-51.942 23.254-51.942 51.941s23.255 51.942 51.942 51.942c3.822 0 7.543-.425 11.13-1.208-23.336-5.095-40.812-25.867-40.812-50.733zm66.783-48.231 3.684 11.337h11.921l-9.645 7.007 3.684 11.337-9.644-7.006-9.645 7.006 3.685-11.337-9.645-7.007h11.921z">
                                  </path>
                                  <path
                                    d="m121.344 144.696 3.683 11.337h11.921l-9.645 7.007 3.684 11.337-9.643-7.006-9.645 7.006 3.685-11.337-9.645-7.007h11.921zm57.834 0 3.684 11.337h11.921l-9.645 7.007 3.684 11.337-9.644-7.006-9.644 7.006 3.685-11.337-9.645-7.007h11.921zm-11.131 33.391 3.684 11.337h11.921l-9.644 7.007 3.684 11.337-9.645-7.006-9.643 7.006 3.684-11.337-9.644-7.007h11.92zm-35.573 0 3.683 11.337h11.921l-9.644 7.007 3.684 11.337-9.644-7.006-9.644 7.006 3.684-11.337-9.644-7.007h11.92z">
                                  </path>
                                </g>
                              </svg>
                              <p>Singapore<br>+(65)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-390" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="SX">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="SX">
                                <path fill="#0052B4" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#D80027" d="M512 85.331v166.69L0 256.173V85.331z"></path>
                                <path fill="#FFF" d="M256 256.006 0 426.668V85.331z"></path>
                                <g fill="#FFDA44">
                                  <path
                                    d="M59.621 256a59.546 59.546 0 0 0-.193 4.57c0 32.821 26.607 59.429 59.429 59.429s59.429-26.607 59.429-59.429c0-1.539-.078-3.061-.193-4.57H59.621z">
                                  </path>
                                  <circle cx="118.862" cy="210.287" r="18.286"></circle>
                                </g>
                                <path fill="#D80027"
                                  d="M77.715 205.714v59.429c0 31.494 41.144 41.143 41.144 41.143s41.144-9.649 41.144-41.143v-59.429H77.715z">
                                </path>
                                <path fill="#338AF3"
                                  d="M118.877 287.148c-7.632-2.746-22.876-9.767-22.876-22.006v-41.144h45.715v41.144c-.001 12.28-15.244 19.283-22.839 22.006z">
                                </path>
                                <path fill="#F3F3F3"
                                  d="M128.001 246.856v-9.142l-9.144-4.571-9.142 4.571v9.142l-4.571 4.573v18.285h27.428v-18.285z">
                                </path>
                              </svg>
                              <p>Sint Maarten<br>+(1-721)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-392" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="SK">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="SK">
                                <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#0052B4" d="M0 196.641h512v118.717H0z"></path>
                                <path fill="#D80027" d="M0 315.359h512v111.304H0z"></path>
                                <path fill="#FFF"
                                  d="M129.468 181.799v85.136c0 48.429 63.267 63.267 63.267 63.267S256 315.362 256 266.935v-85.136H129.468z">
                                </path>
                                <path fill="#D80027"
                                  d="M146.126 184.294v81.941c0 5.472 1.215 10.64 3.623 15.485h85.97c2.408-4.844 3.623-10.012 3.623-15.485v-81.941h-93.216z">
                                </path>
                                <path fill="#FFF"
                                  d="M221.301 241.427h-21.425v-14.283h14.284v-14.283h-14.284v-14.284h-14.283v14.284h-14.282v14.283h14.282v14.283h-21.426v14.284h21.426v14.283h14.283v-14.283h21.425z">
                                </path>
                                <path fill="#0052B4"
                                  d="M169.232 301.658c9.204 5.783 18.66 9.143 23.502 10.636 4.842-1.494 14.298-4.852 23.502-10.636 9.282-5.833 15.79-12.506 19.484-19.939a24.878 24.878 0 0 0-14.418-4.583c-1.956 0-3.856.232-5.682.657-3.871-8.796-12.658-14.94-22.884-14.94-10.227 0-19.013 6.144-22.884 14.94a25.048 25.048 0 0 0-5.682-.657 24.88 24.88 0 0 0-14.418 4.583c3.691 7.433 10.198 14.106 19.48 19.939z">
                                </path>
                              </svg>
                              <p>Slovakia<br>+(421)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-394" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="SI">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="SI">
                                <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#0052B4" d="M0 199.112h512v113.775H0z"></path>
                                <path fill="#D80027" d="M0 312.888h512v113.775H0z"></path>
                                <path fill="#FFF"
                                  d="M233.606 196.639v14.837c0 34.081-44.522 44.522-44.522 44.522s-44.522-10.44-44.522-44.522v-14.837l-.145-44.188 89.043-.266.146 44.454z">
                                </path>
                                <path fill="#0052B4"
                                  d="M233.606 196.639v14.837c0 34.081-44.522 44.522-44.522 44.522s-44.522-10.44-44.522-44.522v-14.837l-.145-44.188 89.043-.266.146 44.454z">
                                </path>
                                <path fill="#FFF"
                                  d="M233.606 196.639v14.837c0 34.081-44.522 44.522-44.522 44.522s-44.522-10.44-44.522-44.522v-14.837l14.848 14.837 29.674-22.261 29.685 22.261 14.837-14.837z">
                                </path>
                              </svg>
                              <p>Slovenia<br>+(386)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-396" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="SB">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="SB">
                                <path fill="#496E2D" d="M0 85.334h512v341.337H0z"></path>
                                <path fill="#0052B4" d="M0 426.663V85.329h512"></path>
                                <path fill="#FFDA44" d="M0 396.494v30.169h45.255L512 115.499v-30.17h-45.255z"></path>
                                <path
                                  d="m85.688 108.787 5.12 15.756h16.566l-13.403 9.737 5.12 15.757-13.403-9.738-13.405 9.738 5.12-15.757L64 124.543h16.567zm84.624 0 5.121 15.756H192l-13.403 9.737 5.12 15.757-13.405-9.738-13.403 9.738 5.12-15.757-13.403-9.737h16.566zm-84.624 82.502 5.12 15.756h16.566l-13.403 9.738 5.12 15.757-13.403-9.739-13.405 9.739 5.12-15.757L64 207.045h16.567zm84.624 0 5.121 15.756H192l-13.403 9.738 5.12 15.757-13.405-9.739-13.403 9.739 5.12-15.757-13.403-9.738h16.566zM128 150.037l5.12 15.756h16.568l-13.405 9.738 5.12 15.758L128 181.55l-13.403 9.739 5.12-15.758-13.405-9.738h16.568z"
                                  fill="#FFF"></path>
                              </svg>
                              <p>Solomon Islands<br>+(677)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-398" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="SO">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="SO">
                                <path fill="#338AF3" d="M0 85.331h512v341.337H0z"></path>
                                <path fill="#FFF"
                                  d="m256 157.273 22.663 69.748H352l-59.332 43.106 22.664 69.749L256 296.769l-59.332 43.107 22.664-69.749L160 227.021h73.337z">
                                </path>
                              </svg>
                              <p>Somalia<br>+(252)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-400" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="ZA">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="ZA">
                                <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                <path d="M114.024 256.001 0 141.926v228.17z"></path>
                                <path fill="#ffb915" d="M161.192 256 0 94.7v47.226l114.024 114.075L0 370.096v47.138z">
                                </path>
                                <path fill="#007847"
                                  d="M509.833 289.391c.058-.44.804-.878 2.167-1.318v-65.464H222.602L85.33 85.337H0V94.7L161.192 256 0 417.234v9.429h85.33l137.272-137.272h287.231z">
                                </path>
                                <path fill="#000c8a" d="M503.181 322.783H236.433l-103.881 103.88H512v-103.88z"></path>
                                <path fill="#e1392d" d="M503.181 189.217H512V85.337H132.552l103.881 103.88z"></path>
                              </svg>
                              <p>South Africa<br>+(27)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-402" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="KR">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 900 600" class="flag" code="KR">
                                <path fill="#FFF" d="M0 0h900v600H0z"></path>
                                <g transform="rotate(-56.31)">
                                  <path
                                    d="M-75 228.3H75m-150 37.5H75m-150 37.5H75m-150 475H75m-150 37.5H75m-150 37.5H75"
                                    stroke="#000" stroke-width="25"></path>
                                  <path stroke="#FFF" stroke-width="12.5" d="M0 753.3v125"></path>
                                  <circle fill="#ca163a" cy="540.8" r="150"></circle>
                                  <path fill="#0e4896"
                                    d="M0 390.8c-41.4 0-75 33.6-75 75s33.6 75 75 75 75 33.6 75 75-33.6 75-75 75c-82.8 0-150-67.2-150-150s67.2-150 150-150z">
                                  </path>
                                </g>
                                <path
                                  d="m231.56 535.73-83.205-124.808M262.76 514.928l-83.205-124.807m114.407 104.006-83.205-124.808m478.43-138.675-83.205-124.807M720.39 209.843 637.184 85.036m114.407 104.006L668.386 64.234"
                                  stroke="#000" stroke-width="25"></path>
                                <path stroke="#FFF" stroke-width="12.5"
                                  d="m205.6 462.897 31.202-20.8m389.981-259.989 36.444-24.296m31.202-20.801 31.202-20.801">
                                </path>
                              </svg>
                              <p>South Korea<br>+(82)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-404" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="SS">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="SS">
                                <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#496E2D" d="M0 322.783h512v103.88H0z"></path>
                                <path d="M0 85.337h512v104.515H0z"></path>
                                <path fill="#A2001D" d="M0 210.877h512v89.656H0z"></path>
                                <path fill="#0052B4" d="M256 256.006 0 426.668V85.331z"></path>
                                <path fill="#FFDA44"
                                  d="m73.178 209.188 20.831 29.067 34.084-10.83-21.207 28.795 20.83 29.069-33.939-11.271-21.208 28.794.234-35.762-33.94-11.273 34.083-10.83z">
                                </path>
                              </svg>
                              <p>South Sudan<br>+(211)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-406" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="ES">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 22.5 15" class="flag" code="ES">
                                <path fill="#FFF" d="M0 0h22.5v15H0V0z"></path>
                                <path fill="#D03433" d="M0 0h22.5v4H0V0zm0 11h22.5v4H0v-4z"></path>
                                <path fill="#FBCA46" d="M0 4h22.5v7H0V4z"></path>
                                <path fill="#FFF" d="M7.8 7h1v.5h-1V7z"></path>
                                <path fill="#A41517"
                                  d="M7.2 8.5c0 .3.3.5.6.5s.6-.2.6-.5L8.5 7H7.1l.1 1.5zM6.6 7c0-.3.2-.5.4-.5h1.5c.3 0 .5.2.5.4V7l-.1 1.5c-.1.6-.5 1-1.1 1-.6 0-1-.4-1.1-1L6.6 7z">
                                </path>
                                <path fill="#A41517"
                                  d="M6.8 7.5h2V8h-.5l-.5 1-.5-1h-.5v-.5zM5.3 6h1v3.5h-1V6zm4 0h1v3.5h-1V6zm-2.5-.5c0-.3.2-.5.5-.5h1c.3 0 .5.2.5.5v.2c0 .2-.1.3-.3.3H7c-.1 0-.2-.1-.2-.2v-.3z">
                                </path>
                              </svg>
                              <p>Spain<br>+(34)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-408" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="LK">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="LK">
                                <path fill="#FFDA44" d="M0 0h513v342H0z"></path>
                                <path fill="#A2001D" d="M222.6 22.3h267.1v296.8H222.6z"></path>
                                <path fill="#D80027" d="M22.3 22.3h200.3v296.8H22.3z"></path>
                                <path fill="#FFDA44" d="M200.3 0h22.3v342h-22.3z"></path>
                                <path fill="#6DA544" d="M22.3 22.3h89v296.8h-89z"></path>
                                <path fill="#FF9811" d="M111.3 22.3h89v296.8h-89z"></path>
                                <path fill="#FFDA44"
                                  d="M368.2 156.8c-1.4-2 0-37.9 0-37.9.9-7.4.1-8.4 1-11.4.9-2.9 5.4-11.6 5.4-11.6s-6-2.3-10.3-.6c-4.3 1.7-24.7-7.5-31.2 3.4-4.4 7-23.6 16.2-24.6 14-1-2.2-5.9-5-6.9-2.9s-.7 13.9 0 16c.8 2.6 9.8 2 12.3 3.1 3.7 1.8 12.2 8.2 11.9 10.7-.3 2.5-22.5-6-24.2-4.5-1.4 1.2-1.9 13.2-.4 15 1.8 2.1 23.4 5.6 25 7.5 1.6 1.9-13.1 7.4-12.3 25 .7 14.7 8 17.4 8 17.4s-2.4 3.6-7.8 3.1c-6.2-.6-27.4-17.7-27.4-17.7s-3.5-109 3.6-121.4c4.9-8.5-22.7 10.1-22.7 50.8V151c0 6.6-1.4 22.4 2.6 34 0 0-.4 46.9 1.5 49.6s12.7 2.2 14.8 0 0-30 0-30c7.7.2 18.3 17.5 32.5 16.4 20.6-1.6 28.7-9.9 34.3-5 8.1 7.1 5.5 23.2.4 31.5-2.2 3.5-14.3 4.7-15.7 7.6-1.4 2.9.5 5.4.5 5.4h29.7s1.4-20.5 2.7-26.1c1.3-5.7-.6-10.7 5.9-10.4 23.5 1.1 39.8-15.3 45.5-8 3.2 4.1 5.6 29.9 3.3 33.3-2.2 3.4-13.8 2.8-15.2 6.7-1.4 4 .8 4.4.8 4.4h29.7s-.4-21.2 2.5-27.7 4.9-10.4 9.3-17.2c4.4-6.8 11.3-15.7 11.3-36.2 0-14.2-8.1-22.8-8.1-22.8H417c-14.1.2-47.4 2.3-48.8.3zm-136-124.5c10.7-10.6 20.2-2.7 22.2 2.1 1.9 4.8 2.1 8.2 2.8 13.6.9 6.9 4.9 14 4.9 14s-7.1-3.8-14.7-4.2c-4.7-.3-9-.6-13.6-2.5-5.7-2.3-11.7-12.9-1.6-23zm248.4-.1c10.7 10.6 2.8 20.2-2 22.2s-8.2 2.1-13.6 2.8c-6.9.9-14 5-14 5s3.7-7.1 4.2-14.7c.3-4.7.6-9.1 2.4-13.6 2.2-5.7 12.8-11.8 23-1.7zm.1 276.9c-10.7 10.6-20.2 2.6-22.2-2.2-1.9-4.8-2.1-8.2-2.7-13.6-.8-6.9-4.9-14.1-4.9-14.1s7 3.8 14.7 4.3c4.7.3 9 .6 13.6 2.5 5.7 2.4 11.7 13.1 1.5 23.1zm-248.2-.1c-10.6-10.7-2.7-20.2 2.1-22.2 4.8-1.9 8.2-2.1 13.6-2.8 6.9-.9 14-4.9 14-4.9s-3.8 7.1-4.2 14.7c-.3 4.7-.6 9-2.5 13.6-2.3 5.7-12.9 11.8-23 1.6z">
                                </path>
                                <path fill="none" stroke="#FFDA44" stroke-width="6" stroke-miterlimit="10"
                                  d="M446.9 162.4s7.5-2.6 8.4-16.1c.6-8.6-19.8-16-39-11.5-19.7 4.6-34-3.1-34-14.6 0-22.9 29.7-16.2 38.9-11.3 9.1 4.9 29.7 23.5 35.1 9.4">
                                </path>
                              </svg>
                              <p>Sri Lanka<br>+(94)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-410" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="SD">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="SD">
                                <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#D80027" d="M0 85.337h512v113.775H0z"></path>
                                <path d="M0 312.888h512v113.775H0z"></path>
                                <path fill="#496E2D" d="M0 426.668V85.331l256 170.675z"></path>
                              </svg>
                              <p>Sudan<br>+(249)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-412" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="SR">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="SR">
                                <path fill="#FFF" d="M0 85.331h512v341.337H0z"></path>
                                <path fill="#A2001D" d="M0 196.636h512v118.728H0z"></path>
                                <path d="M0 352.462h512v74.207H0zM0 85.331h512v74.207H0z" fill="#6DA544"></path>
                                <path fill="#FFDA44"
                                  d="m256.742 218.003 9.43 29.021h30.518L272 264.963l9.431 29.023-24.689-17.937-24.689 17.937 9.431-29.023-24.69-17.939h30.518z">
                                </path>
                              </svg>
                              <p>Suriname<br>+(597)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-414" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="SJ">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="SJ">
                                <path fill="#D80027" d="M0 85.334h512v341.337H0z"></path>
                                <path fill="#FFF"
                                  d="M512 295.883H202.195v130.783h-79.76V295.883H0v-79.772h122.435V85.329h79.76v130.782H512v61.218z">
                                </path>
                                <path fill="#2E52B2"
                                  d="M512 234.666v42.663H183.652v149.337h-42.674V277.329H0v-42.663h140.978V85.329h42.674v149.337z">
                                </path>
                              </svg>
                              <p>Svalbard and Jan Mayen<br>+(47)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-416" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="SZ">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 900 600" class="flag" code="SZ">
                                <path fill="#2B5DEA" d="M0 0h900v600H0V0z"></path>
                                <path fill="#FFDF29" d="M0 100h900v400H0V100z"></path>
                                <path fill="#D70000" d="M0 150h900v300H0V150z"></path>
                                <path fill="#FFF"
                                  d="M450 171.4v257.2c114.3 0 171.4-85.7 214.3-128.6-42.9-42.9-100-128.6-214.3-128.6z">
                                </path>
                                <path
                                  d="M450 171.4c-100 0-171.4 85.7-214.3 128.6C278.6 342.9 350 428.6 450 428.6V171.4z">
                                </path>
                                <path fill="#FFF" d="M346.3 254.3h21v91.3h-21zm51.9 0h21v91.3h-21z"></path>
                                <path d="M477.8 254.3h21v91.3h-21zm51.9 0h21v91.3h-21z"></path>
                              </svg>
                              <p>Swaziland<br>+(268)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-418" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="SE">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="SE">
                                <path fill="#0052B4" d="M0 85.333h512V426.67H0z"></path>
                                <path fill="#FFDA44"
                                  d="M192 85.33h-64v138.666H0v64h128v138.666h64V287.996h320v-64H192z"></path>
                              </svg>
                              <p>Sweden<br>+(46)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-420" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="CH">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 513 342" class="flag" code="CH">
                                <path fill="red" d="M0 85.337h513v342H0z"></path>
                                <path fill="#FFF"
                                  d="M356.174 222.609h-66.783v-66.783h-66.782v66.783h-66.783v66.782h66.783v66.783h66.782v-66.783h66.783z">
                                </path>
                              </svg>
                              <p>Switzerland<br>+(41)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-422" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="SY">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="SY">
                                <path fill="#FFF" d="M0 85.331h512v341.337H0z"></path>
                                <path fill="#D80027" d="M0 85.331h512v113.775H0z"></path>
                                <path d="M0 312.882h512v113.775H0z"></path>
                                <path
                                  d="m187.31 215.184 9.208 28.341h29.802l-24.11 17.518 9.209 28.342-24.109-17.516-24.11 17.516 9.209-28.342-24.109-17.518h29.801zm137.38 0 9.209 28.341H363.7l-24.109 17.518 9.209 28.342-24.11-17.516-24.109 17.516 9.209-28.342-24.11-17.518h29.802z"
                                  fill="#6DA544"></path>
                              </svg>
                              <p>Syria<br>+(963)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-424" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="TW">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="TW">
                                <path fill="#D80027" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#0052B4" d="M0 85.337h256V256H0z"></path>
                                <path fill="#FFF"
                                  d="M186.435 170.669 162.558 181.9l12.714 23.125-25.927-4.961-3.286 26.192L128 206.993l-18.06 19.263-3.285-26.192-25.927 4.96 12.714-23.125-23.877-11.23 23.877-11.231-12.714-23.125 25.927 4.96 3.286-26.192L128 134.344l18.06-19.263 3.285 26.192 25.928-4.96-12.715 23.125z">
                                </path>
                                <circle fill="#0052B4" cx="128" cy="170.674" r="29.006"></circle>
                                <path fill="#FFF"
                                  d="M128 190.06c-10.692 0-19.391-8.7-19.391-19.391 0-10.692 8.7-19.391 19.391-19.391 10.692 0 19.391 8.7 19.391 19.391 0 10.691-8.699 19.391-19.391 19.391z">
                                </path>
                              </svg>
                              <p>Taiwan<br>+(886)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-426" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="TJ">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="TJ">
                                <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#D80027" d="M0 85.337h512v113.775H0z"></path>
                                <path fill="#6DA544" d="M0 312.888h512v113.775H0z"></path>
                                <path
                                  d="M226.318 300.522h59.364v-25.23l-11.873 5.937L256 263.421l-17.809 17.808-11.873-5.937zm-33.963-29.682 2.763 8.504h8.94l-7.233 5.255 2.763 8.502-7.233-5.255-7.234 5.255 2.763-8.502-7.233-5.255h8.94zm8.566-29.68 2.763 8.502h8.94l-7.233 5.255 2.763 8.504-7.233-5.256-7.234 5.256 2.763-8.504-7.233-5.255h8.94zm24.488-22.261 2.763 8.502h8.94l-7.233 5.255 2.763 8.504-7.233-5.256-7.234 5.256 2.763-8.504-7.233-5.255h8.94zm94.236 51.941-2.763 8.504h-8.94l7.233 5.255-2.763 8.502 7.233-5.255 7.234 5.255-2.763-8.502 7.233-5.255h-8.94zm-8.566-29.68-2.763 8.502h-8.94l7.233 5.255-2.763 8.504 7.233-5.256 7.234 5.256-2.763-8.504 7.233-5.255h-8.94zm-24.488-22.261-2.763 8.502h-8.94l7.233 5.255-2.763 8.504 7.233-5.256 7.234 5.256-2.763-8.504 7.233-5.255h-8.94zM256 207.767l2.763 8.503h8.941l-7.234 5.256 2.763 8.502-7.233-5.254-7.233 5.254 2.763-8.502-7.234-5.256h8.941z"
                                  fill="#FFDA44"></path>
                              </svg>
                              <p>Tajikistan<br>+(992)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-428" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="TZ">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="TZ">
                                <path fill="#338AF3" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#6DA544" d="M0 426.663V85.337h512"></path>
                                <path fill="#FFDA44" d="M512 152.222V85.337H411.67L0 359.778v66.885h100.33z"></path>
                                <path d="M512 85.337v40.125L60.193 426.663H0v-40.125L451.807 85.337z"></path>
                              </svg>
                              <p>Tanzania<br>+(255)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-430" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="TH">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="TH">
                                <path fill="#FFF" d="M0 85.334h512V426.66H0z"></path>
                                <path fill="#0052B4" d="M0 194.056h512v123.882H0z"></path>
                                <path d="M0 85.334h512v54.522H0zm0 286.809h512v54.522H0z" fill="#D80027"></path>
                              </svg>
                              <p>Thailand<br>+(66)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-432" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="TG">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="TG">
                                <path fill="#FFDA44" d="M0 85.337h512v341.326H0z"></path>
                                <path d="M0 85.337h512V153.6H0zM0 358.4h512v68.263H0zm0-136.537h512v68.263H0z"
                                  fill="#496E2D"></path>
                                <path fill="#D80027" d="M0 85.337h204.054v204.054H0z"></path>
                                <path fill="#FFF"
                                  d="m102.026 133.938 13.26 40.812h42.916l-34.718 25.226 13.26 40.814-34.718-25.224-34.719 25.224 13.263-40.814-34.718-25.226h42.913z">
                                </path>
                              </svg>
                              <p>Togo<br>+(228)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-434" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="TK">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="TK">
                                <path fill="#0052B4" d="M0 85.337h512v341.326H0z"></path>
                                <path
                                  d="m210.715 174.377 3.684 11.338h11.919l-9.643 7.006 3.684 11.337-9.644-7.007-9.644 7.007 3.684-11.337-9.645-7.006h11.921zm-93.899 107.594 4.605 14.172h14.9l-12.055 8.757 4.606 14.173-12.056-8.76-12.055 8.76 4.604-14.173-12.054-8.757h14.899zm27.88-162.292 4.604 14.172h14.901l-12.056 8.758 4.606 14.171-12.055-8.759-12.056 8.759 4.606-14.171-12.055-8.758h14.9zm-75.157 55.652 4.604 14.172h14.9l-12.055 8.758 4.606 14.171-12.055-8.758-12.056 8.758 4.606-14.171-12.055-8.758h14.9z"
                                  fill="#FFF"></path>
                                <path
                                  d="M483.386 354.503H117.801s109.234-88.562 310.593-220.938c.001 0-88.443 128.935 54.992 220.938zm-365.585 11.586c-11.177 0-11.195 17.37 0 17.37h365.585c11.177 0 11.195-17.37 0-17.37H117.801z"
                                  fill="#FFDA44"></path>
                              </svg>
                              <p>Tokelau<br>+(690)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-436" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="TO">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="TO">
                                <path fill="#D80027" d="M0 85.331h512v341.337H0z"></path>
                                <path fill="#FFF" d="M0 85.331h256v170.663H0z"></path>
                                <path fill="#D80027"
                                  d="M141.357 157.303V130.59h-26.714v26.713H87.93v26.713h26.713v26.713h26.714v-26.713h26.713v-26.713z">
                                </path>
                              </svg>
                              <p>Tonga<br>+(676)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-438" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="TT">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="TT">
                                <path fill="#D80027" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#FFF"
                                  d="m6.066 85.337 207.961 212.636 131.584 128.69h160.323L297.973 214.027 166.389 85.337z">
                                </path>
                                <path d="M43.364 85.337 384.69 426.663h83.946L127.31 85.337z"></path>
                              </svg>
                              <p>Trinidad and Tobago<br>+(1-868)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-440" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="TN">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="TN">
                                <path fill="#D80027" d="M0 85.331h512v341.337H0z"></path>
                                <circle fill="#FFF" cx="256" cy="255.994" r="96"></circle>
                                <g fill="#D80027">
                                  <path
                                    d="m267.826 219.291 16.47 22.695 26.673-8.649-16.496 22.676 16.468 22.695-26.664-8.681-16.495 22.676.017-28.04-26.664-8.682 26.674-8.648z">
                                  </path>
                                  <path
                                    d="M277.818 312.724c-31.33 0-56.727-25.397-56.727-56.727s25.397-56.727 56.727-56.727c9.769 0 18.96 2.47 26.985 6.819-12.589-12.31-29.804-19.909-48.803-19.909-38.558 0-69.818 31.259-69.818 69.818s31.26 69.818 69.818 69.818c18.999 0 36.215-7.599 48.803-19.909-8.026 4.347-17.216 6.817-26.985 6.817z">
                                  </path>
                                </g>
                              </svg>
                              <p>Tunisia<br>+(216)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-442" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="TR">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="TR">
                                <path fill="#E30A17" d="M0 0h513v342H0z"></path>
                                <path fill="#FFF"
                                  d="M259.7 118.6c-13.1-9.5-29-14.6-45.3-14.5-40.8 0-73.8 30.8-73.8 68.9s33.1 68.9 73.8 68.9c17.1 0 32.9-5.4 45.3-14.5-30 38.6-85.7 45.6-124.3 15.5s-45.6-85.7-15.5-124.3 85.7-45.6 124.3-15.5c5.8 4.5 11 9.8 15.5 15.5zm39.9 65.8-18.1 21.9 1.2-28.4-26.4-10.4 27.3-7.6 1.8-28.3 15.6 23.7 27.5-7.1-17.5 22 15.3 23.9-26.7-9.7z">
                                </path>
                              </svg>
                              <p>Turkey<br>+(90)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-444" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="TM">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="TM">
                                <path fill="#496E2D" d="M0 85.337h512v341.326H0z"></path>
                                <g fill="#FFF">
                                  <path
                                    d="M357.208 183.679c8.397-23.404-1.036-48.858-21.281-61.536a52.131 52.131 0 0 1 10.884 2.621c27.002 9.688 41.038 39.428 31.35 66.431s-39.428 41.038-66.431 31.35a52.182 52.182 0 0 1-10.069-4.895c23.686 3.084 47.15-10.566 55.547-33.971zm-46.571-67.95-7.297 9.427-11.22-4.026 6.712 9.852-7.296 9.427 11.443-3.338 6.712 9.852.361-11.914 11.444-3.339-11.221-4.025z">
                                  </path>
                                  <path
                                    d="m330.338 146.448-7.296 9.427-11.221-4.026 6.712 9.852-7.296 9.427 11.443-3.339 6.712 9.853.36-11.915 11.445-3.34-11.221-4.024zM275.9 126.916l-7.296 9.427-11.219-4.024 6.711 9.851-7.296 9.426 11.443-3.338 6.712 9.852.361-11.915 11.444-3.337-11.221-4.027zm-.799 35.189-7.296 9.427-11.221-4.026 6.712 9.852-7.296 9.427 11.444-3.338 6.711 9.852.362-11.915 11.443-3.338-11.22-4.026zm33.484 12.013-7.296 9.427-11.22-4.026 6.712 9.853-7.297 9.426 11.444-3.338 6.712 9.852.36-11.915 11.443-3.338-11.219-4.025z">
                                  </path>
                                </g>
                                <path fill="#D80027" d="M83.478 85.337h89.043v341.326H83.478z"></path>
                                <path fill="#FFF"
                                  d="m117.458 175.191-14.908-11.105v-15.705l14.908-11.105h21.084l14.908 11.105v15.705l-14.908 11.105z">
                                </path>
                                <path
                                  d="M128 137.276h-10.542l-14.908 11.105v7.678H128zm0 37.915h10.542l14.908-11.105v-8.012H128z"
                                  fill="#FF9811"></path>
                                <path fill="#FFF"
                                  d="m117.458 374.725-14.908-11.106v-15.704l14.908-11.105h21.084l14.908 11.105v15.704l-14.908 11.106z">
                                </path>
                                <path
                                  d="M128 336.81h-10.542l-14.908 11.105v7.678H128zm0 37.915h10.542l14.908-11.106v-8.011H128z"
                                  fill="#FF9811"></path>
                                <path
                                  d="m117.458 274.957-14.908-11.105v-15.703l14.908-11.106h21.084l14.908 11.106v15.703l-14.908 11.105zm36.513 24.434h-6.493v-6.493h-11.411l-8.068-8.068-8.067 8.068h-11.41v6.493h-6.493v12.986h6.493v6.492h11.41l8.068 8.069 8.068-8.069h11.41v-6.492h6.493zm0-99.768h-6.493v-6.492h-11.411l-8.068-8.069-8.067 8.069h-11.41v6.492h-6.493v12.986h6.493v6.492h11.41l8.068 8.07 8.068-8.07h11.41v-6.492h6.493z"
                                  fill="#496E2D"></path>
                                <g fill="#D80027">
                                  <path d="M120.576 248.576h14.84v14.84h-14.84z"></path>
                                  <circle cx="128" cy="206.113" r="7.421"></circle>
                                  <circle cx="128" cy="305.887" r="7.421"></circle>
                                </g>
                              </svg>
                              <p>Turkmenistan<br>+(993)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-446" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="TC">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="TC">
                                <path fill="#0052B4" d="M0 85.333h512V426.67H0z"></path>
                                <path fill="#FFDA44"
                                  d="M332.058 191.996v78.221c0 38.103 51.942 49.779 51.942 49.779s51.942-11.675 51.942-49.779v-78.221H332.058z">
                                </path>
                                <path fill="#FF9811"
                                  d="M376.579 220.44c0 7.855-6.644 28.445-14.84 28.445s-14.84-20.589-14.84-28.445c0-7.856 14.84-14.222 14.84-14.222s14.84 6.367 14.84 14.222z">
                                </path>
                                <path fill="#A2001D"
                                  d="M415.961 235.93c2.394-5.6 4.257-13.785 4.257-17.86 0-6.546-8.904-11.852-8.904-11.852s-8.904 5.306-8.904 11.852c0 4.075 1.862 12.26 4.257 17.86l-5.141 11.123a26.898 26.898 0 0 0 9.788 1.831c3.463 0 6.766-.654 9.788-1.831l-5.141-11.123z">
                                </path>
                                <path fill="#6DA544"
                                  d="M372.87 270.217s-7.421 14.222-7.421 28.445h37.101c0-14.222-7.421-28.445-7.421-28.445l-11.13-7.111-11.129 7.111z">
                                </path>
                                <path fill="#D80027"
                                  d="M395.13 270.217v-3.555c0-5.891-4.983-10.666-11.13-10.666-6.147 0-11.13 4.776-11.13 10.666v3.555h22.26z">
                                </path>
                                <path fill="#FFF"
                                  d="M256 85.333v30.553l-45.167 25.099H256v59.359h-59.103L256 233.179v22.817h-26.68l-73.494-40.826v40.826h-55.652v-48.573l-87.43 48.573H0v-30.554l45.167-25.098H0v-59.359h59.103L0 108.139V85.333h26.68l73.494 40.825V85.333h55.652v48.572l87.43-48.572z">
                                </path>
                                <path fill="#D80027" d="M144 85.33h-32v69.332H0v32h112v69.334h32v-69.334h112v-32H144z">
                                </path>
                                <path fill="#0052B4" d="M155.826 200.344 256 255.996v-15.737l-71.847-39.915z"></path>
                                <path fill="#FFF" d="M155.826 200.344 256 255.996v-15.737l-71.847-39.915z"></path>
                                <path
                                  d="M155.826 200.344 256 255.996v-15.737l-71.847-39.915zm-83.98 0L0 240.259v15.737l100.174-55.652z"
                                  fill="#D80027"></path>
                                <path fill="#0052B4" d="M100.174 140.982 0 85.33v15.737l71.847 39.915z"></path>
                                <path fill="#FFF" d="M100.174 140.982 0 85.33v15.737l71.847 39.915z"></path>
                                <path
                                  d="M100.174 140.982 0 85.33v15.737l71.847 39.915zm83.98 0L256 101.067V85.33l-100.174 55.652z"
                                  fill="#D80027"></path>
                              </svg>
                              <p>Turks and Caicos Islands<br>+(1-649)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-448" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="TV">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 900 600" class="flag" code="TV">
                                <path fill="#0052B4" d="M0 0h900v600H0z"></path>
                                <path fill="#00B2EE" d="M0 300h450V0h450v600H0V300z"></path>
                                <path fill="#FFDA44"
                                  d="m345.3 480.9 29.4 90.6-77.1-56H393l-77.1 56 29.4-90.6zM706.4 340l29.4 90.6-77.1-56H754l-77.1 56 29.5-90.6zm106.4-78.5 29.4 90.6-77.1-56h95.3l-77.1 56 29.5-90.6zm0-224.1 29.4 90.6-77.1-56h95.3l-77.1 56 29.5-90.6z">
                                </path>
                                <path fill="#FFF"
                                  d="M449.9 0v206.3h-81l81 54V300h-39.7l-129-85.9V300H168.7v-85.9L39.7 300H0v-39.7l81-54H0V93.8h81L0 39.9V0h39.7l129 85.9V0h112.5v85.9L410.2 0z">
                                </path>
                                <path fill="#D80027"
                                  d="M253.1 0h-56.3v122H0v56.2h196.8V300h56.3V178.2h196.8V122H253.1z"></path>
                                <path fill="#2E52B2" d="M449.9 39.9v53.9h-81z"></path>
                                <path fill="#D80027"
                                  d="M0 300v-19.3l109.9-74.4h39.7L12.8 300zM12.8.1l136.8 93.7h-39.7L0 19.4V.1zm437.1.1v19.3L340 93.8h-39.7L437.1.2zM437.1 300l-136.8-93.7H340l109.9 74.4V300z">
                                </path>
                                <path fill="#FFDA44"
                                  d="m719.9 131.6 29.4 90.6-77.1-56h95.3l-77.1 56 29.5-90.6zM584 187.7l29.4 90.6-77.1-56h95.3l-77.1 56 29.5-90.6zm30 242.9 29.4 90.6-77.1-56h95.3l-77.1 56 29.5-90.6zM488 332l29.4 90.6-77.1-56h95.3l-77.1 56L488 332zm0 132 29.4 90.6-77.1-56h95.3l-77.1 56L488 464z">
                                </path>
                              </svg>
                              <p>Tuvalu<br>+(688)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-450" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="VI">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 341.3" class="flag" code="VI">
                                <path fill="#FFF" d="M0 0h512v341.3H0z"></path>
                                <path fill="#1583C4"
                                  d="m397.7 166.3-51 97.7c-1.1 2-.3 4.5 1.8 5.6 2 1.1 4.5.3 5.6-1.8l51-97.7c1-2.1.1-4.6-2-5.5-2-.9-4.3-.2-5.4 1.7z">
                                </path>
                                <path fill="#1583C4"
                                  d="m404.9 188-57.8 75.4c-1.3 1.9-.8 4.5 1.1 5.8 1.7 1.2 4.1.9 5.5-.7l57.8-75.4c1.4-1.8 1.1-4.4-.8-5.8-1.8-1.5-4.4-1.1-5.8.7z">
                                </path>
                                <path fill="#1583C4"
                                  d="m379 181.3-32.5 83.1c-.8 2.1.2 4.6 2.4 5.4 2.1.8 4.6-.2 5.4-2.4l32.5-83.1c.7-2.2-.4-4.5-2.6-5.3-2.1-.6-4.3.4-5.2 2.3z">
                                </path>
                                <path fill="#409347"
                                  d="M122.1 171.9c.4 1.7 1.2 4.7 2.2 8.5 1.7 6.4 3.6 12.8 5.6 18.7 2.3 6.9 14.7 31.4 20.2 39.1 6.9 9.7 14.1 19.3 21.5 28.6 1.6 1.9 4.5 2.1 6.4.5 1.8-1.6 2.1-4.3.7-6.2-7.3-9.2-14.4-18.6-21.2-28.2-4.2-5.8-17.2-31.1-19-36.7-2.9-8.7-5.4-17.6-7.6-26.5-.5-2.4-2.9-4-5.3-3.5s-4 2.9-3.5 5.3c-.1.2 0 .3 0 .4z">
                                </path>
                                <g fill="#FFD836" stroke="#231F20" stroke-miterlimit="10">
                                  <path
                                    d="M297.1 114.9S279.5 42.8 261 42.8c-6.9 0-11.9-.6-15.4 6.4-.9 1.7-20.7-1.6-19.1 20.8.5 6.9 1.1-9.8 14.9-3.4 6.3 3-16.4 48.2-16.4 48.2h72.1z">
                                  </path>
                                  <path
                                    d="m466.1 48.4-90.9 22c-75.3 18.3-42.1 44.4-42.1 44.4l-72.1 12-72.1-12s33.2-26.1-42.1-44.4l-90.9-22C43.1 45.3 38.1 51.8 45.3 63c0 0 106.6 104 126.8 112 20.2 8.1 40.8 0 40.8 0s-14.9 8.7-24 24c-9.2 15.3-4.6 34.7-38.9 40.2-5.5 6.6-5 14 2.9 19.9 7.9 5.8 72.1-48.1 72.1-48.1s-24 24.4-24 36.1c0 5.1 44.1 53.8 60.1 53.8s60.1-48.7 60.1-53.8c0-11.7-24-36.1-24-36.1s64.2 53.9 72.1 48.1 11.4-19.3 2.8-19.9c-28-1.8-29.7-24.9-38.9-40.2-9.2-15.3-24-24-24-24s20.6 8.1 40.8 0S476.7 63 476.7 63c7.2-11.2 2.3-17.7-10.6-14.6z">
                                  </path>
                                </g>
                                <path fill="#FFF" stroke="#231F20" stroke-miterlimit="10"
                                  d="M201.3 111.8v80.3c0 45.7 59.7 59.7 59.7 59.7s59.7-14 59.7-59.7v-80.3H201.3z">
                                </path>
                                <path
                                  d="M225.2 137.7V235c8.2 6 17 10.2 23.9 12.9V137.7h-23.9zm71.6 0V235c-8.2 6-17 10.2-23.9 12.9V137.7h23.9z"
                                  fill="#D80027"></path>
                                <path fill="#0052B4" d="M201.3 111.8h119.4v37.9H201.3z"></path>
                                <path fill="#1583C4"
                                  d="m60.1 210.5-21.9-58.1H15.7l31.8 80.8h25.2l31.5-80.8H81.7zm391.4-58.6h18.9v81.7h-18.9z">
                                </path>
                              </svg>
                              <p>U.S. Virgin Islands<br>+(1-340)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-452" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="UG">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 341.3" class="flag" code="UG">
                                <path fill="#232323" d="M0 0h512v341.3H0z"></path>
                                <path fill="#FFDA44" d="M0 56.9h512v56.9H0z"></path>
                                <path fill="#D32300" d="M0 113.8h512v56.9H0z"></path>
                                <path fill="#FFDA44" d="M0 227.6h512v56.9H0z"></path>
                                <path fill="#D32300" d="M0 284.4h512v56.9H0z"></path>
                                <circle fill="#FFF" cx="256" cy="170.7" r="80.7"></circle>
                                <path
                                  d="M234.5 127.5c.9-1.4-19.6-2-19.6-2 1.7-2.5 18.4-10.5 18.4-10.5s-.9-6 2.7-9.8l-4.5-9.8s7-3.4 18.4-3.4 19.9 7 21 13.1l-6.4 3.4c-.1 4.7 1.7 11.6-4.3 17.3-5.9 5.7-8.3 6.9-8.5 18.8 0 3.9 2.3 8.2 8.8 11.7 17.4 9.3 38.6 28.2 44.6 33.9 6.1 5.7 5.1 19.2 2.6 25.2s-12.1 14.3-14.3 13.6c-2.2-.6 1.2-9.2-3.5-11.6 0 0-8.9-7.6-16.8.6s-.2 25.2 3.9 28c4.1 2.8 1.7 5-1.9 5H247c-3.8 0-5.4-2.3-1.9-5 7.6-3.8 12.4-15.3 7.4-20.3-4.9-4.9-18.3 1.5-21.5 6.3-2.8 2.8-8.8 3.6-12.9-1.4s-4.1-10.4-1.1-12.5c7-4.8 0 0 .1-.1 0 0 11.9-8.6 29.9-9 3.9 0 4.8-2.2 2.2-4.8 0 0-30.9-27.4-28.1-44.2 3-18.3 20-26.3 13.4-32.5-1.3-1.8 0 0 0 0z">
                                </path>
                              </svg>
                              <p>Uganda<br>+(256)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-454" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="UA">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="UA">
                                <path fill="#FFDA44" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#338AF3" d="M0 85.337h512V256H0z"></path>
                              </svg>
                              <p>Ukraine<br>+(380)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-456" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="AE">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="AE">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path fill="#009e49" d="M0 0h513v114H0z"></path>
                                <path d="M0 228h513v114H0z"></path>
                                <path fill="#ce1126" d="M0 0h171v342H0z"></path>
                              </svg>
                              <p>United Arab Emirates<br>+(971)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-458" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="GB">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="GB">
                                <g fill="#FFF">
                                  <path d="M0 0h513v341.3H0V0z"></path>
                                  <path
                                    d="M311.7 230 513 341.3v-31.5L369.3 230h-57.6zM200.3 111.3 0 0v31.5l143.7 79.8h56.6z">
                                  </path>
                                </g>
                                <path
                                  d="M393.8 230 513 295.7V230H393.8zm-82.1 0L513 341.3v-31.5L369.3 230h-57.6zm146.9 111.3-147-81.7v81.7h147zM90.3 230 0 280.2V230h90.3zm110 14.2v97.2H25.5l174.8-97.2zm-82.1-132.9L0 45.6v65.7h118.2zm82.1 0L0 0v31.5l143.7 79.8h56.6zM53.4 0l147 81.7V0h-147zm368.3 111.3L513 61.1v50.2h-91.3zm-110-14.2V0h174.9L311.7 97.1z"
                                  fill="#0052B4"></path>
                                <g fill="#D80027">
                                  <path d="M288 0h-64v138.7H0v64h224v138.7h64V202.7h224v-64H288V0z"></path>
                                  <path
                                    d="M311.7 230 513 341.3v-31.5L369.3 230h-57.6zm-168 0L0 309.9v31.5L200.3 230h-56.6zm56.6-118.7L0 0v31.5l143.7 79.8h56.6zm168 0L513 31.5V0L311.7 111.3h56.6z">
                                  </path>
                                </g>
                              </svg>
                              <p>United Kingdom<br>+(44)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item rs-dropdown-item-active" id="menuitem-460" role="menuitem"
                            aria-disabled="false" tabindex="-1" data-event-key="US" aria-checked="true">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="US">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path
                                  d="M0 0h513v26.3H0zm0 52.6h513v26.3H0zm0 52.6h513v26.3H0zm0 52.6h513v26.3H0zm0 52.7h513v26.3H0zm0 52.6h513v26.3H0zm0 52.6h513V342H0z"
                                  fill="#D80027"></path>
                                <path fill="#2E52B2" d="M0 0h256.5v184.1H0z"></path>
                                <path
                                  d="m47.8 138.9-4-12.8-4.4 12.8H26.2l10.7 7.7-4 12.8 10.9-7.9 10.6 7.9-4.1-12.8 10.9-7.7zm56.3 0-4.1-12.8-4.2 12.8H82.6l10.7 7.7-4 12.8 10.7-7.9 10.8 7.9-4-12.8 10.7-7.7zm56.5 0-4.3-12.8-4 12.8h-13.5l11 7.7-4.2 12.8 10.7-7.9 11 7.9-4.2-12.8 10.7-7.7zm56.2 0-4-12.8-4.2 12.8h-13.3l10.8 7.7-4 12.8 10.7-7.9 10.8 7.9-4.3-12.8 11-7.7zM100 75.3l-4.2 12.8H82.6L93.3 96l-4 12.6 10.7-7.8 10.8 7.8-4-12.6 10.7-7.9h-13.4zm-56.2 0-4.4 12.8H26.2L36.9 96l-4 12.6 10.9-7.8 10.6 7.8L50.3 96l10.9-7.9H47.8zm112.5 0-4 12.8h-13.5l11 7.9-4.2 12.6 10.7-7.8 11 7.8-4.2-12.6 10.7-7.9h-13.2zm56.5 0-4.2 12.8h-13.3l10.8 7.9-4 12.6 10.7-7.8 10.8 7.8-4.3-12.6 11-7.9h-13.5zm-169-50.6-4.4 12.6H26.2l10.7 7.9-4 12.7L43.8 50l10.6 7.9-4.1-12.7 10.9-7.9H47.8zm56.2 0-4.2 12.6H82.6l10.7 7.9-4 12.7L100 50l10.8 7.9-4-12.7 10.7-7.9h-13.4zm56.3 0-4 12.6h-13.5l11 7.9-4.2 12.7 10.7-7.9 11 7.9-4.2-12.7 10.7-7.9h-13.2zm56.5 0-4.2 12.6h-13.3l10.8 7.9-4 12.7 10.7-7.9 10.8 7.9-4.3-12.7 11-7.9h-13.5z"
                                  fill="#FFF"></path>
                              </svg>
                              <p>United States<br>+(1)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-462" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="UY">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="UY">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path d="M0 38h513v38H0zm0 76h513v38H0zm0 76h513v38H0zm0 76h513v38H0z" fill="#0038a8">
                                </path>
                                <path fill="#FFF" d="M0 0h256.5v190H0z"></path>
                                <path fill="#FED443"
                                  d="m128.3 138.7-15.1 22.6-3.8-26.9L86 148.2l8.2-25.9-27.2 2.2 18.6-19.8L60.3 95l25.4-9.7L67 65.5l27.1 2.3-8.2-25.9 23.4 13.8 3.9-26.9 15.1 22.6 15.1-22.6 3.8 26.9 23.4-13.8-8.2 25.9 27.1-2.2-18.6 19.8 25.4 9.7-25.4 9.7 18.6 19.8-27.1-2.2 8.2 25.9-23.4-13.8-3.9 26.9-15-22.7zm0-.5c23.9.9 44-17.6 44.9-41.5.9-23.9-17.6-44-41.5-44.9h-3.4c-23.9.8-42.6 20.8-41.8 44.6.6 22.8 19 41.1 41.8 41.8zm0-10.6c-18.8 0-34-15.2-34-34s15.2-34 34-34 34 15.2 34 34-15.3 34-34 34z">
                                </path>
                              </svg>
                              <p>Uruguay<br>+(598)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-464" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="UZ">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="UZ">
                                <path fill="#D80027" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#6DA544" d="M0 322.783h512v103.88H0z"></path>
                                <path fill="#338AF3" d="M0 85.337h512v104.515H0z"></path>
                                <path fill="#FFF" d="M0 210.877h512v89.656H0z"></path>
                                <path fill="#338AF3" d="M0 85.337h512v104.515H0z"></path>
                                <path
                                  d="M188.688 137.589c0-15.984 11.234-29.339 26.236-32.614a33.531 33.531 0 0 0-7.155-.777c-18.442 0-33.391 14.949-33.391 33.391s14.949 33.391 33.391 33.391c2.458 0 4.85-.273 7.155-.777-15.002-3.275-26.236-16.63-26.236-32.614zm45.97 15.177 2.261 6.957h7.315l-5.918 4.301 2.261 6.956-5.919-4.3-5.918 4.3 2.261-6.956-5.918-4.301h7.315zm23.348 0 2.26 6.957h7.315l-5.918 4.301 2.261 6.956-5.918-4.3-5.918 4.3 2.26-6.956-5.917-4.301h7.314zm23.347 0 2.26 6.957h7.315l-5.917 4.301 2.26 6.956-5.918-4.3-5.918 4.3 2.26-6.956-5.918-4.301h7.315zm23.347 0 2.262 6.957h7.315l-5.919 4.301 2.261 6.956-5.919-4.3-5.918 4.3 2.262-6.956-5.919-4.301h7.314zm23.348 0 2.26 6.957h7.315l-5.918 4.301 2.261 6.956-5.918-4.3-5.918 4.3 2.26-6.956-5.917-4.301h7.314zm-70.042-24.284 2.26 6.956h7.315l-5.918 4.3 2.261 6.957-5.918-4.299-5.918 4.299 2.26-6.957-5.917-4.3h7.314zm23.347 0 2.26 6.956h7.315l-5.917 4.3 2.26 6.957-5.918-4.299-5.918 4.299 2.26-6.957-5.918-4.3h7.315zm23.347 0 2.262 6.956h7.315l-5.919 4.3 2.261 6.957-5.919-4.299-5.918 4.299 2.262-6.957-5.919-4.3h7.314zm23.348 0 2.26 6.956h7.315l-5.918 4.3 2.261 6.957-5.918-4.299-5.918 4.299 2.26-6.957-5.917-4.3h7.314zm-46.695-24.284 2.26 6.956h7.315l-5.917 4.3 2.26 6.957-5.918-4.3-5.918 4.3 2.26-6.957-5.918-4.3h7.315zm23.347 0 2.262 6.956h7.315l-5.919 4.3 2.261 6.957-5.919-4.3-5.918 4.3 2.262-6.957-5.919-4.3h7.314zm23.348 0 2.26 6.956h7.315l-5.918 4.3 2.261 6.957-5.918-4.3-5.918 4.3 2.26-6.957-5.917-4.3h7.314z"
                                  fill="#FFF"></path>
                              </svg>
                              <p>Uzbekistan<br>+(998)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-466" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="VU">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="VU">
                                <path d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#6DA544" d="M512 256v170.663H0L215.185 256z"></path>
                                <path fill="#D80027" d="M512 85.337V256H215.185L0 85.337z"></path>
                                <path
                                  d="M221.001 239.304 26.868 85.337H8.956l208.168 165.098H512v-11.131zM8.956 426.663h17.912l194.133-153.967H512v-11.131H217.124zM0 92.44v14.206L188.317 256 0 405.354v14.205L206.229 256z">
                                </path>
                                <g fill="#FFDA44">
                                  <path
                                    d="M8.956 85.337H0v7.103L206.229 256 0 419.559v7.104h8.956l208.168-165.098H512v-11.13H217.124z">
                                  </path>
                                  <path
                                    d="M63.718 292.382v-14.295c14.265 0 25.87-11.606 25.87-25.869 0-10.092-8.211-18.303-18.304-18.303-6.875 0-12.469 5.593-12.469 12.469 0 4.397 3.577 7.974 7.974 7.974a4.514 4.514 0 0 0 4.508-4.508h14.295c0 10.368-8.435 18.804-18.802 18.804-12.279-.002-22.269-9.993-22.269-22.271 0-14.758 12.006-26.764 26.764-26.764 17.975 0 32.599 14.623 32.599 32.599 0 22.145-18.018 40.164-40.166 40.164z">
                                  </path>
                                </g>
                              </svg>
                              <p>Vanuatu<br>+(678)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-468" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="VA">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="VA">
                                <path fill="#FFDA44" d="M0 85.331h512v341.326H0z"></path>
                                <path fill="#FFF" d="M256 85.331h256v341.337H256z"></path>
                                <path fill="#ACABB1"
                                  d="m321.353 233.837 32.073 42.43c-5.053 7.651-5.026 17.961.817 25.692 7.414 9.807 21.374 11.748 31.182 4.335 9.807-7.414 11.748-21.374 4.334-31.182-5.843-7.731-15.756-10.568-24.495-7.795l-49.988-66.129-11.838 8.949-17.759 13.424 17.899 23.677 17.775-13.401zm46.175 48.78a7.421 7.421 0 1 1 8.95 11.84 7.421 7.421 0 0 1-8.95-11.84z">
                                </path>
                                <path fill="#FFDA44"
                                  d="m376.367 247.24 17.899-23.677-17.759-13.424-11.838-8.949-49.988 66.129c-8.74-2.775-18.651.063-24.495 7.795-7.414 9.808-5.473 23.768 4.334 31.182 9.808 7.414 23.768 5.473 31.182-4.335 5.845-7.731 5.871-18.041.817-25.692l32.073-42.43 17.775 13.401zm-62.504 45.771a7.42 7.42 0 1 1-11.84-8.95 7.42 7.42 0 0 1 11.84 8.95z">
                                </path>
                              </svg>
                              <p>Vatican<br>+(379)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-470" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="VE">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 22.5 15" class="flag" code="VE">
                                <path fill="#FFCE00" d="M0 0h22.5v5H0z"></path>
                                <path fill="#203899" d="M0 5h22.5v5H0z"></path>
                                <path fill="#D82B2B" d="M0 10h22.5v5H0z"></path>
                                <path fill="#FFF"
                                  d="m12.13 5.38.14.46.45.14-.39.27.01.48-.38-.29-.45.15.15-.44-.28-.38h.47zm-1.77 0 .27.39h.47l-.28.38.15.45-.45-.16-.38.28.01-.47-.39-.28.45-.13zm3.44.56-.01.48.39.27-.46.14-.14.45-.27-.38h-.48l.29-.38-.15-.45.45.16zm-5.11.02.4.27.44-.18-.13.46.3.36-.47.02-.26.4-.16-.44-.46-.12.37-.3zm6.55 1.17-.2.44.25.4-.47-.05-.31.36-.1-.46-.43-.18.41-.24.03-.47.35.31zm.19 1.12.21.43.47.07-.34.33.08.46-.42-.22-.42.22.08-.46-.34-.33.47-.07zM7 8.2l.21.43.47.06-.34.33.08.47L7 9.27l-.42.22.08-.47-.34-.33.47-.06zm.31-1.15.45.14.38-.29v.48l.39.26-.45.15-.13.46-.28-.38-.47.01.27-.38z">
                                </path>
                              </svg>
                              <p>Venezuela<br>+(58)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-472" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="VN">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="VN">
                                <path fill="#D80027" d="M196.641 85.337H0v341.326h512V85.337z"></path>
                                <path fill="#FFDA44"
                                  d="m256 157.279 22.663 69.747H352l-59.332 43.106 22.664 69.749L256 296.774l-59.332 43.107 22.664-69.749L160 227.026h73.337z">
                                </path>
                              </svg>
                              <p>Vietnam<br>+(84)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-474" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="WF">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 150 100" class="flag" code="WF">
                                <path fill="#ED2939" d="M0 0h150v100H0z"></path>
                                <path fill="#002395" d="M0 0h20v44.33H0z"></path>
                                <path fill="#FFF" d="M20 0h20v44.33H20z"></path>
                                <path fill="none" stroke="#FFF" stroke-width="3" d="M0 44.33h62.75V0"></path>
                                <path fill="#FFF"
                                  d="M108.08 43.29 87.96 23.17h40.25l-20.13 20.12zm-6.7 6.71L81.25 29.88v40.25L101.38 50zm6.7 6.71L87.96 76.83h40.25l-20.13-20.12zm6.71-6.71 20.13-20.13v40.25L114.79 50z">
                                </path>
                              </svg>
                              <p>Wallis and Futuna<br>+(681)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-476" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="EH">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 513 342" class="flag" code="EH">
                                <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                <path d="M0 0h513v114H0z"></path>
                                <path fill="#428823" d="M0 228h513v114H0z"></path>
                                <g fill="#D80027">
                                  <path
                                    d="M256 171 0 342V0zm53.1 0c0-22.9 13.1-42.1 34.6-46.8-3.3-.7-6.7-1.1-10.3-1.1-26.4 0-47.9 21.4-47.9 47.9s21.4 47.9 47.9 47.9c3.5 0 7-.4 10.3-1.1-21.5-5.1-34.6-24.2-34.6-46.8z">
                                  </path>
                                  <path
                                    d="m365 129.2 10.3 31.7h33.3l-27 19.6 10.3 31.7-26.9-19.6-27 19.6 10.3-31.7-27-19.6h33.4z">
                                  </path>
                                </g>
                              </svg>
                              <p>Western Sahara<br>+(212)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-478" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="YE">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="YE">
                                <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                <path fill="#D80027" d="M0 85.337h512v113.775H0z"></path>
                                <path d="M0 312.888h512v113.775H0z"></path>
                              </svg>
                              <p>Yemen<br>+(967)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-480" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="ZM">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="ZM">
                                <path fill="#496E2D" d="M0 85.331h512v341.337H0z"></path>
                                <path fill="#FF9811"
                                  d="M490.668 195.476h-48c0-8.836-7.164-16-16-16s-16 7.164-16 16h-48c0 8.836 7.697 16 16.533 16h-.533c0 8.836 7.162 16 16 16 0 8.836 7.162 16 16 16h32c8.836 0 16-7.164 16-16 8.836 0 16-7.164 16-16h-.533c8.837 0 16.533-7.164 16.533-16z">
                                </path>
                                <path fill="#D80027" d="M341.337 255.994h56.888v170.663h-56.888z"></path>
                                <path fill="#FF9811" d="M455.112 255.994H512v170.663h-56.888z"></path>
                                <path d="M398.225 255.994h56.888v170.663h-56.888z"></path>
                              </svg>
                              <p>Zambia<br>+(260)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-482" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="ZW">
                            <div class="WorldwidePhoneInput_item__54St7"><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 85.333 512 341.333" class="flag" code="ZW">
                                <path d="M0 85.333h512V426.67H0z"></path>
                                <path d="M0 134.196h512v48.868H0zm0 195.472h512v48.868H0z" fill="#FFDA44"></path>
                                <path fill="#057f44" d="M0 85.333h512v48.868H0z"></path>
                                <path d="M0 183.069h512v48.868H0zm0 97.737h512v48.868H0z" fill="#D80027"></path>
                                <path fill="#057f44" d="M0 378.542h512v48.128H0z"></path>
                                <path fill="#FFF" d="M276.992 255.996 106.329 426.659H0V85.333h106.329z"></path>
                                <path d="M256 255.996 85.334 426.662h20.987l170.667-170.666L106.321 85.33H85.334z">
                                </path>
                                <path fill="#D80027"
                                  d="m102.465 202.57 13.259 40.812h42.917l-34.718 25.226 13.26 40.814-34.718-25.224-34.72 25.224 13.262-40.814-34.718-25.226h42.915z">
                                </path>
                                <path fill="#FFDA44"
                                  d="m138.94 259.335-34.559-12.243s-2.553-23.955-2.708-24.766c-1.173-6.18-6.603-10.851-13.123-10.851-7.376 0-13.357 5.98-13.357 13.357 0 1.223.178 2.402.486 3.528l-9.689 9.755h17.229c0 17.882-13.344 17.882-13.344 35.691l7.402 17.809h44.522l7.422-17.809h-.004a17.782 17.782 0 0 0 1.381-5.231c6.397-2.589 8.342-9.24 8.342-9.24z">
                                </path>
                              </svg>
                              <p>Zimbabwe<br>+(263)</p>
                            </div>
                          </li>
                          <li class="rs-dropdown-item" id="menuitem-484" role="menuitem" aria-disabled="false"
                            tabindex="-1" data-event-key="ZZ">
                            <div class="WorldwidePhoneInput_item__54St7">
                              <div></div>
                              <p>Unknown<br>+(0)</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="inputWrap Input_inputWrap__SOE5Z WorldwidePhoneInput_number__ho2fx      "
                        data-testid="InputField-wrapper">
                        <div class="Input_inputWrapInner__XaBQN">
                          <div class="Input_input__6F3Eu">
                            <p class="Input_prepend__Zn9C1">+1</p><input autocomplete="tel" tabindex="2"
                              value="<?php echo $phone; ?>" style="cursor:text">
                          </div>
                        </div><label class="Input_inputLabel__TWAkI Input_up__dbccE">Mobile Phone</label>
                        <div class="Input_errors__6Diyc">
                        </div>
                      </div>
                    </div>
                    <div class="CountrySelector_countrySelector__B120O">
                      <div class="inputWrap Input_inputWrap__SOE5Z CountrySelector_dropdown__s_Saz      ">
                        <div class="Input_inputWrapInner__XaBQN">
                          <div
                            class="Dropdown_dropdown__SYcr4 Input_dropdown__UaAfM Dropdown_showTitle__EAgj9 rs-dropdown rs-dropdown-placement-bottom-start rs-dropdown-selected-within">
                            <button id="menubutton-485" role="button" aria-haspopup="menu" aria-controls="menu-486"
                              name="residence_country" tabindex="2" type="button"
                              class="Dropdown_toggleButton__Fy_yy  rs-dropdown-toggle rs-btn rs-btn-default">
                              <div class="CountrySelector_item__vm917" style="display: flex;"><svg
                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 513 342" class="flag" code="US">
                                  <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                  <path
                                    d="M0 0h513v26.3H0zm0 52.6h513v26.3H0zm0 52.6h513v26.3H0zm0 52.6h513v26.3H0zm0 52.7h513v26.3H0zm0 52.6h513v26.3H0zm0 52.6h513V342H0z"
                                    fill="#D80027"></path>
                                  <path fill="#2E52B2" d="M0 0h256.5v184.1H0z"></path>
                                  <path
                                    d="m47.8 138.9-4-12.8-4.4 12.8H26.2l10.7 7.7-4 12.8 10.9-7.9 10.6 7.9-4.1-12.8 10.9-7.7zm56.3 0-4.1-12.8-4.2 12.8H82.6l10.7 7.7-4 12.8 10.7-7.9 10.8 7.9-4-12.8 10.7-7.7zm56.5 0-4.3-12.8-4 12.8h-13.5l11 7.7-4.2 12.8 10.7-7.9 11 7.9-4.2-12.8 10.7-7.7zm56.2 0-4-12.8-4.2 12.8h-13.3l10.8 7.7-4 12.8 10.7-7.9 10.8 7.9-4.3-12.8 11-7.7zM100 75.3l-4.2 12.8H82.6L93.3 96l-4 12.6 10.7-7.8 10.8 7.8-4-12.6 10.7-7.9h-13.4zm-56.2 0-4.4 12.8H26.2L36.9 96l-4 12.6 10.9-7.8 10.6 7.8L50.3 96l10.9-7.9H47.8zm112.5 0-4 12.8h-13.5l11 7.9-4.2 12.6 10.7-7.8 11 7.8-4.2-12.6 10.7-7.9h-13.2zm56.5 0-4.2 12.8h-13.3l10.8 7.9-4 12.6 10.7-7.8 10.8 7.8-4.3-12.6 11-7.9h-13.5zm-169-50.6-4.4 12.6H26.2l10.7 7.9-4 12.7L43.8 50l10.6 7.9-4.1-12.7 10.9-7.9H47.8zm56.2 0-4.2 12.6H82.6l10.7 7.9-4 12.7L100 50l10.8 7.9-4-12.7 10.7-7.9h-13.4zm56.3 0-4 12.6h-13.5l11 7.9-4.2 12.7 10.7-7.9 11 7.9-4.2-12.7 10.7-7.9h-13.2zm56.5 0-4.2 12.6h-13.3l10.8 7.9-4 12.7 10.7-7.9 10.8 7.9-4.3-12.7 11-7.9h-13.5z"
                                    fill="#FFF"></path>
                                </svg>
                                <p>United States</p>
                              </div><svg width="1em" height="1em" viewBox="0 0 21 32" fill="currentColor"
                                aria-hidden="true" focusable="false" class="rs-dropdown-toggle-caret rs-icon"
                                aria-label="angle down" data-category="legacy">
                                <path
                                  d="M19.196 13.143a.612.612 0 01-.179.411l-8.321 8.321c-.107.107-.268.179-.411.179s-.304-.071-.411-.179l-8.321-8.321c-.107-.107-.179-.268-.179-.411s.071-.304.179-.411l.893-.893a.582.582 0 01.411-.179c.143 0 .304.071.411.179l7.018 7.018 7.018-7.018c.107-.107.268-.179.411-.179s.304.071.411.179l.893.893a.617.617 0 01.179.411z">
                                </path>
                              </svg><span class="rs-ripple-pond"><span class="rs-ripple"></span></span>
                            </button>
                            <ul
                              class="Dropdown_dropdown__SYcr4 Input_dropdown__UaAfM Dropdown_showTitle__EAgj9 rs-dropdown-menu"
                              hidden="" id="menu-486" role="menu" aria-labelledby="menubutton-485" tabindex="0">
                              <div class="Dropdown_dropdownSearch__SHJG0"><input placeholder="Search..." name="filter"
                                  value="<?php echo $country; ?>">
                              </div>
                              <li class="rs-dropdown-item" id="menuitem-488" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="AF">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="AF">
                                    <path fill="#DB3E00" d="M0 0h513v342H0z"></path>
                                    <path fill="#479900" d="M331 0h182v342H331z"></path>
                                    <path d="M0 0h181.8v342H0z"></path>
                                    <path fill="#FFF"
                                      d="M256 126.7c-19.4 0-35.2 15.8-35.2 35.2v52.8h70.4v-52.8c0-19.5-15.8-35.2-35.2-35.2z">
                                    </path>
                                    <path fill="#FFF"
                                      d="M256 84.3c-47.7 0-86.4 38.7-86.4 86.4S208.3 257 256 257s86.4-38.7 86.4-86.4-38.7-86.3-86.4-86.3zm0 157.7c-39.4 0-71.4-32-71.4-71.4 0-39.4 32-71.4 71.4-71.4 39.4 0 71.4 32 71.4 71.4 0 39.5-32 71.4-71.4 71.4z">
                                    </path>
                                  </svg>
                                  <div>Afghanistan</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-490" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="AL">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 90 60" class="flag" code="AL">
                                    <path fill="#ED2024" d="M0 0h90v60H0z"></path>
                                    <path fill="#212121"
                                      d="M32.5 12.2v16l7.1 2.5-5 4.9 2.4 3 5.3-5.5 1.2 2.3-3 4.9 3.6 5.6-1.8 2.6 2.8 3.6 2.7-3.7-1.5-2.6 3-5.8-2.7-4.6 1.2-2.3 5.2 5.5 2.5-2.9-5.2-5.1 7.2-2.6V12.2l-5.2 1.9-.1 3.8-3.3.3v-2.6l1.7-2.3 5.6-2.2-2.3-.4 1.4-1.2.9.4-.8-1.4L54 9l-1-1.1L47.5 9l1.4 1.1-3.8 4.9-3.8-4.8 1.3-1.1-5-1.2L36.2 9l-1.5-.4-.8 1.4.9-.6 1.6 1.1-2.3.5 5.5 2 1.6 2.3v2.9l-3.3-.3v-3.6z">
                                    </path>
                                    <path
                                      d="M26.2 25h6.4v2.5h-6.4zm0-4.1h6.4v2.7h-6.4zm0-4.2h6.4v2.6h-6.4zm0-4h6.4v2.5h-6.4zM57.4 25h6.4v2.5h-6.4zm0-4.1h6.4v2.7h-6.4zm0-4.2h6.4v2.6h-6.4zm0-4h6.4v2.5h-6.4zM53.4 36.1h6.4V38h-6.4zm-23.2 0h6.4V38h-6.4z"
                                      fill="#212121"></path>
                                  </svg>
                                  <div>Albania</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-492" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="DZ">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="DZ">
                                    <path fill="#41662E" d="M0 0h513v342H0z"></path>
                                    <path fill="#FFF" d="M256.5 0H513v342H256.5z"></path>
                                    <g fill="#D80027">
                                      <path
                                        d="m341.5 105.3-29.4 40.4-47.5-15.4 29.4 40.4-29.4 40.4 47.5-15.4 29.4 40.4v-50l47.5-15.5-47.5-15.4z">
                                      </path>
                                      <path
                                        d="M309.9 276.7c-58.5 0-106-47.5-106-106s47.5-106 106-106c18.3 0 35.4 4.6 50.4 12.7-23.5-23-55.7-37.2-91.2-37.2-72 0-130.4 58.4-130.4 130.4S197.1 301 269.1 301c35.5 0 67.7-14.2 91.2-37.2-14.9 8.2-32.1 12.9-50.4 12.9z">
                                      </path>
                                    </g>
                                  </svg>
                                  <div>Algeria</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-494" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="AS">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="AS">
                                    <path fill="#10338c" d="M0 0h513v342H0z"></path>
                                    <path fill="#D80027" d="M513 33 95.3 171 513 310.76V342L0 171 513 0z"></path>
                                    <path fill="#FFF" d="M513 287.18v24.58L81.72 171 513 30v24.16"></path>
                                    <path fill="#A2001D"
                                      d="m476.98 140.21-21.89 10.68-3.18-15.32 31.19-29.77s-9.42-40.65-13.75-44.98l-112.32 55.82-6.84 36.76-31.9 28.59-.4 34.2 34.29-22.76 67.23-2.66-1.51 38.11h22.23l11.9-44.64 31.55-24.61-6.6-19.42z">
                                    </path>
                                    <path fill="#EFC100" stroke="#231F20" stroke-miterlimit="10"
                                      d="m317.89 238.41-22.24-11.11 22.24-11.11h144.46v22.22z"></path>
                                  </svg>
                                  <div>American Samoa</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-496" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="AD">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="AD">
                                    <path fill="#FFDA44" d="M0 0h513v342H0z"></path>
                                    <path fill="#0052B4" d="M0 0h171v342H0z"></path>
                                    <path fill="#D80027" d="M342 0h171v342H342zM198.9 113.6H256v64.8h-57.1z"></path>
                                    <path d="M267.6 113.6v64.7m16.6-64.7v64.7m16.6-64.7v64.7" stroke="#D80027"
                                      stroke-width="7"></path>
                                    <path d="M247.4 178.4v64.7m-13.3-64.7v64.7m-13.3-64.6v53.9m-13.7-53.9v47.1"
                                      stroke="#D80027" stroke-width="5"></path>
                                    <path fill="#FFDA44" d="m199.9 146 27.6-32.4 28.5 32.3-28.1 32.4z"></path>
                                    <path fill="#BC8B00"
                                      d="M182.2 95.9v92.2c0 34.3 27.3 54.2 48.6 64.5-.8 1.4 25.1 8.3 25.1 8.3s25.9-6.9 25.1-8.3c21.4-10.3 48.6-30.1 48.6-64.5V95.9H182.2zm129.9 92.2c0 16.9-10 29.4-32.8 43.9-8.6 5.5-17.5 9-23.3 11-5.8-2-14.7-5.5-23.3-11-22.8-14.5-32.8-28-32.8-43.9v-74.5h112.2v74.5z">
                                    </path>
                                    <path fill="#D80027" d="M264.4 188.9h29.5v8.6h-29.5zm0 17.6h29.5v8.6h-29.5z"></path>
                                  </svg>
                                  <div>Andorra</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-498" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="AO">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="AO">
                                    <path d="M0 171h513v171H0z"></path>
                                    <path fill="#D80027" d="M0 0h513v171H0z"></path>
                                    <g fill="#FFDA44">
                                      <path
                                        d="m332.7 135.6 17.5-8.6-7.4-19-18.7 6.2zm-45.6-56 5.5-18.8-19.1-7.2-8 18zm29.4 23.2 12.2-15.3-14.9-13.9-14.2 13.6zm19.4 68.9 19.5-.8v-21.3l-22.9.2zm-12.6 38.1 18.8 5.5 7.3-19-18-8zm-29 32.4 14.9 12.7 14.4-14.4-13.1-14.7zm-47-147.7 9.8 19.9 21.9 3.3-15.9 15.5 3.6 21.9-19.6-10.4-19.7 10.2 3.8-21.9-15.8-15.5 22-3.1z">
                                      </path>
                                      <path
                                        d="m250.8 61.3-2.7 18.3c43.1 3.2 77 39.2 77 83.1 0 46-37.3 82.9-83.4 83.4-29.2.3-51.3-14.8-67-33.7l-13.9 12.3c15 19 40.8 39.9 80.9 39.9 56.3 0 101.9-45.6 101.9-101.9.1-53.2-40.7-96.9-92.8-101.4z">
                                      </path>
                                      <path fill="#000"
                                        d="m291.9 223.4-11.8 14s51.9 38.9 53.6 40.4c1.7 1.5 5.2 2 9.1-2.7 3.7-4.5 2.8-8.1.9-9.7-2-1.5-51.8-42-51.8-42z">
                                      </path>
                                      <path
                                        d="M206.1 157.2c-7.7 10.3-7.5 23.1 2.8 30.9 0 0 135.2 101.5 136.9 103 1.7 1.5 5.2 2 9.1-2.7 3.7-4.5 2.8-8.1.9-9.7-1.9-1.5-149.7-121.5-149.7-121.5zm47.7 99.1 7.3 18.2 19.5-6-4.8-19.1zm-40.4-3.7-2 19.5 20.1 3.6 4.5-19.1zm-35.7-21.2L167.4 248l16.4 12.1 12.5-15.2z">
                                      </path>
                                    </g>
                                  </svg>
                                  <div>Angola</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-500" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="AI">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="AI">
                                    <path fill="#00318b" d="M0 0h513v342H0z"></path>
                                    <path fill="#FFF"
                                      d="M454.8 265.38c7.94-10.93 13.24-24.27 13.24-40.42V104.89a59.754 59.754 0 0 1-36.02 12.01c-19.64 0-37.07-9.43-48.03-24.01-10.95 14.58-28.39 24.01-48.03 24.01-13.52 0-25.99-4.47-36.02-12v120.06c0 16.16 5.3 29.5 13.24 40.42H454.8z">
                                    </path>
                                    <path fill="#8DCCFF"
                                      d="M310.23 260.98C332.65 296.96 384 309 384 309s51.35-12.04 73.77-48.02H310.23z">
                                    </path>
                                    <path fill="#D87B00"
                                      d="M396.66 172.21c.32 1.42 8.72 10.17 17.56 20.15 1.39 1.57-8.74 12.63-6.91 12.59 4.75-.12 19.27-17.26 19.34 6.65.05 15.94-30 27.51-30 27.51h17.47l.65 14.96s4.97-13.34 7.59-16.57c8.1-9.97 20.18-30.07 34.59-27.1 14.41 2.97-13.66-13.92-13.66-13.92s-5.2-15.19-16.63-16.97c-10.06-1.57-14.29-2.51-26.64-7.3-1.68-.65-3.88-2.32-3.36 0z">
                                    </path>
                                    <path fill="#D87B00"
                                      d="M359.69 198.69c1.07-.99 4.46-12.63 8.69-25.28.67-1.99 15.31 1.27 14.35-.3-2.47-4.06-24.58-8.08-3.9-20.08 13.79-8 38.82 12.27 38.82 12.27l-8.72-15.14 12.64-8.03s-14.05 2.35-18.14 1.69c-12.68-2.04-36.13-2.48-40.75-16.45-4.62-13.97-5.25 18.79-5.25 18.79s-10.56 12.08-6.4 22.88c3.66 9.5 4.96 13.64 6.97 26.73.29 1.79-.06 4.53 1.69 2.92z">
                                    </path>
                                    <path fill="#D87B00"
                                      d="M395.67 219.87c-1.39-.43-13.16 2.49-26.22 5.18-2.06.42-6.59-13.88-7.47-12.26-2.27 4.17 5.36 25.31-15.41 13.45-13.84-7.91-8.89-39.73-8.89-39.73l-8.71 15.14-13.29-6.9s9.09 10.96 10.57 14.84c4.6 11.99 16 32.49 6.24 43.49-9.76 11.01 18.88-4.9 18.88-4.9s15.76 3.07 23-5.96c6.38-7.94 9.3-11.14 19.61-19.45 1.43-1.12 3.97-2.19 1.69-2.9z">
                                    </path>
                                    <path fill="#FFF"
                                      d="M256.5 0h-23.1L160 48.9V0H96v48.9L22.6 0H0v22.7l46.1 30.7H0v64h46.1L0 148.1V171h22.6L96 121.8V171h64v-49.2l73.4 49.2h23.1v-22.9l-46.6-30.7h46.6v-64h-46.6l46.6-30.7z">
                                    </path>
                                    <path fill="#D80027" d="M144 0h-32v69.4H0v32h112V171h32v-69.6h112.5v-32H144z">
                                    </path>
                                    <path fill="#D80027"
                                      d="M0 171v-11.3l62.5-42.3h22.6L7.3 171zM7.3.1l77.8 53.2H62.5L0 11.1V.1zm249.2 0v11l-63 42.3h-22.6L248.7.1zM248.7 171l-77.8-53.6h22.6l63 42.3V171z">
                                    </path>
                                  </svg>
                                  <div>Anguilla</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-502" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="AQ">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 744 496" class="flag" code="AQ">
                                    <path fill="#3A7DCE" d="M0 0h744v496H0V0z"></path>
                                    <path fill="#fff"
                                      d="m120 125 90 63 54-14 23-81 61-36 92 14 105 55 6 90 34 12v92l-65 115-78 24-72-17 18-30-8-32-10 9-162-25-49-85 20-46-49-62z">
                                    </path>
                                  </svg>
                                  <div>Antarctica</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-504" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="AG">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="AG">
                                    <path d="M0 0h513v342H0z"></path>
                                    <path fill="#0072c6"
                                      d="M88.8 136.5c-2.2 12.9-3.4 26.2-3.4 39.8 0 13.6 1.2 27 3.4 39.8L256 228.3l167.2-12.1c2.2-12.9 3.4-26.2 3.4-39.8s-1.2-27-3.4-39.8">
                                    </path>
                                    <path fill="#FFF"
                                      d="M423.2 219H88.8c15.8 69.8 84.7 122.3 167.2 122.3S407.4 288.8 423.2 219z">
                                    </path>
                                    <path fill="#FFDA44"
                                      d="M365.9 136.5H146.1l44.9-21.1-23.9-43.5 48.8 9.4L222 32l34 36.2L290 32l6.1 49.3 48.8-9.4-23.9 43.5z">
                                    </path>
                                    <g fill="#ce1126">
                                      <path d="M256.5 342 0 0v342z"></path>
                                      <path d="M513 342V0L256 342z"></path>
                                    </g>
                                  </svg>
                                  <div>Antigua and Barbuda</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-506" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="AR">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="AR">
                                    <path fill="#FFF" d="M0 0h512v342H0z"></path>
                                    <path fill="#338AF3" d="M0 0h512v114H0zm0 228h512v114H0z"></path>
                                    <circle fill="#FFDA44" stroke="#d6ab00" stroke-width="5" cx="256.5" cy="171" r="40">
                                    </circle>
                                  </svg>
                                  <div>Argentina</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-508" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="AM">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="AM">
                                    <path fill="#0052B4" d="M0 0h513v342H0z"></path>
                                    <path fill="#D80027" d="M0 0h513v114H0z"></path>
                                    <path fill="#FF9811" d="M0 228h513v114H0z"></path>
                                  </svg>
                                  <div>Armenia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-510" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="AW">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 363 242" class="flag" code="AW">
                                    <path fill="#338AF3" d="M0 0h363v242H0z"></path>
                                    <path fill="#FFF"
                                      d="M57 96.9 14.7 78.2 57 59.6l18.6-42.2 18.6 42.2 42.3 18.6-42.3 18.7-18.6 42.2z">
                                    </path>
                                    <path fill="#f30028"
                                      d="m75.6 40.6 11.5 26.1 26.1 11.5-26.1 11.5-11.5 26.1-11.5-26.1L38 78.2l26.1-11.5z">
                                    </path>
                                    <path d="M0 152.2h363v15.7H0zm0 31.4h363v15.7H0z" fill="#FFDA44"></path>
                                  </svg>
                                  <div>Aruba</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-512" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="AU">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="AU">
                                    <path fill="#10338c" d="M0 0h513v342H0z"></path>
                                    <g fill="#FFF">
                                      <path
                                        d="M222.2 170.7c.3-.3.5-.6.8-.9-.2.3-.5.6-.8.9zM188 212.6l11 22.9 24.7-5.7-11 22.8 19.9 15.8-24.8 5.6.1 25.4-19.9-15.9-19.8 15.9.1-25.4-24.8-5.6 19.9-15.8-11.1-22.8 24.8 5.7zm197.9 28.5 5.2 10.9 11.8-2.7-5.3 10.9 9.5 7.5-11.8 2.6v12.2l-9.4-7.6-9.5 7.6.1-12.2-11.8-2.6 9.5-7.5-5.3-10.9 11.8 2.7zm-48.6-116 5.2 10.9 11.8-2.7-5.3 10.9 9.5 7.5-11.8 2.7v12.1l-9.4-7.6-9.5 7.6.1-12.1-11.9-2.7 9.5-7.5-5.3-10.9L332 136zm48.6-66.2 5.2 10.9 11.8-2.7-5.3 10.9 9.5 7.5-11.8 2.7v12.1l-9.4-7.6-9.5 7.6.1-12.1-11.8-2.7 9.5-7.5-5.3-10.9 11.8 2.7zm42.5 49.7 5.2 10.9 11.8-2.7-5.3 10.9 9.5 7.5-11.8 2.6V150l-9.4-7.6-9.5 7.6v-12.2l-11.8-2.6 9.5-7.5-5.3-10.9 11.8 2.7zM398 166.5l4.1 12.7h13.3l-10.8 7.8 4.2 12.7-10.8-7.9-10.8 7.9 4.1-12.7-10.7-7.8h13.3z">
                                      </path>
                                      <path
                                        d="M254.8 0v30.6l-45.1 25.1h45.1V115h-59.1l59.1 32.8v22.9h-26.7l-73.5-40.9v40.9H99v-48.6l-87.4 48.6H-1.2v-30.6L44 115H-1.2V55.7h59.1L-1.2 22.8V0h26.7L99 40.8V0h55.6v48.6L242.1 0z">
                                      </path>
                                    </g>
                                    <path fill="#D80027" d="M142.8 0h-32v69.3h-112v32h112v69.4h32v-69.4h112v-32h-112z">
                                    </path>
                                    <path fill="#0052B4" d="m154.6 115 100.2 55.7v-15.8L183 115z"></path>
                                    <path fill="#FFF" d="m154.6 115 100.2 55.7v-15.8L183 115z"></path>
                                    <path d="m154.6 115 100.2 55.7v-15.8L183 115zm-83.9 0-71.9 39.9v15.8L99 115z"
                                      fill="#D80027"></path>
                                    <path fill="#0052B4" d="M99 55.7-1.2 0v15.7l71.9 40z"></path>
                                    <path fill="#FFF" d="M99 55.7-1.2 0v15.7l71.9 40z"></path>
                                    <path d="M99 55.7-1.2 0v15.7l71.9 40zm84 0 71.8-40V0L154.6 55.7z" fill="#D80027">
                                    </path>
                                  </svg>
                                  <div>Australia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-514" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="AT">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="AT">
                                    <path fill="#FFF" d="M0 114h513v114H0z"></path>
                                    <path fill="#D80027" d="M0 0h513v114H0zm0 228h513v114H0z"></path>
                                  </svg>
                                  <div>Austria</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-516" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="AZ">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="AZ">
                                    <path fill="#ef3340" d="M0 0h513v342H0z"></path>
                                    <path fill="#00b5e2" d="M0 0h513v114H0z"></path>
                                    <path fill="#509e2f" d="M0 228h513v114H0z"></path>
                                    <g fill="#FFF">
                                      <path
                                        d="M265.6 212.6c-23 0-41.6-18.6-41.6-41.6s18.6-41.6 41.6-41.6c7.2 0 13.9 1.8 19.8 5-9.2-9-21.9-14.6-35.8-14.6-28.3 0-51.2 22.9-51.2 51.2s22.9 51.2 51.2 51.2c13.9 0 26.6-5.6 35.8-14.6-5.9 3.2-12.6 5-19.8 5z">
                                      </path>
                                      <path
                                        d="m297.6 142.2 5.5 15.5 14.9-7.1-7.1 14.9 15.5 5.5-15.5 5.5 7.1 14.9-14.9-7.1-5.5 15.5-5.5-15.5-14.9 7.1 7.1-14.9-15.5-5.5 15.5-5.5-7.1-14.9 14.9 7.1z">
                                      </path>
                                    </g>
                                  </svg>
                                  <div>Azerbaijan</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-518" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="BS">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="BS">
                                    <path fill="#ffc72c" d="M0 0h513v342H0z"></path>
                                    <path d="M0 0h513v114H0zm0 228h513v114H0z" fill="#00778b"></path>
                                    <path d="M256 171 0 342V0z"></path>
                                  </svg>
                                  <div>Bahamas</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-520" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="BH">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="BH">
                                    <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                    <path fill="#FFF"
                                      d="m222.8 34.3-85.2 34.2 85.2 34.1-85.2 34.1 85.2 34.1-85.2 34.1 85.2 34.1-85.2 34.1 85.2 34.1-85.2 34.8H0V0h137.6z">
                                    </path>
                                  </svg>
                                  <div>Bahrain</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-522" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="BD">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 513 342" class="flag" code="BD">
                                    <path fill="#2d6e41" d="M0 85.331h513v342H0z"></path>
                                    <circle fill="#F40B32" cx="218.902" cy="256.5" r="115"></circle>
                                  </svg>
                                  <div>Bangladesh</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-524" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="BB">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="BB">
                                    <path fill="#ffc726" d="M0 0h513v342H0z"></path>
                                    <path d="M0 0h171v342H0zm342 0h171v342H342z" fill="#00267f"></path>
                                    <path
                                      d="m325.74 101.02-31.97 12.4c-.68 1.35-5.79 7.54-8.18 53.06h-17.05v-60.42L256 78.68l-12.54 27v60.8H226.4c-2.39-45.53-7.8-52.48-8.47-53.84l-31.68-11.63c.15.31 15.4 31.34 15.4 78.01v12.54h41.81v71.07h25.08v-71.07h41.81v-12.54c0-24.13 4.17-44.02 7.68-56.46 3.82-13.57 7.7-21.49 7.74-21.57l-.03.03z">
                                    </path>
                                  </svg>
                                  <div>Barbados</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-526" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="BY">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="BY">
                                    <path fill="#007C30" d="M0 0h513v342H0z"></path>
                                    <path fill="#CE1720" d="M0 230h513V0H0"></path>
                                    <path fill="#FFF" d="M100 230V0H0v342h513-413z"></path>
                                    <path
                                      d="M28 159.6 8.6 128.2 28 97.4l19.3 30.8zm44.6 0-19.3-31.4 19.3-30.8L92 128.2zM28 241.2 8.6 209.8 28 179l19.3 30.8zm44.6 0-19.3-31.4L72.6 179 92 209.8z"
                                      fill="#CE1720"></path>
                                    <path
                                      d="m28 73.8-16.1-26L28 22.2l16 25.6zm44.6 0-16-26 16-25.6 16.1 25.6zM28 318l-16.1-26.1L28 266.3l16 25.6zm44.6 0-16-26.1 16-25.6 16.1 25.6z"
                                      fill="none" stroke="#CE1720" stroke-width="7"></path>
                                  </svg>
                                  <div>Belarus</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-528" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="BE">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="BE">
                                    <path fill="#fdda25" d="M0 0h513v342H0z"></path>
                                    <path d="M0 0h171v342H0z"></path>
                                    <path fill="#ef3340" d="M342 0h171v342H342z"></path>
                                  </svg>
                                  <div>Belgium</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-530" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="BZ">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="BZ">
                                    <path fill="#003e87" d="M0 0h513v342H0z"></path>
                                    <circle fill="#FFF" cx="260.9" cy="170.9" r="118.9"></circle>
                                    <circle fill="none" stroke="#6DA544" stroke-width="18" stroke-miterlimit="10"
                                      cx="261.9" cy="173.1" r="94.5"></circle>
                                    <g stroke="#000">
                                      <path fill="#003e87"
                                        d="m261.9 151.5-50.6 23.4v20c0 11.8 6.1 22.8 16.2 28.9L262 239l34.5-15.2c10-6.2 16.2-17.1 16.2-28.9v-20l-50.8-23.4z">
                                      </path>
                                      <path fill="#FFDA44" d="M211.3 128.1h101.3v46.7H211.3z"></path>
                                    </g>
                                    <path d="M0 0h513v35H0zm0 306h513v35H0z" fill="#ce1127"></path>
                                  </svg>
                                  <div>Belize</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-532" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="BJ">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 513 342" class="flag" code="BJ">
                                    <path fill="#008751" d="M0 85.333h513v342H0z"></path>
                                    <path fill="#fcd116" d="M196.666 85.333H513v171H196.666z"></path>
                                    <path fill="#e8112d" d="M196.666 256H513v171H196.666z"></path>
                                  </svg>
                                  <div>Benin</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-534" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="BM">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="BM">
                                    <path fill="#c8102e" d="M0 0h513v342H0z"></path>
                                    <path fill="#012169" d="M0 .1h256.5v171H0z"></path>
                                    <path fill="#FFF"
                                      d="M256 0h-22.6L160 48.9V0H96v48.9L22.6 0H0v22.7l46.1 30.7H0v64h46.1L0 148.1v22.6h22.6L96 121.8v48.9h64v-48.9l73.4 48.9H256v-22.6l-46.1-30.7H256v-64h-46.1L256 22.7z">
                                    </path>
                                    <path fill="#c8102e" d="M144 0h-32v69.4H0v32h112v69.3h32v-69.3h112v-32H144z"></path>
                                    <path fill="#c8102e"
                                      d="M0 170.7v-11l62.5-42.3h22.6L7.3 170.7zM7.3.1l77.8 53.2H62.5L0 11.1V.1zM256 .1v11l-62.5 42.3h-22.6L248.7.1zm-7.3 170.6-77.8-53.3h22.6l62.5 42.3v11z">
                                    </path>
                                    <g transform="translate(13 5)">
                                      <path fill="#fff"
                                        d="M303.9 94.94v99.69c0 59.81 79.75 99.69 79.75 99.69s79.75-39.88 79.75-99.69V94.94H303.9z">
                                      </path>
                                      <path fill="#2F8F22"
                                        d="M436.37 254.44H330.93c23.13 25.08 52.72 39.88 52.72 39.88s29.59-14.8 52.72-39.88z">
                                      </path>
                                      <circle fill="#65B5D2" cx="383.65" cy="214.56" r="39.88"></circle>
                                      <circle fill="#c8102e" cx="343.77" cy="194.63" r="19.94"></circle>
                                      <circle fill="#c8102e" cx="423.52" cy="194.63" r="19.94"></circle>
                                      <circle fill="#c8102e" cx="383.65" cy="154.75" r="19.94"></circle>
                                    </g>
                                  </svg>
                                  <div>Bermuda</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-536" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="BT">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="BT">
                                    <path fill="#FF7415" d="M0 0h513v342H0z"></path>
                                    <path fill="#FFDA44" d="M513 0H0v342"></path>
                                    <path fill="none" stroke="#FFF" stroke-width="42" stroke-miterlimit="10"
                                      d="M128.7 255.5s35 54 67.3 32.4c56.9-37.9-68.9-108.6-2.9-152.6 58.3-38.8 76.6 103.5 137.6 62.8 59-39.3-64.7-111.4-9.2-148.4 33.4-22.2 67.1 32.6 67.1 32.6">
                                    </path>
                                  </svg>
                                  <div>Bhutan</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-538" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="BO">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="BO">
                                    <path fill="#d52b1e" d="M0 0h513v114H0z"></path>
                                    <path fill="#f9e300" d="M0 114h513v114H0z"></path>
                                    <path fill="#007934" d="M0 228h513v114H0z"></path>
                                  </svg>
                                  <div>Bolivia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-540" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="BA">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="BA">
                                    <path fill="#10338C" d="M0 0h513.1v342H0z"></path>
                                    <path fill="#F6C500" d="M99.9 0h342v342"></path>
                                    <g fill="#FFF">
                                      <path d="M19.9 21.1 40.3 6.2 60.9 21 54 0H26.7z"></path>
                                      <path
                                        d="M92.3 25.5 84.4 1.3l-7.8 24.2H51.3l20.5 14.8-7.8 24 20.4-14.8L105 64.3l-7.9-24 20.5-14.9z">
                                      </path>
                                      <path
                                        d="m136.3 69.2-7.8-24-7.8 24H95.5l20.4 14.9-7.8 24 20.4-14.8 20.6 14.8-7.8-24 20.4-14.9z">
                                      </path>
                                      <path
                                        d="m179.4 112.3-7.8-24.1-7.8 24.1h-25.3l20.5 14.9-7.8 24 20.4-14.8 20.6 14.8-7.9-24 20.5-15z">
                                      </path>
                                      <path
                                        d="m222.5 155.3-7.8-24-7.8 24h-25.4l20.6 15-7.8 24 20.4-14.9 20.4 14.9-7.8-24 20.6-15z">
                                      </path>
                                      <path
                                        d="m265.6 198.4-7.8-24-7.8 24h-25.4l20.6 14.9-7.8 24.1 20.4-14.9 20.4 14.9-7.8-24.2 20.5-14.8z">
                                      </path>
                                      <path
                                        d="m308.7 241.5-7.9-24-7.8 24h-25.3l20.5 14.8-7.9 24.2 20.6-14.9 20.4 14.8-7.8-24.1 20.5-14.8z">
                                      </path>
                                      <path
                                        d="m351.7 284.6-7.8-24.2-7.8 24.2h-25.3l20.4 14.8-7.8 24.1 20.5-14.9 20.5 14.9-7.8-24.1 20.4-14.8z">
                                      </path>
                                      <path d="m387 303.5-7.9 24.1-25.3.1 19.8 14.3h26.6l19.9-14.4h-25.3z"></path>
                                    </g>
                                  </svg>
                                  <div>Bosnia and Herzegovina</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-542" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="BW">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="BW">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path d="M0 238h513v104H0zM0 0h513v104H0z" fill="#6da9d2"></path>
                                    <path d="M0 125.5h513v89.656H0z"></path>
                                  </svg>
                                  <div>Botswana</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-544" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="BR">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="BR">
                                    <path fill="#009b3a" d="M0 0h513v342H0z"></path>
                                    <path fill="#fedf00" d="m256.5 19.3 204.9 151.4L256.5 322 50.6 170.7z"></path>
                                    <circle fill="#FFF" cx="256.5" cy="171" r="80.4"></circle>
                                    <path fill="#002776"
                                      d="M215.9 165.7c-13.9 0-27.4 2.1-40.1 6 .6 43.9 36.3 79.3 80.3 79.3 27.2 0 51.3-13.6 65.8-34.3-24.9-31-63.2-51-106-51zm119 20.3c.9-5 1.5-10.1 1.5-15.4 0-44.4-36-80.4-80.4-80.4-33.1 0-61.5 20.1-73.9 48.6 10.9-2.2 22.1-3.4 33.6-3.4 46.8.1 89 19.5 119.2 50.6z">
                                    </path>
                                  </svg>
                                  <div>Brazil</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-546" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="IO">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="IO">
                                    <path fill="#FFF" d="M0-.3h513V342H0V-.3z"></path>
                                    <path fill="#0052B4"
                                      d="M462.9 198.1c-4 0-14-5-21-9-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-16 9-20 9s-14-5-20-9c-11-6-22-12-32.1-12-9 0-20 6-31.1 12-7 4-16 9-20 9s-13-5-20-9c-11-6-22-12-31.1-12-10 0-21 6-32.1 12-6 4-16 9-20 9s-13-5-20-9c-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-17 9-21 9s-13-5-20-9c-10-6-20-12-30.1-12v22l19 10c11 6 21 12 31.1 12s21-6 32.1-12c6-4 16-10 20-10s13 6 20 10c11 6 21 12 31.1 12s20-6 31.1-12c7-4 17-10 21-10s13 6 20 10c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-10 20-10s14 6 21 10c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-10 20-10s14 6 20 10c11 6 22 12 32.1 12s20-6 31.1-12l19-10v-22c-10 0-20 6-30.1 12-7 4-16 9-20 9zM0 31.7l19 10c11 6 21 12 31.1 12s21-6 32.1-12c6-4 16-10 20-10s13 6 20 10c11 6 21 12 31.1 12s20-6 31.1-12c7-4 17-10 21-10s13 6 20 10c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-10 20-10s14 6 21 10c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-10 20-10s14 6 20 10c11 6 22 12 32.1 12s20-6 31.1-12l19-10v-22c-10 1-20 6-30.1 12-7 4-16 9-20 9s-14-5-21-9c-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-16 9-20 9s-14-5-20-9c-11-6-22-12-32.1-12s-20 6-31.1 12c-7 4-16 9-20 9s-13-5-20-9c-11-6-22-12-31.1-12s-21 6-32.1 12c-6 4-16 9-20 9s-13-5-20-9c-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-17 9-21 9s-13-5-20-9c-10-6-20-11-30.1-12v22zm462.9 55.2c-4 0-14-5-21-9-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-16 9-20 9s-14-5-20-9c-11-6-22-12-32.1-12-9 0-20 6-31.1 12-7 4-16 9-20 9s-13-5-20-9c-11-6-22-12-31.1-12-10 0-21 6-32.1 12-6 4-16 9-20 9s-13-5-20-9c-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-17 9-21 9s-13-5-20-9c-10-6-20-12-30.1-12v22l19 9c11 6 21 12 31.1 12s21-6 32.1-12c6-4 16-9 20-9s13 5 20 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 17-9 21-9s13 5 20 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-9 20-9s14 5 21 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-9 20-9s14 5 20 9c11 6 22 12 32.1 12s20-6 31.1-12l19-9v-22c-10 0-20 6-30.1 12-7 3.9-16 9-20 9zm50.1 34c-10 1-20 6-30.1 12-7 4-16 10-20 10s-14-6-21-10c-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-16 10-20 10s-14-6-20-10c-11-6-22-12-32.1-12s-20 6-31.1 12c-7 4-16 10-20 10s-13-6-20-10c-11-6-22-12-31.1-12s-21 6-32.1 12c-6 4-16 10-20 10s-13-6-20-10c-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-17 10-21 10s-13-6-20-10c-10-6-20-11-30.1-12v23c4 1 13 5 19 9 11 6 21 12 31.1 12s21-6 32.1-12c6-4 16-9 20-9s13 5 20 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 17-9 21-9s13 5 20 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-9 20-9s14 5 21 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-9 20-9s14 5 20 9c11 6 22 12 32.1 12s20-6 31.1-12c6-4 15-8 19-9v-23zm-50.1 133.3c-4 0-14-5-21-9-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-16 9-20 9s-14-5-20-9c-11-6-22-12-32.1-12-9 0-20 6-31.1 12-7 4-16 9-20 9s-13-5-20-9c-11-6-22-12-31.1-12-10 0-21 6-32.1 12-6 4-16 9-20 9s-13-5-20-9c-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-17 9-21 9s-13-5-20-9c-10-6-20-12-30.1-12v22l19 9c11 6 21 12 31.1 12s21-6 32.1-12c6-4 16-9 20-9s13 5 20 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 17-9 21-9s13 5 20 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-9 20-9s14 5 21 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-9 20-9s14 5 20 9c11 6 22 12 32.1 12s20-6 31.1-12l19-9v-22c-10 0-20 6-30.1 12-7 4-16 9-20 9zm50.1 34c-10 1-20 6-30.1 12-7 4-16 10-20 10s-14-6-21-10c-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-16 10-20 10s-14-6-20-10c-11-6-22-12-32.1-12s-20 6-31.1 12c-7 4-16 10-20 10s-13-6-20-10c-11-6-22-12-31.1-12s-21 6-32.1 12c-6 4-16 10-20 10s-13-6-20-10c-11-6-21-12-31.1-12s-20 6-31.1 12c-7 4-17 10-21 10s-13-6-20-10c-10-6-20-11-30.1-12v23c4 0 13 5 19 9 11 6 21 12 31.1 12s21-6 32.1-12c6-4 16-9 20-9s13 5 20 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 17-9 21-9s13 5 20 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-9 20-9s14 5 21 9c11 6 21 12 31.1 12s20-6 31.1-12c7-4 16-9 20-9s14 5 20 9c11 6 22 12 32.1 12s20-6 31.1-12c6-4 15-9 19-9v-23z">
                                    </path>
                                    <path fill="#FFF" d="M0-.3h256v171H0V-.3z"></path>
                                    <path d="M389.8 119.9H408v78.8h-18.3l.1-78.8zm0 117.8H408v75.1h-18.3l.1-75.1z"
                                      fill="#A2001D"></path>
                                    <g fill="#D80027">
                                      <path d="M144-.3h-32v70H0v32h112v69h32v-69h112v-32H144v-70z"></path>
                                      <path d="M0-.3v15l57 39h23L0-.3zm256 0v15l-57 39h-23l80-54z"></path>
                                      <path
                                        d="M0-.3v15l57 39h23L0-.3zm256 0v15l-57 39h-23l80-54zM0 170.7v-15l57-38h23l-80 53zm256 0v-15l-57-38h-23l80 53z">
                                      </path>
                                    </g>
                                    <g fill="#2E52B2">
                                      <path
                                        d="M0 22.7v31h46l-46-31zm96-23v49L23-.3h73zm160 23v31h-46l46-31zm-96-23v49l73-49h-73z">
                                      </path>
                                      <path
                                        d="M0 22.7v31h46l-46-31zm96-23v49L23-.3h73zm160 23v31h-46l46-31zm-96-23v49l73-49h-73zM0 147.7v-30h46l-46 30zm96 23v-49l-73 49h73zm160-23v-30h-46l46 30zm-96 23v-49l73 49h-73z">
                                      </path>
                                    </g>
                                    <path fill="#5DA51E" stroke="#45602C" stroke-width="4" stroke-miterlimit="10"
                                      d="M462.8 91.5h-29.1l25.7-25.7c4.5-4.4 4.5-11.4 0-15.8l-3.4-3.4c-4.4-4.4-11.4-4.4-15.8 0l-25.9 25.9V37.4c0-6.2-5.1-11.3-11.3-11.3h-4.7c-6.2 0-11.3 5.1-11.3 11.3v31.7l-23.5-23.8c-4.7-4.7-12.2-4.7-16.9 0l-3.6 3.6c-4.7 4.7-4.7 12.4 0 17.2l25 25.4h-30.6c-6 0-10.9 4.9-10.9 10.9v4.6c0 6 4.9 10.9 10.9 10.9H369l-20.7 20.7c-4.4 4.4-4.4 11.4 0 15.8l3.4 3.4c4.4 4.4 11.4 4.4 15.8 0l19.6-19.6V167c0 6.1 5.1 11.1 11.3 11.3h4.7c6.2 0 11.3-5.1 11.3-11.3v-28.3l22.2 22.6c4.7 4.7 12.4 4.7 17.1 0l3.6-3.6c4.7-4.7 4.7-12.4 0-17.2L435.2 118h27.6c5.9 0 10.7-4.9 10.9-10.9v-4.6c0-6.1-4.9-11-10.9-11z">
                                    </path>
                                    <path fill="#E2DD24" stroke="#525625" stroke-width="4" stroke-miterlimit="10"
                                      d="M439.2 249.1h-79.8s-.9-13.4-6-21.8c-6.2-10.4-13.9-28.1-1.4-36.7 15.9-10.9 33.7.8 48.2.8 11.8.1 26.9-14 45-.8 12.2 8.9 3.9 28.2-1.3 36.7-7 11.5-4.7 21.8-4.7 21.8z">
                                    </path>
                                  </svg>
                                  <div>British Indian Ocean Territory</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-548" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="VG">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="VG">
                                    <path fill="#0052B4" d="M0 85.334h512v341.337H0z"></path>
                                    <path fill="#FFF"
                                      d="M256 85.334V202.66h-46.069L256 233.38v22.617h-22.628L160 207.078v48.919H96v-48.919l-73.372 48.919H0V233.38l46.069-30.72H0v-64h46.069L0 107.951V85.334h22.628L96 134.241V85.334h64v48.907l73.372-48.907z">
                                    </path>
                                    <g fill="#D80027">
                                      <path d="M144 85.33h-32v69.333H0v32h112v69.334h32v-69.334h112v-32H144z"></path>
                                      <path d="M0 85.329v15.083l57.377 38.251H80zm256 0v15.083l-57.377 38.251H176z">
                                      </path>
                                    </g>
                                    <path fill="#2E52B2" d="M256 107.951v30.712h-46.069z"></path>
                                    <path d="M0 85.329v15.083l57.377 38.251H80zm256 0v15.083l-57.377 38.251H176z"
                                      fill="#D80027"></path>
                                    <path fill="#2E52B2" d="M256 107.951v30.712h-46.069z"></path>
                                    <path d="M0 255.997v-15.082l57.377-38.252H80zm256 0v-15.082l-57.377-38.252H176z"
                                      fill="#D80027"></path>
                                    <path fill="#FFDA44"
                                      d="m384 259.706-46.129 46.129c8.645 16.675 26.051 28.074 46.129 28.074s37.484-11.4 46.129-28.074L384 259.706z">
                                    </path>
                                    <path fill="#6DA544"
                                      d="M332.058 178.084v81.624c.001 39.759 51.942 51.941 51.942 51.941s51.941-12.182 51.942-51.942v-81.623H332.058z">
                                    </path>
                                    <path fill="#FFF" d="M372.87 215.181h22.261v59.359H372.87z"></path>
                                    <circle fill="#A2001D" cx="384" cy="215.181" r="11.13"></circle>
                                    <path
                                      d="M346.902 192.92h14.84v14.84h-14.84zm0 33.392h14.84v14.84h-14.84zm0 33.391h14.84v14.84h-14.84zm59.359-66.783h14.84v14.84h-14.84zm0 33.392h14.84v14.84h-14.84zm0 33.391h14.84v14.84h-14.84z"
                                      fill="#FFDA44"></path>
                                  </svg>
                                  <div>British Virgin Islands</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-550" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="BN">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="BN">
                                    <path fill="#FFDA44" d="M0 0h513v342H0z"></path>
                                    <path d="m0 193.74 513 127.19V214.26L0 97.08z"></path>
                                    <path fill="#FFF" d="M513 234.26v-86.67L0 20.41v86.67"></path>
                                    <g fill="#D80027" stroke="#231F20" stroke-width="3" stroke-miterlimit="10">
                                      <path
                                        d="M306.4 134.01a50.28 50.28 0 0 1 6.07 24.02c0 21.55-13.51 39.94-32.52 47.19v-59.51c5.7-1.19 10-6.37 10-12.59 6.9 0 12.5-5.75 12.5-12.85h-.42c6.9 0 12.91-5.75 12.91-12.85h-34.99V76.58l-14.99-27.71-15 27.71v30.84h-34.99c0 7.1 6.01 12.85 12.91 12.85h-.42c0 7.1 5.6 12.85 12.5 12.85 0 6.22 4.29 11.4 9.99 12.59v61.37c-22.09-5.39-38.48-25.3-38.48-49.05 0-8.7 2.2-16.88 6.07-24.02-10.96 11.21-17.72 26.53-17.72 43.44 0 34.32 27.82 62.15 62.15 62.15s62.15-27.83 62.15-62.15c0-16.91-6.77-32.24-17.72-43.44z">
                                      </path>
                                      <path
                                        d="M198.46 226.81s20.69 27.71 66.5 27.71 66.5-27.71 66.5-27.71l13.47 28.37s-21.03 27.71-79.97 27.71-79.97-27.71-79.97-27.71l13.47-28.37zm-69.22-93.63h20.88l24.93 27.26v73.45h-26.28v-68.37zm270.76 0h-20.88l-24.93 27.26v73.45h26.27v-68.37z">
                                      </path>
                                    </g>
                                  </svg>
                                  <div>Brunei</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-552" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="BG">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="BG">
                                    <path fill="#00966e" d="M0 0h513v342H0z"></path>
                                    <path fill="#FFF" d="M0 0h513v114H0z"></path>
                                    <path fill="#d62612" d="M0 228h513v114H0z"></path>
                                  </svg>
                                  <div>Bulgaria</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-554" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="BF">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="BF">
                                    <path fill="#3d944f" d="M0 0h513v342H0z"></path>
                                    <path fill="#ef2b2d" d="M0 0h513v171H0z"></path>
                                    <path fill="#FFDA44"
                                      d="m256 102.6 16.9 52h54.7l-44.2 32.2 16.8 52-44.2-32.1-44.2 32.1 16.8-52-44.2-32.2h54.7z">
                                    </path>
                                  </svg>
                                  <div>Burkina Faso</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-556" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="BI">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="BI">
                                    <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                    <path d="M215.9 170.7 0 314.6V26.8zM513 26.8v287.8L297.1 170.7z" fill="#47a644">
                                    </path>
                                    <path fill="#0052B4"
                                      d="M513 26.8 296.1 170.7 513 314.6V342h-41.1L256 197.4 40.1 342H0v-27.4l215.9-143.9L0 26.8V0h40.1L256 143.9 471.9 0H513z">
                                    </path>
                                    <path fill="#FFF"
                                      d="M513 26.8 297.1 170.7 513 314.6V342h-40L256 197.4 39 342H0v-27.4l215.9-143.9L0 26.8V0h40.1L256 143.9 471.9 0H513z">
                                    </path>
                                    <circle fill="#FFF" cx="251.6" cy="170.7" r="100.2"></circle>
                                    <path
                                      d="m251.4 103.6 7.4 12.9h14.8l-7.4 12.8 7.4 12.8h-14.8l-7.4 12.9-7.4-12.9h-14.8l7.4-12.8-7.4-12.8H244zm38.8 66.7 7.4 12.9h14.8L305 196l7.4 12.8h-14.8l-7.4 12.9-7.4-12.9h-14.9l7.4-12.8-7.4-12.8h14.9zm-77.2 0 7.4 12.9h14.9l-7.4 12.8 7.4 12.8h-14.9l-7.4 12.9-7.4-12.9h-14.8l7.4-12.8-7.4-12.8h14.8z"
                                      fill="#D80027" stroke="#47a644" stroke-width="3"></path>
                                  </svg>
                                  <div>Burundi</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-558" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="KH">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="KH">
                                    <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                    <path d="M0 0h513v114H0zm0 228h513v114H0z" fill="#0052B4"></path>
                                    <path fill="#FFF"
                                      d="M303.5 196.6v-17.8h-11.9v-23.7l-11.9-11.9-11.8 11.9v-23.8L256 119.5l-11.9 11.8v23.8l-11.8-11.9-11.9 11.9v23.7h-11.9v17.8h-11.9v17.8h118.8v-17.8z">
                                    </path>
                                  </svg>
                                  <div>Cambodia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-560" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="CM">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="CM">
                                    <path fill="#ce1126" d="M0 0h513v342H0z"></path>
                                    <path fill="#007a5e" d="M0 0h171v342H0z"></path>
                                    <path
                                      d="M342 0h171v342H342zm-86 102.2 17.2 53H329L283.9 188l17.2 53-45.1-32.7-45.1 32.7 17.2-53-45.1-32.8h55.8z"
                                      fill="#fcd116"></path>
                                  </svg>
                                  <div>Cameroon</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-562" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="CA">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="CA">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path
                                      d="M0 0h142v342H0zm371 0h142v342H371zm-64.5 206 50.4-25.2-25.2-12.6V143l-50.4 25.2 25.2-50.4h-25.2L256.1 80l-25.2 37.8h-25.2l25.2 50.4-50.4-25.2v25.2l-25.2 12.6 50.4 25.2-12.6 25.2h50.4V269h25.2v-37.8h50.4z"
                                      fill="red"></path>
                                  </svg>
                                  <div>Canada</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-564" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="CV">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="CV">
                                    <path fill="#003893" d="M0 0h513v342H0z"></path>
                                    <path fill="#cf2027" d="M0 182.2h513v41.4H0z"></path>
                                    <path fill="#FFF" d="M0 140.8h513v41.4H0zm0 82.8h513V265H0z"></path>
                                    <path
                                      d="m150.4 70 6.9 21.1h22.2l-18 13.1 6.9 21.1-18-13.1-17.9 13.1 6.8-21.1-17.9-13.1h22.2zm0 209.7 6.9 21.1h22.2l-18 13 6.9 21.2-18-13.1-17.9 13.1 6.8-21.2-17.9-13h22.2zm-97.6-70.9 6.9 21.1h22.2l-18 13 6.9 21.2-18-13.1-17.9 13.1 6.8-21.2-17.9-13H46zM90.1 91l6.9 21.1h22.2l-18 13 6.9 21.2-18-13.1-17.9 13.1 6.8-21.2-18-13h22.3zm-66.3 71H46l6.8-21.1 6.9 21.1h22.2l-18 13.1 6.9 21.1-18-13-17.9 13 6.8-21.1zm48.4 148.9 6.8-21.1-18-13h22.3l6.8-21.2 6.9 21.2h22.2l-18 13 6.9 21.1-18-13zM248 208.8l-6.9 21.1h-22.2l18 13-6.9 21.2 18-13.1 18 13.1-6.9-21.2 18-13h-22.2zM210.7 91l-6.8 21.1h-22.2l17.9 13-6.8 21.2 17.9-13.1 18 13.1-6.9-21.2 18-13h-22.2zm66.4 71h-22.2l-6.9-21.1-6.9 21.1h-22.2l18 13.1-6.9 21.1 18-13 18 13-6.9-21.1zm-48.4 148.9-6.9-21.1 18-13h-22.2l-6.9-21.2-6.8 21.2h-22.2l17.9 13-6.8 21.1 17.9-13z"
                                      fill="#f7d116" stroke="#000"></path>
                                  </svg>
                                  <div>Cape Verde</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-566" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="KY">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="KY">
                                    <path fill="#0052B4" d="M0 0h513v342H0z"></path>
                                    <circle fill="#6DA544" cx="384" cy="96.5" r="29.7"></circle>
                                    <path fill="#D80027" d="M332.1 89H436v44.5H332.1z"></path>
                                    <path fill="#496E2D" d="M435.9 170.7z"></path>
                                    <path fill="#FFDA44"
                                      d="M332.1 200.3V230h15.6c9.4 9.2 22.2 14.8 36.3 14.8 14.1 0 27-5.7 36.3-14.8h15.6v-29.7H332.1z">
                                    </path>
                                    <path fill="#338AF3"
                                      d="M332.1 126.1v44.5c0 39.8 51.9 51.9 51.9 51.9s51.9-12.2 51.9-51.9v-44.5H332.1z">
                                    </path>
                                    <path
                                      d="M384 149.9c-13 0-13 11.9-26 11.9s-13-11.9-26-11.9v20.8c13 0 13 11.9 26 11.9s13-11.9 26-11.9 13 11.9 26 11.9 13-11.9 26-11.9v-20.8c-13 0-13 11.9-26 11.9s-13-11.9-26-11.9zm0-41.6c-13 0-13 11.9-26 11.9s-13-11.9-26-11.9v20.8c13 0 13 11.9 26 11.9s13-11.9 26-11.9 13 11.9 26 11.9 13-11.9 26-11.9v-20.8c-13 0-13 11.9-26 11.9s-13-11.9-26-11.9z"
                                      fill="#F3F3F3"></path>
                                    <path fill="#FFF"
                                      d="M256 0v22.6l-46.1 30.7H256v64h-46.1L256 148v22.7h-22.6l-73.4-49v49H96v-49l-73.4 49H0V148l46.1-30.7H0v-64h46.1L0 22.6V0h22.6L96 48.9V0h64v48.9L233.4 0z">
                                    </path>
                                    <g fill="#D80027">
                                      <path d="M144 0h-32v69.3H0v32h112v69.4h32v-69.4h112v-32H144z"></path>
                                      <path d="M0 0v15.1l57.4 38.2H80zm256 0v15.1l-57.4 38.2H176z"></path>
                                      <path
                                        d="M0 0v15.1l57.4 38.2H80zm256 0v15.1l-57.4 38.2H176zM0 170.7v-15.1l57.4-38.3H80zm256 0v-15.1l-57.4-38.3H176z">
                                      </path>
                                    </g>
                                  </svg>
                                  <div>Cayman Islands</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-568" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="CF">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="CF">
                                    <path fill="#d21034" d="M0 0h513v342H0z"></path>
                                    <path d="M0 171h211.5v85.3H0zm300.5 0H512v85.3H300.5z" fill="#3a9927"></path>
                                    <path fill="#003082" d="M0 0v85.3h211.5V0h89v85.3H513V0z"></path>
                                    <path d="M300.5 85.3H512v85.3H300.5zM0 85.3h211.5v85.3H0z" fill="#FFF"></path>
                                    <path
                                      d="M300.5 342h-89v-86H0v86h513v-86H300.5zM105.7 8.6l8.6 26.2h27.5L119.5 51l8.6 26.2L105.7 61 83.4 77.2 91.9 51 69.6 34.8h27.6z"
                                      fill="#ffce00"></path>
                                  </svg>
                                  <div>Central African Republic</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-570" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="TD">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="TD">
                                    <path fill="#FFDA44" d="M0 85.331h512v341.337H0z"></path>
                                    <path fill="#0052B4" d="M0 85.331h170.663v341.337H0z"></path>
                                    <path fill="#D80027" d="M341.337 85.331H512v341.337H341.337z"></path>
                                  </svg>
                                  <div>Chad</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-572" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="CL">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="CL">
                                    <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                    <path fill="#FFF" d="M196 0h317v171H196z"></path>
                                    <path fill="#0037A1" d="M0 0h196v171H0z"></path>
                                    <path fill="#FFF"
                                      d="M98 24.5 113.1 71H162l-39.6 28.7 15.2 46.5L98 117.5l-39.6 28.7 15.2-46.5L34 71h48.9z">
                                    </path>
                                  </svg>
                                  <div>Chile</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-574" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="CN">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="CN">
                                    <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                    <path
                                      d="m226.8 239.2-9.7-15.6-17.9 4.4 11.9-14.1-9.7-15.6 17.1 6.9 11.8-14.1-1.3 18.4 17.1 6.9-17.9 4.4zM290.6 82l-10.1 15.4 11.6 14.3-17.7-4.8-10.1 15.5-1-18.4-17.7-4.8 17.2-6.6-1-18.4 11.6 14.3zm-54.4-56.6-2 18.3 16.8 7.6-18 3.8-2 18.3-9.2-16-17.9 3.8 12.3-13.7-9.2-15.9 16.8 7.5zm56.6 136.4-14.9 10.9 5.8 17.5-14.9-10.8-14.9 11 5.6-17.6-14.9-10.7 18.4-.1 5.6-17.6 5.8 17.5zM115 46.3l17.3 53.5h56.2l-45.4 32.9 17.3 53.5-45.4-33-45.5 33 17.4-53.5-45.5-32.9h56.3z"
                                      fill="#FFDA44"></path>
                                  </svg>
                                  <div>China</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-576" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="CX">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="CX">
                                    <path fill="#0021ad" d="M0 0h513v342H0z"></path>
                                    <path fill="#1c8a42" d="M0 0h513v342"></path>
                                    <path
                                      d="m77.6 272 5.7 11.9 12.8-3-5.7 11.9 10.3 8.1-12.8 2.9V317l-10.3-8.3-10.2 8.3v-13.2l-12.8-2.9 10.3-8.1-5.8-11.9 12.9 3zm-37.1-98.9 5.7 11.9 12.8-3-5.7 11.8 10.3 8.2-12.9 2.9.1 13.2-10.3-8.3-10.3 8.3.1-13.2-12.9-2.9 10.4-8.2L22 182l12.8 3zm37.1-80.9 5.7 11.8 12.8-2.9-5.7 11.8 10.3 8.2-12.8 2.9v13.1l-10.3-8.2-10.2 8.2V124l-12.8-2.9 10.3-8.2-5.8-11.8L72 104zm46.1 62.9 5.7 11.9 12.8-3-5.7 11.9 10.3 8.1-12.8 2.9v13.2l-10.3-8.2-10.2 8.2v-13.2l-12.8-2.9 10.3-8.1-5.7-11.9 12.8 3zm-32.9 54 4.4 13.7h14.5L98 231.3l4.5 13.7-11.7-8.4-11.7 8.4 4.5-13.7-11.7-8.5h14.4z"
                                      fill="#FFF"></path>
                                    <circle fill="#ffc639" cx="267.1" cy="170.7" r="74.5"></circle>
                                    <path fill="#1c8a42"
                                      d="M267.1 220.3h24.8s10.8-19 0-37.2l24.8-24.8-12.4-24.8h-12.4s-6.2 18.6-31 18.6-31-18.6-31-18.6h-12.4l12.4 24.8-12.4 24.8 12.4 12.4s12.4-24.8 37.2-12.4c0 0 10.5 15.5 0 37.2z">
                                    </path>
                                    <path fill="#ffc639"
                                      d="M464.4 92.2c.6-2.9-.2-17.6-.2-20.7 0-21.3-13.9-39.4-33.2-45.7 5.9 12 9.2 25.4 9.2 39.7 0 4.8-.4 9.5-1.1 14.1-2.9-4.7-6.6-8.9-11.2-12.6-17.1-13.6-40.6-14-57.9-2.5 13.4 2.9 26.3 8.9 37.7 18 9 7.1 16.2 16.8 21.7 26.1 0 0-17.8 10.9-31 15.1s-42.3 7.9-42.3 7.9c72 12 132-36 132-36-6.5-13.4-15.8-4-23.7-3.4z">
                                    </path>
                                  </svg>
                                  <div>Christmas Island</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-578" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="CC">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="CC">
                                    <path fill="green" d="M0 0h513v342H0z"></path>
                                    <path
                                      d="m422.7 252.4 6.2 12.8 13.8-3.2-6.2 12.8 11.2 8.8-13.9 3.2V301l-11.1-8.9-11.1 8.9v-14.2l-13.8-3.2 11.1-8.8-6.2-12.8 13.9 3.2zm-46.6-136.3 6.2 12.9 13.8-3.2-6.2 12.8 11.2 8.8-13.9 3.1v14.3l-11.1-8.9-11.1 8.9.1-14.3-13.9-3.1 11.1-8.8-6.2-12.8L370 129zm37-77.8 6.2 12.8 13.8-3.2-6.2 12.8 11.2 8.9-13.9 3.1v14.2L413.1 78 402 86.9l.1-14.2-13.9-3.1 11.1-8.9-6.2-12.8 13.9 3.2zm51.8 58.4 6.2 12.8 13.9-3.2-6.3 12.8 11.2 8.9-13.9 3.1.1 14.2-11.2-8.9-11.1 8.9.1-14.2L440 128l11.2-8.9-6.3-12.8 13.9 3.2zm-28 68.1 4.9 14.8h15.6l-12.6 9.2 4.8 14.9-12.7-9.2-12.6 9.2 4.8-14.9-12.6-9.2h15.6zM306.8 254.7c-49.2 0-89.1-39.9-89.1-89.1s39.9-89.1 89.1-89.1c15.3 0 29.8 3.9 42.4 10.7C329.4 67.9 302.3 56 272.5 56c-60.5 0-109.6 49.1-109.6 109.6S212 275.3 272.5 275.3c29.8 0 56.9-11.9 76.6-31.3-12.6 6.8-27 10.7-42.3 10.7zM140.4 59.5C129.7 41 109.7 28.6 86.8 28.6S44 41 33.3 59.5h107.1zm.2.4-53.8 53.8-53.7-53.8C28 68.9 25 79.3 25 90.5c0 34.2 27.7 61.9 61.9 61.9s61.9-27.7 61.9-61.9c-.1-11.2-3.1-21.6-8.2-30.6z"
                                      fill="#FFDA44"></path>
                                    <path fill="#A2001D"
                                      d="M71.4 98.2v52.2c4.9 1.3 10.1 1.9 15.5 1.9s10.5-.7 15.5-1.9V98.2h-31z"></path>
                                  </svg>
                                  <div>Cocos Islands</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-580" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="CO">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="CO">
                                    <path fill="#FFDA44" d="M0 0h513v342H0z"></path>
                                    <path fill="#D80027" d="M0 256.5h513V342H0z"></path>
                                    <path fill="#0052B4" d="M0 171h513v85.5H0z"></path>
                                  </svg>
                                  <div>Colombia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-582" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="KM">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="KM">
                                    <path fill="#0052B4" d="M0 0h513v342H0z"></path>
                                    <path fill="#FFDA44" d="M0 0h513v85.5H0z"></path>
                                    <path fill="#FFF" d="M0 85.5h513V171H0z"></path>
                                    <path fill="#D80027" d="M0 171h513v85.5H0z"></path>
                                    <path fill="#6DA544" d="M256.5 171 0 342V0z"></path>
                                    <g fill="#FFF">
                                      <path
                                        d="M68.6 170.7c0-24.9 17.5-45.6 40.8-50.7-3.6-.8-7.3-1.2-11.1-1.2-28.7 0-51.9 23.3-51.9 51.9s23.3 51.9 51.9 51.9c3.8 0 7.5-.4 11.1-1.2-23.3-5.1-40.8-25.9-40.8-50.7z">
                                      </path>
                                      <path
                                        d="m108.9 126.1 2.7 8.5h9l-7.3 5.3 2.8 8.5-7.2-5.2-7.3 5.2 2.8-8.5-7.2-5.3h8.9zm0 22.3 2.7 8.5h9l-7.3 5.3 2.8 8.5-7.2-5.3-7.3 5.3 2.8-8.5-7.2-5.3h8.9z">
                                      </path>
                                      <path
                                        d="m108.9 170.7 2.7 8.5h9l-7.3 5.2 2.8 8.5-7.2-5.2-7.3 5.2 2.8-8.5-7.2-5.2h8.9zm0 22.2 2.7 8.5h9l-7.3 5.3 2.8 8.5-7.2-5.3-7.3 5.3 2.8-8.5-7.2-5.3h8.9z">
                                      </path>
                                    </g>
                                  </svg>
                                  <div>Comoros</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-584" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="CK">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 513 342" class="flag" code="CK">
                                    <path fill="#01237a" d="M0 85.332h513v342H0z"></path>
                                    <path
                                      d="m384 156.705 5.283 16.254h17.089l-13.826 10.045 5.281 16.254L384 189.211l-13.825 10.047 5.28-16.254-13.825-10.045h17.089zm-70.209 29.081 15.228 7.758 12.084-12.083-2.673 16.879 15.227 7.759-16.879 2.673-2.674 16.88-7.76-15.227-16.878 2.673 12.086-12.084zm-29.081 70.209 16.254-5.281.001-17.089 10.044 13.825 16.254-5.282-10.046 13.827 10.046 13.826-16.254-5.28-10.044 13.825v-17.09zm29.081 70.209 7.759-15.229-12.084-12.084 16.881 2.674 7.757-15.227 2.674 16.879 16.879 2.672-15.227 7.759 2.673 16.882-12.084-12.087zM384 355.284l-5.281-16.253h-17.091l13.827-10.045-5.28-16.254L384 322.776l13.827-10.044-5.281 16.254 13.826 10.045h-17.089zm70.209-29.08-15.229-7.758-12.083 12.084 2.673-16.882-15.227-7.756 16.879-2.675 2.675-16.879 7.756 15.227 16.881-2.674-12.086 12.085zm29.081-70.209-16.254 5.281v17.09l-10.045-13.826-16.254 5.281 10.046-13.826-10.046-13.827 16.254 5.282 10.045-13.825v17.089zm-29.081-70.207-7.757 15.226 12.082 12.084-16.881-2.673-7.756 15.227-2.675-16.88-16.879-2.675 15.227-7.757-2.673-16.878 12.084 12.082zM0 186.665v16h46.069L0 233.377v7.539l57.377-38.252H80L0 255.998h112v-69.334H0zm96 69.331H22.628L96 207.083v48.913zm80-117.331 80-53.334H144v69.334h112v-16h-46.069L256 107.951v-7.539l-57.377 38.251H176v.002zm-16-53.332h73.372L160 134.246V85.333zm-16 170.665h112l-80-53.334h22.623L256 240.917v-7.539l-46.069-30.713H256v-16H144v69.333zm16-48.915 73.372 48.913H160v-48.913zM112 85.331H0l80 53.334H57.377L0 100.413v7.539l46.069 30.712H0v16h112V85.331zm-16 48.915L22.628 85.333H96v48.913z"
                                      fill="#FFF"></path>
                                    <g fill="#D80027">
                                      <path d="M144 85.331h-32v69.334H0v32h112v69.333h32v-69.333h112v-32H144z"></path>
                                      <path
                                        d="M80 138.665 0 85.331v15.082l57.377 38.252zm96 0h22.623L256 100.413V85.331zm-118.623 64L0 240.917v15.081l80-53.333zm118.623 0 80 53.333v-15.081l-57.377-38.252z">
                                      </path>
                                    </g>
                                  </svg>
                                  <div>Cook Islands</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-586" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="CR">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="CR">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#D80027" d="M0 114h513v114H0z"></path>
                                    <path fill="#0052B4" d="M0 285h513v57H0zM0 0h513v57H0z"></path>
                                  </svg>
                                  <div>Costa Rica</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-588" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="HR">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="HR">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#D80027" d="M0 0h513v114H0z"></path>
                                    <path fill="#0052B4" d="M0 228h513v114H0z"></path>
                                    <path
                                      d="M309.3 113.2v-44l17.5-14.4 17.7 14.4v44zm-105.6 0v-44l-17.3-14.4-17.9 14.4v44zm35.2 0v-44l17.6-14.4 17.6 14.4v44z"
                                      fill="#338AF3"></path>
                                    <path
                                      d="M309.3 113.2h-35.2v-44l17.5-14.4 17.7 14.4zm-70.4 0h-35.2v-44l17.5-14.4 17.7 14.4z"
                                      fill="#0052B4"></path>
                                    <path stroke="#D80027" fill="#FFF"
                                      d="M168.5 113.2v101.9c0 24.3 14.4 46.2 35.4 59.4 21.3 13.4 42.1 14.7 52.6 14.7s31.4-1.7 52.6-14.8c21-13 35.4-35.1 35.4-59.3V113.2h-176z">
                                    </path>
                                    <path
                                      d="M168.5 113.2h35.2v35.2h-35.2zm70.4 0h35.2v35.2h-35.2zm70.4 0h35.2v35.2h-35.2zm-105.6 35.2h35.2v35.2h-35.2zm70.4 0h35.2v35.2h-35.2zm-105.6 35.2h35.2v35.2h-35.2zm35.2 35.2h35.2V254h-35.2zm35.2-35.2h35.2v35.2h-35.2zm70.4 0h35.2v35.2h-35.2zm-35.2 35.2h35.2V254h-35.2zm35.2 55.5c8.6-5.4 16.2-12.3 22-20.3h-22v20.3zM181.7 254c5.8 8 13.3 14.9 22 20.4V254h-22zm57.2 0v33.7c7.2 1.2 13.3 1.5 17.6 1.5 4.3 0 10.4-.3 17.6-1.6V254h-35.2z"
                                      fill="#D80027"></path>
                                  </svg>
                                  <div>Croatia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-590" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="CU">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="CU">
                                    <path fill="#FF9811" d="M0-40.8v422.9-211.4z"></path>
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path d="M0 0h513v68.3H0zm0 136.5h513v68.3H0zm0 136.6h513v68.3H0z" fill="#0052B4">
                                    </path>
                                    <path fill="#D80027" d="M256 170.7 0 342V0z"></path>
                                    <path fill="#FFF"
                                      d="m86.5 111.4 12.7 39.2h41.3l-33.4 24.2 12.8 39.3-33.4-24.2-33.4 24.2 12.8-39.3-33.4-24.2h41.2z">
                                    </path>
                                  </svg>
                                  <div>Cuba</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-592" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="CW">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="CW">
                                    <path fill="#002b7f" d="M0 0h513v342H0z"></path>
                                    <path fill="#f9e814" d="M0 233.5h513v51H0z"></path>
                                    <path
                                      d="m168.7 86.5 12.9 39.8h41.8l-33.8 24.5 12.9 39.7-33.8-24.5-33.8 24.5 12.9-39.7-33.8-24.5h41.8zm-83.3-54 7.8 23.9h25L97.9 71.1l7.8 23.8-20.3-14.7-20.3 14.7 7.8-23.8-20.3-14.7h25.1z"
                                      fill="#FFF"></path>
                                  </svg>
                                  <div>Curacao</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-594" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="CY">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="CY">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#DB7D00"
                                      d="M141.7 154.7s.2 67.1 74.7 65.3l4.5 13.9h8.9s-7.4-41.1 60.1-41.5c0 0 0-27.6 27.6-27.6H359s-66-51.8 58.9-118l1.8-13.1s-129.9 71-198.9 57.2c0 0 10.7 42.5-10.8 42.5-10.8 0-9.7-8.1-32.3-8.1-18.7 0-17.3 19.7-26.3 19.5-8.9-.2-18.8-12.3-19.6-10.2-.7 2.1 9.9 20.1 9.9 20.1z">
                                    </path>
                                    <g fill="#006651">
                                      <path
                                        d="M237.2 308.1c6.9-5 13-6.6 22.4-8.3s19.4-4.4 24.6-5.8-17.7 6.6-23.5 8.3c-5.8 1.6-23.5 5.8-23.5 5.8zm37.9-14.7c-1.9-11.9 2.8-24.3 13.5-29.3 2.5 8.6-5.2 23.2-13.5 29.3zm18.2-6.2c-5.8-9.8 4-22.6 11.1-28.8 3.3 6-2.5 23.7-11.1 28.8zm16.9-7.6c-6.2-8.4 1.1-23.2 8.8-29 3.1 8.2.1 23.2-8.8 29zm16.9-10.6c-5.6-8-1.7-20.4 6.3-28.4 5.8 6.6.9 21-6.3 28.4zm13.5-10.7c-4.7-7.5 1.1-25.4 8.6-30.4 3.3 6.6.8 25.4-8.6 30.4zm10.8-2.8c-1.4-10.8 17.4-22.7 25.2-22.4-.9 8.9-8.9 18.6-25.2 22.4zm-10.5 12.2c8.8-9.1 26-9.1 32.1-7.2-1.7 5.3-21.9 16.9-32.1 7.2z">
                                      </path>
                                      <path
                                        d="M328.7 276.8c12.4-3.3 20.5-6.1 27.9 1.7-5.2 6.6-25.4 4.7-27.9-1.7zm-17.7 8c11.9-6.4 26.3 3 28.5 8.6-13.3 5.5-28.7-7.2-28.5-8.6zm-16.3 9.2c10.8-4.1 23.2 1.4 28.2 7.5-5.8 2.7-21 5.7-28.2-7.5zm-14.9 4.7c12.4-1.4 24.4 8 27 13.4-15.9 1.5-22-3.2-27-13.4zm-4 9.4c-6.9-5-13-6.6-22.4-8.3-9.4-1.7-19.4-4.4-24.6-5.8-5.3-1.4 17.7 6.6 23.5 8.3 5.8 1.6 23.5 5.8 23.5 5.8zm-37.9-14.7c1.9-11.9-2.8-24.3-13.5-29.3-2.5 8.6 5.2 23.2 13.5 29.3zm-18.2-6.2c5.8-9.8-4-22.6-11.1-28.8-3.3 6 2.5 23.7 11.1 28.8zm-16.9-7.6c6.2-8.4-1.1-23.2-8.8-29-3.1 8.2-.1 23.2 8.8 29zM185.9 269c5.6-8 1.7-20.4-6.3-28.4-5.8 6.6-.9 21 6.3 28.4zm-13.5-10.7c4.7-7.5-1.1-25.4-8.6-30.4-3.3 6.6-.8 25.4 8.6 30.4zm-10.8-2.8c1.4-10.8-17.4-22.7-25.2-22.4.9 8.9 8.9 18.6 25.2 22.4zm10.5 12.2c-8.8-9.1-26-9.1-32.1-7.2 1.7 5.3 21.9 16.9 32.1 7.2z">
                                      </path>
                                      <path
                                        d="M184.3 276.8c-12.4-3.3-20.5-6.1-27.9 1.7 5.2 6.6 25.4 4.7 27.9-1.7zm17.7 8c-11.9-6.4-26.3 3-28.5 8.6 13.3 5.5 28.7-7.2 28.5-8.6zm16.3 9.2c-10.8-4.1-23.2 1.4-28.2 7.5 5.8 2.7 21 5.7 28.2-7.5zm14.9 4.7c-12.4-1.4-24.4 8-27 13.4 15.9 1.5 22-3.2 27-13.4z">
                                      </path>
                                    </g>
                                  </svg>
                                  <div>Cyprus</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-596" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="CZ">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="CZ">
                                    <path fill="#11457e" d="M0 0h513v342H0z"></path>
                                    <path fill="#d7141a" d="M513 171v171H0l215-171z"></path>
                                    <path fill="#FFF" d="M513 0v171H215.185L0 0z"></path>
                                  </svg>
                                  <div>Czech Republic</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-598" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="CD">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="CD">
                                    <path fill="#338AF3" d="M0 0h513v342H0z"></path>
                                    <path fill="#FFDA44" d="M513 66.9V0H411.7L0 274.4V342h100.3z"></path>
                                    <path fill="#D80027" d="M513 0v40.1L60.2 342H0v-40.8L451.8 0z"></path>
                                    <path fill="#FFDA44"
                                      d="m93.6 31.2 16.3 50.4H163l-42.9 31.2 16.4 50.5-42.9-31.2-43 31.2L67 112.8 24.1 81.6h53.1z">
                                    </path>
                                  </svg>
                                  <div>Democratic Republic of the Congo</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-600" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="DK">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="DK">
                                    <path fill="#c60c30" d="M0 0h513v342H0z"></path>
                                    <path fill="#FFF" d="M190 0h-60v140H0v60h130v142h60V200h323v-60H190z"></path>
                                  </svg>
                                  <div>Denmark</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-602" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="DJ">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="DJ">
                                    <path fill="#12ad2b" d="M0 0h513v342H0z"></path>
                                    <path fill="#6ab2e7" d="M513 0v166.7L0 170.8V0z"></path>
                                    <path fill="#FFF" d="M256 170.7 0 342V0z"></path>
                                    <path fill="#d7141a"
                                      d="m89.8 92.5 17 52.4H162l-44.6 32.5 17 52.4-44.6-32.4-44.6 32.4 17-52.4-44.6-32.5h55.2z">
                                    </path>
                                  </svg>
                                  <div>Djibouti</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-604" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="DM">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="DM">
                                    <path fill="#496E2D" d="M0 0h513v342H0z"></path>
                                    <path d="M0 110.7v120h513v-120z"></path>
                                    <path fill="#FFDA44" d="M0 110.7h513v40H0z"></path>
                                    <path fill="#FFF" d="M0 190.7h513v40H0z"></path>
                                    <path d="M196 0h120v342H196z"></path>
                                    <path fill="#FFDA44" d="M196 0h40v342h-40z"></path>
                                    <path fill="#FFF" d="M274.7 0h40v342h-40z"></path>
                                    <circle fill="#D80027" cx="256" cy="170.7" r="123.1"></circle>
                                    <path
                                      d="m256 58.6 4.6 14.2h15l-12.1 8.9 4.6 14.2-12.1-8.8-12.1 8.8 4.6-14.2-12.1-8.9h15zM190.1 80l12.2 8.8 12.1-8.8-4.6 14.3 12.1 8.8h-15l-4.6 14.2-4.7-14.2h-15l12.1-8.8zm-40.7 56h15l4.6-14.2 4.7 14.2h15l-12.2 8.8 4.7 14.3-12.2-8.8-12.1 8.8 4.6-14.3zm0 69.3 12.1-8.8-4.6-14.3L169 191l12.2-8.8-4.7 14.3 12.2 8.8h-15l-4.7 14.3-4.6-14.3zm40.7 56.1 4.6-14.3-12.1-8.8h15l4.7-14.3 4.6 14.3h15l-12.1 8.8 4.6 14.3-12.1-8.9zm65.9 21.4-4.6-14.3h-15l12.1-8.8-4.6-14.3 12.1 8.8 12.1-8.8-4.6 14.3 12.1 8.8h-15zm65.9-21.4-12.2-8.9-12.1 8.9 4.6-14.3-12.1-8.8h15l4.6-14.3 4.7 14.3h15l-12.1 8.8zm40.7-56.1h-15l-4.6 14.3-4.7-14.3h-15l12.2-8.8-4.7-14.3L343 191l12.1-8.8-4.6 14.3zm0-69.3-12.1 8.8 4.6 14.3-12.1-8.8-12.2 8.8 4.7-14.3-12.2-8.8h15l4.7-14.2 4.6 14.2zm-40.7-56-4.6 14.3 12.1 8.8h-15l-4.7 14.2-4.6-14.2h-15l12.1-8.8-4.6-14.3 12.1 8.8zM279.3 168.7c-11-21.1-14.5-25.1-14.5-25.1s.4-9.7.4-15.6c0-8.8-7.4-15.8-16.5-15.8-8.6 0-15.7 2.9-16.5 11-4.2.9-8.6 4.1-8.6 10.7 0 4.8 1 7.3 5.2 9.3 2.1-4.6 4.3-4.8 9.3-6.4.8.6 1.7 3 2.6 3.4l.3 1s-13.3 6.6-13.3 30.9c0 29.5 22 45.4 22 45.4l-1.8.3-1.9 7.1h22v-7.2l11 17.5c.3-.3 10.2-47.6.3-66.5z"
                                      fill="#496E2D"></path>
                                  </svg>
                                  <div>Dominica</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-606" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="DO">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="DO">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#D80027" d="M0 215.2h211.5v126.1H0z"></path>
                                    <path fill="#0052B4" d="M0 0h211.5v126.2H0z"></path>
                                    <path fill="#D80027" d="M300.5 0H512v126.2H300.5z"></path>
                                    <path fill="#0052B4" d="M300.5 215.2H512v126.1H300.5z"></path>
                                    <g stroke="#FFF" stroke-width="5" stroke-miterlimit="10">
                                      <path fill="#0052B4" d="M256 130h-49.9v49.4s19.5 6 49.9 6V130z"></path>
                                      <path fill="#D80027"
                                        d="M206.1 179.4v6c0 27.5 22.3 49.9 49.9 49.9v-49.9c-30.4 0-49.9-6-49.9-6z">
                                      </path>
                                      <path fill="#0052B4"
                                        d="M256 235.3c27.5 0 49.9-22.3 49.9-49.9v-6s-19.5 6-49.9 6v49.9z"></path>
                                      <path fill="#D80027" d="M256 130v55.4c30.4 0 49.9-6 49.9-6V130H256z"></path>
                                    </g>
                                  </svg>
                                  <div>Dominican Republic</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-608" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="TL">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="TL">
                                    <path fill="#D80027" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#FFDA44" d="M256 256 0 90.691v44.242L155.826 256 0 377.067v44.242z">
                                    </path>
                                    <path d="M0 90.691v330.618L189.217 256z"></path>
                                    <path fill="#FFF"
                                      d="m44.184 213.36 24.912 23.577 30.121-16.41-14.723 30.98 24.911 23.575-34.012-4.43L60.67 301.63l-6.296-33.716-34.012-4.43 30.119-16.408z">
                                    </path>
                                  </svg>
                                  <div>East Timor</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-610" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="EC">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="EC">
                                    <path fill="#FFDA44" d="M0 0h513v342H0z"></path>
                                    <path fill="#0052B4" d="M0 170.7h513V256H0z"></path>
                                    <path fill="#D80027" d="M0 256h513v85.3H0z"></path>
                                    <circle fill="#FFDA44" cx="256" cy="171" r="60"></circle>
                                    <path fill="#4C1F00"
                                      d="M369.2 79.9s-27.2-13.8-33.9-16c-6.7-2.2-49.1-13.2-49.1-7 0 10.3-13.5 12-15.5 12s-2-5.3-14.8-5.3-13.7 4.8-15.8 4.8c-2.2 0-14.5-1-14.5-11.5 0-5.2-42.9 4-49.1 7-6.1 3.1-33.9 16-33.9 16s45.8 2.7 53.9 6.2 43.8 16.5 43.8 16.5l-2.8 13.3h37.8l-3.8-13.3s35.1-12.7 43.8-16.5 53.9-6.2 53.9-6.2z">
                                    </path>
                                    <path fill="#57BA17"
                                      d="M217.7 171.7c0 21.1 17.2 38.3 38.3 38.3 21.1 0 38.3-17.2 38.3-38.3v-11.5h-76.5v11.5z">
                                    </path>
                                    <path fill="#338AF3"
                                      d="M256 110.5c-21.1 0-38.3 17.2-38.3 38.3v11.5h76.5v-11.5c.1-21.1-17.1-38.3-38.2-38.3z">
                                    </path>
                                  </svg>
                                  <div>Ecuador</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-612" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="EG">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="EG">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#D80027" d="M0 0h513v114H0z"></path>
                                    <path d="M0 228h513v114H0z"></path>
                                    <path fill="#C09300"
                                      d="M220.3 204.4s0-58.4 4.5-64.7c3.1-4.3 16.8 5.2 22.7 4.5 0 0 4.2-7.5 4.5-12 .3-4.6-1.1-7.6-4.9-6.2 0 0-1.2-2.1.5-3.3 1.6-1.2 5.6.1 5.6.1s-.5-1 1.6-.9c2.9.2 7.2 1.4 7.4 5.6.2 3.1.3 7.7.4 8.7.7 6.8 2.7 8.7 2.7 8.7s18.4-9.2 22-5.2c3.3 3.8 4.5 64.7 4.5 64.7l-18.1-16.8 12.1 29.5s-14.4 2.4-28.9 2.4c-14.5 0-31.1-4.2-31.1-4.2l13.8-28.2-19.3 17.3z">
                                    </path>
                                  </svg>
                                  <div>Egypt</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-614" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="SV">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="SV">
                                    <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                    <path d="M0 85.337h512v113.775H0zm0 227.551h512v113.775H0z" fill="#0052B4"></path>
                                    <path fill="#FFDA44" d="M228.582 261.936 256 214.447l27.418 47.489z"></path>
                                    <path fill="#6DA544"
                                      d="M291.616 277.616 256 295.425l-35.616-17.809v-23.744h71.232z">
                                    </path>
                                    <path fill="#FFDA44"
                                      d="m289.579 216.485-12.592 12.592c5.37 5.372 8.693 12.791 8.693 20.988 0 16.392-13.289 29.68-29.68 29.68-16.392 0-29.68-13.289-29.68-29.68 0-8.195 3.322-15.616 8.693-20.988l-12.592-12.592c-8.594 8.594-13.91 20.466-13.91 33.579 0 26.228 21.261 47.489 47.489 47.489s47.489-21.261 47.489-47.489c0-13.114-5.316-24.987-13.91-33.579z">
                                    </path>
                                  </svg>
                                  <div>El Salvador</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-616" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="GQ">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="GQ">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#6DA544" d="M0 0h513v113.8H0z"></path>
                                    <path fill="#D80027" d="M0 227.6h513V342H0z"></path>
                                    <path fill="#0070C8" d="M126 171 0 342V0z"></path>
                                    <path fill="none" stroke="#000" stroke-miterlimit="10"
                                      d="M233.8 139.4v40.4c0 35.6 35.6 35.6 35.6 35.6s35.6 0 35.6-35.6v-40.4h-71.2z">
                                    </path>
                                    <path fill="#786145" d="M264.5 179.8h9.8l4 25.8h-17.8z"></path>
                                    <path fill="#6DA544"
                                      d="M287.2 162c0-9.8-8-14.8-17.8-14.8s-17.8 5-17.8 14.8c-4.9 0-8.9 4-8.9 8.9s4 8.9 8.9 8.9h35.6c4.9 0 8.9-4 8.9-8.9s-4-8.9-8.9-8.9z">
                                    </path>
                                    <path
                                      d="m230.7 120 1.9 3.3h3.8l-1.9 3.3 1.9 3.2h-3.8l-1.9 3.3-1.9-3.3H225l1.9-3.2-1.9-3.3h3.8zm15.3 0 1.9 3.3h3.7l-1.9 3.3 1.9 3.2h-3.7l-1.9 3.3-1.9-3.3h-3.8l1.9-3.2-1.9-3.3h3.8zm15.3 0 1.9 3.3h3.7l-1.9 3.3 1.9 3.2h-3.7l-1.9 3.3-1.9-3.3h-3.8l1.9-3.2-1.9-3.3h3.8zm15.8 0 1.9 3.3h3.8l-1.9 3.3 1.9 3.2H279l-1.9 3.3-1.9-3.3h-3.7l1.8-3.2-1.8-3.3h3.7zm16 0 1.9 3.3h3.8l-1.9 3.3 1.9 3.2H295l-1.9 3.3-1.9-3.3h-3.7l1.8-3.2-1.8-3.3h3.7zm15 0 1.9 3.3h3.7l-1.9 3.3 1.9 3.2H310l-1.9 3.3-1.9-3.3h-3.8l1.9-3.2-1.9-3.3h3.8z"
                                      fill="#FFDA00" stroke="#000" stroke-miterlimit="10"></path>
                                  </svg>
                                  <div>Equatorial Guinea</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-618" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="ER">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="ER">
                                    <path fill="#338AF3" d="M0 0h513v342H0z"></path>
                                    <path fill="#56AF35" d="M0 0h513v171H0z"></path>
                                    <path fill="#D80027" d="m0 342 513-171L0 0v342z"></path>
                                    <g fill="#ffc945">
                                      <path
                                        d="M134.7 231.5c33.6 0 60.8-27.2 60.8-60.8s-27.2-60.8-60.8-60.8-60.8 27.2-60.8 60.8 27.2 60.8 60.8 60.8zm0 24.3c-47 0-85.2-38.1-85.2-85.2s38.1-85.2 85.2-85.2 85.2 38.1 85.2 85.2-38.2 85.2-85.2 85.2z">
                                      </path>
                                      <circle cx="119.5" cy="148.3" r="17.5"></circle>
                                      <circle cx="148.9" cy="158.5" r="17.5"></circle>
                                      <circle cx="134.7" cy="135.2" r="17.5"></circle>
                                      <circle cx="119.5" cy="172.7" r="17.5"></circle>
                                      <circle cx="149.9" cy="182.8" r="17.5"></circle>
                                      <circle cx="122.5" cy="198" r="17.5"></circle>
                                      <circle cx="145.9" cy="205.2" r="17.5"></circle>
                                    </g>
                                  </svg>
                                  <div>Eritrea</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-620" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="EE">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="EE">
                                    <path fill="#111" d="M0 0h513v342H0z"></path>
                                    <path fill="#368FD8" d="M0 0h513v114H0z"></path>
                                    <path fill="#FFF" d="M0 228h513v114H0z"></path>
                                  </svg>
                                  <div>Estonia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-622" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="ET">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 22.5 15" class="flag" code="ET">
                                    <path fill="#20AA46" d="M0 0h22.5v5H0V0z"></path>
                                    <path fill="#E92F3B" d="M0 10h22.5v5H0v-5z"></path>
                                    <path fill="#FADF50" d="M0 5h22.5v5H0V5z"></path>
                                    <circle fill="#205CCA" cx="11.3" cy="7.5" r="5.2"></circle>
                                    <g stroke="#FFDB3D" fill="none">
                                      <path
                                        d="m11.3 8.8-2.1 1.5.8-2.4-2-1.5h2.5l.8-2.3.8 2.3h2.6l-2.1 1.5.8 2.4-2.1-1.5zm-1-2.4h1.9M9.9 7.8l1.3 1m.8-2.6.7 1.8M10 7.9l.6-1.8M11 9l1.6-1.1"
                                        stroke-width="0.5"></path>
                                      <path d="m8.7 3.9 1.1 1.6m4-1.7-1 1.6m-1.5 4.7V12M8.9 8.3 7.1 9m8.4 0-1.8-.7"
                                        stroke-width="0.25"></path>
                                    </g>
                                  </svg>
                                  <div>Ethiopia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-624" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="FK">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="FK">
                                    <path fill="#0052B4" d="M0 0h513v342H0z"></path>
                                    <path fill="#FFF"
                                      d="M256 0v30.6l-45.2 25.1H256V115h-59.1l59.1 32.8v22.9h-26.7l-73.5-40.9v40.9h-55.6v-48.6l-87.5 48.6H0v-30.6L45.2 115H0V55.7h59.1L0 22.8V0h26.7l73.5 40.8V0h55.6v48.6L243.3 0z">
                                    </path>
                                    <path fill="#D80027" d="M144 0h-32v69.3H0v32h112v69.4h32v-69.4h112v-32H144z"></path>
                                    <path fill="#0052B4" d="M155.8 115 256 170.7v-15.8L184.2 115z"></path>
                                    <path fill="#FFF" d="M155.8 115 256 170.7v-15.8L184.2 115z"></path>
                                    <path d="M155.8 115 256 170.7v-15.8L184.2 115zm-84 0L0 154.9v15.8L100.2 115z"
                                      fill="#D80027"></path>
                                    <path fill="#0052B4" d="M100.2 55.6 0 0v15.7l71.8 39.9z"></path>
                                    <path fill="#FFF" d="M100.2 55.6 0 0v15.7l71.8 39.9z"></path>
                                    <path d="M100.2 55.6 0 0v15.7l71.8 39.9zm84 0L256 15.7V0L155.8 55.6z"
                                      fill="#D80027">
                                    </path>
                                    <path fill="#1F8BDE"
                                      d="M312.2 194.2v-90c0-8.5 6.5-15.3 15-15.3h120.5c8.3 0 15 6.8 15 15.3v90c0 75.2-75.2 105.3-75.2 105.3s-75.3-30.1-75.3-105.3z">
                                    </path>
                                    <path fill="#FFF"
                                      d="M312.2 194.2v-90c0-8.5 6.5-15.3 15-15.3h120.5c8.3 0 15 6.8 15 15.3v90c0 75.2-75.2 105.3-75.2 105.3s-75.3-30.1-75.3-105.3zm79.6 86.3c7.9-4.5 15.9-10 23.2-16.7 20.5-18.5 32.6-41.4 32.6-69.7v-90c0-.3-120.4-.3-120.4-.3v90.3c0 28.3 12.1 51.2 32.6 69.7 8.3 7.5 17.6 13.9 27.6 19 1.4-.6 2.8-1.4 4.4-2.3z">
                                    </path>
                                    <path fill="#187536"
                                      d="M347.1 193.4c-2.6-7.9 1.7-14.3 10.1-14.3h60.5c8.2 0 12.8 6.3 10.1 14.3l-5.5 16.5c-2.6 7.9-8.9 9.2-15.8 4 0 0 2.6-4.8-19.1-4.8-21.7 0-19.1 4.8-19.1 4.8-6.1 5.7-13.1 4-15.8-4 .1.1-5.4-16.5-5.4-16.5z">
                                    </path>
                                    <path fill="#FFF"
                                      d="M357.4 179.1c8.1 1.6 17.8-15 30.1-15 13.1 0 21.8 17.1 30.1 15 7.4-1.8 15-22.2 15-30.1 0-16.6-20.2-30.1-45.1-30.1-24.9 0-45.1 13.5-45.1 30.1-.1 8.5 6.6 28.5 15 30.1zm-1.4 91.6c6.2.4 12.5-1.8 17.2-6.5l9-9c2.9-2.9 7.5-2.9 10.4 0l9 9c4.7 4.7 11 6.9 17.1 6.5 5.3-.3 32.5-33.5 25.7-32.6-4.6.6-9.1 2.8-12.7 6.3l-.1.1-9 9c-2.9 2.9-7.5 2.9-10.4 0l-9-9c-8.7-8.8-22.9-8.8-31.7-.1l-.1.1-9 9c-2.9 2.9-7.5 2.9-10.4 0l-9-9c-3.5-3.5-7.8-5.6-12.3-6.3-6.7-1.1 20.1 32.2 25.3 32.5zM322.1 210c2.9-2.9 7.5-2.9 10.4 0l9 9c8.8 8.7 22.9 8.7 31.7 0l9-9c2.9-2.9 7.5-2.9 10.4 0l9 9c8.8 8.7 22.9 8.7 31.7 0l9-9c2.9-2.9 7.5-2.9 10.4 0 0 0 5.5-14.8 2.5-15.9-7.9-2.9-17.2-1.2-23.5 5.2l-.1.1-9 9c-2.9 2.9-7.5 2.9-10.4 0l-9-9c-8.7-8.8-22.9-8.8-31.7-.1l-.1.1-9 9c-2.9 2.9-7.5 2.9-10.4 0l-9-9c-6.2-6.2-15.1-8-22.8-5.5-3.1 1.1 1.9 16.1 1.9 16.1z">
                                    </path>
                                  </svg>
                                  <div>Falkland Islands</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-626" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="FO">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="FO">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#0F61A5"
                                      d="M513 214.5H206.2V342h-87.8V214.5H0v-87.7h118.4V0h87.8v126.8H513V192z"></path>
                                    <path fill="#E50E3D" d="M513 149.3V192H183.7v150H141V192H0v-42.7h141V0h42.7v149.3z">
                                    </path>
                                  </svg>
                                  <div>Faroe Islands</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-628" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="FJ">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="FJ">
                                    <path fill="#2E52B2" d="M0 0h513v342H0z"></path>
                                    <path fill="#FFF"
                                      d="M256 0v22.6l-46.1 30.7H256v64h-46.1L256 148v22.7h-22.6l-73.4-49v49H96v-49l-73.4 49H0V148l46.1-30.7H0v-64h46.1L0 22.6V0h22.6L96 48.9V0h64v48.9L233.4 0z">
                                    </path>
                                    <g fill="#D80027">
                                      <path d="M144 0h-32v69.3H0v32h112v69.4h32v-69.4h112v-32H144z"></path>
                                      <path d="M0 0v15.1l57.4 38.2H80zm256 0v15.1l-57.4 38.2H176z"></path>
                                      <path
                                        d="M0 0v15.1l57.4 38.2H80zm256 0v15.1l-57.4 38.2H176zM0 170.7v-15.1l57.4-38.3H80zm256 0v-15.1l-57.4-38.3H176z">
                                      </path>
                                    </g>
                                    <path fill="#F3F3F3"
                                      d="M307.1 127.1v92c0 61.6 80.5 80.5 80.5 80.5s80.4-19 80.4-80.6v-92l-80.5-23-80.4 23.1z">
                                    </path>
                                    <path fill="#D80027"
                                      d="M468 132.8V98.3H307.1v34.5h69v69h-69v23h69V296c6.9 2.5 11.5 3.5 11.5 3.5s4.6-1.1 11.5-3.5v-71.2h69v-23h-69v-69H468z">
                                    </path>
                                  </svg>
                                  <div>Fiji</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-630" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="FI">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="FI">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#2E52B2" d="M513 129.3V212H203.7v130H121V212H0v-82.7h121V0h82.7v129.3z">
                                    </path>
                                  </svg>
                                  <div>Finland</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-632" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="FR">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="FR">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#0052B4" d="M0 0h171v342H0z"></path>
                                    <path fill="#D80027" d="M342 0h171v342H342z"></path>
                                  </svg>
                                  <div>France</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-634" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="PF">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="PF">
                                    <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                    <path d="M0 85.337h512v113.775H0zm0 227.551h512v113.775H0z" fill="#D80027"></path>
                                    <path fill="#FFDA44"
                                      d="M293.991 256c0 20.982-17.01 33.243-37.992 33.243S218.008 276.982 218.008 256s17.01-37.992 37.992-37.992 37.991 17.01 37.991 37.992z">
                                    </path>
                                    <path fill="#0052B4"
                                      d="M293.991 256c0 20.982-17.01 37.992-37.992 37.992s-37.992-17.01-37.992-37.992">
                                    </path>
                                    <path
                                      d="M232.259 246.506h9.498v19h-9.498zm37.988 0h9.498v19h-9.498zm-19-14.247h9.498v33.243h-9.498z"
                                      fill="#D80027"></path>
                                  </svg>
                                  <div>French Polynesia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-636" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="GA">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="GA">
                                    <path fill="#FFDA44" d="M0 0h513v342H0z"></path>
                                    <path fill="#6DA544" d="M0 0h513v114H0z"></path>
                                    <path fill="#0052B4" d="M0 228h513v114H0z"></path>
                                  </svg>
                                  <div>Gabon</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-638" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="GM">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="GM">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#cf0d19" d="M0 0h513v100H0z"></path>
                                    <path fill="#0052B4" d="M0 121h513v100H0z"></path>
                                    <path fill="#1a7e25" d="M0 242h513v100H0z"></path>
                                  </svg>
                                  <div>Gambia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-640" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="GE">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 22.5 15" class="flag" code="GE">
                                    <path fill="#FFF" d="M.8 0h21v15H.8V0z"></path>
                                    <path fill="#eb000e" d="M9.8 6H0v3h9.8v6h3V9h9.8V6h-9.8V0h-3v6z"></path>
                                    <path fill="#eb000e"
                                      d="m17.3 2.7-.2-1.2h1l-.2 1.2 1.2-.2v1l-1.2-.2.2 1.2h-1l.2-1.2-1.2.2v-1l1.2.2zm-12.7 0-.2-1.2h1l-.2 1.2 1.2-.2v1l-1.2-.2.2 1.2h-1l.2-1.2-1.2.2v-1l1.2.2zm0 9-.2-1.2h1l-.2 1.2 1.2-.2v1l-1.2-.2.2 1.2h-1l.2-1.2-1.2.2v-1l1.2.2zm12.7 0-.2-1.2h1l-.2 1.2 1.2-.2v1l-1.2-.2.2 1.2h-1l.2-1.2-1.2.2v-1l1.2.2z">
                                    </path>
                                  </svg>
                                  <div>Georgia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-642" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="DE">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="DE">
                                    <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                    <path d="M0 0h513v114H0z"></path>
                                    <path fill="#FFDA44" d="M0 228h513v114H0z"></path>
                                  </svg>
                                  <div>Germany</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-644" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="GH">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="GH">
                                    <path fill="#FFDA44" d="M0 0h513v342H0z"></path>
                                    <path fill="#D80027" d="M0 0h513v114H0z"></path>
                                    <path fill="#496E2D" d="M0 228h513v114H0z"></path>
                                    <path
                                      d="m255.9 113.8 14.1 43.4 40.4 3.2-37 26.9 19.5 40.3-37-26.9-37 26.9 14.1-43.5-36.9-26.9h45.7z">
                                    </path>
                                  </svg>
                                  <div>Ghana</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-646" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="GI">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="GI">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#D80027" d="M0 230h513v112H0z"></path>
                                    <path fill="#D80027" stroke="#000" stroke-miterlimit="10"
                                      d="M363.1 131.8V99.1H374V77.3h-21.9v10.9h-21.8V77.3h-21.8v21.8h10.9v32.7h-21.8V55.5h10.9V33.7h-21.8v10.9h-10.9V33.7H254v10.9h-10.9V33.7h-21.8v21.8h10.9v76.3h-21.8V99.1h10.9V77.3h-21.8v10.9h-21.8V77.3h-21.8v21.8h10.9v32.7H145V219h239.9v-87.2z">
                                    </path>
                                    <path fill="#FFDA44" stroke="#000" stroke-miterlimit="10"
                                      d="m264.9 235.5-24.2 18.2 19.1 14.3v31.3h-23.2v9h23v7.9h-23v9.3H270V268l19.1-14.3-24.2-18.2zm0 25.3-10.1-7.1 10.1-7.1 10.1 7.1-10.1 7.1z">
                                    </path>
                                    <path
                                      d="M239.6 209.7v-27.9s.1-22.3 25-22.3c24.8 0 25.7 22 25.7 22v28.2h-50.7zm-69.1 0v-24.3s.1-18.7 19.6-18.7 20.2 18.4 20.2 18.4v24.5h-39.8z">
                                    </path>
                                    <path
                                      d="M169.1 209.7v-24.3s.1-18.7 19.6-18.7 20.2 18.4 20.2 18.4v24.5h-39.8zm151.8 0v-24.3s.1-18.7 19.6-18.7 20.2 18.4 20.2 18.4v24.5h-39.8zm8.4-77.7v-15.7s.1-12.1 11.3-12.1c11.3 0 11.7 11.9 11.7 11.9V132h-23zm-78.8 0v-23.7s.1-18.3 14.3-18.3c14.2 0 14.7 18 14.7 18v24h-29zm-73 0v-15.7s.1-12.1 11.3-12.1 11.7 11.9 11.7 11.9V132h-23z">
                                    </path>
                                  </svg>
                                  <div>Gibraltar</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-648" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="GR">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="GR">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <g fill="#0d5eaf">
                                      <path
                                        d="M0 0h513v38H0zm0 76h513v38H0zm0 76h513v38H0zm0 76h513v38H0zm0 76h513v38H0z">
                                      </path>
                                      <path d="M0 0h190v190H0z"></path>
                                    </g>
                                    <g fill="#FFF">
                                      <path d="M0 76h190v38H0z"></path>
                                      <path d="M76 0h38v190H76z"></path>
                                    </g>
                                  </svg>
                                  <div>Greece</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-650" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="GL">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="GL">
                                    <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                    <path fill="#FFF" d="M513 0v171H0V0z"></path>
                                    <circle fill="#FFF" cx="185.8" cy="171.2" r="117.8"></circle>
                                    <path fill="#D80027"
                                      d="M68 171c0-65.1 52.8-117.8 117.8-117.8 65.1 0 117.8 52.8 117.8 117.8"></path>
                                  </svg>
                                  <div>Greenland</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-652" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="GD">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="GD">
                                    <path fill="#c60a0a" d="M0 0h513v342H0z"></path>
                                    <path fill="#3E8446" d="m256.5 170.7-212 126.1V44.5z"></path>
                                    <path d="m256.5 170.7 211 126.1h-423zm211-126.2-211 126.2-212-126.2z"
                                      fill="#FFDA44">
                                    </path>
                                    <path fill="#3E8446" d="M467.5 44.5v252.3l-211-126.1z"></path>
                                    <path
                                      d="m256.5 10.4 2.8 10.2H270l-8.6 6.3 3.3 10.2-8.2-6.3-9.2 6.3 3.3-10.2-8.6-6.3h10.7zm-86.4 0 3.3 10.2h10.7l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zm171.8 0 3.3 10.2H356l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zm-85.4 293.8 2.8 10.2H270l-8.6 6.3 3.3 10.2-8.2-6.3-9.2 6.3 3.3-10.2-8.6-6.3h10.7zm-86.4 0 3.3 10.2h10.7l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zm171.8 0 3.3 10.2H356l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7z"
                                      fill="#FFDA44"></path>
                                    <circle fill="#c60a0a" cx="244.5" cy="170.7" r="76.2"></circle>
                                    <path fill="#FFDA44"
                                      d="m244.5 110.1 13.6 41.8h44l-35.6 25.8 13.6 41.8-35.6-25.8-35.5 25.8 13.6-41.8-35.6-25.8h44zm-136.8 57.7c4.4 6.9 2.3 16.1-4.6 20.5s-16.1 2.3-20.5-4.6c-7.9-12.5-3.3-33-3.3-33s20.4 4.6 28.4 17.1z">
                                    </path>
                                    <circle fill="#A2001D" cx="99.1" cy="182.1" r="7.4"></circle>
                                  </svg>
                                  <div>Grenada</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-654" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="GU">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="GU">
                                    <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                    <path fill="#0052B4" d="M11.1 11.1h489.7v319.1H11.1z"></path>
                                    <path fill="#7DBEF1"
                                      d="M256 285.3s76.4-51.3 76.4-114.6S256 56 256 56s-76.4 51.3-76.4 114.6S256 285.3 256 285.3z">
                                    </path>
                                    <path fill="#1C8AE6" d="M179.8 180.7h152.6l-29.3 64.9h-95.2z"></path>
                                    <path fill="#FFF042"
                                      d="M192.3 205.9s40.5 38.2 51 38.2c12.4 0 12.6-18.4 25.5-25.5 20.2-11.1 51-12.7 51-12.7L297 248.7l-41 36.6-46.8-39.7-16.9-39.7z">
                                    </path>
                                    <path fill="#259C7B"
                                      d="m256 157.5-22.5 15.6 7.9-26.2-21.8-16.5 27.4-.5 9-25.9 9 25.9 27.4.5-21.8 16.6 7.9 26.2-22.5-15.7z">
                                    </path>
                                    <path fill="#8E5715"
                                      d="M249.7 144.6c-.9 9.2-1.5 18.4-1.7 27.6-.3 11.9.3 20.7 2 26 2.2 6.6 7.2 12.9 14.2 18.9 5.3 4.6 10.6 8.1 14.2 10.1 3.1 1.7 7 .6 8.7-2.4 1.7-3.1.6-7-2.4-8.7-4.3-2.5-8.4-5.4-12.2-8.7-5.4-4.6-9.1-9.2-10.4-13.3-1.1-3.4-1.6-11.3-1.4-21.7.2-8.9.8-17.8 1.7-26.6.4-3.5-2.2-6.6-5.7-7-3.6-.3-6.7 2.3-7 5.8z">
                                    </path>
                                    <path fill="#FFF" d="m217.8 170.7 25.5 38.2h-25.5v-38.2z"></path>
                                    <path fill="none" stroke="#D80027" stroke-width="12" stroke-miterlimit="10"
                                      d="M256 285.3s76.4-51.3 76.4-114.6S256 56 256 56s-76.4 51.3-76.4 114.6S256 285.3 256 285.3z">
                                    </path>
                                  </svg>
                                  <div>Guam</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-656" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="GT">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="GT">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path d="M0 0h171v342H0zm342 0h171v342H342z" fill="#338AF3"></path>
                                    <circle fill="#DCC26D" cx="256" cy="155.8" r="25.5"></circle>
                                    <path fill="#628A40"
                                      d="M194.2 155.9c0 22.1 11.8 42.5 30.8 53.5 5.9 3.4 13.5 1.4 16.9-4.5 3.4-5.9 1.4-13.5-4.5-16.9-11.5-6.6-18.5-18.9-18.5-32.1 0-6.8-5.5-12.4-12.4-12.4s-12.3 5.5-12.3 12.4zm95.1 52.1c17.8-11.4 28.6-31 28.5-52.1 0-6.8-5.5-12.4-12.4-12.4-6.8 0-12.4 5.5-12.4 12.4 0 12.7-6.5 24.5-17.1 31.3-5.8 3.6-7.7 11.2-4.1 17 3.6 5.8 11.2 7.7 17 4.1.2-.1.3-.2.5-.3z">
                                    </path>
                                  </svg>
                                  <div>Guatemala</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-658" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="GG">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="GG">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#D80027" d="M308 0H204v118.7H0v104h204V342h104V222.7h205v-104H308z">
                                    </path>
                                    <path fill="#FFDA44"
                                      d="m368.6 188 26 17.3V136l-26 17.3h-95.3V58.1l17.3-26h-69.2l17.3 26v95.2h-95.3l-26-17.3v69.3l26-17.3h95.3v95.2l-17.3 26h69.2l-17.3-26V188z">
                                    </path>
                                  </svg>
                                  <div>Guernsey</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-660" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="GN">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="GN">
                                    <path fill="#FFDA44" d="M0 0h512v342H0z"></path>
                                    <path fill="#6DA544" d="M342 0h171v342H342z"></path>
                                    <path fill="#D80027" d="M0 0h171v342H0z"></path>
                                  </svg>
                                  <div>Guinea</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-662" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="GW">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="GW">
                                    <path fill="#6DA544" d="M0 0h512v342H0z"></path>
                                    <path fill="#FFDA44" d="M0 0h512v171H0z"></path>
                                    <path fill="#D80027" d="M0 0h182v342H0z"></path>
                                    <path
                                      d="m98.3 109.8 15.1 46.5h48.9L122.8 185l15.1 46.5-39.6-28.7-39.5 28.7L73.9 185l-39.6-28.7h48.9z">
                                    </path>
                                  </svg>
                                  <div>Guinea-Bissau</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-664" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="GY">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 900 600" class="flag" code="GY">
                                    <path fill="#009E49" d="M0 0h900v600H0V0z"></path>
                                    <path fill="#FFF" d="m0 0 947 300L0 600V0z"></path>
                                    <path fill="#FFD00D" d="M0 26.1 870 300 0 573.9V26.1z"></path>
                                    <path fill="#2D2D2D" d="m0 0 450 300L0 600V0z"></path>
                                    <path fill="#D3132F" d="m0 35 397.5 265L0 565V35z"></path>
                                  </svg>
                                  <div>Guyana</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-666" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="HT">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="HT">
                                    <path fill="#A2001D" d="M0 0h513v172H0z"></path>
                                    <path fill="#0052B4" d="M0 172h513v172H0z"></path>
                                    <path fill="#FFF" d="m381.4 251.5-110.7-13.8-110.8 13.8V85.4h221.5z"></path>
                                    <circle fill="#0052B4" cx="270.7" cy="182.3" r="55.4"></circle>
                                    <circle fill="#A2001D" cx="270.7" cy="182.3" r="27.7"></circle>
                                    <path fill="#6DA544" d="M229.1 113.1h83.1l-41.5 41.5z"></path>
                                    <path fill="#FFDA44" d="M256.8 140.8h27.7v83h-27.7z"></path>
                                    <path fill="#6DA544" d="M314.9 215.5h-88.5l-66.5 36h221.5z"></path>
                                  </svg>
                                  <div>Haiti</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-668" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="HN">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="HN">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path
                                      d="M0 0h513v114H0zm0 228h513v114H0zm203.5-110.1 6.7 16.6 17.6 1-14 10.9 4.7 17.7-15-9.9-15 9.9 4.7-17.7-14-10.9 17.6-1zm105 0 6.7 16.6 17.6 1-14 10.9 4.7 17.7-15-9.9-15 9.9 4.7-17.7-14-10.9 17.6-1zM256 147.6l6.7 16.6 17.6 1-14 10.9 4.7 17.7-15-9.9-15 9.9 4.7-17.7-14-10.9 17.6-1zm-52.5 29.7 6.7 16.6 17.6 1-14 10.9 4.7 17.6-15-9.9-15 9.9 4.7-17.6-14-10.9 17.6-1zm105 0 6.7 16.6 17.6 1-14 10.9 4.7 17.6-15-9.9-15 9.9 4.7-17.6-14-10.9 17.6-1z"
                                      fill="#338AF3"></path>
                                  </svg>
                                  <div>Honduras</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-670" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="HK">
                                <div class="CountrySelector_item__vm917"><svg viewBox="0 0.5 21 14"
                                    xmlns="http://www.w3.org/2000/svg" class="flag" code="HK">
                                    <g fill="none" fill-rule="evenodd">
                                      <path fill="#FFF" d="M0 0h21v15H0z"></path>
                                      <path fill="#ee1c25" d="M0 0h21v15H0z"></path>
                                      <path
                                        d="M12 7.19c-.798-.5-1 .409-1 0 0-.828.895-1.5 2-1.5s2 .672 2 1.5c-.949 0-1.044.5-1.5.5-.56 0-.702 0-1.5-.5zM13.25 7a.25.25 0 1 0 0-.5.25.25 0 0 0 0 .5zm-1.81 1.962c.228-.913-.698-.824-.31-.95.788-.257 1.703.387 2.045 1.438.341 1.05-.021 2.11-.809 2.366-.293-.903-.798-.838-.939-1.272-.173-.533-.217-.668.012-1.582zm.566 1.13a.25.25 0 1 0 .476-.154.25.25 0 0 0-.476.154zM9.58 8.977c.94-.065.57-.919.81-.588.486.67.157 1.74-.737 2.389-.894.65-2.013.632-2.5-.038.768-.558.55-1.018.92-1.286.453-.33.568-.413 1.507-.477zm-.899.888a.25.25 0 1 0 .294.405.25.25 0 0 0-.294-.405zm.312-2.652c.351.874 1.049.258.809.588-.487.67-1.606.687-2.5.038-.894-.65-1.223-1.719-.736-2.39.767.559 1.138.21 1.507.478.453.33.568.413.92 1.286zm-1.124-.58a.25.25 0 1 0-.293.404.25.25 0 0 0 .293-.404zm2.619-.524c-.722.605.08 1.078-.309.951-.788-.256-1.15-1.315-.809-2.365.342-1.05 1.257-1.695 2.045-1.439-.293.903.153 1.147.012 1.581-.173.533-.217.668-.939 1.272zm.205-1.247a.25.25 0 1 0-.475-.155.25.25 0 0 0 .475.155z"
                                        fill="#FFF"></path>
                                    </g>
                                  </svg>
                                  <div>Hong Kong</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-672" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="HU">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="HU">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#D80027" d="M0 0h513v114H0z"></path>
                                    <path fill="#6DA544" d="M0 228h513v114H0z"></path>
                                  </svg>
                                  <div>Hungary</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-674" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="IS">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="IS">
                                    <path fill="#0052B4" d="M0 0h513v342H0z"></path>
                                    <path fill="#FFF"
                                      d="M513 210.6H202.2v130.7h-79.8V210.6H0v-79.8h122.4V0h79.8v130.8H513v18.5l-1 42.7z">
                                    </path>
                                    <path fill="#D80027"
                                      d="M513 149.3V192H183.7v149.3H141V192H0v-42.7h141V0h42.7v149.3z">
                                    </path>
                                  </svg>
                                  <div>Iceland</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-676" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="IN">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="IN">
                                    <path fill="#181A93" d="M17.3 0h478.4v342H17.3V0z"></path>
                                    <path fill="#FFA44A" d="M0 0h513v114H0V0z"></path>
                                    <path fill="#1A9F0B" d="M0 228h513v114H0V228z"></path>
                                    <path fill="#FFF" d="M0 114h513v114H0V114z"></path>
                                    <circle fill="#FFF" cx="256.5" cy="171" r="34.2"></circle>
                                    <path fill="#181A93"
                                      d="M256.5 216.6c-25.1 0-45.6-20.5-45.6-45.6s20.5-45.6 45.6-45.6 45.6 20.5 45.6 45.6-20.5 45.6-45.6 45.6zm0-11.4c18.2 0 34.2-16 34.2-34.2s-15.9-34.2-34.2-34.2-34.2 16-34.2 34.2 16 34.2 34.2 34.2z">
                                    </path>
                                    <circle fill="#181A93" cx="256.5" cy="171" r="22.8"></circle>
                                  </svg>
                                  <div>India</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-678" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="ID">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="ID">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#E00" d="M0 0h513v171H0z"></path>
                                  </svg>
                                  <div>Indonesia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-680" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="IR">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="IR">
                                    <path fill="#FFF" d="M0 0h512v342H0z"></path>
                                    <path fill="#6DA544" d="M0 0h513v114H0z"></path>
                                    <path
                                      d="M0 227.9h513v114H0zm278.8-93.1c.1 2 8.7 26.2 4.4 39.4-6.6 20.3-15.8 21.8-19.8 24.5V134l-6.9-4.2-6.9 4.2v64.7c-4-2.7-12.4-2.4-19.8-24.5-4.3-12.7 5.7-37.3 5.8-39.2 0 0-9.5 8.1-15.8 24-5.9 14.8 1.9 49.6 29.5 54.8 2.3.4 4.7 5.6 7.2 5.6 2.1 0 4.1-5.2 6-5.5 28.4-4.6 35-41.7 29.9-55.6-5.4-14.6-13.6-23.5-13.6-23.5z"
                                      fill="#D80027"></path>
                                    <path
                                      d="M44.6 98.9h22.3v24.4H44.6zM0 98.9h22.3v24.4H0zm89.2 0h22.3v24.4H89.2zm44.6 0h22.3v24.4h-22.3zm44.6 0h22.3v24.4h-22.3zm44.6 0h22.3v24.4H223zm44.7 0H290v24.4h-22.3zm44.6 0h22.3v24.4h-22.3zm44.6 0h22.3v24.4h-22.3zm44.6 0h22.3v24.4h-22.3zm44.6 0h22.3v24.4h-22.3zm44.6 0H513v24.4h-22.3zm-446.1 118h22.3v25.5H44.6zm-44.6 0h22.3v25.5H0zm89.2 0h22.3v25.5H89.2zm44.6 0h22.3v25.5h-22.3zm44.6 0h22.3v25.5h-22.3zm44.6 0h22.3v25.5H223zm44.7 0H290v25.5h-22.3zm44.6 0h22.3v25.5h-22.3zm44.6 0h22.3v25.5h-22.3zm44.6 0h22.3v25.5h-22.3zm44.6 0h22.3v25.5h-22.3zm44.6 0H513v25.5h-22.3z"
                                      fill="#FFF" opacity="0.5"></path>
                                  </svg>
                                  <div>Iran</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-682" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="IQ">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="IQ">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#CE1126" d="M0 0h513v114H0z"></path>
                                    <path d="M0 228h513v114H0z"></path>
                                    <path
                                      d="M219.2 160.7h-29.3c1.5-5.7 6.6-9.9 12.8-9.9v-19.9c-18.3 0-33.1 14.9-33.1 33.1v16.5h49.6c1.8 0 3.3 1.5 3.3 3.3v6.6h-66.2v19.9h86.1v-26.5c0-12.7-10.4-23.1-23.2-23.1zm49.6 29.8v-59.6H249v79.5h33.1v-19.9zm66.2 0v-59.6h-19.8v59.6h-6.6v-19.8h-19.9v39.7h59.6v-19.9z"
                                      fill="#547C31"></path>
                                  </svg>
                                  <div>Iraq</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-684" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="IE">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="IE">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#6DA544" d="M0 0h171v342H0z"></path>
                                    <path fill="#FF9811" d="M342 0h171v342H342z"></path>
                                  </svg>
                                  <div>Ireland</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-686" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="IM">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="IM">
                                    <path fill="#E52D42" d="M0 0h513v342H0z"></path>
                                    <path fill="#FFF"
                                      d="M393.3 68.2h-45.8l-33.8 80.2-34.4-22.9s-24.7-59.1-34.4-68.2c-9.7-9.7-18.7-.6-48.9 7.8-29.6 8.4-30.8 18.7-42.2 18.7-4.8 0-19.9-17.5-27.7-22.3-12.1-7.8-16.9-4.2-13.9 7.2 1.2 4.8 10.9 10.9 16.9 19.9 7.8 11.5 12.7 25.9 12.7 25.9s10.9-10.3 16.9-12.1c9-2.4 19.3 1.8 31.4 0 15.1-2.4 31.4-10.9 31.4-10.9l4.2 43.4s-54.3 50.7-49.5 70.6 56.1 44.6 68.2 62.7c12.1 17.5-7.2 24.1-7.2 32.6s-1.8 19.9 7.2 16.3c9-3.6 10.3-18.1 18.7-31.4 6-9 10.3-13.9 11.5-17.5 1.8-9-23.5-32-37.4-48.9-6.6-7.8-19.9-18.7-19.9-18.7l39.2-29.6s67.6 27.7 82.6 18.7c15.1-9 19.3-98.3 19.3-98.3l47-11.5-12.1-11.7z">
                                    </path>
                                    <path fill="#F8DD4E"
                                      d="M279.3 262.4c-6 0-11.5-4.8-11.5-11.5s4.8-11.5 11.5-11.5c6 0 11.5 4.8 11.5 11.5s-5.5 11.5-11.5 11.5zm45.8-182.8c-6 0-11.5-4.8-11.5-11.5s4.8-11.5 11.5-11.5c6 0 11.5 4.8 11.5 11.5s-5.5 11.5-11.5 11.5zm0 91.1c-6 0-11.5-4.8-11.5-11.5 0-6 4.8-11.5 11.5-11.5 6 0 11.5 4.8 11.5 11.5-.6 6.7-5.5 11.5-11.5 11.5zm-136.9 45.8c-6 0-11.5-4.8-11.5-11.5 0-6 4.8-11.5 11.5-11.5 6.6 0 11.5 4.8 11.5 11.5s-5.5 11.5-11.5 11.5zm45.2-136.9c-6 0-11.5-4.8-11.5-11.5s4.8-11.5 11.5-11.5c6 0 11.5 4.8 11.5 11.5s-4.8 11.5-11.5 11.5zm22.9 91.1c-6 0-11.5-10.3-11.5-22.9s4.8-22.9 11.5-22.9c6 0 11.5 10.3 11.5 22.9s-4.8 22.9-11.5 22.9zm-114-45.2c-6 0-11.5-4.8-11.5-11.5 0-6.6 4.8-11.5 11.5-11.5 6.6 0 11.5 4.8 11.5 11.5 0 6.6-4.8 11.5-11.5 11.5z">
                                    </path>
                                  </svg>
                                  <div>Isle of Man</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-688" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="IL">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="IL">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path
                                      d="M340.6 122.4h-56.1l-28-48.6-28 48.6h-56.1l28 48.6-28 48.6h56.1l28 48.6 28-48.6h56.1l-28-48.6 28-48.6zM293.2 171 276 204.2h-38.9L219.8 171l17.2-33.2h38.9l17.3 33.2zm-36.7-71.8 11.9 23.3h-23.9l12-23.3zm-58.3 38.6h23.9l-10.8 21-13.1-21zm0 66.4 13-22.1 11.9 22.1h-24.9zm58.3 37.5-11.9-22.1h23.9l-12 22.1zm59.4-37.5h-25l11.9-22.1 13.1 22.1zm-26.1-66.4h26.1l-13 22.1-13.1-22.1zM0 21.3h512V64H0zm0 256h512V320H0z"
                                      fill="#2E52B2"></path>
                                  </svg>
                                  <div>Israel</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-690" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="IT">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="IT">
                                    <path fill="#FFF" d="M342 0H0v341.3h512V0z"></path>
                                    <path fill="#6DA544" d="M0 0h171v342H0z"></path>
                                    <path fill="#D80027" d="M342 0h171v342H342z"></path>
                                  </svg>
                                  <div>Italy</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-692" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="CI">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="CI">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#009e60" d="M342 0h171v342H342z"></path>
                                    <path fill="#f77f00" d="M0 0h171v342H0z"></path>
                                  </svg>
                                  <div>Ivory Coast</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-694" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="JM">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="JM">
                                    <path fill="#6DA544" d="M0 0h513v342H0z"></path>
                                    <path d="M215.9 171 0 314.6V26.8zM513 26.8v287.8L296.1 171z"></path>
                                    <path fill="#0052B4"
                                      d="M513 26.8 296.1 171 513 314.6V342h-41.1L256 197.4 40.1 342H0v-27.4L215.9 171 0 26.8V0h40.1L256 143.9 471.9 0H513z">
                                    </path>
                                    <path fill="#FFDA44"
                                      d="M513 26.8 296.1 171 513 314.6V342h-41.1L256 197.4 40.1 342H0v-27.4L215.9 171 0 26.8V0h40.1L256 143.9 471.9 0H513z">
                                    </path>
                                  </svg>
                                  <div>Jamaica</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-696" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="JP">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="JP">
                                    <path fill="#FFF" d="M0 0h512v342H0z"></path>
                                    <circle fill="#D80027" cx="256.5" cy="171" r="96"></circle>
                                  </svg>
                                  <div>Japan</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-698" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="JE">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="JE">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#D80027"
                                      d="M301.8 171 513 30.2V0h-45.3L256.5 140.8 45.3 0H0v30.2L211.2 171 0 311.8V342h45.3l211.2-140.8L467.7 342H513v-30.2z">
                                    </path>
                                    <path fill="#FFDA44"
                                      d="m233.7 44.6 22.3 5.6 22.3-5.6 4-20.9-14.9 6.5L256 14.8l-11.4 15.4-14.9-6.5z">
                                    </path>
                                    <path fill="#D80027"
                                      d="M233.7 44.6s-4 12.9-4 29.9c0 27.9 26.3 41.3 26.3 41.3s26.3-15.5 26.3-41.3c0-15.4-4-29.9-4-29.9s-8.1-5-22.3-5-22.3 5-22.3 5z">
                                    </path>
                                  </svg>
                                  <div>Jersey</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-700" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="JO">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="JO">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path d="M0 0h513v114H0z"></path>
                                    <path fill="#6DA544" d="M0 228h513v114H0z"></path>
                                    <path fill="#D80027" d="M256.5 170.7 0 341.3V0z"></path>
                                    <path fill="#FFF"
                                      d="m77.9 139.5 7.9 16.4 17.8-4.1-8 16.5 14.3 11.3-17.8 4 .1 18.3-14.3-11.5-14.2 11.5v-18.3l-17.8-4 14.3-11.3-7.9-16.5 17.7 4.1z">
                                    </path>
                                  </svg>
                                  <div>Jordan</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-702" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="KZ">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="KZ">
                                    <path fill="#36B6CC" d="M0 0h513v342H0V0z"></path>
                                    <circle fill="#FFD400" cx="256.5" cy="170.9" r="68.4"></circle>
                                    <path fill="#FFD400"
                                      d="m256.5 251.5-27.9 41.7-7.1-49.7-43.2 25.5 15.2-47.8-50 4.2 34.4-36.5-46.9-18 46.8-18-34.4-36.5 50 4.2-15.2-47.8 43.2 25.4 7.1-49.7 27.9 41.7 27.9-41.7 7.1 49.7 43.2-25.4-15.2 47.8 50-4.2-34.3 36.6 46.8 17.9-46.8 18 34.4 36.5-50-4.2 15.2 47.8-43.2-25.4-7.1 49.7c0-.1-27.9-41.8-27.9-41.8zm0-.8c44.1 0 79.9-35.8 79.9-79.9S300.6 91 256.5 91s-79.9 35.8-79.9 79.9 35.8 79.8 79.9 79.8zM22.8 28.3c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6V28.3zm0 45.7c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6V74zm0 45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0 45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0 45.7c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0 45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0 45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H28.5c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm22.8-22.8c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0-45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7V245c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0-45.7c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6V188zm0-45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6v-11.4zm0-45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6V96.8zm0-45.6c0-3.2 2.4-5.7 5.7-5.7h11.3c3.2 0 5.7 2.4 5.7 5.7v11.3c.1 3.1-2.4 5.7-5.6 5.7H51.3c-3.1 0-5.7-2.5-5.7-5.6V51.2z">
                                    </path>
                                  </svg>
                                  <div>Kazakhstan</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-704" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="KE">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="KE">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path d="M0 0h512v90.579H0z"></path>
                                    <path fill="#496E2D" d="M0 251h513v91H0z"></path>
                                    <path fill="#A2001D" d="M0 114h513v114H0z"></path>
                                    <g fill="#FFF">
                                      <path
                                        d="m323.3 54.5-25.6-11.8L256 137l-41.7-94.3-25.6 11.8 51.8 116.2-51.8 116.2 25.6 11.8 41.7-94.4 41.7 94.4 25.6-11.8-51.8-116.2z">
                                      </path>
                                      <path
                                        d="M273.4 65.6c-9.9-10.8-17.4-17-17.4-17s-7.5 6.2-17.4 17v210.1c9.9 10.8 17.4 17 17.4 17s7.5-6.2 17.4-17V65.6z">
                                      </path>
                                    </g>
                                    <path
                                      d="M209 105.9v129.5c10.5 18.5 23.3 33.7 32.9 43.8V62.1c-9.6 10.1-22.4 25.3-32.9 43.8zm94 0c-10.5-18.5-23.3-33.7-32.9-43.8v217.2c9.6-10.1 22.4-25.3 32.9-43.8V105.9z"
                                      fill="#A2001D"></path>
                                    <path
                                      d="M303 105.9v129.5c10.6-18.8 18.8-41 18.8-64.8s-8.2-45.9-18.8-64.7zm-94 0v129.5c-10.6-18.8-18.8-41-18.8-64.8s8.2-45.9 18.8-64.7z">
                                    </path>
                                  </svg>
                                  <div>Kenya</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-706" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="KI">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 450 300" class="flag" code="KI">
                                    <path fill="#CE1126" d="M0 0h450v300H0V0z"></path>
                                    <g fill="#FCD116">
                                      <circle cx="227.6" cy="161.2" r="56.2"></circle>
                                      <path
                                        d="m254.1 73.4-23.7 26 28.6 6.5zm-51.5.2-4.8 33.1 28.5-8zm94.3 26.7-34.7 8.5 20.1 23.7zm-138.3-1.8 15.5 32.7 20.2-22.7zm159 45.3-34.4-9.9 5.6 29.5zm-182-2.6 31.9 19.8 5.2-27.7z">
                                      </path>
                                    </g>
                                    <path fill="#003F87" d="M0 175h450v125H0V175z"></path>
                                    <path fill="#FFF"
                                      d="M0 267c15 0 30 13 45 13s30-13 45-13 30 13 45 13 30-13 45-13 30 13 45 13 30-13 45-13 30 13 45 13 30-13 45-13 30 13 45 13 30-13 45-13v-21c-15 0-30 13-45 13s-30-13-45-13-30 13-45 13-30-13-45-13-30 13-45 13-30-13-45-13-30 13-45 13-30-13-45-13-30 13-45 13-30-13-45-13v21zm0-43c15 0 30 13 45 13s30-13 45-13 30 13 45 13 30-13 45-13 30 13 45 13 30-13 45-13 30 13 45 13 30-13 45-13 30 13 45 13 30-13 45-13v-21c-15 0-30 13-45 13s-30-13-45-13-30 13-45 13-30-13-45-13-30 13-45 13-30-13-45-13-30 13-45 13-30-13-45-13-30 13-45 13-30-13-45-13v21zm0-43c15 0 30 13 45 13s30-13 45-13 30 13 45 13 30-13 45-13 30 13 45 13 30-13 45-13 30 13 45 13 30-13 45-13 30 13 45 13 30-13 45-13v-21c-15 0-30 13-45 13s-30-13-45-13-30 13-45 13-30-13-45-13-30 13-45 13-30-13-45-13-30 13-45 13-30-13-45-13-30 13-45 13-30-13-45-13v21z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#FCD116"
                                      d="m183.2 48.3-1.1-5.3 22.4-3.7s-30.1-7.1-40-10.7c-14.3-5.1-16.3-12.1-16.3-12.1s44.7 11 64.8 11c4.3 0 12.8 10.7 12.8 10.7s14.8-14.9 21.9-15.4c32.1-2.3 66.6-6.4 66.6-6.4s-10 6.7-16 8.5c-16.2 4.9-50.6 11.7-50.6 11.7l-4.8 7.5H277l-14.4 4.3 7.4 6.9s-7.8-4.1-18.1-2.1c-7.1 1.3-15.4 6-22.9 8-18.7 4.8-29.9-12.8-29.9-12.8l-15.9-.1z">
                                    </path>
                                  </svg>
                                  <div>Kiribati</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-708" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="XK">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 341.33" class="flag" code="XK">
                                    <path fill="#0052B4" d="M0 0h512v341.34H0z"></path>
                                    <path
                                      d="m220.72 42.63 7.95 16.11 17.77 2.58-12.86 12.54 3.04 17.7-15.9-8.36-15.9 8.36 3.03-17.7-12.86-12.54 17.78-2.58zm70.56-.06 7.95 16.1 17.78 2.59-12.86 12.53 3.03 17.71-15.9-8.36-15.9 8.36 3.04-17.71-12.86-12.53 17.77-2.59zm62.08 11.36 7.95 16.11 17.77 2.58-12.86 12.54 3.04 17.7-15.9-8.35-15.9 8.35 3.04-17.7-12.87-12.54 17.78-2.58zm63.01 18.3 7.95 16.11 17.77 2.59-12.86 12.53 3.04 17.71-15.9-8.36-15.9 8.36 3.03-17.71-12.86-12.53 17.78-2.59zm-257.73-18.3 7.95 16.11 17.78 2.58-12.87 12.54 3.04 17.7-15.9-8.35-15.9 8.35 3.04-17.7-12.86-12.54 17.77-2.58zm-63.01 18.3 7.95 16.11 17.78 2.59-12.86 12.53 3.03 17.71-15.9-8.36-15.9 8.36 3.04-17.71-12.86-12.53 17.77-2.59z"
                                      fill="#FFF"></path>
                                    <path fill="#FFDA44"
                                      d="m217.53 259.33-27.22-13.61-27.22-54.43h27.22l27.22-27.22 13.61-27.22 27.22-13.61 13.61 13.61 27.22 13.61v13.61l13.61 13.61 40.83 27.22L340 245.73l-40.83 40.83-13.61-27.22-40.83 27.22v27.22l-13.61-13.61-13.59-40.84z">
                                    </path>
                                  </svg>
                                  <div>Kosovo</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-710" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="KW">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="KW">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#6DA544" d="M0 0h513v114H0z"></path>
                                    <path fill="#D80027" d="M0 228h513v114H0z"></path>
                                    <path d="M167 227.6 0 341.3V0l167 113.8z"></path>
                                  </svg>
                                  <div>Kuwait</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-712" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="KG">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 342" class="flag" code="KG">
                                    <g fill="#D80027">
                                      <path d="M0 0h513v342H0z"></path>
                                      <circle cx="256" cy="170.7" r="170.7"></circle>
                                    </g>
                                    <path fill="#FFDA44"
                                      d="M382.4 170.7 330.8 195l27.5 50-56.1-10.7-7.1 56.6-39.1-41.7-39.1 41.7-7.1-56.6-56.1 10.7 27.5-50-51.6-24.3 51.6-24.3-27.5-50.1 56.1 10.8 7.1-56.7L256 92.1l39.1-41.7 7.1 56.7 56.1-10.8-27.5 50.1z">
                                    </path>
                                    <circle fill="#D80027" cx="257.4" cy="170.7" r="71.6"></circle>
                                    <path
                                      d="M214.2 170.7c-2.1 0-4.1.1-6.2.3.1 12 4.4 22.9 11.6 31.5 3.8-10.3 9.5-19.6 16.7-27.7-6.9-2.7-14.3-4.1-22.1-4.1zm26.6 46.5c5.2 1.9 10.8 2.9 16.6 2.9 5.8 0 11.4-1 16.6-2.9-2.8-11.1-8.7-21-16.6-28.8-7.9 7.8-13.8 17.7-16.6 28.8zm59.4-71.2c-8.5-14.8-24.5-24.7-42.8-24.7-18.3 0-34.2 9.9-42.8 24.7 15.6.1 30.2 4.3 42.8 11.6 12.6-7.3 27.2-11.6 42.8-11.6zm-21.7 28.8c7.2 8 12.9 17.4 16.7 27.7 7.2-8.5 11.5-19.5 11.6-31.5-2-.2-4.1-.3-6.2-.3-7.7 0-15.2 1.4-22.1 4.1z"
                                      fill="#FFDA44"></path>
                                  </svg>
                                  <div>Kyrgyzstan</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-714" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="LA">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="LA">
                                    <path fill="#0052B4" d="M0 0h513v342H0z"></path>
                                    <path d="M0 .1h513v90.7H0zm0 251.2h513V342H0z" fill="#D80027"></path>
                                    <circle fill="#FFF" cx="256.5" cy="171" r="65.9"></circle>
                                  </svg>
                                  <div>Laos</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-716" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="LV">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="LV">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path class="prefix__st1" d="M0 0h513v127.6H0zm0 214.4h513V342H0z" fill="#A2001D">
                                    </path>
                                  </svg>
                                  <div>Latvia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-718" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="LB">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="LB">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path d="M0 .2h513v90.7H0zm.5 251.1H513V342H.5z" fill="#D80027"></path>
                                    <path fill="#6DA544" d="M290.3 193.5 256 130.7l-34.3 62.8h25.7v17.2h17.2v-17.2z">
                                    </path>
                                    <path fill="#14AF5A"
                                      d="M241.3 213.1c4.4-4.4 4.4-11.6-.1-16l4.7 4.7c-5.2-4.7-12.2-6.6-19.1-5.3l-23.5 5.9c-6.1 1.5-6.8-.4-1.8-4.2l27.1-20.3c5.1-3.8 4.2-6.9-2.3-6.9h-11c-6.4 0-7-2.3-1.5-5.1l25.3-12.7c5.6-2.8 5.1-5.1-1.5-5.1h-11c-6.4 0-7.4-3.1-2.3-6.9l27.1-20.3c5.6-3.8 12.9-3.8 18.5 0l27.1 20.3c5.1 3.8 4.2 6.9-2.3 6.9h-11c-6.4 0-7 2.3-1.5 5.1l25.3 12.7c5.6 2.8 5.1 5.1-1.5 5.1h-11c-6.4 0-7.4 3.1-2.3 6.9l27.1 20.3c5.1 3.8 4.4 5.7-1.8 4.2l-23.5-5.9c-6.8-1.3-13.9.6-19.1 5.3l4.7-4.7c-4.4 4.4-4.5 11.5-.1 16l6.8 6.8c4.4 4.4 3.1 8-3.3 8h-45.8c-6.2 0-7.7-3.6-3.3-8 .1.1 6.9-6.8 6.9-6.8z">
                                    </path>
                                  </svg>
                                  <div>Lebanon</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-720" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="LS">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="LS">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#0052B4" d="M0 0h513v114H0z"></path>
                                    <path fill="#6DA544" d="M0 227.6h513v114H0z"></path>
                                    <path
                                      d="m245.2 171 7.7-23.1c2-5.9 5.1-6 7.1 0l7.7 23.1 19.4 29.1c1.7 2.6 1.3 6.3-1.2 8 0 0-6.9 8-29.5 8s-29.5-8-29.5-8c-2.4-2-2.9-5.4-1.2-8l19.5-29.1z">
                                    </path>
                                    <path
                                      d="M256.5 171c-12.5 0-22.6-10.1-22.6-22.6 0-12.5 10.1-22.6 22.6-22.6s22.6 10.1 22.6 22.6c0 12.5-10.2 22.6-22.6 22.6zm0 0c6.2 0 11.3-16.3 11.3-22.6 0-6.2-5.1-11.3-11.3-11.3-6.2 0-11.3 5.1-11.3 11.3 0 6.3 5 22.6 11.3 22.6z">
                                    </path>
                                  </svg>
                                  <div>Lesotho</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-722" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="LR">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="LR">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path
                                      d="M0 0h513v31.1H0zm0 62.2h513v31.1H0zm0 62.3h513v31.1H0zm0 62.3h513v31.1H0zm0 62.5h513v31.1H0zm0 61.6h513V342H0z"
                                      fill="#bf0a30"></path>
                                    <path fill="#002868" d="M0 0h155.6v155.6H0z"></path>
                                    <path fill="#FFF"
                                      d="m77.8 30.2 10.7 32.9h34.6l-28 20.4 10.7 32.9-28-20.3-28 20.3 10.7-32.9-28-20.4h34.6z">
                                    </path>
                                  </svg>
                                  <div>Liberia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-724" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="LY">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="LY">
                                    <path d="M0 0h513v342H0z"></path>
                                    <path fill="#D80027" d="M0 0h513v114H0z"></path>
                                    <path fill="#496E2D" d="M0 228h513v114H0z"></path>
                                    <g fill="#FFF">
                                      <path
                                        d="m281.4 150.7 9 12.3 14.5-4.7-9 12.4 9 12.3-14.5-4.7-9 12.3v-15.2l-14.5-4.7 14.5-4.7z">
                                      </path>
                                      <path
                                        d="M257 201.5c-17 0-30.9-13.8-30.9-30.9s13.8-30.9 30.9-30.9c5.3 0 10.3 1.3 14.7 3.7-6.9-6.7-16.2-10.8-26.6-10.8-21 0-38 17-38 38s17 38 38 38c10.3 0 19.7-4.1 26.6-10.8-4.4 2.4-9.4 3.7-14.7 3.7z">
                                      </path>
                                    </g>
                                  </svg>
                                  <div>Libya</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-726" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="LI">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="LI">
                                    <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                    <path fill="#0052B4" d="M0 0h513v171H0z"></path>
                                    <path fill="#FFDA44"
                                      d="M149.3 98.1c0-14-11.3-25.3-25.3-25.3-6.5 0-12.4 2.4-16.9 6.4V64.4h8.4V47.5h-8.4v-8.4H90.3v8.4h-8.4v16.9h8.4v14.9c-4.5-4-10.4-6.4-16.9-6.4-14 0-25.3 11.3-25.3 25.3 0 7.5 3.3 14.2 8.4 18.8v14.9h84.3V117c5.3-4.7 8.5-11.5 8.5-18.9z">
                                    </path>
                                  </svg>
                                  <div>Liechtenstein</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-728" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="LT">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="LT">
                                    <path fill="#6DA544" d="M0 0h513v342H0z"></path>
                                    <path fill="#FFDA44" d="M0 0h513v114H0z"></path>
                                    <path fill="#D80027" d="M0 228h513v114H0z"></path>
                                  </svg>
                                  <div>Lithuania</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-730" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="LU">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="LU">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#D80027" d="M0 0h513v114H0z"></path>
                                    <path fill="#338AF3" d="M0 228h513v114H0z"></path>
                                  </svg>
                                  <div>Luxembourg</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-732" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="MO">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="MO">
                                    <path fill="#00745a" d="M0 85.331h512v341.337H0z"></path>
                                    <path fill="#FFF"
                                      d="M285.682 248.878c-4.19 0-8.166.836-11.861 2.164 2.023-4.509 3.379-9.527 3.379-14.885 0-21.201-21.201-37.101-21.201-37.101s-21.201 15.901-21.201 37.101c0 5.357 1.356 10.375 3.379 14.885-3.693-1.328-7.671-2.164-11.861-2.164-21.201 0-37.101 21.201-37.101 21.201s15.901 21.201 37.101 21.201c12.429 0 23.031-7.286 29.682-13.315 6.65 6.03 17.251 13.315 29.682 13.315 21.201 0 37.101-21.201 37.101-21.201s-15.899-21.201-37.099-21.201z">
                                    </path>
                                    <path
                                      d="m256 152.111 4.38 13.476h14.171l-11.464 8.332 4.376 13.476-11.463-8.33-11.463 8.33 4.376-13.476-11.464-8.332h14.171zm-53.888 23.572 8.425 7.585 9.818-5.667-4.61 10.355 8.423 7.588-11.274-1.185-4.611 10.355-2.358-11.088-11.275-1.185 9.818-5.669zm-39.45 39.449 11.09 2.358 5.668-9.818 1.186 11.274 11.089 2.358-10.357 4.61 1.186 11.274-7.587-8.423-10.357 4.61 5.669-9.818zm147.227-39.449-8.425 7.585-9.818-5.667 4.611 10.355-8.425 7.588 11.275-1.185 4.61 10.355 2.359-11.088 11.275-1.185-9.818-5.669zm39.449 39.449-11.089 2.358-5.669-9.818-1.186 11.274-11.088 2.358 10.357 4.61-1.185 11.274 7.586-8.423 10.357 4.61-5.669-9.818z"
                                      fill="#FFDA44"></path>
                                    <path
                                      d="M256 350.642c16.84 0 32.363-5.619 44.816-15.073h-89.63c12.451 9.454 27.974 15.073 44.814 15.073zm-68.023-44.522a74.138 74.138 0 0 0 8.85 15.073h118.345a74.13 74.13 0 0 0 8.85-15.073H187.977z"
                                      fill="#FFF"></path>
                                  </svg>
                                  <div>Macau</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-734" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="MK">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="MK">
                                    <path fill="#FFDA44" d="M0 85.333h512V426.67H0z"></path>
                                    <g fill="#D80027">
                                      <path
                                        d="M383.875 426.662 256 252.286l26.827 174.376zM133.565 85.33 256 252.286 230.314 85.33zm95.606 341.332L256 252.286 128.124 426.662zM0 85.33V212.9l256 39.386L28.333 85.33zm0 341.332h18.212L256 252.286 0 291.67zm256-174.376L512 212.9V85.33h-28.331zM281.686 85.33 256 252.286 378.434 85.33zM512 426.662V291.671l-256-39.385 237.787 174.376z">
                                      </path>
                                      <circle cx="256" cy="252.29" r="59.359"></circle>
                                    </g>
                                    <circle fill="#FFDA44" cx="256" cy="252.29" r="44.522"></circle>
                                  </svg>
                                  <div>Macedonia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-736" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="MG">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="MG">
                                    <path fill="#6DA544" d="M512 426.666V85.329H0v341.337h512z"></path>
                                    <path fill="#D80027" d="M512 85.331H0v170.666h512V85.331z"></path>
                                    <path fill="#FFF" d="M0 85.334h181.793v341.337H0z"></path>
                                  </svg>
                                  <div>Madagascar</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-738" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="MW">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 342" class="flag" code="MW">
                                    <path fill="#272727" d="M0 0h512v114H0z"></path>
                                    <path fill="#e40112" d="M0 114h512v114H0z"></path>
                                    <path fill="#07893f" d="M0 228h512v114H0z"></path>
                                    <circle fill="#e40112" cx="256" cy="125" r="95"></circle>
                                  </svg>
                                  <div>Malawi</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-740" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="MY">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="MY">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path
                                      d="M0 0h513v24.4H0zm0 48.9h513v24.4H0zm0 48.8h513v24.4H0zm0 48.9h513V171H0zm0 48.8h513v24.4H0zm0 48.9h513v24.4H0zm0 48.8h513v24.4H0z"
                                      fill="#c00"></path>
                                    <path fill="#006" d="M0 0h256.5v195.4H0z"></path>
                                    <path
                                      d="M153.3 42.1C122.6 30.7 88.5 46.3 77.1 77s4.2 64.8 34.9 76.2c13.3 5 28 5 41.4 0-30.7 24.5-75.4 19.6-100-11.1s-19.6-75.4 11.1-100c26-20.7 62.9-20.7 88.8 0zm26.7 75-20.6 23.3 5.4-30.6-31-1.6 27.3-14.9L143 68l28.6 12 8.4-29.9 8.4 29.9L217 68l-18 25.4 27.3 14.9-31 1.6 5.4 30.6-20.7-23.4z"
                                      fill="#fc0"></path>
                                  </svg>
                                  <div>Malaysia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-742" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="MV">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="MV">
                                    <path fill="#d01920" d="M0 85.331h512v341.333H0z"></path>
                                    <path fill="#017c3b" d="M144.696 174.375h222.609v163.25H144.696z"></path>
                                    <path fill="#FFF"
                                      d="M283.484 304.226c-26.637 0-48.232-21.594-48.232-48.232s21.594-48.232 48.232-48.232c8.306 0 16.12 2.1 22.943 5.797-10.703-10.467-25.341-16.927-41.494-16.927-32.784 0-59.362 26.577-59.362 59.362s26.578 59.362 59.362 59.362c16.154 0 30.791-6.461 41.494-16.927-6.822 3.698-14.636 5.797-22.943 5.797z">
                                    </path>
                                  </svg>
                                  <div>Maldives</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-744" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="ML">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="ML">
                                    <path fill="#FFDA44" d="M0 85.331h512v341.337H0z"></path>
                                    <path fill="#6DA544" d="M0 85.331h170.663v341.337H0z"></path>
                                    <path fill="#D80027" d="M341.337 85.331H512v341.337H341.337z"></path>
                                  </svg>
                                  <div>Mali</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-746" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="MT">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="MT">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#C31B28" d="M256 0h256.5v342H256z"></path>
                                    <path fill="#ACABB1" stroke="#C31B28" stroke-width="2"
                                      d="M101.2 68.2V33H66v35.2H30.8v35.2H66v35.2h35.2v-35.2h35.2V68.2z"></path>
                                  </svg>
                                  <div>Malta</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-748" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="MH">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="MH">
                                    <path fill="#1E509C" d="M0 0h513v342H0z"></path>
                                    <path fill="#FFF" d="M513 176.1V81.3L0 342l513-165.9z"></path>
                                    <path fill="#F18D36" d="M513 0v81.3L0 342 513 0z"></path>
                                    <path fill="#FFF"
                                      d="m126.7 99.3-7.8-54.1-7.7 54.1-20.8-23.7 10.7 31.6-31.5-10.7 23.6 20.8-54.1 7.7 54.1 7.7-23.6 20.8 31.5-10.7-10.7 31.6 20.8-23.7 7.7 54.1 7.8-54.1 20.7 23.7-10.6-31.6 31.5 10.7-23.6-20.8 54-7.7-54-7.7 23.6-20.8-31.5 10.7 10.6-31.6z">
                                    </path>
                                  </svg>
                                  <div>Marshall Islands</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-750" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="MR">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 100 513 342" class="flag" code="MR">
                                    <path fill="#006233" d="M0 100h513v342H0z"></path>
                                    <path fill="#cd2a3e" d="M0 100h513v46H0zm0 296h513v46H0z"></path>
                                    <path fill="#ffc400"
                                      d="M256 298.851c-45.956 0-84.348-32.298-93.767-75.429A96.288 96.288 0 0 0 160 243.994c0 53.02 42.979 96 96 96s96-42.98 96-96c0-7.066-.785-13.942-2.233-20.572-9.419 43.131-47.811 75.429-93.767 75.429z">
                                    </path>
                                    <path fill="#ffc400"
                                      d="m255.999 171.994 8.935 27.502h28.918l-23.394 16.996 8.936 27.503-23.395-16.998-23.394 16.998 8.937-27.503-23.394-16.996h28.915z">
                                    </path>
                                  </svg>
                                  <div>Mauritania</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-752" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="MU">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="MU">
                                    <path fill="#f7ce00" d="M0 85.331h512v341.326H0z"></path>
                                    <path fill="#e32737" d="M0 85.331h512v85.337H0z"></path>
                                    <path fill="#191f6a" d="M0 170.657h512v85.337H0z"></path>
                                    <path fill="#00a04e" d="M0 341.331h512v85.337H0z"></path>
                                  </svg>
                                  <div>Mauritius</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-754" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="YT">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 90 60" class="flag" code="YT">
                                    <path fill="#FFF" d="M0 0h90v60H0z"></path>
                                    <path stroke="#7f7f7f" stroke-width="0.25" fill="#ABABAB"
                                      d="M75.6 39.6c-1.1.7 0 1.8-.6 1.9-.6.1-1.5-1.4-.2-2.5 1.6-1.5 5.8 0 5.9 4.3 0 2.2-.9 6.8-7.2 6.8-7.6 0-11.4-5.7-11.4-11.4 0-4.8 3.7-13.5 6.5-14.6 3.1-1.2 6.7-3.5 6.8-5 0-.5-1.4-.1-3.3.9-3.1 1.7-6.6 2.5-6.6 1.4s2.9-3.1 4-4.6c1.2-1.6.9-5.5 3-5.5 7.6 0 9.9 7.7 7 11.7-1.9 2.6 4.3 1 4.3 1s0 5.3-3.2 7.3c-3 1.8-4.8 3.9-4.8 3.9s.2-4.6-.5-3.9c-.6.7-11.1 4.5-10.3 12 .3 3 4.5 5.4 8.5 5.2s5.7-2.4 5.8-4.9c.1-3.9-3-4.4-3.7-4zm-64.9 4c.1 2.5 1.8 4.7 5.8 4.9s8.2-2.2 8.5-5.2c.8-7.5-9.7-11.3-10.3-12-.7-.7-.5 3.9-.5 3.9s-1.8-2.1-4.8-3.9c-3.2-2-3.2-7.3-3.2-7.3s6.2 1.6 4.3-1c-2.9-4-.6-11.7 7-11.7 2.1 0 1.8 3.9 3 5.5 1.1 1.5 4 3.5 4 4.6s-3.5.3-6.6-1.4c-1.9-1-3.3-1.4-3.3-.9.1 1.5 3.7 3.8 6.8 5 2.8 1.1 6.5 9.8 6.5 14.6 0 5.7-3.8 11.4-11.4 11.4-6.3 0-7.2-4.6-7.2-6.8.1-4.3 4.3-5.8 5.9-4.3 1.2 1.1.4 2.7-.2 2.5-.6-.1.6-1.2-.6-1.9-.6-.4-3.7.1-3.7 4z">
                                    </path>
                                    <path fill="#DE393A"
                                      d="M31 28.8v14c0 1.9 2.1 1.6 2.1 1.6h9.3c1.2 0 2.6 2.3 2.6 2.3s1.4-2.3 2.5-2.3h9.6s2 .2 2-1.8V28.7H31z">
                                    </path>
                                    <path fill="#3951A3" d="M31 13.1h28v15.7H31z"></path>
                                    <path fill="#FFF"
                                      d="M50.1 16.5c-.4 2.4-2.5 4.2-5.1 4.2-2.5 0-4.6-1.8-5.1-4.2-.5.9-.8 1.9-.8 3 0 3.3 2.6 5.9 5.9 5.9 3.3 0 5.9-2.6 5.9-5.9 0-1.1-.3-2.1-.8-3z">
                                    </path>
                                    <circle fill="#FEE05F" cx="39.1" cy="36.5" r="3"></circle>
                                    <circle fill="#FEE05F" cx="50.9" cy="36.5" r="3"></circle>
                                  </svg>
                                  <div>Mayotte</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-756" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="MX">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="MX">
                                    <path fill="#dc2339" d="M342 0H0v341.3h513V0z"></path>
                                    <path fill="#11865d" d="M0 0h171v342H0z"></path>
                                    <path fill="#FFF" d="M171 0h171v342H171z"></path>
                                    <path fill="#8C9157"
                                      d="M195.8 171.2c0 21.6 11.5 41.7 30.3 52.5 5.8 3.4 13.2 1.4 16.6-4.4 3.4-5.8 1.4-13.2-4.4-16.6-11.3-6.5-18.2-18.5-18.2-31.5 0-6.7-5.4-12.1-12.1-12.1-6.7 0-12.2 5.4-12.2 12.1zm93.4 51.1c17.5-11.1 28-30.4 28-51.1 0-6.7-5.4-12.1-12.1-12.1s-12.1 5.4-12.1 12.1c0 12.4-6.3 24-16.8 30.7-5.7 3.5-7.5 10.9-4.1 16.7s10.9 7.5 16.7 4.1c0-.2.2-.3.4-.4z">
                                    </path>
                                    <ellipse fill="#C59262" cx="256.5" cy="159.1" rx="24.3" ry="36.4"></ellipse>
                                  </svg>
                                  <div>México</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-758" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="FM">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="FM">
                                    <path fill="#338AF3" d="M0 0h513v342H0z"></path>
                                    <path
                                      d="m256 37.9 10.1 31.2H299l-26.6 19.3 10.2 31.2-26.6-19.3-26.6 19.3 10.2-31.2L213 69.1h32.9zM123.2 170.7l31.2-10.2v-32.8l19.3 26.6 31.2-10.2-19.3 26.6 19.3 26.5-31.2-10.1-19.3 26.5v-32.8zM256 303.5l-10.1-31.2H213l26.6-19.3-10.2-31.3L256 241l26.6-19.3-10.2 31.3 26.6 19.3h-32.9zm132.8-132.8-31.2 10.1v32.8l-19.3-26.5-31.2 10.1 19.3-26.5-19.3-26.6 31.2 10.2 19.3-26.6v32.8z"
                                      fill="#FFF"></path>
                                  </svg>
                                  <div>Micronesia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-760" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="MD">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="MD">
                                    <path fill="#FFDA44" d="M0 0h513v342H0z"></path>
                                    <path fill="#D80027" d="M342 0h171v342H342z"></path>
                                    <path fill="#0052B4" d="M0 0h171v342H0z"></path>
                                    <path fill="#AF7F59"
                                      d="M206.2 129.1h33.2L256 79.3l16.6 49.8h33.2v99.6L256 262l-49.8-33.2v-99.7zm33.2 33.3v49.8h33.2v-49.8h-33.2z">
                                    </path>
                                  </svg>
                                  <div>Moldova</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-762" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="MC">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="MC">
                                    <path fill="#FFF" d="M0 85.333h512v341.333H0z"></path>
                                    <path fill="#c70000" d="M0 85.333h512V256H0z"></path>
                                  </svg>
                                  <div>Monaco</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-764" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="MN">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="MN">
                                    <path fill="#095FAD" d="M0 0h513v342H0z"></path>
                                    <path d="M342 0h171v342H342zM0 0h171v342H0z" fill="#BE1229"></path>
                                    <g fill="#FFDA44">
                                      <path d="M108.3 166.3h14.8v74.2h-14.8zm-59.4 0h14.8v74.2H48.9z"></path>
                                      <circle cx="86" cy="203.4" r="14.8"></circle>
                                      <path d="M71.2 225.7h29.7v14.8H71.2zm0-59.4h29.7v14.8H71.2z"></path>
                                      <circle cx="86" cy="144" r="14.8"></circle>
                                      <path d="M76.3 123.9h19.5L86 108.3z"></path>
                                    </g>
                                  </svg>
                                  <div>Mongolia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-766" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="ME">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="ME">
                                    <path fill="#E6BE53" d="M0 0h513v342H0z"></path>
                                    <path fill="#E01D24" d="M20 20h473v302H20z"></path>
                                    <path fill="#E6BE53"
                                      d="M248.5 112.9c4.4 4.4 11.6 4.4 16 0l-4.7 4.7 22.7-22.7c4.9-4.5 12.1-5.6 18.2-2.8l2.1 1c5.7 2.9 6.7 8.7 2.3 13.1l4.7-4.7-22.8 22.8c-4.5 4.9-5.6 12.1-2.8 18.2l1 2.1c2.9 5.7 5.1 15.4 5.1 21.6v-11.3c0 6.2 4.4 9.1 10.2 6.2l2.1-1c5.7-2.9 6.7-8.7 2.3-13.1l4.7 4.7c-4.4-4.4-4.4-11.6 0-16l-4.7 4.7c5.2-5.5 9.6-11.6 13.1-18.2l1-2.1c2.9-5.7 6.3-15.1 7.9-21.2l5.8-23.3c1.5-6 5.9-6.8 9.6-1.8l20.2 26.9c3.8 5.1 6.9 14 6.9 20.6v22.4c0 6.3-2.2 15.8-5.1 21.7l-1 2.1c-3.5 6.6-7.9 12.7-13.1 18.2l-6.8 6.8c-5.4 5.2-11.5 9.6-18.2 13.1l-2.1 1c-5.7 2.9-15.5 5.1-21.6 5.1-6.2 0-6.9 2.2-1.1 5.1l2.1 1c5.7 2.9 13.8 8.7 18.2 13.1l-4.7-4.7c4.4 4.4 11.6 4.4 16 0l-4.7 4.7c4.4-4.4 11.6-4.4 16 0L339 226c4.6 4.9 5.7 12.1 2.9 18.2l-1 2.1c-2.9 5.7-10.4 10.2-16.4 10.2-7.5-.3-14.8-2-21.6-5.1l-2.1-1c-6.5-3.6-11.8-8.9-15.4-15.4l-1-2.1c-2.9-5.7-8.7-6.7-13.1-2.3l4.7-4.7c-4.4 4.7-5.2 11.8-1.8 17.3l10.3 15.4c3.4 5.1 2 12.1-3.1 15.5L266 284.4c-5.7 3.4-12.8 3.4-18.6 0L232 274.1c-5.1-3.4-6.5-10.3-3.1-15.5l10.3-15.4c3.4-5.5 2.6-12.6-1.8-17.3l4.7 4.7c-4.4-4.4-10.2-3.6-13.1 2.3l-1 2.1c-2.9 5.7-9.5 12.4-15.4 15.4l-2.1 1c-5.7 2.9-15.5 5.1-21.6 5.1-6.9-.3-13.1-4.2-16.4-10.2l-1-2.1c-2.8-6.1-1.6-13.3 2.9-18.2l-4.7 4.7c4.4-4.4 11.6-4.4 16 0L181 226c4.4 4.4 11.6 4.4 16 0l-4.7 4.7c5.5-5.2 11.6-9.6 18.2-13.1l2.1-1c5.7-2.9 5-5.1-1.1-5.1-7.5-.3-14.8-2-21.6-5.1l-2.1-1c-6.6-3.5-12.7-7.9-18.2-13.1l-6.8-6.8c-5.2-5.4-9.6-11.5-13.1-18.2l-1-2.1c-3.1-6.8-4.9-14.2-5.1-21.7V121c0-6.3 3.1-15.6 6.9-20.6l20.2-26.9c3.8-5.1 8.1-4.3 9.6 1.8l5.8 23.3c2 7.3 4.6 14.4 7.9 21.2l1 2.1c2.9 5.7 8.7 13.8 13.1 18.2l-4.7-4.7c4.4 4.4 4.4 11.6 0 16l4.7-4.7c-4.4 4.4-3.6 10.2 2.3 13.1l2.1 1c5.7 2.9 10.2 0 10.2-6.2v11.3c0-6.2 2.2-15.7 5.1-21.6l1-2.1c2.8-6.1 1.7-13.2-2.8-18.2l-22.7-22.7 4.7 4.7c-4.4-4.4-3.6-10.2 2.3-13.1l2.1-1c6.1-2.8 13.2-1.7 18.2 2.8l22.7 22.7-4.8-4.5zm-18-40.7c-4.4-4.4-3.2-9.5 2.8-11.5l12.4-4.2c6-2 15.5-2 21.5 0l12.4 4.2c6 2 7.2 7.1 2.8 11.5l-6.8 6.8c-5.3 4.7-12.1 7.5-19.2 7.9-6.2 0-14.8-3.5-19.2-7.9.1 0-6.7-6.8-6.7-6.8z">
                                    </path>
                                    <path fill="#215F90"
                                      d="M233.9 200.2c0 6.2 1.7 6.4 4.2.5 0 0 7.1-23.2 18.4-23.2 11.3 0 18.6 23.6 18.6 23.6 2.2 5.7 4 5.3 4-1.1v-11.2c0-18.7-10.1-33.9-22.6-33.9-12.5 0-22.6 15.2-22.6 33.9v11.4z">
                                    </path>
                                  </svg>
                                  <div>Montenegro</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-768" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="MS">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="MS">
                                    <path fill="#1B4991" d="M0 0h513v342H0z"></path>
                                    <path fill="#00A2B8" stroke="#FFF" stroke-width="3"
                                      d="M318.2 106.7v106.5c0 51.9 67.8 67.8 67.8 67.8s67.8-15.9 67.8-67.8V106.7H318.2z">
                                    </path>
                                    <path fill="#A35023"
                                      d="M319.7 212.7c0 50.8 66.3 66.3 66.3 66.3s66.3-15.6 66.3-66.3H319.7z"></path>
                                    <path d="M415.1 155.1h-19.4v-19.4h-19.4v19.4H357v19.4h19.3v58.1h19.4v-58.1h19.4z">
                                    </path>
                                    <path fill="#FFF"
                                      d="M256 0v30.6l-45.2 25.1H256V115h-59.1l59.1 32.8v22.9h-26.7l-73.5-40.9v40.9h-55.6v-48.6l-87.5 48.6H0v-30.6L45.2 115H0V55.7h59.1L0 22.8V0h26.7l73.5 40.8V0h55.6v48.6L243.3 0z">
                                    </path>
                                    <path fill="#D80027" d="M144 0h-32v69.3H0v32h112v69.4h32v-69.4h112v-32H144z"></path>
                                    <path fill="#0052B4" d="M155.8 115 256 170.7v-15.8L184.2 115z"></path>
                                    <path fill="#FFF" d="M155.8 115 256 170.7v-15.8L184.2 115z"></path>
                                    <path fill="#D80027"
                                      d="M155.8 115 256 170.7v-15.8L184.2 115zm-84 0L0 154.9v15.8L100.2 115z"></path>
                                    <path fill="#0052B4" d="M100.2 55.6 0 0v15.7l71.8 39.9z"></path>
                                    <path fill="#FFF" d="M100.2 55.6 0 0v15.7l71.8 39.9z"></path>
                                    <path fill="#D80027"
                                      d="M100.2 55.6 0 0v15.7l71.8 39.9zm84 0L256 15.7V0L155.8 55.6z">
                                    </path>
                                  </svg>
                                  <div>Montserrat</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-770" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="MA">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="MA">
                                    <path fill="#D80027" d="M0 .3V342h513V.3z"></path>
                                    <path fill="#20661B"
                                      d="M359.8 148.9h-73.3l-22.7-69.7-22.7 69.7h-73.3l59.3 43.1-22.7 69.7 59.3-43.1 59.3 43.1-22.5-69.7 59.3-43.1zm-116.1 37.7 7.7-23.6h24.8l7.7 23.6-20.1 14.6-20.1-14.6zm27.9-37.7H256l7.8-24 7.8 24zm24.3 29-4.8-14.9h25.3l-20.5 14.9zM236.6 163l-4.8 14.9-20.5-14.9h25.3zm-5.3 61.8 7.8-24 12.6 9.2-20.4 14.8zm44.5-14.9 12.6-9.2 7.8 24-20.4-14.8z">
                                    </path>
                                  </svg>
                                  <div>Morocco</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-772" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="MZ">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 513 342" class="flag" code="MZ">
                                    <path fill="#FFF" d="M0 85.333h513v342H0z"></path>
                                    <path fill="#f4d900" d="M0 323.333h513v104H0z"></path>
                                    <path fill="#006d66" d="M0 85.333h513v104H0z"></path>
                                    <path d="M0 204.333h513v104H0z"></path>
                                    <path fill="#cb0f31" d="M256 256.006 0 426.668V85.331z"></path>
                                    <path fill="#f4d900"
                                      d="m83.477 195.132 15.107 46.498h48.894l-39.554 28.739 15.107 46.499-39.554-28.738-39.555 28.738 15.11-46.499-39.554-28.739H68.37z">
                                    </path>
                                  </svg>
                                  <div>Mozambique</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-774" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="MM">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="MM">
                                    <path fill="#6DA544" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#FFDA44" d="M0 85.337h512v113.775H0z"></path>
                                    <path fill="#D80027" d="M0 312.888h512v113.775H0z"></path>
                                    <path fill="#FFF"
                                      d="M384 227.261h-97.783L256 134.265l-30.217 92.997H128l79.108 57.475-30.217 92.998L256 320.925l79.108 56.81-30.217-92.998L384 227.261z">
                                    </path>
                                  </svg>
                                  <div>Myanmar</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-776" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="NA">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="NA">
                                    <path fill="#496E2D" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#0052B4" d="M0 426.663V85.337h512"></path>
                                    <path fill="#FFF" d="M512 152.222V85.337H411.67L0 359.778v66.885h100.33z"></path>
                                    <path fill="#A2001D"
                                      d="M512 85.337v40.125L60.193 426.663H0v-40.125L451.807 85.337z">
                                    </path>
                                    <path fill="#FFDA44"
                                      d="m187.737 189.212-22.741 10.696 12.11 22.024-24.693-4.724-3.129 24.945-17.199-18.347-17.2 18.347-3.129-24.945-24.693 4.723 12.109-22.023-22.739-10.696 22.74-10.697-12.11-22.022 24.693 4.722 3.13-24.944 17.199 18.347 17.2-18.347 3.128 24.944 24.693-4.722-12.108 22.024z">
                                    </path>
                                  </svg>
                                  <div>Namibia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-778" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="NR">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="NR">
                                    <path fill="#0052B4" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#FFDA44" d="M0 239.994h512v32H0z"></path>
                                    <path fill="#FFF"
                                      d="m174.802 341.329-19.124 8.996 10.184 18.521-20.767-3.973-2.631 20.978L128 370.422l-14.465 15.429-2.63-20.978-20.767 3.973 10.183-18.521-19.123-8.996 19.124-8.995-10.184-18.52 20.766 3.971 2.632-20.978L128 312.236l14.465-15.429 2.63 20.978 20.767-3.971-10.183 18.521z">
                                    </path>
                                  </svg>
                                  <div>Nauru</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-780" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="NP">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="NP">
                                    <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#0052B4" d="M0 426.663V85.337l280.419 174.75H87.61l183.576 166.576z">
                                    </path>
                                    <path fill="#D80027"
                                      d="M244.769 249.888 10.199 103.71v312.754h234.57L61.193 249.888z">
                                    </path>
                                    <g fill="#FFF">
                                      <path
                                        d="m98.003 324.433-14.589-6.863 7.77-14.13-15.844 3.03-2.008-16.005-11.035 11.772-11.036-11.772-2.008 16.005-15.843-3.031 7.77 14.131-14.591 6.863 14.591 6.862-7.77 14.13 15.844-3.029 2.007 16.004 11.036-11.772L73.332 358.4l2.008-16.004 15.843 3.03-7.769-14.13zm-9.735-132.771-10.612-4.991 5.651-10.278-11.523 2.205-1.461-11.641-8.026 8.561-8.026-8.561-1.46 11.641-11.525-2.205 5.652 10.278-10.613 4.991 25.972 5.194z">
                                      </path>
                                      <path
                                        d="M93.462 191.662c0 17.212-13.953 31.165-31.165 31.165s-31.165-13.953-31.165-31.165">
                                      </path>
                                    </g>
                                  </svg>
                                  <div>Nepal</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-782" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="NL">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.5 513 342" class="flag" code="NL">
                                    <path fill="#FFF" d="M0 85.5h513v342H0z"></path>
                                    <path fill="#cd1f2a" d="M0 85.5h513v114H0z"></path>
                                    <path fill="#1d4185" d="M0 312h513v114H0z"></path>
                                  </svg>
                                  <div>Netherlands</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-784" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="AN">
                                <div class="CountrySelector_item__vm917">
                                  <div></div>
                                  <div>Netherlands Antilles</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-786" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="NC">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 640 426.7" class="flag" code="NC">
                                    <path fill="#009543" d="M0 293h640v133.7H0V293z"></path>
                                    <path fill="#ED4135" d="M0 132h640v161.3H0V132z"></path>
                                    <path fill="#0035AD" d="M0 0h640v133.3H0V0z"></path>
                                    <circle fill="#FAE600" stroke="#000" stroke-width="5.3" cx="240" cy="213.3"
                                      r="157.3">
                                    </circle>
                                    <path
                                      d="m307.9 354.5-31.8 12-36.1 4.2-37.8-2.4-35.9-15.5s28.6-29.3 40.7-33.5c8.6-3 22.4-3.7 22.4-3.7V122l-.3-66H246l-.5 67.5v191.7s15.3 1.2 22.1 4.1c11.3 4.9 40.3 35.2 40.3 35.2z">
                                    </path>
                                    <path d="m212.727 102.375 42.955-21.418 5.577 11.187-42.955 21.417z"></path>
                                    <ellipse cx="237.8" cy="280.5" rx="16.8" ry="26.5"></ellipse>
                                    <circle cx="237.4" cy="143.4" r="20.9"></circle>
                                    <ellipse cx="238.4" cy="211.1" rx="19.9" ry="12.1"></ellipse>
                                    <path d="M213.8 177h47v10h-47zm0 57h47v10h-47z"></path>
                                  </svg>
                                  <div>New Caledonia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-788" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="NZ">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="NZ">
                                    <path fill="#0052B4" d="M0 85.334h512v341.337H0z"></path>
                                    <path
                                      d="m425.301 233.745 3.388 10.428h10.963l-8.87 6.444 3.388 10.427-8.869-6.444-8.871 6.444 3.388-10.427-8.87-6.444h10.963zm-39.194 75.072 5.083 15.642h16.445l-13.305 9.667 5.082 15.64-13.305-9.667-13.305 9.667 5.083-15.64-13.305-9.667h16.445zm1.481-122.846 4.236 13.036h13.704l-11.088 8.054 4.235 13.034-11.087-8.056-11.088 8.056 4.235-13.034-11.087-8.054h13.704zm-37.712 47.32 5.082 15.641h16.446l-13.306 9.666 5.084 15.641-13.306-9.666-13.305 9.666 5.082-15.641-13.305-9.666h16.445z"
                                      fill="#D80027"></path>
                                    <path fill="#FFF"
                                      d="M256.003 85.329v30.564l-45.178 25.088h45.178v59.359H196.89l59.113 32.846v22.806h-26.69l-73.484-40.826v40.826h-55.652v-48.573l-87.429 48.573H.003v-30.553l45.168-25.099H.003v-59.359h59.103L.003 108.147V85.329h26.68l73.494 40.838V85.329h55.652v48.573l87.43-48.573z">
                                    </path>
                                    <path fill="#D80027"
                                      d="M144 85.33h-32v69.334H0v32h112v69.334h32v-69.334h112v-32H144z">
                                    </path>
                                    <path fill="#0052B4" d="M155.826 200.344 256 255.998v-15.739l-71.847-39.915z">
                                    </path>
                                    <path fill="#FFF" d="M155.826 200.344 256 255.998v-15.739l-71.847-39.915z"></path>
                                    <path
                                      d="M155.826 200.344 256 255.998v-15.739l-71.847-39.915zm-83.98 0L0 240.259v15.739l100.174-55.654z"
                                      fill="#D80027"></path>
                                    <path fill="#0052B4" d="M100.174 140.983 0 85.33v15.738l71.847 39.915z"></path>
                                    <path fill="#FFF" d="M100.174 140.983 0 85.33v15.738l71.847 39.915z"></path>
                                    <path
                                      d="M100.174 140.983 0 85.33v15.738l71.847 39.915zm83.98 0L256 101.068V85.33l-100.174 55.653z"
                                      fill="#D80027"></path>
                                  </svg>
                                  <div>New Zealand</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-790" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="NI">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="NI">
                                    <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                    <path d="M0 85.337h512v113.775H0zm0 227.551h512v113.775H0z" fill="#338AF3"></path>
                                    <path fill="#FFDA44"
                                      d="M256 214.447c-22.949 0-41.553 18.603-41.553 41.553S233.05 297.553 256 297.553c22.949 0 41.553-18.603 41.553-41.553S278.949 214.447 256 214.447zm0 65.298c-13.114 0-23.745-10.631-23.745-23.745s10.631-23.745 23.745-23.745 23.745 10.631 23.745 23.745-10.631 23.745-23.745 23.745z">
                                    </path>
                                    <path fill="#0052B4"
                                      d="M276.563 261.936 256 256l-20.563 5.936-6.855 11.873h54.836z">
                                    </path>
                                    <path fill="#338AF3" d="m256 226.32-13.709 23.744L256 256l13.709-5.936z"></path>
                                    <path fill="#6DA544" d="M235.437 261.936h41.126l-6.854-11.872h-27.418z"></path>
                                  </svg>
                                  <div>Nicaragua</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-792" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="NE">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="NE">
                                    <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#e05206" d="M0 85.337h512v113.775H0z"></path>
                                    <path fill="#0db02b" d="M0 312.888h512v113.775H0z"></path>
                                    <circle fill="#e05206" cx="256" cy="256" r="32"></circle>
                                  </svg>
                                  <div>Niger</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item rs-dropdown-item-active" id="menuitem-794" role="menuitem"
                                aria-disabled="false" tabindex="-1" data-event-key="NG" aria-checked="true">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.5 513 342" class="flag" code="NG">
                                    <path fill="#FFF" d="M0 85.5h513v342H0z"></path>
                                    <path d="M0 85.5h171v342H0zm342 0h171v342H342z" fill="#007b23"></path>
                                  </svg>
                                  <div>Nigeria</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-796" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="NU">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="NU">
                                    <path fill="#FFDA44" d="M0 85.334h512v341.337H0z"></path>
                                    <path fill="#FFF" d="M0 85.334h256v170.663H0z"></path>
                                    <g fill="#D80027">
                                      <path d="M144 85.33h-32v69.333H0v32h112v69.334h32v-69.334h112v-32H144z"></path>
                                      <path d="M0 85.329v15.083l57.377 38.251H80z"></path>
                                    </g>
                                    <path d="M0 107.951v30.712h46.069zm96-22.62v48.913L22.628 85.331z" fill="#2E52B2">
                                    </path>
                                    <path fill="#D80027" d="M256 85.329v15.083l-57.377 38.251H176z"></path>
                                    <path d="M256 107.951v30.712h-46.069zm-96-22.62v48.913l73.372-48.913z"
                                      fill="#2E52B2">
                                    </path>
                                    <path fill="#D80027" d="M0 85.329v15.083l57.377 38.251H80z"></path>
                                    <path d="M0 107.951v30.712h46.069zm96-22.62v48.913L22.628 85.331z" fill="#2E52B2">
                                    </path>
                                    <path fill="#D80027" d="M256 85.329v15.083l-57.377 38.251H176z"></path>
                                    <path d="M256 107.951v30.712h-46.069zm-96-22.62v48.913l73.372-48.913z"
                                      fill="#2E52B2">
                                    </path>
                                    <path fill="#D80027" d="M0 255.997v-15.082l57.377-38.252H80z"></path>
                                    <path d="M0 233.376v-30.713h46.069zm96 22.618v-48.912l-73.372 48.912z"
                                      fill="#2E52B2">
                                    </path>
                                    <path fill="#D80027" d="M256 255.997v-15.082l-57.377-38.252H176z"></path>
                                    <g fill="#2E52B2">
                                      <path d="M256 233.376v-30.713h-46.069zm-96 22.618v-48.912l73.372 48.912z"></path>
                                      <circle cx="128" cy="170.66" r="22.627"></circle>
                                    </g>
                                    <path
                                      d="m128 154.663 3.97 12.222h12.854l-10.398 7.556 3.971 12.222L128 179.109l-10.398 7.554 3.972-12.222-10.398-7.556h12.853zm0 65.14 2.364 7.278h7.653l-6.19 4.498 2.364 7.278-6.191-4.498-6.191 4.498 2.364-7.278-6.19-4.498h7.652zm0-117.334 2.364 7.278h7.653l-6.19 4.498 2.364 7.278-6.191-4.498-6.191 4.498 2.364-7.278-6.19-4.498h7.652zm69.931 58.667 2.365 7.277h7.653l-6.192 4.499 2.365 7.279-6.191-4.498-6.191 4.498 2.365-7.279-6.191-4.499h7.652zm-139.862 0 2.364 7.277h7.653l-6.191 4.499 2.364 7.279-6.19-4.498-6.191 4.498 2.365-7.279-6.192-4.499h7.653z"
                                      fill="#FFDA44"></path>
                                  </svg>
                                  <div>Niue</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-798" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="KP">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="KP">
                                    <path fill="#91DC5A" d="M0 0h513v342H0z"></path>
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path d="M0 0h513v57.188H0zm0 284.1h513v57.177H0z" fill="#0052B4"></path>
                                    <path fill="#D80027" d="M0 79.9h513v181.582H0z"></path>
                                    <circle fill="#FFF" cx="190.33" cy="171" r="65.668"></circle>
                                    <path fill="#D80027"
                                      d="m190.3 105 14.8 45.3h47.7l-38.6 28.1 14.8 45.5-38.7-28.2-38.6 28.1 14.8-45.4-38.6-28.1h47.7z">
                                    </path>
                                  </svg>
                                  <div>North Korea</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-800" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="MP">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 750 500" class="flag" code="MP">
                                    <path fill="#0071BC" d="M0 0h750v500H0V0z"></path>
                                    <g fill="#FFF" stroke="#000" stroke-width="1.9">
                                      <circle cx="375" cy="245" r="225" fill="#fff"></circle>
                                      <circle cx="375" cy="245" r="165" fill="#0071BC"></circle>
                                    </g>
                                    <g stroke="#000">
                                      <path fill="#8C8A8C" stroke-width="1.9"
                                        d="M444.7 450c.7 11-7.8 20-18.8 20H323.6c-11 0-19.5-9-19-20l16.7-325c.6-11 10-20 21-20h61.4c11 0 20.5 9 21.2 20l19.8 325z">
                                      </path>
                                      <path fill="#FFF" stroke-width="2" stroke-linejoin="round"
                                        d="m373 114 30 93h97l-78 56 29 92-78-56-78 57 30-93-79-57h97l30-92z"></path>
                                    </g>
                                  </svg>
                                  <div>Northern Mariana Islands</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-802" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="NO">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="NO">
                                    <path fill="#D80027" d="M0 85.334h512v341.337H0z"></path>
                                    <path fill="#FFF"
                                      d="M512 295.883H202.195v130.783h-79.76V295.883H0v-79.772h122.435V85.329h79.76v130.782H512v61.218z">
                                    </path>
                                    <path fill="#2E52B2"
                                      d="M512 234.666v42.663H183.652v149.337h-42.674V277.329H0v-42.663h140.978V85.329h42.674v149.337z">
                                    </path>
                                  </svg>
                                  <div>Norway</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-804" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="OM">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="OM">
                                    <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                    <path fill="#FFF" d="M138 0h377v114H138z"></path>
                                    <path fill="#4A7C3A" d="M138 230h377v114H138z"></path>
                                    <g fill="none" stroke="#FFF" stroke-width="10" stroke-miterlimit="2">
                                      <path d="M40.3 35.2s37.1 48 50.8 54.5c13.7 6.5 17.1 5.7 17.1 5.7"></path>
                                      <path
                                        d="M100 35.2S62.9 80.6 53.3 87.6c-9.6 7-18.7 7.8-18.7 7.8m17.1-30.1h37.9M70.7 35.2v30.1">
                                      </path>
                                    </g>
                                  </svg>
                                  <div>Oman</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-806" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="PK">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="PK">
                                    <g fill="#FFF">
                                      <path
                                        d="m393.508 170.516 17.512 18.875 23.363-10.821-12.541 22.487 17.513 18.876-25.263-4.978-12.539 22.488-3.073-25.564-25.263-4.978 23.363-10.82z">
                                      </path>
                                      <path d="M0 85.343h512v341.326H0z"></path>
                                    </g>
                                    <path fill="#01411c" d="M128 85.331h384v341.337H128z"></path>
                                    <path
                                      d="M361.909 298.793c-31.037 22.426-74.378 15.446-96.804-15.592-22.427-31.038-15.446-74.379 15.593-96.804 9.677-6.992 20.55-11.125 31.613-12.563-21.283-3.183-43.777 1.613-62.598 15.211-38.2 27.602-46.792 80.944-19.191 119.145 27.601 38.199 80.944 46.792 119.145 19.189 18.82-13.598 30.436-33.448 34.096-54.655-4.839 10.05-12.176 19.076-21.854 26.069zm-1.329-125.904 17.484 18.842 23.322-10.802-12.519 22.447 17.483 18.844-25.219-4.968-12.519 22.45-3.067-25.521-25.22-4.969 23.323-10.802z"
                                      fill="#FFF"></path>
                                  </svg>
                                  <div>Pakistan</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-808" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="PW">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="PW">
                                    <path fill="#338AF3" d="M0 85.331h512v341.337H0z"></path>
                                    <circle fill="#FFDA44" cx="218.902" cy="255.994" r="74.207"></circle>
                                  </svg>
                                  <div>Palau</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-810" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="PS">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="PS">
                                    <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                    <path d="M0 85.337h512v113.775H0z"></path>
                                    <path fill="#268024" d="M0 312.888h512v113.775H0z"></path>
                                    <path fill="#e4312b" d="M256 256.006 0 426.668V85.331z"></path>
                                  </svg>
                                  <div>Palestine</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-812" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="PA">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="PA">
                                    <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#0052B4" d="M256 256v170.663H0V256h256z"></path>
                                    <path fill="#D80027" d="M512 85.337V256H256V85.337h256z"></path>
                                    <path fill="#0052B4"
                                      d="m128 123.034 11.824 36.389h38.263l-30.955 22.491 11.823 36.389L128 195.813l-30.955 22.49 11.823-36.389-30.955-22.491h38.263z">
                                    </path>
                                    <path fill="#D80027"
                                      d="m384 293.697 11.824 36.389h38.263l-30.955 22.491 11.823 36.389L384 366.476l-30.955 22.49 11.823-36.389-30.955-22.491h38.263z">
                                    </path>
                                  </svg>
                                  <div>Panama</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-814" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="PG">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="PG">
                                    <path d="M0 85.333h512V426.67H0z"></path>
                                    <path fill="#A2001D" d="M0 85.33h512v341.332"></path>
                                    <path
                                      d="m204.631 326.488 2.762 8.504h8.941l-7.233 5.255 2.763 8.502-7.233-5.254-7.233 5.254 2.762-8.502-7.233-5.255h8.94zm-22.834-81.622 4.605 14.172h14.901l-12.056 8.757 4.605 14.172-12.055-8.759-12.055 8.759 4.606-14.172-12.056-8.757h14.901zm0 103.883 4.604 14.173h14.902l-12.057 8.757 4.606 14.173-12.055-8.759-12.055 8.759 4.604-14.173-12.054-8.757h14.899zm43.566-66.782 4.606 14.172h14.901l-12.056 8.758 4.605 14.172-12.056-8.759-12.054 8.759 4.606-14.172-12.056-8.758h14.901zm-87.133 0 4.606 14.172h14.899l-12.054 8.758 4.603 14.172-12.054-8.759-12.055 8.759 4.605-14.172-12.055-8.758h14.9z"
                                      fill="#FFF"></path>
                                    <path fill="#FFDA44"
                                      d="M376.526 204.163c-7.628-7.628-17.538-12.133-28.189-12.908l31.88-24.795c-12.698-12.698-29.714-18.431-46.319-17.218a44.31 44.31 0 0 0-11.396-19.511l-12.593 25.186a18.47 18.47 0 0 0-3.148-4.197c-7.245-7.245-18.991-7.244-26.234 0s-7.245 18.99 0 26.234a18.536 18.536 0 0 0 4.197 3.148l-25.186 12.593a44.303 44.303 0 0 0 19.519 11.399c-1.217 16.606 4.511 33.619 17.209 46.317L324.12 214.6a11.053 11.053 0 0 1 7.807-3.202c2.973 0 5.768 1.158 7.87 3.26a11.055 11.055 0 0 1 3.26 7.87c0 2.974-1.158 5.768-3.26 7.87l10.494 10.494c4.905-4.905 7.607-11.428 7.607-18.364 0-5.675-1.81-11.071-5.153-15.534a29.492 29.492 0 0 1 13.288 7.662c11.573 11.572 11.573 30.403 0 41.975l10.494 10.494c8.409-8.409 13.039-19.59 13.039-31.481-.001-11.892-4.632-23.072-13.04-31.481z">
                                    </path>
                                  </svg>
                                  <div>Papua New Guinea</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-816" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="PY">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="PY">
                                    <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#D80027" d="M0 85.337h512v113.775H0z"></path>
                                    <path fill="#0052B4" d="M0 312.888h512v113.775H0z"></path>
                                    <path fill="#6DA544"
                                      d="m289.579 216.738-12.592 12.592c5.37 5.372 8.693 12.792 8.693 20.988 0 16.392-13.289 29.68-29.68 29.68-16.392 0-29.68-13.289-29.68-29.68 0-8.195 3.322-15.616 8.693-20.988l-12.592-12.592c-8.594 8.594-13.91 20.466-13.91 33.579 0 26.228 21.261 47.489 47.489 47.489s47.489-21.261 47.489-47.489c0-13.112-5.316-24.985-13.91-33.579z">
                                    </path>
                                    <path fill="#FFDA44"
                                      d="m256 232.51 4.421 13.605h14.304l-11.573 8.408 4.421 13.604L256 259.719l-11.573 8.408 4.421-13.604-11.573-8.408h14.304z">
                                    </path>
                                  </svg>
                                  <div>Paraguay</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-818" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="PE">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="PE">
                                    <path fill="#FFF" d="M0 85.331h512v341.326H0z"></path>
                                    <path d="M0 85.331h170.663v341.337H0zm341.337 0H512v341.337H341.337z"
                                      fill="#D80027">
                                    </path>
                                  </svg>
                                  <div>Peru</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-820" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="PH">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="PH">
                                    <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#0052B4" d="M512 85.337V256H256L0 85.337z"></path>
                                    <path fill="#D80027" d="M512 256v170.663H0L256 256z"></path>
                                    <path
                                      d="m161.908 256-27.288-12.835 14.532-26.428-29.632 5.668-3.755-29.933-20.64 22.015-20.639-22.015-3.755 29.933-29.631-5.669 14.531 26.428L28.343 256l27.288 12.835L41.1 295.263l29.633-5.668 3.753 29.933 20.639-22.015 20.64 22.015 3.755-29.933 29.631 5.669-14.532-26.427zM21.789 117.607l9.081 12.696 14.879-4.714-9.268 12.56 9.081 12.694-14.809-4.932-9.268 12.559.117-15.608-14.809-4.934 14.88-4.712zm0 235.923 9.081 12.696 14.879-4.714-9.268 12.56 9.081 12.695-14.809-4.933-9.268 12.558.117-15.607-14.809-4.934 14.88-4.712zm188.606-117.961-9.081 12.695-14.879-4.713 9.268 12.559-9.081 12.696 14.809-4.933 9.268 12.558-.117-15.607 14.809-4.934-14.88-4.713z"
                                      fill="#FFDA44"></path>
                                  </svg>
                                  <div>Philippines</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-822" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="PN">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="PN">
                                    <path fill="#0052B4" d="M0 85.333h512V426.67H0z"></path>
                                    <path fill="#ACABB1"
                                      d="M400.696 219.822 384 225.387l-16.696-5.565-5.565-13.913 5.565-13.913h33.392l-5.566 13.913z">
                                    </path>
                                    <path fill="#338AF3"
                                      d="M345.043 219.822v61.217c0 29.821 38.957 38.957 38.957 38.957s38.957-9.137 38.957-38.957v-61.217h-77.914z">
                                    </path>
                                    <path fill="#6DA544"
                                      d="M348.555 295.541C358.131 313.927 384 319.996 384 319.996s25.869-6.069 35.445-24.455L384 236.518l-35.445 59.023z">
                                    </path>
                                    <path fill="#FFDA44"
                                      d="M422.957 280.421 384 219.822l-38.957 60.599v.618c0 5.518 1.337 10.328 3.512 14.503L384 240.405l35.445 55.137c2.175-4.175 3.512-8.983 3.512-14.503v-.618z">
                                    </path>
                                    <path fill="#FFF"
                                      d="M256 85.333v30.553l-45.167 25.099H256v59.359h-59.103L256 233.179v22.817h-26.68l-73.494-40.826v40.826h-55.652v-48.573l-87.43 48.573H0v-30.554l45.167-25.098H0v-59.359h59.103L0 108.139V85.333h26.68l73.494 40.825V85.333h55.652v48.572l87.43-48.572z">
                                    </path>
                                    <path fill="#D80027"
                                      d="M144 85.33h-32v69.332H0v32h112v69.334h32v-69.334h112v-32H144z">
                                    </path>
                                    <path fill="#0052B4" d="M155.826 200.344 256 255.996v-15.737l-71.847-39.915z">
                                    </path>
                                    <path fill="#FFF" d="M155.826 200.344 256 255.996v-15.737l-71.847-39.915z"></path>
                                    <path
                                      d="M155.826 200.344 256 255.996v-15.737l-71.847-39.915zm-83.98 0L0 240.259v15.737l100.174-55.652z"
                                      fill="#D80027"></path>
                                    <path fill="#0052B4" d="M100.174 140.982 0 85.33v15.737l71.847 39.915z"></path>
                                    <path fill="#FFF" d="M100.174 140.982 0 85.33v15.737l71.847 39.915z"></path>
                                    <path
                                      d="M100.174 140.982 0 85.33v15.737l71.847 39.915zm83.98 0L256 101.067V85.33l-100.174 55.652z"
                                      fill="#D80027"></path>
                                  </svg>
                                  <div>Pitcairn</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-824" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="PL">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="PL">
                                    <g fill="#FFF">
                                      <path d="M0 85.337h512v341.326H0z"></path>
                                      <path d="M0 85.337h512V256H0z"></path>
                                    </g>
                                    <path fill="#D80027" d="M0 256h512v170.663H0z"></path>
                                  </svg>
                                  <div>Poland</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-826" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="PT">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="PT">
                                    <path fill="#D80027" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#6DA544" d="M196.641 85.337v341.326H0V85.337z"></path>
                                    <circle fill="#FFDA44" cx="196.641" cy="256" r="64"></circle>
                                    <path fill="#D80027"
                                      d="M160.638 224v40.001c0 19.882 16.118 36 36 36s36-16.118 36-36V224h-72z"></path>
                                    <path fill="#FFF"
                                      d="M196.638 276c-6.617 0-12-5.383-12-12v-16h24.001v16c-.001 6.616-5.385 12-12.001 12z">
                                    </path>
                                  </svg>
                                  <div>Portugal</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-828" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="PR">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="PR">
                                    <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                    <path d="M0 85.337h512V153.6H0zm0 136.526h512v68.263H0zM0 358.4h512v68.263H0z"
                                      fill="#D80027"></path>
                                    <path fill="#0052B4" d="M256 256.006 0 426.668V85.331z"></path>
                                    <path fill="#FFF"
                                      d="m83.477 195.132 15.107 46.498h48.894l-39.554 28.739 15.107 46.499-39.554-28.738-39.555 28.738 15.11-46.499-39.554-28.739H68.37z">
                                    </path>
                                  </svg>
                                  <div>Puerto Rico</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-830" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="QA">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="QA">
                                    <path fill="#751A46" d="M0 0h512v342H0z"></path>
                                    <path fill="#FFF"
                                      d="M0 0v342h150.3l37.7-19.6-37.7-18.9 37.7-19-37.7-18.9 37.7-19-37.7-19 37.7-18.9-37.7-19 37.7-19-37.7-18.9 37.7-19-37.7-18.9 37.7-19-37.7-19L188 57l-37.7-19L188 19.1 150.3 0z">
                                    </path>
                                  </svg>
                                  <div>Qatar</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-832" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="CG">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 513 342" class="flag" code="CG">
                                    <path fill="#da1a35" d="M0 85.331h513v342H0z"></path>
                                    <path fill="#009543" d="M443.726 85.331 102.4 426.657H0V85.331z"></path>
                                    <path fill="#fbde4a" d="M500.124 85.331 158.798 426.657H11.876L353.202 85.331z">
                                    </path>
                                  </svg>
                                  <div>Republic of the Congo</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-834" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="RE">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 26.666 640 426.666" class="flag" code="RE">
                                    <g fill-rule="evenodd" stroke-width="1pt">
                                      <path fill="#fff" d="M0 0h640v480H0z"></path>
                                      <path fill="#00267f" d="M0 0h213.3v480H0z"></path>
                                      <path fill="#f31830" d="M426.7 0H640v480H426.7z"></path>
                                    </g>
                                  </svg>
                                  <div>Reunion</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-836" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="RO">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="RO">
                                    <path fill="#FFDA44" d="M0 85.331h512v341.326H0z"></path>
                                    <path fill="#0052B4" d="M0 85.331h170.663v341.337H0z"></path>
                                    <path fill="#D80027" d="M341.337 85.331H512v341.337H341.337z"></path>
                                  </svg>
                                  <div>Romania</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-838" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="RU">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="RU">
                                    <path fill="#FFF" d="M0 85.33v341.332h512V85.33z"></path>
                                    <path fill="#0052B4" d="M0 85.333h512V426.67H0z"></path>
                                    <path fill="#FFF" d="M0 85.333h512v113.775H0z"></path>
                                    <path fill="#D80027" d="M0 312.884h512v113.775H0z"></path>
                                  </svg>
                                  <div>Russia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-840" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="RW">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="RW">
                                    <path fill="#338AF3" d="M0 85.331h512v341.337H0z"></path>
                                    <path fill="#FFDA44" d="M0 255.994h512v81.619H0z"></path>
                                    <path fill="#496E2D" d="M0 337.614h512v89.043H0z"></path>
                                    <path fill="#FFDA44"
                                      d="m278.261 185.209 20.844 9.804-11.099 20.186 22.632-4.33 2.868 22.865 15.765-16.816 15.766 16.816 2.867-22.865 22.633 4.33-11.099-20.186 20.843-9.804-20.844-9.805 11.1-20.185-22.633 4.329-2.868-22.864-15.765 16.816-15.766-16.816-2.867 22.864-22.634-4.329 11.1 20.187z">
                                    </path>
                                  </svg>
                                  <div>Rwanda</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-842" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="BL">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="BL">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#E6BC00"
                                      d="M157.31 199.76s-9.04 43.93-19.31 40.39c-10.62-3.54-17.53-18.76-17.53-18.76l-14.52 21.24s38.18 8.48 41.01 5.47c1.22-1.14 8.21-15.1 10.34-26.05v-22.29zm-56.13 60.57s-2.48 20.18-1.06 22.66c1.24 2.3 39.48 11.33 39.48 11.33s-24.96 16.46-29.74 20.54L91.8 284.94l-.71-24.61h10.09zm11.33-165.69s39.65 41.6 40.36 45.5c.71 3.72-4.25 3.19-4.25 3.19s-44.79-37.53-49.92-41.07c-5.31-3.55 13.81-7.62 13.81-7.62z">
                                    </path>
                                    <path fill="#ADADAD"
                                      d="M99.41 104.73s16.99-.71 16.64-11.51c-.35-10.62-11.15-14.87-19.12-12.39-7.97 2.3-23.01 13.45-13.63 35.05 9.38 21.42 23.37 29.39 26.2 47.8 0 0-5.46 9.86-19.12.35-16.9-11.77-6.2-38.24-10.44-44.96-4.25-7.08-40.95-38.92-40.95-38.92s-30.24 39.37-18 74.92c16.95 49.21 51.74 31.98 64.61 36.76 0 0-42.13 61.96-49.57 67.09 0 0 24.08 8.32 47.8-18.76 0 0 5.84 9.74 7.08 20.18h10.27c4.78-26.2 51.51-64.26 49.92-82.32-1.77-21.25-49.21-49.39-51.69-73.29z">
                                    </path>
                                    <path fill="#E6BC00"
                                      d="M359.17 201.27s8.96 42.43 19.23 38.89c10.62-3.54 17.53-18.76 17.53-18.76l14.52 21.24s-37 8.48-39.83 5.47c-1.21-1.14-9.32-13.79-11.52-24.66l.07-22.18zm56.05 59.06s2.48 20.18 1.06 22.66c-1.24 2.3-39.48 11.33-39.48 11.33s24.96 16.46 29.74 20.54l18.06-29.92.71-24.61h-10.09zM403.89 94.64s-39.65 41.6-40.36 45.5c-.71 3.72 4.25 3.19 4.25 3.19s44.79-37.53 49.92-41.07c5.14-3.55-13.81-7.62-13.81-7.62z">
                                    </path>
                                    <path fill="#125ECC"
                                      d="M157.31 87.06H359.1v145.46c0 16.06-9.69 21.39-21.91 31.85l-45.92 39.41c-18.25 15.62-47.91 15.57-66.07 0l-46.01-39.43c-12.08-10.35-21.88-15.71-21.88-31.82V87.06z">
                                    </path>
                                    <path fill="#FFE600"
                                      d="M200.55 147.71c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41zm57.65-3c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41zm57.65 3c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41zM214.96 274.43c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41c.01 7.96-6.45 14.41-14.41 14.41zm43.24 14.42c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41c0 7.95-6.45 14.41-14.41 14.41zm43.24-14.42c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41z">
                                    </path>
                                    <path fill="#D60537" d="M157.31 175.36H359.1v57.65H157.31v-57.65z"></path>
                                    <path fill="#EACE00"
                                      d="M142.9 43.82s57.65-14.41 115.31-14.41 115.31 14.41 115.31 14.41l-14.41 57.65s-50.45-14.41-100.89-14.41-100.89 14.41-100.89 14.41L142.9 43.82z">
                                    </path>
                                    <path fill="#7A6920"
                                      d="M258.2 72.65c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41zm57.65 5c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41zm-115.3 0c-7.96 0-14.41-6.45-14.41-14.41s6.45-14.41 14.41-14.41 14.41 6.45 14.41 14.41-6.45 14.41-14.41 14.41z">
                                    </path>
                                    <path fill="#ADADAD"
                                      d="M365.08 178.02c-1.59 18.06 45.14 56.12 49.92 82.32h10.27c1.24-10.44 7.08-20.18 7.08-20.18 23.72 27.09 47.8 18.76 47.8 18.76-7.44-5.13-49.57-67.09-49.57-67.09 12.88-4.78 47.67 12.45 64.61-36.76 12.24-35.55-18-74.92-18-74.92s-36.7 31.84-40.95 38.92c-4.25 6.73 6.46 33.2-10.44 44.96-13.66 9.51-19.12-.35-19.12-.35 2.83-18.41 16.82-26.38 26.2-47.8 9.38-21.6-5.66-32.75-13.63-35.05-7.97-2.48-18.76 1.77-19.12 12.39-.35 10.8 16.64 11.51 16.64 11.51-2.48 23.9-49.92 52.04-51.69 73.29z">
                                    </path>
                                    <circle fill="#FFF" cx="258.2" cy="204.19" r="16.93"></circle>
                                  </svg>
                                  <div>Saint Barthelemy</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-844" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="SH">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 341.3" class="flag" code="SH">
                                    <path fill="#0052B4" d="M0 0h512v341.3H0z"></path>
                                    <path fill="#FFF"
                                      d="M256 0v117.4h-46.1l46.1 30.7v22.6h-22.6L160 121.8v48.9H96v-48.9l-73.4 48.9H0v-22.6l46.1-30.7H0v-64h46.1L0 22.7V0h22.6L96 48.9V0h64v48.9L233.4 0z">
                                    </path>
                                    <g fill="#D80027">
                                      <path d="M144 0h-32v69.4H0v32h112v69.3h32v-69.3h112v-32H144z"></path>
                                      <path d="M0 0v15.1l57.4 38.3H80zm256 0v15.1l-57.4 38.3H176z"></path>
                                    </g>
                                    <path fill="#2E52B2" d="M256 22.7v30.7h-46.1z"></path>
                                    <path d="M0 0v15.1l57.4 38.3H80zm256 0v15.1l-57.4 38.3H176z" fill="#D80027"></path>
                                    <path fill="#2E52B2" d="M256 22.7v30.7h-46.1z"></path>
                                    <path d="M0 170.7v-15.1l57.4-38.2H80zm256 0v-15.1l-57.4-38.2H176z" fill="#D80027">
                                    </path>
                                    <path fill="#29DBFF"
                                      d="M449 139.7c-.1 44.4-7.2 92.1-65 114.9-57.8-22.8-64.9-70.5-65-114.9h130z">
                                    </path>
                                    <path fill="#ffda44"
                                      d="M449 139.7c0-16.7-.9-32.9-.5-47.1C426.9 83 398.4 81 383.9 81s-42.9 2-64.6 11.6c.4 14.2-.5 30.4-.5 47.1H449z">
                                    </path>
                                    <path fill="#BF521B"
                                      d="m369.5 204.5.3 10.3-12.8.2 4.9 13.2h-17.3c-18-20.2-23.4-42.4-24.9-68.1l9.1-9.7 8.3 14.3 10.8-12.8 7 7.8.8 15.7 13.8 29.1z">
                                    </path>
                                    <path fill="#474747"
                                      d="m436.6 192.5-8.6 18.3h-47l-29.2-19.5 25.7 10.5h25.1l3.7-6.5 7.2.2 2-3z"></path>
                                  </svg>
                                  <div>Saint Helena</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-846" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="KN">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="KN">
                                    <path fill="#D80027" d="M0 0h513v342H0z"></path>
                                    <path fill="#6DA544" d="M512 0H0v342"></path>
                                    <path fill="#FFDA44" d="M307.7 0 0 194.5V342h206.9L513 148.5V0z"></path>
                                    <path d="M513 0H385.2L0 249.4V341l126.2 1L513 91.6z"></path>
                                    <path
                                      d="m141.1 187 31.2 24 32.3-22.2-13.1 37 31.1 23.9-39.2-1.1-13.2 37-11.1-37.6-39.2-1.1 32.3-22.2zM310.6 70.8l31.2 23.9 32.3-22.2-13.1 37 31.1 23.9-39.2-1.1-13.2 37-11.1-37.6-39.2-1.1 32.4-22.2z"
                                      fill="#FFF"></path>
                                  </svg>
                                  <div>Saint Kitts and Nevis</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-848" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="LC">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="LC">
                                    <path fill="#55B2FF" d="M0 0h513v342H0z"></path>
                                    <path fill="#F3F3F3" d="M148.5 298.1h216l-108-254.2z"></path>
                                    <path fill="#333" d="m186 272.7 70.5-160.3L327 272.7z"></path>
                                    <path fill="#FFDA44" d="M148.5 298.1h216l-108-101.7z"></path>
                                  </svg>
                                  <div>Saint Lucia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-850" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="MF">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 108 72" class="flag" code="MF">
                                    <path d="M0 0h108v72H0z" fill="#003787"></path>
                                    <path d="M0 0h108L60 48v24H48V48z" fill="#fff"></path>
                                    <circle cx="54" cy="30" r="8" fill="#f9d90f"></circle>
                                    <path d="M44 30h20L54 48z" fill="#fff"></path>
                                    <path d="M54 48 38 33h32z" fill="#cf142b"></path>
                                  </svg>
                                  <div>Saint Martin</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-852" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="PM">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 26.666 640 426.666" class="flag" code="PM">
                                    <g fill-rule="evenodd" stroke-width="1pt">
                                      <path fill="#fff" d="M0 0h640v480H0z"></path>
                                      <path fill="#00267f" d="M0 0h213.3v480H0z"></path>
                                      <path fill="#f31830" d="M426.7 0H640v480H426.7z"></path>
                                    </g>
                                  </svg>
                                  <div>Saint Pierre and Miquelon</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-854" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="VC">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="VC">
                                    <path fill="#FFDA44" d="M0 85.331h512v341.337H0z"></path>
                                    <path fill="#338AF3" d="M0 85.331h170.663v341.337H0z"></path>
                                    <path
                                      d="M341.337 85.331H512v341.337H341.337zM214.261 283.82l-33.393-50.086 33.392-50.087 33.392 50.087zm83.478 0-33.391-50.086 33.391-50.087 33.393 50.087zM256 350.603l-33.391-50.087L256 250.429l33.391 50.087z"
                                      fill="#6DA544"></path>
                                  </svg>
                                  <div>Saint Vincent and the Grenadines</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-856" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="WS">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="WS">
                                    <path fill="#D80027" d="M0 85.331h512v341.337H0z"></path>
                                    <path fill="#0052B4" d="M0 85.331h256v170.663H0z"></path>
                                    <path
                                      d="m165.483 181.79 2.764 8.504h8.939l-7.232 5.254 2.763 8.503-7.234-5.255-7.233 5.255 2.763-8.503-7.233-5.254h8.94zm-44.904-66.783 4.606 14.173h14.9l-12.055 8.757 4.605 14.171-12.056-8.758-12.054 8.758 4.605-14.171-12.056-8.757h14.901zm44.522 14.841 4.606 14.172h14.9l-12.055 8.757 4.604 14.173-12.055-8.76-12.054 8.76 4.604-14.173-12.055-8.757h14.9zm-35.192 59.363 4.606 14.172h14.9l-12.055 8.758 4.604 14.171-12.055-8.759-12.054 8.759 4.604-14.171-12.055-8.758h14.9zm-39.01-37.103 4.605 14.173h14.9l-12.055 8.757 4.604 14.173-12.054-8.76-12.055 8.76 4.604-14.173-12.055-8.757h14.9z"
                                      fill="#FFF"></path>
                                  </svg>
                                  <div>Samoa</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-858" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="SM">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="SM">
                                    <path fill="#338AF3" d="M0 85.34h512v341.326H0z"></path>
                                    <path fill="#FFF" d="M512 85.334v166.69L0 256.175V85.334z"></path>
                                    <path fill="#6DA544"
                                      d="M323.744 203.099 256 270.843l-67.744-67.744a81.156 81.156 0 0 0-13.879 45.483v22.261c0 35.744 23.097 66.193 55.148 77.213-4.277 8.385-3.556 18.848 2.712 26.671l24.258-19.439 24.258 19.439c6.342-7.915 7.011-18.534 2.564-26.968 31.614-11.261 54.308-41.485 54.308-76.916v-22.261a81.174 81.174 0 0 0-13.881-45.483z">
                                    </path>
                                    <path fill="#FFDA44"
                                      d="M256 330.206c-32.732 0-59.362-26.63-59.362-59.362v-22.261c0-32.733 26.63-59.363 59.362-59.363s59.362 26.63 59.362 59.362v22.261c0 32.733-26.63 59.363-59.362 59.363z">
                                    </path>
                                    <path fill="#338AF3"
                                      d="M293.101 270.843v-22.261c0-20.458-16.643-37.101-37.101-37.101s-37.101 16.643-37.101 37.101v22.261L256 278.264l37.101-7.421z">
                                    </path>
                                    <path fill="#6DA544"
                                      d="M218.899 270.843c0 20.458 16.643 37.101 37.101 37.101s37.101-16.643 37.101-37.101h-74.202z">
                                    </path>
                                    <path fill="#FFDA44"
                                      d="M300.522 189.22c0-12.295-9.966-22.261-22.261-22.261a22.173 22.173 0 0 0-14.84 5.672v-13.093h7.421v-14.84h-7.421v-7.421h-14.84v7.421h-7.421v14.84h7.421v13.093a22.177 22.177 0 0 0-14.841-5.672c-12.295 0-22.261 9.966-22.261 22.261 0 6.591 2.867 12.512 7.421 16.589v13.093h74.203v-13.093c4.552-4.077 7.419-9.997 7.419-16.589z">
                                    </path>
                                  </svg>
                                  <div>San Marino</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-860" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="ST">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="ST">
                                    <path fill="#FFDA44" d="M0 85.337h512v341.326H0z"></path>
                                    <path d="M0 85.337h512v113.775H0zm0 227.551h512v113.775H0z" fill="#6DA544"></path>
                                    <path fill="#D80027" d="M256 256.006 0 426.668V85.331z"></path>
                                    <path
                                      d="m302.049 226.318 7.368 22.674h23.842l-19.288 14.016 7.366 22.674-19.288-14.015-19.287 14.015 7.366-22.674-19.288-14.016h23.842zm74.203 0 7.367 22.674h23.842l-19.288 14.016 7.367 22.674-19.288-14.015-19.288 14.015 7.367-22.674-19.288-14.016h23.842z">
                                    </path>
                                  </svg>
                                  <div>Sao Tome and Principe</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-862" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="SA">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="SA">
                                    <path fill="#055e1c" d="M0 85.333h512v341.333H0z"></path>
                                    <g fill="#FFF">
                                      <path
                                        d="M183.548 289.386c0 12.295 9.731 22.261 21.736 22.261h65.208c0 10.244 8.11 18.551 18.114 18.551h21.736c10.004 0 18.114-8.306 18.114-18.551v-22.261H183.548zm146.716-107.595v51.942c0 8.183-6.5 14.84-14.491 14.84v22.261c19.976 0 36.226-16.643 36.226-37.101v-51.942h-21.735zm-155.773 51.943c0 8.183-6.5 14.84-14.491 14.84v22.261c19.976 0 36.226-16.643 36.226-37.101v-51.942H174.49v51.942z">
                                      </path>
                                      <path
                                        d="M297.661 181.788h21.736v51.942h-21.736zm-32.604 29.685c0 2.046-1.625 3.71-3.623 3.71-1.998 0-3.623-1.664-3.623-3.71v-29.682h-21.736v29.682c0 2.046-1.625 3.71-3.623 3.71s-3.623-1.664-3.623-3.71v-29.682h-21.736v29.682c0 14.32 11.376 25.971 25.358 25.971 5.385 0 10.38-1.733 14.491-4.677 4.11 2.944 9.106 4.677 14.491 4.677 1.084 0 2.15-.078 3.2-.215-1.54 6.499-7.255 11.345-14.068 11.345v22.261c19.976 0 36.226-16.643 36.226-37.101v-51.943h-21.736l.002 29.682z">
                                      </path>
                                      <path d="M207.093 248.57h32.601v22.261h-32.601z"></path>
                                    </g>
                                  </svg>
                                  <div>Saudi Arabia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-864" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="SN">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="SN">
                                    <path fill="#FFDA44" d="M0 85.331h512v341.326H0z"></path>
                                    <path fill="#D80027" d="M330.207 85.331H512v341.337H330.207z"></path>
                                    <path
                                      d="M0 85.331h181.793v341.337H0zm255.999 111.301 14.733 45.347h47.685l-38.576 28.029 14.734 45.348-38.576-28.026-38.577 28.026 14.737-45.348-38.576-28.029h47.681z"
                                      fill="#496E2D"></path>
                                  </svg>
                                  <div>Senegal</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-866" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="RS">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="RS">
                                    <path fill="#0052B4" d="M0 85.331h512v341.337H0z"></path>
                                    <path fill="#D80027" d="M0 85.331h512v113.775H0z"></path>
                                    <path fill="#FFF" d="M0 312.882h512v113.775H0z"></path>
                                    <path fill="#D80027"
                                      d="M129.468 181.793v85.136c0 48.429 63.267 63.267 63.267 63.267S256 315.356 256 266.929v-85.136H129.468z">
                                    </path>
                                    <path
                                      d="M155.634 196.634h74.201v-29.681l-14.841 7.42-22.261-22.26-22.259 22.26-14.84-7.42zm85.526 82.148-48.231-48.231-48.231 48.231 15.741 15.74 32.49-32.49 32.49 32.49z"
                                      fill="#FFDA44"></path>
                                    <path fill="#FFF"
                                      d="M241.16 233.734h-22.504a14.74 14.74 0 0 0 2.001-7.418c0-8.196-6.645-14.84-14.84-14.84-5.663 0-10.581 3.172-13.083 7.836-2.502-4.663-7.421-7.836-13.083-7.836-8.195 0-14.84 6.644-14.84 14.84 0 2.706.736 5.235 2.001 7.418h-22.114c0 8.196 7.139 14.84 15.334 14.84h-.494c0 8.196 6.644 14.84 14.84 14.84 0 7.257 5.211 13.286 12.094 14.576l-11.694 26.401a48.075 48.075 0 0 0 18.149 3.544 48.079 48.079 0 0 0 18.149-3.544l-11.694-26.401c6.883-1.29 12.094-7.319 12.094-14.576 8.196 0 14.84-6.644 14.84-14.84h-.494c8.199 0 15.338-6.644 15.338-14.84z">
                                    </path>
                                  </svg>
                                  <div>Serbia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-868" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="SC">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="SC">
                                    <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#FFDA44" d="M235.454 85.337 0 426.663 427.345 85.337z"></path>
                                    <path fill="#6DA544" d="M512 329.393 0 426.663h512z"></path>
                                    <path fill="#D80027" d="M512 85.337h-84.655L0 426.663l512-204.512z"></path>
                                    <path fill="#0052B4" d="M0 85.337v341.326L235.454 85.337z"></path>
                                  </svg>
                                  <div>Seychelles</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-870" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="SL">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="SL">
                                    <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#6DA544" d="M0 85.337h512v113.775H0z"></path>
                                    <path fill="#338AF3" d="M0 312.888h512v113.775H0z"></path>
                                  </svg>
                                  <div>Sierra Leone</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-872" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="SG">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="SG">
                                    <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#D80027" d="M0 85.337h512V256H0z"></path>
                                    <g fill="#FFF">
                                      <path
                                        d="M83.478 170.666c0-24.865 17.476-45.637 40.812-50.734a52.059 52.059 0 0 0-11.13-1.208c-28.688 0-51.942 23.254-51.942 51.941s23.255 51.942 51.942 51.942c3.822 0 7.543-.425 11.13-1.208-23.336-5.095-40.812-25.867-40.812-50.733zm66.783-48.231 3.684 11.337h11.921l-9.645 7.007 3.684 11.337-9.644-7.006-9.645 7.006 3.685-11.337-9.645-7.007h11.921z">
                                      </path>
                                      <path
                                        d="m121.344 144.696 3.683 11.337h11.921l-9.645 7.007 3.684 11.337-9.643-7.006-9.645 7.006 3.685-11.337-9.645-7.007h11.921zm57.834 0 3.684 11.337h11.921l-9.645 7.007 3.684 11.337-9.644-7.006-9.644 7.006 3.685-11.337-9.645-7.007h11.921zm-11.131 33.391 3.684 11.337h11.921l-9.644 7.007 3.684 11.337-9.645-7.006-9.643 7.006 3.684-11.337-9.644-7.007h11.92zm-35.573 0 3.683 11.337h11.921l-9.644 7.007 3.684 11.337-9.644-7.006-9.644 7.006 3.684-11.337-9.644-7.007h11.92z">
                                      </path>
                                    </g>
                                  </svg>
                                  <div>Singapore</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-874" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="SX">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="SX">
                                    <path fill="#0052B4" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#D80027" d="M512 85.331v166.69L0 256.173V85.331z"></path>
                                    <path fill="#FFF" d="M256 256.006 0 426.668V85.331z"></path>
                                    <g fill="#FFDA44">
                                      <path
                                        d="M59.621 256a59.546 59.546 0 0 0-.193 4.57c0 32.821 26.607 59.429 59.429 59.429s59.429-26.607 59.429-59.429c0-1.539-.078-3.061-.193-4.57H59.621z">
                                      </path>
                                      <circle cx="118.862" cy="210.287" r="18.286"></circle>
                                    </g>
                                    <path fill="#D80027"
                                      d="M77.715 205.714v59.429c0 31.494 41.144 41.143 41.144 41.143s41.144-9.649 41.144-41.143v-59.429H77.715z">
                                    </path>
                                    <path fill="#338AF3"
                                      d="M118.877 287.148c-7.632-2.746-22.876-9.767-22.876-22.006v-41.144h45.715v41.144c-.001 12.28-15.244 19.283-22.839 22.006z">
                                    </path>
                                    <path fill="#F3F3F3"
                                      d="M128.001 246.856v-9.142l-9.144-4.571-9.142 4.571v9.142l-4.571 4.573v18.285h27.428v-18.285z">
                                    </path>
                                  </svg>
                                  <div>Sint Maarten</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-876" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="SK">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="SK">
                                    <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#0052B4" d="M0 196.641h512v118.717H0z"></path>
                                    <path fill="#D80027" d="M0 315.359h512v111.304H0z"></path>
                                    <path fill="#FFF"
                                      d="M129.468 181.799v85.136c0 48.429 63.267 63.267 63.267 63.267S256 315.362 256 266.935v-85.136H129.468z">
                                    </path>
                                    <path fill="#D80027"
                                      d="M146.126 184.294v81.941c0 5.472 1.215 10.64 3.623 15.485h85.97c2.408-4.844 3.623-10.012 3.623-15.485v-81.941h-93.216z">
                                    </path>
                                    <path fill="#FFF"
                                      d="M221.301 241.427h-21.425v-14.283h14.284v-14.283h-14.284v-14.284h-14.283v14.284h-14.282v14.283h14.282v14.283h-21.426v14.284h21.426v14.283h14.283v-14.283h21.425z">
                                    </path>
                                    <path fill="#0052B4"
                                      d="M169.232 301.658c9.204 5.783 18.66 9.143 23.502 10.636 4.842-1.494 14.298-4.852 23.502-10.636 9.282-5.833 15.79-12.506 19.484-19.939a24.878 24.878 0 0 0-14.418-4.583c-1.956 0-3.856.232-5.682.657-3.871-8.796-12.658-14.94-22.884-14.94-10.227 0-19.013 6.144-22.884 14.94a25.048 25.048 0 0 0-5.682-.657 24.88 24.88 0 0 0-14.418 4.583c3.691 7.433 10.198 14.106 19.48 19.939z">
                                    </path>
                                  </svg>
                                  <div>Slovakia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-878" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="SI">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="SI">
                                    <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#0052B4" d="M0 199.112h512v113.775H0z"></path>
                                    <path fill="#D80027" d="M0 312.888h512v113.775H0z"></path>
                                    <path fill="#FFF"
                                      d="M233.606 196.639v14.837c0 34.081-44.522 44.522-44.522 44.522s-44.522-10.44-44.522-44.522v-14.837l-.145-44.188 89.043-.266.146 44.454z">
                                    </path>
                                    <path fill="#0052B4"
                                      d="M233.606 196.639v14.837c0 34.081-44.522 44.522-44.522 44.522s-44.522-10.44-44.522-44.522v-14.837l-.145-44.188 89.043-.266.146 44.454z">
                                    </path>
                                    <path fill="#FFF"
                                      d="M233.606 196.639v14.837c0 34.081-44.522 44.522-44.522 44.522s-44.522-10.44-44.522-44.522v-14.837l14.848 14.837 29.674-22.261 29.685 22.261 14.837-14.837z">
                                    </path>
                                  </svg>
                                  <div>Slovenia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-880" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="SB">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="SB">
                                    <path fill="#496E2D" d="M0 85.334h512v341.337H0z"></path>
                                    <path fill="#0052B4" d="M0 426.663V85.329h512"></path>
                                    <path fill="#FFDA44" d="M0 396.494v30.169h45.255L512 115.499v-30.17h-45.255z">
                                    </path>
                                    <path
                                      d="m85.688 108.787 5.12 15.756h16.566l-13.403 9.737 5.12 15.757-13.403-9.738-13.405 9.738 5.12-15.757L64 124.543h16.567zm84.624 0 5.121 15.756H192l-13.403 9.737 5.12 15.757-13.405-9.738-13.403 9.738 5.12-15.757-13.403-9.737h16.566zm-84.624 82.502 5.12 15.756h16.566l-13.403 9.738 5.12 15.757-13.403-9.739-13.405 9.739 5.12-15.757L64 207.045h16.567zm84.624 0 5.121 15.756H192l-13.403 9.738 5.12 15.757-13.405-9.739-13.403 9.739 5.12-15.757-13.403-9.738h16.566zM128 150.037l5.12 15.756h16.568l-13.405 9.738 5.12 15.758L128 181.55l-13.403 9.739 5.12-15.758-13.405-9.738h16.568z"
                                      fill="#FFF"></path>
                                  </svg>
                                  <div>Solomon Islands</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-882" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="SO">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="SO">
                                    <path fill="#338AF3" d="M0 85.331h512v341.337H0z"></path>
                                    <path fill="#FFF"
                                      d="m256 157.273 22.663 69.748H352l-59.332 43.106 22.664 69.749L256 296.769l-59.332 43.107 22.664-69.749L160 227.021h73.337z">
                                    </path>
                                  </svg>
                                  <div>Somalia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-884" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="ZA">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="ZA">
                                    <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                    <path d="M114.024 256.001 0 141.926v228.17z"></path>
                                    <path fill="#ffb915"
                                      d="M161.192 256 0 94.7v47.226l114.024 114.075L0 370.096v47.138z">
                                    </path>
                                    <path fill="#007847"
                                      d="M509.833 289.391c.058-.44.804-.878 2.167-1.318v-65.464H222.602L85.33 85.337H0V94.7L161.192 256 0 417.234v9.429h85.33l137.272-137.272h287.231z">
                                    </path>
                                    <path fill="#000c8a" d="M503.181 322.783H236.433l-103.881 103.88H512v-103.88z">
                                    </path>
                                    <path fill="#e1392d" d="M503.181 189.217H512V85.337H132.552l103.881 103.88z"></path>
                                  </svg>
                                  <div>South Africa</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-886" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="KR">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 900 600" class="flag" code="KR">
                                    <path fill="#FFF" d="M0 0h900v600H0z"></path>
                                    <g transform="rotate(-56.31)">
                                      <path
                                        d="M-75 228.3H75m-150 37.5H75m-150 37.5H75m-150 475H75m-150 37.5H75m-150 37.5H75"
                                        stroke="#000" stroke-width="25"></path>
                                      <path stroke="#FFF" stroke-width="12.5" d="M0 753.3v125"></path>
                                      <circle fill="#ca163a" cy="540.8" r="150"></circle>
                                      <path fill="#0e4896"
                                        d="M0 390.8c-41.4 0-75 33.6-75 75s33.6 75 75 75 75 33.6 75 75-33.6 75-75 75c-82.8 0-150-67.2-150-150s67.2-150 150-150z">
                                      </path>
                                    </g>
                                    <path
                                      d="m231.56 535.73-83.205-124.808M262.76 514.928l-83.205-124.807m114.407 104.006-83.205-124.808m478.43-138.675-83.205-124.807M720.39 209.843 637.184 85.036m114.407 104.006L668.386 64.234"
                                      stroke="#000" stroke-width="25"></path>
                                    <path stroke="#FFF" stroke-width="12.5"
                                      d="m205.6 462.897 31.202-20.8m389.981-259.989 36.444-24.296m31.202-20.801 31.202-20.801">
                                    </path>
                                  </svg>
                                  <div>South Korea</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-888" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="SS">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="SS">
                                    <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#496E2D" d="M0 322.783h512v103.88H0z"></path>
                                    <path d="M0 85.337h512v104.515H0z"></path>
                                    <path fill="#A2001D" d="M0 210.877h512v89.656H0z"></path>
                                    <path fill="#0052B4" d="M256 256.006 0 426.668V85.331z"></path>
                                    <path fill="#FFDA44"
                                      d="m73.178 209.188 20.831 29.067 34.084-10.83-21.207 28.795 20.83 29.069-33.939-11.271-21.208 28.794.234-35.762-33.94-11.273 34.083-10.83z">
                                    </path>
                                  </svg>
                                  <div>South Sudan</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-890" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="ES">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 22.5 15" class="flag" code="ES">
                                    <path fill="#FFF" d="M0 0h22.5v15H0V0z"></path>
                                    <path fill="#D03433" d="M0 0h22.5v4H0V0zm0 11h22.5v4H0v-4z"></path>
                                    <path fill="#FBCA46" d="M0 4h22.5v7H0V4z"></path>
                                    <path fill="#FFF" d="M7.8 7h1v.5h-1V7z"></path>
                                    <path fill="#A41517"
                                      d="M7.2 8.5c0 .3.3.5.6.5s.6-.2.6-.5L8.5 7H7.1l.1 1.5zM6.6 7c0-.3.2-.5.4-.5h1.5c.3 0 .5.2.5.4V7l-.1 1.5c-.1.6-.5 1-1.1 1-.6 0-1-.4-1.1-1L6.6 7z">
                                    </path>
                                    <path fill="#A41517"
                                      d="M6.8 7.5h2V8h-.5l-.5 1-.5-1h-.5v-.5zM5.3 6h1v3.5h-1V6zm4 0h1v3.5h-1V6zm-2.5-.5c0-.3.2-.5.5-.5h1c.3 0 .5.2.5.5v.2c0 .2-.1.3-.3.3H7c-.1 0-.2-.1-.2-.2v-.3z">
                                    </path>
                                  </svg>
                                  <div>Spain</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-892" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="LK">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="LK">
                                    <path fill="#FFDA44" d="M0 0h513v342H0z"></path>
                                    <path fill="#A2001D" d="M222.6 22.3h267.1v296.8H222.6z"></path>
                                    <path fill="#D80027" d="M22.3 22.3h200.3v296.8H22.3z"></path>
                                    <path fill="#FFDA44" d="M200.3 0h22.3v342h-22.3z"></path>
                                    <path fill="#6DA544" d="M22.3 22.3h89v296.8h-89z"></path>
                                    <path fill="#FF9811" d="M111.3 22.3h89v296.8h-89z"></path>
                                    <path fill="#FFDA44"
                                      d="M368.2 156.8c-1.4-2 0-37.9 0-37.9.9-7.4.1-8.4 1-11.4.9-2.9 5.4-11.6 5.4-11.6s-6-2.3-10.3-.6c-4.3 1.7-24.7-7.5-31.2 3.4-4.4 7-23.6 16.2-24.6 14-1-2.2-5.9-5-6.9-2.9s-.7 13.9 0 16c.8 2.6 9.8 2 12.3 3.1 3.7 1.8 12.2 8.2 11.9 10.7-.3 2.5-22.5-6-24.2-4.5-1.4 1.2-1.9 13.2-.4 15 1.8 2.1 23.4 5.6 25 7.5 1.6 1.9-13.1 7.4-12.3 25 .7 14.7 8 17.4 8 17.4s-2.4 3.6-7.8 3.1c-6.2-.6-27.4-17.7-27.4-17.7s-3.5-109 3.6-121.4c4.9-8.5-22.7 10.1-22.7 50.8V151c0 6.6-1.4 22.4 2.6 34 0 0-.4 46.9 1.5 49.6s12.7 2.2 14.8 0 0-30 0-30c7.7.2 18.3 17.5 32.5 16.4 20.6-1.6 28.7-9.9 34.3-5 8.1 7.1 5.5 23.2.4 31.5-2.2 3.5-14.3 4.7-15.7 7.6-1.4 2.9.5 5.4.5 5.4h29.7s1.4-20.5 2.7-26.1c1.3-5.7-.6-10.7 5.9-10.4 23.5 1.1 39.8-15.3 45.5-8 3.2 4.1 5.6 29.9 3.3 33.3-2.2 3.4-13.8 2.8-15.2 6.7-1.4 4 .8 4.4.8 4.4h29.7s-.4-21.2 2.5-27.7 4.9-10.4 9.3-17.2c4.4-6.8 11.3-15.7 11.3-36.2 0-14.2-8.1-22.8-8.1-22.8H417c-14.1.2-47.4 2.3-48.8.3zm-136-124.5c10.7-10.6 20.2-2.7 22.2 2.1 1.9 4.8 2.1 8.2 2.8 13.6.9 6.9 4.9 14 4.9 14s-7.1-3.8-14.7-4.2c-4.7-.3-9-.6-13.6-2.5-5.7-2.3-11.7-12.9-1.6-23zm248.4-.1c10.7 10.6 2.8 20.2-2 22.2s-8.2 2.1-13.6 2.8c-6.9.9-14 5-14 5s3.7-7.1 4.2-14.7c.3-4.7.6-9.1 2.4-13.6 2.2-5.7 12.8-11.8 23-1.7zm.1 276.9c-10.7 10.6-20.2 2.6-22.2-2.2-1.9-4.8-2.1-8.2-2.7-13.6-.8-6.9-4.9-14.1-4.9-14.1s7 3.8 14.7 4.3c4.7.3 9 .6 13.6 2.5 5.7 2.4 11.7 13.1 1.5 23.1zm-248.2-.1c-10.6-10.7-2.7-20.2 2.1-22.2 4.8-1.9 8.2-2.1 13.6-2.8 6.9-.9 14-4.9 14-4.9s-3.8 7.1-4.2 14.7c-.3 4.7-.6 9-2.5 13.6-2.3 5.7-12.9 11.8-23 1.6z">
                                    </path>
                                    <path fill="none" stroke="#FFDA44" stroke-width="6" stroke-miterlimit="10"
                                      d="M446.9 162.4s7.5-2.6 8.4-16.1c.6-8.6-19.8-16-39-11.5-19.7 4.6-34-3.1-34-14.6 0-22.9 29.7-16.2 38.9-11.3 9.1 4.9 29.7 23.5 35.1 9.4">
                                    </path>
                                  </svg>
                                  <div>Sri Lanka</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-894" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="SD">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="SD">
                                    <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#D80027" d="M0 85.337h512v113.775H0z"></path>
                                    <path d="M0 312.888h512v113.775H0z"></path>
                                    <path fill="#496E2D" d="M0 426.668V85.331l256 170.675z"></path>
                                  </svg>
                                  <div>Sudan</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-896" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="SR">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="SR">
                                    <path fill="#FFF" d="M0 85.331h512v341.337H0z"></path>
                                    <path fill="#A2001D" d="M0 196.636h512v118.728H0z"></path>
                                    <path d="M0 352.462h512v74.207H0zM0 85.331h512v74.207H0z" fill="#6DA544"></path>
                                    <path fill="#FFDA44"
                                      d="m256.742 218.003 9.43 29.021h30.518L272 264.963l9.431 29.023-24.689-17.937-24.689 17.937 9.431-29.023-24.69-17.939h30.518z">
                                    </path>
                                  </svg>
                                  <div>Suriname</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-898" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="SJ">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="SJ">
                                    <path fill="#D80027" d="M0 85.334h512v341.337H0z"></path>
                                    <path fill="#FFF"
                                      d="M512 295.883H202.195v130.783h-79.76V295.883H0v-79.772h122.435V85.329h79.76v130.782H512v61.218z">
                                    </path>
                                    <path fill="#2E52B2"
                                      d="M512 234.666v42.663H183.652v149.337h-42.674V277.329H0v-42.663h140.978V85.329h42.674v149.337z">
                                    </path>
                                  </svg>
                                  <div>Svalbard and Jan Mayen</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-900" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="SZ">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 900 600" class="flag" code="SZ">
                                    <path fill="#2B5DEA" d="M0 0h900v600H0V0z"></path>
                                    <path fill="#FFDF29" d="M0 100h900v400H0V100z"></path>
                                    <path fill="#D70000" d="M0 150h900v300H0V150z"></path>
                                    <path fill="#FFF"
                                      d="M450 171.4v257.2c114.3 0 171.4-85.7 214.3-128.6-42.9-42.9-100-128.6-214.3-128.6z">
                                    </path>
                                    <path
                                      d="M450 171.4c-100 0-171.4 85.7-214.3 128.6C278.6 342.9 350 428.6 450 428.6V171.4z">
                                    </path>
                                    <path fill="#FFF" d="M346.3 254.3h21v91.3h-21zm51.9 0h21v91.3h-21z"></path>
                                    <path d="M477.8 254.3h21v91.3h-21zm51.9 0h21v91.3h-21z"></path>
                                  </svg>
                                  <div>Swaziland</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-902" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="SE">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="SE">
                                    <path fill="#0052B4" d="M0 85.333h512V426.67H0z"></path>
                                    <path fill="#FFDA44"
                                      d="M192 85.33h-64v138.666H0v64h128v138.666h64V287.996h320v-64H192z"></path>
                                  </svg>
                                  <div>Sweden</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-904" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="CH">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 513 342" class="flag" code="CH">
                                    <path fill="red" d="M0 85.337h513v342H0z"></path>
                                    <path fill="#FFF"
                                      d="M356.174 222.609h-66.783v-66.783h-66.782v66.783h-66.783v66.782h66.783v66.783h66.782v-66.783h66.783z">
                                    </path>
                                  </svg>
                                  <div>Switzerland</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-906" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="SY">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="SY">
                                    <path fill="#FFF" d="M0 85.331h512v341.337H0z"></path>
                                    <path fill="#D80027" d="M0 85.331h512v113.775H0z"></path>
                                    <path d="M0 312.882h512v113.775H0z"></path>
                                    <path
                                      d="m187.31 215.184 9.208 28.341h29.802l-24.11 17.518 9.209 28.342-24.109-17.516-24.11 17.516 9.209-28.342-24.109-17.518h29.801zm137.38 0 9.209 28.341H363.7l-24.109 17.518 9.209 28.342-24.11-17.516-24.109 17.516 9.209-28.342-24.11-17.518h29.802z"
                                      fill="#6DA544"></path>
                                  </svg>
                                  <div>Syria</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-908" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="TW">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="TW">
                                    <path fill="#D80027" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#0052B4" d="M0 85.337h256V256H0z"></path>
                                    <path fill="#FFF"
                                      d="M186.435 170.669 162.558 181.9l12.714 23.125-25.927-4.961-3.286 26.192L128 206.993l-18.06 19.263-3.285-26.192-25.927 4.96 12.714-23.125-23.877-11.23 23.877-11.231-12.714-23.125 25.927 4.96 3.286-26.192L128 134.344l18.06-19.263 3.285 26.192 25.928-4.96-12.715 23.125z">
                                    </path>
                                    <circle fill="#0052B4" cx="128" cy="170.674" r="29.006"></circle>
                                    <path fill="#FFF"
                                      d="M128 190.06c-10.692 0-19.391-8.7-19.391-19.391 0-10.692 8.7-19.391 19.391-19.391 10.692 0 19.391 8.7 19.391 19.391 0 10.691-8.699 19.391-19.391 19.391z">
                                    </path>
                                  </svg>
                                  <div>Taiwan</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-910" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="TJ">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="TJ">
                                    <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#D80027" d="M0 85.337h512v113.775H0z"></path>
                                    <path fill="#6DA544" d="M0 312.888h512v113.775H0z"></path>
                                    <path
                                      d="M226.318 300.522h59.364v-25.23l-11.873 5.937L256 263.421l-17.809 17.808-11.873-5.937zm-33.963-29.682 2.763 8.504h8.94l-7.233 5.255 2.763 8.502-7.233-5.255-7.234 5.255 2.763-8.502-7.233-5.255h8.94zm8.566-29.68 2.763 8.502h8.94l-7.233 5.255 2.763 8.504-7.233-5.256-7.234 5.256 2.763-8.504-7.233-5.255h8.94zm24.488-22.261 2.763 8.502h8.94l-7.233 5.255 2.763 8.504-7.233-5.256-7.234 5.256 2.763-8.504-7.233-5.255h8.94zm94.236 51.941-2.763 8.504h-8.94l7.233 5.255-2.763 8.502 7.233-5.255 7.234 5.255-2.763-8.502 7.233-5.255h-8.94zm-8.566-29.68-2.763 8.502h-8.94l7.233 5.255-2.763 8.504 7.233-5.256 7.234 5.256-2.763-8.504 7.233-5.255h-8.94zm-24.488-22.261-2.763 8.502h-8.94l7.233 5.255-2.763 8.504 7.233-5.256 7.234 5.256-2.763-8.504 7.233-5.255h-8.94zM256 207.767l2.763 8.503h8.941l-7.234 5.256 2.763 8.502-7.233-5.254-7.233 5.254 2.763-8.502-7.234-5.256h8.941z"
                                      fill="#FFDA44"></path>
                                  </svg>
                                  <div>Tajikistan</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-912" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="TZ">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="TZ">
                                    <path fill="#338AF3" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#6DA544" d="M0 426.663V85.337h512"></path>
                                    <path fill="#FFDA44" d="M512 152.222V85.337H411.67L0 359.778v66.885h100.33z"></path>
                                    <path d="M512 85.337v40.125L60.193 426.663H0v-40.125L451.807 85.337z"></path>
                                  </svg>
                                  <div>Tanzania</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-914" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="TH">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="TH">
                                    <path fill="#FFF" d="M0 85.334h512V426.66H0z"></path>
                                    <path fill="#0052B4" d="M0 194.056h512v123.882H0z"></path>
                                    <path d="M0 85.334h512v54.522H0zm0 286.809h512v54.522H0z" fill="#D80027"></path>
                                  </svg>
                                  <div>Thailand</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-916" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="TG">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="TG">
                                    <path fill="#FFDA44" d="M0 85.337h512v341.326H0z"></path>
                                    <path d="M0 85.337h512V153.6H0zM0 358.4h512v68.263H0zm0-136.537h512v68.263H0z"
                                      fill="#496E2D"></path>
                                    <path fill="#D80027" d="M0 85.337h204.054v204.054H0z"></path>
                                    <path fill="#FFF"
                                      d="m102.026 133.938 13.26 40.812h42.916l-34.718 25.226 13.26 40.814-34.718-25.224-34.719 25.224 13.263-40.814-34.718-25.226h42.913z">
                                    </path>
                                  </svg>
                                  <div>Togo</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-918" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="TK">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="TK">
                                    <path fill="#0052B4" d="M0 85.337h512v341.326H0z"></path>
                                    <path
                                      d="m210.715 174.377 3.684 11.338h11.919l-9.643 7.006 3.684 11.337-9.644-7.007-9.644 7.007 3.684-11.337-9.645-7.006h11.921zm-93.899 107.594 4.605 14.172h14.9l-12.055 8.757 4.606 14.173-12.056-8.76-12.055 8.76 4.604-14.173-12.054-8.757h14.899zm27.88-162.292 4.604 14.172h14.901l-12.056 8.758 4.606 14.171-12.055-8.759-12.056 8.759 4.606-14.171-12.055-8.758h14.9zm-75.157 55.652 4.604 14.172h14.9l-12.055 8.758 4.606 14.171-12.055-8.758-12.056 8.758 4.606-14.171-12.055-8.758h14.9z"
                                      fill="#FFF"></path>
                                    <path
                                      d="M483.386 354.503H117.801s109.234-88.562 310.593-220.938c.001 0-88.443 128.935 54.992 220.938zm-365.585 11.586c-11.177 0-11.195 17.37 0 17.37h365.585c11.177 0 11.195-17.37 0-17.37H117.801z"
                                      fill="#FFDA44"></path>
                                  </svg>
                                  <div>Tokelau</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-920" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="TO">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="TO">
                                    <path fill="#D80027" d="M0 85.331h512v341.337H0z"></path>
                                    <path fill="#FFF" d="M0 85.331h256v170.663H0z"></path>
                                    <path fill="#D80027"
                                      d="M141.357 157.303V130.59h-26.714v26.713H87.93v26.713h26.713v26.713h26.714v-26.713h26.713v-26.713z">
                                    </path>
                                  </svg>
                                  <div>Tonga</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-922" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="TT">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="TT">
                                    <path fill="#D80027" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#FFF"
                                      d="m6.066 85.337 207.961 212.636 131.584 128.69h160.323L297.973 214.027 166.389 85.337z">
                                    </path>
                                    <path d="M43.364 85.337 384.69 426.663h83.946L127.31 85.337z"></path>
                                  </svg>
                                  <div>Trinidad and Tobago</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-924" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="TN">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="TN">
                                    <path fill="#D80027" d="M0 85.331h512v341.337H0z"></path>
                                    <circle fill="#FFF" cx="256" cy="255.994" r="96"></circle>
                                    <g fill="#D80027">
                                      <path
                                        d="m267.826 219.291 16.47 22.695 26.673-8.649-16.496 22.676 16.468 22.695-26.664-8.681-16.495 22.676.017-28.04-26.664-8.682 26.674-8.648z">
                                      </path>
                                      <path
                                        d="M277.818 312.724c-31.33 0-56.727-25.397-56.727-56.727s25.397-56.727 56.727-56.727c9.769 0 18.96 2.47 26.985 6.819-12.589-12.31-29.804-19.909-48.803-19.909-38.558 0-69.818 31.259-69.818 69.818s31.26 69.818 69.818 69.818c18.999 0 36.215-7.599 48.803-19.909-8.026 4.347-17.216 6.817-26.985 6.817z">
                                      </path>
                                    </g>
                                  </svg>
                                  <div>Tunisia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-926" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="TR">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="TR">
                                    <path fill="#E30A17" d="M0 0h513v342H0z"></path>
                                    <path fill="#FFF"
                                      d="M259.7 118.6c-13.1-9.5-29-14.6-45.3-14.5-40.8 0-73.8 30.8-73.8 68.9s33.1 68.9 73.8 68.9c17.1 0 32.9-5.4 45.3-14.5-30 38.6-85.7 45.6-124.3 15.5s-45.6-85.7-15.5-124.3 85.7-45.6 124.3-15.5c5.8 4.5 11 9.8 15.5 15.5zm39.9 65.8-18.1 21.9 1.2-28.4-26.4-10.4 27.3-7.6 1.8-28.3 15.6 23.7 27.5-7.1-17.5 22 15.3 23.9-26.7-9.7z">
                                    </path>
                                  </svg>
                                  <div>Turkey</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-928" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="TM">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="TM">
                                    <path fill="#496E2D" d="M0 85.337h512v341.326H0z"></path>
                                    <g fill="#FFF">
                                      <path
                                        d="M357.208 183.679c8.397-23.404-1.036-48.858-21.281-61.536a52.131 52.131 0 0 1 10.884 2.621c27.002 9.688 41.038 39.428 31.35 66.431s-39.428 41.038-66.431 31.35a52.182 52.182 0 0 1-10.069-4.895c23.686 3.084 47.15-10.566 55.547-33.971zm-46.571-67.95-7.297 9.427-11.22-4.026 6.712 9.852-7.296 9.427 11.443-3.338 6.712 9.852.361-11.914 11.444-3.339-11.221-4.025z">
                                      </path>
                                      <path
                                        d="m330.338 146.448-7.296 9.427-11.221-4.026 6.712 9.852-7.296 9.427 11.443-3.339 6.712 9.853.36-11.915 11.445-3.34-11.221-4.024zM275.9 126.916l-7.296 9.427-11.219-4.024 6.711 9.851-7.296 9.426 11.443-3.338 6.712 9.852.361-11.915 11.444-3.337-11.221-4.027zm-.799 35.189-7.296 9.427-11.221-4.026 6.712 9.852-7.296 9.427 11.444-3.338 6.711 9.852.362-11.915 11.443-3.338-11.22-4.026zm33.484 12.013-7.296 9.427-11.22-4.026 6.712 9.853-7.297 9.426 11.444-3.338 6.712 9.852.36-11.915 11.443-3.338-11.219-4.025z">
                                      </path>
                                    </g>
                                    <path fill="#D80027" d="M83.478 85.337h89.043v341.326H83.478z"></path>
                                    <path fill="#FFF"
                                      d="m117.458 175.191-14.908-11.105v-15.705l14.908-11.105h21.084l14.908 11.105v15.705l-14.908 11.105z">
                                    </path>
                                    <path
                                      d="M128 137.276h-10.542l-14.908 11.105v7.678H128zm0 37.915h10.542l14.908-11.105v-8.012H128z"
                                      fill="#FF9811"></path>
                                    <path fill="#FFF"
                                      d="m117.458 374.725-14.908-11.106v-15.704l14.908-11.105h21.084l14.908 11.105v15.704l-14.908 11.106z">
                                    </path>
                                    <path
                                      d="M128 336.81h-10.542l-14.908 11.105v7.678H128zm0 37.915h10.542l14.908-11.106v-8.011H128z"
                                      fill="#FF9811"></path>
                                    <path
                                      d="m117.458 274.957-14.908-11.105v-15.703l14.908-11.106h21.084l14.908 11.106v15.703l-14.908 11.105zm36.513 24.434h-6.493v-6.493h-11.411l-8.068-8.068-8.067 8.068h-11.41v6.493h-6.493v12.986h6.493v6.492h11.41l8.068 8.069 8.068-8.069h11.41v-6.492h6.493zm0-99.768h-6.493v-6.492h-11.411l-8.068-8.069-8.067 8.069h-11.41v6.492h-6.493v12.986h6.493v6.492h11.41l8.068 8.07 8.068-8.07h11.41v-6.492h6.493z"
                                      fill="#496E2D"></path>
                                    <g fill="#D80027">
                                      <path d="M120.576 248.576h14.84v14.84h-14.84z"></path>
                                      <circle cx="128" cy="206.113" r="7.421"></circle>
                                      <circle cx="128" cy="305.887" r="7.421"></circle>
                                    </g>
                                  </svg>
                                  <div>Turkmenistan</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-930" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="TC">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="TC">
                                    <path fill="#0052B4" d="M0 85.333h512V426.67H0z"></path>
                                    <path fill="#FFDA44"
                                      d="M332.058 191.996v78.221c0 38.103 51.942 49.779 51.942 49.779s51.942-11.675 51.942-49.779v-78.221H332.058z">
                                    </path>
                                    <path fill="#FF9811"
                                      d="M376.579 220.44c0 7.855-6.644 28.445-14.84 28.445s-14.84-20.589-14.84-28.445c0-7.856 14.84-14.222 14.84-14.222s14.84 6.367 14.84 14.222z">
                                    </path>
                                    <path fill="#A2001D"
                                      d="M415.961 235.93c2.394-5.6 4.257-13.785 4.257-17.86 0-6.546-8.904-11.852-8.904-11.852s-8.904 5.306-8.904 11.852c0 4.075 1.862 12.26 4.257 17.86l-5.141 11.123a26.898 26.898 0 0 0 9.788 1.831c3.463 0 6.766-.654 9.788-1.831l-5.141-11.123z">
                                    </path>
                                    <path fill="#6DA544"
                                      d="M372.87 270.217s-7.421 14.222-7.421 28.445h37.101c0-14.222-7.421-28.445-7.421-28.445l-11.13-7.111-11.129 7.111z">
                                    </path>
                                    <path fill="#D80027"
                                      d="M395.13 270.217v-3.555c0-5.891-4.983-10.666-11.13-10.666-6.147 0-11.13 4.776-11.13 10.666v3.555h22.26z">
                                    </path>
                                    <path fill="#FFF"
                                      d="M256 85.333v30.553l-45.167 25.099H256v59.359h-59.103L256 233.179v22.817h-26.68l-73.494-40.826v40.826h-55.652v-48.573l-87.43 48.573H0v-30.554l45.167-25.098H0v-59.359h59.103L0 108.139V85.333h26.68l73.494 40.825V85.333h55.652v48.572l87.43-48.572z">
                                    </path>
                                    <path fill="#D80027"
                                      d="M144 85.33h-32v69.332H0v32h112v69.334h32v-69.334h112v-32H144z">
                                    </path>
                                    <path fill="#0052B4" d="M155.826 200.344 256 255.996v-15.737l-71.847-39.915z">
                                    </path>
                                    <path fill="#FFF" d="M155.826 200.344 256 255.996v-15.737l-71.847-39.915z"></path>
                                    <path
                                      d="M155.826 200.344 256 255.996v-15.737l-71.847-39.915zm-83.98 0L0 240.259v15.737l100.174-55.652z"
                                      fill="#D80027"></path>
                                    <path fill="#0052B4" d="M100.174 140.982 0 85.33v15.737l71.847 39.915z"></path>
                                    <path fill="#FFF" d="M100.174 140.982 0 85.33v15.737l71.847 39.915z"></path>
                                    <path
                                      d="M100.174 140.982 0 85.33v15.737l71.847 39.915zm83.98 0L256 101.067V85.33l-100.174 55.652z"
                                      fill="#D80027"></path>
                                  </svg>
                                  <div>Turks and Caicos Islands</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-932" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="TV">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 900 600" class="flag" code="TV">
                                    <path fill="#0052B4" d="M0 0h900v600H0z"></path>
                                    <path fill="#00B2EE" d="M0 300h450V0h450v600H0V300z"></path>
                                    <path fill="#FFDA44"
                                      d="m345.3 480.9 29.4 90.6-77.1-56H393l-77.1 56 29.4-90.6zM706.4 340l29.4 90.6-77.1-56H754l-77.1 56 29.5-90.6zm106.4-78.5 29.4 90.6-77.1-56h95.3l-77.1 56 29.5-90.6zm0-224.1 29.4 90.6-77.1-56h95.3l-77.1 56 29.5-90.6z">
                                    </path>
                                    <path fill="#FFF"
                                      d="M449.9 0v206.3h-81l81 54V300h-39.7l-129-85.9V300H168.7v-85.9L39.7 300H0v-39.7l81-54H0V93.8h81L0 39.9V0h39.7l129 85.9V0h112.5v85.9L410.2 0z">
                                    </path>
                                    <path fill="#D80027"
                                      d="M253.1 0h-56.3v122H0v56.2h196.8V300h56.3V178.2h196.8V122H253.1z"></path>
                                    <path fill="#2E52B2" d="M449.9 39.9v53.9h-81z"></path>
                                    <path fill="#D80027"
                                      d="M0 300v-19.3l109.9-74.4h39.7L12.8 300zM12.8.1l136.8 93.7h-39.7L0 19.4V.1zm437.1.1v19.3L340 93.8h-39.7L437.1.2zM437.1 300l-136.8-93.7H340l109.9 74.4V300z">
                                    </path>
                                    <path fill="#FFDA44"
                                      d="m719.9 131.6 29.4 90.6-77.1-56h95.3l-77.1 56 29.5-90.6zM584 187.7l29.4 90.6-77.1-56h95.3l-77.1 56 29.5-90.6zm30 242.9 29.4 90.6-77.1-56h95.3l-77.1 56 29.5-90.6zM488 332l29.4 90.6-77.1-56h95.3l-77.1 56L488 332zm0 132 29.4 90.6-77.1-56h95.3l-77.1 56L488 464z">
                                    </path>
                                  </svg>
                                  <div>Tuvalu</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-934" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="VI">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 341.3" class="flag" code="VI">
                                    <path fill="#FFF" d="M0 0h512v341.3H0z"></path>
                                    <path fill="#1583C4"
                                      d="m397.7 166.3-51 97.7c-1.1 2-.3 4.5 1.8 5.6 2 1.1 4.5.3 5.6-1.8l51-97.7c1-2.1.1-4.6-2-5.5-2-.9-4.3-.2-5.4 1.7z">
                                    </path>
                                    <path fill="#1583C4"
                                      d="m404.9 188-57.8 75.4c-1.3 1.9-.8 4.5 1.1 5.8 1.7 1.2 4.1.9 5.5-.7l57.8-75.4c1.4-1.8 1.1-4.4-.8-5.8-1.8-1.5-4.4-1.1-5.8.7z">
                                    </path>
                                    <path fill="#1583C4"
                                      d="m379 181.3-32.5 83.1c-.8 2.1.2 4.6 2.4 5.4 2.1.8 4.6-.2 5.4-2.4l32.5-83.1c.7-2.2-.4-4.5-2.6-5.3-2.1-.6-4.3.4-5.2 2.3z">
                                    </path>
                                    <path fill="#409347"
                                      d="M122.1 171.9c.4 1.7 1.2 4.7 2.2 8.5 1.7 6.4 3.6 12.8 5.6 18.7 2.3 6.9 14.7 31.4 20.2 39.1 6.9 9.7 14.1 19.3 21.5 28.6 1.6 1.9 4.5 2.1 6.4.5 1.8-1.6 2.1-4.3.7-6.2-7.3-9.2-14.4-18.6-21.2-28.2-4.2-5.8-17.2-31.1-19-36.7-2.9-8.7-5.4-17.6-7.6-26.5-.5-2.4-2.9-4-5.3-3.5s-4 2.9-3.5 5.3c-.1.2 0 .3 0 .4z">
                                    </path>
                                    <g fill="#FFD836" stroke="#231F20" stroke-miterlimit="10">
                                      <path
                                        d="M297.1 114.9S279.5 42.8 261 42.8c-6.9 0-11.9-.6-15.4 6.4-.9 1.7-20.7-1.6-19.1 20.8.5 6.9 1.1-9.8 14.9-3.4 6.3 3-16.4 48.2-16.4 48.2h72.1z">
                                      </path>
                                      <path
                                        d="m466.1 48.4-90.9 22c-75.3 18.3-42.1 44.4-42.1 44.4l-72.1 12-72.1-12s33.2-26.1-42.1-44.4l-90.9-22C43.1 45.3 38.1 51.8 45.3 63c0 0 106.6 104 126.8 112 20.2 8.1 40.8 0 40.8 0s-14.9 8.7-24 24c-9.2 15.3-4.6 34.7-38.9 40.2-5.5 6.6-5 14 2.9 19.9 7.9 5.8 72.1-48.1 72.1-48.1s-24 24.4-24 36.1c0 5.1 44.1 53.8 60.1 53.8s60.1-48.7 60.1-53.8c0-11.7-24-36.1-24-36.1s64.2 53.9 72.1 48.1 11.4-19.3 2.8-19.9c-28-1.8-29.7-24.9-38.9-40.2-9.2-15.3-24-24-24-24s20.6 8.1 40.8 0S476.7 63 476.7 63c7.2-11.2 2.3-17.7-10.6-14.6z">
                                      </path>
                                    </g>
                                    <path fill="#FFF" stroke="#231F20" stroke-miterlimit="10"
                                      d="M201.3 111.8v80.3c0 45.7 59.7 59.7 59.7 59.7s59.7-14 59.7-59.7v-80.3H201.3z">
                                    </path>
                                    <path
                                      d="M225.2 137.7V235c8.2 6 17 10.2 23.9 12.9V137.7h-23.9zm71.6 0V235c-8.2 6-17 10.2-23.9 12.9V137.7h23.9z"
                                      fill="#D80027"></path>
                                    <path fill="#0052B4" d="M201.3 111.8h119.4v37.9H201.3z"></path>
                                    <path fill="#1583C4"
                                      d="m60.1 210.5-21.9-58.1H15.7l31.8 80.8h25.2l31.5-80.8H81.7zm391.4-58.6h18.9v81.7h-18.9z">
                                    </path>
                                  </svg>
                                  <div>U.S. Virgin Islands</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-936" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="UG">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 341.3" class="flag" code="UG">
                                    <path fill="#232323" d="M0 0h512v341.3H0z"></path>
                                    <path fill="#FFDA44" d="M0 56.9h512v56.9H0z"></path>
                                    <path fill="#D32300" d="M0 113.8h512v56.9H0z"></path>
                                    <path fill="#FFDA44" d="M0 227.6h512v56.9H0z"></path>
                                    <path fill="#D32300" d="M0 284.4h512v56.9H0z"></path>
                                    <circle fill="#FFF" cx="256" cy="170.7" r="80.7"></circle>
                                    <path
                                      d="M234.5 127.5c.9-1.4-19.6-2-19.6-2 1.7-2.5 18.4-10.5 18.4-10.5s-.9-6 2.7-9.8l-4.5-9.8s7-3.4 18.4-3.4 19.9 7 21 13.1l-6.4 3.4c-.1 4.7 1.7 11.6-4.3 17.3-5.9 5.7-8.3 6.9-8.5 18.8 0 3.9 2.3 8.2 8.8 11.7 17.4 9.3 38.6 28.2 44.6 33.9 6.1 5.7 5.1 19.2 2.6 25.2s-12.1 14.3-14.3 13.6c-2.2-.6 1.2-9.2-3.5-11.6 0 0-8.9-7.6-16.8.6s-.2 25.2 3.9 28c4.1 2.8 1.7 5-1.9 5H247c-3.8 0-5.4-2.3-1.9-5 7.6-3.8 12.4-15.3 7.4-20.3-4.9-4.9-18.3 1.5-21.5 6.3-2.8 2.8-8.8 3.6-12.9-1.4s-4.1-10.4-1.1-12.5c7-4.8 0 0 .1-.1 0 0 11.9-8.6 29.9-9 3.9 0 4.8-2.2 2.2-4.8 0 0-30.9-27.4-28.1-44.2 3-18.3 20-26.3 13.4-32.5-1.3-1.8 0 0 0 0z">
                                    </path>
                                  </svg>
                                  <div>Uganda</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-938" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="UA">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="UA">
                                    <path fill="#FFDA44" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#338AF3" d="M0 85.337h512V256H0z"></path>
                                  </svg>
                                  <div>Ukraine</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-940" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="AE">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="AE">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path fill="#009e49" d="M0 0h513v114H0z"></path>
                                    <path d="M0 228h513v114H0z"></path>
                                    <path fill="#ce1126" d="M0 0h171v342H0z"></path>
                                  </svg>
                                  <div>United Arab Emirates</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-942" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="GB">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="GB">
                                    <g fill="#FFF">
                                      <path d="M0 0h513v341.3H0V0z"></path>
                                      <path
                                        d="M311.7 230 513 341.3v-31.5L369.3 230h-57.6zM200.3 111.3 0 0v31.5l143.7 79.8h56.6z">
                                      </path>
                                    </g>
                                    <path
                                      d="M393.8 230 513 295.7V230H393.8zm-82.1 0L513 341.3v-31.5L369.3 230h-57.6zm146.9 111.3-147-81.7v81.7h147zM90.3 230 0 280.2V230h90.3zm110 14.2v97.2H25.5l174.8-97.2zm-82.1-132.9L0 45.6v65.7h118.2zm82.1 0L0 0v31.5l143.7 79.8h56.6zM53.4 0l147 81.7V0h-147zm368.3 111.3L513 61.1v50.2h-91.3zm-110-14.2V0h174.9L311.7 97.1z"
                                      fill="#0052B4"></path>
                                    <g fill="#D80027">
                                      <path d="M288 0h-64v138.7H0v64h224v138.7h64V202.7h224v-64H288V0z"></path>
                                      <path
                                        d="M311.7 230 513 341.3v-31.5L369.3 230h-57.6zm-168 0L0 309.9v31.5L200.3 230h-56.6zm56.6-118.7L0 0v31.5l143.7 79.8h56.6zm168 0L513 31.5V0L311.7 111.3h56.6z">
                                      </path>
                                    </g>
                                  </svg>
                                  <div>United Kingdom</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-944" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="US">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="US">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path
                                      d="M0 0h513v26.3H0zm0 52.6h513v26.3H0zm0 52.6h513v26.3H0zm0 52.6h513v26.3H0zm0 52.7h513v26.3H0zm0 52.6h513v26.3H0zm0 52.6h513V342H0z"
                                      fill="#D80027"></path>
                                    <path fill="#2E52B2" d="M0 0h256.5v184.1H0z"></path>
                                    <path
                                      d="m47.8 138.9-4-12.8-4.4 12.8H26.2l10.7 7.7-4 12.8 10.9-7.9 10.6 7.9-4.1-12.8 10.9-7.7zm56.3 0-4.1-12.8-4.2 12.8H82.6l10.7 7.7-4 12.8 10.7-7.9 10.8 7.9-4-12.8 10.7-7.7zm56.5 0-4.3-12.8-4 12.8h-13.5l11 7.7-4.2 12.8 10.7-7.9 11 7.9-4.2-12.8 10.7-7.7zm56.2 0-4-12.8-4.2 12.8h-13.3l10.8 7.7-4 12.8 10.7-7.9 10.8 7.9-4.3-12.8 11-7.7zM100 75.3l-4.2 12.8H82.6L93.3 96l-4 12.6 10.7-7.8 10.8 7.8-4-12.6 10.7-7.9h-13.4zm-56.2 0-4.4 12.8H26.2L36.9 96l-4 12.6 10.9-7.8 10.6 7.8L50.3 96l10.9-7.9H47.8zm112.5 0-4 12.8h-13.5l11 7.9-4.2 12.6 10.7-7.8 11 7.8-4.2-12.6 10.7-7.9h-13.2zm56.5 0-4.2 12.8h-13.3l10.8 7.9-4 12.6 10.7-7.8 10.8 7.8-4.3-12.6 11-7.9h-13.5zm-169-50.6-4.4 12.6H26.2l10.7 7.9-4 12.7L43.8 50l10.6 7.9-4.1-12.7 10.9-7.9H47.8zm56.2 0-4.2 12.6H82.6l10.7 7.9-4 12.7L100 50l10.8 7.9-4-12.7 10.7-7.9h-13.4zm56.3 0-4 12.6h-13.5l11 7.9-4.2 12.7 10.7-7.9 11 7.9-4.2-12.7 10.7-7.9h-13.2zm56.5 0-4.2 12.6h-13.3l10.8 7.9-4 12.7 10.7-7.9 10.8 7.9-4.3-12.7 11-7.9h-13.5z"
                                      fill="#FFF"></path>
                                  </svg>
                                  <div>United States</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-946" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="UY">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="UY">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path d="M0 38h513v38H0zm0 76h513v38H0zm0 76h513v38H0zm0 76h513v38H0z"
                                      fill="#0038a8">
                                    </path>
                                    <path fill="#FFF" d="M0 0h256.5v190H0z"></path>
                                    <path fill="#FED443"
                                      d="m128.3 138.7-15.1 22.6-3.8-26.9L86 148.2l8.2-25.9-27.2 2.2 18.6-19.8L60.3 95l25.4-9.7L67 65.5l27.1 2.3-8.2-25.9 23.4 13.8 3.9-26.9 15.1 22.6 15.1-22.6 3.8 26.9 23.4-13.8-8.2 25.9 27.1-2.2-18.6 19.8 25.4 9.7-25.4 9.7 18.6 19.8-27.1-2.2 8.2 25.9-23.4-13.8-3.9 26.9-15-22.7zm0-.5c23.9.9 44-17.6 44.9-41.5.9-23.9-17.6-44-41.5-44.9h-3.4c-23.9.8-42.6 20.8-41.8 44.6.6 22.8 19 41.1 41.8 41.8zm0-10.6c-18.8 0-34-15.2-34-34s15.2-34 34-34 34 15.2 34 34-15.3 34-34 34z">
                                    </path>
                                  </svg>
                                  <div>Uruguay</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-948" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="UZ">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="UZ">
                                    <path fill="#D80027" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#6DA544" d="M0 322.783h512v103.88H0z"></path>
                                    <path fill="#338AF3" d="M0 85.337h512v104.515H0z"></path>
                                    <path fill="#FFF" d="M0 210.877h512v89.656H0z"></path>
                                    <path fill="#338AF3" d="M0 85.337h512v104.515H0z"></path>
                                    <path
                                      d="M188.688 137.589c0-15.984 11.234-29.339 26.236-32.614a33.531 33.531 0 0 0-7.155-.777c-18.442 0-33.391 14.949-33.391 33.391s14.949 33.391 33.391 33.391c2.458 0 4.85-.273 7.155-.777-15.002-3.275-26.236-16.63-26.236-32.614zm45.97 15.177 2.261 6.957h7.315l-5.918 4.301 2.261 6.956-5.919-4.3-5.918 4.3 2.261-6.956-5.918-4.301h7.315zm23.348 0 2.26 6.957h7.315l-5.918 4.301 2.261 6.956-5.918-4.3-5.918 4.3 2.26-6.956-5.917-4.301h7.314zm23.347 0 2.26 6.957h7.315l-5.917 4.301 2.26 6.956-5.918-4.3-5.918 4.3 2.26-6.956-5.918-4.301h7.315zm23.347 0 2.262 6.957h7.315l-5.919 4.301 2.261 6.956-5.919-4.3-5.918 4.3 2.262-6.956-5.919-4.301h7.314zm23.348 0 2.26 6.957h7.315l-5.918 4.301 2.261 6.956-5.918-4.3-5.918 4.3 2.26-6.956-5.917-4.301h7.314zm-70.042-24.284 2.26 6.956h7.315l-5.918 4.3 2.261 6.957-5.918-4.299-5.918 4.299 2.26-6.957-5.917-4.3h7.314zm23.347 0 2.26 6.956h7.315l-5.917 4.3 2.26 6.957-5.918-4.299-5.918 4.299 2.26-6.957-5.918-4.3h7.315zm23.347 0 2.262 6.956h7.315l-5.919 4.3 2.261 6.957-5.919-4.299-5.918 4.299 2.262-6.957-5.919-4.3h7.314zm23.348 0 2.26 6.956h7.315l-5.918 4.3 2.261 6.957-5.918-4.299-5.918 4.299 2.26-6.957-5.917-4.3h7.314zm-46.695-24.284 2.26 6.956h7.315l-5.917 4.3 2.26 6.957-5.918-4.3-5.918 4.3 2.26-6.957-5.918-4.3h7.315zm23.347 0 2.262 6.956h7.315l-5.919 4.3 2.261 6.957-5.919-4.3-5.918 4.3 2.262-6.957-5.919-4.3h7.314zm23.348 0 2.26 6.956h7.315l-5.918 4.3 2.261 6.957-5.918-4.3-5.918 4.3 2.26-6.957-5.917-4.3h7.314z"
                                      fill="#FFF"></path>
                                  </svg>
                                  <div>Uzbekistan</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-950" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="VU">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="VU">
                                    <path d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#6DA544" d="M512 256v170.663H0L215.185 256z"></path>
                                    <path fill="#D80027" d="M512 85.337V256H215.185L0 85.337z"></path>
                                    <path
                                      d="M221.001 239.304 26.868 85.337H8.956l208.168 165.098H512v-11.131zM8.956 426.663h17.912l194.133-153.967H512v-11.131H217.124zM0 92.44v14.206L188.317 256 0 405.354v14.205L206.229 256z">
                                    </path>
                                    <g fill="#FFDA44">
                                      <path
                                        d="M8.956 85.337H0v7.103L206.229 256 0 419.559v7.104h8.956l208.168-165.098H512v-11.13H217.124z">
                                      </path>
                                      <path
                                        d="M63.718 292.382v-14.295c14.265 0 25.87-11.606 25.87-25.869 0-10.092-8.211-18.303-18.304-18.303-6.875 0-12.469 5.593-12.469 12.469 0 4.397 3.577 7.974 7.974 7.974a4.514 4.514 0 0 0 4.508-4.508h14.295c0 10.368-8.435 18.804-18.802 18.804-12.279-.002-22.269-9.993-22.269-22.271 0-14.758 12.006-26.764 26.764-26.764 17.975 0 32.599 14.623 32.599 32.599 0 22.145-18.018 40.164-40.166 40.164z">
                                      </path>
                                    </g>
                                  </svg>
                                  <div>Vanuatu</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-952" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="VA">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="VA">
                                    <path fill="#FFDA44" d="M0 85.331h512v341.326H0z"></path>
                                    <path fill="#FFF" d="M256 85.331h256v341.337H256z"></path>
                                    <path fill="#ACABB1"
                                      d="m321.353 233.837 32.073 42.43c-5.053 7.651-5.026 17.961.817 25.692 7.414 9.807 21.374 11.748 31.182 4.335 9.807-7.414 11.748-21.374 4.334-31.182-5.843-7.731-15.756-10.568-24.495-7.795l-49.988-66.129-11.838 8.949-17.759 13.424 17.899 23.677 17.775-13.401zm46.175 48.78a7.421 7.421 0 1 1 8.95 11.84 7.421 7.421 0 0 1-8.95-11.84z">
                                    </path>
                                    <path fill="#FFDA44"
                                      d="m376.367 247.24 17.899-23.677-17.759-13.424-11.838-8.949-49.988 66.129c-8.74-2.775-18.651.063-24.495 7.795-7.414 9.808-5.473 23.768 4.334 31.182 9.808 7.414 23.768 5.473 31.182-4.335 5.845-7.731 5.871-18.041.817-25.692l32.073-42.43 17.775 13.401zm-62.504 45.771a7.42 7.42 0 1 1-11.84-8.95 7.42 7.42 0 0 1 11.84 8.95z">
                                    </path>
                                  </svg>
                                  <div>Vatican</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-954" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="VE">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 22.5 15" class="flag" code="VE">
                                    <path fill="#FFCE00" d="M0 0h22.5v5H0z"></path>
                                    <path fill="#203899" d="M0 5h22.5v5H0z"></path>
                                    <path fill="#D82B2B" d="M0 10h22.5v5H0z"></path>
                                    <path fill="#FFF"
                                      d="m12.13 5.38.14.46.45.14-.39.27.01.48-.38-.29-.45.15.15-.44-.28-.38h.47zm-1.77 0 .27.39h.47l-.28.38.15.45-.45-.16-.38.28.01-.47-.39-.28.45-.13zm3.44.56-.01.48.39.27-.46.14-.14.45-.27-.38h-.48l.29-.38-.15-.45.45.16zm-5.11.02.4.27.44-.18-.13.46.3.36-.47.02-.26.4-.16-.44-.46-.12.37-.3zm6.55 1.17-.2.44.25.4-.47-.05-.31.36-.1-.46-.43-.18.41-.24.03-.47.35.31zm.19 1.12.21.43.47.07-.34.33.08.46-.42-.22-.42.22.08-.46-.34-.33.47-.07zM7 8.2l.21.43.47.06-.34.33.08.47L7 9.27l-.42.22.08-.47-.34-.33.47-.06zm.31-1.15.45.14.38-.29v.48l.39.26-.45.15-.13.46-.28-.38-.47.01.27-.38z">
                                    </path>
                                  </svg>
                                  <div>Venezuela</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-956" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="VN">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="VN">
                                    <path fill="#D80027" d="M196.641 85.337H0v341.326h512V85.337z"></path>
                                    <path fill="#FFDA44"
                                      d="m256 157.279 22.663 69.747H352l-59.332 43.106 22.664 69.749L256 296.774l-59.332 43.107 22.664-69.749L160 227.026h73.337z">
                                    </path>
                                  </svg>
                                  <div>Vietnam</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-958" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="WF">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 150 100" class="flag" code="WF">
                                    <path fill="#ED2939" d="M0 0h150v100H0z"></path>
                                    <path fill="#002395" d="M0 0h20v44.33H0z"></path>
                                    <path fill="#FFF" d="M20 0h20v44.33H20z"></path>
                                    <path fill="none" stroke="#FFF" stroke-width="3" d="M0 44.33h62.75V0"></path>
                                    <path fill="#FFF"
                                      d="M108.08 43.29 87.96 23.17h40.25l-20.13 20.12zm-6.7 6.71L81.25 29.88v40.25L101.38 50zm6.7 6.71L87.96 76.83h40.25l-20.13-20.12zm6.71-6.71 20.13-20.13v40.25L114.79 50z">
                                    </path>
                                  </svg>
                                  <div>Wallis and Futuna</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-960" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="EH">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 513 342" class="flag" code="EH">
                                    <path fill="#FFF" d="M0 0h513v342H0z"></path>
                                    <path d="M0 0h513v114H0z"></path>
                                    <path fill="#428823" d="M0 228h513v114H0z"></path>
                                    <g fill="#D80027">
                                      <path
                                        d="M256 171 0 342V0zm53.1 0c0-22.9 13.1-42.1 34.6-46.8-3.3-.7-6.7-1.1-10.3-1.1-26.4 0-47.9 21.4-47.9 47.9s21.4 47.9 47.9 47.9c3.5 0 7-.4 10.3-1.1-21.5-5.1-34.6-24.2-34.6-46.8z">
                                      </path>
                                      <path
                                        d="m365 129.2 10.3 31.7h33.3l-27 19.6 10.3 31.7-26.9-19.6-27 19.6 10.3-31.7-27-19.6h33.4z">
                                      </path>
                                    </g>
                                  </svg>
                                  <div>Western Sahara</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-962" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="YE">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="YE">
                                    <path fill="#FFF" d="M0 85.337h512v341.326H0z"></path>
                                    <path fill="#D80027" d="M0 85.337h512v113.775H0z"></path>
                                    <path d="M0 312.888h512v113.775H0z"></path>
                                  </svg>
                                  <div>Yemen</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-964" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="ZM">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="ZM">
                                    <path fill="#496E2D" d="M0 85.331h512v341.337H0z"></path>
                                    <path fill="#FF9811"
                                      d="M490.668 195.476h-48c0-8.836-7.164-16-16-16s-16 7.164-16 16h-48c0 8.836 7.697 16 16.533 16h-.533c0 8.836 7.162 16 16 16 0 8.836 7.162 16 16 16h32c8.836 0 16-7.164 16-16 8.836 0 16-7.164 16-16h-.533c8.837 0 16.533-7.164 16.533-16z">
                                    </path>
                                    <path fill="#D80027" d="M341.337 255.994h56.888v170.663h-56.888z"></path>
                                    <path fill="#FF9811" d="M455.112 255.994H512v170.663h-56.888z"></path>
                                    <path d="M398.225 255.994h56.888v170.663h-56.888z"></path>
                                  </svg>
                                  <div>Zambia</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-966" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="ZW">
                                <div class="CountrySelector_item__vm917"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 85.333 512 341.333" class="flag" code="ZW">
                                    <path d="M0 85.333h512V426.67H0z"></path>
                                    <path d="M0 134.196h512v48.868H0zm0 195.472h512v48.868H0z" fill="#FFDA44"></path>
                                    <path fill="#057f44" d="M0 85.333h512v48.868H0z"></path>
                                    <path d="M0 183.069h512v48.868H0zm0 97.737h512v48.868H0z" fill="#D80027"></path>
                                    <path fill="#057f44" d="M0 378.542h512v48.128H0z"></path>
                                    <path fill="#FFF" d="M276.992 255.996 106.329 426.659H0V85.333h106.329z"></path>
                                    <path d="M256 255.996 85.334 426.662h20.987l170.667-170.666L106.321 85.33H85.334z">
                                    </path>
                                    <path fill="#D80027"
                                      d="m102.465 202.57 13.259 40.812h42.917l-34.718 25.226 13.26 40.814-34.718-25.224-34.72 25.224 13.262-40.814-34.718-25.226h42.915z">
                                    </path>
                                    <path fill="#FFDA44"
                                      d="m138.94 259.335-34.559-12.243s-2.553-23.955-2.708-24.766c-1.173-6.18-6.603-10.851-13.123-10.851-7.376 0-13.357 5.98-13.357 13.357 0 1.223.178 2.402.486 3.528l-9.689 9.755h17.229c0 17.882-13.344 17.882-13.344 35.691l7.402 17.809h44.522l7.422-17.809h-.004a17.782 17.782 0 0 0 1.381-5.231c6.397-2.589 8.342-9.24 8.342-9.24z">
                                    </path>
                                  </svg>
                                  <div>Zimbabwe</div>
                                </div>
                              </li>
                              <li class="rs-dropdown-item" id="menuitem-968" role="menuitem" aria-disabled="false"
                                tabindex="-1" data-event-key="ZZ">
                                <div class="CountrySelector_item__vm917">
                                  <div></div>
                                  <div>Unknown</div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div><label class="Input_inputLabel__TWAkI ">Residence Country</label>
                        <div class="Input_errors__6Diyc"></div>
                      </div>
                    </div>
                    <div class="inputWrap Input_inputWrap__SOE5Z register__password      "
                      data-testid="InputField-wrapper">
                      <div class="Input_inputWrapInner__XaBQN">
                        <div class="Input_input__6F3Eu Input_password__OgEG1"><input type="text" name="password"
                            tabindex="2" keys="[object Object]" value="<?php echo $password; ?>"
                            style="cursor:text"><button
                            class="Button_button__mNI1O Input_toggleMask__eL5cc           "><span color="#c80600"
                              icon="eye" class="icon Icon_icon__rc5dL Input_toggleMask__eL5cc"><span
                                class="Icon_mask__Sea54 "
                                style="-webkit-mask-image: url(&quot;https://d1pe6tj7si7a9n.cloudfront.net/sca-images/icons/eye.svg&quot;); background-color: rgb(200, 6, 0);"></span></span></button>
                        </div>
                      </div><label class="Input_inputLabel__TWAkI Input_up__dbccE">Password</label>
                      <div class="Input_errors__6Diyc"></div>
                    </div>
                    <div class="inputWrap Input_inputWrap__SOE5Z register__password      "
                      data-testid="InputField-wrapper">
                      <div class="Input_inputWrapInner__XaBQN">
                        <div class="Input_input__6F3Eu Input_password__OgEG1"><input type="text" name="password"
                            tabindex="2" keys="[object Object]" value="<?php echo $cpassword; ?>"
                            style="cursor:text"><button
                            class="Button_button__mNI1O Input_toggleMask__eL5cc           "><span color="#c80600"
                              icon="eye" class="icon Icon_icon__rc5dL Input_toggleMask__eL5cc"><span
                                class="Icon_mask__Sea54 "
                                style="-webkit-mask-image: url(&quot;https://d1pe6tj7si7a9n.cloudfront.net/sca-images/icons/eye.svg&quot;); background-color: rgb(200, 6, 0);"></span></span></button>
                        </div>
                      </div><label class="Input_inputLabel__TWAkI Input_up__dbccE">Confirm Password</label>
                      <div class="Input_errors__6Diyc"></div>
                    </div>

                    <input class="form-control " id="inp" type="hidden" name="referred" readonly
                      value="<?php echo $refcode; ?>">

                    <div class="Input_checkbox__VyP_M">
                      <div style="margin-left:-10px" class="rs-checkbox">
                        <div class="rs-checkbox-checker"><label><span><input id="inp" class="rs-checkbox-wrapper"
                                type="checkbox" name="terms" class='form-check-input'><span class="rs-checkbox-inner"
                                aria-hidden="true" role="presentation"></span></span>
                            <p>I confirm that I am over 18 and I agree to the<!-- --> <button
                                class="Button_button__mNI1O Button_text__HE4Yz Button_link__cE9Ou"><a
                                  href="https://forexrover.com/en/legal/">ForexRover Markets policies</a></button></p>
                          </label></div>
                      </div>
                    </div>
                    <div class="Register_backLink__0L3KX">
                      <button type="submit" class="Button_button__mNI1O Button_success__YQxCI"
                        style="margin-right: 0px; margin-left: 0px;" name="submit">GET STARTED</button>
                      <p>Already a client?<button class="Button_button__mNI1O Button_text__HE4Yz"
                          style="text-decoration: underline; padding: 0px; margin-left: 3px;"><a
                            href="index.php">Log in here</a></button></p>
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