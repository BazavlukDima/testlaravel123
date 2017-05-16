<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubTypeModel extends Model
{
    protected $table = 'subt';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    public function getDataFromDbSubType($prev)
    {
        $data = SubTypeModel::select('ID', 'Name')->where('CountryCode', $prev)->get();
        $data = $data->toArray();

        return $data;
    }
}
