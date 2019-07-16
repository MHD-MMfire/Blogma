<?php


class CRUD_model extends CI_Model
{
    protected $_table = null;
    protected $_primary_key = 'id';

    public function __construct()
    {
        parent::__construct();
        if($this->_table == null)
            die('please specify a table name and primary key <br> $_table and $_primary_key');
        $this->load->database();
    }

    /**
     * @usage
     * All : $this->db->get();
     * Single : $this->db->get(2);
     * Custom : $this->db->get(array('id' => 2, 'name' => 'mahdi'));
     * @param
     * $order_by : 'column_name ASC/DESC/RANDOM, column_name_2 ASC/DESC/RANDOM, ...'
     *
     * @return
     * returns result as array, or 0 on failure
     */
    public function get($id = null, $order_by = null)
    {
        if(is_numeric($id))
        {
            $this->db->where($this->_primary_key, $id);
        }

        if(is_array($id))
        {
            $this->db->where($id);
        }
        if($order_by != null)
            $this->db->order_by($order_by);

        $q = $this->db->get($this->_table);
        return $q->result_array();
    }

    public function insert($data)
    {
        $this->db->insert($this->_table, $data);
        return $this->db->insert_id();
    }

    public function update($id, $data)
    {
        $this->db->where($this->_primary_key, $id);
        $this->db->update($this->_table, $data);
        return $this->db->affected_rows();
    }

    public function delete($id)
    {
        if(is_numeric($id))
        {
            $this->db->where($this->_primary_key, $id);
        }
        if(is_array($id))
        {
            $this->db->where($id);
        }
        $this->db->delete($this->_table);
        return $this->db->affected_rows();
    }

    public function insertUpdate($id, $data)
    {
        $q = $this->db->get_where($this->_table, array($this->_primary_key => $id));
        if($q->num_rows() == 0)
            return $this->insert($data);

        return $this->update($id, $data);
    }
}