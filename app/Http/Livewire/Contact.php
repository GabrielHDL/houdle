<?php

namespace App\Http\Livewire;

use App\Mail\AnswerMailable;
use App\Mail\ContactMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{

    public $name;
    public $email;
    public $phone;
    public $description;
    public $successMessage;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|numeric|min:10',
        'description' => 'required|min:5',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.contact');
    }

    public function submitForm() {
        $this->validate();

        $contact['name'] = $this->name;
        $contact['email'] = $this->email;
        $contact['phone'] = $this->phone;
        $contact['description'] = $this->description;

        $correo = new ContactMailable($contact);

        $correo2 = new AnswerMailable($contact);

        Mail::to('gabriel@houdle.com')->send($correo);
        
        Mail::to($contact['email'])->send($correo2);

        $this->successMessage = 'Gracias por contactarnos, pronto nos comunicaremos contigo.';

        $this->resetForm();
    }

    private function resetForm() {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->description = '';
    }
}
