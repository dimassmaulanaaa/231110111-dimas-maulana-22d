# MyBiodata Website
- XAMPP v3.3.0
- MySQL (MariaDB) v10.4.32
- PHP v8.2.12
- jQuery v3.7.1
- Bootstrap v5.3.6  

## Quick Installation
### 1. Place Repository to Server Directory
``` cmd
C:\xampp\htdocs\   (Windows)
/opt/lampp/htdocs/ (Linux/macOS)
```
### 2. Import Database
- `Create` a new database (db_my_biodata)
- Go to `Import` → Select the SQL file (db_my_biodata.sql)
### 3. Configure Database Connection
- Edit the configuration file if you are not using XAMPP (config/db.php):
``` php
<?php
$servername = "localhost";
$username = "root";         // Default XAMPP username
$password = "";             // Default XAMPP password (empty)
$dbname = "db_my_biodata";

$conn = mysqli_connect($servername, $username, $password, $dbname);
```
### 4. Verify Installation
- Start Apache and MySQL in XAMPP
- Access in your browser:
```
http://localhost/231110111-dimas-maulana-22d
```
