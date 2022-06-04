<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TestClassBase extends Component
{
    public $claccBaseMessage;
    public $defaulMessaage;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($claccBaseMessage, $defaulMessaage="初期値です")
    {
        $this->claccBaseMessage = $claccBaseMessage;
        $this->defaulMessaage = $defaulMessaage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tests.test-class-base-component');
    }
}
