<div class="category-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            @foreach($categorys as $indexCatgory => $catygoryItem )
                <li class=" {{$indexCatgory == 0 ? 'active' : ''}} ">
                    <a href="#category_tab_{{$catygoryItem->id}}" data-toggle="tab">
                        {{$catygoryItem->name}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="tab-content">
        @foreach($categorys as $indexCatgoryProduct => $catygoryItemProduct )
        <div class="tab-pane fade {{$indexCatgoryProduct == 0 ? 'active in': ''}}" id="category_tab_{{$catygoryItemProduct->id}}">

            @foreach($catygoryItemProduct->products as $productItemTabs)
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{config('app.base_url') . $productItemTabs->feature_image_path}}" alt=""/>
                            <h2>{{$productItemTabs->price}} </h2>
                            <p>{{$productItemTabs->name }}</p>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        @endforeach

    </div>
</div>