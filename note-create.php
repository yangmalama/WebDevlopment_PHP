<?php

include 'Database.php';
include 'util.php';

$db = new Database();

// ----Handles note creation----
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $body = $_POST['body'];

  $errors = [];

  if (empty($body)) {
    $errors['body'] = "Body is required";
  }

  if (empty($errors)) {
    $db->query("INSERT INTO note (body) VALUES (:body)", [':body' => $body]);

    header('Location: notes.php');
  }
}
// ------------------------------

$navTitle = "Create Note";

include 'views/note-create-update.view.php';