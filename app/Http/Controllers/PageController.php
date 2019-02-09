<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //INDEX PAGE
    public function index(){
        $data = [
            'title'=>'Dashboard',
            'from'=>[
                    'fromtitle'=> '',
                    'thislink' => '#' 
                ]
        ];
        return view('pages.index')->with($data);
    }
    //LOGIN PAGE
    public function login(){
        return view('pages.login');
    }
    //REGISTER PAGE
    public function register(){
        return view('pages.admin.register');
    }
    
    /* INVENTORY */
    
    //PART MANAGEMENT PAGE
    public function partManage(){

        $data = [
            'title'=>'Part Management',
            'from'=>[
                    'fromtitle'=> 'Inventory',
                    'thislink' => '#' 
                ]
        ];

        return view('pages.inventory.part-management')->with($data);
        
    }
    //HOT PART PAGE
    public function hotPart(){
        $data = [
            'title'=>'Hot Part Inventory',
            'from'=>[
                    'fromtitle'=> 'Inventory',
                    'thislink' => '#' 
                ]
        ];
        return view('pages.inventory.hot-part-inventory')-> with($data);

    }
    //ADD NEW PART PAGE
    public function addNewPart(){
        $data = [
            'title'=>'Add New Part',
            'from'=>[
                    'fromtitle'=> 'Inventory',
                    'thislink' => '#' 
                ]
        ];
        return view('pages.inventory.addNewPart')-> with($data);

    }
}
