Building a framework for learning mvc programming with PHP.

toturial video https://www.youtube.com/watch?v=6ERdu4k62wI&ab_channel=freeCodeCamp.org

0.00 time in video
Initial commit
Made a readmefile.txt and pushed for checking that everything works with git.


creating a index.php file and testing with php built in server
php -S localhost:8080

creating folder core with files Application.php & Router.php

composer init to create a composer.json

original autoload in composer
    "autoload": {
        "psr-4": {
            // "Ssepheron\\MvcFramework\\": "src/"
        }
    }

26.19 time in video
git commit -m "created composer file, configured autoload, creating core folder
where Application, Routes, Request is some classes for framework"