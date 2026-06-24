{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc>{{ url('/') }}</loc>
        <priority>1.00</priority>
    </url>

    <url>
        <loc>{{ url('/berita') }}</loc>
        <priority>0.90</priority>
    </url>

    <url>
        <loc>{{ url('/tentang/profil-perusahaan') }}</loc>
        <priority>0.80</priority>
    </url>

    <url>
        <loc>{{ url('/kapal') }}</loc>
        <priority>0.80</priority>
    </url>

    @foreach($berita as $item)
        <url>
            <loc>{{ route('berita.detail', $item->slug) }}</loc>
            <lastmod>{{ $item->updated_at->toAtomString() }}</lastmod>
            <priority>0.70</priority>
        </url>
    @endforeach

</urlset>