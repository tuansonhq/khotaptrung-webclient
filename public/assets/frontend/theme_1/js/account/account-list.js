$(document).ready(function(){

    let page = $('#hidden_page_service').val();

    $(document).on('click', '.paginate__v1 .pagination a',function(event){
        event.preventDefault();

        var page = $(this).attr('href').split('page=')[1];

        $('#hidden_page_service').val(page);

        $('li').removeClass('active');
        $(this).parent().addClass('active');

        var id_data = $('.id_data').val();
        var title_data = $('.title_data').val();
        var price_data = $('.price_data').val();
        var status_data = $('.status_data').val();
        var select_data = $('.select_data').val();
        var sort_by_data = $('.sort_by_data').val();


        loadDataAccountList(page,id_data,title_data,price_data,status_data,select_data,sort_by_data)
        // loadDataAccountList(page);
    });

    loadDataAccountList()

    function loadDataAccountList(page,id_data,title_data,price_data,status_data,select_data,sort_by_data) {
        let slug_category = $('.slug_category').val();
        let slug = $('.slug').val();

        var url = '/mua-acc/' + slug + '';

        if (page == null || page == '' || page == undefined){
            page = 1;
        }
        // alert(url)
        request = $.ajax({
            type: 'GET',
            url: url,
            data: {
                page:page,
                id_data:id_data,
                title_data:title_data,
                price_data:price_data,
                status_data:status_data,
                select_data:select_data,
                sort_by_data:sort_by_data
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {

                if (data.status == 0){

                    var html = '';
                    html += '<div class="row pb-3 pt-3"><div class="col-md-12 text-center"><span style="color: red;font-size: 16px;">' + data.message + '</span></div></div>';

                    $("#account_data").empty().html('');
                    $("#account_data").empty().html(html);

                    $('.loading-data__timkiem').html('');
                    $('.loading-data__all').html('');
                }else if (data.status == 1){
                    $(".booking_detail")[0].scrollIntoView();

                    $("#account_data").empty().html('');

                    $("#account_data").empty().html(data.data);

                    $("#load_attribute").empty().html('');

                    $("#load_attribute").empty().html(data.htmlatr);

                    $("#load_attribute_mobile").empty().html('');

                    $("#load_attribute_mobile").empty().html(data.htmlatrmobile);

                    $('.loading-data__timkiem').html('');
                    $('.loading-data__all').html('');
                }

            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }

    $(document).on('submit', '.form-charge__accountlist', function(e){
        e.preventDefault();
        var htmlloading = '';

        htmlloading += '<div class="loading"></div>';
        $('.loading-data__timkiem').html('');
        $('.loading-data__timkiem').html(htmlloading);
        var id = $('.id').val();
        var title = $('.title').val();
        var price = $('.price').val();
        var status = $('.status').val();
        var itemselect = '';
        $('.select').each(function (idx, elm) {
            if (itemselect != '') {
                itemselect += '|';
            }

            itemselect += $(elm).val();
        })
        if (id == null || id == undefined || id == ''){
            $('.id_data').val('');
        }else {
            $('.id_data').val(id);
        }

        if (title == null || title == undefined || title == ''){
            $('.title_data').val('');
        }else {
            $('.title_data').val(title);
        }

        if (price == null || price == undefined || price == ''){
            $('.price_data').val('');
        }else {
            $('.price_data').val(price);
        }

        if (status == null || status == undefined || status == ''){
            $('.status_data').val('');
        }else {
            $('.status_data').val(status);
        }

        if (itemselect == null || itemselect == undefined || itemselect == ''){
            $('.select_data').val('');
        }else {
            $('.select_data').val(itemselect);
        }


        var id_data = $('.id_data').val();
        var title_data = $('.title_data').val();
        var price_data = $('.price_data').val();
        var status_data = $('.status_data').val();
        var select_data = $('.select_data').val();
        var sort_by_data = $('.sort_by_data').val();

        $('#hidden_page_service').val(1);
        var page = $('#hidden_page_service').val();

        loadDataAccountList(page,id_data,title_data,price_data,status_data,select_data,sort_by_data)

    });

    $('body').on('click','.btn-all',function(e){
        e.preventDefault();
        var htmlloading = '';
        htmlloading += '<div class="loading"></div>';
        $('.loading-data__all').html('');
        $('.loading-data__all').html(htmlloading);
        $('.id_data').val('');
        $('.title_data').val('');
        $('.price_data').val('');
        $('.status_data').val('');
        $('.select_data').val('');

        var id_data = $('.id_data').val();
        var title_data = $('.title_data').val();
        var price_data = $('.price_data').val();
        var status_data = $('.status_data').val();
        var select_data = $('.select_data').val();
        var sort_by_data = $('.sort_by_data').val();
        var page = $('#hidden_page_service').val();

        loadDataAccountList(page,id_data,title_data,price_data,status_data,select_data,sort_by_data)

    });

    $(document).on('submit', '.form-charge__accountlist-mobile', function(e){
        e.preventDefault();

        var id = $('.id-mobile').val();
        var title = $('.title-mobile').val();
        var price = $('.price-mobile').val();
        var status = $('.status-mobile').val();
        var itemselect = '';
        $('.select-mobile').each(function (idx, elm) {
            if (itemselect != '') {
                itemselect += '|';
            }

            itemselect += $(elm).val();
        })
        if (id == null || id == undefined || id == ''){
            $('.id_data').val('');
        }else {
            $('.id_data').val(id);
        }

        if (title == null || title == undefined || title == ''){
            $('.title_data').val('');
        }else {
            $('.title_data').val(title);
        }

        if (price == null || price == undefined || price == ''){
            $('.price_data').val('');
        }else {
            $('.price_data').val(price);
        }

        if (status == null || status == undefined || status == ''){
            $('.status_data').val('');
        }else {
            $('.status_data').val(status);
        }

        if (itemselect == null || itemselect == undefined || itemselect == ''){
            $('.select_data').val('');
        }else {
            $('.select_data').val(itemselect);
        }


        var id_data = $('.id_data').val();
        var title_data = $('.title_data').val();
        var price_data = $('.price_data').val();
        var status_data = $('.status_data').val();
        var select_data = $('.select_data').val();
        var sort_by_data = $('.sort_by_data').val();
        $('#hidden_page_service').val(1);
        var page = $('#hidden_page_service').val();

        loadDataAccountList(page,id_data,title_data,price_data,status_data,select_data,sort_by_data)

    });

    $('body').on('click','.btn-all-mobile',function(e){

        $('.id_data').val('');
        $('.title_data').val('');
        $('.price_data').val('');
        $('.status_data').val('');
        $('.select_data').val('');

        var id_data = $('.id_data').val();
        var title_data = $('.title_data').val();
        var price_data = $('.price_data').val();
        var status_data = $('.status_data').val();
        var select_data = $('.select_data').val();
        var sort_by_data = $('.sort_by_data').val();
        var page = $('#hidden_page_service').val();

        loadDataAccountList(page,id_data,title_data,price_data,status_data,select_data,sort_by_data)

    });

    $('body').on('click','.sort_by',function(e){


        var id_data = $('.id_data').val();
        var title_data = $('.title_data').val();
        var price_data = $('.price_data').val();
        var status_data = $('.status_data').val();
        var select_data = $('.select_data').val();

        var sort_by = $('.sort_by').val();
        $('.sort_by_data').val(sort_by);
        var sort_by_data = $('.sort_by_data').val();
        var page = $('#hidden_page_service').val();

        loadDataAccountList(page,id_data,title_data,price_data,status_data,select_data,sort_by_data)

    });

    $('body').on('click','.sort_by_mobile',function(e){


        var id_data = $('.id_data').val();
        var title_data = $('.title_data').val();
        var price_data = $('.price_data').val();
        var status_data = $('.status_data').val();
        var select_data = $('.select_data').val();

        var sort_by = $('.sort_by_mobile').val();
        $('.sort_by_data').val(sort_by);
        var sort_by_data = $('.sort_by_data').val();
        var page = $('#hidden_page_service').val();

        loadDataAccountList(page,id_data,title_data,price_data,status_data,select_data,sort_by_data)

    });
})
