<?php

namespace App\Services;


class ParserService
{

    public function calculate(string $url): array
    {
        $html = file_get_contents($url);
        $result = [];
        preg_match_all('/<(\w+)[^>]*>/', $html, $matchedElements);
        $arrayTags = !empty($matchedElements[1]) ? array_unique($matchedElements[1]) : [];
        foreach ($arrayTags as $tag) {
            $count = $this->counterTag($tag, $html);
            $result[$tag] = $count;
        }
        return $result;
    }

    private function counterTag(string $tag, string $html): int
    {
        $count = preg_match_all('/<(' . $tag . ')[^>]*>/', $html, $matchedElements);
        return $count;
    }
}

