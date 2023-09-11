<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NikOtomatis extends Component
{
    public $emails, $nik, $user_id, $tgl_lahir;

    public function buatNik()
    {
        $this->nik = $this->tgl_lahir;
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
