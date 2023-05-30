<?php
define("DB_SERVER", "localhost");
define("DB_USERNAME", "inqkacom_iskandar123");
define("DB_PASSWORD", "iskandarhensem");
define("DB_NAME", "inqkacom_iqa_query");

# Connection
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

# Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
