function dxShowNoty(type, text, buttons) {
    buttons = buttons || false;


    var n = $('.noty-conteiner').noty({
        text        : text, // [string|html] can be HTML or STRING
        type        : type, // success, error, warning, information, notification
        dismissQueue: true,
        timeout     : 3000,
        modal: false, // [boolean] if true adds an overlay
        killer: false, // [boolean] if true closes all notifications and shows itself
        closeWith   : ['click'],
        layout      : 'topRight',
        theme       : 'tvdom_noty', //or defaultTheme
        maxVisible  : 5,
       template    : '<span class="close-msg" data-tab="er-msg2">&#10006;</span><div class="noty_message"><span class="noty_text"></span><div class="noty_close"></div></div>',
       buttons     : buttons
    });
}



