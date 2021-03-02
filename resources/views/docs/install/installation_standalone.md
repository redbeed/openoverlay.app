# Standalone Installation
____
1. Clone OpenOverlay Standalone
   ```shell
   git clone https://github.com/redbeed/OpenOverlay-Standalone.git
   ```
2. Run composer install

    ```shell 
    composer install
    ```

3. Copy `.env.example` to `.env`

   Add a custom passwort for ``DB_PASSWORD`` and ``DB_ROOT_PASSWORD``

    ```shell 
    cp .env.example .env
    ```


4. Start docker/sail
    ```shell
    ./vendor/bin/sail up
    ```
   *Laravel Sail is supported on macOS, Linux, and Windows (via WSL2).*

5. Generate APP Key
   ```shell 
   ./vendor/bin/sail artisan key:generate
   ```

6. Migrate Database
   ```shell 
   ./vendor/bin/sail artisan migrate
   ```

6. Create your account
   ```bash 
   http://localhost/register
   ```
