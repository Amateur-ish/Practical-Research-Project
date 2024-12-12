const editor = document.getElementById("editor");
const input = document.getElementById("html-input");
const executeButton = document.getElementById("execute");
const preset = `<!DOCTYPE html>
<html>
  <head>
    <style>
      body 
      {
      background-color: cyan;
      }
    </style>
  </head>
  <body>
    <h1> This is how you use CSS</h1>
    <h2> The CSS selects and targets the body of the html and turns the background-color to Cyan.</h2> 
  </body>
</html>
`;
input.value = preset;


function openEditor(){
    console.log("Opening the Editor...")
    editor.style.display = "none";
}

function editEditor() {
    // ang galing ko grabe
    const deleteThisSh = document.getElementById("htmlOutput");
    deleteThisSh.remove()
    let outputCreate = document.createElement("iframe");
    outputCreate.id = "htmlOutput";
    outputCreate.style = "min-width:100%; height: 250px; border: 2px black solid;";
    outputCreate.src = "about:blank"
    document.getElementById("the-output").appendChild(outputCreate)
    const Output = document.getElementById("htmlOutput").contentDocument;
    // Insert some code hahahahaha
    Output.open()
    Output.write(input.value);
    Output.close();
}

executeButton.onclick = editEditor
editor.addEventListener("click", openEditor);

// Di ko ma post yung JS so copypaste mo itong text