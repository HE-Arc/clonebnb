# Projet He-Arc - Développement web  
## Description  
Buzz est une plateforme payante de réservation et de location d'objets en toute genre, allant d'une voiture tout près de chez vous à un appartement de l'autre côté de la Terre. Les utilisateurs ont la possibilité de mettre en location ou de louer des objets. Tous les objets en location sont organisés sous forme de catégories afin de simplifier la recherche des utilisateurs.

## Installation   
`$ composer install`  
`$ composer update`  
créer une nouvelle base de données    
`$ copier le fichier .env.example en .env et modifier DB_DATABASE, DB_USERNAME et DB_PASSWORD`   
`$ php artisan key:generate`   
`$ php artisan migrate`  
`$ php artisan db:seed`
