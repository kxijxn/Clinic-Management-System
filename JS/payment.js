function scrollToCash (){
    const toDiv = document.getElementById('cash-tab');
    const remvInvis = document.getElementById('invisTab');
    // const ccVar = document.getElementById('credit_card-tab')
    // ccVar.setAttribute("class","nav-link disabled");

    remvInvis.setAttribute("class", "container m-3 mx-auto visible")
    toDiv.scrollIntoView();
}

function scrollToCC(){
    const toDiv = document.getElementById('credit_card-tab');
    const remvInvis = document.getElementById('invisTab');
    
    toDiv.click();//Set event to trigger tab

    remvInvis.setAttribute("class", "container m-3 mx-auto visible");
    toDiv.scrollIntoView();
}