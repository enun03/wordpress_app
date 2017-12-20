document.head.innerHTML += `
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
`;

let output = document.querySelector('#output');

const ChuckNorris = {
  getJoke: () => {
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      console.log(this.status);
      if (this.readyState == 4 && this.status == 200) {
        let res = JSON.parse(this.responseText);
         
        console.log(res);
  
        output.innerHTML = `
        <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
          <div class="card-header">Chuck joke #${res.value.id}</div>
          <div class="card-body">
            <p class="card-text">${res.value.joke}</p>
          </div>
        </div>
        `;
      }
    };
    xhr.open("GET", "https://api.icndb.com/jokes/randome");
    xhr.send();

  }
}

document.querySelector('#btnGetJoke').addEventListener('click', (ev)=>{
    ChuckNorris.getJoke();
});