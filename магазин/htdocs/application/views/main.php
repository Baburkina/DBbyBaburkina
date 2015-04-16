<?php
$this->load->view('header');


foreach ($books as $book) {


    echo <<<HTML
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="/images/books/{$book->photo}" >

            <div class="caption">
                <h3><a href="/index.php/book/id/{$book->ID_book}">{$book->name_book}</a></h3>
                <p>Рейтинг: {$book->cost}</p>
                <p> <b>$book->cost</b> руб. <a href="/index.php/pay/add/{$book->ID_book}" class="btn btn-primary" role="button">В корзину</a>
                </p>
            </div>
        </div>
    </div>

HTML;

}







$this->load->view('footer');
?>