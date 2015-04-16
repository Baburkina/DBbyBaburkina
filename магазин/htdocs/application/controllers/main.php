<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index(){


        $this->load->model("book_model");
        $books = $this->book_model->get_books()->result();
        $this->load->model("category_model");
        $category_list = $this->category_model->get_category_list()->result();

        $this->load->view("main",array("books" => $books, "category_list" => $category_list));

    }

    public function id(){}




}