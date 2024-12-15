# PHP Web Development 1 - API

## About

This repo contains some starter code from the PHP boilerplate repo with some additions for the Web Development 1 API class.

Documentation for the boilerplate is here: [https://github.com/danpaul/web_development_1_boilerplate](https://github.com/danpaul/web_development_1_boilerplate)

You need to run `docker-compose up` in this directory to get things working.

## Setup

This demo expands on the article demo (basic database operations) by adding an API.

To quickly add the the article table to the development DB, you can copy the SQL code in `./article.sql` and run it in PHP my admin: [https://monosnap.com/file/bBfmTvStJWwWyKqnk1twyenhsacttJ](https://monosnap.com/file/bBfmTvStJWwWyKqnk1twyenhsacttJ)

After initializing the database, you can add a few test articles at: [http://localhost/article](http://localhost/article)

After that, you should be able to see JSON data getting returned from the API at: [http://localhost/api/articles](http://localhost/api/articles)

You can view the new article page, where article loading and creating are handled by JS at: [http://localhost/articles-js](http://localhost/articles-js)

Relevant files:

- Main markup file: `app\public\views\partials\articles_js.php`
- JS file: `app\public\assets\js\articles.js`
- API routes: `app\public\routes\api.php`
- API controller method: `app\public\controllers\ArticleController.php`
  - See the `ArticleController->createFromApi()` method
