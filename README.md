Laravel-4-Disqus v0.0.1
====================

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