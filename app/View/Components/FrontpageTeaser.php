<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FrontpageTeaser extends Component
{
    private string $translationKey = '';

    private array $icons = [
        'overlay' => 'fas fa-object-group',
        'bot' => 'fas fa-robot',
        'endless' => 'fas fa-plug',
    ];


    public function __construct(string $translationKey)
    {
        $this->translationKey = $translationKey;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('home.components.frontpage-teaser', [
            'translationKey' => $this->translationKey,
            'icon' => $this->icons[$this->translationKey] ?? 'fas fa-icons',
        ]);
    }
}
