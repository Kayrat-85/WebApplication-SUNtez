<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2
              /dist/css/bootstrap.min.css">
        <link rel="" href="/View/Shared/header.php">
        <title>О нас</title>
    </head>

    <body>
        <!-- Подключение Меню сайта -->
        <?php 
            require './View/Shared/header.php';
        ?>
        <div class="container mt-5">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/index.php">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">О нас</li>
                    </ol>
                </nav>
            </div>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <h3>Турагентство "SUN-tez"</h3>
                    <br>
                    <p>
                        SUN-tez — турагентство, готовое помочь Вам с выбором и оформлением 
                        путешествия на любой вкус и уровень дохода. Мы задумывались 
                        как высокотехнологичное агентство, уровню которого мы всячески 
                        стараемся соответствовать. На нашем сайте вы сможете:
                    </p>
                    <ul>
                        <li>найти самую подробную информацию по курортным странам</li>
                        <li>осуществить поиск туров по всем ведущим туроператорам Казахстана</li>
                        <li>подобрать морской круиз</li>
                        <li>подписаться на рассылку горящих туров</li>
                        <li>заказать подбор тура опытным менеджером</li>
                        <li>посмотреть отзывы отдыхающих о любом отеле</li>
                    </ul>
                    <p>
                        Мы работаем на туристическом рынке с 2015 года. На сегодняшний день 
                        турфирма "SUN-tez" занимает одно из лидирующих мест среди турагентств
                         Казахстана. У нас есть офисы в Алматы, Астане и Актобе. Наши партнеры 
                         - проверенные и надёжные туроператоры.
                    </p>
                </div>
            </div>
            <br>
        </div>

        <!-- подключение футера -->  
        <?php
            require './View/Shared/footer.php';
        ?>
    </body>
</html>
