<?php
class Member_model extends CI_Model
{

    public $tableName = "members";
    public function __construct()
    {
        parent::__construct();
    }

    /* Tablodaki tüm kayıtları getirir. */
    public function get_all($where = array(), $order = "id ASC")
    {
        return $this->db->where($where)->order_by($order)->get($this->tableName)->result();
    }
    
    /* Koşula bağlı istenilen tek kaydı geri döndürür. */
    public function get($where = array())
    {
        return $this->db->where($where)->get($this->tableName)->row();
    }

    /* Yeni kayıt ekler. */
    public function insert($data = array())
    {
        return $this->db->insert($this->tableName, $data);
    }

    /* Koşula bağlı belirtilen kaydı günceller. */
    public function update($where = array(), $data = array())
    {
        return $this->db->where($where)->update($this->tableName, $data);
    }

    /* Koşula bağlı belirtilen kaydı siler. */
    public function delete($where = array())
    {
        return $this->db->where($where)->delete($this->tableName);
    }
}
