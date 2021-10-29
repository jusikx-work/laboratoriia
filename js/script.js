$(document).ready(function() {
    $('.header__burger').click(function(event){
        $('.header__burger, .menu, .log, .lab, .control, .text-lab, .gg-img, label, input').toggleClass('active');
        $('body').toggleClass('lock');
    });

});


