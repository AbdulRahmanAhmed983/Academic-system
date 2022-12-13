document.getElementById('from').setAttribute("value", "410");

   $(document).ready(function(){
        $("#military").slideUp();

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
function countryFunction() {
    var c = document.getElementById("country-select").value;
    console.log(c);
    if (c == "1") {
        document.getElementById("label-others").style.display = "none";
        document.getElementById("label-egy").style.display = "block";

    } else {
        document.getElementById("label-others").style.display = "block";
        document.getElementById("label-egy").style.display = "none";
    }
}
// classfication note
function classficationFunction(){
    var x = document.getElementById("classfication").value;
    console.log(x);
    if(x == "4"){
        document.getElementById("science-notes").style.display="none";
        document.getElementById("science-notes-label").style.display="none";

    }
    else{
        document.getElementById("science-notes").style.display="flex";
        document.getElementById("science-notes-label").style.display="flex";


    }
}
// change nationality labels
function nationalityFunction() {
    var n = document.getElementById("nationality-select").value;
    console.log(n);
    if (n == "مصري") {
        document.getElementById("label-passport").style.display = "none";
        document.getElementById("label-id").style.display = "block";

    } else {
        document.getElementById("label-passport").style.display = "block";
        document.getElementById("label-id").style.display = "none";
    }
}

// date of certificate
function dateFunction() {
    var d = document.getElementById('date').value;
    console.log(d);
    var y = parseInt(d) + 1;
    document.getElementById('Date').setAttribute("value", y);
}

// percent of certification
function cerificateFunction(){
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