</body>


<section class="footer">
<div class="container-fluid">
    <article>
    <center><h2 class="Primary-title"> Join our list! </h2>
        <?php
            $url = $_SERVER['REQUEST_URI'];
            $url = str_replace('/', '', $url);
            $url = str_replace('.php', '', $url);
        ?>
        <form action="subscribirse.php?url=<?php echo $url ?>" method='post'>
            <input class="form-input" type="text" name="email" placeholder="Email address">
            <button class=primary-button> Subscribe </button>
        </form>
    <p id="copyright-text"> ®ComercioElectronico 2019</p>
    </center>
    </article>
</div>
</section>





</html>