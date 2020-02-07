<?php
function getParam($param)
{
    return array_key_exists($param, $_GET) ? $_GET[$param] : '';
}

?>

<form action="thankyou.php" method="post">
    <label for="name">Name:</label>
    <input id="name" type="text" name="name">
    <label for="phone">Phone:</label>
    <input id="phone" type="text" name="phone">

    <input type="hidden" name="flow_id" value="<?= getParam('flow_id') ?>">
    <input type="hidden" name="geo" value="<?= getParam('geo') ?>">
    <input type="hidden" name="sub1" value="<?= getParam('sub1') ?>">
    <input type="hidden" name="sub2" value="<?= getParam('sub2') ?>">
    <input type="hidden" name="sub3" value="<?= getParam('sub3') ?>">
    <input type="hidden" name="sub4" value="<?= getParam('sub4') ?>">
    <input type="hidden" name="sub5" value="<?= getParam('sub5') ?>">
    <input type="submit">
</form>