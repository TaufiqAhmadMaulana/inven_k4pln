<div class="modal fade" id="addRowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog d-flex justify-content-center">
    <div class="modal-content w-75">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add {{$title}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <form action="{{route('inven-k4.store')}}" method="post" enctype="multipart/form-data">
        @csrf
          <!-- Nkode -->
          <div class="form-outline mb-4">
            <label class="form-label" for="kode">Kode Barang</label>
            <input type="text" id="kode" name="kode" class="form-control" required="" />
          </div>
          <!-- ktegori -->
          <div class="form-outline mb-4">
            <label class="form-label" for="kategori">Kategori</label>
            <select name="category_id" id="category_id" required>
              @if ($categories->isNotEmpty())
                @foreach ($categories as $category )
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              @else
              <option value="">No Categories available</option>              
              @endif
            </select>
          </div>
          <!-- Textarea input -->
          <!-- Checkbox -->
          <div class="form-outline mb-4">
            <label class="form-label" for="nama">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" required="" />
          </div>
          <div class="form-outline mb-4">
            <label class="form-label" for="gambar">Gambar</label>
            <input type="file" id="gambar" name="gambar" class="form-control" required="" />
          </div> 
          <div class="form-outline mb-4">
            <label class="form-label" for="lokasi">Lokasi</label>
            <input type="text" id="lokasi" name="lokasi" class="form-control" required="" />
          </div>
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>