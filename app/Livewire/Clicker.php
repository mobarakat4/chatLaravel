<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Clicker extends Component
{
    public $cnt=2;
    public $name;
    public $email;
    public $password;
    public function button_clicked(){
        $this->cnt++;
    }

    public function createUser(){
        User::Create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>bcrypt($this->password),
        ]);
        $this->name='';
        $this->email='';
        $this->password='';
    }
    public $arr=array();
    public $input=array();

    public function arrr(){
        $this->arr[]=$this->input;
        $this->input='';
    }
    public function render()
    {
        $title="test";
        $users=User::all();
        return view('livewire.clicker',[
            'title'=>$title,
            'users'=>$users,
        ]);
    }
}
