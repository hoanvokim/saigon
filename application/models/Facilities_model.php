<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 6/13/18
 * Time: 11:19 PM
 */

class Facilities_model extends CI_Model
{

    public function show_all_data()
    {
        $this->db->select('
            facilities.name,
            facilities.img');
        $this->db->from('facilities');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        else {
            return false;
        }
    }
}
