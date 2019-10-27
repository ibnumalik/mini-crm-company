# Mini-CRM

https://laraveldaily.com/test-junior-laravel-developer-sample-project/

This is an admin panel to manage companies and their employees.

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

## Advance Tasks
- [ ] Use Datatables.net library to show table – with our without server-side rendering
- [ ] Use more complicated front-end theme like AdminLTE
- [ ] Email notification: send email whenever new company is entered (use Mailgun or Mailtrap)
- [ ] Make the project multi-language (using resources/lang folder)
- [ ] Basic testing with phpunit (I know some would argue it should be the basics, but I disagree)
