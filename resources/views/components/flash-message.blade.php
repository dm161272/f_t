@if(session()->has('message'))
  <div x-data="{show: true}" x-init="setTimeout(()=>show=false, 3000)"
    x-show="show" class=" h-8 text-2xl text-cyan-200 font-bold">
    {{session('message')}}
  </div>
@endif