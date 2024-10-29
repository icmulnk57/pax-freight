<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = json_decode(file_get_contents("php://input"), true);


    if (isset($data['tracking'])) {
        $trackingNumber = $data['tracking'];

        $url = 'https://app.shipglobal.in/apiv1/tools/tracking';
        $username = 'demo@example.com';
        $password = 'Demo@123';


        $auth = 'MTd0cmFja0BzaGlwZ2xvYmFsLmluOlV0XXlrUCo4VTF2MGU1Tg==';


        $headers = [
            'Authorization: Basic ' . $auth,
            'Content-Type: application/json',
        ];


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, true);

        $payload = json_encode(['tracking' => $trackingNumber]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);


        $response = curl_exec($ch);


        if (curl_errno($ch)) {
            echo json_encode(['error' => curl_error($ch)]);
        } else {

            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if ($httpCode == 200) {
                echo $response;
            } else {
                echo json_encode(['error' => 'Unexpected response: ' . $response]);
            }
        }

        curl_close($ch);
    } else {
        echo json_encode(['error' => 'Tracking number not provided']);
    }
} else {
    echo json_encode(['error' => 'Invalid request method']);
}
?>