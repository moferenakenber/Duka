<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
                 <div>
                  <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
                     <h1>Alerts!</h1>
                     <h2>Alert!</h2>
                     <h3>Alert!</h3>
                     <h4>Alert!</h4>
                     <h5>Alert!</h5>
                     <h6>Alert!</h6>
                 </div>
           blade;
    }
}
