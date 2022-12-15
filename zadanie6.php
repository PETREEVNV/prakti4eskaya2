    <form action="#" method="get">
    <input type="text" name="strani"/><br>
    <input type="submit"/>
    </form>  
    <?php

        $linkstrani = $_GET['strani'];

    switch (true){

        case stristr($linkstrani,'Австрия') :echo 'Столица Австрии Вена';break;
        case stristr($linkstrani,'Бельгия') :echo('Столица Бельгии Брюссель');break;
        case stristr($linkstrani,'Болгария'):echo('Столица Болгарии София');break;
        case stristr($linkstrani,'Венгрия'):echo('Столица Венгрии Будапешт');break;
        case stristr($linkstrani,'Великобритания'):echo('Столица Великобритании Лондон');break;
        case stristr($linkstrani,'Греция'):echo('Столица Греции Афины');break;
        case stristr($linkstrani,'Германия'):echo('Столица Германии Берлин');break;
        case stristr($linkstrani,'Дания'):echo('Столица Дании Копенгаген');break;
        case stristr($linkstrani,'Италия'):echo('Столица Италии Рим');break;
        case stristr($linkstrani,'Ирландия'):echo('Столица Ирландии Дублин');break;
        case stristr($linkstrani,'Испания'):echo('Столица Испании Мадрид');break;
        case stristr($linkstrani,'Кипр'):echo('Столица Кипра Никосия');break;
        case stristr($linkstrani,'Люксембург'):echo('Столица Люксембурга Люксембург');break;
        case stristr($linkstrani,'Латвия'):echo('Столица Латвии Рига');break;
        case stristr($linkstrani,'Литва'):echo('Столица Литвы Вильнюс');break;
        case stristr($linkstrani,'Мальта'):echo('Столица Мальты Валлетта');break;
        case stristr($linkstrani,'Нидерланды'):echo('Столица Нидерландов Амстердам');break;
        case stristr($linkstrani,'Португалия'):echo('Столица Португалии Лиссабон');break;
        case stristr($linkstrani,'Польша'):echo('Столица Польши Варшава');break;
        case stristr($linkstrani,'Румыния'):echo('Столица Румынии Бухарест');break;
        case stristr($linkstrani,'Словения'):echo('Столица Словении Любляна');break;
        case stristr($linkstrani,'Словакия'):echo('Столица Словакии Братислава');break;
        case stristr($linkstrani,'Франция'):echo('Столица Франции Париж');break;
        case stristr($linkstrani,'Финляндия'):echo('Столица Финляндии Хельсинки');break;
        case stristr($linkstrani,'Хорватия'):echo('Столица Хорватии Загреб');break;
        case stristr($linkstrani,'Чехия'):echo('Столица Чехии Прага');break;
        case stristr($linkstrani,'Швеция'):echo('Столица Швеции Стокгольм');break;
        case stristr($linkstrani,'Эстония'):echo('Столица Эстонии Таллин'); 
        break;
        default: echo('Такой страны нет');
        break;
        }

        ?>