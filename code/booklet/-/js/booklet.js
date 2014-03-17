$(function(){
    $('#donate-btn').on('click', function(){
        ga('send', 'event', 'button', 'click', "donate");
    });
});