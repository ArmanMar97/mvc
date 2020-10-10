<?php
?>

<div class="container">
    <h2 class="text-center">Leave your feedback</h2>
    <form action="/contact/submit" method="post">
        <div class="form-group">
            <input type="text" name="first_name" class="form-control border-left-0 border-right-0 border-top-0" value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name'])  ?>" placeholder="First Name"  tabindex="1">
            <div class="alert-danger">
                <?php
                echo $pageData['first_name'] ?? '';
                ?>
            </div>
        </div>
        <div class="form-group">
            <input type="text" name="last_name" class="form-control border-left-0 border-right-0 border-top-0" value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name'])  ?>" placeholder="Last Name" tabindex="2">
            <div class="alert-danger">
                <?php echo $pageData['last_name'] ?? ''; ?>
            </div>
        </div>
        <div class="form-group">
            <input type="text" name="email" class="form-control border-left-0 border-right-0 border-top-0" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email'])  ?>"  placeholder="Email" tabindex="3">
            <div class="alert-danger">
                <?php echo $pageData['email'] ?? ''; ?>
            </div>
        </div>
        <div class="form-group">
            <textarea class="form-control border-left-0 border-right-0 border-top-0" name="message" rows="4" placeholder="Message" tabindex="4"></textarea>
            <div class="alert-danger">
                <?php echo $pageData['message'] ?? ''; ?>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary" id="submitBtn" tabindex="5">Send</button>
        <div class="text-center">
            <h4><?php echo $pageData['dbMessage'] ?? '' ; ?></h4>
        </div>
    </form>
</div>

<script src="/assets/js/form.js"></script>
