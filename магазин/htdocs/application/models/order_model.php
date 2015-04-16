<?php

class Order_model extends CI_Model{

    public function insert_order($list, $userId){

        $data = array(
            'time' => time() ,
            'userid' => $userId
        );
        $this->db->insert('order', $data);
        $id = $this->db->insert_id();

        foreach($list as $itemComp){
            $item = explode(":",$itemComp);
            for($i=0; $i < $item[1]; ++$i){
                $data = array(
                  'bookid' => $item[0],
                  'orderid' => $id,
                );
                $this->db->insert('order_list', $data);
            }
        }
    }

    public function order($userid){
        $this->db->select('*');
        $this->db->from('book');
        $this->db->join('order_list', 'book.ID_book = order_list.bookid');
        $this->db->join('order', 'order.id = order_list.orderid');

        $this->db->where('order.userid', $userid);
        return $this->db->get();
    }

}