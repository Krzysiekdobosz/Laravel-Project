
ENG
Prerequisites
=============

To run the project, you need to have installed:
- XAMPP (latest version)
- PHP 8.1
- Composer (latest version)
- Node.js and npm (latest version)
- Laravel (latest version)

Installation

1. Unpack the project folder into the `htdocs` directory in XAMPP.

2. Open the terminal and navigate to the project folder.

3. Install dependencies using Composer:
   composer install

   If you encounter installation issues, use the following commands in the terminal:
   Remove-Item -Recurse -Force vendor
   Remove-Item composer.lock
   composer install
   rm -rf node_modules
   npm install

4. Start the Laravel application server:
   php artisan serve

5. Start the frontend build process:
   npm run dev

Database
========

If the `php artisan migrate` command does not work properly, import the database manually.
Login
=====

You can log in using the example user credentials:

- User:
  - Email: test@gmail.com
  - Password: testtest

- Admin:
  - Email: admin@gmail.com
  - Password: adminadmin

Technologies Used
=================

- PHP 8.1
- JavaScript (latest version)
- XAMPP (latest version)
- Composer (latest version)
- npm (latest version)
- Laravel (latest version)

Running the Application
=======================

To run the application, follow the steps described in the "Installation" section.
---
---------------------------------------------------------------------
PL
Wymagania wstępne
=================

Aby uruchomić projekt, potrzebujesz zainstalowanego:
- XAMPP (najnowsza wersja)
- PHP 8.1
- Composer (najnowsza wersja)
- Node.js oraz npm (najnowsza wersja)
- Laravel (najnowsza wersja)

Instalacja
==========

1. Wypakuj folder projektu do katalogu `htdocs` w XAMPP.

2. Otwórz terminal i przejdź do folderu projektu.

3. Zainstaluj zależności przy użyciu Composera:
   composer install

   Jeśli napotkasz problemy z instalacją, użyj poniższych komend w terminalu:
   Remove-Item -Recurse -Force vendor
   Remove-Item composer.lock
   composer install
   rm -rf node_modules
   npm install

4. Uruchom serwer aplikacji Laravel:
   php artisan serve

5. Uruchom proces budowania frontendu:
   npm run dev

Baza danych
===========

Jeśli komenda `php artisan migrate` nie działa poprawnie, zaimportuj bazę danych ręcznie.

Logowanie
=========

Możesz zalogować się przy użyciu przykładowych danych użytkowników:

- Użytkownik:
  - Email: test@gmail.com
  - Hasło: testtest

- Administrator:
  - Email: admin@gmail.com
  - Hasło: adminadmin

Użyte technologie
=================

- PHP 8.1
- JavaScript (najnowsza wersja)
- XAMPP (najnowsza wersja)
- Composer (najnowsza wersja)
- npm (najnowsza wersja)
- Laravel (najnowsza wersja)

Uruchomienie
============

Aby uruchomić aplikację, wykonaj kroki opisane w sekcji "Instalacja".
