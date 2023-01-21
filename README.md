# ShortUrl
> ### ShortUrl is laravel URL Shortener ).

## Github Url
> ### Visit  [ShortUrl](https://github.com/vikasrinvi/ShortUrl).

## Requirements
The package has been developed and tested to work with the following minimum requirements:

PHP 8.0
Laravel 9.0
Node 14 or above
----------

# Getting started

## Installation 

### Using the git


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

    git clone https://github.com/vikasrinvi/ShortUrl.git
    cd shortUrl
    composer install
    cp .env.example .env
    php artisan key:generate
    npm i && npm run dev
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

and you're done


### Using the zip file

Unzip the file


Switch to the repo folder

    cd shortUrl

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    .env
Make database with the name shortUrl
Chane database variable according to your enviroment


Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate
    
    
Install and run the npm

    npm i && npm run dev

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

# Code Explaination

When I analyse the proble then I want to make the system such that there should be less amount of efforts and whole application should be made in the less time and after reasearching I found there are many package available for the hasing the url.

So As per the requirement I got Short-url package and I went to implement it.

## Package

I have use the package [short-url](https://github.com/ash-jc-allen/short-url#readme)
- 


## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

----------
