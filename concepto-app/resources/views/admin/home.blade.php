@extends('layouts.admin')

@section('title', 'Concepto — Panel de administración')

@section('content')

<section class="container mt-100 pb-32">

    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewbox="0 0 48 48" fill="none" class="m-0-auto">
        <path fill="#DEE6FE" d="M42 24c0 9.941-8.059 18-18 18S6 33.941 6 24 14.059 6 24 6s18 8.059 18 18Z" />
        <path fill="#2741E8" fill-rule="evenodd" d="M29.775 14.521a5.556 5.556 0 0 0-4.727-.094l-9.09 4.059c-.609.271-1 .872-1 1.534v1.07c0 .639.363 1.222.938 1.506l7.348 3.64a1.704 1.704 0 0 0 1.512 0l7.412-3.671C33.47 21.92 35 22.86 35 24.305v1.372c0 .737-.42 1.411-1.084 1.74l-9.042 4.478a1.97 1.97 0 0 1-1.748 0l-7.044-3.488a.777.777 0 0 0-1.124.69c0 .294.167.561.43.692l7.865 3.895a1.704 1.704 0 0 0 1.503.004l6.172-3.01a.982.982 0 0 1 1.31.444.97.97 0 0 1-.447 1.302l-6.925 3.377a1.97 1.97 0 0 1-1.736-.005l-9.045-4.48A1.944 1.944 0 0 1 13 29.576V27.85c0-1.445 1.53-2.385 2.832-1.74l7.412 3.67a1.704 1.704 0 0 0 1.512 0l7.944-3.934a.613.613 0 1 0-.552-1.098l-7.274 3.602a1.97 1.97 0 0 1-1.748 0l-9.042-4.477A1.944 1.944 0 0 1 13 22.132v-3.2c0-.765.452-1.46 1.155-1.774l10.09-4.505a7.525 7.525 0 0 1 6.404.127c3.662 1.814 3.585 7.03-.128 8.737l-5.679 2.61a1.97 1.97 0 0 1-1.71-.031l-5.369-2.71a.97.97 0 0 1-.43-1.308.982.982 0 0 1 1.317-.427l4.637 2.341a1.704 1.704 0 0 0 1.479.027l4.933-2.267c2.223-1.022 2.269-4.145.076-5.23Z" clip-rule="evenodd" />
    </svg>
    <h1 class="h1 h1-bigger text-center max-600 m-0-auto mt-8 mb-64">Panel de administración de concepto</h1>

    <a href="<?= route('admin.blog'); ?>" class="admin-shortcut m-0-auto mb-100">
        <p>Administrar entradas del blog</p>
    </a>

    <a href="<?= route('admin.user'); ?>" class="admin-shortcut m-0-auto mb-100">
        <p>Administrar listado de usuarios</p>
    </a>

</section>

@endsection