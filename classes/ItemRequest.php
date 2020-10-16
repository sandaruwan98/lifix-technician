<?php
require_once "Database.php";

class ItemRequest extends Database
{

    public function getPendingRequestList()
    {
        // $q = "SELECT `Itemrequest_id`, `created_by`, `added_date` FROM `itemrequest` WHERE `status`='o' ";
        $q = "SELECT itemrequest.Itemrequest_id,user.username , itemrequest.added_date 
        FROM itemrequest INNER JOIN user 
        ON itemrequest.created_by=user.userId
         WHERE itemrequest.status='o' ";

        $list =   $this->conn->query($q);
        return $list;
    }



}
