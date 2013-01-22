Laravel-4-Disqus v0.0.1
====================

Laravel-4-Disqus is a testing library born out of Disqus Bundle, by Isaak Mogetutu[https://github.com/mogetutu/laravel-disqus].

##Installation

Add `Durenk/Disqus` to `composer.json`:

```javascript
{
    "require": {
        "Durenk\Disqus": "dev-master"
    }
}
```

Add `'Durenk\Disqus\DisqusServiceProvider'` and `'Disqus' => 'Durenk\Disqus\Facades\Disqus'` to `app/config/app.php`

```php
'providers' = array(
    ...
    'Durenk\Disqus\DisqusServiceProvider',
    ...
);

[...]

'aliases' = array(
    ...
    'Disqus' => 'Durenk\Disqus\Facades\Disqus',
    ...
);
```