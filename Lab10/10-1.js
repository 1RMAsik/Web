let caseArray = ['uppercase', 'none', 'capitalize', 'lowercase'];
let currentCaseIndex = 0;
function changeCase(buttonClicked){
    let title = document.querySelector('h2');
    let number = document.querySelector('h1');
    if(buttonClicked === 'right'){
        if(currentCaseIndex === 3){
            currentCaseIndex = 0;
        }
        else{
           currentCaseIndex++;
        }
    }
    else if(buttonClicked === 'left'){
        if(currentCaseIndex === 0){
            currentCaseIndex = 3;
        }
        else {
            currentCaseIndex--;
        }
    }
    title.style.textTransform = caseArray[currentCaseIndex];
    number.innerText = currentCaseIndex;
}