# MCG

Theme based on [Sage](https://roots.io/sage/)

## Theme structure

```shell
themes/mcg/               # → Root of your Sage based theme
├── app/                  # → Theme PHP
# │   ├── Controllers/      # → Controller files
# │   ├── admin.php         # → Theme customizer setup
# │   ├── filters.php       # → Theme filters
# │   ├── helpers.php       # → Helper functions
# │   └── setup.php         # → Theme setup
# ├── composer.json         # → Autoloading for `app/` files
# ├── composer.lock         # → Composer lock file (never edit)
# ├── dist/                 # → Built theme assets (never edit)
# ├── node_modules/         # → Node.js packages (never edit)
# ├── package.json          # → Node.js dependencies and scripts
├── resources/            # → Theme assets and templates
│   ├── assets/           # → Front-end assets
# │   │   ├── config.json   # → Settings for compiled assets
# │   │   ├── build/        # → Webpack and ESLint config
│   │   ├── fonts/        # → Theme fonts
│   │   ├── images/       # → Theme images
│   │   ├── scripts/      # → Theme JS
│   │   └── styles/       # → Theme stylesheets
# │   ├── functions.php     # → Composer autoloader, theme includes
# │   ├── index.php         # → Never manually edit
# │   ├── screenshot.png    # → Theme screenshot for WP admin
# │   ├── style.css         # → Theme meta information
│   └── views/            # → Theme templates
│       ├── layouts/      # → Base templates
│       └── partials/     # → Partial templates
# └── vendor/               # → Composer packages (never edit)
```

## Stages

1. Initial commit
2. Added assets required based on design (fonts and images)
3. Setup page partials and template and dump assets into them to make sure everything compiles and renders correctly
   (resulted in wasted time fixing a fonts path bug and issue with package versions)
