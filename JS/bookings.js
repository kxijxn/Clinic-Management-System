
//Function to display available slot form
const nextBtn = document.querySelector('.next-btn');
const fieldset = document.querySelector('.fieldset');
const hideSection = document.querySelector('.control-hidden');
const checkBtn = document.getElementById('checkBtn');

nextBtn.addEventListener('click', (e) => {
    e.preventDefault();
    checkBtn.click();
    fieldset.style.opacity= "0.5";
    hideSection.removeAttribute("hidden");
});

const finalBtn = document.querySelector(".submitBtn")
const form1 = document.querySelector(".form1")

finalBtn.addEventListener('click', (d) => {
    fieldset.removeAttribute("disabled");

})

// END
//Prevent Submit Button
// const nextBtn2 = document.querySelector('.next-btn2');

// nextBtn2.addEventListener('click', (modalPop) => {
//     modalPop.preventDefault();
// })
//END

// Declare Initial Datetime
let startDatetime = new Date()
startDatetime.setHours(8);
startDatetime.setMinutes(0);
startDatetime.setSeconds(0);
console.log(startDatetime);

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
/*START
const bookingContainer = document.querySelector('.booking_slots');

for(let i = 0; i < arrayLength; i++) {
    const slots = document.createElement("button");
    bookingContainer.appendChild(slots);
    slots.innerHTML = slotsArray[i];
    slots.setAttribute("value", slotsArray[i]);
}
END
*/

//START
checkBtn.addEventListener("click", postDate);

function postDate(e){
    e.preventDefault();
    var appt_slot = document.getElementById("appt_date").value;
    var param = "appt_date="+appt_slot;

    fieldset.setAttribute("disabled", "disabled"); //Disable first form

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
            for(let i = 0; i < arrayLength; i++) {
                const slots = document.createElement("button");
                const bookingContainer = document.querySelector('.booking_slots');
                bookingContainer.appendChild(slots);
                slots.innerHTML = slotsArray[i];
                slots.setAttribute("value", slotsArray[i]);
                for ( let j = 0; j < tempArray.length; j++ ) {
                    if (tempArray[j] == slotsArray[i]) {
                        slots.setAttribute("disabled", "disabled");
                    }
                }
            }
            const appendSlot = document.querySelectorAll('.booking_slots button')
            appendSlot.forEach(function(btn) {
                btn.setAttribute("type", "submit");
                btn.setAttribute("class", "btn btn-outline-info m-1 btn-sm");
                btn.setAttribute("name", "chosen_slot");
            });
            //Patient chosen time slot
            appendSlot.forEach(function(btn) {
                btn.addEventListener("click", checkValue);
            })
            function checkValue() {
                const temp_var = document.getElementById('patient_chosen_slot');
                let slotValues = this.value;
                temp_var.value = slotValues;
            }
            let takenPeriods = document.getElementById('arrayRepository')
            takenPeriods.value = tempArray;
        }
    }

    xhr.send(param);
}
//END
//Patient chosen time slot
// const appendSlot = document.querySelectorAll('.booking_slots button')
// appendSlot.forEach(function(btn) {
//     btn.addEventListener("click", checkValue);
// })
// function checkValue() {
//     const temp_var = document.getElementById('patient_chosen_slot');
//     for (let i = 0; i < 22; i++) {
//         let slotValues = this.value;
//         temp_var.value = slotValues;
//     }
// }



// Function repository
// $("input[id='tel_number']").on("input", function () {
//     $("input[id='actual_tel']").val(destroyMask(this.value));
//     this.value = createMask($("input[id='actual_tel']").val());
// })

// function createMask(string) {
//     console.log(string)
//     return string.replace(/(\d{3})(\d{3})(\d{3})/, "$1-$2-$3");
// }

// function destroyMask(string) {
//     console.log(string)
//     return string.replace(/\D/g, '').substring(0, 9);
// }
