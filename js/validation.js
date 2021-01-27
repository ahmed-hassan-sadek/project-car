let form= document.querySelector('#myform');
form.onsubmit = function()
{
	
    let name    = document.querySelector('#name').value;
    let color    = document.querySelector('#color').value;
    let mail    = document.querySelector('#mail').value;
    let comment = document.querySelector('#comment').value;
    let type  = document.querySelector('#type').value;


	let len  = name.length;
    let len2 = color.length;
    let len3 = mail.length;
    let len4 = comment.length; 
    let sign = mail.search("@");
    let dot  = mail.search(/\./);


    if (len==0) {
        alert ("the name is empty");
    }
    if (len2==0) {
        alert ("the password is empty");
    }
     if (sign > dot) {
        alert("invalid email"+" "+"becouse (.) is before (@)");
     }
    if (len3==0) {
        alert ("the mail is empty");
    }
    if(len4==0)
        {
            alert("the comment is empty");
        }

}
