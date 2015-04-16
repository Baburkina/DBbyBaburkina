<?php
$this->load->view('header');


foreach ($books as $book) {

    $key = array_search($book->ID_book, $data[0]);

    echo <<<HTML
    <div class="col-sm-12 col-md-12">
    <div class="thumbnail">
        <div class="row">
            <div class="col-md-4"><img src="/images/books/{$book->photo}" ></div>
            <div class="col-md-4">
            <h3><a href="/index.php/book/id/{$book->ID_book}">{$book->name_book}</a></h3>
                <p>Рейтинг: {$book->cost}</p>
                <p> <b>$book->cost</b> руб.</p>
                <p>Штук:<b>{$data[1][$key]}</b> <a href="/index.php/pay/dec/{$book->ID_book}">--</a></p>
            </div>
            <div class="col-md-4"><a href="/index.php/pay/del/{$book->ID_book}">Удалить</a></div>
        </div>
        </div>
    </div>

HTML;

}


?>



<a href="/index.php/pay/add_order">Оформить заказ</a>
<?php
$this->load->view('footer');
?>