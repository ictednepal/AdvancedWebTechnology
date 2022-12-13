//console.log(window);

let xhr = new XMLHttpRequest();
// console.log(xhr);
xhr.open("GET","https://jsonplaceholder.typicode.com/todos/1234");
xhr.send();


// xhr.onload = () =>{
//     //console.log(xhr.response);
//     console.log(JSON.parse(xhr.response));
// }

// xhr.onload = () =>{
//     // document.write(xhr.response);
//     document.write(`<pre>${xhr.response}</pre>`)
// }

// xhr.onload = () =>{
//     // console.log(xhr);
//     if(xhr.status==200){
//         document.write(`<pre>${xhr.response}</pre>`);
//     }
//     else{
//         document.write(`Something went wrong on status : ` +(xhr.status))
//     }
// }


xhr.onerror = () =>{
    console.log(xhr);
}