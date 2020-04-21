<?php

 $token = "ea645624cdeb67d34b7057fa33f15499b78aa9160c260b2e0167650b8b6bc40eb71d4e32378c9712a63ee";
 
function send ($peer, $message, $token, $att=NULL) {
	$params = array( 
 'message' => $message, 
 'peer_id' => $peer, 
 'random_id' => 3, 
 'v' => '5.92', 
 'access_token' => $token,
 'keyboard' => $att );

return file_get_contents('https://api.vk.com/method/messages.send?'.http_build_query($params));
}

 $data = json_decode(file_get_contents('php://input'));
 
if ($data->type == 'confirmation') {
	die("19c05063");

}
 $payload = $data->object->payload;
 
 $rid = $data->object->reply_message->from_id;
 $p = $data->object->peer_id;
 
 $id = $data->object->from_id;
 
 $message = $data->object->text;
 
 $chat_id = $p - 2000000000;
 
 $user_id = $data->id;


if ($data->type == 'message_new') {

	if($message == "Test") {
		send($p, "
Бот работает.
Warns:$warn
Text:$text
", $token);
	}
}
die('ok');
