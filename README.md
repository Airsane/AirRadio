# Radio App

A modern web application for managing and streaming radio content built with Laravel.

## Features

- Radio station management
- Live streaming capabilities
- User authentication and authorization
- Playlist management
- Real-time updates
- Responsive design

## Requirements

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL/PostgreSQL
- Web server (Apache/Nginx)

## Installation

1. Clone the repository:
```bash
git clone [repository-url]
cd RadioApp
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install JavaScript dependencies:
```bash
npm install
```

4. Create environment file:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Configure your database in `.env` file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=radio_app
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

7. Run database migrations:
```bash
php artisan migrate
```

8. Start the development server:
```bash
php artisan serve
```

9. In a separate terminal, start the Vite development server:
```bash
npm run dev
```

## Development

- Run tests: `php artisan test`
- Run code style checks: `./vendor/bin/pint`
- Run static analysis: `./vendor/bin/phpstan analyse`

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Support

If you encounter any issues or have questions, please open an issue in the GitHub repository.
