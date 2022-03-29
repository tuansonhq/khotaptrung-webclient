$(document).ready(function(){

    let page = $('#hidden_page_service__account').val();

    $(document).on('click', '.paginate__v1__account .pagination a',function(event){
        event.preventDefault();

        var page = $(this).attr('href').split('page=')[1];

        $('#hidden_page_service__account').val(page);

        $('li').removeClass('active');
        $(this).parent().addClass('active');

        var id_data = $('.id_data__account').val();
        var title_data = $('.title_data__account').val();
        var price_data = $('.price_data__account').val();
        var status_data = $('.status_data__account').val();
        var select_data = $('.select_data__account').val();

        loadDataAccountList(page,id_data,title_data,price_data,status_data,select_data)
        // loadDataAccountList(page);
    });

    function loadDataAccountList(page,id_data,title_data,price_data,status_data,select_data) {
        let slug_category = $('.slug_category').val();
        let slug = $('.slug').val();

        var url = '/' + slug_category + '/' + slug;
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
                select_data:select_data
            },
            beforeSend: function (xhr) {

            },
            success: (data) => {
                $("#account_data").empty().html('');
                $("#account_data").empty().html(data);
            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }

    $(document).on('submit', '.form-charge', function(e){
        e.preventDefault();

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

        var page = $('#hidden_page_service').val();

        loadDataAccountList(page,id_data,title_data,price_data,status_data,select_data)

    });

    $('body').on('click','.btn-all',function(e){

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

        var page = $('#hidden_page_service').val();

        loadDataAccountList(page,id_data,title_data,price_data,status_data,select_data)

    });

    $(document).on('submit', '.form-charge-mobile', function(e){
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

        var page = $('#hidden_page_service').val();

        loadDataAccountList(page,id_data,title_data,price_data,status_data,select_data)

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

        var page = $('#hidden_page_service').val();

        loadDataAccountList(page,id_data,title_data,price_data,status_data,select_data)

    });
})
