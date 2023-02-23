<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Topnav extends Component
{
    public $data;
    
    public function __construct($param)
    {
        $this->data = $param;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data = $this->data;
        return view('components.topnav', Compact('data'));
    }
}
