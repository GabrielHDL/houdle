<?php

namespace App\Http\Livewire;

use App\Models\EmailListing;
use Livewire\Component;

class Subscription extends Component
{

    public $email;
    public $successMessage;
    public $errorMessage;

    protected $rules = [
        'email' => 'required|email',
    ];
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.subscription');
    }

    public function submitForm() {
        $this->validate();

        $contact['email'] = $this->email;

        $item = new EmailListing($contact);

        if (EmailListing::where('email', '=', $contact['email'])->exists()) {
            $this->errorMessage = 'Ya estas suscrito a nuestra lista de correos';
        } else {
            $item->save();
            $this->successMessage = 'Gracias por suscribirte a nuestra lista de correos';
        }

        $this->resetForm();
    }

    private function resetForm() {
        $this->email = '';
    }
}
