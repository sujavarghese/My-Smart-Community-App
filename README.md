

## My Smart Community


This is an application for My Smart Community App built on Laravel PHP, MySQL and Bootstrap. 

## Installation Steps


1.Open cmd prompt and move to your destination folder

    run git clone https://github.com/sujavarghese/My-Smart-Community-App.git

2. Go to <destination folder>/My-Smart-Community-App

    2.1 `composer install`

    2.2 `cp .env.example .env`
    
    2.3 open .env and modify configs as below 

        DB_DATABASE=laraveldemodb

        DB_USERNAME=root

        DB_PASSWORD=

    2.4 `php artisan key:generate`

    2.5 open phpmyadmin and create a new database as `laraveldemodb`

    2.6 `php artisan migrate` 

    2.7 `php artisan serve`

    2.8 Open browser and redirect to http://127.0.0.1:8000 [where the demo is running]

    2.9 Click on register link and create an User
