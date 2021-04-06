"use strict"


function ajax(){
	const name = document.getElementById('name').value;
	const xhttp	= new XMLHttpRequest();

	/*xhttp.open('GET', 'abc.php?name='+name, true);
	xhttp.send();

	xhttp.onreadystatechange = function(){
		
		if(this.readyState == 4 && this.status == 200){
			//alert(this.responseText);
			document.getElementById('myh1').innerHTML = this.responseText;
		}
	}*/

	xhttp.open('POST', 'abc.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('name='+name);

	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			//alert(this.responseText);
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
}
