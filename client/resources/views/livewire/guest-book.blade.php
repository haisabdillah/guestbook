<div>
    <div class="flex flex-col xl:flex-row gap-4">
      {{-- input guest book --}}
      <div class="xl:w-4/12">
        <h1 class="text-gray-400  text-2xl mb-2">Input Guest Book</h1>
        <form wire:submit.prevent="create" method="POST" enctype="multipart/form-data">
          <div class="flex flex-col mt-3">
              <label for="Email" class="mb-2">Email</label>
              <input type="email" wire:model="email" class="px-1 py-2 ring-1 ring-purple-500  focus:outline-none focus:ring-2" name="" id="" placeholder="input email" required/>
            </div>
            <div class="flex flex-col mt-3">
              <label for="Email" class="mb-2">Comment</label>
              <textarea wire:model="comment" class="px-1 py-2 ring-purple-500 ring-1 focus:outline-none focus:ring-2" name="" id="" placeholder="input Comment" required></textarea>
            </div>
            <button type="submit" class="bg-purple-800 px-4 py-1 rounded-full mt-3 text-white">Simpan</button>
      </form>
      </div>
       {{-- data guest book --}}
        <div class="xl:w-8/12">
            <h1 class="text-gray-400  text-2xl mb-2">Data Guest Book</h1>
            <table class="table-fixed w-full break-all divide-y-2 bg-white">
                <thead>
                  <tr>
                    <th class="w-10 py-2">No</th>
                    <th class="w-1/3">Email</th>
                    <th>Comment</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($guestBookList  as $key => $item)
                    <tr>
                      <td class="text-center py-2">{{$loop->iteration}}</td>
                      <td class="text-center">{{$item['email']}}</td>
                      <td>{{$item['comment']}}</td>
                      <td class="text-center"><button type="button" wire:click="delete({{$item['id']}})" class="bg-red-800 px-3 rounded-full text-white">Hapus</button></td>
                    </tr> 
                    @empty
                        <tr>
                          <td colspan="4" class="text-center">Maaf Data Tidak Ada</td>
                        </tr>
                    @endforelse
                </tbody>
              </table>
        </div>
    </div>
    
</div>
