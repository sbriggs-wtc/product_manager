
//AJAX request for adding a product
function add()
{
    var product_name = prompt("Product Name", "Name");
    var product_price = prompt("Product Price", "Price");

    if (product_name && product_price)
    {
        xhr = new XMLHttpRequest();
        xhr.open('POST', 'includes/addproduct.inc.php');
        xhr.addEventListener('load', function (event){alert(this.response);});
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send("submit=1"+"&product_name="+product_name+"&product_price="+product_price);
        location.reload(true);  //true makes it reload from the server not the cache
    }
    else
        alert("Please fill in all fields");
}

//AJAX request for editing a product
function edit(product_id)
{
    var product_name = prompt("Product Name", "New Name");
    var product_price = prompt("Product Price", "New Price");

    if (product_name && product_price)
    {
        xhr = new XMLHttpRequest();
        xhr.open('POST', 'includes/editproduct.inc.php');
        xhr.addEventListener('load', function (event){alert(this.response);});
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send("submit=1"+"&product_id="+product_id+"&product_name="+product_name+"&product_price="+product_price);
        location.reload(true);  //true makes it reload from the server not the cache
    }
    else
        alert("Please fill in all fields");
}

//AJAX request for removing a product
function remove(product_id)
{   
    if(confirm("Are you sure you want to remove this product?"))
    {
        xhr = new XMLHttpRequest();
        xhr.open('POST', 'includes/removeproduct.inc.php');
        xhr.addEventListener('load', function (event){alert(this.response);});
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send("submit=1"+"&product_id="+product_id);
        location.reload(true);  //true makes it reload from the server not the cache
    }
}