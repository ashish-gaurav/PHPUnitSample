<?php
class URL {
    
    public function sluggify($string, $seperator = '-', $maxLength = 96) {
        $title = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        $title = preg_replace("%[^-/+|\w ]%", '', $title);
        $title = strtolower(trim(substr($title, 0, $maxLength), '-'));
        $title = preg_replace("/[\/_|+ -]+/", $seperator, $title);
        
        $umlauts = array("/Ae/", "/Ue/", "/Oe/", "/ae/", "/ue/", "/oe/", "/ß/");
        $replacement = array("A", "U", "O", "a", "u", "o", "ss");
        
        $title = preg_replace($umlauts, $replacement, $title);
        
        return $title;
    }
}
