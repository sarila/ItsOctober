<?php
include('include/header.php');
?>


<section class="business-section">
    <div class="container">
        <div class="row m-0">
            <div class="short_wraping">
                <div class="row align-items-center">

                    <div class="col-lg-2 col-md-6 col-sm-12  col-sm-6">
                        <ul class="shorting_grid">
                            <li class="list-inline-item"><a href="business.php"><span class="grid"><i
                                            class="fas fa-th-large"></i></span>Grid</a></li>
                            <li class="list-inline-item"><a href="business-list.php"><span class="list"><i
                                            class="fas fa-list"></i></span>List</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 order-lg-2 order-md-3  bar">
                        <div class="shorting">
                            <div class="shorting_text">
                                <h5>Showing 1-25 of 72 results</h5>
                            </div>
                            <div class="shorting_right">
                                <ul>
                                    <li><a href="#" class="active">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 order-lg-3 order-md-2 col-sm-6">
                        <div class="shorting-right">
                            <label for="short">Short by:</label>
                            <select name="shorts" id="shorts">
                                <option value="mr">Most rated</option>
                                <option value="mv">Most Viewed</option>
                                <option value="nl">News Listings</option>
                                <option value="hr">High Rated</option>
                            </select>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12  order-md-2">
                <div class="business-sidebar">
                    <div class="filter-search-box">
                        <div class="form-group">
                            <div class="input-with-icon">
                                <input type="text" class="form-control" placeholder="Search here…">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <div class="business-tags">
                        <ul>
                            <li class='sub-menu'><a href='#settings'>Select Categories<div
                                        class='fa fa-caret-down right'></div></a>
                                <ul>
                                    <li> <a href="#">Business Financing <span>(25)</span></a> </li>
                                    <li> <a href="#">Business Brokerage <span>(45)</span></a></li>
                                    <li> <a href="#">Business Trends<span>(50)</span></a></li>
                                    <li> <a href="#">Buying a Business <span>(25)</span></a> </li>
                                    <li> <a href="#">Franchising <span>(45)</span></a></li>
                                    <li> <a href="#">Selling a Business<span>(50)</span></a></li>
                                </ul>
                            </li>
                            <li class='sub-menu'><a href='#settings'>Business Types<div class='fa fa-caret-down right'>
                                    </div></a>
                                <ul>
                                    <li> <a href="#">Business Financing <span>(25)</span></a> </li>
                                    <li> <a href="#">Business Brokerage <span>(45)</span></a></li>
                                    <li> <a href="#">Business Trends<span>(50)</span></a></li>
                                    <li> <a href="#">Buying a Business <span>(25)</span></a> </li>
                                    <li> <a href="#">Franchising <span>(45)</span></a></li>
                                    <li> <a href="#">Selling a Business<span>(50)</span></a></li>
                                </ul>
                            </li>
                            <li class='sub-menu'><a href='#settings'>Price Range<div class='fa fa-caret-down right'>
                                    </div></a>
                                <ul>
                                    <li> <a href="#">Business Financing <span>(25)</span></a> </li>
                                    <li> <a href="#">Business Brokerage <span>(45)</span></a></li>
                                    <li> <a href="#">Business Trends<span>(50)</span></a></li>
                                    <li> <a href="#">Buying a Business <span>(25)</span></a> </li>
                                    <li> <a href="#">Franchising <span>(45)</span></a></li>
                                    <li> <a href="#">Selling a Business<span>(50)</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 pt-4">
                        <h6>Advance Features</h6>
                        <ul class="row p-0 m-0">
                            <li class="col-lg-6 col-md-6 p-0">
                                <input id="a-1" class="checkbox-custom" name="a-1" type="checkbox">
                                <label for="a-1" class="checkbox-custom-label">Location</label>
                            </li>
                            <li class="col-lg-6 col-md-6 p-0">
                                <input id="a-2" class="checkbox-custom" name="a-2" type="checkbox">
                                <label for="a-2" class="checkbox-custom-label">Inventory</label>
                            </li>
                            <li class="col-lg-6 col-md-6 p-0">
                                <input id="a-3" class="checkbox-custom" name="a-3" type="checkbox">
                                <label for="a-3" class="checkbox-custom-label">Real Estate</label>
                            </li>
                            <li class="col-lg-6 col-md-6 p-0">
                                <input id="a-4" class="checkbox-custom" name="a-4" type="checkbox">
                                <label for="a-4" class="checkbox-custom-label">Established</label>
                            </li>
                            <li class="col-lg-6 col-md-6 p-0">
                                <input id="a-5" class="checkbox-custom" name="a-5" type="checkbox">
                                <label for="a-5" class="checkbox-custom-label">Cash FLow</label>
                            </li>
                            <li class="col-lg-6 col-md-6 p-0">
                                <input id="a-6" class="checkbox-custom" name="a-6" type="checkbox">
                                <label for="a-6" class="checkbox-custom-label">Franchise</label>
                            </li>
                            <li class="col-lg-6 col-md-6 p-0">
                                <input id="a-7" class="checkbox-custom" name="a-7" type="checkbox">
                                <label for="a-7" class="checkbox-custom-label">Business</label>
                            </li>
                            <li class="col-lg-6 col-md-6 p-0">
                                <input id="a-8" class="checkbox-custom" name="a-8" type="checkbox">
                                <label for="a-8" class="checkbox-custom-label">Assets</label>
                            </li>
                            <li class="col-lg-6 col-md-6 p-0">
                                <input id="a-9" class="checkbox-custom" name="a-9" type="checkbox">
                                <label for="a-9" class="checkbox-custom-label">Resturant</label>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-lg-8 col-md-12 order-lg-2">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="business-box">
                            <div class="grid-img"><img src="assets/img/sale/sale-2.jpg">
                                <span class="for">For Sell</span></div>
                            <div class="business-body">
                                <div class="price-tags">
                                    <span class="rent"> Rent:$1,850 per/M </span>
                                    <span class="cost"> $700,000</span>
                                </div>
                                <h5><a href="business-detail.php">7012 Shine Sehu Street, Liverpool London, LC345AC</a>
                                </h5>
                                <div class="business-body-mid">
                                    <ul>
                                        <li><span>Asking Price:</span> $175,000</li>
                                        <li><span>Cash Flow:</span> $59,436</li>
                                        <li><span>Gross Revenue:</span> $190,272</li>
                                    </ul>
                                    <ul>
                                        <li><span>FF&E:</span> $65,000</li>
                                        <li><span>Inventory:</span> $20,000</li>
                                        <li><span>Established:</span> 1983</li>
                                    </ul>
                                </div>
                                <div class="low d-flex ">
                                    <div class="location "> <i class="fas fa-map-marker-alt"></i> Montreal,
                                        Canada</div>
                                        <div class="end-buttons" data-toggle="tooltip" title="Save Business"><i class="far fa-heart"></i></div>
                                    <div class="end-buttons"data-toggle="tooltip"   title="Compare Business"> <i class="fas fa-random"></i></div>
                                    <div class="end-buttons"data-toggle="tooltip"  title="View Business"> <i class="fas fa-arrow-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="business-box">
                            <div class="grid-img"><img src="assets/img/sale/sale-1.jpg">
                                <span class="for">For Sell</span></div>
                            <div class="business-body">
                                <div class="price-tags">
                                    <span class="rent"> Rent:$1,850 per/M</span>
                                    <span class="cost"> $600,000</span>
                                </div>
                                <h5><a href="business-detail.php">7012 Shine Sehu Street, Liverpool London, LC345AC</a>
                                </h5>
                                <div class="business-body-mid">
                                    <ul>
                                        <li><span>Asking Price:</span> $175,000</li>
                                        <li><span>Cash Flow:</span> $59,436</li>
                                        <li><span>Gross Revenue:</span> $190,272</li>
                                    </ul>
                                    <ul>
                                        <li> <span>FF&E:</span> $65,000</li>
                                        <li> <span>Inventory:</span> $20,000</li>
                                        <li><span>Established:</span> 1983</li>
                                    </ul>
                                </div>
                                <div class="low d-flex ">
                                    <div class="location "> <i class="fas fa-map-marker-alt"></i> Montreal,
                                        Canada</div>     
                                    <div class="end-buttons" data-toggle="tooltip" title="Save Business"><i class="far fa-heart"></i></div>
                                    <div class="end-buttons"data-toggle="tooltip"   title="Compare Business"> <i class="fas fa-random"></i></div>
                                    <div class="end-buttons"data-toggle="tooltip"  title="View Business"> <i class="fas fa-arrow-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="business-box">
                            <div class="grid-img"><img src="assets/img/sale/sale-3.jpg">
                                <span class="for">For Sell</span></div>
                            <div class="business-body">
                                <div class="price-tags">
                                    <span class="rent"> Rent:$1,850 per/M</span>
                                    <span class="cost"> $600,000</span>
                                </div>
                                <h5><a href="business-detail.php">7012 Shine Sehu Street, Liverpool London, LC345AC</a>
                                </h5>
                                <div class="business-body-mid">
                                    <ul>
                                        <li><span>Asking Price:</span> $175,000</li>
                                        <li><span>Cash Flow:</span> $59,436</li>
                                        <li><span>Gross Revenue:</span> $190,272</li>
                                    </ul>
                                    <ul>
                                        <li> <span>FF&E:</span> $65,000</li>
                                        <li> <span>Inventory:</span> $20,000</li>
                                        <li><span>Established:</span> 1983</li>
                                    </ul>
                                </div>
                                <div class="low d-flex ">
                                    <div class="location "> <i class="fas fa-map-marker-alt"></i> Montreal,
                                        Canada</div>     
                                    <div class="end-buttons" data-toggle="tooltip" title="Save Business"><i class="far fa-heart"></i></div>
                                    <div class="end-buttons"data-toggle="tooltip"   title="Compare Business"> <i class="fas fa-random"></i></div>
                                    <div class="end-buttons"data-toggle="tooltip"  title="View Business"> <i class="fas fa-arrow-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="business-box">
                            <div class="grid-img"><img src="assets/img/sale/sale-4.jpg">
                                <span class="for">For Sell</span></div>
                            <div class="business-body">
                                <div class="price-tags">
                                    <span class="rent"> Rent:$1,850 per/M</span>
                                    <span class="cost"> $600,000</span>
                                </div>
                                <h5><a href="business-detail.php">7012 Shine Sehu Street, Liverpool London, LC345AC</a>
                                </h5>
                                <div class="business-body-mid">
                                    <ul>
                                        <li><span>Asking Price:</span> $175,000</li>
                                        <li><span>Cash Flow:</span> $59,436</li>
                                        <li><span>Gross Revenue:</span> $190,272</li>
                                    </ul>
                                    <ul>
                                        <li> <span>FF&E:</span> $65,000</li>
                                        <li> <span>Inventory:</span> $20,000</li>
                                        <li><span>Established:</span> 1983</li>
                                    </ul>
                                </div>
                                <div class="low d-flex ">
                                    <div class="location "> <i class="fas fa-map-marker-alt"></i> Montreal,
                                        Canada</div>     
                                    <div class="end-buttons" data-toggle="tooltip" title="Save Business"><i class="far fa-heart"></i></div>
                                    <div class="end-buttons"data-toggle="tooltip"   title="Compare Business"> <i class="fas fa-random"></i></div>
                                    <div class="end-buttons"data-toggle="tooltip"  title="View Business"> <i class="fas fa-arrow-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation  ">
  <ul class="pagination justify-content-center mb-3">
    <li class="page-item ">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>	
            </div>
        </div>
    </div>
</section>
<?php
include('include/footer.php');
?>   