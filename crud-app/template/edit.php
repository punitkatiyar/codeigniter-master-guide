<div class="container my-2 border">
    <div class="row">
        <div class="col-lg-9">
            <div class="display-3 txt-primary text-center">Welcome to CI CRUD App</div>
            <form method="post">
                <div class="row">
                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Name</label>
                        <input type="text" class="form-control" name="uname" placeholder="First name"
                            aria-label="First name" value="<?php echo @$arr['uname'];?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" name="ucity" id="inputCity">
                </div>
                <div class="col-md-12">
                    <label for="inputCity" class="form-label">Course</label>
                    <select class="form-select" name="ucourse" aria-label="Default select example">
                        <option selected>select Course</option>
                        <option value="html">HTML</option>
                        <option value="css">CSS</option>
                        <option value="bootstrap">BOOTSTRAP</option>
                        <option value="php">PHP</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="uemail" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="upass" id="exampleInputPassword1">
                </div>

                <input type="submit" class="btn btn-primary" name="godata" value="Update data">
            </form>
            <table border="1">
                <?php
                    foreach($arr as $key)
                    {
                    ?>
                <tr>
                    <td><?php echo $key['uid']?></th>
                    <td><?php echo $key['uname']?></td>
                    <td><?php echo $key['uemail']?></td>
                    <td><?php echo $key['ucourse']?></td>
                    <td><?php echo $key['ucity']?></td>
                </tr>
                <?php
                    }
                    ?>
            </table>
        </div>
        <div class="col-lg-3">



        </div>
    </div>

</div>