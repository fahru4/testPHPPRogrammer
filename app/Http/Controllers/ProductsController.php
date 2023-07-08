<?php

namespace App\Http\Controllers;

use App\Models\Order;
use DataTables;
use App\Models\Product;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        // $response = Http::get('https://dummyjson.com/products');
        // $jsonData = $response->json();
        // dd($jsonData);
        // $body = json_decode($response->getBody());
        // $content = view('members',compact('body'));
        // return view('pages/product/index',compact('body'));
        if ($request->ajax()) {
            $response = Http::get('https://dummyjson.com/products');
            $data = json_decode($response);
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('pages/product/index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->ajax()) {
            $data = Order::get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('pages/order/index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->action == 'create'){
            

            $validator = Validator::make($request->all(), [
            'name_supplier' => 'required',
            'name_product' => 'required',
            'total' => 'required',
            'date' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('error', 'Validation required');
            }

            DB::beginTransaction();
            try {
                

                Order::create([
                    'no_order'     => codeOrder(),
                    'name_supplier'     => $request->name_supplier,
                    'name_product'   => $request->name_product,
                    'total'   => $request->total,
                    'date'   => $request->date,
                ]);
    
            } catch (\Throwable $th) {
                // Log::info('Failed created product = '.$th);
                DB::rollback();
                return redirect()->back()->with('error', 'Failed created new a order'.$th);
            }
                DB::commit();
                return redirect()->route('order-index')->with('success','order Successfully Created');
            }

            return view('pages/order/create');
        }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
}
