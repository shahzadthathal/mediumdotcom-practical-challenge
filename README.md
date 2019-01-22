  

# Laravel Developer challenge.

> Build a Example.com clone with these features:  
Admin panel to post articles. 
Ability to add one or more photos to the article. 
Tag Articles Frontend to list and display article. 
Your application should consist of the followings.  
Database migrations and seeds (Use Faker library to create dummy data) 
CRUD and Resource Controllers 
Form Validation and Requests 
Use of VueJS / Jquery on frontend 
Tailwindcss as a CSS framework. 
Testing

## Quick Start

``` bash
# Install Dependencies
composer install

# Set DB Credentials 
in .env file

# Run Migrations
php artisan migrate

# Import Articles
php artisan db:seed

# If you get an error about an encryption key
php artisan key:generate
```

## Demo

### Client side
``` bash
http://localhost/mediumdotcom-practical-challenge/
```
### Admin side
``` bash
Username: admin@example.com
Password: serecet
http://localhost/mediumdotcom-practical-challenge/admin/dashboard
```
