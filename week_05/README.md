# PHP Web Development 1 - Class 5

## About

This repo contains some starter code from the PHP boilerplate repo with some additions for Web Development 1, class 5 (JS).

Documentation for the boilerplate is here: [https://github.com/danpaul/web_development_1_boilerplate](https://github.com/danpaul/web_development_1_boilerplate)

You need to run `docker-compose up` in this directory to get things working.

## Demos

The following files demonstrate the basics of the JS language:

- Basics: `app/public/assets/js/example-basics.js`
- Arrays and functions: `app/public/assets/js/example-arrays-functions.js`
- Classes: `app/public/assets/js/example-classes.js`

You can see the output of these scripts by visiting [http://localhost/js-demo](http://localhost/js-demo) and viewing the console.

To view specific files, you need to comment/uncomment the JS includes in this file: `app/public/views/partials/js_demo.php`

## Assignments

### Color Changer

There are two in-class assignment this week. The first handles the basics of event handling and DOM manipulation by using a set of sliders to manipulate the background color of the page. You will also need to add a script tag in the PHP file with a link to the JS file.

Key files:

- `app/public/views/partials/js_demo_slider.php`
- `app/public/assets/js/slider.js`

This is viewable at: [http://localhost/js-demo-slider](http://localhost/js-demo-slider)

#### Solutions (DON'T PEAK!)

- `app/public/views/partials/js_demo_slider_solution.php`
- `app/public/assets/js/slider-solution.js`

This is viewable at: [http://localhost/js-demo-slider-solution](http://localhost/js-demo-slider-solution)

### Todo List

The todo list application expands on handling DOM events in JS and modifying the DOM by adding elements via JS.

Key files:

- `app/public/views/partials/todo_app.php`
- `app/public/assets/js/todo.js`

This is viewable at: [http://localhost/todo](http://localhost/todo)

#### Solutions (DON'T PEAK!)

- `app/public/views/partials/todo_app_solution.php`
- `app/public/assets/js/todo-solution.js`

This is viewable at: [http://localhost/todo-solution](http://localhost/todo-solution)
