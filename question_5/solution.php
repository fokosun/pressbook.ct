<?php

$str = "drinking giving jogging 喝 喝 passing 制图 giving 跑步 吃";
echo sortByCharacterEncoding($str);

function sortByCharacterEncoding($str) {
	$str_arr = explode(' ', $str);
	$unique = array_unique($str_arr);

	$non_ascii = array_filter($unique, function ($word) {
		return mb_detect_encoding($word) != 'ASCII';
	});

	$ascii = array_filter($unique, function ($word) {
		return mb_detect_encoding($word) == 'ASCII';
	});

	$combined = array_merge($ascii, $non_ascii);

	return implode(" ", $combined);
}