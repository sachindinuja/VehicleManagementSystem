var vType = document.getElementById("type");
var pid = document.getElementById("pid");

function checkType(type) {
    if(type!="car" && type!="cab" && type!="bike" && type!="van" && type!="truck" && type!="bus") {
        alert("Vehicle type must match\ncar, cab, bike, van, truck or bus");
        return false;
        // only these types are allowed
    }
}

// matching vehicle type with package
function checkPkg(type, pid) {
    if((type == "bike") && (pid != 1)){
        alert("Only PID 1 is available");
        return false;
    }
    else if((type == "car") && ((pid != 2) || (pid != 3))){
        alert("Only PID 2 & 3 are available");
        return false;
    }
    else if(((type == "cab") || (type == "van")) && ((pid != 4) || (pid != 5))){
        alert("Only PID 4 & 5 are available");
        return false;
    }
    else if(((type == "truck") || (type == "bus")) && ((pid != 6) || (pid != 7))){
        alert("Only PID 6 & 7 are available");
        return false;
    }
}


vType.onsubmit = checkType(vType);
pid.onsubmit = checkPkg(vType, pid);