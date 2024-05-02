Building a framework for learning mvc programming with PHP.

toturial video https://www.youtube.com/watch?v=6ERdu4k62wI&ab_channel=freeCodeCamp.org



How to use framework
--------------------
Start server in directory /public
php -S localhost:8080

create layouts in views/layouts directory
create content in views directory



Building diary
--------------
0.00 time in video
Initial commit
Made a readmefile.txt and pushed for checking that everything works with git.


creating a index.php file and testing with php built in server
run server in public file!
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

34.09 time in viedo
Routes configured and tested composer.json protected and index.php moved to
public directory.

50.07 time in video
Views and layouts implemented navbar included and content handling

56.00
worked on Not found code 