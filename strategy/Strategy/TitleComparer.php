<?php

class TitleComparer implements ComparerInterface {
    public function compare($a, $b) {
        $aTitle = $a['title'];
        $bTitle = $b['title'];

        if($aTitle == $bTitle) {
            return 0;
        }
        else {
            return $aTitle < $bTitle ? -1 : 1;
        }
    }
}