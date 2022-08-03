function loadData(elm_form){
    let overlay_find = $('.filter-history');
    let root_elm = $('#params-filter');
    root_elm.html('');
    let html_append = '';
    let length = 0;
    let sort_data = [];
    let sort_data_el = elm_form.find('[name]');
    Array.from(sort_data_el).forEach(function (elm) {
        if ($(elm)[0].tagName === 'INPUT' && !!$(elm).val().trim()){
            let key = $(elm).attr('name');
            let value = $(elm).val();
            sort_data.push([key,value])
            ++length;
        }
        if ($(elm)[0].tagName === 'SELECT' && !! $(elm).find(':selected').length && $(elm).find(':selected').val()){
            let key = $(elm).attr('name');
            let text = $(elm).find(':selected').text();
            let value = $(elm).find(':selected').val();
            sort_data.push([key,value,text]);
            ++length;
        }
    });
    let url = location.protocol + '//' + location.host + location.pathname;
    let url_return = '';
    for (let i = 0; i < length; i++) {
        let count_params = sort_data[i].length;
        html_append = '';
        html_append += `<div class="tag" data-close="${sort_data[i][0]}">`;
        if (count_params === 2){
            if (sort_data[i][0] === 'started_at' || sort_data[i][0] === 'ended_at'){
                console.log(123)
                let start = $(elm_form).find('input[name=started_at]');
                let end = $(elm_form).find('input[name=ended_at]');
                if (!!start.val().trim() && !!end.val().trim()){
                    html_append += `${start.val().trim()} - ${end.val().trim()}`;
                }
                else if (!!start.val().trim()){
                    html_append += `Sau - ${sort_data[i][1]}`;
                }
                else if (!!end.val().trim()){
                    html_append += `Trước - ${sort_data[i][1]} `;
                }
            }
            else {
                console.log(321)
                html_append += `${sort_data[i][1]}`;
            }
        }
        if (count_params === 3) {
            html_append += `${sort_data[i][2]}`;
        }
        html_append += `</div>`;
        root_elm.append(html_append);

        //    add params to url
        if (!i) {
            url_return = url +`?${sort_data[i][0]}=${sort_data[i][1]}`;
        } else {
            url_return += `&${sort_data[i][0]}=${sort_data[i][1]}`;
        }
    }
    const urlParams = new URLSearchParams(window.location.search);
    const page = urlParams.get('page');
    if (!!page){
        url_return += `&page=${page}`;
        url += `?page=${page}`;
    }
    if (length){
        window.history.pushState({}, null, url_return);
    }else {
        window.history.pushState({}, null, url);
    }

    if ($('.tag[data-close=started_at]').length && $('.tag[data-close=ended_at]').length){
        --length;
        $('.tag[data-close=ended_at]').remove();
    }
    overlay_find.attr('data-notify',length);
}
function hasQueryParams(url) {
    return url.includes('?');
}
function updateQueryStringParameter(uri, key, value) {
    var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
    var separator = uri.indexOf('?') !== -1 ? "&" : "?";
    if (uri.match(re)) {
        return uri.replace(re, '$1' + key + "=" + value + '$2');
    }
    else {
        return uri + separator + key + "=" + value;
    }
}
$(document).ready(function () {
    let form_filter = width < 992 ? $('.bottom-sheet .form-filter') : $('.modal .form-filter');
    if (form_filter.length) {
        form_filter.on('submit',function (e) {
            e.preventDefault();
            loadData($(this));
            setParamsUrlToQuery();
            loadDataApi(query);
            page_history = 1;
            if (width > 992) {
                $(this).closest('.modal').modal('hide');
            } else {
                closeSheet();
            }
        });
        form_filter.on('reset',function () {
            $('.form-filter select').niceSelect('update');
        })
        let url = window.location.href;

        loadData(form_filter);
        /*chỗ này là vừa vào đã load luôn*/
        setParamsUrlToQuery();
        loadDataApi(query);
    }

    $(document).on('click','#params-filter .tag',function () {
        let target_name = $(this).data('close');
        if (target_name === 'started_at'){
            $('.form-filter [name=started_at],.form-filter [name=ended_at]').val('');
        }
        let target = $(`.form-filter [name=${target_name}]`);
        target.val('');
        loadData(form_filter);
        setParamsUrlToQuery();
        loadDataApi(query);
        page_history = 1;
        $('.form-filter select').niceSelect('update');
    });

    /*get params on url*/
    function setParamsUrlToQuery() {
        let url = window.location.href;
        if (hasQueryParams(url)){
            const urlSearchParams = new URLSearchParams(window.location.search);
            const params = Object.fromEntries(urlSearchParams.entries());
            Object.keys(params).forEach(key => {
                query[key] = params[key];
                $(form_filter).find('select').niceSelect('update');
                let input = $(form_filter).find(`[name=${key}]`);
                input.val(params[key]);
            });

            /*nếu như mà trên url không có page thì phải gán lại cho nó là 1*/
            !params.page ? query.page = 1 : '';
        }
        else {
            for (const key in query) {
                query[key] = '';
            }
            query.page = 1;
        }
    }
    /*Load More*/

    /*Page mặc định vừa vào là 1*/
    let page_history = 1;
    if (typeof content_history !== 'undefined'){
        content_history.on('scroll',function () {
            let end = parseInt($(this).prop('scrollHeight')) - parseInt($(this).outerHeight());
            /*nếu như lăn tới cuối cùng của bảng*/
            if (parseInt($(this).scrollTop()) >= end){
                page_history++;
                query.page = page_history;
                history_see_more = true;
                /*nếu không phải là trang cuối thì mới load*/
                if (!is_last_page){
                    loadDataApi(query);
                }
            }
        });
    }
});
