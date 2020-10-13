<?php
?>


<div class="container mt-5 text-center">
    <form action="/login/auth" method="post">
        <div class="form-group">
            <input type="text" name="username" value="<?php if (isset($_POST['username'])) echo htmlspecialchars($_POST['username'])  ?>" class="form-control w-50 mx-auto"  tabindex="1">
            <div class="alert-danger mx-auto w-50">
                <?php echo $pageData['username'] ?? ''; ?>
            </div>
        </div>
        <div class="form-group">
            <input type="password" value="<?php if (isset($_POST['password'])) echo htmlspecialchars($_POST['password'])  ?>" name="password" class="form-control w-50 mx-auto"  tabindex="2">
            <div class="alert-danger mx-auto w-50">
                <?php echo $pageData['password'] ?? ''; ?>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary" tabindex="3">Login</button>
        <div class="text-center">
            <h4><?php echo $pageData['loginMessage'] ?? '' ; ?></h4>
        </div>
    </form>
</div>
