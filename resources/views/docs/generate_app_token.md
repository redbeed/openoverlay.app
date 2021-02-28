# Generate App Token

The App Token is used to get twitch data that don't need an authentication.
For example to get a profile picture of a Twitch User or to subscribe to the EventSub API.

*Without the App Token "OpenOverlay" will not work.*

___

1. Enable `openoverlay.webhook.twitch.app_token.regenerate`
   ```bash 
   https://dev.twitch.tv/console/apps
   ```

2. Add following redirect URLs to you Twitch Application

    ```bash 
    https://{YOUR_URL}/connection/callback
    https://{YOUR_URL}/connection/app-token/callback
    https://{YOUR_URL}/connection/bot/callback
    ```
   *All domains need a valid SSL certificate.*


3. Copy `Client ID` to `TWITCH_CLIENT_ID`

    ```bash 
    TWITCH_CLIENT_ID="{Client ID}"
    ```

3. Copy `Client Secret` to `TWITCH_CLIENT_SECRET`

    ```bash 
    TWITCH_CLIENT_SECRET="{Client Secret}"
    ```
   *Click "New Secret" to generate your first client secret*
