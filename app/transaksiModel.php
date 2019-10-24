<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class transaksiModel extends Model
{
    public $data  = [
        "0" => [
            "id"            => "TRX001",
            "namaPelanggan" => "Sutedja",
            "qty"           => 4,
            "total"         => 50000
        ],
        "1" => [
            "id"            => "TRX002",
            "namaPelanggan" => "Bambanx",
            "qty"           => 2,
            "total"         => 25000
        ],
        "2" => [
            "id"            => "TRX003",
            "namaPelanggan" => "Narno",
            "qty"           => 1,
            "total"         => 15000
        ],
    ];

    public function getData(){
        return $this->data;
    }
}
