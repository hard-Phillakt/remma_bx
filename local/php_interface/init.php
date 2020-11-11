<?php

CModule::IncludeModule("iblock");


function debug($param){
    echo "<pre>";
    echo print_r($param);
    echo "<pre>";
}


const DEFAULT_TEMPLATE_PATH = "/local/templates/.default";


$arrStart = [];

$res = CIBlockElement::GetList(["SORT" => "ASC"], ['IBLOCK_ID' => '5'], false, false, [
    "id",
    "SORT",
    'PROPERTY_ID',
    'PROPERTY_TITLE',
    'PROPERTY_URL_LINK',
    'PROPERTY_PARENT_ID',
    'PROPERTY_ACTIVE_ITEM'
]);

while ($ob = $res->GetNextElement()) {
    $arFields = $ob->GetFields();

    $arrStart[$arFields['PROPERTY_PARENT_ID_VALUE']][] = [
        'id'=> $arFields['ID'],
        'title' => $arFields['PROPERTY_TITLE_VALUE'],
        'url_link' => $arFields['PROPERTY_URL_LINK_VALUE'],
        'parent_id' => $arFields['PROPERTY_PARENT_ID_VALUE'],
        'active_item' => $arFields['PROPERTY_ACTIVE_ITEM_VALUE'] == 1 ? 'menu-second__list-droplink' : 'child-item',
        'sort' => $arFields['SORT']
    ];
}

// Меню для основных страниц
function defaultViewListMenu($arr, $parent_id = 0){

    global $USER;

    // Проверка на администратора для отображения id в пунктах меню
    $userIsAdmin = $USER->IsAdmin() ? 'menu-item-id_admin-view': null;

    $submenu_class_link = $parent_id > 0 ? "color__black tt__upercase fontw-700" : "color__white tt__upercase fontw-700";

    if(empty($arr[$parent_id])){
        return;
    }

    if($parent_id > 0){
        echo "<ul class='submenu'>";
    } else {
        echo "<ul class='fjc-s menu-second__list topmenu'>";
    }
    for ($i = 0; $i < count($arr[$parent_id]); $i++){

        echo "<li>
                    <a title='{$arr[$parent_id][$i]['id']}'
                    class='{$arr[$parent_id][$i]['active_item']} {$submenu_class_link}'
                    href='{$arr[$parent_id][$i]['url_link']}'>{$arr[$parent_id][$i]['title']}</a>
                    
                   <span class='menu-item-id_admin {$userIsAdmin}'>{$arr[$parent_id][$i]['id']}</span>
                    ";

        // Рекурсивно вызываем функцию с id для поиска $parent_id
        defaultViewListMenu($arr, $arr[$parent_id][$i]['id']);

        echo "</li>";
    }

    echo "</ul>";

}


// Меню для главной страницы
function mainViewListMenu($arr, $parent_id = 0){

    $submenu_class_link = $parent_id > 0 ? "color__black" : "menu__link fs-14 color__blue-dark";

    if(empty($arr[$parent_id])){
        return;
    }

    if($parent_id > 0){
        echo "<ul class='submenu'>";
    } else {
        echo "<ul class='menu-list ul fjc-sb topmenu'>";
    }
    for ($i = 0; $i < count($arr[$parent_id]); $i++){

        echo "<li>
               <a title='{$arr[$parent_id][$i]['id']}'
                class='{$submenu_class_link}'
                href='{$arr[$parent_id][$i]['url_link']}'>{$arr[$parent_id][$i]['title']}</a>";
        echo "<span class='fast-line'></span>";

        // Рекурсивно вызываем функцию с id для поиска $parent_id
        mainViewListMenu($arr, $arr[$parent_id][$i]['id']);

        echo "</li>";
    }

    echo "</ul>";

}


// Меню для главной страницы
function mobileViewListMenu($arr, $parent_id = 0){

//    $submenu_class_link = $parent_id > 0 ? "color__black" : "menu__link fs-14 color__blue-dark";

    if(empty($arr[$parent_id])){
        return;
    }

    if($parent_id > 0){
        echo "<ul class='submenu' id='{$parent_id}'>
                <li><span class='close-submenu' id='{$parent_id}'>✕</span></li>
                ";

    } else {
        echo "<ul class='sidebar-menu__list topmenu'>";
    }
    for ($i = 0; $i < count($arr[$parent_id]); $i++){

        echo "<li>
               <a 
                class='pt-5 pb-5'
                title='{$arr[$parent_id][$i]['id']}'
                href='{$arr[$parent_id][$i]['url_link']}'>{$arr[$parent_id][$i]['title']}</a>";

        // Рекурсивно вызываем функцию с id для поиска $parent_id
        mobileViewListMenu($arr, $arr[$parent_id][$i]['id']);

        echo "</li>";
    }

    echo "</ul>";

}










