
<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    </x-slot>

@if (session('status'))
            <div class=" w-auto on inline-block element pr-16 bg-green-50 text-green-800 text-sm px-4 py-3 rounded relative" role="alert">
                <i class="fas fa-check pr-1"></i>
                <strong class="font-bold">{{ session('status') }} </strong>
            </div>
    @endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('citizen.store') }}" method="POST">
     @csrf
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
  <div class="-mx-3 md:flex mb-6">
    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="name">
        Name *
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
        name="name" id="name" type="text" placeholder="Jane">
      <p class="text-red text-xs italic"></p>
    </div>
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="address">
        address *
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
          name="address"  id="address" type="text" placeholder="115, lekki phase1">
    </div>
  </div>

  <div class="-mx-3 md:flex mb-2">

    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="gender">
        Select Gender *
      </label>
       <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
       id="gender" name="gender">
        <option></option>
        <option value="Male">Male</option>
          <option value="Female">Female</option>

        </select>

    </div>

    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
        Phone Number *
      </label>
      <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
       name="phone" id="phone" type="tel" placeholder="08034887604">
    </div>

    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
      for="ward">
       Select Ward *
      </label>
       <select name="ward" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded"
                id="ward">
        <option></option>
        @foreach ($ward as $wards )
          <option value="{{$wards->id}}"> {{$wards->name}}</option>
        @endforeach
        </select>

    </div>

  </div>
<br>
  <div class="mb-6">
        <button type="submit" class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Send Message</button>
     </div>
</div>
</form>

</x-app-layout>
