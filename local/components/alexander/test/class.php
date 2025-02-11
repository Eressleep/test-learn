<?php

class Test extends CBitrixComponent
{
	public function onPrepareComponentParams($params)
	{
		foreach ($params['SELECT'] as &$item){
			$item = (string)$item;
		}

		return $params;
	}
	public function executeComponent()
	{


		$this->arResult = $this->getItems();
		$this->includeComponentTemplate();
	}

	/**
	 *
	 * @return null|array
	 */
	public function getItems() : ?array
	{
		/** @var \Bitrix\Iblock\ORM\ElementV1Table $test */
		$test = \Bitrix\Iblock\Elements\ElementProductionTable::getList([
            'select' => $this->arParams['SELECT'],
		                                                                ]);

		return $test->fetchAll();
	}
}
