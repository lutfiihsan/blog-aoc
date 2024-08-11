<?php

namespace App\View\Components\Dashcode;

use App\Models\Setting;
use Closure;
use Illuminate\View\Component;

class LogoApp extends Component
{
    /**
     * Create a new component instance.
     * @return void
     */

    public $logo;
    public function __construct()
    {
        $setting = Setting::first();
        $this->logo = $setting->logo;
    }

    /**
     * Get the view / contents that represent the component.
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $logo = $this->logo;
        return view('components.dashcode.logo-app', compact('logo'));
    }
}
