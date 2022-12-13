
var f = document.getElementById("f");

if (f.checked == true)
{
    document.getElementById('military').style.display="none";
}
else{
    document.getElementById('military').style.display="flex";

} 
$(document).ready(function(){
            $("#m").change(function() {
                $("#military").slideDown();
            });

            $("#f").change(function() {
                $("#military").slideUp();
            });
   
        $(".click").click(function() {
            $(".toogle_personal").slideToggle("slow");
        });

        $(".click-info").click(function() {
            $(".toogle_info").slideToggle("slow");
        });

        $(".click-address").click(function() {
            $(".toogle_add").slideToggle("slow");
        });
    })
      
 


// change country labels
var c = document.getElementById("country-select");

if (c == "1") {
   
    document.getElementById("label-others").style.display = "none";
    document.getElementById("label-egy").style.display = "block";

} else {
    document.getElementById("label-others").style.display = "block";
    document.getElementById("label-egy").style.display = "none";
}

function countryFunction() {

 var cs = document.getElementById("country-select").value;
if (cs == "1") {
    document.getElementById("label-others").style.display = "none";
    document.getElementById("label-egy").style.display = "block";

} else {
    document.getElementById("label-others").style.display = "block";
    document.getElementById("label-egy").style.display = "none";
}
}


// classfication note
var x = document.getElementById("classification").value;
if(x == "4"){
    document.getElementById("science-notes").style.display="none";
}
else{
    document.getElementById("science-notes").style.display="flex";

}
function classficationFunction(){
var xs = document.getElementById("classification").value;
console.log(xs);

if(xs == "4"){
    document.getElementById("science-notes").style.display="none";
}
else{
    document.getElementById("science-notes").style.display="flex";

}
}
// change nationality labels
var n = document.getElementById("nationality-select").value;
if (n == "1") {
    document.getElementById("label-passport").style.display = "none";
    document.getElementById("label-id").style.display = "block";

} else {
    document.getElementById("label-passport").style.display = "block";
    document.getElementById("label-id").style.display = "none";
}

function nationalityFunction() {
var ns = document.getElementById("nationality-select").value;
if (ns == "1") {
    document.getElementById("label-passport").style.display = "none";
    document.getElementById("label-id").style.display = "block";

} else {
    document.getElementById("label-passport").style.display = "block";
    document.getElementById("label-id").style.display = "none";
}
}

// date of certificate
var d = document.getElementById('date').value;
var y = parseInt(d) + 1;
document.getElementById('Date').setAttribute("value", y);

function dateFunction() {
var ds = document.getElementById('date').value;
console.log(ds);
var ys = parseInt(ds) + 1;
document.getElementById('Date').setAttribute("value", ys);
}

// percent of certification
var c =document.getElementById("certificate-type").value;
console.log(c);
if (c == "1" || c == "2" || c == "3")
{
    document.getElementById('from').setAttribute("value", "410");

}
else if (c == "4")
{
    document.getElementById('from').setAttribute("value", "580");

}
else if (c == "5")
{
    document.getElementById('from').setAttribute("value", "450");

}
else if (c == "6")
{
    document.getElementById('from').setAttribute("value", "700");

} else if (c == "7")
{
    document.getElementById('from').setAttribute("value", "1000");

} else
{
    document.getElementById('from').setAttribute("value", "600");

}

function cerificateFunction(){
var ce =document.getElementById("certificate-type").value;
if (ce == "1" || ce == "2" || ce == "3")
{
    document.getElementById('from').setAttribute("value", "410");

}
else if (ce == "4")
{
    document.getElementById('from').setAttribute("value", "580");

}
else if (ce == "5")
{
    document.getElementById('from').setAttribute("value", "450");

}
else if (ce == "6")
{
    document.getElementById('from').setAttribute("value", "700");

} else if (ce == "7")
{
    document.getElementById('from').setAttribute("value", "1000");

} else
{
    document.getElementById('from').setAttribute("value", "");

}
}

var m= document.querySelector('#mark');
m.addEventListener('input',function(){
var c =this.value;
console.log(c);
var p = document.getElementById('from').value;
console.log(p);
var total = ((c/p) * 100).toFixed(3);
document.getElementById('total').setAttribute("value",total);

})