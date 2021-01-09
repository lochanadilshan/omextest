<?php

namespace App\Http\Controllers;
use App\customer;
use Illuminate\Http\Request;
// validation
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\UploadedFiles;
use Illuminate\Support\Facades\Storage;
use DataTables;


class cutomercontroller extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = customer::all();
        //return $customers;
        return view('customerlist',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    // {
    //    // return($request->fname);
    //     return response()->json(['success'=>'Data recieved successfully.']);
    // }
    {
        
        $validator = Validator::make($request->all(),
        [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'password' => 'required',

        ],
        [
            'fname.required' => 'Please enter your First Name',
            'lname.required' => 'Please enter your Last Name',
            'email.unique' => 'please enter valid email address',
            'password.unique' => 'please enter a Password ',
        ]

    );
    
    if ($validator->fails()){
        return redirect('customer/create')
                ->withErrors($validator)
                ->withInput();
    }
    
    customer::create($request->all());

    return redirect()->route('customer.index')
                    ->with('success','Application created successfully.');

}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = customer::find($id);
        return view('show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = customer::find($id);
        
        return view('edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer $customer)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $customer->update($request->all());
    
        return redirect()->route('customer.index')
                            ->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
        
       $customer->delete();
        return response()->json(['status' => 'success', 'message' =>'Dan hari bang']);
        
    }




// public function category()
// {
//     return view ('category');

// }


public function indexpagetable() {

    $ajaxdata = customer::all();
    
    return Datatables::of($ajaxdata) 
    
    ->addColumn('action', function ($ajaxdata) {

        $buttons ='<a class="far fa-eye btn btn-sm btn-primary btn-rounded m-b-1 m-l-5 shadow" href="'.url('/customer/'.$ajaxdata->id.'view').'"> View</a> 
        <a class="shadow far fa-edit btn btn-sm btn-success btn-rounded m-b-1 m-l-5" href="'.url('/customer/'.$ajaxdata->id.'/edit').'"> Edit</a>
        <input type="hidden" id="hiddenID" value="'.$ajaxdata->id.'">
        <button data-token="'. csrf_token() .'" class=" shadow far fa-trash-alt btn btn-sm btn-danger btn-rounded m-b-1 m-l-5" id="delete"> Delete</button>';
        // <button id="remove" class=" shadow far fa-trash-alt btn btn-sm btn-danger btn-rounded m-b-1 m-l-5" '.url('/customer/'.$ajaxdata->id.'/delete').'"> Delete</button>';

        return $buttons;
    })
    ->make(true);
}


public function abc() {

    $abc = customer::all();
    
    return Datatables::of($abc) ->make(true);
}

}
