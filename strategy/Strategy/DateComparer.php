<?php

class DateComparer implements ComparerInterface {
    public function compare($a, $b) {
        $aDate = $a['pub-date'];
        $bDate = $b['pub-date'];

        if($aDate == $bDate) {
            return 0;
        }
        else {
            return $aDate < $bDate ? -1 : 1;
        }
    }
}