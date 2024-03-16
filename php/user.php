<?php 

if (getenv('SERVICE_ID') == 1) {
    $data = [
        [
            'id' => 1,
            'firstname' => 'Krisna',
            'lastname' => 'Cahyono',
            'job' => 'programmer (fullstack developer)',
        ],
        [
            'id' => 2,
            'firstname' => 'John',
            'lastname' => 'Doe',
            'job' => 'programmer (front end developer)',
        ],
        [
            'id' => 3,
            'firstname' => 'Gojo',
            'lastname' => 'Satoru',
            'job' => 'programmer (back end developer)',
        ],
        [
            'id' => 4,
            'firstname' => 'Geto',
            'lastname' => 'Suguru',
            'job' => 'programmer (product manager)',
        ],
    ];
} else {
    $data = [
        [
            'id' => 5,
            'firstname' => 'Michel',
            'lastname' => 'Junior',
            'job' => 'programmer (fullstack developer)',
        ],
        [
            'id' => 6,
            'firstname' => 'Gabi',
            'lastname' => 'Musholini',
            'job' => 'programmer (front end developer)',
        ],
        [
            'id' => 7,
            'firstname' => 'xxx',
            'lastname' => 'yyy',
            'job' => 'programmer (back end developer)',
        ],
        [
            'id' => 8,
            'firstname' => 'xxx',
            'lastname' => 'yyy',
            'job' => 'programmer (product manager)',
        ],
    ];
}
header('Content-Type: application/json');

echo json_encode(compact('data'));
?>