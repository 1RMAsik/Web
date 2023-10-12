let caseArray = ['uppercase', 'none', 'capitalize', 'lowercase'];
let currentCaseIndex = 0;
let arrN = document.querySelector('h3')
function changeCase(buttonClicked){
    let title = document.querySelector('h2');
    let number = document.querySelector('h1');

    if(buttonClicked === 'right'){
        if(currentCaseIndex === caseArray.length-1){
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

let arr = [1, 2, 3, 4, 5];

function addElementToBeginning() {
    const input = document.querySelector('#add-to-beginning');
    caseArray.unshift(input.value);
    input.value = '';
    console.log(caseArray);

}

function addElementToEnd() {
    const input = document.querySelector('#add-to-end');
    caseArray.push(input.value);
    input.value = '';
    console.log(caseArray);
}

function removeElementFromBeginning() {
    caseArray.shift();
    console.log(caseArray);
}

function removeElementFromEnd() {
    caseArray.pop();
    console.log(caseArray);
}

