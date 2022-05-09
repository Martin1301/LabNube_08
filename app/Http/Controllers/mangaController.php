<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\manga;
class mangaController extends Controller
{

    public function index()
    {
      // Devolverá todos los mangas
      $mangas = manga::get();
      return view('mangas.index')->with('mangas', $mangas);
    }
    /**
   * Muestra el manga seleccionada por id.
   * @param $idmanga
   * @return Response
   */

  public function edit($idmanga)
  {
    $manga = manga::findOrFail($idmanga);
    return view('mangas.edit',compact('manga'));
  }

  public function update(Request $request,$idmanga)
  {
    $manga=manga::findOrFail($idmanga);
    $manga->nombre=$request->input('nombre');
    $manga->editorial=$request->input('editorial');
    $manga->cantidad=$request->input('cantidad');
    $manga->genero=$request->input('genero');

    $manga->save();
    return redirect()->route('mangas.index');
   }

   public function destroy($idmanga)
  {
    manga::destroy($idmanga);
    return redirect()->route('mangas.index');

  }

  public function create()
  {
    return view('mangas.create');
  }

  public function store(Request $request)
  {
    $manga = new manga;
    $manga->nombre=$request->input('nombre');
    $manga->editorial=$request->input('editorial');
    $manga->cantidad=$request->input('cantidad');
    $manga->genero=$request->input('genero');
    $manga->save();
    return redirect()->route('mangas.index');
  }

}
