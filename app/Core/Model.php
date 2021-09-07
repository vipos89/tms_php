<?php


namespace App\Core;


class Model
{
    protected static $tablename;

    public static function finById($id){
        $sql = "SELECT * FROM ".(static::$tablename)." WHERE id = ".$id;
        DB::getConnection()->query($sql);

    }

    public static function search($searchArgs, $offset=0, $limit =100){}

    public function save(){}
}