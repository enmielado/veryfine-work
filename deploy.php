<?php
namespace Deployer;

require 'recipe/common.php';
require 'vendor/enmielado/deployer-veryfine/recipes/sync.php';
require 'vendor/enmielado/deployer-veryfine/recipes/oper.php';

/**
 *  CONFIG
 *
 */

// read hosts from config
inventory('deploy.yml');

// Project name
set('application', 'Very Fine Site');

set('default_stage', 'stage');

// The list of directories to be synced
set('sync_items', [
    'web/test',
    'web/plugins',
    'web/index-local.html'
]);

// Tasks
desc('Deploy the site');
task('deploy', [
    'deploy:info', // echo info block
    'sync:all', // sync all 'sync_items'
    'success' // echo success
]);

desc('Test Task');
task('test', function () {

    writeln( 'Test task is working' );

});
