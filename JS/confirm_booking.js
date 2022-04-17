// Declare Initial Datetime
let startDatetime = new Date()
startDatetime.setHours(8);
startDatetime.setMinutes(0);
startDatetime.setSeconds(0);

//Loop for slots
const slotsArray = [];
for( let i = 0; i < 22; i++ ) {
    //Add Time Iteration
    let startmin = startDatetime.getMinutes();
    startDatetime.setMinutes(startmin + 30);
    // console.log(`Slots: ${startDatetime}`);

    //Append slots into an Array
    let slotHrs = startDatetime.getHours();
    let slotMins = startDatetime.getMinutes();
    let stringMins = slotMins.toString();
    let stringHrs = slotHrs.toString();

    if (stringMins.length == 1) {
        slotMins = stringMins + 0;
    }
    if (stringHrs.length == 1) {
        slotHrs = 0 + stringHrs;
    }

    let slotPeriods = `${slotHrs}.${slotMins}`;
    slotsArray.push(slotPeriods);
}
//Array
arrayLength = slotsArray.length;

// END
//Iterate booking slots
const bookingContainer = document.getElementById('booking_slots');

for(let i = 0; i < arrayLength; i++) {
    const slots = document.createElement("button");
    bookingContainer.appendChild(slots);
    slots.innerHTML = slotsArray[i];
    slots.setAttribute("value", slotsArray[i]);
}

const appendSlot = document.querySelectorAll('.booking_slots button')
appendSlot.forEach(function(btn) {
    btn.setAttribute("type", "submit");
    btn.setAttribute("class", "btn btn-outline-info m-1 btn-sm");
    btn.setAttribute("name", "chosen_slot");
});

const patient_chosen_slot = document.getElementById('chosen_slot').value;
for (x in appendSlot) {
    if (appendSlot[x].innerHTML == patient_chosen_slot) {
        appendSlot[x].setAttribute("class", "btn btn-outline-success m-1 btn-sm active");
        const newSlot = document.getElementById('newSlot');
        const displaySlot = document.getElementById('newDate');
        const tempDateValue = document.getElementById('appt_date');
        newSlot.value = patient_chosen_slot;
        displaySlot.innerHTML = tempDateValue.value;
    }
}


appendSlot.forEach(function(temp) {
    temp.addEventListener("click", checkValue);
})
function checkValue(e) {
    e.preventDefault();
    const temp_var = document.getElementById('newSlot');
    let slotValues = this.value;
    temp_var.value = slotValues; 
}
// END

//Remove "Disabled" Attribute from Appt_date
const disAtt = document.getElementById('disAtt');
disAtt.addEventListener("click", removeDisAtt);

function removeDisAtt(){
    const tempDate = document.getElementById('appt_date');
    tempDate.removeAttribute("disabled");
    console.log(tempDate.value);
}
//END

function postDate(){
    var appt_slot = document.getElementById("chosenDate").value;
    var param = "appt_date="+appt_slot;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'check_slots.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function(){
        if(this.status == 200){
            let takenSlotsArray = JSON.parse(xhr.responseText);
            const tempArray = [];
            
            for (let i = 0; i < takenSlotsArray.length; i++) {
                tempArray.push(takenSlotsArray[i].slice(0,5).replace(":", "."));
            }
            let slot_display = document.querySelectorAll('.booking_slots button');

            for (let i = 0; i < slot_display.length; i++){
                for ( let j = 0; j < tempArray.length; j++ ) {
                    if (tempArray[j] == slot_display[i].value) {
                        slot_display[i].setAttribute("disabled", "disabled");
                    }
                }
            }
        }
    }

    xhr.send(param);
}
postDate();