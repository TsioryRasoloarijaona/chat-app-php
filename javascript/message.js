const form = document.querySelector(".typing-area"),
    inputField = form.querySelector(".input-field"),
    sendBtn = form.querySelector("button"),
    chatBox = document.querySelector(" .chat-box"),
    fileInput = document.getElementById("file")



form.onsubmit = (e)=>{
    e.preventDefault();
}

sendBtn.onclick = ()=>{
   // console.log("hello btn")
 let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert-message.php" ,true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
               let data = xhr.response;
                console.log(data);
                inputField.value = "";
                fileInput.value = "";
                scroll();
            }else{
                console.log(xhr.status);
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}

chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");
}

chatBox.onmouseleave = () => {
    chatBox.classList.remove("active")
}


setInterval(()=>{
        // console.log("hello btn")
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "php/get-message.php" ,true);
        xhr.onload = ()=>{
            if(xhr.readyState === XMLHttpRequest.DONE){
                if(xhr.status === 200){

                    let data = xhr.response;
                    console.log(data)
                    chatBox.innerHTML = data

                    if (!chatBox.classList.contains("active")){
                        scroll();
                    }
                }else{
                    console.log(xhr.status);
                }
            }
        }
        let formData = new FormData(form);
        xhr.send(formData);

},500)


function scroll(){
    chatBox.scrollTop = chatBox.scrollHeight;
}


