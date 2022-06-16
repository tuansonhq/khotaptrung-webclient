$('.timkiem-button-ct').on('click',function () {
   let keyword = convertToSlug($('#keyword--search').val());
   $('.js-service').each(function () {
       let slug_service = $(this).find('img').attr('alt');
       $(this).toggle(slug_service.indexOf(keyword) > -1)
   })
});
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
// only allow numeric input
$('input[numberic]').on('keypress', function (e) {
    if (isNaN(this.value + String.fromCharCode(e.keyCode))) return false;
});

let data_params = JSON.parse($('#data_params').val());

console.log(data_params);

let purchase_name;

data_params['filter_type'] == 7 ?
    purchase_name = data_params['filter_name'] :
    purchase_name ='VNĐ';
let server = -1;
let input_pack = $('#input_pack');
let txt_price = $('#txt-price');

UpdateTotal();
input_pack.bind('focus keyup', function () {
    UpdateTotal();
});

$('select[name=server]').on('change',function () {
    UpdatePrice();
});

function UpdateTotal() {
    var price = parseInt(input_pack.val().replace(/,/g, ''));

    if (typeof price != 'number' || price < data_params['input_pack_min'] || price > data_params['input_pack_max']) {
        // $('button[type="submit"]').addClass('not-allow');
        txt_price.text('Tiền nhập không đúng');
        return;
    } else {
        // $('button[type="submit"]').removeClass('not-allow');
    }
    var total = 0;
    var index = 0;
    var current = 0;
    var discount = 0;

    if (data_params.server_mode == 1 && data_params.server_price == 1) {

        var s_price = data_params["price" + server];
        var s_discount = data_params["discount" + server];
    }
    else {
        var s_price = data_params["price"];
        var s_discount = data_params["discount"];
    }
    for (var i = 0; i < s_price.length; i++) {

        if (price >= s_price[i] && s_price[i] != null) {
            current = s_price[i];
            index = i;
            discount = s_discount[i];
            total = price * s_discount[i];

        }
    }
    $('[name="value"]').val('');
    $('[name="value"]').val(price);
    total = parseInt(total / 1000 * data_params.input_pack_rate);

    $('#txt-discount').val(discount);
    total = total.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
    total = total.split('').reverse().join('').replace(/^[\.]/,'');
    txt_price.html('');
    txt_price.text(total + " " + purchase_name);
    // txt_price.removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
    //     $(this).removeClass();
    // });
    $('[name="selected"]').val(price);
    $('.m-datatable__body tbody tr.selected').removeClass('selected');
    $('.m-datatable__body tbody tr').eq(index).addClass('selected');
}



function UpdatePrice() {
    let itemselect = -1;
    var price = 0;
    if (itemselect == -1) {
        return;
    }

    if (data.server_mode == 1 && data.server_price == 1) {
        var s_price = data["price" + server];
        price = parseInt(s_price[itemselect]);
    }
    else {
        var s_price = data["price"];
        price = parseInt(s_price[itemselect]);
    }
    $('[name="value"]').val('');
    $('[name="value"]').val(price);
    price = price.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
    price = price.split('').reverse().join('').replace(/^[\.]/,'');
    $('#txt-price').html('Tổng: ' + price + ' VNĐ');
    $('[name="selected"]').val($(".s-filter").val());

    $('#txt-price').removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $(this).removeClass();
    });
    $('tbody tr.selected').removeClass('selected');
    $('tbody tr').eq(itemselect).addClass('selected');
}
