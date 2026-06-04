@extends('layouts.app')

@section('title', 'Peraturan Maritim')

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/maritim-policy.css') }}">

<section class="policy-hero">
    <div class="container">

        <span class="policy-label">
            News / Maritim Policy
        </span>

        <h1>
            Maritim Policy
        </h1>

        <p>
            Referensi regulasi, kebijakan maritim, dan produk hukum resmi
            yang berkaitan dengan operasional pelayaran.
        </p>

    </div>
</section>

<section class="policy-section">
    <div class="container">

        @forelse($policies as $policy)

            <div class="policy-card">

                <div class="policy-content">

                    <span class="policy-badge">
                        {{ $policy->category ?? 'Regulasi Maritim' }}
                    </span>

                    <h3>
                        {{ $policy->title }}
                    </h3>

                    <p>
                        {{ $policy->summary }}
                    </p>

                    <div class="policy-meta">

                        <span>
                            Instansi: {{ $policy->source_name }}
                        </span>

                        <span>
                            Tahun: {{ $policy->document_year }}
                        </span>

                    </div>

                </div>

                <div class="policy-action">

                    <a
                        href="{{ $policy->source_url }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="btn-detail">
                        Baca Detail
                    </a>

                    <a
                        href="{{ $policy->source_url }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="btn-source">
                        Sumber Resmi
                    </a>

                </div>

            </div>

        @empty

            <div class="policy-empty">
                Belum ada data Maritim Policy.
            </div>

        @endforelse

        @if ($policies->hasPages())

            <div class="policy-pagination">

                @if ($policies->onFirstPage())
                    <span class="page-disabled">Prev</span>
                @else
                    <a href="{{ $policies->previousPageUrl() }}">Prev</a>
                @endif

                @foreach ($policies->getUrlRange(1, $policies->lastPage()) as $page => $url)

                    <a
                        href="{{ $url }}"
                        class="{{ $page == $policies->currentPage() ? 'active' : '' }}">
                        {{ $page }}
                    </a>

                @endforeach

                @if ($policies->hasMorePages())
                    <a href="{{ $policies->nextPageUrl() }}">Next</a>
                @else
                    <span class="page-disabled">Next</span>
                @endif

            </div>

        @endif

        <div class="policy-disclaimer">

            <strong>Disclaimer:</strong>
            Informasi regulasi pada halaman ini disajikan sebagai referensi
            publik yang bersumber dari portal resmi pemerintah dan instansi terkait.
            Validitas serta pembaruan dokumen sepenuhnya mengikuti publikasi dari
            lembaga penerbit resmi.

        </div>

    </div>
</section>

@endsection