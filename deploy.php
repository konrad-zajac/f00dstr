<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'my_project');

// Project repository
set('repository', 'git@domain.com:username/repository.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);

// Hosts
host('domain.com')
	->stage('production')
    ->set('deploy_path', '~/{{pplication}}');    
    
// Tasks
task('pwd', function () {
$result = run('pwd');
writeln("Current dir: $result");
});

task('test', function () {
writeln('Hello world');
});

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

