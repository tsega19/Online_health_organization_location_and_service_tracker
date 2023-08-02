<!DOCTYPE html>
<html>
        <head>
            <meta cahrset="utf-8">
            <meta name="viewport" contents="width=device-width,intial-scale=1.0 ">
            <link rel="stylesheet"href="https://www.phptutorial.net/app/css/style.css">
            <title>REGISTER</title>
        </head>
        <main>
    <form action="register.php" method="post">
        <h1>ORGANIZATION REGISTER</h1>
        <div>
            <label for="username">CompanyName:</label>
            <input type="text" name="username" id="username">
        </div>
        
        <div>
            <label for="Company email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="Company Phone">Phone:</label>
            <input type="number" name="phone number" id="email">
        </div>      
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="password2">Confirm Password:</label>
            <input type="password" name="password2" id="password2">
        </div>
        <div>
            <label for="Company Location">Location:</label>
            <input type="Address" name="phone number" id="email">
        <div>
            <label for="username">TYPE:</label>
            <select>
            <option>General Hospital</option>    
            <option>Rifferal Hospital</option> 
            <option>Speciality Hospital</option> 
            <option>Teritary Hospital</option> 
            <option>Community Hospital</option>
            <option>Health care center</option>
            <option>Blood Bank</option> 
            <option>Family Planning</option> 
            <option>Pharmacy</option> 
            <option value="clinic">clinic </option> 
            

    </select>

           <!--  <input type="text" name="username" id="username"> -->
        </div>
        <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </label>
        </div>
        <button type="submit">Register</button>
        <footer>Already a member? <a href="login.php">Login here</a></footer>
    </form>
</main>



</body>

</html>