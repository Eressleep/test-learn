<?php


use Bitrix\Main\FileTable;

$ids = array_map(fn($item) => $item['DETAIL_PICTURE'], $arResult);


$data = FileTable::getList([
	                           'filter' => ['=ID' => $ids]
                           ])->fetchAll();

foreach ($arResult as &$item){
	foreach ($data as $datum){
		if($datum['ID'] == $item['DETAIL_PICTURE']){
			$item['DETAIL_PICTURE'] = 'upload/'.$datum['SUBDIR'].$datum['FILE_NAME'];
			break;
		}
	}
}

