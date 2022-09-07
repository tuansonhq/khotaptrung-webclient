// swiper
let swiper_item_possession = new Swiper('.swiper-withdraw',{
    slidesPerView: 5,
    spaceBetween: 32,
    freeMode: true,
    observer: true,
    observeParents: true,
})
function getWithDrawItem(game_type) {
    $.ajax({
        url: '/withdrawitemajax-' + game_type,
        type: 'GET',
        success: function (res) {
            if (res.status === 1) {
                //Chọn loại vật phẩm
                let input_game_type = $('#game_type');
                let result_data = res.result;
                if (result_data.listgametype.length) {
                    result_data.listgametype.forEach(function (item) {
                        let option = $('<option></option>').text(item.title).val(item.parent_id);
                        item.parent_id === game_type ? option.attr('selected', '') : '';
                        input_game_type.append(option);
                    });
                }
                //Số vật phẩm hiện có

            }
        }
    }).done(function () {});
}

let game_type = $('#game_type').data('game_type');
getWithDrawItem(game_type);

