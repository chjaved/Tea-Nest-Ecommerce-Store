<?php
    $db_name = 'mysql:host = localhost;dbname=shop_db';
    $db_user = 'root';
    $db_password = '';

    $conn = new PDO($db_name,$db_user,$db_password);

    // if ($conn) {
    //     echo 'Connected';
    // }
    
    function unique_id(){
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charLength = strlen($chars);
        $randomString = '';
        for ($i=o; $i; $i++ ) {
            // .= Concatenation assignment operatar in php Appends $txt2 to $txt1
            $randomString.= $chars[mt_rand(0, $charLength - 1 )];
        }
        return $randomString;
    }
?>