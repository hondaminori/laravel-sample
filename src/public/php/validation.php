<?php

function validation($request) {
    $errors = [];

    if(empty($request['your_name']) || mb_strlen(($request['your_name']) < 20)) {
        $errors[]  = '氏名は必須です。かつ20文字以内で入力してください。';
    }
    if(empty($request['contact']) || mb_strlen(($request['contact']) < 20)) {
        $errors[]  = 'お問い合わせ内容は必須です。かつ200文字以内で入力してください。';
    }
    if(empty($request['email']) || !filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[]  = 'メールアドレスは必須で、かつ正しい形式である必要があります。';
    }
    if(!isset($request['gender'])) {
        $errors[]  = '性別は必須です。';
    }
    if(!empty($request['url'])) {
        if(!filter_var($request['url'], FILTER_VALIDATE_URL)) {
            $errors[]  = 'URLが有効な形式ではありません。';
        }
    }
    if(!isset($request['age']) || $request['age'] === '0') {
        $errors[]  = '年齢は必須です。'; 
    }
    if(empty($request['caution'])) {
        $errors[]  = '注意事項をご確認ください。';
    }

    return $errors;
}

?>