<?php

namespace App\View\Components\Dashcode;

use App\Models\Setting;
use Closure;
use Illuminate\View\Component;

class SideBar extends Component
{
    /**
     * Create a new component instance.
     * @return void
     */

    public $name;
    public function __construct()
    {
        $setting = Setting::first();
        $this->name = $setting->name;
    }

    /**
     * Get the view / contents that represent the component.
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $name = $this->name;
        return view('components.dashcode.side-bar', compact('name'));
    }
}
