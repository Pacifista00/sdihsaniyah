@component('mail::message')
# Halo {{ $pendaftar->nama_lengkap }}

Pendaftaran Anda berhasil disimpan.
Formulir pendaftaran terlampir dalam bentuk PDF.

@component('mail::button', ['url' => url('/')])
Kunjungi Website
@endcomponent

Terima kasih,<br>
{{ config('app.name') }}
@endcomponent