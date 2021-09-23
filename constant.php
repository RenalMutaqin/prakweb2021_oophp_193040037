<?php

// define('NAMA', 'RENAL MUTAQIN');

// echo NAMA;

// const UMUR = 20;
// echo "<br>";
// echo UMUR;

// class Coba {
//     const NAMA = 'RENAL MUATQIN';
// }

// echo Coba::NAMA;

// echo __LINE__;


// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class coba {
    public $kelas = __CLASS__;
}

$obj = new coba;
echo $obj->kelas;


?>