
/* Biến query này có thể gọi ở mọi chỗ (để sửa tham số để lọc)*/
let query = {  page:1, id_data:'',status:'',started_at:'',ended_at:'',price:'',serial:''};
/* Biến history_see_more là cờ đánh dấu load bình thường và load more*/
let history_see_more = false;
/*__________________________*/
let content_history = $('.list-content');
let wrap_history = content_history.length ? content_history.parent() : '';

/*Khi is_last_page = true tức là đã tới trang cuối cùng*/
let is_last_page = false;

function loadDataApi(query) {
    let slug = $('.slug').val();

    var url = '/mua-acc/' + slug;
    $.ajax({
        type: 'GET',
        url: url,
        data: query,
        beforeSend: function (xhr) {
            /*Thêm loading khi tải*/
            if (!wrap_history.hasClass('is-load')){
                wrap_history.addClass('is-load');
                let loading =  '<div class="loading-wrap"><span class="modal-loader-spin"></span></div>';
                wrap_history.prepend(loading);
            }
        },
        success: (res) => {
            console.log(res)
            if (res.status === 1) {
                let html ='';
                html = res.data;

                content_history.html(html);

            }
            if (res.status === 0) {
                let html = `<div class="invalid-color text-center">${res.message}</div>`
                content_history.html(html);
            }
            if (res.status === 404){
                /* lúc này là trang cuối cùng */
                is_last_page = true;
            }
        },
        error: function (data) {

        },
        complete: function (data) {
            /*Dừng loading khi tải xong*/
            wrap_history.removeClass('is-load')
            wrap_history.find('.loading-wrap').remove();
        }
    });
}

