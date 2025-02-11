<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

global $APPLICATION;
global  $USER;
$USER->Authorize(1);
$APPLICATION->IncludeComponent(
	componentName    : 'alexander:test',
	componentTemplate: '.default',
	arParams         : [
		'SELECT' =>  ['ID', 'NAME', 'DETAIL_PICTURE'],
	                   ]
);
