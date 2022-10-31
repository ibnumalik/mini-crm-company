# Mini-CRM

https://laraveldaily.com/test-junior-laravel-developer-sample-project/

This is an admin panel to manage companies and their employees.

## Getting Started

To get started with development of this project, you can follow this step:

1. Clone this project.
2. Run `composer install` and `npm install`
3. Run `php artisan serve`

### Easy start with Docker

Prefer docker to boot up application? Then follow this easy step. The docker-compose in this project will need the following:

1. Traefik. It need to be on `web` networks. Or change the compose file with your own traefik network.
2. A running instance of mysql database in `mariadb_database` network. Or add mysql service in the compose if you need one.

If you don't want to use traefik, then just uncomment the ports in nginx service.

Run this in terminal to get up and running.

```
docker-compose up -d
```

That's it! You can open mini-crm.localhost or http://localhost:8082 to view the app.

## Tasks

- [x] Scaffold the login using laravel auth maker.
- [x] Seed user table with admin user.
- [x] Company.
  - [x] View company.
  - [x] Create company.
  - [x] Update company.
  - [x] Delete company.
- [x] Employee.
  - [x] View employee.
  - [x] Create employee.
  - [x] Update employee.
  - [x] Delete employee.
- [x] Database migration with default seed for companies and employee.
    - `php artisan migrate --seed`
- [x] Use generated resource controllers to handle companies and employees routes.
- [x] Store company logo in `storage/app/public` directory.
- [x] Paginate companies/employees list to 10 entries per page.
- [x] Use Laravel’s validation function, using Request classes
- [x] Use more complicated front-end theme like AdminLTE --> using [Star Admin Template](https://github.com/BootstrapDash/StarAdmin-Free-Vue-Admin-Template)
- [x] Use Datatables.net library to show table – with our without server-side rendering --> Use vue bootstrap data table.
- [x] Email notification: send email whenever new company is entered (use Mailgun or Mailtrap) --> Use Mailgun

## Advance Tasks

- [ ] Make the project multi-language (using resources/lang folder)
- [ ] Basic testing with phpunit (I know some would argue it should be the basics, but I disagree)
