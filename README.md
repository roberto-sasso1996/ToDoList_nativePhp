## Progetto
Picolla ToDoList fatta interamente con Laravel e Livewire. Ed il supporto di nativePhp per renderla un app desktop

## Per clonare il progetto
```
git clone chiave ssh
```
``` 
composer install
``` 
``` 
npm install
``` 
``` 
cp .env.example .env
``` 
``` 
php artisak key:generate
``` 
``` 
php artisan migrate
``` 

## Per usare il progetto
- npm run dev
- php artisan native:serve

## Attenzione
- per utilizzare il progetto in locale utilizzare la versione di php 8.1
- settare bene nell'env il path del DB

# Per creare l'app 
- php artisan native:build
