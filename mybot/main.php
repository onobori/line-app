<?php

// (1) Botプログラムの読み込み
require_once('hear/hear2.php');

// (2) ログファイルの指定
define('DEBUG', 'debug.txt');

// (3) 共通のツールの読み込み
require_once('tool.php');

// (4) リクエストの取得
$input=file_get_contents('php://input');

// (5) ログファイルへの出力
debug('input', $input);

// (6) リクエストが空でないことを確認
if (!empty($input)) {
	// (7) イベントの取得
	$events=json_decode($input)->events;

	// (8) 各イベントに対するBotプログラムの実行
	foreach ($events as $event) {
		bot($event);
	}
}

