<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    // 1. Daftarin variabelnya di sini biar dapet "izin"
    public $title;
    public $image;
    public $desc;

    // 2. Masukin ke dalam construct
    public function __construct($title = null, $image = null, $desc = null)
    {
        $this->title = $title;
        $this->image = $image;
        $this->desc = $desc;
    }

    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}