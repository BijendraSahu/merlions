/**
 * Created by Pinku Kesharwani on 12/01/2018.
 */
    $(document).ready(function () {
        /*--------------------Popup Click Event----------*/

    });
var append_this="<div onclick='GloCloseModel();' class='modal-backdrop fade in'></div>";
    function update_password() {
        $('#myModal_UpdatePassword').addClass('in');
        $('#myModal_UpdatePassword').show();
        $('body').append(append_this);
        $('body').addClass('modal-open');
    }
function Model_NewAdd() {
    $('#Modal_NewAdd').addClass('in');
    $('#Modal_NewAdd').show();
    $('body').append(append_this);
    $('body').addClass('modal-open');
}
function  GloCloseModel() {
    $('#Modal_NewAdd').hide();
    $('#myModal_UpdatePassword').hide();
    $('#Modal_NewAdd').removeClass('in');
    $('#myModal_UpdatePassword').removeClass('in');
    $('body').removeClass('modal-open');
    var thisbox=$('body').find('.modal-backdrop');
    $(thisbox).remove();
}


function ShowSuccessPopupMsg(msg) {
    $('#sucess_popup').find('.dynamic_popuptxt').text(msg);
    $('#sucess_popup').addClass('show_popup');
}
function ShowErrorPopupMsg(msg) {
    $('#error_popup').find('.dynamic_popuptxt').text(msg);
    $('#error_popup').addClass('show_popup');
}
function HidePopoupMsg() {
    $('.popup_bgcolor').removeClass('show_popup');
}