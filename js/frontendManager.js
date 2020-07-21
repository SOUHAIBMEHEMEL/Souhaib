var menuItem = document.getElementsByClassName('li');
for (let i =0;i<menuItem.length; i++){
    menuItem[i].onclick= function () {
        for (let j =0;j<menuItem.length; j++){
            menuItem[j].style.background='#404263';
        }
        menuItem[i].style.background='#31344F';
       // menuItem[i].style.opacity='.7';
    }
}

var mailmeBtn= document.getElementById('mailBtn');
var mailFormContainer= document.getElementById('mailFormContainer');

mailmeBtn.onclick=function () {
    mailFormContainer.style.display='block';
};

