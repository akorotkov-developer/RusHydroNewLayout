<?php

namespace RusHydro;

class Tools {

    public static function GetIDByCode($code, $iblockType = null, $site_id = SITE_ID)
    {
        if (! \Bitrix\Main\Loader::includeModule("iblock")) {
            $GLOBALS["APPLICATION"]->ThrowException('Модуль инфоблоков не установлен');
            return false;
        } else {
            if(
                /*(defined("ADMIN_SECTION") && ADMIN_SECTION == true)
                || */empty($site_id) || ! strlen($code))
                return 0;

            $arFilter = array(
                "ACTIVE" => "Y",
                "SITE_ID" => $site_id,
                "CODE" => $code,
                "MIN_PERMISSION" => "R"
            );

            if (null != $iblockType)
                $arFilter["TYPE"] = $iblockType;
            $result = 0;
            $rs = \CIBlock::GetList(array(), $arFilter, false);
            if ($ar = $rs->Fetch())
                $result = $ar["ID"];

            return $result;
        }
    }

    /*
     * Меню ввиде многомерного массива
     */
    public static function buildMenuTree(array $items, $depthLevel = 1)
    {
        $result = [];

        $offset = 0;
        $continueCount = 0;
        foreach ($items as $key => $item) {
            $offset++;
            if ($continueCount > 0) {
                $continueCount--;
                continue;
            }
            if ($item['IS_PARENT']) {
                $newItems = array_slice($items, $offset);
                $item['CHILDS'] = self::buildMenuTree($newItems, reset($newItems)['DEPTH_LEVEL']);
                $continueCount = count($item['CHILDS']);
            }
            if ($item['DEPTH_LEVEL'] < $depthLevel) {
                break;
            }
            $result[$key] = $item;
        }

        return $result;
    }
}