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
        <title>Контактны</title>
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
                        <li class="breadcrumb-item"><a href="index.php">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Контакты</li>
                    </ol>
                </nav>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <h3>Наши контактны</h3>
                    <br>
                    <p>
                        Номер телефона:<br>
                        +7(777)120-45-03<br>
                        +7(747)560-78-02<br><br>
                        Факс:<br>
                        +7(727)310-96-41<br><br>
                        Адрес:<br>
                        Республика Казахстан, город Алматы,<br>
                        Ауэзовский район, ул. Абая 45
                    </p>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="alert alert-warning" role="alert">
                        <em>
                            Вы можете написать нам на электронную почту.
                        </em>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    
                    <h3>Контактная форма</h3>
                    <br>
                    <form action="check.php" method="post">
                        <input type="email" name="email" placeholder="Введите Email" 
                            class="form-control"> <br>
                    <textarea name="message" class="form-control" 
                        placeholder="Введите ваше сообщение!">
                    </textarea> <br>
                    <button type="submit" name="send" class="btn btn-success">
                        Отправить
                    </button>
                    </form>
                </div>
            </div>
            
        </div>

        <!-- подключение футера -->  
        <?php
        require './View/Shared/footer.php';
        ?>
    </body>
</html>

