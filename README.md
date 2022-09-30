ECF Athletice Sports


Video YouTube (in French) of the creation of this project :
....


Technical specification of the project

This project have (for the Back-End) :
- PHP 8.1
- XAMPP (with PhpMyAdmin & SQL)
- Symfony 6



For installing Athletice Sports you need :


- Composer 2.4.2
- PHP 8
- Scoop.sh :
 irm get.scoop.sh | iex
- Symfony 6 :
 scoop install symfony-cli
- XAMPP 3.0.0 (if you want PhpMyAdmin and sql directly)



You can clone the repository in your machine with the command :


git clone https://github.com/nixiz0/ECF-Athletice-Sports



To have the dependencies :


composer install



To establish your database :


Go into your .env and put your database (if you don't have a database you need to created one in XAMPP on your PhpMyAdmin)

And replacing the : DATABASE_URL="mysql://app:!ChangeMe!@127.0.0.1:5432/app?serverVersion=14&charset=utf8"

Then do the migrations (in your shell) :
symfony console doctrine:migrations:migrate



To start your serve :
symfony serve

To stop your serve :
symfony serve:stop
