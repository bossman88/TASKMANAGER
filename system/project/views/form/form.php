<?php

if(isset($_POST)) {
	createTask($task_name, $task_description);
}

?>

<form action="" method="post" >

<br>

<hr>

<p><em>Fill in the information below</em></p>

<hr>

<input type="text" name="task_name" required>

<br><br>

<input type="text" name="task_description" required>

<br><br>

<p><strong>Who will be responsible? </strong></p>
<input type="checkbox" name="user[1]" value="2"> Rutger <br>
<input type="checkbox" name="user[2]" value="1"> Vladimir <br>
<input type="checkbox" name="user[3]" value="3"> Sean <br>
<input type="checkbox" name="user[4]" value="4"> Kosta <br>

<br>
<br>

<input type="submit" name="submit">

</form>