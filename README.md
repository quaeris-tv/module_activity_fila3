# Module Activity
[![Latest Version on Packagist](https://img.shields.io/packagist/v/laraxot/module_activity_fila3.svg?style=flat-square)](https://packagist.org/packages/laraxot/module_activity_fila3)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/laraxot/module_activity_fila3/run-tests?label=tests)](https://github.com/laraxot/module_activity_fila3/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/laraxot/module_activity_fila3/Check%20&%20fix%20styling?label=code%20style)](https://github.com/laraxot/module_activity_fila3/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/laraxot/module_activity_fila3.svg?style=flat-square)](https://packagist.org/packages/laraxot/module_activity_fila3)

Modulo dedicato alla gestione delle attività

## Aggiungere Modulo nella base del progetto
Dentro la cartella laravel/Modules

```bash
git submodule add https://github.com/laraxot/module_activity_fila3.git Activity
```

## Verificare che il modulo sia attivo
```bash
php artisan module:list
```
in caso abilitarlo
```bash
php artisan module:enable Activity
```

## Eseguire le migrazioni
```bash
php artisan module:migrate Activity
```
