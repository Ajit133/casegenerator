<?php

namespace App\Filament\Components;

use Filament\Forms\Components\RichEditor as BaseRichEditor;

class RichEditor extends BaseRichEditor
{
    protected function setUp(): void
    {
        parent::setUp();
        
        $this->dehydrateStateUsing(function ($state) {
            if (!$state) {
                return $state;
            }
            
            // Convert any full URLs to relative paths before saving
            return preg_replace_callback(
                '/src="([^"]*)"/',
                function ($matches) {
                    $src = $matches[1];
                    
                    // Convert localhost or domain URLs to relative paths
                    if (preg_match('/^https?:\/\/[^\/]+(\/storage\/posts\/content\/[^\/]+\.(jpg|jpeg|png|gif|webp|svg))/', $src, $pathMatches)) {
                        return 'src="' . $pathMatches[1] . '"';
                    }
                    
                    return $matches[0];
                },
                $state
            );
        });
    }
}