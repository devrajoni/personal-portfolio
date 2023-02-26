<?php

namespace App\Http\Livewire\Frontend\Contact;

use App\Notifications\NewContact;
use Livewire\Component;
use Illuminate\Support\Facades\Notification;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;

    public function submit()
    {
        $this->validate([
            'name' => [
                'required',
                'max:255',
            ],
            'email' => [
                'required',
                'email',
                'max:255',
            ],
            'phone' => [
                'nullable',
                'numeric',
            ],
            'subject' => [
                'required',
                'max:255',
            ],
            'message' => [
                'required',
            ],
        ]);

        try {
            Notification::route('mail', setting('company_email'))->notify(
                new NewContact($this->all())
            );
        } catch (\Exception $e) {
            // dd($e->getMessage());

            flashify()->livewire($this)->fire(__('Oops, something went wrong. Please try again.'));

            return;
        }

        flashify()->livewire($this)->fire(__('Message sent successfully.'));

        $this->reset(['name', 'email', 'phone', 'subject', 'message']);
    }

    public function render()
    {
        return view('livewire.frontend.contact.contact-form');
    }
}
