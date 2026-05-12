function searchEmployer() {
    let keyword = document.getElementById('search_keyword').value;
    let xhttp = new XMLHttpRequest();
    
    xhttp.open('GET', '../controller/search_employer.php?keyword=' + keyword, true);
    xhttp.send();
    
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            let employers = JSON.parse(this.responseText);
            displayResults(employers);
        }
    }
}

function displayResults(employers) {
    let html = '<br><br><table border="1" cellpadding="10">';
    html += '<tr><th>ID</th><th>Employer Name</th><th>Company Name</th><th>Contact No</th><th>Username</th></tr>';
    
    if(employers.length == 0) {
        html += '<tr><td colspan="5" align="center">No employers found!</td></tr>';
    } else {
        for(let i = 0; i < employers.length; i++) {
            html += '<tr>';
            html += '<td>' + employers[i].id + '</td>';
            html += '<td>' + employers[i].employer_name + '</td>';
            html += '<td>' + employers[i].company_name + '</td>';
            html += '<td>' + employers[i].contact_no + '</td>';
            html += '<td>' + employers[i].username + '</td>';
            html += '</tr>';
        }
    }
    
    html += '</table>';
    document.getElementById('result').innerHTML = html;
}