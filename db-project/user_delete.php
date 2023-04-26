
<table border="1" class="table">    
<?php
foreach($arr as $key)
{
    ?>
    <tr>
        <td><?php echo $key['name']?></td>
        <td><?php echo $key['email']?></td>
        <td><?php echo $key['password']?></td>
        <td><a href="?id=<?= $key['id']?>&action=delete">Delete User</td>
    </tr>
    <?php
}
?>
</table>