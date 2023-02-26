<?php

namespace App\Http\Controllers\Backend;

use App\Models\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index($tab='website')
    {
        return view('backend.setting.form', compact('tab'));
    }

    public function update(Request $request)
    {
        if ($request->tab =='website'){
            $validated = $request->validate([
                'website_name' => ['required', 'max:255'],
                'website_title' => ['required', 'max:255'],
                'logo' => [
                    'nullable',
                    'image',
                    'max:2048',
                ],
                'favicon' => [
                    'nullable',
                    'image',
                    'max:2048',
                ],
                'website_description' => ['required'],
                'copyright_name' => ['required', 'max:255'],
                'copyright_year' => ['required', 'max:255'],
                'copyright_link' => ['required', 'max:255'],
            ]);
        }

        if ($request->tab =='company'){
            $validated = $request->validate([
                'company_name' => ['required', 'max:255'],
                'company_email' => ['required', 'email', 'max:255'],
                'company_phone' => ['required', 'max:255'],
                'company_address' => ['required', 'max:255'],
                'company_country' => ['required', 'max:255'],
                'company_state' => ['required', 'max:255'],
                'company_city' => ['required', 'max:255'],
                'company_postcode' => ['required', 'max:255'],
                'map' => ['nullable'],
            ]);
        }

        if ($request->hasFile('logo')) {
            $validated['logo'] = upload($request->logo, 'settings/', setting('logo'));
        }

        if ($request->hasFile('favicon')) {
            $validated['favicon'] = upload($request->favicon, 'settings/', setting('favicon'));
        }

        foreach($validated as $settingkey => $settingvalue){
            Setting::updateOrCreate(
                ['key' => $settingkey],
                ['value' => $settingvalue]
            );
        }

        cache()->forget('setting');

        return redirect()
            ->route('backend.settings.index', $request->tab)
            ->flashify('updated');
    }
}
