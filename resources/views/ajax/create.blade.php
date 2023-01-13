<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;




Schema::dropIfExists('hero');
Schema::create('hero',function($table)
{
    $tabel = DB::table('coba')->get()->first();
    $metas = $tabel->data;
    $metas = json_decode($metas);
    
    // var_dump($metas);
    foreach($metas[0] as $k => $v)
    {
        $table->string($k);
    }
});

$tabel = DB::table('coba')->get()->first();
$metas = $tabel->data;
$metas = json_decode($metas);

$data = [];
foreach ($metas as $i => $meta) 
{
    foreach($meta as $k => $v)
    {
        $data[$i][$k] = $v;
    }
}

DB::table('hero')->insert($data);

// echo json_encode($data);