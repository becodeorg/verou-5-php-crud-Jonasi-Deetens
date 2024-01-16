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

// Update the naming if you'd like to work with another collection
$beyBladeRepository = new BeyBladeRepository($databaseManager);
$beyblades = $beyBladeRepository->get();

// Get the current action to execute
// If nothing is specified, it will remain empty (home should be loaded)
$action = $_GET['action'] ?? null;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $beyBladeRepository->create();
}

// Load the relevant action
// This system will help you to only execute the code you want, instead of all of it (or complex if statements)
switch ($action) {
    case 'create':
        create();
        break;
    case 'edit':
        $beyblade = $beyBladeRepository->find($_GET['id'])[0];
        edit($beyblade);
        break;
    default:
        overview($beyblades);
        break;
}

function overview(array $beyblades)
{
    // Load your view
    // Tip: you can load this dynamically and based on a variable, if you want to load another view
    require 'overview.php';
}

function create()
{
    // TODO: provide the create logic
    require 'create.php';
}

function edit($beyblade)
{
    require 'edit.php';
}