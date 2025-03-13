<?php 
    class Month {
        public int $month;
        public int $year;

        public $months =['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];
        public $daysName = ['Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche'];
       
        public function __construct(int $month = null, int $year = null)
        {
            // Si les valeurs ne sont pas fournies, on prend les valeurs par défaut
            if ($month === null) {
                $month = (int) date('n'); // Mois actuel
            }
            if ($year === null) {
                $year = (int) date('Y'); // Année actuelle
            }

            // Vérification des limites
            if ($month < 1 || $month > 12) {
                throw new \Exception('Le mois doit être compris entre 1 et 12.');
            }

            $this->month = $month;
            $this->year = $year;
        }
        public function getStartingDay() : DateTime {
            return new \DateTime("{$this->year}-{$this->month}-1");
            
        }
        //retourne le mois en toutes lettres
        public function toString(): string{
            return $this->months[$this->month-1].' '.$this->year;
        }
        public function getWeeks(): int{
            $start = $this->getStartingDay();
            $end = (clone $start)->modify('+1 month -1day');
       

            $weeks= intval($end->format('W'))-intval($start->format('W')+1);
            if ($weeks<0){
                $weeks=intval($end->format('W'));
           
            }
  
            return $weeks;
            
            
        }

        
    }


?> 