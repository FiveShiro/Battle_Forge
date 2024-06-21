<?php

include 'connection.php';
include 'register.php';
include 'login.php';
include 'commentfunction.php';
include 'logout.php';
include 'avatar.php';

// Establish database connection
$dbConnection = DatabaseConnection::getInstance();
$conn = $dbConnection->getConnection();

// Define page-action mappings
$pageActions = [
    'login.html' => 'handleRegister',
    'homepage.php' => 'handleLogin',
    'gamepage-tk8.php' => 'handleSetCommentsTekken8',
    'tk8' => 'handleGetCommentsTekken8',
    'gamepage-UNIB.php' => 'handleSetCommentsUNIB',
    'UNIB' => 'handleGetCommentsUNIB',
    'gamepage-sf6.php' => 'handleSetCommentssf6',
    'sf6' => 'handleGetCommentssf6',
    'gamepage-sf3.php' => 'handleSetCommentssf3',
    'sf3' => 'handleGetCommentssf3',
    'gamepage-GBFRVR.php' => 'handleSetCommentsGBFRVR',
    'GBFRVR' => 'handleGetCommentsGBFRVR',
    'gamepage-ggs.php' => 'handleSetCommentsggs',
    'ggs' => 'handleGetCommentsggs',
    'gamepage-kof.php' => 'handleSetCommentskof',
    'kof' => 'handleGetCommentskof',
    'index.html' => 'handleLogout'
];

// Handle GET requests
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['next_page'])) {
    $nextPage = $_GET['next_page'];
    if (isset($pageActions[$nextPage])) {
        $action = $pageActions[$nextPage];
        $action($conn);
    }
}

// Release database connection
DatabaseConnection::releaseConnection($conn);
