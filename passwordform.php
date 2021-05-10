<html>
<div id="changepassword">
    <form action="password.php" class="password-form animate" method="POST">
    <span onclick="document.getElementById('changepassword').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="avatar.png" alt="">
        <h2>Change your password</h2>
        <label for="mail">E-mail:</label>
        <input type="text" id="mail" name="mail">
        <label for="password_username">Username:</label>
        <input type="text" id="password_username" name="password_username">
        <label for="password1">New password:</label>
        <input type="password" id="password1" name="password1">
        <label for="password2">Repeat new password:</label>
        <input type="password" id="password2" name="password2">
        <label for="question">Security question:</label> <span id="security_question"></span>
        <input type="text" id="question" name="question"> 
        <button class="btn" type="submit">Change your password</button>
        <br><br>
        <button type="button" class="cancelbtn" onclick="document.getElementById('changepassword').style.display='none'">Cancel</button>
    </form>
</div>
</html>