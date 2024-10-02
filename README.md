# Module Activity
[![Latest Version on Packagist](https://img.shields.io/packagist/v/laraxot/module_activity_fila3.svg?style=flat-square)](https://packagist.org/packages/laraxot/module_activity_fila3)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/laraxot/module_activity_fila3/run-tests?label=tests)](https://github.com/laraxot/module_activity_fila3/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/laraxot/module_activity_fila3/Check%20&%20fix%20styling?label=code%20style)](https://github.com/laraxot/module_activity_fila3/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/laraxot/module_activity_fila3.svg?style=flat-square)](https://packagist.org/packages/laraxot/module_activity_fila3)

A dedicated module that allows users to efficiently monitor and manage their daily activities. The project's goal is to help users stay productive, track their progress, and better manage their time.

## Main Features

- **Task Management**: Create, edit, and delete tasks.
- **Progress Tracking**: Track the progress of your daily, weekly, or monthly activities.
- **Notifications**: Receive reminders for upcoming or overdue tasks.
- **Statistics**: View statistics on your completed activities over time.

## Prerequisites
- php v8+
- laravel

## Add Module to the Project Base
Inside the `laravel/Modules` folder:

```bash
git submodule add https://github.com/laraxot/module_activity_fila3.git Activity
```

## Verify the Module is Active
```bash
php artisan module:list
```
If necessary, enable it:
```bash
php artisan module:enable Activity
```

## Run the Migrations
```bash
php artisan module:migrate Activity
```
