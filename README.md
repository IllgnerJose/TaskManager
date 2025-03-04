# Task Manager

## Description
Task Manager is a simple CRUD application for managing tasks, created solely for studying Laravel's best practices, including the service layer and testing.

## Requirements
- PHP >= 8.0
- Composer
- Laravel >= 11.x
- MySQL >= 8.0
- Pest >=3.7

## Functions
- CREATE TASK
- READ TASK
- UPDATE TASK
- DELETE TASK
- COMPLETE TASK

## Installation

1. Clone the repository:
   ```sh
   git clone https://github.com/yourusername/yourproject.git
   cd yourproject
   ```

2. Install dependencies:
   ```sh
   composer install
   ```

3. Copy the environment file and configure it:
   ```sh
   cp .env.example .env
   ```
   Update database credentials and other environment settings in `.env`.

4. Generate application key:
   ```sh
   php artisan key:generate
   ```

5. Run migrations:
   ```sh
   php artisan migrate
   ```

6. Start the development server:
   ```sh
   php artisan serve
   ```
   The application will be available at `http://127.0.0.1:8000`.

## Testing (PEST)
Run tests using:
```sh
php artisan test
```

## Contributing
1. Fork the repository.
2. Create a new branch (`feature/your-feature`).
3. Commit your changes (`git commit -m 'Add new feature'`).
4. Push to the branch (`git push origin feature/your-feature`).
5. Open a Pull Request.

## License
MIT.

## Contact
email: illgnerjosbatista@gmail.com
linkedin: https://www.linkedin.com/in/illgner-jos%C3%A9-44586925b/
