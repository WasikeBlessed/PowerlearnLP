<?php

session_start();

if (isset($_SESSION['reset_token'])) {
  $token = $_SESSION['reset_token'];

  if ($_SERVER['REQUEST
