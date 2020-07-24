<?php
namespace Project\Controllers;
use Core\Controller;

class NumController extends Controller
{
    function sum($nums) {
        $sum = 0;
        foreach($nums as $num) {
            $sum += $num;
        }
        echo $sum;
    }
}


?>