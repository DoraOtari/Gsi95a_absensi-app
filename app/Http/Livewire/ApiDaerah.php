<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ApiDaerah extends Component
{
    public $provinsiId;

    public function provinsi()
    {
        $respon = HTTP::get("https://dev.farizdotid.com/api/daerahindonesia/provinsi")['provinsi'];
        // dd($respon);
        return $respon;
    }

    public function kota()
    {
        $id = explode('/', $this->provinsiId);
        return HTTP::get("https://dev.farizdotid.com/api/daerahindonesia/kota", ['id_provinsi' => $id[0]])['kota_kabupaten'];
    }

    public function render()
    {
        return view('livewire.api-daerah', [
            'provinsi' => $this->provinsi(),
            'kota' => $this->kota(),
        ]);
    }
}
