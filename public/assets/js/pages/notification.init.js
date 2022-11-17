/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************************!*\
  !*** ./resources/js/pages/notification.init.js ***!
  \*************************************************/
/*
Template Name: Dason - Admin & Dashboard Template
Author: Themesdesign
Website: https://themesdesign.in/
Contact: themesdesign.in@gmail.com
File: Toastr init js
*/
    // alert
    var alert = document.getElementById('alert');
    if(alert){
        alert.addEventListener("click", function () {
            alertify.alert('Alert Title', 'Alert Message!', function () {
                alertify.success('Ok');
            });
        });
    }

    // alert-confirm
    var alert_confirm = document.getElementById('alert-confirm');
    if(alert_confirm){
        alert_confirm.addEventListener("click", function () {
            alertify.confirm("This is a confirm dialog.", function () {
                alertify.success('Ok');
            }, function () {
                alertify.error('Cancel');
            });
        });
    }

    // alert-prompt
    var alert_prompt = document.getElementById('alert-prompt');
    if(alert_prompt){
        alert_prompt.addEventListener("click", function () {
            alertify.prompt("This is a prompt dialog.", "Default value", function (evt, value) {
                alertify.success('Ok: ' + value);
            }, function () {
                alertify.error('Cancel');
            });
        });
    }

    // alert success
    var alert_success = document.getElementById('alert-success');
    if(alert_success){
        alert_success.addEventListener("click", function () {
            alertify.success('Success message');
        });
    }

    // alert error

document.getElementById("alert-error").addEventListener("click", function () {
  alertify.error('Error message');
}); // alert warning

document.getElementById("alert-warning").addEventListener("click", function () {
  alertify.warning('Warning message');
}); // alert normal

document.getElementById("alert-message").addEventListener("click", function () {
  alertify.message('Normal message');
});
/******/ })()
;
