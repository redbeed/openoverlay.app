# Standalone Installation

Our Standalone Version of OpenOverlay is the easiest and most effective way to deploy your Overlay and Bot Service for your twitch Channel.

The Standalone Version comes with everything you need, like a Websocket and Sail (Docker compose) configuration for a bot container.
____

## Installation
1. Clone OpenOverlay Standalone
   ```shell
   git clone https://github.com/redbeed/OpenOverlay-Standalone.git
   ```
2. Run composer install

    ```shell 
    composer install
    ```

3. Copy `.env.example` to `.env`

    ```shell 
    cp .env.example .env
    ```
   
4. Add a custom password for ``DB_PASSWORD=`` and ``DB_ROOT_PASSWORD=`` in the ``.env`` 

5. Start docker/sail
    ```shell
    ./vendor/bin/sail up
    ```
   *Laravel Sail is supported on macOS, Linux, and Windows (via WSL2).*
   *[(Sail Documentation)][sail]*


6. Generate APP Key
   ```shell 
   ./vendor/bin/sail artisan key:generate
   ```

7. Generate Twitch Communication Secret
   ```shell 
   ./vendor/bin/sail artisan overlay:secret
   ```

8. Migrate Database
   ```shell 
   ./vendor/bin/sail artisan migrate
   ```

9. Create your account
   ```bash 
   http://localhost/register
   ```
   
10. Follow steps on your website


[sail]: https://laravel.com/docs/8.x/sail#introduction
