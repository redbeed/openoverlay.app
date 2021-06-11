# Bot schedule message

If you already using Laravel you might be familiar with the scheduling Task and artisan make commands

OpenOverlay uses the same command and structure to create a base schedule message.

____

## Write A Scheduled Bot Message

### Create the message

You can use our make command, that based on Laravel make command, to create a new schedule Class for your message.
This make command will create a new class in the `App\Bot\Scheduling` namespace with `Redbeed\OpenOverlay\Console\Scheduling\ChatBotScheduling` as a parent.
```bash 
sail artisan make:bot-schedule MadeWithSchedule
```

*MadeWithSchedule can be replaced by your wanted Class name*

### Enable message for scheduling

You need the new Message to your `config/openoverlay.php` config file to enable it.
````php
return [
    'bot' => [
        'schedules' => [
            ...
            App\Bot\Scheduling\MadeWithSchedule::class,
        ]
````

### Enable Laravel Scheduling

Your bot scheduling system uses laravel scheduling service. To run the laravel service you need to create a crontab.
[(#Running The Scheduler)][laravel-schedular]

[laravel-schedular]: https://laravel.com/docs/8.x/scheduling#running-the-scheduler

