$(document).ready(function(){

    const media = "https://media-tt.nick.vn/";

    getDetailService()

    function getDetailService() {
        let slug = $('#slug').val();

        request = $.ajax({
            type: 'GET',
            url: '/dich-vu/'+ slug +'/data',
            data: {

            },
            beforeSend: function (xhr) {

            },
            success: (response) => {
                if (response.status == 1){
                    //Data show detail
                    console.log(response)
                    var html = '';

                    html += '<div class="row">';
                        //L1
                        html += '<div class="col-md-7" style="margin-bottom:20px;">';
                            html += '<div class="row">';
                                //L1
                                html += '<div class="col-md-5 hidden-xs hidden-sm">';
                                    //L1
                                    html += '<div class="row">';
                                        html += '<div class="news_image ">';
                                            html += '<img src="' + media + response.imagedetail + '" alt="' + response.titledetail + '">';
                                        html += '</div>';
                                    html += '</div>';
                                    //L2
                                    html += '<div class="row__face">';
                                        //L1
                                        html += '<p style="margin-top: 15px" class="bb">';
                                            html += '<i class="fas fa-calendar-check" aria-hidden="true" style="margin-right: 8px"></i>';
                                            html += response.titledetail;
                                        html += '</p>';
                                        //L2
                                        // html += '<p style="margin-top: 15px" class="bb">';
                                        //     html += '<i class="fas fa-server" aria-hidden="true"></i>';
                                        //     html += '<a class="class_a_not" href="/dich-vu/' + response.sluggroup + '" style="color:#32c5d2">';
                                        //         html += response.titlegroup;
                                        //     html += '</a>';
                                        // html += '</p>';
                                    html += '</div>';

                                html += '</div>';
                                //L2

                                html += '<div class="col-md-7">';
    //Kiem tra may chu.
                                    if (response.server_mode == null || response.server_mode == '' || response.server_mode == undefined){}else {
                                        if (response.server_mode == 1){
                                            html += '<span class="mb-15 control-label bb">Chọn máy chủ:</span>';
                                            if (response.server_data == null || response.server_data == '' || response.server_data == undefined){}else {
                                                html += '<div class="mb-15">';
                                                html += '<select name="server[]" class="server-filter form-control t14" style="">';
                                                $.each(response.server_data,function(key,value){
                                                    if (value.indexOf("DELETE") == -1){
                                                        html += '<option value="' + response.server_id[key] + '">';
                                                        html += value;
                                                        html += '</option>';
                                                    }
                                                })
                                                html += '</select>';
                                                html += '</div>';
                                            }
                                        }
                                    }
    //dich vu may chu khac
                                    if (response.filter_type == null || response.filter_type == '' || response.filter_type == undefined){}else {

                                        if (response.filter_type == 1){

                                        }else if (response.filter_type == 4){//dạng chọn một
                                            if (response.name == null || response.name == '' || response.name == undefined){}else {
                                                html += '<span class="mb-15 control-label bb">';
                                                html += response.filter_name;
                                                html += '</span>';
                                                html += '<div class="mb-15">';
                                                html += '<select name="selected" class="s-filter form-control t14" style="">';
                                                $.each(response.name,function(key,value){
                                                    if (value == null || value == '' || value == undefined){}else {
                                                        html += '<option value="' + key + '">';
                                                        html += value;
                                                        html += '</option>';
                                                    }
                                                })
                                                html += '</select>';
                                                html += '</div>';
                                            }
                                        }else if (response.filter_type == 7){//dạng nhập tiền thành toán
                                            var min_price = response.input_pack_min;
                                            min_price = min_price.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                                            min_price = min_price.split('').reverse().join('').replace(/^[\.]/,'');
                                            var max_price = response.input_pack_max;
                                            max_price = max_price.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                                            max_price = max_price.split('').reverse().join('').replace(/^[\.]/,'');

                                            html += '<span class="mb-15 control-label bb">Nhập số tiền cần mua:</span>';
                                            html += '<div class="mb-15">';
                                            html += '<input autofocus="" value="' + response.input_pack_min + '" class="form-control t14 price " id="input_pack" type="text" placeholder="Số tiền">';
                                            html += '<span style="font-size: 14px;">';
                                            html += 'Số tiền thanh toán phải từ ';
                                            html += '<b style="font-weight:bold;">';

                                            html += min_price + 'đ';
                                            html += '</b>';
                                            html += ' đến ';
                                            html += '<b style="font-weight:bold;">';
                                            html += max_price + 'đ';
                                            html += '</b>';
                                            html += '</span>';
                                            html += '</div>';

                                            html += '<span class="mb-15 control-label bb">Hệ số:</span>';
                                            html += '<div class="mb-15">';
                                            html += '<input type="text" id="txtDiscount" class="form-control t14" placeholder="" value="" readonly="">';
                                            html += '</div>';
                                        }else if (response.filter_type == 5){//dạng chọn nhiều
                                            html += '<span class="mb-15 control-label bb">';
                                                html += response.filter_name;
                                            html += '</span>';
                                            html += '<div class="simple-checkbox s-filter">';
                                            if (response.name == null || response.name == '' || response.name == undefined){}else {
                                                $.each(response.name,function(key,value){
                                                    if (value == null || value == '' || value == undefined){}else {
                                                        html += '<p>';
                                                            html += '<input value="' + key + '" type="checkbox" id="' + key + '">';
                                                            html += '<label for="' + key + '">';
                                                            html += value;
                                                            if (response.price[key] == null || response.price[key] == '' || response.price[key] == undefined){}else {
                                                                var price = response.price[key];
                                                                price = price.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                                                                price = price.split('').reverse().join('').replace(/^[\.]/,'');
                                                                html += ' - ' + price + ' VNĐ';
                                                            }
                                                            html += '</label>';
                                                        html += '</p>';
                                                    }
                                                })

                                            }
                                            html += '</div>';

                                        }else if (response.filter_type == 6){//dạng chọn a->b

                                        }
                                    }

                                html += '</div>';

                            html += '</div>';
                        html += '</div>';
                        //L2
                        html += '<div class="col-md-5">';
                            //L1
                            html += '<div class="row emply-btns">';
                                html += '<div class="col-md-8 col-md-offset-2">';
                                    html += '<div class=" emply-btns text-center">';
                                        html += '<input type="hidden" name="selected" value="">';
                                        html += '<input type="hidden" name="value" value="">';
                                        html += '<input type="hidden" name="server">';
                                        html += '<a id="txtPrice" style="font-size: 20px;font-weight: bold;text-decoration: none" class="">Tổng: 0 Xu</a>';
                                        html += '<button id="btnPurchase" data-value="" type="button" style="font-size: 20px;position: relative" class="followus">';
                                        html += '<i class="fa fa-credit-card" aria-hidden="true"></i>';
                                        html += 'Thanh toán';
                                        html += '<div class="row justify-content-center loading-data__thanhtoan">';
                                        // html += '';
                                        html += '</div>';
                                        html += '</button>';
                                    html += '</div>';
                                html += '</div>';
                            html += '</div>';
                            //L2
                            html += '<div class="row emply-btns box-body" style="color: #505050;padding:20px;line-height: 2;margin-top: 30px">';
                                html += response.descriptiondetail;
                            html += '</div>';
                        html += '</div>';

                    html += '</div>';

                    if (response.filter_type == null || response.filter_type == '' || response.filter_type == undefined){}else{
                        if (response.filter_type == 6){
                            html += '<div class="row">';
                                //L1
                                html += '<div class="col-md-12 float_mb">';
                                    html += '<span class="mb-15 control-label bb">';//L1
                                        html += response.filter_name;
                                    html += '</span';
                                    html += '<div class="range_slider" style="">';//L2
                                        html += '<div class="nstSlider" data-range_min="0" data-cur_min="0">';
                                            html += '<div class="bar" ></div>';
                                            html += '<div class="leftGrip"></div>';
                                            html += '<div class="rightGrip"></div>';
                                        html += '</div>';
                                    html += '</div>';
                                    html += '<div class="row service-choice">';//L3
                                        html += '<div class="col-sm-6">';
                                            html += '<h5>Từ</h5>';
                                            html += '<div class="dropdown-field from-field">';
                                                html += '<select class="from-chosen" name="rank_from">';
                                                    if (response.name == null || response.name == '' || response.name == undefined){}else {
                                                        for (var i = 0; i < response.name.length - 1; i++){
                                                            if (response.name[i] == null || response.name[i] == '' || response.name[i] == undefined){}else {
                                                                html += '<option value="' + i + '">';
                                                                html += response.name[i];
                                                                html += '</option>';
                                                            }
                                                        }
                                                    }
                                                html += '</select>';
                                            html += '</div>';
                                        html += '</div>';
                                        html += '<div class="col-sm-6">';
                                            html += '<div class="clear-fix"></div>';
                                            html += '<h5>đến</h5>';
                                            html += '<div class="dropdown-field to-field">';
                                                html += '<select class="to-chosen" name="rank_to">';
                                                    if (response.name == null || response.name == '' || response.name == undefined){}else {
                                                        for (var j = 1; j < response.name.length; j++){
                                                            if (response.name[j] == null || response.name[j] == '' || response.name[j] == undefined){}else {
                                                                html += '<option value="' + j + '">';
                                                                html += response.name[j];
                                                                html += '</option>';
                                                            }
                                                        }
                                                    }
                                                html += '</select>';
                                            html += '</div>';
                                        html += '</div>';
                                    html += '</div>';
                                    html += '<h2>Bảng giá</h2>';//L4
                                    html += '<div class="col-md-12 pl-0 pr-0 m_datatable m-datatable m-datatable--default m-datatable--loaded">';//L5
                                        html += '<table class="table table-bordered m-table m-table--border-brand m-table--head-bg-brand">';
                                            html += '<thead class="m-datatable__head">';//L1
                                                html += '<tr class="m-datatable__row">';
                                                    html += '<th style="width:30px;" class="m-datatable__cell">#</th>';
                                                    html += '<th class="m-datatable__cell">Tên</th>';
                                                    html += '<th style="width:150px;" class="m-datatable__cell">Tiền công</th>';
                                                    html += '<th style="width:150px;" class="m-datatable__cell">Thanh toán</th>';
                                                html += '</tr>';
                                            html += '</thead>';
                                            html += '<tbody class="m-datatable__body">';//l2
                                                if (response.name == null || response.name == '' || response.name == undefined){}else {

                                                    for (var i = 0; i < response.name.length-1; i++){
                                                        if (response.name[i] == null || response.name[i] == '' || response.name[i] == undefined ||response.name[i+1] == null || response.name[i+1] == '' || response.name[i+1] == undefined){}else {
                                                            html += '<tr class="m-datatable__row m-datatable__row--even">';
                                                                html += '<td style="width:30px;" class="m-datatable__cell">';//L1
                                                                    html += i + 1;
                                                                html += '</td>';
                                                                html += '<td class="m-datatable__cell">';//L2
                                                                html += response.name[i] + ' -> ' + response.name[i+1];
                                                                html += '</td>';
                                                                html += '<td style="width:150px;" class="m-datatable__cell">';//L3
                                                                if (response.price[i] == null || response.price[i] == '' || response.price[i] == undefined ){
                                                                    response.price[i] = 0;
                                                                }
                                                                var totalprice = parseInt(response.price[i+1]) - parseInt(response.price[i]);
                                                                    totalprice = totalprice.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                                                                    totalprice = totalprice.split('').reverse().join('').replace(/^[\.]/,'');
                                                                    html += totalprice + ' VNĐ';
                                                                html += '</td>';
                                                                html += '<td class="m-datatable__cell">';//L4
                                                                    if (response.aucheck == 0){
                                                                        html += '<a style="font-size: 20px;" class="followus pay" href="/login" title=""><i aria-hidden="true"></i> Đăng nhập</a>';
                                                                    }else if (response.aucheck == 1){
                                                                        html += '<span class="pay">Thanh toán</span>';
                                                                    }

                                                                html += '</td>';
                                                            html += '</tr>';
                                                        }
                                                    }
                                                }
                                            html += '</tbody>';
                                        html += '</table>';
                                    html += '</div>';
                                html += '</div>';
                                //L2
                                html += '<input type="hidden" id="json_rank" name="custId" value="' + response.paramsv2 + '">';
                            html += '</div>';
                        }
                    }

                    $('.detail-service-data').html('');
                    $('.detail-service-data').html(html);

                    function Confirm(index, serverid) {
                        $('[name="server"]').val(serverid);
                        $('[name="selected"]').val(index);
                        $('#btnPurchase').click();
                    }

                    if (response.filter_type == 7){
                        var purchase_name = response.filter_name;
                    }else {
                        var purchase_name = 'VNĐ';
                    }

                    var server = -1;

                    $(".server-filter").change(function (elm, select) {
                        server = parseInt($(".server-filter").val());
                        $('[name="server"]').val(server);
                        UpdatePrice();
                    });
                    server = parseInt($(".server-filter").val());
                    $('[name="server"]').val(server);

                    if (response.filter_type == 1){

                    }else if (response.filter_type == 4){//dạng chọn một
                        var data = jQuery.parseJSON(response.params);

                        var itemselect = -1;
                        $(document).ready(function () {
                            $(".s-filter").change(function (elm, select) {
                                itemselect = parseInt($(".s-filter").val());
                                UpdatePrice();
                            });
                            itemselect = parseInt($(".s-filter").val());
                            UpdatePrice();
                        });

                        function UpdatePrice() {
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
                            $('#txtPrice').html('Tổng: ' + price + ' VNĐ');
                            $('[name="selected"]').val($(".s-filter").val());

                            $('#txtPrice').removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                                $(this).removeClass();
                            });
                            $('tbody tr.selected').removeClass('selected');
                            $('tbody tr').eq(itemselect).addClass('selected');
                        }

                        function ConfirmBuy(value) {
                            var index = $('.server-filter').val();
                            Confirm(value, index);
                        }


                    }else if (response.filter_type == 5){//dạng chọn nhiều
                        var data = jQuery.parseJSON(response.params);
                        $('.s-filter input[type="checkbox"]').change(function () {
                            UpdatePrice();
                        });

                        function UpdatePrice() {
                            var price = 0;
                            var itemselect = '';

                            if (data.server_mode == 1 && data.server_price == 1) {
                                var s_price = data["price" + server];
                            }
                            else {
                                var s_price = data["price"];
                            }

                            if ($('.s-filter input[type="checkbox"]:checked').length > 0) {
                                $('.s-filter input[type="checkbox"]:checked').each(function (idx, elm) {
                                    // total = _this.value.replace(/\./g,'');

                                    price += parseInt(s_price[$(elm).val()]);
                                    if (itemselect != '') {
                                        itemselect += '|';
                                    }
                                    itemselect += $(elm).val();

                                    $('[name="value"]').val('');
                                    $('[name="value"]').val(price);

                                    $('[name="selected"]').val(itemselect);

                                    $('#txtPrice').removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                                        $(this).removeClass();
                                    });
                                });
                                $('#btnPurchase').prop('disabled', false);
                            }
                            else {
                                $('#txtPrice').html('Tổng: 0 VNĐ');
                                $('#txtPrice').removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                                    $(this).removeClass();
                                });
                                $('#btnPurchase').prop('disabled', true);

                            }

                            price = price.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                            price = price.split('').reverse().join('').replace(/^[\.]/,'');
                            $('#txtPrice').html('Tổng: ' + price + ' VNĐ');

                        }
                    }else if (response.filter_type == 6){//dạng chọn a->b

                        var data = response.price;

                        $('.nstSlider').attr('data-range_max', data.length - 1);
                        $('.nstSlider').attr('data-cur_max', data.length - 1);
                        $('.nstSlider').nstSlider({
                            "crossable_handles": false,
                            "left_grip_selector": ".leftGrip",
                            "right_grip_selector": ".rightGrip",
                            "value_bar_selector": ".bar",
                            "value_changed_callback": function (cause, leftValue, rightValue) {
                                from = leftValue;
                                to = rightValue;
                                $(".from-chosen").val(from);
                                $(".to-chosen").val(to);
                                $(".to-chosen").trigger("chosen:updated");
                                $(".from-chosen").trigger("chosen:updated");
                                UpdatePrice1();
                            }
                        });

                        var from = 0, to = 1;
                        $(document).ready(() => {
                            $(".from-chosen").chosen({disable_search_threshold: 10});
                            $(".from-chosen").change((elm, select) => {
                                from = parseInt($(".from-chosen").val());
                                if (to <= from) {
                                    to = from + 1;
                                    $(".to-chosen").val(to);
                                    //$(".to-chosen").chosen('update');
                                    $(".to-chosen").trigger("chosen:updated");
                                }
                                $('.nstSlider').nstSlider('set_position', from, to);
                                UpdatePrice1();
                            });

                            $(".to-chosen").chosen({disable_search_threshold: 10});
                            $(".to-chosen").change((elm, select) => {
                                to = parseInt($(".to-chosen").val());
                                if (to <= from) {
                                    from = to - 1;
                                    $(".from-chosen").val(from);
                                    $(".from-chosen").trigger("chosen:updated");
                                }
                                $('.nstSlider').nstSlider('set_position', from, to);
                                UpdatePrice1();
                            });
                            UpdatePrice1();
                        });

                        function UpdatePrice1() {
                            var price = 0;
                            var data = response.price;
                            $('tbody tr.selected').removeClass('selected');
                            for (var i = from + 1; i <= to; i++) {
                                if (data[i] == null || data[i] == '' || data[i] == undefined){

                                }else {
                                    price += parseInt(data[i]-data[i-1]);
                                    $('tbody tr').eq(i - 1).addClass('selected');
                                }
                            }

                            $('[name="value"]').val('');
                            $('[name="value"]').val(price);
                            price = price.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                            price = price.split('').reverse().join('').replace(/^[\.]/,'');
                            $('#txtPrice').html('Tổng: ' + (price) + ' VNĐ');
                            $('[name="selected"]').val(from + '|' + to);
                            $('#txtPrice').removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                                $(this).removeClass();
                            });
                            $('.nstSlider').nstSlider('set_position', from, to);
                            $(".from-chosen").val(from);
                            $(".to-chosen").val(to);
                            $(".to-chosen").trigger("chosen:updated");
                            $(".from-chosen").trigger("chosen:updated");
                        }
                    }else if (response.filter_type == 7){//dạng nhập tiền thành toán
                        var data = jQuery.parseJSON(response.params);

                        var min = response.input_pack_min;
                        var max = response.input_pack_max;

                        $('#txtPrice').html('');
                        $('#txtPrice').html('Tổng: 0 ' + purchase_name);

                        function UpdatePrice() {

                            var container = $('.m-datatable__body').html('');

                            if (data.server_mode == 1 && data.server_price == 1) {

                                var s_price = data["price" + server];
                                var s_discount = data["discount" + server];
                            }
                            else {
                                var s_price = data["price"];
                            }

                            for (var i = 0; i < data.name.length; i++) {

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
                                        '<td class="m-datatable__cell">' + data.name[i] + '</td>' +
                                        '<td style="width:150px;" class="m-datatable__cell">' + price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' VNĐ</td>' +
                                        '<td style="width:250px;" class="m-datatable__cell">' + discount + '</td>' +
                                        '<td style="width:180px;" class="m-datatable__cell">' + (parseInt(price * discount / 1000 * data.input_pack_rate)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' ' + purchase_name + '</td>' + ptemp

                                    $(temp).appendTo(container);
                                }
                            }

                            UpdateTotal();
                        }

                        function UpdateTotal() {
                            var price = parseInt($('#input_pack').val().replace(/,/g, ''));

                            if (typeof price != 'number' || price < min || price > max) {
                                $('button[type="submit"]').addClass('not-allow');

                                $('#txtPrice').html('Tiền nhập không đúng');
                                return;
                            } else {
                                $('button[type="submit"]').removeClass('not-allow');
                            }
                            var total = 0;
                            var index = 0;
                            var current = 0;
                            var discount = 0;


                            if (data.server_mode == 1 && data.server_price == 1) {

                                var s_price = data["price" + server];
                                var s_discount = data["discount" + server];
                            }
                            else {
                                var s_price = data["price"];
                                var s_discount = data["discount"];
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
                            total = parseInt(total / 1000 * data.input_pack_rate);

                            $('#txtDiscount').val(discount);
                            total = total.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                            total = total.split('').reverse().join('').replace(/^[\.]/,'');
                            $('#txtPrice').html('');
                            $('#txtPrice').html('Tổng: ' + total + " " + purchase_name);
                            $('#txtPrice').removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                                $(this).removeClass();
                            });
                            $('[name="selected"]').val(price);
                            $('.m-datatable__body tbody tr.selected').removeClass('selected');
                            $('.m-datatable__body tbody tr').eq(index).addClass('selected');
                        }

                        $('#input_pack').bind('focus keyup', function () {
                            UpdateTotal();
                        });
                        $(document).ready(function () {
                            UpdatePrice();
                        });

                        function ConfirmBuy(value) {
                            var index = $('.server-filter').val();
                            Confirm(value, index);
                        }
                    }
                }

            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }


    $('body').on('click','#btnPurchase',function(e){
        e.preventDefault();

        var price = $('[name="value"]').val();
        var htmlloading = '';
        htmlloading += '<div class="loading"></div>';
        $('.loading-data__thanhtoan').html('');
        $('.loading-data__thanhtoan').html(htmlloading);

        getModalService(price)
    })

    function getModalService(price) {
        let slug = $('#slug').val();

        request = $.ajax({
            type: 'GET',
            url: '/dich-vu/'+ slug +'/modaldata',
            data: {
                price:price
            },
            beforeSend: function (xhr) {

            },
            success: (response) => {
                if (response.status == 1){

                    var data = jQuery.parseJSON(response.params);
                    var send_name = data['send_name'];
                    var send_type = data['send_type'];
                    //Data show detail
                    var index = 0;
                    var htmlmodal = '';

                    htmlmodal += '<div class="modal-header">';//L1
                        htmlmodal += '<h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Xác nhận thông tin thanh toán</h4>';
                        htmlmodal += '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>';
                    htmlmodal += '</div>';
                    htmlmodal += '<div class="modal-body">';//L2
                    if (send_name == null || send_name == '' || send_name == undefined || send_name.length <= 0){
                        htmlmodal += '<p> Bạn thực sự muốn thanh toán?</p>';
                    }else{
                        $.each(send_name,function(key,value){
                            if (value == null || value == '' || value == undefined){}else {
                                htmlmodal += '<span class="mb-15 control-label bb">';//L1
                                    htmlmodal += value + ':';
                                htmlmodal += '</span>';

                                if (send_type[key] == 1 || send_type[key] == 2 || send_type[key] == 3){
                                    index = index + 1;
                                    htmlmodal += '<div class="mb-15">';//L2
                                        htmlmodal += '<input type="text" required name="customer_data' + key + '" class="form-control t14 " placeholder="' + value + '" value="">';
                                    htmlmodal += '</div>';
                                }else if (send_type[key] == 4){
                                    index = index + 1;
                                    htmlmodal += '<div class="mb-15">';//L2
                                    htmlmodal += '<input type="file" required accept="image/*" class="form-control" name="customer_data' + key + '" placeholder="' + value + '">';
                                    htmlmodal += '</div>';
                                }else if (send_type[key] == 5){
                                    index = index + 1;
                                    htmlmodal += '<div class="mb-15">';//L2
                                    htmlmodal += '<input type="password" required class="form-control" name="customer_data' + key + '" placeholder="' + value + '">';
                                    htmlmodal += '</div>';
                                }else if (send_type[key] == 6){
                                    index = index + 1;
                                    htmlmodal += '<div class="mb-15">';//L2
                                        htmlmodal += '<select name="customer_data' + key + '" required class="form-control mb-15 control-label bb">';
                                            var send_data = data['send_data'+key];

                                            if (send_data == null || send_data == '' || send_data == undefined){}else {
                                                $.each(send_data,function(i,val){
                                                    htmlmodal += '<option value="' + i + '">';
                                                        htmlmodal += val;
                                                    htmlmodal += '</option>';
                                                })
                                            }
                                        htmlmodal += '</select>';
                                    htmlmodal += '</div>';
                                }

                            }
                        })
                    }
                    htmlmodal += '<input type="hidden" name="index" value="' + index + '">';
                    htmlmodal += '</div>';
                    htmlmodal += '<div class="modal-footer">';//l3
                        if (response.aucheck == 0){
                            htmlmodal += '<a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" href="/login">Đăng nhập</a>';
                        }else if (response.aucheck == 1){
                            if (parseInt(response.balance) < parseInt(response.price)){
                                htmlmodal += '<a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold gallery__bottom__span_bg__2" href="/nap-the-cham" id="d3">Nạp thẻ cào</a>';
                                htmlmodal += '<a class="btn c-bg-green-4 c-font-white c-btn-square c-btn-uppercase c-btn-bold load-modal gallery__bottom__span_bg__2" style="color: #FFFFFF" data-dismiss="modal" rel="/atm" data-dismiss="modal">Nạp từ ATM - Ví điện tử</a>';
                            }else {
                                htmlmodal += '<button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold " id="d3" style="position: relative" >';
                                htmlmodal += 'Xác nhận thanh toán';
                                htmlmodal += '<div class="row justify-content-center loading-data__buydichvu">';
                                // html += '';
                                htmlmodal += '</div>';
                                htmlmodal += '</button>';
                            }
                        }
                        htmlmodal += '<button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>';
                    htmlmodal += '</div>';

                    $('.modal-content__data').html('');
                    $('.modal-content__data').html(htmlmodal);

                    $('#homealert').modal('show');
                }

                $('.loading-data__thanhtoan').html('');


            },
            error: function (data) {

            },
            complete: function (data) {

            }
        });
    }

    $(document).on('submit', '.purchaseForm', function(e){
        e.preventDefault();
        var htmlloading = '';

        htmlloading += '<div class="loading"></div>';

        $('.loading-data__buydichvu').html('');
        $('.loading-data__buydichvu').html(htmlloading);
        // $('.loading-data__muangay').html('');
        // $('.loading-data__muangay').html(htmlloading);

        var formSubmit = $(this);
        var url = formSubmit.attr('action');
        var btnSubmit = formSubmit.find(':submit');
        btnSubmit.prop('disabled', true);

        $.ajax({
            type: "POST",
            url: url,
            data: formSubmit.serialize(), // serializes the form's elements.
            beforeSend: function (xhr) {

            },
            success: function (response) {
                // console.log(response)
                if(response.status == 1){
                    $('.loadModal__acount').modal('hide');
                    $('#homealert').modal('hide');
                    swal({
                        title: "Mua dịch vụ thành công!",
                        text: "Thông tin chi tiết tài khoản vui lòng về lịch sử dịch vụ.",
                        type: "success",
                        confirmButtonText: "Về lịch sử dịch vụ!",
                        showCancelButton: true,
                        cancelButtonText: "Đóng",
                    })
                        .then((result) => {
                            if (result.value) {
                                window.location = '/lich-su-dich-vu';
                            } else if (result.dismiss === 'Đóng') {

                            }
                        })
                }
                else if (response.status == 2){
                    $('.loadModal__acount').modal('hide');
                    $('#homealert').modal('hide');

                    swal(
                        'Thông báo!',
                        response.message,
                        'warning'
                    )
                    $('.loginBox__layma__button__displayabs').prop('disabled', false);
                }else {
                    $('.loadModal__acount').modal('hide');
                    swal(
                        'Lỗi!',
                        'Vui lòng kiểm tra lại tài khoản hoặc liên hệ với chăm sóc khách hàng!',
                        'error'
                    )
                    $('.loginBox__layma__button__displayabs').prop('disabled', false);
                }
                $('.loading-data__buydichvu').html('');
            },
            error: function (response) {
                if(response.status === 422 || response.status === 429) {
                    let errors = response.responseJSON.errors;

                    jQuery.each(errors, function(index, itemData) {
                        // console.log(itemData);
                        formSubmit.find('.notify-error').text(itemData[0]);
                        return false; // breaks
                    });
                }else if(response.status === 0){
                    alert(response.message);
                    $('#text__errors').html('<span class="text-danger pb-2" style="font-size: 14px">'+response.message+'</span>');
                }
                else {
                    $('#text__errors').html('<span class="text-danger pb-2" style="font-size: 14px">'+'Kết nối với hệ thống thất bại.Xin vui lòng thử lại'+'</span>');
                }
            },
            complete: function (data) {
                btnSubmit.prop('disabled', false);
            }
        })


    })

})
