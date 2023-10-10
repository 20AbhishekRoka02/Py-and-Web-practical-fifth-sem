let chances = 3;
function questions() {
    let answers = [];
    
    alert("You are Elliot, sitting inside Nuclear Power Plant which is about to blow up.");
    alert("You are the only one who can stop power plant to blow up, and save your people. By answering the upcoming questions.");

    if (confirm("Are you ready?")){
        // question1
        answers.push(takeInput("You are in a 'Dark Room'. You have to choose 'Torch' or 'Matchstick'. What will you choose?",["torch","matchstick"]));

        // Question 2
        answers.push(takeInput("You have a good conversation with a person, who met you in an event and you are talking for past one week. She calls you friend. Do you trust her? Yes or No",["yes","no"]));

        // Question 3
        answers.push(takeInput("You are talking with a machine, who claims your right answers will stop this place from blown up. Do you believe on that machine? 'Yes' or 'No'",["yes","no"]));

        // Question 4
        answers.push(takeInput("You are leaving the room, but your friend is calling you to save her. 2 seconds are remaining for this area to blown up. What will you do? 'leave her' or 'help her'", ["leave her","help her"]));

        // Question 5
        answers.push(takeInput("Time is a limited resource. 'True' or 'False'",['true','false']));
    }
    gameResult(answers)
}

function gameResult(answers) {
    let result = true;
    let trueCondition = ['false','help her','yes','yes','matchstick'].
    reverse()

    for (let i=0; i<5; i++){
        if(answers[i]!=trueCondition[i]){
            result=false;
            break;
        }
        
    }
    if (result){
        alert("You have lost the game!")
        alert("But, Bomb diffused!");   
    }else{
        alert("You have won the game!");
        alert("But bomb is not diffused yet. Retry!")
    
        chances--;
        if (chances>0){
            alert(chances + " chance(s) are remaining!")
            questions()
        } else{
            alert("RIP Elliot!")
        }

    }
}

function takeInput(question, options) {
    let answer;
    while (true) {
        answer = prompt(question);

        if (options.indexOf(answer.toLowerCase()) > -1) {
            break;
        }
    }
    return answer;

    
}
window.onload=questions;