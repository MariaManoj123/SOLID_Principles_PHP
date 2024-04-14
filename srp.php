<?php
class Adder{
    public function add($a,$b){
        return $a + $b;
    }

}
class ResultPrinter{
    public function PrintResult($result){
        echo  "Result:$result\n";
    }
}
$adder=new Adder();
$result=$adder->add(5,3);
$printer=new ResultPrinter();
$printer->PrintResult($result);
?>
