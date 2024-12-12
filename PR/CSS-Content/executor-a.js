
const input = document.getElementById("html-input");
const executeButton = document.getElementById("execute");
const input_b = document.getElementById("html-input-b");
const executeButton_b = document.getElementById("execute-b");
const input_c = document.getElementById("html-input-c");
const executeButton_c = document.getElementById("execute-c");

function editEditor() {
      // ang galing ko grabe
      const deleteThisSh = document.getElementById("htmlOutput");
      deleteThisSh.remove()
      let outputCreate = document.createElement("iframe");
      outputCreate.id = "htmlOutput";
      outputCreate.style = "min-width:100%; height: 200px; border: 2px black solid;";
      outputCreate.src = "about:blank"
      document.getElementById("the-output").appendChild(outputCreate)
      const Output = document.getElementById("htmlOutput").contentDocument;
      // Insert some code hahahahaha
      Output.open()
      Output.write(input.value);
      Output.close();
}

function editEditor2() {
  console.log("test")
    // ang galing ko grabe
    const deleteThisSh = document.getElementById("htmlOutput-b");
    deleteThisSh.remove()
    let outputCreate = document.createElement("iframe");
    outputCreate.id = "htmlOutput-b";
    outputCreate.style = "min-width:100%; height: 200px; border: 2px black solid;";
    outputCreate.src = "about:blank"
    document.getElementById("the-output-b").appendChild(outputCreate)
    const Output = document.getElementById("htmlOutput-b").contentDocument;
    // Insert some code hahahahaha
    Output.open()
    Output.write(input_b.value);
    Output.close();
}

function editEditor3() {
  console.log("test")
    // ang galing ko grabe
    const deleteThisSh = document.getElementById("htmlOutput-c");
    deleteThisSh.remove()
    let outputCreate = document.createElement("iframe");
    outputCreate.id = "htmlOutput-c";
    outputCreate.style = "min-width:100%; height: 200px; border: 2px black solid;";
    outputCreate.src = "about:blank"
    document.getElementById("the-output-c").appendChild(outputCreate)
    const Output = document.getElementById("htmlOutput-c").contentDocument;
    // Insert some code hahahahaha
    Output.open()
    Output.write(input_c.value);
    Output.close();
}


executeButton.onclick = editEditor
executeButton_b.onclick = editEditor2
executeButton_c.onclick = editEditor3



// Di ko ma post yung JS so copypaste mo itong text