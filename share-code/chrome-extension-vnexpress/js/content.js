console.log("contentjs");

window.addEventListener('mouseup', function(){
    let selectedText = window.getSelection().toString().trim();
    selectedText     = selectedText.replace(/\s{2,}/g, '');
    if(selectedText.length > 0) {
        let url = "https://share.zendvn.com/api/findCourse.php?word_find=" + selectedText;
        $.get(url, function(data, status){
            let dataObj = JSON.parse(data);
            let result  = "Không có rồi mày ơi";

            if(dataObj.state == "success"){
                result = dataObj.result; 
            }

            $('p.extension-show-info').remove();
            $(`<p class="extension-show-info" style="
                    background-color: yellow;
                    position: fixed;
                    bottom: 50px;
                    left: 50px;
                    font-size: 20px;
                    max-width: 400px;
                    padding: 10px 20px;
                    font-weight: bold;">${result}</p>`).appendTo('body');       
        });
    }
});