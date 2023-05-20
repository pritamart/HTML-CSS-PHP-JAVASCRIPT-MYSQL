function allClear() {
	calculatorform.display.value = "0";	
}

function backspace() {
	var value = calculatorform.display.value;
	if (value.length == 1)
		allClear();
	else
		calculatorform.display.value = value.substr(0, value.length-1);
}

function buttonPress(operator) {
	if (calculatorform.display.value == '0')
		calculatorform.display.value = operator;
	else
		calculatorform.display.value += operator;
}

function equals() {
	var value = eval(calculatorform.display.value);
	if (value == 'Infinity')
		value = 'Error - Division by zero'
	calculatorform.display.value = value;
}

var memory = 0.0;

function memoryRecall() {
	calculatorform.display.value = memory;
	document.getElementById("Memory").style.display="block";
	document.getElementById("Memory").innerHTML = "Memory = " + memory;
}

function memoryClear() {
	memory = parseFloat(0.0);
	document.getElementById("Memory").style.display="none";
}

function mPlus() {
	memory = parseFloat(memory) + parseFloat(calculatorform.display.value);
	document.getElementById("Memory").style.display="block";
	document.getElementById("Memory").innerHTML = "Memory = " + memory;
}

function mMinus() {
	memory = parseFloat(memory) - parseFloat(calculatorform.display.value);
	document.getElementById("Memory").style.display="block";
	document.getElementById("Memory").innerHTML = "Memory = " + memory;
}