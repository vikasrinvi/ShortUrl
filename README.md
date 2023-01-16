# ShortUrl
> ### ShortUrl is laravel URL Shortener ).

## Github Url
> ### Visit  [ShortUrl](https://github.com/vikasrinvi/ShortUrl).


----------

# Getting started

## Installation



Clone the repository

    git clone https://github.com/vikasrinvi/ShortUrl.git

Switch to the repo folder

    cd shortUrl

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate
    
    
Install and run the npm

    npm i && npm run dev

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone git clone git@github.com:Itxshakiil/Laravel-Shop-App.git
    cd shortUrl
    composer install
    cp .env.example .env
    php artisan key:generate
    npm i && npm run dev
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

and you're done


# Code overview

## Package
I have use the package [short-url](https://github.com/ash-jc-allen/short-url#readme)
- 


## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

----------