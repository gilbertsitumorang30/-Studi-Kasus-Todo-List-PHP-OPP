<?php

namespace Helper{
    
    class Input
    {
        static function input(string $keterangan){

            echo "$keterangan : ";
            $input = fgets(STDIN);
            return trim($input);
        }
    }
}