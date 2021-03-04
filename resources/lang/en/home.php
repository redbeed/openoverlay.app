<?php

return [
    'header' => [
        'subtitle' => 'No Limits.',
        'title' => 'Self managed Twitch Overlay & Bot.',
        'description' => [
            'The first developer friendly overlay and bot service for your twitch stream.',
            'OpenOverlay is a Open-Source-Project based on Laravel.',
        ]
    ],
    'teaser' => [
        'overlay' => [
            'title' => '<span class="text-flamingo-800">Overlay</span> Service',
            'text' => 'Build your own cloud based overlay with <span class="text-flamingo-800">no limits</span>. OpenOverlay is build by developers for developers.',
        ],
        'bot' => [
            'title' => '<span class="text-flamingo-800">Bot</span> Service',
            'text' => 'Create your own bot with <span class="text-flamingo-800">no limits</span> for twitch. Your Bot will have a unique username. From advanced commands to simple responses.',
        ],
        'endless' => [
            'title' => '<span class="text-flamingo-800">Endless</span> possibilities',
            'text' => 'Change your overlay based on each twitch event and action. OpenOverlay forwards all events into your laravel project.',
        ],
    ],
    'how-to' => [
        'overlay' => [
            'title' => '<span class="text-gray-900 text-3xl md:text-2xl block" data-aos="fade-up" data-aos-delay="500">How it works?</span> Overlay.',
            'description' => 'OpenOverlay gives you the possibilities you need to build a high-end overlay for you or your customer\'s stream. You can develop, deploy and manage the overlay as a normal project. You don\'t have to deal with unstable browser editors anymore, just use your IDE.',
            'events' => [
                'title' => 'You overlay can change based on',
                'items' => [
                    'Follows', 'Subscriptions', 'Chat Messages', 'Rewards', 'Raids', 'Hosts', 'Cheers', 'Hype Train', 'Stream Update',
                ],
            ],
        ],
        'bot' => [
            'title' => '<span class="text-gray-900 text-3xl md:text-2xl block" data-aos="fade-up" data-aos-delay="500">How it works?</span> Bot.',
            'description' => 'OpenOverlay comes with a bot service that can handle easy and advanced commands. Commands can be simple answers or be handled by a class that has complete access to your whole project.'
        ],
    ]
];
