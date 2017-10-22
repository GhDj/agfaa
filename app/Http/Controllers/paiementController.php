<?php

namespace App\Http\Controllers;

use App\cheque;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\paiement;
use Illuminate\Http\Request;
use Session;

class paiementController extends Controller
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
            $paiement = paiement::where('adherant', 'LIKE', "%$keyword%")
				->orWhere('paiement', 'LIKE', "%$keyword%")
				->orWhere('methode', 'LIKE', "%$keyword%")
				->orWhere('date', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $paiement = paiement::paginate($perPage);
        }

        return view('paiement.index', compact('paiement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('paiement.create');
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
        //dd($request);
        $adherant = $request->input('adherant');
        $date = $request->input('date');
        //$montant = $request->input('montant');
        $methode = $request->input('methode');
        $paiement = $request->input('paiement');
        $p = new paiement();

        $p->adherant = $adherant;
        $p->date = $date;
        $p->methode = $methode;
        $p->paiement = $paiement;

        $p->save();
        $id = $p->id;
        //dd($id);

        $i = 0;
        foreach ($request->input('num_cheque') as $c)
        {
             $i++;
            $cheque = new cheque();
            $cheque->num_cheque = $request->input('num_cheque')[$i];
            $cheque->montant = $request->input('montant')[$i];
            $cheque->banque = $request->input('banque')[$i];
            $cheque->echeance = $request->input('echeance')[$i];
            $cheque->id = $id;
            $cheque->save();
        }

        Session::flash('flash_message', 'paiement added!');

        return redirect('paiement');
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
        $paiement = paiement::findOrFail($id);

        return view('paiement.show', compact('paiement'));
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
        $paiement = paiement::findOrFail($id);

        return view('paiement.edit', compact('paiement'));
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
        
        $paiement = paiement::findOrFail($id);
        $paiement->update($requestData);

        Session::flash('flash_message', 'paiement updated!');

        return redirect('paiement');
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
        paiement::destroy($id);

        Session::flash('flash_message', 'paiement deleted!');

        return redirect('paiement');
    }
}
