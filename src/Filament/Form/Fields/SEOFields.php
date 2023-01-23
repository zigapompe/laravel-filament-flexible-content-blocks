<?php

namespace Statikbe\FilamentFlexibleContentBlocks\Filament\Form\Fields;

    use Filament\Forms\Components\Grid;

    class SEOFields extends Grid
    {
        public function setUp(): void
        {
            parent::setUp(); // TODO: Change the autogenerated stub

            $this->childComponents = [
                SEOTitleField::create(),
                SEODescriptionField::create(),
                SEOImageField::create(),
            ];
        }
    }
