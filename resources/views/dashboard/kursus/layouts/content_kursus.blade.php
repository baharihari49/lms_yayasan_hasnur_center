<div>
    <div class="grid grid-cols-4 gap-3">
        @foreach ($data as $item)
            <a href="detail-kursus?id={{$item->id}}" class="p-4 rounded-md bg-white shadow-md hover:bg-gray-50 cursor-pointer">
                <h4 class="mb-4 text-2xl font-bold">{{$item->judul}}</h4>
                <p class="text-base text-gray-600">{{$item->deskripsi}}</p>
            </a>
        @endforeach
    </div>
</div>
