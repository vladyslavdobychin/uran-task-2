## Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/vladyslavdobychin/uran-task-2.git
   ```

2. Navigate to the project directory:
   ```bash
   cd uran-task-2
   ```

3. Install dependencies:
   ```bash
   composer install
   npm install
   npm run dev
   ```

4. Copy the example environment file and configure the environment:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. For testing purposes the app will be running on SQLite for simplicity
   ```bash
   touch database/database.sqlite
   ``` 

7. Run migrations and seed the database:
   ```bash
   php artisan migrate:fresh --seed
   ```

8. Start the development server:
   ```bash
   php artisan serve
   ```

9. Open your browser and visit `http://localhost:8000`.

## Default Login Credentials

- **Email**: user@example.com
- **Password**: password

