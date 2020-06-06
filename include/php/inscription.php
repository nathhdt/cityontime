<?php // Check if form was submitted:
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

    // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LcE8QAVAAAAAG3QXF3_Xrc7stagUp9Pi44pEC7P';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned:
    echo 'Score: '.$recaptcha->score;
    if ($recaptcha->score >= 0.5) {
        // Verified - send email
        echo "yes";
    } else {
        // Not verified - show form error
        echo "no";
    }

} ?>