# Your Next Festival 🎪

A Laravel-powered festival discovery platform that helps music lovers find and connect with their next favorite festival experience.

## Features

- 🎵 **Festival Discovery**: Find festivals that match your music taste
- 🎤 **Artist Connection**: Discover new artists and track your favorites
- 🎪 **Community Hub**: Connect with fellow festival-goers
- 🎸 **Maintenance Mode**: Beautiful animated maintenance page with festival theming

## Tech Stack

- **Backend**: Laravel 12.21.0 with PHP 8.3.23
- **Frontend**: Vue.js 3.4.0 with Inertia.js
- **Styling**: Tailwind CSS 3.2.1
- **Build Tool**: Vite 5.4.19
- **Containerization**: Docker with Laravel Sail
- **Database**: MySQL 8.0

## Getting Started

### Prerequisites

- Docker and Docker Compose
- Node.js 20.2.0+
- PHP 8.3+

### Installation

1. Clone the repository:
```bash
git clone https://github.com/RobHowdle/your-next-festival.git
cd your-next-festival
```

2. Copy environment file:
```bash
cp .env.example .env
```

3. Start Docker containers:
```bash
./vendor/bin/sail up -d
```

4. Install dependencies:
```bash
./vendor/bin/sail composer install
./vendor/bin/sail npm install
```

5. Generate application key:
```bash
./vendor/bin/sail artisan key:generate
```

6. Run migrations:
```bash
./vendor/bin/sail artisan migrate
```

7. Build frontend assets:
```bash
./vendor/bin/sail npm run build
```

### Development

- **Start development server**: `./vendor/bin/sail up`
- **Watch frontend changes**: `./vendor/bin/sail npm run dev`
- **Access application**: http://localhost:8000

### Maintenance Mode

The application includes a beautifully designed maintenance page with:
- Festival-themed animations and stage design
- Animated equalizer bars and stage lights
- Social media integration (Facebook & Discord)
- Mobile-responsive design

To enable maintenance mode:
```bash
./vendor/bin/sail artisan down
```

Or set `MAINTENANCE_MODE_ENABLED=true` in your `.env` file for custom maintenance middleware.

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

Built with ❤️ for the festival community 🎪
