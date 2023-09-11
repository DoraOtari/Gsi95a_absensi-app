<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

class NikOtomatis extends Component
{
    public $emails, $nik, $user_id, $tgl_lahir;

    public function buatNik()
    {
        $tgl_lahir = Str::remove('-', $this->tgl_lahir);
        $this->nik = $this->user_id.$tgl_lahir;
        return $this->nik;
        // dd($this->nik);
    }
    public function render()
    {
        return view('livewire.nik-otomatis', [
            'emails' => $this->emails,
            'nik'    => $this->buatNik(),
        ]);
    }
}
