    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add New product</title>
        <link rel="stylesheet" href="css/addproduct.css">
    </head>
        <body>
            <div class="container">
                        <h2>Description</h2>
                        <div class="product-description">
                            <form action="additempage" method="POST">
                                        <label for="name">Product Name</label>
                                        <br>
                                        <input type="text" id="name" name="name">
                                        <br>
                                        <label for="description">Product-description</label>
                                        <br>
                                        <textarea rows="5" cols="30" name="description" placeholder="enter product description"></textarea>

                                <h2>Category</h2>
                                <div class="product-category">

                                        <label for="Category">product-category</label>
                                        <br>
                                        <select name="category">
                                            <option value="office">office</option>
                                            <option value="school">school</option>
                                            <option value="kids">Kids</option>
                                            <option value="gift">Gift</option>
                                            <option value="gov">Government</option>

                                        </select>
                                </div>
                                <h2>Selling Type</h2>
                                    <div class="selling-type">

                                            <input type="checkbox" name="type" value="pieces" >Pieces<br>
                                            <input type="checkbox" name="type" value="packet" >Packet<br>
                                            <input type="checkbox" name="type" value="cartoon" >Cartoon<br>

                                    </div>
                                <h2>pricing</h2>
                                    <div class="pricing">

                                            <label>Price</label><br>
                                            <input type="number" name="price" min="0">

                                    </div>
                                <br>
                                    <div class="add-button">
                                        <button>add product</button>
                                    </div>
                            </form>
                        </div>
            </div>
        </body>
</html>
