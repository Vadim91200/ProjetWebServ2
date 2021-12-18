<section class="banner-bottom py-5">
        <div class="container">
            <div class="content-grid">
                <div class="content-bottom">
                    <form action="index.php?controller=proccess_deposit" method="post" url="/upload-picture" enctype="multipart/form-data">
                        <div class="field-group">
                            <input name="picture" type="file" onchange="previewPicture(this)" accept=".jpg, .png, .gif" required="">
                        </div>
                    
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="ProductName" id="text1" type="text" value="" placeholder="Product Name" required="">
                            </div>
                        </div>
                        <div class="field-group">
                            
                            <div class="content-input-field">
                                <input name="ProductDescription" id="text2" type="text" value="" placeholder="Product Description" required="">
                            </div>
                        </div>
                        <div class="field-group">

                            <div class="content-input-field">
                                <input name="ProductPrice" id="text3" type="text" value="" placeholder="Product Price" required="">
                            </div>
                        </div>
                        <div class="field-group">

                            <div class="content-input-field">
                                <input name="ProductCreationDate" id="text4" type="date" value="" placeholder="Product Creation date" required="">
                            </div>
                        </div>
                        <div class="content-input-field">
                            <button type="submit" class="btn">Deposit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>