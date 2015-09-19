<?php

class AuthorComparer implements ComparerInterface {
    public function compare($a, $b) {
        $aAuthor = $a['author'];
        $bAuthor = $b['author'];

        if($aAuthor == $bAuthor) {
            return 0;
        }
        else {
            return $aAuthor < $bAuthor ? -1 : 1;
        }
    }
}