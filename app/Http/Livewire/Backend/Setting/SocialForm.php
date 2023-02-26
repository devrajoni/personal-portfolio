<?php

namespace App\Http\Livewire\Backend\Setting;

use App\Models\Social;
use Livewire\Component;

class SocialForm extends Component
{
    public $icon;
    public $url;
    public $social_id;

    public function submit()
    {
        $this->validate([
            'icon' => 'required',
            'url' => 'required',
        ]);

        Social::updateOrCreate(['id' => $this->social_id ], [
            'icon' => $this->icon,
            'url' => $this->url,
        ]);

        flashify()->livewire($this)->fire($this->social_id ? 'updated' : 'created');

        $this->reset('icon', 'url');
    }

    public function edit(Social $social)
    {
        $this->social_id = $social->id;

        $this->icon = $social->icon;

        $this->url = $social->url;
    }

    public function delete(Social $social)
    {
        $social->delete();

        flashify()->livewire($this)->fire('deleted');

    }

    public function render()
    {
        $socials = Social::all();

        return view('livewire.backend.setting.social-form', compact('socials'));
    }
}
