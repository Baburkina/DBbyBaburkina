<?php
$this->load->view('header');

$ordercounter = array();
$result = array();

foreach ($orders as $items) {
    if (!in_array($items->orderid, $ordercounter)) {
        array_push($ordercounter, $items->orderid);
    }
}

foreach ($ordercounter as $orderId) {

    $data = array();

    foreach ($orders as $items) {
        if ($orderId == $items->orderid) {

            $flag = 1;
            foreach ($data as $key => $exist) {
                if ($items->ID_book == $exist["items"]->ID_book) {
                    $flag = -1;
                    $data[$key]["count"]++;
                    break;
                }
            }

            if ($flag == 1) {
                array_push($data, array(
                    "items" => $items,
                    "count" => 1
                ));
            }

        }
    }

    array_push($result,
        array(
            "orderid" => $orderId,
            "data" => $data
        )
    );

}

//var_dump($result);

//$orders -> orderid


///
/*$orderflag = -1;
$indexer = 1;

$orderid;
$name_book;
$ID_book;
$cost;
$noDublicate = array();
$counter = 0;


for ($i = 0; $i < count($orders); ++$i) {
    $counter++;
    if ($i == 0) {
        $orderid = $orders[$i]->orderid;
        $name_book = $orders[$i]->name_book;
        $ID_book = $orders[$i]->ID_book;
        $cost = $orders[$i]->cost;
    }
    if ($orders[$i]->orderid != $orderid or $ID_book != $orders[$i]->ID_book or $i == (count($orders) - 1)) {
        array_push($noDublicate, array(
            "orderid" => $orderid,
            "name_book" => $name_book,
            "ID_book" => $ID_book,
            "cost" => $cost,
            "count" => $counter
        ));
        $cost = $orders[$i]->cost;
        $orderid = $orders[$i]->orderid;
        $name_book = $orders[$i]->name_book;
        $ID_book = $orders[$i]->ID_book;
        $counter = 0;
    }


}*/
$indexer = 1;

foreach ($result as $order) {



        echo <<<HTML
        <div class="col-sm-12 col-md-12">
    <div class="thumbnail">
    Заказ #{$indexer}
HTML;

    foreach($order["data"] as $book){



         echo '


            <p><a href="/index.php/book/id/'.$book["items"]->ID_book.'">' . $book["items"]->name_book . '</a>
                ' . $book["count"] . ' штук по 
                <b>' . $book["items"]->cost . '</b> руб.</p>

';

    }



    echo "</div>
    </div>";
    $indexer++;

}




?>


<?php
$this->load->view('footer');
?>