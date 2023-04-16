<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputText extends Component
{
    /**
     * Create a new component instance.
     */
    public const TYPES = ["text", "checkbox", "submit"];


    //    public function __construct(string $type)
    public function __construct(public string $type, public string $placeholder)
    {
        //
        // $this -> type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if(in_array($this -> type, self::TYPES)){
            return view('components.input-text');
        }
        return "";
    }
}
