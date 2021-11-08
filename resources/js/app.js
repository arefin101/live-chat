require('./bootstrap');

const message_el = document.getElementById("messages");
const username_input = document.getElementById("username");
const message_input = document.getElementById("message_input");
const message_form = document.getElementById("message_form");

message_form.addEventListener('submit', function(e){
    e.preventDefault();

    let has_error = false;

    if(username_input.value == ''){
        alert("Please enter a username");
        has_error = true;
    }

    if(message_input.value == ''){
        alert("PLease enter a message");
        has_error = true;
    }

    if(has_error){
        return;
    }

    axios(ajax(message_input.value, username_input.value));


    var n=0;

    if(getCookie('username')==""){

        var bot='how can i help you??'
        axios(ajax(bot, 'Bot'));
        document.cookie = "username=John Doe";
        n++;

    }else if(message_input.value == 'close'){
        //alert(getCookie('username'))
        document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    }




    function ajax(message, username){
        const options = {
            method: 'post',
            url: '/send-message',
            data:{
                username: username,
                message: message
            },
        }
        return options;
    }

    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for(let i = 0; i <ca.length; i++) {
          let c = ca[i];
          while (c.charAt(0) == ' ') {
            c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
          }
        }
        return "";
      }


});

window.Echo.channel('chat').listen('.message', (e)=>{
    message_el.innerHTML += '<div class="message"><strong>'+ e.username +':</strong>' + e.message + '</div>';
});
