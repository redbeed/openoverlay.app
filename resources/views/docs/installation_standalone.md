# Standalone Installation

1. Clone OpenOverlay Standalone
   ```bash
   git clone https://github.com/redbeed/OpenOverlay-Standalone.git
   ```
2. Run composer install

    ```bash 
    composer install
    ```

3. Copy `.env.example` to `.env`

   Add a custom passwort for ``DB_PASSWORD`` and ``DB_ROOT_PASSWORD``

    ```bash 
    cp .env.example .env
    ```


4. Start docker/sail
    ```bash
    ./vendor/bin/sail up
    ```

5. Generate APP Key
   ```bash 
   ./vendor/bin/sail artisan key:generate
   ```

6. Migrate Database
   ```bash 
   ./vendor/bin/sail artisan migrate
   ```

6. Create your account
   ```bash 
   http://localhost/register
   ```
