<?php

namespace App\Livewire;

use App\Models\Chat as ModelsChat;
use Livewire\Component;

class Chat extends Component
{   
    public $text;
    public function add(){
        ModelsChat::create([
            'message'=>$this->text
        ]);
        $this->text='';
        $this->dispatch('scrollToBottom');
        }
    public function render()
    {   $messages=ModelsChat::all();
        return view('livewire.chat',['messages'=>$messages]);
    }
}
