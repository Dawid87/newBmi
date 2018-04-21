document.addEventListener('DOMContentLoaded',
	function() {
		document.querySelector('#button_bt').onclick =
		function(){
			 var height = document.getElementById("height").value;
    // heightt(height);
	var weight = document.getElementById("weight").value;

	x /= 100;
	var bmi = parseFloat(y) / ( parseFloat(x) * parseFloat(x));
    // storeBmi(bmi);

	document.getElementById("ybmi").innerHTML = bmi.toFixed(2);
		}
	});