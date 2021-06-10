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

    ```shell 
    cp .env.example .env
    ```
   
4. Add a custom password for ``DB_PASSWORD=`` and ``DB_ROOT_PASSWORD=`` in the ``.env`` 

4. Start docker/sail
    ```shell
    ./vendor/bin/sail up
    ```
   *Laravel Sail is supported on macOS, Linux, and Windows (via WSL2).*

   *Documentations: https://laravel.com/docs/8.x/sail#introduction*


5. Generate APP Key
   ```shell 
   ./vendor/bin/sail artisan key:generate
   ```

6. Generate Communication Secret
   ```shell 
   ./vendor/bin/sail artisan overlay:secret
   ```

7. Migrate Database
   ```shell 
   ./vendor/bin/sail artisan migrate
   ```

8. Create your account
   ```bash 
   http://localhost/register
   ```
   
9. Follow steps on your website
