build:
	make controller
	make view
	make migrate
controller:
	docker-compose exec app php artisan make:controller EixoController -r
	docker-compose exec app php artisan make:controller CursoController -r
	docker-compose exec app php artisan make:controller ProfessorController -r
	docker-compose exec app php artisan make:controller DisciplinaController -r
	docker-compose exec app php artisan make:controller DocenciaController -r
view:
	mkdir view
	touch index.blade.php && mv index.blade.php ./view
	touch create.blade.php && mv create.blade.php ./view
	touch edit.blade.php && mv edit.blade.php ./view
	touch show.blade.php && mv show.blade.php ./view
	
	cp -r view ./resources/views/area_eixos
	cp -r view ./resources/views/cursos
	cp -r view ./resources/views/professores
	cp -r view ./resources/views/disciplinas
	cp -r view ./resources/views/docencia

	rm -rf view
migrate:
	docker-compose exec app php artisan make:model AreaEixo -m
	docker-compose exec app php artisan make:model Curso -m
	docker-compose exec app php artisan make:model Professor -m
	docker-compose exec app php artisan make:model Disciplina -m
	docker-compose exec app php artisan make:model Docencia -m
	docker-compose exec app php artisan migrate
fresh:
	docker-compose exec app php artisan migrate:fresh
