# php-instant-framework
This is a php micro framework based on slim to quickly set up a proyect ready to code and very simple to use.

This use Slim 3.0 and Blade as template manager.

Requires PHP 7.0 +

Current version 0.1

Improvements incoming, this is a basic version.

# install
Just clone the repository, run composer install, change the git remote to you own git repository and start to code!

```bash
git clone https://github.com/cobasesp/php-instant-framework.git

composer install

git remote set-url origin git@your.git.repo.example.com:user/repository2.git
```

# API purposes
If you just want to use this framework as an API server, you optinally can:

    - Delete the app/views and app/cache folders
    - Delete the require of dependencies.php from index.php
    - Delete the blade library from composer.json