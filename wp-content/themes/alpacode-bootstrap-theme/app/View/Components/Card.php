<?php
// app/View/Components/Card.php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public ?array $item;
    public string $type;
    public bool $showImage;
    public bool $showMeta;
    public bool $showExcerpt;
    public bool $showButton;
    public string $buttonText;
    public string $imageAspect;
    public bool $animation;

    /**
     * Create a new component instance.
     */
    public function __construct(
        ?array $item = null,
        string $type = 'default',
        bool $showImage = true,
        bool $showMeta = true,
        bool $showExcerpt = true,
        bool $showButton = true,
        string $buttonText = 'Read More',
        string $imageAspect = 'aspect-video',
        bool $animation = true
    ) {
        $this->item = $item;
        $this->type = $type;
        $this->showImage = $showImage;
        $this->showMeta = $showMeta;
        $this->showExcerpt = $showExcerpt;
        $this->showButton = $showButton;
        $this->buttonText = $buttonText;
        $this->imageAspect = $imageAspect;
        $this->animation = $animation;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.card');
    }

    /**
     * Check if item has required data
     */
    public function hasValidItem(): bool
    {
        return !empty($this->item) && (!empty($this->item['title']) || !empty($this->item['image']));
    }

    /**
     * Get formatted date
     */
    public function getFormattedDate(): string
    {
        if (empty($this->item['date'])) {
            return '';
        }

        return date('M j, Y', strtotime($this->item['date']));
    }

    /**
     * Get truncated excerpt
     */
    public function getTruncatedExcerpt(int $length = 150): string
    {
        if (empty($this->item['excerpt'])) {
            return '';
        }

        return strlen($this->item['excerpt']) > $length 
            ? substr($this->item['excerpt'], 0, $length) . '...'
            : $this->item['excerpt'];
    }
}