<img src="icon.png" align="right" />

![Awesome](https://img.shields.io/badge/PostgreSQL-316192?style=flat&logo=postgresql&logoColor=white)
![Awesome](https://img.shields.io/badge/Laravel-FF2D20?style=flat&logo=laravel&logoColor=white)

# Wilayah Administrasi Indonesia

## Pre-installation
1. Create new database
2. Create new table with name "tbl_region"
3. Import file from "database" folder

## Run
1. From inside "api" folder of the project execute command `docker-compose up`
2. Then, run `docker exec -it api_php bash -c "./boot.sh"`
3. Done forget to adjust your .env file
4. Then, run `docker exec api_php php artisan migrate`

