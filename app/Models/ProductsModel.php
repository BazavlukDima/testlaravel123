<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    protected $table = 'models';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    public function getDataFromDbModels($prev)
    {
        $data = ProductsModel::select('ID', 'Name')->where('CountryCode', $prev)->get();
        $data = $data->toArray();

        return $data;
    }
}
