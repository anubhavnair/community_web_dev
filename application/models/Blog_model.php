<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // function to add blog
    public function add_blog($image, $caption)
    {
        $data = array(
            'user_id' => $this->session->userdata('login'),

            'image_url' => $image,
            'content' => $caption,

        );

        if ($this->db->insert('posts', $data)) {
            return true;
        }else{
            return false;
        }

    }

    // function to get all blog posts
    public function get_all_blog_posts()
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->order_by('post_id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getSinglePost($id)
    {
        $this->db->select('*');
        $this->db->from('posts');
        $this->db->where('post_id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function increaseLike($post_id){

    }

}
