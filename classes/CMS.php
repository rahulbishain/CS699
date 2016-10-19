<?php

class CMS {
  var $host;
  var $username;
  var $password;
  var $database;

  public function display_public() {
    $q = "SELECT * FROM cms_table ORDER BY created DESC LIMIT 3";
    $r = mysql_query($q);
    echo "I am in display public page";

    if ( $r !== false && mysql_num_rows($r) > 0 ) {
      while ( $a = mysql_fetch_assoc($r) ) {
        $title = stripslashes($a['title']);
        $bodytext = stripslashes($a['bodytext']);

        $entry_display .= <<<ENTRY_DISPLAY

    <h2>$title</h2>
    <p>
      $bodytext
    </p>

ENTRY_DISPLAY;
      }
    } else {
      $entry_display = <<<ENTRY_DISPLAY

    <h2>This Page Is Under Construction</h2>
    <p>
      No entries have been made on this page. 
      Please check back soon, or click the
      link below to add an entry!
    </p>

ENTRY_DISPLAY;
    }
    $entry_display .= <<<ADMIN_OPTION

    <p class="admin_link">
      <a href="{$_SERVER['PHP_SELF']}?admin=1">Add a New Entry</a>
    </p>

ADMIN_OPTION;

    return $entry_display;    
  }

  public function display_admin() {
    return <<<ADMIN_FORM

    <form action="{$_SERVER['PHP_SELF']}" method="post">
      <label for="title">Title:</label>
      <input name="title" id="title" type="text" maxlength="150" />
      <label for="bodytext">Body Text:</label>
      <textarea name="bodytext" id="bodytext"></textarea>
      <input type="submit" value="Create This Entry!" />
    </form>
ADMIN_FORM;
  }

  public function write() {
    echo "Called THe Write function";
    echo $_POST['title'];
    if ( $_POST['title'] )
      $title = mysql_real_escape_string($_POST['title']);
    if ( $_POST['bodytext'])
      $bodytext = mysql_real_escape_string($_POST['bodytext']);
    if ( $title && $bodytext ) {
      echo "hello";
      $created = time();
      $sql = "INSERT INTO cms_table VALUES('$title','$bodytext','$created')";
      return mysql_query($sql);
    } else {
      return false;
    }    
  }

  public function connect() {
		echo "Welcome";
    mysql_connect($this->host,$this->username,$this->password) or die("Could not connect. " . mysql_error());
    mysql_select_db($this->database) or die("Could not select database. " . mysql_error());

    return $this->CreateTable();
  }

  private function CreateTable() {
    $sql = <<<MySQL_QUERY

        CREATE TABLE IF NOT EXISTS cms_table (
            title	VARCHAR(150),
            bodytext	TEXT,
            created	VARCHAR(100)
    )

MySQL_QUERY;

    return mysql_query($sql);    
  }
}

?>
