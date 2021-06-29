<?php
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
$APPLICATION->SetTitle("Лекция 1");
?>
<?php
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "link",
    Array(
        "IBLOCK_TYPE" => "lesson1",
        "IBLOCK_ID" => "9",
        "PROPERTY_CODE" => ["LINK", ""],
        "PAGER_TITLE" => "Новости",

        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "NEWS_COUNT" => "5",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => ["", ""],

        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "0",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "DISPLAY_PANEL" => "N",
        "SET_TITLE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_SHOW_ALL" => "N",
    )
);
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'; ?>

