<?php
//Автор скрипта - Маратканов Юрий
//fenix_63@mail.ru
//тел. 8-906-129-31-97
//vk.com/youran_88
//Сообщение
$message = 'Вам пришло новое сообщение с сайта trikolor-orenburg.ru: <br/>';
$message.='Имя: '.$_POST['name'].'<br/>';
$message.='Телефон: '.$_POST['phone'].'<br/>';
$message.='email: '.$_POST['email'].'<br/>';
$message.='Сообщение: '.$_POST['message'];


//$to = 'fenix_63@mail.ru, tltfenix@yandex.ru, youran198824@gmail.com';
//$to = 'fenix_63@mail.ru';
$to = 'reklama.satv@yandex.ru, fsm-tricolor@sputniktv.tv, sput.abramova@yandex.ru, a.malygin@sputniktv.tv, 208142438@bk.ru';
$subject = 'Новое сообщение от клиента с сайта trikolor-orenburg.ru';
if(isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']) {

	$secret = "6LfGDSAUAAAAACsuqhi0ZPze6oSaEoP-WpnfueaS";
    $ip = $_SERVER['REMOTE_ADDR'];
    $response = $_POST['g-recaptcha-response'];
    $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$ip");
    //var_dump($rsp);
    //var_dump($_POST['g-recaptcha-response']);
    //var_dump($message);

    if(mail($to, $subject, $message, 'Content-type: text/html; charset=utf-8'))
    {
    	return true;
    	//return $message;
    }
    else
    {
    	return strval(error_get_last());
    }


}

?>
