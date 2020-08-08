<?php
include $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/menu.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(70)HtmlList/HtmlList.php';

$list = new Ul();
	
	echo $list->setAttr('class', 'eee')
        ->addLi((new ListItem())->setText('item1')
        ->setAttr('class', 'first')) 
		->addLi((new ListItem())->setText('item2'))
		->addUl((new Ul())->addLi((new ListItem())->setText('item2')))
		->addOl((new Ol())->addLi((new ListItem())->setText('item2')))
        ->addLi((new ListItem())->setText('item3'));
        
$listOl = new Ul();

    echo $listOl->addItems([(new ListItem())->setText('item1'), (new ListItem())->setText('item2'), (new ListItem())->setText('item3')]);
    echo $listOl->addItems([(new ListItem())->setText('item1'), (new ListItem())->setText('item2'), (new ListItem())->setText('item3')]);
    echo $listOl->addItems([(new ListItem())->setText('item1'), (new ListItem())->setText('item2'), (new ListItem())->setText('item3')]);
    echo $listOl->addItems([(new ListItem())->setText('item1'), (new ListItem())->setText('item2'), (new ListItem())->setText('item3')]);
    echo $listOl->addItems([(new ListItem())->setText('item1'), (new ListItem())->setText('item2'), (new ListItem())->setText('item3')]);
    echo $listOl->addItems([(new ListItem())->setText('item1'), (new ListItem())->setText('item2'), (new ListItem())->setText('item3')]);
    echo $listOl->addItems([(new ListItem())->setText('item1'), (new ListItem())->setText('item2'), (new ListItem())->setText('item3')]);
    echo $listOl->addItems([(new ListItem())->setText('item1'), (new ListItem())->setText('item2'), (new ListItem())->setText('item3')]);
    echo $listOl->addItems([(new ListItem())->setText('item1'), (new ListItem())->setText('item2'), (new ListItem())->setText('item3')]);
?>