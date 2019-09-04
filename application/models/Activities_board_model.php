<?php
/**
 * Created by IntelliJ IDEA.
 * User: hvo
 * Date: 04.09.19
 * Time: 9:45
 */

class Activities_board_model extends CI_Model
{

	public function show_all_data()
	{
		$this->db->select('
            activities_board.id,
            activities_board.url,
            activities_board.title,
            activities_board.description,
            activities_board.date_created');
		$this->db->from('activities_board');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else {
			return false;
		}
	}
}
