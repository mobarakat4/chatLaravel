<div >

    <div  class="">
      <form wire:submit="createUser" class="flex flex-col p-4 allign-start mx-auto hover:bg-red-600 ease-in duration-300 space-y-4">
        <input class='rounded p-4 border m-auto w-96 shadow border-gray-100 ' wire:model='name' type="text" placeholder="name">
        <input class='rounded p-4 border m-auto w-96 shadow border-gray-100 ' wire:model='email' type="email" placeholder="email">
        <input class='rounded p-4 border m-auto w-96 shadow border-gray-100  ' wire:model='password' type="password" placeholder="password">
        <button class="my-4 bg-sky-400 rounded-lg mx-auto w-200 px-8 py-2 font-bold text-lg ">Create</button>
      </form>
    
      <div>
        <ul>
            @foreach ($users as $user)
                <p>{{ $user->name }}</p>
            @endforeach
        </ul>
      </div>
    </div>
    <div>
        <form wire:submit='arrr'>
            <input wire:model="input" type="text" name="" id="">
            <button>New</button>
        </form>
        <div>
            @foreach ($arr as $ar)
            <div>{{ $ar }}</div> 
            @endforeach
        </div>
    </div>
</div>
