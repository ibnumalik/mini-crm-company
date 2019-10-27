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
- [ ] Store company logo in `storage/app/public` directory.
- [ ] Paginate companies/employees list to 10 entries per page.
