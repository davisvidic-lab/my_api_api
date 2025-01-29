<?php

// Set the response content type to application/json
header('Content-Type: application/json');

// Function to generate API response
function getApiResponse() {
    // Registered email address (you can update this to be dynamic or pull from a config file)
    $registeredEmail = 'davidakinola26@gmail.com';
    
    // Get the current date and time in ISO 8601 format
    $currentDatetime = date('c'); // 'c' formats the date in ISO 8601
    
    // GitHub URL of the project (replace with your actual repository URL)
    $githubUrl = 'https://github.com/davisvidic-lab';
    
    // Create the response data in an associative array
    $response = array(
        'registered_email' => $registeredEmail,
        'current_datetime' => $currentDatetime,
        'github_url' => $githubUrl
    );
    
    // Return the response as JSON
    echo json_encode($response);
}

// Call the function to generate and return the response
getApiResponse();
