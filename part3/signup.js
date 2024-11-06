// Variables
var getdots = document.getElementsByClassName('dot');
var getpages = document.getElementsByClassName('page');     // HTML collection
var getform = document.getElementById('form');
var getprevbtn = document.getElementById('prevbtn');
var getnextbtn = document.getElementById('nextbtn');
var getresultcon = document.getElementById('result-container');
var objkeys = ['email','password','firstname','lastname','dob','phone','address'];
var datas = [];

let curridx = 0;

showPage(curridx);

function showPage(num){
    // Ensure `num` is within the bounds of `getpages`
    if (num < 0 || num >= getpages.length) {
        console.error(`Invalid page index: ${num}`);
        return;
    }

    // Hide all pages, then show the current one
    for (let i = 0; i < getpages.length; i++) {
        getpages[i].style.display = "none";
    }
    getpages[num].style.display = "block"; // Show the target page

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

function goNow(num){
    // Validate `curridx` to stay within bounds
    let newIdx = curridx + num;
    if (newIdx < 0 || newIdx > getpages.length) {
        console.error(`Navigation out of bounds: ${newIdx}`);
        return;
    }

    // Hide the current page
    getpages[curridx].style.display = "none";

    if(formValidation()){
        curridx = newIdx; // Update current index only if validation passes

        if(curridx >= getpages.length){
            // Hide form, show result if all pages are done
            getform.style.display = "none";
            getresultcon.style.display = "block";

            result(datas);
            return;  // Stop execution if we're showing results
        }

        // Show the new current page
        showPage(curridx);
    }
}

function* genFun(){
    var index = 0;
    while(index < objkeys.length){
        yield index++;  // Generate index values from 0 to objkeys.length - 1
    }
}

let gen = genFun();

function formValidation(){
    var valid = true;

    // Using '.form-control' to ensure we capture inputs within the form-group
    var getCurrentInput = getpages[curridx].querySelectorAll('.form-control');

    for(var x = 0; x < getCurrentInput.length; x++){
        if(getCurrentInput[x].value.trim() === ""){
            getCurrentInput[x].classList.add("invalid");
            valid = false;
        } else {
            // Retrieve current field key and value
            const keys = objkeys[gen.next().value];
            const values = getCurrentInput[x].value;

            // Add to datas array with current key-value pair
            datas.push({ [keys]: values });
        }
    }

    if(valid){
        getdots[curridx].className += " done";
    }
    return valid;
}

function result(data){
    console.log(data); // Display collected data for debugging

    getresultcon.style.display = "block";
    
    // Use optional chaining `?.` to avoid errors if data is missing
    getresultcon.innerHTML = `
        <ul>
            <li>Name: ${data[2]?.firstname || ''} ${data[3]?.lastname || ''}</li>
            <li>Email: ${data[0]?.email || ''}</li>
            <li>Date of Birth: ${data[4]?.dob || ''}</li>
            <li>Phone Number: ${data[5]?.phone || ''}</li>
            <li>Address: ${data[6]?.address || ''}</li>
        </ul>
        <button type="submit" class="submit-btn" onclick="submitbtn()">Apply Now</button>
    `;
}

function submitbtn(){
    getform.submit();
}
