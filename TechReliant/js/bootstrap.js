// tooltip_script
				$(function() { $("[data-toggle='tooltip']").tooltip();});

//newsletter_submission
	function subform() {
		var x = document.getElementById("news").value;
		var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
else
{
alert('Thank you for subscribing ... you will get updated news by email.');
document.getElementById("news").value='';
return true;
}
}


//contact_form
function contform() {
		var y =document.getElementById("name").value;
		 y=/^[A-Za-z ]+$/.test(y);
		var z =document.getElementById("msg").value;
		var x = document.getElementById("mail").value;
		var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if(y==null || y==''){
			alert('Not a Valid Name.');
		}
else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address.");
        return false;
    }
else if(z.length <20 || z.length >100) {
alert('Your message should be greater than 20 characters and not more than 100 characters.');
}
else
{
alert('Thank you... we will inform by e-mail or contact no.');
document.getElementById("mail").value='';
document.getElementById("name").value='';
document.getElementById("msg").value='';
return true;
}
}

