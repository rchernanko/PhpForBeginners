<?php

/*

- Up until this point, we've been manually 'requiring' files.
- This is a pain
- It would be great if they could automatically load

- Composer takes care of this for us...

- Within the composer.json file:

    {
        autoload: {
            "classmap": [
                "controllers/"
            ]
        }
    }

- Classmap above means - load every single class within the path I give you. In above = load every single class within the controllers directory

- busuu-website-sf

        "autoload": {
            "psr-4": { "Busuu\\": "src/Busuu" },
            "classmap": [ "app/AppKernel.php", "app/AppCache.php" ]
        },
        "autoload-dev": {
            "psr-4": { "BusuuTests\\": "tests/_support/" }
        },

- PSR-4 is simply a standard for how to autoload classes

 - Anyway, once I've run a composer install...if I look at the vendor directory and then the composer directory = there
is a load of autoloading files in there that show which classes have been loaded and where from.

 - When using composer, the ONLY file you must require is the autoload.php file (within vendor/composer
directory) e.g. in the index.php file.

 */