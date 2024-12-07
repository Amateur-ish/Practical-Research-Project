const editor = document.getElementById("editor");
const input = document.getElementById("html-input");
const Output = document.getElementById("htmlOutput").contentDocument;
const executeButton = document.getElementById("execute");
const input_b = document.getElementById("html-input-b");
const Output_b = document.getElementById("htmlOutput-b").contentDocument;
const executeButton_b = document.getElementById("execute-b");

function openEditor(){
    console.log("Opening the Editor...")
    editor.style.display = "none";
}

function editEditor() {
    console.log("test")
    Output.open()
    Output.write(input.value);
    Output.close();
}

function editEditor2() {
  console.log("test")
  Output_b.open()
  Output_b.write(input_b.value);
  Output_b.close();
}
executeButton.onclick = editEditor
executeButton_b.onclick = editEditor2
editor.addEventListener("click", openEditor);


// Di ko ma post yung JS so copypaste mo itong text