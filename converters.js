// JavaScript Document
function convertToTemp(mForm){
if (mForm.fromField.value == "") 
			{
				alert("Enter valid value")
				return false
			}
    tempresult = convertTemp(
        parseFloat(mForm.fromField.value),
        mForm.fromUnits.options[mForm.fromUnits.selectedIndex].value,
        mForm.toUnits.options[mForm.toUnits.selectedIndex].value,
		parseFloat(mForm.fromField.value))
	
	mForm.toField.value = tempresult.toFixed([2])
	
	mForm.lable.value = condition(mForm.toField.value,
		mForm.toUnits.options[mForm.toUnits.selectedIndex].value);
}
function convertTemp(value, fromUnitFact, toUnitFact, FloatFromUnitFact){
    var kTemp = 0.0;
    if (fromUnitFact == toUnitFact) {
        return (value);
    }
    else {
        // first convert to fehrenhite
		if (fromUnitFact == "C"){
            kTemp = (FloatFromUnitFact * 9/5 + 32 );
		} else if ((fromUnitFact == "G") && (FloatFromUnitFact >= 1)){
            kTemp = (FloatFromUnitFact * 25) + 250;
		} else if ((fromUnitFact == "G")  && (FloatFromUnitFact < 1)){
            kTemp = (FloatFromUnitFact * 100) + 200;
        } else if (fromUnitFact == "F"){
            kTemp = FloatFromUnitFact;
		}
        // now convert to desired units
        if (toUnitFact == "C"){
            return(((kTemp) - 32 ) * 5/9);
        } else if ((toUnitFact == "G")&& (kTemp >= 275)){
            return ((kTemp  * 0.04) - 10);
		} else if ((toUnitFact == "G")&& (kTemp < 275)){
            return ((kTemp  * 0.01) - 2);
        } else if (toUnitFact == "F"){
            return (kTemp);
        }
    }
}
function condition (value, toUnitFact)
{
		if (toUnitFact == "C"){
            if (value < 140)
				return ("Cold");
			else if (value < 160 )
				return ("Very Low");
			else if (value < 170)
				return ("Low");
			else if (value < 190)
				return ("Medium");
			else if (value < 200)
				return ("Medium heat");
			else if (value < 230)
				return ("Hot");
			else if (value >= 230)
				return ("Very Hot");
 
        } else if (toUnitFact == "G"){
            if (value < 1)
				return ("Cold");
			else if (value < 3 )
				return ("Very Low");
			else if (value < 4)
				return ("Low");
			else if (value < 5)
				return ("Medium");
			else if (value < 6)
				return ("Medium heat");
			else if (value < 8)
				return ("Hot");
			else if (value >= 8)
				return ("Very Hot");
        } else if (toUnitFact == "F"){
            if (value < 275)
				return ("Cold");
			else if (value < 325 )
				return ("Very Low");
			else if (value < 350)
				return ("Low");
			else if (value < 375)
				return ("Medium");
			else if (value < 400)
				return ("Medium heat");
			else if (value < 450)
				return ("Hot");
			else if (value >= 450)
				return ("Very Hot");
        }
} 

function convert(mForm){
if (mForm.fromField.value == "") 
			{
				alert("Enter valid value")
				return false
			}
    conresult = convertUnits(
        parseFloat(mForm.fromField.value),
        mForm.fromUnits.options[mForm.fromUnits.selectedIndex].value,
        mForm.toUnits.options[mForm.toUnits.selectedIndex].value)
	
	mForm.toField.value = conresult.toFixed([2])
}
function convertUnits(value, fromUnitFact, toUnitFact) {
    return (value * fromUnitFact / toUnitFact);
}