function goToExam() {
    location.href = './exam.html';
}
function goToReview() {
    location.href = './review.html';
}
function goToExport() {
    location.href = './export.html';
}

// Drop zone functions
function uploadFile() {
    var input = document.getElementById('fileUpload');
    var infoArea = document.getElementById('insideText');
    var fileName = input.files[0].name;

    //Shows the chosen file name
    infoArea.textContent = 'File name: ' + fileName;

    //Shows the buttons only after uploading csv file
    var button = document.getElementById('upload').addEventListener("click", function () { document.getElementById('buttons').style.display = "inline-block"; })
}
