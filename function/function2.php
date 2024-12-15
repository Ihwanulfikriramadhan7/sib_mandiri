<?php
// fungsi define by user => void(tidak mengambilkan nilai)
// tampa parameter/arugment
function salam(){
    echo "Assalamualaikum <br/>";
}

// dengan parameter/arugment
function sapa ($kawan){
    echo "Assalamualaikum $kawan <br/>";
}

// dengan nilai default 
function kabar ($kawan = "FITRI"){
    echo "Hai apa kabar $kawan ";
}

salam();
sapa("FITRI");
kabar($kawan = "FITRI");
?>