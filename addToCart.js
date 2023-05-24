function addToCart(value){
    var curVal = document.getElementById("value");
    var val = curVal.innerHTML;
    val++;
    document.getElementById("value").innerHTML = val;
};



function add1(checkout1){
    var curnum = document.getElementById("checkout1");
    var numpl = curnum.innerHTML;
    numpl++;
    document.getElementById("checkout1").innerHTML = numpl;
};

function minus1(checkout1){
    var curnum = document.getElementById("checkout1");
    var nummin = curnum.innerHTML;
    
    if(nummin > 0){
        nummin--;
    }
    document.getElementById("checkout1").innerHTML = nummin;
};



function add2(checkout2){
    var curnum = document.getElementById("checkout2");
    var numpl = curnum.innerHTML;
    numpl++;
    document.getElementById("checkout2").innerHTML = numpl;
};

function minus2(checkout2){
    var curnum = document.getElementById("checkout2");
    var nummin = curnum.innerHTML;
    
    if(nummin > 0){
        nummin--;
    }
    document.getElementById("checkout2").innerHTML = nummin;
};


function add3(checkout3){
    var curnum = document.getElementById("checkout3");
    var numpl = curnum.innerHTML;
    numpl++;
    document.getElementById("checkout3").innerHTML = numpl;
};

function minus3(checkout3){
    var curnum = document.getElementById("checkout3");
    var nummin = curnum.innerHTML;
    
    if(nummin > 0){
        nummin--;
    }
    document.getElementById("checkout3").innerHTML = nummin;
};


function add4(checkout4){
    var curnum = document.getElementById("checkout4");
    var numpl = curnum.innerHTML;
    numpl++;
    document.getElementById("checkout4").innerHTML = numpl;
};

function minus4(checkout4){
    var curnum = document.getElementById("checkout4");
    var nummin = curnum.innerHTML;
    
    if(nummin > 0){
        nummin--;
    }
    document.getElementById("checkout4").innerHTML = nummin;
};



function total(checkout1, checkout2, checkout3, checkout4, totalQuant, totalPrice){
    var curQuant1 = document.getElementById("checkout1");
    var curQuant2 = document.getElementById("checkout2");
    var curQuant3 = document.getElementById("checkout3");
    var curQuant4 = document.getElementById("checkout4");
    var numQ1 = parseInt(curQuant1.innerHTML);
    var numQ2 = parseInt(curQuant2.innerHTML);
    var numQ3 = parseInt(curQuant3.innerHTML);
    var numQ4 = parseInt(curQuant4.innerHTML);
    var totalQuant = numQ1 + numQ2 + numQ3 + numQ4;
    document.getElementById("totalQuant").innerHTML = totalQuant;
    var prod1 = curQuant1.innerHTML * 450;
    var prod2 = curQuant2.innerHTML * 65;
    var prod3 = curQuant3.innerHTML * 130;
    var prod4 = curQuant4.innerHTML * 45;
    var totalPrice = prod1 + prod2 + prod3 + prod4;
    document.getElementById("totalPrice").innerHTML = totalPrice;
}