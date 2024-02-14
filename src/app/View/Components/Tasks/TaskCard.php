<?php

namespace App\View\Components\Tasks;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TaskCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $task;
    
    public function __construct($task)
    {
        $this->task = $task;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tasks.task-card');
    }
}
