<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Card extends Component
{
    public function render()
    {
       $json = ' {
            "image": "/img/profile.jpeg",
            "frontTitle": "ClickMe",
            "name": "Scott Shipman",
            "job": "UI/UX Team Lead",
            "description": "After curing cancer and inventing time travel, Scott settled into his role as a UI/UX Team Lead for 3rd Party Solutions, where together with other brilliant engineers, they developed products that amaze internet users daily."
    }';

       $cardData = json_decode($json, true);
        return view('livewire.card')->with('cardData', $cardData);
    }
}
