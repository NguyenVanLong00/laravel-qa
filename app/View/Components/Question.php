<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Question extends Component
{
    /**
     * The Question content
     *
     * @var Question
     */
    public $question;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($question)
    {
        $this->question = $question;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.question');
    }
}
