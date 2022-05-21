<?php
namespace App\Date;
class Month{
    public $days =['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'dimenche'];
    public $months = ['Janvier', 'Février','Mars',' Avril',' Mai ','Juin', 'Juillet', 'Aout','Septembre','October',' Novembre', 'Décembre'];

    public $month;
    public $year;
    /**
     * @param int $month
     * @param int $year
     * @return void
     */

    public function __construct (?int $month = null ,?int $year = null)
    {

      if ($month === null || $month < 1 || $month > 12) {
        $month = intval(date('m'));
      }

      if ($year === null) {
        $year = intval(date('Y'));
      }


      $this->month = $month;
      $this->year = $year;
    }

      /**
       * Renvoi le premier jour du mois
       * @return \DateTime
       */


    public function getStartingDay(): \DateTime{
       return  new \DateTime ("{$this->year}-{$this->month} -01");
    }

    /**
     * @return string
     */
        public function toString():string
         {
           return $this-> months[$this-> month - 1]. ' ' . $this->year;
         }

    /**
     * @return int
     */
     public function getWeeks():int
     {
       $start = new \DateTime("{$this->year}-{$this->month}-01");
       $end = (clone $start) -> modify('+1 month -1 day');

       $weeks = intval($end->format('W')) - intval($start -> format('W')) + 1;
       if ($weeks < 0) {
         $weeks = intval($end->format('W'));
       }

       return $weeks;

     }

    public function withinMonth(\DateTime $date): bool{
            return $this->getStartingDay()->format('Y-m') === $date->format('Y-m');
    }

    /**
     * @return Month
     */

    public function nextMonth(): Month
    {
            $month =$this->month + 1;
            $year =$this->year;
            if ($month > 12){
                $month = 1;
                $year +=1;
            }
            return new Month($month,$year);
    }

    /**
     * @return Month
     */
    public function previousMonth(): Month
    {
        $month =$this->month - 1;
        $year =$this->year;
        if ($month < 1){
            $month = 12;
            $year -=1;
        }
        return new Month($month,$year);

}}
