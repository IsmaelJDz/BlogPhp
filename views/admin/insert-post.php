<!DOCTYPE html>
<html>
    <head>
        <meta lang="es">
        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog Title</h1>
                </div>
            </div>
            <div class="row">

                <div class="col-md-8">
                    <h2>New Post</h2>
                    <p>
                        <a class="btn btn-default" href="<?php echo BASE_URL; ?>admin/posts">Back</a>
                    </p>

                    <?php

                        if (isset($result) && $result) {
                            echo '<div class="alert alert-success">Post Saved</div>';
                        }

                     ?>

                    <form method="post">
                        <div class="form-group">
                            <label for="inputTitle">Title</label>
                            <input type="text" class="form-control" name="title" id="inputTitle">
                        </div>

                        <textarea name="content" class="form-control" rows="8" cols="80" id="inputContent"></textarea></br>

                        <input class="btn btn-primary" type="submit" value="Save">
                    </form>

                </div>
                <div class="col-md-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <footer>
                        This is a footer
                        <a href="<?php echo BASE_URL; ?>admin">Admin Panel</a>
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
