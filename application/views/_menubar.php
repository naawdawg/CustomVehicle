<?php
/*
 * Menu navbar, just an unordered list
 */

$plan = array('1' => 'Guest', '2' => 'User', '3' => 'Admin');
?>
<ul class="nav nav-pills">
    {menudata}
    <li><a href="{link}">{name}</a></li>
    {/menudata}
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">User Role<b class="caret"></b></a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                  <li><a href="/roles/actor/Guest">Guest</a></li>
                  <li><a href="/roles/actor/User">User</a></li>
                  <li><a href="/roles/actor/Admin">Admin</a></li>
      </ul>
<!--         <select class="form-control" title="User Role"><b class="caret"></b>
<?php 
  foreach ($plan as $id => $value)
  {?>
  <option value="<?php echo $id; ?>" <?php echo ($id == '2') ? ' selected="selected"' : ''; ?>><?php echo $value; ?></option>
<?php }?>
</select> -->
    </li>
</ul>
