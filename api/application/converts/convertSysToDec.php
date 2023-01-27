<?php
class ToDec
{
    public $sys;

    function __construct($sys = "")
    {
        $this->sys = $sys;
    }

    function convert()
    {
        $sys = $this->sys;
        $arr_of_nums = array("0", "1");
        if ($sys == "8") {
            array_push($arr_of_nums, '2', '3', '4', '5', '6', '7');
        } else if ($sys == "16") {
            array_push($arr_of_nums, '2', '3', '4', '5', '6', '7', '8', "9", "A", "B", "C", "D", "E", "F");
        }
        $check = $this->checkForSys_toarr($arr_of_nums);
        // echo (json_encode($arr_of_nums));
        if ($check == true) {
            if ($sys == "2") {
                return bindec(b) . '';
            } else if ($sys == "8") {
                return octdec(b) . '';
            } else if ($sys == "16") {
                return hexdec(b) . '';
            }
        } else {
            return false;
        }
    }

    //Проверка допустимых символов по массиву
    function checkForSys_toarr($arr)
    {
        $check = true;
        for ($i = 0; $i < strlen(b); $i++) {
            if ($check == 0) {
                break;
            } else {
                $check = in_array(b[$i], $arr);
            }
        }
        return $check;
    }
}
