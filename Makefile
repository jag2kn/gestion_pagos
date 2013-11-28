

cache:
	sudo chown ticketadmin:www-data app/cache -R
	sudo chown ticketadmin:www-data app/logs -R
	sudo chmod g+rw app/cache -R
	sudo chmod g+rw app/logs/ -R
	sudo su www-data -c "php app/console cache:clear"
	sudo chown ticketadmin:www-data app/cache -R
	sudo chown ticketadmin:www-data app/logs -R
	sudo chmod g+rw app/cache -R
	sudo chmod g+rw app/logs/ -R


db:
	
	make cache
	php app/console doctrine:schema:drop --force
	php app/console doctrine:schema:create
	php app/console doctrine:fixtures:load --no-interaction
	make cache
