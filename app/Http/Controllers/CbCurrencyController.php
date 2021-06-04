<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\Models\CbCurrency;

class CbCurrencyController extends Controller
{
  /**
  * Muestra una lista de las monedas.
  *
  * @return Response
  */
  public function index()
  {
    // Devolverá todas las monedas
    $monedas = CbCurrency::get();
    return view('monedas.index')->with('monedas', $monedas);
  }
  public function show($IdCurrency)
{
  // Devuelve la moneda seleccionada por id.
  $moneda = CbCurrency::find($IdCurrency);
  return view('monedas.show')->with('moneda', $moneda);
}
}
