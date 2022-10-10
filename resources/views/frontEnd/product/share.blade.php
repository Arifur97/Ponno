<html>
<head>
    <title>Your Website Title</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="http://localhost/ponnobahar/public/product-details/".{{ $product->id }} />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Ponnobahar.com - {{ $product->product_name }}" />
    <meta property="og:description"   content="{{ $product->product_short_description }}" />
    <meta property="og:image"         content="{{ asset($product->product_image) }}" />
</head>
<body>

</body>
</html>