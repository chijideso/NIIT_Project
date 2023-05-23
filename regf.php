<style>
    body{
        background-color:blue;
    }
    .div1{
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}
input{
    border-radius: 15px;
        margin: 30px auto;
        width: 100%;
    display: block;
    border: none;
    outline:horizontal;
    background: darkblue;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
}
button{
    /* margin-left:120px; */
    padding: 10px 5px 10px 10px;
    width:100%;
    border-radius:30px;
    padding: 10px 5px 10px 10px;
    width:100%;
    border-radius:30px;
     background-color:lightblue;
    font-size:large;
    background-color: goldenrod; color: whitesmoke; border-radius:10px; padding: .5rem; width: 100%; border: none;
  /* background-color:lightblue; */
    font-size:large;
 }

</style>
<form class="p-3 mt-3" method="POST" action="reg.php">
<div class="div1">
    <div>
     <input type="text" name="uname" placeholder="username" required>
    <hr>   
    </div>
    
    <input type="text" name="phone" placeholder="phone_number" required>
    <hr>
    <input type="passwword" name="password" placeholder="password" required>
    <hr>
    <input type="text" name="state" placeholder="state" required>
  <button name="btn">Register</button>
</div>
</form>