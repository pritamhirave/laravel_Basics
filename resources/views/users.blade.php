<h1>User Login </h1>
{{$errors}}
<form action="users" method="get">
    @csrf
    <input type="text" name="username" placeholder="enter user id" /> <br></br>
    <input type="password" name="userpassword" placeholder="enter user Password" /><br></br>
    <button type="submit">Login</button><br></br>
</form>