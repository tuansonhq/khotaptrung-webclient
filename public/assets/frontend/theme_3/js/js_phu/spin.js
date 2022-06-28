$(document).ready(function () {
    setActiveTable();
    setActiveTableMobile();
    var started_at = $('.started_at').val();

    $('#numrolllop').niceSelect();

    // Set the date we're counting down to
    var countDownDate = new Date(started_at).getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var hours = Math.floor((distance / (1000 * 60 * 60)));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element
        $('#hourRemain').text(hours);
        $('#minuteRemain').text(minutes);
        $('#secondRemain').text(seconds);


        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            $('#hourRemain').text('0');
            $('#minuteRemain').text('0');
            $('#secondRemain').text('0');
        }
    }, 1000);

    //See more see less button functions
    $('#seeMore').click(function (e) {
        e.preventDefault();
        $('.service-detail-content').addClass('show-content');
        $(this).css('display','none');
        $('#seeLess').css('display', 'block');
    });

    $('#seeLess').click(function (e) {
        e.preventDefault();
        $('.service-detail-content').removeClass('show-content');
        $(this).css('display','none');
        $('#seeMore').css('display', 'block');
    });

    $('.leaderboard-seemore').click(function (e) {
        e.preventDefault();
        $('.leaderboard-md .leaderboard-content').addClass('leaderboard-content-showmore');
        $(this).css('display','none');
    });

    //Game rule modal show up
    $('#gamRuleButton').click(function() {
        $('#rotationRule').modal('show');
    });

    //Game prize modal show up
    $('#playButton').click(function() {
        $('#rotationPrize').modal('show');
    });

    //History Spin modal show up
    $('.history-spin-button').click(function() {
        $('#rotationHistory').modal('show');
    });

    //Change leaderboard table
    $('.leaderboard-lg .listed-date').click( function (e) {
        var index = $('.leaderboard-lg .listed-date').index(this);
        $('.leaderboard-lg .leaderboard-content').css('display', 'none');
        if ( index == 0 ) {
            $('.leaderboard-lg .leaderboard-1').css('display', 'block');
        }
        if ( index == 1 ) {
            $('.leaderboard-lg .leaderboard-2').css('display', 'block');
        }
        if ( index == 2 ) {
            $('.leaderboard-lg .leaderboard-3').css('display', 'block');
        }
        $('.leaderboard-lg .listed-date').removeClass('listed-table-active');
        $(this).addClass('listed-table-active');
        $('.leaderboard-lg .date-listing').css('transform', `translate3d(${index * 100}%, 0px, 0px)` );
        $('.leaderboard-lg .date-listing').css('width', `${$(this).parent().width()}px` );
    });

    //Change leaderboard table mobile
    $('.leaderboard-md .listed-date').click( function (e) {
        var index = $('.leaderboard-md .listed-date').index(this);
        $('.leaderboard-md .leaderboard-content').css('display', 'none');
        if ( index == 0 ) {
            $('.leaderboard-md .leaderboard-1').css('display', 'block');
        }
        if ( index == 1 ) {
            $('.leaderboard-md .leaderboard-2').css('display', 'block');
        }
        if ( index == 2 ) {
            $('.leaderboard-md .leaderboard-3').css('display', 'block');
        }
        $('.leaderboard-md .listed-date').removeClass('listed-table-active');
        $(this).addClass('listed-table-active');
        $('.leaderboard-md .date-listing').css('transform', `translate3d(${index * 100}%, 0px, 0px)` );
        $('.leaderboard-md .date-listing').css('width', `${$(this).parent().width()}px` );
    });

    //Set active leaderboard date tabs
    function setActiveTable() {
        let width = $('.leaderboard-lg .listed-date').first().parent().width();
        $('.leaderboard-lg .listed-date').first().addClass('listed-table-active');
        $('.leaderboard-lg .date-listing').css('transform', `translate3d(0%, 0px, 0px)` );
        $('.leaderboard-lg .date-listing').css('width', `${width}px` );
    }

    function setActiveTableMobile() {
        let width = $('.leaderboard-md .listed-date').first().parent().width();
        $('.leaderboard-md .listed-date').first().addClass('listed-table-active');
        $('.leaderboard-md .date-listing').css('transform', `translate3d(0%, 0px, 0px)` );
        $('.leaderboard-md .date-listing').css('width', `${width}px` );
    }


    function handleToggleContent(){
        $('.js-toggle-content .view-less').toggle();
        $('.js-toggle-content .view-more').toggle();
        if ($('.view-less').is(":visible")) {

            $('.content-video-in').css('max-height', 'initial')

        } else {

            $('.content-video-in').css('max-height', '')
        }
    }

    $('.js-toggle-content').click(function () {
        handleToggleContent();
    });


});
