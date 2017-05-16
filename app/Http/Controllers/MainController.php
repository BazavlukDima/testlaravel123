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
    protected $typeModel;
    protected $subTypeModel;
    protected $productsModel;

    public function __construct(
        TypeModel $typeModel, 
        SubTypeModel $subTypeModel, 
        ProductsModel $productsModel) 
    {
        $this->typeModel = $typeModel;
        $this->subTypeModel = $subTypeModel;
        $this->productsModel = $productsModel;
    }

    public function typeData()
    {
        // return $this->typeModel->getTypeDataFromDb();
        return view('form.MainView', ['countries' => $this->typeModel->getTypeDataFromDb()]);
    }

    public function getSubTyp()
    {
        echo json_encode($this->subTypeModel->getDataFromDbSubType(Request::input('code')));
    }

    public function getProduct()
    {
        echo json_encode($this->productsModel->getDataFromDbModels(Request::input('lol')));
    }

    // public function index()
    // {
    //     if (!Request::has('code') && !Request::has('lol')) {
    //         return view('form.MainView', ['countries' => $this->typeData()]);
    //     } elseif (Request::has('code')) {
    //         return $this->getSubTyp();
    //         exit;
    //     } elseif (Request::has('lol')) {
    //         return $this->getProduct();
    //         exit;
    //     }
    // }
}