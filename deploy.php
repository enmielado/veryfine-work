<?php
/*
 * BASIC GIT DEPLOY RECIPE
 *
 * git
 * post-pull: delete files
 * non-atomic
 * sync non-version-tracked files/folders
 *
 *
 */

namespace Deployer;

require 'recipe/common.php';
require 'vendor/enmielado/deployer-veryfine/recipes/sync.php';
require 'vendor/enmielado/deployer-veryfine/recipes/oper.php';
require 'vendor/enmielado/deployer-veryfine/recipes/git.php';
require 'vendor/enmielado/deployer-veryfine/recipes/scratch.php';

/**
 *  CONFIG
 *
 */

// read hosts from config
inventory('deploy.yml');

// Project name
set('application', 'Very Fine Site');

set('default_stage', 'stage');

// The list of directories to be deleted after git pull
set('clear_paths', [

]);

// The list of directories to be synced
set('sync_items', [
    'web/test',
]);

// Tasks
desc('Deploy the site');
task('deploy', [
    'deploy:info', // echo info block
    'git:pull',
    'deploy:clear_paths', // delete specified dirs
    'sync:up', // choose non version controlled files & dirs to upload
    'success' // echo success
]);

desc('Test Task');
task('test', function () {

    writeln( 'Test task is working' );

});
