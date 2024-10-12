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
                            <form action="items" method="POST">
                                @csrf
                                <h2>Product Name</h2>
                                <div class="product-category">
                                        <label for="name">Product Name</label>
                                        <br>
                                        <input type="text" id="name" name="name">
                                        <br>
                                        <label for="description">Product-description</label>
                                        <br>
                                        <textarea rows="5" cols="30" name="description" placeholder="enter product description"></textarea>
                                </div>
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
                                <h2>Packaging Selling Options </h2>
                                    <div class="selling-type">
                 {{-- By adding [] to the name the result of the input will be sent as an
                                      array since the user may select two or more options --}}

                                            <input type="checkbox" name="option[]" value="pieces" >Pieces<br>
                                            <input type="checkbox" name="option[]" value="packet" >Packet<br>
                                            <input type="checkbox" name="option[]" value="cartoon" >Cartoon<br>

                                    </div>
                                <h2>pricing</h2>
                                    <div class="pricing">

                                            <label>Price</label><br>
                                            <input type="number" name="price" min="0">

                                    </div>
                                <br>

                                <h2>Status</h2>
                                <div class="product-category">

                                    <label for="Category">product-category</label>
                                    <br>
                                    <select name="status">
                                        <option value="Available">Available</option>
                                        <option value="Not Available">Not Available</option>
                                    </select>
                                </div>

                                <h2>Stock</h2>
                                <div class="pricing">

                                    <label>Stock</label><br>
                                    <input type="number" name="stock" min="0">

                                </div>

                                    <div class="add-button">
                                        <button>add product</button>
                                    </div>
                            </form>
                        </div>
            </div>
        </body>
</html>
