<?php

// (1) ログファイルの削除
if (file_exists(DEBUG)) unlink(DEBUG);

// (2) ログファイルへの追加
function debug($title, $text) {
    file_put_contents(DEBUG, '[' .$title. ']'."\n".$text."\n\n", FILE_APPEND);
}


