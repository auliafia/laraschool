@extends('layouts.frontend.app',[
    'title' => 'List Artikel',
])
@section('content')
<!-- Blog Area Start -->
<section class="blog-area section-padding-100-0 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>List Artikel</h3>
                    <p>Pusat pendidikan terpadu Yayasan Baitul Hazin di Dukuh Slempung, Dukuhseti, Pati, Jawa Tengah, menjadi contoh inspiratif bagaimana sebuah visi besar dapat terwujud meski dimulai dari tempat yang terpencil dan sederhana. Pembangunan yayasan ini dipelopori oleh KH Ahmad Khoirun Nasihin (AKN) Marzuqi, yang sejak tahun 1990 sudah bercita-cita membangun pusat pendidikan di wilayah tersebut. Pada saat itu, wilayah Dukuh Slempung hanyalah kawasan tambak dan semak belukar, sehingga banyak orang, termasuk sesama ulama seperti KH Ahmad Thoha Ismail, meragukan rencana tersebut.

Namun, keyakinan Kiai Nasihin tidak goyah. Melalui proses istikharah, ia mendapatkan petunjuk bahwa kompleks pendidikan tersebut harus dibangun di Dukuh Slempung, meskipun ada opsi lain di Kabupaten Pati dan Rembang. Pada tahun 2000, pembangunan dimulai, diawali dengan pondok pesantren dan dilanjutkan dengan masjid, SMP, dan SMK terpadu. Akhirnya, pada tahun 2004, Yayasan Baitul Hazin resmi dibuka, dan menarik siswa serta santri dari berbagai daerah di Indonesia.

Selama proses pembangunan, Kiai Nasihin harus menghadapi berbagai tantangan dan gangguan, termasuk tuduhan penggunaan sihir. Namun, semua itu dihadapi dengan kesabaran dan kerja keras. KH Ahmad Thoha Ismail, yang menyaksikan langsung perjuangan Kiai Nasihin sejak muda, menegaskan bahwa keberhasilan ini bukanlah hasil instan, melainkan buah dari perencanaan matang dan dedikasi yang luar biasa.

Kini, Yayasan Baitul Hazin berdiri megah dan menjadi pusat pendidikan terpadu yang memberikan manfaat luas bagi masyarakat, membuktikan bahwa tekad dan keyakinan mampu mengubah tantangan menjadi keberhasilan yang luar biasa.</p>
                </div>
            </div>
        </div>

        <div class="row">
            
            @foreach($artikel as $art)
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="card-header">
                            {{ $art->judul }}

                            <span class="badge badge-danger float-right">by : {{ $art->user->name }}</span>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('uploads/img/artikel/'.$art->thumbnail) }}" width="100%" style="height: 300px; object-fit: cover; object-position: center;">

                            <div class="card-text mt-3">
                                {!! Str::limit($art->deskripsi) !!}
                            </div>

                            <a href="{{ route('artikel.show',$art->slug) }}" class="btn btn-primary btn-sm">Selengkapnya</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-lg pagination pagination-center justify-content-center">
                {{ $artikel->appends(Request::all())->links() }}
            </div>
        </div>
    </div>
</section>
@stop