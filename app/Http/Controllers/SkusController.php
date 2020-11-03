<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;
use Redirect;
use Session;
use PDF;

use \App\Logs;
use \App\Permissions;
use \App\Skus;

class SkusController extends Controller
{
    public function index(Request $request)
    {   
        $logged = Auth::user();

        if (Permissions::permissaoModerador($logged)) {
            $skus = Skus::all();
        } else {
            $skus = Skus::where('r_auth', $logged->id)->get();
        }

        Logs::cadastrar(Auth::user()->id, (Auth::user()->name . ' vizualizou a lista de relatórios'));

        return view('skus.index', ['skus' => $skus]);
    }

    public function create()
    {
        return view('skus.add');
    }

    public function store(Request $request)
    {  
        try {

            $data = $request->all();

            $skus = new Skus();
            
            $skus->id_code = $data['id_code'];
            $skus->description = $data['description'];
            $skus->family = $data['family'];
            $skus->peso = $data['peso'];
            $skus->alt = $data['alt'];
            $skus->lgr = $data['lgr'];
            $skus->cpm = $data['cpm'];
            $skus->cbg = $data['cbg'];
            $skus->paletization = $data['paletization'];
            $skus->qtdepallet = $data['qtdepallet'];
            

            $skus->r_auth = Auth::user()->id;

            if ($request->image) {
            
                $img = time().'.'.$request->image->getClientOriginalExtension();

                $request->image->move(public_path('images'), $img);

                $skus->image = $img;

            }

            $skus->save();

            Session::flash('flash_success', "Sku cadastrado com sucesso!");

            Logs::cadastrar(Auth::user()->id, (Auth::user()->name . ' cadastrou um sku: ' . $skus->name));

        } catch (Exception $e) {
            Session::flash('flash_error', "Erro ao cadastrar sku!");
        }

        return Redirect::to('/skus');
    }

    public function show($id_code)
    {
        $skus = Skus::find($id_code);

        return view('skus.show', [
            'skus' => $skus, 
        ]);
    }
    
    public function edit($id_code)
    {
        $skus = Skus::find($id_code);

        return view('skus.edit', [
            'skus' => $skus, 
        ]);
    }

    public function generate($id_code)
    {
        $skus = Skus::find($id_code);

        $query = DB::select($skus->query);

        $data = [
            'skus' => $skus,
            'query' => $query,
            'columns' => array_keys((array)$query[0]),
        ];

        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);

        $pdf = PDF::loadView('pdf', $data)->setPaper('a4', 'landscape');

        return $pdf->download( $skus->id_code . '.pdf' );
    }

    public function update(Request $request)
    {   
        try {

            $data = $request->all();

            $skus = Skus::find($request->get('id_code'));
            
            $skus->id_code = $data['id_code'];
            $skus->description = $data['description'];
            $skus->family = $data['family'];
            $skus->peso = $data['peso'];
            $skus->alt = $data['alt'];
            $skus->lgr = $data['lgr'];
            $skus->cpm = $data['cpm'];
            $skus->cbg = $data['cbg'];
            $skus->paletization = $data['paletization'];
            $skus->qtdepallet = $data['qtdepallet'];

            if ($skus->image) {
            
                $img = time().'.'.$skus->image->getClientOriginalExtension();

                $skus->image->move(public_path('images'), $img);

                $skus->image = $img;

            }

            $skus->save();

            Session::flash('flash_success', "Sku atualizado com sucesso!");

            Logs::cadastrar(Auth::user()->id, (Auth::user()->name . ' atualizou um sku: ' . $skus->id_code));

        } catch (Exception $e) {
            Session::flash('flash_error', "Erro ao atualizar sku!");
        }

        return Redirect::to('/skus');
    }

    public function destroy($id_code)
    {   
        try {

            $reports = Skus::find($id_code)->delete();

            Session::flash('flash_success', "Sku excluído com sucesso!");

            Logs::cadastrar(Auth::user()->id, (Auth::user()->name . ' excluiu o sku ID: ' . $id_code));

        } catch (\Illuminate\Database\QueryException $e) {

            Session::flash('flash_error', 'Não é possível excluir este sku!');

        } catch (Exception $e) {

            Session::flash('flash_error', "Erro ao excluir sku!");
        }

        return Redirect::to('/skus');
    }
}
