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
            blog.thumbnail,
            blog.title_en,
            blog.date_created,
            blog.description_en,
            category.name_en as category_name');
        $this->db->from('blog');
        $this->db->join('category', 'category.id = blog.fk_category', 'inner');
        $this->db->order_by('blog.id', 'DESC');
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
            blog.slug,
            blog.thumbnail,
            blog.title_en,
            blog.content_en,
            blog.date_created,
            blog.description_en,
            category.name_en as category_name');
        $this->db->from('blog');
        $this->db->join('category', 'category.id = blog.fk_category', 'inner');
        $this->db->where('blog.slug =', $slug);
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

}
