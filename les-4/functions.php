<?php
/**
 * Date en time in een variabele zetten
 * Geen parameters
 * Date string return
 */
function currentDateTime(){
    echo date('d-m-Y H:i:s');
    echo "<br>";
}

/**
 * 2 getallen bij elkaar optellen
 * getal1 en getal2 als parameters
 * Som int return
 */
function add($getal1, $getal2){
    $som = $getal1 + $getal2;
    return $som;
}

/**
 * 2 getallen van elkaar aftrekken
 * getal1 en getal2 als parameters
 * Som int return
 */
function subtract($getal1, $getal2){
    $som = $getal1 - $getal2;
    return $som;
}

/**
 * 2 getallen door elkaar delen
 * getal1 en getal2 als parameters
 * Som int return
 */
function divide($getal1, $getal2){
    $som = $getal1 / $getal2;
    return $som;
}

/**
 * 2 getallen keer elkaar
 * getal1 en getal2 als parameters
 * Som int return
 */
function multiply($getal1, $getal2){
    $som = $getal1 * $getal2;
    return $som;
}

/**
 * Rit kosten berekenen van een auto door middel van input dingen
 * Afstand, kmperliter en literprijs als parameters
 * Kosten euros int return
 */
function berekenRitKosten($afstand_km, $km_per_liter, $liter_prijs){

    $aantal_liters = $afstand_km / $km_per_liter;
  
    $kosten_euro = $aantal_liters * $liter_prijs;  
  
    return $kosten_euro;
  
  }

/**
 * Vlieg kosten berekenen
 * Afstandkm, prijsperliter, kilobagage en classe als parameters
 * De kosten per class als return als int en dan * 2 omdat het heen er terugrreis is
*/
  function berekenVliegKosten($afstand_km, $prijs_per_liter, $kilo_bagage, $class){


    $kosten_rijs = $prijs_per_liter * $afstand_km / 30;

    $bagage_kosten = $kilo_bagage * 5;

    $eco_kosten = $kosten_rijs + $bagage_kosten;

    if ($class == "business" || $class == "Business") {
        $business_kosten = $eco_kosten * 1.5;
        return $business_kosten * 2;
      } else {
          return $eco_kosten * 2;
      }
  
  
  }
