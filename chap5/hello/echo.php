<?php

function bot($event) {
	// (1) ユーザのメッセージがなければ終了する
	if (empty($event->message->text)) return;

	// (2) ユーザのメッセージをそのままリプライする
	reply($event, $event->message->text);
}
