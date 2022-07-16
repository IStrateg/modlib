<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $sliders = Category::all();
        $popular = Post::orderBy('rating', 'desc')->limit(5)->get();
        $data = Post::all();

        return view('livewire.home-component', [
            'sliders' => $sliders,
            'popular' => $popular,
            'data' => $data,
        ]);
    }
}
