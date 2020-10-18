<?php
    //変数
    $test = 123;
    print $test;

    //型と中身見れる
    var_dump($test);

    //定数
    const MAX ='uhu';
    echo MAX;

    //配列
    $array = [1,2,3];
    $array2 = [
        [1,2,3],
        ['aka','suko','green']
    ];
    var_dump($array2);

    //連想配列
    $array_number = [
        'name' => 'kazu',
        'height' => '170',
    ];
    echo $array_number['name'];

    $array_number2 = [
        'kazu' => [
            'height' => '190',
            'hobby' => 'タックル'
        ],
        '田中' => [
            'height' => '170',
            'hobby' => 'タックル'
        ]
    ];
    echo '<pre>';
    echo $array_number2['kazu']['hobby'];
    echo '</pre>';

    //演算
    $test1 = 7;
    $test2 = 3;
    $test3 = $test1 % $test2;
    echo $test3;

    //条件
    $height = '90';

    if ($height === '90'){
        echo '身長は' . $height . 'cm';
    }else if($height === '200'){
        echo '高い';
    } else {
    };

    if (!empty($test3)){
        echo '変数は殻ではありません。';
    }

    //三項演算子
    $math = 80;
    $comment = $math > 80 ? 'good' : 'not good';
    echo $comment;

    //foreach
    $members = [
        'name' => '本田',
        'home' => '日本'
    ];

    foreach($members as $member){
        echo $member;
    }
    ////キーとバリュー
    foreach($members as $key => $value){
        echo $key . 'は' . $value . '出身です';
    }
    ////多段階の配列を展開したい場合はforeachforeach

    //for 繰り返す数が決まっていいたら
    //while 決まっていなかったら
    for($i = 0; $i < 10; $i++){
        echo $i;
    }

    $j = 0;
    while($j < 5){
        echo $j;
        $j++;
    }

    //switch
    ////ifのほうがよい
    $date = 1;
    switch($date){
        case 1:
            break;
        case 2:

        default:
            echo 'uhuhu';
    }
?>