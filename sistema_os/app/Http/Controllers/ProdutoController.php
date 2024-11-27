<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use App\Models\Produto;
use Illuminate\Support\Facades\Redirect;

class ProdutoController extends Controller
{
    //
    public function index()
    {
        $produto = Produto::all();
        //return view('produto.index',['produtos' => $produtos]);
        return view('produto.index',compact('produto'));
         return view('produto.index');
    
    
    }

    public function cadastrar(){
        return view('produto.cadastrar');

}
    public Function store(Request $request){
        $produto = Produto::create($request->all());

        return redirect()->route('produto.index');
    }
}
