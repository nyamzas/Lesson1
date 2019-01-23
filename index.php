<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title?></title>
</head>
<body>
    <?php 
    // var_dump Функция отображает структурированную информацию об одном или нескольких выражениях, включая их тип и значение.
    $a = 5;
    $b = '05';
    var_dump($a == $b);
    // Почему true? 
    //Потому что при сравнении компилятор ищет в строке число, а ноль, который стоит вначале, пропускает.


    var_dump((int)'012345');
    // Почему 12345?
    // Команда int приводит строку к целому числу

    var_dump((float)123.0 === (int)123.0);
    // Почему false? 
    /*Числа с плавающей точкой имеют ограниченную точность.
    Хотя это зависит от операционной системы,
    в PHP обычно используется формат двойной точности IEEE 754,
    дающий максимальную относительную ошибку округления порядка 1.11e-16.
    Неэлементарные арифметические операции могут давать большие ошибки, и,
    разумеется, необходимо принимать во внимание распространение ошибок при совместном использовании нескольких операций.
    А int приводит число к целому
    */


    var_dump((int)0 === (int)'hello, world');
    // Почему true?
    //Немного поэксперементировав, я заметил, что int не играет особой роли, ведь 0 не строка
    //Однако, в команде (int)'hello, world' команда int пытается найти в строке число и из-за его отсутствия даёт количество чисел


    echo '<br><br>';
    /*
    Используя имеющийся HTML шаблон, сделать так, чтобы главная страница генерировалась через PHP.
    Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и текущий год генерировались
    в блоке контента из созданных переменных.*/
    $h1 = '<h1>Hello, World!</h1>';
    $title = 'Hello, World!';
    $year = '2019';
    echo $h1 . $year ;

    //Как я понял, то задание под звёздочкой делается так.

    


  
    ?>
    
</body>
</html>