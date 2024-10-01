<?php
 if (!defined('BASEPATH')) {
     exit('No direct script access allowed');
 }
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the "Database Connection"
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
                 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the "default" group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

// Sesuaikan informasi login database
$db['default']['username'] = 'u610515881_newpos'; // Username dari database MySQL
$db['default']['password'] = 'NewPos@1'; // Gantilah dengan password MySQL Anda
$db['default']['database'] = 'u610515881_newpos'; // Nama database MySQL

// Hostname dan port untuk MySQL
$db['default']['hostname'] = '153.92.15.8'; // Gunakan 'localhost' jika MySQL ada di server yang sama, pastikan port sesuai
$db['default']['dbdriver'] = 'mysqli'; // Driver MySQLi

// Opsi koneksi lainnya
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = false;
$db['default']['db_debug'] = true; // Aktifkan untuk menampilkan pesan error saat debug
$db['default']['cache_on'] = false;
$db['default']['cachedir'] = '';

// Set character set untuk koneksi
$db['default']['char_set'] = 'utf8mb4'; // Sesuaikan untuk mendukung karakter yang lebih luas
$db['default']['dbcollat'] = 'utf8mb4_general_ci'; // Collation untuk utf8mb4


$active_group = 'default';
$active_record = true;

/* End of file database.php */
/* Location: ./application/config/database.php */
