const myBtn = document.getElementById('my-btn');
const hideBtn = document.getElementById('hide-btn');

myBtn.addEventListener('click', function() {
    const myText = document.getElementById('my-text');
    myText.style.display = 'block'; 
    myBtn.style.display = 'none'; 
    hideBtn.style.display = 'inline-block'; 
});

hideBtn.addEventListener('click', function() {
    const myText = document.getElementById('my-text');
    myText.style.display = 'none'; 
    myBtn.style.display = 'inline-block'; 
    hideBtn.style.display = 'none'; 
});
