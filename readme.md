# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


Clone the repository

    git clone https://github.com/ruaanc/Instagram-Back-End.git

Switch to the repo folder

    cd Instagram-Back-End

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Generate a new JWT authentication secret key

    php artisan jwt:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone https://github.com/ruaanc/Instagram-Back-End.git
    cd Instagram-Back-End
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan jwt:generate 
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

----------


<h1>About Project</h1> 

<h2>Objective</h2>

<p>The purpose of this repository is to store the code and make it easier to manage Instagram Clone Backend settings for the web.</p>

<h2>Technologies Used</h2>
<ul> 
    <li>Laravel 5.8</li> 
    <li>MySql</li> 
</ul>

<h2>Implementation</h2>

<h3>Expected Implementation</h3>
<ul> 
    <li>Post</li> 
    <li>Register</li> 
    <li>Login</li> 
    <li>Like</li>
    <li>Comment</li>
    <li>Feed</i>
    <li>Deploy to Container Docker</li>
</ul>

<h3>Current Implementation</h3>
<ul> 
    <li>Post</li>  
    <li>Like</li>
    <li>Feed</li>
</ul>

<h2>Routes</h2>
<ul> 
    <li>GET</li>  
       <ul> 
        <li>GET ALL: http://localhost:8000/api/posts</li>  
        <li>GET BY ID: http://localhost:8000/api/posts/{id}</li>
       </ul>
    <li>POST</li>
       <ul> 
        <li>POST: http://localhost:8000/api/posts</li>  
        <li>LIKES: http://localhost:8000/api/posts/likes/{id}</li>
       </ul>
    <li>PUT</li>
       <ul> 
        <li>PUT BY ID: http://localhost:8000/api/posts/{id}</li>
       </ul>
    <li>DELETE</li>
       <ul>
        <li>DELETE BY ID: http://localhost:8000/api/posts/{id}</li>
       </ul>
</ul>


<h1>Important: Test api with this Frontend Access -> https://github.com/ruaanc/Instagram-Front-End-Clone.</h1>
