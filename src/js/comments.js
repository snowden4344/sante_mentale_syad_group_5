let comment_content = document.getElementsByClassName("comment_content");

let page_width = document.body.clientWidth;

window.addEventListener("resize", function (){
    page_width = document.body.clientWidth;
    generate_comment_width();
})
function generate_comment_width(){
    for (let i = 0; i < comment_content.length; i++){
        let comment_length = comment_content[i].innerHTML.length;

        if(page_width >= 1300){
            if(comment_length < 12){
                comment_content[i].parentElement.style.width = "20%";
            }
            else if(comment_length > 12 && comment_length < 90){
                comment_content[i].parentElement.style.width = comment_length + 5 + "%";
            }
            else
                comment_content[i].parentElement.style.width = "90%";
        }
        else if (page_width >900 && page_width < 1300){
            if(comment_length < 12){
                comment_content[i].parentElement.style.width = "30%";
            }
            else if(comment_length > 12 && comment_length < 90){
                comment_content[i].parentElement.style.width = comment_length + 20 + "%";
            }
            else
                comment_content[i].parentElement.style.width = "95%";
        }
        else if (page_width >650 && page_width < 900){
            if(comment_length < 12){
                comment_content[i].parentElement.style.width = "50%";
            }
            else if(comment_length > 12 && comment_length < 90){
                comment_content[i].parentElement.style.width = comment_length + 40 + "%";
            }
            else
                comment_content[i].parentElement.style.width = "100%";
        }
        else if (page_width <650){
                comment_content[i].parentElement.style.width = "100%";
        }
    }
}

generate_comment_width();