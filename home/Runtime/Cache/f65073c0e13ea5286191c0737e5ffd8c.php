<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
hello world!!
<table border="1" width="500" align="center">
<tr>

    <th>id</th>
    <th>username</th>
    <th>sex</th>
    <th>操作</th>
</tr>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>

            <td><?php echo ($vo["id"]); ?></td>
            <td><?php echo ($vo["username"]); ?></td>
            <td><?php echo ($vo["password"]); ?></td>
            <td><a href="/xxx/index.php/User/del/id/<?php echo ($vo["id"]); ?>">删除</a>|<a href="/xxx/index.php/User/modify/id/<?php echo ($vo["id"]); ?>">修改</a></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</body>
</html>