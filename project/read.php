<?php include "templates/header.php"; ?>

    <h2>Find user based on Course</h2>

    <form method="post">
    	<label for="course">Course</label>
    	<input type="text" id="course" name="course">
    	<input type="submit" name="submit" value="View Results">
    </form>

    <a href="index.php">Back to home</a>

    <?php include "templates/footer.php"; ?>