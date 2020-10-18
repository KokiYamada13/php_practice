<?php

    function test(){
        echo 'test';
    }
    test();

    $comment = 'こめんｔ';

    function getComment($string){
        echo $string;
    }

    getComment($comment);

    function getCommentNum(){
        return '666';
    }
    $answer = getCommentNum();
    echo $answer;

    //文字列関数strlen()
    $text = 'あいうえお';
    // echo strlen($text);
    echo mb_strlen($text);

    //置換
    $str = '文字列を置換します';
    echo str_replace('置換', 'ちかん',$str);

    $str = '文字列を、置換します';
    var_dump(explode('、', $str));

    $str3 = '特定の文字列が含むかあ確認する';
    echo preg_match('/文字列/', $str3);

    //echo substr('あいう', 2);
    echo mb_substr('あいう', 2);

    //camelCase
    $postalCode = '123-4567';

    function checkPostalCode($str){
        $replaced = str_replace('-','',$str);
        $length = strlen($replaced);

        if($length === 7){
            return true;
        }
        return false;
    }
?>