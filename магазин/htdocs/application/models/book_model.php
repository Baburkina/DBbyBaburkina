<?php

class Book_model extends CI_Model
{
    var $ID_book = "";
    var $name_book = "";
    var $id_publishing = "";
    var $rating = "";
    var $cost = "";
    var $photo = "";

   public function get_books() {
           // $this->db->where('id', $id);
        return $this->db->get('book');
    }

    public function get_book($id){
        $this->db->where('ID_book', $id);
        return $this->db->get('book');
    }

    public function get_books_where($lists){
        $query = "";
        $i = 1;




        foreach($lists as $item){
            if(1 == $i){
                $this->db->where('ID_book', $item);
            }
            else{
                $this->db->or_where('ID_book', $item);
            }
            $i++;
        }


        return $this->db->get('book');
    }

    public function insert_export(){
        $data = array(
            'title' => 'My title' ,
            'name' => 'My Name' ,
            'date' => 'My date'
        );

        $this->db->insert('', $data);
    }



}