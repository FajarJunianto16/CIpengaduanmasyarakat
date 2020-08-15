<?php

class modelsistem extends CI_model
{
    public function insertData()
    {
        $data = array(
            'nik' => $this->input->post('NIK'),
            'nama' => $this->input->post('name'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('Email'),
            'telp' => $this->input->post('telepon')
        );

        $this->db->insert('masyarakat', $data);
        header("Location:" . base_url().'index.php/dashboard/masuk');
    }

    public function get_user()
    {
        $data = $this->db->get('masyarakat');
        return $data->result();
    }
    public function count_user()
    {
        $data = $this->db->get('masyarakat');
        return $data->num_rows();
    }
    public function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}


?>