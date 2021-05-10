<html>
<div id="login">
        <form action="login.php" class="login-form animate" method="POST">
        <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="avatar.png" alt="">
            <h2>Log in</h2>
            <label for="username">Username:</label>
            <input type="text" placeholder="Enter Username..." id="username" name="Username">
            <label for="password">Password:</label>
            <input type="password" placeholder="Enter password..." id="password" name="Password">
            <button class="btn" type="submit">Log in</button>
            <br><br>
            <button type="button" class="cancelbtn" onclick="document.getElementById('login').style.display='none'">Cancel</button>
            <button type="button" class="pswbtn" onclick="Login()">Forgot password?</button>
        </form>
        <script>
            var modal = document.getElementById('login');
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
}
</script>
    </div>
</html>