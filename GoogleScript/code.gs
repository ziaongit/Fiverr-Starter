function doGet() {
    return HtmlService.createTemplateFromFile('Index.html')
        .evaluate() // evaluate MUST come before setting the Sandbox mode
        .setXFrameOptionsMode(HtmlService.XFrameOptionsMode.ALLOWALL);
}


/* @Include JavaScript and CSS Files */
function include(filename) {
  return HtmlService.createHtmlOutputFromFile(filename)
      .getContent();
}

/* @Process Form */
function processForm(formObject) {
  var url = "https://docs.google.com/spreadsheets/d/11y3hnlfulAO_ADbkUnjX3awN0kAneSNg1gnFzq1ynIE/edit#gid=0";
  var ss = SpreadsheetApp.openByUrl(url);
  var ws = ss.getSheetByName("Data");
  
   ws.appendRow([formObject.timestamp,
                formObject.name,
                formObject.institution,
                formObject.department,
                formObject.job_function,
                formObject.phone,
                formObject.email,
                formObject.how_can_we_help_you]);
}