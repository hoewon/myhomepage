<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog_model extends CI_Model{
    public function get_all(){
        $this ->db ->order_by('post_date','desc');
        //限制3条
        //        $this ->db ->limit(3);
        return  $this -> db -> get('t_blog') -> result();

    }
    public function get_by_category($cate_id){
        $this ->db ->order_by('post_date','desc');
        return  $this -> db -> get_where('t_blog',array('cate_id'=>$cate_id)) -> result();

    }
}