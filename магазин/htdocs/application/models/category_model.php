<?php

class Category_model extends CI_Model{
    var $id = null;
    var $name_category = "";
    public function get_category_list(){
            return $this->db->get('category');
    }

    public function get_books($id){

        $this->db->select('*');
        $this->db->from('book');
        $this->db->join('book_category', 'book.ID_book = book_category.ID_book');
        $this->db->where('book_category.ID_category', $id);
        return $this->db->get();

    }
}