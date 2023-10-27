<?php

namespace App\Twig\Extension;

use App\Twig\Runtime\LimitRuntime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class LimitExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('two_lines', [$this, 'getTwoLines']),
        ];
    }

    public function getTwoLines($text)
    {
        // Split the text into lines
        $lines = explode("\n", $text);

        // Take the first two lines
        $firstTwoLines = array_slice($lines, 0, 2);

        // Join the lines back together
        return implode("\n", $firstTwoLines);
    }
}
