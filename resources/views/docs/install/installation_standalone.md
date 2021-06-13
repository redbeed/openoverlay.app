# Standalone Installation

Our Standalone Version of OpenOverlay is the easiest and most effective way to deploy your Overlay and Bot Service for your twitch Channel.

The Standalone Version comes with everything you need, like a Websocket and Sail (Docker compose) configuration for a bot container.
____

## Installation
1. Clone OpenOverlay Standalone
   ```shell
   git clone https://github.com/redbeed/OpenOverlay-Standalone.git
   ```
1. Run composer install

    ```shell 
    composer install --ignore-platform-reqs
    ```

1. Copy `.env.example` to `.env`

    ```shell 
    cp .env.example .env
    ```
   
1. Fill `PUSHER_APP_SECRET` with a random secret hash, in your generated `.env` file.
   
    _You also could change `PUSHER_APP_KEY` and `PUSHER_APP_ID`._

   
1. Add a custom password for ``DB_PASSWORD=`` and ``DB_ROOT_PASSWORD=`` in the ``.env`` 

1. Start docker/sail
    ```shell
    ./vendor/bin/sail up
    ```
   *Laravel Sail is supported on macOS, Linux, and Windows (via WSL2).*
   *[(Sail Documentation)][sail]*
   
   **Make sure before running sail that you installed and started [Docker][docker] and [docker-compose][docker-compose].**


1. Generate APP Key
   ```shell 
   ./vendor/bin/sail artisan key:generate
   ```

1. Generate Twitch Communication Secret
   ```shell 
   ./vendor/bin/sail artisan overlay:secret
   ```

1. Migrate Database
   ```shell 
   ./vendor/bin/sail artisan migrate
   ```

1. Create your account
   ```bash 
   http://localhost/register
   ```
   
10. Follow steps on your website


[sail]: https://laravel.com/docs/8.x/sail#introduction
[docker]: https://docs.docker.com/get-docker/
[docker-compose]: https://docs.docker.com/compose/install/
