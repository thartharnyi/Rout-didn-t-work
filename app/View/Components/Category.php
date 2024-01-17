<?php

namespace App\View\Components;

use App\Models\Category as ModelsCategory;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Category extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        
    }

    public function render(): View|Closure|string
    {
        return view('components.category',[
            'categories'=>ModelsCategory::all(),
            'currentCategory' => request('category')
        ]);
        
    }
}