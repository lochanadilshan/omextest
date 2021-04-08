<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;

// validation
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\UploadedFiles;
use Illuminate\Support\Facades\Storage;
use DataTables;



class itemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('items.itemlist', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.newItem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'pTitle' => 'required',
            'pDescription' => 'required',
            'pPrice' => 'required',
            'pAvailability' => 'required',
            

        ],
        [
            'pTitle.required' => 'Please enter Product Title',
            'pDescription.required' => 'Please enter Product Description',
            'pPrice.unique' => 'please enter Product Price',
            'pAvailability.unique' => 'please Select Product Category',

        ]

    );



    
    if ($validator->fails()){
        return redirect('item/create')
                ->withErrors($validator)
                ->withInput();
    }
    
    Item::create($request->all());

    return redirect()->route('items.index')
                    ->with('success','New Item Added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = Item::find($id);
        return view('items.view',compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Item::find($id);
        return view('items.edit', compact('items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, item $items)
    {
        $request->validate([

            'pTitle' => 'required',
            'pDescription' => 'required',
            'pPrice' => 'required',
            'pAvailability' => 'required',
            
           

        ]);

        $items->update($request->all());
    
        return redirect()->route('items.index')
                            ->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(item $items)
    {
        $items->delete();
        return response()->json(['status' => 'success', 'message' =>'Delete Successfull']);
        
    }


    public function itemlisttable() {

        $ajaxdata = Item::all();
        
        return Datatables::of($ajaxdata) 

        ->addColumn('action', function ($ajaxdata) {

            $buttons ='<a class="far fa-eye btn btn-sm btn-primary btn-rounded m-b-1 m-l-5 shadow" href="'.url('/items/'.$ajaxdata->id.'/').'"> View</a> 
            <a class="shadow far fa-edit btn btn-sm btn-success btn-rounded m-b-1 m-l-5" href="'.url('/items/'.$ajaxdata->id.'/edit').'"> Edit</a>
            <input type="hidden" id="hiddenID" value="'.$ajaxdata->id.'">
            <button data-token="'. csrf_token() .'" class=" shadow far fa-trash-alt btn btn-sm btn-danger btn-rounded m-b-1 m-l-5" id="delete"> Delete</button>';
           
            return $buttons;
        })
        ->make(true);
    }
}
