<?php
class nguoidung
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function authenticateUser($username, $password)
    {
        $query = "SELECT * FROM User WHERE TenUser='$username' AND MatKhau='$password'";
        $result = $this->db->query($query);

        return ($result && $result->num_rows > 0);
    }
}
?>