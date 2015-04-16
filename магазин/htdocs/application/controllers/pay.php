<?php

class Pay extends CI_Controller
{
    public function index()
    {

        $this->load->model("book_model");
        $source = $this->input->cookie("data");

        $items = explode('|', $source);


        $data = array(array(), array());


            foreach ($items as $item) {
                $itemPiece = explode(":", $item);
                array_push($data[0], $itemPiece[0]);
                array_push($data[1], $itemPiece[1]);
            }



        $books = $this->book_model->get_books_where($data[0])->result();

        $this->load->model("category_model");
        $category_list = $this->category_model->get_category_list()->result();

        $this->load->view("cart", array("books" => $books, "category_list" => $category_list, "data" => $data));

    }

    public function add($id)
    {

        $source = $this->input->cookie("data");
        echo $source . "<br />";
        if ($source == null) {
            $items = $id . ":1";
        } else {
            $items = explode('|', $source);

            $flag = false;
            for ($i = 0; $i < count($items); ++$i) {
                $itemsPiece = explode(':', $items[$i]);
                if ($itemsPiece[0] == $id) {
                    $items[$i] = $itemsPiece[0] . ":" . (++$itemsPiece[1]);
                    $flag = true;
                    break;
                }
            }

            echo count($items) . "<br />";

            if (!$flag) {
                array_push($items, $id . ":1");
            }

            echo count($items) . "<br />";

            //if (count($items) > 1) {
            $items = implode('|', $items);
            //}
            echo $items . "<br />";
        }


        $cookie = array(
            'name' => 'data',
            'value' => $items,
            'expire' => 86500,
            'secure' => false
        );
        $this->input->set_cookie($cookie);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function dec($id)
    {

        $source = $this->input->cookie("data");
        $items = explode('|', $source);

        for ($i = 0; $i < count($items); ++$i) {
            $temp = explode(":", $items[$i]);
            if ($temp[0] == $id) {
                if ($temp[1] > 1) {
                    $items[$i] = $id . ":" . (--$temp[1]);
                } else {
                    unset($items[$i]);
                }
                break;
            }
        }

        $items = implode('|', $items);


        $cookie = array(
            'name' => 'data',
            'value' => $items,
            'expire' => 86500,
            'secure' => false
        );
        $this->input->set_cookie($cookie);
        header('Location: ' . $_SERVER['HTTP_REFERER']);


    }

    public function del($id)
    {
        $source = $this->input->cookie("data");
        $items = explode('|', $source);
        if (count($items) > 1) {
            $index = -1;
            for ($i = 0; $i < count($items); ++$i) {
                $temp = explode(":", $items[$i]);
                if ($temp[0] == $id) {
                    $index = $i;
                    break;
                }
            }
            unset($items[$index]);
            $items = implode('|', $items);
        } else {
            $items = "";
        }

        $cookie = array(
            'name' => 'data',
            'value' => $items,
            'expire' => 86500,
            'secure' => false
        );
        $this->input->set_cookie($cookie);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function add_order()
    {
        $source = $this->input->cookie("data");
        $items = explode('|', $source);

        $this->load->model("order_model");
        $this->order_model->insert_order($items, $this->ion_auth->user()->row()->id);
        $cookie = array(
            'name' => 'data',
            'value' => null,
            'expire' => 86500,
            'secure' => false
        );
        $this->input->set_cookie($cookie);
        header('Location: /index.php/pay/order/');
    }

    public function  order()
    {
        $this->load->model("book_model");


        $this->load->model("category_model");
        $category_list = $this->category_model->get_category_list()->result();


        $this->load->model("order_model");
        $list = $this->order_model->order($this->ion_auth->user()->row()->id)->result();


        $this->load->view("order", array("orders" => $list, "category_list" => $category_list));
    }
}