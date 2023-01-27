<?php
require "convertToArabic.php";
require "convertToRoman.php";
require "convertSysToDec.php";

class Convert
{
    function __construct($number='', $sys = '')
    {
        $this->number = $number;
        $this->sys = $sys;
    }

    function converted($number='', $sys = '')
    {
        $this->number = $number;
        $this->sys = $sys;
        define('b', $this->number);
        $res = null;
        //Только для сторонних систем счислений
        if ($sys === "2" || $sys === "8" || $sys === "16") {
            $converFromSys = $this->checkForSys($sys);
            define('a', $converFromSys);
            $res = $this->_forArabic();
        } 
        else {
            //Проверка на ввод только цифр
            define('a', $this->number);
            if (ctype_digit(a)) {
                $res = $this->_forArabic(a);
            } 
            else {
                $res = $this->_forRoman();
            }
        }
        return $res;
    }
    //Выполнение функции конвертации римских в арабские
    function _forRoman()
    {
        // define('a', $a);
        $toArabic = new ToArabic();
        return $toArabic->convert();
    }

    //Выполнение функции конвертации арабских в римские
    function _forArabic()
    {
        // define('d', $a);
        $toRoman = new toRoman();
        return $toRoman->convert();
    }

    //Проверка числа на 2, 8, 16 систему счисления
    function checkForSys($sys)
    {
        $toDec = new ToDec($sys);
        return $toDec->convert();
    }
};