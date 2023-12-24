@extends('dashboard.layouts.main')


@section('container')
@include('dashboard.layouts.breadcump')






{{-- modal create materi --}}

<div id="defaultModalCreateMateri" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Materi
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModalCreateMateri">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="/materi" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$data->id}}">
                <input type="hidden" name="kursus_id" value="{{$data->id}}">
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                        <input value="" type="text" name="judul" id="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Judul Materi" required="">
                    </div>
                    <div>
                        <label for="link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link</label>
                        <input value="" type="text" name="link_materi" id="link" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="link kursus" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                        <textarea name="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tulis deskripsi kursus"></textarea>
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Tambah Materi
                </button>
            </form>
        </div>
    </div>
</div>



    <div>
        <div class="flex items-center justify-between">
            <h1 class="text-3xl font-semibold">{{$data->judul}}</h1>
            <form action="kursus" method="POST"></form>
        </div>
        <p class="text-gray-600 my-3">{{$data->deskripsi}}</p>

        <div class="flex items-center gap-3 hidden">
            <form action="kursus" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{$data->id}}">
                <button onclick="confirm('anda yakin ingin menghapus item ini??')" class="py-2 px-3 bg-red-600 text-sm hover:bg-red-700 rounded-md text-white">Hapus Kursus</button>
            </form>
            <button data-modal-toggle="defaultModalUpdate" data-modal-target="defaultModalUpdate" class="py-2 px-3 bg-blue-600 text-sm hover:bg-blue-700 rounded-md text-white">Edit Kursus</button>
        </div>

        <hr class="my-8">

        <h3 class="text-2xl font-semibold">Materi</h3>
        <button data-modal-target="defaultModalCreateMateri" data-modal-toggle="defaultModalCreateMateri" class="hidden py-2 px-3 bg-blue-600 hover:bg-blue-700 rounded-md text-white my-3 text-sm">Tambah Materi</button>
        <div class="grid 2xl:grid-cols-5 gap-3">
            @foreach ($materi as $item)
                <a href="/detail-materi?id={{$item->id}}" class="p-4 rounded-md shadow-md bg-white hover:bg-gray-50">
                    <h4 class="text-2xl font-semibold mb-3">{{$item->judul}}</h4>
                    <p class="text-gray-600">{{$item->deskripsi}}</p>
                </a>
            @endforeach
        </div>
    </div>
@endsection
