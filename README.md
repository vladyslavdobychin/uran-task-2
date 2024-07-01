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

5. For testing purposes the app is running on SQLite for simplicity, so no db setup required. 

6. Run migrations and seed the database:
   ```bash
   php artisan migrate:fresh --seed
   ```

7. Start the development server:
   ```bash
   php artisan serve
   ```

8. Open your browser and visit `http://localhost:8000`.

## Default Login Credentials

- **Email**: user@example.com
- **Password**: password

