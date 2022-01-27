<x-app-layout>
    <div class="max-w-7xl mx-auto pt-8 px-4 sm:px-6 lg:px-8">
        <!-- Domain -->

        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="md:h-12 w-0 md:group-hover:w-12 duration-500" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M11 17l-5-5m0 0l5-5m-5 5h12"/>
            </svg>
            <!--- Split line -->
            <div class="my-2 self-stretch border-purple-500 group-hover:border-l-4 duration-100"></div>
            <form action="{{$practice->id}}/title" method="POST" class="grow group">
            <input type="text" class="form-control" id="title" value="
                {{$practice->title}}" name="title" >
                @csrf
            <button type="submit" class="py-2 px-4 bg-purple-500 hover:bg-purple-600 rounded shadow shadow-purple-300 text-white duration-300">
                Editer</button>
            </form>
        </div>
    </div>
</x-app-layout>
