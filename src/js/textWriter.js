let welcome_words = document.getElementById("welcome_words"),
      wordToBeWritten = "Would you like to explore our loving community?",
      counter = 0;

window.addEventListener("load", runAnimation);

function runAnimation() {
  let myInterval = setInterval( function write() {
    welcome_words.innerHTML += wordToBeWritten[(wordToBeWritten.length + counter) - wordToBeWritten.length];
    counter++;
    (counter == wordToBeWritten.length) ? clearInterval(myInterval) : myInterval;
  }, 80)
}
