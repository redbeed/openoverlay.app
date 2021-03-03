# Generate App Token

The App Token is used to get twitch data that don't need an authentication.
For example to get a profile picture of a Twitch User or to subscribe to the EventSub API.

*Without the App Token "OpenOverlay" will not work.*

___

1. Enable `openoverlay.webhook.twitch.app_token.regenerate` in `config/openoverlay.php`
   ```php 
   <?php

    return [
        'webhook' => [
            'twitch' => [
                'app_token' => [
                    'regenerate' => true,
   ```

2. Make sure following redirect URL is added to your Twitch Application

    ```bash 
    https://{YOUR_URL}/connection/app-token/callback
    ```
   *Domain need a valid SSL certificate.*


3. Visit following page of your OpenOverlay system

    ```dotenv 
    https://{YOUR_URL}/connection/app-token/redirect
    ```

3. Add the given hash to your ``.env`` file

    ```dotenv 
    OVERLAY_TWITCH_APP_TOKEN={HASH}
    ```
   *Make sure to copy the full hash*
