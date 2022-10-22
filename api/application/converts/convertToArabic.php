<?php
class ToArabic
{
    public $a;
    protected $result_array = array();


    function __construct($a = "")
    {
        $this->a = $a;
        $this->symb2 = array(
            'I', 'V', 'X', 'L', 'C', 'D', 'M'
        );
        $this->symb = array(
            array('I', 'V', 'X'),
            array('X', 'L', 'C'),
            array('C', 'D', 'M'),
        );
    }


    function convert()
    {
        // define('a', $this->a);
        $result_array = $this->result_array;
        $index = 0;
        $count = 0;
        $local_str = '';
        $result_num = 0;
        $symb2 = $this->symb2;

        while (a[$index] == 'M') {
            $count++;
            $index++;
        };
        $result_num += $count * 1000;

        for ($i = $count; $i < strlen(a); $i++) {
            $local_str = a[$i];
            if (($i + 1) < strlen(a)) {
                $counter = 0;
                while (array_search(a[$i], $symb2) <= array_search(a[$i + 1], $symb2)) {
                    $local_str = $local_str . a[$i + 1];
                    $i++;
                    $counter++;
                    if ($counter >= 3) {
                        return (array("text" => "Всё нормально?!?"));
                    }
                    if ($i + 1 >= strlen(a)){
                        break;
                    }
                }
            };
            $result_array[] = $local_str;
        };
        $index = 0;
        $local_num = 0;
        for ($i = count($result_array) - 1; $i >= 0; $i--) {
            $local_num = $this->detect2($result_array[$i], $index);
            while ($local_num == 0) {
                $index++;
                $local_num = $this->detect2($result_array[$i], $index);
            }
            $result_num += $local_num;
        };
        if ($result_num > 3999) {
            return (array("text" => "Числа не существует! (больше 3999)"));
        } else {
            return (array("dec" => $result_num, "bin" => decbin($result_num), "oct" => decoct($result_num), "hex" => dechex($result_num), "rim" => a, "text" => ""));
        }
    }
    //Обнаружение римских цифр
    function detect2($num, $i)
    {
        $str = '';
        $symb = $this->symb;
        switch ($num) {
            case $symb[$i][0]:
                $str = '1' . str_repeat('0', $i);
                return (int)$str;
            case $symb[$i][0] . $symb[$i][0]:
                $str = '2' . str_repeat('0', $i);
                return (int)$str;
            case $symb[$i][0] . $symb[$i][0] . $symb[$i][0]:
                $str = '3' . str_repeat('0', $i);
                return (int)$str;
            case $symb[$i][0] . $symb[$i][1]:
                $str = '4' . str_repeat('0', $i);
                return (int)$str;
            case $symb[$i][1]:
                $str = '5' . str_repeat('0', $i);
                return (int)$str;
            case $symb[$i][1] . $symb[$i][0]:
                $str = '6' . str_repeat('0', $i);
                return (int)$str;
            case $symb[$i][1] . $symb[$i][0] . $symb[$i][0]:
                $str = '7' . str_repeat('0', $i);
                return (int)$str;
            case $symb[$i][1] . $symb[$i][0] . $symb[$i][0] . $symb[$i][0]:
                $str = '8' . str_repeat('0', $i);
                return (int)$str;
            case $symb[$i][0] . $symb[$i][2]:
                $str = '9' . str_repeat('0', $i);
                return (int)$str;
            case $symb[$i][2]:
                $str = '10' . str_repeat('0', $i);
                return (int)$str;
            default:
                return 0;
        };
    }
}
