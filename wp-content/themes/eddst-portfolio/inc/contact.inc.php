<section id="contact">
    <div id="img-back" class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>MY <br><span><?php echo strtoupper(get_the_title($section->ID)); ?></span></h1>
            </div>
            <div class="col-lg-12">
                <?php if(!isset($_POST['message']) && !isset($_GET['status'])): ?>
                    <form method="post" action="#">
                        <?php wp_nonce_field('check_form', 'wp_nonce'); ?>
                        <input type="text" name="name" placeholder="Enter name" class="inputBasic" required>
                        <input type="email" name="mail" placeholder="Enter Email" class="inputBasic" required>
                        <input type="text" name="subject" placeholder="Subject" class="inputBasic" required>
                        <textarea name="message" placeholder="Enter your message" class="inputBasic"></textarea>
                        <input id="button" type="submit" name="submit" value="Submit">
                    </form>
                <?php elseif($_GET['status'] == 'send'): ?>
                    <p id="mail-send">MAIL SENT</p>
                <?php else: ?>
                    <p id="mail-send">ERROR, TRY AGAIN!</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>