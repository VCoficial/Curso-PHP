// fetch usando el GET
let url1 = "https://jsonplaceholder.typicode.com/posts";
//let url2 = "http://localhost/php227/fetch/ejemploapi.php";

fetch(url1)
  .then((response) => {
    return response.json();
  })
  .then((data) => {
    //console.log(response);
    let datos = document.getElementById("datos");
    for (let i = 0; i <= data.length; i++) {
      datos.innerHTML += data[i].id + "  " + data[i].title + "<br>";
    }
  })
  .catch((error) => {
    console.log("error: ", error);
  });
