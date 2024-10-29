var getdots = document.getElementsByClassName('dot');
var getpages = document.getElementsByClassName('page');     // HTML collection
var getform = document.getElementById('form');
var getprevbtn = document.getElementById('prevbtn');
var getnextbtn = document.getElementById('nextbtn');
var getresultcon = document.getElementById('result-container');
var objkeys = ['emails','password','firstname','lastname','dob','phone','address'];
var datas = [];

let curridx = 0;

showPage(curridx);

// 1 2 3 4

function showPage(num){
    // Show the current page
    getpages[num].style.display = "block";

    // Show or hide the previous button
    num === 0 ? getprevbtn.style.display = "none" : getprevbtn.style.display = "inline-block";

    // Change the next button to "Submit" on the last page
    num === (getpages.length - 1) ? getnextbtn.textContent = "Submit" : getnextbtn.textContent = "Next";

    dotIndicator(num); // Pass the num parameter to dotIndicator
}

function dotIndicator(num){
    // Remove "active" class from all dots
    for (var x = 0; x < getdots.length; x++){
        getdots[x].classList.remove("active");
    }

    // Add "active" class to the current dot
    getdots[num].classList.add("active");
}

function goNow(num){
    // Hide the current page
    getpages[curridx].style.display = "none";

    // Update the current index
    // curridx = curridx + num;

    // Submit the form if we're on the last page and click "Submit"
    // if (curridx >= getpages.length){
    //     getform.submit();
    //     return;
    // }

    // Show the new current page
    showPage(curridx);

    formValidation();
}

function* genFun(){
    var index = 0;

            // 0 < 7
    while(index < objkeys.length){
        yield index++;      // 0 to 6
    }
}

// console.log(genFun().next().value);

let gen = genFun();
console.log(gen.next().value);
console.log(gen.next().value);


function formValidation(){
    var valid = true;

    var getCurrentInput = getpages[curridx].getElementsByTagName('input');
    // console.log(getCurrentInput);
    // console.log(getCurrentInput[curridx].value);

   for(var x = 0; x < getCurrentInput.length;x++){
        // console.log(getCurrentInput[x].value);

        if(getCurrentInput[x].value.trim() === ""){
            getCurrentInput[x].classList.add("invalid");
            valid = false;
        }else{
            // console.log('x value is = ',x);
            // console.log(objkeys[x]);
            // console.log(getCurrentInput[x].value);

            // console.log("Gen value is = ", gen.next().value);

            // Method 1
            // const keys = objkeys[gen.next().value];
            // // console.log(keys);
            // const values = getCurrentInput[x].value;
            // // console.log(values);
            // const obj = {
            //     [keys]:values
            // };

            // datas.push(obj);

            // Method 2
            // const keys = objkeys[gen.next().value];
            // const values = getCurrentInput[x].value;
            // var obj = {};
            // obj[keys] = values;
            // datas.push(obj);

            // Method 3
            const keys = objkeys[gen.next().value];
            const values = getCurrentInput[x].value;
            datas.push({[keys]:values});

        }
   }

   if(valid){
    getdots[curridx].className += " done";
   }

    console.log(valid);
}