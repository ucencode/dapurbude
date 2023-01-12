/*!
    * Start Bootstrap - SB Admin v6.0.3 (https://startbootstrap.com/template/sb-admin)
    * Copyright 2013-2021 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
    */
(function ($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
    $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function () {
        if (this.href === path) {
            $(this).addClass("active");
        }
    });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function (e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });

})(jQuery);

function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
}
showTime();

/**
 * Sweet Alert quick simple function
 * if you are using promises, dont use this function
 * https://sweetalert.js.org/guides/#getting-started
 */

function swal_success(text, title) {
    return swal({
        title: title || 'Berhasil',
        text: text,
        icon: "success",
        button: "OK"
    });
}

function swal_error(text, title) {
    return swal({
        title: title || 'Error',
        text: text,
        icon: "error",
        button: "OK"
    });
}

function swal_warning(text, title) {
    return swal({
        title: title || 'Warning',
        text: text,
        icon: "warning",
        button: "OK"
    });
}

function swal_info(text, title) {
    return swal({
        title: title || 'Info',
        text: text,
        icon: "info",
        button: "OK"
    });
}

/**
 * Automatically detect the response type and show the message accordingly
 *
 * @param {int} response_code
 * @param {string} message
 * @param {string} title (optional)
 */
function swal_response(result, message, title = null) {
    switch(result) {
        case 'success':
            title = title || "Success";
            return swal_success(message, title);
            break;
        case 'error':
            title = title || "Error";
            return swal_error(message, title);
            break;
        case 'expired':
            return swal_info("Sesi anda berakhir karena tidak aktif dalam beberapa menit, silahkan login kembali", "Sesi login berakhir").then(function() {window.location.reload()});
        default:
            return swal_info(message, title);
        }
}

/**
 * Swal confirmation of delete action
 * @param {string?} text
 *
 * @returns {Promise}
 */
function confirm_delete(text) {
    return swal({
        title: "Delete Confirmation",
        text: text || "Are you sure you want to delete this item?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
}

/**
 * End Sweet Alert
 */