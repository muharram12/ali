            
           <?php
           include('components/header.php')
           ?> 
            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light justify-content-center mx-0">
                    <div class="col-md-12 px-3 py-5">
                        <h3>add category</h3>
                        <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">category name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="categoryname">
                                    <div id="emailHelp" class="form-text">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">category image</label>
                                    <input type="file" class="form-control" id="exampleInputPassword1"
                                    image="categoryimage">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                    </div>
                </div>
            </div>
            <!-- Blank End -->
            <?php
           include('components/footer.php')
           ?> 