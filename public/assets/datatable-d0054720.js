document.addEventListener("DOMContentLoaded", function () {
    // Your existing JavaScript code here
    
    // Assuming responseData contains the imported album data
    var responseData = {!! json_encode($responseData) !!};
  
    // Populate the download data table with the imported album data
    var downloadTable = new Tabulator("#download-table", {
      // Configure table options here
      data: responseData,
      columns: [
        { title: "User ID", field: "userId" },
        { title: "ID", field: "id" },
        { title: "Title", field: "title" }
      ]
    });
  
    // Add event listeners for download buttons
    document.getElementById("download-csv").addEventListener("click", function () {
      downloadTable.download("csv", "data.csv");
    });
  
    document.getElementById("download-json").addEventListener("click", function () {
      downloadTable.download("json", "data.json");
    });
  
    document.getElementById("download-xlsx").addEventListener("click", function () {
      downloadTable.download("xlsx", "data.xlsx", { sheetName: "Albums" });
    });
  
    document.getElementById("download-pdf").addEventListener("click", function () {
      downloadTable.download("pdf", "data.pdf", { orientation: "landscape", title: "Album Data" });
    });
  
    document.getElementById("download-html").addEventListener("click", function () {
      downloadTable.download("html", "data.html", { style: true });
    });
  });
  