<h1>User Login </h1>
<form action="users" method="Post">
    @csrf
    <input type="text" name="username" placeholder="enter user id" /> <br></br>
    <input type="password" name="userpassword" placeholder="enter user Password" />
    <button type="submit">Login</button>
</form>