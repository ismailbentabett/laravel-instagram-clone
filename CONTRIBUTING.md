# Contributing

Thanks for your interest in improving **Laravel Instagram Clone**. Contributions of all sizes are welcome, from typo fixes to items on the [roadmap](README.md#-roadmap).

By participating you agree to follow the [Code of Conduct](CODE_OF_CONDUCT.md).

## Ground rules

- Search [existing issues](https://github.com/ismailbentabett/laravel-instagram-clone/issues) before opening a new one.
- For larger changes, open a feature request first so the approach can be discussed.
- Keep pull requests focused: one logical change per PR.
- Never commit your `.env` file, `APP_KEY`, database credentials or other secrets.
- This is an independent learning project. Do not add Instagram or Meta logos, trademarks or copied assets.

## Development setup

Follow the [Quick start](README.md#-quick-start) in the README. In short:

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan storage:link
npm install && npm run dev
php artisan serve
```

## Useful commands

| Command | Description |
| --- | --- |
| `php artisan serve` | Start the local development server |
| `php artisan migrate` | Run database migrations |
| `php artisan migrate:fresh` | Drop all tables and re-run migrations |
| `php artisan test` | Run the PHPUnit test suite |
| `npm run dev` | Compile assets once (Laravel Mix) |
| `npm run watch` | Recompile assets on change |
| `npm run prod` | Compile and minify assets for production |

## Coding standards

- Follow [PSR-12](https://www.php-fig.org/psr/psr-12/) and Laravel conventions (the repository ships a `.styleci.yml` with the `laravel` preset).
- Validate request input in controllers or Form Requests.
- Every migration must implement a working `down()` method.
- Add or update feature tests under `tests/Feature` for new behavior.

## Workflow

1. Fork the repository and create a branch from `main`:
   `git checkout -b feat/short-description`
2. Make your changes.
3. Run `php artisan test` and make sure assets compile with `npm run dev`.
4. Commit using [Conventional Commits](https://www.conventionalcommits.org/), for example:
   - `feat: add follow button to profiles`
   - `fix: create profile on registration`
   - `docs: clarify storage link step`
5. Push your branch and open a pull request using the template.

## Reporting bugs and requesting features

Use the [issue templates](https://github.com/ismailbentabett/laravel-instagram-clone/issues/new/choose). For security issues, follow [SECURITY.md](SECURITY.md) instead of opening a public issue.
