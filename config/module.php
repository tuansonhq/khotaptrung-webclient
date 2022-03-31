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
        'key_encrypt' => env('ENCRYPT_CHARGING'),
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
        'key'=>"charge",
        'status' => [
            1 => 'Chưa bán',
            0 => 'Đã bán',
            2 => 'Chờ xử lý',
            3 => 'Đang check thông tin',
            4 => 'Sai thông tin',
            5 => 'Đã xoá',
            6 => 'Check lỗi'],
        'price' => [
            '0-50000' => 'Dưới 50K',
            '50000-200000' => 'Từ 50K - 200K',
            '200000-500000' => 'Từ 200K - 500K',
            '500000-1000000' => 'Từ 500K - 1 Triệu',
            '1000000-5000000' => 'Trên 1 Triệu',
            '5000000-10000000' => 'Trên 5 Triệu',
            '10000000' => 'Trên 10 Triệu',
        ],
    ],
];
