<div class="center">
    <main class="container">
        <h2>Contact Form</h2>
        <form name="contactForm" id="contactForm" action="<?=DIRPAGE.'contact/saveMessage'?>" method="POST">
            <div class="input-field">
                <input type="text" name="name" id="name" placeholder=" ">
                <label class="input-label" for="name">Name</label>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="email" name="email" id="email" placeholder=" ">
                <label class="input-label" for="email">E-mail</label>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="phone" id="phone" placeholder=" ">
                <label class="input-label" for="phone">Phone</label>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                <label class="textarea-label" for="message">Message</label>
                <div class="underline"></div>
            </div>

            <input type="submit" value="Continue">
        </form>
    </main>
</div>