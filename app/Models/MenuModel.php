<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class MenuModel extends Model
{
    use HasFactory;

    public function getmenu(){
      $menu=DB::select('select * from menu where menu_inactive=?',['0']);
      $submenu=DB::select('select * from submenu where submenu_inactive=?',['0']);
      return ['menu'=>$menu,'submenu'=>$submenu];

    }
}
