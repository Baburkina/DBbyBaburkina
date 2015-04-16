<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="/css/styles.css">


    <!-- Latest compiled and minified JavaScript -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.js"></script>
    <script type="text/javascript">

    </script>
    <title>Shop</title>
</head>
<body>

<nav class="navbar navbar-shop">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-4">
                <?php
                    if($this->ion_auth->logged_in()){
                        echo "Привет, ".$this->ion_auth->user()->row()->username."!";
                        echo " <a href='/index.php/pay/order'>История заказов  </a>";
                        echo "<a href='/index.php/auth/logout'>Выход</a>";
                    }
                    else {
                       echo <<<HTML
                         <a href="/index.php/auth">Войти  </a>
                         <a href="/index.php/registration/">Регистрация</a>
HTML;

                    }
                ?>
            </div>
            <div class="col-md-1 pull-right">
                <a href="/index.php/pay">Корзина

                </a>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a href="/">
                <img src="/images/loaded_logo.png"/>
            </a>
        </div>
      <!--  <div class="col-md-4 pull-right">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
            </div>

        </div> !-->
    </div>

    <div class="row">
        <div class="col-md-2 top-books">
            Жанры
        </div>
        <div class="col-md-10 last-books">
            НОВИНКИ МЕСЯЦА
        </div>
    </div>



    <div class="row">
        <div class="col-md-2">
            <?php
            foreach ($category_list as $category) {
                echo '<a href="/index.php/category/id/'.$category->id.'">'.$category->name_category.'</a><br />';

            }
            ?>
        </div>
        <div class="col-md-10">
            <div class="row">
                <br />