<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
if(CModule::IncludeModule("iblock"))
{
    $IBLOCK_ID = 4; //здесь необходимо указать ID Вашего инфоблока
    $itemsSection = GetIBlockSectionList($IBLOCK_ID);
    while($arItem = $itemsSection->GetNext()) {

        $aMenuLinksExt[] = Array(
            $arItem["NAME"],
            $arItem["SECTION_PAGE_URL"],
            Array(),
            Array(),
            ""
        );
    }
}
$aMenuLinks = array_merge($aMenuLinksExt, $aMenuLinks);
?>