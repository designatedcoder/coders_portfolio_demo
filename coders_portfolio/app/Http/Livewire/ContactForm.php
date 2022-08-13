<?php

namespace App\Http\Livewire;

use App\Mail\MessageReceived;
use App\Models\Contact;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:5|max:300',
    ];

    public function submit() {
        $data = $this->validate();
        Contact::create($data);
        $this->reset();
        Mail::to(config('mail.from.address'))->send(new MessageReceived($data));
    }

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function render() {
        return view('livewire.contact-form');
    }
}
