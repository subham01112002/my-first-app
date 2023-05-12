<?php
session_start();

if(isset($_request['mode']))
{
    $fetchname = $_REQUEST['name'];
    $_SESSION['user'] = $fetchname;
    header("location:sessionCheckedtPage.php");
}
?>
<form name="checkform" id="checkform" method="post">
    <input type="hidden" name="mode" id="mode" value="1">
    <table>
        <tr>
            <td>Enter Name</td>
            <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" id="submit" value="submit"></td>
        </tr>
    </table>
</form>    
