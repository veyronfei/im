<?php require_once 'helpers/header.php'; ?>
<div class="container">
    <div id="main">
        <div class="not-found">
            <strong>404</strong>
            <h1>The page cannot be found.</h1>
            <hr>
            <form action="?" method="post">
                    <div class="container-inline">
                        <div class="input-append">
                            <input placeholder="Search" type="text" name="search_block_form" >
                            <input type="submit" class="btn">
                        </div>
                    </div>
            </form>

            <p>
                Please use search box or <a href="index.html">return back</a>
            </p>
        </div>
    </div>
</div>
<?php require_once 'helpers/footer.php'; ?>