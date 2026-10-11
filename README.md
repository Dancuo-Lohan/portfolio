# portfolio

## CorianderPHP 0.4.1

The portfolio uses the official `v0.4.1` framework release (PHP 8.2 or newer),
including the application migration required by `v0.4.0`.
Application code stays outside `CorianderCore`:

- `src/Views`: English and French `index.get.php` pages and redirect handlers, with shared `_header.php` and `_footer.php`. Public URLs remain unchanged.
- `_metadata.php` beside each page: structured SEO data available through `$metadata` in pages and layouts.
- `src/Views/_middleware.php`: application-wide security and localization middleware.
- `src/Views/_script.ts`: shared browser initialization; page-specific `index.ts` entries live beside their pages.
- `src/Scripts`: reusable TypeScript helpers imported by page entries.
- `src/Modules/Localization`: locale selection and language-switch URLs.
- `src/Middleware`: localized HTML 404 responses.
- `public/assets`: compiled styles, scripts and images. Page modules and shared chunks are generated under `public/assets/js/pages` and loaded by the framework.

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
requires a localized `index.get.php`, `_metadata.php` and sitemap entry. The
framework discovers public routes from method-suffixed files in `src/Views`.
Unsuffixed private templates, such as the localized `_notfound.php` templates,
are rendered explicitly with `Responses::view()` and are not public routes.

Run the production build after changing TypeScript or Tailwind classes. It checks
TypeScript, builds the page modules and writes content fingerprints for asset URLs.
