<?php

function bot($event) {
	// (1) ユーザのメッセージがなければ終了する
	if (empty($event->message->text)) return;

	// (2) ユーザのメッセージにキーワードが含まれているかどうかを調べる
	if (preg_match('/おはよう/', $event->message->text)) {
		// (3) リプライする
		reply($event, 'おはようございます！');
	}
}
