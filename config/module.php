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
];
