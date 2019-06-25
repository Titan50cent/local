
  <form>
  	<h2>Register</h2>
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" id="username" placeholder="Username/Email">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" class="form-control" id="Cpassword" placeholder="Confirm Password">
  </div>
   <div class="form-group">
    <label>ID-CARD</label>
    <input type="number" class="form-control" id="IDcard" placeholder="Passport/ID-CARD">
  </div>

  <button type="button" class="btn btn-default btn_submit_register">Submit</button>


</form> 

<script>
/*$(document).ready(function(){
    $('.btn_submit_register').click(function(){
      {
        alert("Hello! I am an alert box!");
      }
    })
  })*/
  $(document).ready(function(){
    $('.btn_submit_register').click(function(){
      if(
        $('#username').val()==""||
        $('#password').val()==""||
        $('#Cpassword').val()==""||
        $('#IDcard').val()==""
      ){
        alert("คุณกรอกไม่ครบ");
    }else if($('#password').val()!=$('#Cpassword').val()) {
      alert("พาสเวิร์ดไม่ตรงกัน");
    }else{
        $.ajax({
          url: 'apiconnect.php',
          type: "POST",
          data: {
            mode:'Register',
            username:$('#username').val(),
            password:$('#password').val(),
            IDcard:$('#IDcard').val(),
          },
             success: function(response){
        console.log(response);
          },
          error:function(){
            alert("failure");
          }
        });

   }
 })
})

  
</script>