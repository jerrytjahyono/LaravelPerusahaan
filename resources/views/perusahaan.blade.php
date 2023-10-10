<x-frame>
    @if (!$dataPerusahaan)
        <p>perusahaan belom ada</p>
    @else
        @foreach ($dataPerusahaan as $index => $perusahaan)
            <p>{{$perusahaan->nama}}</p>
            <p>{{$perusahaan->kota}}</p>
            <p>{{$perusahaan->alamat}}</p>
        @endforeach
    @endif
</x-frame>