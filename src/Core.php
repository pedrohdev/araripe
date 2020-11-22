<?php

namespace Araripe;

class Core {
    private function babel($valueInput){

        $string = strval($valueInput);

        $string = strtr(utf8_decode($valueInput),utf8_decode('ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ?¡¿'),'SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy?!?');
        
        return $string;

    }

    static function input($question){

        $fh = fopen('php://stdin', 'r');
        echo self::babel($question, 'string');
        $userInput = trim(fgets($fh));
        fclose($fh);

        return self::babel($userInput);
    }
}

