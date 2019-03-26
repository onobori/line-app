<?php

// (1) ログファイルの指定
define('DEBUG', '../debug.txt');

// (2) リクエストの取得
$input=file_get_contents('php://input');

// (3) ログファイルの出力
file_put_contents(DEBUG, $input);

