
        <form action="lib/api.php" method="POST" 
        enctype='multipart/form-data'>
           <input type='file' name='poster' >
           <label>name</label> <input type='text' name ='name' />
           <label>phone</label><input type = 'number' name = 'phone'/>
           <label>email</label><input type='email' name='email' />
           <label>course</label><input type='text' name='course' />
           <input type="hidden" name="page" value="student"/>
           <input type="submit" value="submit"/>
        </form>
