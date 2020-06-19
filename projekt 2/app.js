const texts = ["websites", "illustrations", "pancakes"];
let count = 0;
let index = 0;
let currentText = "";
let letter = "";

(function type() {
 if (count === texts.lenght) {
  count = 0;
 }
 currentText = texts[count];
 letter = currentText.slice(0, ++index);

 document.querySelector('.typing').textContent = letter;
 if (letter.lenght === currentText.lenght) {
   count++;
   index = 0;
 }
 setTimeout(type, 400);

})();