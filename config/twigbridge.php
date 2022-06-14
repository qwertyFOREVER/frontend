<?php

return [

    'twig' => [
        'extension' => 'twig',

        'environment' => [

            'debug' => env('APP_DEBUG', false),
            'charset' => 'utf-8',
            'cache' => null,
            'auto_reload' => true,
            'strict_variables' => false,
            'autoescape' => 'html',
            'optimizations' => -1,
        ],

        'safe_classes' => [
            \Illuminate\Contracts\Support\Htmlable::class => ['html'],
        ],

        'globals' => [],
    ],

    'extensions' => [
        'enabled' => [
            'TwigBridge\Extension\Laravel\Event',
            'TwigBridge\Extension\Loader\Facades',
            'TwigBridge\Extension\Loader\Filters',
            'TwigBridge\Extension\Loader\Functions',
            'TwigBridge\Extension\Loader\Globals',

            'TwigBridge\Extension\Laravel\Auth',
            'TwigBridge\Extension\Laravel\Config',
            'TwigBridge\Extension\Laravel\Dump',
            'TwigBridge\Extension\Laravel\Input',
            'TwigBridge\Extension\Laravel\Session',
            'TwigBridge\Extension\Laravel\Str',
            'TwigBridge\Extension\Laravel\Translator',
            'TwigBridge\Extension\Laravel\Url',
            'TwigBridge\Extension\Laravel\Model',
            // 'TwigBridge\Extension\Laravel\Gate',

            // 'TwigBridge\Extension\Laravel\Form',
            // 'TwigBridge\Extension\Laravel\Html',
            // 'TwigBridge\Extension\Laravel\Legacy\Facades',
        ],

        'facades' => [],

        'functions' => [
            'elixir',
            'head',
            'last',
            'mix',
        ],

        'filters' => [
            'get' => 'data_get',
            'asset' => function (string $file): string {
                return "/assets/$file";
            },
        ],
    ],
];
