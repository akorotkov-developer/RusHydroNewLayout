<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);

use RusHydro\Config;
use Bitrix\Main\Page\Asset;
?>
                        <?if ($APPLICATION->GetCurPage() != "/") {?>
                            </div>
                        <?}
                    $APPLICATION->IncludeComponent("bitrix:menu","rightmenu",
                        [
                            "ROOT_MENU_TYPE" => "right",
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "",
                            "USE_EXT" => "Y",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "Y",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => ""
                        ]
                    );?>
                </div>

            </div>
            <script src="<?=Config::RUSHYDRO_TEMPLATE_PATH?>js/main.min.js"></script>
            <script src="<?=Config::RUSHYDRO_TEMPLATE_PATH?>js/vendor.min.js"></script>
            <script src="<?=Config::RUSHYDRO_TEMPLATE_PATH?>js/script.js"></script>
        </div>

    </div>
</body>
</html>