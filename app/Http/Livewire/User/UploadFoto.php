<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UploadFoto extends Component
{
    public $foto;
    
    public function render()
    {
        return view('livewire.user.upload-foto');
    }

    public function storageFoto()
    {
        dd('aqui');
    }
}
