<?php

//required for PHPMailer
date_default_timezone_set('Europe/London');

require_once 'lib/PHPMailer/PHPMailerAutoload.php';
require_once 'config.php';
require_once 'includes.inc';

$errors = checkCompulsoryFields($_POST, $requiredFieldsForStarter);

if(count($errors) > 0){
    echo "Please go back and fix errors below:";
    echo "<pre>";
    foreach($errors as $key){
        echo $requiredFieldsForStarter[$key] . " can not be empty. \n";
    }
    echo "</pre>";
    exit();
}

//Create a new PHPMailer instance
$email = new PHPMailer;

//Tell PHPMailer to use SMTP
$email->isSMTP();
$email->IsHTML(false);

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$email->SMTPDebug = 3;

//Ask for HTML-friendly debug output
$email->Debugoutput = 'html';

//set email server settings: username, password, port, authentication type
foreach ($emailServerSettings['default'] as $key => $value) {
    $email->$key = $value;
}

//Set who the message is to be sent from
$email->setFrom('robot@exampleserver.com');

//Set who the message is to be sent to
$email->addAddress('helpdesk@exampleserver.com');

//Set the subject line
$email->Subject = composeSubject();

//Set message body
$email->Body = composeMessage();

//send the message, check for errors
if (!$email->send()) {
    echo "There were issues with sending this form: " . $email->ErrorInfo;
} else {
    echo "Form was successfully submitted";
}


/**
 * Iterates through $_POST array and returns all values in form of  "parameter name -> corresponding value".
 * Pipes are here for data representation as table in Jira.
 * @return string
 */
function composeMessage()
{
    $message = NULL;
    foreach ($_POST as $key => $value) {
        if (!empty($value)) { //if user left input box empty do not include it in the message
            $message .= "|" . $key . "|" . htmlspecialchars($value) . "|" . PHP_EOL;
        }
    }
    return $message;
}

/**
 * Sets subject line to starter or leaver, e.g. "2015-02-24 Bob Marley (Starter)"
 * @return string
 */
function composeSubject()
{
    $formType = checkFormType();
    $fullName = " " . $_POST['name'] . " " . $_POST['surname'];

    if ($formType == 'starter') {
       return $_POST['start_date'] . $fullName . ' (Starter)';

    } elseif ($formType == 'leaver') {
      return $_POST['end_date'] . $fullName . ' (Leaver)';
    }
}

/**
 * Check if compulsory fields are empty
 * @param $submittedFields array of user submitted data
 * @param $requiredFields array of compulsory fields
 * @return array|string array of errors
 */
function checkCompulsoryFields($submittedFields, $requiredFields){
    $missingFields = NULL;
    foreach($submittedFields as $key => $value){ // iterate through data supplied by the user
        if(in_array($key , array_keys($requiredFields)) && empty($value)){ //check if user left any compulsory fields empty, if yes add key name to array
            $missingFields[] .=$key;
        }
    }
    return $missingFields;
}

/**Determines form type: Starter or Leaver
 * @return string Starter or Leaver
 */
function checkFormType(){
    if ($_POST['form-type'] == 'starter') {
        return "starter";
    } elseif ($_POST['form-type'] == 'leaver') {
        return "leaver";
    }
}