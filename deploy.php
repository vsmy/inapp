<?php
namespace Deployer;

require 'recipe/laravel.php';
// Project name
set('application', 'inapp');

// Project repository
set('repository', 'https://github.com/vsmy/inapp.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', false);
set('ssh_multiplexing', false);

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts

host('intobi.app')
    ->user('deployer')
    ->identityFile('~/.ssh/deployerkey')
    ->set('deploy_path', '/var/www/html/test/inapp/inapp');


task('build', function () {
    run('cd {{release_path}} && npm run prod ');

});
set('shared_dirs', [
    'storage/app',
    'storage/framework/cache',
    'storage/framework/sessions',
    'storage/framework/views',
    'storage/logs',
    'public/uploads',
    'node_modules',
]);

// Общие файлы. Принцип точно такой же, как с папками
// В случае с Laravel нам необходимо сделать "общим" лишь один
// файл - .env
set('shared_files', ['.env']);

// Папки, в которые приложение должно иметь возможность
// писать данные. В нашем случае - это три директории
set('writable_dirs', ['storage', 'vendor', 'public/uploads' ]);

//set('http_user', '{ваш-пользователь}');
//set('composer_command', '/usr/local/bin/composer'); // Путь к расположение Composer'а

// Задача для деплоя. Установить NPM компоненты
task('deploy:install-npm', function() {
    run('cd {{release_path}} && npm i ');
});

// Ещё одна задача: скомпилировать все фронтенд файлы, в моём случае
// это делается через Grunt.js
task('deploy:compile-assets', function() {
    run('cd {{release_path}} && npm run prod');
});

// Выполнить миграции
//task('deploy:migrations', function() {
//    run('cd {{release_path}} && php artisan migrate --force');
//});

// Создать кеш для правил роутинга
task('deploy:create-route-cache', function() {
    run('cd {{release_path}} && php artisan route:cache');
});

// Создать кеш для файлов конфигураций
task('deploy:create-config-cache', function() {
    run('cd {{release_path}} && php artisan config:cache');
});

// Очистить все закешированные данные
task('deploy:clean-cached-data', function() {
    run('cd {{release_path}} && rm bootstrap/cache/*');
});

// Перезапустить PHP после успешного деплоя
task('reload:php-fpm', function() {
    run('sudo /usr/sbin/service php7.0-fpm restart');
});

task('deploy', [
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',            // Скачать последний код с гитхаба
    'deploy:shared',                 // Создать ссылки на общие данные
    'deploy:vendors',                // Обновить компоненты композера
    'deploy:clean-cached-data',      // Очистить все закешированные данные
    'deploy:create-route-cache',     // Создать кеш для правил роутинга
    'deploy:create-config-cache',    // Создать кеш для файлов конфигураций
    'deploy:install-npm',            // Обновить NPM компоненты
    'deploy:compile-assets',         // Скомпилировать фронтенд файлы
//    'deploy:migrations',             // Применить миграции
    'deploy:symlink',                // создать ссылку текущего релиза на этот
    'cleanup',                       // Удалить старые релизы
])->desc('Deploy your project');

after('deploy', 'success');

// После деплоя перезапустим php
after('deploy', 'reload:php-fpm');

// После отката на прошлый релиз - тоже перезапустим его
after('rollback', 'reload:php-fpm');



