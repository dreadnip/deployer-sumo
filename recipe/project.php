<?php

namespace Deployer;

desc('Get the project from the specified host.');
task(
    'sumo:project:init',
    function () {
        invoke('sumo:db:create-local');
        invoke('sumo:db:get');
        invoke('sumo:config:get');
        invoke('sumo:config:alter');
        invoke('sumo:files:get');
        invoke('sumo:assets:fix-node-version');
        invoke('sumo:assets:build');
    }
);
