<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/education_oop/practice/Exercises/(69)Link/Link.php';

$div = new Tag('div');
$div->setAttrs(['style'=>"float: right"]);

// echo $ul->setText(  (new Tag('li'))->setText((new Link())->setAttr('href', 'http://oopphpn1.local/education_oop/practice/Exercises/(69)Link/')->setText('Заданя класс Link')->show())->show()
//                     (new Tag('li'))->setText((new Link())->setAttr('href', 'http://oopphpn1.local/education_oop/practice/Exercises/(68)classImage/')->setText('Заданя класс Link')->show())->show()
//                     (new Tag('li'))->setText((new Link())->setAttr('href', 'http://oopphpn1.local/education_oop/practice/Exercises/(62,63,64,65,66,67)Tag/')->setText('Заданя класс Link')->show())->show()
//                     (new Tag('li'))->setText((new Link())->setAttr('href', 'http://oopphpn1.local/education_oop/practice/Exercises/(57)DateInterval/')->setText('Заданя класс Link')->show())->show()
//                     (new Tag('li'))->setText((new Link())->setAttr('href', 'http://oopphpn1.local/education_oop/practice/Exercises/(56)Date/')->setText('Заданя класс Link')->show())->show()
// )->show()
// echo (new Tag('div'))
//     ->setAttrs(['style'=>"float: right"])
//     ->setText(  (new Tag('li'))->setText((new Link())->setAttr('href', 'http://oopphpn1.local/education_oop/practice/Exercises/(69)Link/')->setText('Заданя класс Link')->show())->show()
//                 (new Tag('li'))->setText((new Link())->setAttr('href', 'http://oopphpn1.local/education_oop/practice/Exercises/(68)classImage/')->setText('Заданя класс Image')->show())->show()
//             )
//     ->show();
echo $div->open();

echo (new Tag('div'))
    ->setText((new Link())->setAttr('href', '/education_oop/practice/Exercises/(69)Link/')->setText('Задания класс Link')->show())
    ->show();
echo (new Tag('div'))
    ->setText((new Link())->setAttr('href', '/education_oop/practice/Exercises/(68)classImage/')->setText('Задания класс Image')->show())
    ->show();
echo (new Tag('div'))
    ->setText((new Link())->setAttr('href', '/education_oop/practice/Exercises/(62,63,64,65,66,67)Tag/')->setText('Задания класс Tag (полная реалиация)')->show())
    ->show();
echo (new Tag('div'))
    ->setText((new Link())->setAttr('href', '/education_oop/practice/Exercises/(57)DateInterval/')->setText('Задания класс DateInterval')->show())
    ->show();
echo (new Tag('div'))
    ->setText((new Link())->setAttr('href', '/education_oop/practice/Exercises/(56)Date/')->setText('Задания класс Date')->show())
    ->show();
echo (new Tag('div'))
    ->setText((new Link())->setAttr('href', '/education_oop/practice/Exercises/(70)HtmlList/')->setText('Задания класс HtmlList')->show())
    ->show();
echo (new Tag('div'))
    ->setText((new Link())->setAttr('href', '/education_oop/practice/Exercises/(71)Form/')->setText('Задания класс Form')->show())
    ->show();
echo (new Tag('div'))
    ->setText((new Link())->setAttr('href', '/education_oop/practice/Exercises/(72,73)Input,Submit/')->setText('Задания класс Input')->show())
    ->show();

echo $div->close();
// ->setAttrs(['style'=>"float: right"])


?>

<style>
    .active {
        background: rgba(72, 161, 72, 0.671);
    }
</style>