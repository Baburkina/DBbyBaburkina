<?php
$this->load->view('header');


echo <<<HTML
    <div class="col-sm-12 col-md-12">
        <div class="thumbnail">


            <img src="/images/books/{$book->photo}" >

            <div class="caption">
                <h3>{$book->name_book}</h3>
                <p>Здесь какое-то интересное описание книги. Здесь какое-то интересное описание книги. Здесь какое-то интересное описание книги. Здесь какое-то интересное описание книги. Здесь какое-то интересное описание книги. </p>
                <p>Рейтинг: {$book->cost}</p>
                <p> <b>$book->cost</b> руб. <a href="/index.php/pay/add/{$book->ID_book}" class="btn btn-primary" role="button">В корзину</a>
                </p>
            </div>
        </div>
    </div>
HTML;

$this->load->view('footer');
?>