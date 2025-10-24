document.getElementById('btnopen').addEventListener('click', function(){

    const xhr = new XMLHttpRequest;

    xhr.open('GET','rrf_text.html',true);

    xhr.onload = function(){
        if( this.status === 200 ){
            document.getElementById('demo').innerHTML = this.responseText;
        } else{
             document.getElementById('demo').innerHTML = "No Data Found";
        }
    }
    xhr.send();

});