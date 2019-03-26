(function ($) {

    // Init Wow
    wow = new WOW( {
        animateClass: 'animated',
        offset:       100
    });
    wow.init();

    // Countdown
    if ($('#countdown').length) {
        $('#countdown').countdown({
            render: function(data) {
                if (data.years >= 1) {
                    var $days = (data.years*365)+data.days;
                } else {
                    var $days = data.days;
                }
                $(this.el).html(
                    '<p class="day">' + this.leadingZeros($days) + 'J | '
                    + this.leadingZeros(data.hours, 2) + ' : '+
                    this.leadingZeros(data.min, 2) + ' : '+
                    this.leadingZeros(data.sec, 2) + '</p>'
                );
            }
        });
    }

})(jQuery);
