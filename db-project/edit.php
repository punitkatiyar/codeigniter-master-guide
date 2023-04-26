<div class="row my-2">
    <div class="col-md-4">
    <form method="post">
    <?php    
    foreach($arr as $key)
    {
    ?>
        <input type="hidden" name="id" value="<?= $key['id']?>">
        <input type="text" name="name" placeholder="Enter Your Name" value="<?= $key['name']?>"  class="form-control mb-2" required>
        <input type="email" name="email" placeholder="Enter Your Email" value="<?= $key['email']?>"  class="form-control mb-2" required>
        <input type="text" name="password" placeholder="Enter Your Password" value="<?= $key['password']?>"  class="form-control mb-2" required>
        <input type="submit" name="update" value="update" class="form-control mb-2">
    <?php
        }
    ?>
    </form>
    </div>
</div>