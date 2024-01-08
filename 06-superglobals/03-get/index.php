<?php
// Add a query parameter to the URL in the browser's address bar:
// http://localhost:8000/?name=John

//var_dump($_GET['name']);
var_dump(htmlspecialchars(isset($_GET['name'])));