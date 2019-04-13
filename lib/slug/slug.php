<?php

    function slug($text){
        return str_replace(['/',' ', '.','"',"'",'|','{','}', '[',']'], '-', $text);
    }
