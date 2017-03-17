$(document).ready(function () {
    //app.init();
});
var app = {};
/* main part */
(function (app, $) {
    var ls = JSON.parse(localStorage.getItem("powerball")) || {};
    var $cache = {};
    var initAll = function () {
        for (var key in app) {
            if (app[key].hasOwnProperty("init")) {
                app[key].init();
            }
        }
    };
    var initCache = function () {
        $cache.document = $(document);
        $cache.timer = $("#timer");
        $cache.js_sync_heiht = $('.js-same-size');
    };
    var initTimer = function () {
        var d = new Date($('.draw_date').val());
        var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
        var date_str = monthNames[d.getMonth()]+" "+d.getDate()+", "+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes()+":"+d.getSeconds();
        
        var cd = new Date();
        cd.setHours(cd.getHours() + 1);
        var month = cd.getUTCMonth() + 1;
        if (cd.getUTCMonth() < 10) {
            month = "0" + month;
        }
        var Hours = cd.getUTCHours();
        if (Hours < 10) {
            Hours = "0" + Hours;
        }
        var Minutes = cd.getUTCMinutes();
        if (Minutes < 10) {
            Minutes = "0" + Minutes;
        }
        var Seconds = cd.getUTCSeconds();
        if (Seconds < 10) {
            Seconds = "0" + Seconds;
        }
        var currDateUtc = cd.getUTCFullYear() + "/" + month + "/" + cd.getUTCDate() + " " + Hours + ":" + Minutes + ":" + Seconds;
        var currDate = new Date(currDateUtc);
        
        $cache.timer.dsCountDown({
            startDate: currDate,
            endDate: new Date(date_str),
            titleDays: 'дни',
            titleHours: 'час',
            titleMinutes: 'мин',
            titleSeconds: 'сек'
        });

    };
    var initSync = function () {
        $cache.js_sync_heiht.syncHeight({'updateOnResize': true});
    };
    app.init = function () {
        initAll();
        initCache();
        initTimer();
        initSync();
    };
}(window.app || {}, jQuery));