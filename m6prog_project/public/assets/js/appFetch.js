let getForm = document.getElementById("getForm");

getForm.addEventListener("submit", (event) =>
{
    event.preventDefault();
    toPhpwithGet(event);
})

function toPhpwithGet(event) {
    let form = event.target;
    const data = new FormData(form);

    console.log(data.get("article"));
    console.log(data.get("maxPrice"));

    let url = "fetchGet.php?article="+data.get("article")+"&maxPrice="+data.get("maxPrice");
    fetch(url)
    .then((response)=>{
        console.log(response);
    });
}

let postForm = document.getElementById("postForm");

postForm.addEventListener("submit", (event) =>
{
    event.preventDefault();
    toPhpWithPost(event);
});

function toPhpWithPost(event) {
    let form = event.target;
    let jsonForm = FormToDictionary(form);
    console.log(jsonForm);

    let options =
    {
        method: "POST",
        cache: "no-cache",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(jsonForm)
    }
    console.log(options);

    fetch ("fetchPost.php",options)
    .then(async (response)=>
    {
        console.log(response);
    });
}

function FormToDictionary(form)
{
    const data = new FormData(form);
    let formKeyValue={};
    for (const [name,value] of data)
    {
        formKeyValue[name] = value;
    }
    return formKeyValue;
}

let form = event.target;//de submit event komt vanuit de form FormToDictionary (form);
    let jsonForm = FormToDictionary(form);
    console.log(jsonForm);

    let options =
    {
        method: "POST",
        cache: "no-cache",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(jsonForm)
    }
 
    fetch("fetchPost.php", options)
    .then(async (response)=>
    {
        console.log(response);
    });


