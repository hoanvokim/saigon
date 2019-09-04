<?php
/**
 * Created by IntelliJ IDEA.
 * User: hvo
 * Date: 13.06.18
 * Time: 17:45
 */

class Room_model extends CI_Model
{

    public function show_all_data()
    {
        $this->db->select('
            room.slug,
            room.room_name,
            room.des,
            room.img');
        $this->db->from('room');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        else {
            return false;
        }
    }

    public function show_by_slug($slug)
    {
        $this->db->select('
            room.slug,
            room.room_name,
            room.des,
            room.img');
        $this->db->from('room');
        $this->db->where('room.slug =', $slug);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $news) {
                return $news;
            }
        }
        else {
            return false;
        }
    }

    public function show_recent_rooms($slug)
    {
        $this->db->select('
            room.slug,
            room.room_name,
            room.img');
        $this->db->from('room');
        $this->db->where('room.slug !=', $slug);
        $this->db->order_by('rand()');
        $this->db->limit(3);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        else {
            return false;
        }
    }
}
