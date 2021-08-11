<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-light p-4">
    <h5 class="text-dark h4">Collapsed content</h5>
    <span class="text-muted">Toggleable via the navbar brand.</span>
  </div>
</div>
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
    <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" 
       aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/index.php">
      <img src="/img/Sun_logo2.svg" width="30" height="auto" class="d-inline-block align-top" alt="" loading="lazy">
      <strong>SUN-tez</strong>
    </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="/index.php">Главная</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/View/hot-tours.php">Горящие туры</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/View/hotel.php">Отели</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/cruises.php">Круизы</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/aboutUs.php">О нас</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/contacts.php">Контакты</a>
        </li>
      </ul>
      </div>
     <!-- работа с COOKIE -->
    <?php   
        if(isset($_COOKIE['user']) == 'true'):
    ?>
     <a class="btn btn-outline-primary" href="auth.php">
        Кабинет пользователя
    </a>
    <?php
       else:
    ?>
     <a class="btn btn-outline-primary" href="auth.php">
        Войти
    </a>
    <?php endif;?>
    </div>
     
 </nav>

 
