<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 6/13/18
 * Time: 11:34 PM
 */
class News_model extends CI_Model
{

    public function show_all_data()
    {
        $this->db->select('
            news.slug,
            news.title,
            news.content,
            news.date_created,
            category.name as category_name,
            news.img');
        $this->db->from('news');
        $this->db->join('category', 'category.id = news.category_id', 'inner');
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
            news.slug,
            news.title,
            news.content,
            news.date_created,
            category.name as category_name,
            news.img');
        $this->db->from('news');
        $this->db->join('category', 'category.id = news.category_id', 'inner');
        $this->db->where('news.slug =', $slug);
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

    public function show_recent_post($slug)
    {
        $this->db->select('
            news.slug,
            news.title,
            news.content,
            news.date_created,
            category.name as category_name,
            news.img');
        $this->db->from('news');
        $this->db->join('category', 'category.id = news.category_id', 'inner');
        $this->db->where('news.slug !=', $slug);
        $this->db->order_by('rand()');
        $this->db->limit(5);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        else {
            return false;
        }
    }
}
