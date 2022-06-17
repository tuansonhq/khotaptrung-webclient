$('.timkiem-button-ct').on('click', function () {
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
console.log(data_params)
let purchase_name;
data_params['filter_type'] == 7 ? purchase_name = data_params['filter_name'] : purchase_name = 'VNĐ';

let input_pack = $('#input_pack');
let txt_price = $('#txt-price');
let server = -1;
server = parseInt($('select[name=server] option').filter(':selected').val());

switch (data_params['filter_type']) {
    // Dạng tiền tệ
    case '3':
        break
    // chọn một
    case '4':
        let itemselect = -1;
        $("select[name=selected]").change(function (elm, select) {
            itemselect = parseInt($('select[name=selected] option').filter(':selected').val());
            UpdatePrice4();
        });
        $("select[name=server]").change(function (elm, select) {
            server = parseInt($('select[name=server] option').filter(':selected').val());
            UpdatePrice4();
        });
        itemselect = parseInt($('select[name=selected] option').filter(':selected').val());
        UpdatePrice4();

    function UpdatePrice4() {
        let price = 0;
        if (itemselect == -1) {
            return;
        }

        if (data_params.server_mode == 1 && data_params.server_price == 1) {
            let s_price = data_params["price" + server];
            price = parseInt(s_price[itemselect]);
        } else {
            let s_price = data_params["price"];
            price = parseInt(s_price[itemselect]);
        }

        price = price.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g, '$1.');
        price = price.split('').reverse().join('').replace(/^[\.]/, '');
        txt_price.text(price + ' VNĐ');

        // $('[name="selected"]').val($(".s-filter").val());

        // $('#txtPrice').removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        //     $(this).removeClass();
        // });
        // $('tbody tr.selected').removeClass('selected');
        // $('tbody tr').eq(itemselect).addClass('selected');
    }

    function ConfirmBuy(value) {
        var index = $('.server-filter').val();
        Confirm(value, index);
    }

        break;
    // Dạng chọn nhiều
    case '5':
        $('#select-multi input[type="checkbox"]').change(function () {
            UpdatePrice5();
        });
    function UpdatePrice5() {
        var total = 0;
        var itemselect = '';
        if (data_params.server_mode == 1 && data_params.server_price == 1) {
            var s_price = data_params["price" + server];
        }
        else {
            var s_price = data_params["price"];
        }

        let checked = $('#select-multi input[type="checkbox"]:checked');
        if (checked.length > 0) {
            checked.each(function (idx, elm) {
                total += parseInt(s_price[$(elm).val()]);
                if (!!itemselect) {
                    itemselect += '|';
                }
                itemselect += $(elm).val();
            });
        }
        total = total.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
        total = total.split('').reverse().join('').replace(/^[\.]/,'');
        txt_price.text(total + ' VNĐ');
    }
        break
    // trong khoảng
    case '6':
        $('.js-selected').on('change', function () {
            UpdatePrice6();
        });
        UpdatePrice6();

        function UpdatePrice6() {
            let rank_from = $('select[name=rank-from] option').filter(':selected').val();
            let rank_to = $('select[name=rank-to] option').filter(':selected').val();
            let price = data_params.price;

            let total = 0;
            if (rank_from < rank_to){
                for (var i = parseInt(rank_from + 1); i <= rank_to; i++) {
                    total += parseInt(price[i] - price[i-1]);
                }
            }


        total = total.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
        total = total.split('').reverse().join('').replace(/^[\.]/,'');
        txt_price.html(total + ' VNĐ');
    }
        break;
    // điền số tiền
    case '7':

    function UpdateTotal() {

        var price = parseInt(input_pack.val().replace(/,/g, ''));
        // console.log(price)
        if (typeof price != 'number' || price < data_params['input_pack_min'] || price > data_params['input_pack_max']) {
            // $('button[type="submit"]').addClass('not-allow');
            txt_price.text('Tiền nhập không đúng');
            return;
        }
        var total = 0;
        var index = 0;
        var current = 0;
        var discount = 0;
        let server_id = server;

        if (!!price) {
            if (data_params.server_mode == 1 && data_params.server_price == 1) {
                var s_price = data_params["price" + server_id];
                var s_discount = data_params["discount" + server_id];
                for (var i = 0; i < s_price.length; i++) {

                    if (price >= s_price[i] && s_price[i] != null) {
                        current = s_price[i];
                        index = i;
                        discount = s_discount[i];
                        total = price * s_discount[i];
                    }
                }
            } else {
                var s_price = data_params["price"];
                var s_discount = data_params["discount"];
                discount = s_discount[server_id];
                total = price * discount;
            }
            total = parseInt(total / 1000 * data_params.input_pack_rate);

            $('#txt-discount').val(discount);
            total = total.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g, '$1.');
            total = total.split('').reverse().join('').replace(/^[\.]/, '');
            txt_price.html('');
            txt_price.text(total + " " + purchase_name);
        } else {
            txt_price.text('Tiền nhập không đúng');
        }
    }

    function UpdatePrice() {

        var container = $('.m-datatable__body').html('');


        if (data_params.server_mode == 1 && data_params.server_price == 1) {

            var s_price = data_params["price" + server];
            var s_discount = data_params["discount" + server];
        } else {
            var s_price = data_params["price"];
        }


        for (var i = 0; i < data_params.name.length; i++) {

            var price = s_price[i];
            var discount = s_price[i];


            if (s_price != null && s_discount != null) {
                var ptemp = '';

                if (data.length == 1) {
                    ptemp = '<td style="width:180px;" class="m-datatable__cell"> <a class="btn-style border-color" href="/service/purchase/2.html?selected=' + price + '&server=' + server + '">Thanh toán</a> </td> </tr>';
                } else {
                    ptemp = '<td style="width:180px;" class="m-datatable__cell"> <a onclick="Confirm(' + price + ',' + server + ')" class="btn-style border-color">Thanh toán</a> </td> </tr>';
                }
                var temp = '<tr class="m-datatable__row m-datatable__row--even">' +
                    '<td style="width:30px;" class="m-datatable__cell">' + (i + 1) + '</td>' +
                    '<td class="m-datatable__cell">' + data_params.name[i] + '</td>' +
                    '<td style="width:150px;" class="m-datatable__cell">' + price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' VNĐ</td>' +
                    '<td style="width:250px;" class="m-datatable__cell">' + discount + '</td>' +
                    '<td style="width:180px;" class="m-datatable__cell">' + (parseInt(price * discount / 1000 * data_params.input_pack_rate)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' ' + purchase_name + '</td>' + ptemp

                $(temp).appendTo(container);
            }
        }
        UpdateTotal();
    }

        input_pack.bind('focus keyup', function () {
            UpdateTotal();
        });
        $('select[name=server]').on('change', function () {
            UpdateTotal()
        });
        UpdateTotal()
        break;
    default:
}
