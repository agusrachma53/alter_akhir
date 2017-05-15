<?php

class proses extends CI_Model{

  function tampil($table){
    $sql = $this->db->get($table);
    $rows = $sql->num_rows();
    return $rows;
  }

  function tampil_2($table="",$id=0){
      $sql = $this->db->get($table);
      return $sql;

    }
  function insert($table,$aksinya){
    $this->db->insert($table,$insert);
  }

  function edit($table = "",$aksinya = "", $id = 0){
    $this->db->where('id',$id);
    $this->db->update($table,$aksinya);
  }

  function edit_tampil($table="",$id = 0){
    $sql = $this->db->get_where($table,array('id' => $id))->row();
    return $sql;
  }
  function delete($table = "", $id = 0){
    $this->db->where('id',$id);
    $this->db->delete($table);
  }



}

?>
