<?php


namespace App\Date;

  class Mounth {

    private $mounths = ['janvier','février','mars','avril','mai','juin','juillet','août','septembre','octobre','novembre','décembre'];

    private $mounth;
    private $year;

    public function __construct(int $mounth, int $year)
    {
      if ($mounth < 1 || $mounth > 12) {
        throw new \Exception("Le moin". $mounth ." nest pas valide");
      }

      if ($year < 1970) {
        throw new \Exception("L'annnie est un inférieur de 1970");
      }
    }

    public function toString):string
    {
      // code...
    }

  }

 ?>
