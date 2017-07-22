<form action="lib/api.php" method="POST" 
        enctype='multipart/form-data'>
           <input type='file' name='poster'>
           name <input type='text' name ='name'/>
           role <input type='text' name ='role' />
           phone<input type = 'number' name = 'phone'/>
           email<input type='email' name='email'/>
           password<input type='password' name='password'/>
           <input type="hidden" name="page" value="admin"/>
           <input type="submit" value="submit"/>
</form>
