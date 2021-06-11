# Bot Chat Command

If you already using Laravel you might be familiar with the artisan make commands.

OpenOverlay uses the same command and structure to create a base Command.


____

## Write A Bot Command

### Create the bot command
You can simply create a command with our make command, that based on Laravel make commands.
This command will create a new Class in the `App\Bot\Commands` namespace with the `\Redbeed\OpenOverlay\ChatBot\Commands\BotCommand` as a parent.

```bash 
sail artisan make:bot-command HelloWorldCommand
```

*HelloWorld can be replaced by your wanted Class name*

### Enable the bot command

You need the Command to your `config/openoverlay.php` config file to enable it.
````php
return [
    'bot' => [
        'commands' => [
            'advanced' => [
                ...
                App\Bot\Commands\HelloWorldCommand::class,
            ]
````

### Restart your container

After you added or changed your Bot Command you always have to restart the Bot Container.
```bash
sail restart laravel.chatbot
```

