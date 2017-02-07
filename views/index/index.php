<h1>Index</h1>

<p>
This is the main page welcome!
<?php
  $sp = "&nbsp;";
  $userid = Session::get('userid');
  foreach($this->userlist as $key => $value) {
    if ($userid == $value['userid']) {
      echo '<div id="homelist">';
      echo 'Name'.$sp.$sp.' = '.$value['login'] . '<br>';
      echo 'Userid'.$sp.$sp.'= '.$value['userid'] . '<br>';
      echo 'Role'.$sp.$sp.$sp.$sp.' = '.$value['role'];
      echo '</div>';
    }
  }
  ?>
</p>
