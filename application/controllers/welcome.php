<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

//这是index_copy.php的index
//	public function index()
//	{
//		$cate_id = $this -> input -> get('cateId');
//		$this->load->model('blog_category_model');
//		$this->load->model('blog_model');
//		if(!$cate_id){
//			//查所有的文章
//			$blogs = $this ->blog_model->get_all();
//		}else{
//			//根据类别查询
//			$blogs = $this ->blog_model->get_by_category($cate_id);
//		}
//		//查所以的文章类别
//		$categories = $this ->blog_category_model->get_all();
//		//跳转页面
//		$this->load->view('index',array(
//		'categories'=>$categories,
//		'blogs'=>$blogs)
//		);
//	}
public function index(){
	$this->load->model('blog_category_model');
	$this->load->model('blog_model');
	$blogs = $this ->blog_model->get_all();
	$categories = $this ->blog_category_model->get_all();
	$this->load->view('index',array(
		'categories'=>$categories,
		'blogs'=>$blogs)
	);

}
	public function get_blogs(){
		$this->load->model('blog_model');
		$cate_id = $this ->input->get('cateId');
		if(!$cate_id){
			$blogs = $this ->blog_model->get_all();
		}else{
			$blogs = $this ->blog_model->get_by_category($cate_id);
		}

		echo json_encode($blogs);

	}
}
