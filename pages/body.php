<div class="container">
    <h2 class="center-align col s12">Sébastien Mandaba</h2>
    <div class="row">
        <div class="col s12 m8 offset-m2">
            <ul class="tabs">
                <li class="tab col s3"><a href="#test1" class="active black-text">Qui suis-je?</a></li>
                <li class="tab col s3"><a class="black-text" href="#test2">Portfolio</a></li>
                <li class="tab col s3"><a href="#test3" class="black-text">Blog</a></li>
                <li class="tab col s3"><a href="#test4" class="black-text">Contact</a></li>
            </ul>
        </div>
        <!-- FIRST TAB -->
        <?php require_once('whoami.php'); ?>
        <!-- SECOND TAB -->
        <?php require_once('portfolio.php'); ?>
        <!-- THIRD TAB -->
        <?php require_once('blog.php'); ?>
        <!-- FOURTH TAB -->
        <?php require_once('contact.php'); ?>
    </div>
</div>