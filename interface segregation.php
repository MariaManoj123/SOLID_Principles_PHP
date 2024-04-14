<?php
interface Printer {
    public function print();
}

interface Scanner {
    public function scan();
}

interface Fax {
    public function fax();
}
class MultifunctionalPrinter implements Printer, Scanner, Fax {
    public function print() {
        echo "Printing...\n";
    }

    public function scan() {
        echo "Scanning...\n";
    }

    public function fax() {
        echo "Faxing...\n";
    }
}

$printer = new MultifunctionalPrinter();
$printer->print(); 
$printer->scan();  
$printer->fax(); 
?>