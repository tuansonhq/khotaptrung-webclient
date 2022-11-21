$(document).ready(function() {

    // $('.table-of-content').contentify({
    //     title:'Mục lục',
    //     headingSelectors: ['.article--content__text h2','.article--content__text h3','.article--content__text h4'],
    //     scrollDuration: 700,
    //     tocToggle: true
    // });


    // $(document).on('click', '.contentify_title_toggle', function(e) {
    //     e.preventDefault();

    //     if ( $('.table-of-content').hasClass('toc-close') ) {
    //         $('.contentify_0').slideDown(1000);
            
    //         $('.table-of-content').removeClass('toc-close');
    //     } else {
    //         $('.contentify_0').slideUp(1000);
    //         $('.contentify_0').animate({
    //             left: $(".contentify_0").width(),
    //             width: '0px'
    //         }, 500);
    //         $('.table-of-content').addClass('toc-close');
    //     }
    // });

    var options = {
        opened: false,
        target: '.article--content__text',
        smooth: true,
        headText: 'Mục lục',
        headLinkText: ['open', 'close']
    };
    $.toctoc(options);
});