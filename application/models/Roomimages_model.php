<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 6/13/18
 * Time: 10:19 PM
 */

class Roomimages_model extends CI_Model
{

    public function show_by_slug($slug)
    {
        $this->db->select('
            room_img.img as img');
        $this->db->from('room_img');
        $this->db->join('room', 'room.id = room_img.room_id', 'inner');
        $this->db->where('room.slug =', $slug);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        else {
            return false;
        }
    }

}

