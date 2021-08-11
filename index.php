<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" 
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link rel="" href="/View/Shared/header.php">
        <title>Web Application</title>
    </head>

    <body> 
        <!-- Подключение Меню сайта -->
        <?php
          require './View/Shared/header.php';
        ?>
        <div class="container mt-5">
            <h3 class="mb-5 text-center">Лучшие предложения для отдыха</h3>
                <div class="d-flex flex-wrap">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal text-center">Египет</h4>
                        </div>
                        <div class="card-body">
                            <img src="img/Egipet01.jpg" class="img-thumbnail">
                            <ul class="list-unstyled mt-3 mb-4">
                                <p>
                                    Столица Египта – настоящая Мекка для любого 
                                    туриста, где выбор достопримечательностей 
                                    просто огромен.
                                </p>
                            </ul>
                            <a class="w-100 btn btn-lg btn-outline-success" 
                               href="View/EgyptPage.php">
                                Подробнее
                            </a>
                        </div>
                    </div>
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal text-center">Греция</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Grees01.jpg" class="img-thumbnail">
                            <ul class="list-unstyled mt-3 mb-4">
                                <p>
                                    Греция — страна, где есть всё! Роскошные пляжи, 
                                    прозрачные воды Средиземного моря, множество 
                                    удивительных памятников архитектуры, великолепная 
                                    кухня и уютные отели.
                                </p>
                            </ul>
                            <a class="w-100 btn btn-lg btn-outline-success" 
                               href="View/GreecePage.php">
                                Подробнее
                            </a>
                    </div>
                </div>
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal text-center">Италия</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Italy01.png" class="img-thumbnail">
                            <ul class="list-unstyled mt-3 mb-4">
                                <p>
                                    Эмоциональная, темпераментная Италия пользуется 
                                    неутихающей популярностью у туристов.
                                    Здесь вы найдете любимые во всем мире блюда 
                                    итальянской кухни, прекрасные пляжи.
                                </p>
                            </ul>
                            <a class="w-100 btn btn-lg btn-outline-success" 
                               href="View/ItalyPage.php">
                                Подробнее
                            </a>
                        </div>
                </div>  
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal text-center">Испания</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Spain01.jpg" class="img-thumbnail">
                            <ul class="list-unstyled mt-3 mb-4">
                                <p>
                                    Испания — красивейшая страна мира с очень 
                                    гостеприимным народом. Туристов со всех уголков 
                                    планеты притягивают море, изумительные пляжи для 
                                    отдыха и природа, с зелеными холмами и цветущими 
                                    полями, знаменитые на весь мир апельсиновые рощи 
                                    и виноградники.
                                </p>
                            </ul>
                            <a class="w-100 btn btn-lg btn-outline-success" 
                               href="View/SpainPage.php">
                                Подробнее
                            </a>
                    </div>
                </div>
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal text-center">Австралия</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/Australia01.jpg" class="img-thumbnail">
                            <ul class="list-unstyled mt-3 mb-4">
                                <p>
                                  Австралия – удивительная страна-материк, привлекающая 
                                  не только туристов. Спокойная и размеренная жизнь 
                                  без особых политических и экономических потрясений, 
                                  высокий уровень жизни и относительно легкие условия 
                                  для иммиграции поставили ее на первое место среди стран, 
                                  в которые бы люди предпочли переселиться на ПМЖ.  
                                </p>
                            </ul>
                            <a class="w-100 btn btn-lg btn-outline-success" 
                               href="View/AustraliaPage.php">
                                Подробнее
                            </a>
                    </div>
                </div>
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal text-center">Новая Зеландия</h4>
                    </div>
                    <div class="card-body">
                        <img src="img/New_Zeland01.jpg" class="img-thumbnail">
                            <ul class="list-unstyled mt-3 mb-4">
                                <p>
                                  Новая Зеландия — страна, где господствует природа, 
                                  так что экстремалам и активным туристам сюда 
                                  прямая дорога. Водопады и гейзеры, пляжи и ледники, 
                                  холмы и озера — вот неполный список ее красот. 
                                  Дайвинг и экотуризм 
                                </p>
                            </ul>
                            <a class="w-100 btn btn-lg btn-outline-success" 
                               href="View/NewZealandPage.php">
                                Подробнее
                            </a>
                    </div>
                </div> 
            </div>
        </div>
        <!-- подключение футера -->    
        <?php
           require './View/Shared/footer.php';
        ?>
    </body>
</html>

