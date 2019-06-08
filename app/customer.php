<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    //ham kiem tra xem user cos phai admin hay customer

    /**
     * Kiem tra quyen co phai la admin hay khong
     * @return bool
     */
//    public function checkRoleAdmin()
//    {
//        if (session_status() == PHP_SESSION_NONE) {
//            session_start();
//        }
//        $role = $_SESSION['customer'][0]['cus_role'];
//        if ($role == 1)
//            return 1;
//        return 0;
//    }

}
