<?php 
require_once('../database/Database.php');
require_once('../interface/iTransaction.php');
class Transaction extends Database implements iTransaction {

}//end transaction
$transaction = new Transaction();//istance
//End of the file Transaction