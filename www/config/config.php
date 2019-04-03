<?php

/**
 * Configuration for database connection
 *
 */

/*$host       = "172.17.0.2";*/
$host       = "skokala.cquv385gs251.us-west-2.rds.amazonaws.com";
$username   = "root";
$password   = "newpassword";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );