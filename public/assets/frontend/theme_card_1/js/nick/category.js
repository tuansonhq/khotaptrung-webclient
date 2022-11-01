$(document).ready(function(){

    $('#txtSearchNick').donetyping(function() {

        let keyword = convertToSlug($(this).val());

        let index = 0;
        let value = 0;
        $('.entries_item_nick').each(function (i,elm) {
            $(this).removeClass('dis-block');
        })

        $('.entries_item_nick').each(function (i,elm) {
            // $('.body-modal__nick__text-error').css('display','none');
            let slug_item = $(elm).find('img').attr('alt');
            slug_item = convertToSlug(slug_item);
            $(this).toggle(slug_item.indexOf(keyword) > -1);
            if (slug_item.indexOf(keyword) > -1){
                ++index;
                $(this).addClass('dis-block');
            }else {

            }
            $('#btn-expand-serivce-nick').remove();
            $('#btn-expand-serivce-nick-search').remove();
        })


        $('.dis-block').each(function (i,elm) {
            if (i>=8){
                $(this).css('display','none');
            }
        })
        if (index <= 8){
            value = 1;
        }else if (index <= 16){
            value = 2;
        }else if (index <= 24){
            value = 3;
        }else if (index <= 32){
            value = 4;
        }else if (index <= 40){
            value = 5;
        }

        if (value > 1){

            let htmlnick = '<button id="btn-expand-serivce-nick-search" class="expand-button" data-page-current="1" data-page-max="' + value + '">Xem thêm danh mục</button>';
            $('.fix-border-nick').append(htmlnick);
        }

        if (index == 0){
            $('.data-nick-search').css('display','block');
        }else {
            $('.data-nick-search').css('display','none');
        }
        //$(this).val() // get the current value of the input field.
    }, 400);

    function convertToSlug(title) {
        var slug;
        //Đổi chữ hoa thành chữ thường
        slug = title.toLowerCase();
        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        // trả về kết quả
        return slug;
    }
})