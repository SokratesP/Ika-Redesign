<?php

function sanitize($data)
{
    // Sanitizes an input string to prevent SQL injection attacks

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}