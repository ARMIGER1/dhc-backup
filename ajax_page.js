/* create an XMLHttpRequest object... */

function createRequestObject() {
	var xmlHttp;
	var browser = navigator.appName;
	if (window.XMLHttpRequest){
        	// If IE7, Mozilla, Safari, etc: Use native object
        	var xmlHttp = new XMLHttpRequest()
	}
	else {
		if (window.ActiveXObject){
        		// ...otherwise, use the ActiveX control for IE5.x and IE6
        		var xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        	}
	}
	return xmlHttp;
}

var http_page = createRequestObject(); 
var http_vps = createRequestObject(); 

function ajaxPage(page) {
	http_page.open('POST', 'ajax_feed.php');
	http_page.onreadystatechange = handlePage; 
	http_page.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
	http_page.send("page=" + page);
}
 	
/* Function called to handle page transitions and DOM elements changing */
function handlePage() {
	if(http_page.readyState == 1) {
	}

	if(http_page.readyState == 4) {
		var response = http_page.responseText;
		document.getElementById('middlediv').innerHTML = response;
	
	}
}

function ajaxform(page,email,comment) {
	http_page.open('POST', 'ajax_feed.php');
	http_page.onreadystatechange = handleform; 
	http_page.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
	http_page.send("page=" + page + "&email=" + email + "&comment=" + comment);
}
 	
/* Function called to handle page transitions and DOM elements changing */
function handleform() {
	if(http_page.readyState == 1) {
	}

	if(http_page.readyState == 4) {
		var response = http_page.responseText;
		document.getElementById('processing').innerHTML = response;
		document.getElementById('textinput').value = '';
		document.getElementById('textareainput').value = '';	
	}
}

/*poster form*/

function ajaxform2(page,name,email2,address,city,state,postal,country) {
	http_page.open('POST', 'ajax_feed.php');
	http_page.onreadystatechange = handleform2; 
	http_page.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
	http_page.send("page=" + page + "&name=" + name + "&email2=" + email2 + "&address=" + address + "&city=" + city + "&state=" + state + "&postal=" + postal + "&country=" + country);
}
 	
/* Function called to handle page transitions and DOM elements changing */
function handleform2() {
	if(http_page.readyState == 1) {
	}

	if(http_page.readyState == 4) {
		var response = http_page.responseText;
		document.getElementById('processing2').innerHTML = response;
		document.getElementById('name').value = '';
		document.getElementById('email2').value = '';
		document.getElementById('address').value = '';
		document.getElementById('city').value = '';
		document.getElementById('state').value = '';
		document.getElementById('postal').value = '';
		document.getElementById('country').value = '';
	}
}

/* ************* Page Functions (mostly DOM/CSS) ************* */

function show(div) {
	document.getElementById(div).style.display = 'block';
}
function hide(div) {
	document.getElementById(div).style.display = 'none';
}
function invisible(div) {
	document.getElementById(div).style.visibility = 'hidden';
}
function visible(div) {
	document.getElementById(div).style.visibility = 'visible';
}


/* ************* Page Form Functions ************* */

function sendemail() {
			var email = document.getElementById('textinput').value;
			var comment = document.getElementById('textareainput').value;
			valid = formValidation();
				if (valid == true) {
			ajaxform('sendemail',email,comment);
      	 	document.getElementById('processing').innerHTML = '&nbsp;&nbsp;Processing Now..........';
			}
		}
		
		function checkEmail(email) {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
                return true
        }
        else {
		alert("Please provide a valid email address.");
                return false
        }
}

		function formValidation(form){
		if(notEmpty(document.getElementById('textinput').value)){
			if(notEmpty(document.getElementById('textareainput').value)){			
							if(checkEmail(document.getElementById('textinput').value)){
                                        return true;
                                }
			}
		}
		return false;
		}
		function notEmpty(elem){
			var str = elem;
			if(str.length == 0){
				alert("You must fill in all fields");
				return false;
			} else {
				return true;
			}
		}
		
		
/*********poster form*******/

function sendemail2() {
			var name = document.getElementById('name').value;
			var email2 = document.getElementById('email2').value;
			var address = document.getElementById('address').value;
			var city = document.getElementById('city').value;
			var state = document.getElementById('state').value;
			var postal = document.getElementById('postal').value;
			var country = document.getElementById('country').value;
			valid = formValidation1();
				if (valid == true) {
			ajaxform2('sendemail2',name,email2,address,city,state,postal,country);
      	 	document.getElementById('processing2').innerHTML = '&nbsp;&nbsp;Processing Now..........';
			}
		}
		
		function formValidation1(){
		if(notEmpty(document.getElementById('name').value)){
		if(notEmpty(document.getElementById('email2').value)){
		if(notEmpty(document.getElementById('address').value)){
		if(notEmpty(document.getElementById('city').value)){
		if(notEmpty(document.getElementById('state').value)){
		if(notEmpty(document.getElementById('postal').value)){
		if(notEmpty(document.getElementById('country').value)){
							return true;
			}
		}
		return false;
		}
		function notEmpty(elem){
			var str = elem;
			if(str.length == 0){
				alert("You must fill in all fields");
				return false;
			} else {
				return true;
			}
		}
		}}}}}

		