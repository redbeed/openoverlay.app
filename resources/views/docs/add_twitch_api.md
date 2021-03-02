# Add Twitch API connection

To interact with Twitch you need to create an application in twitch developer console.
____
1. Create a Twitch *Application* in the developer console
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

    ```dotenv 
    TWITCH_CLIENT_ID="{Client ID}"
    ```

3. Copy `Client Secret` to `TWITCH_CLIENT_SECRET`

    ```dotenv 
    TWITCH_CLIENT_SECRET="{Client Secret}"
    ```
   *Click "New Secret" to generate your first client secret*
