# Mini-CRM

https://laraveldaily.com/test-junior-laravel-developer-sample-project/

This is an admin panel to manage companies and their employees.

## Getting Started

To get started with development of this project, you can follow this step:

1. Clone this project.
2. Run `composer install` and `npm install`
3. Run `php artisan serve`

### Easy start with Docker

Prefer docker to boot up application? Then follow this easy step.

1. Make sure you have run `composer install`.
2. Start app by running `./vessel start`.

That's it! You can open http://localhost to view the app.

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
