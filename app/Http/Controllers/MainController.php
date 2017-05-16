<?php

namespace App\Http\Controllers;

use Request;
use App\Models\TypeModel;
use App\Models\SubTypeModel;
use App\Models\ProductsModel;
use redirect;

use App\Http\Requests;

class MainController extends Controller
{
    public function typeData()
    {
        $typeModel = new TypeModel();
        $data = $typeModel->getTypeDataFromDb();

        return $data;
    }

    public function getSubTyp()
    {
        $subTypeModel = new SubTypeModel();

        echo json_encode($subTypeModel->getDataFromDbSubType(Request::input('code')));//$_POST['code']));
    }

    public function getProduct()
    {
        $productsModel = new ProductsModel();

        echo json_encode($productsModel->getDataFromDbModels(Request::input('lol')));//$_POST['lol']));
    }

    public function index()
    {
        if (!Request::has('code') && !Request::has('lol')){
            return view('form.MainView', ['countries' => $this->typeData()]);
        } elseif (Request::has('code')) {
            return $this->getSubTyp();
            exit;
        } elseif (Request::has('lol')) {
            return $this->getProduct();
            exit;
        }
    }
}