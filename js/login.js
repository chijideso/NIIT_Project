

var form= document.getElementById("form");
function submitform(event){
    event.preventDefault();
}
form.addEventListener('submit', submitform);

// function registration(){
//     var User_name=document.getElementById("name").value;
//     var User_password=document.getElementById("password").value;
// //    console.log(names);
// //    console.log(password);
//     var map= {
//         names:User_name,
//         password:User_password
//     };
//     let database = new Map(Object.entries(map));
//     console.log(database.get('names'));
//     console.log(database.get('password'));
//     // window.location.href = index.html;
//     alert("user registered");

    
//    function login(){
//         var Username=document.getElementById("name").value;
//         var Userpassword=document.getElementById("password").value;
//     //    console.log(names);
//     //    console.log(password);
//         if (Username == database.get('names') && Userpassword == database.get('password')){
//             return window.location.href = "index.html";
//         } else{
//             alert("user unregistered")
//         }

        

//     }

// }

function login(){
    var map= {
        names:"Isaac",
        password:123
        };

    var Username=document.getElementById("names").value;
    var Userpassword=document.getElementById("passwords").value;
    //    console.log(names);
    //    console.log(password);
    if (Username == map.names && Userpassword ==map.password){
    return window.location.href = "index.html";
    } else{
        alert("user unregistered")
    }
    
            
    
}
