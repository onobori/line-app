<?php

// (1) チャネルアクセストークン
define('TOKEN', '...');

if (file_exists(DEBUG)) unlink(DEBUG);

function debug($title, $text) {
    file_put_contents(DEBUG, '[' .$title. ']'."\n".$text."\n\n", FILE_APPEND);
}

// (2) リプライとプッシュの共通通知
function post($url, $object) {
	// (3) JSON形式への変換
	$json=json_encode($object);
	debug('output', $json);

	// (4) 送信の準備
	$curl=curl_init('https://api.line.me/v2/bot/message/'.$url);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
	curl_setopt($curl, CURLOPT_HTTPHEADER, [
		'Content-Type: application/json',
		'Authorization: Bearer '.TOKEN
	]);

	// (5) 送信の実行
	$result=curl_exec($curl);
	debug('result', $result);

	// (6) 送信の終了
	curl_close($curl);
}

// (7) リプライ
function reply($event, $text); {
	
	// (8) 送信データの作成
	$object=[
		'replyToken'=>$event=>replyToken,
		'messages'=>[['type'=>'text', 'text'=>$text]]
	];

	// (9) 送信
	post('reply', $object);
}
