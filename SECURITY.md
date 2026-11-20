# Security Policy

## Supported versions

This project is maintained as a learning project and reference implementation. Security fixes are applied to the latest commit on the default branch (`main`) only.

| Version | Supported |
| ------- | --------- |
| `main` (latest) | Yes |
| Older commits / forks | No |

## Reporting a vulnerability

Please **do not** open a public issue for security problems.

Report vulnerabilities privately through GitHub:

1. Go to the repository's **Security** tab.
2. Click **Report a vulnerability** (GitHub private vulnerability reporting).
3. Describe the issue, the affected routes or files, and steps to reproduce.

Direct link: <https://github.com/ismailbentabett/laravel-instagram-clone/security/advisories/new>

You can expect an acknowledgement within a few days. Once the issue is confirmed, a fix will be prepared and you will be credited in the advisory unless you prefer to stay anonymous.

## Deployment hardening

This codebase is intended for local development and study. Before exposing it on a public server:

- Set `APP_ENV=production` and `APP_DEBUG=false`, and generate a fresh `APP_KEY` with `php artisan key:generate`.
- Keep `.env` out of version control (it is already listed in `.gitignore`).
- Review upload limits and allowed MIME types for post images.
- Keep Composer and npm dependencies up to date (`composer outdated`, `npm audit`).
