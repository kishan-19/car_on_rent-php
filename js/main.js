
var pickupTime = document.getElementById("pDateTime")
var dropOffTime = document.getElementById("dDateTime")
pickupTime.min = new Date().toISOString().slice(0,new Date().toISOString().lastIndexOf(":"));
dropOffTime.min = new Date().toISOString().slice(0,new Date().toISOString().lastIndexOf(":"));

