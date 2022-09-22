<?php

// class manusia{
//     function nama($nama)
//     {
//         return "nama saya $nama";
//     }
// }



// class manusia{
//     function __construct(){
//         echo "Biodata <br>";
//     }
//     {function nama($nama) 
//         return "nama saya $nama <br>";
//     }
//     function __destruct(){ //destruk ditampilkan paling akhir walaupun diatas
//         echo "terimakasih <br>";
//     }
// }

// $man = new manusia();

// echo $man -> nama('arrtt');
// echo $man -> nama('bfujr');

class teman extends manusia{
    function nama_teman($nt)
    {
        return "nama temen saya $nt";
    }
}

// $tmn = new temen();
// echo $tmn->nama("aabb");

$man = new menusia();

echo $man->nama_teman();


?>