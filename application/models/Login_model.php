<?php
class Login_model extends CI_Model
{
    function can_login($email, $password)
    {
        $this->db->where('user_email', $email);
        $query = $this->db->get('user');
        if($query->num_rows() > 0)
        {

            foreach($query->result() as $row)
            {
                if($row->password == $password)
                {
                    return true;
                }
                else
                {
                    echo $row->password.' '.$password;
                    return false;
                }
            }
        }
        else
        {
            return false;
        }
    }
}

?>
