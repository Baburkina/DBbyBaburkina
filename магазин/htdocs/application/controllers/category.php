<?php

class Category extends CI_Controller{
    public function index(){

    }
    public function id($id){
        $this->load->model("category_model");
        $books = $this->category_model->get_books($id)->result();
        $this->load->model("category_model");
        $category_list = $this->category_model->get_category_list()->result();
        $this->load->view("main",array("books" => $books, "category_list" => $category_list));

    }
}