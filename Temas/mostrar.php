<?php
if (isset($_COOKIE['php'])) {
?>
<table>
    <tr>
        <th>PHP</th>
        <td><?php echo $_COOKIE['php'] ?></td>
    </tr>
    <tr>
        <th>ASP.NET</th>
        <td><?php echo $_COOKIE['asp'] ?></td>
    </tr>
    <tr>
        <th>JSP</th>
        <td><?php echo $_COOKIE['jsp'] ?></td>
    </tr>
    <tr>
        <th>OTROS</th>
        <td><?php echo $_COOKIE['otros'] ?></td>
    </tr>
</table>
<?php
}
?>