<?php 

include "Animal.php";

Class kucing{var $Lili;
function Tidak_bisa_terbang (){//$Lili->Tidak_bisa_terbang;
}
function bersuara (){//$Lili->meong meong;
}
} 

$Lili=new kucing;
$Lili->jumlah_kaki=4;
echo "Lili adalah kucing <br>";
echo"punya kaki sebanyak:".$Lili-> jumlah_kaki."<br>";
echo "Tidak bisa terbang". "<br>";
echo"Suaranya: meong meong". $Lili-> bersuara ()."<br>";
echo "<hr>";

Class harimau{var $Tiger;
function Tidak_bisa_terbang (){//$Tiger->Tidak_bisa_terbang;
}
function bersuara (){//$Tiger->hauwwr hauwwr;
}
} 
$Tiger=new harimau;
$Tiger->jumlah_kaki=4;
echo "Tiger adalah harimau <br>";
echo"punya kaki sebanyak:".$Tiger-> jumlah_kaki."<br>";
echo "Tidak bisa terbang"."<br>";
echo"Suaranya: hauwwr hauwwr". $Tiger-> bersuara ()."<br>";
echo "<hr>";

Class Tikus{var $Mouse;
function Tidak_bisa_terbang (){//$Mouse->Tidak_bisa_terbang;
}
function bersuara (){//$Mouse->cit cit;
}
} 
$Mouse=new Tikus;
$Mouse->jumlah_kaki=4;
echo "Mouse adalah Tikus <br>";
echo"punya kaki sebanyak:".$Mouse-> jumlah_kaki."<br>";
echo "Tidak bisa terbang"."<br>";
echo"Suaranya: cit cit". $Mouse-> bersuara ()."<br>";
echo "<hr>";

Class gagak{var $Black;
function bisa_terbang(){//$Black->bisa_terbang;
}
function bersuara (){//$Black->ggak ggak;
}
} 

$Black=new gagak;
$Black->jumlah_kaki=2;
echo "Black adalah gagak <br>";
echo"punya kaki sebanyak:".$Black-> jumlah_kaki."<br>";
echo "Tidak bisa terbang"."<br>";
echo"Suaranya: ggak ggak". $Black-> bersuara ()."<br>";
echo "<hr>";
 ?>