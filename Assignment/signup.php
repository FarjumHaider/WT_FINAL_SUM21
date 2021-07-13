<?php

include 'controllers/UserController.php';

 ?>

<html>
<body>
<fieldset >
  <form action="" method="post">

    <h1>Sign Up</h1>
    <h5><?php echo $err_db; ?></h5>
    <table align="center">
      <tr>
        <td>Name</td>
        <td>: <input type="text" name="name" value="<?php echo $name;?>" ><br>
        <span ><?php echo $err_name;?></span></td>
      </tr>

      <tr>
        <td >Username</td>
        <td>
          :  <input name="username" value="<?php echo $uname;?>" type="text"><br>
          <span><?php echo $err_uname;?></span>
        </td>

      </tr>

      <tr>
        <td>Email</td>
        <td>
          :  <input  type="text" name="email" value="<?php echo $email;?>"><br>
          <span><?php echo $err_email;?></span>
        </td>
      </tr>

      <tr>
        <td >Password</td>
        <td>:  <input name="password" value="<?php echo $pass;?>" type="password" >
          <br><span ><?php echo $err_pass;?></span>
        </td>
      </tr>


      <tr>

         <td colspan="3" align="center"><input type="submit" name="sign_up" value="Sign Up" ></td>

      </tr>
    </table>
  </form>
</fieldset>

</body>
</html>
