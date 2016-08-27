<?php
    function fibonacciRecursive($i)
    {
        if($i == 0)
            return 0;
        if($i== 1) return 1;
        return fibonacciRecursive($i-1) + fibonacciRecursive($i-2);
    }


    function printFib($i)
    {
        if($i>1) {
            echo printFib($i - 1);
            echo printFib($i - 2);
        }
        else return 1;
    }
    printFib(5);
    //echo fibonacciRecursive(3);
?>