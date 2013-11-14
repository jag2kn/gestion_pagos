

cache:
	sudo chown jag2kn:www-data app/cache -R
	sudo chown jag2kn:www-data app/logs -R
	sudo chmod g+rw app/cache -R
	sudo chmod g+rw app/logs/ -R
	sudo su www-data -c "php app/console cache:clear"

