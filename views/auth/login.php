<?php include('views/partials/header.php')?>
    <form action="/login" method="POST">
        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input class="input" type="email" placeholder="Email" name="email">
            </div>
        </div>
        <div class="field">
            <label class="label">Password</label>
            <div class="control">
                <input class="input" type="password" placeholder="password" name="password">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <input type="submit" class="button is-primary" value="Login">
            </div>
        </div>
    </form>
<?php include('views/partials/footer.php')?>