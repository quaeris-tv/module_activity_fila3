# Module Chart
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