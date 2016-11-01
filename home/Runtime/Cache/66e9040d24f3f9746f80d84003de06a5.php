<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modify</title>

</head>

<body>
       <form>

           姓名:<input type="text" name="username"  value="<?php echo ($data["username"]); ?>"/><br>
           <input type="button" value="提交修改">

       </form>
</body>
<script type="text/javascript">
    window.onload()=function () {
        alert(<?php echo ($data["username"]); ?>)
    }

</script>
</html>