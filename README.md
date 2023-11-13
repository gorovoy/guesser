# guesser
Checking an individual's luck
 
Adminer access:
server: mariadb

<h5>DB</h5>
Run mariadb container: docker-compose up. </br>
Static up is 172.18.0.2 

<h5>Telescope</h5>
/telescope/requests

<h4>Run dev enviroment</h4>
php artisan serve
docker-compose up


<h5>Artisan</h5>

Model:

php artisan make:model Question --migration  // + migration for model


Controllers: 

php artisan make:controller QuestionController
php artisan make:controller QuestionController --model=Question --resource --requests