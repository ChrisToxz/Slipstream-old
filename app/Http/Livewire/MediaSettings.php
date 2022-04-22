<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class MediaSettings extends ModalComponent
{
    public function render()
    {
        return view('livewire.media-settings');
    }

    public static function modalMaxWidth(): string
{
    return '7xl';
}
}
