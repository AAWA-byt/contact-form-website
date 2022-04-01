<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/main.css">

    <meta property="og:title" content="Contact Form Website" />
    <meta property="og:url" content="https://www.github.com/AAWA-byt" />
    <meta property="og:description" content="A little contact form which you integrate into your website." />

    <title>Contact Form Website</title>
</head>
<body>

<center><br>
    <h1 class="style-1">Contact Form</h1><br><br>
    <form method="POST" action="/assets/php/contact-form.php" >
        <input name='name' required type='text' class="feedback-input" placeholder="Name" /><br />
        <input name='email' required type='email' class="feedback-input" placeholder="Email-Address" /><br />
        <textarea required name='message' rows='15' cols='40' class="feedback-input" placeholder="What do you want to tell us?"></textarea><br />
        <button type="submit" name="submit">Send</button>
    </form>
</center>

</body>
</html>
