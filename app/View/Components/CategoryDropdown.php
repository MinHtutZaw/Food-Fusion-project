<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Cuisine;
use Illuminate\View\Component;

class CategoryDropdown extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        


        return view('components.category-dropdown', [
            'cuisines'=>Cuisine::all(),
            'currentCuisine'=>Cuisine::firstWhere('name', request('cuisine'))
            
        ]);
    }
}
