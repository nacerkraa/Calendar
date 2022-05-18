<?php


namespace App\Date;

  class Mounth {

    private $mounths = ['janvier','février','mars','avril','mai','juin','juillet','août','septembre','octobre','novembre','décembre'];

    private $mounth;
    private $year;

    public function __construct(?int $mounth=null,?int $year=null)
    {
      if ($mounth === null) {
        $mounth = intval(date('m'));
      }

      if ($year === null) {
        $year = intval(date('Y'));
      }



      if ($mounth > 12) {
          $mounth = $mounth % 12;
      }

      if ($mounth < 1) {
        throw new \Exception("Le moin". $mounth ." nest pas valide");
      }

      if ($year < 1970) {
        throw new \Exception("L'annnie est un inférieur de 1970");
      }

      $this->mounth = $mounth;
      $this->year = $year;
    }

    public function toString():string
    {
      return $this-> mounths[$this->mounth -1 ]. ' ' . $this->year;
    }

    public function getWeeks():int
    {
      $start = new \DateTime("{$this->year}-{$this->mounth}-01");
      $end = (clone $start) -> modify('+1 month -1 day');

      $weeks = intval($end->format('W')) - intval($start -> format('W')) + 1;
      if ($weeks < 0) {
        $weeks = intval($end->format('W'));
      }

      return $weeks;

    }

  }

 ?>
