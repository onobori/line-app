<?php

// (1) bot関数の定義
function bot($event) {
	// (2) 宣伝文ファイルの読み込み
	$text=load('promote/promote.txt');

	// (3) 宣伝文を応答する
	reply($event, $text[rand(0, count($text)-1)]);

}
