<?php

class Book extends CI_Controller{

    public function index(){

    }

    public function id($id){
        $this->load->model("book_model");
        $book = $this->book_model->get_book($id)->row();
        $this->load->model("category_model");
        $category_list = $this->category_model->get_category_list()->result();

       $this->load->view("book", array("book" => $book, "category_list" => $category_list));
    }

}