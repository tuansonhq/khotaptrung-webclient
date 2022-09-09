(function () {
    var chat = {
        messageToSend: '',
        messageResponses: [
            'Dịch vụ nạp uy tín ghê',
            'Uy tín không anh em.',
            'Vãi vừa ấn nạp xong vào game có ngay (y)',
            'Web uy tín đấy, vừa nạp 500k xong.',
            'Nãy có ông bạn nạp 500k xong vào nạp luôn, quá xịn admin ơi.',
            'Thanks admin <3 , uy tín lắm luôn',
            'Nhanh gọn uy tín, thanks admin',
            'Web xịn không scam nha mọi người',
            'Hàng sạch, thanks admin',
            'Vừa nạp xong, quá ngon',
            'Web ok không anh em, có scam không?',
            'Vừa chạy ra quán mua 500k thẻ nạp ăn luôn, ngon quá admin',
            'Nhập nhầm mã thẻ với serial báo admin xử lý trong vòng 1 nốt nhạc, uy tín quá admin ơi',
            'Cứ tưởng lừa đảo, nạp thử 200k nhận luôn kim cương trong 10s',
            '1 vote uy tín cho web nhé, quá ngon luôn',
            'Bị lừa nhiều rồi, giờ mới tìm được web uy tín, thanks ad',
            'Vừa nạp 100k xong',
            'Web ngon vl',
            'Anh em nào chưa nạp thì vào nạp ngay đi đang có khuyến mại',
            'Uy tín lắm admin',
            'Vote 10000k sao nhé, quá uy tín',
            'Có anh em nào vừa từ youtube qua đây nạp k',
            'Ông em vừa giới thiệu, nạp cái ăn luôn, ngon vc',
            'Uy tín nhé anh em',
            'Đã nạp thành công',
            'Đã nạp ở đây 20tr tiền thẻ, vote uy tín nhé',
            'Web nạp ngon thế này mà giờ mới biết',
            'Đã nạp, nhanh lắm nhé',
            'Ngon vcl, +5 sao cho admin',
            'Nghe anh em review ngon quá, tôi ra làm cái thẻ 500k nạp đây',
            'Không scam, web nạp thật, nhận thật nhé !',
            'Đã nạp và thấy ngon ngọt nhé ae',
            'Web này trùm nạp mẹ rồi',
            'Web được đấy anh em',
            'Thấy web được nhiều anh em nạp rồi, yên tâm nạp hehe',
            'Anh em không phải sợ đâu, tôi nạp nhiều web này rồi',
            'Web xịn không scam nha mọi người'
        ],
        init: function () {
            this.cacheDOM();
            this.bindEvents();
            this.render();
        },
        cacheDOM: function () {
            this.$chatHistory = $('.chat-history');
            this.$button = $('.btn-send-message');
            this.$textarea = $('#message-to-send');
            this.$chatHistoryList = this.$chatHistory.find('ul');
        },
        bindEvents: function () {
            this.$button.on('click', this.addMessage.bind(this));
            this.$textarea.on('keyup', this.addMessageEnter.bind(this));
        },
        render: function () {
            this.scrollToBottom();
            if (this.messageToSend.trim() !== '') {
                var template = Handlebars.compile($("#message-template").html());
                var context = {
                    messageOutput: this.messageToSend,
                    time: this.getCurrentTime()
                };
                this.$chatHistoryList.append(template(context));
                this.scrollToBottom();
                this.$textarea.val('');
            }
            // history-card
            var templateHistoryResponse = Handlebars.compile($("#history-template").html());
            var arrayTelCo = ['VIETTEL', 'VINAPHONE', 'MOBIFONE', 'VIETNAMOBILE', 'ZING'];
            var arrayPrice = ['10.000 đ', '20.000 đ', '30.000 đ', '50.000 đ', '100.000 đ', '200.000 đ', '300.000 đ', '500.000 đ', '1.000.000 đ'];
            var html = '';
            for (var i = 0; i < 10; i++) {
                var contentHistory = {
                    idCustomer: '******' + Math.floor(100000 + Math.random() * 900000),
                    txtHistory: 'Nạp thành công thẻ ' + arrayTelCo[Math.floor(1 + Math.random() * arrayTelCo.length) - 1] + ' mệnh giá ' + arrayPrice[Math.floor(1 + Math.random() * arrayPrice.length) - 1]
                }
                html += templateHistoryResponse(contentHistory);
            }
            $('#tblHistory').html(html);
            setInterval(function () {
                var html = '';
                for (var i = 0; i < 10; i++) {
                    var contentHistory = {
                        idCustomer: '******' + Math.floor(100000 + Math.random() * 900000),
                        txtHistory: 'Nạp thành công thẻ ' + arrayTelCo[Math.floor(1 + Math.random() * arrayTelCo.length) - 1] + ' mệnh giá ' + arrayPrice[Math.floor(1 + Math.random() * arrayPrice.length) - 1]
                    }
                    html += templateHistoryResponse(contentHistory);
                }
                $('#tblHistory').html(html);
            }, 60000);
            setInterval(function () {
                // responses
                var templateResponse = Handlebars.compile($("#message-response-template").html());
                var contextResponse = {
                    response: this.getRandomItem(this.messageResponses),
                    time: this.getCurrentTime()
                };
                this.$chatHistoryList.append(templateResponse(contextResponse));
                this.scrollToBottom();
            }.bind(this), 30000);
        },
        addMessage: function () {
            this.messageToSend = this.$textarea.val();
            this.render();
        },
        addMessageEnter: function (event) {
            // enter was pressed
            if (event.keyCode === 13) {
                this.addMessage();
            }
        },
        scrollToBottom: function () {
            $('.chat-scroll').scrollTop($('.chat-scroll')[0].scrollHeight);
        },
        getCurrentTime: function () {
            return new Date().toLocaleTimeString().
            replace(/([\d]+:[\d]{2})(:[\d]{2})(.*)/, "$1$3");
        },
        getRandomItem: function (arr) {
            return arr[Math.floor(Math.random() * arr.length)];
        }
    };
    chat.init();
})();
