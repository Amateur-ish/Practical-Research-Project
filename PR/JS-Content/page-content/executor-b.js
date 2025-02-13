
const input = document.getElementById("html-input");
const executeButton = document.getElementById("execute");
const input_b = document.getElementById("html-input-b");
const executeButton_b = document.getElementById("execute-b");

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
executeButton.onclick = editEditor
executeButton_b.onclick = editEditor2



// Di ko ma post yung JS so copypaste mo itong text