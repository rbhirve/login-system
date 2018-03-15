# How to run/test this application
Basic steps for installing and configuring application in your systerm 

Step 1

Copy the git repository address and clone it on your serve location var/www/html/
    
    git clone 'https://git_repository_address'

Step 2

Go to the login-system folder using  

    cd login-system

Step 3

Install composer and external dependancy using composer install
    
    composer install or
    composer update

Step 4

Create database name as [ loginSystem ] and put credential to .env (environment) file

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=loginSystem
    DB_USERNAME=xxxx
    DB_PASSWORD=xxxx
    
Step 5 

Run migration on your system

    php artisan migrate

Step 6 

Generate key for your application using following command

    php artisan key:generate
    
Step 7 

Finally, run the application using 

    php artisan serve
    
Go to the above ( http://127.0.0.1:8000/ ) ipaddress and you will get final output.
