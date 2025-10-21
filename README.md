# MTG Storage

This project is meant to help you manage your MTG (Magic: The Gathering) card collection. It will provide tools to catalog, organize, and track your cards.

## Development Setup

This project uses Symfony 7 and requires PHP 8.2 or higher.
To set up the development environment, follow these steps:
1. Clone the repository
2. Run `composer install` to install dependencies
3. Set up your database configuration in the `.env` file
4. Run `php bin/console doctrine:migrations:migrate` to set up the database
5. Start the development server with `symfony server:start`

There is a docker-compose file included for easier setup. You can start the environment with:
```bash
docker-compose up -d
```
This does only setup the database server for you

## Roadmap

- [ ] User authentication
- [ ] Basic card cataloging
- [ ] Collection tracking
- [ ] Advanced search and filtering
- [ ] Deck building tools
- [ ] Mobile app integration
