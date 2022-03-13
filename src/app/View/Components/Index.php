<?php

namespace App\View\Components;

use Illuminate\Support\Facades\URL;
use Illuminate\View\Component;

class Index extends Component
{
    public $title;
    public $backBtnPath;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $backBtnPath = '/')
    {
        $this->title = $title;
        $this->backBtnPath = $backBtnPath;
    }

    public function isAtHome()
    {
        return URL::current() == route('home');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.index');
    }
}
