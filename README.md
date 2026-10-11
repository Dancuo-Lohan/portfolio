# portfolio

## CorianderPHP 0.3.0

The portfolio uses the official `v0.3.0` framework release (PHP 8.2 or newer).
Application code stays outside `CorianderCore`:

- `src/Routes`: explicit GET route files; public URLs remain unchanged.
- `src/Views`: English and French templates, with shared `_header.php` and `_footer.php`.
- `metadata.php` beside each view: structured SEO data passed to the view renderer.
- `src/Modules/Localization`: locale selection and language-switch URLs.
- `src/Middleware`: localized HTML 404 responses.
- `public/assets`: compiled styles, scripts and images.

After updating the application, install dependencies and rebuild assets:

```sh
composer install
php coriander nodejs ci
php coriander nodejs run build-prod
php vendor/bin/phpunit --testdox
```

Keep `.env` private. Local development uses `APP_ENV=local` and `APP_DEBUG=1`;
deployment should use `APP_ENV=production` and `APP_DEBUG=0`.
Set `PUBLIC_URL_PREFIX` to `/public` when serving the project root, or leave it
empty when the document root is `public`. Configure `PROJECT_URL` for the deployed site.

The root Apache configuration protects application files and preserves asset URLs.
The `public/.htaccess` configuration also supports a `public` document root.
In production, CorianderPHP refreshes its route map automatically; no route-cache
build step is required.

The upgrade preserves the existing explicit `public/sitemap.xml`. Adding a page
requires its route, localized metadata and sitemap entry, rather than relying on
the removed view-discovery API.
