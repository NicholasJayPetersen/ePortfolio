addEventListener("submit", (e) => {
    e.preventDefault();
    
    var lowerCredits = document.getElementById("lowerCredits").value;
    var upperCredits = document.getElementById("upperCredits").value;
    var studentType = document.getElementById("studentType").value;
    const  regFee = 50;
    const infraFee = 60;
    const techFeeHour = 4;
    const activityFeeHour = 2;
    const serviceFeeHour = 18
    var estimate = 0;
    var totalCreds = parseInt(lowerCredits)  + parseInt(upperCredits);
    var tuition = 0

    console.log("Lower Level credits selected: " + lowerCredits);
    console.log("Upper level credits selected: " + upperCredits);
    console.log(totalCreds);
    console.log("Student Type selected: " + studentType);

    if (studentType == "inDistrict"){
        tuition = (lowerCredits * 111) + (upperCredits * 200)
        estimate = tuition + (serviceFeeHour *totalCreds) + (techFeeHour * totalCreds) + (activityFeeHour * totalCreds) + regFee + infraFee;

    } else if ( studentType == "outDistrict"){
        tuition = (lowerCredits * 194) + (upperCredits * 265)
        estimate = tuition + (serviceFeeHour *totalCreds) + (techFeeHour * totalCreds) + (activityFeeHour * totalCreds) + regFee + infraFee;

    } else {
        tuition = (lowerCredits * 281) + (upperCredits * 350)
        estimate = tuition + (serviceFeeHour *totalCreds) + (techFeeHour * totalCreds) + (activityFeeHour * totalCreds) + regFee + infraFee;

    }

    document.getElementById("tuition").innerHTML = "$" + tuition;
    document.getElementById("regFee").innerHTML = "$" + regFee;
    document.getElementById("techFeeHour").innerHTML = "$" + (techFeeHour*totalCreds);
    document.getElementById("ServiceFeeHour").innerHTML = "$" + (serviceFeeHour*totalCreds);
    document.getElementById("activityFeeHour").innerHTML = "$" + (activityFeeHour*totalCreds);
    document.getElementById("estimate").innerHTML = "$" + estimate;
});  