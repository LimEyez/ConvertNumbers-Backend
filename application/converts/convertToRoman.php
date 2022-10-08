<?php
// require 'convertToArabic.php';
class toRoman extends ToArabic
{
    function __construct($a = "")
    {
        parent::__construct($a);
        $this->symb = array(
            array('I', 'V', 'X'),
            array('X', 'L', 'C'),
            array('C', 'D', 'M'),
        );
    }

    function convert()
    {
        if (a > 3999) {
            return (array("text" => "Числа не существует! (больше 3999)"));
        } else {
            $result_array = $this->result_array;
            $result_string = '';
            $index = 0;
            for ($i = strlen(a) - 1; $i >= 0; $i--) {
                if ($index != 3) {
                    $result_array[] = $this->detect(a[$i], $index);
                    $index++;
                } else {
                    $f = 1;
                    while ($f <= a[$i]) {
                        $result_array[] = $this->symb[2][2];
                        $f++;
                    };
                }
            };

            for ($i = count($result_array) - 1; $i >= 0; $i--) {
                $result_string = $result_string . $result_array[$i];
            };
            return (array("dec" => a, "bin" => decbin(a), "oct" => decoct(a), "hex" => dechex(a), "rim" => $result_string, "text" => ""));
        }
    }

    //Обнаружение арабских цифр
    function detect($num,  $i)
    {
        $symb = $this->symb;
        switch ($num) {
            case '1':
                return $symb[$i][0];
            case '2':
                return $symb[$i][0] . $symb[$i][0];
            case '3':
                return $symb[$i][0] . $symb[$i][0] . $symb[$i][0];
            case '4':
                return $symb[$i][0] . $symb[$i][1];
            case '5':
                return $symb[$i][1];
            case '6':
                return $symb[$i][1] . $symb[$i][0];
            case '7':
                return $symb[$i][1] . $symb[$i][0] . $symb[$i][0];
            case '8':
                return $symb[$i][1] . $symb[$i][0] . $symb[$i][0] . $symb[$i][0];
            case '9':
                return $symb[$i][0] . $symb[$i][2];
            default:
                return '';
        };
    }
}
