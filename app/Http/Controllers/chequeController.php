<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\cheque;
use Illuminate\Http\Request;
use Session;

class chequeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $cheque = cheque::where('banque', 'LIKE', "%$keyword%")
				->orWhere('num_cheque', 'LIKE', "%$keyword%")
				->orWhere('montant', 'LIKE', "%$keyword%")
				->orWhere('echeance', 'LIKE', "%$keyword%")
				->orWhere('paiement', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $cheque = cheque::paginate($perPage);
        }

        return view('cheque.index', compact('cheque'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('cheque.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        cheque::create($requestData);

        Session::flash('flash_message', 'cheque added!');

        return redirect('cheque');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $cheque = cheque::findOrFail($id);

        return view('cheque.show', compact('cheque'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $cheque = cheque::findOrFail($id);

        return view('cheque.edit', compact('cheque'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $cheque = cheque::findOrFail($id);
        $cheque->update($requestData);

        Session::flash('flash_message', 'cheque updated!');

        return redirect('cheque');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        cheque::destroy($id);

        Session::flash('flash_message', 'cheque deleted!');

        return redirect('cheque');
    }
}
