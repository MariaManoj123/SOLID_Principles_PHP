<?php


interface Bird {
    public function fly();
}


class Sparrow implements Bird {
    public function fly() {
        echo "Sparrow is flying...\n";
    }
}


class Ostrich implements Bird {
    public function fly() {
       
    }
}

function makeBirdFly(Bird $bird) {
    $bird->fly();
}

$sparrow = new Sparrow();
makeBirdFly($sparrow); 

$ostrich = new Ostrich();
makeBirdFly($ostrich); 

