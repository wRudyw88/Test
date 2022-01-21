<?php


class Berlin_clock
{



    public function simplesMinutes($minutes){
        $minutesTemp = $minutes % 5;

        switch($minutesTemp) {
            case 0:
                return "nnnn";
            case 1:
                return "jnnn";
            case 2:
                return "jjnn";
            case 3:
                return "jjjn";
            case 4:
                return "jjjj";
        }

        return ;

    }

    public function blocs5Minutes($minutes){
        $minutesTmp = $minutes/5;
        $aRetourner = "";

        for($i = 1; $i<=11; $i++){
            if($i <= $minutesTmp){
                if($i%3 == 0)
                    $aRetourner .= "r";
                else
                    $aRetourner .= "j";
            }else{
                $aRetourner .= "n";
            }
        }

        return $aRetourner;

    }

    public function simplesHeures($heures){
        $heuresTemp = $heures% 5;

        switch($heuresTemp) {
            case 0:
                return "nnnn";
            case 1:
                return "rnnn";
            case 2:
                return "rrnn";
            case 3:
                return "rrrn";
            case 4:
                return "rrrr";
        }

        return ;

    }

    public function blocs5Heures($heures){
        $heuresTmp = $heures/5;
        $aRetourner = "";

        for($i = 1; $i<=4; $i++){
            if($i <= $heuresTmp){
                $aRetourner .= "r";
            }else{
                $aRetourner .= "n";
            }
        }

        return $aRetourner;
    }


    public function simpleSecondes($secondes){
        if($secondes % 2 === 0 )
            return "r";

        return "n";
    }

    public function horlogeEntiere($heures,$minutes,$secondes): string{
        $aRenvoyer = "";
        $aRenvoyer .= $this->simpleSecondes($secondes) . "\n";
        $aRenvoyer .=  $this->blocs5Heures($heures) . "\n";
        $aRenvoyer .=   $this->simplesHeures($heures) ."\n";
        $aRenvoyer .=   $this->blocs5Minutes($minutes) ."\n";
        $aRenvoyer .=  $this->simplesMinutes($minutes);
        return $aRenvoyer;
    }


}

?>