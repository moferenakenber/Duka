

<form action="/custumer" method="post">
    @csrf
    <label for="firstname">First name</label><br>
    <input type="text" id="firstname" name="firstname" value="Abebe"><br>
    <label for="lastname">Last name</label><br>
    <input type="text" id="lastname" name="lastname" value="Balcha"><br>
    <input type="submit" value="Submit">

</form>
