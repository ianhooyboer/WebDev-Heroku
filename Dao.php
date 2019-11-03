<?php
require_once 'KLogger.php';
include ($_SERVER["DOCUMENT_ROOT"] . "/includes/arrays.php"); 

class Dao {

  //mysql://b8c562c114e95a:1ce332c6@us-cdbr-iron-east-05.cleardb.net/heroku_c799c9203bcbb61?reconnect=true

  private $host = 'us-cdbr-iron-east-05.cleardb.net';
  private $dbname = 'heroku_c799c9203bcbb61';
  private $username = 'b8c562c114e95a';
  private $password = '1ce332c6';
  private $logger;	 
  
  public function __construct() {
    $this->logger = new KLogger ( "dao_log.txt" , KLogger::INFO );
	//throw new Exception('in the Dao constructor');
  }

  public function getConnection() {
    try {
       $connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
    } catch (Exception $e) {
      echo print_r($e,1);
    }
    return $connection;
  }

   public function getGames() {
    $conn = $this->getConnection();
    try {
	//$sql = "select boardgame.name from user join bgCollection on user.ID = bgCollection.UserID join boardgame on bgCollection.bgID = boardgame.ID where username = testname";
	$sql = "select username from user";
    //return $conn->query("select comment_id, comment, date_entered  from comment order by date_entered asc", PDO::FETCH_ASSOC);
	return $conn->query($sql, PDO::FETCH_ASSOC);
	//echo $test->rowCount();
	//return $test;
	//$query = "select boardgame.name from user join bgCollection on user.ID = bgCollection.UserID join boardgame on bgCollection.bgID = boardgame.ID where username = testname";
	//$q = $conn->prepare($query);
	////$q->bindParam(":username", $user);
	//$q->execute();
	
	
	//select username, boardgame.name
	//from user join bgCollection on user.ID = bgCollection.UserID
	//		join boardgame on bgCollection.bgID = boardgame.ID
	
	
    } catch(Exception $e) {
      echo print_r($e,1);
      exit;

    }
  }
  
public function isValidUser($user, $pass)
{ 
		$conn = $this->getConnection(); 
		$sql = "select username, password from User where username = '" . $user . "'"; 
		$results = $conn->query($sql, PDO::FETCH_ASSOC);
		
		foreach($results as $res)
		{ 
			$hash = $res['password']; 
			if (password_verify($pass, $hash))
			{
				$userStatus['username'] = $user;
				return true;
			}
		}		 
		
		return false;  
} 
  
public function saveUser ($username, $pass, $email) 
{
	$conn = $this->getConnection();
	
	//TODO: verify that the username/email does not already exist
	
    $saveQuery = "insert into user(username, password, email) values (:username, :pass, :email)";
    $q = $conn->prepare($saveQuery);
	
    $q->bindParam(":username", $username);
	
	$hash = password_hash($pass, PASSWORD_DEFAULT);
	
	$q->bindParam(":pass", $hash); 
	$q->bindParam(":email", $email);
	
    return $q->execute();
}   

  /* public function deleteComment ($id) {
    $conn = $this->getConnection();
    $deleteQuery = "delete from comment where comment_id = :id";
    $q = $conn->prepare($deleteQuery);
    $q->bindParam(":id", $id);
    $q->execute();
  }
  */
}
