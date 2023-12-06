<?php
    //  membuat multidimensi array
    $kendaraan = [
        "transportasi" => ["mobil","sepeda","truk","motor","bus"],
        "mobil" => ["merek" => "toyota", "type" => "vios", "year" => 2016],
        "motor" => ["honda","yamaha","suzuki"]
    ];

    // menampilkan outpus
    echo "ini array kendaraan <br>";
    echo "<br>",$kendaraan["transportasi"][0]. ", ";
    echo $kendaraan["transportasi"][1]. ", ";
    echo $kendaraan["transportasi"][2]. ", ";
    echo $kendaraan["transportasi"][3]. ", ";
    echo $kendaraan["transportasi"][4]. "<br>";
    echo "=========================="."<br>";
    echo "ini array mobil <br>";
    echo "<br>",$kendaraan["mobil"]["merek"]. ", ";
    echo $kendaraan["mobil"]["type"]. ", ";
    echo $kendaraan["mobil"]["year"]. "<br>";
    echo "=========================="."<br>";
    echo "ini array motor <br>";
    echo "<br>",$kendaraan["motor"][0]. ", ";
    echo $kendaraan["motor"][1]. ", ";
    echo $kendaraan["motor"][2];

    // $ar_jus = [
    //     ["buah"=>"magga","harga"=>8000],
    //     ["buah"=>"alpukat","harga"=>10000],
    //     ["buah"=>"jeruk","harga"=>15000],
    // ];

    // foreach($ar_jus as $jus) {
    //     echo "jus ".$jus["buah"]." harganya : ".$jus["harga"]."<br>";
    // }
?>