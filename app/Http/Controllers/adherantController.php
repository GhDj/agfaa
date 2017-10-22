<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\adherant;
use Illuminate\Http\Request;
use Session;

class adherantController extends Controller
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
            $adherant = adherant::where('nom', 'LIKE', "%$keyword%")
				->orWhere('prenom', 'LIKE', "%$keyword%")
				->orWhere('lieu', 'LIKE', "%$keyword%")
				->orWhere('dte', 'LIKE', "%$keyword%")
				->orWhere('adr', 'LIKE', "%$keyword%")
				->orWhere('img', 'LIKE', "%$keyword%")
				->orWhere('m_nom', 'LIKE', "%$keyword%")
				->orWhere('m_prenom', 'LIKE', "%$keyword%")
				->orWhere('m_profession', 'LIKE', "%$keyword%")
				->orWhere('m_adr', 'LIKE', "%$keyword%")
				->orWhere('m_tel_g', 'LIKE', "%$keyword%")
				->orWhere('m_tel_d', 'LIKE', "%$keyword%")
				->orWhere('m_tel_t', 'LIKE', "%$keyword%")
				->orWhere('m_email', 'LIKE', "%$keyword%")
				->orWhere('p_nom', 'LIKE', "%$keyword%")
				->orWhere('p_prenom', 'LIKE', "%$keyword%")
				->orWhere('p_profession', 'LIKE', "%$keyword%")
				->orWhere('p_adr', 'LIKE', "%$keyword%")
				->orWhere('p_tel_g', 'LIKE', "%$keyword%")
				->orWhere('p_tel_d', 'LIKE', "%$keyword%")
				->orWhere('p_tel_t', 'LIKE', "%$keyword%")
				->orWhere('p_email', 'LIKE', "%$keyword%")
				->orWhere('a_nom', 'LIKE', "%$keyword%")
				->orWhere('a_prenom', 'LIKE', "%$keyword%")
				->orWhere('a_profession', 'LIKE', "%$keyword%")
				->orWhere('a_adr', 'LIKE', "%$keyword%")
				->orWhere('a_tel_g', 'LIKE', "%$keyword%")
				->orWhere('a_tel_d', 'LIKE', "%$keyword%")
				->orWhere('a_tel_t', 'LIKE', "%$keyword%")
				->orWhere('a_email', 'LIKE', "%$keyword%")
				->orWhere('u_nom', 'LIKE', "%$keyword%")
				->orWhere('u_prenom', 'LIKE', "%$keyword%")
				->orWhere('u_lae', 'LIKE', "%$keyword%")
				->orWhere('u_adr', 'LIKE', "%$keyword%")
				->orWhere('u_tel_g', 'LIKE', "%$keyword%")
				->orWhere('u_tel_d', 'LIKE', "%$keyword%")
				->orWhere('u_tel_t', 'LIKE', "%$keyword%")
				->orWhere('u_email', 'LIKE', "%$keyword%")
				->orWhere('asthme', 'LIKE', "%$keyword%")
				->orWhere('medicamenteuses', 'LIKE', "%$keyword%")
				->orWhere('alimentaire', 'LIKE', "%$keyword%")
				->orWhere('autre', 'LIKE', "%$keyword%")
				->orWhere('ob_med', 'LIKE', "%$keyword%")
				->orWhere('cert_med', 'LIKE', "%$keyword%")
				->orWhere('ac_fr_an', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $adherant = adherant::paginate($perPage);
        }

        return view('adherant.index', compact('adherant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('adherant.create');
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
        

        if ($request->hasFile('img')) {

                $uploadPath = public_path('/uploads/img');

                $extension = $request['img']->getClientOriginalExtension();
                $fileName = rand(11111, 99999) . '.' . $extension;

                $request['img']->move($uploadPath, $fileName);
                $requestData['img'] = $fileName;

        }


        if ($request->hasFile('cert_med')) {

                $uploadPath = public_path('/uploads/cert_med');

                $extension = $request['cert_med']->getClientOriginalExtension();
                $fileName = rand(11111, 99999) . '.' . $extension;

                $request['cert_med']->move($uploadPath, $fileName);
                $requestData['cert_med'] = $fileName;

        }

        adherant::create($requestData);

        Session::flash('flash_message', 'adherant added!');

        return redirect('adherant');
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
        $adherant = adherant::findOrFail($id);

        return view('adherant.show', compact('adherant'));
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
        $adherant = adherant::findOrFail($id);

        return view('adherant.edit', compact('adherant'));
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
        

        if ($request->hasFile('img')) {
            foreach($request['img'] as $file){
                $uploadPath = public_path('/uploads/img');

                $extension = $file->getClientOriginalExtension();
                $fileName = rand(11111, 99999) . '.' . $extension;

                $file->move($uploadPath, $fileName);
                $requestData['img'] = $fileName;
            }
        }


        if ($request->hasFile('cert_med')) {
            foreach($request['cert_med'] as $file){
                $uploadPath = public_path('/uploads/cert_med');

                $extension = $file->getClientOriginalExtension();
                $fileName = rand(11111, 99999) . '.' . $extension;

                $file->move($uploadPath, $fileName);
                $requestData['cert_med'] = $fileName;
            }
        }

        $adherant = adherant::findOrFail($id);
        $adherant->update($requestData);

        Session::flash('flash_message', 'adherant updated!');

        return redirect('adherant');
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
        adherant::destroy($id);

        Session::flash('flash_message', 'adherant deleted!');

        return redirect('adherant');
    }
}
