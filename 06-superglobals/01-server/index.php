<?php
// Common server variables:
// $requestMethod = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : '';
$requestMethod = $_SERVER['REQUEST_METHOD'] ?? ''; // kun method a call korechi seta amak dibe like GET, POST
$serverProtocol = $_SERVER['SERVER_PROTOCOL'] ?? ''; // ami ki protocol use kortechi seta like HTTPS or HTTP
$serverName = $_SERVER['SERVER_NAME'] ?? ''; // localhost or your domain name
$serverPort = $_SERVER['SERVER_PORT'] ?? ''; // port number 8080 or your port
$serverSoftware = $_SERVER['SERVER_SOFTWARE'] ?? ''; // software name will give
$serverAdmin = $_SERVER['SERVER_ADMIN'] ?? ''; // server admin name like root or admin
$documentRoot = $_SERVER['DOCUMENT_ROOT'] ?? ''; // which file stay this index.php without file name
$scriptFilename = $_SERVER['SCRIPT_FILENAME'] ?? ''; // it'll give me full file name with root file
$scriptName = $_SERVER['SCRIPT_NAME'] ?? ''; // only give file or script name
$phpSelf = $_SERVER['PHP_SELF'] ?? ''; // folder and file name
$remoteAddr = $_SERVER['REMOTE_ADDR'] ?? ''; //
$httpConnection = $_SERVER['HTTP_CONNECTION'] ?? ''; //
$httpHost = $_SERVER['HTTP_HOST'] ?? '';
$httpReferer = $_SERVER['HTTP_REFERER'] ?? '';
$httpUserAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
$queryString = $_SERVER['QUERY_STRING'] ?? ''; // only give you query parameter
$requestUri = $_SERVER['REQUEST_URI'] ?? ''; // with query and route

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Server Information</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <div class="container mx-auto p-8 bg-white shadow-md mt-10 rounded-lg">
    <h1 class="text-3xl font-semibold mb-4 text-center">Server Information</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Request Method:</strong>
        <?= $requestMethod ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Protocol:</strong>
        <?= $serverProtocol ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Name:</strong>
        <?= $serverName ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Port:</strong>
        <?= $serverPort ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Software:</strong>
        <?= $serverSoftware ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Admin:</strong>
        <?= $serverAdmin ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Document Root:</strong>
        <?= $documentRoot ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Script Filename:</strong>
        <?= $scriptFilename ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Script Name:</strong>
        <?= $scriptName ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">PHP Self:</strong>
        <?= $phpSelf ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Remote Addr:</strong>
        <?= $remoteAddr ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Connection:</strong>
        <?= $httpConnection ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Host:</strong>
        <?= $httpHost ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Referer:</strong>
        <?= $httpReferer ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">User Agent:</strong>
        <?= $httpUserAgent ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Query String:</strong>
        <?= $queryString ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Request Uri:</strong>
        <?= $requestUri ?>
      </div>
    </div>
</body>

</html>