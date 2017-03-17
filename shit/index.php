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
    <!--[if gt IE 8]><!-->
    <html class="no-js" lang="">
    <!--<![endif]-->

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
        <link rel="stylesheet" href="css/finexo.css">
        <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <style type="text/css" media="all">
            @import url("https://www.finexo.com/modules/system/system.base.css?oklika");
            @import url("https://www.finexo.com/modules/system/system.menus.css?oklika");
            @import url("https://www.finexo.com/modules/system/system.messages.css?oklika");
            @import url("https://www.finexo.com/modules/system/system.theme.css?oklika");
        </style>
        <style type="text/css" media="all">
            @import url("https://www.finexo.com/modules/comment/comment.css?oklika");
            @import url("https://www.finexo.com/modules/field/theme/field.css?oklika");
            @import url("https://www.finexo.com/sites/all/modules/footer_sitemap/footer_sitemap.css?oklika");
            @import url("https://www.finexo.com/modules/node/node.css?oklika");
            @import url("https://www.finexo.com/modules/search/search.css?oklika");
            @import url("https://www.finexo.com/modules/user/user.css?oklika");
            @import url("https://www.finexo.com/sites/all/modules/views/css/views.css?oklika");
        </style>
        <style type="text/css" media="all">
            @import url("https://www.finexo.com/sites/all/modules/ckeditor/ckeditor.css?oklika");
            @import url("https://www.finexo.com/sites/all/modules/ctools/css/ctools.css?oklika");
            @import url("https://www.finexo.com/sites/all/modules/lang_dropdown/lang_dropdown.css?oklika");
            @import url("https://www.finexo.com/sites/all/themes/boson/css/main.css?oklika");
            @import url("https://www.finexo.com/sites/all/themes/boson/css/color-scheme/green.css?oklika");
        </style>
        <style type="text/css" media="all">
            @import url("https://www.finexo.com/sites/all/themes/boson/css/responsive.css?oklika");
            @import url("https://www.finexo.com/sites/all/themes/boson/css/prettyPhoto.css?oklika");
        </style>
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="js/vendor/jquery-1.11.2.js"></script>
        <script type="text/javascript">
            ! function (e, t, a) {
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
                <div class="logo_main"> <img src="img/logo.png" /> </div>
            </div>
        </header>
        <section class="section1">
            <div class="container">
                <div class="col-md-12">
                    <div class="row section1_content">
                        <div class="col-lg-8 col-md-8">
                            <div class="left_part"> </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="white-transparent-block radius-10 form-section">
                                <div class="dreams_come">Запишись и получи €2 в подарок</div>
                                <form method="post" action="<?php echo $siteURL.'landing'; ?>">
                                    <input type="hidden" value="<?php echo $brandId; ?>" name="brand_uid" id="brand-id">
                                    <input type="hidden" value="<?php echo $managerId; ?>" name="manager_uid">
                                    <input type="hidden" value="<?php echo $affiliateId; ?>" name="affiliate_uid" id="affiliateId">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Имя"> </div>
                                        <label id="err-fname"></label>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Фамилия"> </div>
                                        <label id="err-lname"></label>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Email"> </div>
                                        <label id="err-email"></label>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4 col-sm-4 col-xs-4 pr-0">
                                            <!--                                                    <input type="text" class="form-control" id="code" placeholder="+27">-->
                                            <select class="form-control" name="callingCode" id="code">
                                                <option>Код страны</option>
                                            </select>
                                            <input type="hidden" value="" name="country_uid" id="country-id" /> </div>
                                        <div class="col-md-8 col-sm-8 col-xs-8">
                                            <input type="text" name="phone_no" class="form-control phone_field" id="phone" placeholder="Телефон"> </div>
                                        <label id="err-phone"></label>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <button type="submit" class="save_customer btn yellow">Запишись!</button>
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
        <div class="footer col-12">
            <!-- Widget Area -->
            <div class="b-widgets col-12">
                <div class="layout">
                    <div class="row">
                        <div class="row-item col-1_3">
                            <div class="region region-footer-secondcolumn">
                                <div id="block-block-49" class="block block-block">
                                    <div class="content">
                                        <div class="ssl_icons">
                                            <ul style="display:initial;">
                                                <li><img src="img/ssl.png"></li>
                                                <li><img src="img/verisign.png" style="margin-right: 24px;margin-left: 9px;"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-item col-2_3">
                            <div class="region region-footer-icons">
                                <div id="block-block-46" class="block block-block">
                                    <div class="content">
                                        <div class="bank_icons" style="margin-top:-10px;">
                                            <ul>
                                                <li><img src="img/visa.png"></li>
                                                <li><img src="img/mastercard.png"></li>
                                                <li><img src="img/maestro.png"></li>
                                                <li><img src="img/visa_el.png"></li>
                                                <li><img src="img/neteller.png"></li>
                                                <li><img src="img/skrill.png"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="region region-footer-copy">
                            <div id="block-block-50" class="block block-block">
                                <div class="content">
                                    <p><strong class="f18">ПРЕДУПРЕЖДЕНИЕ О ВЫСОКО РИСКОВАННЫХ ВЛОЖЕНИЯХ:</strong> Торговля контрактами в иностранной валюте, контрактами на разницу и другими внебиржевыми продуктами с использованием внешнего финансирования несет высокий риск и подходит не всем. Перед тем, как приступить к торговле, мы настоятельно рекомендуем Вам прочесть все соотвествующие предупреждения о рисках и другие предупреждения, имеющиеся здесь, а также убедиться в том, что Вы их хорошо понимаете: <a target="_blank" href="https://www.finexo.com/en/risk-disclosure">Заявление о Раскрытии Рисков.</a>. Существует значительный риск того, что Вы можете потерять все Ваши первоначальные вложения. Мы советуем Вам задуматься о том, подходит ли Вам торговля продуктами с кредитным плечом в свете Ваших личных обстоятельств. Мы рекомендуем Вам обратиться за независимой финансовой консультацией и убедиться перед началом торговли в том, что Вы полностью понимаете все сопряженные с ней риски. Торговля через онлайн-платформу несет дополнительные риски..<a target="_blank" href="https://www.finexo.com/en/regulation">Пожалуйста, пройдите в раздел, содержащий свод наших Правил, здесь.  </a></p>
                                    <p>FINEXO.com - это торговое название ООО<a target="_blank" href="http://www.leadcapitalmarkets.com/regulation.php"> Leadcapital Markets Ltd</a>, которая авторизована и регулируется <a target="_blank" href="http://www.cysec.gov.cy/en-GB/home/"> Комиссией по ценным бумагам и биржам Республики Кипр и имеет лицензионный</a>, и имеет лицензионный номер <a target="_blank" href="http://www.cysec.gov.cy/en-GB/entities/investment-firms/cypriot/37648/">227/14</a>. Адрес фирмы: Treppides Tower, 5th Floor, 9 Kafkasou Street, 2112 Никосия, Кипр.</p>
                                    <p>Ограничительные юрисдикции: Мы не открываем счета для резидентов определенных юрисдикций, включая Японию, Канаду и США. Для получения более подробной информации, пожалуйста читайте <a href="en/terms-conditions" target="_blank">Правила &amp; Условия.</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="b-copyright col-12">
                <div class="layout">
                    <div class="f-a">
                        <div class="region region-footer-a">
                            <div id="block-block-48" class="block block-block">
                                <div class="content">
                                    <p>© Авторское право 2017 Finexo.com - Все права защищены</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-b">
                        <div class="region region-footer-b">
                            <div id="block-block-39" class="block block-block"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/vendor/dscountdown.min.js"></script>
        <script src="js/vendor/syncHeight.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript">
            var date = '';
            jQuery(document).ready(function () {
                var ip = '';
                var countryCode = '';
                var countryCode1 = '';
                var countryId = 0;
                var siteUrl = jQuery('#site_url').val();
                var affId = jQuery('#affiliateId').val();
                var brandId = parseInt($('#brand-id').val());
                jQuery.ajax({
                    type: "POST"
                    , url: "call_ajax.php?url=api/landing_draw"
                    , data: "BrandId=" + brandId + "&ip='127.1.0.0'"
                    , dataType: "json"
                    , success: function (data) {
                        jQuery('.lottery_logo').find('img').attr('src', data['nearestDraw'][0]['icon']);
                        jQuery('#jackpot').html(data['nearestDraw'][0]['currency_symbol'] + data['nearestDraw'][0]['jackpot']);
                        jQuery('#jackpot1').html(data['nearestDraw'][0]['currency_symbol'] + data['nearestDraw'][0]['jackpot']);
                        jQuery('.draw_date').val(data['nearestDraw'][0]['end_date']);
                        //console.log(data['nearestDraw'][0]['end_date']);
                        app.init();
                    }
                });
                jQuery.ajax({
                    type: "POST"
                    , url: "call_ajax.php?url=api/upcoming_draw"
                    , data: "brand_uid=" + brandId + "&ip='127.1.0.0'"
                    , dataType: "json"
                    , success: function (data) {
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
                            content += '<a href="' + siteUrl + data['draws'][i]['slug'] + '/?aid=' + affId + '" target="_blank">Сыграй</a>';
                            content += '</div>';
                            content += '</div>';
                        }
                        jQuery('.main_lottery_list').html(content);
                    }
                });
                jQuery.ajax({
                    type: "POST"
                    , url: "call_ajax.php?url=api/get_country_from_ip"
                    , data: "ip='127.1.0.0'"
                    , dataType: "json"
                    , success: function (data) {
                        countryCode = data;
                        jQuery.ajax({
                            type: "POST"
                            , url: "call_ajax.php?url=api/get_country_list"
                            , data: "BrandId=" + brandId
                            , dataType: "json"
                            , success: function (data) {
                                console.log(data);
                                var optionHtml = '';
                                for (var i = 0; i < data['country'].length; i++) {
                                    if (data['country'][i]['callingCode'] != '') {
                                        optionHtml += '<option value="' + data['country'][i]['callingCode'] + '" data-code="' + data['country'][i]['id'] + '">' + data['country'][i]['countryName'] + '(' + data['country'][i]['callingCode'] + ')</option>';
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
                jQuery('.save_customer').click(function () {
                    var flag = 0;
                    if (jQuery('#first_name').val() == '') {
                        jQuery('#err-fname').html('введи имя');
                        flag = 1;
                    }
                    else {
                        jQuery('#err-fname').html('');
                    }
                    if (jQuery('#last_name').val() == '') {
                        jQuery('#err-lname').html('введи фамилие');
                        flag = 1;
                    }
                    else {
                        jQuery('#err-lname').html('');
                    }
                    if (jQuery('#email').val() == '') {
                        jQuery('#err-email').html('введи email');
                        flag = 1;
                    }
                    else {
                        var email = jQuery('#email').val();
                        jQuery.ajax({
                            type: "POST"
                            , url: "call_ajax.php?url=api/checkExistEmail"
                            , data: "brand_uid=" + brandId + "&email=" + email
                            , dataType: "json"
                            , success: function (data) {
                                console.log(data);
                                if (data.statuscode == 401 && data.exist == false) {
                                    jQuery('#err-email').html('Email already exist');
                                    flag = 1;
                                    return false;
                                }
                                else {
                                    jQuery('#err-email').html('');
                                }
                            }
                        });
                    }
                    if (jQuery('#phone').val() == '') {
                        jQuery('#err-phone').html('введи номер телефона');
                        flag = 1;
                    }
                    else {
                        jQuery('#err-phone').html('');
                    }
                    if (flag == 0) {
                        return true;
                    }
                    else {
                        return false;
                    }
                });
                jQuery("#code").change(function () {
                    var element = jQuery(this);
                    var myTag = element.val();
                    var countryId = element.find(':selected').data('code');
                    jQuery('#code').append('<option selected="selected" style="display:none;" value="' + myTag + '">' + myTag + '</option>');
                    jQuery('#country-id').val(countryId);
                });
                $(".phone_field").keypress(function (e) {
                    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                        return false;
                    }
                });

                function formatNumber(number) {
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
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-79383342-2', 'auto');
            ga('send', 'pageview');
        </script>
    </body>

    </html>