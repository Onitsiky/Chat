window.addEventListener("DOMContentLoaded",function(){
    const name = document.querySelector("#input_name");
    const message = document.querySelector("#input_message");
    const button = document.querySelector(".button");
    const screen = document.querySelector(".screen");

   button.addEventListener("click", function(){
    if(/\s/g.test(name.value) || name.value == ""){
        alert("Enter a name");
    }
    else if(name.value != "" && message.value == ""){
        alert("Enter a message")
    };
    if(name.value != "" && message.value != ""){
        $.post("message.php",{
            name : name.value,
            message : message.value
        }, function (resp){
          screen.innerHTML += resp ;
        })
    }
   })
})


Pusher.logToConsole = true;

    var pusher = new Pusher('b3a4655789e146592bbf', {
      cluster: 'mt1'
    });

    var channel = pusher.subscribe('WeChat');
    channel.bind('my-event', function(data) {
      screen.innerHTML += data;
    });