// Variables
var getdots = document.getElementsByClassName('dot');
var getpages = document.getElementsByClassName('page');     // HTML collection
var getform = document.getElementById('form');
var getprevbtn = document.getElementById('prevbtn');
var getnextbtn = document.getElementById('nextbtn');
var getresultcon = document.getElementById('result-container');
var pagekeys = [
    ['email','password','newsletter','newsletter'],     // Page 1 : Security
    ['firstname','lastname','profile'],                 // Page 2 : Personal Info
    ['dob'],                                            // Page 3 : date of birth
    ['phone','addresss','documents','documents'],       // Page 4 : Contact Info
];

var datas = [];

let curridx = 0;       // 0 1 2 3

showPage(curridx);
// currentidx = 0 1 2 3
// gonow or next = 1

function showPage(num){
    
    // getpages[num].style.display = "block"; // Show the target page

    const pages = document.querySelectorAll('.page');
    pages.forEach((page,index)=>{
        page.style.display = index === num ? "block" : "none";
    });

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

    // Add "active" class to the current dot if within bounds
    if (num >= 0 && num < getdots.length) {
        getdots[num].classList.add("active");
    }
}

function gonow(num) {
    // Calculate the new index
    let newIdx = curridx + num;

    // Check if the new index is out of bounds and handle it appropriately
    if (newIdx < 0 || newIdx >= getpages.length) {
        console.error(`Navigation out of bounds: ${newIdx}`);
        return;
    }

    // Hide the current page
    getpages[curridx].style.display = "none";

    // Proceed only if form validation is successful
    if (num === 1 && formValidation()) {

        getpages[curridx].style.display = "none";
        curridx = curridx + num; // Update current index only if validation passes

        // Check if we've reached the end of pages
        if (curridx >= getpages.length) {

            getform.style.display = "none";
            getresultcon.style.display = "block";

            // Display the collected data
            result(datas);
            return false;
        }

        // Show the new page if within bounds
        showPage(curridx);
    }
}



function formValidation(){
    var valid = true;

    // Using '.form-control' to ensure we capture inputs within the form-group
    var getCurrentInput = getpages[curridx].getElementsByTagName('input');

    // datas = [
    //     [{
    //         email:"root@gmail.com",
    //         password:"012345",
    //         newsletter:1
    //     }],[{
    //         firstname:"Lin",
    //         lastname:"Htet"
    //     }],
    // ]

    if(!datas[curridx]){
        datas[curridx] = {};
    }

    let currpagekeys = pagekeys[curridx];

    for(var x = 0; x < getCurrentInput.length; x++){

        let input = getCurrentInput[x];
        let key = currpagekeys[x];

        if(input.type === "radio"){

            if(input.checked){
                datas[curridx][key] = input.value;
            }

        }else if(input.type === "checkbox"){

            if(!datas[curridx][key]){
                datas[curridx][key] = [];
            }

            if(input.checked){
                datas[curridx][key].push(input.value);
            }

            // [{
            //     phone:"209424",
            //     address:"mandalay",
            //     document:['nrc','passport']
            // }]

        }else if(input.value.trim() === ""){

            input.classList.add("invalid");
            valid = false;

        } else {
            input.classList.remove("invalid");
            datas[curridx][key] = input.value;
        }
    }

    if(valid){
        getdots[curridx].className += " done";
    }
    return valid;
}

function result(data){
    console.log(data); // Display collected data for debugging

    const documentlist = data[3].documents.length > 0 ? data[3].documents.join(',') : "No Data";
    
    // Use optional chaining `?.` to avoid errors if data is missing
    getresultcon.innerHTML = `
        <ul>
            <li>Name: ${data[1].firstname} ${data[1].lastname}</li>
            <li>Agree: ${data[1].newletter === '1' ? 'Yes' : 'No'}</li>
            <li>Email: ${data[0].email}</li>
            <li>Profile: ${data[1].profile}</li>
            <li>Date of Birth: ${data[2].dob}</li>
            <li>Phone Number: ${data[3].phone}</li>
            <li>Address: ${data[3].address}</li>
            <li>Documents: ${documentlist}</li>
        </ul>
        <button type="submit" class="submit-btn" onclick="submitbtn()">Apply Now</button>
    `;
}

function submitbtn(){
    getform.submit();
}
