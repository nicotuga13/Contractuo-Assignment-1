<p align="center"><a href="https://gitlab.com/contractuo_public/assignment-project" target="_blank"><img src="https://www.contractuo.com/wp-content/uploads/2022/03/cropped-Contractuo-Logo.png" width="400"></a></p>

# The assignment

## Prerequisites

Below you’ll find some directions to setup the development environment and project.

1. Setup your development environment;

    - IDE of your choosing
    - PHP 8+
    - Composer
    - Node.JS

2. Checkout the current repository, install the dependencies with the following commands:

    - composer install
    - php artisan passport:keys
    - npm install

## Project details

The application is a basic Laravel application with Vuejs.

In terms of UI, we have installed and configured :

-   <a href="https://tailwindcss.com/" target="_blank">Tailwindcss</a>

Feel free to use it or just use custom css.

## The assignment

A user needs to be able to create tasks and view all the created tasks that belong to him/her.

### Requirements

#### Back end

-   Only admin users can create a task, the check should happen on the route level.
-   An exception should be thrown after 5 created tasks.

#### Front end

-   The application should have total of 3 pages.

    -   Dashboard ( landing page, we provide that)
    -   Index page for all tasks (you need to create )
    -   A page to create a task (you need to create )

-   Both pages need to be different vue components
-   Once the task is created you need to push it into the vuex store
-   The task index page needs to retrieve all the created tasks from the vuex store

## Once completed

When you complete the assignment you should create a new github repository, upload it and send us the link.
