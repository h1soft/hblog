<?php

namespace Apps\Backend\Helper;

class Account extends \hmvc\Web\Helper {
    
    public function getAccount($id) {
        return $this->db()->getOne("admin","id='$id'");
    }
    
    public function checkUsername($username) {
        return $this->db()->getOne("admin","username='$username'");
    }
   
}
