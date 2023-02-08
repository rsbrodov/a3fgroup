<?php

namespace App\Http\Controllers;

use App\Services\ParserService;

class TestController extends Controller
{
    private $parserService;

    public function __construct(ParserService $parserService)
    {
        $this->parserService = $parserService;
    }

    public function index()
    {
        $url = 'https://a3f.ru/#companies';
        $result = $this->parserService->calculate($url);
        return view('test.index')->with([
            'result' => $result,
            'url' => $url,
        ]);
    }
}
