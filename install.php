<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "e8fe9a5aab6f26efd64a7ccb34cb8e66";
$scopes = "read_orders,write_products";
$redirect_uri = "https://jyothishlal24.github.io/Shopify/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();