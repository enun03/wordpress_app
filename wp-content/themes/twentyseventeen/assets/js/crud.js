document.head.innerHTML += `<link rel="stylesheet" type="text/css" href="/wordpress_app/wp-content/themes/twentyseventeen/assets/css/crud.css" />`;

function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                const users = JSON.parse(this.responseText);
                console.log(users);
                
                var txtHint = document.getElementById("txtHint");
                var output = `
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Last</th>
                                <th>Age</th>
                                <th>Hometown</th>
                                <th>Job</th>
                            </tr>    
                        </thead>
                        <tbody>
                `;
                users.forEach(user => {
                    output += `
                            <tr>
                                <td>${user.firstName}</td>
                                <td>${user.lastName}</td>
                                <td>${user.age}</td>
                                <td>${user.hometown}</td>
                                <td>${user.job}</td>
                            </tr>    
                    `;
                });
                output += `
                        </tbody>
                    </table>
                `;
                txtHint.innerHTML = output;
            }
        };
        xmlhttp.open("GET","/wordpress_app/wp-content/themes/twentyseventeen/getuser.php/?q="+str,true);
        xmlhttp.send();
    }
}