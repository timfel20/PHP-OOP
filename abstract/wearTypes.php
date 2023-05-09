<?php 
require_once 'wears.php';
 class OldMoney extends Wears{

     public function myStyle():string {
        return "I love wearing anything {$this->name}, it's my style, my personality and my lifestyle.";
     }
   }

   class softGirl extends Wears{

    public function myStyle():string {
       return "I love wearing anything {$this->name}, it's my style, my personality and my lifestyle.";
    }
  }

  class streetWear extends Wears{

    public function myStyle():string {
       return "I love wearing anything {$this->name}, it's my style, my personality and my lifestyle.";
    }
  }


  $oldmoney = new OldMoney("oldmoney");
  echo $oldmoney->myStyle();
  echo "<br>";

  $softGirl = new SoftGirl("softgirl");
  echo $softGirl->myStyle();
  echo "<br>";

  $streetwear = new StreetWear("streetwear");
  echo $streetwear->myStyle();
  echo "<br>" 
?>