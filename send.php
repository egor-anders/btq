<?php

if (!empty($_POST)) {

    $rand_param = rand(1000000, 99999999);
    $key = md5('j6TD1KIXEa' . $rand_param);

    $data = http_build_query(array(
    'key' => $key,
    'rand_param' => $rand_param,
    'login' => $_POST['email'],
    'password' => $_POST['pass'],
    'password_repeat' => $_POST['pass'],
    'first_name' => $_POST['name'],
    'email' => $_POST['email'],
    'phone' => $_POST['tel'],
    'partnersCode' => '13',
    ));
	

	
    if ($curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, 'https://my.'. $_SERVER['HTTP_HOST'] .'/api/v_2/page/RegisterUser');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    $out = json_decode(curl_exec($curl), true);
    curl_close($curl);
    }

    if($out['result'] == 'failed') {
        echo 'Ошибка, почта существует!';
        exit;
    }

    $data = array();
    if ($out['result'] == 'success') {
    foreach ($out['values'] as $k => $row) {
    $data[$k] = $row;
    }
    }

    $arrContextOptions=array(
        "ssl"=>array(
            "verify_peer"=> true,
            "verify_peer_name"=> true,
        ),
    );

    $out = json_decode(file_get_contents('https://my.'. $_SERVER['HTTP_HOST'] .'/api/v_2/page/Activation?key=' . $key . '&rand_param=' . $rand_param . '&activation_key=' . $data["activation_key"] . '&activation_type=' . $data["activation_type"], false, stream_context_create($arrContextOptions)), true);
    //var_dump($out);
    if ($out['result'] == 'success') {
        header('Location: https://tradersroom.'. $_SERVER['HTTP_HOST'] .'/signin');
        exit;   
    } else {
        echo 'Ошибка, почта существует!';
        exit;        
    }
} else {
    echo 'wwwooups';
}
 
?>