<?php

function ShowStatus($status){
	switch ($status) {
		case '0':
			return "锁定";
		break;
		case '1':
			return "激活";
		break;
		default:
			break;
	}
}

function ShowAuth($auth){
	switch ($auth) {
		case '0':
			return "超级管理员";
		break;
		case '1':
			return "普通管理员";
		break;
		case '2':
			return "普通会员";
		break;
		default:
			break;
	}
}

?>