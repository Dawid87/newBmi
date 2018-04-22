function calculate() {
    var height = document.getElementById("height").value;
    // heightt(height);
	var weight = document.getElementById("weight").value;
    // weightt(weight);

	var x = height;
	var y = weight;
	console.log(x);
	console.log(y);

    if(x <= 0 || y <= 0){
        alert("Height and Weight cannot be les than 0! Insert proper values!");
    }
    else {

	x /= 100;
	var bmi = parseFloat(y) / ( parseFloat(x) * parseFloat(x));
    // storeBmi(bmi);

	document.getElementById("ybmi").innerHTML = bmi.toFixed(2);

	if(bmi <= 18.21){
	    	var bmiRange = bmi + (bmi / 100) / 45;
	document.getElementById("myRange").value = bmiRange.toFixed(2);
	}
	else if(bmi <= 19.75){
	    	var bmiRange = bmi + (bmi / 100) * 25;
	document.getElementById("myRange").value = bmiRange.toFixed(2);
	}
	else {
	    	var bmiRange = bmi + (bmi / 100) * 45;
	document.getElementById("myRange").value = bmiRange.toFixed(2);
	}
 
	if(bmi < 15)
		bmi_catt = "Very severely underweight";
    else if(bmi < 16)
        bmi_catt = "Severely underweight";
    else if(bmi < 18.5)
        bmi_catt = "Underweight";
    else if(bmi < 25)
        bmi_catt = "Normal weight";
    else if(bmi < 30)
        bmi_catt = "Overweight";
    else if(bmi < 35)
        bmi_catt= "Moderately obese";
    else if(bmi < 40)
        bmi_catt = "Severely obese";
    else
        bmi_catt = "Very severely\"morbidly\" obese";

    var bmi_catt = document.getElementById("bmi_cat").innerHTML = bmi_catt;  
    } 
}



var $arrow = $("#arrow a");
var $off = $("main").offset().top;


$("#arrow").on("click", function () {
	$("body, html").animate({
		scrollTop: $("main").offset().top
	},1000)
})

var $arrow_up = $("#arrow_up");
var $off = $("header").offset().top;


$("#arrow_up").on("click", function () {
	$("body, html").animate({
		scrollTop: -$("header").offset().top
	},1000)
})


