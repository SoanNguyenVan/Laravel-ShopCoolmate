<?php 
namespace App\Services;

class MainAdminServices 
{
    public static function status ($active){
        if($active == 0){
        return '<span style ="color: white; padding: 3px; background-color: red; border-radius: 5px">Chưa xác nhận</span>';
        }
        else{
          return  '<span style = "color: white; padding: 3px; background-color: green; border-radius: 5px"> Đã xác nhận</span>';;
        }
    }
}
