<?php
    use Catalog\Model\Product;

    $layout = Layout::get_instance();
    $layout->set_statics(["product_detail.css","vue.min.js","product_detail.js"]);
    $layout->get_static_style();
    $product_id = Route::get_instance()->get_params();
    $product = new Product($product_id["product_id"]);
?>

<div class="container" id="app" v-cloak >
    <product product_id="<?=$product->id?>"></product>
</div>


<?php
    $layout->get_static_script();
?>

