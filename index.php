<?php

// Require the correct variable type to be used (no auto-converting)
declare (strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/BeyBladeRepository.php';

$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();

// Get the current action to execute
// If nothing is specified, it will remain empty (home should be loaded)
$action = $_GET['action'] ?? null;

// Load the relevant action
// This system will help you to only execute the code you want, instead of all of it (or complex if statements)
switch ($action) {
    case 'create':
        create($databaseManager);
        break;
    case 'edit':
        edit($databaseManager);
        break;
    case 'remove':
        remove($databaseManager);
        break;
    default:
        overview($databaseManager);
        break;
}

function overview(DatabaseManager $databaseManager)
{
    $beyBladeRepository = new BeyBladeRepository($databaseManager);
    $beyblades = $beyBladeRepository->get();

    require 'overview.php';
}

function create(DatabaseManager $databaseManager)
{
    // TODO: provide the create logic
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $beyBladeRepository = new BeyBladeRepository($databaseManager);
        $beyBladeRepository->create();
        overview($databaseManager);
    } else require 'create.php';
}

function edit($databaseManager)
{
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $beyBladeRepository = new BeyBladeRepository($databaseManager);
        $beyBladeRepository->update();
        overview($databaseManager);
    } else {
        $beyBladeRepository = new BeyBladeRepository($databaseManager);
        $beyblade = $beyBladeRepository->find($_GET['id'])[0];
        require 'edit.php';
    }
}

function remove($databaseManager)
{
    $beyBladeRepository = new BeyBladeRepository($databaseManager);
    $beyBladeRepository->delete($_GET['id']);

    overview($databaseManager);
}