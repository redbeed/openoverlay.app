# Add a Bot

Adding a bot is really simple. Bots are normal Twitch users, but they are controlled by a program.

Our Standalone version cam with a bot docker container. You always need to restart that container after you created,
change a command or added a bot to your system.
____

1. Make sure that your callback url is added to the twitch application
   ```bash 
    https://{YOUR_URL}/connection/bot/callback
   ```
   *Domain need a valid SSL certificate.*

2. Open following link of your application

    ```bash 
    https://{YOUR_URL}/connection/bot/redirect
    ```
   This call will redirect you to the twitch auth page, make sure you be login with your bot account.


3. You will be redirect back to your Dashboard if the setup was successfully.

3. Link your account with the bot

    1. Get the ``id`` of your OpenOverlay/Laravel Account of the `users` database table.
    2. Get the ``id`` of your Bot of the `bots_connections` database table.
    3. Add an entry in the database table ``users_bots_enabled``
    4. Restart your bot service 

        _Standalone:_
       ````shell 
        docker-compose restart laravel.chatbot 
       ````
