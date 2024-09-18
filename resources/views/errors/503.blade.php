@section('title', __('Service Unavailable'))
<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight m-bottom" style="margin: ;">
            ERROR 404
        </h2>
    </x-slot>

    <div class="container h-error d-flex justify-content-center align-items-center" >
    <div class="col-5 text-center p-error">
            <div class="border bg-light style-error" style=" ">
                {{ __('Service Une!') }}
            </div>
        </div>
    </div>

</x-app-layout>