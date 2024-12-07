const editor = document.getElementById("editor");
const input = document.getElementById("html-input");
const input_b = document.getElementById("html-input-b");
const input_c = document.getElementById("html-input-c");
const Output = document.getElementById("htmlOutput").contentDocument;
const Output_b = document.getElementById("htmlOutput-b").contentDocument;
const Output_c = document.getElementById("htmlOutput-c").contentDocument;
const executeButton = document.getElementById("execute");
const executeButton_b = document.getElementById("execute-b");
const executeButton_c = document.getElementById("execute-c");

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

function editEditor3() {
  console.log("test")
  Output_c.open()
  Output_c.write(input_c.value);
  Output_c.close();
}

executeButton.onclick = editEditor
executeButton_b.onclick = editEditor2
executeButton_c.onclick = editEditor3
editor.addEventListener("click", openEditor);

// Di ko ma post yung JS so copypaste mo itong text