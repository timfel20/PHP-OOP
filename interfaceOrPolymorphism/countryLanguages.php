<?php

    include_once 'countries.php';
   class Netherlands implements Countries{
     public function language(){
        echo "In Netherlands we speak Dutch";
        echo "<br>";
     }
   }

   class Spain implements Countries{
    public function language(){
       echo "In Spain we speak Spanish";
       echo "<br>";
    }
  }

  class Uk implements Countries{
    public function language(){
       echo "In the Uk we speak English";
       echo "<br>";
    }
  }

  /* $netherlands = new Netherlands();
  echo $netherlands->language();
  echo "<br>";

  $spain = new Spain();
  echo $spain->language();
  echo "<br>";

  $uk = new Uk();
  echo $uk->language();
  echo "<br>"; */

  $netherlands = new Netherlands();
  $spain = new Spain();
  $uk = new Uk();
  $allCountries = array($netherlands, $spain, $uk);

  foreach ($allCountries as $country) {
    echo $country->language();
  }
?>
