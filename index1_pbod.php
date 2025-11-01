<?php

require_once('./LuasLingkaran.php');//panggil file Luas Lingkaran

use App\Math\LuasLingkaran; //panggil name space

$lingkaran = new LuasLingkaran(7);
$lingkaran->tampil('roda');
LuasLingkaran::testing();

