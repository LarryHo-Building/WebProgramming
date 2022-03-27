<!DOCTYPE html>
<head>
    <title>Contact</title>
</head>
<html>
<header>
    <h1>Josh Thomas</h1>
    <link rel='stylesheet' href='style.css' type='text/css' />
</header>

<script src='script.js'></script>

<nav>
<a href="index.php">Home</a>
<a href="contact.php">Contact</a>
<a href="shop.php">Shop</a>
</nav>

<main>
    <h2>Contact</h2>
    <p>This is where you can contact me about presenting at events you are planning.</p>
    <form id='contact' action='https://titan.csit.rmit.edu.au/~e54061/wp/processing.php' method='post'>
        <div class='field'><label>First Name:</label><input type='text' name='firstname' pattern="[A-Z][a-z]{1,20}" placeholder='First Name' required></div>
        <div class='field'><label>Last Name:</label><input type='text' name='lastname' pattern="[A-Z][a-z]{1,20}" placeholder='Last Name' required></div>
        <div class='field'><label>Email Address:</label><input type='email' name='email' placeholder='Email Address' required></div>
        <div class='field'><label>Phone Number: </label><input type='tel' name='phone' pattern='[0-9+\(\)]{8,15}'placeholder='(00)00000000' required></div>
        <div class='field'><label>Event Date: </label><input type='date' name='eventdate' required></div>
        <div class='field'><label>Event Time: </label><input type='time' name='eventtime'></div>
        <div class='field'><label>Event Flexibility </label><input type='range' name='eventflexibility' min='0' max='2' value='1' onchange='updateFlexibility(value)'>
        <p id='output'>Indicate how flexible the requested appearance date is</p></div>
        <div class='field'><label> Location: </label><input type='text' name='eventlocation' placeholder='Event Location'></div>
        <div class='field'><label>Event Description:</label><textarea name='eventdescription' cols='40' rows='4'> </textarea></div>
        <div class='field'><label>Performance Required:</label><select name='performance'>
                                <option value='' selected>-None-</option>
                                <option value='MC'>MC</option>
                                <option value='comedy'>Comedy Spot</option>
                                <option value='full'>Full Show</option>
                                <option value='other'>Other</option>
        </select></div>
        
        <div class='submit'><input type='submit' value='Submit' /></div>

    </form>

</main>

<footer>
    <p>Copyright &copy; 2016 Backslash</p>

    <a href='https://twitter.com/joshthomas87'>
        <img src='https://cdn3.iconfinder.com/data/icons/social-icons-5/607/Twitterbird.png' alt'Twitter page' style='width:30px; height:30px;'></a>
        <a href='https://www.facebook.com/officialjoshthomas/'>
            <img src='https://www.seeklogo.net/wp-content/uploads/2013/11/facebook-flat-vector-logo-400x400.png' alt'Facebook page' style='width:30px; height:30px;'></a>
            <a href='https://www.instagram.com/joshthomas87/'>
                <img src='https://www.seeklogo.net/wp-content/uploads/2016/05/instagram-logo-vector-download-400x400.jpg' alt'Instragram' style='width:30px; height:30px;'></a>
                <a href='http://joshthomas87.tumblr.com/'>
                    <img src='https://secure.assets.tumblr.com/images/logo_page/img_logo_bluebg_2x.png' alt'Tumblr page' style='width:30px; height:30x;'></a>
    </a>
</footer>

</body>
</html>