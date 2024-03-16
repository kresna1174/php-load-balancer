<?php 

if (getenv('SERVICE_ID') == 1) {
    $data = [
        [
            'id' => 1,
            'name' => 'laptop',
            'brand' => 'lenovo',
            'series' => 'thinkpad',
            'series_type' => 't480'
        ],
        [
            'id' => 2,
            'name' => 'laptop',
            'brand' => 'lenovo',
            'series' => 'thinkpad',
            'series_type' => 't480s'
        ],
        [
            'id' => 3,
            'name' => 'laptop',
            'brand' => 'lenovo',
            'series' => 'thinkpad',
            'series_type' => 't490'
        ],
        [
            'id' => 4,
            'name' => 'laptop',
            'brand' => 'lenovo',
            'series' => 'thinkpad',
            'series_type' => 't490s'
        ],
    ];
} else {
    $data = [
        [
            'id' => 5,
            'name' => 'laptop',
            'brand' => 'apple',
            'series' => 'pro',
            'series_type' => '2020'
        ],
        [
            'id' => 6,
            'name' => 'laptop',
            'brand' => 'apple',
            'series' => 'pro',
            'series_type' => '2021'
        ],
        [
            'id' => 7,
            'name' => 'laptop',
            'brand' => 'apple',
            'series' => 'pro',
            'series_type' => '2022'
        ],
        [
            'id' => 8,
            'name' => 'laptop',
            'brand' => 'apple',
            'series' => 'pro',
            'series_type' => '2023'
        ],
    ];
}
header('Content-Type: application/json');

echo json_encode(compact('data'));
?>