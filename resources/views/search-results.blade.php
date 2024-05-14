@if($buku->isEmpty())
                    <p>Tidak ditemukan hasil untuk pencarian ini.</p>
                    @else
                        <ul>
                            @foreach($buku as $item)
                                <li>{{ $item->judul }}</li>
                            @endforeach
                        </ul>
                    @endif