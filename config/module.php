<?php


return [
    'charge' => [
        'key'=>"charge",
        'title'=>"Nạp thẻ tự động",
        'status' => [
            '1' => 'Thẻ đúng',
            '0' => 'Thẻ sai',
            '2' => 'Chờ xử lý',
            '3' => 'Sai mệnh giá',
            '999' => 'Lỗi nạp thẻ',
            '-999' => 'Lỗi nạp thẻ',
            '-1' => 'Phát sinh lỗi nạp thẻ',
        ],
    ],
    'tranfer' => [
        'key'=>"charge",
        'title'=>"Nạp ATM tự động",
        'status' => [
            '1' => 'Thành công(Đúng số tiền)',
            '0' => 'Thất bại',
            '2' => 'Chờ xử lý',
            '3' => 'Thành công(Sai số tiền)',
        ],
    ],
    'acc' => [
        'status' => [
            '0' => 'Chưa bán',
            '1' => 'Đã bán',
            '2' => 'Đã đặt cọc',
            '3' => 'Tất cả',
        ],
        'price' => [
            '0' => 'Dưới 50K',
            '1' => 'Từ 50K - 200K',
            '2' => 'Từ 200K - 500K',
            '3' => 'Từ 500K - 1 Triệu',
            '4' => 'Trên 1 Triệu',
            '5' => 'Trên 5 Triệu',
            '6' => 'Trên 10 Triệu',
        ],
    ],
];
