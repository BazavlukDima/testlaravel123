<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeModel extends Model
{
    protected $table = 'type';
    protected $primaryKey = 'Code';
    public $timestamps = false;

    public function getTypeDataFromDb()
    {
        $data = TypeModel::select('Code', 'Name')->get();
        $data = $data->toArray();

        return $data;
    }
}
