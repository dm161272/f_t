@if(session()->has('message'))
  <div x-data="{show: true}" x-init="setTimeout(()=>show=false, 3000)"
    x-show="show" class="text-2xl text-gray-200 font-bold mt-12">
    <p>{{session('message')}}</p>
  </div>
@endif