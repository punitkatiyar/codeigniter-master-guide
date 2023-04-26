
<table border="1" class="table">    
<?php
foreach($arr as $key)
{
    ?>
    <tr>
        <td><?php echo $key['name']?></td>
        <td><?php echo $key['email']?></td>
        <td><?php echo $key['password']?></td>
    </tr>
    <?php
}
?>
</table>