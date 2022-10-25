const loadData = async () => {
    // load the data from the endpoint (wait until they arraive)
    //loop throught hte data
    // for each data item generate  an elemnt within #latest-books element
    const response = await fetch(
        "https://classes.codingbootcamp.cz/assets/classes/books-api/latest-books.php"
    );
    const data = await response.json();
    console.log(data);
    // loop through the data
    data.forEach((item) => {
        const container = document.querySelector("#latest-books");
        container.innerHTML += "<li>" + item.title + "</li>";
    });
};
loadData();
