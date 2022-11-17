<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

@foreach($products as $product)
<url>
 <loc>{{ url($product->slug) }}</loc>
 <changefreq>monthly</changefreq>
 <priority>1.00</priority>
</url>
@endforeach
@foreach($productCategories as $category)
<url>
 <loc>{{ url($category->slug) }}</loc>
 <changefreq>monthly</changefreq>
 <priority>1.00</priority>
</url>
@endforeach
@foreach($services as $service)
<url>
 <loc>{{ url($service->slug) }}</loc>
 <changefreq>monthly</changefreq>
 <priority>1.00</priority>
</url>
@endforeach
@foreach($serviceCategories as $category)
<url>
 <loc>{{ url($category->slug) }}</loc>
 <changefreq>monthly</changefreq>
 <priority>1.00</priority>
</url>
@endforeach
@foreach($blogs as $blog)
<url>
 <loc>{{ url($blog->slug) }}</loc>
 <changefreq>monthly</changefreq>
 <priority>1.00</priority>
</url>
@endforeach



</urlset>
