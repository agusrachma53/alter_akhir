<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  function __construct(){
    parent:: __construct();
    $this->load->model('proses');
  }

	public function index()
	{
    $data['category'] = $this->proses->tampil('kategori_prp');
    $data['article'] = $this->proses->tampil('article');
    $data['user'] = $this->proses->tampil('user');
    $data['slider'] = $this->proses->tampil('slider');
		$this->load->view('admin/home',$data);
	}

  public function category(){
    $data['category'] = $this->proses->tampil('kategori_prp');
    $data['category_2'] = $this->proses->tampil_2('kategori_prp');
    $data['article'] = $this->proses->tampil('article');
    $data['slider'] = $this->proses->tampil('slider');
    $data['user'] = $this->proses->tampil('user');
    $this->load->view('admin/category',$data);
  }
  public function edit($aksi = "",$id = 0){
    if($aksi == "edit_category"){
      $data['data'] = $this->proses->edit_tampil('kategori_prp',$id);
    }
    $data['category'] = $this->proses->tampil('kategori_prp');
    $data['category_2'] = $this->proses->tampil_2('kategori_prp');
    $data['article'] = $this->proses->tampil('article');
    $data['slider'] = $this->proses->tampil('slider');
    $data['user'] = $this->proses->tampil('user');
    $this->load->view('admin/category',$data);
  }

  public function act_cate($act = "", $id = 0){
    $tombol = $this->input->post('proses');
    if($tombol == "insert"){
      $name_cate = $this->input->post('cate');
      $aksinya = array(
        'name' => $name_cate,
      );
      $this->proses->insert('kategori_prp',$aksinya);
    }elseif($tombol == "Edit"){
      $id = $this->input->post('id');
      $name_cate = $this->input->post('cate');
      $aksinya = array(
        'name' => $name_cate,
      );
      $this->proses->edit('kategori_prp',$aksinya,$id);
    }elseif($act == "delete"){

      $this->proses->delete('kategori_prp',$id);
    }
      redirect(base_url('admin/category/add'));
  }

}
