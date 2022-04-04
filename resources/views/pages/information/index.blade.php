@extends('layouts.main')

@section('content')
  <div class="p-5 grid gap-10">
    <div class="p-5">
        <div class="flex items-center justify-between mb-4 font-light text-sm">
          <h1 class="text-xl font-semibold">Klinik Hukum</h1>
          <span>
            Ditampilkan {{ $law->firstItem() }} - {{ $law->lastItem() }} dari {{ $law->total() }} Data Klinik Hukum
          </span>  
        </div>

        @if ($law->count())
        <div id="accordion-open" data-accordion="open">
            @foreach ($law as $row)
              <h2 id="accordion-open-heading-{{ $loop->iteration }}">
                <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-left text-gray-500 rounded-t-xl border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-open-body-{{ $loop->iteration }}" aria-expanded="false" aria-controls="accordion-open-body-{{ $loop->iteration }}">
                  <span class="flex items-center"><svg class="mr-2 w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> {{ $row->title }}</span>
                  <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
              </h2>
              <div id="accordion-open-body-{{ $loop->iteration }}" class="hidden" aria-labelledby="accordion-open-heading-{{ $loop->iteration }}">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                  <p class="text-gray-500 dark:text-gray-400">{{ $row->body }}</p>
                </div>
              </div>
            @endforeach
          </div>
        @else
            <div class="px-6 py-4 text-gray-800 dark:text-white whitespace-nowrap">
                Data yang dicari tidak tersedia
            </div>
        @endif

        {{ $law->links('vendor.pagination.custom') }}
    </div>

    <div class="p-5">
      <div class="flex items-center justify-between mb-4 font-light text-sm">
        <h1 class="text-xl font-semibold">FAQ</h1>
        <span>
          Ditampilkan {{ $qna->firstItem() }} - {{ $qna->lastItem() }} dari {{ $qna->total() }} Data QNA
        </span>  
      </div>

      @if ($qna->count())
        <div id="aaccordion-open" data-accordion="open">
            @foreach ($qna as $row)
              <h2 id="aaccordion-open-heading-{{ $loop->iteration }}">
                <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-left text-gray-500 rounded-t-xl border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#aaccordion-open-body-{{ $loop->iteration }}" aria-expanded="false" aria-controls="aaccordion-open-body-{{ $loop->iteration }}">
                  <span class="flex items-center"><svg class="mr-2 w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> {{ $row->title }}</span>
                  <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
              </h2>
              <div id="aaccordion-open-body-{{ $loop->iteration }}" class="hidden" aria-labelledby="aaccordion-open-heading-{{ $loop->iteration }}">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                  <p class="text-gray-500 dark:text-gray-400">{{ $row->body }}</p>
                </div>
              </div>
            @endforeach
          </div>
        @else
            <div class="px-6 py-4 text-gray-800 dark:text-white whitespace-nowrap">
                Data yang dicari tidak tersedia
            </div>
        @endif

        {{ $qna->links('vendor.pagination.custom') }}
    </div>
  </div>
@endsection