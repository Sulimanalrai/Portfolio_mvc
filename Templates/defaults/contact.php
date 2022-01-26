<!-- contact section start -->
<section class='contact' id='contact'>
        <div class='max-width'>
            <h2 class='title'>Contact me</h2>
            <div class='contact-content'>
                <div class='column right'>  
                        <div class='row'>
                            <i class='fas fa-user'></i>
                            <div class='info'>
                                <div class='head'>Name</div>
                                <div class='sub-title'>Suliman Alrai</div>
                            </div>
                        </div>
                        <div class='row'>
                            <i class='fas fa-phone'></i>
                            <div class='info'>
                                <div class='head'>Telefoon</div>
                                <div class='sub-title'>0613866897</div>
                            </div>
                        </div>
                        <div class='row'>
                            <i class='fas fa-envelope'></i>
                            <div class='info'>
                                <div class='head'>Email</div>
                                <div class='sub-title'> 302938475@student.rocmondriaan.nl </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<div class="max-width">
            <div class="row">
<div class="col-12">
    <form class="form_container">
        <input id="name" class="input" name="name" type="text" placeholder="Naam" size="30"><br>
        <input id="email" class="input" name="email" type="text" placeholder="E-mail adres" size="30"><br>
        <input id="subject" class="input" name="subject" type="text" placeholder="Subject" size="30"><br>
        <textarea name="message" id="message" class="input" cols="30" rows="8"></textarea><br>
        <input id="btn" class="submite" type="submit" value="Send" name="submit">
    </form>
    

</div>
</div>
</div>
<div class="php_notif" style="margin: 0 auto; text-align:center">
    <?php

    if (isset($_GET['submit'])) {


        $sender = "";
        $body = "";
        $subject = "";
        if (isset($_GET['email'])) {
            $sender = $_GET['email'];
        }
        if (isset($_GET['message'])) {
            $sender = $_GET['message'];
        }
        if (isset($_GET['subject'])) {
            $subject = $_GET['subject'];
        }

        $to_email = "sulimanalrai@gmail.com";
        $headers = "From: $sender ";
        $result = mail($to_email, $subject, $body, $headers);

        if (!$result) {
            echo "<p style=color:red>Email successfully sent to:  $to_email...</p>";
        } else {
            echo "<p style=color:red>Email sending failed...</p>";
        }
    }



    ?>
</div>